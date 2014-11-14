
<?php
	$aksi="modul/modul_perusahaan/control_data_perusahaan.php";
	$idTemp=3;
switch($_GET[act]){
  // Tampil Relawan
  default:
    
?>		
<script src="assets/plugins/jQuery-lib/2.0.3/jquery.min.js"></script>
		<!--<![endif]-->
		<script src="assets/plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js"></script>
		<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
		<script src="assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js"></script>
		<script src="assets/plugins/blockUI/jquery.blockUI.js"></script>
		<script src="assets/plugins/iCheck/jquery.icheck.min.js"></script>
		<script src="assets/plugins/perfect-scrollbar/src/jquery.mousewheel.js"></script>
		<script src="assets/plugins/perfect-scrollbar/src/perfect-scrollbar.js"></script>
		<script src="assets/plugins/less/less-1.5.0.min.js"></script>
		<script src="assets/plugins/bootstrap-colorpalette/js/bootstrap-colorpalette.js"></script>
		<script src="assets/js/main.js"></script>
		<!-- end: MAIN JAVASCRIPTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script type="text/javascript" src="assets/plugins/bootbox/bootbox.min.js"></script>
		<script type="text/javascript" src="assets/plugins/jquery-mockjax/jquery.mockjax.js"></script>
		<script type="text/javascript" src="assets/plugins/select2/select2.min.js"></script>
		<script type="text/javascript" src="assets/plugins/DataTables/media/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" src="assets/plugins/DataTables/media/js/DT_bootstrap.js"></script>
		<script src="assets/js/table-data.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script>
			jQuery(document).ready(function() {
				Main.init();
				TableData.init();
			});
		</script>
		<link rel="stylesheet" type="text/css" href="assets/plugins/select2/select2.css" />
		<link rel="stylesheet" href="assets/plugins/DataTables/media/css/DT_bootstrap.css" />
				
					<div class="row">
						<div class="col-sm-12">
							<!-- start: PAGE TITLE & BREADCRUMB -->
							<ol class="breadcrumb">
								<li>
									<i class="clip-home-3"></i>
									<a href="#">
										Home
									</a>
								</li>
								<li class="active">
									Perusahaan
								</li>
							</ol>
							<div class="page-header">
								<h1>Perusahaan <small>overview &amp; stats </small></h1>
							</div>
						</div>	
						
					</div>
					<div class="row fileupload-buttonbar">
						<div class="col-lg-7">
							<button onclick="window.location.href='?module=profilPerusahaan&act=tambahperusahaan'" class="btn btn-primary start">
								<i class="glyphicon glyphicon-upload"></i>
								<span>Tambah Perusahaan</span>
							</button>
						</div>
					</div>
	
					<div class="row">
						<div class="col-sm-12"></div>
					</div>
					
					<div class="row">
						
						<div class="col-md-12">
							<div class="panel panel-default">
								<div class="panel-heading">
									<i class="fa fa-external-link-square"></i>
									List
									<div class="panel-tools">
										<a class="btn btn-xs btn-link panel-collapse collapses" href="#"> </a>
										<a class="btn btn-xs btn-link panel-config" href="#panel-config" data-toggle="modal"> <i class="fa fa-wrench"></i> </a>
										<a class="btn btn-xs btn-link panel-refresh" href="#"> <i class="fa fa-refresh"></i> </a>
										<a class="btn btn-xs btn-link panel-expand" href="#"> <i class="fa fa-resize-full"></i> </a>
										<a class="btn btn-xs btn-link panel-close" href="#"> <i class="fa fa-times"></i> </a>
									</div>
								</div>
								<div class="panel-body">
									
									<div class="table-responsive">
										<table class="table table-striped table-hover" id="sample_2">
											<thead>
												<tr>
													<th>Judul</th>
													<th>Edit</th>
													<th>Delete</th>
												</tr>
											</thead>
											<tbody>
											<?php
												$no=1;
												$queryPrsh=mysql_query("select namaPerusahaan, idPerusahaan from perusahaan order by idPerusahaan ASC");
												while($fetchPrsh=mysql_fetch_array($queryPrsh)){
													$idPerusahaan=$fetchPrsh['idPerusahaan'];
													$namaPerusahaan=$fetchPrsh['namaPerusahaan'];
											?>
												<tr>
													<td><?php echo $namaPerusahaan; ?></td>
													<td><a href="?module=profilPerusahaan&act=editperusahaan&<?php echo 'id='.$idPerusahaan; ?>"> Edit </a></td>
													<td><a href="<?php echo $aksi.'?module=profilPerusahaan&act=delete&id='.$idPerusahaan; ?>"> Delete </a></td>
												</tr>
												<?php
													$no++;
													}
												?>
											</tbody>
										</table>
									</div>
								</div>
							</div>

						</div>
					</div>
					
		<link rel="stylesheet" href="assets/plugins/bootstrap-fileupload/bootstrap-fileupload.min.css">
					
		<script src="assets/plugins/bootstrap-fileupload/bootstrap-fileupload.min.js"></script>
		<script src="assets/plugins/ckeditor/adapters/jquery.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
	
<?php
break;
case "tambahperusahaan":
include("../koneksi.php");
?>
 
 <link rel="stylesheet" href="../ammap/ammap.css" type="text/css">
	<script type="text/javascript" src="../ammap/jquery-1.7.1.min.js"></script>
	<script src="../ammap/ammap.js" type="text/javascript"></script>
        <script src="../ammap/maps/js/indonesiaLow.js" type="text/javascript"></script>
		<?php
			$query=mysql_query("SELECT * FROM peta order by id");
			$ketemu=mysql_num_rows($query);
			$no=0;
		?>
		<script type="text/javascript">
		// svg path for target icon
		var targetSVG = "M9,0C4.029,0,0,4.029,0,9s4.029,9,9,9s9-4.029,9-9S13.971,0,9,0z M9,15.93 c-3.83,0-6.93-3.1-6.93-6.93S5.17,2.07,9,2.07s6.93,3.1,6.93,6.93S12.83,15.93,9,15.93 M12.5,9c0,1.933-1.567,3.5-3.5,3.5S5.5,10.933,5.5,9S7.067,5.5,9,5.5 S12.5,7.067,12.5,9z";
		var res = {
					"map":"indonesiaLow",
					"images":[
					
					
						<?php 
						while($r=mysql_fetch_array($query)){?>
						{	
							"id":"<?php echo $r['id'] ?>",
							"svgPath":"<?php echo $r['svgPath'] ?>",
							"zoomLevel": 5,
							color: "#15A892",
							"scale": 0.5,
							"title": "<?php echo $r['title'] ?>",
							"latitude": <?php echo $r['latitude'] ?>,
							"longitude": <?php echo $r['longitude'] ?>,
							
							<?php 
							$no++;
							if ($no==$ketemu){ 
					 ?> } <?php } else { ?> }, <?php }
							} //akhir while
							?>
						
					]
				   }
		var map = AmCharts.makeChart("mapdiv", {
			type: "map",
			pathToImages: "../ammap/images/",

			imagesSettings: {
				rollOverColor: "#CC0000",
				rollOverScale: 3,
				selectedScale: 3,
				selectedColor: "#CC0000"
			},
			areasSettings:{unlistedAreasColor:"#FFCC00"},
			objectList: {
				container: "searchresults"
			},
			showImagesInList: true,
			dataProvider: res
		});

		map.addListener("clickMapObject", function (event) {
			document.getElementById("info").innerHTML = '<span class="medium-text"><span class="main-color">'+event.mapObject.title+'</span></span>' ;
			
		});
		map.addListener("click", function (event) {
			var info = event.chart.getDevInfo();
			console.log(info);
			
			var log = document.getElementById('maplog');
			document.pointform.latitude.value = info.latitude;
			document.pointform.longitude.value =info.longitude;
			//log.innerHTML = "Test ambil Data Koordinat: (lat: "+ info.latitude + " long: "+ info.longitude + ")<br />" + log.innerHTML;
		});
		
        </script>
					<div class="row">
						<div class="col-sm-12">
							<!-- start: PAGE TITLE & BREADCRUMB -->
							<ol class="breadcrumb">
								<li>
									<i class="clip-home-3"></i>
									<a href="#">
										Home
									</a>
								</li>
								<li class="active">
									Tambah Perusahaan
								</li>
							</ol>
							<div class="page-header">
								<h1>Tambah Perusahaan <small>overview &amp; stats </small></h1>
							</div>
						</div>	
						
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div id="listdiv" style="width:200px; overflow:auto; height:500px; float:right; background-color:#EEEEEE;">
								<input type="text" style="width:190px;overflow:auto;" id="search" placeholder="Cari Area" />
								<div id="searchresults" style="height:300px; "></div>
							</div>
							<div id="placeholder"></div> <!-- Tampilkan gambar hover -->
								<div id="mapdiv" style="margin-right:200px; background-color:#EEEEEE; height: 500px;"></div><!-- -->
								<div id="info"></div><!-- -->
								<div id="maplog" style="font-family:trebuchet ms;font-weight:bold"></div><!-- -->
						</div>
						<div class="col-sm-12">
						
						
							<!-- start: WYSIWYG EDITORS PANEL -->
							<div class="panel panel-default">
								
								<div class="panel-heading">
									<i class="fa fa-external-link-square"></i>
									Tambah Perusahaan
									<div class="panel-tools">
										<a class="btn btn-xs btn-link panel-collapse collapses" href="#">
										</a>
										<a class="btn btn-xs btn-link panel-config" href="#panel-config" data-toggle="modal">
											<i class="fa fa-wrench"></i>
										</a>
										<a class="btn btn-xs btn-link panel-refresh" href="#">
											<i class="fa fa-refresh"></i>
										</a>
										<a class="btn btn-xs btn-link panel-expand" href="#">
											<i class="fa fa-resize-full"></i>
										</a>
									</div>
								</div>
								
								
								<div class="panel-body">
								<form name="pointform" action="<?php echo $aksi."?module=profilPerusahaan&act=input" ?>" method="POST">
									<div class="row">
										<div class="col-sm-12">
										
										<div class="form-group">
												<label for="form-field-22">
													Nama Perushaan
												</label>
												<input type="text" name="namaPerusahaan" class="form-control" >
											</div>
											<div class="form-group">
												<label for="form-field-22">
													Jalan
												</label>
												<input type="text" name="jalan" class="form-control">
											</div>
											<div class="form-group">
												<label for="form-field-22">
													No. Telp.
												</label>
												<input type="text" name="telp" class="form-control">
											</div>
											<div class="form-group">
												<label for="form-field-22">
													No. Fax
												</label>
												<input type="text" name="fax" class="form-control">
											</div>
											<div class="form-group">
												<label for="form-field-22">
													Kelurahan
												</label>
												<input type="text" name="lurah" class="form-control">
											</div>
											<div class="form-group">
												<label for="form-field-22">
													Kecamatan
												</label>
												<input type="text" name="kec" class="form-control">
											</div>
											<div class="form-group">
												<label for="form-field-22">
													Kab. / Kota
												</label>
												<input type="text" name="kab" class="form-control">
											</div>
											<div class="form-group">
												<label for="form-field-22">
													Lokasi
												</label>
												<input type="text" name="lokasi" class="form-control">
											</div>
											<div class="form-group">
												<label for="form-field-22">
													Jenis Kegiatan
												</label>
												<textarea name="jenisKegiatan" id="form-field-22" class="form-control"></textarea>
											</div>
											<div class="form-group">
												<label for="form-field-22">
													Rencana Investasi
												</label>
												<input type="text" name="rencanaInvestasi" class="form-control">
											</div>
											<div class="form-group">
												<label for="form-field-22">
													Tenaga Kerja
												</label>
												<input type="text" name="tenagaKerja" class="form-control">
											</div>
											<div class="form-group">
												<label for="form-field-22">
													Luas Lahan
												</label>
												<input type="text" name="luasLahan" class="form-control">
											</div>
											<div class="form-group">
												<label for="form-field-22">
													Nomor
												</label>
												<input type="text" name="nomor" class="form-control">
											</div>
											<div class="form-group">
												<label for="form-field-22">
													Tanggal
												</label>
												<input type="text" name="tanggal" class="form-control">
											</div>
											<div class="form-group">
												<label for="form-field-22">
													Prinsip
												</label>
												<input type="text" name="prinsip" class="form-control">
											</div>
											<div class="form-group">
												<label for="form-field-22">
													Titik Latitude
												</label>
												<input type="text" name="latitude" id="latitude" class="form-control">
											</div>
											<div class="form-group">
												<label for="form-field-22">
													Titik Longitude
												</label>
												<input type="text" name="longitude" id="longitude" class="form-control">
											</div>
											<button type="Submit"  class="btn btn-sm btn-primary">Submit</button>
											<button type="reset" class="btn btn-sm btn-warning">Reset</button>
											<button type="button" class="btn btn-sm btn-danger" onclick=self.history.back()>Batal</button>
											
										</div>
									</div>
									
									
									</form>
								</div>
							</div>
							<!-- end: WYSIWYG EDITORS PANEL -->
						</div>
					</div>
					
		
		
		
