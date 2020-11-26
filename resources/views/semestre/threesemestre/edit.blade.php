@extends('layouts.app')
<title>EDITAR NOTAS ALUMNO @yield('title')</title>
@section('content')
<div class="container">
    <div class="row">
        {{-- Inicio de formulario--}}
        <div class="col-md-8 offset-md-2">
            <h1 class="h3">
                <i class="fa fa-user-edit"></i>
                Editando notas del alumno <input style="width: 45%;color:red" value="{{ old('estudiante',$semestre->estudiante) }}" disabled>
            </h1>
            <hr>
            {{-- Menu Migajas de pan --}}
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('home') }}">Inicio</a></li>
                <li class="breadcrumb-item"><a href="{{ url('semestre/onesemestre') }}">Lista de Notas</a></li>
                <li class="breadcrumb-item active" aria-current="page">Editanto Alumno</li>
                </ol>
            </nav>
        <form action="{{url('semestre/threesemestre/'.$semestre->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" value="{{ $semestre->id }}">
                <p style="color: red;font-family:Times New Roman">Todos los campos son requeridos.(*) 
                <a href="#victorModal" role="button" class="btn btn-large btn-light" data-toggle="modal">Instrucciones para llenar el formulario</a></p>
                <!-- Botón en HTML (lanza el modal en Bootstrap) -->
                    
                <div id="victorModal" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            
                            <div class="modal-body">
                                <h3>Información para llenar el formulario</h3>
                                <p align="justify">Los campos donde se ingresan las notas, requieren que mínimo tengan un dato para evitar 
                                    errores al momento de guardar, por tal motivo, si no se va agregar una nota en uno de
                                    los campos, se requiere que en este se agregue el número cero "0".<br>
                                    Ningún campo debe quedar vacío.
                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Nombre Estudiante y ID --}}
                <div class="row">
                    <div class="col">
                        {{-- Nombre Estudiante --}}
                        <div class="form-group">   
                            <input style="width: 85%" id="estudiante" type="hidden" class="form-control @error('estudiante') is-invalid @enderror" name="estudiante" value="{{ old('estudiante',$semestre->estudiante) }}"  autocomplete="estudiante" autofocus>
        
                            @error('estudiante')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col">
                        {{-- ID Estudiante --}}
                        <div class="form-group">
                            <input style="width: 85%" id="user_id" type="hidden" class="form-control @error('user_id') is-invalid @enderror" name="user_id" value="{{ old('user_id',$semestre->user_id) }}"  autocomplete="user_id" autofocus>
        
                            @error('user_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>

                {{-- Formador y Curso --}}
                <div class="row">
                    <div class="col">
                        {{-- Nombre Formador --}}
                        <div class="form-group">
                            <label for="formador" class="text-md-right">Docente*</label>
                            
                            <input style="width: 95%" id="formador" type="text" class="form-control @error('formador') is-invalid @enderror" name="formador" value="{{ old('formador',$semestre->formador) }}"  autocomplete="formador" autofocus >
        
                            @error('formador')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col">
                        {{-- Nombre Curso --}}
                        <div class="form-group">
                            <label for="curso" class="text-md-right">Curso* </label>

                                <select name="curso" id="curso" class="form-control @error('curso') is-invalid @enderror">
                                    <option value="">Seleccione...</option>
                                    @foreach ($cursos as $curso)
                                        <option value="{{ $curso->name }}" @if (old('name', $curso->name) == $curso->name) selected @endif>{{ $curso->name }}</option>
                                    @endforeach
                                </select>
                            @error('curso')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>

                {{-- Sesión 1 y 2--}}
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="nota_1" class="text-md-right">Nota 1*</label>
                            
                            <input style="width: 85%" id="nota_1" type="text" class="form-control @error('nota_1') is-invalid @enderror" name="nota_1" value="{{ old('nota_1',$semestre->nota_1) }}"  autocomplete="nota_1" autofocus>
        
                            @error('nota_1')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="nota_2" class="text-md-right">Nota 2*</label>
                            
                            <input style="width: 85%" id="nota_2" type="text" class="form-control @error('nota_2') is-invalid @enderror" name="nota_2" value="{{ old('nota_2',$semestre->nota_2) }}"  autocomplete="nota_2" autofocus>
        
                            @error('nota_2')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>

                {{-- Sesión 3 y 4--}}
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="nota_3" class="text-md-right">Nota 3*</label>
                            
                            <input style="width: 85%" id="nota_3" type="text" class="form-control @error('nota_3') is-invalid @enderror" name="nota_3" value="{{ old('nota_3',$semestre->nota_3) }}"  autocomplete="nota_3" autofocus>
        
                            @error('nota_3')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="nota_4" class="text-md-right">Nota 4*</label>
                            
                            <input style="width: 85%" id="nota_4" type="text" class="form-control @error('nota_4') is-invalid @enderror" name="nota_4" value="{{ old('nota_4',$semestre->nota_4) }}"  autocomplete="nota_4" autofocus>
        
                            @error('nota_4')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>

                {{-- Sesión 5 y 6--}}
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="nota_5" class="text-md-right">Nota 5*</label>
                            
                            <input style="width: 85%" id="nota_5" type="text" class="form-control @error('nota_5') is-invalid @enderror" name="nota_5" value="{{ old('nota_5',$semestre->nota_5) }}"  autocomplete="nota_5" autofocus>
        
                            @error('nota_5')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="nota_6" class="text-md-right">Nota 6*</label>
                            
                            <input style="width: 85%" id="nota_6" type="text" class="form-control @error('nota_6') is-invalid @enderror" name="nota_6" value="{{ old('nota_6',$semestre->nota_6) }}"  autocomplete="nota_6" autofocus>
        
                            @error('nota_6')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>

                {{-- Sesión 7 y 8--}}
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="nota_7" class="text-md-right">Nota 7*</label>
                            
                            <input style="width: 85%" id="nota_7" type="text" class="form-control @error('nota_7') is-invalid @enderror" name="nota_7" value="{{ old('nota_7',$semestre->nota_7) }}"  autocomplete="nota_7" autofocus>
        
                            @error('nota_7')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="nota_8" class="text-md-right">Nota 8*</label>
                            
                            <input style="width: 85%" id="nota_8" type="text" class="form-control @error('nota_8') is-invalid @enderror" name="nota_8" value="{{ old('nota_8',$semestre->nota_8) }}"  autocomplete="nota_8" autofocus>
        
                            @error('nota_8')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>

                {{-- Sesión 9 y 10--}}
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="nota_9" class="text-md-right">Nota 9*</label>
                            
                            <input style="width: 85%" id="nota_9" type="text" class="form-control @error('nota_9') is-invalid @enderror" name="nota_9" value="{{ old('nota_9',$semestre->nota_9) }}"  autocomplete="nota_9" autofocus>
        
                            @error('nota_9')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="nota_10" class="text-md-right">Nota 10*</label>
                            
                            <input style="width: 85%" id="nota_10" type="text" class="form-control @error('nota_10') is-invalid @enderror" name="nota_10" value="{{ old('nota_10',$semestre->nota_10) }}"  autocomplete="nota_10" autofocus>
        
                            @error('nota_10')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>

                {{-- Sesión 11 y 12--}}
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="nota_11" class="text-md-right">Nota 11*</label>
                            
                            <input style="width: 85%" id="nota_11" type="text" class="form-control @error('nota_11') is-invalid @enderror" name="nota_11" value="{{ old('nota_11',$semestre->nota_11) }}"  autocomplete="nota_11" autofocus>
        
                            @error('nota_11')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="nota_12" class="text-md-right">Nota 12*</label>
                            
                            <input style="width: 85%" id="nota_12" type="text" class="form-control @error('nota_12') is-invalid @enderror" name="nota_12" value="{{ old('nota_12',$semestre->nota_12) }}"  autocomplete="nota_12" autofocus>
        
                            @error('nota_12')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>

                {{-- Sesión 13 y 14--}}
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="nota_13" class="text-md-right">Nota 13*</label>
                            
                            <input style="width: 85%" id="nota_13" type="text" class="form-control @error('nota_13') is-invalid @enderror" name="nota_13" value="{{ old('nota_13',$semestre->nota_13) }}"  autocomplete="nota_13" autofocus>
        
                            @error('nota_13')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="nota_14" class="text-md-right">Nota 14*</label>
                            
                            <input style="width: 85%" id="nota_14" type="text" class="form-control @error('nota_14') is-invalid @enderror" name="nota_14" value="{{ old('nota_14',$semestre->nota_14) }}"  autocomplete="nota_14" autofocus>
        
                            @error('nota_14')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>

                {{-- Sesión 15 y 16--}}
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="nota_15" class="text-md-right">Nota 15*</label>
                            
                            <input style="width: 85%" id="nota_15" type="text" class="form-control @error('nota_15') is-invalid @enderror" name="nota_15" value="{{ old('nota_15',$semestre->nota_15) }}"  autocomplete="nota_15" autofocus>
        
                            @error('nota_15')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="nota_16" class="text-md-right">Nota 16*</label>
                            
                            <input style="width: 85%" id="nota_16" type="text" class="form-control @error('nota_16') is-invalid @enderror" name="nota_16" value="{{ old('nota_16',$semestre->nota_16) }}"  autocomplete="nota_16" autofocus>
        
                            @error('nota_16')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                {{-- Fin Form --}}

                <div class="form-group">
                    <button type="submit" class="btn btn-indigo btn-block">
                        <i class="fa fa-save"></i>
                        Adicionar Notas
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
