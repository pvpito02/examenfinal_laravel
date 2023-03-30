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
      
            <div class="container">
                <div class="card">
                    <div class="card-header  mt-4 text-center h2" style="background-color : #ffc107 ; border-radius: 10px; box-shadow: 2px 2px 10px white, 2px 2px 20px white, 2px 2px 40px white;">
                        <h3 class="text-center">LISTE DES VOITURES</h3>
                    </div>
                    <div class="card-body mt-2">   
                        <table class="table table-bordered" id="liste1">
                            <thead class="text-center" style="border-radius : 12px">
                                <tr>
                                    <th>id</th>
                                    <th>Marque</th>
                                    <th>Modele</th>
                                    <th>Immatriculation</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody class="" style="color : #140344 ;">
                                @foreach($vehicules as $veh)
                                    <tr>
                                        <th>{{$veh->id}}</th>
                                        <th>{{$veh->marque}}</th>
                                        <th>{{$veh->modele}}</th>
                                        <th>{{$veh->immatriculation}}</th>
                                        <th>
                                            <a href=""class="btn ml-2 btn-success">Modifier</a>
                                            <a href="" class="btn ml-2 btn-danger">Suprimer</a>
                                        </th>                                               
                                    </tr> 
                                @endforeach    
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="card">
                    <div class="card-header  mt-4 text-center h2" style="background-color : #ffc107 ; border-radius: 10px; box-shadow: 2px 2px 10px white, 2px 2px 20px white, 2px 2px 40px white;">
                        <h3 class="text-center">LISTE DES TARIFS</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered" id="liste1">
                            <thead class="text-center" style="border-radius : 12px">
                                <tr>
                                    <th>id</th>
                                    <th>Depart</th>
                                    <th>Arrivee</th>
                                    <th>Prix</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody class="" style="color : #140344 ;">
                                @foreach ($tarrifcourses as $tar)
                                    <tr>
                                        <th>{{$tar->id}}</th>
                                        <th>{{$tar->depart}}</th>
                                        <th>{{$tar->destination}}</th>
                                        <th>{{$tar->prix}}</th>
                                        <th>
                                            <a href="" class="btn ml-2 btn-success">Modifier</a>
                                            <a href="" class="btn ml-2 btn-danger">Suprimer</a>
                                        </th>
                                                    
                                    </tr> 
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="card">
                    <div class="card-header  mt-4 text-center h2" style="background-color : #ffc107 ; border-radius: 10px; box-shadow: 2px 2px 10px white, 2px 2px 20px white, 2px 2px 40px white;">
                        <h3 class="text-center">LISTE DES CHAUFFEURS</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered" id="liste1">
                            <thead class="text-center" style="border-radius : 12px">
                                <tr>
                                    <th>id</th>
                                    <th>Nom</th>
                                    <th>Numero Tel</th>
                                    <th>Adresse</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody class="" style="color : #140344 ;">
                                @foreach($chauffeurs as $chauff)
                                    <tr>
                                        <th>{{$chauff->id}}</th>
                                        <th>{{$chauff->nameC}}</th>
                                        <th>{{$chauff->numTelC}}</th>
                                        <th>{{$chauff->adresseC}}</th>
                                        <th>
                                            <a href="" class="btn ml-2 btn-success">Modifier</a>
                                            <a href="" class="btn ml-2 btn-danger">Suprimer</a>
                                        </th>
                                                    
                                    </tr> 
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="modal-footer mt-2">
                   <a href="{{route('reservationclis.index')}}" class="btn btn-success">Voir liste des reservations</a>
                </div>
</body>
</html>