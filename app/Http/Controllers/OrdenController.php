<?php

namespace App\Http\Controllers;

use App\Models\Orden;
use App\Models\User;
use Illuminate\Http\Request;

class OrdenController extends Controller
{
  
    public function index()
    {
      $ordenes = Orden::paginate(3);
      return view('admin.ordenes.index', compact('ordenes'));
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
        $cliente = User::findOrFail($id)->first();
        return view('admin.ordenes.show',compact('cliente'));
    }

   
    public function edit(Orden $orden)
    {
        //
    }

   
    public function update(Request $request, Orden $orden)
    {
        //
    }

 
    public function destroy(Orden $orden)
    {
        //
    }
}
