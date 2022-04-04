<?php
namespace Controlador;
use Modelo\Asesor;
use Illuminate\Http\Request;

class AsesorController extends Controlador{

    public function guardar(Request $asesor){

        $asesor = As::create($asesor->all());
        return response()->json([
            'asesor'=>$asesor,
            'message'=>'asesor creado correctamente'
        ]);
    }

    public function editar(Request $asesor){

        $asesor = As::edit($asesor->all());
        return response()->json([
            'asesor'=>$asesor,
            'message'=>'asesor creado correctamente'
        ]);
    }

    public function eliminar(Request $asesor){

        $asesor = As::delete($asesor->all());
        return response()->json([
            'asesor'=>$asesor,
            'message'=>'asesor creado correctamente'
        ]);
    }
}
?>