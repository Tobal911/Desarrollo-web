<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="style.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Casino</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div id="nav"></div>
        <div id="modals"></div>

        <div class="medio_arriba"> 
            <div class="estado_apuesta boton_tiempo">Tiempo Restante 1:35</div>         
            <ul class="ultimos_ganadores">
                <li class="titulo_ganadores" style="font-size: 20px;">Ultimos ganadores:</li>
                <li class="btn btn-lg btn-danger inhabilitado" style="height: 35px; width: 35px;">23</li>
                <li class="btn btn-lg btn-dark inhabilitado" style="height: 35px; width: 35px;">12</li>
                <li class="btn btn-lg btn-success inhabilitado" style="height: 35px; width: 35px;">0</li>
                <li class="btn btn-lg btn-danger inhabilitado" style="height: 35px; width: 35px;">24</li>
                <li class="btn btn-lg btn-dark inhabilitado" style="height: 35px; width: 35px;">18</li>
            </ul>
        </div>

        <div class="centro">
            <div class="mesaJugar">
                <img src="img/tablero.png" alt="tablero casino" width="60%" height="100%">
                <img src="img/ruleta.png" alt="ruleta casino" class="img-fluid" width="40%" height="100%">
            </div>
            <div class="tabla">
                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Apuesta</th>
                            <th>Monto</th>
                            <th>Numero</th>
                            <th>Final</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Primera docena</td>
                            <td>10.000$</td>
                            <td>23</td>
                            <td>+23.000$</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>12 y 30-34</td>
                            <td>20.000$</td>
                            <td>36</td>
                            <td>+36.000$</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>primera columna</td>
                            <td>15.000$</td>
                            <td>12</td>
                            <td>-15.000$</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Cuarta docena</td>
                            <td>25.000$</td>
                            <td>Perdió</td>
                            <td>-25.000$</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>1-18</td>
                            <td>30.000$</td>
                            <td>36</td>
                            <td>+30.000$</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="medio_abajo">
            <div class="apostar_opciones">
                <img src="img/Fichas.png" alt="Foto_fichas" width="40%" height="auto" style="margin-right: 70px;">
                <button class="button_apuesta">apostar</button>
                <p class="boton_saldo">Saldo: $97.23</p>
            </div>
            <div class="abajo">
                <ul>
                    <button class="btn btn-primary btn-success btn-lg prioridad" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTerminos" aria-controls="offcanvasRight">Terminos y condiciones</button>
                    <div class="offcanvas offcanvas-end color-slice" tabindex="-1" id="offcanvasTerminos" aria-labelledby="offcanvasRightLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasRightLabel">Terminos y condiciones</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close" style="filter: invert();"></button>
                        </div>
                        <div class="offcanvas-body">
                            <ol class="lista-terminos">
                                <li>Cada jugador es responsable de el uso de sus recursos</li>
                                <li>AL acceder a esta pagina, el jugador acepta los terminos y condiciones del juego.</li>
                                <li>El usuario no tiene limite de apuestas</li>
                                <li>Responsabilidad de los Usuarios respecto de la información registrada en el sitio
                                    Creado en Chile adoptará las medidas necesarias y prudentes para resguardar la seguridad de los datos y clave secreta.</li>
                                <li>Los presentes términos y condiciones se rigen por las leyes de la República de Chile. Cualquier controversia o conflicto derivado de la utilización del sitio web de Creado en Chile, sus Términos y Condiciones y las Políticas de Privacidad, su validez, interpretación, alcance o cumplimiento, será sometida a las leyes aplicables de la República de Chile.</li>
                                <li>Los productos y servicios que se informan en este sitio sólo podrán ser pagados por medio de:
                                    1. Tarjeta de crédito bancarias Visa, Mastercard, emitidas en Chile.
                                    2. Tarjetas de débito bancarias acogidas al sistema Redcompra, emitidas en Chile por bancos nacionales.
                                    3. El pago con tarjetas de débito se realizará a través de WebPay, que es un sistema de pago electrónico que se encarga de hacer el cargo automático a la cuenta bancaria del usuario.</li>
                            </ol>
                        </div>
                    </div>

                    <button class="btn btn-primary btn-danger btn-lg prioridad" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasReglas" aria-controls="offcanvasRight">Reglas</button>
                    <div class="offcanvas offcanvas-end color-slice" tabindex="-1" id="offcanvasReglas" aria-labelledby="offcanvasRightLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasRightLabel">Reglas Ruleta Europea</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close" style="filter: invert();"></button>
                        </div>
                        <div class="offcanvas-body">
                            <ol class="lista-reglas">
                                <li>Cada jugador comienza con 100 fichas</li>
                                <li>Las apuestas mínimas son de 5 fichas</li>
                                <li>Rojo o Negro: Si se apuesta a uno de estos colores y la bola cae en un número de ese color, el jugador gana el doble de lo apostado (1:1).</li>
                                <li>Par o Impar: Si se apuesta a los números pares o impares y la bola cae en un número que cumple esa condición, el jugador gana el doble de lo apostado (1:1).</li>
                                <li>Número Único: Si el jugador apuesta a un solo número (del 0 al 36) y la bola cae en ese número, ¡la ganancia es mucho mayor! Se paga 35 veces lo apostado (35:1).</li>
                                <li>EL numero 0 es el unico con color Verde</li>
                            </ol>
                        </div>
                    </div>
                    <button style="background: none; border: none;"><a href="index.html"class="btn btn-dark btn-primary btn-lg">Inicio</a></button>
                </ul>               
            </div>
        </div>

        <div id="Footer"></div><!---->
    
        <script src="nav.js"></script><!---->
        <script src="footer.js"></script><!---->
        <script src="modals.js"></script><!---->
        <script src="validaciones.js"></script><!---->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>