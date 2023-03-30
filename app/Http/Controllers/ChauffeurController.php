<?php

namespace App\Http\Controllers;
use App\Models\Comptechauffeur;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class ChauffeurController extends Controller
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
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        
        $request->validate([
            'nameC' => ['required', 'string', 'max:255'],
            'numTelC' => ['required', 'integer'],
            'adresseC' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.Comptechauffeur::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $chauffeur = Comptechauffeur::create([
            'nameC' => $request->nameC,
            'numTelC' => $request->numTelC,
            'adresseC' => $request->adresseC,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return back()->with('AjoutChauf', 'Chauffeur ajoutee avec success !!!!');

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
