<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Notification;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Notifications\RegisterNotify;
use App\User;  
use Auth;    
use Mail;
use Session;
use DB;

class UserController extends Controller
{

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

    public function login(Request $request){

        if($request->isMethod('post')){
            $admin = 'Bienvenue dans la partie admin';
            $client = 'Bienvenue dans la partie client';
            $message = 'Email ou Mot de Passe incorect';

            $data = $request->input();
            if(Auth::attempt(['email'=>$data['email'], 'password'=>$data['password'], 'nom_role'=>'admin'])){

                //echo "succes"; die;
                return redirect('/admin/dashboard')->with(['admin' => $admin]);
             }

             elseif(Auth::attempt(['email'=>$data['email'], 'password'=>$data['password'], 'nom_role'=>'client'])){
                return redirect('/admin/dashboard/client')->with(['admin' => $admin]);;
            }
           
             
            else{
                //echo "failed"; die;

                return redirect('/connexion')->with(['message' => $message]); 
            }
        }
        return view('admin/uncod/.signin');
    }

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

     public function dashboard()
     {
         //
         //$recruteurs = Recruteur::orderBy('id')->get();
         return view('admin/uncod.index');
     }

     public function dashboard_client()
     {
         //
         //$recruteurs = Recruteur::orderBy('id')->get();
         return view('admin/uncod/client.index');
     }

     /**
      * Show the form for creating a new resource.
      *
      * @return \Illuminate\Http\Response
      */
      public function inscription()
      {
          //
          $roles = DB::table('roles')->get();
          //$pays = Pay::all();
          return view('admin/uncod.signup',['roles' => $roles]);
      }


      /**
      * Store a newly created resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @return \Illuminate\Http\Response
      */
     public function inscriptionc(Request $request)
     {
         //
         request()->validate([
 
             'nom' => 'required|string|max:255',
             'prenom' => 'required|string|max:255',
             'email' => 'required|string|email|max:255|unique:users',
             'tel' => 'required|string|max:255',
             'password' => 'required|string|min:6|confirmed',
 
     ]);
 
             $message = "Ajouté avec succès";
             $user = new User;
             $user->prenom = $request->get('prenom'); 
             $user->nom = $request->get('nom'); 
             $user->tel = $request->get('tel'); 
             $user->email = $request->get('email'); 
             $user->nom_role = $request->get('nom_role'); 
             $user->password = Hash::make($request->get('password'));
             $user->notify(new RegisterNotify());
             $user->save();
          
             /* if($user->save()){
             error_log('la création a réussi');
       
             return redirect()->with(['message' => $message]);   
 
     }

     else
         {
             flash('user not saved')->error();
 
         } */
     return back()->with(['message' => $message]);
 
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
