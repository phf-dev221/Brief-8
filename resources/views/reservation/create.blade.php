@extends('layout.navbar')
@section('content')
<div class="container">

    <div class="row d-flex justify-content-center align-items-center">
            <div class="col-md-4" style=" margin-right:250px;">
                @if(session('status'))
                <div class="alert alert-success">
                    {{session('status')}}
                </div>
                @endif
                <ul>
                    @foreach($errors->all() as $error)
                    <li class="alert alert-danger">{{$error}}</li>
                    @endforeach
                </ul>
                <div class="card " style="width: 600px;">
                    <form action="/store_reservation/{{$event->id}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @php
                            $userId = Session::get('user')
                        @endphp
                        <input type="hidden" name="event_id" value="{{$event->id}}">
                        <input type="hidden" name="user_id" value="{{$userId->id}}">
                        <div class="card-header text-center bg-primary text-white">
                            RESERVATION
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nomBien" class="form-label mt-4">Nombre de place</label>
                                <input type="number" class="form-control" id="nomBien" name="nombre_place" >
                            </div>
                           
                            <button type="submit" class="btn btn-primary btn-lg offset-5 mt-4 text-white">Submit</button> 
                        </div>
                    </form>
                </div>
            </div>
        </div>
</div>
@endsection

