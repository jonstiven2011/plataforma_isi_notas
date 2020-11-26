<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clase;
use App\Curso;
use App\User;
use Auth;

class EditorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $curso_1 = Auth::user()->curso_1; 
        // $curso_1 = Auth::user()->curso_1; 
        // $curso_2 = Auth::user()->curso_2;
        // $curso_3 = Auth::user()->curso_3;

        $class_1 = Clase::where('curso_id','=',$curso_1)->get();
        $clases = Clase::paginate(10);
        // $course_2 = Curso::where('id','=',$curso_2)->get();
        // $course_3 = Curso::where('id','=',$curso_3)->get();
        return view('editor.index')->with('class_1',$class_1)->with('clases',$clases);

        // $id = Auth::user()->id;
        // $clases = Clase::paginate(10);
        // return view('editor.index')->with('clases',$clases); 
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
