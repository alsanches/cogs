<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public $request;
    public $usuarios;

    public function __construct(Request $request, User $usuarios)
    {
       $this->middleware('auth');
       $this->request = $request;
       $this->usuarios = $usuarios;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth()->User();
        $title = "Dashboard";
        return view('dashboard.index',compact('user','title'));
    }


}
