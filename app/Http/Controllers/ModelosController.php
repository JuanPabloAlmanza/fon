<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Modelos;
use App\Models\Telefonos;

class ModelosController extends Controller
{

    public function index()
    {
        $modelos = Modelos::select('modelos.id','sigla','region','precio','id_telefono','telefono')
        ->join('telefonos','telefonos.id','=','modelos.id_telefono')->get();
        $telefonos = Telefonos::all();
        return view('modelos', compact('modelos', 'telefonos'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $modelo = new Modelos($request->input());
        $modelo->saveOrFail();
        return redirect('modelos');
    }


    public function show($id)
    {
        $modelo = Modelos::find($id);
        $telefonos = Telefonos::all();
        return view('editModelo',compact('modelo','telefonos'));
    }


    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $modelo = Modelos::find($id);
        $modelo->fill($request->input())->saveOrFail();
        return redirect('modelos');
    }


    public function destroy($id)
    {
        $modelo = Modelos::find($id);
        $modelo->delete();
        return redirect('modelos');
    }
}