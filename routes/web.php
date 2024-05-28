
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return redirect('home');
});

Route::middleware('auth')->prefix('/')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index']);
    Route::resource('appointment', AppointmentController::class);
    Route::resource('feedback', FeedbackController::class);
    Route::resource('user', UserController::class);
    Route::resource('income', IncomeController::class);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
