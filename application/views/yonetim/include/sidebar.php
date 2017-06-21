<?php $info=$this->session->userdata('info'); //Session olan adminin bilgilerini çektik ?> 
<!doctype html>
<html lang="en">

<head>
	<title>Yönetim Paneli | Blog</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- CSS -->
	<link rel="stylesheet" href="<?php  echo base_url(); ?>assets/backend/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php  echo base_url(); ?>assets/backend/assets/css/vendor/icon-sets.css">
	<link rel="stylesheet" href="<?php  echo base_url(); ?>assets/backend/assets/css/main.min.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="<?php  echo base_url(); ?>assets/backend/assets/css/demo.css">
	<!-- ICONS -->
	<link rel="shortcut icon" href="..\img\.ico" type="image/x-icon" /><!--Logo çekilecek-->
	<script src="<?php echo base_url('assets/backend/ckeditor/ckeditor.js') ?>"></script><!--Editor düzenleyicisi-->
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- SIDEBAR -->
		<div class="sidebar">
			<div class="brand">
				<a href="<?php echo base_url('yonetimpaneli'); ?>"><img alt="BLOG" title="Anasayfaya Git" class="img-responsive logo"></a><b style="color:#00A0F0">Web Master</b>
				<h5 style="color:white"><?php echo $info->admin_adi_soyadi; //Admin adını ve soyadını yazdırıyoruz?> | 31.05.2017 <i class="fa fa-thumbs-o-up"></i></h5>
			</div>
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="<?php echo base_url('yonetimpaneli'); ?>" class="active"><i class="lnr lnr-bookmark"></i> <span>Tüm Gönderiler</span></a></li>
						<li><a href="<?php echo base_url('yonetimpaneli/paylasim'); ?>"><i class="lnr lnr-pencil"></i><span>Gönderi Paylaş</span></a></li>
						<li><a href="<?php echo base_url('yonetimpaneli/footer'); ?>"><i class="lnr lnr-magic-wand"></i><span>Footer Düzenle</span></a></li>
						<li><a href="<?php echo base_url('yonetimpaneli/slider'); ?>"><i class="lnr lnr-magic-wand"></i><span>Slider Düzenle</span></a></li>
						<li><a href="<?php echo base_url('yonetimpaneli/hakkinda');echo '/1' ?>"><i class="lnr lnr-magic-wand"></i><span>Hakkında Düzenle</span></a></li>
					</ul>
				</nav>
			</div>
			<a class="footer" href="<?php  echo base_url(); ?>" style="background-color: #2197F0" title="Siteyi Görüntüle" target="_blank"><i class="lnr lnr-map"></i> <span>Blog</span></a>
		</div>