@extends('layouts.app')

@push('cards')
    @section('page_title')
        Usuarios
    @overwrite
    @section('card_content')
    <table class="table data-table-global">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <!--
                <th>Acción</th>
                -->
            </tr>
        </thead>
        <tbody>
        @foreach($usuarios as $usuario)
            <tr>
                <td>{{$usuario->id}}</td>
                <td>{{$usuario->name}}</td>
                <td>{{$usuario->email}}</td>
                <td>
                    <div class="btn-group" role="group">
                        <!--
                        <a class="btn btn-primary" href="{!! route('usuarios.show', [$usuario->id]) !!}"><i class='fas fa-info'></i> Ver</a>
                        <a class="btn btn-primary" href="{!! route('usuarios.edit', [$usuario->id]) !!}"><i class='fas fa-edit'></i>Editar</a>
                        -->
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <a href='{{route('usuarios.create')}}' class="btn btn-primary">CREAR USUARIO</a>

    @overwrite
    @include('layouts.card_no_title')
@endpush

