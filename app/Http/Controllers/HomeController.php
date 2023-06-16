<?php

namespace App\Http\Controllers;

use App\Models\Inventario;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $usuario = Auth::user()->name;
        return redirect('admin/dashboard'); 
    }
    public function home()
    { 
        $usuario = Auth::user()->name;
        return redirect('admin/dashboard')->with('message','Bienvenido usuario '.$usuario); 
    }
    public function inicio()
    {  
       
        return view('admin.dashboard');
    }

    
}
