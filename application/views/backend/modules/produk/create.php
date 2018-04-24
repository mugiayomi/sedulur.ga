<!-- START CONTAINER FLUID -->
<div class=" container-fluid   container-fixed-lg">
	<div class="row">
		<div class="col-xl-12 col-lg-12">
			<!-- START card -->
			<div class="card card-transparent">
				<div class="card-block">
					<form method="POST" action="<?=base_url('admin/produk/store')?>" role="form" autocomplete="off" enctype="multipart/form-data">
						<input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
						<div class="row">
							<div class="col-md-12">
								<div class="form-group form-group-default input-group">
									<div class="form-input-group">
										<label>Produk</label>
										<input type="text" class="form-control" name="nama" placeholder="Nama Produk" required>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group form-group-default form-group-default-select2">
										<label>Tipe Produk</label>
										<select name="tipe_produk" class="full-width" data-placeholder="Pilih Tipe Produk" data-init-plugin="select2">								
											<option value="">Pilih Tipe Produk</option>
											<option value="Baru">Baru</option>
											<option value="Bekas">Bekas</option>
										</select>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group form-group-default input-group">
									<div class="form-input-group">
										<label>Harga </label>
										<input type="text" class="form-control" name="harga" placeholder="Harga Produk" required>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group form-group-default input-group">
									<div class="form-input-group">
										<label>Stok Barang </label>
										<input type="text" class="form-control" name="stok" placeholder="Jumlah Stok Barang" required>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group form-group-default input-group">
									<div class="form-input-group">
										<label>Gambar Utama</label>
										<input type="file" class="form-control" name="gambar" placeholder="Gambar" required>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<h5>Deskripsi Produk</h5>
									<div class="no-scroll card-toolbar">
										<div class="summernote-wrapper">
											<div id="summernote"></div>
										</div>
									</div>
								</div>
								<textarea class="hide" name="deskripsi" id="deskripsi" cols="30" rows="10"></textarea>
							</div>
						</div>

						<div class="clearfix"></div>
						<button class="btn btn-primary" type="submit">Simpan Data Produk</button>
						<button type="button" class="btn btn-default" onclick="window.history.go(-1); return false;">Batal</button>
					</form>
				</div>
			</div>
			<!-- END card -->
		</div>
	</div>
</div>
<!-- END CONTAINER FLUID -->
