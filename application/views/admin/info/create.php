
<?php $this->load->view('template/head') ?>
<?php $this->load->view('template/nav') ?>
<?php $this->load->view('template/slidbar') ?>
<!-- ecoderr -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><i class="fa fa-plus-circle"></i> Info Alumni</h1>
                
          </div>
        </div>
      </div>
    </section>
    <section class="content">
     
    <div class="card card-success">
             
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" method="post" action="<?= base_url('info/aksi_tambah') ?>" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Judul Info</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nama_info" placeholder="Judul Info">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Gambar</label>
                    <div class="col-sm-10">
                      <input type="file" class="form-control" id="" name="gambar" >
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Info</label>
                    <div class="col-sm-10">
                 <textarea name="info" class="form-control" id="" cols="30" rows="10"></textarea>
                    </div>
                  </div>
                
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                <button type="reset" class="btn btn-danger">Batal</button>
                 <button type="submit" class="btn btn-primary float-right">Simpan</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->
<br>
          </div>
      
    </section>
  
<?php $this->load->view('template/foot') ?>