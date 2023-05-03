<!-- Tipo de Contrato General -->
<div class="mb-3 row">

    @if($fase_actual != 15 && $fase_actual != 16 && $fase_actual != 17)

        <label for="siguiente_fase_id" class="col-sm-2 col-form-label">Siguiente Fase: </label>
        <div class="col-sm-8">
            <select class="form-control block mt-1 w-full" name="siguiente_fase_id" id="siguiente_fase_id" > 
                @switch($fase_actual)
                    @case("0")
                        <option value="1" >                
                            SOLICITUD DE BASE                
                        </option>
                        @break
                    @case("1")
                        <option value="2" >                
                            ENVIO BASES PRIMERA REVISION     
                        </option>
                        @break
                    @case("2")
                        <option value="3" >                
                            PRIMERA REVISON BASES POR ABASTECIMIENTO             
                        </option>
                        @break
                    @case("3")
                        <option value="4" >                
                            ENVIO BASES SEGUNDA REVISION            
                        </option>
                        @break
                    @case("4")
                        <option value="5" >                
                            SEGUNDA REVISION BASES POR ABASTECIMIENTO             
                        </option>
                        @break
                    @case("5")
                        <option value="6" >                
                            RECOPILACION DE INFORMACION             
                        </option>
                        @break
                    @case("6")
                        <option value="7" >                
                            INVITACION A OFERENTES             
                        </option>
                        @break
                    @case("7")
                        <option value="8" >                
                            VISITA A TERRENO             
                        </option>
                        @break
                    @case("8")
                        <option value="9" >                
                            PREGUNTAS Y CONSULTAS PROPONENTE             
                        </option>
                        @break
                    @case("9")
                        <option value="10" >                
                            RESPUESTAS DEL MANDANTE             
                        </option>
                        @break
                    @case("10")
                        <option value="11" >                
                            RECEPCION DE OFERTAS TECNICAS ECONOMICAS             
                        </option>
                        @break
                    @case("11")
                        <option value="12" >                
                            EVALUACION OFERTAS TECNICAS             
                        </option>
                        @break
                    @case("12")
                        <option value="13" >                
                            EVALUACION OFERTAS ECONOMICAS             
                        </option>
                        @break
                    @case("13")
                        <option value="14" >                
                            COMITE DE INVERSIONES
                        </option> 
                        @break
                    @case("14")
                        <option value="15" >                
                            ADJUDICACION
                        </option>
                        @break                    
                @endswitch

                <option value="16" >                
                    STAND BY
                </option>
                <option value="17" >                
                    ADJUDICACION DIRECTA
                </option>

            </select>
        </div>
        <div class="mt-1 col-sm-2">
            <input type="submit" class="btn btn-success" value="Cambiar de Fase" />

        </div>
    @elseif($fase_actual == 16 && $fase_actual != 17)
        <h1>Contrato en Fase: <b>STAND BY   /    Fecha: {{Carbon\Carbon::parse($fases_contrato->stand_by)->format('d-m-Y')}}</b> </h1>
    @elseif($fase_actual == 17)
        <h1>Contrato en Fase: <b>ADJUDICACION DIRECTA    /    Fecha: {{Carbon\Carbon::parse($fases_contrato->adjudicacion_directa)->format('d-m-Y')}}</b> </h1>

    @endif
</div>
<!--
<div class="mb-3 row">
    <label for="comentario" class="col-sm-2 col-form-label">Comentario </label>
    <div class="col-sm-10">
        <textarea class="form-control mb-4 " name='comentario' id="comentario" placeholder="Comentario" rows="3" maxlength="249" ></textarea>

    </div>
</div>
-->