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
					<div class="card-title">Kelompok RW</div>
					<div class="pull-right">
						<div class="col-xs-12">
							<a href="<?=base_url('admin/kelompok-rt/createRw')?>" class="btn btn-primary btn-cons">
								<i class="fa fa-plus"></i> Tambah RW
							</a>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="card-block">
					<table class="table table-hover demo-table-search table-responsive-block" id="tableWithSearch">
						<thead>
							<tr>
								<th>RW</th>
								<th>Nama Ketua RW</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php
							foreach ($rws as $rw) {
								?>
								<tr>
									<td>
										<?=$rw->nama_rw?>
									</td>
									<td>
										<?=$rw->nama?>
									</td>
									<td>
									<div class="btn-group">
										<a href="<?=base_url("admin/kelompok-rt/editRw/$rw->id")?>" class="btn btn-success text-white"><i class="fa fa-pencil"></i></a>
										<a href="<?=base_url("admin/kelompok-rt/deleteRw/$rw->id")?>" class="btn btn-danger text-white"><i class="fa fa-trash-o"></i></a>
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
<div class=" container-fluid   container-fixed-lg bg-white">
	<div class="row">
		<div class="col-xl-12 col-lg-12">
			<!-- START card -->
			<div class="card card-transparent">
				<div class="card-header ">
					<div class="card-title">Kelompok RT</div>
					<div class="pull-right">
						<div class="col-xs-12">
							<a href="<?=base_url('admin/kelompok-rt/createRt')?>" class="btn btn-primary btn-cons">
								<i class="fa fa-plus"></i> Tambah RT
							</a>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="card-block">
					<table class="table table-hover demo-table-search table-responsive-block" id="tableWithSearch">
						<thead>
							<tr>
								<th>RW</th>
								<th>RT</th>
								<th>Nama Ketua RT</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php
							foreach ($rts as $rt) {
								?>
								<tr>
									<td>
										<?=$rt->nama_rw?>
									</td>
									<td>
										<?=$rt->nama_rt?>
									</td>
									<td>
										<?=$rt->nama?>
									</td>
									<td>
									<div class="btn-group">
										<a href="<?=base_url("admin/kelompok-rt/editRt/$rt->id")?>" class="btn btn-success text-white"><i class="fa fa-pencil"></i></a>
										<a href="<?=base_url("admin/kelompok-rt/deleteRt/$rt->id")?>" class="btn btn-danger text-white"><i class="fa fa-trash-o"></i></a>
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
