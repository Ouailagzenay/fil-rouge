<?php

namespace App\Http\Controllers;

use App\Models\Materail;
use App\Models\Categorie;
use App\Http\Requests\StoreMaterailRequest;
use App\Http\Requests\UpdateMaterailRequest;
use Illuminate\Http\Request;

class MaterailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materail= Materail::with('categorie')->get();
        return view('admin.materail.index', compact('materail'));
    }


    public function getMaterailByCategory(Categorie $categorie)
    { 
        $materail = $categorie->materail()->paginate(10);
        return  view('tables.index')->with([
            'product'=>$materail
            ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categorie::all();
        return view('admin.materail.form',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMaterailRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Materail::create($input);
        return redirect('/admin/materail');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Materail  $materail
     * @return \Illuminate\Http\Response
     */
    public function show(Materail $materail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Materail  $materail
     * @return \Illuminate\Http\Response
     */
    public function edit($materail)
    {
        $categories = Categorie::all();
        $materail=Materail::find($materail);
        return view('admin.materail.edit',compact('materail','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMaterailRequest  $request
     * @param  \App\Models\Materail  $materail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $materail)
    {
        $input 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Materail  $materail
     * @return \Illuminate\Http\Response
     */
    public function destroy(Materail $materail)
    {
        //
    }
}
