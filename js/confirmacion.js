function confirmacion(e) {
    if (confirm("¿Esta seguro desea eliminar este registro?")) {
        return true;

    } else {
        e.PrevenDefault();
    }
}

let linkDelete = document.querySelectorAll(".table__item__link");

for (var i = 0; i < linkDelete.length; i++) {
    linkDelete[i].addEventListener ('click', confirmacion);
}
