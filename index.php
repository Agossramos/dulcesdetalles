
<?php 
require_once ("session.php");
include ('template/header.php');
include_once "conexion.php"; 
?> 

<div class="container">
<div>
				<!-- inicio alerta, msg de error que faltan completar datos -->
	<?php 
	
    if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'falta'){ /* si es que existe una variable que viaja via get q 
		se llame mensaje y encima ese mensaje es igual a falta, que imprima*/
    ?>
		
		<div class="alert alert-danger mb-0 alert-dismissible fade show " id="alertExample" role="alert" data-mdb-color="secondary">
  			<i class="fas fa-check me-2"></i>
  			ERROR! No ingresó todos los campos
  			<button type="button" class="btn-close ms-2" data-mdb-dismiss="alert" aria-label="Close"></button>
		</div>
	<?php 
   	 	}
	?>

	<?php
		if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'advertencia'){ /* si es que existe una variable que viaja via 
			get q se llame mensaje y encima ese mensaje es igual a falta, que imprima*/
	?>
			
			<div class="alert alert-danger mb-0 alert-dismissible fade show " id="alertExample" role="alert" data-mdb-color="secondary">
				  <i class="fas fa-check me-2"></i>
				  ERROR! La contraseñas no coinciden
				  <button type="button" class="btn-close ms-2" data-mdb-dismiss="alert" aria-label="Close"></button>
			</div>
	<?php
		}
	?>

	<?php
		if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'usuariorepetido'){ /* si es que existe una variable que viaja via 
			get q se llame mensaje y encima ese mensaje es igual a falta, que imprima*/
	?>
			
			<div class="alert alert-danger mb-0 alert-dismissible fade show " id="alertExample" role="alert" data-mdb-color="secondary">
				  <i class="fas fa-check me-2"></i>
				  El email ya esta registrado!
				  <button type="button" class="btn-close ms-2" data-mdb-dismiss="alert" aria-label="Close"></button>
			</div>
	<?php
		}
	?>


<?php 
	
    if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'registradoanteriormente'){ /* si es que existe una variable que viaja via 
		get q se llame mensaje y encima ese mensaje es igual a falta, que imprima*/
    ?>
		
		
		<div class="alert alert-warning mb-0 alert-dismissible fade show " id="alertExample" role="alert" data-mdb-color="secondary">
  			<i class="fas fa-check me-2"></i>
  			El Usuario ya está registrado!
  			<button type="button" class="btn-close ms-2" data-mdb-dismiss="alert" aria-label="Close"></button>
		</div>
	<?php 
   	 	}
	?>

	<?php 
           if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'registrado'){
    ?>
			
			<div class="alert alert-success mb-0 alert-dismissible fade show " id="alertExample" role="alert" data-mdb-color="secondary">
 			 	<i class="fas fa-check me-2"></i>
  				REGISTRADO! Se agregaron los datos.
  				<button type="button" class="btn-close ms-2" data-mdb-dismiss="alert" aria-label="Close"></button>
			</div>           
    <?php 
        }
    ?>   

	<?php 
           if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'usuarioregistrado'){
    ?>
			
			<div class="alert alert-success mb-0 alert-dismissible fade show " id="alertExample" role="alert" data-mdb-color="secondary">
 			 	<i class="fas fa-check me-2"></i>
  				El usuario fue registrado con Éxito!
  				<button type="button" class="btn-close ms-2" data-mdb-dismiss="alert" aria-label="Close"></button>
			</div>           
    <?php 
        }
    ?>   


	<?php 
    	if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'error'){
	?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> Vuelve a intentar.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
	<?php 
        }
    ?>   


    <?php 
    	if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'editado'){
    ?>
		
		<div class="alert alert-primary mb-0 alert-dismissible fade show " id="alertExample" role="alert" data-mdb-color="secondary">
  			<i class="fas fa-check me-2"></i>
  			Cambiado! Los datos fueron actualizados.
  			<button type="button" class="btn-close ms-2" data-mdb-dismiss="alert" aria-label="Close"></button>
		</div>
        
    <?php 
        }
    ?> 


    <?php 
         if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'eliminado'){
    ?>
        
		<div class="alert alert-primary mb-0 alert-dismissible fade show " id="alertExample" role="alert" data-mdb-color="secondary">
  			<i class="fas fa-check me-2"></i>
  			Eliminado! Los datos fueron borrados.
  			<button type="button" class="btn-close ms-2" data-mdb-dismiss="alert" aria-label="Close"></button>
		</div>
    <?php 
        }
    ?> 

	<?php 
           if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'pedidoregistrado'){
    ?>
			
			<div class="alert alert-success mb-0 alert-dismissible fade show " id="alertExample" role="alert" data-mdb-color="secondary">
 			 	<i class="fas fa-check me-2"></i>
  				Su pedido se ha registrado con Éxito!
  				<button type="button" class="btn-close ms-2" data-mdb-dismiss="alert" aria-label="Close"></button>
			</div>           
    <?php 
        }
    ?>   

</div>
		<!-- fin alerta, aca terminan los msg de faltante de datos -->

		<div class="row row-cols-2 row-cols-md-2 g-2"> <!--ingreso las 2 fotos que estan en el index-->
			<div class="col">
				<div class="imagenes">
						<img src="Imagenes/WhatsApp Image 2020-07-21 at 14.58.20.jpeg" width=100% alt="...">

				</div>
			</div>
			<div claas="col">
				
				<img src="Imagenes/Bombones rellenos de Frambuesa-.jpg" width=100% alt="...">
			</div>
		</div>	

</div>


<?php include 'template/footer.php' ?> <!--  de aca llamo al footer-->


