<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){

        if( auth()->user() != NULL and auth()->user()->is_admin == False)
        {
            return redirect(route('Dashboard'));
        }
        elseif(auth()->user() != NULL and auth()->user()->is_admin)
        {
            return view("admin.index");
        }
        else
        {
            return redirect(route('Login'));
        }

    }
}
