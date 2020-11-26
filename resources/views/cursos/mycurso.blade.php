@extends('layouts.app')

<title>MIS CURSOS @yield('title')</title>

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            {{-- Navar  --}}
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('home') }}">Inicio</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Mis Cursos</li>
                </ol>
            </nav>
         {{-- Tabla --}}
            <table class="table table-inverse table-striped table-bordere table-responsive">
                <thead>
                    <tr>
                        <th>Nombre Curso</th>
                        <th>Descripción</th>
                        <th>Foto</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @foreach ($cursos as $curso)
                        <tr>
                            <td><a href="{{ url('editor') }}">{{$curso->name}}</a></td>
                            <td>{{$curso->description}}</td>
                            <td><img src="{{asset($curso->image)}}" width="250px"></td>
                        </tr>
                    @endforeach --}}
                   
                </tbody>
                {{-- <tfoot>
                    <tr>
                        <td colspan="4">
                            {{$cursos->links()}}
                        </td>
                    </tr>
                </tfoot> --}}
            </table>
            
        </div>
    </div>
</div>
@endsection
