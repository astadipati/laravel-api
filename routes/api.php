<?php

use Illuminate\Http\Request;

// Buyer
Route::resource('buyers','Buyer\BuyerController',['only'=> ['index','show']]);
// Category
Route::resource('categories','Category\CategoryController',['except'=> ['create','edit']]);
// Product
Route::resource('products','Product\ProductController',['only'=> ['index','show']]);
// Seller
Route::resource('sellers','Seller\SellerController',['only'=> ['index','show']]);
// Transaction
Route::resource('transactions','Transaction\TransactionController',['only'=> ['index','show']]);
// Users
Route::resource('users','User\UserController',['except'=> ['create','edit']]);