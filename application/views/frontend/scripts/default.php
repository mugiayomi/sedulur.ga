<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<div id="kentongan" class="icon-angle-down"></div>

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

	</script>