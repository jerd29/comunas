<?php

namespace App\Http\Controllers;

use App\ConsejoComunal;
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
        $consejoscomunales = ConsejoComunal::where('created_by', auth()->id())->get();
        return view('home', compact('consejoscomunales'));
    }
}
