<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::group(['prefix'=>'api'], function(){
//   //Route::get('products',['as'=>'products', function(){
//     //  return App\Models\Product::all(); //elecquent magic - *select all from table and it returns.
//   //}]);
//       Route::resource('products','ProductController'::class, 'show');
//   });




// Route::prefix('api')->group(function(){
//   Route::resource('products','App\Http\ProductController',['Only'=>['index','store','update']]);
// });