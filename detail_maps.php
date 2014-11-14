<?php
include("koneksi.php");
if(isSet($_POST['id']))
{
	$id=$_POST['id'];
	$sql_in= mysql_query("SELECT title,id_jns_keg,description,alamat,rencana_investasi,peny_ten_kerja,luas_lahan,pp_nmr,pp_tgl FROM peta WHERE id=$id");
	$r=mysql_fetch_array($sql_in);
	$group = explode('|', $r['id_jns_keg']);
	$t_group=count($group);
	$t_group=$t_group-2;
	if ($t_group>0){
		$where="where ";
		for($a=1;$a<=$t_group;$a++){
			$where .="id=$group[$a]";
			if ($a!=$t_group){
				$where .=" or ";
			}
		}
		$rs = "select * from jenis_kegiatan $where order by id ASC";
		$t_rs=mysql_query($rs);
		$no=1;
		
	}
}
?>

		
	<div class="span6 portfolio_rotator">
      <div style="margin-left:30px;" class="camera_wrap camera_magenta_skin" id="camera_wrap_2">
		<?php
		$galeri=mysql_query("SELECT * FROM galeri WHERE id_perusahaan=$_POST[id]");
		while($g=mysql_fetch_array($galeri)){
		
		?>
        <div data-thumb="images/slides/thumbs/<?php echo $g['gbr_thumb'] ?>" data-src="images/slides/<?php echo $g['gbr_thumb'] ?>">
          <div class="camera_caption fadeFromBottom"><?php echo $g['keterangan'] ?></div>
        </div>
		<?php } ?>
      </div>
      <!-- #camera_wrap_2 -->
    </div>
    <div class="span6">
      <div class="border-left-color">
        <h3 class="standart-h3title">
          <span>Informasi Instansi/Perusahaan</span>
        </h3>
        <table class="table table-hover">
          <tbody>
            <tr>
              <td>
                <div class="nowrap small-text">Nama dan Alamat Perusahaan</div>
              </td>
              <td>
                <i class="fa-icon-forward"></i>
              </td>
              <td>
                <span style="color:#3399ff;">
                  <strong><?php echo $r['title']; ?></strong>
                </span>
				<div class="italic"><?php echo $r['alamat']; ?></div>
				
              </td>
            </tr>
            <tr>
              <td>
                <div class="nowrap small-text">Lokasi/Jenis Kegiatan</div>
              </td>
              <td>
                <i class="fa-icon-forward"></i>
              </td>
              <td>
                
				<?php while($t=mysql_fetch_array($t_rs)){
							echo $no.". ".$t['nm_jns_keg']."<br>";
							$no++;
						} ?>
              </td>
            </tr>
            <tr>
              <td>
                <div class="nowrap small-text">Rencana Investasi (Rp)</div>
              </td>
              <td>
                <i class="fa-icon-forward"></i>
              </td>
              <td>
                <div class="italic"><?php echo $r['rencana_investasi']; ?></div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="nowrap small-text">Penyerapan Tenaga Kerja(Org)</div>
              </td>
              <td>
                <i class="fa-icon-forward"></i>
              </td>
              <td>
                <div class="italic"><?php echo $r['peny_ten_kerja']; ?></div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="nowrap small-text">Luasan Lahan (Ha)</div>
              </td>
              <td>
                <i class="fa-icon-forward"></i>
              </td>
              <td>
                <div class="italic"><?php echo $r['luas_lahan']; ?></div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="nowrap small-text">Nomor Izin Lokasi</div>
              </td>
              <td>
                <i class="fa-icon-forward"></i>
              </td>
              <td>
                <div class="italic"><?php echo $r['pp_nmr']; ?></div>
              </td>
            </tr>
			<tr>
              <td>
                <div class="nowrap small-text">Tanggal Izin Lokasi</div>
              </td>
              <td>
                <i class="fa-icon-forward"></i>
              </td>
              <td>
                <div class="italic"><?php echo $r['pp_tgl']; ?></div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
	<div class="span12"><p><?php echo $r['description']; ?></p></div>
	
		