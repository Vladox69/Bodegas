<?php
$userForm = $_REQUEST['nombre'];
$passForm = $_REQUEST['contra'];
$data = json_decode(file_get_contents('http://localhost/bodegas/models/login.php?nombre='.$userForm."&contra=".$passForm), true );
//Controla que $data tenga datos
if(!empty($data)){
    $usuarioJSON = $data['0']['nombre'];
    $passwordJSON = $data['0']['contra'];
    if ($usuarioJSON == $userForm && $passwordJSON == $passForm){
        header('location: ../index.php?action=sucursales');
    }
}else{
    header('location: ../index.php');
}

?>