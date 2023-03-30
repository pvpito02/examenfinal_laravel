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
                        <h3 class="text-center">LISTE DES RESERVATIONS</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered" id="liste1">
                            <thead class="text-center" style="border-radius : 12px">
                                <tr>
                                    <th>id</th>
                                    <th>Vehicule</th>
                                    <th>Tarrif</th>
                                    <th>Chauffeur</th>
                                    <th>Client</th>
                                </tr>
                            </thead>
                            <tbody class="" style="color : #140344 ;">
                                @foreach($reserv as $resv)
                                    <tr>
                                        <th>{{$resv->id}}</th>
                                        <th>{{$resv->vehicule->marque}}</th>  
                                        <th>{{$resv->tarrifcourse_id}}</th>
                                        <th>{{$resv->comptechauffeur_id}}</th>
                                        <th>{{$resv->compteclient_id}}</th>                                      
                                    </tr> 
                                @endforeach       
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
</body>
</html>