
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
            <h1><i class="fa fa-edit"></i> Edit Alumni</h1>
                
          </div>
        </div>
      </div>
    </section>
    <section class="content">
     
    <div class="card card-success">
             
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" method="post" action="<?= base_url('info/aksi_edit') ?>" enctype="multipart/form-data">
              <?php foreach($info as $a):?>
                
                <div class="card-body">
                  <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Judul Info</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="id_info" value="<?= $a->id_info ?>" placeholder="Judul Info">
                    
                      <input type="text" class="form-control" name="nama_info" value="<?= $a->nama_info ?>" placeholder="Judul Info">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Gambar</label>
                    <div class="col-sm-10">
                      <input type="file" class="form-control" id="" name="gambar"  value="<?= $a->gambar ?>">
                      <br>
                      <div>
                      <img src="<?php echo base_url('upload/info/'.$a->gambar) ?>" width="150" alt=""> </td>
                   
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Info</label>
                    <div class="col-sm-10">
                 <textarea name="info" class="form-control" id="" cols="30"  rows="10"><?= $a->info ?></textarea>
                    </div>
                  </div>
                
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                <button type="reset" class="btn btn-danger">Batal</button>
                 <button type="submit" class="btn btn-primary float-right">Update</button>
                </div>
                <?php endforeach;?>
                
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->
<br>
          </div>
      
    </section>
  
<?php $this->load->view('template/foot') ?>