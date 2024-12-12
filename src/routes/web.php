<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\SellController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TopController;
use App\Http\Controllers\MypageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// 会員登録ページ（登録フォームの表示）
Route::get('/register', [AuthController::class, 'register']);

// ログインページ（ログインフォームの表示）
Route::get('/login', [AuthController::class, 'login']);

// 住所変更ページ（住所の変更フォームの表示）
Route::get('/purchase/address', [AddressController::class, 'address']);

// 出品ページ（出品フォームの表示）
Route::get('sell', [SellController::class, 'sell'])->name('sell');

// プロフィール設定ページ（プロフィール設定フォームの表示）
Route::get('/mypage/profile', [ProfileController::class, 'profile']);

// トップ（ログイン前）ページ（トップページの表示）
Route::get('top', [TopController::class, 'top']);

// マイページ（マイページの表示）
Route::get('mypage/mypage', [MypageController::class, 'mypage']);