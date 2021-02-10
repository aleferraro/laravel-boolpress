<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


class TestController extends Controller
{
    public function guest()
    {   
        /* if(Auth::check()){
            return redirect('restricted-zone/hello');
        } else{
            return view('hello');
        } */

        return view('hello');
       
    }

    public function logged()
    {   
        if(Auth::check()){
            $user = Auth::user();

            return view('hello', compact('user'));
        } else {
            return redirect('free-zone/hello');
        }

    }
}
