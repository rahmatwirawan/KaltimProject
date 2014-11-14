<?php
	session_start();
	$idnya=$_SESSION['idu'];
	$query	=	mysql_query("SELECT * FROM users where id_user='".$idnya."'");
    $fetch_query = mysql_fetch_array($query);
	$ppa	=	$fetch_query['password'];
        $idus	=	$fetch_query['id_user'];
        $username1  =   $fetch_query['username'];
        $password  =   $fetch_query['password'];
        $avatar = $fetch_query['avatar'];
        $full_name =   $fetch_query['full_name'];
        $email = $fetch_query['email'];
        $gender =   $fetch_query['gender'];
        $born = $fetch_query['born'];
		$exp=explode("-",$born);
		$tgl=$exp[0];
		$bulan=$exp[1];
		$tahun=$exp[2];

?>
		<link rel="stylesheet" href="assets/plugins/bootstrap-fileupload/bootstrap-fileupload.min.css">
		<link rel="stylesheet" href="assets/plugins/bootstrap-social-buttons/social-buttons-3.css">
					<!-- start: PAGE HEADER -->
					<div class="row">
						<div class="col-sm-12">
							
							<!-- start: PAGE TITLE & BREADCRUMB -->
							<ol class="breadcrumb">
								<li>
									<i class="clip-file"></i>
									<a href="#">
										Pages
									</a>
								</li>
								<li class="active">
									User Profile
								</li>
							</ol>
							<div class="page-header">
								<h1>User Profile <small>user profile page</small></h1>
							</div>
							<!-- end: PAGE TITLE & BREADCRUMB -->
						</div>
					</div>
					<!-- end: PAGE HEADER -->
					<!-- start: PAGE CONTENT -->
					<div class="row">
						<div class="col-sm-12">
							<div class="tabbable">
								<ul class="nav nav-tabs tab-padding tab-space-3 tab-blue" id="myTab4">
									<li class="active">
										<a data-toggle="tab" href="#panel_overview">
											Overview
										</a>
									</li>
									<li>
										<a data-toggle="tab" href="#panel_edit_account">
											Edit Account
										</a>
									</li>
									
								</ul>
								<div class="tab-content">
									<div id="panel_overview" class="tab-pane in active">
										<div class="row">
											<div class="col-sm-5 col-md-4">
												<div class="user-left">
													<div class="center">
														<h4><?php echo $full_name; ?></h4>
														<div class="fileupload fileupload-new" data-provides="fileupload">
															<div class="user-image">
																<div class="fileupload-new thumbnail"><img src="<?php echo $avatar; ?>" alt="">
																</div>
																<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
																<div class="user-image-buttons">
																	<span class="btn btn-teal btn-file btn-sm"><span class="fileupload-new"><i class="fa fa-pencil"></i></span><span class="fileupload-exists"><i class="fa fa-pencil"></i></span>
																		<input type="file">
																	</span>
																	<a href="#" class="btn fileupload-exists btn-bricky btn-sm" data-dismiss="fileupload">
																		<i class="fa fa-times"></i>
																	</a>
																</div>
															</div>
														</div>
														<hr>
														
														<hr>
													</div>
													
													<table class="table table-condensed table-hover">
														<thead>
															<tr>
																<th colspan="3">Additional information</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td>Birth</td>
																<td><?php echo $born; ?></td>
																<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
															</tr>
															<tr>
																<td>Email</td>
																<td><?php echo $email; ?></td>
																<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
															</tr>
															<tr>
																<td>Gender</td>
																<td><?php echo $gender; ?></td>
																<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
											
										</div>
									</div>
									<div id="panel_edit_account" class="tab-pane">
										<form action="?module=user&aksi=ya" method="POST" enctype="multipart/form-data" role="form" id="form">
											<div class="row">
												<div class="col-md-12">
													<h3>Account Info</h3>
													<hr>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label class="control-label">
															Fullname
														</label>
														<input type="text" value="<?php echo $full_name; ?>" class="form-control" id="firstname" name="fullname">
													</div>
													<div class="form-group">
														<label class="control-label">
															Email Address
														</label>
														<input type="email" value="<?php echo $email; ?>" class="form-control" id="email" name="email">
													</div>
													<div class="form-group">
														<label class="control-label">
															Username
														</label>
														<input type="text" value="<?php echo $username1; ?>"" class="form-control" id="username" name="username">
													</div>
													<div class="form-group">
														<label class="control-label">
															Password
														</label>
														<input type="password"  class="form-control" name="password" id="password">
													</div>
													<div class="form-group">
														<label class="control-label">
															Confirm Password
														</label>
														<input type="password"   class="form-control" id="password_again" name="password_again">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group connected-group">
														<label class="control-label">
															Date of Birth
														</label>
														<div class="row">
															<div class="col-md-3">
																<select name="tgl" id="dd" class="form-control" >
																	<option value="<?php echo $tgl; ?>" selected="selected"><?php echo $tgl; ?></option>
																	<option value="">DD</option>
																	<option value="01">1</option>
																	<option value="02">2</option>
																	<option value="03">3</option>
																	<option value="04">4</option>
																	<option value="05">5</option>
																	<option value="06">6</option>
																	<option value="07">7</option>
																	<option value="08">8</option>
																	<option value="09">9</option>
																	<option value="10">10</option>
																	<option value="11">11</option>
																	<option value="12">12</option>
																	<option value="13">13</option>
																	<option value="14">14</option>
																	<option value="15">15</option>
																	<option value="16">16</option>
																	<option value="17">17</option>
																	<option value="18">18</option>
																	<option value="19">19</option>
																	<option value="20">20</option>
																	<option value="21">21</option>
																	<option value="22">22</option>
																	<option value="23">23</option>
																	<option value="24">24</option>
																	<option value="25">25</option>
																	<option value="26">26</option>
																	<option value="27">27</option>
																	<option value="28">28</option>
																	<option value="29">29</option>
																	<option value="30">30</option>
																	<option value="31">31</option>
																</select>
															</div>
															<div class="col-md-3">
																<select name="bulan" id="mm" class="form-control" >
																	<option value="<?php echo $bulan; ?>" selected="selected"><?php echo $bulan; ?></option>
																	<option value="">MM</option>
																	<option value="01">1</option>
																	<option value="02">2</option>
																	<option value="03">3</option>
																	<option value="04">4</option>
																	<option value="05">5</option>
																	<option value="06">6</option>
																	<option value="07">7</option>
																	<option value="08">8</option>
																	<option value="09">9</option>
																	<option value="10">10</option>
																	<option value="11">11</option>
																	<option value="12">12</option>
																</select>
															</div>
															<div class="col-md-3">
																<input type="text" value="<?php echo $tahun; ?>" id="yyyy" name="tahun" class="form-control">
															</div>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label">
															Gender
														</label>
														<div>
														<?php 
															if($gender=="Laki-Laki"){
																echo '
																	<label class="radio-inline">
																<input type="radio" class="grey" value="Perempuan" name="gender" id="gender_female">
																Perempuan
															</label>
															<label class="radio-inline">
																<input type="radio" class="grey" value="Laki-Laki" name="gender"  id="gender_male" checked="checked">
																Laki-Laki
															</label>
																';
															}else{
															echo '
																<label class="radio-inline">
																<input type="radio" class="grey" value="Perempuan" name="gender" id="gender_female" checked="checked"">
																Perempuan
															</label>
															<label class="radio-inline">
																<input type="radio" class="grey" value="Laki-Laki" name="gender"  id="gender_male">
																Laki-Laki
															</label>
															';
															
															}
														?>
															
														</div>
													</div>
													<div class="form-group">
														<label>
															Image Upload
														</label>
														<div class="fileupload fileupload-new" data-provides="fileupload">
															<div class="fileupload-new thumbnail" style="width: 150px; height: 150px;"><img src="<?php echo $avatar; ?>" alt="">
															</div>
															<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 150px; max-height: 150px; line-height: 20px;"></div>
															<div class="user-edit-image-buttons">
																<span class="btn btn-light-grey btn-file"><span class="fileupload-new"><i class="fa fa-picture"></i> Select image</span><span class="fileupload-exists"><i class="fa fa-picture"></i> Change</span>
																	<input type="file" name="avatar">
																</span>
																<a href="#" class="btn fileupload-exists btn-light-grey" data-dismiss="fileupload">
																	<i class="fa fa-times"></i> Remove
																</a>
															</div>
														</div>
													</div>
												</div>
											</div>
											
											
											
											<div class="row">
												<div class="col-md-8">
													<p>
														By clicking UPDATE, you are agreeing to the Policy and Terms &amp; Conditions.
													</p>
												</div>
												<div class="col-md-4">
													<button class="btn btn-teal btn-block" type="submit">
														Update <i class="fa fa-arrow-circle-right"></i>
													</button>
												</div>
											</div>
										</form>
									</div>
									
								</div>
							</div>
						</div>
					</div>
					<!-- end: PAGE CONTENT-->
					
					<script src="assets/plugins/jQuery-lib/2.0.3/jquery.min.js"></script>
		<!--<![endif]-->
		<script src="assets/plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js"></script>
		<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
		<script src="assets/plugins/iCheck/jquery.icheck.min.js"></script>
		<script src="assets/plugins/perfect-scrollbar/src/jquery.mousewheel.js"></script>
		<script src="assets/plugins/perfect-scrollbar/src/perfect-scrollbar.js"></script>
		<script src="assets/plugins/less/less-1.5.0.min.js"></script>
		<script src="assets/plugins/jquery-cookie/jquery.cookie.js"></script>
		<script src="assets/plugins/bootstrap-colorpalette/js/bootstrap-colorpalette.js"></script>
		<script src="assets/js/main.js"></script>
		<!-- end: MAIN JAVASCRIPTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="assets/plugins/bootstrap-fileupload/bootstrap-fileupload.min.js"></script>
		<script src="assets/plugins/jquery.pulsate/jquery.pulsate.min.js"></script>
		<script src="assets/js/pages-user-profile.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script>
			jQuery(document).ready(function() {
				Main.init();
				PagesUserProfile.init();
			});
		</script>
		
		
		<?php
			if($_GET['aksi']=='ya'){
			//	chdir("../../../");
				
				$pass1=$_POST['password'];
				$pass2=$_POST['password_again'];
				$tgl=$_POST['tgl'];
				$bulan=$_POST['bulan'];
				$tahun=$_POST['tahun'];
				$born=$tgl."-".$bulan."-".$tahun;
				$gambar=$_FILES['avatar']['name'];
				$uploadfile="assets/images/".$gambar;
				if(strlen($gambar)>0){
					  unlink($avatar);
					if(is_uploaded_file($_FILES['avatar']['tmp_name'])){
					   move_uploaded_file($_FILES['avatar']['tmp_name'],$uploadfile);
					}
					mysql_query("update users set avatar='$uploadfile' where id_user='".$idnya."'");
				}
				if(($pass1)<>''){
					if($pass1==$pass2){
						mysql_query("update users set password='".md5($pass1)."' where id_user='".$idnya."'");
					}else{
						echo "<script>alert('Password Tidak Sama!');</script>";
						echo "<META http-equiv='refresh' content='0;URL=index.php?module=user'>";
					}
				   
				}
				$updateuser=mysql_query("update users set username='".$_POST['username']."',full_name='".$_POST['fullname']."',email='".$_POST['email']."',gender='".$_POST['gender']."',born='".$born."' where id_user='".$idnya."'");
				if($updateuser){
					echo "<script>alert('Proses Update User Telah Berhasil');</script>";
					echo "<META http-equiv='refresh' content='0;URL=index.php?module=user'>";
				}
				
			}
		?>