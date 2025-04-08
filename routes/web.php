<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Navigate;

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
    return view('index');
});
Route::get("register",[Navigate::class,"Register"]);
Route::get("admin",[Navigate::class,"Admin"]);
Route::get("custom",[Navigate::class,"login"]);
Route::post("register",[Navigate::class,"insert"]);
Route::view("thank","thank");
Route::post("adminlogin",[Navigate::class,"adminlogin"]);
Route::get("secret_info",[Navigate::class,"secret_info"]);
Route::get("delete/{id}",[Navigate::class,"deleterecord"]);
Route::get("update/{id}",[Navigate::class,"updaterecord"]);
Route::post("update/updated/{id}",[Navigate::class,"update"]);

Route::get("customgame",[Navigate::class,"customgame"]);
Route::get("dice",[Navigate::class,"dice"]);
Route::post("auth",[Navigate::class,"auth"]);
Route::get("drum",[Navigate::class,"drum"]);

