<?php 
	get_header(); 
	$templateDirectory = get_bloginfo('template_directory'); 	
?>
<?php while ( have_posts() ) : the_post(); ?>
	 <header style="background-image: url(<?php the_field('home_image', 2); ?>);">
        <div class="header-content">
            <div class="header-content-inner">
                <!--<h1>Your Favorite Source of Free Bootstrap Themes</h1>
                <hr>-->
                <p><img src="<?php  echo $templateDirectory;  ?>/library/images/black-collar-logo.svg" alt=""/></p>
                <!--<p>Vivamus et lorem in ligula efficitur porta et eu leo. Quisque accumsan leo et ipsum scelerisque interdum.</p>-->
                <!-- <a href="#about" class="btn btn-primary btn-xl page-scroll">Learn About Us</a> -->
            </div>
        </div>
        <a href="#about" class="scroll-button fadeLoop page-scroll"><span class="bc-sprite">&nbsp;</span></a>
    </header>

    <section class="bg-dark" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading"><?php the_field('about_header', 202); ?></h2>
                    <hr class="light">
                    <p class="text-faded"><?php the_field('about_description', 202); ?></p>
                    <a href="#order-form" data-toggle="modal" class="btn btn-default btn-xl">Start an Order</a>
                    <a href="#processModal" class="btn btn-default btn-xl" data-toggle="modal">Our Process</a>
                </div>
            </div>
        </div>
    </section>

    <section class="no-padding" id="portfolio">
        <div class="container-fluid">
            <div class="row no-gutter">
                <div class="col-lg-4 col-sm-6">
                    <a href="#portfolioModal1" class="portfolio-box" data-toggle="modal">
                        <img src="<?php the_field('featured_tshirt_image', 204); ?>" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-name">
                                    Shirts
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#portfolioModal2" class="portfolio-box" data-toggle="modal">
                        <img src="<?php the_field('featured_hoodie_image', 204); ?>" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-name">
                                    Hoodies & Jackets
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#portfolioModal3" class="portfolio-box" data-toggle="modal">
                        <img src="<?php the_field('featured_poster_image', 204); ?>" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-name">
                                    Posters
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#portfolioModal4" class="portfolio-box" data-toggle="modal">
                        <img src="<?php the_field('featured_athletic_image', 204); ?>" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-name">
                                    Athletic
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#portfolioModal5" class="portfolio-box" data-toggle="modal">
                        <img src="<?php the_field('custom_featured_image', 204); ?>" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-name">
                                    Custom
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#portfolioModal6" class="portfolio-box" data-toggle="modal">
                        <img src="<?php the_field('featured_cover_image', 204); ?>" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-name">
                                    Covers
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#portfolioModal7" class="portfolio-box" data-toggle="modal">
                        <img src="<?php the_field('featured_tote_image', 204); ?>" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-name">
                                    Totes
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#portfolioModal8" class="portfolio-box" data-toggle="modal">
                        <img src="<?php the_field('featured_tank_image', 204); ?>" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-name">
                                    Tanks
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#portfolioModal9" class="portfolio-box" data-toggle="modal">
                        <img src="<?php the_field('featured_koozie_image', 204); ?>" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-name">
                                    Koozies & Patches
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    
    <section id="services" class="bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading"><?php the_field('services_header'); ?></h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <!-- <i class="fa fa-4x fa-star-o wow bounceIn text-primary"></i> -->
                        <h3>T-Shirts</h3>
                        <p class="text-faded"><?php the_field('services_t-shirt_sub-head', 200); ?></p>
                        <a href="#tshirt-rates" data-toggle="modal">View Rates</a> 
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <!-- <i class="fa fa-4x fa-soccer-ball-o wow bounceIn text-primary" data-wow-delay=".1s"></i> -->
                        <h3>More Apparel</h3>
                        <p class="text-faded"><?php the_field('more_apparel_sub-head', 200); ?></p>
                        <a href="#moreapparel-rates" data-toggle="modal">View Rates</a> 
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <!-- <i class="fa fa-4x fa-music wow bounceIn text-primary" data-wow-delay=".2s"></i> -->
                        <h3>Posters and Covers</h3>
                        <p class="text-faded"><?php the_field('posters_sub-head', 200); ?></p>
                        <a href="#poster-rates" data-toggle="modal">View Rates</a> 
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <!-- <i class="fa fa-4x fa-heart wow bounceIn text-primary" data-wow-delay=".3s"></i> -->
                        <h3>Other Stuff</h3>
                        <p class="text-faded"><?php the_field('other_stuff_sub-head', 200); ?></p>
                        <a href="mailto:info@blackcollarprinting.com">Email Us for Rates</a> 
                    </div>
                </div>
            </div>
        </div>
    </section>

    <aside>
        <div class="container text-center">
            <div class="call-to-action">
                <h2>Place an order with us!</h2>
                <a href="#order-form" data-toggle="modal" class="btn btn-default btn-xl wow tada">Get Started</a>
            </div>
        </div>
    </aside>

    <section id="contact" class="bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading"><?php the_field('contact_header', 206); ?></h2>
                    <hr class="primary">
                    <p><?php the_field('contact_description', 206); ?></p>
                </div>
                <div class="col-lg-6 col-lg-offset-3">
	                <div class="col-md-4 text-center">
	                    <a href="mailto:info@blackcollarprinting.com"><i class="fa fa-envelope-o fa-3x wow bounceIn" data-wow-delay=".1s"></i></a>
	                </div>
	                <div class="col-md-4 text-center">
	                    <a href="https://www.instagram.com/blackcollar_screenprinting/" target="_blank"><i class="fa fa-instagram fa-3x wow bounceIn" data-wow-delay=".1s"></i></a>
	                </div>
	                <div class="col-md-4 text-center">
	                    <a href="http://blackcollarprinting.tumblr.com" target="_blank"><i class="fa fa-tumblr fa-3x wow bounceIn" data-wow-delay=".1s"></i></a>
	                </div>
	            </div>
                
            </div>
        </div>
    </section>
    
    <!-- Portfolio Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Shirts</h2>
                            <p class="item-intro text-muted"><?php the_field('tshirts_subhead', 204); ?></p>
	                            <div class="cycle-slideshow"
	                            data-cycle-swipe=true
		                        data-cycle-swipe-fx=scrollHorz 
							    data-cycle-fx=scrollHorz
							    data-cycle-timeout=4000
							    data-cycle-center-horz=true
							    data-cycle-pause-on-hover="true"
							    >
								<div class="cycle-prev"></div>
								<div class="cycle-next"></div>
								<?php if( have_rows('tshirt_images', 204) ): while ( have_rows('tshirt_images', 204) ) : the_row(); ?>
								
								<img src="<?php the_sub_field('shirt_image', 204); ?>">
								
								<?php endwhile; else : endif; ?>
							</div>
                            <!-- <img class="img-responsive img-centered" src="img/portfolio/roundicons-free.png" alt="">
                            <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                            <p>
                                <strong>Want these icons in this portfolio item sample?</strong>You can download 60 of them for free, courtesy of <a href="https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc">RoundIcons.com</a>, or you can purchase the 1500 icon set <a href="https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc">here</a>.</p>
                            <ul class="list-inline">
                                <li>Date: July 2014</li>
                                <li>Client: Round Icons</li>
                                <li>Category: Graphic Design</li>
                            </ul> -->
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Hoodies & Jackets</h2>
                            <p class="item-intro text-muted"><?php the_field('hoodies_subhead', 204); ?></p>
	                            <div class="cycle-slideshow"
	                            data-cycle-swipe=true
		                        data-cycle-swipe-fx=scrollHorz 
							    data-cycle-fx=scrollHorz
							    data-cycle-timeout=0
							    data-cycle-center-horz=true
							    data-cycle-center-vert=true
							    >
								<div class="cycle-prev"></div>
								<div class="cycle-next"></div>
							    <?php if( have_rows('hoodies_images', 204) ): while ( have_rows('hoodies_images', 204) ) : the_row(); ?>
								
								<img src="<?php the_sub_field('hoodies_image', 204); ?>">
								
								<?php endwhile; else : endif; ?>
							</div>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Posters</h2>
                            <p class="item-intro text-muted"><?php the_field('posters_subhead', 204); ?></p>
	                            <div class="cycle-slideshow"
	                            data-cycle-swipe=true
		                        data-cycle-swipe-fx=scrollHorz 
							    data-cycle-fx=scrollHorz
							    data-cycle-timeout=0
							    data-cycle-center-horz=true
							    data-cycle-center-vert=true
							    >
								<div class="cycle-prev"></div>
								<div class="cycle-next"></div>
							    <?php if( have_rows('poster_images', 204) ): while ( have_rows('poster_images', 204) ) : the_row(); ?>
								
								<img src="<?php the_sub_field('poster_image', 204); ?>">
								
								<?php endwhile; else : endif; ?>
							</div>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Athletic</h2>
                            <p class="item-intro text-muted"><?php the_field('athletic_subhead', 204); ?></p>
	                            <div class="cycle-slideshow"
	                            data-cycle-swipe=true
		                        data-cycle-swipe-fx=scrollHorz 
							    data-cycle-fx=scrollHorz
							    data-cycle-timeout=0
							    data-cycle-center-horz=true
							    data-cycle-center-vert=true
							    >
								<div class="cycle-prev"></div>
								<div class="cycle-next"></div>
							    <?php if( have_rows('athletic_images', 204) ): while ( have_rows('athletic_images', 204) ) : the_row(); ?>
								
								<img src="<?php the_sub_field('athletic_image', 204); ?>">
								
								<?php endwhile; else : endif; ?>
							</div>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Custom</h2>
                            <p class="item-intro text-muted"><?php the_field('custom_subhead', 204); ?></p>
	                            <div class="cycle-slideshow"
	                            data-cycle-swipe=true
		                        data-cycle-swipe-fx=scrollHorz 
							    data-cycle-fx=scrollHorz
							    data-cycle-timeout=0
							    data-cycle-center-horz=true
							    data-cycle-center-vert=true
							    >
								<div class="cycle-prev"></div>
								<div class="cycle-next"></div>
							    <?php if( have_rows('custom_images', 204) ): while ( have_rows('custom_images', 204) ) : the_row(); ?>
								
								<img src="<?php the_sub_field('custom_image', 204); ?>">
								
								<?php endwhile; else : endif; ?>
							</div>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Covers</h2>
                            <p class="item-intro text-muted"><?php the_field('covers_subhead', 204); ?></p>
	                            <div class="cycle-slideshow"
	                            data-cycle-swipe=true
		                        data-cycle-swipe-fx=scrollHorz 
							    data-cycle-fx=scrollHorz
							    data-cycle-timeout=0
							    data-cycle-center-horz=true
							    data-cycle-center-vert=true
							    >
								<div class="cycle-prev"></div>
								<div class="cycle-next"></div>
							    <?php if( have_rows('covers_images', 204) ): while ( have_rows('covers_images', 204) ) : the_row(); ?>
								
								<img src="<?php the_sub_field('covers_image', 204); ?>">
								
								<?php endwhile; else : endif; ?>
							</div>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Modal 7 -->
    <div class="portfolio-modal modal fade" id="portfolioModal7" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Totes</h2>
                            <p class="item-intro text-muted"><?php the_field('totes_subhead', 204); ?></p>
	                            <div class="cycle-slideshow"
	                            data-cycle-swipe=true
		                        data-cycle-swipe-fx=scrollHorz 
							    data-cycle-fx=scrollHorz
							    data-cycle-timeout=0
							    data-cycle-center-horz=true
							    data-cycle-center-vert=true
							    >
								<div class="cycle-prev"></div>
								<div class="cycle-next"></div>
							    <?php if( have_rows('tote_images', 204) ): while ( have_rows('tote_images', 204) ) : the_row(); ?>
								
								<img src="<?php the_sub_field('tote_image', 204); ?>">
								
								<?php endwhile; else : endif; ?>
							</div>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Modal 8 -->
    <div class="portfolio-modal modal fade" id="portfolioModal8" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Tanks</h2>
                            <p class="item-intro text-muted"><?php the_field('tanks_subhead', 204); ?></p>
	                            <div class="cycle-slideshow"
	                            data-cycle-swipe=true
		                        data-cycle-swipe-fx=scrollHorz 
							    data-cycle-fx=scrollHorz
							    data-cycle-timeout=0
							    data-cycle-center-horz=true
							    data-cycle-center-vert=true
							    >
								<div class="cycle-prev"></div>
								<div class="cycle-next"></div>
							    <?php if( have_rows('tank_images', 204) ): while ( have_rows('tank_images', 204) ) : the_row(); ?>
								
								<img src="<?php the_sub_field('tank_image', 204); ?>">
								
								<?php endwhile; else : endif; ?>
							</div>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Modal 9 -->
    <div class="portfolio-modal modal fade" id="portfolioModal9" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Koozies</h2>
                            <p class="item-intro text-muted"><?php the_field('koozies_subhead', 204); ?></p>
	                            <div class="cycle-slideshow"
	                            data-cycle-swipe=true
		                        data-cycle-swipe-fx=scrollHorz 
							    data-cycle-fx=scrollHorz
							    data-cycle-timeout=0
							    data-cycle-center-horz=true
							    data-cycle-center-vert=true
							    >
								<div class="cycle-prev"></div>
								<div class="cycle-next"></div>
							    <?php if( have_rows('koozie_images', 204) ): while ( have_rows('koozie_images', 204) ) : the_row(); ?>
								
								<img src="<?php the_sub_field('koozie_image', 204); ?>">
								
								<?php endwhile; else : endif; ?>
							</div>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Our Process Modal -->
    <div class="portfolio-modal modal fade" id="processModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2><?php the_field('process_header', 202); ?></h2>
                            <p class="item-intro text-muted"><?php the_field('process_sub-head', 202); ?></p>
	                            
                            <img class="img-responsive img-centered" src="<?php the_field('process_image', 202); ?>" alt="" />
                            <?php the_field('process_content', 202); ?>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Our Rate Modal #1 -->
    <div class="portfolio-modal modal fade" id="tshirt-rates" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2><?php the_field('services_t-shirt_rates_header', 200); ?></h2>
                            <p class="item-intro text-muted"><?php the_field('services_t-shirt_rates_sub-head', 200); ?></p>
                            <?php the_field('services_t-shirt_rates_content', 200); ?>
                            
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Our Rate Modal #2 -->
    <div class="portfolio-modal modal fade" id="moreapparel-rates" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2><?php the_field('more_apparel_rates_header', 200); ?></h2>
                            <p class="item-intro text-muted"><?php the_field('more_apparel_rates_sub-head', 200); ?></p>
                            <?php the_field('more_apparel_rates_content', 200); ?>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Our Rate Modal #3 -->
    <div class="portfolio-modal modal fade" id="poster-rates" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2><?php the_field('posters_rates_header', 200); ?></h2>
                            <p class="item-intro text-muted"><?php the_field('posters_rates_sub-head', 200); ?></p>
                            <?php the_field('posters_rates_content', 200); ?>
                            
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start and Order Modal -->
    <div class="portfolio-modal modal fade" id="order-form" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Start an Order</h2>
                            <p class="item-intro text-muted">Help us get started on your order quicker by filling out the form below or <a href="mailto:info@blackcollarprinting.com">Contact Us</a> directly if you're having trouble.</p>
                            <?php echo do_shortcode('[contact-form-7 id="4" title="Get Started Form"]'); ?>
							
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Shop Modal -->
    <div class="portfolio-modal modal fade" id="shop" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2><?php the_field('shop_header', 208); ?></h2>
                            <p class="item-intro text-muted"><?php the_field('shop_subhead', 208); ?></p>
                            <div class="col-xs-12 col-md-6">
	                            <div class="shop-img">
	                            	<a href="<?php  echo $templateDirectory;  ?>/library/images/cure-shirt.jpg" class="fancybox">
	                            		<img src="<?php  echo $templateDirectory;  ?>/library/images/cure-shirt.jpg" class="img-responsive" />
										<div class="zoom"><span></span></div>
	                        		</a>
	                        	</div>
	                        	<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
								<input type="hidden" name="cmd" value="_s-xclick">
								<input type="hidden" name="hosted_button_id" value="K2F3G6A7CERZU">
								<input type="hidden" name="on0" value="Sizes">
								Sizes<br>
								<select name="os0">
									<option value="Small">Small </option>
									<option value="Medium">Medium </option>
									<option value="Large">Large </option>
									<option value="XL">XL </option>
								</select><br>
								<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
								<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
								</form>


	                        </div>
	                        <div class="col-xs-12 col-md-6">
		                        <div class="shop-img">
			                        <a href="<?php  echo $templateDirectory;  ?>/library/images/jd-shirt.jpg" class="fancybox">
	                            		<img src="<?php  echo $templateDirectory;  ?>/library/images/jd-shirt.jpg" class="img-responsive" />
										<div class="zoom"><span></span></div>
	                            	</a>
	                        	</div>
	                        	<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
								<input type="hidden" name="cmd" value="_s-xclick">
								<input type="hidden" name="hosted_button_id" value="4NDC6GMLFVL56">
								<input type="hidden" name="on0" value="Sizes">
								Sizes<br>
								<select name="os0">
									<option value="Small">Small </option>
									<option value="Medium">Medium </option>
									<option value="Large">Large </option>
									<option value="XL">XL </option>
								</select><br>
								<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
								<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
								</form>

	                        </div> 
	                        <div class="col-xs-12 col-md-6">
	                            <div class="shop-img">
	                            	<a href="<?php  echo $templateDirectory;  ?>/library/images/skate-tshirt.jpg" class="fancybox">
	                            		<img src="<?php  echo $templateDirectory;  ?>/library/images/skate-tshirt.jpg" class="img-responsive" />
										<div class="zoom"><span></span></div>
	                        		</a>
	                        	</div>
	                        	<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
								<input type="hidden" name="cmd" value="_s-xclick">
								<input type="hidden" name="hosted_button_id" value="28FCCFJX6FJS8">
								<input type="hidden" name="on0" value="Sizes">
								Sizes<br>
								<select name="os0">
									<option value="Small">Small </option>
									<option value="Medium">Medium </option>
									<option value="Large">Large </option>
									<option value="XL">XL </option>
								</select><br>
								<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
								<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
								</form>


	                        </div> 
							
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>

