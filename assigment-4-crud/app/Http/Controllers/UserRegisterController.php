<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;


class UserRegisterController extends Controller
{
    public function index(){
        return view('user.register');
    }

    public function register(){
        $this->validate(request(),[
           'username'=>'required',
            'fname'=>'required',
            'email'=>'required'
        ]);
        User::create([
            'username'=>request('username'),
            'fname'=>request('fname'),
            'lname'=>request('lname'),
            'email'=>request('email'),
            'location'=>request('location'),
            'gender'=>request('gender'),
            'mobile'=>request('mobile')
        ]);

        return 'registered';
    }
}
