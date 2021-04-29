<?php

use App\Models\Tags;
use App\Http\Controllers\MainController;
use App\Models\Statastics;
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
Route::get('home', [MainController::class,'home']);
Route::post('/insertData', [MainController::class,'insertData']);
Route::post('/insertTag', [MainController::class,'insertTag']);
Route::get('inputTag', [MainController::class,'display']);