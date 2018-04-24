<div class=" container-fluid   container-fixed-lg">
	<div class="row">
		<div class="col-xl-12 col-lg-12">
			<!-- START card -->
			<div class="card social-card share  full-width m-b-10 no-border">
				<div class="card-header ">
					<div class="card-title">Statistik Pengunjung Website
					</div>
				</div>
				<div class="card-block" id="chart-container">
					<!-- Step 1: Create the containing elements. -->
					<section id="auth-button"></section>

					<section id="timeline" style="width:1500px"></section>
					<!-- Step 2: Load the library. -->
				</div>
			</div>
			<!-- END card -->
		</div>
	</div>
</div>
<!-- END CONTAINER FLUID -->


<script>
	(function (w, d, s, g, js, fjs) {
		g = w.gapi || (w.gapi = {});
		g.analytics = {
			q: [],
			ready: function (cb) {
				this.q.push(cb)
			}
		};
		js = d.createElement(s);
		fjs = d.getElementsByTagName(s)[0];
		js.src = 'https://apis.google.com/js/platform.js';
		fjs.parentNode.insertBefore(js, fjs);
		js.onload = function () {
			g.load('analytics')
		};
	}(window, document, 'script'));

</script>

<script>
	gapi.analytics.ready(function () {

		// Step 3: Authorize the user.

		var CLIENT_ID = '801333836860-0q6eb20mvjsge8iu7d5pv4ppnbuvbqne.apps.googleusercontent.com';

		gapi.analytics.auth.authorize({
			container: 'auth-button',
			clientid: CLIENT_ID,
			userInfoLabel: ""
		});

		var fullwidth = screen.width * 70/100;
		// alert(fullwidth);

		// Step 5: Create the timeline chart.
		var timeline = new gapi.analytics.googleCharts.DataChart({
			reportType: 'ga',
			query: {
			'dimensions': 'ga:date',
			'metrics': 'ga:sessions',
			'start-date': '30daysAgo',
			'end-date': 'today',
			// 'ids': "ga:174059168",
			'ids': "ga:174059168"
			},
			chart: {
			type: 'LINE',
			container: 'timeline',
			options:{
				'animation.duration':200,
				animation:{
				duration:1000,
				startup:true,
				},
				'width':fullwidth
			}
			}
		});
		// var timeline = new gapi.analytics.googleCharts.DataChart({
		// 	reportType: 'ga',
		// 	query: {
		// 		'dimensions': 'ga:date',
		// 		'metrics': 'ga:sessions',
		// 		'start-date': '30daysAgo',
		// 		'end-date': 'today',
		// 		'ids': "ga:173079853"
		// 	},
		// 	chart: {
		// 		type: 'LINE',
		// 		container: 'timeline'
		// 	}
		// });

		gapi.analytics.auth.on('success', function (response) {
			//hide the auth-button
			document.querySelector("#auth-button").style.display = 'none';

			timeline.execute();

		});

	});

</script>


<!-- 173079853 -->
