<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
	<?php if ($feed): ?>
	<meta name="title" content="<?= ($feed->meta_title?$feed->meta_title:'')  ?>" />
	<meta name="description" content="<?= ($feed->meta_description?$feed->meta_description:'')  ?>" />
	<?php endif; ?>
	<meta name="google-site-verification" content="lW7uYC6KU_MpBqzTGnteLS-0ngbNKvgp2OFEurKG7YM" />
	<title>Tomato TNP</title>
	<link rel="shortcut icon" href="images/favicon.png">

	<?= $this->Html->css('bootstrap.css'); ?>
	<?= $this->Html->css('settings.css'); ?>
	<?= $this->Html->css('swatches-and-photos.css'); ?>
	<?= $this->Html->css('/lib/fontawesome/css/font-awesome.css'); ?>
	<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Montserrat%3A400%2C700&#038;' type='text/css' media='all'/>
	<?= $this->Html->css('elegant-icon.css'); ?>
	<?= $this->Html->css('style.css'); ?>
	<?= $this->Html->css('shop.css'); ?>
	<?= $this->Html->css('owl.carousel.css'); ?>
	<?= $this->Html->css('layout.css'); ?>
	<?= $this->Html->css('elastic_grid.min.css'); ?>
	<?= $this->Html->css('jquery.rondell.css'); ?>
	<?= $this->Html->css('simplelightbox.css'); ?>
	
	<style type="text/css">
		
		.owl-prev {
			position: absolute;
			top: 50%;
			left: 0;

			border: 5px solid #000;
			width: 50px;
			height: 50px;
			line-height: 40px;
			vertical-align: middle;
			text-align: center;
			font-size: 30px;
			color: #fff;
			font-weight: bold;
		}
		.owl-next {
			position: absolute;
			top: 50%;
			right: 0;

			border: 5px solid #000;
			width: 50px;
			height: 50px;
			line-height: 40px;
			vertical-align: middle;
			text-align: center;
			font-size: 30px;
			color: #fff;
			font-weight: bold;
		}
	</style>

</head>