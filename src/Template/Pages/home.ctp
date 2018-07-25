<div class="content-container no-padding mobile-header">
    <div class="container-full">
        <div class="row">
            <div class="col-md-12 main-wrap">
                <div class="main-content">
                    <?= $this->element('banner') ?>
                    <div class="product-categories-grid">
                        <div class="product-categories-grid-wrap clearfix">
                            <div class="product-category-wall">
                                <?php if ($introduce): ?>
                                <div class="col-xs-12 title-in product-category-wall" style="height: auto">
                                    <a href="/gioi-thieu">
                                        <div class="product-category-grid-item">
                                            <div class="product-category-grid-item-wrap">
                                                <div class="product-category-grid-featured-wrap">
                                                    <img src="<?= URL_IMAGE.$introduce->body ?>" width="100%">
                                                </div>
                                                <div class="product-category-grid-featured-summary">
                                                    <h3>Giới thiệu<small>Tomato TNP </small></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <?php endif; ?>
                                <?php if ($vision): ?>
                                <div class="col-xs-12 title-in product-category-wall" style="height: auto">
                                    <a href="/gioi-thieu">
                                        <div class="product-category-grid-item">
                                            <div class="product-category-grid-item-wrap">
                                                <div class="product-category-grid-featured-wrap">
                                                    <img width="100%" src="<?= URL_IMAGE.$vision->body ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <?php endif; ?>
                                <?php if ($mission): ?>
                                <div class="col-xs-12 title-in product-category-wall" style="height: auto">
                                    <a href="/gioi-thieu">
                                        <div class="product-category-grid-item">
                                            <div class="product-category-grid-item-wrap">
                                                <div class="product-category-grid-featured-wrap">
                                                    <img width="100%" src="<?= URL_IMAGE.$mission->body ?>" />
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <?php endif; ?>
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
                                <?php foreach ($categories as $key => $category): ?>
                                    <div class="item">
                                        <div class="title-in product-category-wall">
                                            <a href="<?= $this->Url->build([
                                                    "controller" => "Categories",
                                                    "action" => "view",
                                                    $category->id,
                                                    $category->alias,
                                                ]); ?>">
                                                <div class="product-category-grid-item">
                                                    <div class="product-category-grid-item-wrap">
                                                        <div class="product-category-grid-featured-wrap">
                                                            <img src="<?= URL_IMAGE.$category->thumbnail ?>" width="100%">
                                                        </div>
                                                        <div class="product-category-grid-featured-summary">
                                                            <h3><?= $category->title ?></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                                </div>
                            </div>
                            <div class="col-sm-12 hidden-xs hidden-sm hidden-md">
                                <ul class="home_slider">
                                    <?php foreach ($categories as $key => $category): ?>
                                    <li style="display: none;">
                                        <div class="slider_wrap">
                                            <a href="<?= $this->Url->build([
                                                    "controller" => "Categories",
                                                    "action" => "view",
                                                    $category->id,
                                                    $category->alias,
                                                ]); ?>" >
                                                <img src="<?= URL_IMAGE.$category->thumbnail ?>">
                                            </a>
                                        </div>
                                    </li>
                                    <?php endforeach; ?>
                                </ul>   
                            </div>
                            <div class="col-md-12 hidden-xs hidden-sm hidden-lg">
                                <ul class="home_slider_md">
                                    <?php foreach ($categories as $key => $category): ?>
                                    <li style="display: none;">
                                        <div class="slider_wrap">
                                            <a href="<?= $this->Html->link(__($category->title), ['controller' => 'Categories', 'action' => 'view', $category->id, $category->alias]) ?>">
                                                <img src="<?= URL_IMAGE.$category->thumbnail ?>">
                                            </a>
                                        </div>
                                    </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="footer-services">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-6 footer-service-item">
                                    <a class="footer-service-item-i" href="/tin-tuc">
                                        <i class="footer-service-icon fa fa-send-o"></i>
                                        <h3 class="footer-service-title">Tin Tức</h3>
                                        <span class="footer-service-text">
                                            Nơi tổng hợp các kiến thức về sản phẩm...
                                        </span>
                                    </a>
                                </div>
                                <div class="col-sm-6 footer-service-item">
                                    <a class="footer-service-item-i" href="/thu-vien/album">
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