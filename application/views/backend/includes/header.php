<!-- START HEADER -->
<div class="header ">
	<!-- START MOBILE SIDEBAR TOGGLE -->
	<a href="#" class="btn-link toggle-sidebar hidden-lg-up pg pg-menu" data-toggle="sidebar">
	</a>
	<!-- END MOBILE SIDEBAR TOGGLE -->
	<div class="">
		<div class="brand inline">
			<img src="<?=base_url()?>assets/backend/assets/img/logo_sedulur.png" alt="logo" data-src="<?=base_url()?>assets/backend/assets/img/logo_sedulur.png" data-src-retina="<?=base_url()?>assets/backend/assets/img/logo_sedulur2x.png" width="78"
			height="22">
		</div>
		
		<a href="#" class="btn btn-link text-primary m-l-20 hidden-md-down"><h3><?=$title?></h3></a>
	</div>
	<div class="d-flex align-items-center">
		<!-- START NOTIFICATION LIST -->
		<ul class="hidden-md-down notification-list no-margin hidden-sm-down b-grey b-r no-style p-l-30 p-r-20">
			<li class="p-r-10 inline">
				<div class="dropdown">
					<a href="javascript:;" id="notification-center" class="header-icon pg pg-world" data-toggle="dropdown">
						<span class="bubble"></span>
					</a>
					<!-- START Notification Dropdown -->
					<div class="dropdown-menu notification-toggle" role="menu" aria-labelledby="notification-center">
						<!-- START Notification -->
						<div class="notification-panel">
							<!-- START Notification Body-->
							<div class="notification-body scrollable">
								<!-- START Notification Item-->
								<div class="notification-item unread clearfix">
									<!-- START Notification Item-->
									<div class="heading open">
										<a href="#" class="text-primary pull-left">
											<i class="pg-map fs-16 m-r-10"></i>
											<span class="bold">Warga Baru</span>
											<span class="fs-12 m-l-10">Admin</span>
										</a>
										<div class="pull-right">
											<div class="thumbnail-wrapper d16 circular inline m-t-15 m-r-10 toggle-more-details">
												<div>
													<i class="fa fa-angle-left"></i>
												</div>
											</div>
											<span class=" time">few sec ago</span>
										</div>
										<div class="more-details">
											<div class="more-details-inner">
												<h5 class="semi-bold fs-16">“zzzz.”</h5>
												<p class="small hint-text">
													abcd.
													<br> efgh.
												</p>
											</div>
										</div>
									</div>
									<!-- END Notification Item-->
									<!-- START Notification Item Right Side-->
									<div class="option" data-toggle="tooltip" data-placement="left" title="mark as read">
										<a href="#" class="mark"></a>
									</div>
									<!-- END Notification Item Right Side-->
								</div>
							</div>
							<!-- END Notification Body-->
							<!-- START Notification Footer-->
							<div class="notification-footer text-center">
								<a href="#" class="">Read all notifications</a>
								<a data-toggle="refresh" class="portlet-refresh text-black pull-right" href="#">
									<i class="pg-refresh_new"></i>
								</a>
							</div>
							<!-- START Notification Footer-->
						</div>
						<!-- END Notification -->
					</div>
					<!-- END Notification Dropdown -->
				</div>
			</li>
		</ul>
		<!-- END NOTIFICATIONS LIST -->
		<!-- START User Info-->
		<div class="pull-left p-r-10 fs-14 font-heading hidden-md-down m-l-20">
			<span class="semi-bold"><?=$this->session->userdata['logged_in']->nama?></span>
		</div>
		<div class="dropdown pull-right hidden-md-down">
			<button class="profile-dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<span class="thumbnail-wrapper d32 circular inline">
					<img src="<?=base_url($this->session->userdata['logged_in']->url_foto)?>" alt="" data-src="<?=base_url($this->session->userdata['logged_in']->url_foto)?>" data-src-retina="<?=base_url($this->session->userdata['logged_in']->url_foto)?>"
					width="32" height="32">
				</span>
			</button>
			<div class="dropdown-menu dropdown-menu-right profile-dropdown" role="menu">
				<a href="#" class="dropdown-item">
					<i class="pg-settings_small"></i> Settings</a>
				<!-- <a href="#" class="dropdown-item">
					<i class="pg-outdent"></i> Feedback</a>
				<a href="#" class="dropdown-item">
					<i class="pg-signals"></i> Help</a> -->
				<a href="<?=base_url('auth/doLogout')?>" class="clearfix bg-master-lighter dropdown-item">
					<span class="pull-left">Keluar</span>
					<span class="pull-right">
						<i class="pg-power"></i>
					</span>
				</a>
			</div>
		</div>
	</div>
</div>
<!-- END HEADER -->
