<?php
// pages/shift.php
// Esta vista se renderiza dentro del layout de index.php
// Variables disponibles: $baseUrl (para rutas absolutas del sitio)
?>
<div class="d-flex align-items-center justify-content-between mb-3">
  <h1 class="h4 mb-0">
    <i class="fa-solid fa-play me-2 text-warning"></i>
    Start Shift
  </h1>
  <div class="text-end small text-muted">
    <div><i class="fa-regular fa-clock me-1"></i>Hora local: <span id="clockLocal">--:--</span></div>
    <div class="text-muted">Zona: <span id="tzName">America/New_York (Miami)</span></div>
  </div>
</div>

<div class="row g-3">
  <!-- Checklist de inicio -->
  <div class="col-12 col-lg-5">
    <div class="card h-100">
      <div class="card-header d-flex align-items-center justify-content-between">
        <span class="fw-semibold"><i class="fa-solid fa-list-check me-2"></i>Checklist de inicio</span>
        <div class="d-flex gap-2">
          <button class="btn btn-sm btn-outline-secondary" id="checklistReset">
            <i class="fa-solid fa-rotate-left me-1"></i>Reset
          </button>
          <button class="btn btn-sm btn-outline-primary" id="checklistCopy">
            <i class="fa-solid fa-copy me-1"></i>Copiar
          </button>
        </div>
      </div>
      <div class="card-body">
        <div class="list-group" id="checklist">
          <!-- Ítems del checklist (puedes editar el texto a tus políticas) -->
          <label class="list-group-item d-flex align-items-start gap-2">
            <input class="form-check-input mt-1" type="checkbox" data-key="login-systems">
            <div>
              <div class="fw-semibold">Login en sistemas</div>
              <div class="small text-muted">VPN, SSO, ServiceNow/RequestIT, correo, Teams</div>
            </div>
          </label>
          <label class="list-group-item d-flex align-items-start gap-2">
            <input class="form-check-input mt-1" type="checkbox" data-key="handover-read">
            <div>
              <div class="fw-semibold">Revisar handover</div>
              <div class="small text-muted">Emergencias abiertas, tickets P1/P2, cambios planificados</div>
            </div>
          </label>
          <label class="list-group-item d-flex align-items-start gap-2">
            <input class="form-check-input mt-1" type="checkbox" data-key="monitoring-panels">
            <div>
              <div class="fw-semibold">Ver paneles de monitoreo</div>
              <div class="small text-muted">GSN / Dashboards / Alertas críticas</div>
            </div>
          </label>
          <label class="list-group-item d-flex align-items-start gap-2">
            <input class="form-check-input mt-1" type="checkbox" data-key="comm-channels">
            <div>
              <div class="fw-semibold">Canales de comunicación</div>
              <div class="small text-muted">Bridge de emergencia, chat de turno, distribución</div>
            </div>
          </label>
          <label class="list-group-item d-flex align-items-start gap-2">
            <input class="form-check-input mt-1" type="checkbox" data-key="tools-health">
            <div>
              <div class="fw-semibold">Salud de herramientas</div>
              <div class="small text-muted">NGWS, Director, DPAM, KB, búsquedas globales</div>
            </div>
          </label>
        </div>
      </div>
      <div class="card-footer d-flex justify-content-between align-items-center">
        <div class="small text-muted">Progreso: <span id="checklistProgress">0/5</span></div>
        <button class="btn btn-sm btn-warning" id="openCritical">
          <i class="fa-solid fa-bolt me-1"></i>Abrir todo (crítico)
        </button>
      </div>
    </div>
  </div>

  <!-- Accesos rápidos de inicio -->
  <div class="col-12 col-lg-7">
    <div class="card h-100">
      <div class="card-header d-flex align-items-center justify-content-between">
        <span class="fw-semibold"><i class="fa-solid fa-link me-2"></i>Accesos rápidos</span>
        <span class="text-muted small">Edita en <code>/pages/shift.php</code></span>
      </div>
      <div class="card-body">
        <div class="row g-2">
          <!-- Columna A -->
          <div class="col-12 col-md-6">
            <div class="d-grid gap-2">
              <a class="btn btn-outline-dark d-flex align-items-center justify-content-between"
                 href="https://TODO-URL-REAL/geotime" target="_blank" rel="noopener">
                <span><i class="fa-solid fa-clock me-2"></i>GeoTime</span>
                <i class="fa-solid fa-arrow-up-right-from-square"></i>
              </a>
              <a class="btn btn-outline-dark d-flex align-items-center justify-content-between"
                 href="https://TODO-URL-REAL/requestit" target="_blank" rel="noopener">
                <span><i class="fa-solid fa-ticket me-2"></i>RequestIT / ServiceNow</span>
                <i class="fa-solid fa-arrow-up-right-from-square"></i>
              </a>
              <a class="btn btn-outline-dark d-flex align-items-center justify-content-between"
                 href="https://TODO-URL-REAL/global-search" target="_blank" rel="noopener">
                <span><i class="fa-solid fa-magnifying-glass me-2"></i>Global Search</span>
                <i class="fa-solid fa-arrow-up-right-from-square"></i>
              </a>
              <a class="btn btn-outline-dark d-flex align-items-center justify-content-between"
                 href="https://TODO-URL-REAL/gsn" target="_blank" rel="noopener">
                <span><i class="fa-solid fa-database me-2"></i>GSN Search</span>
                <i class="fa-solid fa-arrow-up-right-from-square"></i>
              </a>
            </div>
          </div>

          <!-- Columna B -->
          <div class="col-12 col-md-6">
            <div class="d-grid gap-2">
              <a class="btn btn-outline-dark d-flex align-items-center justify-content-between"
                 href="https://TODO-URL-REAL/ngws" target="_blank" rel="noopener" data-critical="1">
                <span><i class="fa-solid fa-sitemap me-2"></i>NGWS Tool</span>
                <i class="fa-solid fa-arrow-up-right-from-square"></i>
              </a>
              <a class="btn btn-outline-dark d-flex align-items-center justify-content-between"
                 href="https://TODO-URL-REAL/director" target="_blank" rel="noopener" data-critical="1">
                <span><i class="fa-solid fa-user-gear me-2"></i>Director / DPAM</span>
                <i class="fa-solid fa-arrow-up-right-from-square"></i>
              </a>
              <a class="btn btn-outline-dark d-flex align-items-center justify-content-between"
                 href="https://TODO-URL-REAL/kb" target="_blank" rel="noopener">
                <span><i class="fa-solid fa-book me-2"></i>Knowledge Base</span>
                <i class="fa-solid fa-arrow-up-right-from-square"></i>
              </a>
              <a class="btn btn-outline-dark d-flex align-items-center justify-content-between"
                 href="https://TODO-URL-REAL/policies" target="_blank" rel="noopener">
                <span><i class="fa-solid fa-shield-halved me-2"></i>Policies</span>
                <i class="fa-solid fa-arrow-up-right-from-square"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="alert alert-warning d-flex align-items-start gap-2 mt-3 mb-0">
          <i class="fa-solid fa-circle-info mt-1"></i>
          <div class="small">
            Marca con <code>data-critical="1"</code> los enlaces que deben abrirse con <b>Abrir todo (crítico)</b>.
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Estado de servicios -->
  <div class="col-12 col-xl-5">
    <div class="card h-100">
      <div class="card-header">
        <span class="fw-semibold"><i class="fa-solid fa-signal me-2"></i>Estado de servicios</span>
      </div>
      <div class="card-body">
        <div class="row g-2" id="statusBoard">
          <?php
          // Puedes ajustar esta lista a tus servicios clave
          $services = [
            ['key'=>'svc-ngws','name'=>'NGWS'],
            ['key'=>'svc-director','name'=>'Director'],
            ['key'=>'svc-dpam','name'=>'DPAM'],
            ['key'=>'svc-reqit','name'=>'RequestIT'],
            ['key'=>'svc-gsn','name'=>'GSN'],
            ['key'=>'svc-kb','name'=>'KB / Policies'],
          ];
          foreach ($services as $svc): ?>
            <div class="col-12">
              <div class="d-flex align-items-center justify-content-between border rounded p-2">
                <div class="fw-semibold"><?= htmlspecialchars($svc['name']) ?></div>
                <div class="btn-group btn-group-sm" role="group" aria-label="estado">
                  <button class="btn btn-outline-success status-btn" data-key="<?= htmlspecialchars($svc['key']) ?>" data-val="ok">
                    <i class="fa-solid fa-circle text-success me-1"></i>OK
                  </button>
                  <button class="btn btn-outline-warning status-btn" data-key="<?= htmlspecialchars($svc['key']) ?>" data-val="warn">
                    <i class="fa-solid fa-circle text-warning me-1"></i>Warn
                  </button>
                  <button class="btn btn-outline-danger status-btn" data-key="<?= htmlspecialchars($svc['key']) ?>" data-val="down">
                    <i class="fa-solid fa-circle text-danger me-1"></i>Down
                  </button>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
        <div class="small text-muted mt-2">Solo visual; útil para alinear al equipo al inicio.</div>
      </div>
    </div>
  </div>

  <!-- Notas de handover -->
  <div class="col-12 col-xl-7">
    <div class="card h-100">
      <div class="card-header d-flex align-items-center justify-content-between">
        <span class="fw-semibold"><i class="fa-regular fa-note-sticky me-2"></i>Notas de handover</span>
        <div class="d-flex gap-2">
          <button class="btn btn-sm btn-outline-secondary" id="notesClear">
            <i class="fa-regular fa-trash-can me-1"></i>Limpiar
          </button>
          <button class="btn btn-sm btn-outline-primary" id="notesCopy">
            <i class="fa-solid fa-copy me-1"></i>Copiar
          </button>
        </div>
      </div>
      <div class="card-body">
        <textarea id="handoverNotes" class="form-control" rows="8"
          placeholder="Ej.: Incidentes en curso, riesgos, cambios planificados, pendientes críticos..."></textarea>
        <div class="form-text">Guardado automático en este navegador (localStorage).</div>
      </div>
    </div>
  </div>
