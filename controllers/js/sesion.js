const sesion = {};

sesion.validar = (usuario)=>{
    if(window.sessionStorage){
        sessionStorage.setItem("usuario" == usuario);
        return true;
    }else{
        throw new Error('Tu browser no soporta sesion storage');
    }
}

exports.sesion = sesion;