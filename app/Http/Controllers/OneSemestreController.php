<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Curso;
use App\Clase;
use App\User;
use App\Onesemester;
use Auth; 
use App\Http\Requests\OnesemestreRequest;
class OneSemestreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->role == 'admin') {
            $onesemestre = Onesemester::orderBy('user_id','ASC')->paginate(15);
            $users       = User::all();
            return view('semestre.onesemestre.index')->with('onesemestre',$onesemestre)->with('users',$users);
        }
        elseif (Auth::user()->role == 'editor') {
            $onesemestre = Onesemester::paginate(10);
            $user        = Auth::user()->id; 
            $semestre    = Onesemester::where('user_id','=',$user)->get();
            //$sumar       = Onesemester::select('SUM(nota_1)');
            //$datos       = Onesemester::whereRaw('nota_1 > nota_2')->get();
            return view('semestrestudent.onesemestre.index')->with('semestre',$semestre);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users       = User::all();
        $formador    = User::all();
        $cursos      = Curso::all();  
        return view('semestre.onesemestre.create')->with('users',$users)->with('formador',$formador)->with('cursos',$cursos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OnesemestreRequest $request)
    {
        $one = new Onesemester;
        $one->semestre           = 1;
        $one->estudiante         = $request->estudiante;
        $one->formador           = $request->formador;
        $one->curso              = $request->curso;
        $one->nota_1             = $request->nota_1;
        $one->nota_2             = $request->nota_2;
        $one->nota_3             = $request->nota_3;
        $one->nota_4             = $request->nota_4;
        $one->nota_5             = $request->nota_5;
        $one->nota_6             = $request->nota_6;
        $one->nota_7             = $request->nota_7;
        $one->nota_8             = $request->nota_8;
        $one->nota_9             = $request->nota_9;
        $one->nota_10            = $request->nota_10;
        $one->nota_11            = $request->nota_11;
        $one->nota_12            = $request->nota_12;
        $one->nota_13            = $request->nota_13;
        $one->nota_14            = $request->nota_14;
        $one->nota_15            = $request->nota_15;
        $one->nota_16            = $request->nota_16;
        $one->nota_definitiva    = $request->nota_1+$request->nota_2+$request->nota_3+$request->nota_4+$request->nota_5+$request->nota_6+$request->nota_7+
                                   $request->nota_8+$request->nota_9+$request->nota_10+$request->nota_11+$request->nota_12+$request->nota_13+$request->nota_14+$request->nota_15+$request->nota_16;
        $one->user_id            = $request->user_id;
    
        if($one->save()){
            return redirect('semestre/onesemestre')->with('message', 'Las Notas del primer semestre del Alumno: '.$one->estudiante.' fue Adicionado con Exito!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $semestre      = Onesemester::find($id);
        $users         = User::all();
        $formador      = User::all();
        $cursos        = Curso::all();
        return view('semestre/onesemestre.edit')->with('semestre', $semestre)->with('users',$users)->with('formador',$formador)->with('cursos',$cursos);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(OnesemestreRequest $request, $id)
    {
        $one                     = Onesemester::find($id);
        $one->semestre           = 1;
        $one->estudiante         = $request->estudiante;
        $one->formador           = $request->formador;
        $one->curso              = $request->curso;
        $one->nota_1             = $request->nota_1;
        $one->nota_2             = $request->nota_2;
        $one->nota_3             = $request->nota_3;
        $one->nota_4             = $request->nota_4;
        $one->nota_5             = $request->nota_5;
        $one->nota_6             = $request->nota_6;
        $one->nota_7             = $request->nota_7;
        $one->nota_8             = $request->nota_8;
        $one->nota_9             = $request->nota_9;
        $one->nota_10            = $request->nota_10;
        $one->nota_11            = $request->nota_11;
        $one->nota_12            = $request->nota_12;
        $one->nota_13            = $request->nota_13;
        $one->nota_14            = $request->nota_14;
        $one->nota_15            = $request->nota_15;
        $one->nota_16            = $request->nota_16;
        $one->nota_definitiva    = $request->nota_1+$request->nota_2+$request->nota_3+$request->nota_4+$request->nota_5+$request->nota_6+$request->nota_7+
                                   $request->nota_8+$request->nota_9+$request->nota_10+$request->nota_11+$request->nota_12+$request->nota_13+$request->nota_14+$request->nota_15+$request->nota_16;
        $one->user_id            = $request->user_id;
    
        if($one->save()){
            return redirect('semestre/onesemestre')->with('message', 'Las Notas del primer semestre del Alumno: '.$one->estudiante.' fue editadas con Exito!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $semestre = Onesemester::find($id);
        if ($semestre->delete()) {
            return redirect('semestre/onesemestre')->with('message', 'Las notas del primer semestre del estudiante: '.$semestre->estudiante.', fueron Eliminadas con Exito!');
        }
    }
}
