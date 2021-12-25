<?php

use App\Http\Controllers\Admin\PostController;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', App\Http\Livewire\Frontend\HomeComponent::class)->name('home');
Route::get('home', App\Http\Livewire\Frontend\HomeComponent::class)->name('home');
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('about', App\Http\Livewire\Frontend\AboutComponent::class)->name('about');

Route::group(['prefix' => 'admin', 'as' => 'admin.'],function (){
	Route::resource('posts',PostController::class);
});
	