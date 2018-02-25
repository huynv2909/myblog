<?php foreach ($posts as $post) { ?>
        
	<div class="col-md-12 blog-post">
	  	<div class="post-title">
	    	<a href="<?php echo $post->link; ?>"><h1><?php echo $post->title; ?></h1></a>
	  	</div>  
	  	<div class="post-info">
	    	<span><?php echo date_format(date_create($post->created), 'F jS, Y'); ?> / by <a href="#" target="_blank">Huy NV</a></span>
	  	</div>  
	  	<p><?php echo $post->intro; ?></p>                                
	  	<a href="<?php echo $post->link; ?>" class="button button-style button-anim fa fa-long-arrow-right"><span>Read More</span></a>
	</div>

<?php } ?>