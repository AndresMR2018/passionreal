<?php

namespace App\Http\Controllers;

use App\Models\Paquete;
use Illuminate\Http\Request;

class PaqueteController extends Controller
{
 
    public function index()
    {
        $paquetes['paquetes']=Paquete::Paginate(5);
        return view('admin.paquete.index',$paquetes);
    }

    
    public function create()
    {
        return view('admin.paquete.create');
    }

   
    public function store(Request $request)
    {
        $request->validate([
'periodo_horas'=>'unique:paquetes,periodo_horas'
        ]);

        $datosPaquete = request()->except('_token');

        $c =  Paquete::insert($datosPaquete);
       
        return redirect('admin/paquete')->with('mensaje','Paquete agregado!');
    }

   
    public function show(Paquete $paquete)
    {
        //
    }

  
    public function edit($id)
    {
        $paquete = Paquete::findOrFail($id);
        return view('admin.paquete.edit', compact('paquete'));
    }

 
    public function update(Request $request, Paquete $paquete)
    {
        // $request->validate([
        //     'periodo_horas'=>'required|string|unique:paquetes,periodo_horas'.$paquete->id
        // ]);

$datosPaquete = request()->except(['_token','_method']);

Paquete::where('id','=',$paquete->id)->update($datosPaquete);
        return redirect('admin/paquete')->with('mensaje','Paquete actualizado!');
    }

  
    public function destroy($id)
    {
        $paquete=Paquete::destroy($id);
        return redirect('admin/paquete')->with('mensaje','Categoría eliminada!');
    }
}
