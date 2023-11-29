
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<div class="container">
<a href="/dashboard" class="btn btn-danger mt-4">Retour a la liste</a>

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
                    <form action="/store_events" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-header text-center bg-primary text-white">
                            AJOUT D'UN EVENEMENT
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nomBien" class="form-label mt-4">Libellé</label>
                                <input type="text" class="form-control" id="nomBien" name="libelle" >
                            </div>

                            <div class="form-group">
                                <label for="nomBien" class="form-label mt-4">Date limite d'inscription</label>
                                <input type="text" class="form-control" id="nomBien" name="date_limite_inscription" >
                            </div>

                            <div class="form-group">
                                <label for="description" class="form-label mt-4">Description</label>
                                <textarea class="form-control" id="description" name="description" placeholder="Description" ></textarea>
                            </div>

                            <div class="form-group">
                                <label for="image" class="form-label mt-4">Image</label>
                                <input type="file" class="form-control" id="image" name="image">
                                    
                            </div>

                            <div class="form-group">
                                <label for="adresse" class="form-label mt-4">Date de l'événement</label>
                                <input type="text" class="form-control" id="adresse" name="date_evenement" >
                            </div>


                           
                            <button type="submit" class="btn btn-primary btn-lg offset-5 mt-4 text-white">Submit</button> 
                        </div>
                    </form>
                </div>
            </div>
        </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
