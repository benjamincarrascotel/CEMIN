<div class="row">
    <div class="col-lg-6 col-md-12">

        <input hidden id="id" name="id" @if($proveedor->id)value="{{$proveedor->id}}"@endif type="text" class="form-control" required>


        <!--TODO setear valor en caso de que exista -->
        <div class="form-group row mb-0">
            <label class="col-md-3 form-label">Sociedad a Facturar o emitir docto.</label>
            <div class="col-md-9">
                <select id="sociedad_a_facturar" name="sociedad_a_facturar" class="form-control select2" required >
                    <option value="{{null}}">Seleccionar opción</option>
                    <option>Compañía Minera Pullalli SpA Rut 78.200.830-7</option>
                    <option>Compañía Explotadora de Minas SpA Rut 89.274.000-3</option>
                    <option>Sociedad de Exploración y Desarrollo Minero Rut 79.812.520-6</option>
                    <option>Minera e Industrial Quimpro Ltda. Rut 79.779.160-1 </option>
                    <option>Insumos Mineros SpA Rut 87.635.600-7 
                    </option>
                    <option>Compañía Minera Falda Verde Rut 81.490.200-5 
                    </option>
                    <option>Compañía Minera El Inglés Rut 89.980.400-7 
                    </option>
                    <option>Minera Pada SpA Rut 76.328.667-3 
                    </option>
                    <option>Sociedad Minera Cerro San Ramón Rut 76.087.584-8 
                    </option>
                    <option>Sociedad Minera Atocha Rut 79.802.600-3 
                    </option>
                    <option>Compañía Minera Hinojal Rut 84.725.100-k 
                    </option>
                    <option>Sociedad de Exploración y Desarrollo Minero Oro Andino Ltda. Rut 78.711.440-7 
                    </option>
                    <option>Compañía Minera Catemu Limitada Rut 82.880.800-1 
                    </option>
                    <option>Compañía Minera Resguardo Rut 79.967.200-6 
                    </option>
                    <option>Minera San Esteban S.A. Rut 76.059.419-9 
                    </option>
                    <option>Sociedad Minera Union Particular Rut 76.056.598-9 
                    </option>
                    <option>Compañía Minera Viñita Azul Rut 79.685.950-4 
                    </option>
                    <option>Up Grade Mining S.A Rut 76.209.657-9 
                    </option>
                    <option>Inversiones Aegis Chile S.A. Rut 96.530.430-4 
                    </option>
                    <option>Inversiones Alfalfa SpA Rut 76.427.574-8 
                    </option>
                    <option>Inversiones Asturias SpA Rut 76.275.003-1 
                    </option>
                    <option>Inversiones Las Catalpas S.A. Rut 76.057.806-1 
                    </option>
                    <option>Inversiones El Espino S.A. Rut 76.350.938-9 
                    </option>
                    <option>Fondo de Inversión Privado Rass Rut 76.057.874-6 
                    </option>
                    <option>Fondo de Inversión Privado Lo Fontecilla Rut 76.072.313-4 
                    </option>
                    <option>Inversiones Hierro Viejo Limitada Rut 76.051.930-8 
                    </option>
                    <option>Inversiones Los Paltos SpA Rut 76.379.467-9 
                    </option>
                    <option>Inmobiliaria Batuco Ltda. Rut 99.530.510-0 
                    </option>
                    <option>Inmobiliaria Cemin Sociedad Anónima Rut 76.042.276-2 
                    </option>
                    <option>Inmobiliaria Llanos del Solar Ltda. Rut 76.377.971-8 
                    </option>
                    <option>Gestora Montecarlo Sociedad Anónima Rut 76.057.794-4 
                    </option>
                    <option>Administradora Quillay S.A. Rut 76.349.375-K 
                    </option>
                    <option>Agricola Batuco Limitada Rut 89.265.900-1 
                    </option>
                    <option>Agrícola Los Almendros Ltda. Rut 77.678.990-9 
                    </option>
                    <option>Comercial Cimet Chile Spa Rut 77.967.100-3 
                    </option>
                    <option>Mepsa Chile SpA Rut 96.871.960-2 
                    </option>
                    <option>Sudamericana de Fibras Chile S.A. Rut 96.799.000-0 
                    </option>
                    <option>Innovations - Solutions, Services And Tools S.A. Rut 76.126.841-4 
                    </option>
                    <option>Innovations - Solutions, Services And Tools S.A. Rut 76.126.841-4 
                    </option>
                    <option>Predictive Analytics S.A. Rut 76.272.482-0 
                    </option>


                </select>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-md-3 form-label">Codigo SAP Sociedad</label>
            <div class="col-md-9">
                <input id="codigo" name="codigo" type="text" class="form-control" required @if($proveedor->codigo)value="{{$proveedor->codigo}}"@endif>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-md-3 form-label">Nombre Solicitante</label>
            <div class="col-md-9">
                <input id="nombre_solicitante" name="nombre_solicitante" type="text" class="form-control" required @if($proveedor->nombre_solicitante)value="{{$proveedor->nombre_solicitante}}"@endif>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-md-3 form-label">Cargo</label>
            <div class="col-md-9">
                <input id="cargo_solicitante" name="cargo_solicitante" type="text" class="form-control" required @if($proveedor->cargo_solicitante)value="{{$proveedor->cargo_solicitante}}"@endif>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-md-3 form-label">Departamento</label>
            <div class="col-md-9">
                <input id="departamento_solicitante" name="departamento_solicitante" type="text" class="form-control" required @if($proveedor->departamento_solicitante)value="{{$proveedor->departamento_solicitante}}"@endif>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-md-3 form-label">Autorizado por <br> (Jefatura del Área)</label>
            <div class="col-md-9">
                <input id="jefatura_solicitante" name="jefatura_solicitante" type="text" class="form-control" required @if($proveedor->jefatura_solicitante)value="{{$proveedor->jefatura_solicitante}}"@endif>
            </div>
        </div>


    </div>
    <div class="col-lg-6 col-md-12">
        <div class="form-group row mb-0">
            <label class="col-md-3 form-label">Condiciones de Pago</label>
            <div class="col-md-9">
                <select id="condiciones_pago" name="condiciones_pago" class="form-control select2" required>
                    <option value="{{null}}">Seleccionar opción</option>
                    <option>15 DIAS</option>
                    <option>30 DIAS</option>
                    <option>CONTADO</option>

                </select>
            </div>
        </div>
        <div class="form-group row mb-0 mt-2">
            <label class="col-md-3 form-label">Tipo de Documento</label>
            <div class="col-md-9">
                <select id="tipo_documento" name="tipo_documento" class="form-control select2" required>
                    <option value="{{null}}">Seleccionar opción</option>
                    <option>FACTURA</option>
                    <option>BOLETA</option>
                    <option>OTRO</option>

                </select>
            </div>
        </div>
        
    </div>

    <div class="mb-3 mt-4">
        <label for="descripcion">Descripción de la compra o el servicio </label>
        <div >
            <textarea class="form-control mb-4 " name='descripcion' id="descripcion" placeholder="Descripción de la compra o servicio" required rows="3" maxlength="249" @if($proveedor->descripcion)value="{{$proveedor->descripcion}}"@endif></textarea>
    
        </div>
    </div>

    <div class="form-group row">
        <label class="col-md-2 form-label">Fecha de solicitud</label>
        <div >
            <input id="fecha_solicitud" name="fecha_solicitud" type="date" class="form-control" style="width: 10%"  required @if($proveedor->fecha_solicitud)value="{{$proveedor->fecha_solicitud}}"@endif>
        </div>
    </div>

</div>