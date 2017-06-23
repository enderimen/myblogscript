<?php $this->load->view('/include/header'); ?>
<div class="container">

	<div class="content" style="margin-top: 50px;">

		<!--Profil resmi-->
		<div class="panel panel-info">
			<div class="row">
				<div class="profil-image text-center">
					<img src="<?php echo base_url();?>assets/frontend/img/profil-img.jpg" alt="" class="img-circle" style="width: 250px;height: 250px">
				</div>
			</div>
			<!--Profil bitti-->

			<!--Hakkımda-->	
			<div class="panel-heading"><h3>Ben Kimim?</h3></div>
			<div class="panel-body">
				<p><?php echo $bilgi->hakkinda; ?></p>
			</div>
			
		<!--Hakkımda bitti-->	
		</div>
	</div>

</div>

<?php $this->load->view('/include/footer'); ?>