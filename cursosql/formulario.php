<?php
if ($_POST){
    $nombre = $_POST["NOMBRE"];
    $apellidos = $_POST["APELLIDOS"];
    $email = $_POST["EMAIL"];

    // validacion de los datos ingresados
    if (empty($nombre) || empty($apellidos) || empty($email)) {
        echo "hay campos vacios. rellenar todos los csmpos";
        exit;
    }

    // conexion a la base de datos
    $severname = "localhost";
    $username = "root";
    $password = ""; 
    $dbname = "usuario";


    $conn = new mysqli($servername, $username, $password, $dbname);
    if($conn->connect_error){
        die("connection failed: " . $conn->connect_error);
    }

    //consulta preparada para la insercción de datos
    $sql = "INSERT INTO usuarios (nombre, apellido, email)
    VALUES ('$nombre', '$apellidos', '$email')";
  
    if($conn->query($sql) === TRUE){
        echo "New record created succesfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
   
}

?>