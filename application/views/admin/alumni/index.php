<?php $this->load->view('template/head') ?>
<?php $this->load->view('template/nav') ?>
<?php $this->load->view('template/slidbar') ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><i class="fa fa-book"></i> Data Alumni</h1>
                
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
                <th>NIS</th>
                  <th>Nama Alumni</th>
                  <th>Jenis Kelamin</th>
                  <th>Angkatan</th>
                  <th>Poto</th>
                <th style="text-align:center" > <a href="<?= base_url('Alumni/tambah') ?>"><i class="btn btn-primary"><span class="fa fa-plus-circle"> Tambah Data</span></i> </a>
                 </th>
                </tr>
                </thead>
                <tbody>
               
                <tr>
                <?php foreach($alumni as $a):?>
                  <td><?=$a->nis?></td>
                  <td><?=$a->nama?></td>
                  <td><?=$a->jk?></td>
                  <td><?=$a->angkatan?></td>
                  <td>
                   <img src="<?php echo base_url('upload/alumni/'.$a->poto) ?>" width="80" alt=""> </td>
                    
                  <td align="center">
                    <a href="<?php echo site_url('Alumni/detail/'.$a->id_alumni) ?>" ><i class="btn btn-info"><span class="fa fa-eye"></span></i></a>
                      <a href="<?php echo site_url('Alumni/edit/'.$a->id_alumni) ?>" ><i class="btn btn-warning"><span class="fa fa-edit"></span></i></a>
                      <a href="<?php echo site_url('Alumni/hapus/'.$a->id_alumni) ?>" ><i class="btn btn-danger"><span class="fa fa-trash"></span></i></a>
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