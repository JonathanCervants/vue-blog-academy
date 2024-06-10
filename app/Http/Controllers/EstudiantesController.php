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
        
        $estudiante->nombre = $request->nombre;
        $estudiante->apellido = $request->apellido;
        $estudiante->foto = $request->foto;

        $estudiante->update();

        $blog->fill($request->post())->save(); 
        return  response()->json([
            'blog' =>$blog
        ]);
       // return redirec::to('/');
    }

    public function destroy($id){
        if(Estudiante::find($id)){
            if(Estudiante::$id->delete()){
                return "Eliminado exitosamente";
            }else{
                return "Error al eliminar ><";
            }
        }else{  
            return "No encontrado :(";
        }
    }
}
