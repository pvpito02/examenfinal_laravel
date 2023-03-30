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
                        @if(Session::has('AjoutClient'))
                            <div class="alert alert-success text-green mt-3 offset-2">{{Session::get('AjoutClient')}}</div>
                        @endif 
                            <x-auth-session-status class="mb-4" :status="session('status')" />
                            <form method="POST" action="{{route('compteclients.store')}}">
                                @csrf
                                <!-- Name -->
                                <div class="col-md-6 h5">
                                    <label for="" class="h6">Nom</label>
                                </div>
                                <div class="col-md-6 ">
                                    <input type="text" name="nameCli"  class="form-control" :value="old('nameCli')" required autocomplete="username">
                                    <x-input-error :messages="$errors->get('nameCli')" class="mt-2" />
                                </div>
                                <!-- Numero Telephone -->
                                <div class="col-md-6 h5">
                                    <label for="" class="h6">Numero Telephone</label>
                                </div>
                                <div class="col-md-6 ">
                                    <input id="numTelCli" class="form-control" type="number" name="numTelCli" :value="old('numTelCli')" required autocomplete="username" />
                                    <x-input-error :messages="$errors->get('numTelCli')" class="mt-2" />
                                </div>

                                <!-- Adresse -->
                                <div class="col-md-6 h5">
                                    <label for="" class="h6">Adresse</label>
                                </div>
                                <div class="col-md-6 ">
                                    <input id="adresseCli" class="form-control" type="text" name="adresseCli" :value="old('adresseCli')" required autocomplete="username" />
                                    <x-input-error :messages="$errors->get('adresseCli')" class="mt-2" />
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
                                        <x-primary-button class="ml-4 btn btn-success" type="submit">
                                           S'Inscrire
                                        </x-primary-button>
                                        <a href="{{route('compteclients.create')}}" class="btn btn-primary float-right mr-4 mt-1 texr-white">Mon Compte</a>
                                    </div>   
                                </div>
                            </form>  
                </div>
        </div>
    </div>   
</body>
</html>