<!-- Navbar -->
<nav class="layout-navbar container-xxl navbar navbar-expand-xl
navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
  
  <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
  <nav class="navbar navbar-example navbar-expand-lg ">
                  <div class="container-fluid p-0">
                  <nav class="navbar bg-body-tertiary">
                  <div class="container-fluid">
                    <a class="navbar-brand fw-bold d-flex align-items-center fs-3" href="#">
                    <img src="assets/img/favicon/favicon.ico" alt="Logo" width="40" height="40" class="d-inline-block align-text-top">HOOKING</a>
                  </div>
                  </nav>
                    <button
                      class="navbar-toggler"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#navbar-ex-4"
                    >
                      <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbar-ex-4">
                      <div class="navbar-nav me-auto fs-5">
                        <a class="nav-item nav-link active" href="javascript:void(0)">Home</a>
                        <a class="nav-item nav-link" href="javascript:void(0)">About</a>
                        <a class="nav-item nav-link" href="javascript:void(0)">Contact</a>
                      </div>
                    </div>
                  </div>
                </nav>
    <ul class="navbar-nav flex-row align-items-center ms-auto">
      <!-- User -->
      <li class="nav-item navbar-dropdown dropdown-user dropdown">
        <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
          <div class="avatar avatar-online">
            <img src="assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
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
      </li>
      <!--/ User -->
    </ul>
  </div>
</nav>
<!-- / Navbar -->