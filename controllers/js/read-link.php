<?php
require_once("../../models/database.class.php");
$id = $_GET['id'];
$sql = "SELECT id_usuario_enlace, titulo,enlace, id_tipo_enlace FROM `usuarios_enlaces` WHERE id_usuario = ?";
$params = array($id);
echo json_encode(Database::getRows($sql, $params));
?>