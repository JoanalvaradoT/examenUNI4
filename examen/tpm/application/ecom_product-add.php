<!doctype html>
<html lang="en">
  <!-- [Head] start -->

  <head>
    <title>Add New Product | Light Able Admin & Dashboard Template</title>
    <!-- [Meta] -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="description"
      content="Light Able admin and dashboard template offer a variety of UI elements and pages, ensuring your admin panel is both fast and effective."
    />
    <meta name="author" content="phoenixcoded" />

    <!-- [Favicon] icon -->
    <link rel="icon" href="../assets/images/favicon.svg" type="image/x-icon" />
 <!-- [Google Font : Public Sans] icon -->
<link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@400;500;600;700&amp;display=swap" rel="stylesheet" />
<!-- [phosphor Icons] https://phosphoricons.com/ -->
<link rel="stylesheet" href="../assets/fonts/phosphor/duotone/style.css" />
<!-- [Tabler Icons] https://tablericons.com -->
<link rel="stylesheet" href="../assets/fonts/tabler-icons.min.css" />
<!-- [Feather Icons] https://feathericons.com -->
<link rel="stylesheet" href="../assets/fonts/feather.css" />
<!-- [Font Awesome Icons] https://fontawesome.com/icons -->
<link rel="stylesheet" href="../assets/fonts/fontawesome.css" />
<!-- [Material Icons] https://fonts.google.com/icons -->
<link rel="stylesheet" href="../assets/fonts/material.css" />
<!-- [Template CSS Files] -->
<link rel="stylesheet" href="../assets/css/style.css" id="main-style-link" />
<link rel="stylesheet" href="../assets/css/style-preset.css" />

  </head>
  <!-- [Head] end -->
  <!-- [Body] Start -->

  <body data-pc-preset="preset-1" data-pc-sidebar-theme="light" data-pc-sidebar-caption="true" data-pc-direction="ltr" data-pc-theme="light">
    <!-- [ Pre-loader ] start -->
<div class="loader-bg">
  <div class="loader-track">
    <div class="loader-fill"></div>
  </div>
</div>
<!-- [ Pre-loader ] End -->
 <!-- [ Sidebar Menu ] start -->
 <nav class="pc-sidebar">
  <div class="navbar-wrapper">
    <div class="m-header">
      <a href="../dashboard/index.html" class="b-brand text-primary">
        <!-- ========   Change your logo from here   ============ -->
        <img src="../assets/images/logo-dark.svg" alt="logo image" class="logo-lg" />
        <span class="badge bg-brand-color-2 rounded-pill ms-2 theme-version">v1.2.0</span>
      </a>
    </div>
    <div class="navbar-content">
      <ul class="pc-navbar">
      
       
        <li class="pc-item pc-hasmenu">
          <a href="#!" class="pc-link">
            <span class="pc-micon">
              <i class="ph-duotone ph-shopping-cart"></i>
            </span>
            <span class="pc-mtext">Cliente</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span
          ></a>
          <ul class="pc-submenu">
            <li class="pc-item"><a class="pc-link" href="../application/client_alta.php">cliente</a></li>
            <li class="pc-item"><a class="pc-link" href="../application/client_list.php">Lista De Clientes</a></li>
          </ul>
        </li>
      
     
       
        <li class="pc-item pc-hasmenu">
          <a href="#!" class="pc-link">
            <span class="pc-micon">
              <i class="ph-duotone ph-shopping-cart"></i>
            </span>
            <span class="pc-mtext">Producto</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span
          ></a>
          <ul class="pc-submenu">
            <li class="pc-item"><a class="pc-link" href="../application/ecom_product.php">Producto</a></li>
          </ul>
        </li>

        <li class="pc-item pc-hasmenu">
          <a href="#!" class="pc-link">
            <span class="pc-micon">
              <i class="ph-duotone ph-user-circle"></i>
            </span>
            <span class="pc-mtext">Usuarios</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span
          ></a>
          <ul class="pc-submenu">
            <li class="pc-item"><a class="pc-link" href="../application/alta_usuarios.php">Usuarios</a></li>
            <li class="pc-item"><a class="pc-link" href="../application/lista_usuarios.php">Lista de usuarios</a></li>
          </ul>
        </li>

        <li class="pc-item pc-hasmenu">
          <a href="#!" class="pc-link">
            <span class="pc-micon">
              <i class="ph-duotone ph-user-circle"></i>
            </span>
            <span class="pc-mtext">Cupones</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span
          ></a>
          <ul class="pc-submenu">
            <li class="pc-item"><a class="pc-link" href="../application/alta_cupones.php">cupones</a></li>
            <li class="pc-item"><a class="pc-link" href="../application/consulta_cupones.php">consulta de cupones</a></li>
          </ul>
        </li>


        <li class="pc-item pc-hasmenu">
          <a href="#!" class="pc-link">
            <span class="pc-micon">
              <i class="ph-duotone ph-user-circle"></i>
            </span>
            <span class="pc-mtext">Catalogos</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span
          ></a>
          <ul class="pc-submenu">
            <li class="pc-item"><a class="pc-link" href="../application/crud_categorias.php">CRUD de categorias</a></li>
            <li class="pc-item"><a class="pc-link" href="../application/crud_marcas.php">CRUD de marcas</a></li>
            <li class="pc-item"><a class="pc-link" href="../application/crud_tags.php">CRUD de tags</a></li>
          </ul>
        </li>
        

        <li class="pc-item pc-hasmenu">
          <a href="#!" class="pc-link">
            <span class="pc-micon">
              <i class="ph-duotone ph-user-circle"></i>
            </span>
            <span class="pc-mtext">Ordenes</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span
          ></a>
          <ul class="pc-submenu">
            <li class="pc-item"><a class="pc-link" href="../application/alta_ordenes.php">ordenes</a></li>
          </ul>
        </li>

      
        <li class="pc-item pc-hasmenu">
          <a href="#!" class="pc-link">
            <span class="pc-micon">
              <i class="ph-duotone ph-shield-checkered"></i>
            </span>
            <span class="pc-mtext">Authentication</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span
          ></a>
          <ul class="pc-submenu">
            <li class="pc-item pc-hasmenu">
              <a href="#!" class="pc-link"
                >Authentication 1<span class="pc-arrow"><i data-feather="chevron-right"></i></span
              ></a>
              <ul class="pc-submenu">
                <li class="pc-item"><a class="pc-link" target="_blank" href="../pages/login-v1.html">Login</a></li>
              </ul>
            </li>
            
          </ul>
        </li>
      </ul>
     
    </div>
    <div class="card pc-user-card">
      <div class="card-body">
        <div class="d-flex align-items-center">
          <div class="flex-shrink-0">
            <img src="../assets/images/user/avatar-1.jpg" alt="user-image" class="user-avtar wid-45 rounded-circle" />
          </div>
          <div class="flex-grow-1 ms-3">
            <div class="dropdown">
              <a href="#" class="arrow-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="0,20">
                <div class="d-flex align-items-center">
                  <div class="flex-grow-1 me-2">
                    <h6 class="mb-0">Jonh Smith</h6>
                    <small>Administrator</small>
                  </div>
                  <div class="flex-shrink-0">
                    <div class="btn btn-icon btn-link-secondary avtar">
                      <i class="ph-duotone ph-windows-logo"></i>
                    </div>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu">
                <ul>
                  <li>
                    <a class="pc-user-links">
                      <i class="ph-duotone ph-user"></i>
                      <span>My Account</span>
                    </a>
                  </li>
                  <li>
                    <a class="pc-user-links">
                      <i class="ph-duotone ph-power"></i>
                      <span>Logout</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</nav>
