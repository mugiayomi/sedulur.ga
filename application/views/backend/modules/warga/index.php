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
							<a href="<?=base_url('admin/warga/create')?>" class="btn btn-primary btn-cons">
								<i class="fa fa-plus"></i> Tambah Data Warga
							</a>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="card-block">
					<table class="table table-hover demo-table-search table-responsive-block" id="tableWithSearch">
						<thead>
							<tr>
								<th>NIK</th>
								<th>Nama</th>
								<th>Alamat</th>
								<th>Username</th>
								<th>Warga RT</th>
								<th>Status Akun</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php
							foreach ($wargas as $warga) {
								?>
								<tr>
									<td>
										<?=$warga->nik?>
									</td>
									<td>
										<?=$warga->nama?>
									</td>
									<td>
										<?=$warga->alamat?>
									</td>
									<td>
										<?=$warga->username?>
									</td>
									<td>
										<?=$warga->nama_rt?>
									</td>
									<td>
										<?php echo $warga->is_active == 0 ? '<span class="label label-danger">Inactive</span>' : '<span class="label label-info">Active</span>'; ?>
									</td>
									<td>
									<div class="btn-group">
										<a title="Edit Data" href="<?=base_url("admin/warga/edit/$warga->nik")?>" class="btn btn-sm  btn-primary text-white"><i class="fa fa-pencil"></i></a>
										<a title="Hapus Data" href="<?=base_url("admin/warga/delete/$warga->nik")?>" class="btn btn-sm  btn-danger text-white"><i class="fa fa-trash-o"></i></a>
										<?php
										if (!empty($warga->username)) {
											?>
											<a title="Verifikasi Data" href="<?=base_url("admin/warga/verifikasi/$warga->nik")?>" class="btn btn-sm btn-complete text-white"><i class="fa fa-check"></i></a>
											<?php
										}
										?>
										
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
