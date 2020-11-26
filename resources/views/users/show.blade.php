@extends('layouts.app')
<title>MI USUARIO @yield('title')</title>
@section('title','PERFIL')

@section('content')
<div class="container">
    <div class="row">
        {{-- Inicio de formulario--}}
        <div class="col-md-8 offset-md-2">
            <h1 class="h3">
                <i class="fa fa-search"></i>
                Consultar Usuario
            </h1>
            <hr>
            {{-- Menu Migajas de pan --}}
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('home') }}">Inicio</a></li>
                <li class="breadcrumb-item"><a href="{{ url('users') }}">Lista de Usuarios</a></li>
                <li class="breadcrumb-item active" aria-current="page">Consultar Usuario</li>
                </ol>
            </nav>
            {{-- Tabla --}}
            <table class="table table-striped table-bordered table-hover">
                <tr>
                    <td colspan="2" class="text-center">
                    <img class="img-thumbnail" src="{{ asset($user->photo) }}" width="200px">
                    </td>
                </tr>
                <tr>
                    <th>Nombre Completo:</th>
                    <td>{{ $user->fullname}}</td>
                </tr>
                <tr>
                    <th>Documento:</th>
                    <td>{{ $user->document}}</td>
                </tr>
                <tr>
                    <th>Correo Electronico:</th>
                    <td>{{ $user->email}}</td>
                </tr>
                <tr>
                    <th>Telefono:</th>
                    <td>{{ $user->phone}}</td>
                </tr>
                <tr>
                    <th>Curso 1:</th>
                    <td>{{ $user->curso_1}}</td>
                </tr>
                <tr>
                    <th>Curso 2:</th>
                    <td>{{ $user->curso_2}}</td>
                </tr>
                <tr>
                    <th>Curso 3:</th>
                    <td>{{ $user->curso_3}}</td>
                </tr>
                <tr>
                    <th>Rol:</th>
                    <td>{{ $user->role}}</td>
                </tr>
            </table>
        
        </div>
    </div>
</div>
@endsection
