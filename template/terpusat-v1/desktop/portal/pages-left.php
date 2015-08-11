	<div id="terpusat-content-detail" class="container">
        <div class="row">
            <div id="page-content" class="col-md-8">
				<div class="terpusat-breadcumb"><a title="Terpusat Media" href="http://www.terpusat.com/">Terpusat Media</a> &raquo; <?php echo anchor("", $this->helper('article')->article_portal($data->portal_id), $this->helper('article')->article_portal($data->portal_id)); ?> <!--&raquo; <?php echo $this->helper('article')->article_category($data->category_id); ?>-->&raquo; <i><?php echo $data->article_name ?></i></div>
				<div id="terpusat-header">
					<h1 id="terpusat-title"><?php echo $data->article_name ?></h1>
				</div>
				<div id="terpusat-meta" class="terpusat-meta col-md-6">Dibuat Tanggal: <?php echo $this->helper('article')->article_date_create($data->article_created); ?> | Penulis: <?php echo $this->helper('article')->article_author($data->article_author); ?>
				</div>
				<!-- Go to www.addthis.com/dashboard to customize your tools -->
					<div class="addthis_sharing_toolbox col-md-6"></div>
				<div id="terpusat-content">
					<div style="padding:10px 0px;" class="col-md-12">
					<?php if($data->article_img != ""): ?>
						<div style="margin-bottom:0px;" class="thumbnail">
							<img alt="<?php echo $data->article_name ?>" src="<?php galleries_url(); ?><?php echo $data->article_img ?>" alt="">
						</div>
						<p id="terpusat-meta-img" class="text-right terpusat-meta">Terpusat Image</p>
					<?php endif; ?>
					</div>
					<div style="padding:0px 10px 5px 0px;" class="col-md-3">
						<div>
							<div id="header-page-sidebar" class="border-line">
								<h5 style="margin-top: 0px;" class="header-sidebar-page-title-invers">Artikel Terkait</h5>
							</div>
							<div id="content-page-sidebar">
								<ul class="list-unstyled">
									<li class="list-sidebar-related"><a href="#" >Tidak ada artikel terkait</a></li>
									<!--<li class="list-sidebar-related"><a a href="#">Daniel: 'Jika ini yang Terbaik, Maka Harus Ikhlas'</a></li>
									<li class="list-sidebar-related"><a a href="#">Daniel: 'Jika ini yang Terbaik, Maka Harus Ikhlas'</a></li>
									<li class="list-sidebar-related"><a a href="#">Indonesia Belajar Dari Kesalahan</a></li>-->
								</ul>
							</div>
						</div>
					</div>
					<div id="terpusat-content-detail" class="col-md-9" style="padding: 0px 0px 5px 10px;">
						<?php echo $data->article_content ?>
					</div>
				</div>
				<div id="terpusat-comment">
					<textarea style="resize:none;width:100%;"></textarea>
				</div>
            
			<!--<h5 style="text-align:left;" class="header-sidebar-page-title-invers">Artikel Direkomendasikan</h5>
				<div class="col-md-4">
					<div class="abs-caption">
						<span class="abs-label" style="background:#e94f1d;">Tekno</span>
						<a href="#project-link">
							<img class="img-responsive" src="<?php galleries_url(); ?>800x400.gif">
						</a>
					</div>
					<p><a href="#"><strong>Gravida pellentesque urna varius vitae</strong></a></p>
				</div>
				<div class="col-md-4">
					<div class="abs-caption">
						<span class="abs-label" style="background:#e94f1d;">Tekno</span>
						<a href="#project-link">
							<img class="img-responsive" src="<?php galleries_url(); ?>800x400.gif">
						</a>
					</div>
					<p><a href="#"><strong>Gravida pellentesque urna varius vitae</strong></a></p>
				</div>
				<div class="col-md-4">
					<div class="abs-caption">
						<span class="abs-label" style="background:#e94f1d;">Tekno</span>
						<a href="#project-link">
							<img class="img-responsive" src="<?php galleries_url(); ?>800x400.gif">
						</a>
					</div>
					<p><a href="#"><strong>Gravida pellentesque urna varius vitae</strong></a></p>
				</div>-->
			</div>
			<div id="page-sidebar" class="col-md-4">
				<!--<div>
					<div class="thumbnail">
						<img src="<?php galleries_url(); ?>banner1.jpg" alt="">
					</div>
				</div>
				<div>
					<div class="thumbnail">
						<img src="<?php galleries_url(); ?>banner.jpg" alt="">
					</div>
				</div>
				<div>
					<div class="thumbnail">
						<img src="<?php galleries_url(); ?>banners.gif" alt="">
					</div>
				</div>-->
				<div>
					<div id="header-page-sidebar" class="navbar navbar-inverse border-line">
						<h5 class="header-sidebar-page-title">Artikel Terpopuler</h5>
					</div>
					<div id="content-page-sidebar">
						<ul class="list-unstyled">
							<li class="sidebar-page-title"><a href="#"><strong>Belum ada artikel terpopuler Terpusat Media</strong></a></li>
							<!--<li class="sidebar-page-title"><a href="#"><strong>Akan Berlaku Seperti Ini, Mencari A Bertemu A</strong></a></li>
							<li class="sidebar-page-title"><a href="#"><strong>Wanita Bukan Objek Dunia</strong></a></li>
							<li class="sidebar-page-title"><a href="#"><strong>Tidak Perlu Siapa Yang Tercantik, Karena Semuanya Cantik</strong></a></li>
							<li class="sidebar-page-title"><a href="#"><strong>Tak Mengapa Dibilang Munafik, Yang Penting Berusaha</strong></a></li>-->
						</ul>
					</div>
				</div>
			</div>
        </div>

    </div>
	<!-- /.container -->
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-53d7723e7fded9b1"></script>