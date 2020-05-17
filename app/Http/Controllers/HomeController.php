<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

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
        return view('home');
    }

    public function show() {
        if(Auth::user()->type =='admin'){
            $users=User::get();
        } else{
            $users=User::where('department_id',Auth::user()->department->id)->get();
        }
        return view('home',[
            'users' => $users
        ]);
    }

}
