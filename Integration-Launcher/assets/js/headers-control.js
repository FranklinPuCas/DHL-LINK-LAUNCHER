
// /sources/Javascript/header-controls.js

(function () {
  const SIDEBAR_ID = 'sidebar';
  const BTN_SIDEBAR_ID = 'btn-toggle-sidebar';
  const BTN_THEME_ID = 'btn-theme';
  const BODY_COLLAPSE_CLASS = 'sidebar-collapsed';
  const LS_SIDEBAR_KEY = 'ui.sidebar.collapsed';
  const LS_THEME_KEY = 'ui.theme'; // 'light' | 'dark' | 'system'

  const $sidebar = document.getElementById(SIDEBAR_ID);
  const $btnSidebar = document.getElementById(BTN_SIDEBAR_ID);
  const $btnTheme = document.getElementById(BTN_THEME_ID);

  // ---------- Sidebar ----------
  function isWide() {
    return window.matchMedia('(min-width: 1024px)').matches;
  }

  function setSidebarOpen(open) {
    if (!$sidebar || !$btnSidebar) return;

    if (isWide()) {
      // En escritorio usamos colapsar/expandir añadiendo clase al body
      document.body.classList.toggle(BODY_COLLAPSE_CLASS, !open);
    } else {
      // En móvil, el aside se desliza con la clase .open
      $sidebar.classList.toggle('open', open);
    }
    $btnSidebar.setAttribute('aria-expanded', String(open));
    // Persistimos colapsado (guardamos estado contrario a "open" en escritorio)
    try {
      localStorage.setItem(LS_SIDEBAR_KEY, String(!open));
    } catch {}
  }

  function getInitialSidebarOpen() {
    // Por defecto: abierto en escritorio, cerrado en móvil
    let collapsed = null;
    try {
      const v = localStorage.getItem(LS_SIDEBAR_KEY);
      if (v === 'true' || v === 'false') collapsed = (v === 'true');
    } catch {}
    if (collapsed === null) {
      return isWide() ? true : false;
    }
    return !collapsed;
  }

  function toggleSidebar() {
    const openNow = isSidebarOpen();
    setSidebarOpen(!openNow);
  }

  function isSidebarOpen() {
    if (isWide()) {
      return !document.body.classList.contains(BODY_COLLAPSE_CLASS);
    } else {
      return $sidebar?.classList.contains('open');
    }
  }

  // Cerrar al hacer clic fuera en móvil
  function handleClickOutside(e) {
    if (isWide()) return;
    const open = isSidebarOpen();
    if (!open) return;
    const clickInsideSidebar = $sidebar && $sidebar.contains(e.target);
    const clickOnButton = $btnSidebar && $btnSidebar.contains(e.target);
    if (!clickInsideSidebar && !clickOnButton) {
      setSidebarOpen(false);
    }
  }

  // ---------- Tema (modo noche) ----------
  function getSystemPref() {
    return window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
  }

  function applyTheme(theme) {
    const root = document.documentElement;
    if (theme === 'dark') {
      root.setAttribute('data-theme', 'dark');
      $btnTheme?.setAttribute('aria-pressed', 'true');
      if ($btnTheme) $btnTheme.textContent = '☀️';
    } else if (theme === 'light') {
      root.setAttribute('data-theme', 'light');
      $btnTheme?.setAttribute('aria-pressed', 'false');
      if ($btnTheme) $btnTheme.textContent = '🌙';
    } else {
      // system
      const sys = getSystemPref();
      root.setAttribute('data-theme', sys);
      $btnTheme?.setAttribute('aria-pressed', String(sys === 'dark'));
      if ($btnTheme) $btnTheme.textContent = (sys === 'dark') ? '☀️' : '🌙';
    }
  }

  function getSavedTheme() {
    try {
      const v = localStorage.getItem(LS_THEME_KEY);
      if (v === 'dark' || v === 'light' || v === 'system') return v;
    } catch {}
    return 'system';
  }

  function setTheme(mode) {
    try { localStorage.setItem(LS_THEME_KEY, mode); } catch {}
    applyTheme(mode);
  }

  function toggleTheme() {
    // ciclo: system -> dark -> light -> system
    const current = getSavedTheme();
    const next = current === 'system' ? 'dark' : (current === 'dark' ? 'light' : 'system');
    setTheme(next);
  }

  // ---------- Init ----------
  function init() {
    // Sidebar
    if ($btnSidebar && $sidebar) {
      setSidebarOpen(getInitialSidebarOpen());
      $btnSidebar.addEventListener('click', toggleSidebar);
      document.addEventListener('click', handleClickOutside);
      window.addEventListener('resize', () => setSidebarOpen(getInitialSidebarOpen()));
      window.addEventListener('keydown', (e) => {
        // ESC cierra en móvil
        if (e.key === 'Escape' && !isWide() && isSidebarOpen()) setSidebarOpen(false);
      });
    }

    // Tema
    applyTheme(getSavedTheme());
    $btnTheme?.addEventListener('click', toggleTheme);

    // Si cambia la preferencia del sistema y estamos en "system", actualizamos
    const mql = window.matchMedia('(prefers-color-scheme: dark)');
    if (mql && mql.addEventListener) {
      mql.addEventListener('change', () => {
        if (getSavedTheme() === 'system') applyTheme('system');
      });
    }
  }

  // Ejecuta cuando el DOM esté listo
  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
  } else {
    init();
  }
})();
