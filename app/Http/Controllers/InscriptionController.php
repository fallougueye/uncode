<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Notification;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Notifications\RegisterNotify;
use App\Inscription;
use App\User;
use Auth;   
use Mail;
use Session;

class InscriptionController extends Controller
{
     //
     use AuthenticatesUsers;

     /**
      * Create a new controller instance.
      *
      * @return void
      */
     public function __construct()
     {
         $this->middleware('guest');
     } 
     /**
      * Display a listing of the resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function index()
     {
         //
         $inscriptions = Inscription::orderBy('id')->paginate(3);
         return view('inscription.index', ['inscriptions' => $inscriptions]);
     }
 
     /**
      * Show the form for creating a new resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function create()
     {
         //
         $inscriptions = request('inscriptions');
         return view('inscriptions.ajouter',['inscriptions' => $inscriptions]);
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
 
             'nom' => 'required|string|max:255',
             'prenom' => 'required|string|max:255',
             'email' => 'required|string|email|max:255|unique:users',
             'tel_mobile' => 'required|string|max:255',
             'tel_mobile' => 'required|string|max:255',
             'attente_a' => 'required|string|max:255',
             'session' => 'required|string|max:255',
             'optimal' => 'required|',
             'finance' => 'required|string|max:255',
             'payement' => 'required|string|max:255',
             'information' => 'required|string|max:255',
     ]);
 
             $user = new User;
             $user->prenom = $request->get('prenom'); 
             $user->nom = $request->get('nom'); 
             $user->email = $request->get('email'); 
             //$user->password = Hash::make($request->get('password'));
             $user->notify(new RegisterNotify());
 
         if($user->save()){
             error_log('la création a réussi');
 
         $message = "Ajouté avec succès";
         $inscription = new Inscription();
         $inscription->identite = $request->get('identite');
         $inscription->prenom = $request->get('prenom');
         $inscription->nom = $request->get('nom');
         $inscription->email = $request->get('email');
         $inscription->tel_mobile = $request->get('tel_mobile');
         $inscription->tel_whatsap = $request->get('tel_whatsap');
         $inscription->entreprise = $request->get('entreprise');
         $inscription->fonction = $request->get('fonction');
         $inscription->attente_a = $request->get('attente_a');
         $inscription->attente_b = $request->get('attente_b');
         $inscription->attente_c = $request->get('attente_c');
         $inscription->session = $request->get('session');
         $inscription->optimal = $request->get('optimal');
         $inscription->finance = $request->get('finance');
         $inscription->payement = $request->get('payement');
         $inscription->information = $request->get('information');
         $inscription->nom_recommande = $request->get('nom_recommande');
         $inscription->formation = $request->get('formation');
         $inscription->formation_id = $request->get('formation_id');
         //$inscription->password = Hash::make($request->get('password')); 
         $inscription->user_id = $user->id;
         $inscription->save();
         //$agents->save();
         /* if($inscription->save())
         {
             Auth::login($user);
             return back()->with(['message' => $message]);
 
         }
         else
         {
             flash('user not saved')->error();
 
         } */
 
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
        $inscription = Inscription::find($id);
        return view('inscription.details',compact('inscription'));
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
        $inscription = Inscription::find($id);
        return view('inscription.editer',compact('inscription'));

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
            'tel_mobile' => 'required|string|max:255',
            'tel_mobile' => 'required|string|max:255',
            'attente_1' => 'required|string|max:255',
            'session' => 'required|string|max:255',
            'optimal' => 'required|',
            'finance' => 'required|string|max:255',
            'payement' => 'required|string|max:255',
            'information' => 'required|string|max:255',
    ]); 




        $message = "inscription modifés avec succés";
        $inscription = Inscription::find($id);
        $inscriptionUpdate = $request->all();
        $inscription->update($inscriptionUpdate);

        return redirect('inscription')->with(['message' => $message]);
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
        $inscription = Inscription::find($id);
        $inscription->delete();

        return back();
    }
}
