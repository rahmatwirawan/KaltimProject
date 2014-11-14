<?php
	include("koneksi.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>BPMP2T</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<!-- Le styles -->
<link href="assets/css/bootstrap.css" rel="stylesheet">
<link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
<link href="assets/css/switcher.css" rel="stylesheet">
<link href="assets/css/font-awesome.min.css" rel="stylesheet"> 
<link href="assets/css/social.css" rel="stylesheet">
<link href="assets/css/pricing.css" rel="stylesheet"> 
<link href="assets/css/prettyPhoto.css" rel="stylesheet" type="text/css" />
<link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet" id="colors"><!-- !important THIS STYLE CSS ON BOTTOM OF STYLEs LIST-->


<link rel="shortcut icon" href="images/Balikpapan.png">
</head>
<body>
<div class="main-wrapper">
	<!-----Menu--->
	<?php include("menu.php");  ?>
	<!--Content-->
	<?php
        if($_GET['module']=="peta"){
            include("peta.php");
        }elseif($_GET['module']=="profilKawasan"){
            include("profilKawasan.php");
        }elseif($_GET['module']=="visiMisi"){
            include("visiMisi.php");
        }elseif($_GET['module']=="izinPrinsip"){
            include("izinPrinsip.php");
        }elseif($_GET['module']=="izinLokasi"){
            include("izinLokasi.php");
        }elseif($_GET['module']=="izinUmum"){
            include("izinUmum.php");
        }elseif($_GET['module']=="tugasFungsi"){
            include("tugasFungsi.php");
        }elseif($_GET['module']=="struktur"){
            include("struktur.php");
        }elseif($_GET['module']=="ippt"){
            include("ippt.php");
        }elseif($_GET['module']=="imb"){
            include("imb.php");
        }elseif($_GET['module']=="insentif"){
            include("insentif.php");
        }elseif($_GET['module']=="profilPerusahaan"){
            include("perusahaan.php");
        }else{
            include("peta.php");
        }
      ?>
	
<!-- Footer ================================================== -->
<footer class="footer">
  <div class="container">
    
   
   
    <div class="row-fluid copyright">
      <div class="span12 center">Copyright &copy; 2014. BPM2T</div>
    </div>
  </div>
</footer>

<!-- END: FOOTER -->
</div>

<script src="assets/js/jquery.prettyPhoto.js" type="text/javascript"></script> 
<script src="assets/js/superfish.js" type="text/javascript"></script> 
<script type="text/javascript" src="assets/js/switcher.js"></script>
<script src="assets/js/jquery.ui.totop.js" type="text/javascript"></script>
<script src="assets/js/custom.js" type="text/javascript"></script>

</body>
</html>
