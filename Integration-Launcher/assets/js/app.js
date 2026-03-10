(function(){
  const body = document.body;
  const btn = document.getElementById('sidebarToggle');
  const mqDesktop = window.matchMedia('(min-width: 992px)');

  function applyState() {
    const collapsed = localStorage.getItem('sidebarCollapsed') === '1';
    if (mqDesktop.matches) {
      body.classList.toggle('sidebar-collapsed', collapsed);
      body.classList.remove('sidebar-open');
    } else {
      body.classList.remove('sidebar-collapsed');
    }
  }

  btn?.addEventListener('click', () => {
    if (mqDesktop.matches) {
      const next = !(localStorage.getItem('sidebarCollapsed') === '1');
      localStorage.setItem('sidebarCollapsed', next ? '1' : '0');
      applyState();
    } else {
      body.classList.toggle('sidebar-open');
    }
  });

  // Cerrar sidebar móvil si hago click fuera
  document.addEventListener('click', (e) => {
    if (!body.classList.contains('sidebar-open')) return;
    const aside = document.getElementById('appSidebar');
    const toggle = document.getElementById('sidebarToggle');
    if (!aside.contains(e.target) && !toggle.contains(e.target)) {
      body.classList.remove('sidebar-open');
    }
  });

  mqDesktop.addEventListener('change', applyState);
  applyState();
})();