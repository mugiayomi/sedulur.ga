<div class="content-wrap">

	<div class="container clearfix">

		<div class="heading-block">
			<h2>Daftar Arisan</h2>
			<span>Arisan sebagai media silaturahim</span>
		</div>

		<?php
		foreach ($arisans as $arisan) {
		?>
			<div class="pricing-box pricing-extended bottommargin clearfix">
			<div class="pricing-desc">
				<div class="pricing-title">
					<h3><?=$arisan->arisan?></h3>
					Jumlah Peserta: <?=$arisan->jumlah_peserta?>
				</div>
				<div class="pricing-features" style="min-height:100px">
				
				<?=$arisan->deskripsi?>
				</div>
			</div>

			<div class="pricing-action-area">
				<div class="pricing-price" style="font-size:30px">
					<span class="price-unit" style="font-size:15px">IDR</span><?=number_format($arisan->iuran)?>
					<span class="price-tenure"><?=$arisan->periode?></span>
				</div>
				<div class="pricing-action">
					<?php
					if (!empty($arisan->id_peserta_arisan)) {
					?>
						<a href="<?=base_url('admin/arisan/peserta/'.$arisan->id)?>" class="button button-3d button-large btn-block button-red nomargin">Terdaftar, Bayar?</a>
					<?php
					} else {
						?>
						<a href="<?=base_url('admin/arisan/daftar/'.$arisan->id)?>" class="button button-3d button-large btn-block nomargin">Daftar</a>
					<?php
					}
					?>
					
				</div>
			</div>
		</div>
		<?php
		}
		?>
	</div>

</div>
