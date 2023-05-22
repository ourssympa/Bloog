<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $datas = Post::all();
        return view('dashboard.post.index',compact('datas'));
    }
}
