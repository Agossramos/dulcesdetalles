<!DOCTYPE html>
<?php
require_once('conexion.php'); 
require_once('session.php');


?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registrarse</title>
    <!-- BOOTSTRAP CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- CSS CUSTOM -->
    <link rel="stylesheet" href="styles.css">
    <!-- ICONO -->
    <link rel="shortcut icon" href="img/icon.ico" type="image/x-icon">
    
</head>
  <body>
     
    <main class="form-signin">

      <div class="container">

      <!-- inicio alerta-->
        
        <?php 
          if(isset($_GET['mensaje']) && ($_GET['mensaje']=="error")){
        ?>
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
               <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
               <strong>Error!</strong> ha ocurrido un error.
               <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
          </div>
        <?php 
          } 
        ?>
      <!-- fin alerta-->

    <div>
    <form method="POST" action="registrar.php"> <!-- formulario de registro de usuario-->

										<!-- Email input -->
										<div class="form-outline mb-4">
											<label class="form-label" for="registroNombre">Nombre</label>
											<input type="txt" id="registroNombre" name="registroNombre" class="form-control" required/>

										</div>

                    <!-- Apellido input -->
										<div class="form-outline mb-4">
											<label class="form-label" for="registroApellido">Apellido</label>
											<input type="txt" name="registroApellido" id="registroApellido" class="form-control" required/>
										</div>

                    <!-- Email input -->
										<div class="form-outline mb-4">
											<label class="form-label" for="registroEmail">Email</label>
											<input type="email" name="registroEmail" id="registroEmail" class="form-control" required/>

										</div>
                    <div class="form-outline mb-4">
											<label class="form-label" for="registroContraseña">Contraseña</label>
											<input type="password" name="registroContraseña" id="registroContraseña" class="form-control" required/>

										</div>

										<!-- Repetir Contraseña input -->
										<div class="form-outline mb-4">
											<label class="form-label" for="registerRepeatPassword">Repetir
												Contraseña</label>
											<input type="password" name="registerRepeatPassword" id="registerRepeatPassword" class="form-control" required/>
										</div>

										<!-- Submit button -->
										<button type="submit" class="btn btn-primary btn-block mb-3">
											Registrarse
										</button>
									</form>

    </div>
  </main>
        
							
			</div>
      
    </main>
  </body>
</html>