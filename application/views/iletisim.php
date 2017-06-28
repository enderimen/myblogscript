<?php $this->load->view('include/header.php');   ?>


<div class="container">
	<div class="panel-heading text-center"><div class="panel-title"><h3 style="font-family: tahoma;">Mesaj Gönder</h3> </div></div>
	
	<div class="left col-lg-3 col-md-3 col-sm-6 col-xs-12"><!--Void div--></div>
	
	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
	
		<!--Mesaj iletim bilgisi-->
		<?php echo $this->session->flashdata('bilgi'); ?>
		<div class="panel" style="margin-top:50px;">
			<form action="<?php echo base_url('anasayfa/mesaj');?>" method="POST">
				<h4>Adınız*</h4>
				<input type="text" class="form-control input-lg" name="ad" required><br>
				<h4>Mail Adresiniz*</h4>
				<input type="email" class="form-control input-lg" name="mail" required><br>
				<h4>Konu*</h4>
				<input type="text" class="form-control input-lg" name="konu" required><br>
				<h4>İletiniz*</h4>
				<textarea class="form-control input-lg" placeholder="..." name="mesaj" required></textarea><br>

				<input type="submit" class="btn btn-info col-lg-4 col-md-4 col-sm-2 col-xs-12 pull-right"><br>
			</form>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="margin-top: 20%"></div><!--Form ile footer arasında boşluk bırakmak için-->
	</div>
</div>

<?php $this->load->view('include/footer.php'); ?>