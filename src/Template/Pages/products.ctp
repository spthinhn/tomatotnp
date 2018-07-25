<div class="content-container no-padding mobile-header">
	<div class="heading-container heading-resize heading-no-button mobile-margin-top">
		<?php if ($cover): ?> 
			<img src="<?= URL_IMAGE.$cover->body ?>" width="100%">
		<?php else: ?>
			<img src="/images/bot-pho-mai/cover.jpg" width="100%">
		<?php endif; ?>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12 main-wrap">
				<div class="main-content">
					<?php foreach ($categories as $key => $category): ?>
						<?php 
							if (count($category->products) > 0):
						?>
						<div class="row section-collection">
							<div class="col-sm-12">
								<div class="row inner">
									<div class="col-sm-2"></div>
									<div class="col-sm-8">
										<h2 class="text-center custom_heading"><?= $category->title ?></h2>
										<div class="separator content_element separator_align_center sep_width_10 sep_border_width_2 sep_pos_align_center separator_no_text sep_color_black">
											<span class="sep_holder sep_holder_l">
												<span class="sep_line"></span>
											</span>
											<span class="sep_holder sep_holder_r">
												<span class="sep_line"></span>
											</span>
										</div>
										<div class="content_element">
											<?= $category->description ?>
										</div>
									</div>
									<div class="col-sm-2"></div>
								</div>
								<div id="banners1" class="owl-carousel owl-theme mobile-margin-top products-list">
									<?php foreach ($category->products as $key => $product): ?>
								    <div class="item">
								    	<a href="<?= $this->Url->build([
	                                                        "controller" => "Products",
	                                                        "action" => "view",
	                                                        $product->id, $product->alias])
	                                                         ?>">
	                                            <?php 
	                                            	if ($product->product_images) {
			                                            foreach ($product->product_images as $k => $v) {
			                                                if ($v->image) {
			                                                    $thumbnail = URL_IMAGE.$v->image;
			                                                    break;
			                                                } else {
			                                                    $thumbnail =  '/assets/bpm.jpg';
			                                                }
			                                            }
			                                        } else {
			                                            $thumbnail =  '/assets/bpm.jpg';
			                                        } 
		                                        ?>

		                                        <img width="100%" src="<?= $thumbnail ?>" alt="Product-1" />


									    	
									    	<h4 class="product_title"><?= $product->title ?></h4>
								    	</a>
								    </div>
									<?php endforeach; ?>
								</div>
							</div>
						</div>
						<?php endif; ?>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</div>