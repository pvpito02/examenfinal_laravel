<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/dataTables.bootstrap4.css')}}">
    <title>Page De Connexion</title>
</head>
<body style="background-color : #6c757d ;">
<div class="container offset-2 mt-4" >
        <div class="card col-md-9" style="border:5px solid white; border-radius: 10px; box-shadow: 2px 2px 10px white, 2px 2px 20px white, 2px 2px 40px #6c757d;">
            <div class="card-header mt-4 text-center h1" style="background-color : #ffc107 ; border-radius: 10px; box-shadow: 2px 2px 10px white, 2px 2px 20px white, 2px 2px 40px white;"> Connexion</div>
                <div class="card-body">
                    <x-auth-session-status class="mb-4" :status="session('status')" />
                    <form method="POST" action="{{route('login') }}">
                        @csrf
                        <!-- Email Address -->
                        <div class="col-md-6 h5">
                            <label for="" class="h6">Email</label>
                        </div>
                        <div class="col-md-6 ">
                            <input id="email" class="form-control" type="email" name="email" :value="old('email')" required autocomplete="username" />
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
                        <!-- Remember Me -->
                        <div class="block mt-4">
                            <label for="remember_me" class="inline-flex items-center">
                                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                                <span class="ml-2 text-sm">{{ __('Remember me') }}</span>
                            </label>
                        </div>                                   
                         <div class="modal-footer mt-2">
                                @if (Route::has('password.request'))
                                    <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                                        {{ __('Forgot your password?') }}
                                    </a>
                                @endif
                               
                                <x-primary-button class="ml-3 btn btn-primary">
                                    {{ __('Log in') }}
                                </x-primary-button>
                                <a href="{{route('register') }}" class="btn btn-success float-right mr-4 mt-1 texr-white" >Creer compte</a>
                            </div>
                           
                    </form>
            </div>
        </div>
    </div>
    
</body>
</html>