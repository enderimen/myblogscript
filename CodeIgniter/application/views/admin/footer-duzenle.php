<?php include 'sidebar.php'; ?>
		<!-- MAIN -->
		<div class="main">
			
			<!-- NAVBAR -->
				<?php include 'header.php'; ?>
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
										<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
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
																<td><img src="#" alt=""></td>
																<td>
																	<div class="form-group col-md-8">
																		<input name="resim" type="text">
																		<br>									
																	</div>
																</td>
																<td>
																	<div class="col-md-8">
																		<input type="file" class="form-control" name="id" value="">
																	</div>
																</td>
																<td><input type="submit" class="btn btn-primary" value="Güncelle"></td>
															</tr>
														</tbody>
													</table>
													<div class="form-group col-md-8">
														<h4>Footer yazısı</h4>
														<input type="text" class="form-control" name="id" value="">
													</div>
													<div class="form-group">
														<input type="submit" value="Kaydet" class="btn btn-info" name="">
														<br>									
													</div>
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
			</div>
			<!-- END MAIN CONTENT -->

	<!-- Javascript -->
	<script src="assets/js/jquery/jquery-2.1.0.min.js"></script>
	<script src="assets/js/bootstrap/bootstrap.min.js"></script>
	<script src="assets/js/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/js/plugins/jquery-easypiechart/jquery.easypiechart.min.js"></script>
	<script src="assets/js/plugins/chartist/chartist.min.js"></script>
	<script src="assets/js/klorofil.min.js"></script>

									