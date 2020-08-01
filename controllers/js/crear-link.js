var idLink = null;
var imgCargada;
var idUsuario = sessionStorage.getItem('usuario');
function cargarSesion(){
}
function sweetDelete(id){
    swal("¿El enlace es una red social?", {
        closeOnClickOutside: false,
        buttons: {
          cancel: "NO",
          yes:{
            text: "Si",
            value: "yes",
          },
        },
        
      })
      .then((value) => {
        switch (value) {
       
          
          case "yes":
            ModalSocial();
            break;
       
          default:
            ModalEnlace();

        }
      });
}

function ModalEnlace(){
    $("#modalCreateLink").modal();
}

function ModalSocial(){
    $("#modalSocial").modal();
}
   
function DarColor(color){
    switch (color) {
        case "primary":
            document.getElementById("txtBackgroundText").value = "#007bff";
            break;
        case "secondary":
            document.getElementById("txtBackgroundText").value = "#6c757d";
            break;
        case "success":
            document.getElementById("txtBackgroundText").value = "#28a745";
            break;
        case "danger":
            document.getElementById("txtBackgroundText").value = "#dc3545";
            break;
        case "warning":
            document.getElementById("txtBackgroundText").value = "#ffc107";
            break;
        case "info":
            document.getElementById("txtBackgroundText").value = "#17a2b8";
            break;
        case "light":
            document.getElementById("txtBackgroundText").value = "#f8f9fa";
            break;
        default:
            //DARK
            document.getElementById("txtBackgroundText").value = "#343a40";
            break;
    }
}

function DarColorEdit(color){
    switch (color) {
        case "primary":
            document.getElementById("txtBackgroundTextEdit").value = "#007bff";
            break;
        case "secondary":
            document.getElementById("txtBackgroundTextEdit").value = "#6c757d";
            break;
        case "success":
            document.getElementById("txtBackgroundTextEdit").value = "#28a745";
            break;
        case "danger":
            document.getElementById("txtBackgroundTextEdit").value = "#dc3545";
            break;
        case "warning":
            document.getElementById("txtBackgroundTextEdit").value = "#ffc107";
            break;
        case "info":
            document.getElementById("txtBackgroundTextEdit").value = "#17a2b8";
            break;
        case "light":
            document.getElementById("txtBackgroundTextEdit").value = "#f8f9fa";
            break;
        default:
            //DARK
            document.getElementById("txtBackgroundTextEdit").value = "#343a40";
            break;
    }
}

function DarColorFondoEdit(color){
    switch (color) {
        case "primary":
            document.getElementById("txtBackgroundEdit").value = "#007bff";
            break;
        case "secondary":
            document.getElementById("txtBackgroundEdit").value = "#6c757d";
            break;
        case "success":
            document.getElementById("txtBackgroundEdit").value = "#28a745";
            break;
        case "danger":
            document.getElementById("txtBackgroundEdit").value = "#dc3545";
            break;
        case "warning":
            document.getElementById("txtBackgroundEdit").value = "#ffc107";
            break;
        case "info":
            document.getElementById("txtBackgroundEdit").value = "#17a2b8";
            break;
        case "light":
            document.getElementById("txtBackgroundEdit").value = "#f8f9fa";
            break;
        default:
            //DARK
            document.getElementById("txtBackgroundEdit").value = "#343a40";
            break;
    }
}

function DarColorFondo(color){
    switch (color) {
        case "primary":
            document.getElementById("txtBackground").value = "#007bff";
            break;
        case "secondary":
            document.getElementById("txtBackground").value = "#6c757d";
            break;
        case "success":
            document.getElementById("txtBackground").value = "#28a745";
            break;
        case "danger":
            document.getElementById("txtBackground").value = "#dc3545";
            break;
        case "warning":
            document.getElementById("txtBackground").value = "#ffc107";
            break;
        case "info":
            document.getElementById("txtBackground").value = "#17a2b8";
            break;
        case "light":
            document.getElementById("txtBackground").value = "#f8f9fa";
            break;
        default:
            //DARK
            document.getElementById("txtBackground").value = "#343a40";
            break;
    }
}

