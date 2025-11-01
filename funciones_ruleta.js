        const DURACION_APUESTA = 10; //segundos para apostar
        const DURACION_ESPERA = 6;  // segundos mientras gira la ruleta

        const displayEstado = document.getElementById('estado');
        const displayTiempo = document.getElementById('tiempo');
        const btnApostar = document.getElementById('btnApostar');



        let estadoActual; 
        let tiempoRestante;
        let gameInterval; 

    
        function tick() {
            tiempoRestante--;

            displayTiempo.textContent = "Tiempo restante: " + tiempoRestante + " segundos";

            if (tiempoRestante <= 0) {
             
                if (estadoActual === "APOSTANDO") {
                    iniciarFaseEspera();
                } else {
                    iniciarFaseApuestas();
                }
            }
        }

        function iniciarFaseApuestas() {
            limpiarApuestas();
            displayTiempo.style.display = "flex";
            console.log("FASE: Abriendo apuestas...");
            
            estadoActual = "APOSTANDO";
            tiempoRestante = DURACION_APUESTA;
            
            displayEstado.textContent = "¡HAGAN SUS APUESTAS!";
            displayTiempo.textContent = "Tiempo restante: " + tiempoRestante + " segundos";
            

        }

        function iniciarFaseEspera() {
            deseleccionarFicha();
            console.log("FASE: Cerrando apuestas...");

            estadoActual = "ESPERANDO";
            tiempoRestante = DURACION_ESPERA;
            
            displayEstado.textContent = "APUESTAS CERRADAS. ¡Girando!";
            displayTiempo.style.display = "none";

            
            const ordenRuleta = [
                2, 0, 28, 9, 26, 30, 11, 7, 20, 32, 17, 5, 22, 34, 15, 3, 24,
                36, 13, 1, 0, 27, 10, 25, 29, 12, 8, 19, 31, 18, 6, 21, 33, 16,
                4, 23, 35, 14
            ];

            const colores = {
            0: "verde", 1: "rojo", 2: "negro", 3: "rojo", 4: "negro", 5: "rojo", 
            6: "negro", 7: "rojo", 8: "negro", 9: "rojo", 10: "negro", 11: "negro", 
            12: "rojo", 13: "negro", 14: "rojo", 15: "negro", 16: "rojo", 17: "negro", 
            18: "rojo", 19: "rojo", 20: "negro", 21: "rojo", 22: "negro", 23: "rojo", 
            24: "negro", 25: "rojo", 26: "negro", 27: "rojo", 28: "negro", 29: "negro", 
            30: "rojo", 31: "negro", 32: "rojo", 33: "negro", 34: "rojo", 35: "negro", 36: "rojo"
            };

            const anguloPorSector = 360 / 37;
            const anguloRuleta = {};

            ordenRuleta.forEach((numero, index) => {

            const angulo = index * anguloPorSector;
            anguloRuleta[numero] = angulo;
            });

            let rotacionActual = 0;

            const numeroGanador = Math.floor(Math.random() * 37);
            const colorGanador = colores[numeroGanador];

            console.log(`El ganador es: ${numeroGanador} ${colorGanador}`);


            const anguloBase = anguloRuleta[numeroGanador];

            const vueltasExtra = 360 * 5;
            rotacionActual = vueltasExtra + anguloBase;

            const ruletaImagen = document.getElementById('ruleta');
            ruletaImagen.style.transform = `rotate(${rotacionActual}deg)`;

            setTimeout(() => {
                alert(`¡El número ganador es ${numeroGanador} ${colorGanador}!`);
                calcularGanancias(numeroGanador, colorGanador);

                const anguloNormalizado = rotacionActual % 360;
    
                ruletaImagen.style.transition = 'none';
                ruletaImagen.style.transform = `rotate(${anguloNormalizado}deg)`;
    
                void ruletaImagen.offsetWidth; 
    
                ruletaImagen.style.transition = 'transform 5s ease-out';
    
                rotacionActual = anguloNormalizado;

            }, 5000);
        }

        window.onload = function() {
            iniciarFaseApuestas();
            
            gameInterval = setInterval(tick, 1000);
        };