<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="main" class="brand-link">
      <img src="views/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Main Page</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="views/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="info" class="d-block">David Pérez</a>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="users" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Users
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="categories" class="nav-link">
              <i class="nav-icon fas fa-arrow-right"></i>
              <p>
                Categories
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="products" class="nav-link">
              <i class="nav-icon fas fa-arrow-right"></i>
              <p>
                Products
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="clients" class="nav-link">
              <i class="fas fa-user-friends nav-icon"></i>
              <p>
                Clients
              </p>
            </a>
          </li>
          <!-- Ventas TreeView menu  -->
          <li class="nav-item">
            <a href="sales" class="nav-link">
              <i class="far fa-credit-card nav-icon"></i>
              <p>
                Sales
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="create-sales" class="nav-link">
                  <i class="fas fa-plus nav-icon"></i>
                  <p>Create Sales</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="manage-sales" class="nav-link">
                  <i class="fas fa-tasks nav-icon"></i>
                  <p>Manage Sales</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="view-sales" class="nav-link">
                  <i class="far fa-eye nav-icon"></i>
                  <p>View Sales</p>
                </a>
              </li>
              <!-- END Ventas TreeView menu  -->
            </ul>
          </li>
        </ul>
      </nav>
    </div>  
</aside>