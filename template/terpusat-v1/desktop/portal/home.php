    <div class="container">
        <div class="row">
			<!--<div class="sidebar-tengah-kiri col-md-3">
                <h4 class="judul-sidebar-tengah-kiri lead">Topik Pilihan*</h4>
                <div class="margin-top-sidebar-tengah-kiri list-group">		
                	<h3 class="list-sidebar-tengah-kiri"><a href="#">Benarkah Yang Demikian Aslinya</a></h3>
                	<h3 class="list-sidebar-tengah-kiri"><a href="#">Saat Indonesia Menjadi Tiga</a></h3>
                	<h3 class="list-sidebar-tengah-kiri"><a href="#">Topik Hidayat</a></h3>
                	<h3 class="list-sidebar-tengah-kiri"><a href="#">Ketika Topik Itu Bisa</a></h3>
                	<h3 class="list-sidebar-tengah-kiri"><a href="#">Kenapa Islam ?</a></h3>
                	<h3 class="list-sidebar-tengah-kiri"><a href="#">Topik Hidayat dan Istrinya Selingkuh</a></h3>
                </div>
            </div>-->

            <!--<div class="sidebar-tengah-kanan col-md-12">-->
            <div class="col-md-12">
                <div class="row">
                    <div class="col-sm-12 col-lg-12 col-md-12">
                       <!-- Nav tabs -->
						<ul class="nav nav-tabs">
							<li class="active"><a rel="nofollow" href="#terpusat-terkini" data-toggle="tab"><h4 class="tab-sidebar-title">Terkini</h4></a></li>
							<!--<li><a rel="nofollow" href="#terpusat-terpopuler" data-toggle="tab"><h4 class="tab-sidebar-title">Terpopuler</h4></a></li>
							<li><a rel="nofollow" href="#terpusat-terkomentari" data-toggle="tab"><h4 class="tab-sidebar-title">Terkomentari</h4></a></li>-->
						</ul>

						<!-- Tab panes -->
						<div class="tab-content">
							<div class="tab-pane active" id="terpusat-terkini">
								<?php $i=0; foreach($re_article as $data): ?>
								<?php article_url($data) ?>
									<div class="list-sidebar-tengah-kanan col-lg-6 col-md-6">
										<div style="margin-left:0px;height: 70px;" class="row">
											<div style="padding: 0px;" class="col-lg-4 col-md-4">
												<img alt="<?php echo $data->article_name ?>" class="img-responsive" src="<?php echo base_url(); ?>assets/portal/banner/190x75.gif" />
												<!--<img width="120" height="50" alt="<?php echo $data->article_name ?>" src="#" />-->
											</div>
											<div class="col-lg-8 col-md-8">
												<h3 class="title-list-sidebar-tengah-kanan"><a title='<?php echo $data->article_name ?>' href="<?php echo article_url($data); ?>"><?php echo $data->article_name ?></a></h3> <span class="time-lead-list small"><em><?php echo article_portal($data) ?> - <?php echo article_time_index($data->article_created) ?> yang lalu</em></span>
											</div>
										</div>
									</div>
								<?php endforeach; ?>
							</div>
							<!--<div class="tab-pane" id="terpusat-terpopuler">
								<p>Belum ada artikel populer di Terpusat Media</p>
							</div>
							<div class="tab-pane" id="terpusat-terkomentari">
								<p>Belum ada artikel terkomentari di Terpusat Media</p>
							</div>-->
						</div>
                    </div>

                    

                </div>

            </div>

        </div>

    </div>
<!--<div class="terpusat-legend-top"></div>
	<div class="container">
        <div class="row">

            <div class="col-md-4">
				<div class="ads-home-midd-1">
					<img class="img-responsive" src="<?php echo base_url(); ?>assets/portal/banner/400x90.gif" alt="" />
				</div>
            </div>
			
			 <div class="col-md-4">
				<div class="ads-home-midd-2">
					<img class="img-responsive" src="<?php echo base_url(); ?>assets/portal/banner/400x90.gif" alt="" />
				</div>
            </div>

            <div class="col-md-4">
				<div class="ads-home-midd-3">
					<img class="img-responsive" src="<?php echo base_url(); ?>assets/portal/banner/400x90.gif" alt="" />
				</div>
			</div>

        </div>

    </div>-->
