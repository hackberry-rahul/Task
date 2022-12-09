<?php

use App\Http\Controllers\PhotoController;
use App\Http\Controllers\RegistrationControler;
use App\Http\Controllers\Student;
use App\Models\Customer;
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
Route :: get('/courses',function(){
    return view('courses');
});
// Route :: get('/registre-view',function(){
//     return view('registre-view');
// });

Route::get("/Student", [Student::class, 'index']);

Route::resource('/photo', PhotoController::class );
Route::get('/form', [RegistrationControler::class, 'index'] );
Route::post('/reigster',[RegistrationControler::class,'reigster']);
Route::get('/reigster/view',[RegistrationControler::class,'view']);



Route::get('/customer',function(){
    $customer =Customer::all();
});