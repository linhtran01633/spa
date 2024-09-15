<?php

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
