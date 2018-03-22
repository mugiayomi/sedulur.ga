<!-- Login Form -->
<div class="accountbox-wrapper">
	<div class="accountbox text-left">
		<ul class="nav accountbox__filters" id="myTab" role="tablist">
			<li>
				<a class="active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Login</a>
			</li>
			<li>
				<a id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Register</a>
			</li>
		</ul>
		<div class="accountbox__inner tab-content" id="myTabContent">
			<div class="accountbox__login tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
				<form action="#">
					<div class="single-input">
						<input type="text" placeholder="User name or email" class="cr-round cr-round--lg">
					</div>
					<div class="single-input">
						<input type="password" placeholder="Password" class="cr-round cr-round--lg">
					</div>
					<div class="single-input">
						<button type="submit" class="cr-btn cr-btn--sm cr-btn--theme cr-round cr-round--lg">
							<span>Go</span>
						</button>
					</div>
					<div class="accountbox-login__others">
						<h6>Or login with</h6>
						<div class="social-icons social-icons--rounded">
							<ul>
								<li class="facebook">
									<a href="https://www.facebook.com/">
										<i class="fa fa-facebook"></i>
									</a>
								</li>
								<li class="twitter">
									<a href="https://twitter.com/">
										<i class="fa fa-twitter"></i>
									</a>
								</li>
								<li class="pinterest">
									<a href="#">
										<i class="fa fa-google-plus"></i>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</form>
			</div>
			<div class="accountbox__register tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
				<form action="#">
					<div class="single-input">
						<input type="text" placeholder="User name" class="cr-round cr-round--lg">
					</div>
					<div class="single-input">
						<input type="email" placeholder="Email address" class="cr-round cr-round--lg">
					</div>
					<div class="single-input">
						<input type="password" placeholder="Password" class="cr-round cr-round--lg">
					</div>
					<div class="single-input">
						<input type="password" placeholder="Confirm password" class="cr-round cr-round--lg">
					</div>
					<div class="single-input">
						<button type="submit" class="cr-btn cr-btn--sm cr-btn--theme cr-round cr-round--lg">
							<span>Sign Up</span>
						</button>
					</div>
				</form>
			</div>
			<span class="accountbox-close-button">
				<i class="icofont icofont-close"></i>
			</span>
		</div>
	</div>
</div>
<!-- //Login Form -->
