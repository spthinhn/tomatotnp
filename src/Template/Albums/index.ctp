<div class="content-container no-padding mobile-header">
    <div class="heading-container heading-resize heading-no-button mobile-margin-top">
        <img src="/images/bot-pho-mai/cover.jpg" width="100%">
    </div>
    <div class="container" style="margin: 20px;">
        <div class="row">
        <?php if (!empty($albums)): ?>
            <?php foreach ($albums as $key => $album): ?>
                <div class="col-xs-3">
                    <a href="<?= $this->Url->build([
                                                    "controller" => "Albums",
                                                    "action" => "view",
                                                    $album->type, $album->alias])
                                                     ?>">
                        <img width="100%" src="<?= URL_IMAGE.$album->thumbnail ?>" ?>
                        <h3><?= $album->title ?></h3>
                    </a>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
        <?php if (!empty($videos)): ?>
            <?php foreach ($videos->medias as $key => $media): ?>
                <div class="col-xs-3">
                <iframe width="100%" src="<?= $media->url ?>" frameborder="0" allowfullscreen></iframe>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
        </div>
    </div>
</div>