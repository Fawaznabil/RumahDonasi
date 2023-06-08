<?php

// use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use App\Events\MessageCreated;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\indexController;
use Illuminate\Auth\Events\PasswordReset;
use App\Http\Controllers\GoogleControllerr;
use App\Http\Controllers\VerificationController;
use App\Http\Controllers\donasiController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\formCampaignController;
use App\Http\Controllers\campaignpendidikanController;
use App\Http\Controllers\campaignbencanaController;
use App\Http\Controllers\campaignNonpendidikanController;
use App\Http\Controllers\campaignNonbencanaController;
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


Route::get('/', [formCampaignController::class, 'index']);

Route::get('/detailDonasi', function () {

    return view('detailDonasi');
});

Route::get('/about', function () {

    return view('about');
});
Route::get('/about-login', function () {

    return view('about-login');
});

Route::get('/contact', function () {

    return view('contact');
});

Route::get('/contact-login', function () {

    return view('contact-login');
});

Route::get('/campaign-bencana', function () {

    return view('campaign-bencana');
});

Route::get('/campaign-pendidikan', function () {

    return view('campaign-pendidikan');
});


// login biasa
Route::get('/sign-in', function(){
    return view('auth.login');
})->name('sign-in');


Route::post('/post_login', [AuthController::class,'post_login'])->name('post_login');

// log out
Route::get('/sesi/logout',[AuthController::class,'logout']);



// campaign bencana & pendidikan
Route::resource('/campaign-bencana', campaignNonbencanaController::class);
Route::resource('/campaign-pendidikan', campaignNonpendidikanController::class);


Route::get('/blogs', function () {

    return view('blogs');
});

// Forget Password
Route::get('/reset-password', function(){
    return view('auth.passwords.reset-password');
})->middleware('guest')->name('password.request');

Route::post('/reset-password', function(Request $request){
    $request->validate(['email' => 'required|email']);

    $status = Password::sendResetLink(
        $request->only('email')
    );

    return $status === Password::RESET_LINK_SENT
        ? back()->with(['STATUS' => __($status)])
        : back()->withErrors(['email' => __($status)]);
})->middleware('guest')->name('password.email');

Route::get('/new-password/{token}', function ($token){
    return view('auth.passwords.new-password', ['token' => $token]);
})->middleware('guest')->name('password.reset');

Route::post('/new-password', function (Request $request) {
    $request->validate([
        'token' => 'required',
        'email' => 'required|email',
        'password' => 'required|min:8|confirmed',
    ]);

    $status = Password::reset(
        $request->only('email', 'password', 'password_confirmation', 'token'),
        function ($user, $password){
            $user->forceFill([
            'password' => Hash::make($password)
            ])->setRememberToken(Str::random(60));

            $user->save();

            event(new PasswordReset($user));
        }
    );

    return $status === Password::PASSWORD_RESET
        ? redirect()->route('sign-in')->with('status', __($status))
        : back()->withErrors(['email' => [__($status)]]);
})->middleware('guest')->name('password.update');

// register email
// Route::get('/sign-in', [AuthController::class, 'get_login'])->name('sign-in');

Route::get('/sign-up', [AuthController::class, 'get_register'])->name('sign-up');

Route::post('/sign-up', [AuthController::class, 'post_register']);
// Route::post('/sign-in', [AuthController::class, 'post_login']);

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



// Login google
Route::get('auth/google',[App\Http\Controllers\GoogleController::class,'redirectToGoogle'])->name('google.login');
Route::get('auth/google/callback',[App\Http\Controllers\GoogleController::class,'handleGoogleCallback'])->name('google.callback');
// Route::Controller(GoogleController::class)->group(function(){
//     Route::get('auth/google', 'redirectToGoogle')->name('auth.google');
//     Route::get('auth/google/callback', 'handleGoogleCallback');
// });

Route::get('/test', function () {

    return view('test');
});

Route::get('/detailDonasilogin/{id}', [formCampaignController::class, 'detaillogin']);


    // User --------------------------------------------------------------------------------------

    Route::group(['middleware' => 'ceklevel:customer'], function(){
        Route::post('/Home', [formCampaignController::class, 'insertdata'])->name('insertdata');
        Route::get('/Home', [formCampaignController::class, 'home']);

        Route::get('/detailDonasi/{id}', [formCampaignController::class, 'detail']);

        Route::get('/donate/{id}', [donasiController::class, 'index']);
        Route::post('/checkout', [donasiController::class, 'checkout']);
        Route::get('/profile/{id}', [donasiController::class, 'invoice']);

        Route::get('/user-login/{id}', [profileController::class, 'invoice']);

        Route::get('/user-status-donasi', function () {

            return view('user.status-donasi');
        });

        Route::get('/form-campaign', [formCampaignController::class, 'formcampaign'])->name('form-campaign');

        Route::resource('/campaign-bencana-login', campaignbencanaController::class);
        Route::resource('/campaign-pendidikan-login', campaignpendidikanController::class);
    });

    // Admin --------------------------------------------------------------------------------------

    Route::group(['middleware' => 'ceklevel:admin'], function(){

    Route::get('/admin', function () {

        return view('admin.index-admin');
    });

    Route::get('/admin/master-user', function () {

        return view('admin.master-user');
    });

});

// test------

// Route::post('/save-text', function (Illuminate\Http\Request $request) {
//     $body = $request->input('body');
//     $paragraphs = explode("\n\n", $body);
//     return view('profile')->with('paragraphs', $paragraphs);
// })->name('save-text');

// Route::view('/profile', 'show-text')->name('show-text');

// Route::get('/profile', function () {

//     return view('profile');
// });
