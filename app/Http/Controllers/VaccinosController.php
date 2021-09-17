<?php

namespace App\Http\Controllers;

use App\Models\Vaccino;
use App\Models\Medico;
use App\Models\Paziente;
use Illuminate\Http\Request;

class VaccinosController extends Controller
{

    public function index()
    {
        $vaccinos = Vaccino::all();
        $medicos = Medico::all();
        $pazientes = Paziente::all();
        return view('vaccinos.index', compact('vaccinos', 'medicos', 'pazientes'));
    }


    public function create()
    {
        $medicos = Medico::all();
        $pazientes = Paziente::all();
        return view('vaccinos.create', compact('medicos','pazientes'));
    }

    public function store(Request $request)
    {
        request()->validate([
            'tipologia'=>'required',
            'medico_id'=>'required',
            'paziente_id'=>'required',
            'data_somministrazione'=>'required'
        ]);
        Vaccino::create([
            'tipologia'=>request('tipologia'),
            'medico_id'=>request('medico_id'),
            'paziente_id'=>request('paziente_id'),
            'data_somministrazione'=>request('data_somministrazione')
        ]);
        return redirect('/vaccinos');
    }



    public function edit(Vaccino $vaccino)
    {
        $medicos = Medico::all();
        $pazientes = Paziente::all();
        return view('vaccinos.edit', compact('vaccino', 'medicos', 'pazientes'));
    }


    public function update(Request $request, Vaccino $vaccino)
    {
        request()->validate([
            'tipologia'=>'required',
            'medico_id'=> 'required',
            'paziente_id'=>'required',
            'data_somministrazione'=>'required'
        ]);
        $vaccino->update([
            'tipologia'=>request('tipologia'),
            'medico_id'=>request('medico_id'),
            'paziente_id'=>request('paziente_id'),
            'data_somministrazione'=>request('data_somministrazione')
        ]);
        return redirect('/vaccinos');
    }

    public function destroy(Vaccino $vaccino)
    {
        $vaccino->delete();
        return redirect('/vaccinos');
    }
}
