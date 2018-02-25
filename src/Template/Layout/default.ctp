<!doctype html>
<html lang="en-US">
    <?= $this->element('head') ?>
    <body>
        <?= $this->element('nav-mobile') ?>
        <div id="wrapper" class="wide-wrap">
            <div class="offcanvas-overlay"></div>
            <?= $this->element('header') ?>
            <?= $this->fetch('content') ?>
            <?= $this->element('footer') ?>
        </div>
    <?= $this->element('script') ?>
</body>
</html>