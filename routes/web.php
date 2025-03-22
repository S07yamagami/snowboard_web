<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TopController;
use App\Http\Controllers\StyleController;
use App\Http\Controllers\PreviewController;
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

############

Route::get('{user_id}/user_top', [PreviewController::class, 'user_top'])->name('user_top');

Route::get('{user_id}/user_style', function () {
    return view('user_style');
})->name('user_style');

Route::get('{user_id}/user_item', function () {
    return view('user_item');
})->name('user_item');

Route::get('{user_id}/user_compare', function () {
    return view('user_compare');
})->name('user_compare');

Route::get('{user_id}/user_result', function () {
    return view('user_result');
})->name('user_result');

//ユーザーidのトップ
// ユーザーIDのスタイル
// ユーザーIDの商品
// --ユーザーidの比較
// --ユーザーidの結果

Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/', function(){
        return redirect()->route('login');
    });

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::get('/top', [TopController::class, 'create'])->name('top_register');
    Route::post('/top', [TopController::class, 'update']);

    Route::prefix('style')->group(function(){
        Route::get('/', [StyleController::class, 'index'])->name('style_list');
        Route::get('/register', [StyleController::class, 'create'])->name('style_register');
        Route::post('/register', [StyleController::class, 'store']);
        //Route::delete('/styles/{id}', [StyleController::class, 'destroy'])->name('style.destroy');
    });
    

    Route::get('/style/edit', function () {
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

    Route::get('/preview', function () {
        return view('preview');
    })->name('preview');

    

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
