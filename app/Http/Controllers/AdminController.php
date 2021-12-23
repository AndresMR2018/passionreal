<?php

namespace App\Http\Controllers;

use App\Models\Reporte;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function goDashboard(){
        return view('admin.dashboard');
    }
  
    public function reportes(){
        $reportes = Reporte::paginate(3);
        return view('admin.reportes.index', compact('reportes'));
    }

    public function verUsuarioReportado($id){
        $cliente = User::findOrFail($id);
        return view('admin.reportes.show',compact('cliente'));
    }

    public function banearCuenta($id){
        $user = User::findOrFail($id);
        
        // $user->update([
        //     "estado_cuenta"=>"baneada"
        // ]);
        $estadocuenta = $user['estado_cuenta'];
        if($estadocuenta=="habilitada"){
            $user = DB::table('users')
            ->where('id', $id)
            ->update(['estado_cuenta' => 'baneada']);
        }
        if($estadocuenta=="baneada"){
            $user = DB::table('users')
            ->where('id', $id)
            ->update(['estado_cuenta' => 'habilitada']);
        }

        return back()->with('mensaje','Cuenta baneada con exito');
    }

    public function index()
    {
        //
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
        //
    }
}
