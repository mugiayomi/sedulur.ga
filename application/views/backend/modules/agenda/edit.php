<!-- START CONTAINER FLUID -->
<div class=" container-fluid   container-fixed-lg">
	<div class="row">
		<div class="col-xl-12 col-lg-12">
			<!-- START card -->
			<div class="card card-transparent">
				<div class="card-block">
					<form method="POST" action="<?=base_url('admin/agenda/update')?>" role="form" autocomplete="off">
						<input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
						<input type="hidden" name="id" value="<?=$agenda->id?>" />
						<div class="row">
							<div class="col-md-12">
								<div class="form-group form-group-default input-group">
									<div class="form-input-group">
										<label>Nama Agenda</label>
										<input type="text" class="form-control" name="judul" placeholder="Nama Agenda" value="<?=$agenda->judul?>" required>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group form-group-default input-group">
									<div class="form-input-group">
										<label>Lokasi </label>
										<input type="text" class="form-control" name="lokasi" placeholder="Lokasi Agenda" value="<?=$agenda->lokasi?>" required>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Waktu Agenda</label>
									<div class="input-prepend input-group">
									<span class="add-on input-group-addon"><i
													class="glyphicon glyphicon-calendar fa fa-calendar"></i></span>
									<input type="text" style="width: 100%" name="waktu" id="daterangepicker" class="form-control text-black" value="<?=$agenda->tanggal_mulai . ' - ' . $agenda->tanggal_akhir?>" placeholder="Waktu Pelaksanaan" readonly />
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<h5>Deskripsi Agenda</h5>
									<div class="no-scroll card-toolbar">
										<div class="summernote-wrapper">
											<div id="summernote"><?=$agenda->deskripsi?></div>
										</div>
									</div>
								</div>
								<textarea class="hide" name="deskripsi" id="deskripsi" cols="30" rows="10"><?=$agenda->deskripsi?></textarea>
							</div>
						</div>

						<div class="clearfix"></div>
						<button class="btn btn-primary" type="submit">Simpan Data Agenda</button>
						<button type="button" class="btn btn-default" onclick="window.history.go(-1); return false;">Batal</button>
					</form>
				</div>
			</div>
			<!-- END card -->
		</div>
	</div>
</div>
<!-- END CONTAINER FLUID -->
