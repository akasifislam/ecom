<?php

use App\Http\Livewire\CartComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\ShopComponent;
use Illuminate\Support\Facades\Route;



Route::get('/', HomeComponent::class);


Route::get('/shop', ShopComponent::class);
Route::get('/cart', CartComponent::class);
