<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;

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

Route::get('/',"App\Http\Controllers\Shop\MainController@index")->name('homepage');
Route::get('/produit/{id}',"App\Http\Controllers\Shop\MainController@produit")->name('voir-produit');
Route::get('/categorie/{id}',"App\Http\Controllers\Shop\MainController@bycategory")->name('par-cat');


/*Route::get('/',function(){
return response()->json([
    'stuff' => phpinfo()
   ]);
});*/
