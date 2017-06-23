<?php $this->load->view('yonetim/include/sidebar'); ?>
		<!-- MAIN -->
		<div class="main">
			
			<!-- NAVBAR -->
		<?php $this->load->view('yonetim/include/header'); ?>
			<!-- END NAVBAR -->
			
			<!-- MAIN CONTENT -->

			<div class="main-content">
				<div class="container-fluid">
							<div class="panel col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="panel-heading">
									<h3 class="panel-title">Hakkında Düzenle</h3>
								</div>
								<form action="<?php echo base_url('yonetimpaneli/hakkindaduzenle');?>" method="POST" enctype="multipart/form-data">
									
									<div class="row">
										<div class="col-lg-12 col-md-8 col-sm-12 col-xs-12">
											<!-- RECENT PURCHASES -->
											<div class="panel">
												<div class="form-group  col-lg-12 col-md-12 col-sm-12 col-xs-12">
													<textarea name="hakkinda" class="ckeditor"><?php echo $hakkindacek->hakkinda; ?></textarea>
												</div>
												<div class="form-group col-md-4">
													<img src="" style="height: 200px;width: 200px;" alt="Profil Resmi" title=""><br><!--Resim boyutu düzenlenecek-->			
												</div>
												<div class="form-group col-md-8">
													<h4>Profil Resmi Yükle</h4>
													<input name="resim" type="file"><!--resmin yolu güncellenirken çekilecek-->
													<br>									
												</div>
												<div class="form-group col-md-4 col-sm-12 col-xs-12">
													<br><br><br>
													<input type="submit" value="Profil Resmini Sil" class="btn btn-danger col-md-12 col-sm-12 col-xs-12" name="">
													<br>									
												</div>
												<div class="form-group col-md-4 col-sm-12 col-xs-12">
												<br><br><br>
													<input type="submit" value="Güncelle" class="btn btn-info col-md-12 col-sm-12 col-xs-12" name="btn-kullanici-duzenle">
													<br>									
												</div>
												
											</div>
											<!-- END RECENT PURCHASES -->
										</div>
									</div>
								</form>
							</div>
							<!-- END INPUTS -->
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
