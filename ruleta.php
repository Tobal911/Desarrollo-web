<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="style.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Casino</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
        <style>
        .mesa-ruleta { 
            margin:15px;
            width: 80% ; 
            height: 300px; 
            display: grid;
            grid-template-columns: 50px repeat(12, 1fr);
            grid-template-rows: repeat(3, 1fr) 50px 50px 50px; 
            gap: 2px;
            box-sizing: border-box;

        }
        .slot-numero, .slot-apuesta {
            color:white;
            background-color: #333;
            border: 1px solid #555;
            display: flex;
            justify-content: center;
            align-items: center;
            font-weight: bold;
            cursor: pointer;
            position: relative;
        }
        .slot-numero[data-color="rojo"] { background-color: #d90000; }
        .slot-numero[data-color="negro"] { background-color: #222; }
        .slot-numero[data-numero="0"] { background-color: #008f00; }

        
        .slot-apuesta { grid-column: span 4; } 
        .slot-apuesta.col-1 { grid-column: span 1; } 
        .slot-apuesta.row-3 { grid-row: span 3; }


        
        .fichas-seleccion { margin-top: 20px; display: flex; justify-content: center; gap: 10px; padding: 10px; background-color: #222; border-radius: 8px; }
        .ficha-opcion img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            cursor: pointer;
            border: 2px solid transparent;
            transition: border-color 0.2s;
        }
        .ficha-opcion img.selected {
            border-color: yellow; 
            box-shadow: 0 0 15px yellow;
        }

        .ficha-en-mesa {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            position: absolute; 
            cursor: pointer; 
            border: 1px solid rgba(255,255,255,0.5); 
            box-shadow: 0 0 5px rgba(0,0,0,0.5);
            animation: appear 0.2s ease-out;
        }
        @keyframes appear {
            from { transform: scale(0.5); opacity: 0; }
            to { transform: scale(1); opacity: 1; }
        }

        .controles { margin-top: 20px; }
        #total-apostado, #saldo-jugador { font-size: 1.5em; margin-bottom: 10px; }
        .btn-accion { padding: 10px 20px; font-size: 1em; cursor: pointer; margin: 5px; }
        .btn-accion.apostar { background-color: #ff9900; color: white; border: none; }
        .btn-accion.limpiar { background-color: #c00; color: white; border: none; }

        .slot-numero[data-numero="3"], .slot-numero[data-numero="6"], .slot-numero[data-numero="9"], .slot-numero[data-numero="12"], .slot-numero[data-numero="15"], .slot-numero[data-numero="18"], .slot-numero[data-numero="21"], .slot-numero[data-numero="24"], .slot-numero[data-numero="27"], .slot-numero[data-numero="30"], .slot-numero[data-numero="33"], .slot-numero[data-numero="36"] { grid-row: 1; }
   
        .slot-numero[data-numero="2"], .slot-numero[data-numero="5"], .slot-numero[data-numero="8"], .slot-numero[data-numero="11"], .slot-numero[data-numero="14"], .slot-numero[data-numero="17"], .slot-numero[data-numero="20"], .slot-numero[data-numero="23"], .slot-numero[data-numero="26"], .slot-numero[data-numero="29"], .slot-numero[data-numero="32"], .slot-numero[data-numero="35"] { grid-row: 2; }

        .slot-numero[data-numero="1"], .slot-numero[data-numero="4"], .slot-numero[data-numero="7"], .slot-numero[data-numero="10"], .slot-numero[data-numero="13"], .slot-numero[data-numero="16"], .slot-numero[data-numero="19"], .slot-numero[data-numero="22"], .slot-numero[data-numero="25"], .slot-numero[data-numero="28"], .slot-numero[data-numero="31"], .slot-numero[data-numero="34"] { grid-row: 3; }

        .slot-numero[data-numero="1"], .slot-numero[data-numero="2"], .slot-numero[data-numero="3"] { grid-column: 2; }
        .slot-numero[data-numero="4"], .slot-numero[data-numero="5"], .slot-numero[data-numero="6"] { grid-column: 3; }
        .slot-numero[data-numero="7"], .slot-numero[data-numero="8"], .slot-numero[data-numero="9"] { grid-column: 4; }
        .slot-numero[data-numero="10"], .slot-numero[data-numero="11"], .slot-numero[data-numero="12"] { grid-column: 5; }
        .slot-numero[data-numero="13"], .slot-numero[data-numero="14"], .slot-numero[data-numero="15"] { grid-column: 6; }
        .slot-numero[data-numero="16"], .slot-numero[data-numero="17"], .slot-numero[data-numero="18"] { grid-column: 7; }
        .slot-numero[data-numero="19"], .slot-numero[data-numero="20"], .slot-numero[data-numero="21"] { grid-column: 8; }
        .slot-numero[data-numero="22"], .slot-numero[data-numero="23"], .slot-numero[data-numero="24"] { grid-column: 9; }
        .slot-numero[data-numero="25"], .slot-numero[data-numero="26"], .slot-numero[data-numero="27"] { grid-column: 10; }
        .slot-numero[data-numero="28"], .slot-numero[data-numero="29"], .slot-numero[data-numero="30"] { grid-column: 11; }
        .slot-numero[data-numero="31"], .slot-numero[data-numero="32"], .slot-numero[data-numero="33"] { grid-column: 12; }
        .slot-numero[data-numero="34"], .slot-numero[data-numero="35"], .slot-numero[data-numero="36"] { grid-column: 13; }


        .slot-numero[data-numero="0"] { 
            grid-column: 1; 
            grid-row: 1 / span 3;
        }

        .slot-apuesta[data-apuesta="1a12"] { grid-column: 2 / span 4; grid-row: 4; }
        .slot-apuesta[data-apuesta="2a12"] { grid-column: 6 / span 4; grid-row: 4; }
        .slot-apuesta[data-apuesta="3a12"] { grid-column: 10 / span 4; grid-row: 4; }


        .slot-apuesta[data-apuesta="1-18"] { grid-column: 2 / span 2; grid-row: 5; }
        .slot-apuesta[data-apuesta="PAR"]  { grid-column: 4 / span 2; grid-row: 5; }
        .slot-apuesta[data-apuesta="ROJO"] { grid-column: 6 / span 2; grid-row: 5; background-color: #d90000; }
        .slot-apuesta[data-apuesta="NEGRO"] { grid-column: 8 / span 2; grid-row: 5; background-color: #222; }
        .slot-apuesta[data-apuesta="IMPAR"] { grid-column: 10 / span 2; grid-row: 5; }
        .slot-apuesta[data-apuesta="19-36"] { grid-column: 12 / span 2; grid-row: 5; } 


        .slot-apuesta[data-apuesta="col1"] { grid-column: 14; grid-row: 1; }
        .slot-apuesta[data-apuesta="col2"] { grid-column: 14; grid-row: 2; }
        .slot-apuesta[data-apuesta="col3"] { grid-column: 14; grid-row: 3; }
    </style>
    </head>
    <body>
        <div id="nav"></div>
        <div id="modals"></div>

        <div class="medio_arriba"> 
            <div id="estado" class="estado_apuesta boton_tiempo"></div>
            <div id="tiempo" class="estado_apuesta boton_tiempo"></div>
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
                <div class="mesa-ruleta" id="mesa-ruleta">
                    <div class="slot-numero" data-numero="0" data-color="verde">0</div>

                    <div class="slot-numero" data-numero="3" data-color="rojo">3</div>
                    <div class="slot-numero" data-numero="6" data-color="negro">6</div>
                    <div class="slot-numero" data-numero="9" data-color="rojo">9</div>
                    <div class="slot-numero" data-numero="12" data-color="rojo">12</div>
                    <div class="slot-numero" data-numero="15" data-color="negro">15</div>
                    <div class="slot-numero" data-numero="18" data-color="rojo">18</div>
                    <div class="slot-numero" data-numero="21" data-color="rojo">21</div>
                    <div class="slot-numero" data-numero="24" data-color="negro">24</div>
                    <div class="slot-numero" data-numero="27" data-color="rojo">27</div>
                    <div class="slot-numero" data-numero="30" data-color="rojo">30</div>
                    <div class="slot-numero" data-numero="33" data-color="negro">33</div>
                    <div class="slot-numero" data-numero="36" data-color="rojo">36</div>

                    <div class="slot-numero" data-numero="2" data-color="negro">2</div>
                    <div class="slot-numero" data-numero="5" data-color="rojo">5</div>
                    <div class="slot-numero" data-numero="8" data-color="negro">8</div>
                    <div class="slot-numero" data-numero="11" data-color="negro">11</div>
                    <div class="slot-numero" data-numero="14" data-color="rojo">14</div>
                    <div class="slot-numero" data-numero="17" data-color="negro">17</div>
                    <div class="slot-numero" data-numero="20" data-color="negro">20</div>
                    <div class="slot-numero" data-numero="23" data-color="rojo">23</div>
                    <div class="slot-numero" data-numero="26" data-color="negro">26</div>
                    <div class="slot-numero" data-numero="29" data-color="negro">29</div>
                    <div class="slot-numero" data-numero="32" data-color="rojo">32</div>
                    <div class="slot-numero" data-numero="35" data-color="negro">35</div>

                    <div class="slot-numero" data-numero="1" data-color="rojo">1</div>
                    <div class="slot-numero" data-numero="4" data-color="negro">4</div>
                    <div class="slot-numero" data-numero="7" data-color="rojo">7</div>
                    <div class="slot-numero" data-numero="10" data-color="negro">10</div>
                    <div class="slot-numero" data-numero="13" data-color="negro">13</div>
                    <div class="slot-numero" data-numero="16" data-color="rojo">16</div>
                    <div class="slot-numero" data-numero="19" data-color="rojo">19</div>
                    <div class="slot-numero" data-numero="22" data-color="negro">22</div>
                    <div class="slot-numero" data-numero="25" data-color="rojo">25</div>
                    <div class="slot-numero" data-numero="28" data-color="negro">28</div>
                    <div class="slot-numero" data-numero="31" data-color="negro">31</div>
                    <div class="slot-numero" data-numero="34" data-color="rojo">34</div>

                    <div class="slot-apuesta" data-apuesta="1a12">1a12</div>
                    <div class="slot-apuesta" data-apuesta="2a12">2a12</div>
                    <div class="slot-apuesta" data-apuesta="3a12">3a12</div>

                    <div class="slot-apuesta" data-apuesta="1-18">1-18</div>
                    <div class="slot-apuesta" data-apuesta="PAR">PAR</div>
                    <div class="slot-apuesta" data-apuesta="ROJO">ROJO</div>
                    <div class="slot-apuesta" data-apuesta="NEGRO">NEGRO</div>
                    <div class="slot-apuesta" data-apuesta="IMPAR">IMPAR</div>
                    <div class="slot-apuesta" data-apuesta="19-36">19-36</div>


                </div>
                <img src="img/ruleta.png" alt="ruleta casino" id="ruleta" class="img-fluid" width="38%" style="transition: transform 5s ease-out;">
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
                <div class="fichasimgs" style="display:flex; justify-content: space-between !important;">
                    <div class="ficha-opcion" style="margin:3px;"><img src="img/fichas01.png" alt="" width= "60px" height= "60px" data-valor="0.10"></div>
                    <div class="ficha-opcion" style="margin:3px;"><img src="img/fichas05.png" alt="" width= "60px" height= "60px"data-valor="0.50"></div>
                    <div class="ficha-opcion" style="margin:3px;"><img src="img/fichas1.png" alt="" width= "60px" height= "60px"data-valor="1"></div>
                    <div class="ficha-opcion" style="margin:3px;"><img src="img/fichas5.png" alt="" width= "60px" height= "60px"data-valor="5"></div>
                    <div class="ficha-opcion" style="margin:3px;"><img src="img/fichas25.png" alt="" width= "60px" height= "60px"data-valor="25"></div>
                    <div class="ficha-opcion" style="margin:3px;"><img src="img/fichas100.png" alt="" width= "60px" height= "60px"data-valor="100"></div>
                    <div class="ficha-opcion" style="margin:3px;"><img src="img/fichas500.png" alt="" width= "60px" height= "60px"data-valor="500"></div>
                    <div class="ficha-opcion" style="margin:3px;"><img src="img/Fichas.png" alt="" width= "60px" height= "60px"data-valor="1000"></div>
                </div>
                <p id="total-apostado" class="estado_apuesta boton_tiempo">Total Apostado: $0.00</p>
                <button id="btn-limpiar" class="button_apuesta">LIMPIAR TODO</button>
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

        <script src="funciones_ruleta.js"></script>
        <script src="apuestas.js"></script>
        <script src="nav.js"></script><!---->
        <script src="footer.js"></script><!---->
        <script src="modals.js"></script><!---->
        <script src="validaciones.js"></script><!---->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>