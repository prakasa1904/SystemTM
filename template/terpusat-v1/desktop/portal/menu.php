<?php $path = explode('.', $_SERVER['HTTP_HOST']); $open = 'selected'; ?>
<?php $menu = ['www', 'nasional', 'internasional', 'islam', 'olahraga', 'bola', 'teknologi', 'hiburan', 'otomotif', 'kesehatan', 'gayahidup']; ?>
<div id="menu-utama">
	<div class="navbar yamm">
		<nav class="navbar navbar-inverse border-line" role="navigation">
		<div class="container">
			<div class="navbar-header"></div>
			<ul class="nav navbar-nav">
<?php foreach($menu as $menu): ?>
	<?php if($menu == $path[0]): ?>			
				<li class="yamm-fullwidth <?php echo $open; ?>">
	<?php else: ?>
				<li class="yamm-fullwidth">
	<?php endif; ?>

	<?php if($menu == 'www'): ?>
				  <a href="http://www.terpusat.com/"><i class="glyphicon glyphicon-home"></i></a>
	<?php else: ?>
				  <a href="http://<?php echo $menu ?>.terpusat.com/"><?php echo ucfirst($menu); ?></a>
	<?php endif; ?>
				</li>				
<?php endforeach; ?>
				<!--<li class="yamm-fullwidth">
				  <a href="http://www.terpusat.com/">Indeks</a>
				</li>-->
			  	<!-- <li class="yamm-fullwidth <?php echo $open; ?>">
				  <a href="<?php echo base_url(); ?>"><i class="glyphicon glyphicon-home"></i></a>
				</li>
			  	<li class="dropdown yamm-fullwidth">
				  <a href="<?php echo base_url(); ?>" class="dropdown-toggle" data-toggle="dropdown">Nasional</a>
				</li>
				<li class="dropdown yamm-fullwidth">
				  <a href="<?php echo base_url(); ?>" class="dropdown-toggle" data-toggle="dropdown">Internasional</a>
				</li>
				<li class="dropdown yamm-fullwidth">
				  <a href="<?php echo base_url(); ?>" class="dropdown-toggle" data-toggle="dropdown">Islam</a>
				</li>
				<li class="dropdown yamm-fullwidth">
				  <a href="<?php echo base_url(); ?>" class="dropdown-toggle" data-toggle="dropdown">Olahraga</a>
				</li> -->
				<!-- With Offsets -->
				<!-- Aside Menu -->
				<!-- <li class="dropdown yamm-fullwidth">
				  <a href="<?php echo base_url(); ?>" class="dropdown-toggle" data-toggle="dropdown">Bola</a> -->
				  <!--<ul class="dropdown-menu">
					<li class="grid-demo">
						<div class="row">
							<div class="col-sm-1">Piala Dunia</div>
							<div class="col-sm-1">Liga Champions</div>
							<div class="col-sm-1">Liga Europa</div>
							<div class="col-sm-1">Liga Indonesia</div>
							<div class="col-sm-1">Liga Inggris</div>
							<div class="col-sm-1">Liga Italia</div>
							<div class="col-sm-1">Liga Spanyol</div>
							<div class="col-sm-1">Liga Lainnya</div>
						</div>
					</li>
				  </ul>-->
				<!-- </li> -->
				<!-- Nesting Menu -->
				<!-- <li class="dropdown yamm-fullwidth">
				  <a href="<?php echo base_url(); ?>" class="dropdown-toggle" data-toggle="dropdown">Teknologi</a> -->
				  <!--<ul class="dropdown-menu">
					<li class="grid-demo">
						<div class="row-fluid">
						  <div class="span2">
							Apps &amp; OS
						  </div>
						  <div class="span2">
							Hardware
						  </div>
						  <div class="span2">
							Internet
						  </div>
						</div>
					</li>
				  </ul>-->
				<!-- </li>
				<li class="dropdown yamm-fullwidth">
				  <a href="<?php echo base_url(); ?>" class="dropdown-toggle" data-toggle="dropdown">Hiburan</a> -->
				  <!--<ul class="dropdown-menu">
					<li class="grid-demo">
						<div class="row-fluid">
						  <div class="span2">
							Dunia Selebriti
						  </div>
						  <div class="span2">
							Dunia Film
						  </div>
						  <div class="span2">
							Dunia Musik
						  </div>
						</div>
					</li>
				  </ul>-->
				<!-- </li>
				<li class="dropdown yamm-fullwidth">
				  <a href="<?php echo base_url(); ?>" class="dropdown-toggle" data-toggle="dropdown">Otomotif</a> -->
				  <!--<ul class="dropdown-menu">
					<li class="grid-demo">
						<div class="row-fluid">
						  <div class="span2">
							Mobil
						  </div>
						  <div class="span2">
							Motor
						  </div>
						  <div class="span2">
							Tips &amp; Trik
						  </div>
						</div>
					</li>
				  </ul>-->
				<!-- </li>
				<li class="dropdown yamm-fullwidth">
				  <a href="<?php echo base_url(); ?>" class="dropdown-toggle" data-toggle="dropdown">Kesehatan</a> -->
				  <!--<ul class="dropdown-menu">
					<li class="grid-demo">
						<div class="row-fluid">
						  <div class="span2">
							Ibu &amp; Anak
						  </div>
						  <div class="span2">
							Seksual
						  </div>
						  <div class="span2">
							Tanaman &amp; Buah
						  </div>
						</div>
					</li>
				  </ul>-->
				<!-- </li>
				<li class="dropdown yamm-fullwidth">
				  <a href="<?php echo base_url(); ?>" class="dropdown-toggle" data-toggle="dropdown">Gaya Hidup</a> -->
				  <!--<ul class="dropdown-menu">
					<li class="grid-demo">
						<div class="row-fluid">
						  <div class="span2">
							Hubungan
						  </div>
						  <div class="span2">
							Karir
						  </div>
						  <div class="span2">
							Style
						  </div>
						</div>
					</li>
				  </ul>-->
				<!-- </li>
				<li class="dropdown yamm-fullwidth">
				  <a href="<?php echo base_url(); ?>" class="dropdown-toggle" data-toggle="dropdown">Indeks</a>
				</li> -->
			</ul>
		</div>
		</nav>
	</div>
</div>
<div class="terpusat-legend-top"></div>