<!-- [ Sidebar Menu ] end -->
 <!-- [ Header Topbar ] start -->
<header class="pc-header">
  <div class="header-wrapper"> <!-- [Mobile Media Block] start -->
<div class="me-auto pc-mob-drp">
  <ul class="list-unstyled">
    <!-- ======= Menu collapse Icon ===== -->
    <li class="pc-h-item pc-sidebar-collapse">
      <a href="#" class="pc-head-link ms-0" id="sidebar-hide">
        <i class="ti ti-menu-2"></i>
      </a>
    </li>
    <li class="pc-h-item pc-sidebar-popup">
      <a href="#" class="pc-head-link ms-0" id="mobile-collapse">
        <i class="ti ti-menu-2"></i>
      </a>
    </li>
    <li class="dropdown pc-h-item d-inline-flex d-md-none">
      <a
        class="pc-head-link dropdown-toggle arrow-none m-0"
        data-bs-toggle="dropdown"
        href="#"
        role="button"
        aria-haspopup="false"
        aria-expanded="false"
      >
        <i class="ph-duotone ph-magnifying-glass"></i>
      </a>
      <div class="dropdown-menu pc-h-dropdown drp-search">
        <form class="px-3">
          <div class="mb-0 d-flex align-items-center">
            <input type="search" class="form-control border-0 shadow-none" placeholder="Search..." />
            <button class="btn btn-light-secondary btn-search">Search</button>
          </div>
        </form>
      </div>
    </li>
    <li class="pc-h-item d-none d-md-inline-flex">
      <form class="form-search">
        <i class="ph-duotone ph-magnifying-glass icon-search"></i>
        <input type="search" class="form-control" placeholder="Search..." />

        <button class="btn btn-search" style="padding: 0"><kbd>ctrl+k</kbd></button>
      </form>
    </li>
  </ul>
