<?php global $jhon_ver;?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="jhon:Full Stack Web Developer">
    <meta name="keywords" content="jhon,web designer,web Developer,freelancer,youtuber,graphics designer">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <!-- Favicon -->
    <!-- <link href="img/favicon.jpg" type="image/jpg" rel="icon"> -->
    

    <!-- Title -->
    <title><?php bloginfo('name')?></title>

    <!-- all css here -->
    <?php wp_head();?>

</head>
<body id="top" data-spy="scroll" data-target="#menu" data-offset="70">
    <!-- start preloader -->
    <div class="preloader">
        <div class="sk-folding-cube">
            <div class="sk-cube1 sk-cube"></div>
            <div class="sk-cube2 sk-cube"></div>
            <div class="sk-cube4 sk-cube"></div>
            <div class="sk-cube3 sk-cube"></div>
        </div>
    </div>
    <!-- end preloader -->

    <!--header start-->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-8 text-left">
                    <!--logo start-->
                    <div class="logo">
                        <!-- <a href="#"><p>Jh<span>o</span>n</p></a> -->
                        <a href="">
                            <img src="<?php echo $jhon_ver['logo_section_img_id']['url']?>" alt="">
                        </a>
                    </div>
                    <!--logo end-->
                </div>
                <div class="col-md-9 col-4">
                    <!--menu start-->
                    <?php 
                            wp_nav_menu(array(

                                'theme_location' => 'primary_menu',
                                'menu_id' => 'menu',
                                // 'fallback_cb' => 'callback',
                                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                'walker' => new WP_Bootstrap_Navwalker(),
                            ));


                        ?>
                    <!-- <ul id="menu">
                        <li class="nav-item">
                            <a href="#top" class="nav-link menu_link active">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#about" class="nav-link menu_link">About</a>
                        </li>
                        <li class="nav-item">
                            <a href="#works" class="nav-link menu_link">Works</a>
                        </li>
                        <li class="nav-item">
                            <a href="#service" class="nav-link menu_link">Service</a>
                        </li>
                        <li class="nav-item">
                            <a href="#exp" class="nav-link menu_link">Experience</a>
                        </li>
                         <li class="nav-item">
                            <a href="#news" class="nav-link menu_link">News</a>
                        </li>
                        <li class="nav-item">
                            <a href="#contact" class="nav-link menu_link">Contact</a>
                        </li>
                    </ul> -->

                    <!--menu end-->

                    <!-- navbar toggler btn -->
                    <div class="nav-toggler">
                        <i class="ti-menu-alt"></i>
                        <i class="ti-close"></i>
                    </div>
                    <!-- navbar toggler btn end-->
                </div>
            </div>
        </div>
    </header>
    <!-- header end -->