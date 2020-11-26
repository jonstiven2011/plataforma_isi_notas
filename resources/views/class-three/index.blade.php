@extends('layouts.app')

<title>MIS CLASES @yield('title')</title>

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        {{-- Boton adicionar usuario --}}
            <a href="{{url('videosthree')}}" class="btn btn-info">
                <i class="fa fa-video"></i>
                Vídeos
            </a>
                {{-- Menu Migajas de pan --}}
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('home') }}">Inicio</a></li>
                <li class="breadcrumb-item active" aria-current="page">Lista de Clases</li>
                </ol>
            </nav>
         {{-- Tabla --}}
            <table class="table table-inverse table-striped table-bordered table-responsive">
                <thead>
                    <tr class="text-center" style="background-color: #95CAE6; font-family:elvetica,cursive">
                        <th>Clase</th>
                        <th>Descripción</th>
                        <th>Instrucciones PDF</th>
                        <th>Presentación PDF</th>
                        <th>Presentaciones Drive</th>
                        <th>Link Formularios</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($class_3 as $clase)
                        <tr>
                            <td>{{$clase->name}}</td>
                            <td>{{$clase->description}}</td>
                            <td class="text-center">
                                @if (old('instrucciones',$clase->instrucciones) == "pdf/no_pdf.pdf")
                                    <a class="btn btn-secondary btn-sm"> 
                                        Ninguno
                                    </a>
                                @elseif (old('instrucciones',$clase->instrucciones) != "pdf/no_pdf.pdf")
                                    <a href="{{$clase->instrucciones}}" class="btn btn-indigo btn-sm" width="40px"> 
                                        <i class="fa fa-file-pdf"> {{$clase->nameinstru}}</i> 
                                    </a>
                                @endif
                            </td>
                            <td class="text-center">
                                <a href="{{$clase->present}}" class="btn btn-indigo btn-sm"> 
                                    1-<i class="fa fa-file-powerpoint"></i> 
                                </a>
                                <a href="{{$clase->present_2}}" class="btn btn-indigo btn-sm"> 
                                    2-<i class="fa fa-file-powerpoint"></i> 
                                </a>
                            </td class="text-center">
                            <td>
                                <a href="{{$clase->pdrive}}" class="btn btn-indigo btn-sm"> 
                                    1-<i class="fa fa-file-import"></i> 
                                </a>
                                <a href="{{$clase->pdrive_2}}" class="btn btn-indigo btn-sm"> 
                                    2-<i class="fa fa-file-import"></i> 
                                </a>
                            </td>
                            <td class="text-center">
                                <a href="{{$clase->formulario}}" class="btn btn-indigo btn-sm"> 
                                   1- <i class="fab fa-google-drive"></i> 
                                </a>
                                <a href="{{$clase->formulario_2}}" class="btn btn-indigo btn-sm"> 
                                    2- <i class="fab fa-google-drive"></i> 
                                 </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="6">
                            {{-- Para paginar --}}
                            {{$clases->links()}}
                        </td>
                    </tr>
                </tfoot>
            </table>
            
        </div>
    </div>
</div>
@endsection
