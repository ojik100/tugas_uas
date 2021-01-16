<?php $this->load->view('template/head') ?>
<?php $this->load->view('template/nav') ?>
<?php $this->load->view('template/slidbar') ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><i class="fa fa-book"></i> Data Wali</h1>
                
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">
     
          <div class="card">
           
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                  
                  <thead>
                <tr>
                <th>Nama Siswa</th>
                  <th>Nama Ayah</th>
                  <th>Nama Ibuk</th>
                  <th>Pekerjaan Ayah</th>
                  <th>Pekeraan Ibuk</th>
                  <th>Nomo Wali</th>
                 <th
                  style="text-align:center" > <a href="<?= base_url('Wali/tambah') ?>"><i class="btn btn-primary"><span class="fa fa-plus-circle"> Tambah Data</span></i> </a>
                 </th>
                </tr>
                </thead>
                <tbody>
               
                <tr>
                <?php foreach($wali as $a):?>
                  <td><a href="<?php echo site_url('Alumni/detail/'.$a->id_alumni) ?>"><?=$a->nama?></a></td>
                  <td><?=$a->nama_ayah?></td>
                  <td><?=$a->nama_ibuk?></td>
                  <td><?=$a->pekerjaan_ayah?></td>
                  <td><?=$a->pekerjaan_ibuk?></td>
                  <td><?=$a->no_wali?></td>
                  <td align="center">
                       <a href="<?php echo site_url('Wali/edit/'.$a->id_wali) ?>" ><i class="btn btn-warning"><span class="fa fa-edit"></span></i></a>
                      <a href="<?php echo site_url('Wali/hapus/'.$a->id_wali) ?>" ><i class="btn btn-danger"><span class="fa fa-trash"></span></i></a>
                  </td>
                </tr>
                <?php endforeach;?>
                
                </tbody>
               
              </table>
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
	
<?php $this->load->view('template/foot') ?>