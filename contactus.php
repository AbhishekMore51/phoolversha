<?php

session_start();
include('libraries/config.php');

$navigation = "contactus";

/*= Set Relative Path if not default =*/
//$relative_path = "../";

$_SESSION[sys_prefix . '_contact'] = 'asdasdasdasdasda1asds';

?>
<!DOCTYPE html>
<html lang="en-IN">

<head>
	<title>Contact Us | Phool Versha Foundation</title>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<!--<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />-->

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
			<div class="contactus">
				<?php
				if (isset($_SESSION[sys_prefix . '_ack_msg'])) {
				?>
					<div class="block-1 pd-45 mgB-45">
						<div class="container">
							<div class="inner-container clearfix">
								<div class="head-block-1 pdT-45 pdB-24">
									<h1 class="h1">Acknowledgement</h1>
								</div>
								<div class="divider-block pdB-45">
									<span></span>
								</div>
							</div>
						</div>
					</div>

					<div class="block-2 pdT-24 pdB-35">
						<div class="container">
							<div class="inner-container">
								<div class="text-block-1">
									<p class="p2 pdB-7">
										<?php
										if (isset($_SESSION[sys_prefix . '_ack_msg']) && $_SESSION[sys_prefix . '_ack_msg'] == true)
											echo "Thank you for contacting us!";
										else
											echo "Error sending query!";
										?>
									</p>
									<p class="p2">
										<?php
										if (isset($_SESSION[sys_prefix . '_ack_msg']) && $_SESSION[sys_prefix . '_ack_msg'] == true)
											echo "Our team will revert soon.";
										else
											echo "Please try again..";
										?>
									</p>
								</div>
							</div>
						</div>
					</div>
				<?php
				} else {
				?>
					<div class="block-1">
						<div class="container">
							<div class="inner-container">
								<div class="inner">
									<div class="inner-content">
										<div class="block-con mgB-45">
											<div class="block-con-1">
												<div class="tag-block">
													<div class="head-block-1 pdB-14">
														<h2 class="h2">
															Change someone’s life<br><span>today!</span>
														</h2>
													</div>
												</div>
											</div>
											<div class="block-con-2">
												<div class="text-block-2">
													<p class="p5">
														At Phool Versha, we're making a difference now. From providing
														essential medical care in remote villages to e
													</p>
												</div>
											</div>
										</div>
										<div class="video-block pdB-35">
											<div class="image-block-1">
												<img src="<?php echo $relative_path; ?>images/contact.jpg" alt="">
											</div>
										</div>

										<div class="block-con-3 inner">
											<img src="<?php echo $relative_path; ?>images/icons/flower-2.png" alt="" class="img-0">
											<div class="block pdB-45">
												<div class="block-0">
													<div class="text-block-3 pdB-14">
														<p class="p4">
															donation details
														</p>
													</div>
													<div class="text-block-4">
														<p class="p5">
															At Phool Versha, we're making a difference now.
															From providing essential medical care in remote
															villages to empowering
														</p>
													</div>
												</div>
											</div>

											<div class="block pdB-45">
												<div class="block-0">
													<div class="text-block-3 pdB-14">
														<p class="p4">
															donation details
														</p>
													</div>
													<div class="text-block-4">
														<p class="p5">
															At Phool Versha, we're making a difference now.
															From providing essential medical care in remote
															villages to empowering
														</p>
													</div>
												</div>
											</div>
											<div class="block pdB-45">
												<div class="block-0">
													<div class="text-block-3 pdB-14">
														<p class="p4">
															donation details
														</p>
													</div>
													<div class="text-block-4">
														<p class="p5">
															At Phool Versha, we're making a difference now.
															From providing essential medical care in remote
															villages to empowering
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

					<div class="block-2 pdB-45">
						<div class="container">
							<div class="inner-container">
								<div class="inner">
									<div class="inner-content">
										<div class="head-block-1">
											<h2 class="h2">
												Your donation, helps us<br>
												<span>solve problems</span>
											</h2>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="block-3">
						<div class="slider-block">
							<ul class="slider-center">
								<li class="slick-li">
									<div class="block">
										<div class="block-0">
											<div class="image-block-1 pdB-24">
												<img src="<?php echo $relative_path; ?>images/icons/disabled.png" alt="">
											</div>
											<div class="text-block-3 pdB-14">
												<p class="p4">
													Disability Aid
												</p>
											</div>
											<div class="text-block-4">
												<p class="p5">
													At Phool Versha, we're making a difference now.
													From providing essential medical care in remote
													villages to empowering
												</p>
											</div>
										</div>
									</div>
								</li>

								<li class="slick-li">
									<div class="block">
										<div class="block-0">
											<div class="image-block-1 pdB-24">
												<img src="<?php echo $relative_path; ?>images/icons/RURAL.png" alt="">
											</div>
											<div class="text-block-3 pdB-14">
												<p class="p4">
													Rural aid
												</p>
											</div>
											<div class="text-block-4">
												<p class="p5">
													At Phool Versha, we're making a difference now.
													From providing essential medical care in remote
													villages to empowering
												</p>
											</div>
										</div>
									</div>
								</li>

								<li class="slick-li">
									<div class="block">
										<div class="block-0">
											<div class="image-block-1 pdB-24">
												<img src="<?php echo $relative_path; ?>images/icons/books.png" alt="">
											</div>
											<div class="text-block-3 pdB-14">
												<p class="p4">
													Education
												</p>
											</div>
											<div class="text-block-4">
												<p class="p5">
													At Phool Versha, we're making a difference now.
													From providing essential medical care in remote
													villages to empowering
												</p>
											</div>
										</div>
									</div>
								</li>

								<li class="slick-li">
									<div class="block">
										<div class="block-0">
											<div class="image-block-1 pdB-24">
												<img src="<?php echo $relative_path; ?>images/icons/CALAMITY.png" alt="">
											</div>
											<div class="text-block-3 pdB-14">
												<p class="p4">
													Calamity Support
												</p>
											</div>
											<div class="text-block-4">
												<p class="p5">
													At Phool Versha, we're making a difference now.
													From providing essential medical care in remote
													villages to empowering
												</p>
											</div>
										</div>
									</div>
								</li>

							</ul>
						</div>
					</div>

					<!-- Supporter Start -->
					<div class="block-4 mgB-45">
						<div class="block-41">
							<div class="container">
								<div class="inner-container">
									<div class="inner">
										<div class="inner-block">
											<div class="tag-block">
												<div class="text-block-1 pdB-24">
													<p class="p5">
														our Supporters
													</p>
												</div>
												<div class="head-block-1">
													<h2 class="h2">
														Champions of Our Cause, OUR STARS
													</h2>
												</div>
												<div class="text-block-2 pd-14">
													<p class="p5">
														At Phool Versha, we're making a difference now. From providing
														essential medical care in remote<br>villages to empowering children with education
													</p>
												</div>
												<div class="btn-block-1 mgT-24">
													<a href="#" class="p5">
														Support Us
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="block-42 mgT-45">
							<div class="slider supporter">
								<div class="block">
									<div class="image-block-1">
										<img src="<?php echo $relative_path; ?>images/support/support-1.jpg" alt="">
										<div class="con-block">
											<div class="text-block-1">
												<p class="p4">Donor name</p>
											</div>
										</div>
									</div>
								</div>

								<div class="block">
									<div class="image-block-1">
										<img src="<?php echo $relative_path; ?>images/support/support-1.jpg" alt="">
										<div class="con-block">
											<div class="text-block-1">
												<p class="p4">Donor name</p>
											</div>
										</div>
									</div>
								</div>

								<div class="block">
									<div class="image-block-1">
										<img src="<?php echo $relative_path; ?>images/support/support-1.jpg" alt="">
										<div class="con-block">
											<div class="text-block-1">
												<p class="p4">Donor name</p>
											</div>
										</div>
									</div>
								</div>

								<div class="block">
									<div class="image-block-1">
										<img src="<?php echo $relative_path; ?>images/support/support-1.jpg" alt="">
										<div class="con-block">
											<div class="text-block-1">
												<p class="p4">Donor name</p>
											</div>
										</div>
									</div>
								</div>

								<div class="block">
									<div class="image-block-1">
										<img src="<?php echo $relative_path; ?>images/support/support-1.jpg" alt="">
										<div class="con-block">
											<div class="text-block-1">
												<p class="p4">Donor name</p>
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
					<!-- Supporter End -->

					<!-- Form Block Start -->
					<div class="block-5">
						<div class="container">
							<div class="inner-container">
								<div class="inner">
									<div class="inner-content">
										<div class="form-block">
											<div class="block-51">
												<form name="QueryForm" id="QueryForm" method="POST" action="ct-query-action" onSubmit="return false; /*validate('QueryForm')*/;">
													<div class="form-block-0 clearfix">
														<div class="head-block-1 pdB-14">
															<h2 class="h2">
																Let’s connect
															</h2>
														</div>
														<div class="text-block-0 pdB-35">
															<p class="p5">
																Let's align our constellations! Reach out and let the magic
																of collaboration illuminate our skies.
															</p>
														</div>
														<div class="block-511">
															<div class="name-block">
																<div class="block pdB-14">
																	<div class="input-block">
																		<input type="text" name="name" class="p5 valid empty" placeholder="First Name" />
																	</div>
																</div>
																<div class="block pdB-14">
																	<div class="input-block">
																		<input type="text" name="lastname" class="p5 valid empty" placeholder="Last Name" />
																	</div>
																</div>
															</div>
															<div class="block pdB-14">
																<div class="input-block">
																	<input type="text" name="email" class="p5 valid empty email" placeholder="Enter Email Id." />
																</div>
															</div>
															<div class="block pdB-14">
																<div class="input-block">
																	<input type="text" name="contactno" class="p5 valid empty number" placeholder="Enter Phone No." />
																</div>
															</div>
														</div>
														<div class="block-41">
															<div class="block pdB-14">
																<div class="input-block">
																	<textarea rows="3" name="query" class="p5 valid empty" placeholder="Enter Message / Query"></textarea>
																</div>
															</div>
														</div>
														<div class="clearfix"></div>
														<div class="btn-block pdT-24">
															<div class="input-block">
																<input type="submit" name="submit" class="p5" id="submit" value="I am interested" />
															</div>
														</div>
													</div>
												</form>
											</div>
											<div class="block-52">
												<div class="image-block-1">
													<img src="<?php echo $relative_path; ?>images/contact-img.png" alt="">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Form Block End -->
				<?php
				}
				?>
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
			<?php
			if (isset($_SESSION[sys_prefix . '_ack_msg']) && $_SESSION[sys_prefix . '_ack_msg'] == true) {
			?>
				setTimeout(function() {
					location.reload();
				}, 5000);
			<?php
			}
			unset($_SESSION[sys_prefix . '_ack_msg']);
			?>
		});

		/*= Page Specific Functions that loads ONLY on DOC READY =*/
		$(function() {
			$('.slider-center').slick({
				dots: true,
				infinite: false,
				speed: 300,
				slidesToShow: 3,
				slidesToScroll: 1,
				autoplay: true,
				autoplaySpeed: 4000,
				responsive: [{
						breakpoint: 1024,
						settings: {
							slidesToShow: 3,
							slidesToScroll: 3,
							infinite: true,
							dots: true,
						},
					},
					{
						breakpoint: 600,
						settings: {
							slidesToShow: 2,
							slidesToScroll: 2,
						},
					},
					{
						breakpoint: 480,
						settings: {
							slidesToShow: 1,
							slidesToScroll: 1,
						},
					},
				],
			});

			$('.supporter').slick({
				dots: true,
				infinite: true,
				slidesToShow: 4,
				slidesToScroll: 4,
				autoplay: true,
				autoplaySpeed: 4000,
			});
		});

		/*= User specified functions =*/
	</script>

</body>

</html>