<div class="container">
		<div class='header'><h1><?php echo $title ?></h1></div>
			<p>Selamat datang di Terpusat Media Management System. Silahkan Login dengan pilihan yang ada.</p>
			<form id='tm-login' class='row show-grid' action='' method='POST'>
				<div class='col-md-6'>
					<div class='form-group'>
						<label>Nama Lengkap</label>
						<input class="form-control" type='text' name='fullname' type='text' placeholder='Masukkan nama lengkap anda.'>
					</div>
				</div>
				<div class='col-md-6'>
					<div class='form-group'>
						<label>Jenis Kelamin</label>
						<input class="form-control" type='text' name='email' type='email' placeholder='Masukkan e-mail anda.'>
					</div>
				</div>
				<div class='col-md-6'>
					<div class='form-group'>
						<label>E-mail</label>
						<input class="form-control" type='text' name='email' type='email' placeholder='Masukkan e-mail anda.'>
					</div>
				</div>
				<div class='col-md-6'>
					<div class='form-group'>
						<label>Agama</label>
						<input class="form-control" type='text' name='religi' type='text' placeholder='Masukkan password anda.'>
					</div>
				</div>
				<div class='col-md-6'>
					<div class='form-group'>
						<label>Telp.</label>
						<input class="form-control" type='text' name='telp' type='text' placeholder='Masukkan no telp. anda.'>
					</div>
				</div>
				<div class='col-md-6'>
					<div class='form-group'>
						<label>Password</label>
						<input class="form-control" type='password' name='password' type='password' placeholder='Masukkan password anda.'>
					</div>
				</div>
				<div class='col-md-6'>
					<div class='form-group'>
						<label>Phone</label>
						<input class="form-control" type='text' name='phone' type='text' placeholder='Masukkan no ponsel anda.'>
					</div>
				</div>
				<div class='col-md-6'>
					<div class='form-group'>
						<label>Password</label>
						<input class="form-control" type='password' name='password' type='password' placeholder='Masukkan password anda.'>
					</div>
				</div>
				<div class='col-md-6'>
					<button class='btn btn-primary btn-large' type='submit'>Daftar</button>
				</div>
				<div style="padding-top: 10px;text-align: right;" class='col-md-6'>
					<a href="<?php echo base_url(); ?>administrator/staff/login">Login</a>
				</div>
			</form>
	<div class='footer'>Copyright Terpusat Media <strong>&copy;</strong> <?=date('Y')?></div>
</div>