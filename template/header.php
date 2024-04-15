<?php
require("conexion.php");
require_once ("session.php");
date_default_timezone_set('America/Argentina/Buenos_Aires');

	global $tipo;		
		$menu=""; 
		
        $menu= "
                  <a href='index.php' >Inicio</a>
                ";
		if ($tipo=="cliente") { 
			
			$menu.= "
                
                    <a href='Productos.php' title='Productos'>Productos</a>
            
                
                    <a href='Nosotros.php' title='Nosotros'>Nosotros</a>
                ";
		}

		if ($tipo=="admin") { 
			$menu.= "

				
					<a href='Productos.php' title='Productos'>Productos</a>
			
                
                    <a href='Pedidos.php' title='administrar_pedidos'>Administrar Pedidos</a>
               
                
                    <a href='Administrar_Usuarios.php' title='administrar_usuarios'>Administrar Usuarios</a>
                ";
		}	

  		$main_manu = "
            <ul>
                $menu
            </ul>";
	

?>

<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Dulces Detalles</title>
	<link href="./CSS/main.css" rel="stylesheet" type="text/css">
	<link rel="shortcut icon" href="Imagenes/Logo.png">

	<!-- Font Awesome -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
	<!-- MDB -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.css" rel="stylesheet" />
	<!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
	<div class="container-fluid">
        <div class="row">
        <div class="col-md"> 
		<header class="py-3">
			<div class="logo"> <!--coloco la foto del logo en el encabezado-->
				<!-- Mi logo-->
				<img src="Imagenes/Logo.png" width=220px alt="">
			</div>
			<nav> <!--coloco el menu en el encabezado-->
				<?php
				echo $menu
				?>
			</nav>
			<?php //decido que boton colocar, si agregar y registrar o cerrar sesion
				global $loginName;

				if($loginName==""){ //si no hay iniciada ninguna sesion
					 $links=
							"<div class='text-end'>
								<a href='login.php' class='btn btn-outline-primary me-2'>Acceder</a>
								<a href='sign-in.php' class='btn btn-primary'>Registrarse</a>
                 			</div>"; 
				}else{
					$links = "<span> Bienvenido: <strong> {$_SESSION['Apellido']}, {$_SESSION['Nombre']}</strong> &nbsp;".
							"<a href='cerrar_sesion.php' title='cerrar sessión'><i class='fa fa-sign-out' aria-hidden='true'></i>
							</a></span>";
				}		
				echo $links;
			?>


			
		</header>
        </div>
        </div>
	</div>