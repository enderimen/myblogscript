<?php 
	$this->load->view('/include/header'); 
	$this->load->view('/include/slider');
 ?>

	<!--Grid Sistemi Başlangıç-->	
	<div class="container">
		<br>
		<div class="row">

				<!--Staj Günlerim-->

				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-right">
					<div class="panel panel-default">
						<div class="panel-heading"><div class="panel-title">Staj Günlüğüm</div></div>
							<ul class="list-group">
								<?php foreach ($staj_gunleri as $bilgiler) { ?>
									<a href="<?php echo base_url('paylasimlar');echo '/'.$bilgiler->paylasim_link ?>">
										<li class="list-group-item"><?php echo $bilgiler->staj_gunu.". Gün"; ?><span class="badge"><?php echo $bilgiler->tik_sayisi ?></span></li>
									</a>
								<?php } ?>
							</ul>
					</div>
				</div>
				
				<!--Yazılarım-->
				
				<?php foreach ($bilgi as $bilgi) { ?>
				
				<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
					<div class="panel panel-default">
						<div class="panel-heading"><div class="panel-title"><h3><?php echo $bilgi->paylasim_baslik; ?></h3> </div></div>
						<div class="panel-body">
							<?php echo kisalt($bilgi->paylasim_yazisi);?><a href="<?php echo base_url('paylasimlar');echo '/'.$bilgi->paylasim_link; ?>">Devamını Oku</a>				                		             <p class="post-meta pull-right" style="color:gray"><?php echo "Paylaşım Tarihi: ".$bilgi->paylasim_tarih; ?></p>
						</div>
					</div>
				</div>
				
				<?php } ?>	
				
				</div>
				
				<!--Sayfalama Başlangıç-->

				<nav aria-label="Page navigation">
				  <ul class="pagination">
					    <ul class="pager">
				    		<li><?php echo $linkler; ?>	</li>				    	
					    </ul>
				  </ul>
				</nav>
				
				<!--Sayfalama Bitiş-->		
	</div>

	<?php $this->load->view('/include/footer');?>

</body>
</html>	

