function getNav(){
    const nav = document.getElementById('nav');
    const user = JSON.parse(localStorage.getItem('user'));

    nav.innerHTML = `
    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top py-1" style="background-color : rgba(40, 8, 46, 1) !important; height:80px">
        <div class="container-fluid">
            <a class="navbar-brand fs-5" href="index.html"><img src="img/logoCasino.png" style="width:170px; height:150px"></a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin:10px;">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.html">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Deportes</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Juegos
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Instantaneos</a></li>
                                <li><a class="dropdown-item" href="#">Tragamonedas</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">En vivo</a></li>
                            </ul>
                        </li>
                    </ul>
            </div>
            <form class="d-flex" role="search">
                <input id="BusInput" class="form-control form-control-sm me-2" type="search" placeholder="Buscar" aria-label="Buscar" style= "height:50px;align-self:center; background-color:rgba(53, 12, 59, 1); 
                                                                                                                                     border-color:rgba(70, 36, 75, 1);color:#C0C0C0; width:280px">
                <div id="btns-User" class="btns-user-navBar" style="${ user ? 'display:none !important' : 'display:flex'}; height:100%; width:350px;"> 
                    <button type="button" id="btnIni" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#FormIniciarSesion" style="margin:5px;width:50%;height:50px;background-color:#00C8C8;border-color:#00C8C8;">
                        Iniciar sesion
                    </button>
                    <button type="button" id="btnRegi" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#FormRegistrarse" style="margin:5px;height:50px; width:50%;">
                        Registrarse
                    </button>
                </div>
                <div id="userBox" class="align-items-center" style="${user ? 'display:flex' : 'display:none'}">
                    <a href="moduloUsuario.php" style="text-decoration:none;">
                        <span id="navUserName" style="margin:5px;">${user ? user.name : ''}</span>
                        <img id="navUserPhoto" src="${user ? user.photo : ''}" alt="Foto perfil" class="rounded-circle" width="36" height="36">
                    </a>
                    <a href="index.php"><img src="img/cerrarSesion.png" id="logoutBtn" width="25" height="25"></a>
                </div>
            </form>
        </div>
    </nav>
    `;

    const logoutBtn = document.getElementById('logoutBtn');
    if (logoutBtn) {
        logoutBtn.addEventListener('click', () => {
            localStorage.removeItem('user');
            getNav(); // re-render invitado
        });
    }
}

getNav();