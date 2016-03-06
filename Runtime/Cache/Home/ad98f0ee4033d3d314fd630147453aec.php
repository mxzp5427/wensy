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
                            <li><a href=""><i class="fa fa-facebook"></i></a></li>
                            <li><a href=""><i class="fa fa-twitter"></i></a></li>
                            <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                            <li><a href=""><i class="fa fa-dribbble"></i></a></li>
                            <li><a href=""><i class="fa fa-linkedin"></i></a></li>
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
                        <h1><img src="/Public/Home/singlecolor/images/logo.png" alt="logo"></h1>
                    </a>
                    
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <?php $__NAV__ = M('Channel')->field(true)->where("status=1")->order("sort")->select(); if(is_array($__NAV__)): $i = 0; $__LIST__ = $__NAV__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nav): $mod = ($i % 2 );++$i; if(($nav["pid"]) == "0"): ?><li class="dropdown">
                                <a href="<?php echo (get_nav_url($nav["url"])); ?>" target="<?php if(($nav["target"]) == "1"): ?>_blank<?php else: ?>_self<?php endif; ?>"><?php echo ($nav["title"]); ?><i class="fa fa-angle-down"></i></a>


                                <ul role="menu" class="sub-menu">
                                    <li><a href="aboutus.html">About</a></li>
                                    <li><a href="aboutus2.html">About 2</a></li>
                                    <li><a href="service.html">Services</a></li>
                                    <li><a href="pricing.html">Pricing</a></li>
                                    <li><a href="contact.html">Contact us</a></li>
                                    <li><a href="contact2.html">Contact us 2</a></li>
                                    <li><a href="404.html">404 error</a></li>
                                    <li><a href="coming-soon.html">Coming Soon</a></li>
                                </ul>
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
    
    <section id="blog" class="padding-bottom">
        <div class="container">
            <div class="row">
                <div class="timeline-blog overflow padding-top">
                    <!--<div class="timeline-date text-center">
                        <a href="#" class="btn btn-common uppercase">November 2013</a>
                    </div>-->

                    <div class="timeline-divider overflow padding-bottom">
                        <?php if(is_array($list)): foreach($list as $key=>$vo): ?><div <?php if(($key+1) % 2 == 0): ?>class="col-sm-6 padding-left padding-top arrow-left wow fadeInRight" <?php else: ?>class="col-sm-6 padding-right arrow-right wow fadeInLeft"<?php endif; ?> data-wow-duration="1000ms" data-wow-delay="300ms">
                            <div class="single-blog timeline">
                                <div class="single-blog-wrapper">
                                    <?php if(!empty($vo["cover_id"])): ?><div class="post-thumb">
                                        <img src="<?php echo (get_cover($vo["cover_id"],'path')); ?>" class="img-responsive" alt="">
                                        <div class="post-overlay">
                                           <span class="uppercase"><a href="javascript:;"><?php echo (date("d",$vo["create_time"])); ?> <br><small><?php echo (date("M",$vo["create_time"])); ?></small></a></span>
                                       </div>
                                    </div><?php endif; ?>
                                    <div class="post-thumb">
                                        <audio src="/Public/Home/singlecolor/audio/juicy.mp3" preload="auto"></audio>
                                    </div>
                                </div>
                                <div class="post-content overflow">
                                    <h2 class="post-title bold"><a href="<?php echo U('detail?id='.$vo['id']);?>"><?php echo ($vo["title"]); ?></a></h2>
                                    <h3 class="post-author"><a href="#">Posted by enjoy english</a></h3>
                                    <p><?php echo ($vo["description"]); ?></p>
                                    <a href="<?php echo U('detail?id='.$vo['id']);?>" class="read-more">View More</a>
                                    <div class="post-bottom overflow">
                                        <span class="post-date pull-left"><?php echo (date("F d, Y", $vo["create_time"])); ?></span>
                                        <!--<span class="comments-number pull-right"><a href="#">3 comments</a></span>-->
                                    </div>
                                </div>
                            </div>
                        </div><?php endforeach; endif; ?>
                    </div>
                </div>                
                </div>
            </div>
        </div>
    </section>
    <!--/#blog-->
    <script type="text/javascript" src="/Public/Home/singlecolor/js/audio.min.js"></script>
    <script>
      audiojs.events.ready(function() {
        var as = audiojs.createAll();
      });
    </script>
    <script type="text/javascript" src="/Public/Home/singlecolor/js/masonry.min.js"></script>
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
                        <p>&copy; Your Company 2014. All Rights Reserved.</p>
                        <p>Designed by <a target="_blank" href="http://www.themeum.com">Themeum</a></p>
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