<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar" style="line-height: 2.0;">
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
    <div class="sidebar-brand-icon">
      <img src="img/logo/zoo.png">
    </div>
    <div class="sidebar-brand-text mx-3" style="font-size: 30px;">Zoo</div>
  </a>
  <hr class="sidebar-divider my-0">
  <li class="nav-item active">
    <a class="nav-link" href="dashboard.php">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span>
    </a>
  </li>
  <hr class="sidebar-divider">
  <div class="sidebar-heading">
    Features
  </div>
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#packageForm" aria-expanded="true" aria-controls="collapseForm">
      <i class="fab fa-fw fa-wpforms"></i>
      <span>Animal Management</span>
    </a>
    <div id="packageForm" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Animals</h6>
        <a class="collapse-item" href="create_animal.php">Create Animal</a>
        <a class="collapse-item" href="manage_animals.php">manage Animals</a>
      </div>
    </div>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="manage_ticket.php">
      <i class="fas fa-fw fa-chart-area"></i>
      <span>Ticket Categories</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="manage_normal_ticket.php">
      <i class="fas fa-fw fa-chart-area"></i>
      <span>Nomal Tickets </span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="manage_foreigners_ticket.php">
      <i class="fas fa-fw fa-chart-area"></i>
      <span>Foreigners Tickets </span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#users" aria-expanded="true" aria-controls="collapseTable">
      <i class="fas fa-fw fa-table"></i>
      <span>User Management</span>
    </a>
    <div id="users" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Users</h6>
        <a class="collapse-item" href="user_register.php">Register User</a>
        <a class="collapse-item" href="Permissions.php">User Permissions</a>
      </div>
    </div>
  </li>
</ul>