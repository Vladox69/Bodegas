<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept, Authorization');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');

    include 'conexion.php';
    $Bodega=$_POST["bodegas"];
    $Producto= $_POST["productos"];
    $Cantidad= $_POST["cantidad"];

    $sqleSelectCantidad="SELECT cantidad from detalle_bodega where idbod = (Select id from bodega where ciudad='$Bodega') and (Select id from producto where nombre='$Producto')";
    $result=$conn->query($sqleSelectCantidad);    
    
    
    
    $valor=0;

        while($fila= $result->fetch_assoc()){
            $valor = $fila['cantidad'];

        }
    
     
    $nuevaCant = $valor+$Cantidad;

    $sqlUpdate="UPDATE detalle_bodega SET cantidad = '$nuevaCant' WHERE idbod = (Select id from bodega where ciudad='$Bodega') and (Select id from producto where nombre='$Producto')";

    if($mysqli->query($sqlUpdate)=== TRUE )
    {
        header("Location:http://localhost/Bodegas/index.php?action=productos");
        //echo json_encode("Se modifico correctamente");
    }else
    {
        echo json_encode("Error".$sqlUpdate.$mysqli->error);
    }

    $mysqli->close();
?>