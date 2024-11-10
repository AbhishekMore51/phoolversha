<?php

session_start();
include('libraries/config.php');

$navigation = "contactus";

/*= Set Relative Path if not default =*/
//$relative_path = "../";

$_SESSION[sys_prefix.'_contact'] = 'asdasdasdasdasda1asds';

?>
<!DOCTYPE html>
<html lang="en-IN">
	<head>
		<title>Contact Us</title>
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
					if(isset($_SESSION[sys_prefix.'_ack_msg']))
					{
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
										if(isset($_SESSION[sys_prefix.'_ack_msg']) && $_SESSION[sys_prefix.'_ack_msg'] == true)
											echo "Thank you for contacting us!";
										else
											echo "Error sending query!";
										?>
									</p>
									<p class="p2">
										<?php
										if(isset($_SESSION[sys_prefix.'_ack_msg']) && $_SESSION[sys_prefix.'_ack_msg'] == true)
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
					}
					else
					{
					?>
					<div class="block-1 pdT-45">
						<div class="container">
							<div class="inner-container clearfix">
								<div class="head-block-1">
									<h1 class="h1">Contact Us</h1>
								</div>
							</div>
						</div>
					</div>
					
					<div class="block-2 pdT-24 pdB-45">
						<div class="container">
							<div class="inner-container">
								<div class="text-block-1">
									<p class="p3">If you are looking for an up-to-date collection in formal / smart casual shirts and denims, get in touch with us. <br />We are just few clicks or a phone call away! Contact us and our team would be happy to assist you.</p>
								</div>
							</div>
						</div>
					</div>
					
					<div class="block-3 pdT-24">
						<div class="container">
							<div class="inner-container">
								
								<div class="block-32 pdB-45">
									<div class="inner">
										<div class="head-block-1 pdB-35">
											<h2 class="h4">Contact Details</h2>
										</div>
										<div class="block mail last pdB-24">
											<div class="icon-block pdB-24">
												<i class="fas fa-map-marker-alt"></i>
											</div>
											<div class="detail-block pdB-24">
												<div class="text-block">
													<p class="p3">Address Line 1, <br />Address Line 2, <br />Address Line 3, <br />Address Line 4, Mumbai - 400 060, India</p>
												</div>
												<div class="link-block">
													<a class="p3" href="#" target="_blank">Get Direction</a>
												</div>
											</div>
										</div>
										<div class="block mail pdB-24">
											<div class="icon-block pdB-24">
												<i class="far fa-envelope"></i>
											</div>
											<div class="detail-block pdB-24">
												<a href="mailto:info@xyz.com" target="_top">
													<div class="text-block">
														<p class="p3">info@xyz.com</p>
													</div>
												</a>
											</div>
										</div>
										
										<div class="block pdB-24">
											<div class="icon-block pdB-24">
												<i class="fas fa-mobile-alt"></i>
											</div>
											<div class="detail-block pdB-24">
												<a href="tel:+919898989898" target="_blank">
													<div class="text-block">
														<p class="p3">+91 98989 89898</p>
													</div>
												</a>
											</div>
										</div>
										<div class="block pdB-24">
											<div class="icon-block pdB-24">
												<i class="fab fa-whatsapp"></i>
											</div>
											<div class="detail-block pdB-24">
												<a href="tel:+919898989898" target="_blank">
													<div class="text-block">
														<p class="p3">+91 98989 89898</p>
													</div>
												</a>
											</div>
										</div>
									</div>
								</div>
								
								<div class="block-31 pdB-45">
									<div class="inner">
										<div class="head-block-1 pdB-35">
											<h2 class="h4">Send Inquiry</h2>
										</div>
										<form name="QueryForm" id="QueryForm" method="POST" action="ct-query-action" onSubmit="return false; /*validate('QueryForm')*/;">
											<div class="form-block clearfix">
												<div class="block-41">
													<div class="block pdB-14">
														<div class="text-block-1 pdB-4">
															<p class="p3">Name:</p>
														</div>
														<div class="input-block">
															<input type="text" name="name" class="p3 valid empty" placeholder="Enter Name" />
														</div>
													</div>
													<div class="block pdB-14">
														<div class="text-block-1 pdB-4">
															<p class="p3">Phone No.:</p>
														</div>
														<div class="input-block">
															<input type="text" name="contactno" class="p3 valid empty number" placeholder="Enter Phone No." />
														</div>
													</div>
													<div class="block pdB-14">
														<div class="text-block-1 pdB-4">
															<p class="p3">Email Id.:</p>
														</div>
														<div class="input-block">
															<input type="text" name="email" class="p3 valid empty email" placeholder="Enter Email Id." />
														</div>
													</div>
												</div>
												<div class="block-41">
													<div class="block pdB-14">
														<div class="text-block-1 pdB-4">
															<p class="p3">Message / Query:</p>
														</div>
														<div class="input-block">
															<textarea rows="3" name="query" class="p3 valid empty" placeholder="Enter Message / Query" ></textarea>
														</div>
													</div>
												</div>
												<div class="clearfix"></div>
												<div class="btn-block pdT-24">
													<div class="input-block">
														<input type="submit" name="submit" class="p3" id="submit" value="Submit" />
													</div>
												</div>
											</div>
										</form>
									</div>
								</div>
									
							</div>
						</div>
					</div>
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
			function page_load_functions()
			{
			}
			
			/*= Page Specific Functions that loads on DOC READY AND ON WINDOW RESIZE =*/
			function page_ready_functions()
			{}
			
			/*= Page Specific Functions that loads ONLY on DOC LOAD =*/
			$(window).load(function(){
				<?php
				if(isset($_SESSION[sys_prefix.'_ack_msg']) && $_SESSION[sys_prefix.'_ack_msg'] == true)
				{
				?>
					setTimeout(function(){
						location.reload();
					}, 5000);
				<?php
				}
				unset($_SESSION[sys_prefix.'_ack_msg']);
				?>
			});
			
			/*= Page Specific Functions that loads ONLY on DOC READY =*/
			$(function(){
			});
			
			/*= User specified functions =*/
			
		</script>
		
	</body>
</html>