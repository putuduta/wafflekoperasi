<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Registration;
use Auth;

class DashboardController extends Controller
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
        if(Auth::user()->role == 'admin')
        {
            $registration = Registration::all();
            return view('pages.dashboard', compact('registration'))->with('registraion', $registration);
        }
        else
        {
            $user_id = auth()->user()->id;
            $user = User::find($user_id);
            return view('pages.dashboard')->with('registration', $user->registration);
        }
        return view('dashboard');
    }
}
