
document.addEventListener('DOMContentLoaded', () => {

    let fichaSeleccionada = null; 
    let totalApostado = 0;
    let apuestasEnMesa = [];

 
    const fichasContainer = document.querySelector('.fichasimgs');
    const mesaRuleta = document.getElementById('mesa-ruleta');
    const displayTotalApostado = document.getElementById('total-apostado');
    const btnLimpiar = document.getElementById('btn-limpiar');


    fichasContainer.addEventListener('click', (e) => {
        // Asegurarnos de que clicamos en una imagen de ficha
        if (e.target.tagName === 'IMG') {
            const valor = parseFloat(e.target.dataset.valor);
            const src = e.target.src;

            // Guardar la ficha seleccionada
            fichaSeleccionada = { valor, src };

            // Resaltar la ficha seleccionada
            document.querySelectorAll('.fichasimgs img').forEach(img => {
                img.classList.remove('selected');
            });
            e.target.classList.add('selected');

            // --- ¡Magia para el cursor! ---
            // Cambiamos el cursor de la mesa para que "tenga" la ficha
            // (15 15 es la mitad del tamaño de la ficha en mesa (30px))
            mesaRuleta.style.cursor = `url(${src}) 15 15, auto`;
        }
    });


    mesaRuleta.addEventListener('click', (e) => {
        // 1. Validar si podemos apostar
        if (fichaSeleccionada === null) {
            console.log("No has seleccionado una ficha.");
            return; // No hay ficha seleccionada
        }

        // Esta variable 'estadoActual' viene de tu archivo 'funciones_ruleta.js'
        if (estadoActual !== "APOSTANDO") {
            alert("No se puede apostar ahora. Las apuestas están cerradas.");
            return; // No estamos en fase de apuestas
        }

        // 2. Encontrar el 'slot' donde se hizo clic
        const slotApostado = e.target.closest('.slot-numero, .slot-apuesta');
        
        if (slotApostado) {
            // 3. Crear la imagen de la ficha para ponerla en la mesa
            const fichaImg = document.createElement('img');
            fichaImg.src = fichaSeleccionada.src;
            fichaImg.className = 'ficha-en-mesa'; // Clase CSS que ya tienes
            
            // Guardamos el valor en la ficha por si la queremos borrar individualmente
            fichaImg.dataset.valor = fichaSeleccionada.valor; 

            // 4. Añadir la ficha al slot
            slotApostado.appendChild(fichaImg);

            // 5. Actualizar el total apostado
            totalApostado += fichaSeleccionada.valor;
            displayTotalApostado.textContent = `Total Apostado: $${totalApostado.toFixed(2)}`;

            const tipoApuesta = slotApostado.dataset.numero ? 'numero' : 'zona';
            const valorApostado = slotApostado.dataset.numero || slotApostado.dataset.apuesta;

            // Creamos un objeto con toda la info de la apuesta
            const miApuesta = {
                tipo: tipoApuesta,           // Va a ser 'numero' o 'zona'
                valorEn: valorApostado,    // Va a ser '7', 'ROJO', '1a12', etc.
                monto: fichaSeleccionada.valor,
                elementoFicha: fichaImg      // Guardamos la imagen pa' poder borrarla
            };

            apuestasEnMesa.push(miApuesta);
        }
    });

    window.limpiarApuestas = function() {
        // Quitar todas las fichas del DOM
        apuestasEnMesa.forEach(apuesta => {
        apuesta.elementoFicha.remove(); // Ahora borramos la imagen DENTRO del objeto
    });

        // Limpiar nuestro array de seguimiento
        apuestasEnMesa = [];

        // Resetear el contador
        totalApostado = 0;
        displayTotalApostado.textContent = 'Total Apostado: $0.00';
    }


    btnLimpiar.addEventListener('click', () => {
        if (estadoActual === "APOSTANDO") {
            limpiarApuestas();
        }
    });


    window.deseleccionarFicha = function() {
        fichaSeleccionada = null;
        
        // Quitar resaltado de las fichas
        document.querySelectorAll('.fichasimgs img').forEach(img => {
            img.classList.remove('selected');
        });
        
        // Devolver el cursor a la normalidad
        mesaRuleta.style.cursor = 'pointer';
    }

    function calcularGanancias(numeroGanador, colorGanador) {
        let gananciaTotal = 0;
        console.log("Calculando ganancias con el número:", numeroGanador, colorGanador);
        console.log("Apuestas en la mesa:", apuestasEnMesa);

        apuestasEnMesa.forEach(apuesta => {
            let gano = false;

            if (apuesta.tipo === 'numero') {
   
                if (apuesta.valorEn == numeroGanador) {
                    gano = true;
                    gananciaTotal += apuesta.monto * 35;
                }

            } else if (apuesta.tipo === 'zona') {

                switch (apuesta.valorEn) {
                    case 'ROJO':
                        if (colorGanador === 'rojo') gano = true;
                        break;
                    case 'NEGRO':
                        if (colorGanador === 'negro') gano = true;
                        break;
                    case 'PAR':
                        if (numeroGanador % 2 === 0 && numeroGanador != 0) gano = true;
                        break;
                    case 'IMPAR':
                        if (numeroGanador % 2 !== 0) gano = true;
                        break;
                    case '1-18':
                        if (numeroGanador >= 1 && numeroGanador <= 18) gano = true;
                        break;
                    case '19-36':
                        if (numeroGanador >= 19 && numeroGanador <= 36) gano = true;
                        break;
                    case '1a12':
                        if (numeroGanador >= 1 && numeroGanador <= 12) gano = true;
                        break;
                    case '2a12':
                        if (numeroGanador >= 13 && numeroGanador <= 24) gano = true;
                        break;
                    case '3a12':
                        if (numeroGanador >= 25 && numeroGanador <= 36) gano = true;
                        break;
                }

                if (gano && (apuesta.valorEn === '1a12' || apuesta.valorEn === '2a12' || apuesta.valorEn === '3a12')) {
                    gananciaTotal += apuesta.monto * 3; 
                } else if (gano) {
                    gananciaTotal += apuesta.monto * 2;
                }
            }
        });


        console.log(`Ganaste un total de: $${gananciaTotal}`);
        alert(`Ganaste: $${gananciaTotal.toFixed(2)}`);
        
        //actualizar el saldo del jugador

    }
    window.calcularGanancias = calcularGanancias;
});