<?php $this->load->view('include/header.php');   ?>


<div class="container">	
	<div class="left col-lg-3 col-md-3 col-sm-6 col-xs-12"><!--Void div left--></div>
			<div class="col-lg-12 col-md-6 col-sm-12 col-xs-12">
					
					<!--Paylaşım Başlık-->
					<div class="panel-heading"><h1 style="font-family: "><?php echo $bilgi->paylasim_baslik; ?></h1></div>
	
					<div class="panel" style="margin-top:50px;">
						<!--Paylaşım Başlık-->
						<?php echo $bilgi->paylasim_yazisi; ?>
						<?php echo "<br/><b style='color:gray'>Paylaşım Tarihi</b>:  ".$bilgi->paylasim_tarih; ?>				
					</div><br><br><br><br>
			</div>
</div>
<a href="#" class="up">
	<img src="<?php echo base_url();?>assets/frontend/img/up.png" style="width: 40px;height: 40px;" alt="">
</a>
<?php $this->load->view('include/footer.php'); ?>