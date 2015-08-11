	<div id="terpusat-content-detail" class="container">
        <div class="row">
            <div id="page-content" class="col-md-8">
				<div class="terpusat-breadcumb"><?php echo anchor(main_url(), 'Terpusat');?> &raquo; <?php echo anchor(base_url(), article_portal($article));?> &raquo; <?php echo $article->article_name ?></div>
				<div id="terpusat-header">
					<h1 id="terpusat-title"><?php echo $article->article_name ?></h1>
				</div>
				<div id="terpusat-meta" class="terpusat-meta">Dibuat Tanggal: <?php echo article_create($article->article_created); ?> | Penulis: <?php echo $article->author; ?></div>
				<div id="terpusat-content">
					<div style="padding:10px 0px;" class="col-md-12">
					<?php if(article_img($article)): ?>
						<div style="margin-bottom:0px;" class="thumbnail">
							<img src="<?php echo article_img($article) ?>" alt="<?php echo $article->article_name ?>">
						</div>
						<!--<p id="terpusat-meta-img" class="text-right terpusat-meta">Terpusat Image / Fadli Iskandar</p>-->
					<?php endif; ?>
					</div>
					<div style="padding:0px 10px 5px 0px;" class="col-md-3">
						<div>
							<div id="header-page-sidebar" class="border-line">
								<h5 style="margin-top: 0px;" class="header-sidebar-page-title-invers">Artikel Terkait</h5>
							</div>
							<!--<div id="content-page-sidebar">
								<ul class="list-unstyled">
									<li class="list-sidebar-related"><a href="#" >Nedya Amrih Prakasa dan Sekutunya Menyerang ?</a></li>
									<li class="list-sidebar-related"><a a href="#">Daniel: 'Jika ini yang Terbaik, Maka Harus Ikhlas'</a></li>
									<li class="list-sidebar-related"><a a href="#">Daniel: 'Jika ini yang Terbaik, Maka Harus Ikhlas'</a></li>
									<li class="list-sidebar-related"><a a href="#">Indonesia Belajar Dari Kesalahan</a></li>
								</ul>
							</div>-->
						</div>
					</div>
					<div id="terpusat-content-detail" class="col-md-9" style="padding: 0px 0px 5px 10px;">
						<?php echo $article->article_content ?>
					</div>
				</div>
				<!--<div id="terpusat-comment">
					<textarea style="resize:none;width:100%;"></textarea>
				</div>-->
            
			<!--<h5 style="text-align:left;" class="header-sidebar-page-title-invers">Artikel Direkomendasikan</h5>
				<div class="col-md-4">
					<div class="abs-caption">
						<span class="abs-label" style="background:#e94f1d;">Tekno</span>
						<a href="#project-link">
							<img class="img-responsive" src="<?php base_url(); ?>800x400.gif">
						</a>
					</div>
					<p><a href="#"><strong>Gravida pellentesque urna varius vitae</strong></a></p>
				</div>
				<div class="col-md-4">
					<div class="abs-caption">
						<span class="abs-label" style="background:#e94f1d;">Tekno</span>
						<a href="#project-link">
							<img class="img-responsive" src="<?php base_url(); ?>800x400.gif">
						</a>
					</div>
					<p><a href="#"><strong>Gravida pellentesque urna varius vitae</strong></a></p>
				</div>
				<div class="col-md-4">
					<div class="abs-caption">
						<span class="abs-label" style="background:#e94f1d;">Tekno</span>
						<a href="#project-link">
							<img class="img-responsive" src="<?php base_url(); ?>800x400.gif">
						</a>
					</div>
					<p><a href="#"><strong>Gravida pellentesque urna varius vitae</strong></a></p>
				</div>-->
			</div>
			<div id="page-sidebar" class="col-md-4">
				<!--<div>
					<div class="thumbnail">
						<img src="<?php base_url(); ?>banner1.jpg" alt="">
					</div>
				</div>
				<div>
					<div class="thumbnail">
						<img src="<?php base_url(); ?>banner.jpg" alt="">
					</div>
				</div>
				<div>
					<div class="thumbnail">
						<img src="<?php base_url(); ?>banners.gif" alt="">
					</div>
				</div>-->
				<div>
					<div id="header-page-sidebar" class="navbar navbar-inverse border-line">
						<h5 class="header-sidebar-page-title">Artikel Terpopuler</h5>
					</div>
					<!--<div id="content-page-sidebar">
						<ul class="list-unstyled">
							<li class="sidebar-page-title"><a href="#"><strong>Cerita yang Berbeda Disampaikan Melalui Hati</strong></a></li>
							<li class="sidebar-page-title"><a href="#"><strong>Akan Berlaku Seperti Ini, Mencari A Bertemu A</strong></a></li>
							<li class="sidebar-page-title"><a href="#"><strong>Wanita Bukan Objek Dunia</strong></a></li>
							<li class="sidebar-page-title"><a href="#"><strong>Tidak Perlu Siapa Yang Tercantik, Karena Semuanya Cantik</strong></a></li>
							<li class="sidebar-page-title"><a href="#"><strong>Tak Mengapa Dibilang Munafik, Yang Penting Berusaha</strong></a></li>
						</ul>
					</div>-->
				</div>
			</div>
        </div>

    </div>
	<!-- /.container -->