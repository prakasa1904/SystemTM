<article class='col-xs-12'>
	<div class='row'>
		<div class='col-xs-3'>
			<?php echo admin_sidebar('home'); ?>
		</div>
		<div class='col-xs-9'>
			<div class='list-group'>
				<div class='list-group-item'>
					<div class="row">
						<div class='col-xs-12'>
							<div class="form-group">
								<a href="<?=admin_url()?>artikel/kanal/<?=$this->uri->segment(3);?>/tambah" title="Tambah Artikel" class="btn btn-primary">Tambah Artikel</a>
							</div>
							<table class="table table-responsive table-bordered">
								<thead>
									<td width="5%">No</td>
									<td width="70%">Nama</td>
									<td width="25%">Pilihan</td>
								</thead>
								<tbody>
								<?php $no=1; foreach($content as $content): ?>
									<tr>
										<td><?php echo $no++ ?></td>
										<td><?php echo $content->article_name ?></td>
										<td><a href="<?php echo base_url()?>administrator/artikel/lihat/<?php echo $content->article_id ?>"><i class="glyphicon glyphicon-book"></i> Lihat</a> | <a href="<?php echo base_url()?>administrator/artikel/ubah/<?php echo $content->article_id ?>"><i class="glyphicon glyphicon-edit"></i> Edit</a> | <a href="<?php echo base_url()?>administrator/artikel/hapus/<?php echo $content->article_id ?>"><i class="glyphicon glyphicon-remove"></i> Hapus</a></td>
									</tr>
								<?php endforeach; ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</article>