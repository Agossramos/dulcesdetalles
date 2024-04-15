<?php
    //print_r($_POST); // si estan vacios los datos que estan viajando por post
    if(empty($_POST["registroNombre"]) || empty($_POST["registroApellido"]) || empty($_POST["registroEmail"]) || empty($_POST["registroContraseña"]) || empty($_POST["registerRepeatPassword"])){
        header('Location: index.php?mensaje=falta'); // si algun dato va vacio, me emite cartel y me re direcciona al form para completar

        // en este if estoy validando que todos los campos que envio por el form, si alguno va vacio que se detenga
        exit();
    }

    include_once 'conexion.php'; // primero llamamos a conexion 

    $nombre = $_POST["registroNombre"];    // guardamos los datos en variables
    $apellido = $_POST["registroApellido"];
    $email = $_POST["registroEmail"];
    $password = $_POST["registroContraseña"];
    $repeatpassword = $_POST["registerRepeatPassword"];
    $tipo= 'cliente';


    $sql = "SELECT * FROM usuarios"; 
		$resul = $bd -> query($sql);
		$emailValido = false;

    if ($password!=$repeatpassword){ //controlamos que la contraseña sea igual a la repetida
        header('Location: index.php?mensaje=advertencia');          
        
    }elseif ($resul){
        foreach($resul as $dato){
           
            if($email == $dato['Email']){ //controlamos que el mail ya no este registrado
                header("Location:index.php?mensaje=usuariorepetido");
            }else{        
                $emailValido = true;
            }
        }
       
             //ingresar el usuario a la DB
            $sentencia = $bd->prepare("INSERT INTO usuarios(Nombre,Apellido,Email,Contraseña,Tipo) VALUES (?,?,?,?,?)"); // aca llamamos a bd, y le decimos que prepare la consulta de sql, y insertamos en la tabla persona, el nombre, edad,signo y que values (valores) insertamos, 3 valores y se pone con ?.?,?
            $resultado = $sentencia->execute([$nombre,$apellido,$email,$password,$tipo]); // aca ejecutamos la sentencia y pasamos las variables
    
            if ($resultado === TRUE) { 
                header('Location: index.php?mensaje=usuarioregistrado');
            } else {
                header('Location: index.php?mensaje=error');
                exit();
        
            }
        }
    
    ?>