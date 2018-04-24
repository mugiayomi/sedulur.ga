<!-- START CONTAINER FLUID -->
<div class=" container-fluid   container-fixed-lg">
	<div class="row">
		<div class="col-xl-12 col-lg-12">
			<!-- START card -->
			<div class="card card-transparent">
				<div class="card-block">
					<form method="POST" action="<?=base_url('admin/arisan/storePeserta')?>" role="form" autocomplete="off">
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
												<h3><?=$arisan->arisan?></h3>
												<?=$arisan->deskripsi?>
												<br>
												<div>
													<div class="inline m-l-10">
														<p class=" hint-text m-t-5">IDR <?=number_format($arisan->iuran)?>
															<br><?=$arisan->periode?></p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<h3>Apakah anda yakin akan mendaftar arisan ini?</h3>

						<div class="clearfix"></div>
						<button class="btn btn-primary" type="submit">Ya, Saya Ikut</button>
						<button type="button" class="btn btn-default" onclick="window.history.go(-1); return false;">Tidak Jadi</button>
					</form>
				</div>
			</div>
			<!-- END card -->
		</div>
	</div>
</div>
<!-- END CONTAINER FLUID -->
