<div class="content-container no-padding mobile-header">
	<div class="heading-container heading-resize heading-no-button mobile-margin-top">
		<img src="/images/tin_tuc.jpg" width="100%">
	</div>
	<div class="container" style="margin-top: 50px">
		<div class="row">
			<?php foreach ($feeds as $feed): ?>
			<div class="col-md-6 ">
				<div class="main-content">
					<div class="row">
						<div class="col-sm-12">
							<div class="posts" data-paginate="page_num" data-layout="default">
								<div class="posts-wrap posts-layout-default">
									<article class="hentry">
										<div class="hentry-wrap">
											<div class="entry-featured">
												<a href="<?= $this->Url->build([
															"controller" => "Feeds",
								                            "action" => "view",
								                            $feed->id,$feed->alias
								                        ]); ?>">
													<img width="700" height="350" src="<?= URL_IMAGE.$feed->thumbnail ?>" alt="blog-1"/>
												</a>
											</div>
											<div class="entry-info">
												<div class="entry-header">
													<h2 class="entry-title">
														<?= $this->Html->link(__($feed->title), ['controller' => 'Feeds', 'action' => 'view', $feed->id, $feed->alias]) ?>
													</h2>
												</div>
												<div class="entry-content">
													<?= $feed->summary ?>
												</div>
												<div class="readmore-link">
													<?= $this->Html->link(__('Tìm hiểu thêm'), ['controller' => 'Feeds', 'action' => 'view', $feed->id, $feed->alias]) ?>
												</div>
											</div>
										</div>
									</article>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>