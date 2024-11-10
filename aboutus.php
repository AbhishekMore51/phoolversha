<?php

session_start();
include('libraries/config.php');

$navigation = "about-us";

/*= Set Relative Path if not default =*/
//$relative_path = "../";

?>

<!DOCTYPE html>
<html lang="en-IN">

<head>
	<title>Home</title>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" /> -->

	<meta name="description" content="" />
	<meta name="author" content="" />

	<link rel="icon" href="<?php echo $relative_path; ?>images/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" type="img/x-icon" href="<?php echo $relative_path; ?>images/favicon.ico">

	<link rel="alternate" href="#" hreflang="x-default" />

	<?php
	include('includes/css.php');
	?>

</head>

<body>
	<div class="main">

		<!-- Header -->
		<?php
		include('includes/header.php');
		?>

		<!-- Main Block -->
		<div class="main-content">
			<div class="aboutus">

				<div class="block-1 pdB-45">

					<div class="slider-block">
						<ul class="bjqs">
							<li>
								<div class="image-block">
									<img src="<?php echo $relative_path; ?>images/banners/banner-5/raw-banner.jpg" alt="" />
								</div>
							</li>
							<li>
								<div class="image-block">
									<img src="<?php echo $relative_path; ?>images/banners/banner-5/raw-banner.jpg" alt="" />
								</div>
							</li>
							<li>
								<div class="image-block">
									<img src="<?php echo $relative_path; ?>images/banners/banner-5/raw-banner.jpg" alt="" />
								</div>
							</li>
						</ul>
					</div>

				</div>

				<div class="block-2 pdB-45">
					<div class="container">
						<div class="inner-container">
							<div class="head-block pdB-35">
								<h1 class="h2">Welcome to Shah Impex</h1>
							</div>
							<div class="text-block">
								<p class="p3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>

		<!-- Footer -->
		<?php
		include('includes/footer.php');
		?>

	</div>

	<?php
	include('includes/js.php');
	?>

	<script>
		/*= Page Variables =*/
		/* ========== */

		/*= Page Specific Functions that loads on DOC LOAD AND ON WINDOW RESIZE =*/
		function page_load_functions() {}

		/*= Page Specific Functions that loads on DOC READY AND ON WINDOW RESIZE =*/
		function page_ready_functions() {}

		/*= Page Specific Functions that loads ONLY on DOC LOAD =*/
		$(window).load(function() {
		});

		/*= Page Specific Functions that loads ONLY on DOC READY =*/
		$(function() {});
	</script>

</body>

</html>