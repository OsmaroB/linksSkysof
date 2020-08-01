<?php
require_once("../../models/database.class.php");
if($_GET['tipo'] == "usuario"){
    $id = $_GET['id'];
    $sql = "SELECT nombre,apellido,foto,color_letra FROM usuarios WHERE id_usuario = ?";
    $params = array($id);
    echo json_encode(Database::getRows($sql, $params));

}else if($_GET['tipo'] == "detalle"){
    $id = $_GET['id'];
    $sql = "SELECT id_tipo_enlace,titulo,enlace,color_boton,color_letra FROM usuarios_enlaces WHERE id_usuario = ?";
    $params = array($id);
    echo json_encode(Database::getRows($sql, $params));
}

?>