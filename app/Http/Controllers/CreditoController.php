<?php

namespace App\Http\Controllers;

use App\Models\Credito;
use Illuminate\Http\Request;

class CreditoController extends Controller
{
    public function index()
    {
        $creditos=Credito::Paginate(3);
        return view('admin.credito.index',compact('creditos'));
    }
  
    public function create()
    {
        return view('admin.credito.create');
    }

  
    public function store(Request $request)
    {
        $datosCredito = request()->except('_token');
        Credito::insert($datosCredito);
        return redirect()->route('credito.index')->with('mensaje','Credito agregado con exito!');
    }

   
    public function show(Credito $credito)
    {
        //
    }

   
    public function edit($id)
    {
        $credito = Credito::findOrFail($id);
        return view('admin.credito.edit', compact('credito'));

    }

 
    public function update(Request $request, Credito $credito)
    {
        $datosCredito = request()->except(['_token','_method']);

Credito::where('id','=',$credito->id)->update($datosCredito);
        return redirect('admin/credito')->with('mensaje','Credito actualizado!');
    }

    public function destroy($id)
    {
        $credito=Credito::destroy($id);
        return redirect('admin/credito')->with('mensaje','Credito eliminado!');
    }
}
