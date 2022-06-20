function validate(e) {
    e.preventDefault();
    formulario = document.getElementById('frmUsuario');
    nombre = document.getElementById('txtNombre');
    apellido = document.getElementById('txtApellido');
    usuario = document.getElementById('txtUsuario');
    clave = document.getElementById('txtClave');

    lVali = true;

    if (nombre.value == "") {
        nombre.style.borderColor = "red";
        ohSnap('Ingresar el nombre...', { color: 'red' }); // alert will have class 'alert-color'
        lVali = false;
    }
    if (apellido.value == "") {
        apellido.style.borderColor = "red";
        ohSnap('Ingresar el apellido...', { color: 'red' }, { duration: 1000 }); // alert will have class 'alert-color'
        lVali = false;
    }
    if (usuario.value == "") {
        usuario.style.borderColor = "red";
        ohSnap('Ingresar el usuario...', { color: 'red' }); // alert will have class 'alert-color'
        lVali = false;
    }
    if (clave.value == "") {
        clave.style.borderColor = "red";
        ohSnap('Ingresar la clave...', { color: 'red' }); // alert will have class 'alert-color'
        lVali = false;
    }
    if (lVali == true) {
        formulario.submit();
    }


}

function validateModify(e) {
    e.preventDefault();
    formulario = document.getElementById('frmUsuarioModificar');
    nombre = document.getElementById('txtNombreM');
    apellido = document.getElementById('txtApellidoM');
    usuario = document.getElementById('txtUsuarioM');
    clave = document.getElementById('txtClaveM');

    lVali = true;

    if (nombre.value == "") {
        nombre.style.borderColor = "red";
        ohSnap('Ingresar el nombre...', { color: 'red' }); // alert will have class 'alert-color'
        lVali = false;
    }
    if (apellido.value == "") {
        apellido.style.borderColor = "red";
        ohSnap('Ingresar el apellido...', { color: 'red' }, { duration: 1000 }); // alert will have class 'alert-color'
        lVali = false;
    }
    if (usuario.value == "") {
        usuario.style.borderColor = "red";
        ohSnap('Ingresar el usuario...', { color: 'red' }); // alert will have class 'alert-color'
        lVali = false;
    }
    if (clave.value == "") {
        clave.style.borderColor = "red";
        ohSnap('Ingresar la clave...', { color: 'red' }); // alert will have class 'alert-color'
        lVali = false;
    }
    if (lVali == true) {
        formulario.submit();
    }


}

function validateA(e) {
    e.preventDefault();
    formulario = document.getElementById('frmAprendiz');
    aprendiz = document.getElementById('txtA_Nombre');
    feNac = document.getElementById('txtA_FeNac');
    sex = document.getElementById('txtA_Sex');
    ciu = document.getElementById('txtA_Ciu');

    lVali = true;

    if (aprendiz.value == "") {
        aprendiz.style.borderColor = "red";
        ohSnap('Ingresar nombre...', { color: 'red' }); // alert will have class 'alert-color'
        lVali = false;
    }
    if (feNac.value == "") {
        feNac.style.borderColor = "red";
        ohSnap('Ingresar fecha de nacimiento...', { color: 'red' }, { duration: 1000 }); // alert will have class 'alert-color'
        lVali = false;
    }
    if (sex.value == "") {
        sex.style.borderColor = "red";
        ohSnap('Ingresar sexo...', { color: 'red' }); // alert will have class 'alert-color'
        lVali = false;
    }
    if (ciu.value == "") {
        ciu.style.borderColor = "red";
        ohSnap('Ingresar la ciudad...', { color: 'red' }); // alert will have class 'alert-color'
        lVali = false;
    }
    if (lVali == true) {
        formulario.submit();
    }


}

