<!-- Navbar -->
<nav class="layout-navbar navbar navbar-expand-xl
 align-items-center" id="layout-navbar">
  
  <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
  <nav class="navbar navbar-example navbar-expand-lg">
                  <div class="container-fluid p-0">
                  <nav class="navbar bg-body-tertiary">
                  <div class="container-fluid">
                    <a class="navbar-brand fw-bold d-flex align-items-center fs-3" href="#">
                    <img src="assets/img/favicon/hicon.png" alt="Logo" width="40" height="40" class="d-inline-block align-text-top">HOOKING</a>
                  </div>
                  </nav>
                    
                    <div class="collapse navbar-collapse" id="navbar-ex-4">
                      <div class="navbar-nav me-auto fs-5">
                        <a class="nav-item nav-link active" href="dashboard_user.php">Home</a>
                        <a class="nav-item nav-link" href="rooms.php">Rooms</a>
                        <a class="nav-item nav-link" href="contact.php">Contact</a>
                      </div>
                    </div>
                  </div>
                </nav>
    <ul class="navbar-nav flex-row align-items-center ms-auto">

    <!-- notif -->
    <a href="rincian_pesanan.php">
    <button type="button" class=" nav-item nav-link btn rounded-pill btn-warning d-flex justify-content-center align-items-center p-0 me-1" style="width: 40px; height: 40px;"> 
  <span class="icon-base bx bx-bell icon-sm"></span> 
</button>
</a>
<!-- /notif -->

      <!-- User -->
      <!-- <li class="nav-item navbar-dropdown dropdown-user dropdown">
          <li>
          <a href="auth/logout.php" class="btn btn-warning mb-1 me-4"> 
          <i class="bx bx-power-off me-2"></i>
          <span class="align-middle">Log Out</span>
          </a>
          </li>
      </li> -->

      <li class="nav-item navbar-dropdown dropdown-user dropdown mb-1 me-4">
        <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
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
                    <img src="assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                  </div>
                </div>
                <div class="flex-grow-1">
                  <span class="fw-semibold d-block"><?php echo $name; ?></span>
                  <small class="text-muted"><?php echo $role; ?></small>
                </div>
              </div>
            </a>
          </li>
          <li>
            <div class="dropdown-divider"></div>
          </li>
          <li>
            <a class="dropdown-item" href="auth/logout.php">
              <i class="bx bx-power-off me-2"></i>
              <span class="align-middle">Log Out</span>
            </a>
          </li>
        </ul>
      </l
      <!--/ User -->
    </ul>
  </div>
</nav>
<!-- / Navbar -->
 