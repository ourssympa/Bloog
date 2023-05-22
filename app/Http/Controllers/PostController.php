<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index( )
    {
        //paginate renvois la reponse en nombre fixe pour eviter un scroll infini
        $datas = Post::orderBy('id','DESC')->paginate(10);

        return view('post.index',compact('datas'));
    }

    public function create()
    {
        $datas= Categorie::all();
        return view('dashboard.post.form',compact("datas"));
    }

    public function store (Request $request)
    {
        $datas = $request->all();

        $fichier = $request->file("image");
        $datas['image']='image/'.time().'.'.$fichier->extension();
        $fichier->move(public_path().'/images',$datas['image']);

        Post::create($datas);

        return redirect()->route('dashboard.index');

    }
    public function show($id)
    {
        $data = Post::find($id);
        return view('post.post',compact('data'));
    }

    public function edit($id)
    {
        $data = Post::find($id);
        return view('dashboard.post.edit',compact('data'));
    }

    public function update(Request $request,$id)
    {

        $data = Post::find($id);
        $data->update($request->all());
        return redirect()->route('dashboard.index');


    }

    public function destroy($id)
    {
        $data = Post::find($id);
       $data->delete();
       return redirect()->route('dashboard.index');

    }
}
