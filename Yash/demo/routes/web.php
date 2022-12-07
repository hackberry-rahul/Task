<?php

use App\Http\Controllers\Student;
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
Route :: get('/demo/{name}/{id?}',function($name,$id= null){
  
    $data = compact('name','id');
    return view('demo')->with($data);
   // return view('demo');
});

Route::get("/Student", [Student::class, 'index']);