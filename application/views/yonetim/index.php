<?php $this->load->view('yonetim/include/sidebar.php'); ?>
		<!-- MAIN -->
		<div class="main">

			<!-- NAVBAR -->
				<?php $this->load->view('yonetim/include/header.php'); ?>
			<!-- END NAVBAR -->

			<!-- MAIN CONTENT -->

			<div class="main-content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<!-- RECENT PURCHASES -->
							<div class="panel">
								
								<div class="panel-body no-padding">
									<table class="table table-striped">
										<thead>
											<tr>
												<th>Paylaşım ID</th>
												<th>Staj Günü</th>
												<th>Gönderi Başlığı</th>
												<th>###</th>
											</tr>
										</thead>
							
										<tbody>
											<tr>
												<td><!--İçerik-->1</td>
												<td><!--İçerik-->1</td>
												<td><!--İçerik-->Stajda İlk Günüm</td>
												<td><a href=""><input type="submit" class="btn btn-primary" value="Düzenle"></a></td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="panel-footer">
									<div class="row">
										<div class="col-md-6"><span class="panel-note"><i class="fa fa-clock-o"></i><?php echo date('F j ,Y / H:i:s');  ?></span></div>
										<div class="col-md-6 text-right"></div>
									</div>
								</div>
							</div>
							<!-- END RECENT PURCHASES -->
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
	<script src="<?php  echo base_url(); ?>assets/backend/assets/js/plugins/jquery-easypiechart/jquery.easypiechart.min.js"></script>
	<script src="<?php  echo base_url(); ?>assets/backend/assets/js/plugins/chartist/chartist.min.js"></script>
	<script src="<?php  echo base_url(); ?>assets/backend/assets/js/klorofil.min.js"></script>
</body>
</html>
