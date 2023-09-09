<?php

use App\Http\Controllers\ComingSoonController;
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

Route::get('', [ComingSoonController::class, 'index'])->name('coming-soon.index');
Route::get('about', [ComingSoonController::class, 'about'])->name('coming-soon.about');
Route::get('contact', [ComingSoonController::class, 'contact'])->name('coming-soon.contact');
