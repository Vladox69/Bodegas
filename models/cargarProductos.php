<?php
    header('Content-Type: application/json');
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept, Authorization');
    header('Content-Type: application/json');
    header('Access-Control-Allow-Methods: POST, GET, OPTIONS');

    include "conexion.php";

    $sqlSelect="SELECT * FROM producto";
    $respuesta=$conn->query($sqlSelect);
    $result=array();

    if($respuesta->num_rows > 0){
        while($fila=$respuesta -> fetch_assoc()){
            array_push($result, $fila);
        }
    }else{
        $result="no hay estudiantes";    
    }

    echo json_encode($result);

?>