<?php
$index = $aboutus = $program = $team = $gallery = $contactus = "";
$$navigation = "active";
?>
<div class="welcome-overlay">
	<img src="<?php echo $relative_path; ?>images/mobile-logo.png" alt="Welcome Image">
</div>
<div class="loader-overlay">
	<div class="image-block">
		<div class="loader">
			<div class="loader-inner">
				<div class="loader-line-wrap">
					<div class="loader-line"></div>
				</div>
				<div class="loader-line-wrap">
					<div class="loader-line"></div>
				</div>
				<div class="loader-line-wrap">
					<div class="loader-line"></div>
				</div>
				<div class="loader-line-wrap">
					<div class="loader-line"></div>
				</div>
				<div class="loader-line-wrap">
					<div class="loader-line"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="text-block pdB-7">
		<p>Loading.. Please wait!</p>
	</div>
	<div class="text-block-1">
		<p></p>
	</div>
</div>

<div class="floating-up" id="backToTop">
	<div class="container">
		<div class="inner-container">
			<div class="inner">
				<a href="#" class="p5">
					<i class="fas fa-arrow-up p5"></i>
				</a>
			</div>
		</div>
	</div>
</div>

<!-- Main Header -->
<div class="header-block">
	<div class="header-block-1 pd-35">

		<!-- Navigation Block -->
		<div class="container">
			<div class="inner-container">
				<div class="navigation-block">
					<!--<div class="header-block-2-inner clearfix">-->
					<div class="inner">
						<div class="close-button">
							<div class="icon-block">
								<i class="fas fa-times"></i>
							</div>
						</div>
						<div class="logo-block">
							<a class="clearfix" href="<?php echo $relative_path; ?>home">
								<div class="text-block-1">
									<p class="p1">
										phool<br>versha<br>foundation
									</p>
								</div>
								<div class="image-block-0">
									<img src="<?php echo $relative_path; ?>images/mobile-logo.png" alt="">
								</div>
							</a>
						</div>
						<ul class="navigation clearfix">
							<!--
							<li class="nav-header clearfix">
								<p class="p1 pd-7">Menu</p>
							</li>
							-->
							<li class="<?php echo $index; ?> first">
								<a href="<?php echo $relative_path; ?>home">
									<p class="p5">Home</p>
								</a>
							</li>
							<li class="<?php echo $program; ?>">
								<a href="<?php echo $relative_path; ?>program">
									<p class="p5">Programs</p>
								</a>
							</li>
							<li class="<?php echo $team; ?>">
								<a href="<?php echo $relative_path; ?>team">
									<p class="p5">Team</p>
								</a>
							</li>
							<li class="<?php echo $aboutus; ?>">
								<a href="<?php echo $relative_path; ?>aboutus">
									<p class="p5">About</p>
								</a>
							</li>
						</ul>
						<div class="button-block">
							<div class="<?php echo $contactus; ?> btn-1">
								<a href="<?php echo $relative_path; ?>contact-us">
									<p class="p5">
										Join Us
									</p>
								</a>
							</div>
							<div class="btn-2">
								<a href="#">
									<p class="p5">
										Support Us
									</p>
								</a>
							</div>
						</div>

						<!--  -->
						<div class="mobile-bg">
							<img src="<?php echo $relative_path; ?>images/mobile-bg.png" alt="">
						</div>
					</div>
				</div>
				<div class="more-block">
					<div class="nav-button-block">
						<div class="icon-block">
							<i class="fas fa-bars nav-bars"></i>
						</div>
					</div>

					<div class="navigation-block-2">
						<div class="image-block-2">
							<img src="<?php echo $relative_path; ?>images/mobile-logo.png" alt="">
						</div>
					</div>
					<div class="navigation-block-3">
						<div class="image-block-3">
							<img class="img-1" src="<?php echo $relative_path; ?>images/icons/flower-1.png" alt="">
							<img class="img-2" src="<?php echo $relative_path; ?>images/icons/flower-2.png" alt="">
							<img class="img-3" src="<?php echo $relative_path; ?>images/icons/flower-2.png" alt="">
							<img class="img-4" src="<?php echo $relative_path; ?>images/icons/flower-1.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>