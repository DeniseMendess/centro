<!-- =============================================== -->
<!-- |              SIDEBAR LATERAL                | -->
<!-- =============================================== -->
<aside id="sidebar">
  <!-- ------ Logo + Botão para recolher o Sidebar ------ -->
  <div class="d-flex align-items-center justify-content-between p-4 mb-5" id="sidebar-header">
    <div class="sidebar-logo">
      <a href="#">
        <img src="<?= URL ?>/public/assets/img/logo.webp" alt="logo">
        <span>Reviver</span>
      </a>
    </div>

    <button class="toggle-btn border-0" type="button">
      <i id="icon" class="ri-arrow-right-double-fill"></i>
    </button>
  </div>

  <!-- ------ Menu Principal ------ -->
  <ul class="sidebar-nav">
    <li class="sidebar-item">
      <a href="#" class="sidebar-link">
        <i class="ri-account-circle-fill"></i>
        <span>Meu Perfil</span>
      </a>
    </li>

    <li class="sidebar-item">
      <a href="#dashboard" class="sidebar-link">
        <i class="ri-bar-chart-fill"></i>
        <span>Dashboard</span>
      </a>
    </li>

    <li class="sidebar-item">
      <a href="#" class="sidebar-link">
        <i class="ri-todo-fill"></i>
        <span>Funcionários</span>
      </a>
    </li>

    <li class="sidebar-item">
      <a href="#" class="sidebar-link">
        <i class="ri-group-fill"></i>
        <span>Utentes</span>
      </a>
    </li>

    <li class="sidebar-item">
      <a href="#" class="sidebar-link">
        <i class="ri-calendar-view"></i>
        <span>Consultas</span>
      </a>
    </li>

    <li class="sidebar-item">
      <a href="#" class="sidebar-link">
        <i class="ri-todo-line"></i>
        <span>Relatório</span>
      </a>
    </li>

    <li class="sidebar-item">
      <a href="#" class="sidebar-link">
        <i class="ri-notification-3-fill"></i>
        <span>Notificações</span>
      </a>
    </li>

    <li class="sidebar-item">
      <a href="#" class="sidebar-link">
        <i class="ri-settings-5-fill"></i>
        <span>Configuração</span>
      </a>
    </li>
  </ul>

  <!-- ------ Rodapé do Sidebar ------ -->
  <div class="sidebar-footer mt-lg-5">
    <a href="<?= URL ?>/login/logout" class="sidebar-link">
      <i class="ri-logout-box-line"></i>
      <span>Logout</span>
    </a>
  </div>
</aside>
<!-- ================== FIM SIDEBAR ================== -->