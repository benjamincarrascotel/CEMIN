<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FaseContrato extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $table = 'fase_contratos';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'contrato_id',

        //TODO agregar fase creada a DB
        'solicitud_de_base', //0
        'envio_bases_primera_revision', //1
        'primera_revision_bases_por_abastecimiento', //2
        'envio_bases_segunda_revision', //3
        'segunda_revision_bases_por_abastecimiento', //4
        'recopilacion_de_informacion', //5
        'invitacion_a_oferentes', //6
        'visita_a_terreno', //7
        'preguntas_y_consultas_proponente', //8
        'respuestas_del_mandante', //9
        'recepcion_de_ofertas_tecnicas_economicas', //10
        'evaluacion_ofertas_tecnicas', //11
        'evaluacion_ofertas_economicas', //12
        'comite_de_inversiones', //13
        'adjudicacion', //14
        'actual', //15


    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:i:s',
        // 'fecha' => 'datetime:Y-m-d H:i:s'
    ];
}
