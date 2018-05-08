		<link href="http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,700,600,800,900" rel="stylesheet" type="text/css">
		<link href="http://fonts.googleapis.com/css?family=BenchNine:400,300,700" rel="stylesheet" type="text/css">
		<link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css">
		
		
		<link href="<?php echo base_url();?>font-awesome/css/font-awesome.min.css" rel="stylesheet">
		<link href="<?php echo base_url();?>js/plugins/camera/css/camera.css" rel="stylesheet">
		<link href="<?php echo base_url();?>js/plugins/datepicker/css/datepicker.css" rel="stylesheet">
		<link href="<?php echo base_url();?>js/plugins/magnific-popup/magnific-popup.css" rel="stylesheet">
			<link href="<?php echo base_url();?>css/style2.css" rel="stylesheet">
			<div class="main-container">
				<div class="container">
				<!-- Heading Starts -->
					<h3 class="main-heading-1">Galería</h3>
				<!-- Heading Ends -->
				<!-- Gallery Filters Starts -->
					<ul id="gallery-filter" class="list-unstyled list-inline">
						<li>
							<a href="#" class="active" data-group="all">
								Mostrar Todo
							</a>
						</li>
						<li><a href="#" data-group="category1">Cirugía</a></li>
						<li><a href="#" data-group="category2">RX</a></li>
						<li><a href="#" data-group="category3">etc</a></li>
					</ul>
				<!-- Gallery Filters Ends -->
				<!-- Gallery Starts -->
					<ul id="gallery-grid" class="row col3-text text-center-xs">
					<!-- Gallery Item #1 Starts -->
					<?php foreach ($fotos as $fila){
						?>
						<li class="col-md-4 col-sm-6 col-xs-12 gallery-grid" data-groups='["all", "category<?= $fila->Categoria; ?>"]'>
							<a href="<?= base_url().$fila->Url.'.jpg'?>" class="gallery-zoom">
								<img src="<?= base_url().$fila->Url.'.jpg'?>" alt="Gallery Image1" class="img-responsive thumbnail">
							</a>
							<h5 class="main-heading-2"><?= $fila->Nombre; ?></h5>
							<p>
								<?= $fila->Descripcion; ?>
							</p>
						</li>	
					<?php
					}
					?>
					</ul>
				<!-- Gallery Starts -->
					<br><hr>
				<!-- Pagination Starts -->
					<ul class="pagination">
						<li><a href="#">Previous</a></li>
						<li class="active"><span>1</span></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">Next</a></li>
					</ul>
				<!-- Pagination Ends -->
				</div>
			</div>
		<!-- Main Container Ends -->

		</div>
	<!-- Wrapper Ends -->
	<!-- Map Starts -->
		<div class="map"></div>	
