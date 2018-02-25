<header class="header-type-classic header-absolute header-transparent" style="position: fixed; width: 100%;z-index: 999999; top: 0;" >
	<div class="topbar">
		<div class="container topbar-wap">
			<div class="row">
				<div class="col-sm-6">
					<div class="left-topbar">
						<div class="topbar-social">
							<style type="text/css">
								.topbar-social a i {
								    height: 17px;
								    line-height: 15px;
								    width: 21px;
								}
							</style>
							<a href="tel:<?= $phone->body ?>" style="width: auto">
								<i class="fa fa-phone"></i><span>&nbsp;&nbsp;<?= $phone->body ?></span>
							</a>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<a href="mailto:<?= $email->body ?>" style="width: auto">
								<i class="fa fa-envelope-o"></i><span>&nbsp;&nbsp;<?= $email->body ?></span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="navbar-container">
		<div class="navbar navbar-default  navbar-scroll-fixed">
			<div class="navbar-default-wrap">
				<div class="container">
					<div class="row">
						<div class="col-md-12 navbar-default-col">
							<div class="navbar-wrap">
								<div class="navbar-header">
									<button type="button" class="navbar-toggle">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar bar-top"></span>
										<span class="icon-bar bar-middle"></span>
										<span class="icon-bar bar-bottom"></span>
									</button>
									<a class="navbar-brand" href="/">
										<img class="logo" alt="The DMCS" src="/images/Logo_TOMATO_Slogan 2.png">
										<img class="logo-fixed" alt="The DMCS" src="/images/Logo_TOMATO_Slogan 2.png">
										<img class="logo-mobile" alt="The DMCS" src="/images/Logo_TOMATO_Slogan 2.png">
									</a>
								</div>
								<nav class="collapse navbar-collapse primary-navbar-collapse">
									<ul class="nav navbar-nav primary-nav">
										<li><a href="/gioi-thieu"><span class="underline">Giới thiệu</span></a></li>
										<li class="menu-item-has-children dropdown">
											<a href="/san-pham" class="dropdown-hover">
												<span class="underline">Sản phẩm</span> <span class="caret"></span>
											</a>
											<ul class="dropdown-menu">
												<?php foreach ($categories as $category): ?>
												<li>
												<?= $this->Html->link(__($category->title), ['controller' => 'Categories', 'action' => 'view', $category->id, $category->alias]) ?>
												</li>
												<?php endforeach; ?>
											</ul>
										</li>
										<li><a href="/tin-tuc"><span class="underline">Tin tức</span></a></li>
										<li class="menu-item-has-children dropdown">
											<a href="/thu-vien/album" class="dropdown-hover">
												<span class="underline">Thư viện</span> <span class="caret"></span>
											</a>
											<ul class="dropdown-menu">
												<li><a href="/thu-vien/album">Hình ảnh</a></li>
												<li><a href="/thu-vien/video">Video</a></li>
											</ul>
										</li>
										<li><a href="/lien-he"><span class="underline">Liên hệ</span></a></li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="header-search-overlay hide">
				<div class="container">
					<div class="header-search-overlay-wrap">
						<form class="searchform">
							<input type="search" class="searchinput" name="s" value="" placeholder="Search..."/>
							<input type="submit" class="searchsubmit hidden" name="submit" value="Search"/>
						</form>
						<button type="button" class="close">
							<span aria-hidden="true" class="fa fa-times"></span>
							<span class="sr-only">Close</span>
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>