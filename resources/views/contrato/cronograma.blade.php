@extends('layouts.app')

@section('content')

    @section('title')
    &nbsp;
    <h3>
        Cronograma Licitación
    </h3>
    &nbsp;
    @endsection

    @push('cards')
        @section('card_title')
            Sección 1
        @overwrite
        
        @section('card_content')
            Contenido de la sección...
        @overwrite
        @include('layouts.card')
    @endpush


    @section('down_cards')
    <div class="row">
        <div class="col">
            <a href="" class='btn btn-primary'>Opción 1</a>
        </div>
    </div>
    @endsection

@endsection
