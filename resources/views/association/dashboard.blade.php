<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


<div class="container text-center">
        <div class="row">
            <div class="col s12">
                <a href="/create-events">Creer un événement</a>
                <a href="/logout">Déconnexion</a>
                <h1>Liste des Evenements</h1>
                    <hr>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Numéro</th>
                                <th>Libellé</th>
                                <th>Date limite inscription</th>
                                <th>Date de l'événement</th>

                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $numero = 1;
                            @endphp

                            @foreach($events as $event)
                            <tr>
                                <td>{{$numero}}</td>
                                <td>{{$event->libelle}}</td>
                                <td>{{$event->date_limite_inscription}}</td>
                                <td>{{$event->date_evenement}}</td>
                                <td>
                                    <a href="/show_events/{{$event->id}}" class="btn btn-success">Détails</a>
                                </td>
                            </tr>
                            @php
                            $numero++;
                            @endphp
                            @endforeach
                            
                        </tbody>
                    </table>

            </div>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>