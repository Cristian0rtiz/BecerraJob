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

            window.location = "index.php?ruta=erase&codigo=" + codigo

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

            window.location = "index.php?ruta=erase&codigo=" + codigo

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

            window.location = "index.php?ruta=eraseM&codigo=" + codigoM;


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


function getData(obj) {
    let nombre = obj.children[0].innerHTML;
    let apellido = obj.children[1].innerHTML;
    let usuario = obj.children[2].innerHTML;
    let clave = obj.children[3].innerHTML;
    let codigo = obj.children[4].innerHTML;

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

function getDataAp(obj) {
    let aprendiz = obj.children[0].innerHTML;
    let dateB = obj.children[1].innerHTML;
    let sex = obj.children[2].innerHTML;
    let city = obj.children[3].innerHTML;
    let code = obj.children[4].innerHTML;

    document.getElementById("txtCodigoAM").value = code;
    document.getElementById("txtA_NombreM").value = aprendiz;
    document.getElementById("txtA_FeNacM").value = dateB;
    document.getElementById("txtA_SexM").value = sex;
    document.getElementById("txtA_CiuM").value = city;
}
// function getGeneraReporte(e){
//     window.open('view/module/alluser.php','_blank');
//     e.preventDefault();

// }