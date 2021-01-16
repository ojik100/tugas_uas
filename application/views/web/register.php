<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Registrasi</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?= base_url() ?>asset/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>asset/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>asset/dist/css/adminlte.min.css">
 
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<style type="text/css">
    #bg-login{
        background-image: url(<?php echo base_url("asset/image/bg.jpg");?>);
        background-size:cover;
    }
</style>
<BR><BR><BR>
<body class="offset-1" id="bg-login">
<div class="login-box">
  <div class="login-logo">
     </div>
  <div class="card">
    <div class="card-body login-card-body">
    <center>  <img src="<?= base_url() ?>asset/image/logo.jpg" width="80" alt="">
  </center>
      <h3 class="login-box-msg">Regitrasi Alumni</h3>

      <form action="<?= base_url('Daftar/aksi') ?>" method="post">
        <div class="input-group mb-3">
          <input type="text" name="nis" class="form-control" placeholder="NIS">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
         <select name="id_jur" class="form-control" id="">
         <option value="">--Pilih Jurusan--</option>
         <?php foreach($jurusan as $k):?>
											
                      <option  value="<?= $k->id_jur?>"><?= $k->jurusan ?></option>
                                         
                                             
                  <?php endforeach;?>
       
         </select>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-book"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            
          </div>
          
          <!-- /.col -->
          <div class="col-4">
             
            <button type="submit" class="btn btn-success btn-block">Daftar</button>
          </div>
          <a href="<?= base_url('User') ?>">Login</a>
          <!-- /.col -->
        </div>
      </form>

     
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?= base_url() ?>asset/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url() ?>asset/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url() ?>asset/dist/js/adminlte.min.js"></script>

</body>
</html>
