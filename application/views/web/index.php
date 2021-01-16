<?php $this->load->view('web/template/head') ?>
<?php $this->load->view('web/template/nav') ?>
<?php $this->load->view('web/template/slidbar') ?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Identitas Alumni</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Identitas</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
          </div>
          <!-- /.col -->
          <div class="container-fluid">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Lengkapi Data Alumni</a></li>
                  <li class="nav-item"><a class="nav-link" href="#wali" data-toggle="tab">Data Wali</a></li>
                     </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                  <?php foreach($alumni as $a):?>
                  <form class="form-horizontal" method="POST" action="<?= base_url('Home/lengkapi')?>" enctype="multipart/form-data">
               
                  <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">NIS</label>
                        <div class="col-sm-10">
                        <input type="hidden" class="form-control"  value="<?= $a->id_alumni ?>" name="id_alumni">
                      
                          <input type="text" class="form-control" id="" name ="nis" value="<?= $a->nis ?>" disabled >
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="" disabled name="nama" value="<?= $a->nama ?>" placeholder="Nama Lengkap">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-10">
                        <select name="jk" id="" class="form-control" value="<?= $a->jk ?>">
                            <option value="" >Pilih</option>
                            <option value="Laki-Laki" >Laki-Laki</option>
                            <option value="Perempuan" >Perempuan</option>
                        </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label" >Tempat Lahir</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" value="<?= $a->tempat_lhr ?>"  name="tempat_lhr" placeholder="Tempat Lahir">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-10">
                          <input type="date" class="form-control" value="<?= $a->tgl_lhr ?>"  name="tgl_lhr">
                        </div>
                      </div>
                     
                       
                      <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Angkatan</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control"  name="angkatan" value="<?= $a->angkatan ?>" placeholder="Angkatan">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Jurusan</label>
                        <div class="col-sm-10">
                        <select name="id_jur" id="" class="form-control" value="<?= $a->jk ?>">
                            <option value="" >Pilih</option>
                         
                            <?php foreach($jurusan as $k):?>
                          <option  value="<?= $k->id_jur?>"><?= $k->jurusan ?></option>
                          <?php endforeach;?>
                        </select>
                     
                        </div>
                      </div>
                                 
                                             
              
                     
                      <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">No Telepon</label>
                        <div class="col-sm-10">
                          <input type="number" class="form-control" value="<?= $a->no ?>" name="no">
                        </div>
                      </div>
                     
                      <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control"  name="email" value="<?= $a->email ?>" placeholder="Email">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Foto</label>
                        
                        <div class="col-sm-10">
                           <input type="file" class="form-control" value="<?= $a->poto ?>" name="poto" ><BR>
                           <img src="<?php echo base_url('upload/alumni/'.$a->poto) ?>"  width="150" alt="">
                          
                        </div>
                      </div>
                     
                      <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Pekerjaan</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" value="<?= $a->pekerjaan ?>"  name="pekerjaan" placeholder="Pekerjaan">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" value="<?= $a->alamat ?>"  name="alamat" placeholder="Alamat">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Kecamatan</label>
                        <div class="col-sm-10">
                        <select name="id_kec" id="" class="form-control" value="<?= $a->kecamatan ?>">
                            <option value="" >Pilih</option>
                            <?php foreach($kecamatan as $k):?>
											
                                            <option  value="<?= $k->id_kec?>"><?= $k->kecamatan ?></option>
                                                               
                                                                   
                                        <?php endforeach;?>
                        </select>
                        </div>
                      </div>
                      

                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Kabupaten</label>
                        <div class="col-sm-10">
                        <select name="id_kab" id="" class="form-control" value="<?= $a->kabupaten ?>">
                            <option value="" >Pilih</option>
                            <?php foreach($kabupaten as $k):?>
								
                            <option  value="<?= $k->id_kab?>"><?= $k->kabupaten ?></option>
                                                               
                                                                   
                                        <?php endforeach;?>
                        </select>
                        </div>
                      </div>
                     
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Provinsi</label>
                        <div class="col-sm-10">
                        <select name="id_prov" id="" class="form-control" value="<?= $a->provinsi ?>">
                            <option value="" >Pilih</option>
                            <?php foreach($provinsi as $k):?>
											
                                            <option  value="<?= $k->id_prov?>"><?= $k->provinsi ?></option>
                                                               
                                                                   
                                        <?php endforeach;?>
                       </select>
                        </select>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Pilih Lokasi</label>
                        <div class="col-sm-10">
                        <div id='map' style="height: 300px" ></div>

                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Lattitude</label>
                        <div class="col-sm-10">
                        <textarea id="lat" class="form-control" name="lattitude"  cols="30" rows="1"><?= $a->lattitude ?></textarea>
               
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Longitude</label>
                        <div class="col-sm-10">
                        <textarea id="lng" class="form-control" name="longitude"  cols="30" rows="1"><?= $a->longitude ?></textarea>
                 
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" value="<?= $a->password ?>"  name="password" disabled>
                        </div>
                      </div>
                     

                          
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                        <button type="submit" class="btn btn-success">Simpan</button>
                          <button type="reset" class="btn btn-danger">Batal</button>
                       
                    </div>
                      </div>
                    </form>
                    
                    <?php endforeach;?>
                   </div>
                  <div class="tab-pane" id="wali">
                    <!-- The timeline -->
                   
                    <form class="form-horizontal" method="post" action="<?= base_url('Home/lengkapi_ayah') ?>">
                      <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Nama Ayah</label>
                        <div class="col-sm-10">
                        <input type="hidden" name="id_alumni"  class="form-control" value="<?php echo $this->session->userdata("id_alumni"); ?>">
                          <input type="text" name="nama_ayah"  class="form-control" placeholder="Ayah">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Nama Ibuk</label>
                        <div class="col-sm-10">
                          <input type="text" name="nama_ibuk"  class="form-control" placeholder="Ibuk" >
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Pekerjaan Ayah</label>
                        <div class="col-sm-10">
                        <input type="text" name="pekerjaan_ayah"  class="form-control" placeholder="Pekerjaa Ayah" >
                    
                       </div>
                      </div>
                      <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Pekerjaan Ibuk</label>
                        <div class="col-sm-10">
                        <input type="text" name="pekerjaan_ibuk"  class="form-control" placeholder="Pekerjaan Ibuk" >
                        
                    </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">No Wali</label>
                        <div class="col-sm-10">
                          <input type="number" name="no_wali" class="form-control" placeholder="No Wali" >
                        </div>
                      </div>
                      
                      
                      
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-success">Simpan</button>
                          <button type="reset" class="btn btn-danger">Batal</button>
                     
                        </div>
                      </div>
                     
                    </form>
                  
                  </div>
                  </div>
                
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  
  
  <?php $this->load->view('admin/maps/scripts') ?>   
<?php $this->load->view('web/template/foot') ?>