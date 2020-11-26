@extends('layouts.app')

<title>SEMESTRES @yield('title')</title>
{{--
    Para iniciar sesion
    <div class="card-body">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
</div> --}}

@section('content')
<div class="container">
    <div class="row justify-content-center">
        {{-- Inicio de tarjeta --}}
        <div class="col-md-4">
            <div class="card">
                <div class="card">
                    <img src="{{ asset('imgs/ISI/icons/1semestre.png') }}" class="card-img-top" height="240px">
                    <div class="card-body">
                        <a href="{{ url('semestre/onesemestre') }}" class="btn btn-indigo btn-block">Semestre 1</a>
                    </div>
                </div>
            </div>
        </div>
        {{-- Inicio de tarjeta --}}
        <div class="col-md-4">
            <div class="card">
                <div class="card">
                    <img src="{{ asset('imgs/ISI/icons/2semestre.png') }}" class="card-img-top" height="240px">
                    <div class="card-body">
                        <a href="{{ url('semestre/twosemestre') }}" class="btn btn-indigo btn-block">Semestre 2</a>
                    </div>
                </div>
            </div>
        </div>
        {{-- Inicio de tarjeta --}}
        <div class="col-md-4">
            <div class="card">
                <div class="card">
                    <img src="{{ asset('imgs/ISI/icons/3semestre.png') }}" class="card-img-top" height="240px">
                    <div class="card-body">
                        <a href="{{ url('semestre/threesemestre') }}" class="btn btn-indigo btn-block">Semestre 3</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
