<?php $this->load->view('yonetim/include/sidebar'); ?>
		<!-- MAIN -->
		<div class="main">
			
			<!-- NAVBAR -->
		<?php $this->load->view('yonetim/include/header'); ?>
			<!-- END NAVBAR -->

			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<div class="panel panel-profile">
						<div class="clearfix">
							<!-- LEFT COLUMN -->
							<div class="profile-left">
								<!-- PROFILE HEADER -->
								<div class="profile-header">
									<div class="overlay"></div>
									<div class="profile-main">
										<img src="<?php  echo base_url(); ?>assets/backend/assets/img/profil-img.jpg" style="width: 120px;height: 120px;" class="img-circle" alt="Profil Resmi">
										<h3 class="name">Ender İMEN</h3>
										<span class="online-status status-available">Öğrenci</span>
									</div>
								</div>
								<!-- END PROFILE HEADER -->
								<!-- PROFILE DETAIL -->
								<div class="profile-detail">
									<div class="profile-info">
										<h4 class="heading">Temel Bilgiler</h4>
										<ul class="list-unstyled list-justify">
											<li>Doğum Tarihi <span>21 Mayıs, 1995</span></li>
											<li>Telefon <span>+90(539) 913-58-95</span></li>
											<li>Email <span>enderimen@hotmail.com</span></li>
											<li>Web Site <span><a href="<?php echo base_url(); ?>" target="_blank">www.myblog.com</a></span></li>
											<li>Okul <span>KTU-Yazılım Mühendisliği | 2014</span></li>
											
											<li>Profil Resmini Değiştir
												<span>
													<form action="<?php echo base_url('yonetimpaneli/profilyükle');?>" method="POST" enctype="multipart/form-data">
															<div class="row">
															<div class="form-group col-md-8">
																<input name="resim" type="file">		
															</div>
															<div class="form-group col-md-4 col-sm-12 col-xs-12">
																<input type="submit" value="Kaydet" class="btn btn-warning" name="">
																<br>									
															</div>
															</div>
													</form>
												</span>
											</li>
											
										</ul>
									</div>
									<div class="profile-info">
										<h4 class="heading">Sosyal Ağ</h4>
										<ul class="list-inline social-icons">
											<li><a href="https://www.facebook.com/ender.imen" target="_blank" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
											<li><a href="https://twitter.com/imenender" target="_blank" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
											<li><a href="https://plus.google.com/u/0/104147356714797128154" target="_blank" class="google-plus-bg"><i class="fa fa-google-plus"></i></a></li>
											<li><a href="https://github.com/enderimen" target="_blank" class="github-bg"><i class="fa fa-github"></i></a></li>
										</ul>
									</div>
									<div class="profile-info">
										<h4 class="heading">Eğitim</h4>
										<p>Yazılım Mühendisliği 2.Sınıf Öğrencisi</p>
									</div>
								</div>
								<!-- END PROFILE DETAIL -->
							</div>
							<!-- END LEFT COLUMN -->
						</div>
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
			
		</div>
		<!-- END MAIN -->
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="<?php  echo base_url(); ?>assets/backend/assets/js/jquery/jquery-2.1.0.min.js"></script>
	<script src="<?php  echo base_url(); ?>assets/backend/assets/js/bootstrap/bootstrap.min.js"></script>
	<script src="<?php  echo base_url(); ?>assets/backend/assets/js/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="<?php  echo base_url(); ?>assets/backend/assets/js/klorofil.min.js"></script>
</body>

</html>
