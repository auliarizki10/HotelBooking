<!-- Menu -->
<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
  <div class="app-brand demo">
    <a href="./dashboard.php" class="app-brand-link">
      <span class="app-brand-text demo menu-text fw-bolder ms-2 text-uppercase">HOOKING</span>
    </a>
    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
      <i class="bx bx-chevron-left bx-sm align-middle"></i>
    </a>
  </div>
  <div class="menu-inner-shadow"></div>
  <ul class="menu-inner py-1">
    <!-- Dashboard -->
    <li class="menu-item">
      <a href="dashboard.php" class="menu-link">
        <i class="menu-icon tf-icons bx bx-home-circle"></i>
        <div data-i18n="Analytics">Dashboard</div>
      </a>
    </li>
    <!-- Forms & Tables -->
    <li class="menu-header small text-uppercase"><span class="menu-header-text">Tamu</span></li>
    <!-- Forms -->
    <li class="menu-item">
      <a href="data_tamu.php" class="menu-link">
        <i class="menu-icon tf-icons bx bx-detail"></i>
        <div data-i18n="Analytics">Data Tamu</div>
      </a>
    </li>

    <li class="menu-header small text-uppercase"><span class="menu-header-text">Kamar</span></li>

    <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-detail"></i>
        <div data-i18n="Posts">Data Kamar</div>
      </a>

       <ul class="menu-sub">
        <li class="menu-item">
          <a href="data_kamar.php" class="menu-link">
            <div data-i18n="Basic Inputs">Kamar</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="kategori.php" class="menu-link">
            <div data-i18n="Input groups">Kategori</div>
          </a>
        </li>
      </ul>
    </li>


  </ul>
</aside>
<!-- / Menu -->