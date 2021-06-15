<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('cliente.home');
    }
    public function indexAdmin()
    {
        return view('admin.home');
    }
    

    public function indexcalendario(){
        return view('admin.calendario.index');

    }
}

