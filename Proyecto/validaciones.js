function validarInicioSesion(tbtn){
    tbtn.classList.add('disabled');
    tbtn.innerText = 'Validando...';

    const correoUser = document.getElementById('correoIniciarSesion');
    const passUser = document.getElementById('passIniciarSesion');

    if(correoUser.value == ''){
        correoUser.classList.add('is-invalid');
        tbtn.classList.remove('disabled');
        tbtn.innerText = 'Iniciar Sesión';
    }else{
        correoUser.classList.remove('is-invalid');
        correoUser.classList.add('is-valid');
    }

    if(passUser.value == ''){
        passUser.classList.add('is-invalid');
        tbtn.classList.remove('disabled');
        tbtn.innerText = 'Iniciar Sesión';
    }else{
        passUser.classList.remove('is-invalid');
        passUser.classList.add('is-valid');
    }
}

function validarRegistro(btn){

}

function validarRecuperar(btn){

}

function validarNuevaContraseña(btn){

}