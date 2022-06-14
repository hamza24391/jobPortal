<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        if(Auth::user()->hasRole('user')){
             return view('userdash');
        }elseif(Auth::user()->hasRole('company')){
            return view('companydash');
        }elseif(Auth::user()->hasRole('admin')){
          return view('dashboard');
        }
        // return view('job');
        // return view('companydash');
    }







public function viewposted()
   {
    return view('viewposted');
   }

   public function createpost()
   {
    return view('createpost');
   }


public function companyposts()
   {
    return view('companyposts');
   }


}