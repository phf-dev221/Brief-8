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

                <a href="{{'/dashboard'}}" class="btn btn-info">Retour</a>
    </div>

</body>