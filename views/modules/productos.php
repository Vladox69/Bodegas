<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Basic Form - jQuery EasyUI Demo</title>
    <link rel="stylesheet" type="text/css" href="jquery-easyui-1.9.15/themes/default/easyui.css">
    <link rel="stylesheet" type="text/css" href="jquery-easyui-1.9.15/themes/icon.css">
    <link rel="stylesheet" type="text/css" href="jquery-easyui-1.9.15/demo.css">
    <script type="text/javascript" src="jquery-easyui-1.9.15/jquery.min.js"></script>
    <script type="text/javascript" src="jquery-easyui-1.9.15/jquery.easyui.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/sucursal.css">
</head>
<body>
    <main class="padre">
    <h2>PRODUCTOS</h2>
    <div style="margin:20px 0;"></div>
    <div class="easyui-panel" title="ACTUALIZAR PRODUCTOS" style="width:100%;max-width:400px;padding:30px 60px;">
        <form id="ff" method="post" action= "http://localhost/bodegas/models/editarProductos.php">

            <div style="margin-bottom:20px">
            <select class="easyui-combobox" name="bodegas" style="width:100%" data-options="label: 'Bodegas:', editable:false">
            <?php 
            $servidor = "localhost";
            $username = "root";
            $contraseña = "";
            $bd = "bodegas";
            $connect = mysqli_connect($servidor,$username,$contraseña,$bd);
            
            $dql = "SELECT ciudad FROM bodega";
            //$list = array();
            $resultado = mysqli_query($connect,$dql);while( $row = mysqli_fetch_row($resultado)){ ?>
            <option value="<?php echo $row[0] ?>"> <?php echo $row[0] ?> </option>
             <?php } ?>
             </select>
            </div>
            <div style="margin-bottom:20px">
            <select class="easyui-combobox" name="productos"  style="width:100%" data-options="label: 'Productos:', editable:false">
            
            <?php 
            $servidor = "localhost";
            $username = "root";
            $contraseña = "";
            $bd = "bodegas";
            $connect = mysqli_connect($servidor,$username,$contraseña,$bd);
            
            $dql = "SELECT nombre FROM producto";
            //$list = array();
            $resultado = mysqli_query($connect,$dql);
            while( $row = mysqli_fetch_row($resultado)){ ?>
            <option value="<?php echo $row[0] ?>"> <?php echo $row[0] ?> </option>
             <?php } ?>
                    </select>
            </div>

            <div style="margin-bottom:20px">
                <!--<input class="easyui-textbox" name="cantidad" style="width:100%" data-options="label:'Cantidad:',required:true">-->
                <label for="cantidad">Cantidad:</label><input type="text" id="cant" class="cantidad" name="cantidad">
                <p id="error" class="formulario__input-error" >Ingrese solo numeros</p>
            </div>

            <div class="botones">
                <input type="submit"  id="enviar" value="Enviar" name="enviar" >
            </div>
        </form>
        <!--<div style="text-align:center;padding:5px 0">
            <a href="javascript:void(0)" class="easyui-linkbutton" onclick="submitForm()" style="width:80px">Guardar</a>
            <a href="javascript:void(0)" class="easyui-linkbutton" onclick="clearForm()" style="width:80px">Cancelar</a>
        </div>-->
    </div>
    </main>
    <script src="js/sucursal.js" ></script>
    <script>
        function submitForm(){
            $('#ff').form('submit');
        }
        function clearForm(){
            $('#ff').form('clear');
        }
    </script>

</body>


</html>