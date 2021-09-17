<?php

namespace App\Http\Controllers;

use App\Models\Medico;
use Illuminate\Http\Request;

class MedicosController extends Controller
{

    public function index()
    {
        $medicos = Medico::all();
        return view('medicos.index', compact('medicos'));
    }


    public function create()
    {
        return view('medicos.create');
    }

    public function store(Request $request)
    {
        request()->validate([
            'nome'=>'required',
            'cognome'=>'required',
            'specializzazione'=>'required'
        ]);
        Medico::create([
            'nome'=>request('nome'),
            'cognome'=>request('cognome'),
            'specializzazione'=>request('specializzazione')
        ]);
        return redirect('/medicos');
    }



    public function edit(Medico $medico)
    {
        return view('medicos.edit', compact('medico'));
    }


    public function update(Request $request, Medico $medico)
    {
        request()->validate([
            'nome'=>'required',
            'cognome'=>'required',
            'specializzazione'=>'required'
        ]);
        $medico->update([
            'nome'=>request('nome'),
            'cognome'=>request('cognome'),
            'specializzazione'=>request('specializzazione')
        ]);
        return redirect('/medicos');
    }

    public function destroy(Medico $medico)
    {
        $medico->delete();
        return redirect('/medicos');
    }
}
