
<?php
$current = $_GET['page'] ?? 'dashboard';

function nav_item(string $baseUrl, string $slug, string $svgIcon, string $text, string $current): string {
  $active = ($current === $slug) ? ' active' : '';
  $href   = "{$baseUrl}/?page={$slug}";
  return <<<HTML
    <a class="nav-link{$active}" href="{$href}" data-title="{$text}">
      <span class="nav-icon">{$svgIcon}</span>
      <span class="nav-text">{$text}</span>
    </a>
HTML;
}
?>

<aside class="app-sidebar" id="appSidebar" aria-label="Menú principal">
  
  <nav class="nav flex-column">

    <?= nav_item($baseUrl, 'dashboard', '
      <svg viewBox="0 0 24 24"><path d="M3 12l9-9 9 9M4 10v10h5v-6h6v6h5V10" stroke="currentColor" fill="none" stroke-width="2"/></svg>
    ', 'Dashboard', $current) ?>

    <?= nav_item($baseUrl, 'shift', '
      <svg viewBox="0 0 24 24"><path d="M8 5v14l11-7z" stroke="currentColor" fill="none" stroke-width="2"/></svg>
    ', 'Start Shift', $current) ?>

    <?= nav_item($baseUrl, 'tickets', '
      <svg viewBox="0 0 24 24"><path d="M4 7h16v10H4z" stroke="currentColor" fill="none" stroke-width="2"/><path d="M4 12h16" stroke="currentColor" stroke-width="2"/></svg>
    ', 'Tickets', $current) ?>

    <?= nav_item($baseUrl, 'tools', '
      <svg viewBox="0 0 24 24"><path d="M14.7 6.3a4 4 0 0 1-5.4 5.4L3 18v3h3l6.3-6.3a4 4 0 0 1 2.4-8.4z" stroke="currentColor" fill="none" stroke-width="2"/></svg>
    ', 'Tools', $current) ?>

    <?= nav_item($baseUrl, 'accounts', '
      <svg viewBox="0 0 24 24"><circle cx="12" cy="8" r="4" stroke="currentColor" fill="none" stroke-width="2"/><path d="M4 20c0-4 4-6 8-6s8 2 8 6" stroke="currentColor" fill="none" stroke-width="2"/></svg>
    ', 'Accounts', $current) ?>

    <?= nav_item($baseUrl, 'emergency', '
      <svg viewBox="0 0 24 24"><path d="M12 3L2 21h20L12 3z" stroke="currentColor" fill="none" stroke-width="2"/><circle cx="12" cy="16" r="1" fill="currentColor"/><path d="M12 10v4" stroke="currentColor" stroke-width="2"/></svg>
    ', 'Emergency', $current) ?>

  </nav>
</aside>
