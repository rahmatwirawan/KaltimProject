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
	if ($module=='izinLokasi' AND $act=='input'){
		$isi=$_POST['penjelasan'];
		$judul=$_POST['judul'];	
		  $query=mysql_query("INSERT INTO contentMenu(judul, isi, idMenu) 
								   VALUES('".$judul."','".$isi."','4')");
		  
		if ($query) {
			header('location:../../index.php?module='.$module);
		} else {
			echo "Upload failed";
		}
	}elseif ($module=='izinLokasi' AND $act=='edit'){
		$isi=$_POST['penjelasan'];
		$judul=$_POST['judul'];
		$idEdit=$_POST['idEdit'];
					
		  $query=mysql_query("Update contentMenu SET judul = '".$judul."',
													 isi = '".$isi."' 
												where id='".$idEdit."'");
		if($query) {  
		    header('location:../../index.php?module='.$module);
		} else {
			echo "Upload failed";
		}
	}elseif ($module=='izinLokasi' AND $act=='editImage'){
		$judul=$_POST['judul'];
		$judulContentMenu=$_POST['judulContentMenu'];
		if(($_FILES['avatar']['name'])==""){
			$query=mysql_query("Update imageMenu SET judul = '".$judul."', judulContent = '".$judulContentMenu."'
													where id='4'");
			  header('location:../../index.php?module='.$module);
		}else{
		  
		  $queryImageMenu=mysql_query("select * from imageMenu where id='4'");
		  $fetchImage=mysql_fetch_array($queryImageMenu);
		  $img=$fetchImage['img'];

		  chdir("../../../");
		  unlink($img);
		  
			$uploaddir = 'assets/img/imageMenu/';
			$uploadfile = $uploaddir . basename($_FILES['avatar']['name']);
			$upload=move_uploaded_file($_FILES['avatar']['tmp_name'], $uploadfile);
			$query=mysql_query("Update imageMenu SET img = '".$uploadfile."',judul = '".$judul."', judulContent = '".$judulContentMenu."'
												where id='4'");
		}
		if ($upload) {			
		  header('location:../../index.php?module='.$module);
		} else {
			echo "Upload failed";
		}
	}elseif ($module=='izinLokasi' AND $act=='delete'){
		  $id = $_GET['id'];
		  $querydel=mysql_query("delete from contentMenu where id='".$id."'");
		  header('location:../../index.php?module='.$module);
	}
}
?>
