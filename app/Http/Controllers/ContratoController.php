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
use App\Models\AdminContrato;
use App\Models\AccionContrato;
use App\Models\TipoContrato;
use App\Models\FaseContrato;

use Carbon\Carbon;




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
        //Admin Contratos
        $admin_contratos = AdminContrato::pluck('nombre', 'id');
        //Abastecimiento Users
        $abastecimiento_users = Admin::pluck('email', 'id');
        //Acciones
        $acciones = AccionContrato::pluck('nombre_accion', 'id');
        //Tipo de Contratos
        $tipo_contratos = TipoContrato::pluck('nombre_tipo', 'id');

        return view('contrato.create', compact('clasificaciones', 'faenas', 'areas', 'centros', 'servicios_bienes', 'proveedores', 'admin_contratos', 'abastecimiento_users', 'acciones', 'tipo_contratos', 'selectedID'));

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

        // Cálculo de puntos y demaces

        $monto_factible = $input['monto_factible'];
        // PUNTOS FM
        $puntos_FM = (int)$input['puntos_FM'];
        // PUNTOS DOT
        if($input['dotacion']>40){
            $puntos_DOT = 10;
        }else if($input['dotacion']>= 15 && $input['dotacion']<=40){
            $puntos_DOT = 5;
        }else if($input['dotacion']<15){
            $puntos_DOT = 1;
        }else{
            $puntos_DOT = 0;
        }
        // PUNTOS INTERFERENCIA
        if($input['interferencia_ops']== 'Alta'){
            $puntos_interf = 10;
        }else if($input['dotacion']== 'Media'){
            $puntos_interf = 5;
        }else if($input['dotacion'] == 'Baja'){
            $puntos_interf = 1;
        }else{
            $puntos_interf = 0;
        }
        // PUNTOS DURACION
        if($input['duracion']>36){
            $puntos_duracion = 10;
        }else if($input['duracion']>= 24 && $input['duracion']<=36){
            $puntos_duracion = 7;
        }else if($input['duracion']>= 12 && $input['duracion']<=24){
            $puntos_duracion = 5;
        }else if($input['duracion']<12){
            $puntos_duracion = 1;
        }else{
            $puntos_duracion = 0;
        }
        // PUNTOS TIPO DE CONTRATO
        $tipo = TipoContrato::where('id',$input['tipo_contrato_id'])->first();
        if(isset($tipo->nombre_tipo)){
            $tipo = $tipo->nombre_tipo;
        }else{
            $tipo = null;
        }

        if($tipo == 'Operación'){
            $puntos_tipo_contrato = 10;
        }else if($tipo == 'Inversión'){
            $puntos_tipo_contrato = 5;
        }else if($tipo == 'Asesoria'){
            $puntos_tipo_contrato = 1;
        }else{
            $puntos_tipo_contrato = 0;
        }

        $porcentaje_1 = ($puntos_DOT*0.23 + $puntos_FM*0.23 + $puntos_interf*0.23 + $puntos_duracion*0.2 + $puntos_tipo_contrato*0.11)/10;

        // RIESGO NEGOCIO
        if($input['riesgo_negocio'] == '10'){
            $riesgo_negocio = 10;
        }else if($input['riesgo_negocio'] == '5'){
            $riesgo_negocio = 5;
        }else if($input['riesgo_negocio'] == '1'){
            $riesgo_negocio = 1;
        }else{
            $riesgo_negocio = 0;
        }
        // CRITICIDAD OPS
        if($input['criticidad_ops'] == 'Alta'){
            $criticidad_ops = 10;
        }else if($input['criticidad_ops'] == 'Media'){
            $criticidad_ops = 5;
        }else if($input['criticidad_ops'] == 'Baja'){
            $criticidad_ops = 1;
        }else{
            $criticidad_ops = 0;
        }
        // CRITICIDAD Personas
        if($input['criticidad_personas'] == 'Alta'){
            $criticidad_personas = 10;
        }else if($input['criticidad_personas'] == 'Media'){
            $criticidad_personas = 5;
        }else if($input['criticidad_personas'] == 'Baja'){
            $criticidad_personas = 1;
        }else{
            $criticidad_personas = 0;
        }
        // CANTIDAD ÁREAS INVOLUCRADAS
        if($input['cantidad_areas_invo'] == 'Todas'){
            $cantidad_areas_invo = 10;
        }else if($input['cantidad_areas_invo'] == 'Media'){
            $cantidad_areas_invo = 5;
        }else if($input['cantidad_areas_invo'] == 'Una'){
            $cantidad_areas_invo = 1;
        }else{
            $cantidad_areas_invo = 0;
        }

        $porcentaje_2 = ($riesgo_negocio*0.35 + $criticidad_ops*0.25 + $criticidad_personas*0.25 + $cantidad_areas_invo*0.15)/10;


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
            'admin_contrato_id' => $input['admin_contrato_id'],
            'usuario' => $input['admin_contrato_id'],
            'abastecimiento_user_id' => $input['abastecimiento_user_id'],
            'descripcion' => $input['descripcion'],
            'estado_contrato' => 0, //"Estado dummy"
            'estatus' => "Solicitud de base", //"SEMAFORO"
        ]);

        $fase_contrato = FaseContrato::create([
            'contrato_id' => $contrato->id,
            'solicitud_de_base' => Carbon::now(),
            'actual' => 0,
        ]);

        $detalle_contrato = DetalleContrato::create([
            'contrato_id' => $contrato->id,
            'gasto_anual' => $input['gasto_anual'],
            'fecha_inicio' => $input['fecha_inicio'],
            'fecha_termino' => $input['fecha_termino'],
            'facturacion_mensual' => $input['facturacion_mensual'],
            'monto_factible' => $monto_factible, //CALCULABLE
            //'categoria_id' => 1, 
            'puntos_FM' => $puntos_FM, //Verrificar cálculo
            'dotacion' => $input['dotacion'],
            'puntos_DOT' => $puntos_DOT, //Verrificar cálculo
            'interferencia_ops' => $input['interferencia_ops'],
            'puntos_interf' => $puntos_interf, //Verrificar cálculo
            'duracion' => $input['duracion'],
            'puntos_duracion' => $puntos_duracion, //calculable
            'tipo_contrato_id' => $input['tipo_contrato_id'],
            'puntos_tipo_contrato' => $puntos_tipo_contrato, //calculable
            'porcentaje_1' => $porcentaje_1, //CALCULABLE
            'riesgo_negocio' => $input['riesgo_negocio'], 
            'criticidad_ops' => $input['criticidad_ops'], 
            'criticidad_personas' => $input['criticidad_personas'], 
            'cantidad_areas_invo' => $input['cantidad_areas_invo'], 
            'porcentaje_2' => $porcentaje_2, //CALCULABLE 
            'transversal' => $input['transversal'], 
            'accion_id' => $input['accion_id'], 
            'kpi' => $input['kpi'], //boolean
            'polinomio' => $input['polinomio'], //boolean
        ]);

        return redirect()->intended('/superadmin');


    }


    // Vistas de Power BI

    public function detalles()
    {
        return view('contrato.detalles');
    }

    public function plan()
    {
        return view('contrato.plan');
    }

    public function fechas()
    {
        return view('contrato.fechas');
    }

    public function cronograma()
    {
        return view('contrato.cronograma');
    }

    public function kpis()
    {
        return view('contrato.kpis');
    }






    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contrato = Contrato::where('id', $id)
            ->first();
        return view('contrato.show')->with('contrato', $contrato);
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
