
<?php $this->load->view('template/head') ?>
<?php $this->load->view('template/nav') ?>
<?php $this->load->view('template/slidbar') ?>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>
<div class="content-wrapper">
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><i class="fa fa-map-marked-alt"></i> Pemetaan Alumni</h1>
                
          </div>
        </div>
      </div>
    </section>
    <section class="content">
     <div class="card">
       <div class="card-body">
            <div class="row">
                <div class="col-md-9">
                  
                <div id='mapid' style="height: 500px" ></div>
                
                </div>
                <div class="col-md-3">
                <ul class="list-group">
  <li class="list-group-item active"><i class="fa fa-map-marked-alt"></i> List Alumni</li>
  <?php foreach($alumni as $su):?>
  <li class="list-group-item"><a href="<?php echo site_url('Alumni/detail/'.$su->id_alumni) ?>"><i class="fa fa-map-marker-alt"><span style="color:black"> <?=$su->nama ?></span></i></a></li>
  <?php endforeach;?> 

</ul>
                </div>

                </div>
            </div>
</div>
</div>
</div>
   
        </div>

        <script>
                                    var mymap = L.map('mapid').setView([-8.531107, 116.347338], 9);

L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1Ijoid2FoeXVsb21ib2siLCJhIjoiY2s1YXNqdjNuMGZwazNmcndtb3F0NXFxMyJ9.9P4irlsdzn1wh7O7qM_NvQ', {
	
	attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
		'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
		'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
	id: 'mapbox/streets-v11',
	
}).addTo(mymap);

<?php foreach($alumni as $su):?>
L.marker([<?php echo $su->lattitude?>,<?php echo $su->longitude?>]).addTo(mymap)
		.bindPopup("<b><b>NIS : <b/><?= $su->nis?></b><br /><B>Nama : </b><?= $su->nama?><b></b>").openPopup();


		<?php endforeach;?>							
		</script>

									
									

									
                                </script>

     
<?php $this->load->view('template/foot') ?>