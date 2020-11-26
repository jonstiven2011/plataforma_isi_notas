@extends('layouts.app')

<title>MIS USUARIOS @yield('title')</title>

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        {{-- Boton adicionar usuario --}}
            <a href="{{url('users/create')}}" class="btn btn-success">
                <i class="fa fa-plus"></i>Adicionar Usuario
            </a>
            {{-- Cursos --}}
            <div class="btn-group dropright">
                <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Lista de Cursos
                </button>
                <div class="dropdown-menu">
                    @foreach ($cursos as $curso)
                        <a class="dropdown-item">{{$curso->id}} - {{$curso->name}}</a>
                    @endforeach
                </div>
            </div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('home') }}">Inicio</a></li>
                <li class="breadcrumb-item"><a href="{{ url('cursos') }}">Lista de Cursos</a></li>  
                <li class="breadcrumb-item"><a href="{{ url('clases') }}">Lista de Clases</a></li>  
                <li class="breadcrumb-item"><a href="{{ url('videos') }}">Lista de Videos</a></li>  
                <li class="breadcrumb-item active" aria-current="page">Lista de usuarios</li>
                </ol>
            </nav>
            {{-- <a href="{{url('import')}}" class="btn btn-secondary">
                <i class="fa fa-file-import"></i> Importar Usuarios
            </a>
            <a href="{{ url('generate/pdf/users') }}" class="btn btn-indigo">
                <i class="fa fa-file-pdf"></i> 
                Generar Reporte PDF
            </a>
            <a href="{{ url('generate/excel/users') }}" class="btn btn-indigo">
                <i class="fa fa-file-excel"></i> 
                Generar Reporte EXCEL
            </a> --}}
         {{-- Tabla --}}
            <table class="table table-inverse table-striped table-bordered">
                <thead>
                    <tr class="text-center" style="background-color: #95CAE6; font-family:elvetica,cursive">
                        <th>Nombre Completo</th>
                        <th>Correo Electronico</th>
                        <th>Foto</th>
                        <th class="text-center">ID Cursos </th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{$user->fullname}}</td>
                            <td>{{$user->email}}</td>
                            <td><img src="{{asset($user->photo)}}" width="40px"></td>
                            <td class="text-center">{{$user->curso_1}} - {{$user->curso_2}} - {{$user->curso_3}}</td>
                            <td>
                                {{-- Boton de buscar --}}
                                <a href="{{ url('users/'.$user->id) }}" class="btn btn-indigo btn-sm"> 
                                    <i class="fa fa-search"></i> 
                                </a>
                                {{-- Boton de editar --}}
                                <a href="{{ url('users/'.$user->id.'/edit') }}" class="btn btn-indigo btn-sm"> 
                                    <i class="fa fa-pen"></i> 
                                </a>
                                {{-- Botono de eliminar con seguridad--}}
                                <form action="{{ url('users/'.$user->id) }}" method="post" style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-danger btn-sm btn-delete">
                                      <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="5">
                            {{-- Para paginar --}}
                            {{$users->links()}}
                        </td>
                    </tr>
                </tfoot>
            </table>
            
        </div>
    </div>
</div>
@endsection
