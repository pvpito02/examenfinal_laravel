<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/dataTables.bootstrap4.css')}}">
</head>
<body style="background-color : #6c757d ;">
    <div class="container mt-4">
        <div class="card" style="border:5px solid white; border-radius: 10px; box-shadow: 2px 2px 10px white, 2px 2px 20px white, 2px 2px 40px #6c757d;">
            <div class="card-header mt-4" style="height:90px;  background-color : #ffc107 ;">
                <a href="{{route('login')}}" class="btn btn-warning float-right mr-4 mt-4" style="font-size:25px">Inscription</a>
                <a href="{{route('chauff')}}" class="btn btn-warning float-right mr-4 mt-4" style="font-size:25px">Chauffeurs</a>
                <a href="{{route('cli')}}" class="btn btn-warning float-right mr-4 mt-4" style="font-size:25px">Passagers</a>
                <a href="{{route('prop')}}" class="btn btn-warning float-right mr-4 mt-4" style="font-size:25px">A propos</a>
                <a href="{{route('bienvenue')}}" class="btn btn-warning float-right mr-4 mt-4"  style="font-size:25px">Home</a>
            </div>
            <div class="card-body mt-4">
                <div class="row">
                    <div class="col-md-5 h2">
                       <p style="color: #ffc107;"> A propos de Faster. </p>
                       <div class="mt-4">
                            Le meilleur choix de transport 
                            pour une agréable journée. 
                       </div>
                    </div>
                    <div class="col-md-6">
                      <img src="{{asset('image/pexels-ono-kosuki-5648414.jpg')}}" alt="" style="height: 400px;">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5 h5">
                         Faster est le service VTC à la demande qui 
                         vous accompagnera en toute sécurité dans 
                         tous vos déplacements. 
                    </div>
                </div>    
            </div>
        </div>
    </div>
    <div class="container mt-4">
        <div class="card" style="border:5px solid white; border-radius: 10px; box-shadow: 2px 2px 5px white, 2px 2px 15px white, 2px 2px 25px #6c757d;">        
            <div class="card-body mt-4" >
                <div class="row">
                    <div class="col-md-6">
                       <img src="{{asset('image/pexels-nappy-3214023.jpg')}}" alt="" style="height: 400px; width:450px">
                    </div>
                    <div class="col-md-5 offset-1">
                       <p style="" class="h5"> Simplifiez vos déplacements professionnels 
                           ainsi que ceux de vos collaborateurs. </p>
                       <div class="mt-4 h4">
                          Nos solutions Faster Business                
                          répondent à toutes vos problématiques 
                          de mobilité. 
                       </div>
                    </div>
                </div>       
            </div>
        </div>
    </div>

            <div class="card-footer mt-4" style="height:500px; background-color : #ffc107 ; border:1px solid white; border-radius: 10px; box-shadow: 2px 2px 10px white, 2px 2px 20px white, 2px 2px 40px #6c757d;">
                <div class="col-md-5 offset-1">
                       <p style="" class="h5"> Simplifiez vos déplacements professionnels 
                           ainsi que ceux de vos collaborateurs. </p>
                       <div class="mt-4 h4">
                          Nos solutions Faster Business                
                          répondent à toutes vos problématiques 
                          de mobilité. 
                       </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
</body>
</html>