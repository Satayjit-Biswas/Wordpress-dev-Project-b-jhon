<?php get_header();?>
<?php global $jhon_ver;?>
    <!-- start Home wrapper -->
    <div class="home_wrapper" id="home" style="background-image: url('<?php echo $jhon_ver['home_section_img_id']['url']?>');">
        <div class="container">
            <div class="row text-center align-items-center">
                <div class="col-12">
                    <p><?php echo $jhon_ver['home_section_text_a'];?></p>
                    <h1><?php echo $jhon_ver['home_section_text_b'];?></h1>
                    <h4><?php echo $jhon_ver['home_section_text_c'];?></h4>
                </div>
            </div>
        </div>
    </div>
    <!-- end Home wrapper -->

    <!-- start about wrapper -->
    <section id="about" class="section_padd">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center section-title">About Me</h2>
                </div>
            </div>
            <div class="aboutMain">
                <div class="imageBox">
                    <img src="<?php echo $jhon_ver['about_section_img_id']['url']?>" alt="">
                </div>
                <div class="row">
                    <div class="col-md-7">
                        <p class="aboutText"><?php echo $jhon_ver['about_section_text_f'];?>
                        </p>
                        <button class="button wow bounceInUp mr_15" type="button">Download CV</button>
                        <button class="button" type="button">Hire Me</button>
                    </div>
                    <div class="col-md-5">
                        <ul>
                            <li><span>Name :</span><?php echo $jhon_ver['home_section_text_b'];?></li>
                            <li><span>Birthday:</span> <?php echo $jhon_ver['about_section_text_a'];?></li>
                            <li><span>Gender:</span> <?php echo $jhon_ver['about_section_text_b'];?></li>
                            <li><span>E-mail:</span> <?php echo $jhon_ver['about_section_text_c'];?></li>
                            <li><span>Country:</span> <?php echo $jhon_ver['about_section_text_d'];?></li>
                            <li><span>Phone:</span> <?php echo $jhon_ver['about_section_text_e'];?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end about wrapper -->

    <!-- start project wrapper-->
    <section class="portfolio section_padd" id="works">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="section-title">Work I Have Done</h2>
                </div>
            </div>
            <div class="portfolio-menu text-center">
                <ul>
                <li class="button sel-item" data-filter="*">All</li>
                <?php 
                    $work_cat =get_terms('category');
                   
                    if(!empty($work_cat)):foreach($work_cat as $portfolio_cat):

                
                ?>
                    <li class="button" data-filter=".<?php echo esc_attr($portfolio_cat->slug);?>"><?php echo esc_html($portfolio_cat->name);?></li>
                    <?php
                    endforeach;
                    endif;
                ?>
                    <!-- <li class="button" data-filter=".development">Development</li>
                    <li class="button" data-filter=".marketing">Marketing</li> -->
                </ul>
            </div>
            <div class="row justify-content-center">
                <div class="col-sm-8 col-md-12">
                    <div class="row portfolio-items">
                        <!--Portfolio Item-->
                        <?php
                        $work_data = new WP_Query(array(
                            'post_type'     => 'work_section',
                            'posts_per_page'=> -1,
                            'order'         =>'ASC'
                    ));
                    if($work_data -> have_posts()):
                        while($work_data -> have_posts()): $work_data -> the_post(); 
                        ?>
                        <div class="col-lg-4 col-md-6 item
                        <?php
                        $work_cat_id_var = get_the_terms(get_the_ID(),'category');
                        if(!empty($work_cat_id_var)) : foreach($work_cat_id_var as $work_cat_id) :
                                 echo $work_cat_id->slug.' ';
                        endforeach;
                        endif;
                        ?>
                         wow slideInLeft">
                            <div class="item-content">
                                <?php the_post_thumbnail();?>
                                <div class="item-overlay">
                                    <h6><?php the_title();?></h6>
                                    <div class="icons">
                                        <a href="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'full' ); ?>" class="icon">
                                            <i class="fas fa-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    endwhile;
                    endif;
                    ?>

                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end project wrapper-->

    <!-- start service wrapper-->
    <section class="service-section section_padd" id="service">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center mb_30">
                    <h2 class="section-title">What I do</h2>
                </div>
                <div class="col-sm-8 col-md-12">
                    <div class="row">


                    <?php
                    $What_I_do_data = new WP_Query(array(
                        'post_type'     => 'What_I_do_section',
                        'posts_per_page'=> -1,
                        'order'         =>'ASC'
                    ));
                    if($What_I_do_data -> have_posts()){
                        while($What_I_do_data -> have_posts()): $What_I_do_data -> the_post(); 
                        ?>
                        <div class="col-md-6 col-lg-4">
                            <div class="serviceBox">
                                <div class="service-icon">
                                    <i class="fas fa-laptop-code"></i>
                                </div>
                                <h3 class="title"><?php the_title();?></h3>
                                <p class="description">
                                    <!-- <?php the_excerpt();?> -->
                                    <?php echo wp_trim_words(get_the_content(),14,NULL); ?>
                                </p>
                            </div>
                        </div>
                        
                    <?php
                    endwhile;
                    }
                    ?>
                        <!-- <div class="col-md-6 col-lg-4">
                            <div class="serviceBox">
                                <div class="service-icon">
                                    <i class="fas fa-laptop-code"></i>
                                </div>
                                <h3 class="title">WEB DESIGN</h3>
                                <p class="description">
                                    Amet ipsum dolor sit amet, cons adipiscing elit. Donec odio. Quisque volutpat mattis eros.
                                </p>
                            </div>
                        </div>


                        <div class="col-md-6 col-lg-4">
                            <div class="serviceBox">
                                <div class="service-icon">
                                    <i class="fab fa-connectdevelop"></i>
                                </div>
                                <h3 class="title">WEB DEVELOPMENT</h3>
                                <p class="description">
                                    Amet ipsum dolor sit amet, cons adipiscing elit. Donec odio. Quisque volutpat mattis eros.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="serviceBox">
                                <div class="service-icon">
                                    <i class="fab fa-wordpress-simple"></i>
                                </div>
                                <h3 class="title">WORDPRESS</h3>
                                <p class="description">
                                    Amet ipsum dolor sit amet, cons adipiscing elit. Donec odio. Quisque volutpat mattis eros.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="serviceBox">
                                <div class="service-icon">
                                    <i class="fas fa-mobile"></i>
                                </div>
                                <h3 class="title">RESPONSIVE DESIGN</h3>
                                <p class="description">
                                    Amet ipsum dolor sit amet, cons adipiscing elit. Donec odio. Quisque volutpat mattis eros.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="serviceBox">
                                <div class="service-icon">
                                    <i class="far fa-file-alt"></i>
                                </div>
                                <h3 class="title">WEB RESEARCH</h3>
                                <p class="description">
                                    Amet ipsum dolor sit amet, cons adipiscing elit. Donec odio. Quisque volutpat mattis eros.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="serviceBox">
                                <div class="service-icon">
                                    <i class="fab fa-sistrix"></i>
                                </div>
                                <h3 class="title">SEO</h3>
                                <p class="description">
                                    Amet ipsum dolor sit amet, cons adipiscing elit. Donec odio. Quisque volutpat mattis eros.
                                </p>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end service wrapper-->

    <!-- start counter wrapper -->
    <div class="counter section_padd">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-xl-11">
                    <div class="row">
                        <div class="col-sm-6 col-lg-3">
                            <div class="counter-wrapper">
                                <i class="fas fa-heart"></i>
                                <h4><?php echo $jhon_ver['counter_section_a_text_a_id'];?></h4>
                                <span class="counter-number"><?php echo $jhon_ver['counter_section_a_text_b_id'];?></span>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="counter-wrapper">
                                <i class="fas fa-handshake"></i>
                                <h4><?php echo $jhon_ver['counter_section_b_text_a_id'];?></h4>
                                <span class="counter-number"><?php echo $jhon_ver['counter_section_b_text_b_id'];?></span>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="counter-wrapper">
                                <i class="fas fa-moon"></i>
                                <h4><?php echo $jhon_ver['counter_section_c_text_a_id'];?></h4>
                                <span class="counter-number"><?php echo $jhon_ver['counter_section_c_text_b_id'];?></span>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="counter-wrapper">
                                <i class="fas fa-trophy"></i>
                                <h4><?php echo $jhon_ver['counter_section_d_text_a_id'];?></h4>
                                <span class="counter-number"><?php echo $jhon_ver['counter_section_d_text_b_id'];?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end counter wrapper -->

    <!-- start experience wrapper -->
    <section class="timeline-bg section_padd" id="exp">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb_60">
                    <h2 class="section-title">Experience</h2>
                </div>
                <div class="main-timeline">

                <?php
                    $experience_data = new WP_Query(array(
                        'post_type'     => 'experience_section',
                        'posts_per_page'=> 5,
                        'order'         =>'DSC'
                    ));
                    if($experience_data -> have_posts()){
                        while($experience_data -> have_posts()): $experience_data -> the_post();
                        
                        ?>
                        <div class="timeline">
                        <div class="timeline-icon">
                            <?php the_post_thumbnail();?>
                        </div>
                        <div class="timeline-content">
                            <span class="date"><?php echo get_the_date(); ?></span>
                            <h5 class="title"><?php the_title(); ?></h5>
                            <p class="description">
                            <?php the_excerpt();?>
                            </p>
                        </div>
                    </div>

                    <?php
                    endwhile;
                    

                }
                    ?>
                </div>
            </div>
        </div>
    </section>
    <!-- end experience wrapper -->

    <!-- start latest news wrapper -->
    <div class="news_wrapper section_padd" id="news">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center mb_30">
                    <h2 class="section-title">Latest News</h2>
                </div>
                <div class="col-sm-9 col-md-12">
                    <div class="row">

                    <?php
                    $latest_news_data = new WP_Query(array(
                        'post_type'     => 'latest_news',
                        'posts_per_page'=> -1,
                        'order'         =>'DSC'
                    ));
                    if($latest_news_data -> have_posts()){
                        while($latest_news_data -> have_posts()): $latest_news_data -> the_post();
                        
                        ?>
                        <div class="col-md-6 col-lg-4">
                            <div class="single_news mt_30">
                                <?php the_post_thumbnail('latest_news_thumbnails',array('class'=>'news_img'));?>
                                <div class="news_body">
                                    <a href="<?php the_permalink();?>">
                                        <h4 class="mb_15"><?php the_title();?></h4>
                                    </a>
                                    <p><?php the_excerpt();?></p>
                                </div>
                                <div class="news_footer">
                                    <div class="admin">
                                        <div class="admin_img mr_10">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/c-2.png" alt="">
                                        </div>
                                        <p>
                                            <span>
                                                <?php the_author();?>
                                            </span> /<?php echo get_the_date('F j, Y'); ?> 
                                        </p>
                                    </div>
                                    <p><i class="far fa-comment mr_5"></i>12</p>
                                </div>
                            </div>
                        </div>

                    <?php
                    endwhile;
                    }
                    ?>


                        <!-- <div class="col-md-6 col-lg-4">
                            <div class="single_news mt_30">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/b-1.png" class="news_img" alt="">
                                <div class="news_body">
                                    <a href="#">
                                        <h4 class="mb_15">Friendly Bachelor Entrance</h4>
                                    </a>
                                    <p>Lorem ipsum dolor sit amet, consectr adipisi sed do eiusmod tempor incid</p>
                                </div>
                                <div class="news_footer">
                                    <div class="admin">
                                        <div class="admin_img mr_10">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/c-2.png" alt="">
                                        </div>
                                        <p><span>Jamel Grant</span> / 5 March</p>
                                    </div>
                                    <p><i class="far fa-comment mr_5"></i>12</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="single_news mt_30">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/b-2.png" class="news_img" alt="">
                                <div class="news_body">
                                    <a href="#">
                                        <h4 class="mb_15">Mediation Group Classe Started</h4>
                                    </a>
                                    <p>Lorem ipsum dolor sit amet, consectr adipisi sed do eiusmod tempor incid</p>
                                </div>
                                <div class="news_footer">
                                    <div class="admin">
                                        <div class="admin_img mr_10">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/c-2.png" alt="">
                                        </div>
                                        <p><span>Jamel Grant</span> / 5 March</p>
                                    </div>
                                    <p><i class="far fa-comment mr_5"></i>12</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="single_news mt_30">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/b-3.png" class="news_img" alt="">
                                <div class="news_body">
                                    <a href="#">
                                        <h4 class="mb_15">Obviously Everyone Goes</h4>
                                    </a>
                                    <p>Lorem ipsum dolor sit amet, consectr adipisi sed do eiusmod tempor incid</p>
                                </div>
                                <div class="news_footer">
                                    <div class="admin">
                                        <div class="admin_img mr_10">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/c-2.png" alt="">
                                        </div>
                                        <p><span>Jamel Grant</span> / 5 March</p>
                                    </div>
                                    <p><i class="far fa-comment mr_5"></i>12</p>
                                </div>
                            </div>
                        </div> -->




                    </div>    
                </div>
            </div>
        </div>
    </div>
    <!-- end latest news wrapper -->

    <!-- start contact wrapper -->
    <section id="contact" class="section_padd">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb_60">
                    <h2 class="section-title">Contact Me</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d116577.09580939967!2d89.81870701922381!3d24.06509860710598!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fe05de38dbd583%3A0x13ea9198dbc46e62!2sNagarpur+Upazila!5e0!3m2!1sen!2sbd!4v1553607889162" class="d-block" allowfullscreen></iframe>
                </div>
            </div>
            <div class="address-wrapper">
                <div class="row text-center">
                    <div class="col-md-4 mt_30">
                        <i class="fas fa-map-marker-alt"></i>
                        <p><?php echo $jhon_ver['about_section_text_d'];?></p>
                    </div>
                    <div class="col-md-4 mt_30">
                        <i class="fas fa-phone"></i>
                        <p><?php echo $jhon_ver['about_section_text_e'];?></p>
                    </div>
                    <div class="col-md-4 mt_30">
                        <i class="far fa-envelope-open"></i>
                        <p><?php echo $jhon_ver['about_section_text_c'];?></p>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-12 wow zoomIn">
                    <?php echo do_shortcode('[contact-form-7 id="78" title="Contact form"]');?>
                    <!-- <form id="contactForm">

                    <div id="contactForm">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="inputBox">
                                      
                                    <label>Name*</label>
                                    [text* your-name id:name]
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="inputBox">
                                  
                                    <label>Email*</label>
                                     [email* your-email id:email]
                                </div>
                            </div>
                        </div>
                        <div class="inputBox">
                      
                            <label>Message*</label>
                            [textarea* your-message id:message]
                        </div>
                        <button type="submit" id="msgSubmit" class="button">SEND MAIL</button>
                        </div>



                        <div class="row">
                            <div class="col-md-6">
                                <div class="inputBox">
                                    <input type="text" id="name" autocomplete="off" required />
                                    <label>Name*</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="inputBox">
                                    <input type="email" id="email" autocomplete="off" required />
                                    <label>Email*</label>
                                </div>
                            </div>
                        </div>
                        <div class="inputBox">
                            <textarea id="message" autocomplete="off" required></textarea>
                            <label>Message*</label>
                        </div>
                        <button type="submit" id="msgSubmit" class="button">SEND MAIL</button>
                    </form> -->
                </div>
            </div>
        </div>
    </section>
    <!-- end contact wrapper -->

    <!-- start footer wrapper -->
    <?php get_footer();?>

