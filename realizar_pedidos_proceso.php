<?php

    if(empty($_POST["txtfechaentrega"])){
        header('Location: index.php?mensaje=falta'); // si algun dato va vacio, me emite cartel y me re direcciona al form para completar
    
        // en este if estoy validando que todos los campos que envio por el form, si alguno va vacio que se detenga
        exit();
    }

    include 'conexion.php';
    require_once ("session.php");

    $fechapedido = $_POST['txtfechapedido'];
    $fechaentrega = $_POST['txtfechaentrega'];
    $idproducto = $_POST['idproducto'];
    
        //ingresar el usuario a la DB
        $sentencia = $bd->prepare("INSERT INTO pedidos (Fecha_Pedido,Fecha_Entrega,Id_Usuario, Codigo_Producto)VALUES(?,?,?,?)") ;

        $resultado = $sentencia->execute([$fechapedido,$fechaentrega,$idUser,$idproducto]); // aca ejecutamos la sentencia y pasamos las variables

        if ($resultado === TRUE) { 
            header('Location: index.php?mensaje=pedidoregistrado');
        } else {
            header('Location: index.php?mensaje=error');
            exit();
        }

    
?>