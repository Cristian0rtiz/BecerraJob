function erase(obj) {

    let codigo = obj.children[0].innerHTML;

    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: 'btn btn-success',
            cancelButton: 'btn btn-danger'
        },
        buttonsStyling: false
    })

    swalWithBootstrapButtons.fire({
        title: 'Estas seguro?',
        text: "No se podra revertir!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Si, borralo!',
        cancelButtonText: 'No, cancelar!',
        reverseButtons: true
    }).then((result) => {
        if (result.isConfirmed) {

            window.location = "index.php?ruta=erase&codigo=" + code

        } else if (
            /* Read more about handling dismissals below */
            result.dismiss === Swal.DismissReason.cancel
        ) {
            swalWithBootstrapButtons.fire(
                'Cancelado',
                'No se ha borrado :)',
                'error'
            )
        }
    })


}

function getData(obj) {
    let nombre = obj.children[1].innerHTML;
    let apellido = obj.children[2].innerHTML;
    let usuario = obj.children[3].innerHTML;
    let clave = obj.children[4].innerHTML;
    let codigo = obj.children[0].innerHTML;

    document.getElementById("txtNombreM").value = nombre;
    document.getElementById("txtApellidoM").value = apellido;
    document.getElementById("txtUsuarioM").value = usuario;
    document.getElementById("txtClaveM").value = clave;
    document.getElementById("txtCodigoM").value = codigo;
}

function getGeneraReporte(e) {

    window.open('view/module/alluser.php', '_blank');
    e.preventDefault();

}

function eraseM(obj) {

    codigoM = obj.children[0].innerHTML;


    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: 'btn btn-success',
            cancelButton: 'btn btn-danger'
        },
        buttonsStyling: false
    })

    swalWithBootstrapButtons.fire({
        title: '¿estas seguro?',
        text: "no podras deshacer este cambio",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'si, borralo',
        cancelButtonText: 'no,cancelar',
        reverseButtons: true
    }).then((result) => {
        if (result.isConfirmed) {

            window.location = "index.php?ruta=eraseM&txtCodigo=" + codigoM;


        } else if (
            /* Read more about handling dismissals below */
            result.dismiss === Swal.DismissReason.cancel
        ) {
            swalWithBootstrapButtons.fire(
                'cancelado',
                'tu registro esta intacto',
                'error'
            )
        }
    })
}

function eraseA(obj) {

    let codigo = obj.children[0].innerHTML;

    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: 'btn btn-success',
            cancelButton: 'btn btn-danger'
        },
        buttonsStyling: false
    })

    swalWithBootstrapButtons.fire({
        title: 'Estas seguro?',
        text: "No se podra revertir!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Si, borralo!',
        cancelButtonText: 'No, cancelar!',
        reverseButtons: true
    }).then((result) => {
        if (result.isConfirmed) {

            window.location = "index.php?ruta=eraseA&codigo=" + codigo

        } else if (
            /* Read more about handling dismissals below */
            result.dismiss === Swal.DismissReason.cancel
        ) {
            swalWithBootstrapButtons.fire(
                'Cancelado',
                'No se ha borrado :)',
                'error'
            )
        }
    })


}


function getDataA(obj) {
    let codigo = obj.children[0].innerHTML;
    let nombre = obj.children[1].innerHTML;
    let fechaNacimiento = obj.children[2].innerHTML;
    let sexo = obj.children[3].innerHTML;
    let ciudad = obj.children[4].innerHTML;

    document.getElementById("txtNombreM").value = codigo;
    document.getElementById("txtA_Nombre").value = nombre;
    document.getElementById("txtA_FeNac").value = fechaNacimiento;
    document.getElementById("txtA_Sex").value = sexo;
    document.getElementById("txtA_Ciu").value = ciudad;
}

function getGenerarReporteM(e) {
    window.open("view/module/allMatricula.php", "_blank");
    e.preventDefault();
}


function getDataM(obj) {
    let CMM = obj.children[0].innerHTML;
    let DM = obj.children[1].innerHTML;
    let PL = obj.children[2].innerHTML;
    let CM = obj.children[3].innerHTML;
    let SM = obj.children[4].innerHTML;
    let PM = obj.children[5].innerHTML;
    let STM = obj.children[6].innerHTML;

    document.getElementById("txtCodigoMatricula").value = CMM;
    document.getElementById("txtDateM").value = DM;
    document.getElementById("txtPlaceM").value = PL;
    document.getElementById("txtCostM").value = CM;
    document.getElementById("txtStateM").value = SM;
    document.getElementById("txtProgramnM").value = PM;
    document.getElementById("txtStudentM").value = STM;

}