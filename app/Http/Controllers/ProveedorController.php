<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proveedor;

class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proveedores = Proveedor::get();
        //dd("hola");
        return view('proveedor.index', compact('proveedores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $selectedID = 0;
        
        return view('proveedor.create', compact('selectedID'));

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        //Seteamos valores de checkboxes
        if(!isset($input['cheque_checkbox'])){
            $input['cheque_checkbox'] = 0;
            $request['cheque_checkbox'] = 0;
        }
        if(!isset($input['vale_vista_checkbox'])){
            $input['vale_vista_checkbox'] = 0;
            $request['vale_vista_checkbox'] = 0;
        }
        //dd($input);


        // Verificamos si existe y actualizamos o creamos nuevo registro
        $data = $request->except('_token');
        $existente = Proveedor::where('rut', $input['rut'])->first();
        $actualizado_flag = 0;
        if($existente === null){
            Proveedor::create($data);
        }else{
            $actualizado_flag = 1;
            $existente->update($data);
        }

        return view('proveedor.created_success')->with('nombre', $existente['nombre']);
        //return redirect()->route('proveedor.create');
    }

    public function store2(Request $request)
    {
        $input = $request->all();

        
        //dd($input);


        // Verificamos si existe y actualizamos o creamos nuevo registro
        $data = $request->except('_token');
        $existente = Proveedor::where('id', $input['id'])->first();
        $actualizado_flag = 0;
        if($existente === null){
            //
        }else{
            $actualizado_flag = 1;
            $existente->update($data);
        }

        flash("Datos de Proveedor actualizados con éxito.", 'success');

        return redirect()->route('proveedor.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $proveedor = Proveedor::find($id);
        return view('proveedor.show', compact('proveedor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
