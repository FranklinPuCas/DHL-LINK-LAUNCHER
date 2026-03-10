<?php
// index.php - Router simple + layout
declare(strict_types=1);

// Mostrar errores en desarrollo
ini_set('display_errors', '1');
error_reporting(E_ALL);

// Calcula baseUrl (soporta raíz o subcarpeta, p.ej. /Integration-Launcher)
$baseUrl = rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'])), '/');
if ($baseUrl === '/' || $baseUrl === '\\') { $baseUrl = ''; }

// Páginas permitidas
$allowed = ['dashboard','shift','tickets','tools','accounts','emergency'];

// Obtiene página (por defecto dashboard)
$page = $_GET['page'] ?? 'dashboard';
$page = strtolower(preg_replace('/[^a-z0-9\-]/i', '', $page));
if (!in_array($page, $allowed, true)) { http_response_code(404); $page = 'dashboard'; }

$viewFile = __DIR__ . "/pages/{$page}.php";

// Pasa $baseUrl a los componentes
require __DIR__ . '/components/header.php';
require __DIR__ . '/components/sidebar.php';
?>
<main class="app-content">
  <div class="container-fluid py-4">
    <?php if (is_file($viewFile)) { include $viewFile; } else { ?>
      <div class="alert alert-danger">Vista no encontrada: <code><?= htmlspecialchars($viewFile) ?></code></div>
    <?php } ?>
  </div>
</main>
<?php require __DIR__ . '/components/footer.php'; ?>
