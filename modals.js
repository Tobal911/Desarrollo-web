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
                            <p>¿Olvidaste tu contraseña? <a type="button" data-bs-toggle="modal" data-bs-target="#RecuperarContraseña">Recuperar contraseña</a></p>
                            <p>¿No tienes cuenta? <a type="button" data-bs-toggle="modal" data-bs-target="#FormRegistrarse">Registrarse</a></p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary" onclick="validarInicioSesion()">Inicar Sesión</button>
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
                <form>
                    <div class="modal-body">
                        <div class="inputs-formulario">
                            <label for="">Correo electronico</label>
                            <input type="text" id="correoRegistrarse">

                            <label for="">Rut</label>
                            <input type="text" name="" id="rutRegistrarse">

                            <label for="">Nombre completo</label>
                            <input type="text" name="" id="nombreRegistrarse">

                            <label for="">Contraseña</label>
                            <input type="password" name="" id="contraseñaRegistrarse">

                            <label for="">Confirmar contraseña</label>
                            <input type="password" name="" id="confContraseñaRegistrarse">

                            <label for="">Telefono</label>
                            <input type="tel" name="" id="telefonoRegistrarse">

                            <label for="">Fecha de nacimiento</label>
                            <input type="date" name="" id="fechaRegistrarse">

                            <div class="terminos">
                                <input type="checkbox" name="" id="checkRegistrarse"><label>Aceptar <a href="">terminos y condiciones</a></label>
                            </div>
                        </div>
                    </div>

                    <div class="opciones-extras">
                        <p>¿Ya tienes cuenta? <a type="button" data-bs-toggle="modal" data-bs-target="#FormIniciarSesion">Iniciar sesion</a></p>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary" onclick="validarRegistro()">Crear cuenta</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="RecuperarContraseña" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#NuevaContraseña" onclick="validarRecuperar()">Continuar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="NuevaContraseña" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Cambiar contraseña</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form>
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
                        <button type="submit" class="btn btn-primary" data-bs-dismiss="modal"  onclick="validarNuevaContraseña()">Confirmar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    `;
}