@extends('layouts.app')
<title>SEGUNDO SEMESTRE   @yield('title')</title>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">  
                <h1 class="h3" align="center">
                    <i class="fa fa-clipboard-list"></i>
                    SEGUNDO SEMESTRE
                </h1>
                <hr>
         {{-- Tabla --}}
            <table class="table table-inverse table-striped table-bordered table-responsive">
                <thead>
                    <tr class="text-center" style="background-color: #95CAE6; font-family:elvetica,cursive">
                        <th>Curso</th>
                        <th>Docente</th>
                        <th>Nota 1</th>
                        <th>Nota 2</th>
                        <th>Nota 3</th>
                        <th>Nota 4</th>
                        <th>Nota 5</th>
                        <th>Nota 6</th>
                        <th>Nota 7</th>
                        <th>Nota 8</th>
                        <th>Nota 9</th>
                        <th>Nota 10</th>
                        <th>Nota 11</th>
                        <th>Nota 12</th>
                        <th>Nota 13</th>
                        <th>Nota 14</th>
                        <th>Nota 15</th>
                        <th>Nota 16</th>
                        <th style="color: green">Nota Definitiva</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($semestre as $one)
                    <tr>                                    
                        <td>{{$one->curso}}</td>
                        <td>{{$one->formador}}</td>
                        <td>@if(old('nota_1', $one->nota_1) <= 0 )Sin nota @else <b>{{round($one->nota_1,1)}}</b>@endif</td>
                        <td>@if(old('nota_2', $one->nota_2) <= 0 )Sin nota @else <b>{{round($one->nota_2,1)}}</b>@endif</td>
                        <td>@if(old('nota_3', $one->nota_3) <= 0 )Sin nota @else <b>{{round($one->nota_3,1)}}</b>@endif</td>
                        <td>@if(old('nota_4', $one->nota_4) <= 0 )Sin nota @else <b>{{round($one->nota_4,1)}}</b>@endif</td>
                        <td>@if(old('nota_5', $one->nota_5) <= 0 )Sin nota @else <b>{{round($one->nota_5,1)}}</b>@endif</td>
                        <td>@if(old('nota_6', $one->nota_6) <= 0 )Sin nota @else <b>{{round($one->nota_6,1)}}</b>@endif</td>
                        <td>@if(old('nota_7', $one->nota_7) <= 0 )Sin nota @else <b>{{round($one->nota_7,1)}}</b>@endif</td>
                        <td>@if(old('nota_8', $one->nota_8) <= 0 )Sin nota @else <b>{{round($one->nota_8,1)}}</b>@endif</td>
                        <td>@if(old('nota_9', $one->nota_9) <= 0 )Sin nota @else <b>{{round($one->nota_9,1)}}</b>@endif</td>
                        <td>@if(old('nota_10', $one->nota_10) <= 0 )Sin nota @else <b>{{round($one->nota_10,1)}}</b>@endif</td>
                        <td>@if(old('nota_11', $one->nota_11) <= 0 )Sin nota @else <b>{{round($one->nota_11,1)}}</b>@endif</td>
                        <td>@if(old('nota_12', $one->nota_12) <= 0 )Sin nota @else <b>{{round($one->nota_12,1)}}</b>@endif</td>
                        <td>@if(old('nota_13', $one->nota_13) <= 0 )Sin nota @else <b>{{round($one->nota_13,1)}}</b>@endif</td>
                        <td>@if(old('nota_14', $one->nota_14) <= 0 )Sin nota @else <b>{{round($one->nota_14,1)}}</b>@endif</td>
                        <td>@if(old('nota_15', $one->nota_15) <= 0 )Sin nota @else <b>{{round($one->nota_15,1)}}</b>@endif</td>
                        <td>@if(old('nota_16', $one->nota_16) <= 0 )Sin nota @else <b>{{round($one->nota_16,1)}}</b>@endif</td>
                        @if ((
                            old('nota_1', $one->nota_1) > 0 && old('nota_2', $one->nota_2) > 0 && old('nota_3', $one->nota_3) <= 0 && old('nota_4', $one->nota_4) <= 0
                            && old('nota_5', $one->nota_5) <= 0 && old('nota_6', $one->nota_6) <= 0 && old('nota_7', $one->nota_7) <= 0 && old('nota_8', $one->nota_8) <= 0
                            && old('nota_9', $one->nota_9) <= 0 && old('nota_10', $one->nota_10) <= 0 && old('nota_11', $one->nota_11) <= 0 && old('nota_12', $one->nota_12) <= 0
                            && old('nota_13', $one->nota_13) <= 0 && old('nota_14', $one->nota_14) <= 0 && old('nota_15', $one->nota_15) <= 0 && old('nota_16', $one->nota_16) <= 0))
                            @if(($one->nota_1+$one->nota_2)/2 < 3)
                                <td style="color: red; font-size: 20px"><b> {{round(($one->nota_1+$one->nota_2)/2,1)}}</b></td>
                            @else
                                <td style="color: 0DA52F; font-size: 20px"><b> {{round(($one->nota_1+$one->nota_2)/2,1)}}</b></td> 
                            @endif       
                        @elseif((
                            old('nota_1', $one->nota_1) > 0 && old('nota_2', $one->nota_2) > 0 && old('nota_3', $one->nota_3) > 0 && old('nota_4', $one->nota_4) <= 0
                            && old('nota_5', $one->nota_5) <= 0 && old('nota_6', $one->nota_6) <= 0 && old('nota_7', $one->nota_7) <= 0 && old('nota_8', $one->nota_8) <= 0
                            && old('nota_9', $one->nota_9) <= 0 && old('nota_10', $one->nota_10) <= 0 && old('nota_11', $one->nota_11) <= 0 && old('nota_12', $one->nota_12) <= 0
                            && old('nota_13', $one->nota_13) <= 0 && old('nota_14', $one->nota_14) <= 0 && old('nota_15', $one->nota_15) <= 0 && old('nota_16', $one->nota_16) <= 0))
                            @if(($one->nota_1+$one->nota_2+$one->nota_3)/3 < 3)
                                <td style="color: red; font-size: 20px"><b> {{round(($one->nota_1+$one->nota_2+$one->nota_3)/3,1)}}</b></td>   
                            @else 
                                <td style="color: 0DA52F; font-size: 20px"><b> {{round(($one->nota_1+$one->nota_2+$one->nota_3)/3,1)}}</b></td> 
                            @endif   
                        @elseif((
                            old('nota_1', $one->nota_1) > 0 && old('nota_2', $one->nota_2) > 0 && old('nota_3', $one->nota_3) > 0 && old('nota_4', $one->nota_4) > 0
                            && old('nota_5', $one->nota_5) <= 0 && old('nota_6', $one->nota_6) <= 0 && old('nota_7', $one->nota_7) <= 0 && old('nota_8', $one->nota_8) <= 0
                            && old('nota_9', $one->nota_9) <= 0 && old('nota_10', $one->nota_10) <= 0 && old('nota_11', $one->nota_11) <= 0 && old('nota_12', $one->nota_12) <= 0
                            && old('nota_13', $one->nota_13) <= 0 && old('nota_14', $one->nota_14) <= 0 && old('nota_15', $one->nota_15) <= 0 && old('nota_16', $one->nota_16) <= 0))
                            @if(($one->nota_1+$one->nota_2+$one->nota_3+$one->nota_4)/4 < 3)
                                <td style="color: red; font-size: 20px"><b> {{round(($one->nota_1+$one->nota_2+$one->nota_3+$one->nota_4)/4,1)}}</b></td> 
                            @else
                                <td style="color: 0DA52F; font-size: 20px"><b> {{round(($one->nota_1+$one->nota_2+$one->nota_3+$one->nota_4)/4,1)}}</b></td>
                            @endif
                        @elseif((
                            old('nota_1', $one->nota_1) > 0 && old('nota_2', $one->nota_2) > 0 && old('nota_3', $one->nota_3) > 0 && old('nota_4', $one->nota_4) > 0
                            && old('nota_5', $one->nota_5) > 0 && old('nota_6', $one->nota_6) <= 0 && old('nota_7', $one->nota_7) <= 0 && old('nota_8', $one->nota_8) <= 0
                            && old('nota_9', $one->nota_9) <= 0 && old('nota_10', $one->nota_10) <= 0 && old('nota_11', $one->nota_11) <= 0 && old('nota_12', $one->nota_12) <= 0
                            && old('nota_13', $one->nota_13) <= 0 && old('nota_14', $one->nota_14) <= 0 && old('nota_15', $one->nota_15) <= 0 && old('nota_16', $one->nota_16) <= 0))
                            @if (($one->nota_1+$one->nota_2+$one->nota_3+$one->nota_4+$one->nota_5)/5 < 3)
                                <td style="color: red; font-size: 20px"><b> {{round(($one->nota_1+$one->nota_2+$one->nota_3+$one->nota_4+$one->nota_5)/5,1)}}</b></td>
                            @else
                                <td style="color: 0DA52F; font-size: 20px"><b> {{round(($one->nota_1+$one->nota_2+$one->nota_3+$one->nota_4+$one->nota_5)/5,1)}}</b></td>
                            @endif
                        @elseif((
                            old('nota_1', $one->nota_1) > 0 && old('nota_2', $one->nota_2) > 0 && old('nota_3', $one->nota_3) > 0 && old('nota_4', $one->nota_4) > 0
                            && old('nota_5', $one->nota_5) > 0 && old('nota_6', $one->nota_6) > 0 && old('nota_7', $one->nota_7) <= 0 && old('nota_8', $one->nota_8) <= 0
                            && old('nota_9', $one->nota_9) <= 0 && old('nota_10', $one->nota_10) <= 0 && old('nota_11', $one->nota_11) <= 0 && old('nota_12', $one->nota_12) <= 0
                            && old('nota_13', $one->nota_13) <= 0 && old('nota_14', $one->nota_14) <= 0 && old('nota_15', $one->nota_15) <= 0 && old('nota_16', $one->nota_16) <= 0))
                            @if (($one->nota_1+$one->nota_2+$one->nota_3+$one->nota_4+$one->nota_5+$one->nota_6)/6 < 3)
                                <td style="color: red; font-size: 20px"><b> {{round(($one->nota_1+$one->nota_2+$one->nota_3+$one->nota_4+$one->nota_5+$one->nota_6)/6,1)}}</b></td>
                            @else
                                <td style="color: 0DA52F; font-size: 20px"><b> {{round(($one->nota_1+$one->nota_2+$one->nota_3+$one->nota_4+$one->nota_5+$one->nota_6)/6,1)}}</b></td>    
                            @endif
                        @elseif((
                            old('nota_1', $one->nota_1) > 0 && old('nota_2', $one->nota_2) > 0 && old('nota_3', $one->nota_3) > 0 && old('nota_4', $one->nota_4) > 0
                            && old('nota_5', $one->nota_5) > 0 && old('nota_6', $one->nota_6) > 0 && old('nota_7', $one->nota_7) > 0 && old('nota_8', $one->nota_8) <= 0
                            && old('nota_9', $one->nota_9) <= 0 && old('nota_10', $one->nota_10) <= 0 && old('nota_11', $one->nota_11) <= 0 && old('nota_12', $one->nota_12) <= 0
                            && old('nota_13', $one->nota_13) <= 0 && old('nota_14', $one->nota_14) <= 0 && old('nota_15', $one->nota_15) <= 0 && old('nota_16', $one->nota_16) <= 0))
                            @if (($one->nota_1+$one->nota_2+$one->nota_3+$one->nota_4+$one->nota_5+$one->nota_6+$one->nota_7)/7 < 3)
                                <td style="color: red; font-size: 20px"><b> {{round(($one->nota_1+$one->nota_2+$one->nota_3+$one->nota_4+$one->nota_5+$one->nota_6+$one->nota_7)/7,1)}}</b></td>
                            @else
                                <td style="color: 0DA52F; font-size: 20px"><b> {{round(($one->nota_1+$one->nota_2+$one->nota_3+$one->nota_4+$one->nota_5+$one->nota_6+$one->nota_7)/7,1)}}</b></td>
                            @endif
                        @elseif((
                            old('nota_1', $one->nota_1) > 0 && old('nota_2', $one->nota_2) > 0 && old('nota_3', $one->nota_3) > 0 && old('nota_4', $one->nota_4) > 0
                            && old('nota_5', $one->nota_5) > 0 && old('nota_6', $one->nota_6) > 0 && old('nota_7', $one->nota_7) > 0 && old('nota_8', $one->nota_8) > 0
                            && old('nota_9', $one->nota_9) <= 0 && old('nota_10', $one->nota_10) <= 0 && old('nota_11', $one->nota_11) <= 0 && old('nota_12', $one->nota_12) <= 0
                            && old('nota_13', $one->nota_13) <= 0 && old('nota_14', $one->nota_14) <= 0 && old('nota_15', $one->nota_15) <= 0 && old('nota_16', $one->nota_16) <= 0))
                            @if (($one->nota_1+$one->nota_2+$one->nota_3+$one->nota_4+$one->nota_5+$one->nota_6+$one->nota_7+$one->nota_8)/8 <3)
                                <td style="color: red; font-size: 20px"><b> {{round(($one->nota_1+$one->nota_2+$one->nota_3+$one->nota_4+$one->nota_5+$one->nota_6+$one->nota_7
                                +$one->nota_8)/8,1)}}</b></td>
                            @else
                                <td style="color: 0DA52F; font-size: 20px"><b> {{round(($one->nota_1+$one->nota_2+$one->nota_3+$one->nota_4+$one->nota_5+$one->nota_6+$one->nota_7
                                +$one->nota_8)/8,1)}}</b></td>
                            @endif
                        @elseif((
                            old('nota_1', $one->nota_1) > 0 && old('nota_2', $one->nota_2) > 0 && old('nota_3', $one->nota_3) > 0 && old('nota_4', $one->nota_4) > 0
                            && old('nota_5', $one->nota_5) > 0 && old('nota_6', $one->nota_6) > 0 && old('nota_7', $one->nota_7) > 0 && old('nota_8', $one->nota_8) > 0
                            && old('nota_9', $one->nota_9) > 0 && old('nota_10', $one->nota_10) <= 0 && old('nota_11', $one->nota_11) <= 0 && old('nota_12', $one->nota_12) <= 0
                            && old('nota_13', $one->nota_13) <= 0 && old('nota_14', $one->nota_14) <= 0 && old('nota_15', $one->nota_15) <= 0 && old('nota_16', $one->nota_16) <= 0))
                            @if (($one->nota_1+$one->nota_2+$one->nota_3+$one->nota_4+$one->nota_5+$one->nota_6+$one->nota_7+$one->nota_8+$one->nota_9)/9 < 3)
                            <td style="color: red; font-size: 20px"><b> {{round(($one->nota_1+$one->nota_2+$one->nota_3+$one->nota_4+$one->nota_5+$one->nota_6+$one->nota_7
                                +$one->nota_8+$one->nota_9)/9,1)}}</b></td>
                            @else
                            <td style="color: 0DA52F; font-size: 20px"><b> {{round(($one->nota_1+$one->nota_2+$one->nota_3+$one->nota_4+$one->nota_5+$one->nota_6+$one->nota_7
                                +$one->nota_8+$one->nota_9)/9,1)}}</b></td>
                            @endif
                        @elseif((
                            old('nota_1', $one->nota_1) > 0 && old('nota_2', $one->nota_2) > 0 && old('nota_3', $one->nota_3) > 0 && old('nota_4', $one->nota_4) > 0
                            && old('nota_5', $one->nota_5) > 0 && old('nota_6', $one->nota_6) > 0 && old('nota_7', $one->nota_7) > 0 && old('nota_8', $one->nota_8) > 0
                            && old('nota_9', $one->nota_9) > 0 && old('nota_10', $one->nota_10) > 0 && old('nota_11', $one->nota_11) <= 0 && old('nota_12', $one->nota_12) <= 0
                            && old('nota_13', $one->nota_13) <= 0 && old('nota_14', $one->nota_14) <= 0 && old('nota_15', $one->nota_15) <= 0 && old('nota_16', $one->nota_16) <= 0))
                            @if (($one->nota_1+$one->nota_2+$one->nota_3+$one->nota_4+$one->nota_5+$one->nota_6+$one->nota_7+$one->nota_8+$one->nota_9+$one->nota_10)/10 < 3)
                                <td style="color: red; font-size: 20px"><b> {{round(($one->nota_1+$one->nota_2+$one->nota_3+$one->nota_4+$one->nota_5+$one->nota_6+$one->nota_7
                                +$one->nota_8+$one->nota_9+$one->nota_10)/10,1)}}</b></td>
                            @else
                                <td style="color: 0DA52F; font-size: 20px"><b> {{round(($one->nota_1+$one->nota_2+$one->nota_3+$one->nota_4+$one->nota_5+$one->nota_6+$one->nota_7
                                +$one->nota_8+$one->nota_9+$one->nota_10)/10,1)}}</b></td>
                            @endif
                        @elseif((
                            old('nota_1', $one->nota_1) > 0 && old('nota_2', $one->nota_2) > 0 && old('nota_3', $one->nota_3) > 0 && old('nota_4', $one->nota_4) > 0
                            && old('nota_5', $one->nota_5) > 0 && old('nota_6', $one->nota_6) > 0 && old('nota_7', $one->nota_7) > 0 && old('nota_8', $one->nota_8) > 0
                            && old('nota_9', $one->nota_9) > 0 && old('nota_10', $one->nota_10) > 0 && old('nota_11', $one->nota_11) > 0 && old('nota_12', $one->nota_12) <= 0
                            && old('nota_13', $one->nota_13) <= 0 && old('nota_14', $one->nota_14) <= 0 && old('nota_15', $one->nota_15) <= 0 && old('nota_16', $one->nota_16) <= 0))
                            @if (($one->nota_1+$one->nota_2+$one->nota_3+$one->nota_4+$one->nota_5+$one->nota_6+$one->nota_7+$one->nota_8+$one->nota_9+$one->nota_10+$one->nota_11)/11 < 3)
                                <td style="color: red; font-size: 20px"><b> {{round(($one->nota_1+$one->nota_2+$one->nota_3+$one->nota_4+$one->nota_5+$one->nota_6+$one->nota_7
                                +$one->nota_8+$one->nota_9+$one->nota_10+$one->nota_11)/11,1)}}</b></td>
                            @else
                                <td style="color: 0DA52F; font-size: 20px"><b> {{round(($one->nota_1+$one->nota_2+$one->nota_3+$one->nota_4+$one->nota_5+$one->nota_6+$one->nota_7
                                +$one->nota_8+$one->nota_9+$one->nota_10+$one->nota_11)/11,1)}}</b></td>
                            @endif
                        @elseif((
                            old('nota_1', $one->nota_1) > 0 && old('nota_2', $one->nota_2) > 0 && old('nota_3', $one->nota_3) > 0 && old('nota_4', $one->nota_4) > 0
                            && old('nota_5', $one->nota_5) > 0 && old('nota_6', $one->nota_6) > 0 && old('nota_7', $one->nota_7) > 0 && old('nota_8', $one->nota_8) > 0
                            && old('nota_9', $one->nota_9) > 0 && old('nota_10', $one->nota_10) > 0 && old('nota_11', $one->nota_11) > 0 && old('nota_12', $one->nota_12) > 0
                            && old('nota_13', $one->nota_13) <= 0 && old('nota_14', $one->nota_14) <= 0 && old('nota_15', $one->nota_15) <= 0 && old('nota_16', $one->nota_16) <= 0))
                            @if (($one->nota_1+$one->nota_2+$one->nota_3+$one->nota_4+$one->nota_5+$one->nota_6+$one->nota_7+$one->nota_8+$one->nota_9+$one->nota_10+$one->nota_11+$one->nota_12)/12 < 3)
                                <td style="color: red; font-size: 20px"><b> {{round(($one->nota_1+$one->nota_2+$one->nota_3+$one->nota_4+$one->nota_5+$one->nota_6+$one->nota_7
                                +$one->nota_8+$one->nota_9+$one->nota_10+$one->nota_11+$one->nota_12)/12,1)}}</b></td>
                            @else
                                <td style="color: 0DA52F; font-size: 20px"><b> {{round(($one->nota_1+$one->nota_2+$one->nota_3+$one->nota_4+$one->nota_5+$one->nota_6+$one->nota_7
                                +$one->nota_8+$one->nota_9+$one->nota_10+$one->nota_11+$one->nota_12)/12,1)}}</b></td>
                            @endif
                        @elseif((
                            old('nota_1', $one->nota_1) > 0 && old('nota_2', $one->nota_2) > 0 && old('nota_3', $one->nota_3) > 0 && old('nota_4', $one->nota_4) > 0
                            && old('nota_5', $one->nota_5) > 0 && old('nota_6', $one->nota_6) > 0 && old('nota_7', $one->nota_7) > 0 && old('nota_8', $one->nota_8) > 0
                            && old('nota_9', $one->nota_9) > 0 && old('nota_10', $one->nota_10) > 0 && old('nota_11', $one->nota_11) > 0 && old('nota_12', $one->nota_12) > 0
                            && old('nota_13', $one->nota_13) > 0 && old('nota_14', $one->nota_14) <= 0 && old('nota_15', $one->nota_15) <= 0 && old('nota_16', $one->nota_16) <= 0))
                            @if (($one->nota_1+$one->nota_2+$one->nota_3+$one->nota_4+$one->nota_5+$one->nota_6+$one->nota_7+$one->nota_8+$one->nota_9+$one->nota_10+$one->nota_11+$one->nota_12+$one->nota_13)/13 < 3)
                                <td style="color: red; font-size: 20px"><b> {{round(($one->nota_1+$one->nota_2+$one->nota_3+$one->nota_4+$one->nota_5+$one->nota_6+$one->nota_7
                                +$one->nota_8+$one->nota_9+$one->nota_10+$one->nota_11+$one->nota_12+$one->nota_13)/13,1)}}</b></td>
                            @else
                                <td style="color: 0DA52F; font-size: 20px"><b> {{round(($one->nota_1+$one->nota_2+$one->nota_3+$one->nota_4+$one->nota_5+$one->nota_6+$one->nota_7
                                +$one->nota_8+$one->nota_9+$one->nota_10+$one->nota_11+$one->nota_12+$one->nota_13)/13,1)}}</b></td>
                            @endif
                        @elseif((
                            old('nota_1', $one->nota_1) > 0 && old('nota_2', $one->nota_2) > 0 && old('nota_3', $one->nota_3) > 0 && old('nota_4', $one->nota_4) > 0
                            && old('nota_5', $one->nota_5) > 0 && old('nota_6', $one->nota_6) > 0 && old('nota_7', $one->nota_7) > 0 && old('nota_8', $one->nota_8) > 0
                            && old('nota_9', $one->nota_9) > 0 && old('nota_10', $one->nota_10) > 0 && old('nota_11', $one->nota_11) > 0 && old('nota_12', $one->nota_12) > 0
                            && old('nota_13', $one->nota_13) > 0 && old('nota_14', $one->nota_14) > 0 && old('nota_15', $one->nota_15) <= 0 && old('nota_16', $one->nota_16) <= 0))
                            @if (($one->nota_1+$one->nota_2+$one->nota_3+$one->nota_4+$one->nota_5+$one->nota_6+$one->nota_7+$one->nota_8+$one->nota_9+$one->nota_10+$one->nota_11+$one->nota_12+$one->nota_13+$one->nota_14)/14 < 3)
                                <td style="color: red; font-size: 20px"><b> {{round(($one->nota_1+$one->nota_2+$one->nota_3+$one->nota_4+$one->nota_5+$one->nota_6+$one->nota_7
                                +$one->nota_8+$one->nota_9+$one->nota_10+$one->nota_11+$one->nota_12+$one->nota_13+$one->nota_14)/14,1)}}</b></td>
                            @else
                                <td style="color: 0DA52F; font-size: 20px"><b> {{round(($one->nota_1+$one->nota_2+$one->nota_3+$one->nota_4+$one->nota_5+$one->nota_6+$one->nota_7
                                +$one->nota_8+$one->nota_9+$one->nota_10+$one->nota_11+$one->nota_12+$one->nota_13+$one->nota_14)/14,1)}}</b></td>
                            @endif
                        @elseif((
                            old('nota_1', $one->nota_1) > 0 && old('nota_2', $one->nota_2) > 0 && old('nota_3', $one->nota_3) > 0 && old('nota_4', $one->nota_4) > 0
                            && old('nota_5', $one->nota_5) > 0 && old('nota_6', $one->nota_6) > 0 && old('nota_7', $one->nota_7) > 0 && old('nota_8', $one->nota_8) > 0
                            && old('nota_9', $one->nota_9) > 0 && old('nota_10', $one->nota_10) > 0 && old('nota_11', $one->nota_11) > 0 && old('nota_12', $one->nota_12) > 0
                            && old('nota_13', $one->nota_13) > 0 && old('nota_14', $one->nota_14) > 0 && old('nota_15', $one->nota_15) > 0 && old('nota_16', $one->nota_16) <= 0))
                            @if (($one->nota_1+$one->nota_2+$one->nota_3+$one->nota_4+$one->nota_5+$one->nota_6+$one->nota_7+$one->nota_8+$one->nota_9+$one->nota_10+$one->nota_11+$one->nota_12+$one->nota_13+$one->nota_14+$one->nota_15)/15 < 3)
                                <td style="color: red; font-size: 20px"><b> {{round(($one->nota_1+$one->nota_2+$one->nota_3+$one->nota_4+$one->nota_5+$one->nota_6+$one->nota_7
                                +$one->nota_8+$one->nota_9+$one->nota_10+$one->nota_11+$one->nota_12+$one->nota_13+$one->nota_14+$one->nota_15)/15,1)}}</b></td>
                            @else
                                <td style="color: 0DA52F; font-size: 20px"><b> {{round(($one->nota_1+$one->nota_2+$one->nota_3+$one->nota_4+$one->nota_5+$one->nota_6+$one->nota_7
                                +$one->nota_8+$one->nota_9+$one->nota_10+$one->nota_11+$one->nota_12+$one->nota_13+$one->nota_14+$one->nota_15)/15,1)}}</b></td>
                            @endif
                        @elseif((
                            old('nota_1', $one->nota_1) > 0 && old('nota_2', $one->nota_2) > 0 && old('nota_3', $one->nota_3) > 0 && old('nota_4', $one->nota_4) > 0
                            && old('nota_5', $one->nota_5) > 0 && old('nota_6', $one->nota_6) > 0 && old('nota_7', $one->nota_7) > 0 && old('nota_8', $one->nota_8) > 0
                            && old('nota_9', $one->nota_9) > 0 && old('nota_10', $one->nota_10) > 0 && old('nota_11', $one->nota_11) > 0 && old('nota_12', $one->nota_12) > 0
                            && old('nota_13', $one->nota_13) > 0 && old('nota_14', $one->nota_14) > 0 && old('nota_15', $one->nota_15) > 0 && old('nota_16', $one->nota_16) > 0))
                            @if (($one->nota_definitiva)/16 < 3)
                                <td style="color: red; font-size: 20px"><b> {{round(($one->nota_definitiva)/16,1)}}</b></td>
                            @else
                                <td style="color: 0DA52F; font-size: 20px"><b> {{round(($one->nota_definitiva)/16,1)}}</b></td>
                            @endif
                            
                        @endif
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
