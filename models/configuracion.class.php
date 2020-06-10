<?php
require_once("../models/database.class.php");
$titulo = filter_input(INPUT_POST, 'tituloAjax', FILTER_SANITIZE_STRING);
$tipo = filter_input(INPUT_POST, 'tipo', FILTER_SANITIZE_STRING);
$usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
$enlace = filter_input(INPUT_POST, 'enlaceAjax', FILTER_SANITIZE_STRING);
$colorTexto = filter_input(INPUT_POST, 'colorTextoAjax', FILTER_SANITIZE_STRING);
$colorBoton = filter_input(INPUT_POST, 'colorFondoAjax', FILTER_SANITIZE_STRING);
$sql = "INSERT INTO `usuarios_enlaces`(`id_usuario`, `id_tipo_enlace`, `titulo`, `enlace`, `color_boton`, `color_letra`) VALUES (?,?,?,?,?,?)";
$params = array($usuario,$tipo,$titulo,$enlace,$colorBoton,$colorTexto);
echo(Database::executeRow($sql, $params));
?>