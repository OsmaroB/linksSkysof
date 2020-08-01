<?php
require_once("../../models/database.class.php");
if($_GET['tipo'] == 'sesion'){
    $usuario = $_GET['email'];
    $sql = "SELECT `id_usuario`, contraseña FROM `usuarios` WHERE `correo` =?";
    $params = array($usuario);
    $constante = Database::getRows($sql, $params);
    echo json_encode($constante);

}
?>