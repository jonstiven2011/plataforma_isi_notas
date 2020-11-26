@extends('layouts.app')
<title>MIS CURSOS @yield('title')</title>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        {{-- Inicio de tarjeta --}}
        
        @foreach ($course_1 as $curso)
            <div class="col-md-4">
                <div class="card">
                    <div class="card">
                        <img src="{{ asset($curso->image) }}" class="card-img-top" height="240px">
                        <div class="card-body">
                            <p class="card-text text-center">{{$curso->description}}</p>
                            <a href="{{ url('editor') }}" class="btn btn-indigo btn-block">{{$curso->name}}</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        @foreach ($course_2 as $curso)
            <div class="col-md-4">
                <div class="card">
                    <div class="card">
                        <img src="{{ asset($curso->image) }}" class="card-img-top" height="240px">
                        <div class="card-body">
                            <p class="card-text text-center">{{$curso->description}}</p>
                            <a href="{{ url('class-two') }}" class="btn btn-indigo btn-block">{{$curso->name}}</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        @foreach ($course_3  as $curso)
        <div class="col-md-4">
            <div class="card">
                <div class="card">
                    <img src="{{ asset($curso->image) }}" class="card-img-top" height="240px">
                    <div class="card-body">
                        <p class="card-text text-center">{{$curso->description}}</p>
                        <a href="{{ url('class-three') }}" class="btn btn-indigo btn-block">{{$curso->name}}</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        <div class="col-md-4">
            <div class="card">
                <div class="card">
                    <img src="{{ asset('imgs/ISI/icons/Notas.png') }}" class="card-img-top" height="240px">
                    <div class="card-body">
                        <a href="{{ url('semesters') }}" class="btn btn-indigo btn-block">Notas Académicas</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection