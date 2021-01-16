<?php $this->load->view('web/template/head') ?>
<?php $this->load->view('web/template/nav') ?>
<?php $this->load->view('web/template/slidbar') ?>



<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><i class="fa fa-eye"></i> Data Saya</h1>

                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">

                    <!-- Profile Image -->
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">

                                <?php foreach($alumni as $a):?>
                                <img class="profile-user-img img-fluid img-circle "
                                    src="<?php echo base_url('upload/alumni/'.$a->poto) ?>" width="100"
                                    alt="User profile picture">
                            </div>

                            <h3 class="profile-username text-center"><?= $a->nama ?></h3>
                            <?php endforeach;?>




                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                    <!-- About Me Box -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Identitas</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">


                            <strong><i class="fas fa-map-marker-alt mr-1"></i> Alamat</strong>

                            <p class="text-muted"><?= $a->alamat ?></p>

                            <hr>

                            <strong><i class="fas fa-map"></i> Lokasi</strong>

                            <div id='map' style="height: 100px"></div>


                            <hr>

                            <strong><i class="far fa-map"></i> Maps</strong>

                            <p>Lattitude : <b><?= $a->lattitude ?></b> </p>
                            <p>Longitude : <b><?= $a->longitude ?></b> </p>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header p-2">
                            <ul class="nav nav-pills">
                                <li class="nav-item"><a class="nav-link active" href="#activity"
                                        data-toggle="tab">Identitas Alumni</a></li>

                                <li class="nav-item"><a class="nav-link" href="#wali" data-toggle="tab">Identitas
                                        Wali</a></li>
                            </ul>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="active tab-pane" id="activity">

                                    <?php foreach($alumni as $a):?>
                                    <form class="form-horizontal">



                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                            <div class="col-sm-10">
                                                <input type="text" disabled class="form-control" value=<?= $a->jk ?>>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-2 col-form-label">Tempat Lahir</label>
                                            <div class="col-sm-10">
                                                <input type="text" disabled class="form-control"
                                                    value=<?= $a->tempat_lhr ?>>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                            <div class="col-sm-10">
                                                <input type="text" disabled class="form-control"
                                                    value=<?= $a->tgl_lhr ?>>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-2 col-form-label">Angkatan</label>
                                            <div class="col-sm-10">
                                                <input type="text" disabled class="form-control"
                                                    value=<?= $a->angkatan ?>>
                                            </div>
                                        </div>

                                       
                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-2 col-form-label">Nomor </label>
                                            <div class="col-sm-10">
                                                <input type="text" disabled class="form-control" value=<?= $a->no ?>>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10">
                                                <input type="text" disabled class="form-control" value=<?= $a->email ?>>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-2 col-form-label">Pekerjaan</label>
                                            <div class="col-sm-10">
                                                <input type="text" disabled class="form-control"
                                                    value=<?= $a->pekerjaan ?>>
                                            </div>
                                        </div>



                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-2 col-form-label">Kecamatan</label>
                                            <div class="col-sm-10">
                                                <input type="text" disabled class="form-control"
                                                    value=<?= $a->kecamatan ?>>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-2 col-form-label">Kabuaten</label>
                                            <div class="col-sm-10">
                                                <input type="text" disabled class="form-control"
                                                    value=<?= $a->kabupaten ?>>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-2 col-form-label">Provinsi</label>
                                            <div class="col-sm-10">
                                                <input type="text" disabled class="form-control"
                                                    value=<?= $a->provinsi ?>>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-2 col-form-label">Kecamatan</label>
                                            <div class="col-sm-10">
                                                <input type="text" disabled class="form-control"
                                                    value=<?= $a->kecamatan ?>>
                                            </div>
                                        </div>



                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-2 col-form-label">Password</label>
                                            <div class="col-sm-10">
                                                <input type="text" disabled class="form-control"
                                                    value=<?= $a->password ?>>
                                            </div>
                                        </div>



                                    </form>

                                    <?php endforeach;?>
                                </div>


                                <div class="tab-pane" id="wali">
                                    <?php foreach($wali as $a):?>
                                    <form class="form-horizontal">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-2 col-form-label">Nama Ayah</label>
                                            <div class="col-sm-10">
                                                <input type="text" value=<?= $a->nama_ayah ?> disabled
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-sm-2 col-form-label">Nama Ibuk</label>
                                            <div class="col-sm-10">
                                                <input type="text" value=<?= $a->nama_ibuk ?> disabled
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-sm-2 col-form-label">Pekerjaan Ayah</label>
                                            <div class="col-sm-10">
                                                <textarea name="" id="" class="form-control"
                                                    disabled><?= $a->pekerjaan_ayah ?> </textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-sm-2 col-form-label">Pekerjaan Ibuk</label>
                                            <div class="col-sm-10">
                                                <textarea name="" id="" class="form-control"
                                                    disabled><?= $a->pekerjaan_ibuk ?> </textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-2 col-form-label">No Wali</label>
                                            <div class="col-sm-10">
                                                <input type="text" value=<?= $a->no_wali ?> disabled
                                                    class="form-control">
                                            </div>
                                        </div>





                                    </form>
                                    <?php endforeach;?>
                                </div>
                                <!-- /.tab-pane -->
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
    <script>
    mapboxgl.accessToken =
        'pk.eyJ1Ijoid2FoeXVsb21ib2siLCJhIjoiY2s1YXNqdjNuMGZwazNmcndtb3F0NXFxMyJ9.9P4irlsdzn1wh7O7qM_NvQ';
    // var lng = document.getElementById('lng');
    // var lat = document.getElementById('lat');

    var map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/streets-v11',
        center: [116.8334831, -8.582711],
        zoom: 7,


    });

    <
    ?
    php foreach($alumni as $su): ? >

        new mapboxgl.Marker({

        })
        .setLngLat([ < ? php echo $su - > longitude ? > , < ? php echo $su - > lattitude ? > ]).addTo(map);

    <
    ?
    php endforeach; ? >
    </script>
    <br>







    <!-- jQuery -->
    <script src="<?= base_url() ?>asset/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?= base_url() ?>asset/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
    $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url() ?>asset/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="<?= base_url() ?>asset/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="<?= base_url() ?>asset/plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="<?= base_url() ?>asset/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="<?= base_url() ?>asset/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?= base_url() ?>asset/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="<?= base_url() ?>asset/plugins/moment/moment.min.js"></script>
    <script src="<?= base_url() ?>asset/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="<?= base_url() ?>asset/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="<?= base_url() ?>asset/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="<?= base_url() ?>asset/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url() ?>asset/dist/js/adminlte.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="<?= base_url() ?>asset/dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?= base_url() ?>asset/dist/js/demo.js"></script>

    <!-- jQuery -->
    <script src="<?= base_url() ?>asset/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?= base_url() ?>asset/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
    $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url() ?>asset/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="<?= base_url() ?>asset/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="<?= base_url() ?>asset/plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="<?= base_url() ?>asset/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="<?= base_url() ?>asset/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?= base_url() ?>asset/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="<?= base_url() ?>asset/plugins/moment/moment.min.js"></script>
    <script src="<?= base_url() ?>asset/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="<?= base_url() ?>asset/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="<?= base_url() ?>asset/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="<?= base_url() ?>asset/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url() ?>asset/dist/js/adminlte.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="<?= base_url() ?>asset/dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?= base_url() ?>asset/dist/js/demo.js"></script>
    <script src="<?= base_url() ?>asset/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url() ?>asset/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables -->
    <script src="<?= base_url() ?>asset/plugins/datatables/jquery.dataTables.js"></script>
    <script src="<?= base_url() ?>asset/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url() ?>asset/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?= base_url() ?>asset/dist/js/demo.js"></script>
    <!-- page script -->
    <script>
    $(function() {
        $("#example1").DataTable();
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
        });
    });
    </script>
    </body>

    </html>