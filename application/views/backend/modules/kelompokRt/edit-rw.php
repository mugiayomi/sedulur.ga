<!-- START CONTAINER FLUID -->
<div class=" container-fluid   container-fixed-lg">
	<div class="row">
		<div class="col-xl-12 col-lg-12">
			<!-- START card -->
			<div class="card card-transparent">
				<div class="card-block">
					<form method="POST" action="<?=base_url('admin/kelompok-rt/updateRw')?>" role="form" autocomplete="off">
						<input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
						<input type="hidden" name="id" value="<?=$rw->id?>" />
						<div class="row">
							<div class="col-md-12">
								<div class="form-group form-group-default input-group">
									<div class="form-input-group">
										<label>Nama RW</label>
										<input type="text" class="form-control" name="nama_rw" placeholder="Contoh: RW 002, RW 003" value="<?=$rw->nama_rw?>" required>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
							<div class="form-group form-group-default form-group-default-select2">
								<label class="">Ketua RW</label>
								<select name="ketua_rw" class="full-width" data-placeholder="Pilih Warga" data-init-plugin="select2">								
									<option value="">Pilih Warga</option>
									<?php
										foreach ($wargas as $warga) {
											?>
											<option value="<?=$warga->nik?>"><?=$warga->nik?> - <?=$warga->nama?></option>
											<?php
										}
									?>
								</select>
							</div>
							</div>
						</div>
						<div class="clearfix"></div>
						<button class="btn btn-primary" type="submit">Simpan Data RW</button>
						<button type="button" class="btn btn-default" onclick="window.history.go(-1); return false;">Batal</button>
					</form>
				</div>
			</div>
			<!-- END card -->
		</div>
	</div>
</div>
<!-- END CONTAINER FLUID -->
