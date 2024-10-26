<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\Booking;
use App\Models\User;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Yajra\DataTables\Facades\DataTables;

class AdminController extends Controller
{
    //

    public function booking(Request $request)
    {
        $service = [
            "1" => "Traditional Japanese Massage",
            "2" => "Shiatsu Massage",
            "3" => "Thai massage ",
            "4" => "Neck and shoulder treatment",
            "5" => "Foot Massage",
            "6" => "Head Shampoo Relaxing Massage",
            "7" => "Facial",
            "8" => "Other services",
            "9" => "Vip room",
            "10" => "Combo",
        ];

        if($request->ajax()) {
            $table_data = Booking::with('user')->select('*')->orderBy('status', 'asc')->get();


            $table_data = $table_data->map(function ($row) use ($service) {
                return [
                    'id' => $row->id,
                    'date' => $row->date,
                    'phone' => $row->phone,
                    'email' => $row->email,
                    'status' => $row->status,
                    'full_name' => $row->full_name,
                    'service_name' => $service[$row->service],
                    'user_name' => $row->user ? $row->user->name : '',
                    'time_custom' => Carbon::parse($row->time)->format('H:i'),
                ];
            });

            return response()->json(@$table_data);
        }
        $page_current = 'booking';

        return view('admin.booking', compact('page_current'));
    }


    public function submitBooking(Request $request)
    {
        Log::info('Submit Booking');
        Log::info($request->all());
        try {
            DB::transaction(function () use($request) {

                $request->validate([
                    'full_name' => 'required|string',
                    'phone' => 'required|string',
                    // 'email' => 'required|email',
                    'service' => 'required|string',
                    'date' => 'required', // Xác thực định dạng ngày
                    'time' => 'required|date_format:H:i', // Xác thực định dạng giờ
                    'user_id' => 'nullable',
                ]);
                Log::info('123');
                $date = Carbon::createFromFormat('Y-m-d', $request->date)->format('Y-m-d');
                Log::info($date);

                $booking = new Booking();
                $data = $request->only($booking->getFillable());
                $data['date'] = $date;
                $booking->fill($data)->save();

            });
        } catch (Exception $e) {
            Log::info($e->getMessage());
            return response()->json(['success' => false, 'message' => 'registration failed']);
        }

        return response()->json(['success' => true, 'message' => 'Registration successful']);
    }

    public function confirmedBooking(Request $request)
    {
        Log::info("message");
        Log::info($request->all());
        try {
            DB::transaction(function () use($request) {
                $booking = Booking::find($request->id);
                $booking->status = 1;
                $booking->save();
            });
        } catch (Exception $e) {
            Log::info($e->getMessage());
            return response()->json(['success' => false, 'message' => __('save_false')]);
        }

        return response()->json(['success' => true, 'message' => __('save_success')]);
    }

