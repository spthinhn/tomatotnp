<div class="content-container no-padding mobile-header">
    <div class="heading-container heading-resize heading-no-button mobile-margin-top">
        <img src="/images/bot-pho-mai/cover.jpg" width="100%">
    </div>
    <div class="container" style="margin: 20px;">
        <?php if ($albums->type == "album"): ?>
        <div class="gallery">
            <div class="row">
            <?php foreach ($albums->medias as $key => $media): ?>
                <div class="col-xs-4">
                    <a href="<?= URL_IMAGE.$media->uri ?>" class="big"><img width="100%" src="<?= URL_IMAGE.$media->uri ?>" alt="<?= $media->title ?>" title="<?= $media->title ?>" /></a>
                </div>
            <?php endforeach; ?>
            </div>
        </div>
        <?php endif; ?>
    </div>
</div>