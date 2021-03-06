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
        //
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMaterailRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMaterailRequest $request)
    {
        //
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
    public function edit(Materail $materail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMaterailRequest  $request
     * @param  \App\Models\Materail  $materail
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMaterailRequest $request, Materail $materail)
    {
        //
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
