<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/image', function () {
    return view('image');
})->name('image');

//ユーザーidのトップ
// ユーザーIDのスタイル
// ユーザーIDの商品
// --ユーザーidの比較
// --ユーザーidの結果


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::get('/preview', function () {
        return view('preview');
    })->name('preview');
    
    //プレビュー
    //デプロイ
    //スタイルの一覧表示
    // スタイルの登録ページ
    // スタイルの編集ページ
    // 商品の一覧
    // 商品の登録
    // 商品の編集
    // トップページの登録
    //共通情報登録



    
});

require __DIR__.'/auth.php';
