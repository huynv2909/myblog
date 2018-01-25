<head>
    
    <!-- Meta Tag -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- SEO -->
    <meta name="description" content="150 words">
    <meta name="author" content="huynv">
    <meta name="url" content="http://www.yourdomainname.com">
    <meta name="copyright" content="company name">
    <meta name="robots" content="index,follow">
    
    
    <title><?php echo $title; ?></title>
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo public_url(); ?>images/favicon/fav-icon.ico">
    <link rel="apple-touch-icon" sizes="144x144" type="image/x-icon" href="<?php echo public_url(); ?>images/favicon/apple-touch-icon.png">
    
    <!-- All CSS Plugins -->
    <link rel="stylesheet" type="text/css" href="<?php echo public_url(); ?>css/plugin.css">
    
    <!-- Main CSS Stylesheet -->
    <link rel="stylesheet" type="text/css" href="<?php echo public_url(); ?>css/style.css">
    
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
    <script type="text/javascript" src="<?php echo public_url(); ?>js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo public_url(); ?>js/plugin.js"></script>

    <!-- Main Javascript File  -->
    <script type="text/javascript" src="<?php echo public_url(); ?>js/scripts.js"></script>
    <script type="text/javascript" src="<?php echo public_url(); ?>js/myscript.js"></script>

    <?php if ($highlight) {
        $this->load->view('site/import/syntaxhighlighterJS');
    }?>
    

</head>