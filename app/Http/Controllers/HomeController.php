<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $this->middleware('auth');
        // dd(auth()->user()->jefe_local);        

        if(auth()->user()->admin && auth()->user()->superadmin){
            
            return view('superadmin.index');
        }
        else if(auth()->user()->admin)
            return redirect()->route('admin.index');
            // return view('jefe_local.index');
        else 
            return redirect()->route('superadmin.index');
            // return view('jefe_operaciones.index');
    }
}