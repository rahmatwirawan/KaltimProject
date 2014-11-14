<div class="nav-reaction">
			<div class="navbar navbar-static-top"> 
			  <!-- navbar-fixed-top -->
			  <div class="navbar-inner">
				<div class="container"> <a class="brand" href="index-2.html"> 
				<span><img src="images/logo_client.png" alt="Logo" style="width:220px"></span>
				</a>
				  <div id="main-nav">
					<div class="nav-collapse collapse">
					  <ul class="nav">
					  
						<?php if(empty($_GET['module'])){ echo '<li class="active">'; }else{ echo "<li>";} ?>
							<a href="index.php">Beranda</a> </li>
						
						<?php if(($_GET['module']=="tugasFungsi")or($_GET['module']=="visiMisi")or($_GET['module']=="struktur")){ echo '<li class="active dropdown">'; }else{ echo '<li class="dropdown">';} ?>
						<a class="dropdown-toggle" data-toggle="dropdown" href="javascript:">Tentang Kami<b class="caret"></b></a>
							  <ul class="dropdown-menu">
								<li><a href="media.php?module=visiMisi">Visi Misi</a></li>
								<li><a href="media.php?module=tugasFungsi">Tugas dan Fungsi</a></li>
								<li><a href="media.php?module=struktur">Struktur Organisasi</a></li>
							  </ul>
						</li>
						<!--
						<?php if(($_GET['module']=="profilKawasan")or($_GET['module']=="profilPerusahaan")){ echo '<li class="active dropdown">'; }else{ echo '<li class="dropdown">';} ?>
						<a class="dropdown-toggle" data-toggle="dropdown" href="javascript:">Profil<b class="caret"></b></a>
							  <ul class="dropdown-menu">
								<li><a href="media.php?module=profilKawasan">Profil Kawasan</a></li>
								<li><a href="media.php?module=profilPerusahaan">Profil Perusahaan</a></li>
							  </ul>
						</li>
						-->
						<?php if($_GET['module']=="profilKawasan"){ echo '<li class="active">'; }else{ echo "<li>";} ?>
							<a href="media.php?module=profilKawasan">Profil Kawasan</a> </li>
							
						<?php if($_GET['module']=="profilPerusahaan"){ echo '<li class="active">'; }else{ echo "<li>";} ?>
							<a href="media.php?module=profilPerusahaan">Perusahaan</a> </li>
						
						<?php if(($_GET['module']=="izinPrinsip")or($_GET['module']=="izinLokasi")or($_GET['module']=="izinUmum")or($_GET['module']=="ippt")or($_GET['module']=="imb")){
							echo '<li class="active dropdown">'; }else{ echo '<li class="dropdown">';} ?>
							<a href="javascript:" class="dropdown-toggle" data-toggle="dropdown"> Mekanisme Izin <b class="caret"></b></a>
							  <ul class="dropdown-menu">
								<li><a href="media.php?module=izinUmum">Perizinan Secara Umum</a></li>
								<li><a href="media.php?module=izinPrinsip">Izin Prinsip</a></li>
								<li><a href="media.php?module=izinLokasi">Izin Lokasi</a></li>
								<li><a href="media.php?module=ippt">IPPT</a></li>
								<li><a href="media.php?module=imb">IMB</a></li>
							  </ul>
						</li>
						
						<?php if($_GET['module']=="peta"){ echo '<li class="active">'; }else{ echo "<li>";} ?>
							<a href="media.php?module=peta">Peta Kawasan</a> </li>
						
						<?php if($_GET['module']=="insentif"){ echo '<li class="active">'; }else{ echo "<li>";} ?>
							<a href="media.php?module=insentif">Insentif</a> </li>
						
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Sign in</a>
							<ul class="dropdown-menu">
								<li>
								<div style="padding: 15px; padding-bottom: 0px;">
									<form method="post"  action="masuk.php" accept-charset="UTF-8">
										<input style="margin-bottom: 15px;" type="text" placeholder="Username" id="username" name="username">
										<input style="margin-bottom: 15px;" type="password" placeholder="Password" id="password" name="password">
										<input style="float: left; margin-right: 10px;" type="checkbox" name="remember-me" id="remember-me" value="1">
										<label class="string optional" for="sign-in"> Remember me</label>
										<input class="btn btn-info btn-block" name="login" type="submit" id="sign-in" value="Sign In">
									</form>
								</div>
								</li>
								</ul>
							</li>
						
					  </ul>
					</div>
				  </div>
				</div>
			  </div>
			</div>
		  </div>