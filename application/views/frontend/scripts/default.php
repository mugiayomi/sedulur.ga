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

		jQuery(document).ready(function(){
			getLocation();

			$(".price-range-slider").ionRangeSlider({
				type: "double",
				prefix: "$",
				min: 200,
				max: 10000,
				max_postfix: "+"
			});

			$(".area-range-slider").ionRangeSlider({
				type: "double",
				min: 50,
				max: 20000,
				from: 50,
				to: 20000,
				postfix: " sqm.",
				max_postfix: "+"
			});

			jQuery(".bt-switch").bootstrapSwitch();

			$(".shortcut").click(function () {
				$("#pesan").text('');
				$("#pesan").text('Tolong Bantuan Ada ' + $(this).text());

			})

		});

		jQuery(window).on( 'load', function(){

			// Google Map
			jQuery('#headquarters-map').gMap({
				address: 'Jalan salemba raya, jakarta',
				maptype: 'TERRAIN',
				zoom: 15,
				markers: [
					{
						address: "Jalan salemba raya, jakarta",
						html: "Kelurahan Sedulur",
						icon: {
							image: "<?=base_url()?>assets/frontend/images/icons/map-icon-red.png",
							iconsize: [32, 36],
							iconanchor: [14,44]
						}
					}
				],
				doubleclickzoom: true,
				controls: {
					panControl: false,
					zoomControl: false,
					mapTypeControl: true,
					scaleControl: false,
					streetViewControl: false,
					overviewMapControl: true
				},
				// styles: [{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"color":"#F0AD4E"},{"lightness":60}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#2C3E50"},{"visibility":"on"}]}]
			});

			

		});

		var x = document.getElementById("geo");
		function getLocation() {
			if (navigator.geolocation) {
				navigator.geolocation.getCurrentPosition(showPosition);
			} else {
				x.innerHTML = "Geolocation is not supported by this browser.";
			}
		}
		function showPosition(position) {
			x.innerHTML = "Latitude: " + position.coords.latitude +
			"<br>Longitude: " + position.coords.longitude;
		}

	</script>