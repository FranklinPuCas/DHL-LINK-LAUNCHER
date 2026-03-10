<?php // pages/dashboard.php ?>
<h1 class="h4 mb-4">Dashboard</h1>

<div class="row g-3">
  <div class="col-12 col-md-6 col-lg-3">
    <div class="kpi-card kpi-warning position-relative">
      <div class="kpi-icon"><i class="fa-solid fa-play"></i></div>
      <div>
        <div class="kpi-title">Start Shift</div>
        <div class="kpi-sub">Checklist & accesos</div>
      </div>
      <a class="stretched-link" href="<?= $baseUrl ?>/?page=shift" aria-label="Ir a Start Shift"></a>
    </div>
  </div>

  <div class="col-12 col-md-6 col-lg-3">
    <div class="kpi-card kpi-danger position-relative">
      <div class="kpi-icon"><i class="fa-solid fa-triangle-exclamation"></i></div>
      <div>
        <div class="kpi-title">Emergency</div>
        <div class="kpi-sub">Active & playbooks</div>
      </div>
      <a class="stretched-link" href="<?= $baseUrl ?>/?page=emergency" aria-label="Ir a Emergency"></a>
    </div>
  </div>

  <div class="col-12 col-md-6 col-lg-3">
    <div class="kpi-card kpi-info position-relative">
      <div class="kpi-icon"><i class="fa-solid fa-ticket"></i></div>
      <div>
        <div class="kpi-title">Tickets</div>
        <div class="kpi-sub">Follow-up rápido</div>
      </div>
      <a class="stretched-link" href="<?= $baseUrl ?>/?page=tickets" aria-label="Ir a Tickets"></a>
    </div>
  </div>

  <div class="col-12 col-md-6 col-lg-3">
    <div class="kpi-card kpi-success position-relative">
      <div class="kpi-icon"><i class="fa-solid fa-toolbox"></i></div>
      <div>
        <div class="kpi-title">Tools</div>
        <div class="kpi-sub">NGWS, KB, Policies</div>
      </div>
      <a class="stretched-link" href="<?= $baseUrl ?>/?page=tools" aria-label="Ir a Tools"></a>
    </div>
  </div>
</div>

<div class="card mt-4">
  <div class="card-header d-flex justify-content-between align-items-center">
    <span class="fw-semibold">Accesos rápidos</span>
    <a class="btn btn-sm btn-outline-secondary" href="<?= $baseUrl ?>/?page=tools">
      Ver todo
    </a>
  </div>
  <div class="card-body">
    <div class="d-flex flex-wrap gap-2 quick-links">
      <a class="btn btn-outline-secondary btn-sm" href="#" target="_blank">
        <i class="fa-solid fa-magnifying-glass me-1"></i> Global Search
      </a>
      <a class="btn btn-outline-secondary btn-sm" href="#" target="_blank">
        <i class="fa-solid fa-database me-1"></i> GSN Search
      </a>
      <a class="btn btn-outline-secondary btn-sm" href="#" target="_blank">
        <i class="fa-solid fa-list-check me-1"></i> Task & Schedules
      </a>
      <a class="btn btn-outline-secondary btn-sm" href="#" target="_blank">
        <i class="fa-solid fa-shield-halved me-1"></i> Policies
      </a>
    </div>
    <p class="text-muted small mt-3 mb-0">
      Edita este bloque en <code>/pages/dashboard.php</code> para añadir o quitar accesos.
    </p>
  </div>
</div>