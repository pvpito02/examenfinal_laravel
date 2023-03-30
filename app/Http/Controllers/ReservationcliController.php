<?php

namespace App\Http\Controllers;
use App\Models\Reservationcli;
use App\Models\Vehicule;
use App\Models\Comptechauffeur;
use App\Models\Compteclient;
use App\Models\Tarrifcourse;
use Illuminate\Http\Request;

class ReservationcliController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
         # code...
         $vehicules = Vehicule::all();
         $tarrifcourses = Tarrifcourse::all();
         $chauffeurs =Comptechauffeur::all();
         $clients = Compteclient::all();
         $reserv = Reservationcli::all();
         //dd($vehicules);
         return view('Reservation',compact('vehicules','tarrifcourses','chauffeurs','reserv','clients'));
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
    public function store(Request $request)
    {
        //
        $request->validate([
            'vehicules' => ['required'],
            'tarrifcourses' => ['required'],
            'comptechauffeurs' => ['required'],
        ]);

        $reservat = Reservationcli::create([
            'nombreClient'=> $request->nombreClient,
            'vehicule_id' => $request->vehicules,
            'tarrifcourse_id' => $request->tarrifcourses,
            'comptechauffeur_id' => $request->comptechauffeurs,
            'compteclient_id' => $request->client_id,
        ]);
        return back()->with('AjoutReserv', 'votre reservation a ete fait avec success !!!!');
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
