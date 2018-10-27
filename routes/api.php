<?php

use Illuminate\Http\Request;

Route::apiResource('/products', 'ProductController');

Route::group(['prefix' => 'products'], function(){
    Route::apiResource('/{product}/reviews', 'ReviewController');
});