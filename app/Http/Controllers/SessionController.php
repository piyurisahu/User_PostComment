<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('guest',['except'=>'destroy']);
    }


    public function create()
    {
        return view('sessions.create');
    }
    public function store()
    {


        //dd(request('email') ,request('password'),Auth::attempt(['email'=>request('email'),'password'=>request('password')]));
        //attempt to authenticate user

        if(!Auth::attempt(['email'=>request('email'),'password'=>request('password')]))
        {
            return back()->withErrors([
                'message'=>'please check your credentials and try again'
                    ]
            );
        }

        return redirect()->home();


        //sign them in

        //redirect to the home page
    }


    public function destroy()
    {   auth()->logout();
        return redirect()->home();
    }
}
