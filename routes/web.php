<?php
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VehiculeController;
use App\Http\Controllers\CompteclientController;
use App\Http\Controllers\ReservationcliController;
use App\Http\Controllers\TarrifController;
use App\Models\Vehicule;
use App\Models\Comptechauffeur;
use App\Models\Compteclient;
use App\Models\Tarrifcourse;
use App\Models\Reservationcli;
use App\Http\Controllers\ChauffeurController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/Acceuil', function () {
    return view('Acceuil');
})->name('bienvenue');
 
Route::get('/APropos', function () {
    return view('Propos');
})->name('prop');

Route::get('/client', function () {
    return view('Passagers');
})->name('cli');

Route::get('/chauffeur', function () {
    return view('Chauffeurs');
})->name('chauff');

// Auth::routes();

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard/liste',[AuthenticatedSessionController::class,'liste'])->name('lister');
//Route::get('/dashboard/liste/reservation',[AuthenticatedSessionController::class,'reservation'])->name('reserv');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

Route::resource('vehicules',VehiculeController::class);
Route::resource('comptechauffeurs',ChauffeurController::class); 
Route::resource('tarrifcourses',TarrifController::class); 
Route::resource('compteclients',CompteclientController::class); 
Route::get('/register/client', [CompteclientController::class, 'InscrireCli'])->name('inscri');  
Route::get('connected/client', [CompteclientController::class, 'loginClient'])->name('connected');  
Route::post('reservation/client', [CompteclientController::class, 'reservationSave'])->name('reserver');  
Route::resource('reservationclis',ReservationcliController::class); 
require __DIR__.'/auth.php';
