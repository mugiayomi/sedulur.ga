<div class="content-wrap">

	<div class="container clearfix">

		<div class="accordion accordion-lg divcenter nobottommargin clearfix" style="max-width: 550px;">

			<div class="acctitle">
				<i class="acc-closed icon-user4"></i>
				<i class="acc-open icon-user"></i>Belum terdaftar? Buat akun baru</div>
			<div class="acc_content clearfix">
				<form id="register-form" name="register-form" class="nobottommargin" action="<?=base_url('register/store')?>" method="post" enctype="multipart/form-data">
					<input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
					<div class="col_full">
						<label for="nik">NIK:</label>
						<input type="text" id="nik" name="nik" value="" class="form-control" placeholder="Nomor NIK" required/>
						
					</div>
					<div class="col_full">
						<label for="nama">Nama:</label>
						<input type="text" id="nama" name="nama" value="" class="form-control" placeholder="Nama sesuai KTP" required/>
					</div>

					<div class="col_full">
						<label for="alamat">Alamat:</label>
						<textarea id="alamat" name="alamat" name="" id="" rows="4" class="form-control" placeholder="Alamat tinggal saat ini" required></textarea>
					</div>

					<div class="col_full">
						<div class="col_half">
							<label for="rw">RW:</label>
							<select id="rw" class="selectpicker form-control"  data-size="10" data-placeholder="-" style="width:100%; line-height: 30px;" required>
								<option value="">Please select</option>
								<?php
								foreach ($rws as $rw) {
									echo "<option value='$rw->id'>$rw->nama_rw</option>";
								}
								?>
							</select>
							
						</div>
						<div class="col_half col_last">
							<label for="rt">RT:</label>
							<select name="id_rt" id="rt" class="selectpicker form-control"  data-size="10" data-placeholder="-" style="width:100%; line-height: 30px;" required>
								<option value="">Please select</option>
							</select>
						</div>
					</div>
					

					<div class="col_full">
						<label for="photo">Foto (selfie bersama ktp):</label>
						<input type="file" id="photo" name="photo" value="" class="form-control" required/>
					</div>

					<div class="col_full">
						<label for="email">Email:</label>
						<input type="email" id="email" name="email" value="" class="form-control" placeholder="user@email.com" required/>
					</div>					

					<div class="col_full">
						<label for="password">Password:</label>
						<input type="password" id="password" name="password" value="" class="form-control" required/>
					</div>
					
					<div class="col_full nobottommargin">
						<button class="button button-3d button-black nomargin" >Daftar Sekarang</button>
					</div>
				</form>
			</div>

		</div>
	</div>
</div>
