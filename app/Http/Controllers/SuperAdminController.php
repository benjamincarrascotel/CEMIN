<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Contrato;
use App\Models\DetalleContrato;

class SuperAdminController extends Controller
{
    public function index()
    {
        $contratos = Contrato::with('clasificacion')
            ->with('faena')
            ->with('area')
            ->with('centro')
            ->with('servicio_bien')
            ->with('proveedor')
            ->with('admin_contrato')
            ->with('tipo_contrato')
            ->with('detalle_contrato')
            ->with('fase_contrato')
            ->get();

        return view('superadmin.index')
            ->with('contratos', $contratos);
    }

}
