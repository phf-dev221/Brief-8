<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <div class="container">

    <form action="/store-user" method="post">

@csrf
<div class="mb-3">
  <label for="disabledTextInput" class="form-label">Nom</label>
  <input type="text" id="disabledTextInput" class="form-control" name ="name" >
</div>

<div class="mb-3">
  <label for="disabledTextInput" class="form-label">Prénom</label>
  <input type="text" id="disabledTextInput" class="form-control" name="firstName">
</div>

<div class="mb-3">
  <label for="disabledTextInput" class="form-label">Email</label>
  <input type="email" id="disabledTextInput" class="form-control" name="email" >
</div>

<div class="mb-3">
  <label for="disabledTextInput" class="form-label">Téléphone</label>
  <input type="number" id="disabledTextInput" class="form-control" name="phone" >
</div>

<div class="mb-3">
  <label for="disabledTextInput" class="form-label">Mot de passe</label>
  <input type="password" id="disabledTextInput" class="form-control" name="password" >
</div>


<button type="submit" class="btn btn-primary">S'inscrire</button>
</form>

</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>