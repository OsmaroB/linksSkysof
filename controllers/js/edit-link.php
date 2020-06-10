<?php
require_once("../../models/database.class.php");
if($_GET['tipo'] == 'cargar'){
    $id = $_GET['id'];
    $sql = "SELECT id_usuario_enlace, titulo,enlace, id_tipo_enlace,color_boton,color_letra FROM `usuarios_enlaces` WHERE id_usuario_enlace = ?";
    $params = array($id);
    echo json_encode(Database::getRows($sql, $params));


}else if($_GET['tipo'] == 'editar'){
    $titulo = filter_input(INPUT_POST, 'tituloAjax', FILTER_SANITIZE_STRING);
    $usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
    $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);
    $tipoEnlace = filter_input(INPUT_POST, 'tipoEnlace', FILTER_SANITIZE_STRING);
    $enlace = filter_input(INPUT_POST, 'enlaceAjax', FILTER_SANITIZE_STRING);
    $colorTexto = filter_input(INPUT_POST, 'colorTextoAjax', FILTER_SANITIZE_STRING);
    $colorBoton = filter_input(INPUT_POST, 'colorFondoAjax', FILTER_SANITIZE_STRING);
    $sql = "UPDATE `usuarios_enlaces` SET `titulo`=?,`enlace`=?,`color_boton`=?,`color_letra`=? WHERE id_usuario_enlace = ?";
    $params = array($titulo,$enlace,$colorBoton,$colorTexto,$id);
    echo(Database::executeRow($sql, $params));


}else if($_GET['tipo'] == 'cargarTipoEnlace'){
    $sql = "SELECT  `nombre`,`id_tipo_enlace` FROM `tipos_enlace` where id_tipo_enlace > 1";
    $params = array(null);
    echo json_encode(Database::getRows($sql, $params));
}
else if($_GET['tipo'] == 'createRed'){
    $red = filter_input(INPUT_POST, 'red', FILTER_SANITIZE_STRING);
    $titulo = filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_STRING);
    $enlace = filter_input(INPUT_POST, 'enlace', FILTER_SANITIZE_STRING);
    $tono = filter_input(INPUT_POST, 'tono', FILTER_SANITIZE_STRING);
    $usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
    $colorFondo = filter_input(INPUT_POST, 'colorFondo', FILTER_SANITIZE_STRING);
    $sql = "INSERT INTO `usuarios_enlaces`(`titulo`,`id_usuario`, `id_tipo_enlace`, `enlace`, `color_boton`, `color_letra`) VALUES (?,?,?,?,?,?)";
    $params = array($titulo,$usuario,$red,$enlace,$colorFondo,$tono);
    echo(Database::executeRow($sql, $params));
}
else if ($_GET['tipo'] == 'editRed'){
    $red = filter_input(INPUT_POST, 'red', FILTER_SANITIZE_STRING);
    $titulo = filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_STRING);
    $enlace = filter_input(INPUT_POST, 'enlace', FILTER_SANITIZE_STRING);
    $tono = filter_input(INPUT_POST, 'tono', FILTER_SANITIZE_STRING);
    $colorFondo = filter_input(INPUT_POST, 'colorFondo', FILTER_SANITIZE_STRING);
    $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);
    $sql = "UPDATE `usuarios_enlaces`SET `id_tipo_enlace`=?,`titulo`=?,`enlace`=?,`color_boton`=?,`color_letra`=? WHERE id_usuario_enlace = ? ";
    $params = array($red,$titulo,$enlace,$colorFondo,$tono,$id);
    echo(Database::executeRow($sql, $params));
}else if($_GET['tipo'] == 'usuario'){
    $usuario = $_GET['usuario'];
    $sql = "SELECT `id_usuario`, `nombre`, `apellido`, `alias`, `correo`, `foto`, `color_fondo`, `color_letra`, `tipo_usuario` FROM `usuarios` WHERE `id_usuario` =?";
    $params = array($usuario);
    echo json_encode(Database::getRows($sql, $params));
}else if($_GET['tipo'] == 'sesion'){
    echo json_encode(array ('id'=>$_SESSION['id']));


}else if($_GET['tipo'] == 'editarUser'){
    $alias = filter_input(INPUT_POST, 'alias', FILTER_SANITIZE_STRING);
    $colorTexto = filter_input(INPUT_POST, 'colorTexto', FILTER_SANITIZE_STRING);
    $colorFondo = filter_input(INPUT_POST, 'colorFondo', FILTER_SANITIZE_STRING);
    $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);
    $foto = filter_input(INPUT_POST, 'foto', FILTER_SANITIZE_STRING);
    $sql = "UPDATE `usuarios` SET `alias`=?, `foto`=?,`color_fondo`=?,`color_letra`=? WHERE `id_usuario` = ?";
    $params = array($alias,$foto,$colorFondo,$colorTexto,$id);
    echo(Database::executeRow($sql, $params));



}else if($_GET['tipo'] == 'subirImg'){
    $file = $_FILES["archivo"];
    $nombre = $file["name"];
    $tipo = $file["type"];
    $ruta_provicional = $file["tmp_name"];
    $size = $file["size"];
    $dimensiones = getimagesize($ruta_provicional);
    $width = $dimensiones[0];
    $height = $dimensiones[1];
    $carpeta = "../../web/img/link/";
    if($tipo != "image/jpg" && $tipo != "image/jepg" && $tipo != "image/png" && $tipo != "image/gif"){
        echo("ERROR NO ES UN FORMATO CORRECTO DE IMAGEN");
        
    }else{
        $src = $carpeta.$nombre;
        move_uploaded_file($ruta_provicional, $src);
        echo($nombre);
    }
}
?>