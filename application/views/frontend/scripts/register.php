<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<script src="<?=base_url()?>assets/frontend/js/jquery.js"></script>
	<script src="<?=base_url()?>assets/frontend/js/plugins.js"></script>

	<!-- Bootstrap Select Plugin -->
	<script src="<?=base_url()?>assets/frontend/js/components/bs-select.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="<?=base_url()?>assets/frontend/js/functions.js"></script>

	<script>
		$(document).ready(function(){
			var baseUrl = '<?=base_url() ?>'

			$("#rw").on('change', function(){
				$("#rt").html('').selectpicker('refresh')
				var rw = $(this).val();
				
				if (rw != '') {
					get_data_rt(rw);
				} 
			});

			function get_data_rt(rw) {
				var htmlStr = "";
				$.ajax({
					url: baseUrl + 'json/getRtByRw/' + rw,
					dataType: 'json',
					success: function(response) {
						$.each(response, function(i, item) {
							htmlStr += "<option value='"+item.id+"'>"+item.nama_rt+"</option>";							
						});
						$("#rt").append(htmlStr).selectpicker('refresh')
					}
				});
			}

		});

		
	</script>