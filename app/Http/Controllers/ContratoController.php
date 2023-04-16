<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Contrato;
use App\Models\DetalleContrato;
use App\Models\Clasificacion;
use App\Models\Faena;
use App\Models\Area;
use App\Models\Centro;
use App\Models\ServicioBien;
use App\Models\Proveedor;
use App\Models\Admin;
use App\Models\Gestionador;
use App\Models\Accion;
use App\Models\TipoContrato;



class ContratoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $selectedID = 0;
        //Clasificaciones
        $clasificaciones = Clasificacion::pluck('nombre_clasificacion', 'id');
        //Faenas
        $faenas = Faena::pluck('nombre_faena', 'id');
        //Areas
        $areas = Area::pluck('nombre_area', 'id');
        //Centros
        $centros = Centro::pluck('nombre_centro', 'id');
        //Servicios o Bienes
        $servicios_bienes = ServicioBien::orderBy('nombre_servicio_bien')->pluck('nombre_servicio_bien', 'id');
        //Proveedores
        $proveedores = Proveedor::pluck('nombre', 'id');
        //Gestionadores
        $gestionadores = Gestionador::pluck('nombre', 'id');
        //Gestionadores
        $abastecimiento_users = Admin::pluck('email', 'id');
        //Acciones
        $acciones = Accion::pluck('nombre_accion', 'id');
        //Tipo de Contratos
        $tipo_contratos = TipoContrato::pluck('nombre_tipo', 'id');

        return view('contrato.create', compact('clasificaciones', 'faenas', 'areas', 'centros', 'servicios_bienes', 'proveedores', 'gestionadores', 'abastecimiento_users', 'acciones', 'tipo_contratos', 'selectedID'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //TODO incorporar validator
        $input = $request->all();

        if(!isset($input['kpi'])){
            $input['kpi'] = null;
        }
        if(!isset($input['polinomio'])){
            $input['polinomio'] = null;
        }


        //dd($input);
        $contrato = Contrato::create([
            'clasificacion_id' => $input['clasificacion_id'],
            'tipo_contrato_general' => $input['tipo_contrato_general'],
            'faena_id' => $input['faena_id'],
            'area_id' => $input['area_id'],
            'centro_id' => $input['centro_id'],
            'servicio_bien_id' => $input['servicio_bien_id'],
            //'categoria_id' => 1, 
            'proveedor_id' => $input['proveedor_id'],
            'contrato_sap' => $input['contrato_sap'],
            'gestionador' => $input['gestionador_id'],
            'usuario' => $input['gestionador_id'],
            'abastecimiento_user_id' => $input['abastecimiento_user_id'],
            'descripcion' => $input['descripcion'],
            'estado_contrato' => 1, //"Estado dummy"
            'estatus' => 1, //"SEMAFORO"
        ]);

        $detalle_contrato = DetalleContrato::create([
            'contrato_id' => $contrato->id,
            'gasto_anual' => $input['gasto_anual'],
            'fecha_inicio' => $input['fecha_inicio'],
            'fecha_termino' => $input['fecha_termino'],
            'facturacion_mensual' => $input['facturacion_mensual'],
            'monto_factible' => 2, //CALCULABLE
            //'categoria_id' => 1, 
            'puntos_FM' => $input['puntos_FM'], //Verrificar cálculo
            'dotacion' => $input['dotacion'],
            'puntos_DOT' => $input['puntos_DOT'], //Verrificar cálculo
            'interferencia_ops' => $input['interferencia_ops'],
            'puntos_interf' => 3, //Verrificar cálculo
            'duracion' => $input['duracion'],
            'puntos_duracion' => 1, //calculable
            'tipo_contrato_id' => $input['tipo_contrato_id'],
            'puntos_tipo_contrato' => $input['puntos_tipo_contrato'], 
            'porcentaje_1' => 2, //CALCULABLE
            'riesgo_negocio' => $input['riesgo_negocio'], 
            'criticidad_ops' => $input['criticidad_ops'], 
            'criticidad_personas' => $input['criticidad_personas'], 
            'cantidad_areas_invo' => $input['cantidad_areas_invo'], 
            'porcentaje_2' => 2, //CALCULABLE 
            'transversal' => $input['transversal'], 
            'accion_id' => $input['accion_id'], 
            'kpi' => $input['kpi'], //boolean
            'polinomio' => $input['polinomio'], //boolean
        ]);

        return redirect()->intended('/superadmin');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
