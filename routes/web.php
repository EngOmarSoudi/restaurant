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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get("/",[\App\Http\Controllers\HomeControler::class,'index']);
Route::get("/redi",[\App\Http\Controllers\HomeControler::class,'redi']);
Route::get("/users",[\App\Http\Controllers\AdminControler::class,'user']);
Route::get("/deleteusers/{id}",[\App\Http\Controllers\AdminControler::class,'deleteusers']);
Route::get("/deletefood/{id}",[\App\Http\Controllers\AdminControler::class,'deletefood']);
Route::get("/deletechef/{id}",[\App\Http\Controllers\AdminControler::class,'deletechef']);
Route::get("/deletecart/{id}",[\App\Http\Controllers\HomeControler::class,'deletecart']);
Route::get("/updateview/{id}",[\App\Http\Controllers\AdminControler::class,'updateview']);
Route::get("/viewreservation",[\App\Http\Controllers\AdminControler::class,'viewreservation']);
Route::get("/viewchef",[\App\Http\Controllers\AdminControler::class,'viewchef']);
Route::get("/vieworder",[\App\Http\Controllers\AdminControler::class,'vieworder']);
Route::get("/updatechef/{id}",[\App\Http\Controllers\AdminControler::class,'updatechef']);
Route::get("/showcart/{id}",[\App\Http\Controllers\HomeControler::class,'showcart']);
//Route::get("/search",[\App\Http\Controllers\AdminControler::class,'search']);
Route::get("/searchuser",[\App\Http\Controllers\AdminControler::class,'searchuser']);
Route::get("/searchchef",[\App\Http\Controllers\AdminControler::class,'searchchef']);
Route::get("/searchhome",[\App\Http\Controllers\AdminControler::class,'searchhome']);
Route::get("/searchorder",[\App\Http\Controllers\AdminControler::class,'searchorder']);
Route::get("/searchreservation",[\App\Http\Controllers\AdminControler::class,'searchreservation']);
Route::get("/searchfood",[\App\Http\Controllers\AdminControler::class,'searchfood']);

Route::get("/foodmenu",[\App\Http\Controllers\AdminControler::class,'foodmenu']);
//Route::get("/foodmenu",[\App\Http\Controllers\AdminControler::class,'foodmenu']);

Route::post("/uploadfood",[\App\Http\Controllers\AdminControler::class,'upload']);
Route::post("/update/{id}",[\App\Http\Controllers\AdminControler::class,'update']);
Route::post("/uploadchef",[\App\Http\Controllers\AdminControler::class,'uploadchef']);
Route::post("/updatefoodchef/{id}",[\App\Http\Controllers\AdminControler::class,'updatefoodchef']);
Route::post("/reservation",[\App\Http\Controllers\AdminControler::class,'reservation']);
Route::post("/addcart/{id}",[\App\Http\Controllers\HomeControler::class,'addcart']);
Route::post("/ordreconfirm",[\App\Http\Controllers\HomeControler::class,'ordreconfirm']);
Route::post("/Approved/{id}",[\App\Http\Controllers\AdminControler::class,'Approved']);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
