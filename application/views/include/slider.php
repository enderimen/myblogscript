

	<!--Slider-->

	<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
	  <ol class="carousel-indicators">
	    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	    <li data-target="#myCarousel" data-slide-to="1"></li>
	    <li data-target="#myCarousel" data-slide-to="2"></li>
	    <li data-target="#myCarousel" data-slide-to="3"></li>
	  </ol>

  	<!-- Wrapper for slides -->
  	<div class="carousel-inner">
	    <div class="item active">
	      <img src="<?php echo base_url();?>assets/frontend/img/r1.jpg" alt="Los Angeles">
	    </div>

	    <div class="item">
	      <img src="<?php echo base_url();?>assets/frontend/img/r2.jpg" alt="Chicago">
	    </div>

    	<div class="item">
  		  <img src="<?php echo base_url();?>assets/frontend/img/r3.jpg" alt="New York">
    	</div>

    	<div class="item">
  		  <img src="<?php echo base_url();?>assets/frontend/img/r4.jpg" alt="New York">
    	</div>
  	</div>

	<!-- Left and right controls -->
	  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
	    <span class="glyphicon glyphicon-chevron-left"></span>
	    <span class="sr-only">Geri</span>
	  </a>
	  <a class="right carousel-control" href="#myCarousel" data-slide="next">
	    <span class="glyphicon glyphicon-chevron-right"></span>
	    <span class="sr-only">İleri</span>
	  </a>
	</div>