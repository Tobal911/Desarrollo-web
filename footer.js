getFooter();

function getFooter(){
    const Foot = document.getElementById('Footer');

    Foot.innerHTML = `
    <footer class="bg-dark text-white mt-auto" style="background-color: rgb(50, 50, 60) !important; margin-bottom:0px;">
      <div class="container py-4">
        <div class="row">
          <div class="col-md-3 mb-3">
            <h5 class="fw-bold">Contáctanos</h5>
            <ul class="list-unstyled">
              <li>📧 soporte@casinoudp.com</li>
              <li>📞 +56 9 1234 5678</li>
              <li>📍 Santiago, Chile</li>
            </ul>
          </div>

          <div class="col-md-3 mb-3">
            <h5 class="fw-bold">Preguntas Frecuentes</h5>
            <ul class="list-unstyled">
              <li><a href="#" class="text-white text-decoration-none">¿Cómo registrarse?</a></li>
              <li><a href="#" class="text-white text-decoration-none">Métodos de pago</a></li>
              <li><a href="#" class="text-white text-decoration-none">Bonos y promociones</a></li>
            </ul>
          </div>

          <div class="col-md-3 mb-3">
            <h5 class="fw-bold">Síguenos</h5>
            <ul class="list-unstyled">
              <li>Facebook → CasinoUDP</li>
              <li>Instagram → Casino_udp</li>
              <li>Twitter → CasinoooUDP</li>
            </ul>
          </div>

          <div class="col-md-3 mb-3">
            <h5 class="fw-bold">Desarrolladores</h5>
            <ul class="list-unstyled">
              <li> Valentina Mella</li>
              <li>Renato Riveros</li>
              <li> Cristobal Gonzalez</li>
              <li>Valentina Diaz</li>
            </ul>
          </div>
        </div>
        <hr class="border-light">
        <p class="text-center mb-0">&copy; 2025 CASINOUDP - Todos los derechos reservados 🎲</p>
      </div>
    </footer>
    `;
}