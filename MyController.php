<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    function viewLoad(){
        
        return view('homePage');
    }
    function aboutPage(){
        return view('aboutPage');
    }
    function servicePage(){
        $data=[
            'itemOne'=>'Mobile',
            'itemTwo'=>'Laptop',
            'itemThree'=>'Desktop',
            'itemFour'=>'Computer Accessories',
            'itemFive'=>'Mobile Accessories'];
      //  return view('servicePage',['services'=>$data]);
        return view('servicePage')
                    ->with('services',$data);
    }
    function teamPage(){
        return view('teamPage');
    }
    function contactPage(){
        return view('contactPage');
    }
    function contact(Request $req){
        $validateddata = $req->validate([
            'name' =>'required|string',
            'email' => 'required|email',
            'phoneNo' => 'required|min:10',
            'query' => 'required|string'
        ]);
        $name = $req->input('name');
        $email = $req->input('email');
        $phoneNo = $req->input('phoneNo');
        $query = $req->input('query');
        return 'Full Name: '.$name.'<br>'.'Email: '.$email.'<br>'.'Phone No: '.$phoneNo.'<br>'.'Query: '.$query;
    }

    
}
