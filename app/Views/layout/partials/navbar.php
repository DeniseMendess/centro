<!-- ================================================ -->
<!-- |                   NAVBAR                     | -->
<!-- ================================================ -->
<nav class="navbar navbar-expand px-4 py-3">
  <!-- ------ Notificações + Perfil ------ -->
  <div class="navbar-right ms-auto d-flex align-items-center">
    <!-- notificação -->
    <div class="nav-item me-4 position-relative">
      <i class="ri-notification-line nav-icon"></i>
    </div>

    <!-- Usuário -->
    <div class="user-info d-flex align-items-center">
      <img src="<?= URL ?>/public/assets/img/user.webp" class="avatar">

      <div class="user-text ms-3">
        <div class="user-name">
          <?= $_SESSION['usuario_nome'] ?? 'Usuário' ?>
        </div>

        <div class="user-role">
          <?php
          if (($_SESSION['tipo_usuario'] ?? '') == ADMIN) {
            echo "Administrador/a";
          } else {
            echo "Funcionário/a";
          }
          ?>
        </div>
      </div>
    </div>

  </div>
</nav>
<!-- ================== FIM NAVBAR  ================== -->