<?php

use App\Http\Controllers\AdminController;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('locale/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'ja', 'vn'])) {
        Session::put('locale', $locale);
    }
    return redirect()->back();
});

Route::get('/top', function () {
    return view('maintenance');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/', function () {
    return view('top');
});

Route::get('/test', function () {
    return view('layout_client.home');
});


Route::get('/traditional-massage', function () {
    return view('layout_client.traditional_massage');
});

Route::get('/acupressure-massage', function () {
    return view('layout_client.acupressure_massage');
});

Route::get('/thai-massage', function () {
    return view('layout_client.thai_massage');
});


Route::get('/neck-and-shoulder-therapy', function () {
    return view('layout_client.neck_and_shoulder_therapy');
});

Route::get('/foot-massage', function () {
    return view('layout_client.foot_massage');
});

Route::get('/healthy-shampoo', function () {
    return view('layout_client.healthy_shampoo');
});

Route::get('/facial', function () {
    return view('layout_client.cacial');
});

Route::get('/other-services', function () {
    return view('layout_client.other_services');
});

Route::get('/vip-room', function () {
    return view('layout_client.vip_room');
});

Route::get('/combo', function () {
    return view('layout_client.combo');
});


Route::get('/recruitment', function () {
    return view('layout_client.recruitment');
});

Route::get('/access', function () {
    return view('layout_client.access');
});

Route::get('/appointment', function () {
    $users = User::where('status', 0)->get();
    return view('layout_client.appointment', compact('users'));
});

Route::get('/booking', function () {
    return view('layout_client.appointment');
});

Route::post('/booking', [AdminController::class, 'submitBooking'])->name('submit-booking');
Route::post('/checkTimeFrame', [AdminController::class, 'checkTimeFrame'])->name('check-time-frame');


Route::prefix('dashboard/')->group(function () {
    Route::get('booking', [AdminController::class, 'booking'])->name('admin.booking');
    Route::post('save_booking', [AdminController::class, 'submitBooking'])->name('admin.booking.save');
    Route::post('confirmed_booking', [AdminController::class, 'confirmedBooking'])->name('admin.booking.confirmed');


    Route::get('user', [AdminController::class, 'user'])->name('admin.user');
    Route::post('save_user', [AdminController::class, 'saveUser'])->name('admin.user.save');
    Route::post('edit_user', [AdminController::class, 'editUser'])->name('admin.user.edit');
    Route::post('delete_user', [AdminController::class, 'deleteUser'])->name('admin.user.delete');

    Route::get('user-ajax', [AdminController::class, 'userAjax'])->name('admin.user.ajax');

});

