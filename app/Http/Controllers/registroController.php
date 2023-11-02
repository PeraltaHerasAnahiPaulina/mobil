<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\tipousuario;
use App\Models\usuarioadmin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class registroController extends Controller
{
    //index
    public function usuarioadmin(){
        $usuarioadmin = usuarioadmin::all();
        $usuarioadmin = usuarioadmin::select(
            'usuariosadmin.idu',
            'usuariosadmin.nombre',
            'usuariosadmin.apellido',
            'usuariosadmin.correo',
            'usuariosadmin.turno',
        )
        ->join('tipousers','tipousers.idtipou','usuariosadmin.idtipou')->get();
        return view('pages.user-management',compact('usuarioadmin'));
    }
//edit
    public function edit($idu){
        $tipousuario = tipousuario::all();
        $usuarioadmin =  usuarioadmin::findOrFail($idu);
        return view('usuariosadmin.edit',compact('tipousuario','usuarioadmin'));
    }
    public function actualizar(Request $request,  $idu){
        $usuarioadmin= usuarioadmin::findOrFail($idu);
        $usuarioadmin->nombre=$request->nombre;
        $usuarioadmin->apellido=$request->apellido;
        $usuarioadmin->apellidomat=$request->apellidomat;
        $usuarioadmin->correo=$request->correo;
        $usuarioadmin->telefonocelular=$request->telefonocelular;
        $usuarioadmin->activo=$request->activo;
        $usuarioadmin->password=$request->password;
        $usuarioadmin->idtipou=$request->idtipou;
        $usuarioadmin->turno=$request->turno;
        $usuarioadmin->save();
        return redirect('usermanagement')->with('success', 'Se actualizo con exito');

    }
    //ver
    public function show($idu){
        $usuarioadmin = usuarioadmin::select(       
        'usuariosadmin.nombre',
        'usuariosadmin.apellido',
        'usuariosadmin.apellidomat',
        'usuariosadmin.correo',
        'usuariosadmin.activo',
        'usuariosadmin.telefonocelular',
        'usuariosadmin.turno',
        'tipousers.nombre', ) ->join('tipousers','tipousers.idtipou','usuariosadmin.idtipou')->find($idu);
        return view('usuariosadmin.show')->with('usuarioadmin',$usuarioadmin);
    }

    //crear
    public function registro() {
    $tipousuario = tipousuario::all();
        return view('usuariosadmin.add',compact('tipousuario'));
    }
    public function proceso(Request $request){
        $usuario = new usuarioadmin();
        $usuario->nombre = $request->nombre;
        $usuario-> apellido = $request->apellido;
        $usuario-> apellidomat= $request->apellidomat;
        $usuario-> correo= $request->correo;
        $usuario-> password = Hash::make($request->password);
        $usuario-> activo = $request->activo;
        $usuario-> idtipou= $request->idtipou;
        $usuario-> telefonocelular= $request->telefonocelular;
        $usuario-> turno= $request->turno;
        $usuario->save();
        return redirect('usermanagement')->with('success', 'Se realizo con exito');

    }

    //eliminar
    public function destroy($idu)
    {
        dd($idu);
        $usuarioadmin = usuarioadmin::find($idu);
        if (!$usuarioadmin) {
            return redirect('usermanagement')->with('error', 'El usuario no existe');
        }
    
        $usuarioadmin->delete();
        return redirect('usermanagement')->with('success', 'Se borró con éxito');
    }
}
