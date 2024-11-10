<?php

session_start();
include('libraries/config.php');

$navigation = "index";

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
			<div class="home">

				<!-- Hero Start -->
				<div class="block-1 pdB-45">
					<div class="container">
						<div class="inner-container">
							<div class="image-block-1">
								<img class="img-1" src="<?php echo $relative_path; ?>images/hero-bg.png" alt="">
								<div class="content-block">
									<div class="inner-block">
										<div class="inner">
											<div class="block-1">
												<div class="head-block-1">
													<h1 class="h2">
														Shaping a <br>Better<br>tomorrow,<br><span>Today!</span>
													</h1>
												</div>
												<div class="text-block-1 pd-24">
													<p class="p5">
														At Phool Versha, we're making a difference now. From providing
														essential medical care in remote villages to empowering
														children with education and supporting communities in need,
														our programs touch lives across India
													</p>
												</div>
												<div class="button-block pdB-24">
													<div class="btn-1">
														<a href="#">
															<p class="p5">
																Support Us
															</p>
														</a>
													</div>
													<div class="btn-2">
														<a href="#">
															<p class="p5">
																Join Us
															</p>
														</a>
													</div>
												</div>
												<div class="text-block-2">
													<p class="p5">
														In photo<br>Rishi, Saakshi and Girija from<br>xyz aashram
													</p>
												</div>
											</div>
											<div class="block-2">
												<img src="<?php echo $relative_path; ?>images/hero-bg-2.png" alt="" class="img-2">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Hero End -->

				<!-- Understanding Start -->
				<div class="block-2 pd-35">
					<img src="<?php echo $relative_path; ?>images/icons/flower-2.png" alt="" class="img-1">
					<div class="container">
						<div class="inner-container">
							<div class="inner">
								<div class="inner-block">
									<div class="head-block-1">
										<h2 class="h2">
											Understanding the <span>Challenge</span>
										</h2>
									</div>
									<div class="text-block-1 pd-24">
										<p class="p5">
											At Phool Versha, we're making a difference now. From providing essential
											medical care in remote villages to empowering children with education and
											supporting communities in need, our programs touch lives across India
										</p>
									</div>
									<div class="con-block-1 pdT-14">
										<div class="block">
											<div class="head-block-2 pdB-24">
												<h2 class="h2">
													600 m+
												</h2>
											</div>
											<div class="text-block-2">
												<p class="p5">
													in India without healthcare services.
												</p>
											</div>
										</div>
										<div class="block">
											<div class="head-block-2 pdB-24">
												<h2 class="h2">
													6 m+
												</h2>
											</div>
											<div class="text-block-2">
												<p class="p5">
													children in India are out of school.
												</p>
											</div>
										</div>
										<div class="block">
											<div class="head-block-2 pdB-24">
												<h2 class="h2">
													600 m+
												</h2>
											</div>
											<div class="text-block-2">
												<p class="p5">
													rural households in India without sanitation.
												</p>
											</div>
										</div>
										<div class="block">
											<div class="head-block-2 pdB-24">
												<h2 class="h2">
													600 m+
												</h2>
											</div>
											<div class="text-block-2">
												<p class="p5">
													with disabilities, children who lack adequate support.
												</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Understanding End -->

				<!-- About Us Start -->
				<div class="block-3 pdT-35 pdB-45">
					<img src="<?php echo $relative_path; ?>images/icons/flower-2.png" alt="" class="img-1">
					<div class="container">
						<div class="inner-container">
							<div class="inner">
								<div class="inner-block">
									<div class="tag-block">
										<div class="text-block-1 pdB-24">
											<p class="p5">
												About Us
											</p>
										</div>
										<div class="head-block-1 pdB-14">
											<h2 class="h2">
												A Humanitarian NGO Committed to<br>Providing Healthcare, Education,<br>and Support for Marginalized<br>Communities
											</h2>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- About Us End -->

				<!-- phool banner Start -->
				<div class="block-4 pdT-45">
					<img src="<?php echo $relative_path; ?>images/about-img.jpg" alt="" class="img-1">
					<img src="<?php echo $relative_path; ?>images/icons/flower-1.png" alt="" class="img-2">
					<img src="<?php echo $relative_path; ?>images/icons/flower-1.png" alt="" class="img-3">
					<img src="<?php echo $relative_path; ?>images/icons/flower-1.png" alt="" class="img-4">
					<img src="<?php echo $relative_path; ?>images/icons/flower-1.png" alt="" class="img-5">
					<img src="<?php echo $relative_path; ?>images/icons/flower-1.png" alt="" class="img-6">
					<img src="<?php echo $relative_path; ?>images/icons/flower-1.png" alt="" class="img-7">

					<img src="<?php echo $relative_path; ?>images/icons/flower-2.png" alt="" class="img-11">
					<img src="<?php echo $relative_path; ?>images/icons/flower-2.png" alt="" class="img-12">
					<img src="<?php echo $relative_path; ?>images/icons/flower-2.png" alt="" class="img-13">
					<img src="<?php echo $relative_path; ?>images/icons/flower-2.png" alt="" class="img-14">
					<img src="<?php echo $relative_path; ?>images/icons/flower-2.png" alt="" class="img-15">
					<img src="<?php echo $relative_path; ?>images/icons/flower-2.png" alt="" class="img-16">
					<img src="<?php echo $relative_path; ?>images/icons/flower-2.png" alt="" class="img-17">

					<img src="<?php echo $relative_path; ?>images/icons/flower-3.png" alt="" class="img-21">

				</div>
				<!-- phool banner End -->

				<!-- Solutions Start -->
				<div class="block-41">
					<div class="container">
						<div class="inner-container">
							<div class="inner">
								<div class="inner-block pdB-24">
									<div class="block-con">
										<div class="block-con-1">
											<div class="tag-block">
												<div class="text-block-1 pdB-24">
													<p class="p5">
														Programs
													</p>
												</div>
												<div class="head-block-1 pdB-14">
													<h2 class="h2">
														Solutions for <span>Pressing</span> <br>Challenges
													</h2>
												</div>
											</div>
										</div>
										<div class="block-con-2">
											<div class="text-block-2 pd-24">
												<p class="p5">
													At Phool Versha, we're making a difference now. From providing
													essential medical care in remote villages to empowering children
													with education and supporting communities in need, our programs
													touch lives across India
												</p>
											</div>
										</div>
									</div>
								</div>
								<div class="inner-block-1 inner-block">
									<div class="block-con">
										<div class="block">
											<div class="block-0">
												<div class="image-block-1 pdB-24">
													<img src="<?php echo $relative_path; ?>images/icons/medical.png" alt="">
												</div>
												<div class="text-block-3 pdB-14">
													<p class="p4">
														Medical Help
													</p>
												</div>
												<div class="text-block-4">
													<p class="p5">
														At Phool Versha, we're making a difference now. From 
														providing essential medical care in remote villages to empowering
													</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Solutions End -->

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
		$(window).load(function() {});

		/*= Page Specific Functions that loads ONLY on DOC READY =*/
		$(function() {});

		/*= User specified functions =*/
		// Slider Function
		function call_slider() {}
	</script>

</body>

</html>