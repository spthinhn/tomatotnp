<div class="content-container no-padding mobile-header">
	<div class="heading-container heading-resize heading-no-button mobile-margin-top">
		<?php if ($cover): ?> 
			<img src="<?= URL_IMAGE.$cover->body ?>" width="100%">
		<?php else: ?>
			<img src="/images/bot-pho-mai/cover.jpg" width="100%">
		<?php endif; ?>
	</div>
	<div class="container" style="margin: 20px;">
		<div class="gallery">
			<div class="row">
				<div class="col-xs-4">
					<a href="/images-test/image1.jpg" class="big"><img width="100%" src="/images-test/thumbs/thumb1.jpg" alt="" title="Beautiful Image" /></a>
				</div>
				<div class="col-xs-4">
					<a href="/images-test/image2.jpg"><img width="100%" src="/images-test/thumbs/thumb2.jpg" alt="" title=""/></a>
				</div>
				<div class="col-xs-4">
					<a href="/images-test/image3.jpg"><img width="100%" src="/images-test/thumbs/thumb3.jpg" alt="" title="Beautiful Image"/></a>
				</div>
				<div class="col-xs-4">
					<a href="/images-test/image4.jpg"><img width="100%" src="/images-test/thumbs/thumb4.jpg" alt="" title=""/></a>
				</div>
				<div class="col-xs-4">
					<a href="/images-test/image5.jpg"><img width="100%" src="/images-test/thumbs/thumb5.jpg" alt="" title=""/></a>
				</div>
			</div>
		</div>
	</div>
</div>