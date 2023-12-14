<!DOCTYPE html>
<lang="en">

</head>
<meta charset="uft-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="wieport" content="with=divice-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-Zenh87qX5JnK2JL0vwa8Ck3rdkQ2Bzep5IxbcnCeu0xjzrPF/et3URy9Bv1WTRi" crossorigin="anonimous">
<link rel="stylesheet" href="styles/style.css">


<title>Document</title>  
</head>
<main class="form-signin w-100 m-auto">
  <form action="config/login.php" method="POST" >


    <h1 class="h3 mb-3 fw-normal">porfavor inicie sesion </h1>

    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
      <label for="floatingInput">Email</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" id="floatingPassword" name="password">
      <label for="floatingPassword">password</label>
    </div>

    <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
    <p class="mt-5 mb-3 text-body-secondary">&copy; 2017–2023</p>
  </form>
</main>