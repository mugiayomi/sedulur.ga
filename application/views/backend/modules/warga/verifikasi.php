<!-- START CONTAINER FLUID -->
<div class=" container-fluid   container-fixed-lg">
	<div class="row">
		<div class="col-sm-12 col-lg-4">
			<div class="full-height">
				<div class="card-block text-center">
					<img class="image-responsive-height demo-mw-500" src="<?=base_url().$warga->url_foto?>" alt="">
				</div>
			</div>
		</div>
		<div class="col-sm-12 col-lg-8">
			<!-- START card -->
			<div class="card card-transparent">
				<div class="card-block">
					<form method="POST" action="<?=base_url('admin/warga/updateVerifikasi')?>" role="form" autocomplete="off">
						<input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
						<input type="hidden" name="nik"  value="<?=$warga->nik?>" />
						<div class="row">
							<div class="col-md-12">
								<div class="form-group form-group-default input-group">
									<div class="form-input-group">
										<label>NIK</label>
										<input type="text" class="form-control text-black" placeholder="Nomor NIK" value="<?=$warga->nik?>" disabled>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group form-group-default input-group">
									<div class="form-input-group">
										<label>Nama</label>
										<input type="text" class="form-control text-black" name="nama" placeholder="Nama Lengkap"  value="<?=$warga->nama?>" disabled>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group form-group-default input-group">
									<div class="form-input-group">
										<label>Alamat</label>
										<textarea name="alamat" id="" rows='4' class="form-control text-black" disabled><?=$warga->alamat?></textarea>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group form-group-default input-group">
									<div class="form-input-group">
										<label>Email</label>
										<textarea name="username" id="" rows='4' class="form-control text-black" readonly><?=$warga->email?></textarea>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="radio radio-success">
									<input type="radio" <?php echo $user->is_active == 1 ? 'checked="checked"' : '' ?> value="1" name="is_active" id="yes">
									<label for="yes">Active</label>
									<input type="radio" <?= $user->is_active == 0 ? 'checked="checked"' : ''?> value="0" name="is_active" id="no">
									<label for="no">Inactive</label>
								</div>
							</div>
						</div>
						
						<div class="clearfix"></div>
						<button class="btn btn-primary" type="submit">Update Status</button>
						<button type="button" class="btn btn-default" onclick="window.history.go(-1); return false;">Batal</button>
					</form>
				</div>
			</div>
			<!-- END card -->
		</div>
	</div>
</div>
<!-- END CONTAINER FLUID -->
