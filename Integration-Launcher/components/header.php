<?php // components/header.php ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Integration Support Dashboard</title>

  <!-- Favicon -->
  <link rel="icon" type="image/png" href="<?= $baseUrl ?>/assets/img/dhl.png">

  <!-- Bootstrap 5 (CSS) -->
 <link rel="stylesheet" href="<?= $baseUrl ?>/assets/vendor/bootstrap/css/bootstrap.min.css">

  <!-- Estilos propios -->
  <link rel="stylesheet" href="<?= $baseUrl ?>/assets/css/app.css?v=2">
</head>
<body>
<header class="app-topbar d-flex align-items-center justify-content-between px-3">
  <div class="d-flex align-items-center gap-2">
   
<button class="btn btn-light btn-menu" id="sidebarToggle" aria-label="Toggle Menu">
  <i class="fa-solid fa-bars fa-lg"></i>
</button>

    <img src="<?= $baseUrl ?>/assets/img/dhl.png" alt="DHL" style="height:18px">
    <span class="fw-semibold">Integration Support</span>
  </div>
  <div class="d-flex align-items-center gap-2">
    <form class="d-none d-md-flex" role="search" onsubmit="return false;">
      <input class="form-control form-control-sm" type="search" placeholder="Buscar… (herramienta, módulo)">
    </form>
    <button class="btn btn-sm btn-outline-secondary" id="themeToggle" aria-label="Tema claro/oscuro">
      <i class="fa-regular fa-moon"></i>
    </button>
    <div class="dropdown">
      <button class="btn btn-sm btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown">
        <i class="fa-regular fa-user"></i>
      </button>
      <ul class="dropdown-menu dropdown-menu-end">
        
 <svg class="icon" viewBox="0 0 24 24">
            <path d="M3 12l9-9 9 9M4 10v10h5v-6h6v6h5V10" stroke="currentColor" stroke-width="2" fill="none"/>
        </svg>

        <li><span class="dropdown-item-text text-muted small">Franklin (DHL ITS)</span></li>
        <li><a class="dropdown-item" href="<?= $baseUrl ?>/?page=dashboard">Inicio</a></li>
        <li><a class="dropdown-item" href="#">Preferencias (próx.)</a></li>
        
      </ul>
    </div>
  </div>
</header>
<div class="app-shell">
