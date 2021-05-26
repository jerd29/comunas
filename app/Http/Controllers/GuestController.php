<?php

namespace App\Http\Controllers;

use App\ConsejoComunal;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index()
    {
        $consejoscomunales = ConsejoComunal::with('user')
        ->orderByDesc('created_at')
        ->orderByDesc('id')
        ->paginate(10);

        return view('welcome', compact('consejoscomunales'));
    }

    public function show(ConsejoComunal $consejocomunal)
    {
        return view('consejoscomunales.show', compact('consejocomunal'));
    }
}
