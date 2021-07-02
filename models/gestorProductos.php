<style>
    form{
        position: absolute;
        top:50%;
	    left: 50%;
        transform: translate(-50%,-50%);
    }
    label{
        color:white;
    }
</style>
<?php

$servidor = "localhost";
$username = "root";
$contraseña = "";
$bd = "productos_uta";
$connect = mysqli_connect($servidor,$username,$contraseña,$bd);

$dql = "SELECT ID_PRO FROM productos";
//$list = array();
$resultado = mysqli_query($connect,$dql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        
    <select name="productos" >
        <?php while( $row = mysqli_fetch_row($resultado)){ ?>
            <option value="<?php echo $row[0] ?>"> <?php echo $row[0] ?> </option>
        <?php } ?>
    </select>
        <p>
            <input type="submit" name="buscar" value="Buscar" width="60px">
        </p>

        <p>
            <input type="text" name='cantidad'>
        </p>

        
        <p>
            <input type="submit" name="actualizar" value="Actualizar" >
        </p>
    </form>
</body>
</html>

<?php

$servidor = "localhost";
$username = "root";
$contraseña = "";
$bd = "productos_uta";
$connect = mysqli_connect($servidor,$username,$contraseña,$bd);

if( isset($_GET['buscar']) ){
    $id = $_GET['productos'];
    $dql = " SELECT NOM_PRO FROM productos WHERE ID_PRO='$id' ";
    //$list = array();
    $resultado = mysqli_query($connect,$dql);
    if( $fila = mysqli_fetch_row($resultado) ){
        echo "<label>Nombre: $fila[0] </label>";
    }
    //echo json_encode($list);   
}else if( isset($_GET['actualizar']) ){
    
    $id = $_GET['productos'];
    $consulta = "SELECT * FROM mastroproductos WHERE ID_PRO_P = '$id'";
    $result = mysqli_query($connect, $consulta);
    if( $row = mysqli_fetch_row($result)){
        $valor = $row[1];
    }

    $cantidad= $_GET['cantidad'];
    $newValor = $cantidad + $valor;
    $update = " UPDATE mastroproductos SET CANT_PRO='$newValor' WHERE ID_PRO_P='$id' ";
    $result = mysqli_query($connect, $update);
    if( $result == true ){
        echo json_encode("actualizado");
    }else{
        echo json_encode("no se pudo actualizar");
    }
}