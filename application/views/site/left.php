<!-- About Me (Left Sidebar) Start -->
<div class="col-md-3">
  <div class="about-fixed info-me">
    
    <div class="my-pic">
        <img src="<?php echo public_url(); ?>images/blog/author.jpg" alt="Nguyen Van Huy">
        <a href="javascript:void(0)" class="collapsed" data-target="#menu" data-toggle="collapse"><i class="icon-menu menu"></i></a>
         <div id="menu" class="collapse">
           <ul class="menu-link">
               <li><a href="about.html">About</a></li>
               <li><a href="work.html">Work</a></li>
               <li><a href="contact.html">Contact</a></li>
            </ul>
         </div>
    </div>
      
      
      
    <div class="my-detail">
    	
      <div class="white-spacing">
            <h1><?php echo $me->name; ?></h1>
            <span><?php echo $me->job; ?></span>
      </div> 
       
      <ul class="social-icon">
         <li><a href="<?php echo $me->facebook_link; ?>" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a></li>
         <li><a href="<?php echo $me->twister_link; ?>" target="_blank" class="twitter"><i class="fa fa-twitter"></i></a></li>
         <li><a href="<?php echo $me->linkedin_link; ?>" target="_blank" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
         <li><a href="<?php echo $me->github_link; ?>" target="_blank" class="github"><i class="fa fa-github"></i></a></li>
      </ul>

    </div>

    <div class="for-me">
      <form method="post" accept-charset="utf-8" id="ask-me" action="<?php echo base_url('home/get_ask'); ?>">
        <label for="content" class="main-color">Ask me a question?</label>
        <textarea name="content" id="ask-content" class='autoExpand' rows='3' data-min-rows='3' placeholder="What's your ask?"></textarea>
        <p id="notify-errors" class="notify">
          <?php $message = $this->session->flashdata('message-error');
             if (isset($message) && $message) echo $message; ?>
        </p>
        <p id="notify-success" class="notify">
          <?php $message = $this->session->flashdata('message-success');
             if (isset($message) && $message) echo $message; ?>
        </p>
        <p id="notify-errors-js" class="notify"><i class="fa fa-exclamation-circle" aria-hidden="true"></i><span>Hãy nhập nội dung!</span></p>
        <p id="notify-success-js" class="notify"><i class="fa fa-check-circle" aria-hidden="true"></i><span>Nội dung đã gửi thành công!</span></p>
        <input type="submit" name="send" value="Send" class="my-btn">
      </form>
    </div>
  </div>
</div>
<!-- About Me (Left Sidebar) End -->