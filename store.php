<?php require('config.php'); ?>

<?php

if (!empty($_POST['nombre']) && !empty($_POST['correo'])) {
    echo "Recibe el nombre: " . $_POST['nombre'] . "<br>";
    echo "Recibe el correo: " . $_POST['correo'] . "<br>";

    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    
    //--- Aplicable a Sentencias INSERT, UPDATE, DELETE ---//
    $sql = "INSERT INTO usuarios (nombre, correo)
    VALUES ('$nombre', '$correo')";
    
    // Utilizar exec() dado que no se regresan resultados
    $conn->exec($sql);
}

header('Location: index.php');

?>