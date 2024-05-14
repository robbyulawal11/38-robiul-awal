
<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('dashboard');
});

Route::prefix('/')->group(function () {
    Route::get('dashboard', function(){
        return view('pages/dashboard');
    });
    Route::get('appointment', function(){
        return view('pages/appointment');
    });
    Route::get('feedback', function(){
        return view('pages/feedback');
    });
    Route::get('user', function(){
        return view('pages/user');
    });
    Route::get('income', function(){
        return view('pages/income');
    });
});
