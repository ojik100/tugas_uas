<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>

      <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" ><i class="fas fa-user"> <?php echo $this->session->userdata("nama"); ?></i></a>
      </li>

        <ul>
        
        </ul>
      <li class="nav-item dropdown show">
        <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="true">
          <i class="far fa-bell"></i>
          <span class="badge badge-danger navbar-badge"><?php echo $jumlah_info; ?></span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right show">
        <?php foreach($info as $a):?>
        
          <a href="<?php echo site_url('User/detail_info/'.$a->id_info) ?>" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="<?php echo base_url('upload/info/'.$a->gambar) ?>" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  <?= $a->nama_info ?>
                 </h3>
               <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i><?= $a->create_at ?></p>
              </div>
              
            </div>
         
            <!-- Message End -->
          </a>
          
        <!-- Message End -->
        
        <?php endforeach;?>
          
          </a>
          
          <div class="dropdown-divider"></div>
          <a href="<?php echo site_url('User/info') ?>" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
     
    </ul>


  </nav>