<?php

use App\Http\Controllers\everythingcontroller;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
route::get('contact',[everythingcontroller::class,'showcontact'])->name('user.contact');
route::post('contact/save',[everythingcontroller::class,'showcontactsave'])->name('user.contact.save');
route::get('home',[everythingcontroller::class,'home'])->name('user.home');
route::get('job',[everythingcontroller::class,'job'])->name('user.job');
route::get('event',[everythingcontroller::class,'event'])->name('user.event');
route::get('service',[everythingcontroller::class,'service'])->name('user.service');
