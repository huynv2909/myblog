<div class="row">

   <div class="sub-title">
      <a href="<?php echo base_url(); ?>" title="Go to Home Page"><h2>Back Home</h2></a>
      <a href="#comment" class="smoth-scroll"><i class="icon-bubbles"></i></a>
   </div>


   <div class="col-md-12 content-page">
      <div class="col-md-12 blog-post">
 
   
      <!-- Post Headline Start -->
      <div class="post-title">
         <h1><?php echo $post->title; ?></h1> 
      </div>
      <!-- Post Headline End -->
       
       
      <!-- Post Detail Start -->
      <div class="post-info">
         <span><?php echo date_format(date_create($post->created), 'F jS, Y'); ?> / by <a href="<?php echo base_url(); ?>" target="_blank">HuyNV</a></span>
      </div>
      <!-- Post Detail End -->
       
      <!-- Post Start -->
         <?php echo $post->content; ?>
      <!-- Post Start -->
       
      <!-- Post Author Bio Box Start -->
      <div class="about-author margin-top-70 margin-bottom-50">
       
         <div class="picture">
            <img src="<?php echo public_url(); ?>images/blog/author.png" class="img-responsive" alt="">
         </div>
      
         <div class="c-padding">
            <h3>Article By <a href="<?php echo base_url(); ?>" target="_blank" data-toggle="tooltip" data-placement="top" title="Visit HuyNV Website">HuyNV</a></h3>
            <p><?php echo $me->about; ?></p>
         </div>
      </div>
      <!-- Post Author Bio Box End -->

       
      <!-- You May Also Like Start -->
      <div class="you-may-also-like margin-top-50 margin-bottom-50">
         <h3>You may also like</h3>
         <div class="row">
       
            <?php for ($i=0; $i < 3; $i++) { ?>
               <div class="col-md-4 col-sm-6 col-xs-12">
                  <a href="<?php echo base_url($random_posts[$i]->id); ?>">
                  <p><?php echo $random_posts[$i]->title; ?></p>
                  </a>
               </div>
            <?php } ?>

         </div>
      </div>
      <!-- You May Also Like End -->
     
     
      <!-- Post Comment (Disqus) Start -->
      <div id="comment">
         <h3>Discuss about post</h3>
         <div id="cmt-list">
         
         <?php foreach ($comments as $comment): ?>
            <div class="comment" id="cmt-<?php echo $comment->id; ?>">
               <div class="avatar col-xs-2">

                  <?php if ($comment->ad): ?>
                     <i class="icon-check text-center" style="color: <?php echo $comment->audience; ?>; font-weight: bold;"></i>
                  <?php else: ?>
                     <i class="icon-user text-center" style="color: <?php echo $comment->audience; ?>;"></i>
                  <?php endif ?>
               </div>
               <div class="cmt-body col-xs-10">
                  <p class="cmt-content"><?php echo $comment->content; ?></p>
                  <p class="cmt-date"><?php echo $comment->created; ?></p>
               </div>
               <div class="clearfix"></div>
            </div>
         <?php endforeach ?>

            <div class="col-md-12 text-center" id="more-cmt">
               <a href="<?php echo base_url('home/load_cmt'); ?>" id="load-more-cmt" class="load-more-button" data-post="<?php echo $comment->id_post; ?>">Load</a>
               <div id="cmt-end-message"></div>
            </div>
            
            <div class="clearfix"></div>
         </div>

         <form method="post" action="home/comment" id="cmt-form" data-post="<?php echo $comment->id_post; ?>" >
            <textarea class='autoExpand' rows='2' data-min-rows='2' placeholder="Leave your comment..." id="cmt" name="comment"></textarea>
            <p id="notify-empty-js" class="notify"><i class="fa fa-exclamation-circle" aria-hidden="true"></i><span>Type your comment...</span></p>
            <input type="submit" class="my-btn" id="submit-cmt" value="Comment">
         </form>
      </div>
      <!-- Post Comment (Disqus) End -->

      </div>    
   </div>
 
</div>

<!-- Endpage Box (Popup When Scroll Down) Start -->
<div id="scroll-down-popup" class="endpage-box">
   <h4>Read Also</h4>
   <a href="<?php echo base_url($random_posts[3]->id); ?>"><?php echo $random_posts[3]->title; ?></a>
</div>
<!-- Endpage Box (Popup When Scroll Down) End -->