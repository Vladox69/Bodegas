<?php
$userForm = $_REQUEST['nombre'];
$passForm = $_REQUEST['contra'];
$data = json_decode(file_get_contents('http://localhost/bodegas/models/login.php?nombre='.$userForm."&contra=".$passForm), true );
//Controla que $data tenga datos
if(!empty($data)){
    $usuarioJSON = $data['0']['nombre'];
    $passwordJSON = $data['0']['contra'];
    $perfilJSON = $data['0']['idbod'];

    $_SESSION['nom']=$usuarioJSON;
    if ($usuarioJSON == $userForm && $passwordJSON == $passForm){
        session_start();
        $_SESSION['nom'] = $usuarioJSON;
        $_SESSION['contra'] = $passwordJSON;
        $_SESSION['idbod'] = $perfilJSON;
        header('location: ../index.php?action=productos');
    }
}else{
    header('location: ../index.php');
}

?>