<div class="terpusat-legend-top"></div>
	<div class="container">
        <div class="row">
			<div class="col-md-4 portfolio-item">
			<?php $i=0; foreach($te_article as $data): ?>
				<?php if($i==0): ?>
				<div class="abs-caption">
					<span class="abs-label" style="background:#e94f1d;">Tekno</span>
					<a title='<?php echo $data->article_name ?>' href="<?php echo article_url($data); ?>">
						<img alt="<?php echo $data->article_name ?>" class="img-responsive" src="<?php echo base_url(); ?>assets/portal/banner/800x400.gif">
						<span id="abs-title"><h3 class="title-home-terpusat-portal"><?php echo $data->article_name ?></h3><span>
					</a>
				</div>
				<?php else: ?>
				<h3 class="title-home-terpusat-portal-list"><a title='<?php echo $data->article_name ?>' href="<?php echo article_url($data); ?>"><?php echo $data->article_name ?></a></h3>
				<?php endif; ?>
			<?php $i++; endforeach; ?>
            </div>

            <div class="col-md-4 portfolio-item">
            <?php $i=0; foreach($bo_article as $data): ?>
				<?php if($i==0): ?>
				<div class="abs-caption">
					<span class="abs-label" style="background:#093;">Bola</span>
						<a title='<?php echo $data->article_name ?>' href="<?php echo article_url($data); ?>">
						<img alt="<?php echo $data->article_name ?>" class="img-responsive" src="<?php echo base_url(); ?>assets/portal/banner/800x400.gif">
						<span id="abs-title"><h3 class="title-home-terpusat-portal"><?php echo $data->article_name ?></h3><span>
					</a>
				</div>
				<?php else: ?>
				<h3 class="title-home-terpusat-portal-list"><a title='<?php echo $data->article_name ?>' href="<?php echo article_url($data); ?>"><?php echo $data->article_name ?></a></h3>
				<?php endif; ?>
			<?php $i++; endforeach; ?>
            </div>

            <div class="col-md-4 portfolio-item">
            <?php $i=0; foreach($ot_article as $data): ?>
				<?php if($i==0): ?>
				<div class="abs-caption">
					<span class="abs-label" style="background:#ff0000;">Oto</span>
					<a title='<?php echo $data->article_name ?>' href="<?php echo article_url($data); ?>">
						<img alt="<?php echo $data->article_name ?>" class="img-responsive" src="<?php echo base_url(); ?>assets/portal/banner/800x400.gif">
						<span id="abs-title"><h3 class="title-home-terpusat-portal"><?php echo $data->article_name ?></h3><span>
					</a>
				</div>
				<?php else: ?>
				<h3 class="title-home-terpusat-portal-list"><a title='<?php echo $data->article_name ?>' href="<?php echo article_url($data); ?>"><?php echo $data->article_name ?></a></h3>
				<?php endif; ?>
			<?php $i++; endforeach; ?>
            </div>
        </div>
    </div>
	
	<div class="container">
        <div class="row">
			<div class="col-md-4 portfolio-item">
			<?php $i=0; foreach($en_article as $data): ?>
				<?php if($i==0): ?>
				<div class="abs-caption">
					<span class="abs-label" style="background:#e46b1b;">Hiburan</span>
					<a title='<?php echo $data->article_name ?>' href="<?php echo article_url($data); ?>">
						<img alt="<?php echo $data->article_name ?>" class="img-responsive" src="<?php echo base_url(); ?>assets/portal/banner/800x400.gif">
						<span id="abs-title"><h3 class="title-home-terpusat-portal"><?php echo $data->article_name ?></h3><span>
					</a>
				</div>
				<?php else: ?>
				<h3 class="title-home-terpusat-portal-list"><a title='<?php echo $data->article_name ?>' href="<?php echo article_url($data); ?>"><?php echo $data->article_name ?></a></h3>
				<?php endif; ?>
			<?php $i++; endforeach; ?>
            </div>

            <div class="col-md-4 portfolio-item">
            <?php $i=0; foreach($in_article as $data): ?>
				<?php if($i==0): ?>
				<div class="abs-caption">
					<span class="abs-label" style="background:#0d5b97;">Internasional</span>
					<a title='<?php echo $data->article_name ?>' href="<?php echo article_url($data); ?>">
						<img alt="<?php echo $data->article_name ?>" class="img-responsive" src="<?php echo base_url(); ?>assets/portal/banner/800x400.gif">
						<span id="abs-title"><h3 class="title-home-terpusat-portal"><?php echo $data->article_name ?></h3><span>
					</a>
				</div>
				<?php else: ?>
				<h3 class="title-home-terpusat-portal-list"><a title='<?php echo $data->article_name ?>' href="<?php echo article_url($data); ?>"><?php echo $data->article_name ?></a></h3>
				<?php endif; ?>
			<?php $i++; endforeach; ?>
            </div>

			 <div class="col-md-4 portfolio-item">
			 <?php $i=0; foreach($na_article as $data): ?>
				<?php if($i==0): ?>
				<div class="abs-caption">
					<span class="abs-label" style="background:#941D1D;">Nasional</span>
					<a title='<?php echo $data->article_name ?>' href="<?php echo article_url($data); ?>">
						<img alt="<?php echo $data->article_name ?>" class="img-responsive" src="<?php echo base_url(); ?>assets/portal/banner/800x400.gif">
						<span id="abs-title"><h3 class="title-home-terpusat-portal"><?php echo $data->article_name ?></h3><span>
					</a>
				</div>
				<?php else: ?>
				<h3 class="title-home-terpusat-portal-list"><a title='<?php echo $data->article_name ?>' href="<?php echo article_url($data); ?>"><?php echo $data->article_name ?></a></h3>
				<?php endif; ?>
			<?php $i++; endforeach; ?>
            </div>
        </div>
    </div>
	
	<div class="container">
        <div class="row">
			<div class="col-md-4 portfolio-item">
			<?php $i=0; foreach($he_article as $data): ?>
				<?php if($i==0): ?>
				<div class="abs-caption">
					<span class="abs-label" style="background:#04ae68;">Kesehatan</span>
					<a title='<?php echo $data->article_name ?>' href="<?php echo article_url($data); ?>">
						<img alt="<?php echo $data->article_name ?>" class="img-responsive" src="<?php echo base_url(); ?>assets/portal/banner/800x400.gif">
						<span id="abs-title"><h3 class="title-home-terpusat-portal"><?php echo $data->article_name ?></h3><span>
					</a>
				</div>
				<?php else: ?>
				<h3 class="title-home-terpusat-portal-list"><a title='<?php echo $data->article_name ?>' href="<?php echo article_url($data); ?>"><?php echo $data->article_name ?></a></h3>
				<?php endif; ?>
			<?php $i++; endforeach; ?>
            </div>

            <div class="col-md-4 portfolio-item">
            <?php $i=0; foreach($li_article as $data): ?>
				<?php if($i==0): ?>
				<div class="abs-caption">
					<span class="abs-label" style="background:#ff00c6;">Gaya Hidup</span>
					<a title='<?php echo $data->article_name ?>' href="<?php echo article_url($data); ?>">
						<img alt="<?php echo $data->article_name ?>" class="img-responsive" src="<?php echo base_url(); ?>assets/portal/banner/800x400.gif">
						<span id="abs-title"><h3 class="title-home-terpusat-portal"><?php echo $data->article_name ?></h3><span>
					</a>
				</div>
				<?php else: ?>
				<h3 class="title-home-terpusat-portal-list"><a title='<?php echo $data->article_name ?>' href="<?php echo article_url($data); ?>"><?php echo $data->article_name ?></a></h3>
				<?php endif; ?>
			<?php $i++; endforeach; ?>
            </div>

            <div class="col-md-4 portfolio-item">
            <?php $i=0; foreach($sp_article as $data): ?>
				<?php if($i==0): ?>
				<div class="abs-caption">
					<span class="abs-label" style="background:#39f;">Olahraga</span>
					<a title='<?php echo $data->article_name ?>' href="<?php echo article_url($data); ?>">
						<img alt="<?php echo $data->article_name ?>" class="img-responsive" src="<?php echo base_url(); ?>assets/portal/banner/800x400.gif">
						<span id="abs-title"><h3 class="title-home-terpusat-portal"><?php echo $data->article_name ?></h3><span>
					</a>
				</div>
				<?php else: ?>
				<h3 class="title-home-terpusat-portal-list"><a title='<?php echo $data->article_name ?>' href="<?php echo article_url($data); ?>"><?php echo $data->article_name ?></a></h3>
				<?php endif; ?>
			<?php $i++; endforeach; ?>
            </div>
        </div>

    </div>
	<!-- /.container -->