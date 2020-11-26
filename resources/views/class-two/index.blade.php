@extends('layouts.app')

<title>MIS CLASES @yield('title')</title>

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        {{-- Boton adicionar usuario --}}
            <a href="{{url('videostwo')}}" class="btn btn-info">
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
                        <th>Instrucciones de la Clase</th>
                        <th>Guia PDF</th>
                        <th>Guia Drive</th>
                        <th>Tareas</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($class_2 as $clase)
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
                                @if (old('present',$clase->present) == "pdf/no_pdf.pdf" && old('present_2',$clase->present_2) == "pdf/no_pdf.pdf")
                                    <a class="btn btn-secondary btn-sm"> 
                                        Ninguno
                                    </a>
                                @elseif(old('present',$clase->present) != "pdf/no_pdf.pdf" && old('present_2',$clase->present_2) == "pdf/no_pdf.pdf")
                                    <a href="{{$clase->present}}" class="btn btn-indigo btn-sm"> 
                                        1-<i class="fa fa-file-powerpoint"></i> 
                                    </a>
                                @elseif(old('present',$clase->present) == "pdf/no_pdf.pdf" && old('present_2',$clase->present_2) != "pdf/no_pdf.pdf")
                                    <a href="{{$clase->present_2}}" class="btn btn-indigo btn-sm"> 
                                        1-<i class="fa fa-file-powerpoint"></i> 
                                    </a>
                                @elseif(old('present',$clase->present) != "pdf/no_pdf.pdf" && old('present_2',$clase->present_2) != "pdf/no_pdf.pdf")
                                    <a href="{{$clase->present}}" class="btn btn-indigo btn-sm"> 
                                        1-<i class="fa fa-file-powerpoint"></i> 
                                    </a>
                                    <a href="{{$clase->present_2}}" class="btn btn-info btn-sm"> 
                                        2-<i class="fa fa-file-powerpoint"></i> 
                                    </a>
                                @endif
                            </td class="text-center">
                            <td>
                                @if (old('pdrive',$clase->pdrive) == "ninguno" && old('pdrive_2',$clase->pdrive_2) == "ninguno")
                                    <a class="btn btn-secondary btn-sm"> 
                                        Ninguno<i class="fa fa-file-import"></i> 
                                    </a>
                                @elseif(old('pdrive',$clase->pdrive) != "ninguno" && old('pdrive_2',$clase->pdrive_2) == "ninguno") 
                                    <a href="{{$clase->pdrive}}" class="btn btn-indigo btn-sm"> 
                                        1-<i class="fa fa-file-import"></i> 
                                    </a>
                                @elseif(old('pdrive',$clase->pdrive) == "ninguno" && old('pdrive_2',$clase->pdrive_2) != "ninguno") 
                                    <a href="{{$clase->pdrive_2}}" class="btn btn-indigo btn-sm"> 
                                        1-<i class="fa fa-file-import"></i> 
                                    </a>
                                @elseif(old('pdrive',$clase->pdrive) != "ninguno" && old('pdrive_2',$clase->pdrive_2) != "ninguno") 
                                    <a href="{{$clase->pdrive}}" class="btn btn-indigo btn-sm"> 
                                        1-<i class="fa fa-file-import"></i> 
                                    </a>
                                    <a href="{{$clase->pdrive_2}}" class="btn btn-info btn-sm"> 
                                        2-<i class="fa fa-file-import"></i> 
                                    </a>
                                @endif
                            </td>
                            <td class="text-center">
                                @if (old('formulario',$clase->formalario) == "ninguno" && old('formulario_2',$clase->formulario_2) == "ninguno")
                                    <a class="btn btn-secondary btn-sm"> 
                                        Ninguno<i class="fa fa-file-import"></i> 
                                    </a>
                                @elseif(old('formulario',$clase->formulario) != "ninguno" && old('formulario_2',$clase->formulario_2) == "ninguno") 
                                    <a href="{{$clase->formulario}}" class="btn btn-indigo btn-sm"> 
                                        1-<i class="fa fa-file-import"></i> 
                                    </a>
                                @elseif(old('formulario',$clase->formulario) == "ninguno" && old('formulario_2',$clase->formulario_2) != "ninguno") 
                                    <a href="{{$clase->formulario_2}}" class="btn btn-indigo btn-sm"> 
                                        1-<i class="fa fa-file-import"></i> 
                                    </a>
                                @elseif(old('formulario',$clase->formulario) != "ninguno" && old('formulario_2',$clase->formulario_2) != "ninguno") 
                                    <a href="{{$clase->formulario}}" class="btn btn-indigo btn-sm"> 
                                        1-<i class="fa fa-file-import"></i> 
                                    </a>
                                    <a href="{{$clase->formulario_2}}" class="btn btn-info btn-sm"> 
                                        2-<i class="fa fa-file-import"></i> 
                                    </a>
                                @endif
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


