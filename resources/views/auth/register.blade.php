<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/dataTables.bootstrap4.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Page De Connexion</title>
</head>
<body style="background-color : #6c757d ;">
    <div class="container offset-2 mt-4 mb-4">
        <div class="card col-md-9" style="border:5px solid white; border-radius: 10px; box-shadow: 2px 2px 10px white, 2px 2px 20px white, 2px 2px 40px #6c757d;">
            <div class="card-header mt-4 text-center h1" style="background-color : #ffc107 ; border-radius: 10px; box-shadow: 2px 2px 10px white, 2px 2px 20px white, 2px 2px 40px white;"> Creer Compte</div>
                <div class="card-body">
                   
                            <x-auth-session-status class="mb-4" :status="session('status')" />
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <!-- Name -->
                                <div class="col-md-6 h5">
                                    <label for="" class="h6">Nom</label>
                                </div>
                                <div class="col-md-6 ">
                                    <input type="text" name="name"  class="form-control" :value="old('name')" required autocomplete="username">
                                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                </div>

                                <!-- Prenom -->
                                <div class="col-md-6 h5">
                                   <label for="" class="h6">Prenom</label>
                                </div>
                                <div class="col-md-6 ">
                                    <input class="form-control" type="text" name="prenom" :value="old('prenom')" required autocomplete="username" />
                                    <x-input-error :messages="$errors->get('prenom')" class="mt-2" />
                                </div>

                                <!-- Numero Telephone -->
                                <div class="col-md-6 h5">
                                    <label for="" class="h6">Numero Telephone</label>
                                </div>
                                <div class="col-md-6 ">
                                    <input id="numTel" class="form-control" type="number" name="numTel" :value="old('numTel')" required autocomplete="username" />
                                    <x-input-error :messages="$errors->get('numTel')" class="mt-2" />
                                </div>

                                <!-- Adresse -->
                                <div class="col-md-6 h5">
                                    <label for="" class="h6">Adresse</label>
                                </div>
                                <div class="col-md-6 ">
                                    <input id="adresse" class="form-control" type="text" name="adresse" :value="old('adresse')" required autocomplete="username" />
                                    <x-input-error :messages="$errors->get('adresse')" class="mt-2" />
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
                                        <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                                            {{ __('Already registered?') }}
                                        </a>
    
                                        <x-primary-button class="ml-4 btn btn-success">
                                            {{ __('Register') }}
                                        </x-primary-button>
                                    </div>   
                                </div>
                            </form>  
                </div>
        </div>
    </div>   
</body>
</html>