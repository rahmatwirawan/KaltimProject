<?php
session_start();
 if (empty($_SESSION['username'])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=../index.php><b>LOGIN</b></a></center>";
}
else{
	include "../../../koneksi.php";

	$module=$_GET['module'];
	$act=$_GET['act'];

	// Input relawan
	if ($module=='galeri' AND $act=='input'){
		chdir("../../../");
		$uploaddir = 'images/slide/';
		$uploadfile = $uploaddir . basename($_FILES['avatar']['name']);
		$upload=move_uploaded_file($_FILES['avatar']['tmp_name'], $uploadfile);
		if ($upload) {			
		  mysql_query("INSERT INTO slider(url_slide) 
								   VALUES('$uploadfile')");
		  header('location:../../index.php?module='.$module);
		} else {
			echo "Upload failed";
		}
	}elseif ($module=='galeri' AND $act=='delete'){
	  $id = $_GET['id'];
	  $querySlider=mysql_query("select * from slider where id_slide='".$id."'");
	  $fetchSlider=mysql_fetch_array($querySlider);
	  $url_slide=$fetchSlider['url_slide'];
	  chdir("../../../");
	  unlink($url_slide);
	  $querydel=mysql_query("delete from slider where id_slide='".$id."'");
	  header('location:../../index.php?module='.$module);
	}
}
?>
