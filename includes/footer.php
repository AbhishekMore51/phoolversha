<div class="footer-block mgT-45">
	<div class="footer-main">
		<div class="footer-0 pdT-45">
			<div class="container">
				<div class="inner-container clearfix">
					<div class="block block-1 pdB-45">
						<div class="inner">
							<div class="text-block-1 pdB-7">
								<p class="p3"><span>Address</span></p>
							</div>
							<div class="text-block-2 pdT-14">
								<p class="p5 pdB-4">
									Lorem Ipsum is simply dummy text of the printing
									and typesetting industry. Lorem Ipsum has been the industry's
									standard dummy text ever since the 1500s, when an unknown printer
									took a galley of type and scrambled it to make a type specimen book.
									It has survived not only five centuries, but also the leap into
									electronic typesetting, remaining essentially unchanged.
								</p>
							</div>
						</div>
					</div>

					<div class="block block-3 pdB-45">
						<div class="inner clearfix">
							<div class="block-11">
								<div class="text-block-1 pdB-7">
									<p class="p3">Quick Links</p>
								</div>
								<div class="text-block-2 <?php echo $index; ?> pdT-14">
									<a href="<?php echo $relative_path; ?>home" class="p5 pdB-4">Home</a>
								</div>
								<div class="text-block-2 <?php echo $program; ?>">
									<a href="<?php echo $relative_path; ?>program" class="p5 pdB-4">Programs</a>
								</div>
								<div class="text-block-2 <?php echo $team; ?>">
									<a href="<?php echo $relative_path; ?>team" class="p5 pdB-4">Team</a>
								</div>
								<div class="text-block-2 <?php echo $aboutus; ?>">
									<a href="<?php echo $relative_path; ?>aboutus" class="p5 pdB-4">About Us</a>
								</div>
								<div class="text-block-2 <?php echo $contactus; ?>">
									<a href="<?php echo $relative_path; ?>contact-us" class="p5 pdB-4">Contact Us</a>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
		<!--
		-->
		<div class="footer-1 pd-7">
			<div class="container">
				<div class="inner-container clearfix">
					<div class="left-block">
						<div class="copyright">
							<img src="<?php echo $relative_path; ?>images/copyright.png" alt="" />
						</div>
						<p class="p5">2022 Company Name <span>- All Rights Reserved</span></p>
					</div>
					<div class="right-block">
						<!-- <p class="p5">Designed &#38; Developed By <a class="p5" href="https://www.demo.com" target="_blank">demo</a></p> -->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	/*= Script To Set System Session =*/
	var sys_session = false;
	<?php
	unset($_SESSION[sys_prefix . '_session']);
	if (isset($_SESSION[sys_prefix . '_session'])) {
		$current_time = new DateTime("now");
		$session_time = new DateTime($_SESSION[sys_prefix . '_session']);
		$time_diff = $current_time->diff($session_time);
		if ($time_diff->m < 60) {
	?>
			//alert(<?php echo $time_diff->m; ?>);
			sys_session = true;
	<?php
		}
	}
	$_SESSION[sys_prefix . '_session'] = date('y-m-d h:i:s');
	?>
</script>