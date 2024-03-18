<?php

namespace App\Http\Controllers;

use App\Models\TblVuelo;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use App\Models\User;

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
     * @return Renderable
     */
    public function index()
    {
        $usersCount = User::count();
        $vuelo = TblVuelo::count();
        return view('home',
                    compact('usersCount',
                            'vuelo'
                                        ));


        // return view('home');
    }
}
