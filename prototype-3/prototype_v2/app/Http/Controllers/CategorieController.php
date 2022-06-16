<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Http\Requests\StoreCategorieRequest;
use App\Http\Requests\UpdateCategorieRequest;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('categorie.categories')->with([
            'categorie'=>Categorie::all()
            ]);
    }

    public function adminIndex(){
        $categories= Categorie::all();
        return view('admin.categorie.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.categorie.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCategorieRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $input = $request->all();
        Categorie::create($input);
        return redirect('/admin/categorie');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function show(Categorie $categorie)
    {
        return view('categorie.show')->with([
            'categories'=> $categorie
          ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function edit($categorie)
    {
        
        
        $categorie=Categorie::find($categorie);
        return view('admin.categorie.edit',compact('categorie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategorieRequest  $request
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $categorie)
    {
        $input =$request->all();
        $categorie= Categorie::find($categorie);
        $categorie->title = $input['title'];
        $categorie->slug = $input['slug'];
        $categorie->description = $input['description'];
        $categorie->max_price = $input['max_price'];
        $categorie->max_price = $input['max_price'];
        $categorie->image = $input['image'];

        $categorie->save();
        return redirect('/admin/categorie');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function destroy( $categorie)
    {
        Categorie::find($categorie)->delete();
        return redirect('/admin/categorie');
    }
}
