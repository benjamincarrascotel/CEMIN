@extends('layouts.app')

@section('form_open')
<form class="container-fluid" action="{!! route('contrato.store') !!}" method="post">
@csrf
@endsection

@push('cards')
    @section('card_title')
        Creacion de nuevo Contrato
    @overwrite

    @section('card_content')
        @include('contrato.fields')
    @overwrite

    @include('layouts.card')
@endpush

@section('form_close')
<input type="submit" class="btn btn-primary" value="Guardar" />
<a class="btn btn-dark" href="{{route('superadmin.index')}}">Cancelar</a>
</form>
@endsection