<?php

if (isset($_REQUEST['nombre']) && isset($_REQUEST['contra'])){
    include 'conexion.php';

    $usuario = $_REQUEST['nombre'];
    $password = $_REQUEST['contra'];

    $query = "SELECT * FROM USUARIO WHERE nombre = '$usuario' AND contra = '$password'";
    $resultado = mysqli_query($conn, $query);
    $arreglo = array();
    while($fila = mysqli_fetch_assoc($resultado)){
        array_push($arreglo, $fila);
    }
    echo json_encode($arreglo, JSON_FORCE_OBJECT);
    mysqli_close($conn);
}

?>