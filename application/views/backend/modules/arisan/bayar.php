<!-- START CONTAINER FLUID -->
<div class=" container-fluid   container-fixed-lg">
	<div class="row">
		<div class="col-xl-12 col-lg-12">
			<!-- START card -->
			<div class="card card-transparent">
				<div class="card-block">
					<form method="POST" action="<?=base_url('admin/arisan/storeBayar')?>" role="form" autocomplete="off">
						<input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
						<input type="hidden" name="id_arisan" value="<?=$arisan->id?>" />
						<div class="m-0 row">
							<div class="col-lg-12 sm-no-padding">
								<div class="card card-transparent">
									<div class="card-block no-padding">
										<div id="card-advance" class="card card-default">
											<div class="card-header  ">
												<div class="card-title">Arisan
												</div>
											</div>
											<div class="card-block">
												<h3>
													<?=$arisan->arisan?>
												</h3>
												<?=$arisan->deskripsi?>
													<br>
													<div>
														<div class="inline m-l-10">
															<p class=" hint-text m-t-5">IDR
																<?=number_format($arisan->iuran)?>
																	<br>
																	<?=$arisan->periode?>
															</p>
														</div>
													</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group form-group-default input-group">
									<div class="form-input-group">
										<label>Periode Arisan</label>
										<input type="text" class="form-control" name="periode" placeholder="" required>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Tanggal Bayar</label>
									<div class="input-prepend input-group">
										<span class="add-on input-group-addon">
											<i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
										</span>
										<input type="text" style="width: 100%" name="tanggal_bayar" id="datepicker" class="form-control text-black" value="<?=date('Y-m-d')?>" placeholder="Waktu Pelaksanaan"
										readonly />
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<label>Upload Bukti Bayar</label>
									<input type="file" class="form-control"/>
							</div>
						</div>

						<div class="clearfix"></div><br><br>
						<button class="btn btn-primary" type="submit">Simpan</button>
						<button type="button" class="btn btn-default" onclick="window.history.go(-1); return false;">Batal</button>
					</form>
				</div>
			</div>
			<!-- END card -->
		</div>
	</div>
</div>
<!-- END CONTAINER FLUID -->
