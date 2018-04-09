<!-- START CONTAINER FLUID -->
<div class=" container-fluid   container-fixed-lg">
	<div class="row">
		<div class="col-xl-12 col-lg-12">
			<!-- START card -->
			<div class="card card-transparent">
				<div class="card-block">
					<form method="POST" action="<?=base_url('admin/arisan/update')?>" role="form" autocomplete="off">
						<input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
						<input type="hidden" name="id" value="<?=$arisan->id?>" />
						<div class="row">
							<div class="col-md-12">
								<div class="form-group form-group-default input-group">
									<div class="form-input-group">
										<label>Arisan</label>
										<input type="text" class="form-control" name="arisan" placeholder="Nama Arisan" value="<?=$arisan->arisan?>" required>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group form-group-default form-group-default-select2">
										<label>Periode Arisan</label>
										<select name="periode" class="full-width" data-placeholder="Pilih Periode Arisan" data-init-plugin="select2">								
											<option value="">Pilih Periode Arisan</option>
											<option value="Bulanan">Bulanan</option>
											<option value="Mingguan">Mingguan</option>
										</select>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group form-group-default input-group">
									<div class="form-input-group">
										<label>Jumlah Peserta </label>
										<input type="text" class="form-control" name="jumlah_peserta" placeholder="Jumlah Peserta Arisan" value="<?=$arisan->jumlah_peserta?>" required>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group form-group-default input-group">
									<div class="form-input-group">
										<label>Iuran </label>
										<input type="text" class="form-control" name="iuran" placeholder="Jumlah Iuran Per Periode" value="<?=$arisan->iuran?>" required>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<h5>Deskripsi Arisan</h5>
									<div class="no-scroll card-toolbar">
										<div class="summernote-wrapper">
											<div id="summernote"><?=$arisan->deskripsi?></div>
										</div>
									</div>
								</div>
								<textarea class="hide" name="deskripsi" id="deskripsi" cols="30" rows="10"><?=$arisan->deskripsi?></textarea>
							</div>
						</div>

						<div class="clearfix"></div>
						<button class="btn btn-primary" type="submit">Simpan Data Arisan</button>
						<button type="button" class="btn btn-default" onclick="window.history.go(-1); return false;">Batal</button>
					</form>
				</div>
			</div>
			<!-- END card -->
		</div>
	</div>
</div>
<!-- END CONTAINER FLUID -->
