<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/dataTables.bootstrap4.css')}}">
    <title>Admin</title>
</head>
<body>
    <x-app-layout>
            <x-slot name="header">
                    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                        {{ __('Admin') }}
                    </h2>
                </x-slot>
                <div class="py-12">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                            <div class="p-6 text-gray-900 dark:text-gray-100">
                                {{ __("You're logged in!") }}
                            </div>
                            <div class="h1 mb-3 float-right mt-4">
                            <a href="{{route('lister')}}"class="btn btn-primary">Voir Mes Listes</a>
                        </div> 
                        </div>
                    </div>
                </div>            
    <div class="card" style="border:5px solid white; border-radius: 10px; box-shadow: 2px 2px 5px white, 2px 2px 15px white, 2px 2px 25px #6c757d;">           
    <div class="row"> 
        <div class="col-md-5">           
            <div class="container">
                <div class="card">
                    <div class="card-header mt-4 text-center h2" style="background-color : #ffc107 ; border-radius: 10px; box-shadow: 2px 2px 10px white, 2px 2px 20px white, 2px 2px 40px white;">Creation de Vehicule</div>  
                    <div class="card-body">
                        @if(Session::has('AjoutVehicle'))
                            <div class="alert alert-success text-green mt-3 offset-2">{{Session::get('AjoutVehicle')}}</div>
                        @endif 
                        <form action="{{route('vehicules.store')}}" method="post">
                             @csrf
                                <!-- Marque -->
                                <div class="col-md-6 h5">
                                    <label for="" class="h6">Marque</label>
                                </div>
                                <div class="col-md-6 ">
                                    <input type="text" name="marque"  class="form-control" :value="old('marque')" required autocomplete="username">
                                    <x-input-error :messages="$errors->get('marque')" class="mt-2" />
                                </div>

                                <!-- Modele -->
                                <div class="col-md-6 h5">
                                   <label for="" class="h6">Modele</label>
                                </div>
                                <div class="col-md-6 ">
                                    <input class="form-control" type="text" name="modele" :value="old('modele')" required autocomplete="username" />
                                    <x-input-error :messages="$errors->get('modele')" class="mt-2" />
                                </div>

                                <!-- Immatriculation -->
                                <div class="col-md-6 h5">
                                    <label for="" class="h6">Immatriculation</label>
                                </div>
                                <div class="col-md-6 ">
                                    <input id="" class="form-control" type="text" name="immatriculation" :value="old('immatriculation')" required autocomplete="username" />
                                    <x-input-error :messages="$errors->get('immatriculation')" class="mt-2" />
                                </div>
                                <div class="modal-footer mt-2">
                                    <button type="submit" class="btn btn-success text-white">Enregistrer</button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <img src="{{asset('image/pexels-ono-kosuki-5648414.jpg')}}" alt="" style="height: 400px;">
        </div>
    </div>
</div> 
<div class="card mt-4" style="border:5px solid white; border-radius: 10px; box-shadow: 2px 2px 5px white, 2px 2px 15px white, 2px 2px 25px #6c757d;">
    <div class="row mt-4">
        <div class="col-md-5">
            <div class="container ">
                <div class="card">
                    <div class="card-header mt-4 text-center h2" style="background-color : #ffc107 ; border-radius: 10px; box-shadow: 2px 2px 10px white, 2px 2px 20px white, 2px 2px 40px white;">Creation des Tarifs</div> 
                    @if(Session::has('AjoutTarif'))
                            <div class="alert alert-success text-green mt-3 offset-2">{{Session::get('AjoutTarif')}}</div>
                        @endif 
                    <div class="card-body">
                        <form action="{{route('tarrifcourses.store')}}" method="post">
                             @csrf
                                <!-- Ville Depart -->
                                <div class="col-md-6 h5">
                                    <label for="" class="h6">Ville Depart</label>
                                </div>
                                <div class="col-md-6 ">
                                    <input type="text" name="depart"  class="form-control" :value="old('depart')" required autocomplete="username">
                                    <x-input-error :messages="$errors->get('depart')" class="mt-2" />
                                </div>

                                <!-- Destianation -->
                                <div class="col-md-6 h5">
                                   <label for="" class="h6">Destianation</label>
                                </div>
                                <div class="col-md-6 ">
                                    <input class="form-control" type="text" name="destination" :value="old('destination')" required autocomplete="username" />
                                    <x-input-error :messages="$errors->get('destination')" class="mt-2" />
                                </div>

                                <!-- Prix -->
                                <div class="col-md-6 h5">
                                    <label for="" class="h6">Prix</label>
                                </div>
                                <div class="col-md-6 ">
                                    <input id="" class="form-control" type="number" name="prix" :value="old('prix')" required autocomplete="username" />
                                    <x-input-error :messages="$errors->get('prix')" class="mt-2" />
                                </div>
                                <div class="modal-footer mt-2">
                                    <button type="submit" class="btn btn-success text-white">Enregistrer</button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <img src="{{asset('image/pexels-ono-kosuki-5648414.jpg')}}" alt="" style="height: 400px;">
        </div>
    </div>
