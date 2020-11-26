<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth; 
use App\Curso;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
        $this->middleware('auth', ['except' => ['welcome', 'loadcat']]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Auth::user()->role == 'admin') {
            return view('home');
        } else if (Auth::user()->role == 'editor') {
            $curso_1 = Auth::user()->curso_1; 
            $curso_2 = Auth::user()->curso_2;
            $curso_3 = Auth::user()->curso_3;

            $course_1   = Curso::where('id','=',$curso_1)->get();
            $course_2 = Curso::where('id','=',$curso_2)->get();
            $course_3 = Curso::where('id','=',$curso_3)->get();
            return view('dashboard-editor')->with('course_1',$course_1)->with('course_2',$course_2)->with('course_3',$course_3);
            
           // return redirect('dashboard-editor');
        } else {
            return view('/');
        }
    }

}