    public function checkTimeFrame(Request $request)
    {
        $date_to_check = $request->date;  // Ngày được chọn từ form
        $employee_id = $request->user_id; // user được chọn từ form

        $max_users_per_slot = User::where('status', 0)->count(); // Giới hạn số người đăng ký tối đa

        $time_slots = [
            '09:00', '09:30', '10:00', '10:30', '11:00', '11:30', '12:00', '12:30',
            '13:00', '13:30', '14:00', '14:30', '15:00', '15:30', '16:00', '16:30',
            '17:00', '17:30', '18:00', '18:30', '19:00'
        ];

        // Lấy ngày và giờ hiện tại
        $today = Carbon::now()->format('Y-m-d');
        $current_time = Carbon::now()->format('H:i');

        // Kiểm tra nếu ngày được nhập là ngày hôm nay
        $is_today = Carbon::parse($date_to_check)->isToday();

        // Khai báo mảng khung giờ đã đầy
        $fully_booked_slots = [];

        // Kiểm tra nếu ngày đã qua
        if (Carbon::parse($date_to_check)->lt(Carbon::now())) {
            // Ngày trong quá khứ: tất cả các khung giờ đều được coi là đầy
            $available_slots = [];  // Không có khung giờ trống
        } else {
            // Nếu là ngày hôm nay, kiểm tra thời gian hiện tại
            if ($is_today) {
                // Đánh dấu tất cả các khung giờ là đã đầy
                foreach ($time_slots as $slot) {
                    if ($slot < $current_time) {
                        $fully_booked_slots[] = $slot;  // Đánh dấu khung giờ đã đầy
                    }
                }
            }

            // Kiểm tra booking trong cơ sở dữ liệu cho ngày cụ thể
            $bookings = DB::table('bookings')
                            ->where('date', $date_to_check)
                            ->select('time', DB::raw('COUNT(id) as total_bookings'))
                            ->groupBy('time')
                            ->get();

            // Chuyển dữ liệu booking thành mảng để xử lý
            $booked_slots = [];
            foreach ($bookings as $booking) {
                $booked_slots[Carbon::parse($booking->time)->format('H:i')] = $booking->total_bookings;
            }

            // Kiểm tra nếu user đã đặt hẹn vào giờ nào
            $user_bookings = [];
            if ($employee_id) {
                $user_bookings = DB::table('bookings')
                                    ->where('date', $date_to_check)
                                    ->where('user_id', $employee_id)
                                    ->pluck('time')
                                    ->map(function ($time) {
                                        return Carbon::parse($time)->format('H:i');
                                    })->toArray();
            }

            // Kiểm tra khung giờ nào còn trống
            $available_slots = [];
            foreach ($time_slots as $slot) {
                // Nếu khung giờ đã đầy (vượt quá số lượng người cho phép)
                if (isset($booked_slots[$slot]) && $booked_slots[$slot] >= $max_users_per_slot) {
                    continue;  // Bỏ qua khung giờ đã đầy
                }

                // Nếu user đã đặt hẹn ở khung giờ đó, bỏ qua
                if (in_array($slot, $user_bookings)) {
                    continue;  // Bỏ qua khung giờ user đã đặt
                }

                // Nếu là ngày hôm nay và khung giờ đã đầy, bỏ qua
                if ($is_today && in_array($slot, $fully_booked_slots)) {
                    continue;  // Bỏ qua khung giờ đã đầy
                }

                // Thêm khung giờ vào danh sách các khung giờ còn trống
                $available_slots[] = $slot;
            }
        }

        // Trả về danh sách khung giờ trống (nếu có)
        return $available_slots;

        Log::info($available_slots);
        return response()->json(@$available_slots);
    }

    public function user(Request $request)
    {
        $page_current = 'user';

        return view('admin.user', compact('page_current'));
    }

    public function userAjax(Request $request) {
        $table_data = User::select('*')->where('status', 0)->get();

        return response()->json(@$table_data);
    }

    public function saveUser(UserRequest $request)
    {
        try {
            DB::transaction(function () use($request) {

                if($request->id) {
                    $user = User::find($request->id);
                    $data = $request->only($user->getFillable());
                    if($request->password == null || $user->password == "") unset($data['password']);
                    $user->fill($data)->save();
                } else {
                    $user = new User();
                    $data = $request->only($user->getFillable());
                    $data['password'] = Hash::make($request->password);
                    $user->fill($data)->save();
                }
            });
        } catch (Exception $e) {
            Log::info($e->getMessage());
            return response()->json(['success' => false, 'message' => 'registration failed']);
        }
        return response()->json(['success' => true, 'message' => 'Registration successful']);
    }


    public function editUser(Request $request)
    {
        $user = User::find($request->id);
        return response()->json(@$user);
    }


    public function deleteUser(Request $request)
    {
        $user = User::find($request->id);
        $user->status = 1;
        $user->save();
        return response()->json(@$user);
    }
}
