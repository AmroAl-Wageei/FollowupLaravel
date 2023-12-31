<?php

use App\Http\Controllers\StudentController;
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

// Create Larvel Project
// ** composer create-project laravel/laravel example-app
// ** composer global require laravel/installer , ** laravel new example-app

// php artisan serve --port=8004
 



// php artisan serve
// php artisan make:migration create_students_table --> "Migration"
// php artisan make:controller Student              --> "Controller"
// php artisan make:model Student                   --> "Model"

// php artisan make:model Student -m         --> Create Model and migration
// php artisan make:model Student -mc        --> Create Model , migration and controller
// php artisan make:model Student -mcr       --> Create Model , migration and controller " Resource "


// php artisan make:model Student -mcr
// php artisan make:model Teacher -mcr


// Two way to CRUD App ( Query - Elequent ) .....

// Render Route - View 
// Render Route - Controller -  View 
// Render Route - Controller - Model -   View 

// 1- Connection DB 
// 2- php artisan make:model Student -mcr  
// 3- push migration to DB 
// 4- Resource Route

Route::get('/', function () {
    return view('welcome');
});


// Route::get( '/test',[StudentController::class , "index"]);


// Route::resource('/student', [StudentController::class]); XXX
Route::resource('student', StudentController::class);  































// Route::get('/student', function () {
//     return view('student');
// });

// Route::get('/teacher', function () {
//     return view('teacher');
// });
