<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthorisationController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\MainPageController;
use App\Http\Controllers\NewsController;



Route::group(['prefix' => 'admin', 'as' => 'admin.'], function(){
 //Route::resource('/', AuthorisationController::class);
 Route::get('/', [AuthorisationController::class, 'index']);
 //Route::resource('/news', AdminNewsController::class);
 Route::get('/news', [AdminNewsController::class, 'index']);
});

Route::get('/', [MainPageController::class, 'index']);
# < Возможно сократить?
Route::get('/news', [NewsController::class, 'getAllNews'])
 ->name('news.allNews'); //Присвоение имени роутеру по которому в дальнейшем можно к нему обращаться
Route::get('/news/{id}', [NewsController::class, 'getOneNews'])
 ->where('id', '\d+')
 ->name('news.oneNews');
Route::get('/news/sections', [NewsController::class, 'getSections'])
 ->name('news.sections');
Route::get('/news/section/{id}', [NewsController::class, 'getSection'])
 ->where('id', '\d+')
 ->name('news.section');
# > Возможно сократить?
