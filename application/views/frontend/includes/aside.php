<div id="side-panel">

	<div id="side-panel-trigger-close" class="side-panel-trigger">
		<a href="#">
			<i class="icon-line-cross"></i>
		</a>
	</div>

	<div class="side-panel-wrap">

		<div class="widget clearfix">

			<h4 class="t400">Sudah punya akun?</h4>

			<form id="login-form" name="login-form" class="nobottommargin" action="<?=base_url('auth/doLogin')?>" method="post">
				<input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
				<div class="col_full">
					<label for="email" class="t400">Email:</label>
					<input type="text" id="email" name="email" class="form-control" required />
				</div>

				<div class="col_full">
					<label for="password" class="t400">Password:</label>
					<input type="password" id="password" name="password" class="form-control" required/>
				</div>

				<div class="col_full nobottommargin">
					<button type="submit" class="button button-rounded t400 nomargin" id="login-form-submit" name="login-form-submit" value="login">Masuk</button>
					<a href="<?=base_url('forget-password')?>" class="fright">Lupa Password?</a>
				</div>

			</form>

			<div class="line"></div>

            <h4 class="t400">Belum terdaftar?</h4>
            <a href="<?=base_url('register')?>" class="button button-rounded t400 btn-block center si-colored noleftmargin si-facebook">Daftar Disini</a>

		</div>

	</div>

</div>
