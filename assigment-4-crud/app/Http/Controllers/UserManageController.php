<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserManageController extends Controller
{
    public function index(){
        $users=User::latest()->get();
        return view('user.showUsers',compact(['users']));
    }

    public function edit($id){
        $user=User::find($id);
        return view('user.edit',compact('user'));
    }

    public function update($id){
        $user=User::find($id);
        $user->update([
            'username'=>request('username'),
            'fname'=>request('fname'),
            'lname'=>request('lname'),
            'email'=>request('email'),
            'location'=>request('location'),
            'gender'=>request('gender'),
            'mobile'=>request('mobile')
        ]);
        return 'updated';
    }
}
