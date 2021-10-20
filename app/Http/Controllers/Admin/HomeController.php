<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashbiard.
     * 
     * @return \Illuminate\Controller\Support\Renderable
     */
    public function index(){
        return view( 'admin.home');
    }
}