function ColorRed(tipo){
    if(tipo == 0){
        document.getElementById("txtColorRed").value = "Oscuro";
    }else{
        document.getElementById("txtColorRed").value = "Claro";
    }
}

function ColorRedEdit(tipo){
    if(tipo == 0){
        document.getElementById("txtColorRedLink").value = "Oscuro";
    }else{
        document.getElementById("txtColorRedLink").value = "Claro";
    }
}

//FUNCION CUANDO CARGA LA PAGINA
$(function() {
    //El link de carga tiene que ser 
    //apariencia.php?pagina=1&id=usuario
    if(parametroURL('pagina')==1){
        cargarSesion();
        loadUser();
        bs_input_file();
        loadImgUser();
    }else{
        loadUser();
        loadAll();
        cargarTipoEnlace();
    }
  });

//MOSTRAT DATOS

function loadAll(){
    $(".contenedor").remove();
    var id = idUsuario;
    var url = "../controllers/js/read-link.php?id="+id+"";
    $.getJSON(url, function (result) {
        console.log(result);
        var codigo = null;
        $.each(result, function (i, field) {
            codigo = field.id_usuario_enlace;
            var tituto = field.titulo;
            var enlace = field.enlace;
            var tipo = field.id_tipo_enlace;
            $("#liks").append(''
            +'<div class="col-12 col-lg-4 contenedor">'
                +'<div class="card shadow-lg mb-3   bg-white rounded rounded-sm"style="max-width: 40rem;">'
                    +'<div class="card-body">'
                        +'<div class="row">'
                                +'<div class="container">'
                                    +'<div class="col-12">'
                                    +'<h4 class="bold">'+tituto+'</h4>'
                                    +'</div>'
                                +'</div>'
                        +'</div>'
                        +'<div class="row">'
                            +'<div class="container">'
                                +'<div class="col-12"> ' 
                                +'<p class="text-dark">'+enlace+'</p>'
                            +'</div>'
                        +'</div>'
                        +'</div>'
                        +'<div class="">'
                        +'<div class="">'
                            +'<button type="button" class="btn btn-info btn-sm m-1" onclick="cargarLink('+codigo+','+tipo+')">Editar</button>'
                            +'<button type="button" class="btn btn-info btn-sm m-1" onclick="copyLink('+codigo+','+tipo+')">Copiar</button>'
                            +'<button type="button" class="btn btn-info btn-sm m-1" onclick="deleteLink('+codigo+')">Eliminar</button>'
                        +'</div>'
                        +'</div>'
                    +'</div>'
                +'</div>'
            +'</div>'
            +'');
        });
        if (codigo == null) {
            $("#liks").append(''
                + '<div class=""><div class="col-12"><h5 class="text-center">No hay ningun enlace</h5></div></div>'
                + '');
        } 
    });
}

function loadUser(){
    $(".likusuario").remove();
    var url = "../controllers/js/edit-link.php?tipo=usuario&usuario="+idUsuario+"";
    $.getJSON(url, function (result) {
        
        var codigo = null;
        $.each(result, function (i, field) {
            codigo = field.id_usuario;
            var alias = field.alias;
            $("#user").append(''
            +'<a  class="text-center likusuario"  href="#">www.skysofdigital.com/link/'+alias.toLowerCase()+'</a>'
            +'');
        });
        if (codigo == null) {
            $("#user").append(''
                + '<div class=""><div class="col-12"><h5 class="text-center">No tiene un usuario asignado Ingrese Sesion nuevamente</h5></div></div>'
                + '');
        } 
    });
}

