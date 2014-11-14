		
		<link rel="stylesheet" href="assets/plugins/colorbox/example2/colorbox.css">
		
		<link rel="stylesheet" href="assets/plugins/jQuery-File-Upload/css/jquery.fileupload-ui.css">
		<!-- CSS adjustments for browsers with JavaScript disabled -->
		<noscript>
			<link rel="stylesheet" href="assets/plugins/jQuery-File-Upload/css/jquery.fileupload-ui-noscript.css">
		</noscript>
		<script src="assets/js/pages-gallery.js"></script>
<?php
	$aksi="modul/modul_galeri/control_data_galeri.php";
?>		
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
									Slider
								</li>
							</ol>
							<div class="page-header">
								<h1>Slider <small>overview &amp; stats </small></h1>
							</div>
						</div>	
						
					</div>
					<form id="fileupload" action="<?php echo "$aksi?module=galeri&act=input"?>" method="POST" enctype="multipart/form-data">
					<div class="row fileupload-buttonbar">
						<div class="col-lg-7">
							<span class="btn btn-success fileinput-button"> <i class="glyphicon glyphicon-plus"></i> <span>Add files...</span>
								<input type="file" name="avatar">
							</span>
							<button type="submit" class="btn btn-primary start">
								<i class="glyphicon glyphicon-upload"></i>
								<span>Submit</span>
							</button>
						</div>
					</div>
	
					</form>
					<div class="row">
						<div class="col-sm-12"></div>
					</div>
					
					<div class="row">
						<?php
							$querySlider=mysql_query("select * from slider order by id_slide DESC");
							while($fetchSlider=mysql_fetch_array($querySlider)){
								$idSlider=$fetchSlider['id_slide'];
								$urlSlider=$fetchSlider['url_slide'];
						?>
						
							<div class="col-md-3 col-sm-4 gallery-img">
								<div class="wrap-image">
									<a class="group1" href="../<?php echo $urlSlider ?>" title="Clip-One Business Card">
										<img src="../<?php echo $urlSlider ?>" alt="" class="img-responsive">
									</a>
									<div class="chkbox"></div>
									<div class="tools tools-bottom">
										<a href="<?php echo $aksi; ?>?module=galeri&act=delete&id=<?php echo $idSlider; ?>">
											<i class="clip-close-2"></i>
										</a>
									</div>
								</div>
							</div>
						<?php
							}
						?>
						
					</div>
					
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
		<script src="assets/plugins/jquery-cookie/jquery.cookie.js"></script>
		<script src="assets/plugins/bootstrap-colorpalette/js/bootstrap-colorpalette.js"></script>
		<script src="assets/js/main.js"></script>
		<!-- end: MAIN JAVASCRIPTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		
		<script src="assets/plugins/colorbox/jquery.colorbox-min.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		
		<script>
			jQuery(document).ready(function() {
				Main.init();
				PagesGallery.init();
			});
		</script>
		