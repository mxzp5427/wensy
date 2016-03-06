<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="<?php echo C('WEB_SITE_KEYWORD');?>">
    <meta name="description" content="<?php echo C('WEB_SITE_DESCRIPTION');?>">
    <meta name="author" content="墨司玖">
    <title><?php echo C('WEB_SITE_TITLE');?></title>
    <link href="/Public/Home/singlecolor/css/bootstrap.min.css" rel="stylesheet">
    <link href="/Public/Home/singlecolor/css/font-awesome.min.css" rel="stylesheet">
    <link href="/Public/Home/singlecolor/css/animate.min.css" rel="stylesheet"> 
    <link href="/Public/Home/singlecolor/css/lightbox.css" rel="stylesheet"> 
	<link href="/Public/Home/singlecolor/css/main.css" rel="stylesheet">
	<link href="/Public/Home/singlecolor/css/responsive.css" rel="stylesheet">

    <!--[if lt IE 9]>
	    <script src="js/html5shiv.js"></script>
	    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="/Public/Home/singlecolor/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/Public/Home/singlecolor/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/Public/Home/singlecolor/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/Public/Home/singlecolor/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="/Public/Home/singlecolor/images/ico/apple-touch-icon-57-precomposed.png">
</head>
<!--/head-->

<body>
	<header id="header">      
        <div class="container">
            <div class="row">
                <div class="col-sm-12 overflow">
                   <div class="social-icons pull-right">
                        <ul class="nav nav-pills">
                            <!--<li><a href=""><i class="fa fa-facebook"></i></a></li>
                            <li><a href=""><i class="fa fa-twitter"></i></a></li>
                            <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                            <li><a href=""><i class="fa fa-dribbble"></i></a></li>
                            <li><a href=""><i class="fa fa-linkedin"></i></a></li>-->
                        </ul>
                    </div> 
                </div>
             </div>
        </div>
        <div class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand" href="index.html">
                        <h1 style="display:none;"><img src="/Public/Home/singlecolor/images/logo.png" alt="logo"></h1>
                    </a>
                    
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <?php $__NAV__ = M('Channel')->field(true)->where("status=1")->order("sort")->select();$__NAV__ = list_to_tree($__NAV__, "id", "pid", "_"); if(is_array($__NAV__)): $i = 0; $__LIST__ = $__NAV__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nav): $mod = ($i % 2 );++$i; if(($nav["pid"]) == "0"): ?><li <?php if(($nav["alias"]) == "current"): ?>class="active"<?php else: ?>class="dropdown"<?php endif; ?>>
                                <a href="<?php echo (get_nav_url($nav["url"])); ?>" target="<?php if(($nav["target"]) == "1"): ?>_blank<?php else: ?>_self<?php endif; ?>"><?php echo ($nav["title"]); if(!empty($nav["_"])): ?><i class="fa fa-angle-down"></i><?php endif; ?></a>

                                <?php if(!empty($nav["_"])): ?><ul role="menu" class="sub-menu">
                                <?php if(is_array($nav["_"])): foreach($nav["_"] as $key=>$vo): ?><li><a href="<?php echo ($vo["url"]); ?>"><?php echo ($vo["title"]); ?></a></li><?php endforeach; endif; ?>
                                </ul><?php endif; ?>
                            </li><?php endif; endforeach; endif; else: echo "" ;endif; ?>                                           
                    </ul>
                </div>
                <div class="search">
                    <form role="form">
                        <i class="fa fa-search"></i>
                        <div class="field-toggle">
                            <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </header>
    <!--/#header-->
    <section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title"><?php echo ($category["title"]); ?></h1>
                            <p><?php echo ($category["description"]); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </section>
    <!--/#page-breadcrumb-->

    <section id="recent-projects" class="recent-projects">
        <div class="container">
            <div class="row">
                <!--<h1 class="title text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="300ms">Recent Projects</h1>
                <p class="text-center padding-bottom wow fadeInDown" data-wow-duration="400ms" data-wow-delay="400ms">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br>
                Ut enim ad minim veniam, quis nostrud </p>-->


                <?php if(is_array($category["child"])): foreach($category["child"] as $key=>$vo): ?><div class="col-sm-3 col-xs-6 wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <a href="<?php echo U('lists?category='.$vo['id']);?>">
                    <div class="portfolio-wrapper">   
                        <div class="portfolio-single">
                            <div class="portfolio-thumb">
                                <img src="/Public/Home/singlecolor/images/portfolio/1.jpg" class="img-responsive" alt="">
                            </div>
                            <!--<div class="portfolio-view">
                                <ul class="nav nav-pills">
                                    <li><a href="/Public/Home/singlecolor/images/portfolio/1.jpg" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                </ul>
                            </div>-->
                        </div>
                        <div class="portfolio-info">
                            <h2 style="text-align:center;"><?php echo ($vo["title"]); ?></h2>
                        </div>
                    </div>
                    </a>
                </div><?php endforeach; endif; ?>
                
            </div>
        </div>
    </section>
    <!--/#recent-projects-->

    <section id="clients">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="clients text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
                        <p><img src="/Public/Home/singlecolor/images/home/clients.png" class="img-responsive" alt=""></p>
                        <h1 class="title">Happy Learning</h1>
                        <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br> Ut enim ad minim veniam, quis nostrud </p>
                    </div>
                    <!--<div class="clients-logo wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="col-xs-3 col-sm-2">
                            <a href="#"><img src="/Public/Home/singlecolor/images/home/client1.png" class="img-responsive" alt=""></a>
                        </div>
                        <div class="col-xs-3 col-sm-2">
                            <a href="#"><img src="/Public/Home/singlecolor/images/home/client2.png" class="img-responsive" alt=""></a>
                        </div>
                         <div class="col-xs-3 col-sm-2">
                            <a href="#"><img src="/Public/Home/singlecolor/images/home/client3.png" class="img-responsive" alt=""></a>
                        </div>
                         <div class="col-xs-3 col-sm-2">
                            <a href="#"><img src="/Public/Home/singlecolor/images/home/client4.png" class="img-responsive" alt=""></a>
                        </div>
                         <div class="col-xs-3 col-sm-2">
                            <a href="#"><img src="/Public/Home/singlecolor/images/home/client5.png" class="img-responsive" alt=""></a>
                        </div>
                         <div class="col-xs-3 col-sm-2">
                            <a href="#"><img src="/Public/Home/singlecolor/images/home/client6.png" class="img-responsive" alt=""></a>
                        </div>
                    </div>-->
                </div>
            </div>
        </div>
     </section>
    <!--/#clients-->


    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center bottom-separator">
                    <img src="/Public/Home/singlecolor/images/home/under.png" class="img-responsive inline" alt="">
                </div>
                <!--<div class="col-md-4 col-sm-6">
                    <div class="testimonial bottom">
                        <h2>Testimonial</h2>
                        <div class="media">
                            <div class="pull-left">
                                <a href="#"><img src="/Public/Home/singlecolor/images/home/profile1.png" alt=""></a>
                            </div>
                            <div class="media-body">
                                <blockquote>Nisi commodo bresaola, leberkas venison eiusmod bacon occaecat labore tail.</blockquote>
                                <h3><a href="#">- Jhon Kalis</a></h3>
                            </div>
                         </div>
                        <div class="media">
                            <div class="pull-left">
                                <a href="#"><img src="/Public/Home/singlecolor/images/home/profile2.png" alt=""></a>
                            </div>
                            <div class="media-body">
                                <blockquote>Capicola nisi flank sed minim sunt aliqua rump pancetta leberkas venison eiusmod.</blockquote>
                                <h3><a href="">- Abraham Josef</a></h3>
                            </div>
                        </div>   
                    </div> 
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="contact-info bottom">
                        <h2>Contacts</h2>
                        <address>
                        E-mail: <a href="mailto:someone@example.com">email@email.com</a> <br> 
                        Phone: +1 (123) 456 7890 <br> 
                        Fax: +1 (123) 456 7891 <br> 
                        </address>

                        <h2>Address</h2>
                        <address>
                        Unit C2, St.Vincent's Trading Est., <br> 
                        Feeder Road, <br> 
                        Bristol, BS2 0UY <br> 
                        United Kingdom <br> 
                        </address>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="contact-form bottom">
                        <h2>Send a message</h2>
                        <form id="main-contact-form" name="contact-form" method="post" action="sendemail.php">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" required="required" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" required="required" placeholder="Email Id">
                            </div>
                            <div class="form-group">
                                <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Your text here"></textarea>
                            </div>                        
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-submit" value="Submit">
                            </div>
                        </form>
                    </div>
                </div>-->
                <div class="col-sm-12">
                    <div class="copyright-text text-center">
                        <p>&copy; Enjoy English 2016. All Rights Reserved.</p>
                        <p>Developed by <a target="_blank" href="http://www.mosijiu.me">墨司玖</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--/#footer-->

    <script type="text/javascript" src="/Public/Home/singlecolor/js/jquery.js"></script>
    <script type="text/javascript" src="/Public/Home/singlecolor/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/Public/Home/singlecolor/js/lightbox.min.js"></script>
    <script type="text/javascript" src="/Public/Home/singlecolor/js/wow.min.js"></script>
    <script type="text/javascript" src="/Public/Home/singlecolor/js/main.js"></script>      
</body>
</html>