</div>  
<div class="card mt-4" style="border:5px solid white; border-radius: 10px; box-shadow: 2px 2px 5px white, 2px 2px 15px white, 2px 2px 25px #6c757d;">
    <div class="row mt-4">
        <div class="col-md-5">
            <div class="container ">
                <div class="card">
                    <div class="card-header mt-4 text-center h2" style="background-color : #ffc107 ; border-radius: 10px; box-shadow: 2px 2px 10px white, 2px 2px 20px white, 2px 2px 40px white;">Creation Compte Chauffeur</div>  
                    <div class="card-body">
                    @if(Session::has('AjoutChauf'))
                            <div class="alert alert-success text-green mt-3 offset-2">{{Session::get('AjoutChauf')}}</div>
                        @endif 
                        <form action="{{route('comptechauffeurs.store')}}" method="post">
                            @csrf
                                <!-- Name -->
                                <div class="col-md-6 h5">
                                    <label for="" class="h6">Nom</label>
                                </div>
                                <div class="col-md-6 ">
                                    <input type="text" name="nameC"  class="form-control" :value="old('nameC')" required autocomplete="username">
                                    <x-input-error :messages="$errors->get('nameC')" class="mt-2" />
                                </div>

                                <!-- Numero Telephone -->
                                <div class="col-md-6 h5">
                                    <label for="" class="h6">Numero Telephone</label>
                                </div>
                                <div class="col-md-6 ">
                                    <input id="numTelC" class="form-control" type="number" name="numTelC" :value="old('numTel')" required autocomplete="username" />
                                    <x-input-error :messages="$errors->get('numTelC')" class="mt-2" />
                                </div>

                                <!-- Adresse -->
                                <div class="col-md-6 h5">
                                    <label for="" class="h6">Adresse</label>
                                </div>
                                <div class="col-md-6 ">
                                    <input id="adresseC" class="form-control" type="text" name="adresseC" :value="old('adresse')" required autocomplete="username" />
                                    <x-input-error :messages="$errors->get('adresseC')" class="mt-2" />
                                </div>

                                <!-- Email Address -->
                                <div class="col-md-6 h5">
                                    <label for="" class="h6">Email</label>
                                </div>
                                <div class="col-md-6 ">
                                    <input class="form-control" type="email" name="email" :value="old('email')" required />
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>
                                <!-- Password -->
                                <div class="col-md-6 h5">
                                    <label for="" class="h6">Mot de Passe</label>
                                </div>
                                <div class="col-md-6">
                                <input id="password" class="form-control"
                                    type="password"
                                    name="password"
                                    required autocomplete="new-password" />
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>

                                <div class="col-md-6 h5">
                                    <label for="password_confirmation" class="h6">Confirm Mot de Passe</label>
                                </div>
                                <div class="col-md-6 ">
                                    <input id="password_confirmation" class="form-control"
                                    type="password"
                                    name="password_confirmation" required autocomplete="new-password" />
                                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                </div>
                                <div class="modal-footer mt-4">
                                    <div class="flex items-center justify-end mt-4">
                                        <x-primary-button class="ml-4 btn btn-success">
                                            {{ __('Register') }}
                                        </x-primary-button>
                                    </div>   
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <img src="{{asset('image/pexels-ono-kosuki-5648414.jpg')}}" alt="" style="height: 400px;">
        </div>   
    </div>
</div> 
</x-app-layout>
   
</body>
</html>


