<div class="content-wrap">

	<div class="container clearfix">

		<div class="accordion accordion-lg divcenter nobottommargin clearfix" style="max-width: 550px;">

			<div class="acctitle">
				<i class="acc-closed icon-user4"></i>
				<i class="acc-open icon-user"></i>Belum terdaftar? Buat akun baru</div>
			<div class="acc_content clearfix">
				<form id="register-form" name="register-form" class="nobottommargin" action="<?=base_url('register/save')?>" method="post" enctype="multipart/form-data">
					<div class="col_full">
						<label for="nik">NIK:</label>
						<input type="text" id="nik" name="nik" value="" class="form-control" placeholder="Nomor NIK"/>
						
					</div>
					<div class="col_full">
						<label for="nama">Nama:</label>
						<input type="text" id="nama" name="nama" value="" class="form-control" placeholder="Nama sesuai KTP"/>
						
					</div>
					<div class="col_full">
						<label for="alamat">Alamat:</label>
						<textarea id="alamat" name="alamat" name="" id="" cols="30" rows="10" class="form-control" placeholder="Alamat tinggal saat ini"></textarea>
					</div>

					<div class="col_full">
						<label for="email">Tanggal Lahir:</label>
						<input type="text" id="email" name="email" value="" class="form-control" placeholder="dd-mm-yyyy" />
					</div>

					<div class="col_full">
						<label for="phone">Telp:</label>
						<input type="text" id="phone" name="phone" value="" class="form-control" placeholder="08123456788" />
					</div>

					<div class="col_full">
						<label for="phone">Foto (selfie bersama ktp):</label>
						<input type="file" id="phone" name="phone" value="" class="form-control" />
					</div>

					<div class="col_full">
						<label for="email">Email:</label>
						<input type="email" id="email" name="email" value="" class="form-control" placeholder="user@email.com" />
					</div>					

					<div class="col_full">
						<label for="register-form-password">Password:</label>
						<input type="password" id="register-form-password" name="register-form-password" value="" class="form-control" />
					</div>
					
					<div class="col_full nobottommargin">
						<button class="button button-3d button-black nomargin" id="register-form-submit" name="register-form-submit" value="register">Daftar Sekarang</button>
					</div>
				</form>
			</div>

		</div>
	</div>
</div>
