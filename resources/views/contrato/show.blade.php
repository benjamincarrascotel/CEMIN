@extends('layouts.app')

@section('content')

    @section('title')
    &nbsp;
    <h3>
        Contrato ID: {{$contrato->id}} - Código SAP N°{{$contrato->contrato_sap ?? ''}} - Proveedor "{{$contrato->proveedor->nombre}}"
    </h3>
    &nbsp;
    @endsection

    @push('cards')
        @section('card_title')
            Información
            <span title="TOOL TIP DE AYUDA PARA ESTA TABLA.">
                <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M2 7C2 4.23858 4.23858 2 7 2H17C19.7614 2 22 4.23858 22 7V17C22 19.7614 19.7614 22 17 22H7C4.23858 22 2 19.7614 2 17V7ZM7 4C5.34315 4 4 5.34315 4 7V17C4 18.6569 5.34315 20 7 20H17C18.6569 20 20 18.6569 20 17V7C20 5.34315 18.6569 4 17 4H7ZM12 7.5C10.5523 7.5 10 8.55229 10 9C10 9.55229 9.55228 10 9 10C8.44772 10 8 9.55229 8 9C8 7.44772 9.44771 5.5 12 5.5C13.1557 5.5 14.1702 5.78891 14.9085 6.43492C15.6643 7.09623 16 8.01748 16 9C16 10.1875 15.6945 11.0279 15.1178 11.6677C14.8502 11.9645 14.5539 12.1844 14.2896 12.3608C14.1648 12.4442 14.0375 12.524 13.9223 12.5962L13.9043 12.6075C13.7803 12.6853 13.6678 12.7561 13.5575 12.8302C13.2061 13.0662 13.0643 13.2421 13.0061 13.3563C12.9615 13.4436 12.9296 13.5614 12.9786 13.7942C13.0922 14.3347 12.7462 14.865 12.2058 14.9786C11.6653 15.0922 11.135 14.7462 11.0214 14.2058C10.8952 13.6054 10.938 13.0088 11.2247 12.4472C11.4975 11.9124 11.9434 11.505 12.4425 11.1698C12.5822 11.076 12.7197 10.9896 12.8418 10.9131L12.851 10.9073C12.9733 10.8306 13.0787 10.7646 13.1791 10.6975C13.3836 10.561 13.5248 10.4478 13.6322 10.3286C13.8055 10.1363 14 9.81253 14 9C14 8.48252 13.8357 8.15377 13.5915 7.94008C13.3298 7.71109 12.8443 7.5 12 7.5ZM12 15.7812C11.4477 15.7812 11 16.229 11 16.7812C11 17.3335 11.4477 17.7812 12 17.7812C12.5523 17.7812 13 17.3335 13 16.7812C13 16.229 12.5523 15.7812 12 15.7812Z" fill="black"/>
                </svg>
            </span>
        @overwrite
        
        @section('card_content')
        <div class="row">
                <div class="card">
                    <div class="card-body">
                        <div class="panel panel-light">
                            <div class="tab-menu-heading">
                                <div class="tabs-menu ">
                                    <!-- Tabs -->
                                    <ul class="nav panel-tabs shop-des-tabs">
                                        <li class=""><a href="#tab1" class="active" data-bs-toggle="tab">Description General</a></li>
                                        <li class=""><a href="#tab2" data-bs-toggle="tab">Detalles</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="panel-body tabs-menu-body fs-13">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab1">
                                        <ul>
                                            <li class="row mb-5">
                                                <div class="col-sm-3 text-muted">Clasificación</div>
                                                <div class="col-sm-9">{{$contrato->clasificacion->nombre_clasificacion}}</div>
                                            </li>
                                            <li class="row mb-5">
                                                <div class="col-sm-3 text-muted">Tipo de Contrato (General)</div>
                                                <div class="col-sm-9">{{$contrato->tipo_contrato_general}}</div>
                                            </li>
                                            <li class="row mb-5">
                                                <div class="col-sm-3 text-muted">Tipo de Contrato (Específico)</div>
                                                <div class="col-sm-9">{{$contrato->detalle_contrato[0]->tipo_contrato->nombre_tipo}}</div>
                                            </li>
                                            <li class="row mb-5">
                                                <div class="col-sm-3 text-muted">Faena</div>
                                                <div class="col-sm-9">{{$contrato->faena->nombre_faena}}</div>
                                            </li>
                                            <li class="row mb-5">
                                                <div class="col-sm-3 text-muted">Área</div>
                                                <div class="col-sm-9">{{$contrato->area->nombre_area}}</div>
                                            </li>
                                            <li class="row mb-5">
                                                <div class="col-sm-3 text-muted">Centro</div>
                                                <div class="col-sm-9">{{$contrato->centro->nombre_centro}}</div>
                                            </li>
                                            <li class="row mb-5">
                                                <div class="col-sm-3 text-muted">Servicio / Bien</div>
                                                <div class="col-sm-9">{{$contrato->servicio_bien->nombre_servicio_bien}}</div>
                                            </li>
                                            <li class="row mb-5">
                                                <div class="col-sm-3 text-muted">Proveedor</div>
                                                <div class="col-sm-9">{{$contrato->proveedor->nombre}}</div>
                                            </li>
                                            <li class="row mb-5">
                                                <div class="col-sm-3 text-muted">Contrato SAP</div>
                                                <div class="col-sm-9">{{$contrato->contrato_sap}}</div>
                                            </li>
                                            <li class="row mb-5">
                                                <div class="col-sm-3 text-muted">Admin de Contrato</div>
                                                <div class="col-sm-9">{{$contrato->admin_contrato->nombre}}</div>
                                            </li>
                                            <li class="row mb-5">
                                                <div class="col-sm-3 text-muted">Abastecimiento</div>
                                                <div class="col-sm-9">{{$contrato->abastecimiento_user->nombre}}</div>
                                            </li>
                                            <li class="row mb-5">
                                                <div class="col-sm-3 text-muted">Descripción</div>
                                                <div class="col-sm-9">{{$contrato->descripcion}}</div>
                                            </li>
                                            <li class="row mb-5">
                                                <div class="col-sm-3 text-muted">Estado Contrato</div>
                                                <div class="col-sm-9">{{$contrato->estatus}}</div>
                                            </li>
                                            
                                        </ul>
                                    </div>
                                    <div class="tab-pane" id="tab2">
                                        <ul>
                                            <li class="row mb-5">
                                                <div class="col-sm-3 text-muted">
                                                    Gasto anual
                                                </div>
                                                <div class="col-sm-9">
                                                    {{$contrato->detalle_contrato[0]->gasto_anual}}
                                                </div>
                                            </li>
                                            <li class="row mb-5">
                                                <div class="col-sm-3 text-muted">
                                                    Fecha Inicio
                                                </div>
                                                <div class="col-sm-9">
                                                    {{Carbon\Carbon::parse($contrato->detalle_contrato[0]->fecha_inicio)->format('d-m-Y')}}
                                                </div>
                                            </li>
                                            <li class="row mb-5">
                                                <div class="col-sm-3 text-muted">
                                                    Fecha Término
                                                </div>
                                                <div class="col-sm-3">
                                                    {{Carbon\Carbon::parse($contrato->detalle_contrato[0]->fecha_termino)->format('d-m-Y')}}
                                                </div>
                                            </li>
                                            <li class="row mb-5">
                                                <div class="col-sm-3 text-muted">
                                                    Facturación Mensual
                                                </div>
                                                <div class="col-sm-3">
                                                    {{$contrato->detalle_contrato[0]->facturacion_mensual}}
                                                </div>
                                            </li>
                                            <li class="row mb-5">
                                                <div class="col-sm-3 text-muted">
                                                    Monto Factible
                                                </div>
                                                <div class="col-sm-3">
                                                    {{$contrato->detalle_contrato[0]->monto_factible}}
                                                </div>
                                            </li>
                                            <li class="row mb-5">
                                                <div class="col-sm-3 text-muted">
                                                    Interferencia Ops
                                                </div>
                                                <div class="col-sm-3">
                                                    {{$contrato->detalle_contrato[0]->interferencia_ops}}
                                                </div>
                                            </li>
                                            <li class="row mb-5">
                                                <div class="col-sm-3 text-muted">
                                                    Duración
                                                </div>
                                                <div class="col-sm-3">
                                                    @if($contrato->detalle_contrato[0]->duracion == 1)
                                                        {{$contrato->detalle_contrato[0]->duracion}} [Mes]
                                                    @else 
                                                        {{$contrato->detalle_contrato[0]->duracion}} [Meses]
                                                    @endif

                                                </div>
                                            </li>
                                            <li class="row mb-5">
                                                <div class="col-sm-3 text-muted">
                                                    Porcentaje 1
                                                </div>
                                                <div class="col-sm-3">
                                                    {{$contrato->detalle_contrato[0]->porcentaje_1 *100}}%
                                                </div>
                                            </li>
                                            <li class="row mb-5">
                                                <div class="col-sm-3 text-muted">
                                                    Riesgo Negocio
                                                </div>
                                                <div class="col-sm-3">
                                                    {{$contrato->detalle_contrato[0]->riesgo_negocio}}
                                                </div>
                                            </li>
                                            <li class="row mb-5">
                                                <div class="col-sm-3 text-muted">
                                                    Criticidad Ops
                                                </div>
                                                <div class="col-sm-3">
                                                    {{$contrato->detalle_contrato[0]->criticidad_ops}}
                                                </div>
                                            </li>
                                            <li class="row mb-5">
                                                <div class="col-sm-3 text-muted">
                                                    Criticidad Personas
                                                </div>
                                                <div class="col-sm-3">
                                                    {{$contrato->detalle_contrato[0]->criticidad_personas}}
                                                </div>
                                            </li>
                                            <li class="row mb-5">
                                                <div class="col-sm-3 text-muted">
                                                    Cantidad Áreas Involucradas
                                                </div>
                                                <div class="col-sm-3">
                                                    {{$contrato->detalle_contrato[0]->cantidad_areas_invo}}
                                                </div>
                                            </li>
                                            <li class="row mb-5">
                                                <div class="col-sm-3 text-muted">
                                                    Procentaje 2
                                                </div>
                                                <div class="col-sm-3">
                                                    {{$contrato->detalle_contrato[0]->porcentaje_2*100}}%
                                                </div>
                                            </li>
                                            <li class="row mb-5">
                                                <div class="col-sm-3 text-muted">
                                                    Transversal
                                                </div>
                                                <div class="col-sm-3">
                                                    {{$contrato->detalle_contrato[0]->transversal}}
                                                </div>
                                            </li>
                                            <li class="row mb-5">
                                                <div class="col-sm-3 text-muted">
                                                    Acción
                                                </div>
                                                <div class="col-sm-3">
                                                    {{$contrato->detalle_contrato[0]->accion_contrato->nombre_accion}}
                                                </div>
                                            </li>
                                            <li class="row mb-5">
                                                <div class="col-sm-3 text-muted">
                                                    KPI
                                                </div>
                                                <div class="col-sm-3">
                                                    @if($contrato->detalle_contrato[0]->kpi)
                                                        SI
                                                    @else
                                                        NO
                                                    @endif
                                                </div>
                                            </li>
                                            <li class="row mb-5">
                                                <div class="col-sm-3 text-muted">
                                                    Polinomio
                                                </div>
                                                <div class="col-sm-3">
                                                    @if($contrato->detalle_contrato[0]->polinomio)
                                                        SI
                                                    @else
                                                        NO
                                                    @endif
                                                </div>
                                            </li>


                                        </ul>
                                    <div class=""></div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            
        </div>
        @overwrite
        @include('layouts.card')
    @endpush

    @section('down_cards')
    <div class="row">
        <div class="col">
            <a href="" class='btn btn-primary'>Pasar a Fase: "Envio bases primera revisión"</a>
        </div>
    </div>
    @endsection

@endsection
