<!-- START CONTAINER FLUID -->
<meta name="google-signin-client_id" content="801333836860-0q6eb20mvjsge8iu7d5pv4ppnbuvbqne.apps.googleusercontent.com">
<meta name="google-signin-scope" content="https://www.googleapis.com/auth/analytics.readonly">

<div class=" container-fluid   container-fixed-lg">
	<div class="row">
		<div class="col-xl-12 col-lg-12">
			<!-- START card -->
			<div class="card card-transparent">
				<!-- <div class="card-header ">
					<div class="card-title">Ini Dashboard mau diisi apa?
					</div>
				</div> -->
				<div class="card-block">
					<h3>Statistik pengunjung web.</h3>

					<!-- The Sign-in button. This will run `queryReports()` on success. -->
					<p class="g-signin2" data-onsuccess="queryReports"></p>

					<!-- The API response will be printed here. -->
					<textarea cols="80" rows="20" id="query-output"></textarea>

					<script>
						// Replace with your view ID.
						var VIEW_ID = '174059168';

						// Query the API and print the results to the page.
						function queryReports() {
							gapi.client.request({
								path: '/v4/reports:batchGet',
								root: 'https://analyticsreporting.googleapis.com/',
								method: 'POST',
								body: {
									reportRequests: [{
										viewId: VIEW_ID,
										dateRanges: [{
											startDate: '7daysAgo',
											endDate: 'today'
										}],
										metrics: [{
											expression: 'ga:sessions'
										}]
									}]
								}
							}).then(displayResults, console.error.bind(console));
						}

						function displayResults(response) {
							var formattedJson = JSON.stringify(response.result, null, 2);
							document.getElementById('query-output').value = formattedJson;
						}
					</script>

					<!-- Load the JavaScript API client and Sign-in library. -->
					<script src="https://apis.google.com/js/client:platform.js"></script>

				</div>
			</div>
			<!-- END card -->
		</div>
	</div>
</div>
<!-- END CONTAINER FLUID -->