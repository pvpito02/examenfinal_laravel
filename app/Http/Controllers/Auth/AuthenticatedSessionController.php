<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Vehicule;
use App\Models\Comptechauffeur;
use App\Models\Tarrifcourse;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use App\Models\Resevationcli;
use App\Http\Controllers\Reservationcli;
class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {

        
        $request->authenticate();

            $request->session()->regenerate();
             
            # code...   
            return redirect()->intended(RouteServiceProvider::HOME);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function liste()
    {
        # code...
        $vehicules = Vehicule::all();
        $tarrifcourses = Tarrifcourse::all();
        $chauffeurs =Comptechauffeur::all();
        //dd($vehicules);
        return view('Liste',compact('vehicules','tarrifcourses','chauffeurs'));
    }

    


}
