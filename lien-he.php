<!doctype html>
<html lang="en-US">
	<?php require_once('head.php'); ?>
	<body>
		<?php require_once('nav-mobile.php'); ?>
		<div id="wrapper" class="wide-wrap">
			<div class="offcanvas-overlay"></div>
			<?php require_once('header.php'); ?>
			<div class="content-container no-padding mobile-header">
				<div class="heading-container heading-resize heading-no-button">
					<img src="images/slideshow/2.jpg" width="100%">
				</div>
				<div class="container" style="margin-top: 50px">
					<div class="row">
						<div class="col-md-12 main-wrap">
							<div class="main-content">
								<div class="container">
									<div class="row">
										<div class="col-sm-8">
											<div class="row contact-form-wrapper">
												<div class="col-sm-12">
													<div class="title">
														<h2>GET IN TOUCH</h2>
													</div>
													<form>
														<div class="row">
															<div class="col-sm-6">
																<div>Your Name (required)<br />
															    	<p class="form-control-wrap your-name">
															    		<input type="text" name="your-name" value="" size="40" class="form-control text validates-as-required" />
															    	</p>
															    </div>
															</div>
															<div class="col-sm-6">
																<div>Your Email (required)<br />
														    		<p class="form-control-wrap your-email">
														    			<input type="email" name="your-email" value="" size="40" class="form-control text email validates-as-required validates-as-email" />
														    		</p>
														    	</div>
															</div>
															<div class="col-sm-12">
																<div>Your Message<br />
														    		<p class="form-control-wrap your-message">	<textarea name="your-message" cols="40" rows	="10" class="form-control textarea"></textarea>
														    		</p>
														    	</div>
															</div>
														</div>
														<input type="submit" value="Send" class="form-control submit" />
													</form>
												</div>
											</div>
										</div>
										<div class="col-sm-4">
											<div class="row contact-info">
												<div class="col-sm-12">
													<div class="title">
														<h4>NEED SUPPORT</h4>
													</div>
													<div class="separator content_element separator_align_center sep_width_100 sep_pos_align_center separator_no_text">
														<span class="sep_holder sep_holder_l">
															<span class="sep_line"></span>
														</span>
														<span class="sep_holder sep_holder_r">
															<span class="sep_line"></span>
														</span>
													</div>
													<div class="content_element">
														<div class="support-icon">
															<i class="fa fa-map-marker"></i>
															69 New York,CA, 1239 USA
														</div>
														<div class="support-icon">
															<i class="fa fa-phone"></i>
															(012) 1234 7824
														</div>
														<div class="support-icon">
															<i class="fa fa-envelope-o"></i>
															<a href="mailto:email@domain.com">
																email@domain.com
															</a>
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
			<?php require_once('footer.php'); ?>
		</div>
		<?php require_once('script.php'); ?>
</body>
</html>