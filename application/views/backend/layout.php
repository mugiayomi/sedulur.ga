<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
	<!DOCTYPE html>
	<html>
	<head>
		<?php include APPPATH . "views/backend/includes/head.php" ?>
	</head>
	<body class="fixed-header menu-pin">
		<?php include APPPATH . "views/backend/includes/sidebar.php" ?>

		<!-- START PAGE-CONTAINER -->
		<div class="page-container ">
			<?php include APPPATH . "views/backend/includes/header.php" ?>
			<!-- START PAGE CONTENT WRAPPER -->
			<div class="page-content-wrapper ">
				<!-- START PAGE CONTENT -->
				<div class="content ">
					<?php $module_page = APPPATH . "views/backend/".$page.".php"; ?>
					<?php include $module_page ?>
				</div>
				<!-- END PAGE CONTENT -->
				<?php include APPPATH . "views/backend/includes/footer.php" ?>
			</div>
			<!-- END PAGE CONTENT WRAPPER -->
		</div>
		<!-- END PAGE CONTAINER -->

		<?php 
		if (isset($script)) {
			include APPPATH . "views/backend/scripts/$script.php";
		} else {
			include APPPATH . "views/backend/scripts/default.php";
		}
	?>
	</body>
	</html>
