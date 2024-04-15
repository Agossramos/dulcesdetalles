<?php include 'template/header.php' ?> <!--  de aca llamo al header, me queda separado del codigo, es la forma profesional de trabajar,varia segun programador -->

<?php
    if(!isset($_GET['codigo'])){
        header('Location: index.php?mensaje=error');
        exit();
    }

    include_once 'conexion.php';
    $codigo = $_GET['codigo'];

    $sentencia = $bd->prepare("select * from pedidos where Nro_Pedido = ?;");
    $sentencia->execute([$codigo]);
    $pedidos = $sentencia->fetch(PDO::FETCH_OBJ);

?>

<div class="container mt-5"> 
    <div class="row justify-content-center">
        <div class="col-md-4"> 
            <div class="card">
                <div class="card-header">
                    Editar datos pedido
                </div>
                <form class="p-5" method="POST" action="editar_proceso_pedido.php"> <!-- edito la fecha de entrega del pedido-->
                    <div class="mb-3">
                        <label class="form-label">Fecha de Entrega </label>
                        <input type="date" class="form-control" name="datefechaentrega"  min='<?php echo date("Y-m-d"); ?>' autofocus required
                        value="<?php echo $pedidos->Fecha_Entrega ; ?>">
                    </div>
                    <div class="d-grid">
                        <input type="hidden" name="codigo" value="<?php echo $pedidos->Nro_Pedido; ?>"> 
                        <!-- se agrega ese php en value para que ese valor viaje cuando haga submit-->
                        <input type="submit" class="btn btn-primary" value="Editar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<?php include 'template/footer.php' ?> <!--  de aca llamo al footer-->