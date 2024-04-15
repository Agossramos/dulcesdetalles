<?php include 'template/header.php' ?> <!--  de aca llamo al header, me queda separado del codigo, es la forma profesional de trabajar,varia segun programador -->

<?php
    include_once "conexion.php"; // Primero vamos a llamar a nuestro archivo de conexion
    $codigo = $_GET['codigo'];
    $fechaActual = date('Y-m-d');// Obteniendo la fecha actual del sistema con PHP
	$sql= "SELECT Nombre_producto FROM productos WHERE Codigo_producto=$codigo";
    $resul = $bd -> query($sql);
    $nombre_producto=$resul->fetch();
    
?>

<div class="container mt-5"> 
    <div class="row justify-content-center">
        <div class="col-md-4"> 
            <div class="card">
                <div class="card-header">
                    Pedido
                </div>
                <form class="p-3" method="POST" action="realizar_pedidos_proceso.php"> <!--formulario de la compra de un pedido-->
                    <div class="mb-3">
                        <label class="form-label">Fecha Pedido </label>
                        <input type="date" class="form-control" name="txtfechapedido"  min='<?php echo date("Y-m-d"); ?>'autofocus required  readonly
                        value="<?php echo $fechaActual ;?>"> 
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Fecha Entrega </label>
                        <input type="date" class="form-control" name="txtfechaentrega"  min='<?php echo date("Y-m-d"); ?>'autofocus required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Producto </label>
                        <input type="text" class="form-control" name="txtproducto" autofocus required readonly
                        value="<?php echo $nombre_producto['Nombre_producto']; ?>">
                        <input type="hidden" name= "idproducto" value="<?php echo $codigo ;?>">
                    </div>
                    <div class="d-grid">
                        <input type="submit" class="btn btn-primary" value="Comprar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<?php include 'template/footer.php' ?> <!--  de aca llamo al footer-->