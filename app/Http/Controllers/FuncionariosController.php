<?php

namespace App\Http\Controllers;

use App\Models\Funcionarios;
use Illuminate\Http\Request;

class FuncionariosController extends Controller
{
    public function index() 
    {

        $funcionarios = Funcionarios::orderBy('fecha_nacimiento_funcionario','desc')->paginate(50);

        return view('funcionarios', [
            'funcionarios' => $funcionarios,
        ]);

    }

    public function show()
    {
        return view('formulario');
    }

    public function store(Request $request )
    {

        $this->validate($request, [
            'rut_funcionario' => 'required|max:10|min:8',
            'nombre_funcionario' => 'required|max:30',
            'direccion_funcionario'  => 'required',
            'fecha_nacimiento_funcionario'  => 'required',
            'estado_funcionario'  => 'required'
        ]);

        Funcionarios::create([
            'rut_funcionario' => $request->rut_funcionario,
            'nombre_funcionario' => $request->nombre_funcionario,
            'direccion_funcionario'  => $request->direccion_funcionario,
            'fecha_nacimiento_funcionario' => $request->fecha_nacimiento_funcionario,
            'estado_funcionario' => $request->estado_funcionario
        ]);

        return redirect()->route('funcionarios.index')->with('success','Ingreso de funcionario realizado con exito.');
    }


    public function rut($rut_funcionario)
    {

     $funcionario=funcionarios::firstwhere('rut_funcionario', $rut_funcionario);
        
        return response()->json($funcionario, 200, []);
     
    }

    
}
