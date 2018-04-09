<!-- START CONTAINER FLUID -->
<div class=" container-fluid   container-fixed-lg">
	<div class="row">
		<div class="col-xl-12 col-lg-12">
			<?php
			if (!empty($this->session->message)) {
			?>
				<div class="alert alert-<?=$this->session->status;?>" role="alert">
                      <button class="close" data-dismiss="alert"></button>
                      <strong><?=$this->session->title;?></strong> <?=$this->session->message;?>
					</div>
			<?php
			}
			?>
			<!-- START card -->
			<div class="card card-transparent">
				<div class="card-header ">
					<div class="pull-right">
						<div class="col-xs-12">
							<a href="<?=base_url('admin/arisan/create')?>" class="btn btn-primary btn-cons">
								<i class="fa fa-plus"></i> Tambah Data Arisan
							</a>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="card-block">
					<table class="table table-hover demo-table-search table-responsive-block" id="tableWithSearch">
						<thead>
							<tr>
								<th>Arisan</th>
								<th>Keterangan</th>
								<th>Periode</th>
								<th>Iuran</th>
								<th>Jumlah Peserta</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php
							foreach ($arisans as $arisan) {
								$deskripsi = explode ('<br>', $arisan->deskripsi);
								?>
								<tr>
									<td>
										<?=$arisan->arisan?>
									</td>
									<td>
										<?=$deskripsi[0]?>
									</td>
									<td>
										<?=$arisan->periode?>
									</td>
									<td>
										<?=number_format($arisan->iuran)?>
									</td>
									<td>
										<?=$arisan->jumlah_peserta?>
									</td>
									<td>
									<div class="btn-group">
										<a title="Edit Data" href="<?=base_url("admin/arisan/edit/$arisan->id")?>" class="btn btn-sm  btn-primary text-white"><i class="fa fa-pencil"></i></a>
										<a title="Hapus Data" href="<?=base_url("admin/arisan/delete/$arisan->id")?>" class="btn btn-sm  btn-danger text-white"><i class="fa fa-trash-o"></i></a>
									</div>
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
