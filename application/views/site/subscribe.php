<!-- Subscribe Form Start -->
<div class="col-md-8 col-md-offset-2">
   <form id="sub-form" action="<?php echo base_url('home/subscribe'); ?>">

      <div class="subscribe-form margin-top-20">
         <input id="email" name="email" type="email" placeholder="Email Address" class="text-input">
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