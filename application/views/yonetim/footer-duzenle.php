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
									<h3 class="panel-title">Footer Düzenle</h3>
								</div>
								<form action="admin-islem.php" method="POST" enctype="multipart/form-data">
									
									<div class="row">
										<div class="col-lg-10 col-md-8 col-sm-12 col-xs-12">
											<!-- RECENT PURCHASES -->
											<div class="panel">
												
												<div class="panel-body no-padding">
													<table class="table table-striped">
														<thead>
															<tr>
																<th>Resim</th>
																<th>link</th>
															</tr>
														</thead>
											
														<tbody>
															<tr>
																<td><img src="<?php  echo base_url(); ?>assets/backend/assets/img/facebook.png" alt=""></td>
																<td>
																	<div class="form-group col-md-8">
																		<input name="resim" type="text" value="<?php echo $footercek->footer_link; ?>">
																		<br>									
																	</div>
																</td>
																<td>
																	<div class="col-md-8">
																		<input type="file" name="id" value="">
																	</div>
																</td>
																<td><input type="submit" class="btn btn-primary" value="Güncelle"></td>
															</tr>
														</tbody>
													</table>
												</div>


											</div>
											<div class="form-group col-md-10">
														<h4>Footer yazısı</h4>
														<input type="text" style="height: 40px" class="form-control" name="id" value="<?php echo $footercek->footer_text; ?>">
													</div>
													<div class="form-group">
													<br><br>
														<input type="submit" value="Kaydet" class="btn btn-info" name="">
														<br>									
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
			</div>
			<!-- END MAIN CONTENT -->

	<!-- Javascript -->
	<script src="<?php  echo base_url(); ?>assets/backend/assets/js/jquery/jquery-2.1.0.min.js"></script>
	<script src="<?php  echo base_url(); ?>assets/backend/assets/assets/js/bootstrap/bootstrap.min.js"></script>
	<script src="<?php  echo base_url(); ?>assets/backend/assets/assets/js/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="<?php  echo base_url(); ?>assets/backend/assets/assets/js/plugins/jquery-easypiechart/jquery.easypiechart.min.js"></script>
	<script src="<?php  echo base_url(); ?>assets/backend/assets/assets/js/plugins/chartist/chartist.min.js"></script>
	<script src="<?php  echo base_url(); ?>assets/backend/assets/assets/js/klorofil.min.js"></script>

									