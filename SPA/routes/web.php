<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
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
    if (in_array($locale, ['en', 'ja', 'vn']))Session::put('locale', $locale);
    return redirect()->back();
});

Route::get('/', function () {return view('top');});

Route::get('/test', function () {return view('layout_client.home');});
Route::get('/access', function () {return view('layout_client.access');});
Route::get('/appointment', [ClientController::class, 'appointment'])->name('appointment');

Route::get('/services/{id}', [ClientController::class, 'services'])->name('services');
