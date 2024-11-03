<?php

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
    return view('home');
})->name("home");
Route::get("news", function () {
    return view("news");
})->name("news");
Route::get("shop", function () {
    return view("shop.shop");
})->name("shop");
Route::get("not-found",function(){
    return view("errors.404");
})->name("errors.404");
Route::get("/checkout", function(){
    return view("shop.check_out");
})->name("shop.check_out");
Route::get("/single-product", function(){
    return view("shop.single_product");
})->name("shop.single_product");
Route::get("/cart", function(){
    return view("shop.cart");
})->name("shop.cart");
