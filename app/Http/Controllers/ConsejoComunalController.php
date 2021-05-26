<?php

namespace App\Http\Controllers;

use App\ConsejoComunal;

use Illuminate\Http\Request;

class ConsejoComunalController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('consejoscomunales.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $validatedDate = $request->validate([
            'name' => 'required|min:4|max:255:consejo_comunals',
            'situr' => 'required|min:6|max:25|unique:consejo_comunals',
            'number_integrantes'=>'required|min:1|max:6:consejo_comunals',
            'number_familias'=>'required|min:1|max:6:consejo_comunals'
        ]);

        $consejoComunal = new ConsejoComunal();
        $consejoComunal->name = $validatedDate['name'];
        $consejoComunal->situr = $validatedDate['situr'];
        $consejoComunal->integrantes = $validatedDate['number_integrantes'];
        $consejoComunal->familias = $validatedDate['number_familias'];
        $consejoComunal->created_by = auth()->id();
        $consejoComunal->save(); // INSERT

        $status = 'El consejo Comunal a sido añadido exitosamente';
        return back()->with(compact('status'));

    }

    public function edit(ConsejoComunal $consejocomunal)
    {
        return view('consejoscomunales.edit', compact('consejocomunal'));
    }

    public function update(Request $request, ConsejoComunal $consejoComunal)
    {
        // dd($request->all());
        $validatedDate = $request->validate([
            'name' => 'required|min:4|max:255:consejo_comunals',
            'situr' => 'required|min:6|max:25|unique:consejo_comunals,id,'.$consejoComunal->id,
            'number_integrantes'=>'required|min:1|max:6:consejo_comunals',
            'number_familias'=>'required|min:1|max:6:consejo_comunals'
        ]);

        $consejoComunal->name = $validatedDate['name'];
        $consejoComunal->situr = $validatedDate['situr'];
        $consejoComunal->integrantes = $validatedDate['number_integrantes'];
        $consejoComunal->familias = $validatedDate['number_familias'];
        $consejoComunal->save(); // INSERT

        $status = 'El consejo Comunal a sido actualizado exitosamente';
        return back()->with(compact('status'));

    }
}
