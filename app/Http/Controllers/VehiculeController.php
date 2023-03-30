<?php

namespace App\Http\Controllers;
use App\Models\Vehicule;
use App\Models\Comptechauffeur;
use App\Models\Tarrifcourse;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;


class VehiculeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        // $vehicules = Vehicule::all();
        // $tarrifcourses = Tarrifcourse::all();
        // $chauffeurs =Comptechauffeur::all();
        // //dd($vehicules);
        // return view('dashboard',compact('vehicules','tarrifcourses','chauffeurs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        
        $request->validate([
            'marque' => ['required', 'string', 'max:255'],
            'modele' => ['required', 'string', 'max:255'],
            'immatriculation' => ['required', 'string','unique:'.Vehicule::class],
        ]);

        $vehicule = Vehicule::create([
            'marque' => $request->marque,
            'modele' => $request->modele,
            'immatriculation' => $request->immatriculation,
        ]);

        return back()->with('AjoutVehicle', 'vehicule ajoutee avec success !!!!');
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
