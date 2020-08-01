
if(sessionStorage.usuario == undefined){
    swal("Error", "Tienes que iniciar sesión para esta sección", "error");
    window.location=`${getAbsolutePath()}login.php`;
}