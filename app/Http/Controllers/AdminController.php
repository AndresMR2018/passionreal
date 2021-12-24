<?php

namespace App\Http\Controllers;

use App\Models\Orden;
use App\Models\Reporte;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class AdminController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function goDashboard(){
        return view('admin.dashboard');
    }

    public function pdfOrden($id){
        $orden = Orden::find($id);          
        $pdf = PDF::loadView('pdfs.ordenes.compraCredito', ["orden"=>$orden]);
        return $pdf->stream('compra_creditos.pdf');
        // $orden = Orden::findOrFail($id);
        // view()->share('admin.orden.index',$orden);
        // $pdf = PDF::loadView('pdf_view', $orden);

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

   
}
