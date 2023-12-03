<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <div class="card mb-4 offset-1" style="width:80%;">
        <img src="{{ asset('public/images/'.$event->image) }}" class="img-fluid rounded-start" alt="" style="height: 500px; width: 100%;">
        <div class="row">
            <div class="card-body">
                <h5 class="card-title">Libellé: {{$event->libelle}}</h5>
                <p class="card-text">date limite d'inscription: {{$event->date_limite_inscription}}</p>
                <p class="card-text">Description: {{ $event->description}}</p>
                <p class="card-text">Est_cloturé: {{ $event->est_cloture}}</p>
                <p class="card-text">Date de l'événement: {{ $event->date_evenement}}</p>

                <a href="/edit_events/{{$event->id}}" class="btn btn-success">Modifier</a>
                <a href="/delete_events/{{$event->id}}" class="btn btn-danger">supprimer</a>
                <hr>
                <h2 style="text-align:center;margin-top:50px;">Liste des réservations</h2>

                <table class="table">
                    <tr>
                        <td>Nom client</td>
                        <td>Nombre de place</td>
                        <td>Action</td>
                    </tr>
                    @foreach($usersReserved as $user)
                    <tr>
                    <td>{{$user->user->name}}</td>
                    <td>{{$user->nombre_place}}</td>
                    <td>
                        <a href="/decliner/{{$user->id}}" class="btn btn-danger">Décliner</a>
                    </td>
                    </tr>
                    @endforeach
                    </table>

                

                <a href="{{'/dashboard'}}" class="btn btn-info">Retour</a>
    </div>

</body>