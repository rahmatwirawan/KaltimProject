	<link rel="stylesheet" type="text/css" href="dtables/media/css/jquery.dataTables.css">
	<link rel="stylesheet" type="text/css" href="dtables/resources/syntax/shCore.css">
	
		<link rel="stylesheet" href="admin/assets/plugins/bootstrap-colorpalette/css/bootstrap-colorpalette.css">
		<link rel="stylesheet" href="admin/assets/plugins/DataTables/media/css/DT_bootstrap.css" />

		
	<script type="text/javascript" language="javascript" src="dtables/media/js/jquery.js"></script>
	<script type="text/javascript" language="javascript" src="dtables/media/js/jquery.dataTables.js"></script>
	<script type="text/javascript" language="javascript" class="init">
		$(document).ready(function() {
			$('#example').DataTable();
		} );
	</script>
		<?php
			$queryImage=mysql_query("select * from imageMenu where namaMenu='11'");
				$fetchImage=mysql_fetch_array($queryImage);
				$imgMenu=$fetchImage['img'];
				$judulMenu=$fetchImage['judul'];
				$judulContentMenu=$fetchImage['judulContent'];
		?>
		<div class="page-header">
		<div class="shine">
			<div class="container">
				<div class="row-fluid">
					<div class="span12">
							<h1><?php echo $judulMenu; ?></h1>
							<!-- BREADCRUMB -->
							<ul class="breadcrumb">
							  <li><a href="index.php">Home</a> <span class="divider">&rarr;</span></li>
							  <li class="active"><?php echo $judulMenu; ?>	</li>
							</ul>
							<!--END: BREADCRUMB -->
					</div>
				 </div>
			</div>
	   </div>
	</div>
	<!-- PAGE HEADER -->
<div class="container">
  <div class="row-fluid blog">
    <div class="">
      <div class="blog-post">
        <div class="" align="center">
		
			<div class="">
				<h3 class="standart-h2title">
					
						 LAPORAN PENERBITAN PERSETUJUAN PRINSIP / IZIN LOKASI <br/>BADAN PERIZINAN DAN INVESTASI DAERAH<br/>KOTA BALIKPAPAN (KARIANGAU KM. 13)
					
				</h3>
			</div>
            <p class="meta-blog clearfix">&nbsp;</p>
         <a href="<?php echo $imgMenu; ?>" target="_blank">
			  <div class="thumbnail">
				<?php
					if($imgMenu=="assets/img/"){
					
					}else{
						echo '<img src="'.$imgMenu.'" width="100px" height="100px" alt="bootstrap template responsive theme" />
							<p class="meta-blog clearfix"></p>';	
					}
				?>	
			  </div>
			 </a>
        </div>	
		
		<div class="row">
			<table id="example" class="display" cellspacing="0" width="100%">
				<thead>
					<tr>
						<th rowspan="2">No</th>
						<th rowspan="2" width="200px">Nama dan Alamat<br/>Perusahaan</th>
						<th rowspan="2">Lokasi/<br/>Jenis Kegiatan</th>
						<th rowspan="2">Rencana Investasi<br/>(Rp)</th>
						<th rowspan="2">Penyerapan <br/>Tenaga Kerja(Org)</th>
						<th rowspan="2">Luasan Lahan (Ha)</th>
						<th colspan="2">Persetujuan Prinsip / Izin Lokasi</th>
						<th rowspan="2">Lihat</th>
					</tr>
					<tr>
						<td>Nomor</td>
						<td>Tanggal</td>
					</tr>
				</thead>

			

				<tbody>
				<?php
					$no=1;
					$queryPerusahaan=mysql_query("select * from perusahaan order by idPerusahaan ASC");
					while($fetchPerusahaan=mysql_fetch_array($queryPerusahaan)){
						$idPerusahaan=$fetchPerusahaan['idPerusahaan'];
						$namaPerusahaan=$fetchPerusahaan['namaPerusahaan'];
						$alamat=$fetchPerusahaan['alamat'];
						
						$expAlamat=explode('+',$alamat);
						$jalan=$expAlamat[0];
						$telp=$expAlamat[1];
						$fax=$expAlamat[2];
						$lurah=$expAlamat[3];
						$kec=$expAlamat[4];
						$kab=$expAlamat[5];
						
						$lokasi=$fetchPerusahaan['lokasi'];
						$jenisKegiatan=$fetchPerusahaan['jenisKegiatan'];
						$rencanaInvestasi=$fetchPerusahaan['rencanaInvestasi'];
						$tenagaKerja=$fetchPerusahaan['tenagaKerja'];
						$luasLahan=$fetchPerusahaan['luasLahan'];
						$nomor=$fetchPerusahaan['nomor'];
						$tanggal=$fetchPerusahaan['tanggal'];
						$prinsip=$fetchPerusahaan['prinsip'];
				?>
					<tr>
						<td valign="top"><?php echo $no; ?></td>
						<td valign="top"><?php echo $namaPerusahaan."<br/>Jalan : ".$jalan."<br/> No. Telp : ".$telp."<br/>No. Fax : ".$fax."<br/>Kelurahan : ".$lurah."<br/> Kecamatan : ".$kec."<br/>Kab. /Kota : ".$kab; ?></td>
						<td valign="top"><?php echo "<ul><li>".$lokasi."</li><br/><li>".$jenisKegiatan."</li>"; ?></td>
						<td valign="top"><?php echo $rencanaInvestasi; ?></td>
						<td valign="top"><?php echo $tenagaKerja; ?></td>
						<td valign="top"><?php echo $luasLahan; ?></td>
						<td valign="top"><?php echo $nomor."<br/>".$prinsip; ?></td>
						<td valign="top"><?php echo $tanggal; ?></td>
						<td valign="top"><a href="?module=peta&id=<?php echo $idPerusahaan; ?>">Detail</a></td>
					</tr>
				<?php
					$no++;
					}
				?>
				</tbody>
			</table>

		</div>
	</div>		
      <hr class="soften">
	  
     
    </div>

  </div>
  <!-- END INNER ROW-FLUID -->
</div>
<!-- END CONTENT CONTAINER-->