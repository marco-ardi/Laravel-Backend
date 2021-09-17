<?php

namespace App\Http\Controllers;

use App\Models\Paziente;
use Illuminate\Http\Request;

class PazientesController extends Controller
{

    public function index()
    {
        $pazientes = Paziente::all();
        return view('pazientes.index', compact('pazientes'));
    }


    public function create()
    {
        return view('pazientes.create');
    }


    public function store(Request $request)
    {
        request()->validate([
            'nome'=>'required',
            'cognome'=>'required'
        ]);
        Paziente::create([
            'nome'=>request('nome'),
            'cognome'=>request('cognome')
        ]);
        return redirect('/pazientes');
    }


    public function show(Paziente $paziente)
    {
        //
    }


    public function edit(Paziente $paziente)
    {
        return view('pazientes.edit', compact('paziente'));
    }


    public function update(Request $request, Paziente $paziente)
    {
        request()->validate([
            'nome'=>'required',
            'cognome'=>'required'
        ]);
        $paziente->update([
            'nome'=>request('nome'),
            'cognome'=>request('cognome')
        ]);
        return redirect('/pazientes');
    }


    public function destroy(Paziente $paziente)
    {
        $paziente->delete();
        return redirect('/pazientes');
    }
}
