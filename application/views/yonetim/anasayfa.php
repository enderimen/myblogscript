<?php $this->load->view('yonetim/include/sidebar.php'); ?>
		<!-- MAIN -->
		<div class="main">

			<!-- NAVBAR -->
				<?php $this->load->view('yonetim/include/header.php'); ?>
			<!-- END NAVBAR -->

			<!-- MAIN CONTENT -->
			<?php echo $this->session->flashdata('bilgi'); ?>

			<div class="main-content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<!-- RECENT PURCHASES -->
							<div class="panel">
								<div class="panel-body no-padding">
									<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
										<thead>
											<tr>
												<th>Staj Günü</th>
												<th>Gönderi Başlığı</th>
												<th>Tarih</th>
												<th class="text-center">Tıklanma Sayısı</th>
												<th>İşlem</th>
											</tr>
										</thead>

										<tbody>
											<?php foreach ($bilgi as $bilgi) { ?>
												<tr>
													<td><?php echo $bilgi->staj_gunu; ?></td>
													<td><?php echo $bilgi->paylasim_baslik; ?></td>
													<td><?php echo $bilgi->paylasim_tarih; ?></td>
													<td class="text-center"><?php echo $bilgi->tik_sayisi; ?></td>
													<td>
														<a href="<?php echo base_url('yonetimpaneli/paylasimsil'); echo '/'.$bilgi->paylasimID ?>"><button class="btn btn-danger"><i class="fa fa-remove"></i></button></a>
														<a href="<?php echo base_url('yonetimpaneli/paylasimguncelle'); echo '/'.$bilgi->paylasimID.'' ?>"><button class="btn btn-warning"><i class="fa fa-pencil"></i></button></a>
													</td>
												</tr>
											<?php } ?>
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
	<script src="<?php  echo base_url(); ?>assets/backend/assets/js/mesajlar-js.js"></script>
    <script src="<?php  echo base_url(); ?>assets/backend/assets/js/mesajlar-js1.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>
</body>
</html>
