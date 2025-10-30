<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casino UDP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"><!---->
    <link rel="stylesheet" href="style.css"><!---->
  </head>

  <body>
    
    <div id="nav"></div><!---->
    <div id="modals"></div> <!---->
    <div id="carouselBonos" class="carousel slide mb-4" data-bs-ride="carousel" style="margin-top: 100px;">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <a href="ruleta.php"><img src="img/apuestaAhora.png" class="d-block w-100" alt="Bono 1" style="object-fit: contain; height: 470px;"></a>
        </div>
        <div class="carousel-item">
          <img src="img/bonusCasino.png" class="d-block w-100" alt="Bono 2" style="object-fit: contain; height: 470px;">
        </div>
        <div class="carousel-item">
          <a href="ruleta.php"><img src="img/casinodeportivo.png" class="d-block w-100" alt="Bono 3" style="object-fit: contain; height: 470px;"></a>
        </div>
      </div>

      <button class="carousel-control-prev" type="button" data-bs-target="#carouselBonos" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselBonos" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Siguiente</span>
      </button>

      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselBonos" data-bs-slide-to="0" class="active" aria-current="true"></button>
        <button type="button" data-bs-target="#carouselBonos" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#carouselBonos" data-bs-slide-to="2"></button>
      </div>
    </div>

    <div class="position-relative text-center mb-4">
      <div class="container my-5">
        <div class="row align-items-center">
          <div class="col-md-6 text-center mb-4 mb-md-0">
            <img src="https://i.pinimg.com/1200x/e7/63/b2/e763b2af92a52a31144bb7f56be95d2a.jpg" alt="Juega Aquí" class="img-fluid rounded shadow mb-3">
            <br>
            <a href="#" class="btn btn-lg text-bg-dark">🎲 ¡Juega Aquí!</a>
          </div>

          <div class="col-md-6 text-center text-white">
            <div class="bg-dark p-4 rounded shadow">
              <h2 class="text-warning mb-4">📊 Estadísticas en Vivo</h2>
              <div class="row">
                <div class="col-4">
                  <h4 class="text-warning">1,245</h4>
                  <p>Jugadores en línea</p>
                </div>
                <div class="col-4">
                  <h4 class="text-warning">$ 52.300.000</h4>
                  <p>Ruleta acumulada</p>
                </div>
                <div class="col-4">
                  <h4 class="text-warning">💰SebastianC </h4>
                  <p>Ganó $1.200.000</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container mt-4">
        <h2 class="text-center mb-4 text-warning">🎰 Juegos Destacados</h2>
        <div class="row mb-5">
          <div class="col-md-4 mb-4">
            <div class="casino-card text-center" style="background-color:#2c002f; padding:20px; border-radius:12px;">
              <img src="img/ruletaEuropea.jpg" class="img-fluid mb-3" alt="Ruleta">
              <h4 class="text-warning">Ruleta</h4>
              <p class="text-light">Disfruta de la auténtica ruleta con probabilidades mejoradas</p>
              <a href="ruleta.php"><button class="text-bg-dark"> Jugar ahora</button></a>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="casino-card text-center" style="background-color:#2c002f; padding:20px; border-radius:12px;">
              <img src="img/blackJack.png" class="img-fluid mb-3" alt="Blackjack">
              <h4 class="text-warning">Blackjack</h4>
              <p class="text-light">Siente la emoción de vencer al crupier en nuestras mesas VIP</p>
              <button class="text-bg-dark"> Jugar ahora</button>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="casino-card text-center" style="background-color:#2c002f; padding:20px; border-radius:12px;">
              <img src="img/megaFortuna.png" class="img-fluid mb-3" alt="Tragaperras">
              <h4 class="text-warning">Mega Fortuna</h4>
              <p class="text-light">Tragaperras con jackpot progresivo. ¡Podrías ganar millones!</p>
              <button class="text-bg-dark"> Jugar ahora</button>
            </div>
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
