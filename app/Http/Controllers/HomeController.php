<?php

namespace App\Http\Controllers;
use App\Profile;
use Illuminate\Support\Facades\Auth;
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
        $profile = Profile::firstOrCreate(
            ['user_id' => Auth::id()],
            [
                //'role' => 'author', 
                'name' => Auth::user()->name , 
                'email' => Auth::user()->email ,
            ]
        );
        return view('home' , compact('profile') );
    }
}
