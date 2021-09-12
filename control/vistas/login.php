<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/signin.css">
    <title>Document</title>
</head>
<body>
   

    <form class="form-signin" action="../controladores/validacionLogin.php" method="POST">
        <img class="mb-4" src="img/logo.png" alt="" width="45%" height="45%">
        <h1 class="h4 mb-3 font-weight-normal">Iniciar sesión</h1>
       
        <input type="email" id="inputEmail" class="form-control" placeholder="Correo" required autofocus name="correo">
       
        <input type="password" id="inputPassword" class="form-control" placeholder="Contraseña" required name="contrasenia">
    
        <div class="d-grid gap-2">
        <button class="btn btn-primary" type="submit">Iniciar</button>
           
          </div>
        <p class="mt-5 mb-3 text-muted">&copy; Parroquia Santo Cristo De Esquipulas</p>
      </form>

</body>
</html>