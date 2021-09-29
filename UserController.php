<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UserController extends Controller
{
    function getDate(){
        return view('users');
    }
    function sumbit(Request $req){
        $validateddata = $req->validate([
            'email' => 'required|email',
            'password' => 'required|min:6'
        ],
        [
            'email.required' => 'Enter Your Email',
            'password.required' => 'Enter Correct Password']
        );

        

        $email = $req->input('email');
        $pass = $req->input('password');

        $data =[
            'alfasunny92@gmail.com' => '123456',
            'alfasunny94@gmail.com' => "asdfgh"
            
        ];

        foreach($data as $key => $user){
            $slice = str::before($key, '@');
            if($email == $key && $pass==$user)
                
               // return view('homePage');
                return 'User Name: '.$slice;  
            else
                return "Incorrect your email or password";    
        //return 'Email: '.$email.'<br>'.'Password: '.$pass;
        }
        
        
    }
    function getReg(){
        return view('reg');
    }
    function reg(Request $req){
        $validateddata = $req->validate([
            'name' =>'required|string',
            'email' => 'required|email',
            'phoneNo' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/',
            'address' => 'required|string',
            'password' => 'required|min:5'
        ],
        [
            'name.required' => 'Enter Full Name',
            'email.required' => 'Enter Your Correct Email',
            'phoneNo.required' => 'Enter Phone Number',
            'address.required' => 'Enter Your Address'
        ]);
        $name = $req->input('name');
        $email = $req->input('email');
        $phoneNo = $req->input('phoneNo');
        $address = $req->input('address');
        $pass = $req->input('password');
        return 'Full Name: '.$name.'<br>'.'Email: '.$email.'<br>'.'Phone No: '.$phoneNo.'<br>'.'Password: '.$pass;
    }
   
}
