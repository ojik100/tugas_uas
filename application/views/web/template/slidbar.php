<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url() ?>asset/image/logo.jpg" class="img-circle elevation-1" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">ALUMNI</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="<?= base_url('home') ?>" class="nav-link active">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle"></i>
              </p>
            </a>
          
          </li>
         
          <li class="nav-item">
            <a href="<?= base_url('User/detail') ?>" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Data Saya 
              </p>
            </a>
          </li>
        
          <li class="nav-item">
            <a href="<?= base_url('User/info') ?>" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Info Alumni
              </p>
            </a>
          </li>
       
          <li class="nav-item">
            <a href="<?= base_url('User/Logout') ?>" class="nav-link">
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