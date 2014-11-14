<?php
session_start();
 if (empty($_SESSION['username'])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=../index.php><b>LOGIN</b></a></center>";
}
else{
	include("../koneksi.php");
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
		<title>ADMIN - BPMP2T</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta content="" name="description" />
		<meta content="" name="author" />
		<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/fonts/style.css">
		<link rel="stylesheet" href="assets/css/main.css">
		<link rel="stylesheet" href="assets/css/main-responsive.css">
		<link rel="stylesheet" href="assets/plugins/iCheck/skins/all.css">
		<link rel="stylesheet" href="assets/plugins/bootstrap-colorpalette/css/bootstrap-colorpalette.css">
		<link rel="stylesheet" href="assets/plugins/perfect-scrollbar/src/perfect-scrollbar.css">
		<link rel="stylesheet" href="assets/css/theme_light.css" type="text/css" id="skin_color">
		<link rel="stylesheet" href="assets/css/print.css" type="text/css" media="print"/>
		<link rel="shortcut icon" href="favicon.png" />
		
		
		
	</head>
	<!-- end: HEAD -->
	<!-- start: BODY -->
	<body class="footer-fixed">
		<!-- start: HEADER -->
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<!-- start: RESPONSIVE MENU TOGGLER -->
					<button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
						<span class="clip-list-2"></span>
					</button>
					<!-- end: RESPONSIVE MENU TOGGLER -->
					<!-- start: LOGO -->
					<a class="navbar-brand" href="index.php">
						<b>Badan Penanaman Modal </b>
					</a>
					<!-- end: LOGO -->
				</div>
				<div class="navbar-tools">
					<!-- start: TOP NAVIGATION MENU -->
					<ul class="nav navbar-right">
						<!-- start: USER DROPDOWN -->
						<li class="dropdown current-user">
							<a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" data-close-others="true" href="#">
								<img width="10%" src="<?php echo $_SESSION['avatar'];  ?>" class="circle-img" alt="">
								<span class="username"><?php echo $_SESSION['fullname'];  ?></span>
								<i class="clip-chevron-down"></i>
							</a>
							<ul class="dropdown-menu">
								<li>
									<a href="index.php?module=user">
										<i class="clip-user-2"></i>
										&nbsp;My Profile
									</a>
								</li>
							
								<li>
									<a href="logout.php">
										<i class="clip-exit"></i>
										&nbsp;Log Out
									</a>
								</li>
							</ul>
						</li>
					</ul>
					<!-- end: TOP NAVIGATION MENU -->
				</div>
			</div>
			<!-- end: TOP NAVIGATION CONTAINER -->
		</div>
		<!-- end: HEADER -->
		<!-- start: MAIN CONTAINER -->
		<div class="main-container">
			<div class="navbar-content">
				<!-- start: SIDEBAR -->
				<div class="main-navigation navbar-collapse collapse">
					
					<!-- start: MAIN MENU TOGGLER BUTTON -->
					<div class="navigation-toggler">
						<i class="clip-chevron-left"></i>
						<i class="clip-chevron-right"></i>
					</div>
					<!-- end: MAIN MENU TOGGLER BUTTON -->
					<!-- start: MAIN NAVIGATION MENU -->
					<ul class="main-navigation-menu">
						
						<?php if($_GET['module']=="galeri"){ echo '<li class="active open">'; }else{ echo "<li>";} ?>
							<a href="index.php?module=galeri"><i class="clip-screen"></i>
								<span class="title">Slider</span><span class="selected"></span>
							</a>
						</li>
						
						<?php if(($_GET['module']=="tugasFungsi")or($_GET['module']=="visiMisi")or($_GET['module']=="struktur")){ echo '<li class="active open">'; }else{ echo "<li>";} ?>
							<a href="javascript:void(0)"><i class="clip-screen"></i>
								<span class="title"> Tentang Kami </span><i class="icon-arrow"></i>
								<span class="selected"></span>
							</a>
							<ul class="sub-menu">
								<?php if($_GET['module']=="visiMisi"){ echo '<li class="active">'; }else{ echo "<li>";} ?>
									<a href="index.php?module=visiMisi">
										<span class="title">Visi Misi</span>
									</a>
								</li>
								<?php if($_GET['module']=="tugasFungsi"){ echo '<li class="active">'; }else{ echo "<li>";} ?>
									<a href="index.php?module=tugasFungsi">
										<span class="title">Tugas Fungsi</span>
									</a>
								</li>
								<?php if($_GET['module']=="struktur"){ echo '<li class="active">'; }else{ echo "<li>";} ?>
									<a href="index.php?module=struktur">
										<span class="title">Struktur Organisasi</span>
									</a>
								</li>
							</ul>
						</li>
						
						<?php if($_GET['module']=="profilKawasan"){ echo '<li class="active">'; }else{ echo "<li>";} ?>
							<a href="index.php?module=profilKawasan"><i class="clip-location"></i>
								<span class="title">Profil Kawasan</span>
							</a>
						</li>
						
						<?php if($_GET['module']=="profilPerusahaan"){ echo '<li class="active open">'; }else{ echo "<li>";} ?>
							<a href="index.php?module=profilPerusahaan"><i class="clip-location"></i>
								<span class="title">Profil Perusahaan</span><span class="selected"></span>
							</a>
						</li>
						
						<?php if($_GET['module']=="peta"){ echo '<li class="active open">'; }else{ echo "<li>";} ?>
							<a href="index.php?module=galeri"><i class="clip-location"></i>
								<span class="title">Peta Kawasan</span><span class="selected"></span>
							</a>
						</li>
						
						<?php if($_GET['module']=="insentif"){ echo '<li class="active">'; }else{ echo "<li>";} ?>
							<a href="index.php?module=insentif"><i class="clip-location"></i>
								<span class="title">Insentif</span>
							</a>
						</li>
						
						
						
						<?php if(($_GET['module']=="izinPrinsip")or($_GET['module']=="izinLokasi")or($_GET['module']=="ippt")or($_GET['module']=="imb")){ echo '<li class="active open">'; }else{ echo "<li>";} ?>
							<a href="javascript:void(0)"><i class="clip-screen"></i>
								<span class="title"> Mekanisme Perizinan </span><i class="icon-arrow"></i>
								<span class="selected"></span>
							</a>
							<ul class="sub-menu">
								<?php if($_GET['module']=="izinUmum"){ echo '<li class="active">'; }else{ echo "<li>";} ?>
									<a href="index.php?module=izinUmum">
										<span class="title">Izin Secara umum</span>
									</a>
								</li>
								<?php if($_GET['module']=="izinPrinsip"){ echo '<li class="active">'; }else{ echo "<li>";} ?>
									<a href="index.php?module=izinPrinsip">
										<span class="title">Izin Prinsip</span>
									</a>
								</li>
								<?php if($_GET['module']=="izinLokasi"){ echo '<li class="active">'; }else{ echo "<li>";} ?>
									<a href="index.php?module=izinLokasi">
										<span class="title">Izin Lokasi</span>
									</a>
								</li>
								<?php if($_GET['module']=="ippt"){ echo '<li class="active">'; }else{ echo "<li>";} ?>
									<a href="index.php?module=ippt">
										<span class="title">IPPT</span>
									</a>
								</li>
								<?php if($_GET['module']=="imb"){ echo '<li class="active">'; }else{ echo "<li>";} ?>
									<a href="index.php?module=imb">
										<span class="title">IMB</span>
									</a>
								</li>
							</ul>
						</li>
						
						<?php if($_GET['module']=="user"){ echo '<li class="active open">'; }else{ echo "<li>";} ?>
							<a href="index.php?module=user"><i class="clip-user"></i>
								<span class="title">User Profil</span><span class="selected"></span>
							</a>
						</li>
						
						
						
					</ul>
					<!-- end: MAIN NAVIGATION MENU -->
				</div>
				<!-- end: SIDEBAR -->
			</div>
			
			<!-- start: PAGE -->
			<div class="main-content">
				
				<!-- end: SPANEL CONFIGURATION MODAL FORM -->
				<div class="container">
					<?php
						if($_GET['module']=="galeri"){
							include("modul/modul_galeri/galeri.php");
						}elseif($_GET['module']=="profilKawasan"){
							include("modul/modul_profilKawasan/profilKawasan.php");
						}elseif($_GET['module']=="visiMisi"){
							include("modul/modul_visiMisi/visiMisi.php");
						}elseif($_GET['module']=="izinPrinsip"){
							include("modul/modul_izinPrinsip/izinPrinsip.php");
						}elseif($_GET['module']=="izinLokasi"){
							include("modul/modul_izinLokasi/izinLokasi.php");
						}elseif($_GET['module']=="ippt"){
							include("modul/modul_ippt/ippt.php");
						}elseif($_GET['module']=="tugasFungsi"){
							include("modul/modul_tugasFungsi/tugasFungsi.php");
						}elseif($_GET['module']=="struktur"){
							include("modul/modul_struktur/struktur.php");
						}elseif($_GET['module']=="izinUmum"){
							include("modul/modul_izinUmum/izinUmum.php");
						}elseif($_GET['module']=="insentif"){
							include("modul/modul_insentif/insentif.php");
						}elseif($_GET['module']=="imb"){
							include("modul/modul_imb/imb.php");
						}elseif($_GET['module']=="profilPerusahaan"){
							include("modul/modul_perusahaan/perusahaan.php");
						}elseif($_GET['module']=="user"){
							include("modul/modul_profilUser/profilUser.php");
						}else{
							include("galeri.php");
						}
					  ?>
				</div>
			</div>
			<!-- end: PAGE -->
		</div>
		<!-- end: MAIN CONTAINER -->
		<!-- start: FOOTER -->
		<div class="footer clearfix">
			<div class="footer-inner">
				&copy; 2014 Makassar.
			</div>
			<div class="footer-items">
				<span class="go-top"><i class="clip-chevron-up"></i></span>
			</div>
		</div>
		
	</body>
</html>

<?php
	}
?>