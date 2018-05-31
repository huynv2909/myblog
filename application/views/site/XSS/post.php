<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title><?php echo $title; ?></title>

      <!-- Favicon -->
      <link rel="shortcut icon" href="https://s3-ap-southeast-1.amazonaws.com/huysblog/images/favicon/fav-icon.ico">
      <link rel="apple-touch-icon" sizes="144x144" type="image/x-icon" href="https://s3-ap-southeast-1.amazonaws.com/huysblog/images/favicon/apple-touch-icon.png">

      <!-- All CSS Plugins -->
      <link rel="stylesheet" type="text/css" href="https://s3-ap-southeast-1.amazonaws.com/huysblog/css/plugin.css">

      <!-- Font Awesome -->
      <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css">

      <!-- Bootstrap -->
      <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

      <!-- Main CSS Stylesheet -->
      <link rel="stylesheet" type="text/css" href="<?php echo public_url('css/style.css'); ?>">

      <!-- Google Web Fonts  -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700">

      <?php if ($highlight) {
          $this->load->view('site/import/syntaxhighlighterCSS');
      }?>


      <!-- HTML5 shiv and Respond.js support IE8 or Older for HTML5 elements and media queries -->
      <!--[if lt IE 9]>
  	   <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  	   <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->



      <!-- All Javascript Plugins  -->
      <script src="http://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
      <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="https://s3-ap-southeast-1.amazonaws.com/huysblog/js/plugin.js"></script>

      <!-- Main Javascript File  -->
      <script type="text/javascript" src="<?php echo public_url('js/myscript.js'); ?>"></script>
      <script type="text/javascript" src="https://s3-ap-southeast-1.amazonaws.com/huysblog/js/scripts.js"></script>

      <?php if ($highlight) {
          $this->load->view('site/import/syntaxhighlighterJS');
      }?>
   </head>
   <body>
      <div class="container">
      <div class="row">

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
                  <p>i can't, you can't... but we can</p>
               </div>
            </div>
            <!-- Post Author Bio Box End -->


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

   </div>
   </body>
</html>
