function validarInicioSesion(tbtn){
    tbtn.classList.add('disabled');
    tbtn.innerText = 'Validando...';

    var errores = 0;
    
    const correoUser = document.getElementById('correoIniciarSesion');
    const passUser = document.getElementById('passIniciarSesion');

    if(correoUser.value === ''){
        errores++;
        correoUser.classList.add('is-invalid');
        tbtn.classList.remove('disabled');
        tbtn.innerText = 'Iniciar Sesión';
    }else{
        correoUser.classList.remove('is-invalid');
        correoUser.classList.add('is-valid');
    }

    if(passUser.value === ''){
        errores++;
        passUser.classList.add('is-invalid');
        tbtn.classList.remove('disabled');
        tbtn.innerText = 'Iniciar Sesión';
    }else{
        passUser.classList.remove('is-invalid');
        passUser.classList.add('is-valid');
    }

    if(errores === 0){
        localStorage.setItem('user', JSON.stringify({
            name: 'juanito peres',
            photo: 'img/blackJack.png'
        }));
        window.location.href = 'index.php';
    }
}

function validarRegistro(btn){
    btn.classList.add('disabled');
    btn.innerText = 'Validando...';

    var errores = 0;

    const correo = document.getElementById('correoRegistrarse');
    const rut = document.getElementById('rutRegistrarse');
    const nombre = document.getElementById('nombreRegistrarse');
    const contraseña = document.getElementById('contraseñaRegistrarse');
    const confContraseña = document.getElementById('confContraseñaRegistrarse');
    const telefono = document.getElementById('telefonoRegistrarse');
    const fecha = document.getElementById('fechaRegistrarse');
    const check = document.getElementById('checkRegistrarse');

    if(correo.value === ''){
        errores++;
        correo.classList.add('is-invalid');
        btn.classList.remove('disabled');
        btn.innerText = 'Crear cuenta';
    }else{
        correo.classList.remove('is-invalid');
        correo.classList.add('is-valid');
    }

    if(rut.value === ''){
        errores++;
        rut.classList.add('is-invalid');
        btn.classList.remove('disabled');
        btn.innerText = 'Crear cuenta';
    }else{
        rut.classList.remove('is-invalid');
        rut.classList.add('is-valid');
    }

    if(nombre.value === ''){
        errores++;
        nombre.classList.add('is-invalid');
        btn.classList.remove('disabled');
        btn.innerText = 'Crear cuenta';
    }else{
        nombre.classList.remove('is-invalid');
        nombre.classList.add('is-valid');
    }

    if(contraseña.value === ''){
        errores++;
        contraseña.classList.add('is-invalid');
        btn.classList.remove('disabled');
        btn.innerText = 'Crear cuenta';
    }else{
        contraseña.classList.remove('is-invalid');
        contraseña.classList.add('is-valid');
    }

    if(confContraseña.value === ''){
        errores++;
        confContraseña.classList.add('is-invalid');
        btn.classList.remove('disabled');
        btn.innerText = 'Crear cuenta';
    }else{
        confContraseña.classList.remove('is-invalid');
        confContraseña.classList.add('is-valid');
    }

    if(telefono.value === ''){
        errores++;
        telefono.classList.add('is-invalid');
        btn.classList.remove('disabled');
        btn.innerText = 'Crear cuenta';
    }else{
        telefono.classList.remove('is-invalid');
        telefono.classList.add('is-valid');
    }

    if(fecha.value === ''){
        errores++;
        fecha.classList.add('is-invalid');
        btn.classList.remove('disabled');
        btn.innerText = 'Crear cuenta';
    }else{
        fecha.classList.remove('is-invalid');
        fecha.classList.add('is-valid');
    }

    if(!check.checked){
        errores++;
        check.classList.add('is-invalid');
        btn.classList.remove('disabled');
        btn.innerText = 'Crear cuenta';
    }else{
        check.classList.remove('is-invalid');
        check.classList.add('is-valid');
    }

    if(errores === 0){
        localStorage.setItem('user', JSON.stringify({
            name: nombre.value,
            photo: 'img/blackJack.png'
        }));
        window.location.href = 'index.php';
    }
}

function validarRecuperar(btn){
    btn.classList.add('disabled');
    btn.innerText = 'Validando...';

    var errores = 0;

    const correo = document.getElementById('correoRecuperar');
    const codigo = document.getElementById('codigoRecuperar');

    const modalCodigo = bootstrap.Modal.getOrCreateInstance(document.getElementById('RecuperarContrasena'));
    const modalNuevaContraseña = bootstrap.Modal.getOrCreateInstance(document.getElementById('NuevaContrasena'));
    
    if(correo.value == ''){
        errores++;
        correo.classList.add('is-invalid');
        btn.classList.remove('disabled');
        btn.innerText = 'Continuar';
    }else{
        correo.classList.remove('is-invalid');
        correo.classList.add('is-valid');
    }

    if(codigo.value == ''){
        errores++;
        codigo.classList.add('is-invalid');
        btn.classList.remove('disabled');
        btn.innerText = 'Continuar';
    }else{
        codigo.classList.remove('is-invalid');
        codigo.classList.add('is-valid');
    }

    if(errores == 0){
        btn.classList.remove('disabled');
        btn.innerText = 'Continuar';
        modalCodigo.hide();
        modalNuevaContraseña.show();
    }
}

function validarNuevaContraseña(btn){
    btn.classList.add('disabled');
    btn.innerText = 'Validando...';

    var errores = 0;

    const contraseña = document.getElementById('nuevaContraseña');
    const confContraseña = document.getElementById('confNuevaContraseña');

    const modalConfirmacion = bootstrap.Modal.getOrCreateInstance(document.getElementById('Confirmacion'));
    const modalActual = bootstrap.Modal.getOrCreateInstance(document.getElementById('NuevaContrasena'));
    
    if(contraseña.value == ''){
        errores++;
        contraseña.classList.add('is-invalid');
        btn.classList.remove('disabled');
        btn.innerText = 'Confirmar';
    }else{
        contraseña.classList.remove('is-invalid');
        contraseña.classList.add('is-valid');
    }

    if(confContraseña.value == ''){
        errores++;
        confContraseña.classList.add('is-invalid');
        btn.classList.remove('disabled');
        btn.innerText = 'Confirmar';
    }else{
        confContraseña.classList.remove('is-invalid');
        confContraseña.classList.add('is-valid');
    }

    if(errores == 0){
        btn.classList.remove('disabled');
        btn.innerText = 'Confirmar';
        modalActual.hide();
        modalConfirmacion.show();
    }

}