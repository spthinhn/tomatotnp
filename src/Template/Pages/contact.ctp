<div class="content-container no-padding mobile-header">
	<div class="heading-container heading-resize heading-no-button mobile-margin-top">
		<img src="/images/lien-he-cover.jpg" width="100%">
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
											<h2><?= $company->body ?></h2>
										</div>
										<form>
											<div class="row">
												<div class="col-sm-12">
													<div>Họ tên<br />
												    	<p class="form-control-wrap your-name">
												    		<input type="text" name="your-name" value="" size="40" class="form-control text validates-as-required" />
												    	</p>
												    </div>
												</div>
												<div class="col-sm-12">
													<div>Email<br />
											    		<p class="form-control-wrap your-email">
											    			<input type="email" name="your-email" value="" size="40" class="form-control text email validates-as-required validates-as-email" />
											    		</p>
											    	</div>
												</div>
												<div class="col-sm-12">
													<div>Số điện thoại<br />
											    		<p class="form-control-wrap your-email">
											    			<input type="email" name="your-email" value="" size="40" class="form-control text email validates-as-required validates-as-email" />
											    		</p>
											    	</div>
												</div>
												<div class="col-sm-12">
													<div>Nội dung<br />
											    		<p class="form-control-wrap your-message">	<textarea name="your-message" cols="40" rows	="10" class="form-control textarea"></textarea>
											    		</p>
											    	</div>
												</div>
											</div>
											<input type="submit" value="Gửi" class="form-control submit" />
										</form>
									</div>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="row contact-info">
									<div class="col-sm-12">
										<div class="title">
											<h4>Bạn cần hỗ trợ ?</h4>
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
												<?= $address->body ?>
											</div>
											<div class="support-icon">
												<i class="fa fa-phone"></i>
												<a href="tel:<?= $phone->body ?>">
													<?= $phone->body ?>
												</a>
											</div>
											<div class="support-icon">
												<i class="fa fa-envelope-o"></i>
												<a href="mailto:<?= $email->body ?>">
													<?= $email->body ?>
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