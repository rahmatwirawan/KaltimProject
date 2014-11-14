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
	if ($module=='profilPerusahaan' AND $act=='input'){
		$namaPerusahaan=$_POST['namaPerusahaan'];
		
		$jalan=$_POST['jalan'];
		$telp=$_POST['telp'];
		$fax=$_POST['fax'];
		$lurah=$_POST['lurah'];
		$kec=$_POST['kec'];
		$kab=$_POST['kab'];
		
		
		$alamat= $jalan.'+'.$telp.'+'.$fax.'+'.$lurah.'+'.$kec.'+'.$kab;	
		$lokasi=$_POST['lokasi'];
		$jenisKegiatan=$_POST['jenisKegiatan'];
		$rencanaInvestasi=$_POST['rencanaInvestasi'];
		$tenagaKerja=$_POST['tenagaKerja'];
		$luasLahan=$_POST['luasLahan'];
		$nomor=$_POST['nomor'];
		$tanggal=$_POST['tanggal'];
		$prinsip=$_POST['prinsip'];

		  $query=mysql_query("INSERT INTO perusahaan(namaPerusahaan, alamat, lokasi, jenisKegiatan, rencanaInvestasi, tenagaKerja, luasLahan, nomor, tanggal, prinsip) 
								   VALUES('".$namaPerusahaan."','".$alamat."','".$lokasi."','".$jenisKegiatan."','".$rencanaInvestasi."','".$tenagaKerja."','".$luasLahan."','".$nomor."','".$tanggal."','".$prinsip."')");
		  
		if ($query) {
			header('location:../../index.php?module='.$module);
		} else {
			echo "Upload failed";
		}
	}elseif ($module=='profilPerusahaan' AND $act=='edit'){
		$namaPerusahaan=$_POST['namaPerusahaan'];
		
		$jalan=$_POST['jalan'];
		$telp=$_POST['telp'];
		$fax=$_POST['fax'];
		$lurah=$_POST['lurah'];
		$kec=$_POST['kec'];
		$kab=$_POST['kab'];
		
		
		$alamat= $jalan.'+'.$telp.'+'.$fax.'+'.$lurah.'+'.$kec.'+'.$kab;	
		$lokasi=$_POST['lokasi'];
		$jenisKegiatan=$_POST['jenisKegiatan'];
		$rencanaInvestasi=$_POST['rencanaInvestasi'];
		$tenagaKerja=$_POST['tenagaKerja'];
		$luasLahan=$_POST['luasLahan'];
		$nomor=$_POST['nomor'];
		$tanggal=$_POST['tanggal'];
		$prinsip=$_POST['prinsip'];
		$idEdit=$_POST['idEdit'];
					
		  $query=mysql_query("Update perusahaan SET 
												namaPerusahaan = '".$namaPerusahaan."', 
												alamat = '".$alamat."', 
												lokasi = '".$lokasi."', 
												jenisKegiatan ='".$jenisKegiatan."', 
												rencanaInvestasi = '".$rencanaInvestasi."', 
												tenagaKerja = '".$tenagaKerja."', 
												luasLahan = '".$luasLahan."', 
												nomor = '".$nomor."', 
												tanggal = '".$tanggal."', 
												prinsip = '".$prinsip."'
								where idPerusahaan='".$idEdit."'");
		if($query) {  
		    header('location:../../index.php?module='.$module);
		} else {
			echo "Upload failed";
		}
	
	}elseif ($module=='profilPerusahaan' AND $act=='delete'){
		  $id = $_GET['id'];
		  $querydel=mysql_query("delete from perusahaan where idPerusahaan='".$id."'");
		  header('location:../../index.php?module='.$module);
	}
}
?>
