<!-- START CONTAINER FLUID -->
<div class=" container-fluid   container-fixed-lg">
	<div class="row">
		<div class="col-xl-12 col-lg-12">
			<!-- START card -->
			<div class="card card-transparent">
				<div class="card-block">
					<form method="POST" action="<?=base_url('admin/warga/update')?>" role="form" autocomplete="off">
						<input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
						<input type="hidden" name="old_nik"  value="<?=$warga->nik?>" />
						<div class="row">
							<div class="col-md-12">
								<div class="form-group form-group-default input-group">
									<div class="form-input-group">
										<label>NIK</label>
										<input type="text" class="form-control" name="nik" placeholder="Nomor NIK" value="<?=$warga->nik?>" required>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group form-group-default input-group">
									<div class="form-input-group">
										<label>Nama</label>
										<input type="text" class="form-control" name="nama" placeholder="Nama Lengkap"  value="<?=$warga->nama?>" required>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group form-group-default input-group">
									<div class="form-input-group">
										<label>Alamat</label>
										<textarea name="alamat" id="" rows='4' class="form-control"><?=$warga->alamat?></textarea>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
							<div class="form-group form-group-default form-group-default-select2">
								<label class="">Warga RT</label>
								<select name="id_rt" class="full-width" data-placeholder="Pilih RT" data-init-plugin="select2">								
									<option value="">Pilih RT</option>
									<?php
										foreach ($rts as $rt) {
											?>
											<option value="<?=$rt->id?>"><?=$rt->nama_rw?> - <?=$rt->nama_rt?></option>
											<?php
										}
									?>
								</select>
							</div>
							</div>
						</div>
						<div class="clearfix"></div>
						<button class="btn btn-primary" type="submit">Simpan Data Warga</button>
						<button type="button" class="btn btn-default" onclick="window.history.go(-1); return false;">Batal</button>
					</form>
				</div>
			</div>
			<!-- END card -->
		</div>
	</div>
</div>
<!-- END CONTAINER FLUID -->
