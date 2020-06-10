<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creación de link</title>
    <link rel="stylesheet" href="../web/css/bootstrap.min.css">
    <link rel="stylesheet" href="../web/css/style.css">
    <link rel="stylesheet" href="../web/css/link.css">
    <link rel="stylesheet" href="../web/css/sweetalert.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <?php $_SESSION['id'] = 1; session_start();?>

</head>
<body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Links Skysof</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="crear-link.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="apariencia.php">Link</a>
            </li>
            
            </ul>
            
        </div>
        </nav>
    </header>
    
    <div class="container">
        <div class="container">
            
            <div class="row">
                <div class="col-12">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="crear-link.php">Agregar link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="apariencia.php">Apariencia</a>
                    </li>
                </ul>
                </div>
                <div class="col-12">
                    <div class="up-50"></div>
                    <h1 class="text-center">Configurar apariencia</h1>
                    <div class="up-30"></div>
                </div>
                <div class="col-12 ">
                    <div class="container miratulink rounded-lg">
                    <h4 class="text-center">Mira tu link aqui: </h4>
                    <p class="text-center" id="user"></p>
                <div class="up-50"></div>
                    </div>
                </div>
                
            </div>
            
            <div class="row">
            <div class="row">
            
                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="up-50"></div>
                    <div class="avatar-upload">
                        <div class="avatar-edit">
                        <form id="formulario" action="">
                            <input type="file" id="imageUpload" name="archivo" accept=".png, .jpg, .jpeg" />
                            <label title="Seleccionar imagen"id="imageUpload1" for="imageUpload"></label>
                            </form>
                        </div>
                        <div class='avatar-preview' id="imagenPerfil">
                        </div>    
                    </div>    
                </div>  
                
                <div class="col-12">
                    <div class="form-group">
                    <label for="txtLinkSocial" class="col-form-label">Alias</label>
                    <input type="text" class="form-control" id="txtAlias">
                </div>
                </div>
                <div class="col-12">
                    <div class="up-50"></div>
                    <div class="form-group">
                        <label for="txtBackgroundText" class="col-fomr-label">Color de texto de usuario</label>
                        <input type="color" class="form-control" id="txtBackgroundText">
                        <p class="text-center">
                        <button class="btn btn-sm btn-primary" onclick="DarColor('primary');"></button>
                        <button class="btn btn-sm btn-secondary" onclick="DarColor('secondary');"></button>
                        <button class="btn btn-sm btn-success" onclick="DarColor('success');"></button>
                        <button class="btn btn-sm btn-danger" onclick="DarColor('danger');"></button>
                        <button class="btn btn-sm btn-warning" onclick="DarColor('warning');"></button>
                        <button class="btn btn-sm btn-info" onclick="DarColor('info');"></button>
                        <button class="btn btn-sm btn-light" onclick="DarColor('light');"></button>
                        <button class="btn btn-sm btn-dark" onclick="DarColor('dark');"></button>
                        </p>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label for="txtBackgroundText" class="col-fomr-label">Color fondo</label>
                        <input type="color" class="form-control" id="txtBackground">
                        <p class="text-center">
                        <button class="btn btn-sm btn-primary" onclick="DarColorFondo('primary');"></button>
                        <button class="btn btn-sm btn-secondary" onclick="DarColorFondo('secondary');"></button>
                        <button class="btn btn-sm btn-success" onclick="DarColorFondo('success');"></button>
                        <button class="btn btn-sm btn-danger" onclick="DarColorFondo('danger');"></button>
                        <button class="btn btn-sm btn-warning" onclick="DarColorFondo('warning');"></button>
                        <button class="btn btn-sm btn-info" onclick="DarColorFondo('info');"></button>
                        <button class="btn btn-sm btn-light" onclick="DarColorFondo('light');"></button>
                        <button class="btn btn-sm btn-dark" onclick="DarColorFondo('dark');"></button>
                        </p>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="row">
            <div class="container">
                <div class="container">
                    <div class="col-12">
                        <p class="text-center">
                            <div class="up-50"></div>
                            <button type="button" class="btn btn-primary btn-lg btn-block" onclick="subirImg();">Guardar cambios realizados</button>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div id="respuesta"></div>
        </div>
    </div>

    <footer>
        <script src="../web/js/jquery.min.js"></script>
        <script src="../web/js/bootstrap.min.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="../controllers/js/crear-link.js"></script>
    </footer>
</body>
</html>