<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class DashboardController extends Controller
{
    public function home(){
      return view('admin.home');
    }

    public function general(){
      return view('gene.general');
    }
    public function userprofile(){
    
      $logged_user = Auth::User();
      return view('userprofile', compact('logged_user'));
    }
}
