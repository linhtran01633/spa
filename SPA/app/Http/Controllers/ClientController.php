<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class ClientController extends Controller
{
    //

    public function appointment()
    {
        try {
            $staffList = [];
            // Bước 1: Lấy token (từ cache hoặc đăng nhập mới)
            $token = $this->getToken();

            // Bước 4: Gọi API lấy danh sách nhân viên
            $fetchStaffList = collect($this->fetchStaffList($token));
            if($fetchStaffList && $fetchStaffList['data']['staff_list']) $staffList = $fetchStaffList['data']['staff_list'];

            return view('layout_client.appointment', compact('staffList', 'token'));
        } catch (Exception $e) {
            $token = '';
            $staffList = [];
            Log::info($e->getMessage());
            return view('layout_client.appointment', compact('staffList', 'token'));
        }
    }

    private function getToken()
    {
        // Bước 1: Kiểm tra token trong cache
        $token = cache('user_token');

        if (!$token) {
            // Bước 2: Đăng nhập để lấy token mới
            $token = $this->loginAndGetToken();

            // Bước 3: Lưu token vào cache
            cache(['user_token' => $token], now()->addHours(2));
        }

        return $token;
    }

    private function loginAndGetToken()
    {
        $url = "https://daruma.idspa.vn/api/merchant/login/login";

        $data = [
            'email' => 'Quanly1@gmail.com', // Đảm bảo email có giá trị và đúng định dạng
            'password' => 'kokorospa123'   // Đảm bảo password có giá trị
        ];


        $response = Http::withHeaders([
            'IDSPA_KEY' => 'idspa_key_api',
            'Content-Type' => 'application/json'

        ])->post($url, $data);

        // Debug phản hồi từ API
        Log::info('Phản hồi từ API:', [
            'status' => $response->status(),
            'body' => $response->body(),
            'headers' => $response->headers()
        ]);

        if ($response->successful()) {
            $responseData = $response->json();
            Log::info($responseData);
            if ($responseData['status'] == 'ok') {
                return $responseData['user_token'];
            } else {
                throw new Exception("Đăng nhập thất bại: " . $responseData['message']);
            }
        } else {
            throw new Exception("Yêu cầu đăng nhập thất bại!");
        }
    }

    private function fetchStaffList($token)
    {
        $url = "https://daruma.idspa.vn/api/manager/staff/list?branch_id=2";

        $response = Http::withHeaders([
            'IDSPA_KEY' => 'idspa_key_api',
            'USER-TOKEN' => $token,
            'Content-Type' => 'application/x-www-form-urlencoded'
        ])->get($url);

        if ($response->successful()) {
            return $response->json();
        } elseif ($response->status() === 401) {
            // Bước 5: Xử lý token hết hạn
            throw new Exception("Unauthorized");
        } else {
            throw new Exception("Yêu cầu lấy danh sách nhân viên thất bại!");
        }
    }
}
