
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
            <h1><i class="fa fa-edit"></i> Edit Data Alumni</h1>
                
          </div>
        </div>
      </div>
    </section>
    <section class="content">
     
          <div class="card">
           
            <div class="card-body">
                <form action="<?php echo site_url('Alumni/aksi_edit') ?>" method="post" enctype="multipart/form-data">  
                <?php foreach($alumni as $a):?>
                
                <div class="col-md-3">
                        <label for=""><b>NIS :</b></label>
                        <input type="hidden" class="form-control"  value="<?= $a->id_alumni ?>"  name="id_alumni"  placeholder="NIS" id="">
                 
                        <input type="number" class="form-control"  value="<?= $a->nis ?>"  name="nis" required placeholder="NIS" id="">
                    </div>
                <div class="col-md-10">
                        <label for=""><b>Nama Lengkap :</b></label>
                        <input type="text" class="form-control" name="nama" value="<?= $a->nama ?>" placeholder="Nama Lengkap" required id="">
                    </div>
                    <div class="col-md-5">
                        <label for=""><b>Jenis Kelamin :</b></label>
                       <select name="jk" value="<?= $a->jk ?>" class="form-control" id="">
                       <option value="" class="form-control">-Pilih-</option>
                           <option value="Laki-Laki" class="form-control">Laki-Laki</option>
                           <option value="Perempuan" class="form-control">Perempuan</option>
                       </select>
                    </div>
                    <div class="col-md-8">
                        <label for=""><b>Tempat Lahir :</b></label>
                        <input type="text" class="form-control" name="tempat_lhr" value="<?= $a->tempat_lhr ?>" required placeholder="Tempat Lahir" id="">
                    </div>
                    <div class="col-md-3">
                        <label for=""><b>Tanggal Lahir :</b></label>
                        <input type="date" class="form-control" name="tgl_lhr" value="<?= $a->tgl_lhr ?>" id="">
                    </div>
                    <div class="col-md-3">
                        <label for=""><b>Angkatan :</b></label>
                        <input type="number" class="form-control" name="angkatan" value="<?= $a->angkatan ?>" required placeholder="Angkatan" id="">
                    </div> 
                    <div class="col-md-9">
                        <label for=""><b>Jurusan :</b></label>
                       <select name="id_jur" class="form-control" id="">
                       <option value="">-Pilh-</option>
                          
                       <?php foreach($jurusan as $k):?>
											
                        <option  value="<?= $k->id_jur?>"><?= $k->jurusan ?></option>
                                           
                                               
                    <?php endforeach;?>
                          
                       </select>
                    </div>
                   
                    <div class="col-md-9">
                        <label for=""><b>Nomor Telepon :</b></label>
                        <input type="text" class="form-control" name="no" required value="<?= $a->no ?>"  placeholder="08" id="">
                    </div> 
                    <div class="col-md-9">
                        <label for=""><b>Email :</b></label>
                        <input type="text" class="form-control" name="email" required value="<?= $a->email ?>"  placeholder="contoh@gmail.com" id="">
                    </div> 
                    <div class="col-md-5">
                        <label for=""><b>Foto :</b></label>
                        <input type="file" class="form-control" name="poto" value="<?= $a->poto ?>" required id="">
                        
                    </div> 
                    <div class="col-md-9">
                        <label for=""><b>Pekerjaan :</b></label>
                        <input type="text" class="form-control" name="pekerjaan" required value="<?= $a->pekerjaan ?>" placeholder="Pekerjaan" id="">
                    </div>
                     <div class="col-md-12">
                        <label for=""><b>Alamat :</b></label>
                       <textarea name="alamat" required  placeholder="Alamat Lengkap" class="form-control" id="" cols="20" rows="5"><?= $a->alamat ?></textarea>
                    </div> 
                    <div class="col-md-9">
                        <label for=""><b>Kecamatan :</b></label>
                       <select name="id_kec" class="form-control" id="">
                       <option value="">-Pilh-</option>
                          
                       <?php foreach($kecamatan as $k):?>
											
                        <option  value="<?= $k->id_kec?>"><?= $k->kecamatan ?></option>
                                           
                                               
                    <?php endforeach;?>
                          
                       </select>
                    </div>
                    <div class="col-md-9">
                        <label for=""><b>Kabupaten :</b></label>
                       <select name="id_kab" class="form-control" id="">
                           <option value="">-Pilh-</option>
                           <?php foreach($kabupaten as $k):?>
											
                                            <option  value="<?= $k->id_kab?>"><?= $k->kabupaten ?></option>
                                                               
                                                                   
                                        <?php endforeach;?>
                       </select>
                    </div>
                    <div class="col-md-9">
                        <label for=""><b>Provinsi :</b></label>
                       <select name="id_prov" class="form-control" id="">
                           <option value="">-Pilh-</option>
                           <?php foreach($provinsi as $k):?>
											
                                            <option  value="<?= $k->id_prov?>"><?= $k->provinsi ?></option>
                                                               
                                                                   
                                        <?php endforeach;?>
                       </select>
                    </div>
                    <div class="col-md-12">
                       
                    <label for=""><b>Pilih Lokasi: </b></label>
                    <div class="col-md-9">
						<div id='map' style="height: 300px" ></div>
                    </div>
                    <div class="col-md-9">
                        <label for=""><b>Lattitude :</b></label>
                      	
						<textarea id="lat" class="form-control"  name="lattitude" cols="30" rows="1"><?= $a->lattitude ?></textarea>
                    </div>
                    <div class="col-md-9">
                        <label for=""><b>Longitude :</b></label>
                        		
						<textarea id="lng" class="form-control"  name="longitude" cols="30" rows="1"><?= $a->longitude ?></textarea>
                    </div>
                   
                    <div class="col-md-9">
                        <label for=""><b>Password :</b></label>
                        <input type="text" class="form-control" name="password" placeholder="Password" value="<?= $a->password  ?>" id="">
                    </div>
                    <?php endforeach;?>
                    <br>
                    <button type="submit" class="btn btn-success">Update</button>
                    <button type="reset" class="btn btn-danger">Batal</button>
                </form>
                 
            </div>
          
          </div>
          
        </div>
      
      </div>
      
    </section>

    <?php $this->load->view('admin/maps/scripts') ?>   
<?php $this->load->view('template/foot') ?>