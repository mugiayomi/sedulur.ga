<!-- START CONTAINER FLUID -->
<div class=" container-fluid   container-fixed-lg">
	<div class="row">
		<div class="col-xl-12 col-lg-12">
			<?php
			if (!empty($this->session->message)) {
			?>
				<div class="alert alert-<?=$this->session->status;?>" role="alert">
					<button class="close" data-dismiss="alert"></button>
					<strong>
						<?=$this->session->title;?>
					</strong>
					<?=$this->session->message;?>
				</div>
				<?php
			}
			?>
				<!-- START card -->
				<div class="card card-transparent">
					<div class="card-block">
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
														<div class="pull-right">
															<a href="<?=base_url('admin/arisan/bayar/'.$arisan->id)?>" class="btn btn-primary" type="submit">Bayar Arisan</a>
														</div>
													</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<table class="table table-hover demo-table-search table-responsive-block" id="tableWithSearch">
							<thead>
								<tr>
									<th>Nama</th>
									<th>Alamat</th>
									<th>Periode</th>
									<th>Tanggal bayar</th>
								</tr>
							</thead>
							<tbody>
								<?php
							foreach ($pesertas as $peserta) {
								?>
									<tr>
										<td>
											<?=$peserta->nama?>
										</td>
										<td>
											<?=$peserta->alamat?>
										</td>
										<td>
										<?=$peserta->periode?>
										</td>
										<td>
										<?=$peserta->tanggal_bayar?>
										</td>
									</tr>
									<?php
							}
							?>
							</tbody>
						</table>
					</div>

				</div>
				<!-- END card -->
		</div>
	</div>
</div>
<!-- END CONTAINER FLUID -->
