<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="css/inicio.css">
    <title>Document</title>
</head>
<body>
    <main>
    <div class="padre">
    <h2>LOGIN</h2>
        <p class="centrar-texto">Escriba su usuario y contraseña</p>
        <form  action="http://localhost/bodegas/models/consumoServicioLogin.php" method="request"   id="formulario" >
            <!-- Usaurio grupo-->
             <div class="formulario__grupo"  id="grupo__usuario">
                <label for="usuario" class="formulario__label" >Usuario</label>
                <div class="formulario__grupo-input">
                    <input type="text" class="formulario__input" name="nombre" id="usuario" placeholder="Dark_C16">
                </div>
                <p class="formulario__input-error" >El usuario tiene que ser de 4 a 16 dígitos y solo puede contener numeros, letras y guion bajo.</p>
            </div>

            <!--Contraseña-->
            <div class="formulario__grupo"  id="grupo__password">
                <label for="password" class="formulario__label" >Contraseña</label>
                <div class="formulario__grupo-input">
                    <input type="password" class="formulario__input" name="contra" id="password" >
                    <i class="vista fas fa-eye" id="ojo" ></i>
                </div>
                <p class="formulario__input-error" >La contraseña tiene que ser de 4 a 12 dígitos.</p>
            </div>

            <!-- mensaje -->
            <div class="formulario__mensaje"  id="formulario__mensaje">
                <p class="pError"><i class="fas fa-exclamation-triangle"></i>  <b>Error:</b> llenen el formulario </p>
            </div>

            <div class="formulario__grupo formulario__grupo-btn-enviar" >
                <input type="submit" class="formulario__btn"  value="LogIn">
            </div>
        </form>
        </div>
    </main>

    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
    <script src="js/controles.js"></script>
</body>
</html>