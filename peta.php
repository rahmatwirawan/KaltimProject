	<?php
	include("koneksi.php");
?>
	<link rel="stylesheet" href="ammap/ammap.css" type="text/css">
	<link rel="stylesheet" href="assets/css/camera.css" type="text/css">
	<script type="text/javascript" src="ammap/jquery-1.7.1.min.js"></script>
    <script type='text/javascript' src='assets/js/jquery.mobile.customized.min.js'></script>
    <script type='text/javascript' src='assets/js/jquery.easing.1.3.js'></script> 
    <script type='text/javascript' src='assets/js/camera.min.js'></script> 
    
    <script>
		jQuery(function(){
			
			
		});
	</script>
	<script src="ammap/ammap.js" type="text/javascript"></script>
        <!-- map file should be included after ammap.js -->
		<script src="ammap/maps/js/indonesiaLow.js" type="text/javascript"></script>
		<?php
			$query=mysql_query("SELECT * FROM peta order by id");
			$ketemu=mysql_num_rows($query);
			$no=0;
		?>
		<script type="text/javascript">
		// svg path for target icon
		var targetSVG = "M9,0C4.029,0,0,4.029,0,9s4.029,9,9,9s9-4.029,9-9S13.971,0,9,0z M9,15.93 c-3.83,0-6.93-3.1-6.93-6.93S5.17,2.07,9,2.07s6.93,3.1,6.93,6.93S12.83,15.93,9,15.93 M12.5,9c0,1.933-1.567,3.5-3.5,3.5S5.5,10.933,5.5,9S7.067,5.5,9,5.5 S12.5,7.067,12.5,9z";
		var res = {
					"map":"indonesiaLow",
					"images":[
					
					
						<?php 
						while($r=mysql_fetch_array($query)){?>
						{	
							getAreasFromMap:true,
							"id":"<?php echo $r['id'] ?>",
							"svgPath":"<?php echo $r['svgPath'] ?>",
							"zoomLevel": 5,
							color: "#15A892",
							"scale": 0.5,
							"title": "<?php echo $r['title'] ?>",
							"latitude": <?php echo $r['latitude'] ?>,
							"longitude": <?php echo $r['longitude'] ?>,
							
							<?php 
							$no++;
							if ($no==$ketemu){ 
					 ?> } <?php } else { ?> }, <?php }
							} //akhir while
							?>
						
					]
				   }
		var map = AmCharts.makeChart("mapdiv", {
			type: "map",
			pathToImages: "ammap/images/",

			imagesSettings: {
				rollOverColor: "#CC0000",
				rollOverScale: 3,
				selectedScale: 3,
				selectedColor: "#CC0000"
			},
			areasSettings:{unlistedAreasColor:"#FFCC00",autoZoom: true,selectable: true},
			objectList: {
				container: "searchresults"
			},
			
			showImagesInList: true,
			dataProvider: res,
			smallMap: {},
			developerMode: true
		});
		// add search when the map is initialized
		map.addListener("rendered", function (event) {
		   jQuery('#search').liveUpdate('#searchresults ul');
		});

		// liveSearch code borrowed (and modified from here)
		// http://ejohn.org/blog/jquery-livesearch/

		jQuery.fn.liveUpdate = function(list){
		  list = jQuery(list);
		 
		  if ( list.length ) {
			var rows = list.children('li'),
			  cache = rows.map(function(){
				return jQuery(this).children('a').html().toLowerCase();
			  });
			this
			  .keyup(filter).keyup()
			  .parents('form').submit(function(){
				return false;
			  });
		  }
		   
		  return this;
		   
		  function filter(){
			  
			var term = jQuery.trim( jQuery(this).val().toLowerCase() ), scores = [];
		   
			if ( !term ) {
			  rows.show();
			  
			} else {
			  rows.hide();
		 
			  cache.each(function(i){
				if (this.match(term)) { jQuery(rows[i]).show();}
			  });
			}
		  }
		};

		map.addListener("clickMapObject", function (event) {
			document.getElementById("info").innerHTML = '<span class="medium-text"><span class="main-color">'+event.mapObject.title+'</span></span>' ;
			<?php $t=mysql_fetch_array($query); ?>
			//document.getElementById("info_berita").innerHTML =  event.mapObject.info ;
			//document.getElementById("placeholder").innerHTML = '<img src="images/' + event.mapObject.title + '.png" />';
			var des="<?php echo $t['description'] ?>";
			document.getElementById("info_gambar").innerHTML = '<p style="margin-top:10px;">'+des+'</p>';
			var test = event.mapObject.id;
				var dataString = 'id='+ test;
				$("#flash").show();
				$("#detail_data").show();
				$("#info").show();
				$("#flash").fadeIn(400).html('<img src="images/ajax-loader.gif" align="absmiddle"> <span class="loading">Loading Comment...</span>');
				$.ajax({
				type: "POST",
				url: "detail_maps.php",
				data: dataString,
				cache: false,
				success: function(html){
				
				document.getElementById("detail_data").innerHTML=html;
					jQuery('#camera_wrap_2').camera({
					height: '400px',
					loader: 'bar',
					pagination: false,
					thumbnails: true
				});
				$("#flash").hide();
				}
				});
		});
		//map.addListener("clickMapObject", klikdulu);
		map.addListener("homeButtonClicked", function(event){
			$("#detail_data").hide();
			$("#info").hide();
		});
		map.addListener("rollOverMapObject", function (event) {
			// add class "hover" to the respective flag
			var id = event.mapObject.id;
			jQuery('#'+id).addClass('hover');
		});
		map.addListener("rollOutMapObject", function (event) {
			// remove class "hover" from the respective flag
			var id = event.mapObject.id;
			jQuery('#'+id).removeClass('hover');
		});
		// click event on the map
		jQuery(function ($) {
			// add hover events to flags
			$('.flag').hover(function () {
				map.rollOverMapObject( map.getObjectById(this.id) );
			}, function () {
				map.rollOutMapObject( map.getObjectById(this.id) );
			});
			$('.flag').click(function () {
				<?php 
				$data=$_GET['id'];
				if (isset($data)){?>
				map.clickMapObject( map.getObjectById(<?php echo $data ?>) );
				<?php } else {?>
				map.clickMapObject( map.getObjectById(this.id) );
				<?php } ?>
				
				
			
				/*var test = this.id;
				var dataString = 'id='+ test;
				$("#flash").show();
				$("#flash").fadeIn(400).html('<img src="ajax-loader.gif" align="absmiddle"> <span class="loading">Loading Comment...</span>');
				$.ajax({
				type: "POST",
				url: "detail_maps.php",
				data: dataString,
				cache: false,
				success: function(html){
				$("#display").after(html);
				$("#flash").hide();
				}
				});*/
			});
		});
		function cek_data(){
			<?php 
				$data=$_GET['id'];
				if (isset($data)){?>
				map.clickMapObject( map.getObjectById(<?php echo $data ?>) );
				<?php } ?>
		}
		function klikdulu(event){
			//var map = event.chart;
			//var image = map.dataProvider.images[2];
			/*map.addListener("clickMapObject", function (event) {
			//map.clickMapObject(mapObject.title);
			alert(event.mapObject.info);
			alert('tess');
		});*/
			map.addListener("rendered", function (event) {
			
			//alert(event.mapObject.title) ;
		});
		//alert(image);
		//alert(res.images[1].title);
		alert(map.dataProvider.images[1].title);
		 var cat = "Makassarr";
		 
		// get index of category
		var index;
		for(var i = 0; i < res.images.length; i++){
			if(res.images[i].title == cat){
				index = i;
			}
		}
		if(!isNaN(index)){
			map.addListener("writeDevInfo", function(event){
			alert("dsfsd");
			});
			//map.selectedScale(index);
		}
		}
        </script>
	<body onload="cek_data()">
	<div class="page-header">
		<div class="shine">
			<div class="container">
				<div class="row-fluid">
					<div class="span12">
							<h1>Profil Kawasan</h1>
							<!-- BREADCRUMB -->
							<ul class="breadcrumb">
							  <li><a href="index.php">Home</a> <span class="divider">&rarr;</span></li>
							  <li class="active">Profil Kawasan</li>
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
					<div>
						<div id="listdiv" style="width:200px; overflow:auto; height:500px; float:right; background-color:#EEEEEE;">
							<input type="text" style="width:180px;overflow:auto;" id="search" placeholder="Cari Area" />
							<div id="searchresults" style="height:300px; "></div>
						</div>
						<!--<div id="placeholder"></div>  Tampilkan gambar hover -->
						<div id="mapdiv" style="margin-right:200px; background-color:#EEEEEE; height: 500px;"></div><!-- -->
					</div>
					<hr class="half">
					<h4 class="center standart-h2title " id="info"> <span class="medium-text"><span class="main-color"></span> </span>
					</h4>
					<hr class="half">
					<div class="row" id="detail_data">
						
					</div>
					<div id="info_gambar"></div>
					<div style="clear:both;"></div>
					<div id="flash"></div>
					<div id="display"></div>
				</div>
				<div id="1" class="flag">Makassar</div>
			</div>
		</div>
	</div>
	<!-- END CONTENT CONTAINER-->
	</body>
