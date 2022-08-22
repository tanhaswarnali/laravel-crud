<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\backend\productcontroller;
use App\Http\Controllers\backend\EmployeeController;
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
    // return view('welcome');
// });
//for employee
Route::get('/addemployee',[EmployeeController:: class,'index'])->name("addemployee");
Route::get('/showemployee',[EmployeeController:: class,'show']);
Route::get('/deleteemployee/{id}',[EmployeeController:: class,'destroy']);
Route::get('/editemployee/{id}',[EmployeeController:: class,'edit']);
Route::post('/employeestore',[EmployeeController:: class,'store']);
Route::post('/employeeupdate/{id}',[EmployeeController:: class,'update']);




//for product
Route::get('/addproduct',[productcontroller:: class,'addproduct'])->name("addproduct");
Route::get('/showproduct',[productcontroller:: class,'showproduct'])->name("showproduct");
Route::get('/editproduct/{id}',[productcontroller:: class,'editproduct'])->name("editproduct");
Route::get('/delete/{id}',[productcontroller:: class,'delete'])->name("delete");
Route::get('/status/{id}',[productcontroller:: class,'status'])->name("status");
Route::post('/productstore',[productcontroller:: class,'productstore'])->name("productstore");
Route::post('/update/{id}',[productcontroller:: class,'update'])->name("update");




Route::get('/', function () {
 return view('frontend.home');
});

