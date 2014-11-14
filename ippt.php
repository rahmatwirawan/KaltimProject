
<script src="assets/js/jquery.js"></script> 
		<?php
			$queryImage=mysql_query("select * from imageMenu where namaMenu='5'");
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
        <div class="">
		<span class="label label-info label-xl span2 center"></span>
			<div class="span10">
				<h2 class="standart-h2title">
					<a href="#"><?php echo $judulContentMenu; ?></a>
				</h2>
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
		
		<?php
			$queryContent=mysql_query("select * from contentMenu where idMenu='5' order by id ASC");
			while($fethContent=mysql_fetch_array($queryContent)){
			$isiMenu=$fethContent['isi'];
			$judulMenu=$fethContent['judul'];
				if($judulMenu==""){
					echo '
						<blockquote>
							'.$isiMenu.'
						</blockquote>';
				}else{
					echo '
						<p class="lead well main-color">
							'.$judulMenu.'
						</p>
						<blockquote>
							'.$isiMenu.'
						</blockquote>';
				}
			}
		?>
		</div>		
      <hr class="soften">
	  
     
    </div>
	<!-- END CONTENT SIDE -->
  </div>
  <!-- END INNER ROW-FLUID -->
</div>
<!-- END CONTENT CONTAINER-->