</div>
<!-- [Mobile Media Block end] -->
<div class="ms-auto">
  <ul class="list-unstyled">
    <li class="dropdown pc-h-item d-none d-md-inline-flex">
      <a
        class="pc-head-link dropdown-toggle arrow-none me-0"
        data-bs-toggle="dropdown"
        href="#"
        role="button"
        aria-haspopup="false"
        aria-expanded="false"
      >
        <i class="ph-duotone ph-circles-four"></i>
      </a>
      <div class="dropdown-menu dropdown-qta dropdown-menu-end pc-h-dropdown">
        <div class="overflow-hidden">
          <div class="qta-links m-n1">
            <a href="#!" class="dropdown-item">
              <i class="ph-duotone ph-shopping-cart"></i>
              <span>E-commerce</span>
            </a>
            <a href="#!" class="dropdown-item">
              <i class="ph-duotone ph-lifebuoy"></i>
              <span>Helpdesk</span>
            </a>
            <a href="#!" class="dropdown-item">
              <i class="ph-duotone ph-scroll"></i>
              <span>Invoice</span>
            </a>
            <a href="#!" class="dropdown-item">
              <i class="ph-duotone ph-books"></i>
              <span>Online Courses</span>
            </a>
            <a href="#!" class="dropdown-item">
              <i class="ph-duotone ph-envelope-open"></i>
              <span>Mail</span>
            </a>
            <a href="#!" class="dropdown-item">
              <i class="ph-duotone ph-identification-badge"></i>
              <span>Membership</span>
            </a>
            <a href="#!" class="dropdown-item">
              <i class="ph-duotone ph-chats-circle"></i>
              <span>Chat</span>
            </a>
            <a href="#!" class="dropdown-item">
              <i class="ph-duotone ph-currency-circle-dollar"></i>
              <span>Plans</span>
            </a>
            <a href="#!" class="dropdown-item">
              <i class="ph-duotone ph-user-circle"></i>
              <span>Users</span>
            </a>
          </div>
        </div>
      </div>
    </li>
    <li class="dropdown pc-h-item">
      <a
        class="pc-head-link dropdown-toggle arrow-none me-0"
        data-bs-toggle="dropdown"
        href="#"
        role="button"
        aria-haspopup="false"
        aria-expanded="false"
      >
        <i class="ph-duotone ph-sun-dim"></i>
      </a>
      <div class="dropdown-menu dropdown-menu-end pc-h-dropdown">
        <a href="#!" class="dropdown-item" onclick="layout_change('dark')">
          <i class="ph-duotone ph-moon"></i>
          <span>Dark</span>
        </a>
        <a href="#!" class="dropdown-item" onclick="layout_change('light')">
          <i class="ph-duotone ph-sun-dim"></i>
          <span>Light</span>
        </a>
        <a href="#!" class="dropdown-item" onclick="layout_change_default()">
          <i class="ph-duotone ph-cpu"></i>
          <span>Default</span>
        </a>
      </div>
    </li>
    <li class="pc-h-item">
      <a class="pc-head-link pct-c-btn" href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_pc_layout">
        <i class="ph-duotone ph-gear-six"></i>
      </a>
    </li>
    <li class="dropdown pc-h-item">
      <a
        class="pc-head-link dropdown-toggle arrow-none me-0"
        data-bs-toggle="dropdown"
        href="#"
        role="button"
        aria-haspopup="false"
        aria-expanded="false"
      >
        <i class="ph-duotone ph-diamonds-four"></i>
      </a>
      <div class="dropdown-menu dropdown-menu-end pc-h-dropdown">
        <a href="#!" class="dropdown-item">
          <i class="ph-duotone ph-user"></i>
          <span>My Account</span>
        </a>
        <a href="#!" class="dropdown-item">
          <i class="ph-duotone ph-gear"></i>
          <span>Settings</span>
        </a>
        <a href="#!" class="dropdown-item">
          <i class="ph-duotone ph-lifebuoy"></i>
          <span>Support</span>
        </a>
        <a href="#!" class="dropdown-item">
          <i class="ph-duotone ph-lock-key"></i>
          <span>Lock Screen</span>
        </a>
        <a href="#!" class="dropdown-item">
          <i class="ph-duotone ph-power"></i>
          <span>Logout</span>
        </a>
      </div>
    </li>
    <li class="dropdown pc-h-item">
      <a
        class="pc-head-link dropdown-toggle arrow-none me-0"
        data-bs-toggle="dropdown"
        href="#"
        role="button"
        aria-haspopup="false"
        aria-expanded="false"
      >
        <i class="ph-duotone ph-bell"></i>
        <span class="badge bg-success pc-h-badge">3</span>
      </a>
      <div class="dropdown-menu dropdown-notification dropdown-menu-end pc-h-dropdown">
        <div class="dropdown-header d-flex align-items-center justify-content-between">
          <h5 class="m-0">Notifications</h5>
          <ul class="list-inline ms-auto mb-0">
            <li class="list-inline-item">
              <a href="mail.html" class="avtar avtar-s btn-link-hover-primary">
                <i class="ti ti-link f-18"></i>
              </a>
            </li>
          </ul>
        </div>
        <div class="dropdown-body text-wrap header-notification-scroll position-relative" style="max-height: calc(100vh - 235px)">
          <ul class="list-group list-group-flush">
            <li class="list-group-item">
              <p class="text-span">Today</p>
              <div class="d-flex">
                <div class="flex-shrink-0">
                  <img src="../assets/images/user/avatar-2.jpg" alt="user-image" class="user-avtar avtar avtar-s" />
                </div>
                <div class="flex-grow-1 ms-3">
                  <div class="d-flex">
                    <div class="flex-grow-1 me-3 position-relative">
                      <h6 class="mb-0 text-truncate">Keefe Bond added new tags to 💪 Design system</h6>
                    </div>
                    <div class="flex-shrink-0">
                      <span class="text-sm">2 min ago</span>
                    </div>
                  </div>
                  <p class="position-relative mt-1 mb-2"
                    ><br /><span class="text-truncate"
                      >Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</span
                    ></p
                  >
                  <span class="badge bg-light-primary border border-primary me-1 mt-1">web design</span>
                  <span class="badge bg-light-warning border border-warning me-1 mt-1">Dashobard</span>
                  <span class="badge bg-light-success border border-success me-1 mt-1">Design System</span>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="d-flex">
                <div class="flex-shrink-0">
                  <div class="avtar avtar-s bg-light-primary">
                    <i class="ph-duotone ph-chats-teardrop f-18"></i>
                  </div>
                </div>
                <div class="flex-grow-1 ms-3">
                  <div class="d-flex">
                    <div class="flex-grow-1 me-3 position-relative">
                      <h6 class="mb-0 text-truncate">Message</h6>
                    </div>
                    <div class="flex-shrink-0">
                      <span class="text-sm">1 hour ago</span>
                    </div>
                  </div>
                  <p class="position-relative mt-1 mb-2"
                    ><br /><span class="text-truncate"
                      >Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</span
                    ></p
                  >
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <p class="text-span">Yesterday</p>
              <div class="d-flex">
                <div class="flex-shrink-0">
                  <div class="avtar avtar-s bg-light-danger">
                    <i class="ph-duotone ph-user f-18"></i>
                  </div>
                </div>
                <div class="flex-grow-1 ms-3">
                  <div class="d-flex">
                    <div class="flex-grow-1 me-3 position-relative">
                      <h6 class="mb-0 text-truncate">Challenge invitation</h6>
                    </div>
                    <div class="flex-shrink-0">
                      <span class="text-sm">12 hour ago</span>
                    </div>
                  </div>
                  <p class="position-relative mt-1 mb-2"
                    ><br /><span class="text-truncate"><strong> Jonny aber </strong> invites to join the challenge</span></p
                  >
                  <button class="btn btn-sm rounded-pill btn-outline-secondary me-2">Decline</button>
                  <button class="btn btn-sm rounded-pill btn-primary">Accept</button>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="d-flex">
                <div class="flex-shrink-0">
                  <div class="avtar avtar-s bg-light-info">
                    <i class="ph-duotone ph-notebook f-18"></i>
                  </div>
                </div>
                <div class="flex-grow-1 ms-3">
                  <div class="d-flex">
                    <div class="flex-grow-1 me-3 position-relative">
                      <h6 class="mb-0 text-truncate">Forms</h6>
                    </div>
                    <div class="flex-shrink-0">
                      <span class="text-sm">2 hour ago</span>
                    </div>
                  </div>
                  <p class="position-relative mt-1 mb-2"
                    >Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
                    dummy text ever since the 1500s.</p
                  >
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="d-flex">
                <div class="flex-shrink-0">
                  <img src="../assets/images/user/avatar-2.jpg" alt="user-image" class="user-avtar avtar avtar-s" />
                </div>
                <div class="flex-grow-1 ms-3">
                  <div class="d-flex">
                    <div class="flex-grow-1 me-3 position-relative">
                      <h6 class="mb-0 text-truncate">Keefe Bond added new tags to 💪 Design system</h6>
                    </div>
                    <div class="flex-shrink-0">
                      <span class="text-sm">2 min ago</span>
                    </div>
                  </div>
                  <p class="position-relative mt-1 mb-2"
                    ><br /><span class="text-truncate"
                      >Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</span
                    ></p
                  >
                  <button class="btn btn-sm rounded-pill btn-outline-secondary me-2">Decline</button>
                  <button class="btn btn-sm rounded-pill btn-primary">Accept</button>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="d-flex">
                <div class="flex-shrink-0">
                  <div class="avtar avtar-s bg-light-success">
                    <i class="ph-duotone ph-shield-checkered f-18"></i>
                  </div>
                </div>
                <div class="flex-grow-1 ms-3">
                  <div class="d-flex">
                    <div class="flex-grow-1 me-3 position-relative">
                      <h6 class="mb-0 text-truncate">Security</h6>
                    </div>
                    <div class="flex-shrink-0">
                      <span class="text-sm">5 hour ago</span>
                    </div>
                  </div>
                  <p class="position-relative mt-1 mb-2"
                    >Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
                    dummy text ever since the 1500s.</p
                  >
                </div>
              </div>
            </li>
          </ul>
        </div>
        <div class="dropdown-footer">
          <div class="row g-3">
            <div class="col-6">
              <div class="d-grid"><button class="btn btn-primary">Archive all</button></div>
            </div>
            <div class="col-6">
              <div class="d-grid"><button class="btn btn-outline-secondary">Mark all as read</button></div>
            </div>
          </div>
        </div>
      </div>
    </li>
    <li class="dropdown pc-h-item header-user-profile">
      <a
        class="pc-head-link dropdown-toggle arrow-none me-0"
        data-bs-toggle="dropdown"
        href="#"
        role="button"
        aria-haspopup="false"
        data-bs-auto-close="outside"
        aria-expanded="false"
      >
        <img src="../assets/images/user/avatar-2.jpg" alt="user-image" class="user-avtar" />
      </a>
      <div class="dropdown-menu dropdown-user-profile dropdown-menu-end pc-h-dropdown">
        <div class="dropdown-header d-flex align-items-center justify-content-between">
          <h5 class="m-0">Profile</h5>
        </div>
        <div class="dropdown-body">
          <div class="profile-notification-scroll position-relative" style="max-height: calc(100vh - 225px)">
            <ul class="list-group list-group-flush w-100">
              <li class="list-group-item">
                <div class="d-flex align-items-center">
                  <div class="flex-shrink-0">
                    <img src="../assets/images/user/avatar-2.jpg" alt="user-image" class="wid-50 rounded-circle" />
                  </div>
                  <div class="flex-grow-1 mx-3">
                    <h5 class="mb-0">Carson Darrin</h5>
                    <a class="link-primary" href="mailto:carson.darrin@company.io">carson.darrin@company.io</a>
                  </div>
                  <span class="badge bg-primary">PRO</span>
                </div>
              </li>
              <li class="list-group-item">
                <a href="#" class="dropdown-item">
                  <span class="d-flex align-items-center">
                    <i class="ph-duotone ph-key"></i>
                    <span>Change password</span>
                  </span>
                </a>
                <a href="#" class="dropdown-item">
                  <span class="d-flex align-items-center">
                    <i class="ph-duotone ph-envelope-simple"></i>
                    <span>Recently mail</span>
                  </span>
                  <div class="user-group">
                    <img src="../assets/images/user/avatar-1.jpg" alt="user-image" class="avtar" />
                    <img src="../assets/images/user/avatar-2.jpg" alt="user-image" class="avtar" />
                    <img src="../assets/images/user/avatar-3.jpg" alt="user-image" class="avtar" />
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <span class="d-flex align-items-center">
                    <i class="ph-duotone ph-calendar-blank"></i>
                    <span>Schedule meetings</span>
                  </span>
                </a>
              </li>
              <li class="list-group-item">
                <a href="#" class="dropdown-item">
                  <span class="d-flex align-items-center">
                    <i class="ph-duotone ph-heart"></i>
                    <span>Favorite</span>
                  </span>
                </a>
                <a href="#" class="dropdown-item">
                  <span class="d-flex align-items-center">
                    <i class="ph-duotone ph-arrow-circle-down"></i>
                    <span>Download</span>
                  </span>
                  <span class="avtar avtar-xs rounded-circle bg-danger text-white">10</span>
                </a>
              </li>
              <li class="list-group-item">
                <div class="dropdown-item">
                  <span class="d-flex align-items-center">
                    <i class="ph-duotone ph-globe-hemisphere-west"></i>
                    <span>Languages</span>
                  </span>
                  <span class="flex-shrink-0">
                    <select class="form-select bg-transparent form-select-sm border-0 shadow-none">
                      <option value="1">English</option>
                      <option value="2">Spain</option>
                      <option value="3">Arbic</option>
                    </select>
                  </span>
                </div>
                <a href="#" class="dropdown-item">
                  <span class="d-flex align-items-center">
                    <i class="ph-duotone ph-flag"></i>
                    <span>Country</span>
                  </span>
                </a>
                <div class="dropdown-item">
                  <span class="d-flex align-items-center">
                    <i class="ph-duotone ph-moon"></i>
                    <span>Dark mode</span>
                  </span>
                  <div class="form-check form-switch form-check-reverse m-0">
                    <input class="form-check-input f-18" id="dark-mode" type="checkbox" onclick="dark_mode()" role="switch" />
                  </div>
                </div>
              </li>
              <li class="list-group-item">
                <a href="#" class="dropdown-item">
                  <span class="d-flex align-items-center">
                    <i class="ph-duotone ph-user-circle"></i>
                    <span>Edit profile</span>
                  </span>
                </a>
                <a href="#" class="dropdown-item">
                  <span class="d-flex align-items-center">
                    <i class="ph-duotone ph-star text-warning"></i>
                    <span>Upgrade account</span>
                    <span class="badge bg-light-success border border-success ms-2">NEW</span>
                  </span>
                </a>
                <a href="#" class="dropdown-item">
                  <span class="d-flex align-items-center">
                    <i class="ph-duotone ph-bell"></i>
                    <span>Notifications</span>
                  </span>
                </a>
                <a href="#" class="dropdown-item">
                  <span class="d-flex align-items-center">
                    <i class="ph-duotone ph-gear-six"></i>
                    <span>Settings</span>
                  </span>
                </a>
              </li>
              <li class="list-group-item">
                <a href="#" class="dropdown-item">
                  <span class="d-flex align-items-center">
                    <i class="ph-duotone ph-plus-circle"></i>
                    <span>Add account</span>
                  </span>
                </a>
                <a href="#" class="dropdown-item">
                  <span class="d-flex align-items-center">
                    <i class="ph-duotone ph-power"></i>
                    <span>Logout</span>
                  </span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </li>
  </ul>
