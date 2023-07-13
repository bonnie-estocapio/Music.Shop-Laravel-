<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TrackController;
use App\Http\Controllers\UserController;
use App\Mail\OrderCompleted;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sendmail', function () {
    $email = 'kyle.estocapio031@gmail.com';
    $username = "Kairu";
    $filePath = public_path('tracks\Yoru ni Kakeru.mp3');

    Mail::to($email)->send(new OrderCompleted($username, $filePath));

    return "completed";
});

Route::get('/home', function () {
    // return "<h1>This is the Home Page</h1>";
    $user = 'Kairu';
    $guest = false;
    // return view('shop.home', ['user' => $user, 'pass' => $pass]);
    return view('shop.home', compact('user', 'guest'));
});

Route::get('/main', [TrackController::class, 'show']);

Route::get('/checkout', function () {
    return "<h1>This is the checkout Page</h1>";
});

Route::get('/profile', function () {
    return "<h1>This is the Profile Page</h1>";
});

Route::get('/register', function () {
    return view('user.register');
})->name('register');

Route::resource('/user', UserController::class);

Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::post('/login', [LoginController::class, 'handleLogin'])->name('login.submit');

Route::get('/register', [RegisterController::class, 'index'])->name('register');

Route::post('/register', [RegisterController::class, 'handleRegister'])->name('register.submit');

Route::fallback(function () {
    return "<h1>Route not found</h1>";
});