<?php
$index = $aboutus = $companies = $products = $gallery = $contactus = "";
$$navigation = "active";
?>

<!--
<div class="loader-overlay">
	<div class="image-block">
		<img src="<?php echo $relative_path; ?>images/loading.gif" alt="Loading..." />
	</div>
	<div class="text-block pdB-7">
		<p>Loading.. Please wait!</p>
	</div>
	<div class="text-block-1">
		<p></p>
	</div>
</div>
-->

<!-- Welcome Block -->

<!--
<div class="welcome-overlay">
	<div class="inner">
		<div class="animate-logo-block block-1">
			<img src="<?php echo $relative_path; ?>images/dnl-group-welcome.png" alt="" />
		</div>
		<div class="animate-logo-block block-2">
			<div class="text-block">
				<p class="h4"><span class="blue">Oils</span> &nbsp;•&nbsp; <span class="red">Properties</span> &nbsp;•&nbsp; <span class="green">Agricultural Produce</span></p>
			</div>
		</div>
	</div>
</div>
-->

<!-- Main Header -->
<div class="header-block">
	<div class="header-block-1 pd-35">

		<!-- Navigation Block -->
		<div class="container">
			<div class="inner-container">
				<div class="navigation-block">
					<!--<div class="header-block-2-inner clearfix">-->
					<div class="inner">
						<!--
						<div class="close-button">
							<div class="icon-block">
								<i class="fas fa-times-circle"></i>
							</div>
						</div>
						-->
						<div class="logo-block">
							<a class="clearfix" href="<?php echo $relative_path; ?>home">
								<!-- <div class="image-block">
									<img src="<?php echo $relative_path; ?>images/dummy-logo.png" alt="Compnay Name" />
								</div> -->
								<div class="text-block-1">
									<p class="p1">
										phool<br>versha<br>foundation
									</p>
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
							<li class="<?php echo $aboutus; ?>">
								<a href="<?php echo $relative_path; ?>about-us">
									<p class="p5">Programs</p>
								</a>
							</li>
							<li class="<?php echo $products; ?>">
								<a href="<?php echo $relative_path; ?>products">
									<p class="p5">Partners</p>
								</a>
							</li>
							<li class="<?php echo $gallery; ?>">
								<a href="<?php echo $relative_path; ?>gallery">
									<p class="p5">About</p>
								</a>
							</li>
							<!-- <li class="<?php echo $contactus; ?> last">
								<a class="" href="<?php echo $relative_path; ?>contact-us">
									<p class="p5">Contact Us</p>
								</a>
							</li> -->
						</ul>
						<div class="button-block">
							<div class="btn-1">
								<a href="#">
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
					</div>
				</div>
			</div>
		</div>

	</div>
</div>