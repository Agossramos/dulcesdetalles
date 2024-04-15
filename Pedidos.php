<?php include 'template/header.php' ?> <!--  de aca llamo al header-->
<?php
    include_once "conexion.php"; // Primero vamos a llamar a nuestro archivo de conexion
    $sentencia = $bd -> query("select * from pedidos");  // aca estamos llamando a ese objeto bd , y vamos a ejecutar la consulta
    $pedidos = $sentencia->fetchAll(PDO::FETCH_OBJ); // creo una variable, y dentro de persona vamos a guardar todos los valores de la base de datos, llamo a sentencia, y le vamos a dar un formato, y a pdo, le vamos a dar un formato adecuado para que pueda leerse(hay varias formas)
    
?>
<div class="container mt-5">
    <div class="row justify-content-center">
            <div class="card">   <!-- este div es el de la tabla y listado -->
                <div class="card-header d-flex justify-content-between align-items-center">
                    Lista de Pedidos

                </div>
                <div class="p-4">
                    <table class="table align-middle"> <!--columnas de la tabla-->
                        <thead>
                            <tr>
                                <th scope="col">Nro Pedido</th>
                                <th scope="col">Fecha Pedido</th>
                                <th scope="col">Fecha Entrega</th>
                                <th scope="col">Cliente</th>
                                <th scope="col">Producto</th>
                                <th scope="col" colspan="2">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <?php 
                                foreach($pedidos as $dato){  // esta llave se abre aca para poder cargar la tabla
                            ?>

                            <tr>
                                <td scope="row"><?php echo $dato->Nro_Pedido; ?></td><!--voy imprimiendo los datos como figuran en BD-->
                                <td><?php echo $dato->Fecha_Pedido; ?></td>
                                <td><?php echo $dato->Fecha_Entrega; ?></td>
                                <td><?php echo $dato->ID_Usuario; ?></td>
                                <td><?php echo $dato->Codigo_Producto; ?></td>
                                <td><a class="text-success" href="editar_pedido.php?codigo=<?php echo $dato->Nro_Pedido; ?>"><i class="fas fa-pen-square"></i>Editar</a></td>
                                <td><a onclick="return confirm('Estas seguro de eliminar?');" class="text-danger" href="eliminar_pedido.php?codigo=<?php echo $dato->Nro_Pedido; ?>"><i class="fas fa-trash-alt"></i>Eliminar</a></td>
                            </tr>

                            <?php 
                                } // y es el cierre de la llave del foreach
                            ?>

                        </tbody>
                    </table>
                    
                </div>
            </div>
            </div>
            </div>


        </div>

        <?php include 'template/footer.php' ?> <!--  de aca llamo al footer-->