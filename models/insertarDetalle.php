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
/*
    $Bodega="GUAYAQUIL";
    $Producto= "TECLADO";
    $Cantidad= 5;
    */
    
    $Estado="s";

    $selectBodega="SELECT id from bodega WHERE ciudad='$Bodega'";
    $resultado = $conn->query($selectBodega);    
    if ($row = $resultado-> fetch_assoc ()) {
        $idb=$row['id'];
    }

    $selectProducto="SELECT id from producto WHERE nombre='$Producto'";
    $resultado1 = $conn->query($selectProducto);

    if ($row1 = $resultado1-> fetch_assoc ()) {
        $idp=$row1['id'];
    }


    $sqlInsert="INSERT INTO detalle_bodega(idbod, idprod,cantidad,estado) values('$idb', '$idp', '$Cantidad', '$Estado')";

    if($mysqli->query($sqlInsert)=== TRUE )
    {
        header("Location:http://localhost/Bodegas/index.php?action=sucursales");
        //echo json_encode("Se inserto correctamente");
    }else
    {
        echo json_encode("Error".$sqlInsert.$mysqli->error);
    }

    $mysqli->close();
?>