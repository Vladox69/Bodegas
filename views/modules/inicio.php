<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Basic PasswordBox - jQuery EasyUI Demo</title>
    <link rel="stylesheet" type="text/css" href="jquery-easyui-1.9.15/themes/default/easyui.css">
    <link rel="stylesheet" type="text/css" href="jquery-easyui-1.9.15/themes/icon.css">
    <script type="text/javascript" src="jquery-easyui-1.9.15/jquery.min.js"></script>
    <script type="text/javascript" src="jquery-easyui-1.9.15/jquery.easyui.min.js"></script>
</head>
<body>
    <h2>LOGIN</h2>
    <p>Escriba su usuario y contraseña</p>
    <div class="login">
        <form action="http://localhost/bodegas/models/consumoServicioLogin.php" method = "request">
            <div style="margin:20px 0;"></div>
            <div class="easyui-panel" style="width:400px;padding:50px 60px">
                <div style="margin-bottom:20px">
                    <input name = "nombre" class="easyui-textbox" prompt="Username" iconWidth="28" style="width:100%;height:34px;padding:10px;">
                </div>
                <div style="margin-bottom:20px">
                    <input name = "contra" class="easyui-passwordbox" prompt="Password" iconWidth="28" style="width:100%;height:34px;padding:10px">
                </div>
                <button type="submit" name="login" value="login">Log In</button>
            </div>
        </form>
    </div>
    
</body>
</html>