function loadImgUser(){
    var url = "../controllers/js/edit-link.php?tipo=usuario&usuario="+idUsuario+"";
    $.getJSON(url, function (result) {
        console.log(result);
        var foto = null;
        $.each(result, function (i, field) {
            var alias = field.alias;
            $("#imagenPerfil").append(''
            + '<div id="imagePreview" class="likusuario" style="background-image:url(../web/img/link/'+field.foto+');"></div>'
            +'');
            document.getElementById("txtAlias").value = field.alias;
            document.getElementById("txtBackgroundText").value = field.color_letra;
            document.getElementById("txtBackground").value = field.color_fondo;
            imgCargada = field.foto;
        });
        if (foto == 'default.jpg') {
            $("#imagenPerfil").append(''
                + '<div id="imagePreview" class="likusuario" style="background-image:url(../web/img/link/default.jpg);"></div>'
                + '');
        } 
    });
}

//INSERTAR DATOS
function InsertLink(){
    var titulo = document.getElementById("txtTittle").value;
    var enlace = document.getElementById("txtLink").value;
    let colorTexto = document.getElementById("txtBackgroundText").value;
    let colorFondo = document.getElementById("txtBackground").value;
    if(document.getElementById("transparente").checked){
        colorFondo = "transparent";
    }
    $.ajax({ 
        type: 'POST', 
        url: '../models/configuracion.class.php', 
        data: { 
            tituloAjax : titulo,
            enlaceAjax : enlace,
            colorTextoAjax : colorTexto,
            colorFondoAjax : colorFondo,
            tipo : 1,
            usuario : idUsuario
        }, 
        dataType: 'json',
        success: function () { 
           $('#modalCreateLink').modal('hide');
           swal("Excelente", "Tu link fue creado con exito", "success");
           loadAll();
        },
        error: function(){
            alert("RAYOS");
        }
    });
}

function deleteLink(id){
    swal("¿Seguro quieres eliminar este enlace?", {
        closeOnClickOutside: false,
        buttons: {
          cancel: "NO",
          yes:{
            text: "Si",
            value: "yes",
          },
        },
        
      })
      .then((value) => {
        switch (value) {
          case "yes":
            //ACA SI LO ELIMINAMOS
            $.ajax({ 
                type: 'POST', 
                url: '../controllers/js/delete-link.php?tipo=link', 
                data: { 
                    idAjax : id,
                }, 
                dataType: 'json',
                success: function () { 
                    swal("Excelente", "Tu link fue eliminado", "success");
                   loadAll();
                },
                error: function(){
                    swal("Error", "Tu link no fue eliminado contacta con el encargado", "error");
                }
            });
            break;
          default:
            //ACA NO LO ELIMINAMOS
        }
      });
}

function cargarLink(id,tipo){
    if(tipo <=1){
        $("#modalEditLink").modal();
        var url = "../controllers/js/edit-link.php?id="+id+"&tipo=cargar";
        $.getJSON(url, function (result) {
            var codigo = null;
            var enlace = null;
            var titulo = null;
            let colorLetra = null;
            let colorBoton = null;
            $.each(result, function (i, field) {
                codigo = field.id_usuario_enlace;
                document.getElementById("txtTittleEdit").value = field.titulo;
                document.getElementById("txtLinkEdit").value = field.enlace;
                document.getElementById("txtBackgroundTextEdit").value = field.color_letra;
                document.getElementById("txtBackgroundEdit").value = field.color_boton;
                idLink = field.id_usuario_enlace;
            });
        });
    }else{
        $("#modalSocialEdit").modal();
        var url = "../controllers/js/edit-link.php?id="+id+"&tipo=cargar";
        cargarTipoEnlaceEdit(id);
        $.getJSON(url, function (result) {
            var codigo = null;
            $.each(result, function (i, field) {
                document.getElementById("cmbRedSocialEdit").value = field.id_tipo_enlace;
                document.getElementById("txtLinkSocialEdit").value = field.enlace;
                if(field.color_boton == "#f8f9fa"){
                    document.getElementById("txtColorRedLink").value = "Oscuro";
                }else{
                    document.getElementById("txtColorRedLink").value = "Claro";
                }
                idLink = field.id_usuario_enlace;
            });
        });
    }
}

