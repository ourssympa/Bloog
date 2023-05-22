<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCatgorieRequest;
use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Categorie::all();
        return view('dashboard.categorie.index',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.categorie.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCatgorieRequest $request)
    {

        Categorie::create($request->all());
        return redirect()->route('categorie.index');
    }

    /**
     * Display the specified resource.
     */


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = Categorie::find($id);
        return view('dashboard.categorie.form',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreCatgorieRequest $request, $id)
    {
        $data = Categorie::find($id);
        $data->update($request->all());
        return redirect()->route('categorie.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

        $data = Categorie::find($id);
        $data->delete();
        return redirect()->route('categorie.index');

    }
}
