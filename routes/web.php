<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthorisationController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\MainPageController;
use App\Http\Controllers\NewsController;



Route::group(['prefix' => 'a', 'as' => 'admin.'], function(){
 //Route::resource('/', AuthorisationController::class);
 Route::get('/', [AuthorisationController::class, '__invoke']);
 //Route::resource('/news', AdminNewsController::class);
 Route::get('/news', [AdminNewsController::class, 'getAllNews'])
  ->name('news.allNews'); //Присвоение имени роутеру по которому в дальнейшем можно к нему обращаться
 Route::get('/news/new', [AdminNewsController::class, 'editNews'])
  ->name('news.createNews');
 Route::get('/news/{id}', [AdminNewsController::class, 'editNews'])
  ->where('id', '\d+')
  ->name('news.editNews');
 Route::get('/news/sections', [AdminNewsController::class, 'getSections'])
  ->name('news.sections');
 Route::get('/news/section/{id}', [AdminNewsController::class, 'editSection'])
  ->where('id', '\d+')
  ->name('news.editSection');
 Route::post('/news/store', [AdminNewsController::class, 'newsStore'])
  ->name('news.store');
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
