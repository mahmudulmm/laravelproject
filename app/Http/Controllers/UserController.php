<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class UserController extends Controller
{
    public function alluser(){


      $logged_user_id = Auth::id();
      $users = User::where('id','!=', $logged_user_id)->orderBy('id','desc')->paginate(5);
      $total_users = User::count();
      return view('users.alluser', compact('users', 'total_users', 'logged_user_id'));
    }
    public function adduser(){
      return view('users.adduser');
    }
    public function edituser(){
      return view('users.edituser');
    }
    public function viewuser(){
      return view('users.viewuser');
    }
}
