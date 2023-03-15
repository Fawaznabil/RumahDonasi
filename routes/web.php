<?php

// use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
// use App\Events\MessageCreated;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\VerificationController;
// use Illuminate\Support\Facades\Auth;

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

    return view('index');
});

Route::get('/detailDonasi', function () {

    return view('detailDonasi');
});

Route::get('/about', function () {

    return view('about');
});

Route::get('/contact', function () {

    return view('contact');
});

Route::get('/campaign-bencana', function () {

    return view('campaign-bencana');
});

Route::get('/campaign-pendidikan', function () {

    return view('campaign-pendidikan');
});

Route::get('/blogs', function () {

    return view('blogs');
});

Route::get('/sign-in', [AuthController::class, 'get_login'])->name('sign-in');

Route::get('/sign-up', [AuthController::class, 'get_register'])->name('sign-up');

Route::post('/sign-up', [AuthController::class, 'post_register']);
Route::post('/sign-in', [AuthController::class, 'post_login']);

Route::get('/email/verify/need-verification', [VerificationController::class, 'notice'])->middleware('auth')->name('verification.notice');
Route::get('/email/verify/{id}/{hash}', [VerificationController::class, 'verify'])->middleware(['auth', 'signed'])->name('verification.verify');
Route::get('/email/verify/resend-verification', [VerificationController::class, 'send'])->middleware(['auth','throttle:6,1'])->name('verification.send');

Route::middleware(['auth','auth.session','verified'])->group(function () {
    Route::get('/dashboard',function(){
        return "Selamat datang di Dashboard";
    });
});

Route::get('/verify-email', function () {

    return view('verify-email');
});

// admin

Route::get('/admin', function () {

    return view('admin.index-admin');
});

Route::get('/admin/master-user', function () {

    return view('admin.master-user');
});
