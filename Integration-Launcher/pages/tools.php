<?php
// pages/tools.php
// Renderización de cards a partir de una matriz de secciones y links.
// Todas las URLs se inyectan de forma segura con htmlspecialchars.

function h($s) { return htmlspecialchars($s, ENT_QUOTES, 'UTF-8'); }

$sections = [

  // 1) ServiceNow Dashboards
  [
    'title' => 'ServiceNow Dashboards',
    'icon'  => 'fa-solid fa-chart-pie text-primary',
    'items' => [
      [
        'title' => 'DHL LINK – Tickets Overview',
        'sub'   => 'ServiceNow',
        'url'   => 'https://servicenow.dhl.com/now/nav/ui/classic/params/target/%24pa_dashboard.do%3Fsysparm_dashboard%3Dc98e52f53bcc6a50f00ca44a85e45a5c',
        'icon'  => 'fa-solid fa-ticket text-info',
        'critical' => true,
      ],
      [
        'title' => 'DSC Integration PRB Dashboard',
        'sub'   => 'ServiceNow',
        'url'   => 'https://servicenow.dhl.com/$pa_dashboard.do?sysparm_dashboard=dba0afda3b201a10f00ca44a85e45abf&sysparm_tab=f21b783583755e10130155c0deaad364&sysparm_cancelable=true&sysparm_editable=false&sysparm_active_panel=false',
        'icon'  => 'fa-solid fa-bug text-danger',
      ],
    ],
  ],

  // 2) Monitoring (Zabbix / ProdMon / QA)
  [
    'title' => 'Monitoring (Zabbix / ProdMon / QA)',
    'icon'  => 'fa-solid fa-heart-pulse text-danger',
    'items' => [
      [
        'title' => 'PRODMON – FTP Dashboard',
        'sub'   => 'Zabbix',
        'url'   => 'https://link-zabbix.dhl.com/zabbix.php?action=dashboard.view&dashboardid=89&from=now-3h&to=now',
        'icon'  => 'fa-solid fa-database text-warning',
        'critical' => true,
      ],
      [
        'title' => 'PRODMON – Integration Server Dashboard',
        'sub'   => 'Zabbix',
        'url'   => 'https://link-zabbix.dhl.com/zabbix.php?action=dashboard.view&dashboardid=88&from=now-1h&to=now',
        'icon'  => 'fa-solid fa-diagram-project text-primary',
        'critical' => true,
      ],
      [
        'title' => 'LINK Support Ops Dashboard QA',
        'sub'   => 'Zabbix QA',
        'url'   => 'https://link-zabbix.dhl.com/zabbix.php?action=dashboard.view&dashboardid=6',
        'icon'  => 'fa-solid fa-gauge-high text-success',
      ],
    ],
  ],

  // 3) DPAM / Access
  [
    'title' => 'DPAM / Access',
    'icon'  => 'fa-solid fa-user-shield text-warning',
    'items' => [
      [
        'title' => 'DPAM Console',
        'sub'   => 'Password Vault',
        'url'   => 'https://dpam.dhl.com/PasswordVault/v10/logon/saml',
        'icon'  => 'fa-solid fa-key text-warning',
        'critical' => true,
      ],
    ],
  ],

  // 4) FTP & Integration Consoles
  [
    'title' => 'FTP & Integration Consoles',
    'icon'  => 'fa-solid fa-plug text-success',
    'items' => [
      [
        'title' => 'FTP Console',
        'sub'   => 'LINK PROD',
        'url'   => 'https://link-active.dhl.com/LINK_PROD/ftpconsole/',
        'icon'  => 'fa-solid fa-terminal text-dark',
      ],
    ],
  ],

  // 5) Atlassian / Confluence
  [
    'title' => 'Atlassian / Confluence',
    'icon'  => 'fa-brands fa-confluence text-primary',
    'items' => [
      [
        'title' => 'Azure Server List',
        'sub'   => 'Confluence',
        'url'   => 'https://dhl.atlassian.net/wiki/spaces/DLR/pages/275252081/Azure+Server+List',
        'icon'  => 'fa-solid fa-server text-primary',
      ],
      [
        'title' => 'File System Ownership / Assigned Group',
        'sub'   => 'Confluence',
        'url'   => 'https://dhl.atlassian.net/wiki/spaces/DLR/pages/275253295/File+System+Ownership+and+Assigned+Group',
        'icon'  => 'fa-solid fa-folder-tree text-secondary',
      ],
      [
        'title' => 'DHL Link Confluence',
        'sub'   => 'Space DLR',
        'url'   => 'https://dhl.atlassian.net/wiki/spaces/DLR/overview?homepageId=275251210',
        'icon'  => 'fa-solid fa-book text-info',
      ],
      [
        'title' => 'Relay Agents Passwords',
        'sub'   => 'Confluence',
        'url'   => 'https://dhl.atlassian.net/wiki/spaces/AIH/pages/250216690/Relay+Agent+passwords',
        'icon'  => 'fa-solid fa-lock text-warning',
      ],
    ],
  ],

  // 6) Azure & Cloud
  [
    'title' => 'Azure & Cloud',
    'icon'  => 'fa-brands fa-microsoft text-primary',
    'items' => [
      [
        'title' => 'Azure – ServiceBus Namespaces',
        'sub'   => 'Portal',
        'url'   => 'https://portal.azure.com/#browse/Microsoft.ServiceBus%2Fnamespaces',
        'icon'  => 'fa-solid fa-cloud text-primary',
      ],
      [
        'title' => 'Azure Cosmos DB Explorer',
        'sub'   => 'Cosmos',
        'url'   => 'https://cosmos.azure.com/?feature.enableAadDataPlane=true',
        'icon'  => 'fa-solid fa-database text-info',
      ],
      [
        'title' => 'Guru',
        'sub'   => 'Knowledge',
        'url'   => 'https://guru.dhl.com/',
        'icon'  => 'fa-solid fa-book-open text-indigo',
      ],
    ],
  ],

  // 7) Link Relay / MFT / CC / Blueprint
  [
    'title' => 'Link Relay / MFT / CC',
    'icon'  => 'fa-solid fa-paper-plane text-success',
    'items' => [
      [
        'title' => 'Link Relay MFT PROD',
        'sub'   => 'Agents',
        'url'   => 'https://link-mft.dhl.com/mft-console/app/wicket/bookmarkable/com.dhl.mft.common.web.pages.AgentsPage?3',
        'icon'  => 'fa-solid fa-diagram-next text-success',
        'critical' => true,
      ],
      [
        'title' => 'Link Relay MFT QA',
        'sub'   => 'Login',
        'url'   => 'https://link-mft-qa.dhl.com/cas/login?method=POST&service=https%3A%2F%2Flink-mft-qa.dhl.com%2Fmft-console%2Fapp%2F%3F2%26applIdent%3DJDA%26applInstanceIdent%3D1',
        'icon'  => 'fa-solid fa-diagram-next text-success',
      ],
      [
        'title' => 'Link CC PROD',
        'sub'   => 'Console',
        'url'   => 'https://link-cc.dhl.com/',
        'icon'  => 'fa-solid fa-network-wired text-dark',
      ],
      [
        'title' => 'Link CC QA',
        'sub'   => 'Console',
        'url'   => 'https://link-cc-qa.dhl.com/',
        'icon'  => 'fa-solid fa-network-wired text-secondary',
      ],
      [
        'title' => 'Blueprint',
        'sub'   => 'Login',
        'url'   => 'https://link-blueprint.dhl.com/login',
        'icon'  => 'fa-solid fa-bezier-curve text-primary',
      ],
    ],
  ],

  // 8) DFM – Durable Function Monitoring
  [
    'title' => 'DFM – Durable Function Monitor',
    'icon'  => 'fa-solid fa-gears text-warning',
    'items' => [
      [
        'title' => 'DFM SEA PROD',
        'sub'   => 'Azure Websites',
        'url'   => 'https://dfm-durablefunc-monitor-sea-prd.azurewebsites.net/',
        'icon'  => 'fa-solid fa-server text-warning',
      ],
      [
        'title' => 'DFM SEA QA',
        'sub'   => 'Azure Websites',
        'url'   => 'https://dfm-durablefunc-monitor-sea-qa.azurewebsites.net/',
        'icon'  => 'fa-solid fa-server text-warning',
      ],
      [
        'title' => 'DFM WEU PROD',
        'sub'   => 'Azure Websites',
        'url'   => 'https://dfm-durablefunc-monitor-weu-prd.azurewebsites.net/',
        'icon'  => 'fa-solid fa-server text-primary',
      ],
      [
        'title' => 'DFM WEU QA',
        'sub'   => 'Azure Websites',
        'url'   => 'https://dfm-durablefunc-monitor-weu-qa.azurewebsites.net/',
        'icon'  => 'fa-solid fa-server text-primary',
      ],
      [
        'title' => 'DFM EUS PROD',
        'sub'   => 'Azure Websites',
        'url'   => 'https://dfm-durablefunc-monitor-eus-prd.azurewebsites.net/',
        'icon'  => 'fa-solid fa-server text-success',
      ],
      [
        'title' => 'DFM EUS QA',
        'sub'   => 'Azure Websites',
        'url'   => 'https://dfm-durablefunc-monitor-eus-qa.azurewebsites.net/',
        'icon'  => 'fa-solid fa-server text-success',
      ],
    ],
  ],

  // 9) Elastic / Kibana
  [
    'title' => 'Elastic / Kibana',
    'icon'  => 'fa-solid fa-chart-line text-dark',
    'items' => [
      [
        'title' => 'Kibana Login',
        'sub'   => 'Elastic Stack',
        'url'   => 'https://xa122ls200042.prg-dc.dhl.com:5601/login?next=%2Fapp%2Fhome&msg=LOGGED_OUT',
        'icon'  => 'fa-solid fa-chart-line text-dark',
      ],
    ],
  ],

  // 10) Admin / Misc
  [
    'title' => 'Admin / Misc',
    'icon'  => 'fa-solid fa-screwdriver-wrench text-secondary',
    'items' => [
      [
        'title' => 'VCS – Veritas InfoScale O.M.',
        'sub'   => 'Login',
        'url'   => '', // <-- no diste URL; si la tienes la coloco
        'icon'  => 'fa-solid fa-shield text-secondary',
        'disabled' => true,
      ],
      [
        'title' => 'DSC User Management',
        'sub'   => 'UM',
        'url'   => 'https://dsc-um.dhl.com/um/',
        'icon'  => 'fa-solid fa-users-gear text-danger',
        'critical' => true,
      ],
      [
        'title' => 'LINK Active Login',
        'sub'   => 'Auth',
        'url'   => 'https://link-active.dhl.com/userman/login/?next=/LINK_PROD/',
        'icon'  => 'fa-solid fa-right-to-bracket text-dark',
      ],
      [
        'title' => 'ELR Login',
        'sub'   => 'Employee Lifecycle',
        'url'   => 'https://elm.dhl.com/login?next=/',
        'icon'  => 'fa-solid fa-id-badge text-warning',
      ],
      [
        'title' => 'Saathi',
        'sub'   => 'WEU Dev',
        'url'   => 'https://saathi.dhllink-weu-dev.dhl.com/',
        'icon'  => 'fa-solid fa-sitemap text-info',
      ],
      [
        'title' => 'GROK Code Search',
        'sub'   => 'OpenGrok',
        'url'   => 'https://link-grok.dhl.com/svn_opengrok/',
        'icon'  => 'fa-solid fa-code text-secondary',
      ],
    ],
  ],

];

