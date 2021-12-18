<?php

namespace App\Http\Controllers;

use App\Models\Solicitud;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SolicitudController extends Controller
{
   
    public function index()
    {
        $solicitudes = Solicitud::all();
        return view('admin.solicitudes.index',compact('solicitudes'));
    }


    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        //
    }

    
    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }

  
    public function update(Request $request, $id)
    {
        //
    }

  
    public function destroy($id)
    {
        $solicitud=Solicitud::destroy($id);
        return redirect('admin/solicitud')->with('mensaje','Solicitud eliminada!');
    }

    public function aprobarCuenta($id){
        $usuario = User::findOrFail($id);
        $cta_validada = $usuario['cta_validada'];
        if($cta_validada=="No"){
            $user = DB::table('users')
            ->where('id', $id)
            ->update(['cta_validada' => 'Si']);
        }
        if($cta_validada=="Si"){
            $user = DB::table('users')
            ->where('id', $id)
            ->update(['cta_validada' => 'No']);
        }
       
      
        return back()->with('mensaje','Cambio de estado realizado con exito');
    }
}
