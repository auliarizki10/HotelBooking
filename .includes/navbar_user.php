<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white">
  <div class="container-fluid">
    <!-- Logo -->
    <a class="navbar-brand fw-bold d-flex align-items-center fs-3 text-warning" href="#" style="font-family: 'Oswald', sans-serif;">
      <img src="assets/img/favicon/hicon.png" alt="Logo" width="40" height="40" class="d-inline-block align-text-top me-2">
      HOOKING
    </a>

    <!-- Toggler untuk mobile -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain" aria-controls="navbarMain" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar menu -->
    <div class="collapse navbar-collapse" id="navbarMain">
      <div class="navbar-nav me-auto fs-5">
        <a class="nav-item nav-link active text-warning" href="dashboard_user.php">Home</a>
        <a class="nav-item nav-link text-warning" href="rooms.php">Rooms</a>
        <a class="nav-item nav-link text-warning" href="contact.php">Contact</a>
      </div>

      <!-- navbar kanan -->
      <ul class="navbar-nav flex-row align-items-center ms-auto">
        <!-- Notifikasi -->
        <li class="nav-item me-2">
          <a href="rincian_pesanan.php" class="text-decoration-none">
            <button type="button" class="btn rounded-pill btn-warning d-flex justify-content-center align-items-center p-0" style="width: 40px; height: 40px;"> 
              <span class="icon-base bx bx-bell icon-sm"></span> 
            </button>
          </a>
        </li>

        <!-- User -->
        <li class="nav-item dropdown dropdown-user">
          <a class="nav-link dropdown-toggle hide-arrow" href="#" data-bs-toggle="dropdown">
            <div class="avatar avatar-online">
              <img src="assets/img/avatars/pp_user.jpeg" alt class="w-px-40 h-auto rounded-circle" />
            </div>
          </a>
          <ul class="dropdown-menu dropdown-menu-end">
            <li>
              <a class="dropdown-item" href="#">
                <div class="d-flex">
                  <div class="flex-shrink-0 me-3">
                    <div class="avatar avatar-online">
                      <img src="assets/img/avatars/pp_user.jpeg" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </div>
                  <div class="flex-grow-1">
                    <span class="fw-semibold d-block"><?php echo $name; ?></span>
                    <small class="text-muted"><?php echo $role; ?></small>
                  </div>
                </div>
              </a>
            </li>
            <li><div class="dropdown-divider"></div></li>
            <li>
              <a class="dropdown-item" href="auth/logout.php">
                <i class="bx bx-power-off me-2"></i>
                <span class="align-middle">Log Out</span>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- /Navbar -->