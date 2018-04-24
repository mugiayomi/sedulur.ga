<!-- START CONTAINER FLUID -->
<div class=" container-fluid   container-fixed-lg">
	<div class="row">
		<div class="col-xl-12 col-lg-12">
			<!-- START card -->
			<div class="card card-transparent">
				<div class="card-block">
					<form method="POST" action="<?=base_url('admin/info/update')?>" role="form" autocomplete="off"  enctype="multipart/form-data">
						<input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
						<input type="hidden" name="id" value="<?=$info->id?>" />
						<div class="row">
							<div class="col-md-12">
								<div class="form-group form-group-default input-group">
									<div class="form-input-group">
										<label>Nama Info</label>
										<input type="text" class="form-control" name="judul" placeholder="Nama Info" value="<?=$info->judul?>" required>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group form-group-default input-group">
									<div class="form-input-group">
										<label>Gambar </label>
										<input type="file" class="form-control" name="gambar" placeholder="Gambar">
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<h5>Deskripsi Info</h5>
									<div class="no-scroll card-toolbar">
										<div class="summernote-wrapper">
											<div id="summernote"><?=$info->deskripsi?></div>
										</div>
									</div>
								</div>
								<textarea class="hide" name="deskripsi" id="deskripsi" cols="30" rows="10"><?=$info->deskripsi?></textarea>
							</div>
						</div>

						<div class="clearfix"></div>
						<button class="btn btn-primary" type="submit">Simpan Data Info</button>
						<button type="button" class="btn btn-default" onclick="window.history.go(-1); return false;">Batal</button>
					</form>
				</div>
			</div>
			<!-- END card -->
		</div>
	</div>
</div>
<!-- END CONTAINER FLUID -->
