<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/argon-dashboard/pages/dashboard.html " target="_blank">
        <img src="img/mobil.png" class="navbar-brand-img h-100" alt="main_logo">
        <!-- <span class="ms-1 font-weight-bold">Argon Dashboard 2</span> -->
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="/">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-chart-line" style="color: #FE000C; font-size: 20px;"></i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item mt-3 d-flex align-items-center">
          <div class="ps-4">
              <i class="fab fa-laravel" style="color: #f4645f;"></i>
          </div>
          <h6 class="ms-2 text-uppercase text-xs font-weight-bolder opacity-6 mb-0">Laravel Examples</h6>
      </li>
      
      <li class="nav-item">
                <a class="nav-link" href="">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-user-shield" style="color: #001450; font-size: 20px;"></i>
                    </div>
                    <span class="nav-link-text ms-1">Profile</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="usermanagement">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="fas fa-users-cog" style="color: #001450; font-size: 20px;"></i>
                    </div>
                    <span class="nav-link-text ms-1">Gestión de usuarios</span>
                </a>
            </li>
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Pages</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-certificate" style="color: #001450; font-size: 20px;"></i>
                    </div>
                    <span class="nav-link-text ms-1">Cursos</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fab fa-wpforms" style="color: #001450; font-size: 20px;"></i>
                    </div>
                    <span class="nav-link-text ms-1">Formulario</span>
                </a>
            </li>
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Account pages</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="../pages/profile.html">
          <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-user" style="color: #001450; font-size: 20px;"></i>
            </div>
            <span class="nav-link-text ms-1">Profile</span>
          </a>
        </li>
        <li class="nav-item">
                <a class="nav-link " href="">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-sign-in-alt" style="color: #FE000C; font-size: 20px;"></i>
                    </div>
                    <span class="nav-link-text ms-1">Iniciar Sesión</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-user-plus" style="color: #001450; font-size: 20px;"></i>
                    </div>
                    <span class="nav-link-text ms-1">Registrarse</span>
                </a>
            </li>
      </ul>
    </div>
    <div class="sidenav-footer mx-3 ">
      <div class="card card-plain shadow-none" id="sidenavCard">
        <!-- <img class="w-50 mx-auto" src="img/illustrations/icon-documentation.svg" alt="sidebar_illustration"> -->
        <div class="card-body text-center p-3 w-100 pt-0">
          <div class="docs-info">
            <!-- <h6 class="mb-0">Need help?</h6> -->
            <!-- <p class="text-xs font-weight-bold mb-0">Please check our docs</p> -->
          </div>
        </div>
      </div>
      <form role="form" method="post" action="" id="logout-form">
        @csrf
        <a href=""
            class="nav-link text-white font-weight-bold custom-link">
            <i class="fa fa-user me-sm-1"></i>
            <span class="d-sm-inline d-none">Cerrar Sesión</span>
        </a>
    </form>
    </div>
  </aside>
  <main class="main-content position-relative border-radius-lg ">