</div>

<!-- Script específico de la página (ligero) -->
<script>
// --- Reloj local (Miami por defecto, ajusta si quieres) ---
(function(){
  const elClock = document.getElementById('clockLocal');
  const tzName  = document.getElementById('tzName');
  const tz = 'America/New_York'; // Miami (GMT-05/-04)
  if (tzName) tzName.textContent = tz + ' (Miami)';

  function tick(){
    try {
      const now = new Date();
      const fmt = new Intl.DateTimeFormat('es-ES', { hour: '2-digit', minute: '2-digit', second: '2-digit', timeZone: tz });
      elClock.textContent = fmt.format(now);
    } catch(e) {
      elClock.textContent = new Date().toLocaleTimeString();
    }
  }
  tick(); setInterval(tick, 1000);
})();

// --- Checklist persistente ---
(function(){
  const keyPrefix = 'shift.check.';
  const list = document.getElementById('checklist');
  const progress = document.getElementById('checklistProgress');
  if (!list) return;

  function load(){
    const inputs = list.querySelectorAll('input[type="checkbox"][data-key]');
    let done = 0, total = inputs.length;
    inputs.forEach(chk => {
      const k = keyPrefix + chk.dataset.key;
      chk.checked = localStorage.getItem(k) === '1';
      if (chk.checked) done++;
      chk.addEventListener('change', () => {
        localStorage.setItem(k, chk.checked ? '1' : '0');
        update();
      });
    });
    progress.textContent = `${done}/${total}`;
  }
  function update(){
    const inputs = list.querySelectorAll('input[type="checkbox"][data-key]');
    let done = 0; inputs.forEach(c => c.checked && done++);
    progress.textContent = `${done}/${inputs.length}`;
  }

  // Reset
  document.getElementById('checklistReset')?.addEventListener('click', () => {
    list.querySelectorAll('input[type="checkbox"][data-key]').forEach(chk => {
      localStorage.setItem(keyPrefix + chk.dataset.key, '0');
      chk.checked = false;
    });
    update();
  });

  // Copiar resumen
  document.getElementById('checklistCopy')?.addEventListener('click', async () => {
    const items = Array.from(list.querySelectorAll('label.list-group-item'));
    const out = items.map(i => {
      const chk = i.querySelector('input[type="checkbox"]');
      const title = i.querySelector('.fw-semibold')?.textContent?.trim() || '';
      const mark = chk?.checked ? '✔' : '☐';
      return `${mark} ${title}`;
    }).join('\n');
    try {
      await navigator.clipboard.writeText(out);
      alert('Checklist copiado al portapapeles.');
    } catch(e) {
      console.log(e); alert('No se pudo copiar.');
    }
  });

  load();
})();

