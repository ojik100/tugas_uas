<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="<?= base_url() ?>asset/image/logo.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">ADMIN ALUMNI</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url() ?>asset/image/logo.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $this->session->userdata("nama"); ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="<?= base_url('Dashboard') ?>" class="nav-link active">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle"></i>
              </p>
            </a>
          
          </li>
          <li class="nav-item">
            <a href="<?= base_url('Pemetaan') ?>" class="nav-link">
              <i class="nav-icon fas fa-map-marker"></i>
              <p>
              Maps Pemetaan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('Alumni') ?>" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Data Alumni 
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('Wali') ?>" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Data Wali 
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('Info') ?>" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Info Alumni
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('Laporan') ?>" class="nav-link">
              <i class="nav-icon fas fa-print"></i>
              <p>
            Laporan
              </p>
            </a>
          </li>
         <!--  <li class="nav-item">
            <a href="<?= base_url() ?>" class="nav-link">
              <i class="nav-icon fas fa-print"></i>
              <p>
                Laporan 
              </p>
            </a>
          </li> -->
          <li class="nav-item">
            <a href="<?= base_url('Auth/logout') ?>" class="nav-link">
              <i class="fa fa-sign-out-alt"></i>
              <p>
               Keluar
              </p>
            </a>
          </li>
         
  
           
          
         
          
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>