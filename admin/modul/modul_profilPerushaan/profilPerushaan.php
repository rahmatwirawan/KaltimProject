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
									Profil Kawasan
								</li>
							</ol>
							<div class="page-header">
								<h1>Profil Kawasan <small>overview &amp; stats </small></h1>
							</div>
						</div>	
						
					</div>
					<div class="row fileupload-buttonbar">
						<div class="col-lg-7">
							<button type="submit" class="btn btn-primary start">
								<i class="glyphicon glyphicon-upload"></i>
								<span>Tambah Profil Kawasan</span>
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
									Editable Table
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
													<th>Full Name</th>
													<th>Role</th>
													<th>Phone</th>
													<th>Edit</th>
													<th>Delete</th>
												</tr>
											</thead>
											<tbody>
											<?php
												$querySlider=mysql_query("select * from slider order by id_slide DESC");
												while($fetchSlider=mysql_fetch_array($querySlider)){
													$idSlider=$fetchSlider['id_slide'];
													$urlSlider=$fetchSlider['url_slide'];
											?>
												<tr>
													<td>Peter Clark</td>
													<td>UI Designer</td>
													<td>(641)-734-4763</td>
													<td><a href="#" class="edit-row"> Edit </a></td>
													<td><a href="#" class="delete-row"> Delete </a></td>
												</tr>
												<tr>
													<td>Nicole Bell</td>
													<td>Content Designer</td>
													<td>(741)-034-4573</td>
													<td><a href="#" class="edit-row"> Edit </a></td>
													<td><a href="#" class="delete-row"> Delete </a></td>
												</tr>
												<tr>
													<td>Steven Thompson</td>
													<td>Visual Designer</td>
													<td>(471)-543-4073</td>
													<td><a href="#" class="edit-row"> Edit </a></td>
													<td><a href="#" class="delete-row"> Delete </a></td>
												</tr>
												<tr>
													<td>Ella Patterson</td>
													<td>Web Editor</td>
													<td>(799)-994-9999</td>
													<td><a href="#" class="edit-row"> Edit </a></td>
													<td><a href="#" class="delete-row"> Delete </a></td>
												</tr>
												<tr>
													<td>Kenneth Ross</td>
													<td>Senior Designer</td>
													<td>(111)-114-1173</td>
													<td><a href="#" class="edit-row"> Edit </a></td>
													<td><a href="#" class="delete-row"> Delete </a></td>
												</tr>
												<?php
													}
												?>
											</tbody>
										</table>
									</div>
								</div>
							</div>

						</div>
					</div>

						
						