// --- Abrir enlaces críticos marcados con data-critical="1" ---
(function(){
  document.getElementById('openCritical')?.addEventListener('click', () => {
    const links = document.querySelectorAll('a[data-critical="1"]');
    if (!links.length) { alert('No hay enlaces críticos marcados.'); return; }
    const ok = confirm(`Se abrirán ${links.length} pestañas críticas. ¿Continuar?`);
    if (!ok) return;
    links.forEach(a => window.open(a.href, '_blank', 'noopener'));
  });
})();

// --- Estado de servicios (persistente) ---
(function(){
  const keyPrefix = 'shift.status.';
  const board = document.getElementById('statusBoard');
  if (!board) return;

  function applyState(btns, value){
    btns.forEach(b => b.classList.remove('active'));
    const selected = Array.from(btns).find(b => b.dataset.val === value);
    selected?.classList.add('active');
  }

  board.querySelectorAll('.status-btn').forEach(btn => {
    const k = keyPrefix + btn.dataset.key;
    const group = board.querySelectorAll(`.status-btn[data-key="${btn.dataset.key}"]`);
    // carga
    const saved = localStorage.getItem(k) || 'ok';
    applyState(group, saved);
    // click
    btn.addEventListener('click', () => {
      localStorage.setItem(k, btn.dataset.val);
      applyState(group, btn.dataset.val);
    });
  });
})();

// --- Notas de handover (persistentes) ---
(function(){
  const el = document.getElementById('handoverNotes');
  if (!el) return;
  const key = 'shift.handover.notes';

  // Cargar
  el.value = localStorage.getItem(key) || '';

  // Guardado (debounce)
  let t; el.addEventListener('input', () => {
    clearTimeout(t);
    t = setTimeout(() => localStorage.setItem(key, el.value), 300);
  });

  // Copiar
  document.getElementById('notesCopy')?.addEventListener('click', async () => {
    try {
      await navigator.clipboard.writeText(el.value);
      alert('Notas copiadas al portapapeles.');
    } catch(e) { alert('No se pudo copiar.'); }
  });

  // Limpiar
  document.getElementById('notesClear')?.addEventListener('click', () => {
    if (!el.value) return;
    const ok = confirm('¿Vaciar notas de handover?');
    if (ok) { el.value=''; localStorage.removeItem(key); }
  });
})();
</script>