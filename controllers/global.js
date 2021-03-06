function getAbsolutePath() {
    var loc = window.location;
    var pathName = loc.pathname.substring(0, loc.pathname.lastIndexOf('/') + 1);
    return loc.href.substring(0, loc.href.length - ((loc.pathname + loc.search + loc.hash).length - pathName.length));
}
function parametroURL(_par) {
    var _p = null;
    if (location.search) location.search.substr(1).split("&").forEach(function (pllv) {
      var s = pllv.split("="), //separamos llave/valor
        ll = s[0],
        v = s[1] && decodeURIComponent(s[1]); //valor hacemos encode para prevenir url encode
      if (ll == _par) { //solo nos interesa si es el nombre del parametro a buscar
        if (_p == null) {
          _p = v; //si es nula, quiere decir que no tiene valor, solo textual
        } else if (Array.isArray(_p)) {
          _p.push(v); //si ya es arreglo, agregamos este valor
        } else {
          _p = [_p, v]; //si no es arreglo, lo convertimos y agregamos este valor
        }
      }
    });
    return _p;
}
