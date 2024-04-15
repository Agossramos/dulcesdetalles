<!DOCTYPE html>
<?php 
require_once ("session.php");

?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="reserva de vuelos de avion">
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesion</title>

    <!-- ICONO -->
    <link rel="shortcut icon" href="img/icon.ico" type="image/x-icon">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


</head>
<body>
  <!-- BOOTSTRAP JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <main class="form-signin">
    <div class="container"> <!-- formulario registrar-->
      <form method="POST" action="iniciar_sesion.php">

										<!-- Email input -->
										<div class="form-outline mb-4">
											<label class="form-label" for="loginName">Email</label>
											<input type="email" id="loginName" name="loginName" class="form-control" required/>

										</div>

										<!-- Password input -->
										<div class="form-outline mb-4">
											<label class="form-label" for="loginPassword">Contraseña</label>
											<input type="password" id="loginPassword" name="loginPassword" class="form-control" required/>

										</div>

										<!-- Submit button -->
										<button type="submit" class="btn btn-primary btn-block mb-4">
											Iniciar sesión
										</button>
									</form>

    </div>
  </main>

</body>
</html>