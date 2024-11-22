<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SellController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\MyPageController;

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

// トップページ（おすすめ商品一覧）
Route::get('/', [HomeController::class, 'index'])->name('home');

// 会員登録ページ（登録フォームの表示）
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');

// 会員登録処理（フォーム送信時の登録アクション）
Route::post('/register', [AuthController::class, 'register']);

// ログインページ（ログインフォームの表示）
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');

// ログイン処理（フォーム送信時のログインアクション）
Route::post('/login', [AuthController::class, 'login']);

// 出品ページ（出品フォームの表示）
Route::get('/sell', [SellController::class, 'showSellForm'])->name('sell');

// 出品処理（出品フォーム送信時の出品アクション）
Route::post('/sell', [SellController::class, 'sellItem']);

// 購入ページ（特定商品の購入フォームの表示）
Route::get('/purchase/{item_id}', [PurchaseController::class, 'showPurchaseForm'])->name('purchase');

// 購入処理（購入フォーム送信時の購入アクション）
Route::post('/purchase/{item_id}', [PurchaseController::class, 'purchaseItem']);

// 住所変更ページ（購入時の住所編集フォームの表示）
Route::get('/purchase/address/{item_id}', [PurchaseController::class, 'editAddress'])->name('purchase.address');

// 住所変更処理（住所編集フォーム送信時の更新アクション）
Route::put('/purchase/address/{item_id}', [PurchaseController::class, 'updateAddress']);

// 商品詳細ページ（特定商品の詳細情報の表示）
Route::get('/item/{item_id}', [ItemController::class, 'show'])->name('item.show');

// マイページ（ユーザーの個人情報や購入履歴などの表示）
Route::get('/mypage', [MyPageController::class, 'index'])->name('mypage');

// プロフィール編集画面（ユーザーのプロフィール編集フォームの表示）
Route::get('/mypage/profile', [MyPageController::class, 'editProfile'])->name('mypage.profile');

// プロフィール更新処理（プロフィール編集フォーム送信時の更新アクション）
Route::put('/mypage/profile', [MyPageController::class, 'updateProfile']);



/* ミドルウェア実装時の

Route::middleware(['auth'])->group(function () {
    Route::get('/sell', [SellController::class, 'showSellForm'])->name('sell');
    Route::post('/sell', [SellController::class, 'sellItem']);
    Route::get('/mypage', [MyPageController::class, 'index'])->name('mypage');
    Route::get('/mypage/profile', [MyPageController::class, 'editProfile'])->name('mypage.profile');
    Route::put('/mypage/profile', [MyPageController::class, 'updateProfile']);
});

*/
