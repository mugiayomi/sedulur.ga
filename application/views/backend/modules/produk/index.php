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
							<a href="<?=base_url('admin/produk/create')?>" class="btn btn-primary btn-cons">
								<i class="fa fa-plus"></i> Tambah Data Produk
							</a>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="card-block">
					<table class="table table-hover demo-table-search table-responsive-block" id="tableWithSearch">
						<thead>
							<tr>
								<th>Nama Produk</th>
								<th>Keterangan</th>
								<th>Tipe Produk</th>
								<th>Harga</th>
								<th>Stok</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php
							foreach ($produks as $produk) {
								$deskripsi = explode ('<br>', $produk->deskripsi);
								?>
								<tr>
									<td>
										<?=$produk->nama?>
									</td>
									<td>
										<?=$deskripsi[0]?>
									</td>
									<td>
										<?=$produk->tipe_produk?>
									</td>
									<td>
										<?=number_format($produk->harga)?>
									</td>
									<td>
										<?=$produk->stok?>
									</td>
									<td>
									<div class="btn-group">
										<a title="Edit Data" href="<?=base_url("admin/produk/edit/$produk->id")?>" class="btn btn-sm  btn-primary text-white"><i class="fa fa-pencil"></i></a>
										<a title="Hapus Data" href="<?=base_url("admin/produk/delete/$produk->id")?>" class="btn btn-sm  btn-danger text-white"><i class="fa fa-trash-o"></i></a>
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
