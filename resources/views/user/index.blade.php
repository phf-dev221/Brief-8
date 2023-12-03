@extends('layout.navbar')
@section('content')
<div class="container">

  <a href="/logout" class="btn btn-danger" style="float:right;margin-top:7px;">se deconnecter</a>

  <a href="/login" class="btn btn-primary" style="float:right;margin-top:7px;margin-right:20px;">se connecter comme organisation</a>

<h1 style="text-align: center; color: blue; font-size: 27px; font-weight: bold; margin-top:35px;"> Nos Evenements</h1>
    <ul class="d-flex flex-wrap justify-content-between">
    @foreach($events as $event)
        <div class="card mt-4" style="width: 25rem;">
            <img src="{{ url('public/images/'.$event->image) }}" class="card-img-top" alt="" width="420">
            <div class="card-body">
                <h5 class="card-title">{{$event->libelle}}</h5>
                <p class="card-text" style="color:orange;font-weight:bold;">{{$event->date_evenement}}</p>
                <p class="card-text">{{$event->date_limite_inscription}}</p>
                <p class="card-text">Description: {{ $event->description }}</p>

                @if(auth()->user() && (in_array($event->id, $reservedEventIds)))
                    <p style="color:red;">Vous avez déjà réservé pour cet événement.</p>
                @else
                    <a class="btn btn-success" href="/login">Réserver</a>
                @endif
            </div>
        </div>
    @endforeach

    </ul>

</div>

@endsection