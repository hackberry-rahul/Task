<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;

class RegistrationControler extends Controller
{
    //
    public function index(){
        return view('form');
    }
    public function reigster(Request $request){
        
        $request->validate(
            [
                'name'=>"required",
                'email'=>'required | email',
                'password'=>'required'
            ]
            );
        
        // echo "<pre>";
        // print_r($request->all());

        // echo "</pre>";
        $Registration = new Registration;
        $Registration->name= $request['name'];
        $Registration->email= $request['email'];
        $Registration->password=md5($request['password']);
        $Registration->save();
        return redirect('/reigster/view');

    }
    public function view(){
        $Registration = Registration::all();
        $data = compact('Registration');
        return view("registre-view")->with($data);
    }

}
