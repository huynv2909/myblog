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
    <link rel="shortcut icon" href="https://s3-ap-southeast-1.amazonaws.com/huynv/MyBlog/public/images/favicon/fav-icon.ico">
    <link rel="apple-touch-icon" sizes="144x144" type="image/x-icon" href="https://s3-ap-southeast-1.amazonaws.com/huynv/MyBlog/public/images/favicon/apple-touch-icon.png">
    
    <!-- All CSS Plugins -->
    <link rel="stylesheet" type="text/css" href="https://s3-ap-southeast-1.amazonaws.com/huynv/MyBlog/public/css/plugin.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
    <!-- Main CSS Stylesheet -->
    <!-- <link rel="stylesheet" type="text/css" href="https://s3-ap-southeast-1.amazonaws.com/huynv/MyBlog/public/css/style.css"> -->
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
    <script type="text/javascript" src="https://s3-ap-southeast-1.amazonaws.com/huynv/MyBlog/public/js/plugin.js"></script>

    <!-- Main Javascript File  -->
    <!-- <script type="text/javascript" src="https://s3-ap-southeast-1.amazonaws.com/huynv/MyBlog/public/js/myscript.js"></script> -->
    <script type="text/javascript" src="<?php echo public_url('js/myscript.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo public_url('js/scripts.js'); ?>"></script>
    <!-- <script type="text/javascript" src="https://s3-ap-southeast-1.amazonaws.com/huynv/MyBlog/public/js/scripts.js"></script> -->

    <?php if ($highlight) {
        $this->load->view('site/import/syntaxhighlighterJS');
    }?>
    

</head>