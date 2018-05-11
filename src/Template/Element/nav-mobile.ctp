<div class="offcanvas open">
	<div class="offcanvas-wrap">
		<nav class="offcanvas-navbar" >
			<ul class="offcanvas-nav">
				<li><a href="/gioi-thieu">Giới thiệu</a></li>
				<li class="menu-item-has-children dropdown">
					<a href="/san-pham" class="dropdown-hover">Sản phẩm <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<?php foreach ($categories as $category): ?>
						<li>
						<?= $this->Html->link(__($category->title), ['controller' => 'Categories', 'action' => 'view', $category->id, $category->alias]) ?>
						</li>
						<?php endforeach; ?>
					</ul>
				</li>
				<li><a href="/tin-tuc">Tin tức</a></li>
				<li class="menu-item-has-children dropdown">
					<a href="/thu-vien/album" class="dropdown-hover">Thư viện <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="/thu-vien/album">Hình ảnh</a></li>
						<li><a href="/thu-vien/video">Video</a></li>
					</ul>
				</li>
				<li><a href="/lien-he">Liên hệ</a></li>
			</ul>
		</nav>
	</div>
</div>