?>
<h1 class="h4 mb-3 d-flex align-items-center justify-content-between">
  <span><i class="fa-solid fa-toolbox me-2 text-success"></i>Tools Dashboard</span>
  <button class="btn btn-warning btn-sm" id="openCritical">
    <i class="fa-solid fa-bolt me-1"></i>Abrir críticos
  </button>
</h1>
<p class="text-muted mb-4">Haz clic en una tarjeta para abrir la herramienta. <strong>Críticos</strong> se abren con el botón superior.</p>

<div class="tools-grid">
  <?php foreach ($sections as $sec): ?>
    <section class="tools-section card">
      <div class="card-header d-flex align-items-center justify-content-between">
        <span class="fw-semibold">
          <i class="<?= h($sec['icon']) ?> me-2"></i><?= h($sec['title']) ?>
        </span>
        <span class="badge text-bg-light"><?= count($sec['items']) ?></span>
      </div>
      <div class="card-body">
        <div class="cards">
          <?php foreach ($sec['items'] as $it):
            $disabled = !empty($it['disabled']);
            $critical = !empty($it['critical']);
            $url = $disabled ? 'javascript:void(0)' : $it['url'];
          ?>
            <a
              class="tool-card<?= $disabled ? ' disabled' : '' ?>"
              href="<?= h($url) ?>"
              <?= $disabled ? 'tabindex="-1" aria-disabled="true"' : 'target="_blank" rel="noopener"' ?>
              <?= $critical ? 'data-critical="1"' : '' ?>
            >
              <div class="icon">
                <i class="<?= h($it['icon']) ?>"></i>
              </div>
              <div class="meta">
                <div class="title"><?= h($it['title']) ?></div>
                <div class="sub"><?= h($it['sub']) ?></div>
              </div>
            </a>
          <?php endforeach; ?>
        </div>
      </div>
    </section>
  <?php endforeach; ?>
