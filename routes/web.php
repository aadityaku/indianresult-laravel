<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\AuthController;
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
//Admin Route
Route::prefix("admin")->group(function(){
     Route::get("/",[AdminController::class,"index"])->name("admin.dashboard");
     Route::resource("school",SchoolController::class);
     Route::resource("student",App\Http\Controllers\StudentController::class);

});
//School Work
Route::prefix("school")->group(function(){
    // Route::get("/",function(){
    //     return view("school/home");
    // });
    Route::get("/",[SchoolController::class,"home"])->name('school.dashboard');
    Route::get("/login",[SchoolController::class,"login"]);
    Route::post("/login",[AuthController::class,"schoolLogin"])->name("school.login");
    Route::get("/logout",[AuthController::class,"schoolLogout"])->name("school.logout");

});

//Authentecation Route
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
