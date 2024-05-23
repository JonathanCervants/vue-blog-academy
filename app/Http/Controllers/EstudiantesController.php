<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;


class EstudiantesController extends Controller
{
    public function index(){
        return Estudiante::all();
    }

    public function store(Request $request){
        $estudiante = new Estudiante($request->input());
        $estudiante->save();
        return $estudiante;
    }

    public function update(Request $request, $id){
        $estudiante = Estudiante::find($id);
        $estudiante->array(
            'nombre' ->request('nombre')
        );
        $estudiante->save();
        return $estudiante;
    }
}
