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

</head>
<body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" id="nav-bar">
        
    </nav>
    </header>
    
    <div class="container">
        <div class="row">
            <div class="col-12">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="crear-link.php">Agregar link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="apariencia.php?pagina=1">Apariencia</a>
                </li>
            </ul>
            </div>
            <div class="col-12">
                <div class="up-50"></div>
                <h1 class="text-center">Ingresa un nuevo link</h1>
                <div class="up-30"></div>
            </div>
            <div class="col-12 ">
                <div class="container miratulink rounded-lg">
                <h4 class="text-center">Mira tu link aqui: </h4>
                <p class="text-center" id ="user"></p>
                </div>
                
            </div>
            
        </div>
        <div class="row">
            <div class="col-12">
                <div class="up-50"></div>
                <p class="text-center">
                <button class="btn btn-success btn-lg"  onclick="sweetDelete(1);">Agregar enlace</button>
                </p>
                <div class="up-50"></div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row" id="liks">
        </div>
    </div>
    
    


    <footer>
        <script src="../web/js/jquery.min.js"></script>
        <script src="../web/js/bootstrap.min.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="../controllers/js/crear-link.js"></script>
        <script src="../controllers/global.js"></script>
        <script src="../views/nav_view.js"></script>
        <script src="../controllers/js/autenticacion.js"></script>
    </footer>
</body>
</html>