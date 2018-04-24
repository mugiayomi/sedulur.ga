<div class="content-wrap">

	<div class="container clearfix">

		<div class="single-post nobottommargin">

			<!-- Single Post
						============================================= -->
			<div class="entry clearfix">

				<!-- Entry Title
							============================================= -->
				<div class="entry-title">
					<h2><?=$info->judul?></h2>
				</div>
				<!-- .entry-title end -->

				<!-- Entry Meta
							============================================= -->
				<ul class="entry-meta clearfix">
					<li>
						<i class="icon-calendar3"></i> <?=$info->wk_rekam?></li>
					<li>
						<a href="#">
							<i class="icon-user"></i> admin</a>
					</li>
					<!-- <li>
						<i class="icon-folder-open"></i>
						<a href="#">General</a>,
						<a href="#">Media</a>
					</li>
					<li>
						<a href="#">
							<i class="icon-comments"></i> 43 Comments</a>
					</li>
					<li>
						<a href="#">
							<i class="icon-camera-retro"></i>
						</a>
					</li> -->
				</ul>
				<!-- .entry-meta end -->

				<!-- Entry Image
							============================================= -->
				<div class="entry-image bottommargin">
					<a href="#">
						<img src="<?=base_url($info->gambar)?>" alt="<?=$info->judul?>">
					</a>
				</div>
				<!-- .entry-image end -->

				<!-- Entry Content
							============================================= -->
				<div class="entry-content notopmargin">
					<?=$info->deskripsi?><br>
					<!-- Post Single - Content End -->

					<!-- Tag Cloud
								============================================= -->
					<!-- <div class="tagcloud clearfix bottommargin">
						<a href="#">general</a>
						<a href="#">information</a>
						<a href="#">media</a>
						<a href="#">press</a>
						<a href="#">gallery</a>
						<a href="#">illustration</a>
					</div> -->
					<!-- .tagcloud end -->

					<div class="clear"></div>

					<!-- Post Single - Share
								============================================= -->
					<!-- <div class="si-share noborder clearfix">
						<span>Share this Post:</span>
						<div>
							<a href="#" class="social-icon si-borderless si-facebook">
								<i class="icon-facebook"></i>
								<i class="icon-facebook"></i>
							</a>
							<a href="#" class="social-icon si-borderless si-twitter">
								<i class="icon-twitter"></i>
								<i class="icon-twitter"></i>
							</a>
							<a href="#" class="social-icon si-borderless si-pinterest">
								<i class="icon-pinterest"></i>
								<i class="icon-pinterest"></i>
							</a>
							<a href="#" class="social-icon si-borderless si-gplus">
								<i class="icon-gplus"></i>
								<i class="icon-gplus"></i>
							</a>
							<a href="#" class="social-icon si-borderless si-rss">
								<i class="icon-rss"></i>
								<i class="icon-rss"></i>
							</a>
							<a href="#" class="social-icon si-borderless si-email3">
								<i class="icon-email3"></i>
								<i class="icon-email3"></i>
							</a>
						</div>
					</div> -->
					<!-- Post Single - Share End -->

				</div>
			</div>
			<!-- .entry end -->

			<!-- Post Navigation
						============================================= -->
			<!-- <div class="post-navigation clearfix">

				<div class="col_half nobottommargin">
					<a href="#">&lArr; This is a Standard post with a Slider Gallery</a>
				</div>

				<div class="col_half col_last tright nobottommargin">
					<a href="#">This is an Embedded Audio Post &rArr;</a>
				</div>

			</div> -->
			<!-- .post-navigation end -->

			<!-- <div class="line"></div> -->

			<!-- Post Author Info
						============================================= -->
			<!-- <div class="card">
				<div class="card-header">
					<strong>Posted by
						<a href="#">John Doe</a>
					</strong>
				</div>
				<div class="card-body">
					<div class="author-image">
						<img src="images/author/1.jpg" alt="" class="rounded-circle">
					</div>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, eveniet, eligendi et nobis neque minus mollitia sit repudiandae
					ad repellendus recusandae blanditiis praesentium vitae ab sint earum voluptate velit beatae alias fugit accusantium
					laboriosam nisi reiciendis deleniti tenetur molestiae maxime id quaerat consequatur fugiat aliquam laborum nam aliquid.
					Consectetur, perferendis?
				</div>
			</div> -->
			<!-- Post Single - Author End -->

			<!-- <div class="line"></div> -->

			<h4>Info Terkait:</h4>

			<div class="related-posts clearfix">

				<div class="col_half nobottommargin">

					<div class="mpost clearfix">
						<div class="entry-image">
							<a href="#">
								<img src="images/blog/small/10.jpg" alt="Blog Single">
							</a>
						</div>
						<div class="entry-c">
							<div class="entry-title">
								<h4>
									<a href="#">This is an Image Post</a>
								</h4>
							</div>
							<ul class="entry-meta clearfix">
								<li>
									<i class="icon-calendar3"></i> 10th July 2014</li>
								<li>
									<a href="#">
										<i class="icon-comments"></i> 12</a>
								</li>
							</ul>
							<div class="entry-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia nisi perferendis.</div>
						</div>
					</div>

					<div class="mpost clearfix">
						<div class="entry-image">
							<a href="#">
								<img src="images/blog/small/20.jpg" alt="Blog Single">
							</a>
						</div>
						<div class="entry-c">
							<div class="entry-title">
								<h4>
									<a href="#">This is a Video Post</a>
								</h4>
							</div>
							<ul class="entry-meta clearfix">
								<li>
									<i class="icon-calendar3"></i> 24th July 2014</li>
								<li>
									<a href="#">
										<i class="icon-comments"></i> 16</a>
								</li>
							</ul>
							<div class="entry-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia nisi perferendis.</div>
						</div>
					</div>

				</div>

				<div class="col_half nobottommargin col_last">

					<div class="mpost clearfix">
						<div class="entry-image">
							<a href="#">
								<img src="images/blog/small/21.jpg" alt="Blog Single">
							</a>
						</div>
						<div class="entry-c">
							<div class="entry-title">
								<h4>
									<a href="#">This is a Gallery Post</a>
								</h4>
							</div>
							<ul class="entry-meta clearfix">
								<li>
									<i class="icon-calendar3"></i> 8th Aug 2014</li>
								<li>
									<a href="#">
										<i class="icon-comments"></i> 8</a>
								</li>
							</ul>
							<div class="entry-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia nisi perferendis.</div>
						</div>
					</div>

					<div class="mpost clearfix">
						<div class="entry-image">
							<a href="#">
								<img src="images/blog/small/22.jpg" alt="Blog Single">
							</a>
						</div>
						<div class="entry-c">
							<div class="entry-title">
								<h4>
									<a href="#">This is an Audio Post</a>
								</h4>
							</div>
							<ul class="entry-meta clearfix">
								<li>
									<i class="icon-calendar3"></i> 22nd Aug 2014</li>
								<li>
									<a href="#">
										<i class="icon-comments"></i> 21</a>
								</li>
							</ul>
							<div class="entry-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia nisi perferendis.</div>
						</div>
					</div>

				</div>

			</div>
		</div>

	</div>

</div>