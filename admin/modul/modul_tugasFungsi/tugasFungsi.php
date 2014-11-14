
<?php
	$aksi="modul/modul_tugasFungsi/control_data_tugasFungsi.php";
	$idTemp=7;
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
		<script src="assets/plugins/jquery-cookie/jquery.cookie.js"></script>
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
									Tugas dan Fungsi
								</li>
							</ol>
							<div class="page-header">
								<h1>Tugas dan Fungsi <small>overview &amp; stats </small></h1>
							</div>
						</div>	
						
					</div>
						<div class="row">
						<div class="col-sm-12">
							<!-- start: DROPZONE PANEL -->
							<div class="panel panel-default">
								<div class="panel-heading">
									<i class="fa fa-external-link-square"></i>
									Judul Dan Image
								</div>
								<div class="panel-body">
								<?php
									$queryImage=mysql_query("select * from imageMenu where namaMenu='".$idTemp."'");
										$fetchImage=mysql_fetch_array($queryImage);
										$imgMenu=$fetchImage['img'];
										$judulMenu=$fetchImage['judul'];
										$judulContentMenu=$fetchImage['judulContent'];
								?>
								
									<div class="col-sm-9">
									<form action="<?php echo $aksi; ?>?module=tugasFungsi&act=editImage" method="POST"  enctype="multipart/form-data">
										<span class="input-icon input-icon-right">
											Judul Sub :
											<input type="text" value="<?php echo $judulMenu ?>" name="judul" placeholder="Text Field" id="form-field-17" class="form-control">
										<br/></br/>
											Judul Content :
											<input type="text" value="<?php echo $judulContentMenu ?>"  name="judulContentMenu" placeholder="Text Field" id="form-field-17" class="form-control">
										</span>
									</div>
									<div class="fileupload fileupload-new" data-provides="fileupload">
										<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
											<img src="../<?php echo $imgMenu ?>" alt=""/>
										</div>
										<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
										<div>&nbsp;&nbsp;&nbsp;
											<span class="btn btn-light-grey btn-file">
												<span class="fileupload-new"><i class="fa fa-picture-o"></i> Select image</span>
												<span class="fileupload-exists"><i class="fa fa-picture-o"></i> Change</span>
												<input type="file" name="avatar">
											</span>
											<a href="#" class="btn fileupload-exists btn-light-grey" data-dismiss="fileupload">
												<i class="fa fa-times"></i> Remove
											</a>
										</div>
									</div>
									&nbsp;&nbsp;&nbsp;
									<button type="submit" class="btn btn-primary start">
										<i class="glyphicon glyphicon-upload"></i>
										<span>Update</span>
									</button>
									
									</form>
								</div>
							</div>
							<!-- end: DROPZONE PANEL -->
						</div>
					</div>
					<div class="row fileupload-buttonbar">
						<div class="col-lg-7">
							<button onclick="window.location.href='?module=tugasFungsi&act=tambahtugasFungsi'" class="btn btn-primary start">
								<i class="glyphicon glyphicon-upload"></i>
								<span>Tambah Tugas dan Fungsi</span>
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
												$querySlider=mysql_query("select * from contentMenu where idMenu='".$idTemp."'");
												while($fetchSlider=mysql_fetch_array($querySlider)){
													$id=$fetchSlider['id'];
													$judul=$fetchSlider['judul'];
											?>
												<tr>
													<td><?php echo $judul; ?></td>
													<td><a href="?module=tugasFungsi&act=edittugasFungsi&<?php echo 'id='.$id; ?>"> Edit </a></td>
													<td><a href="<?php echo $aksi.'?module=tugasFungsi&act=delete&id='.$id; ?>"> Delete </a></td>
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
case "tambahtugasFungsi":
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
									Tambah Tugas dan Fungsi
								</li>
							</ol>
							<div class="page-header">
								<h1>Tambah Tugas dan Fungsi <small>overview &amp; stats </small></h1>
							</div>
						</div>	
						
					</div>
					<div class="row">
						<div class="col-sm-12">
						
						
							<!-- start: WYSIWYG EDITORS PANEL -->
							<div class="panel panel-default">
								
								<div class="panel-heading">
									<i class="fa fa-external-link-square"></i>
									Tambah Tugas dan Fungsi
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
								<form action="<?php echo $aksi."?module=tugasFungsi&act=input" ?>" method="POST">
									<div class="row">
										<div class="col-sm-12">
										
										<div class="form-group">
												<label for="form-field-22">
													Judul
												</label>
												<textarea name="judul" placeholder="Default Text" id="form-field-22" class="form-control"></textarea>
											</div>
											<div class="row">
												<div class="col-sm-12">
													<div class="form-group">
														<label class="control-label">Content</label>	
														 <textarea class="input-xlarge " id='edit' name="penjelasan" id="penjelasan" rows="3"></textarea>
													</div>
												</div>
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
case "edittugasFungsi":
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
									Edit Tugas dan Fungsi
								</li>
							</ol>
							<div class="page-header">
								<h1>Edit Tugas dan Fungsi <small>overview &amp; stats </small></h1>
							</div>
						</div>	
						
					</div>
					<div class="row">
						<div class="col-sm-12">
						
						
							<!-- start: WYSIWYG EDITORS PANEL -->
							<div class="panel panel-default">
								
								<div class="panel-heading">
									<i class="fa fa-external-link-square"></i>
									Edit Tugas dan Fungsi
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
								<form action="<?php echo $aksi."?module=tugasFungsi&act=edit" ?>" method="POST">
									<div class="row">
										<div class="col-sm-12">
										<?php
											$id=$_GET['id'];
											$queryEdit=mysql_query("Select * from contentMenu where id='".$id."'");
											$fetchEdit=mysql_fetch_array($queryEdit);
											$judul=$fetchEdit['judul'];
											$isi=$fetchEdit['isi'];
											$idEdit=$fetchEdit['id'];
										?>
										<div class="form-group">
												<label for="form-field-22">
													Judul
												</label>
												<input type="hidden" name="idEdit" value="<?php echo $idEdit; ?>">
												<textarea name="judul" id="form-field-22" class="form-control"><?php echo $judul; ?></textarea>
											</div>
											<div class="row">
												<div class="col-sm-12">
													<div class="form-group">
														<label class="control-label">Content</label>
														 <textarea class="input-xlarge" id='edit' name="penjelasan" id="penjelasan" rows="3"><?php echo $isi; ?></textarea>
													</div>
												</div>
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