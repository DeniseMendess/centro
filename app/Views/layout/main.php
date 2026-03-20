<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}
?>

<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="<?= URL ?>/public/assets/img/favicon.ico" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.8.0/fonts/remixicon.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?= URL ?>/public/assets/css/global.css">
  <title><?= APP_NOME ?></title>
</head>

<body>

  <div class="wrapper">

    <?php

    if ($_SESSION['tipo_usuario'] == ADMIN) {
      require __DIR__ . '/partials/sidebar_admin.php';
    } else {
      require __DIR__ . '/partials/sidebar_funcionario.php';
    }

    ?>

    <div class="main">

      <?php require __DIR__ . '/partials/navbar.php'; ?>

      <main class="content px-3 py-4">

        <?= $content ?>

      </main>

    </div>

  </div>
  <!-- bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
  <!-- jquery -->
  <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
  <!-- datables -->
  <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
  <!-- apexchart -->
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
  <!-- script.js -->
  <script src="<?= URL ?>/public/assets/js/script.js"></script>

</body>

</html>