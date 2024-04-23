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

Route::get('/users', function () {

    // declaring variables
    $name="abdul wahab";
    $age="24";

    // creating views to send data at user file (page)
    return view('user', [
        'name' => $name , 
        'age' => $age, 
        "city" => "KHI"]);

    // another way to send data using with function

    return view('user')->with("name",$name)->with("age", $age)->with("city", "LHR");



    // multi dimentional array 
    $names = [
        1 => ['name' => 'Amitabh', 'phone' => '9123456789', 'city' => 'Goa'],
        2 => ['name' => 'Salman', 'phone' => '9123456789', 'city' => 'Delhi'],
        3 => ['name' => 'Sunny', 'phone' => '9123456789', 'city' => 'Mumbai'],
        4 => ['name' => 'Akshay', 'phone' => '9123456789', 'city' => 'Agra'],
      ];

      return view('user', ['users' => $names]);

});
