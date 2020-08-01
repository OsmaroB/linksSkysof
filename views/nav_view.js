$("#nav-bar").append(`
    <a class="navbar-brand" href="#">Links Skysof</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="crear-link.php">Home<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="apariencia.php?pagina=1">Link</a>
        </li>
        <li class="nav-item">
            <button  class=" btn btn-primary" onclick="logout(${sessionStorage.getItem('usuario')})">Logout</button>
        </li>
        </ul>
    </div>`
);

function logout(){
    sessionStorage.removeItem('usuario');
    window.location=`${getAbsolutePath()}login.php`;
}
