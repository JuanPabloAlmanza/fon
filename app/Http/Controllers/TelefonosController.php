<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Telefonos;

class TelefonosController extends Controller
{
   
    public function index()
    {
        $telefonos = Telefonos::all();
        return view('telefonos',compact('telefonos'));  
    }

   
    public function create()
    {
        //
    }

 
    public function store(Request $request)
    {
         $telefono = new Telefonos($request->input());
        $telefono->saveOrFail();
        return redirect('telefonos');
    }

    
    public function show($id)
    {
       $telefono = Telefonos::find($id);
        return view('editTelefono',compact('telefono'));   
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
            $telefono = Telefonos::find($id);
            $telefono->fill($request->input());
            $telefono->saveOrFail();
            return redirect('telefonos');
    }

    public function destroy($id)
    {
        $telefono = Telefonos::find($id);
        $telefono->delete();
        return redirect('telefonos');
    }
}
