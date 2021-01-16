<?php $this->load->view('template/head') ?>
<?php $this->load->view('template/nav') ?>
<?php $this->load->view('template/slidbar') ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Berita Alumni</h1>
                
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
                  <th>Id</th>
                  <th>Judul</th>
                  <th>Gambar</th>
                  <th>Info</th>
                
                 <th style="text-align:center" > <a href="<?= base_url('info/create') ?>"><i class="btn btn-primary"><span class="fa fa-plus"> Tambah Data</span></i> </a>
          </th>
         
                </tr>
                </thead>
                <tbody>
                <?php foreach($info as $a):?>
                  <td><?=$a->id_info?></td>
                  <td><?=$a->nama_info?></td>
                  <td>
                   <img src="<?php echo base_url('upload/info/'.$a->gambar) ?>" width="80" alt=""> </td>
                    
                  <td><?=$a->info?></td>

                  <td align="center">
              <a href="<?php echo site_url('Info/edit/'.$a->id_info) ?>" ><i class="btn btn-warning"><span class="fa fa-edit"></span></i></a>
                      <a href="<?php echo site_url('Info/hapus/'.$a->id_info) ?>" ><i class="btn btn-danger"><span class="fa fa-trash"></span></i></a>
                  </td>
                </tr>
                <?php endforeach;?>
                
                </tr>
                
                </tbody>
                <tfoot>
               
                </tfoot>
              </table>
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