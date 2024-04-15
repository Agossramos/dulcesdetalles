<?php include 'template/header.php' ?> <!--  de aca llamo al header -->

<?php
    if(!isset($_GET['codigo'])){
        header('Location: index.php?mensaje=error');
        exit();
    }

    include_once 'conexion.php';
    $codigo = $_GET['codigo'];

    $sentencia = $bd->prepare("select * from usuarios where ID_Usuario = ?;");
    $sentencia->execute([$codigo]);
    $usuarios = $sentencia->fetch(PDO::FETCH_OBJ);

?>

<div class="container mt-5"> 
    <div class="row justify-content-center">
        <div class="col-md-4"> 
            <div class="card">
                <div class="card-header"> <!-- creo un formulario para cambiar los datos del usuario-->
                    Editar datos usuario
                </div>
                <form class="p-5" method="POST" action="editar_proceso_usuario.php">
                    <div class="mb-3">
                        <label class="form-label">Nombre </label>
                        <input type="text" class="form-control" name="txtNombre" required 
                        value="<?php echo $usuarios->Nombre ; ?>"> <!-- para completar datos de BD en input, 
                        solo se completa el value con esa linea de php -->
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Apellido </label>
                        <input type="text" class="form-control" name="txtApellido" autofocus required
                        value="<?php echo $usuarios->Apellido ; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email </label>
                        <input type="email" class="form-control" name="txtEmail" autofocus required
                        value="<?php echo $usuarios->Email ; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tipo </label>
                        <input type="text" class="form-control" name="txtTipo" autofocus required
                        value="<?php echo $usuarios->Tipo ; ?>">
                    </div>
                    <div class="d-grid">
                        <input type="hidden" name="codigo" value="<?php echo $usuarios->ID_Usuario; ?>"> 
                        <!-- se agrega ese php en value para que ese valor viaje cuando haga submit-->
                        <input type="submit" class="btn btn-primary" value="Editar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<?php include 'template/footer.php' ?> <!--  de aca llamo al footer-->