</div>
 </div>
</header>
<!-- [ Header ] end -->



    <!-- [ Main Content ] start -->
    <div class="pc-container">
      <div class="pc-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
          <div class="page-block">
            <div class="row align-items-center">
              <div class="col-md-12">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item"><a href="../dashboard/index.html">Home</a></li>
                  <li class="breadcrumb-item"><a href="javascript: void(0)">E-commerce</a></li>
                  <li class="breadcrumb-item" aria-current="page">Add New Product</li>
                </ul>
              </div>
              <div class="col-md-12">
                <div class="page-header-title">
                  <h2 class="mb-0">Add New Product</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- [ breadcrumb ] end -->

        <!-- [ Main Content ] start -->
        <div class="row">
          <!-- [ sample-page ] start -->
          <div class="col-xl-6">
            <div class="card">
              <div class="card-header">
                <h5>Product description</h5>
              </div>
              <div class="card-body">
                <div class="mb-3">
                  <label class="form-label">Product Name</label>
                  <input type="text" class="form-control" placeholder="Enter Product Name" />
                </div>
                <div class="mb-3">
                  <label class="form-label">Category</label>
                  <select class="form-select">
                    <option>Sneakers</option>
                    <option>Category 1</option>
                    <option>Category 2</option>
                    <option>Category 3</option>
                    <option>Category 4</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label class="form-label">Brand</label>
                  <select class="form-select">
                    <option>Nike</option>
                    <option>Category 1</option>
                    <option>Category 2</option>
                    <option>Category 3</option>
                    <option>Category 4</option>
                  </select>
                </div>
                <div class="mb-0">
                  <label class="form-label">Product Description</label>
                  <textarea class="form-control" placeholder="Enter Product Description"></textarea>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header">
                <h5>Pricing</h5>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="form-label d-flex align-items-center"
                        >Price <i class="ph-duotone ph-info ms-1" data-bs-toggle="tooltip" data-bs-title="Price"></i
                      ></label>
                      <div class="input-group mb-3">
                        <span class="input-group-text">$</span>
                        <input type="text" class="form-control" placeholder="Price" />
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="form-label d-flex align-items-center"
                        >Compare at price <i class="ph-duotone ph-info ms-1" data-bs-toggle="tooltip" data-bs-title="Compare at price"></i
                      ></label>
                      <div class="input-group mb-3">
                        <span class="input-group-text">$</span>
                        <input type="text" class="form-control" placeholder="Compare at price" />
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-check mb-3">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckCheckedtax" checked />
                      <label class="form-check-label" for="flexCheckCheckedtax"> Including all tax </label>
                    </div>
                    <div class="mb-0">
                      <label class="form-label d-flex align-items-center"
                        >Cost per items <i class="ph-duotone ph-info ms-1" data-bs-toggle="tooltip" data-bs-title="Cost per items"></i
                      ></label>
                      <div class="input-group mb-0">
                        <span class="input-group-text">$</span>
                        <input type="text" class="form-control" placeholder="Cost per items" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header">
                <h5>Inventory</h5>
              </div>
              <div class="card-body">
                <div class="mb-3">
                  <label class="form-label">Quantity</label>
                  <input type="text" class="form-control" placeholder="Enter Quantity" />
                </div>
                <div class="mb-0">
                  <label class="form-label">SKU <span class="text-sm text-muted">(optional)</span></label>
                  <input type="text" class="form-control" placeholder="Enter SKU" />
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-6">
            <div class="card">
              <div class="card-header">
                <h5>Selling type</h5>
              </div>
              <div class="card-body">
                <div class="form-check mb-2">
                  <input class="form-check-input" type="checkbox" id="Checkselling1" checked />
                  <label class="form-check-label" for="Checkselling1"> In-store selling only </label>
                </div>
                <div class="form-check mb-2">
                  <input class="form-check-input" type="checkbox" id="Checkselling2" />
                  <label class="form-check-label" for="Checkselling2"> Online Selling only </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="Checkselling3" />
                  <label class="form-check-label" for="Checkselling3"> Available both in-store and online </label>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header">
                <h5>Variant</h5>
              </div>
              <div class="card-body">
                <input
                  class="form-control"
                  id="choices-text-remove-button"
                  type="text"
                  value="Product variants,variants 2"
                  placeholder="Enter something"
                />
              </div>
            </div>
            <div class="card">
              <div class="card-header">
                <h5>Select size</h5>
              </div>
              <div class="card-body">
                <div class="row g-2">
                  <div class="col-auto">
                    <input type="radio" class="btn-check" id="btnrdolite1" name="btn_radio2" checked="" />
                    <label class="btn btn-sm btn-light-primary" for="btnrdolite1">34</label>
                  </div>
                  <div class="col-auto">
                    <input type="radio" class="btn-check" id="btnrdolite2" name="btn_radio2" />
                    <label class="btn btn-sm btn-light-primary" for="btnrdolite2">36</label>
                  </div>
                  <div class="col-auto">
                    <input type="radio" class="btn-check" id="btnrdolite3" name="btn_radio2" />
                    <label class="btn btn-sm btn-light-primary" for="btnrdolite3">38</label>
                  </div>
                  <div class="col-auto">
                    <input type="radio" class="btn-check" id="btnrdolite4" name="btn_radio2" />
                    <label class="btn btn-sm btn-light-primary" for="btnrdolite4">40</label>
                  </div>
                  <div class="col-auto">
                    <input type="radio" class="btn-check" id="btnrdolite5" name="btn_radio2" />
                    <label class="btn btn-sm btn-light-primary" for="btnrdolite5">42</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header">
                <h5>Product image</h5>
              </div>
              <div class="card-body">
                <div class="mb-0">
                  <p><span class="text-danger">*</span> Recommended resolution is 640*640 with file size</p>
                  <label class="btn btn-outline-secondary" for="flupld"><i class="ti ti-upload me-2"></i> Click to Upload</label>
                  <input type="file" id="flupld" class="d-none" />
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header">
                <h5>Shipping and Delivery</h5>
              </div>
              <div class="card-body">
                <div class="mb-0">
                  <label class="form-label">Items Weight</label>
                  <select class="form-select">
                    <option>12.00</option>
                    <option>Category 1</option>
                    <option>Category 2</option>
                    <option>Category 3</option>
                    <option>Category 4</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header">
                <h5>Status</h5>
              </div>
              <div class="card-body">
                <div class="row g-2">
                  <div class="col-auto">
                    <input type="radio" class="btn-check" id="btnrdolite11" name="btn_radio12" checked="" />
                    <label class="btn btn-sm btn-light-success" for="btnrdolite11">Active</label>
                  </div>
                  <div class="col-auto">
                    <input type="radio" class="btn-check" id="btnrdolite12" name="btn_radio12" />
                    <label class="btn btn-sm btn-light-primary" for="btnrdolite12">Processing</label>
                  </div>
                  <div class="col-auto">
                    <input type="radio" class="btn-check" id="btnrdolite13" name="btn_radio12" />
                    <label class="btn btn-sm btn-light-danger" for="btnrdolite13">Close</label>
                  </div>
                  <div class="col-auto">
                    <input type="radio" class="btn-check" id="btnrdolite14" name="btn_radio12" />
                    <label class="btn btn-sm btn-light-warning" for="btnrdolite14">Pending</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-12">
            <div class="card">
              <div class="card-body text-end btn-page">
                <button class="btn btn-primary mb-0">Save product</button>
                <button class="btn btn-outline-secondary mb-0">Reset</button>
              </div>
            </div>
          </div>
          <!-- [ sample-page ] end -->
        </div>
        <!-- [ Main Content ] end -->
      </div>
    </div>
    <!-- [ Main Content ] end -->
    <footer class="pc-footer">
      <div class="footer-wrapper container-fluid">
        <div class="row">
          <div class="col-sm-6 my-1">
            <p class="m-0">Made with &#9829; by Team <a href="https://themeforest.net/user/phoenixcoded" target="_blank"> Phoenixcoded</a></p>
          </div>
          <div class="col-sm-6 ms-auto my-1">
            <ul class="list-inline footer-link mb-0 justify-content-sm-end d-flex">
              <li class="list-inline-item"><a href="../index.html">Home</a></li>
              <li class="list-inline-item"><a href="https://pcoded.gitbook.io/light-able/" target="_blank">Documentation</a></li>
              <li class="list-inline-item"><a href="https://phoenixcoded.support-hub.io/" target="_blank">Support</a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
 <!-- Required Js -->
