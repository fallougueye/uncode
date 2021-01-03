<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorie;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
     {
         //
         $categories = Categorie::orderBy('id')->get();
         return view('categorie.index', ['categories' => $categories]);
     }
 
     /**
      * Show the form for creating a new resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function create()
     {
         //
         $categories = request('categories');
         //$pays = Pay::all();
         return view('categorie.ajouter',['categories' => $categories]);
     }
 
     /**
      * Store a newly created resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @return \Illuminate\Http\Response
      */
     public function store(Request $request)
     {
         //
 
         request()->validate([
 
             'nom_cate' => 'required|string|max:255',
             
 
     ]);
         $message = "Ajouté avec succès";
         $categorie = new Categorie();
         $categorie->nom_cate = $request->get('nom_cate');
         $categorie->save();
     return back()->with(['message' => $message]);
 
     }
 

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $categorie = Categorie::find($id);
        return view('categorie.details',compact('categorie'));
    }

     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $categorie = Categorie::find($id);
        return view('categorie.editer',compact('categorie'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        request()->validate([

            'nom' => 'required|string|max:255',

    ]); 




        $message = "categorie modifés avec succés";
        $categorie = Categorie::find($id);
        $categorieUpdate = $request->all();
        $categorie->update($categorieUpdate);

        return redirect('categories')->with(['message' => $message]);
    }

    /**
     * Remove the specified resource from storage.  
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $categorie = Categorie::find($id);
        $categorie->delete();

        return back();
    }
}
