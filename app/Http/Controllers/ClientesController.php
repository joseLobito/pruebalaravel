<?php

namespace App\Http\Controllers;

use App\Clientes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientesController extends Controller
{
    public function index()
    {
        //

        $datos['clientes'] = Clientes::paginate(5);
        return view('clientes.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $campos = [
            'nombre' => 'required',
            'numeroC' => 'required',
            'correo' => 'required',
            'direccion' => 'required',
        ];
        $Mensaje = ["required" => ':attribute es requerido'];
        $this->validate($request, $campos, $Mensaje);
        //
        $datosCliente = request()->except('_token');

        Clientes::insert($datosCliente);
        return redirect('clientes')->with('Mensaje', 'cliente agregado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function show(Request  $request)
    {

        $nombre = $request->get('name');


        $datos = DB::select('select * from clientes where nombre = ?', [$nombre]);
        return view('clientes.clientes',  compact('datos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $cliente = Clientes::findOrFail($id);
        return view('clientes.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosCliente = request()->except(['_token', '_method']);
        Clientes::where('id', '=', $id)->update($datosCliente);

        $clientes = Clientes::findOrFail($id);
        return view('clientes.edit', compact('cliente'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Clientes::destroy($id);
        return redirect('clientes')->with('Mensaje', 'Cliente eliminado con exito');
    }
}
