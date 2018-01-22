<div class="col-md-12 page-body">
   <div class="row">
    
        
      <div class="sub-title">
         <h2>My Blog</h2>
         <a href="contact.html"><i class="icon-envelope"></i></a>
      </div>
           
           
      <div class="col-md-12 content-page">
         
           <?php foreach ($posts as $post) { ?>
             
           
                <!-- Blog Post Start -->
                <div class="col-md-12 blog-post">
                  <div class="post-title">
                    <a href="<?php echo $post->link; ?>"><h1><?php echo $post->title; ?></h1></a>
                  </div>  
                  <div class="post-info">
                    <span><?php echo date_format(date_create($post->created), 'F jS, Y'); ?> / by <a href="<?php echo base_url(); ?>" target="_blank">Huy NV</a></span>
                  </div>  
                  <p><?php echo $post->intro; ?></p>                                
                  <a href="<?php echo $post->link; ?>" class="button button-style button-anim fa fa-long-arrow-right"><span>Read More</span></a>
                </div>
                <!-- Blog Post End -->

           <?php } ?>
           
           
           <div class="col-md-12 text-center" id="load-but">
            <a href="<?php echo base_url('home/load_more'); ?>" id="load-more-post" class="load-more-button">Load</a>
            <div id="post-end-message"></div>
           </div>
           
      </div>
          
   </div>
      
   <!-- Subscribe Form Start -->
   <div class="col-md-8 col-md-offset-2">
      <form id="sub-form" action="<?php echo base_url('home/subscribe?'); ?>">

         <div class="subscribe-form margin-top-20">
            <input id="email" type="email" placeholder="Email Address" class="text-input">
            <button class="submit-btn" type="submit">Submit</button>
         </div>
         <p id="notify-oh" class="notify">
             <?php $message = $this->session->flashdata('message-oh');
                if (isset($message) && $message) echo $message; ?>
           </p>
           <p id="notify-thanks" class="notify">
             <?php $message = $this->session->flashdata('message-thanks');
                if (isset($message) && $message) echo $message; ?>
           </p>
           <p id="notify-oh-js" class="notify"><i class="fa fa-exclamation-circle" aria-hidden="true"></i><span>Your email??? :(</span></p>
           <p id="notify-thanks-js" class="notify"><i class="fa fa-check-circle" aria-hidden="true"></i><span>Thank you!</span></p>
         <p>Subscribe to my weekly newspost</p>
      </form>
       
   </div>
   <!-- Subscribe Form End -->
         
</div>