<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<button id="kentongan" data-toggle="modal" data-target=".bs-example-modal-lg" class="button button-circle button-red"><i class="icon-realestate-high-voltage"></i>Kentongan!</button>

	<!-- Large modal -->
	<!-- <button class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Large modal</button> -->

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-body">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="myModalLabel">Lapor Keadaan Darurat</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
				<form method="POST" action="<?=base_url('admin/kentongan/store')?>" role="form" autocomplete="off">
						<input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
						<input type="hidden" name="id_user" value="<?=$id_user?>" />
					<div class="form-group">
						<label for="inputAddress">Nama</label>
						<input type="text" class="form-control"  placeholder="Isikan Nama Anda" name="nama" value="<?=$nama?>">
					</div>
					<div class="form-group">
						<label for="inputAddress2">Lokasi</label> 
						<input id="lokasi" type="text" class="form-control" name="lokasi" placeholder="Lokasi">
						<span id="geo">Lokasi</span>
					</div>
					<div class="form-group">
						<label for="inputAddress2">Pesan</label>
						<a href="#" class=" shortcut button button-mini button-3d button-rounded button-red"><i class="icon-fire"></i>Kebakaran!</a>
						<a href="#" class="shortcut button button-mini button-3d button-rounded button-amber"><i class="icon-ambulance"></i>Perampokan!</a>
						<a href="#" class="shortcut button button-mini button-3d button-rounded button-blue"><i class="icon-tint"></i>Banjir!</a>
					</div>
					<div class="form-group">
						<textarea id="pesan" name="pesan" class="form-control" id="" cols="30" rows="4"></textarea>
					</div>
					
					<button type="submit" class="btn btn-primary">Kirim Pesan</button>
				</form>
				</div>
			</div>
		</div>
	</div>
</div>

	<!-- External JavaScripts
	============================================= -->
	<script src="<?=base_url()?>assets/frontend/js/jquery.js"></script>
	<script src="<?=base_url()?>assets/frontend/js/plugins.js"></script>

	<!-- Google Map JavaScripts
	============================================= -->
	<script src="https://maps.google.com/maps/api/js?key=AIzaSyAO2BYvn4xyrdisvP8feA4AS_PGZFxJDp4"></script>
	<script src="<?=base_url()?>assets/frontend/js/jquery.gmap.js"></script>

	<!-- Bootstrap Select Plugin -->
	<script src="<?=base_url()?>assets/frontend/js/components/bs-select.js"></script>

	<!-- Bootstrap Switch Plugin -->
	<script src="<?=base_url()?>assets/frontend/js/components/bs-switches.js"></script>

	<!-- Range Slider Plugin -->
	<script src="<?=base_url()?>assets/frontend/js/components/rangeslider.min.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="<?=base_url()?>assets/frontend/js/functions.js"></script>

	<script>

		
		jQuery(document).ready( function($){
			var indexMonth = parseInt(<?=substr($agenda->tanggal_mulai, 5, 2)?>) - 0;
			
			var countdownDate = <?=substr($agenda->tanggal_mulai, 0, 4)?>;
			countdownDate += ', ' + indexMonth;
			countdownDate += ', ' + <?=substr($agenda->tanggal_mulai, 8, 2)?>;
			
			
			console.log(countdownDate)

		// var eventStartDate = new Date(2018, 3, 30, 8, 0);
		var eventStartDate = new Date(countdownDate);
		$('#event-countdown').countdown({until: eventStartDate});

		});

		jQuery('#event-location').gMap({
		address: '<?=$agenda->lokasi?>',
		maptype: 'ROADMAP',
		zoom: 15,
		markers: [
			{
				address: "<?=$agenda->lokasi?>"
			}
		],
		doubleclickzoom: false,
		controls: {
			panControl: true,
			zoomControl: true,
			mapTypeControl: true,
			scaleControl: false,
			streetViewControl: false,
			overviewMapControl: false
		}
		});

	</script>