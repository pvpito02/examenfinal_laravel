<?php

namespace App\Http\Controllers;
use App\Models\Compteclient;
use App\Models\Resevationcli;
use App\Models\Vehicule;
use App\Models\Comptechauffeur;
use App\Models\Tarrifcourse;
use App\Http\Controllers\ReservationcliController;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class CompteclientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('ConnexionClient');
    }

    public function InscrireCli()
    {
        //
        return view('inscriptionClient');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nameCli' => ['required', 'string', 'max:255'],
            'numTelCli' => ['required', 'integer'],
            'adresseCli' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.Compteclient::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $client = Compteclient::create([
            'nameCli' => $request->nameCli,
            'numTelCli' => $request->numTelCli,
            'adresseCli' => $request->adresseCli,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return back()->with('AjoutClient', 'Client ajoutee avec success !!!!');

    }


    public function loginClient(Request $request)
    {
        # code...
        $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);
        //$email = $request->email;
        $client = Compteclient::where('email', $request->input('email'))->first();
        if($client){
            if ($client->email == $request->email) {
                if (Hash::check($request->input('password'), $client->password)) {
                    $request->session()->regenerate(); 
                        $vehicules = Vehicule::all();
                        $tarrifcourses = Tarrifcourse::all();
                        $chauffeurs =Comptechauffeur::all();
                        $cli_id = $client->id;
                        $cli_name = $client->nameCli;
                    return view('InterfaceClient',compact('vehicules','tarrifcourses','chauffeurs','cli_id','cli_name'));
                } else {
                    return back()->with('ErreurMtpasse', 'Mot de passe incorrecte!!!!!!! ');
                }
                } else {
                    # code...
                    return back()->with('ErreurClient', 'Vous n\'etes pas Admin');
                }
            } else {
                return back()->with('ErreurCompte', 'Ce compte n existe pas ');
            }
          }
        
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
