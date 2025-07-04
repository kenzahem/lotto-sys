<?php

use App\Livewire\Auth\Login;
use App\Livewire\Dashboard\Main;
use App\Livewire\Users\Create;
use App\Livewire\Users\Index;
use App\Livewire\Welcome;
use Illuminate\Support\Facades\Route;

//DASHBOARD / BACKEND

Route::get('/', Main::class);
Route::get('/users', Index::class);
Route::get('/users/create', Create::class);


//AUTH
Route::get('/login', Login::class)->name('login');

