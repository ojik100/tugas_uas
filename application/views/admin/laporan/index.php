<?php $this->load->view('template/head') ?>
<?php $this->load->view('template/nav') ?>
<?php $this->load->view('template/slidbar') ?>
<script type="text/javascript" src="<?= base_url() ?>asset//Chart.js"></script>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><i class="fa fa-print"></i> Data Laporan</h1>
                
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">
     
          <div class="card">
           
            <!-- /.card-header -->
     <div class="card-body">
     <div class="row">
        <div class="col-md-5">
        <div class="col-lg-6 col-4">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
              
                <p>Data Alumni</p>
              </div>
              <div class="icon">
                <i class="fa fa-print"></i>
              </div>
              <a href="<?= base_url('Laporan/cetakalumni') ?>" class="small-box-footer">Cetak <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-6 col-4">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
              
                <p>Data Wali</p>
              </div>
              <div class="icon">
                <i class="fa fa-print"></i>
              </div>
              <a href="<?= base_url('Laporan/cetakwali') ?>" class="small-box-footer">Cetak <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        </div>
        <div class="col-md-7">
        <canvas id="myChart"></canvas>
	
        </div>
     </div>
  
    </div>
    </div>
    </div>

             
 
	<script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: ["Data Alumni", "Data kecamatan", "Data Kabupaten", "Data Provinsi"],
				datasets: [{
					label: '# Statistik Data',
					data: [
            <?php echo $alumni ?>,
            <?php echo $kecamatan;?>
          ,<?php echo $kabupaten;?>,
          <?php echo $provinsi;?>,
           2, 3],
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
				
					],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
	</script>   