<!doctype html>
<html lang="en-US">
	<?php require_once('head.php'); ?>
	<body>
		<?php require_once('nav-mobile.php'); ?>
		<div id="wrapper" class="wide-wrap">
			<div class="offcanvas-overlay"></div>
			<?php require_once('header.php'); ?>
			<div class="content-container no-padding mobile-header">
				<div class="container-full">
					<div class="row">
						<div class="col-md-12 main-wrap">
							<div class="main-content">
								<?php require_once('banner.php'); ?>
								<div class="product-categories-grid">
									<div class="product-categories-grid-wrap clearfix">
										<div class="product-category-wall">
											<div class="wall-col col-xs-12 title-in product-category-wall" style="height: auto">
												<a href="gioi-thieu.php">
													<div class="product-category-grid-item">
														<div class="product-category-grid-item-wrap">
															<div class="product-category-grid-featured-wrap">
																<img src="/images/hinh_gioi_thieu.jpg" width="100%">
															</div>
															<div class="product-category-grid-featured-summary">
																<h3>Giới thiệu<small>Tomato TNP </small></h3>
															</div>
														</div>
													</div>
												</a>
											</div>
											<div class="wall-col col-xs-12 product-category-wall" style="height: auto">
												<a href="gioi-thieu.php">
													<div class="product-category-grid-item">
														<div class="product-category-grid-item-wrap">
															<div class="product-category-grid-featured-wrap">
																<img width="100%" src="/images/hinh_tam_nhin.jpg">
															</div>
														</div>
													</div>
												</a>
											</div>
											<div class="wall-col col-xs-12 product-category-wall" style="height: auto">
												<a href="gioi-thieu.php">
													<div class="product-category-grid-item">
														<div class="product-category-grid-item-wrap">
															<div class="product-category-grid-featured-wrap">
																<img width="100%" src="/images/hinh_su_menh.jpg" />
															</div>
														</div>
													</div>
												</a>
											</div>
										</div>
										
										<style type="text/css">
											.test {
												width: 100%;
												background-color: #000;
											}
											.product-categories-grid-wrap .title-in {
												padding: 0;
												height: auto;
											}
										</style>
										<div class="col-xs-12 hidden-md hidden-lg">
											<div id="products" class="owl-carousel owl-theme">
									            <div class="item">
									            	<div class="wall-col title-in product-category-wall">
														<a href="/bot-pho-mai.php">
															<div class="product-category-grid-item">
																<div class="product-category-grid-item-wrap">
																	<div class="product-category-grid-featured-wrap">
																		<img src="/images/bot-pho-mai/bpmtt03_1kg.jpg" width="100%">
																	</div>
																	<div class="product-category-grid-featured-summary">
																		<h3>Bột phô mai<small>Tomato TNP </small></h3>
																	</div>
																</div>
															</div>
														</a>
													</div>
									            </div>
									            <div class="item">
									            	<div class="wall-col title-in product-category-wall">
														<a href="/bot-xi-muoi.php">
															<div class="product-category-grid-item">
																<div class="product-category-grid-item-wrap">
																	<div class="product-category-grid-featured-wrap">
																		<img src="/images/bot-xi-muoi/bxm02.jpg" width="100%">
																	</div>
																	<div class="product-category-grid-featured-summary">
																		<h3>Bột xí muội<small>Volcano TNP </small></h3>
																	</div>
																</div>
															</div>
														</a>
													</div>
									            </div>
									        </div>
										</div>
										<div class="col-sm-12 hidden-xs hidden-sm hidden-md">
									        <ul class="home_slider">
												<li style="display: none;">
													<div class="slider_wrap">
														<a href="/bot-pho-mai.php">
															<img src="/images/bot-pho-mai/bpmtt03_1kg.jpg">
															<h2>Bột phô mai</h2>
														</a>
													</div>
												</li>
												<li style="display: none;">
													<div class="slider_wrap">
														<a href="/bot-xi-muoi.php">
															<img src="/images/bot-xi-muoi/bxm02.jpg">
															<h2>Bột xí muội</h2>
														</a>
													</div>
												</li>
											</ul>	
									    </div>
									    <div class="col-md-12 hidden-xs hidden-sm hidden-lg">
									        <ul class="home_slider_md">
												<li style="display: none;">
													<div class="slider_wrap">
														<a href="/bot-pho-mai.php">
															<img src="/images/bot-pho-mai/bpmtt03_1kg.jpg">
															<h2>Bột phô mai</h2>
														</a>
													</div>
												</li>
												<li style="display: none;">
													<div class="slider_wrap">
														<a href="/bot-xi-muoi.php">
															<img src="/images/bot-xi-muoi/bxm02.jpg">
															<h2>Bột xí muội</h2>
														</a>
													</div>
												</li>
											</ul>	
									    </div>
									</div>
								</div>
								<div class="footer-services">
									<div class="container">
										<div class="row">
											<div class="col-sm-6 footer-service-item">
												<a class="footer-service-item-i" href="tin-tuc.php">
													<i class="footer-service-icon fa fa-send-o"></i>
													<h3 class="footer-service-title">Tin Tức</h3>
													<span class="footer-service-text">
														Nơi tổng hợp các kiến thức về sản phẩm...
													</span>
												</a>
											</div>
											<div class="col-sm-6 footer-service-item">
												<a class="footer-service-item-i" href="hinh-anh.php">
													<i class="footer-service-icon fa fa-life-bouy"></i>
													<h3 class="footer-service-title">Thư viện</h3>
													<span class="footer-service-text">
														Nơi tổng hợp các hình ảnh, video liên quan...
													</span>
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
			
			<?php require_once('footer.php'); ?>
		</div>
	<?php require_once('script.php'); ?>
		
</body>
</html>