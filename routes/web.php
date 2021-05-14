<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Http\Controllers\UploadFileController;


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

// Route::get('/', function () {
//     return redirect()->route('products.index');
// });

Route::get('/', function () {
       return view('resource.home');
    });


Route::post('/uploadFile',[UploadFileController::class,'store']);

Route::resource('products', ProdController::class);

Route::get('searchProducts',[SearchController::class,'search']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
     //return view('dashboard');
    return redirect('/');
})->name('dashboard');
