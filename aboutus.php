<?php

session_start();
include('libraries/config.php');

$navigation = "aboutus";

/*= Set Relative Path if not default =*/
//$relative_path = "../";

?>

<!DOCTYPE html>
<html lang="en-IN">

<head>
	<title>About | Phool Versha Foundation</title>
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

				<!-- phool banner Start -->
				<div class="block-1 pdT-45">
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

				</div>
				<!-- phool banner End -->

				<!-- Activity Start -->
				<div class="block-2 mgB-45">
					<div class="container">
						<div class="inner-container">
							<div class="inner">
								<div class="image-block-1">
									<div class="container">
										<div class="inner-container">
											<div class="inner">
												<img src="<?php echo $relative_path; ?>images/about-bg.jpg" alt="" class="img-1">
												<div class="con-block">
													<div class="container">
														<div class="inner-container">
															<div class="inner">
																<div class="head-block-1">
																	<h2 class="h2">
																		A Humanitarian NGO Committed to<br>
																		Providing Healthcare, Education,<br>
																		and Support for Marginalized<br>
																		Communities
																	</h2>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Activity End -->

				<!-- Supporter Start -->
				<div class="block-3 mgB-45">
					<div class="image-block-0">
						<img class="img-1" src="<?php echo $relative_path; ?>images/icons/flower-3.png" alt="">
					</div>
					<div class="block-31">
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
					<div class="block-32 mgT-45">
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

				<!-- Partnered start -->
				<div class="block-4 pd-45">
					<div class="container">
						<div class="inner-container">
							<div class="inner">
								<div class="inner-block">
									<div class="container">
										<div class="inner-container">
											<div class="inner">
												<div class="block-41">
													<div class="head-block-1 pdB-24">
														<h2 class="h2">
															partnered with<br>
															the top<br>
															Organisations
														</h2>
													</div>
													<div class="text-block-1">
														<p class="p5">
															The only SaaS business platform that combines
															CRM, marketing automation & commerce.
														</p>
													</div>
												</div>
												<div class="block-42">
													<div class="block-421">
														<div class="image-block-1">
															<img src="<?php echo $relative_path; ?>images/partner/partner-1.jpg" alt="">
														</div>

														<div class="image-block-1">
															<img src="<?php echo $relative_path; ?>images/partner/partner-2.jpg" alt="">
														</div>

														<div class="image-block-1">
															<img src="<?php echo $relative_path; ?>images/partner/partner-3.jpg" alt="">
														</div>
														<div class="image-block-1">
															<img src="<?php echo $relative_path; ?>images/partner/partner-4.jpg" alt="">
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Partnered end -->

				<!-- Video Activity Start -->
				<div class="block-5 mgB-45">
					<div class="container">
						<div class="inner-container">
							<div class="inner">
								<div class="inner-block">
									<div class="block-con mgB-45">
										<div class="block-con-1">
											<div class="tag-block">
												<div class="text-block-1 pdB-24">
													<p class="p5">
														Activity
													</p>
												</div>
												<div class="head-block-1 pdB-14">
													<h2 class="h2">
														Feature card for<br>actvity video
													</h2>
												</div>
											</div>
										</div>
										<div class="block-con-2">
											<div class="text-block-2 pd-24">
												<p class="p5">
													At Phool Versha, we're making a difference now. From providing
													essential medical care in remote villages to e
												</p>
											</div>
										</div>
									</div>
									<div class="video-block">
										<div class="image-block-1">
											<img src="<?php echo $relative_path; ?>images/video-img.jpg" alt="">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Video Activity End -->

				<!-- Gallery Start -->
				<div class="block-6 mgT-35">
					<div class="container">
						<div class="inner-container">
							<div class="inner">
								<div class="inner-block">
									<div class="con-block-1">
										<div class="slider gallery popup-gallery">
											<div class="block">
												<a href="<?php echo $relative_path; ?>images/gallery/img-11.jpg">
													<img src="<?php echo $relative_path; ?>images/gallery/img-1.jpg" alt="">
												</a>
											</div>
											<div class="block">
												<a href="<?php echo $relative_path; ?>images/gallery/img-22.jpg">
													<img src="<?php echo $relative_path; ?>images/gallery/img-2.jpg" alt="">
												</a>
											</div>
											<div class="block">
												<a href="<?php echo $relative_path; ?>images/gallery/img-33.jpg">
													<img src="<?php echo $relative_path; ?>images/gallery/img-3.jpg" alt="">
												</a>
											</div>
											<div class="block">
												<a href="<?php echo $relative_path; ?>images/gallery/img-11.jpg">
													<img src="<?php echo $relative_path; ?>images/gallery/img-1.jpg" alt="">
												</a>
											</div>
											<div class="block">
												<a href="<?php echo $relative_path; ?>images/gallery/img-22.jpg">
													<img src="<?php echo $relative_path; ?>images/gallery/img-2.jpg" alt="">
												</a>
											</div>
											<div class="block">
												<a href="<?php echo $relative_path; ?>images/gallery/img-33.jpg">
													<img src="<?php echo $relative_path; ?>images/gallery/img-3.jpg" alt="">
												</a>
											</div>
										</div>
										<div class="slider gallery2 popup-gallery2">
											<div class="block">
												<a href="<?php echo $relative_path; ?>images/gallery/img-33.jpg">
													<img src="<?php echo $relative_path; ?>images/gallery/img-3.jpg" alt="">
												</a>
											</div>
											<div class="block">
												<a href="<?php echo $relative_path; ?>images/gallery/img-22.jpg">
													<img src="<?php echo $relative_path; ?>images/gallery/img-2.jpg" alt="">
												</a>
											</div>
											<div class="block">
												<a href="<?php echo $relative_path; ?>images/gallery/img-11.jpg">
													<img src="<?php echo $relative_path; ?>images/gallery/img-1.jpg" alt="">
												</a>
											</div>
											<div class="block">
												<a href="<?php echo $relative_path; ?>images/gallery/img-33.jpg">
													<img src="<?php echo $relative_path; ?>images/gallery/img-3.jpg" alt="">
												</a>
											</div>
											<div class="block">
												<a href="<?php echo $relative_path; ?>images/gallery/img-22.jpg">
													<img src="<?php echo $relative_path; ?>images/gallery/img-2.jpg" alt="">
												</a>
											</div>
											<div class="block">
												<a href="<?php echo $relative_path; ?>images/gallery/img-11.jpg">
													<img src="<?php echo $relative_path; ?>images/gallery/img-1.jpg" alt="">
												</a>
											</div>
										</div>
									</div>
									<div class="con-block-2">
										<div class="tag-block">
											<div class="head-block-1">
												<h2 class="h2">
													Make a Difference Today,<br>Donate Now to Support Our<br>Cause
												</h2>
											</div>
											<div class="text-block-2 pd-14">
												<p class="p5">
													At Phool Versha, we're making a difference now. From
													providing essential medical care in remote <br>villages to empowering children
													with education and supporting communities in need, our programs <br>touch lives across India
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
				</div>
				<!-- Gallery End -->

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
		$(function() {
			$('.supporter').slick({
				dots: true,
				infinite: true,
				slidesToShow: 4,
				slidesToScroll: 4,
				autoplay: true,
				autoplaySpeed: 4000,
			});

			// Gallery Slider
			$('.gallery').slick({
				dots: false,
				arrow: false,
				infinite: true,
				slidesToShow: 5,
				slidesToScroll: 1,
				autoplay: true,
				autoplaySpeed: 0,
				speed: 4000,
				cssEase: 'linear',
				pauseOnHover: true
			});

			//Gallery Popup
			$('.popup-gallery').magnificPopup({
				delegate: 'a',
				type: 'image',
				tLoading: 'Loading image #%curr%...',
				mainClass: 'mfp-img-mobile',
				gallery: {
					enabled: true,
					navigateByImgClick: true,
					preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
				},
				image: {
					tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
					titleSrc: function(item) {
						return item.el.attr('title') + ' by Marsel Van Oosten';
					}
				}
			});

			// Gallery Slider
			$('.gallery2').slick({
				dots: false,
				arrow: false,
				rtl: true,
				infinite: true,
				slidesToShow: 5,
				slidesToScroll: 1,
				autoplay: true,
				autoplaySpeed: 0,
				speed: 4000,
				cssEase: 'linear',
				pauseOnHover: true
			});

			//Gallery Popup
			$('.popup-gallery2').magnificPopup({
				delegate: 'a',
				type: 'image',
				tLoading: 'Loading image #%curr%...',
				mainClass: 'mfp-img-mobile',
				gallery: {
					enabled: true,
					navigateByImgClick: true,
					preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
				},
				image: {
					tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
					titleSrc: function(item) {
						return item.el.attr('title') + ' by Marsel Van Oosten';
					}
				}
			});
		});
	</script>

</body>

</html>