</div>

<!-- Mini‑CSS específico de Tools (evita overlays y garantiza click) -->
<style>
.tools-grid { display: grid; gap: 1rem; }
@media (min-width: 992px) { .tools-grid { grid-template-columns: 1fr 1fr; } }
.cards {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
  gap: .75rem;
}
.tool-card {
  position: relative; /* para z-index */
  display: flex; align-items: center; gap: .75rem;
  background: var(--surface);
  border: 1px solid var(--border);
  border-radius: .75rem;
  padding: .75rem .9rem;
  text-decoration: none;
  color: inherit;
  transition: transform .06s ease, box-shadow .2s ease, border-color .2s ease;
  z-index: 1;             /* asegura estar por encima de decoraciones */
  cursor: pointer;
}
.tool-card:hover { transform: translateY(-1px); box-shadow: 0 6px 20px rgba(0,0,0,.06); border-color: #dcdfe4; }
.tool-card .icon {
  width: 42px; height: 42px; display: grid; place-items: center;
  border-radius: .55rem; font-size: 1.1rem;
  background: rgba(0,0,0,.04);
}
.tool-card .meta .title { font-weight: 700; line-height: 1.1; }
.tool-card .meta .sub { color: var(--muted); font-size: .85rem; }
.tool-card.disabled { pointer-events: none; opacity: .55; }
.card-header { background: var(--surface); }
</style>

<!-- Script: abrir todos los críticos -->
<script>
document.getElementById('openCritical')?.addEventListener('click', () => {
  const links = document.querySelectorAll('.tool-card[data-critical="1"]');
  if (!links.length) { alert('No hay enlaces críticos marcados.'); return; }
  const ok = confirm(`Se abrirán ${links.length} pestañas críticas. ¿Continuar?`);
  if (!ok) return;
  links.forEach(a => window.open(a.href, '_blank', 'noopener'));
});
</script>