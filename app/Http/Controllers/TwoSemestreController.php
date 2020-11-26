<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Curso;
use App\Clase;
use App\User;
use App\Twosemester;
use Auth; 
use App\Http\Requests\TwosemestreRequest;
class TwoSemestreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->role == 'admin') {
            $twosemestre = Twosemester::orderBy('user_id','ASC')->paginate(12);
            $users       = User::all();
            return view('semestre.twosemestre.index')->with('twosemestre',$twosemestre)->with('users',$users);
        }
        elseif (Auth::user()->role == 'editor') {
            $twosemestre = Twosemester::paginate(10);
            $user        = Auth::user()->id; 
            $semestre    = Twosemester::where('user_id','=',$user)->get();
            return view('semestrestudent.twosemestre.index')->with('semestre',$semestre);
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
        return view('semestre.twosemestre.create')->with('users',$users)->with('formador',$formador)->with('cursos',$cursos);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TwosemestreRequest $request)
    {
        $two = new Twosemester;
        $two->semestre           = 2;
        $two->estudiante         = $request->estudiante;
        $two->formador           = $request->formador;
        $two->curso              = $request->curso;
        $two->nota_1             = $request->nota_1;
        $two->nota_2             = $request->nota_2;
        $two->nota_3             = $request->nota_3;
        $two->nota_4             = $request->nota_4;
        $two->nota_5             = $request->nota_5;
        $two->nota_6             = $request->nota_6;
        $two->nota_7             = $request->nota_7;
        $two->nota_8             = $request->nota_8;
        $two->nota_9             = $request->nota_9;
        $two->nota_10            = $request->nota_10;
        $two->nota_11            = $request->nota_11;
        $two->nota_12            = $request->nota_12;
        $two->nota_13            = $request->nota_13;
        $two->nota_14            = $request->nota_14;
        $two->nota_15            = $request->nota_15;
        $two->nota_16            = $request->nota_16;
        $two->nota_definitiva    = $request->nota_1+$request->nota_2+$request->nota_3+$request->nota_4+$request->nota_5+$request->nota_6+$request->nota_7+
                                   $request->nota_8+$request->nota_9+$request->nota_10+$request->nota_11+$request->nota_12+$request->nota_13+$request->nota_14+$request->nota_15+$request->nota_16;
        $two->user_id            = $request->user_id;
    
        if($two->save()){
            return redirect('semestre/twosemestre')->with('message', 'Las Notas del Alumno: '.$two->estudiante.' fue Adicionado con Exito!');
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
        $semestre      = Twosemester::find($id);
        $users         = User::all();
        $formador      = User::all();
        $cursos        = Curso::all();
        return view('semestre/twosemestre.edit')->with('semestre', $semestre)->with('users',$users)->with('formador',$formador)->with('cursos',$cursos);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TwosemestreRequest $request, $id)
    {
        $two                     = Twosemester::find($id);
        $two->semestre           = 2;
        $two->estudiante         = $request->estudiante;
        $two->formador           = $request->formador;
        $two->curso              = $request->curso;
        $two->nota_1             = $request->nota_1;
        $two->nota_2             = $request->nota_2;
        $two->nota_3             = $request->nota_3;
        $two->nota_4             = $request->nota_4;
        $two->nota_5             = $request->nota_5;
        $two->nota_6             = $request->nota_6;
        $two->nota_7             = $request->nota_7;
        $two->nota_8             = $request->nota_8;
        $two->nota_9             = $request->nota_9;
        $two->nota_10            = $request->nota_10;
        $two->nota_11            = $request->nota_11;
        $two->nota_12            = $request->nota_12;
        $two->nota_13            = $request->nota_13;
        $two->nota_14            = $request->nota_14;
        $two->nota_15            = $request->nota_15;
        $two->nota_16            = $request->nota_16;
        $two->nota_definitiva    = $request->nota_1+$request->nota_2+$request->nota_3+$request->nota_4+$request->nota_5+$request->nota_6+$request->nota_7+
                                   $request->nota_8+$request->nota_9+$request->nota_10+$request->nota_11+$request->nota_12+$request->nota_13+$request->nota_14+$request->nota_15+$request->nota_16;
        $two->user_id            = $request->user_id;
    
        if($two->save()){
            return redirect('semestre/twosemestre')->with('message', 'Las Notas del segundo semestre del Alumno: '.$two->estudiante.' fue editadas con Exito!');
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
        $semestre = Twosemester::find($id);
        if ($semestre->delete()) {
            return redirect('semestre/twosemestre')->with('message', 'Las notas del segundo semestre del estudiante: '.$semestre->estudiante.', fueron Eliminadas con Exito!');
        }
    }
}
