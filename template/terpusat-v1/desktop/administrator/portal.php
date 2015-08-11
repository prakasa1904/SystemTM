<article class='col-xs-12'>
	<div class='row'>
		<div class='col-xs-3'>
<?php echo admin_sidebar(); ?>
		</div>
		<div class='col-xs-9'>
			<div class='list-group'>
				<div class='list-group-item'>
					<div class="row">
						<div class='col-xs-12'>
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
										<td><?php echo $content->portal_name ?></td>
										<td><a href="<?php echo base_url()?>administrator/portal/ubah/<?php echo $content->portal_id ?>"><i class="glyphicon glyphicon-edit"></i> Edit</a> | <a href="<?php echo base_url()?>administrator/portal/hapus/<?php echo $content->portal_id ?>"><i class="glyphicon glyphicon-remove"></i> Hapus</a> | <a href="<?php echo base_url()?>administrator/portal/kunci/<?php echo $content->portal_id ?>"><i class="glyphicon <?php echo $ico = $content->portal_lock == false ?  'glyphicon-eye-open' : 'glyphicon-eye-close' ?>"></i> Kunci</a></td>
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