function UpdateLink(){
    var titulo = document.getElementById("txtTittleEdit").value;
    var enlace = document.getElementById("txtLinkEdit").value;
    let colorTexto = document.getElementById("txtBackgroundTextEdit").value;
    let colorFondo = document.getElementById("txtBackgroundEdit").value;
    if(document.getElementById("transparenteEdit").checked){
        colorFondo = "transparent";
    }
    $.ajax({ 
        type: 'POST', 
        url: '../controllers/js/edit-link.php?tipo=editar', 
        data: {
            usuario : 1, 
            tipoEnlace : 1,
            tituloAjax : titulo,
            enlaceAjax : enlace,
            colorTextoAjax : colorTexto,
            colorFondoAjax : colorFondo,
            id : idLink
        }, 
        dataType: 'json',
        success: function () { 
           $('#modalEditLink').modal('hide');
           swal("Excelente", "Tu link fue modificado con exito", "success");
           loadAll();
        },
        error: function(){
            alert("RAYOS");
        }
    });
}
function copyLink(id,tipo){
        var url = "../controllers/js/edit-link.php?id="+id+"&tipo=cargar";
        $.getJSON(url, function (result) {
            var codigo = null;
            var enlace = null;
            var titulo = null;
            let colorLetra = null;
            let colorBoton = null;
            $.each(result, function (i, field) {
                codigo = field.id_usuario_enlace;
                titulo = field.titulo;
                enlace = field.enlace;
                colorLetra = field.color_letra;
                colorBoton = field.color_boton;
                idLink = field.id_usuario_enlace;
            });
            $.ajax({ 
                type: 'POST', 
                url: '../models/configuracion.class.php', 
                data: { 
                    tituloAjax : titulo,
                    enlaceAjax : enlace,
                    colorTextoAjax : colorLetra,
                    colorFondoAjax : colorBoton ,
                    tipo : tipo,
                    usuario : idUsuario
                }, 
                dataType: 'json',
                success: function () { 
                   $('#modalCreateLink').modal('hide');
                   swal("Excelente", "Link copiado con exito ", "success");
                   loadAll();
                },
                error: function(){
                    alert("RAYOS");
                }
            });
        });
    
}

function insertRed(){
    var red = document.getElementById("cmbRedSocial").value;
    var enlace = document.getElementById("txtLinkSocial").value;
    var tono = document.getElementById("txtColorRed").value;
    var color;
    var combo = document.getElementById("cmbRedSocial");
    var selected = combo.options[combo.selectedIndex].text;
    var colorFondo;
    if(tono == "Claro"){
        color = "#f8f9fa";
        colorFondo = "#343a40";
    }else{
        color = "#343a40";
        colorFondo = "#f8f9fa";
    }
    $.ajax({ 
        type: 'POST', 
        url: '../controllers/js/edit-link.php?tipo=createRed', 
        data: {
            red : red, 
            enlace : enlace,
            tono: color,
            usuario : idUsuario,
            colorFondo : colorFondo,
            titulo : selected
        }, 
        dataType: 'json',
        success: function () { 
           $('#modalSocial').modal('hide');
           swal("Excelente", "Tu red social fue agregada con exito", "success");
           loadAll();
        },
        error: function(){
            alert("RAYOS");
        }
    });
}


function cargarTipoEnlace(){
    var url = "../controllers/js/edit-link.php?tipo=cargarTipoEnlace";
    $.getJSON(url, function (result) {
        $.each(result, function (i, field) {
            $("#cmbRedSocial").append(''
            +'<option value="'+field.id_tipo_enlace+'">'+field.nombre+'</option>'
            +'');
        });
    });
}

