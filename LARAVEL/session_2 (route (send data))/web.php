<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;




Route::get('/registor', [UserController::class, 'view']);

Route::post('/insert', [UserController::class , 'insert'] );




















// Route::get("/get", function(){

//     $names = [
//         1 => ['name' => 'Amitabh', 'phone' => '9123456789', 'city' => 'Goa'],
//         2 => ['name' => 'Salman', 'phone' => '9123456789', 'city' => 'Delhi'],
//         3 => ['name' => 'Sunny', 'phone' => '9123456789', 'city' => 'Mumbai'],
//         4 => ['name' => 'Akshay', 'phone' => '9123456789', 'city' => 'Agra'],
//       ];


//     $name="taha amjad";
//     $age= "25";

//     //return view('employee', ['name' => "abdul wahab", 'age' => "24"]);

//     // return view('employee' , ['name' => $name , 'age' => $age , 'city' => "KHI"]);

//    // return view('employee' , ['users' => $names]);
// });
