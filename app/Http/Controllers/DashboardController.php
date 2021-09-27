<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){

        if( auth()->user() != NULL and auth()->user()->is_admin)
        {
            return redirect(route('Admin'));
        }
        elseif(auth()->user() != NULL and auth()->user()->is_admin == False)
        {
            return view("auth.dashboard");
        }
        else
        {
           return redirect(route('Login'));
        }

//        return view("auth.dashboard");

    }
}
