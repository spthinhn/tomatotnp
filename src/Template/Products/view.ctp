<div class="content-container no-padding mobile-header">
    <div class="heading-container" style="margin-bottom: 50px">
        <div class="container heading-standar">
            <div class="page-breadcrumb">
                <ul class="breadcrumb">
                    <li><span><a href="/" class="home"><span>Trang chủ</span></a></span></li>
                    <li><span><a href="/bot-pho-mai.php" class="san-pham"><span><?= $product->category->title ?></span></a></span></li>
                    <li><span><?= $product->title ?></span></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-full">
        <div class="row">
            <div class="col-md-12 main-wrap">
                <div class="main-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 no-min-height"></div>
                        </div>
                    </div>
                    <div class="product">
                        <div class="container">
                            <div class="row summary-container">
                                <div class="col-md-8 col-sm-6 entry-image">
                                    <div class="single-product-images">
                                        <div class="single-product-images-slider">
                                            <div class="caroufredsel product-images-slider" data-synchronise=".single-product-images-slider-synchronise" data-scrollduration="500" data-height="variable" data-scroll-fx="none" data-visible="1" data-circular="1" data-responsive="1">
                                                <div class="caroufredsel-wrap">
                                                    <?php if ($product->product_images): ?>
                                                    <ul class="caroufredsel-items">
                                                        <?php foreach ($product->product_images as $k => $v): ?>
                                                        <li class="caroufredsel-item">
                                                            <div class="thumb">
                                                                <a href="<?= URL_IMAGE.$v->image ?>" data-rel="magnific-popup-verticalfit" title="Product-detail">
                                                                    <img width="100%" src="<?= URL_IMAGE.$v->image ?>" />
                                                                </a>
                                                            </div>
                                                        </li>
                                                        <?php endforeach; ?>
                                                    </ul>
                                                    <?php endif; ?>
                                                    <a href="#" class="caroufredsel-prev"></a>
                                                    <a href="#" class="caroufredsel-next"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-product-thumbnails">
                                            <div class="caroufredsel product-thumbnails-slider" data-visible-min="2" data-visible-max="4" data-scrollduration="500" data-direction="up" data-height="100%" data-circular="1" data-responsive="0">
                                                <div class="caroufredsel-wrap">
                                                    <?php if ($product->product_images): ?>
                                                    <ul class="single-product-images-slider-synchronise caroufredsel-items">
                                                        <?php foreach ($product->product_images as $k => $v): ?>
                                                        <li class="caroufredsel-item">
                                                            <div class="thumb">
                                                                <a href="#" data-rel="1" title="Product-detail">
                                                                    <img width="100%" src="<?= URL_IMAGE.$v->image ?>"/>
                                                                </a>
                                                            </div>
                                                        </li>
                                                        <?php endforeach; ?>
                                                    </ul>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 entry-summary">
                                    <div class="summary">
                                        <h1 class="product_title entry-title"><?= $product->title ?></h1>
                                        <p class="price"><span class="amount"><strong>Giá: </strong><?= $product->price ?> </span></p>
                                        <div class="product-excerpt">
                                            <?= $product->description ?>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>
                        <div class="shop-tab-container">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingGioiThieu">
                                                    <h4 class="panel-title">
                                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseGioiThieu" aria-expanded="true" aria-controls="collapseGioiThieu">
                                                            Giới thiệu
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseGioiThieu" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingGioiThieu">
                                                    <div class="panel-body">
                                                        <?= $product->info ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingKLTinh">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseKLTinh" aria-expanded="false" aria-controls="collapseKLTinh">
                                                            Khối lượng tịnh
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseKLTinh" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingKLTinh">
                                                    <div class="panel-body">
                                                        <?= $product->weight ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingHDSD">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseHDSD" aria-expanded="false" aria-controls="collapseHDSD">
                                                            Hướng dẫn sử dụng
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseHDSD" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingHDSD">
                                                    <div class="panel-body">
                                                        <?= $product->guide_use ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingHDBQ">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseHDBQ" aria-expanded="false" aria-controls="collapseHDBQ">
                                                            Hướng dẫn bảo quản
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseHDBQ" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingHDBQ">
                                                    <div class="panel-body">
                                                        <?= $product->guide_use ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingHSD">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseHSD" aria-expanded="false" aria-controls="collapseHSD">
                                                            Hạn sử dụng
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseHSD" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingHSD">
                                                    <div class="panel-body">
                                                        <?= $product->guid_preservation ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingHTPP">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseHTPP" aria-expanded="false" aria-controls="collapseHTPP">
                                                            Hệ thống phân phối
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseHTPP" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingHTPP">
                                                    <div class="panel-body">
                                                        <?= $product->distribution ?>
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
    </div>
</div>