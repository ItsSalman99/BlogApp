<?php

use App\Http\Controllers\GoogleSocialiteController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [PostController::class, 'index']);
Route::post('/posts', [PostController::class, 'search'])->name('search');
Route::get('/create', [PostController::class, 'create'])->middleware('isAdmin');

Route::get('/readNotifications', function()
{
    Auth::user()->unreadNotifications->markAsRead();

    return redirect()->back();
});

Route::get('auth/google', [GoogleSocialiteController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [GoogleSocialiteController::class, 'handleGoogleCallback']);

Route::get('/dashboard', [PostController::class,'UserPosts'])->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
