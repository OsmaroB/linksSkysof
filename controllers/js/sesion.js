function validar (){
    if(window.sessionStorage){
        const email = document.getElementById('txtEmail').value;
        var pass = document.getElementById('txtPass').value;
        var newPass = "AGUACATE";
        // var url = "../controllers/js/login.php?email="+email+"&"+pass;
        var url = "../controllers/js/login.php?tipo=sesion&email="+email;
        $.getJSON(url, function (result) {
            console.log(result)
            var codigo = null;
            $.each(result, function (i, field) {
                codigo = field.id_usuario;
                newPass = field.contraseña;
                if(newPass == pass){
                    sessionStorage.setItem("usuario",field.id_usuario);
                    window.location=`${getAbsolutePath()}crear-link.php`;
                }else{
                    alert("La contraseña es incorrecta");
                }
            });
            if (codigo == null) {
            } 
        });
    }else{
        alert("No acepta sesion");
    }
}