<?php
break;
case "editperusahaan":
?>
		 <script src="editor/js/libs/jquery-1.11.1.min.js"></script><script src="editor/js/froala_editor.min.js"></script><script src="editor/js/plugins/tables.min.js"></script><script src="editor/js/plugins/lists.min.js"></script><script src="editor/js/plugins/colors.min.js"></script><script src="editor/js/plugins/media_manager.min.js"></script><script src="editor/js/plugins/font_family.min.js"></script><script src="editor/js/plugins/font_size.min.js"></script><script src="editor/js/plugins/block_styles.min.js"></script><script src="editor/js/plugins/video.min.js"></script><script>$(function(){$('#edit').editable({inlineMode: false})});</script><link href="editor/css/font-awesome.min.css" rel="stylesheet" type="text/css"><link href="editor/css/froala_editor.min.css" rel="stylesheet" type="text/css"><link href="editor/css/froala_style.min.css" rel="stylesheet" type="text/css">
					<div class="row">
						<div class="col-sm-12">
							<!-- start: PAGE TITLE & BREADCRUMB -->
							<ol class="breadcrumb">
								<li>
									<i class="clip-home-3"></i>
									<a href="#">
										Home
									</a>
								</li>
								<li class="active">
									Edit Perusahaan
								</li>
							</ol>
							<div class="page-header">
								<h1>Edit Perusahaan <small>overview &amp; stats </small></h1>
							</div>
						</div>	
						
					</div>
					<div class="row">
						<div class="col-sm-12">
						
						
							<!-- start: WYSIWYG EDITORS PANEL -->
							<div class="panel panel-default">
								
								<div class="panel-heading">
									<i class="fa fa-external-link-square"></i>
									Edit Perusahaan
									<div class="panel-tools">
										<a class="btn btn-xs btn-link panel-collapse collapses" href="#">
										</a>
										<a class="btn btn-xs btn-link panel-config" href="#panel-config" data-toggle="modal">
											<i class="fa fa-wrench"></i>
										</a>
										<a class="btn btn-xs btn-link panel-refresh" href="#">
											<i class="fa fa-refresh"></i>
										</a>
										<a class="btn btn-xs btn-link panel-expand" href="#">
											<i class="fa fa-resize-full"></i>
										</a>
									</div>
								</div>
								
								
								<div class="panel-body">
								<form action="<?php echo $aksi."?module=profilPerusahaan&act=edit" ?>" method="POST">
									<div class="row">
										<div class="col-sm-12">
										<?php
											$id=$_GET['id'];
											$queryEdit=mysql_query("Select * from perusahaan where idPerusahaan='".$id."'");
											$fetchEdit=mysql_fetch_array($queryEdit);
											$namaPerusahaan=$fetchEdit['namaPerusahaan'];
											$alamat=$fetchEdit['alamat'];
											
											$expAlamat=explode('+',$alamat);
											$jalan=$expAlamat[0];
											$telp=$expAlamat[1];
											$fax=$expAlamat[2];
											$lurah=$expAlamat[3];
											$kec=$expAlamat[4];
											$kab=$expAlamat[5];
											
											$idEdit=$fetchEdit['idPerusahaan'];
											$lokasi=$fetchEdit['lokasi'];
											$jenisKegiatan=$fetchEdit['jenisKegiatan'];
											$rencanaInvestasi=$fetchEdit['rencanaInvestasi'];
											$tenagaKerja=$fetchEdit['tenagaKerja'];
											$luasLahan=$fetchEdit['luasLahan'];
											$nomor=$fetchEdit['nomor'];
											$tanggal=$fetchEdit['tanggal'];
											$prinsip=$fetchEdit['prinsip'];
										?>
											<div class="form-group">
												<label for="form-field-22">
													Nama Perushaan
												</label>
												<input type="text" name="namaPerusahaan" class="form-control" value="<?php echo $namaPerusahaan; ?>">
												<input type="hidden" name="idEdit" class="form-control" value="<?php echo $idEdit; ?>">
											</div>
											
											<div class="form-group">
												<label for="form-field-22">
													Jalan
												</label>
												<input type="text" name="jalan" class="form-control" value="<?php echo $jalan; ?>">
											</div>
											<div class="form-group">
												<label for="form-field-22">
													No. Telp.
												</label>
												<input type="text" name="telp" class="form-control" value="<?php echo $telp; ?>">
											</div>
											<div class="form-group">
												<label for="form-field-22">
													No. Fax
												</label>
												<input type="text" name="fax" class="form-control" value="<?php echo $fax; ?>">
											</div>
											<div class="form-group">
												<label for="form-field-22">
													Kelurahan
												</label>
												<input type="text" name="lurah" class="form-control" value="<?php echo $lurah; ?>">
											</div>
											<div class="form-group">
												<label for="form-field-22">
													Kecamatan
												</label>
												<input type="text" name="kec" class="form-control" value="<?php echo $kec; ?>">
											</div>
											<div class="form-group">
												<label for="form-field-22">
													Kab. / Kota
												</label>
												<input type="text" name="kab" class="form-control" value="<?php echo $kab; ?>">
											</div>
											
											<div class="form-group">
												<label for="form-field-22">
													Lokasi
												</label>
												<input type="text" name="lokasi" class="form-control" value="<?php echo $lokasi; ?>">
											</div>
											<div class="form-group">
												<label for="form-field-22">
													Jenis Kegiatan
												</label>
												<textarea name="jenisKegiatan" id="form-field-22" class="form-control"><?php echo $jenisKegiatan; ?></textarea>
											</div>
											<div class="form-group">
												<label for="form-field-22">
													Rencana Investasi
												</label>
												<input type="text" name="rencanaInvestasi" class="form-control" value="<?php echo $rencanaInvestasi; ?>">
											</div>
											<div class="form-group">
												<label for="form-field-22">
													Tenaga Kerja
												</label>
												<input type="text" name="tenagaKerja" class="form-control" value="<?php echo $tenagaKerja; ?>">
											</div>
											<div class="form-group">
												<label for="form-field-22">
													Luas Lahan
												</label>
												<input type="text" name="luasLahan" class="form-control" value="<?php echo $luasLahan; ?>">
											</div>
											<div class="form-group">
												<label for="form-field-22">
													Nomor
												</label>
												<input type="text" name="nomor" class="form-control" value="<?php echo $nomor; ?>">
											</div>
											<div class="form-group">
												<label for="form-field-22">
													Tanggal
												</label>
												<input type="text" name="tanggal" class="form-control" value="<?php echo $tanggal; ?>">
											</div>
											<div class="form-group">
												<label for="form-field-22">
													Prinsip
												</label>
												<input type="text" name="prinsip" class="form-control" value="<?php echo $prinsip; ?>">
											</div>
											
											
											<button type="Submit"  class="btn btn-sm btn-primary">Update</button>
											<button type="reset" class="btn btn-sm btn-warning">Reset</button>
											<button type="button" class="btn btn-sm btn-danger" onclick=self.history.back()>Batal</button>
											
										</div>
									</div>
									
									
									</form>
								</div>
							</div>
							<!-- end: WYSIWYG EDITORS PANEL -->
						</div>
					</div>
					
		
							
		
<?php
	}
?>		