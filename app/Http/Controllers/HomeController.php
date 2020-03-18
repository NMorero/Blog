<?php

namespace App\Http\Controllers;

use App\Cursos;
use App\File;
use App\Posts;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function getCurso($curso){
        $posts = Posts::where('curso_id', 'LIKE', $curso)->get();

        foreach($posts as $post){
            $files = File::where('post_id', 'LIKE', $post->id)->get();
            $post['files'] = $files;
        }




        $id = $curso;
        $cur = Cursos::find($curso);
        $vac = compact('posts', 'cur', 'id');
        return view('curso', $vac);
    }

    public function uploadPost(Request $request, $id){

        $post = new Posts;
        $post->titulo = $request['titulo'];
        $post->mensaje = $request['mensaje'];
        $post->curso_id = $id;
        $post->save();
        $postId = $post->id;

        $files = $request->file('file');
        foreach($files as $file){
            $filename = $file->getClientOriginalName();

            //dd($check)
            $name = time() . $filename;
            $file->storeAs('upload', $name);
            $newFile = new File;
            $newFile->post_id = $postId;
            $newFile->nombre = $filename;
            $newFile->route = $name;
            $newFile->save();
            }

            return redirect('/Curso/'.$id);
        }



        public function download($id)
        {
            //PDF file is stored under project/public/download/info.pdf
            $file = File::find($id);
            $path= '../storage/app/upload/' . $file->route;

            return response()->download($path, $file->nombre);
        }
    }
