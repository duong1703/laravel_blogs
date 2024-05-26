<?php

use App\Http\Controllers\admin\BlogController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\admin\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


//Login_admin
Route::controller(LoginController::class)->group(function() {
    Route::get('views/admin/login', 'index')->name('login.index');
    Route::post('/loginPost', 'loginPost')->name('loginPost');
    Route::post('/logout', 'logout')->name('logout');
});

//Home_admin
Route::controller(HomeController::class)->group(function(){
    Route::get('views/admin/pages/home', 'index')->name('home.index');
});

//Post-admin
Route::controller(BlogController::class)->group(function(){
    Route::get('views/admin/pages/post/list', 'list');
    Route::get('views/admin/pages/post/add', 'add');
});

//Cate_admin
Route::controller(CategoryController::class)->group(function(){
    Route::get('views/admin/pages/category/list', 'list');
    Route::get('views/admin/pages/category/add', 'add');
    Route::post('/CategoryPost', 'create')->name('CategoryPost');
    Route::delete('/CategoryDelete/{id}', 'delete')->name('CategoryDelete');
});