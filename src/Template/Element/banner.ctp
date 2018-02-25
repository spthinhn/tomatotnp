<div id="banners" class="owl-carousel owl-theme mobile-margin-top">
	<?php foreach ($banners->medias as $key => $banner): ?>
		<?php if ($banner->uri): ?>
	    <div class="item">
	    	<img width="100%" src="<?= URL_IMAGE.$banner->uri ?>" />
	    </div>
	<?php endif; ?>
	<?php endforeach; ?>
</div>