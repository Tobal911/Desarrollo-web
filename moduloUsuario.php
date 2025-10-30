<!DOCTYPE html>
<html lang="en">
    <head>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pagina de usuario</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"><!---->  
        <link rel="stylesheet" href="style.css"><!---->  
    </head>
    <body>
        <div id="nav"></div>
        <div id="modals"></div> <!---->

        <div class="container py-4" style="margin-top:100px;">
            <div class="row g-3 align-items-stretch">
                <div class="col-12 col-md-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <img id="pfp" src="img/blackJack.png" class="rounded-circle" width="84" height="84" alt="Foto de perfil">
                                <div>
                                    <h4 id="username" class="mb-0 mt-1">*Nombre de usuario*</h4>
                                    <small class="text-secondary">Miembro desde 2025</small>
                                </div>
                            </div>
                            <hr>
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <div class="text-secondary small">Saldo disponible</div>
                                    <h3 id="balance" class="mb-0">$ 0</h3>
                                </div>
                                <div class="d-flex gap-2">
                                    <a href="Billetera_Casino.php"><button class="btn btn-cyan" id="btnDepositar" style="width: 100px; height: 50px;"><i class="bi bi-plus-circle"></i> Billetera</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-8">
                    <div class="card h-100">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <span>Datos personales</span>
                            <button class="btn btn-sm btn-yellow" data-bs-toggle="modal" data-bs-target="#editModal">
                                <i class="bi bi-pencil-square"></i> Editar
                            </button>
                        </div>
                        <div class="card-body">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="small text-secondary">Nombre</div>
                                    <div id="dp-nombre" class="fs-6">—</div>
                                </div>
                                <div class="col-md-6">
                                    <div class="small text-secondary">Correo</div>
                                    <div id="dp-correo" class="fs-6">—</div>
                                </div>
                                <div class="col-md-6">
                                    <div class="small text-secondary">Teléfono</div>
                                    <div id="dp-telefono" class="fs-6">—</div>
                                </div>
                                <div class="col-md-6">
                                    <div class="small text-secondary">Fecha de nacimiento</div>
                                    <div id="dp-fecha" class="fs-6">—</div>
                                </div>
                                <div class="col-12">
                                    <div class="small text-secondary">Dirección</div>
                                    <div id="dp-direccion" class="fs-6">—</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-4 mt-1">
                <div class="col-12 col-md-12">
                    <div class="card">
                        <div class="card-header">Historial reciente</div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-sm table-dark align-middle mb-0">
                                    <thead>
                                        <tr>
                                            <th>Fecha</th>
                                            <th>Juego</th>
                                            <th>Monto</th>
                                            <th>Resultado</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tabla-historial">
                                        <tr>
                                            <th>1/02/2025</th>
                                            <th>Ruleta</th>
                                            <th>+50.000</th>
                                            <th>$30.000</th>
                                        </tr>
                                        <tr>
                                            <th>5/02/2025</th>
                                            <th>Ruleta</th>
                                            <th>+20.000</th>
                                            <th>$80.000</th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="text-end mt-2">
                                <a href="Billetera_Casino.html"><button class="btn btn-outline-light btn-sm">Ver todo</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="editModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"><i class="bi bi-pencil-square"></i> Editar datos</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row g-3">
                            <div class="col-12">
                                <label class="form-label">Nombre</label>
                                <input id="f-nombre" class="form-control" placeholder="Tu nombre">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Correo</label>
                                <input id="f-correo" type="email" class="form-control" placeholder="ejemplo@correo.com">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Teléfono</label>
                                <input id="f-telefono" class="form-control" placeholder="9-12345678">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Fecha de nacimiento</label>
                                <input id="f-fecha" type="date" class="form-control">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Dirección</label>
                                <input id="f-direccion" class="form-control" placeholder="Calle 123, Ciudad">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-yellow" data-bs-dismiss="modal">Cancelar</button>
                        <button id="f-guardar" class="btn btn-cyan">Guardar cambios</button>
                    </div>
                </div>
            </div>
        </div>

        <div id="Footer"></div><!---->
    
        <script src="nav.js"></script><!---->
        <script src="footer.js"></script><!---->
        <script src="modals.js"></script><!---->
        <script src="validaciones.js"></script><!---->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script><!---->
    </body>
</html>