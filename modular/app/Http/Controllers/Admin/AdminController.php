<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Nwidart\Modules\Facades\Module;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    //

    public function index(){        
        return view('dashboard');
    }


    
}
