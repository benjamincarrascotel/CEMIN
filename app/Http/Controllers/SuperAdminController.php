<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class SuperAdminController extends Controller
{
    //TODO ADMINISTRADORES
    public function index()
    {
        return view('superadmin.index');
    }

}
