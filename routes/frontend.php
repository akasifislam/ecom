<?php

use App\Http\Livewire\CartComponent;
use App\Http\Livewire\CheckoutComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\ShopComponent;
use Illuminate\Support\Facades\Route;



Route::get('/', HomeComponent::class)->name('home');


Route::get('/shop', ShopComponent::class)->name('frontend.shop');
Route::get('/cart', CartComponent::class)->name('frontend.cart');
Route::get('/checkout', CheckoutComponent::class)->name('frontend.checkout');
