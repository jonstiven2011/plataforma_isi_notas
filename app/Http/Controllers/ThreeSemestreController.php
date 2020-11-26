<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Curso;
use App\Clase;
use App\User;
use App\Threesemester;
use Auth; 
use App\Http\Requests\ThreesemestreRequest;
class ThreeSemestreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->role == 'admin') {
            $threesemestre = Threesemester::orderBy('user_id','ASC')->paginate(12);
            $users       = User::all();
            return view('semestre.threesemestre.index')->with('threesemestre',$threesemestre)->with('users',$users);
        }
        elseif (Auth::user()->role == 'editor') {
            $threesemestre = Threesemester::paginate(10);
            $user        = Auth::user()->id; 
            $semestre    = Threesemester::where('user_id','=',$user)->get();
            return view('semestrestudent.threesemestre.index')->with('semestre',$semestre);
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
        return view('semestre.threesemestre.create')->with('users',$users)->with('formador',$formador)->with('cursos',$cursos);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ThreesemestreRequest $request)
    {
        $three = new Threesemester;
        $three->semestre           = 3;
        $three->estudiante         = $request->estudiante;
        $three->formador           = $request->formador;
        $three->curso              = $request->curso;
        $three->nota_1             = $request->nota_1;
        $three->nota_2             = $request->nota_2;
        $three->nota_3             = $request->nota_3;
        $three->nota_4             = $request->nota_4;
        $three->nota_5             = $request->nota_5;
        $three->nota_6             = $request->nota_6;
        $three->nota_7             = $request->nota_7;
        $three->nota_8             = $request->nota_8;
        $three->nota_9             = $request->nota_9;
        $three->nota_10            = $request->nota_10;
        $three->nota_11            = $request->nota_11;
        $three->nota_12            = $request->nota_12;
        $three->nota_13            = $request->nota_13;
        $three->nota_14            = $request->nota_14;
        $three->nota_15            = $request->nota_15;
        $three->nota_16            = $request->nota_16;
        $three->nota_definitiva    = $request->nota_1+$request->nota_2+$request->nota_3+$request->nota_4+$request->nota_5+$request->nota_6+$request->nota_7+
                                   $request->nota_8+$request->nota_9+$request->nota_10+$request->nota_11+$request->nota_12+$request->nota_13+$request->nota_14+$request->nota_15+$request->nota_16;
        $three->user_id            = $request->user_id;
    
        if($three->save()){
            return redirect('semestre/threesemestre')->with('message', 'Las Notas del tercer semestre del Alumno: '.$three->estudiante.' fue Adicionado con Exito!');
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
        $semestre      = Threesemester::find($id);
        $users         = User::all();
        $formador      = User::all();
        $cursos        = Curso::all();
        return view('semestre/threesemestre.edit')->with('semestre', $semestre)->with('users',$users)->with('formador',$formador)->with('cursos',$cursos);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ThreesemestreRequest $request, $id)
    {
        $three                     = Threesemester::find($id);
        $three->semestre           = 3;
        $three->estudiante         = $request->estudiante;
        $three->formador           = $request->formador;
        $three->curso              = $request->curso;
        $three->nota_1             = $request->nota_1;
        $three->nota_2             = $request->nota_2;
        $three->nota_3             = $request->nota_3;
        $three->nota_4             = $request->nota_4;
        $three->nota_5             = $request->nota_5;
        $three->nota_6             = $request->nota_6;
        $three->nota_7             = $request->nota_7;
        $three->nota_8             = $request->nota_8;
        $three->nota_9             = $request->nota_9;
        $three->nota_10            = $request->nota_10;
        $three->nota_11            = $request->nota_11;
        $three->nota_12            = $request->nota_12;
        $three->nota_13            = $request->nota_13;
        $three->nota_14            = $request->nota_14;
        $three->nota_15            = $request->nota_15;
        $three->nota_16            = $request->nota_16;
        $three->nota_definitiva    = $request->nota_1+$request->nota_2+$request->nota_3+$request->nota_4+$request->nota_5+$request->nota_6+$request->nota_7+
                                   $request->nota_8+$request->nota_9+$request->nota_10+$request->nota_11+$request->nota_12+$request->nota_13+$request->nota_14+$request->nota_15+$request->nota_16;
        $three->user_id            = $request->user_id;
    
        if($three->save()){
            return redirect('semestre/threesemestre')->with('message', 'Las Notas del tercer semestre del Alumno: '.$three->estudiante.' fue editadas con Exito!');
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
        $semestre = Threesemester::find($id);
        if ($semestre->delete()) {
            return redirect('semestre/threesemestre')->with('message', 'Las notas del tercer del estudiante: '.$semestre->estudiante.', fueron Eliminadas con Exito!');
        }
    }
}
