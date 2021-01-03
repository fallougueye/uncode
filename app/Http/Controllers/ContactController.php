<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
     {
         //
         $recruteurs = Recruteur::orderBy('id')->get();
         return view('recruteurs.index', ['recruteurs' => $recruteurs]);
     }
 
     /**
      * Show the form for creating a new resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function create()
     {
         //
         $recruteurs = request('recruteurs');
         $pays = Pay::all();
         return view('recruteurs.ajout',['recruteurs' => $recruteurs, 'pays' => $pays]);
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
 
         /* $this->validate($request, [
             'image' => 'required',
             'image.*' => 'mimes:doc,pdf,docx,zip,png,jpeg,odt,jpg,svc,csv,mpeg,ogg,mp4,webm,3gp,mov,flv,avi,wmv,ts',
 
 
         ]); */
  
         /* $image = $request->file('image');
         if($image){
         $imageName = $image->getClientOriginalName();
         $image->move(public_path().'/images/', $imageName);
 
             
         } */  
 
         request()->validate([
 
             'nom' => 'required|string|max:255',
             'prenom' => 'required|string|max:255',
             'email' => 'required|string|email|max:255|unique:users',
             'tel' => 'required|string|max:255',
             'password' => 'required|string|min:6|confirmed',
 
     ]);
 
         $user = new User;
             $user->prenom = $request->get('prenom'); 
             $user->nom = $request->get('nom'); 
             //$user->tel = $request->get('tel'); 
             $user->email = $request->get('email'); 
             $user->role = $request->get('role'); 
             $user->password = Hash::make($request->get('password'));
             $user->notify(new RegisterNotify());
 
         if($user->save()){
             error_log('la création a réussi');
 
         $message = "Ajouté avec succès";
         $recruteur = new Recruteur();
         $recruteur->civilite = $request->get('civilite');
         $recruteur->prenom = $request->get('prenom');
         $recruteur->nom = $request->get('nom');
         $recruteur->secteur = $request->get('secteur');
         $recruteur->tel = $request->get('tel');
         $recruteur->nom_entreprise = $request->get('nom_entreprise');
         $recruteur->pays = $request->get('pays');
         $recruteur->ville = $request->get('ville');
         $recruteur->image = $request->get('image');
         $recruteur->annonce = $request->get('annonce');
         $recruteur->role = $request->get('role');
         $recruteur->email = $request->get('email');
         $recruteur->password = Hash::make($request->get('password')); 
 
         $recruteur->user_id = $user->id;
 
         //$agents->save();
         if($recruteur->save())
         {
             Auth::login($user);
             return back()->with(['message' => $message]);
 
         }
         else
         {
             flash('user not saved')->error();
 
         }
 
     }
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
        $candidat = Candidat::find($id);
        return view('administrateur.details',compact('candidat'));
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
        $recruteur = Recruteur::find($id);
        $pays = Pay::all();
        return view('administratif.editer',compact('recruteur','pays'));

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
            'prenom' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'tel' => 'required|string|max:255',
            'password' => 'required|string|min:6|confirmed',

    ]); 




        $message = "Recruteur modifés avec succés";
        $recruteur = Recruteur::find($id);
        $recruteurUpdate = $request->all();
        $recruteur->update($recruteurUpdate);

        return redirect('lister_recruteur_admin')->with(['message' => $message]);
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
        $recruteur = Recruteur::find($id);
        $recruteur->delete();

        return back();
    }
}
