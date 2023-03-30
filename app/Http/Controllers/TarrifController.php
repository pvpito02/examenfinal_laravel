<?php

namespace App\Http\Controllers;
use App\Models\Tarrifcourse;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;


class TarrifController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
       
        //dd($tarrifcourses);
        //return view('dashboard',compact('tarrifcourses'));
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
        //
         //
         $request->validate([
            'depart' => ['required', 'string', 'max:255'],
            'destination' => ['required', 'string', 'max:255'],
            'prix' => ['required', 'integer'],
        ]);

        $tarifs = Tarrifcourse::create([
            'depart' => $request->depart,
            'destination' => $request->destination,
            'prix' => $request->prix,
        ]);

        return back()->with('AjoutTarif', 'Tarif ajoutee avec success !!!!');
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
