<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;
use App\Clase;
use App\Curso;
use Auth;
class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->role == 'admin')
        {
            $cursos = Curso::All();
            $videos = Video::orderBy('curso_id','ASC')->paginate(10);
            return view('videos.index')->with('videos',$videos)->with('cursos',$cursos);
        }else
        {
            $curso_1 = Auth::user()->curso_1;
            $videos  = Video::where('curso_id','=', $curso_1)->paginate(10);
            //$videos  = Video::paginate(10);
            return view('editor.myvideo')->with('videos',$videos);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cursos       = Curso::All();
        $clases       = Clase::all();
        return view('videos.create')->with('clases',$clases)->with('cursos',$cursos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());

        //Modificar usuario
        $movie = new Video;
        $movie->nameclase       = $request->nameclase;
        $movie->curso_id       = $request->curso_id;
        if($request->hasFile('video')){
            $file = time().'.'.$request->video->getClientOriginalName();
            $request->video->move(public_path('mp4'),$file);
            $movie->video = 'mp4/'.$file;

        }

        if($movie->save()){
            return redirect('videos')->with('message', 'El video de la clase: '.$movie->nameclase.' fue almacenado con Exito!');
        }else{
            return redirect('videos')->with('message', 'El video de la clase: '.$movie->nameclase.' No pudo ser almacenado. Intentelo de nuevo');
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
        $user       = Auth::user();
        $movie      = Video::find($id);
        return view('videos.show')->with('movie', $movie);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cursos     = Curso::All();
        $video      = Video::find($id);
        $clases     = Clase::all();
        return view('videos.edit')->with('video', $video)->with('clases', $clases)->with('cursos',$cursos);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //
    public function update(Request $request, $id)
    {
        $movie                  = Video::find($id);
        $movie->nameclase       = $request->nameclase;
        $movie->curso_id       = $request->curso_id;
        if($request->hasFile('video')){
            $file = time().'.'.$request->video->getClientOriginalName();
            $request->video->move(public_path('mp4'),$file);
            $movie->video = 'mp4/'.$file;

        }

        if($movie->save()){
            return redirect('videos')->with('message', 'El video de la clase: '.$movie->nameclase.' fue Modificado con Exito!');
        }else{
            return redirect('videos')->with('message', 'El video de la clase: '.$movie->nameclase.' No pudo ser Modificado. Intentelo de nuevo');
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
        $video = Video::find($id);
        if ($video->delete()) {
            return redirect('videos')->with('message', 'El Video de la clase : '.$video->name.' fue Eliminado con Exito!');
        }
    }
}
