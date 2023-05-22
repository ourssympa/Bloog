<?php

namespace App\Http\Controllers;

use App\Models\Commentaires;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentairesController extends Controller
{
    public function store(Request $request)
    {
         $user = Auth::user();
        Commentaires::create([
            "post"=>$request->post,
            "content"=>$request->content,
            "user"=>$user->id
        ]);

        return redirect()->back();
    }
}
