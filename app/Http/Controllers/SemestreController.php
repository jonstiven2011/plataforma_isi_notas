<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
class SemestreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->role == 'admin') {
            return view('semesters');
        } else if (Auth::user()->role == 'editor') {
            return view ('semesters');
            // $curso_1 = Auth::user()->curso_1; 
            // $curso_2 = Auth::user()->curso_2;
            // $curso_3 = Auth::user()->curso_3;

            // $course_1   = Curso::where('id','=',$curso_1)->get();
            // $course_2 = Curso::where('id','=',$curso_2)->get();
            // $course_3 = Curso::where('id','=',$curso_3)->get();
            // return view('dashboard-editor')->with('course_1',$course_1)->with('course_2',$course_2)->with('course_3',$course_3);
            
           // return redirect('dashboard-editor');
        }
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
