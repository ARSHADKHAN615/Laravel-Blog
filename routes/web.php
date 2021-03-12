<?php

use App\Http\Controllers\admin\contact;
use App\Http\Controllers\admin\page;
use App\Http\Controllers\admin\post;
use App\Http\Controllers\front\post as FrontPost;
use Illuminate\Support\Facades\Route;



Route::get('/', [FrontPost::class, "home"]);
Route::get('/post/{id}', [FrontPost::class, "show"]);

Route::get('/page/{id}', [FrontPost::class, "pages"]);


Route::get('/admin/logout', function () {
    session()->forget("BLOG_USER_ID");
    return redirect("admin/login");
});


Route::group(['middleware' => ['admin_Auth']], function () {
    Route::get('/admin/post/list', 'App\Http\Controllers\admin\post@listing');
    Route::view('/admin/post/add', 'admin/post/add');
    Route::get('/admin/post/delete/{id}', [post::class, "delete"]);
    Route::get('/admin/post/edit/{id}', [post::class, "edit"]);
    Route::post('/admin/post/update/{id}', [post::class, "update"]);



    Route::view('/admin/page/add', 'admin/page/add');
    Route::get('/admin/page/list', 'App\Http\Controllers\admin\page@listing');
    Route::get('/admin/page/delete/{id}', [page::class, "delete"]);
    Route::get('/admin/page/edit/{id}', [page::class, "edit"]);
    Route::post('/admin/page/update/{id}', [page::class, "update"]);



    Route::get('/admin/contact/list', [contact::class, "listing"]);
});

Route::view('/admin/login', 'admin/login');
Route::post('/admin/post/submit',  [post::class, "submit"]);
Route::post('/admin/page/submit',  [page::class, "submit"]);
Route::post('/admin/login_submit', 'App\Http\Controllers\admin_auth@login_submit');
