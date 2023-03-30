<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/dataTables.bootstrap4.css')}}">
    <title>Document</title>
</head>
<body>     
<div class="card-header mt-4 text-left h3" style="background-color : #f8f9fa ; border-radius: 10px; box-shadow: 2px 2px 10px white, 2px 2px 20px white, 2px 2px 40px white;">{{$cli_name}} ,You ' re login in</div>  
    <div class="container">
        <div class="card">
            <div class="card-header mt-4 text-center h2" style="background-color : #ffc107 ; border-radius: 10px; box-shadow: 2px 2px 10px white, 2px 2px 20px white, 2px 2px 40px white;">Reserver un voyage</div>  
            <div class="card-body">
                    @if(Session::has('AjoutReserv'))
                            <div class="alert alert-success text-green mt-3 offset-2">{{Session::get('AjoutReserv')}}</div>
                        @endif 
                        <form action="{{route('reservationclis.store')}}" method="post">
                             @csrf
                              <!-- Vehicule disponible -->
                              <div class="col-md-6 h5">
                                    <label for="" class="h6">Vehicule</label>
                                </div>
                                <div class="col-md-6 ">
                                    <select name="vehicules" id="" style="border-radius:5px; border:1px solid lightblue; width:320px; height:40px;">
                                            <option value="">Faite votre choix</option>
                                                @foreach ($vehicules as $veh)
                                                    <option value="{{$veh->id}}">
                                                        {{$veh->marque}},
                                                        {{$veh->immatriculation}},
                                                </option>            
                                                @endforeach  
                                    </select>
                                    <x-input-error :messages="$errors->get('vehicules')" class="mt-2" />
                                </div>
                                <!-- Trajet -->
                                <div class="col-md-6 h5">
                                    <label for="" class="h6">Trajet</label>
                                </div>
                                <div class="col-md-6 ">
                                    <select name="tarrifcourses" id="" style="border-radius:5px; border:1px solid lightblue; width:320px; height:40px;">
                                        <option value="">Faite votre choix</option>
                                            @foreach ($tarrifcourses as $tarif)
                                                <option value="{{$tarif->id}}">
                                                    {{$tarif->depart}},
                                                    {{$tarif->destination}},
                                                    {{$tarif->prix}}
                                               </option>            
                                            @endforeach  
                                    </select>
                                    <x-input-error :messages="$errors->get('tarrifcourses')" class="mt-2" />
                                </div>

                                <!-- chauffeur Disponible -->
                                <div class="col-md-6 h5">
                                   <label for="" class="h6">Chauffeur</label>
                                </div>
                                <div class="col-md-6 ">
                                    <select name="comptechauffeurs" id="" style="border-radius:5px; border:1px solid lightblue; width:320px; height:40px;">
                                            <option value="">Faite votre choix</option>
                                                @foreach ($chauffeurs as $chauffs)
                                                    <option value="{{$chauffs->id}}">
                                                        {{$chauffs->nameC}}
                                                </option>            
                                                @endforeach  
                                    </select>
                                    <x-input-error :messages="$errors->get('comptechauffeurs')" class="mt-2" />
                                </div>
                                <input type="number" hidden name="client_id" value="{{$cli_id}}" class="form-control">
                                <div class="modal-footer mt-2">
                                    <button type="submit" class="btn btn-success text-white">Enregistrer</button>
                                </div>
                                <input type="number" name="nombreClient" value="1" class="form-control">
                </form>
            </div>
        </div>
    </div>
   
</body>
</html>