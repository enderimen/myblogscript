			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<div class="navbar-btn">
						<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
					</div>
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-menu">
							<span class="sr-only">Toggle Navigation</span>
							<i class="fa fa-bars icon-nav"></i>
						</button>
					</div>
					<div id="navbar-menu" class="navbar-collapse collapse">
						<ul class="nav navbar-nav navbar-right">
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="<?php  echo base_url(); ?>/assets/backend/assets/img/profil-img.jpg" style="width: 24px;height: 24px;" class="img-circle" alt="Avatar"> <span>Ender İMEN</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
								<ul class="dropdown-menu">
									<li><a href="<?php echo base_url('yonetimpaneli/profilim'); ?>"><i class="lnr lnr-user"></i> <span>Profilimi Gör</span></a></li>
									<li><a href="<?php echo base_url('yonetim/cikis'); ?>"><i class="lnr lnr-exit"></i> <span>Çıkış Yap</span></a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</nav>