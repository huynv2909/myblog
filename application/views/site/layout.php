<!DOCTYPE html>
<html lang="en">
	<?php $this->load->view('site/head', $this->data); ?>
	<body>
		<!-- Preloader Start -->
     	<!-- <div class="preloader">
	   		<div class="rounder"></div>
      	</div> -->
      	<!-- Preloader End -->
      
	    <div id="main">
	        <div class="container">
	            <div class="row">
	            	<?php $this->load->view('site/left', $me); ?>
	            	<div class="col-md-9">
		            	<?php $this->load->view($temp, $this->data); ?>
		            	<?php $this->load->view('site/footer'); ?>
	            	</div>
	            </div>
            </div>
        </div>

        <!-- Back to Top Start -->
	    <a href="#" class="scroll-to-top"><i class="fa fa-long-arrow-up"></i></a>
	    <!-- Back to Top End -->
	</body>
</html>