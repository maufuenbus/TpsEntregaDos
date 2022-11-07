<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\registro;
use Illuminate\Support\Facades\DB;

class registroController extends Controller
{
    public function create(){
        return view ('gestionestacionamientovaras');
    }

    public function store(Request $request){
        $registroEstacionamiento =  new registro;
        $registroEstacionamiento->patente = $request['patente'];
        $registroEstacionamiento->hora_ingreso=$request['hora_entrada'];
        $registroEstacionamiento->nombre=$request['nombre'];
        $registroEstacionamiento->rut=$request['rut'];
        $registroEstacionamiento->hora_salida=$request['hora_salida'];
        $registroEstacionamiento->save();
        return view ('gestionestacionamientovaras')->with('success','Vehiculo guardado');
    }

    public function update(Request $request){
       
        $patente = trim($request->get('patente'));

        $registro=DB::table('registros')->select('hora_ingreso','nombre','rut')
                                        ->where('patente','LIKE','%'.$patente.'%')
                                        ->get();
        //$registro = registro::all();
       // return view('/gestionestacionamientovaras');
    }

}
