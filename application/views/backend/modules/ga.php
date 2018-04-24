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

					<button id="auth-button" hidden>Authorize</button>

					<h1>Statistik Pengunjung</h1>

					<textarea cols="80" rows="20" id="query-output"></textarea>
					<div id="data-chart-1-container"></div>

					<script>
						// Replace with your client ID from the developer console.
						var CLIENT_ID = '801333836860-0q6eb20mvjsge8iu7d5pv4ppnbuvbqne.apps.googleusercontent.com';

						// Set authorized scope.
						var SCOPES = ['https://www.googleapis.com/auth/analytics.readonly'];


						function authorize(event) {
							// Handles the authorization flow.
							// `immediate` should be false when invoked from the button click.
							var useImmdiate = event ? false : true;
							var authData = {
								client_id: CLIENT_ID,
								scope: SCOPES,
								immediate: useImmdiate
							};

							gapi.auth.authorize(authData, function (response) {
								var authButton = document.getElementById('auth-button');
								if (response.error) {
									authButton.hidden = false;
								} else {
									authButton.hidden = true;
									queryAccounts();
								}
							});
						}


						function queryAccounts() {
							// Load the Google Analytics client library.
							gapi.client.load('analytics', 'v3').then(function () {

								// Get a list of all Google Analytics accounts for this user
								gapi.client.analytics.management.accounts.list().then(handleAccounts);
							});
						}


						function handleAccounts(response) {
							// Handles the response from the accounts list method.
							if (response.result.items && response.result.items.length) {
								// Get the first Google Analytics account.
								var firstAccountId = response.result.items[3].id;

								// Query for properties.
								queryProperties(firstAccountId);
							} else {
								console.log('No accounts found for this user.');
							}
						}


						function queryProperties(accountId) {
							// Get a list of all the properties for the account.
							gapi.client.analytics.management.webproperties.list({
									'accountId': accountId
								})
								.then(handleProperties)
								.then(null, function (err) {
									// Log any errors.
									console.log(err);
								});
						}


						function handleProperties(response) {
							// Handles the response from the webproperties list method.
							if (response.result.items && response.result.items.length) {

								// Get the first Google Analytics account
								var firstAccountId = response.result.items[0].accountId;

								// Get the first property ID
								var firstPropertyId = response.result.items[0].id;

								// Query for Views (Profiles).
								queryProfiles(firstAccountId, firstPropertyId);
							} else {
								console.log('No properties found for this user.');
							}
						}


						function queryProfiles(accountId, propertyId) {
							// Get a list of all Views (Profiles) for the first property
							// of the first Account.
							gapi.client.analytics.management.profiles.list({
									'accountId': accountId,
									'webPropertyId': propertyId
								})
								.then(handleProfiles)
								.then(null, function (err) {
									// Log any errors.
									console.log(err);
								});
						}


						function handleProfiles(response) {
							// Handles the response from the profiles list method.
							if (response.result.items && response.result.items.length) {
								// Get the first View (Profile) ID.
								var firstProfileId = response.result.items[0].id;

								// Query the Core Reporting API.
								queryCoreReportingApi(firstProfileId);
							} else {
								console.log('No views (profiles) found for this user.');
							}
						}


						function queryCoreReportingApi(profileId) {

							// Query the Core Reporting API for the number sessions for
							// the past seven days.
							gapi.client.analytics.data.ga.get({
									'ids': 'ga:' + profileId,
									'start-date': '7daysAgo',
									'end-date': 'today',
									'metrics': 'ga:sessions'
								})
								.then(function (response) {
									var formattedJson = JSON.stringify(response.result, null, 2);
									document.getElementById('query-output').value = formattedJson;
								})
								.then(null, function (err) {
									// Log any errors.
									console.log(err);
								});

							 /**
							 * Store a set of common DataChart config options since they're shared by
							 * both of the charts we're about to make.
							 */
							var commonConfig = {
								query: {
								metrics: 'ga:sessions',
								dimensions: 'ga:date',
								ids: 'ga:' + profileId
								},
								chart: {
								type: 'LINE',
								options: {
									width: '100%'
								}
								}
							};

							/**
							 * Query params representing the first chart's date range.
							 */
							var dateRange1 = {
								'start-date': '7daysAgo',
								'end-date': 'today'
							};

							var dataChart1 = new gapi.analytics.googleCharts.DataChart(commonConfig)
											.set({query: dateRange1})
											.set({chart: {container: 'data-chart-1-container'}});

							
						}

						// Add an event listener to the 'auth-button'.
						document.getElementById('auth-button').addEventListener('click', authorize);

					</script>

					<script src="https://apis.google.com/js/client.js?onload=authorize"></script>

				</div>
			</div>
			<!-- END card -->
		</div>
	</div>
</div>
<!-- END CONTAINER FLUID -->
