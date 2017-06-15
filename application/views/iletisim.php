<?php $this->load->view('include/header.php');   ?>


<div class="container">
	<div class="panel-heading text-center"><div class="panel-title"><h3 style="font-family: tahoma;">Mesaj Gönder</h3> </div></div>
	
	<div class="left col-lg-3 col-md-3 col-sm-6 col-xs-12"><!--Void div--></div>
	
	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
		<div class="panel" style="margin-top:50px;">
			<form action="" method="">
				<h4>Adınız*</h4>
				<input type="text" class="form-control input-lg"><br>
				<h4>Mail Adresiniz*</h4>
				<input type="text" class="form-control input-lg"><br>
				<h4>Konu*</h4>
				<input type="text" class="form-control input-lg"><br>
				<h4>İletiniz*</h4>
				<textarea class="form-control input-lg" placeholder="..."></textarea><br>

				<input type="submit" class="btn btn-info col-lg-4 col-md-4 col-sm-2 col-xs-12 pull-right"><br>
			</form>
		</div>
	</div>
</div>

<?php $this->load->view('include/footer.php'); ?>