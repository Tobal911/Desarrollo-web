getModals();

function getModals(){
    const modals = document.getElementById("modals");

    modals.innerHTML = `
        <div class="modal fade" id="FormIniciarSesion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Iniciar sesion</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form>
                    <div class="modal-body">
                        <div class="inputs-formulario">
                            <label for="">Correo electronico o telefono</label>
                            <input type="text" id="correoIniciarSesion" class="form-control">

                            <label for="">Contraseña</label>
                            <input type="password" id="passIniciarSesion" class="form-control">
                        </div>

                        <div class="opciones-extras">
                            <p>¿Olvidaste tu contraseña? <a type="button" data-bs-toggle="modal" data-bs-target="#RecuperarContrasena">Recuperar contraseña</a></p>
                            <p>¿No tienes cuenta? <a type="button" data-bs-toggle="modal" data-bs-target="#FormRegistrarse">Registrarse</a></p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary" onclick="validarInicioSesion(this)">Iniciar Sesión</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="FormRegistrarse" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Registrarse</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div>
                    <div class="modal-body">
                        <div class="inputs-formulario">
                            <label for="">Correo electronico</label>
                            <input type="text" id="correoRegistrarse" class="form-control">

                            <label for="">Rut</label>
                            <input type="text" name="" id="rutRegistrarse" class="form-control">

                            <label for="">Nombre completo</label>
                            <input type="text" name="" id="nombreRegistrarse" class="form-control">

                            <label for="">Contraseña</label>
                            <input type="password" name="" id="contraseñaRegistrarse" class="form-control">

                            <label for="">Confirmar contraseña</label>
                            <input type="password" name="" id="confContraseñaRegistrarse" class="form-control">

                            <label for="">Telefono</label>
                            <input type="tel" name="" id="telefonoRegistrarse" class="form-control">

                            <label for="">Fecha de nacimiento</label>
                            <input type="date" name="" id="fechaRegistrarse" class="form-control">

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="checkRegistrarse" style="height:20px !important; width:20px !important;">
                                <label class="form-check-label" for="checkDefault">
                                    Aceptar <a href="" style="text-decoration:none;">Terminos y condiciones</a>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="opciones-extras">
                        <p>¿Ya tienes cuenta? <a type="button" data-bs-toggle="modal" data-bs-target="#FormIniciarSesion">Iniciar sesion</a></p>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary" onclick="validarRegistro(this)">Crear cuenta</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="RecuperarContrasena" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Recuperar contraseña</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="formu">
                    <div class="modal-body">
                        <div class="inputs-formulario">
                            <label for="">Correo electronico</label>
                            <input type="text" class="form-control" id="correoRecuperar">

                            <label for="">Codigo verificacion</label>
                            <input type="password" id="codigoRecuperar" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary" onclick="validarRecuperar(this)">Continuar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="NuevaContrasena" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Cambiar contraseña</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div>
                    <div class="modal-body">
                        <div class="inputs-formulario">
                            <label for="">Nueva contraseña</label>
                            <input type="text" class="form-control" id="nuevaContraseña">

                            <label for="">Confirmar contraseña</label>
                            <input type="password" id="confNuevaContraseña" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary"  onclick="validarNuevaContraseña(this)">Confirmar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="Confirmacion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Contraseña cambiada con exito</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div>
                    <div class="modal-body" style="display:flex; justify-content:center;">
                        <img src="img/check-box.png" width="100px" height="100px">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#FormIniciarSesion">Iniciar Sesion</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    `;
}