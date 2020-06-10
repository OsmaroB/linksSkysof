<?php
require_once("../../models/database.class.php");
if($_GET['tipo'] == 'link'){
    $id = filter_input(INPUT_POST, 'idAjax', FILTER_SANITIZE_STRING);
    $sql = "DELETE FROM `usuarios_enlaces` WHERE id_usuario_enlace = ?";
    $params = array($id);
    echo(Database::executeRow($sql, $params));
}else{

}

?>