function cargarTipoEnlaceEdit(id){
    var url = "../controllers/js/edit-link.php?tipo=cargarTipoEnlace";
    $.getJSON(url, function (result) {
        $.each(result, function (i, field) {
            $("#cmbRedSocialEdit").append(''
            +'<option value="'+field.id_tipo_enlace+'">'+field.nombre+'</option>'
            +'');
        });
    });
}

function editRed(){
    var red = document.getElementById("cmbRedSocialEdit").value;
    var enlace = document.getElementById("txtLinkSocialEdit").value;
    var tono = document.getElementById("txtColorRedLink").value;
    var color;
    var combo = document.getElementById("cmbRedSocialEdit");
    var selected = combo.options[combo.selectedIndex].text;
    var colorFondo;
    if(tono == "Claro"){
        color = "#f8f9fa";
        colorFondo = "#343a40";
    }else{
        color = "#343a40";
        colorFondo = "#f8f9fa";
    }
    $.ajax({ 
        type: 'POST', 
        url: '../controllers/js/edit-link.php?tipo=editRed', 
        data: {
            red : red, 
            enlace : enlace,
            tono: color,
            colorFondo : colorFondo,
            titulo : selected,
            id : idLink
        }, 
        dataType: 'json',
        success: function () { 
           $('#modalSocial').modal('hide');
           swal("Excelente", "Tu red social fue editada con exito", "success");
           loadAll();
        },
        error: function(){
            alert("RAYOS");
        }
    });
}




function readURL1(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#imagePreview').css('background-image', 'url('+e.target.result +')');
            $('#imagePreview').hide();
            $('#imagePreview').fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
$("#imageUpload").change(function() {
    readURL1(this);
});
$("#mybtn").click(function(){
	$("#exampleModal").modal("hide");
});

function bs_input_file() {
	$(".input-file").before(
		function() {
			if ( ! $(this).prev().hasClass('input-ghost') ) {
				var element = $("<input type='file' class='input-ghost ' style='visibility:hidden; height:0'>");
				element.attr("name",$(this).attr("name"));
				element.change(function(){
					element.next(element).find('input').val((element.val()).split('\\').pop());
				});
				$(this).find("button.btn-choose").click(function(){
					element.click();
				});
				$(this).find("button.btn-reset").click(function(){
					element.val(null);
					$(this).parents(".input-file").find('input').val('');
				});
				$(this).find('input').css("cursor","pointer");
				$(this).find('input').mousedown(function() {
					$(this).parents('.input-file').prev().click();
					return false;
				});
				return element;
			}
		}
	);
} 

function editUser(imgname){
    var usuario = document.getElementById("txtAlias").value;
    let colorTxto = document.getElementById("txtBackgroundText").value;
    let colorFondo = document.getElementById("txtBackground").value;
    $.ajax({ 
        type: 'POST', 
        url: '../controllers/js/edit-link.php?tipo=editarUser', 
        data: {
            alias : usuario, 
            colorTexto : colorTxto,
            colorFondo : colorFondo,
            id : idUsuario,
            foto : imgname
        }, 
        dataType: 'json',
        success: function () { 
           swal("Excelente", "Tu configuracion fue modificada con exito", "success");
           loadImgUser();   
           loadUser();
        },
        error: function(){
            alert("RAYOS");
        }
    });
}


function subirImg(){
    var formData =  new FormData($("#formulario")[0]);
    var ruta ="../controllers/js/edit-link.php?tipo=subirImg";
    $.ajax({ 
        type: 'POST', 
        url: ruta, 
        data: formData, 
        contentType: false,
        processData: false,
        success: function (res) {
            // alert(res);
            var mensaje;
            var foto;
            try {
                $.each(JSON.parse(res),function(i,field){
                    if(i == 'foto'){
                        foto = field;
                    }else{
                        mensaje = field;
                    }
                    
                })
                if(mensaje == "exito"){
                    editUser(foto);
                }
            } catch (error) {
                editUser(imgCargada);
            }
        },
        error: function(){
            alert("RAYOS");
        }
    });
}