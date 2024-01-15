<nav>
    <!-- LOGO -->
    <a href="/">
        <img class="logo" src="{{ asset('img/logo.png') }}" alt="Logo da empresa">
    </a>
    <button id="barNavToggle" class="barra-nav-toggle" type="button" onclick="barNavToggle()"><i class="fa fa-bars"></i></button>

    <!-- MENU WEB -->
    <ul>
        <li><a href="/">Dashboard</a></li>
        <!-- CADASTROS -->
        <li>
            <div class="dropdown">
                <a class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Cadastros
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Clientes</a></li>
                    <li><a class="dropdown-item" href="#">Produto</a></li>
                </ul>
            </div>
        </li>
        <!-- ESTOQUE -->
        <li>
            <div class="dropdown">
                <a class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Estoque
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Movimentação</a></li>
                    <li><a class="dropdown-item" href="#">Balanço</a></li>
                </ul>
            </div>
        </li>
        <li>
            <a href="#perfil"><i class="fa fa-user"></i> FULANO </a>
        </li>
    </ul>
</nav>

<!-- MENU MOBILE -->
<ul id="menuMobile" class="menu-mobile">
    <li><a href="/">Dashboard</a></li>
    <!-- CADASTROS -->
    <li>
        <div class="dropdown">
            <a class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Cadastros
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Clientes</a></li>
                <li><a class="dropdown-item" href="#">Produto</a></li>
            </ul>
        </div>
    </li>
    <!-- ESTOQUE -->
    <li>
        <div class="dropdown">
            <a class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Estoque
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Movimentação</a></li>
                <li><a class="dropdown-item" href="#">Balanço</a></li>
            </ul>
        </div>
    </li>
    <li>
        <a href="#perfil"><i class="fa fa-user"></i> FULANO </a>
    </li>
</ul>