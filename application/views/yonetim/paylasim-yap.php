<?php $this->load->view('yonetim/include/sidebar.php'); ?>
		<!-- MAIN -->
		<div class="main">
			
			<!-- NAVBAR -->
				<?php $this->load->view('yonetim/include/header.php'); ?>
			<!-- END NAVBAR -->
			
			<!-- MAIN CONTENT -->

			<div class="main-content">
				<div class="container-fluid">
							<!-- INPUTS -->
							<div class="panel col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="panel-heading">
									<h2 class="panel-title">Gönderini Paylaş</h2>
									
									<!--##Paylaşim bilgisinin mesajı##-->

									<?php echo $this->session->flashdata('bilgi'); ?>
								
								</div>
								<form action="<?php echo base_url('yonetimpaneli/paylasimekle'); ?>" method="POST" enctype="multipart/form-data">
								
									<div class="form-group col-md-8">
										<h4>Gönderi Başlığı</h4>
										<input type="text" class="form-control" name="paylasim_baslik" value="" required>
									</div>
									<div class="form-group col-md-4">
										<h4>Staj Günü</h4>
										<input type="text" class="form-control" name="paylasim_gunu"  value="" required>
									</div>
									<div class="form-group col-md-12">
										<h4>Gönderi İçeriği</h4>
										<textarea type="text" name="paylasim_yazisi" class="ckeditor"  value=""></textarea> <!--BOYUT ESNEK OLACAK-->
										<br>									
									</div>
									<div class="form-group col-lg-4 col-md-12 col-sm-12 col-xs-12 pull-right">
										
										<input type="submit" value="Paylaş" class="btn btn-info col-lg-12 col-md-12 col-sm-12 col-xs-12" name="btn-paylasim-paylas">
									</div>
								</form>
							</div>
							<!-- END INPUTS -->
						</div>
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->

	<!-- Javascript -->
	<script src="<?php  echo base_url(); ?>assets/backend/assets/js/jquery/jquery-2.1.0.min.js"></script>
	<script src="<?php  echo base_url(); ?>assets/backend/assets/js/bootstrap/bootstrap.min.js"></script>
	<script src="<?php  echo base_url(); ?>assets/backend/assets/js/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="<?php  echo base_url(); ?>assets/backend/assets/js/plugins/jquery-easypiechart/jquery.easypiechart.min.js"></script>
	<script src="<?php  echo base_url(); ?>assets/backend/assets/js/plugins/chartist/chartist.min.js"></script>
	<script src="<?php  echo base_url(); ?>assets/backend/assets/js/klorofil.min.js"></script>