<div class="container">
		<div class='header'><h1><?php echo $title ?></h1></div>
			<p>Selamat datang di Terpusat Media Management System. Silahkan Login dengan pilihan yang ada.</p>
			<form id='tm-login' class='row show-grid' action='' method='POST'>
				<input value="<?php echo md5('TMloginAdministrator'); ?>" type='hidden' name='auth' type='hidden'>
				<div class='col-md-6'>
					<div class='form-group'>
						<label>E-mail</label>
						<input class="form-control" type='text' name='email' type='email' placeholder='Masukkan e-mail anda.'>
					</div>
				</div>
				<div class='col-md-6'>
					<div class='form-group'>
						<label>Password</label>
						<input class="form-control" type='password' name='password' type='password' placeholder='Masukkan password anda.'>
					</div>
				</div>
				<div class='col-md-6'>
					<button class='btn btn-primary btn-large' type='submit'>Masuk</button>&nbsp;<a href="<?php echo base_url(); ?>administrator/staff/signup">Daftar</a>
				</div>
				<div style="padding-top: 10px;text-align: right;" class='col-md-6'>
					<a href="#">Lupa password ?</a>
				</div>
			</form>
	<div class='footer'>Copyright Terpusat Media <strong>&copy;</strong> <?=date('Y')?></div>
</div>