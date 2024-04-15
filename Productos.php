<?php include 'template/header.php' ?> <!--  de aca llamo al header, me queda separado del codigo, es la forma profesional de trabajar,varia segun programador -->

<?php
    include_once "conexion.php"; // Primero vamos a llamar a nuestro archivo de conexion
    $sentencia = $bd -> query("select * from productos");  // aca estamos llamando a ese objeto bd , y vamos a ejecutar la consulta
    $productos = $sentencia->fetchAll(PDO::FETCH_OBJ); // creo una variable, y dentro de persona vamos a guardar todos los valores de la base de datos, llamo a sentencia, y le vamos a dar un formato, y a pdo, le vamos a dar un formato adecuado para que pueda leerse(hay varias formas)

?>

<!--CARDS--> 

<div class="row row-cols-1 row-cols-md-5 g-4">
	<?php
		foreach($productos as $dato){ //cargo los productos guardados en la base de datos
	?>
	<div class="col">
		<img src="<?php echo $dato->Foto; ?>" class="card-img-top" alt="...">
			<div class="card">			
				<div class="card-body">
					<h5 class="card-title"><?php echo $dato->Nombre_producto; ?></h5>
					<p class="card-text"><?php echo $dato->Descripción_producto; ?></p>
					<p class="card-text">$<?php echo $dato->Precio; ?></p>
					<a class="btn btn-primary" href="realizar_pedidos.php?codigo=<?php echo $dato->Codigo_producto; ?>" class="btn btn-primary">Comprar</a>
				</div>
			</div>
		</div>
	<?php
		}
	?>
</div>

<?php include 'template/footer.php' ?> <!--  de aca llamo al footer-->