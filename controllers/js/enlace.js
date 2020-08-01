
//FUNCION CUANDO CARGA LA PAGINA
var parametroGet = 'usuario';
var enlaceGlobal = "http://";
$(function() {
    if(parametroURL(parametroGet) >0){
        //Recolectamos los valores que no son arreglos
        //bg img usuario username
        var url = "../controllers/js/enlace.php?id="+parametroURL(parametroGet)+"&tipo=usuario";
        $.getJSON(url, function (result) {
            $.each(result, function (i, field) {
                var background = document.getElementById("background");
                background.style.backgroundImage = 'url("../web/img/usuarios/enlaces/fondoOsmaro.jpg")';  
                $("#imgUsuario").append(`<img src="../web/img/link/${field.foto}" class="img-renponsive img-redonda" alt="">`);
                $("#userName").append(`<h3 class="text-center" style="color:${field.color_letra}">${field.nombre} ${field.apellido}</h3>`);

            });
        });
        //EJECUTAMOS UN QUERY PARA TRAER EL DATELLE DE LOS ENLACES Y REDES SOCIALES
        var urlDetalle = "../controllers/js/enlace.php?id="+parametroURL(parametroGet)+"&tipo=detalle";
        $.getJSON(urlDetalle, function (result) {
            console.log(result)
            $('#redesSociales').append(`<div class ="up-30"></div>`);
            $.each(result, function (i, field) {
               if(field.id_tipo_enlace == 1){
                    $('#enlaces').append(`
                    <div class="up-30"></div>
                    <a href="${enlaceGlobal}${field.enlace}" class="btn btn-out-black btn-block" style="border-color: ${field.color_letra} !important; color:${field.color_letra}; background-color: ${field.color_boton} !important;">${field.titulo}</a>
                    `);
               }else{
                    if(field.id_tipo_enlace == 2){
                        Redes(field.enlace,"facebook.png");
                    }
                    if(field.id_tipo_enlace == 3){
                        Redes(field.enlace,"instagram.png");
                    }
                    if(field.id_tipo_enlace == 4){
                        Redes(field.enlace, "youtube.png");
                    }
                    if(field.id_tipo_enlace == 5){
                        Redes(field.enlace, "linkedin.png");
                    }
                    if(field.id_tipo_enlace == 6){
                        Redes(field.enlace, "twitter.png");
                    }
                    if(field.id_tipo_enlace == 7){
                        Redes(field.enlace,"tik-tok.png");
                    }
               }
            });
        });
        
    }else{
        
    }
  });

  function Redes(enlace,foto){
    $('#redesSociales').append(`
    <a href="${enlaceGlobal}${enlace}" target="_blank" class="btn btn-icons img-icono" style="background-image: url('../web/img/iconos/${foto}');"></a>`
);
  }