function validateModifyA(e) {
    e.preventDefault();
    formulario = document.getElementById('frmAprendizModificar');
    aprendiz = document.getElementById('txtA_NombreM');
    feNac = document.getElementById('txtA_FeNacM');
    sex = document.getElementById('txtA_SexM');
    ciu = document.getElementById('txtA_CiuM');

    lValia = true;

    if (aprendiz.value == "") {
        aprendiz.style.borderColor = "red";
        ohSnap('Ingresar el nombre...', { color: 'red' }); // alert will have class 'alert-color'
        lValia = false;
    }
    if (feNac.value == "") {
        feNac.style.borderColor = "red";
        ohSnap('Ingresar La fecha de Nacimiento...', { color: 'red' }, { duration: 1000 }); // alert will have class 'alert-color'
        lValia = false;
    }
    if (sex.value == "") {
        sex.style.borderColor = "red";
        ohSnap('Ingresar su genero...', { color: 'red' }); // alert will have class 'alert-color'
        lValia = false;
    }
    if (ciu.value == "") {
        ciu.style.borderColor = "red";
        ohSnap('Ingresar su ciudad de residencia...', { color: 'red' }); // alert will have class 'alert-color'
        lValia = false;
    }
    if (lValia == true) {
        formulario.submit();
    }


}

function validateMatricula(e) {
    e.preventDefault();

    form = document.getElementById("formMatricula");
    date = document.getElementById("txtDate");
    place = document.getElementById("txtPlace");
    cost = document.getElementById("txtCost");
    state = document.getElementById("txtState");
    programn = document.getElementById("txtProgramn");
    student = document.getElementById("txtStudent");


    lvali = true;

    if (date.value == "") {
        date.style.borderColor = "red";
        lvali = false;
        ohSnap('no pusiste la fecha pa', { color: 'red' }); // alert will have class 'alert-color'
    }

    if (place.value == "") {
        place.style.borderColor = "red";
        ohSnap('no pusiste el centro pa', { color: 'red' }); // alert will have class 'alert-color
        lvali = false;
    }

    if (cost.value == "") {
        cost.style.borderColor = "red";
        ohSnap('no pusiste el costo pa', { color: 'red' }); // alert will have class 'alert-color
        lvali = false;
    }

    if (state.value == "") {
        state.style.borderColor = "red";
        ohSnap('no pusiste el estado pa', { color: 'red' }); // alert will have class 'alert-color
        lvali = false;
    }

    if (programn.value == "") {
        programn.style.borderColor = "red";
        ohSnap('no pusiste el programa pa', { color: 'red' }); // alert will have class 'alert-color
        lvali = false;
    }

    if (student.value == "") {
        student.style.borderColor = "red";
        ohSnap('no pusiste el estudiante pa', { color: 'red' }); // alert will have class 'alert-color
        lvali = false;
    }

    if (lvali == true) {
        form.submit();

    }
}

function validateMatriculaM(e) {
    e.preventDefault();

    formM = document.getElementById("formMatriculaM");
    dateM = document.getElementById("txtDateM");
    placeM = document.getElementById("txtPlaceM");
    costM = document.getElementById("txtCostM");
    stateM = document.getElementById("txtStateM");
    programnM = document.getElementById("txtProgramnM");
    studentM = document.getElementById("txtStudentM");


    lvali = true;

    if (dateM.value == "") {
        dateM.style.borderColor = "red";
        lvali = false;
        ohSnap('no pusiste la fecha pa', { color: 'red' }); // alert will have class 'alert-color'
    }

    if (placeM.value == "") {
        placeM.style.borderColor = "red";
        ohSnap('no pusiste el centro pa', { color: 'red' }); // alert will have class 'alert-color
        lvali = false;
    }

    if (costM.value == "") {
        costM.style.borderColor = "red";
        ohSnap('no pusiste el costo pa', { color: 'red' }); // alert will have class 'alert-color
        lvali = false;
    }

    if (stateM.value == "") {
        stateM.style.borderColor = "red";
        ohSnap('no pusiste el estado pa', { color: 'red' }); // alert will have class 'alert-color
        lvali = false;
    }

    if (programnM.value == "") {
        programnM.style.borderColor = "red";
        ohSnap('no pusiste el programa pa', { color: 'red' }); // alert will have class 'alert-color
        lvali = false;
    }

    if (studentM.value == "") {
        studentM.style.borderColor = "red";
        ohSnap('no pusiste el estudiante pa', { color: 'red' }); // alert will have class 'alert-color
        lvali = false;
    }

    if (lvali == true) {
        formM.submit();

    }
}

