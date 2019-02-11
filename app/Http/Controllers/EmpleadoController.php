<?php

namespace App\Http\Controllers;

use App\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $empleados = Empleado::all();
        return view('empleados.index',compact('empleados'));
    }

    public function create(){
        return view ('empleados.create');
    }

    public function store(Request $request){

        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'documento' => 'required|numeric',
        ]);

        $empleado = new Empleado();
        $empleado->nombre = $request->nombre;
        $empleado->apellido = $request->apellido;
        $empleado->documento = $request->documento;

        $empleado->save();

        return redirect()->route('empleados.index');
    }
}
