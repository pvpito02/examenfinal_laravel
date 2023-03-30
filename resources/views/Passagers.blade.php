<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/dataTables.bootstrap4.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body  style="background:url({{asset('image/pexels-cleyton-ewerton-3007322.jpg')}}) ;height: 400px; background-size: cover">
    <div class="container">
            <div class="card">
                <div class="card_header mt-4" style="height:80px;  background-color : #ffc107 ;">
                    <a href="{{route('login')}}" class="btn btn-warning float-right mr-4 mt-4"  style="font-size:25px">Inscription</a>
                    <a href="{{route('chauff')}}" class="btn btn-warning float-right mr-4 mt-4"  style="font-size:25px">Chauffeurs</a>
                    <a href="{{route('cli')}}" class="btn btn-warning float-right mr-4 mt-4"  style="font-size:25px">Passagers</a>
                    <a href="{{route('prop')}}" class="btn btn-warning float-right mr-4 mt-4"  style="font-size:25px">A propos</a>
                    <a href="{{route('bienvenue')}}" class="btn btn-warning float-right mr-4 mt-4"  style="font-size:25px">Home</a>
                </div>
        </div>
    </div>           
    <div class="card-body offset-2">
                    <div class="col-md-6 h2 mt-4 text-center" style="color:white">
                        Passagers
                    </div>
                    <div class="col-md-8 h1 mt-4" style="color: #ffc107">
                         FASTER prend soin de ses passagers
                    </div>
                    <div class="col-md-6 mt-4 h2 " style="color:white">
                        Rejoignez-nous et augmentez 
                        vos revenus tout en gérant votre 
                        emploi du temps simplement.  
                    </div>
                    <div class="col-md-6 mt-4 h2 " style="color:white">
                            Faster est le service VTC à la demande qui 
                            vous accompagnera en toute sécurité dans 
                            tous vos déplacements locaux.
                    </div>

                    <div class="col-md-6 h2 mt-4">
                       <a href="{{route('compteclients.create')}}" class=" h2 btn btn-warning float-right mr-4 mt-4">Inscription</a>
                    </div>
          
            </div>
        
</body>
</html>