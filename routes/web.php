<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('login');
})->name('login');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');



Route::post('/login', function (Request $request) {
    $validUser = "platil";
    $validPass = "1234";

    if ($request->username === $validUser && $request->password === $validPass) {
        session(['username' => $request->username]);
        return redirect()->route('home');
    } else {
        return back()->with('error', 'Invalid username or password!');
    }
})->name('login.post');

Route::get('/home', function () {
    if (!session()->has('username')) {
        return redirect()->route('login');
    }
    return view('home');
})->name('home');

Route::get('/logout', function () {
    session()->flush();
    return redirect()->route('login');
})->name('logout');
