<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
	<?php include APPPATH . "views/frontend/includes/head.php" ?>
</head>

<body class="stretched side-push-panel">

	<?php include APPPATH . "views/frontend/includes/aside.php" ?>

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">
		<?php
		if (!empty($kentongans)) {
			foreach ($kentongans as $kentongan) {
		?>
		<div class="style-msg alertmsg" style="margin-bottom:10px">
			<div class="sb-msg"><i class="icon-warning-sign"></i><strong>Pesan Darurat!</strong> <?=$kentongan->pesan?> Lokasi:  <?=$kentongan->lokasi?></div>
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
		</div>
		<?php
		}
		}
		?>
		
		<?php include APPPATH . "views/frontend/includes/topbar.php" ?>
		<?php include APPPATH . "views/frontend/includes/header.php" ?>
		<?php include APPPATH . "views/frontend/includes/slider.php" ?>

		<!-- Content
		============================================= -->
		<section id="content">
			<?php $module_page = APPPATH . "views/frontend/".$page.".php"; ?>
			<?php include $module_page ?>
		</section><!-- #content end -->

	
		<?php include APPPATH . "views/frontend/includes/footer.php" ?>
	</div><!-- #wrapper end -->

	<?php 
		if (isset($script)) {
			include APPPATH . "views/frontend/scripts/$script.php";
		} else {
			include APPPATH . "views/frontend/scripts/default.php";
		}
	?>

</body>
</html>