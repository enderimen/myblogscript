<?php $this->load->view('yonetim/include/sidebar.php'); ?>
		<!-- MAIN -->
		<div class="main">
			
			<!-- NAVBAR -->
				<?php $this->load->view('yonetim/include/header.php'); ?>
			<!-- END NAVBAR -->
			
			<!-- MAIN CONTENT -->

			<div class="main-content">
				<div class="container-fluid">
							<div class="panel col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="panel-heading">
									<h3 class="panel-title">Gönderini Paylaş</h3>
								</div>
								<form action="admin-islem.php" method="POST" enctype="multipart/form-data">
								
									<div class="form-group col-md-8">
										<h4>Gönderi Başlığı</h4>
										<input type="text" class="form-control" name="id" value="">
									</div>
									<div class="form-group col-md-4">
										<h4>Staj Günü</h4>
										<input type="text" class="form-control" name="id" value="">
									</div>
									<div class="form-group col-md-10">
										<h4>Gönderi İçeriği</h4>
										<textarea type="text" class="form-control" placeholder="Yaz..." style="height: 300px;width: 980px" value=""></textarea> <!--BOYUT ESNEK OLACAK-->
										<br>									
									</div>
									<div class="form-group col-md-8">
										<img src="" style="height: 300px;width:500px;" alt="Resim" title="">
										<br>									
									</div>
									<div class="form-group col-md-4">
										<h4>Resim Yükle</h4>
										<input name="resim" type="file"><!--resmin yolu güncellenirken çekilecek-->
										<br>									
									</div>
									<div class="form-group col-lg-4 col-md-12 col-sm-12 col-xs-12">
										<br><br><br><br><br><br>
										<input type="submit" value="Kaydet" class="btn btn-info col-md-12 col-sm-12 col-xs-12" name="btn-kullanici-duzenle">
										<br>									
									</div>
									<div class="form-group col-lg-4 col-md-12 col-sm-12 col-xs-12">
										<input type="submit" value="Kullanıcıyı Sil" class="btn btn-danger col-md-12 col-sm-12 col-xs-12" name="btn-kullanici-sil">
										<br>									
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