<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login de Link App</title>
    <link rel="stylesheet" href="../web/css/bootstrap.min.css">
    <link rel="stylesheet" href="../web/css/style.css">
    <link rel="stylesheet" href="../web/css/sweetalert.css">
</head>
<body class="bg-login">
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
    <div class="up-100"></div>
    <div class="container">
        <div class="col-sm-12 col-md-8 offset-md-2 col-lg-4 offset-lg-4">
            <div class="up-30"></div>
            <div class="container shadow-lg p-3 mb-5 bg-white rounded">
                <h1 class="text-center">
                    Login
                </h1>
                
                <div class="up-30"></div>
            <div class="col-sm-12">
                <div class="form-group row">
                    <label for="txtEmail" class="col-sm-2 col-md-12 col-form-label ">Email</label>
                    <div class="col-sm-2 col-md-12">
                    <input type="email"  class="form-control" id="txtEmail"  autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="txtPass" class="col-sm-2 col-md-12 col-form-label">Password</label>
                    <div class="col-sm-10 col-md-12">
                    <input type="password" class="form-control" id="txtPass">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="up-30"></div>
                <p class="text-center">
                <input type="button" class="btn btn-primary" onclick="validar()" value="Ingresar">
                </p>
            </div>
            </div>
        </div>
    </div>
</body>
<footer>
        <p class="text-white text-center ">
        Copyright © Osmaro Alfonso Bonilla  Mestizo 2020
        </p>
        <script src="../web/js/jquery.min.js"></script>
        <script src="../web/js/bootstrap.min.js"></script>
        <script src="../controllers/js/sesion.js"></script>
        <script src="../controllers/global.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</footer>
</html>