<script src="../assets/js/plugins/popper.min.js"></script>
<script src="../assets/js/plugins/simplebar.min.js"></script>
<script src="../assets/js/plugins/bootstrap.min.js"></script>
<script src="../assets/js/fonts/custom-font.js"></script>
<script src="../assets/js/pcoded.js"></script>
<script src="../assets/js/plugins/feather.min.js"></script>

   
<script>
  layout_change('light');
</script>
   
<script>
  layout_sidebar_change('light');
</script>
  
<script>
  change_box_container('false');
</script>
 
<script>
  layout_caption_change('true');
</script>
   
<script>
  layout_rtl_change('false');
</script>
 
<script>
  preset_change('preset-1');
</script>


    <!-- [Page Specific JS] start -->
    <!-- tagify -->
    <script src="../assets/js/plugins/choices.min.js"></script>
    <script>
      var textRemove = new Choices(document.getElementById('choices-text-remove-button'), {
        delimiter: ',',
        editItems: true,
        maxItemCount: 5,
        removeItemButton: true
      });
    </script>
    <!-- [Page Specific JS] end -->
    <div class="offcanvas border-0 pct-offcanvas offcanvas-end" tabindex="-1" id="offcanvas_pc_layout">
      <div class="offcanvas-header justify-content-between">
        <h5 class="offcanvas-title">Settings</h5>
        <button type="button" class="btn btn-icon btn-link-danger" data-bs-dismiss="offcanvas" aria-label="Close"
          ><i class="ti ti-x"></i
        ></button>
      </div>
      <div class="pct-body customizer-body">
        <div class="offcanvas-body py-0">
          <ul class="list-group list-group-flush">
            <li class="list-group-item">
              <div class="pc-dark">
                <h6 class="mb-1">Theme Mode</h6>
                <p class="text-muted text-sm">Choose light or dark mode or Auto</p>
                <div class="row theme-color theme-layout">
                  <div class="col-4">
                    <div class="d-grid">
                      <button class="preset-btn btn active" data-value="true" onclick="layout_change('light');">
                        <span class="btn-label">Light</span>
                        <span class="pc-lay-icon"><span></span><span></span><span></span><span></span></span>
                      </button>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="d-grid">
                      <button class="preset-btn btn" data-value="false" onclick="layout_change('dark');">
                        <span class="btn-label">Dark</span>
                        <span class="pc-lay-icon"><span></span><span></span><span></span><span></span></span>
                      </button>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="d-grid">
                      <button
                        class="preset-btn btn"
                        data-value="default"
                        onclick="layout_change_default();"
                        data-bs-toggle="tooltip"
                        title="Automatically sets the theme based on user's operating system's color scheme."
                      >
                        <span class="btn-label">Default</span>
                        <span class="pc-lay-icon d-flex align-items-center justify-content-center">
                          <i class="ph-duotone ph-cpu"></i>
                        </span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <h6 class="mb-1">Sidebar Theme</h6>
              <p class="text-muted text-sm">Choose Sidebar Theme</p>
              <div class="row theme-color theme-sidebar-color">
                <div class="col-6">
                  <div class="d-grid">
                    <button class="preset-btn btn" data-value="true" onclick="layout_sidebar_change('dark');">
                      <span class="btn-label">Dark</span>
                      <span class="pc-lay-icon"><span></span><span></span><span></span><span></span></span>
                    </button>
                  </div>
                </div>
                <div class="col-6">
                  <div class="d-grid">
                    <button class="preset-btn btn active" data-value="false" onclick="layout_sidebar_change('light');">
                      <span class="btn-label">Light</span>
                      <span class="pc-lay-icon"><span></span><span></span><span></span><span></span></span>
                    </button>
                  </div>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <h6 class="mb-1">Accent color</h6>
              <p class="text-muted text-sm">Choose your primary theme color</p>
              <div class="theme-color preset-color">
                <a href="#!" class="active" data-value="preset-1"><i class="ti ti-check"></i></a>
                <a href="#!" data-value="preset-2"><i class="ti ti-check"></i></a>
                <a href="#!" data-value="preset-3"><i class="ti ti-check"></i></a>
                <a href="#!" data-value="preset-4"><i class="ti ti-check"></i></a>
                <a href="#!" data-value="preset-5"><i class="ti ti-check"></i></a>
                <a href="#!" data-value="preset-6"><i class="ti ti-check"></i></a>
                <a href="#!" data-value="preset-7"><i class="ti ti-check"></i></a>
                <a href="#!" data-value="preset-8"><i class="ti ti-check"></i></a>
                <a href="#!" data-value="preset-9"><i class="ti ti-check"></i></a>
                <a href="#!" data-value="preset-10"><i class="ti ti-check"></i></a>
              </div>
            </li>
            <li class="list-group-item">
              <h6 class="mb-1">Sidebar Caption</h6>
              <p class="text-muted text-sm">Sidebar Caption Hide/Show</p>
              <div class="row theme-color theme-nav-caption">
                <div class="col-6">
                  <div class="d-grid">
                    <button class="preset-btn btn active" data-value="true" onclick="layout_caption_change('true');">
                      <span class="btn-label">Caption Show</span>
                      <span class="pc-lay-icon"
                        ><span></span><span></span><span><span></span><span></span></span><span></span
                      ></span>
                    </button>
                  </div>
                </div>
                <div class="col-6">
                  <div class="d-grid">
                    <button class="preset-btn btn" data-value="false" onclick="layout_caption_change('false');">
                      <span class="btn-label">Caption Hide</span>
                      <span class="pc-lay-icon"
                        ><span></span><span></span><span><span></span><span></span></span><span></span
                      ></span>
                    </button>
                  </div>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="pc-rtl">
                <h6 class="mb-1">Theme Layout</h6>
                <p class="text-muted text-sm">LTR/RTL</p>
                <div class="row theme-color theme-direction">
                  <div class="col-6">
                    <div class="d-grid">
                      <button class="preset-btn btn active" data-value="false" onclick="layout_rtl_change('false');">
                        <span class="btn-label">LTR</span>
                        <span class="pc-lay-icon"><span></span><span></span><span></span><span></span></span>
                      </button>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="d-grid">
                      <button class="preset-btn btn" data-value="true" onclick="layout_rtl_change('true');">
                        <span class="btn-label">RTL</span>
                        <span class="pc-lay-icon"><span></span><span></span><span></span><span></span></span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="list-group-item pc-box-width">
              <div class="pc-container-width">
                <h6 class="mb-1">Layout Width</h6>
                <p class="text-muted text-sm">Choose Full or Container Layout</p>
                <div class="row theme-color theme-container">
                  <div class="col-6">
                    <div class="d-grid">
                      <button class="preset-btn btn active" data-value="false" onclick="change_box_container('false')">
                        <span class="btn-label">Full Width</span>
                        <span class="pc-lay-icon"
                          ><span></span><span></span><span></span><span><span></span></span
                        ></span>
                      </button>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="d-grid">
                      <button class="preset-btn btn" data-value="true" onclick="change_box_container('true')">
                        <span class="btn-label">Fixed Width</span>
                        <span class="pc-lay-icon"
                          ><span></span><span></span><span></span><span><span></span></span
                        ></span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="d-grid">
                <button class="btn btn-light-danger" id="layoutreset">Reset Layout</button>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>

  </body>
  <!-- [Body] end -->
</html>
