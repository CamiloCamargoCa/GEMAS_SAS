

function eliminarDepartamento(reg2) {

    var regcod2 = reg2;
    if (confirm("!Desea eliminar el Departamento!?")) {
        window.location.href = 'VistaEliminarDepartamento.php?cod=' + regcod2;
      
    }
    else {
        alert("CANCELADO! Departamento no sera eliminado");
        window.location.href = "VistaListaDepartamentos.php";
    }

}

function eliminarCiudad(reg2) {

    var regcod2 = reg2;
    if (confirm("!Desea eliminar la Ciudad!?")) {
        window.location.href = 'VistaEliminarCiudad.php?cod=' + regcod2;
      
    }
    else {
        alert("CANCELADO! Departamento no sera eliminado");
        window.location.href = "VistaListaCiudad.php";
    }

}