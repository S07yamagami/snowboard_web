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

    Route::get('/style_list', function () {
        return view('style_list');
    })->name('style_list');
    
    Route::get('/style_register', function () {
        return view('style_register');
    })->name('style_register');

    Route::get('/style_edit', function () {
        return view('style_edit');
    })->name('style_edit');

    Route::get('/item_list', function () {
        return view('item_list');
    })->name('item_list');
    
    Route::get('/item_register', function () {
        return view('item_register');
    })->name('item_register');

    Route::get('/item_edit', function () {
        return view('item_edit');
    })->name('item_edit');

    Route::get('/top_register', function () {
        return view('top_register');
    })->name('top_register');

    Route::get('/common_register', function () {
        return view('common_register');
    })->name('common_register');


    //プレビュー
    //--デプロイ
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
