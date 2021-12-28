<?php

namespace App\Http\Controllers;

use App\Models\Orden;
use Illuminate\Http\Request;

class NotificacionController extends Controller
{
    //
    public function marcar_todas_leidas(){
auth()->user()->unreadNotifications->markAsRead();
return redirect()->route('orden.index');
    }

    public function marcar_una_leida($notificacion_id, $orden_id){
        auth()->user()->unreadNotifications->when($notificacion_id, function ($query) use
        ($notificacion_id){
            return $query->where('id',$notificacion_id);
        })->markAsRead();
        $orden = Orden::findOrFail($orden_id);
        return redirect()->route('orden.showOrden', $orden->id);
    }
}
