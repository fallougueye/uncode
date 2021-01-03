<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Formation;
use App\Categorie;

class FormationController extends Controller
{
     //

     /**
      * Display a listing of the resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function index()
     {
         //
         $formations = Formation::orderBy('id')->get();
         return view('formation.index', ['formations' => $formations]);
     }
 
     /**
      * Show the form for creating a new resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function create()
     {
         //
         $formations = request('formations');
         $categories = Categorie::all();
         return view('formation.ajouter',['formations' => $formations, 'categories' => $categories]);
     }
 
     /**
      * Store a newly created resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @return \Illuminate\Http\Response
      */
     public function store(Request $request)
     {
         request()->validate([
 
             'nom_formation' => 'required|string|max:255',
             'date' => 'required',
             'lieu' => 'required|string|max:255',
             'horaire' => 'required|string|max:255',
 
     ]);
 
    
         $message = "Ajouté avec succès";
         $formation = new Formation();
         $formation->nom_formation = $request->get('nom_formation');
         $formation->date = $request->get('date');
         $formation->lieu = $request->get('lieu');
         $formation->horaire = $request->get('horaire');
         $formation->public_cible = $request->get('public_cible');
         $formation->programme = $request->get('programme');
         $formation->categorie = $request->get('categorie');
         $formation->save();

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
        $formation = Formation::find($id);
        return view('inscription.ajouter',compact('formation'));
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
        $formation = Formation::find($id);
        return view('formation.editer',compact('formation'));

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

            'nom_formation' => 'required|string|max:255',
             'date' => 'required|',
             'lieu' => 'required|string|email|max:255|unique:users',
             'horaire' => 'required|string|max:255',

    ]); 




        $message = "formation modifés avec succés";
        $formation = Formation::find($id);
        $formationUpdate = $request->all();
        $formation->update($formationUpdate);

        return redirect('formations')->with(['message' => $message]);
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
        $formation = Formation::find($id);
        $formation->delete();

        return back();
    }
}
