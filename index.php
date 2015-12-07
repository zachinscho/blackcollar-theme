<?php 
	get_header(); 
	$templateDirectory = get_bloginfo('template_directory'); 	
?>
	 <header>
        <div class="header-content">
            <div class="header-content-inner">
                <!--<h1>Your Favorite Source of Free Bootstrap Themes</h1>
                <hr>-->
                <p><img src="<?php  echo $templateDirectory;  ?>/library/images/black-collar-logo.svg" alt=""/></p>
                <!--<p>Vivamus et lorem in ligula efficitur porta et eu leo. Quisque accumsan leo et ipsum scelerisque interdum.</p>-->
                <a href="#about" class="btn btn-primary btn-xl page-scroll">Learn About Us</a>
            </div>
        </div>
    </header>

    <section class="bg-dark" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">About Black Collar</h2>
                    <hr class="light">
                    <p class="text-faded">We're a full service DIY screen printing shop located in Baltimore, MD. We offer everything from basic t-shirt printing to album packaging, posters and eco-friendly printing.</p>
                    <a href="#" class="btn btn-default btn-xl">Start an Order</a>
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
                        <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/bc-port-1.jpg" class="img-responsive" alt="">
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
                        <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/bc-port-2.jpg" class="img-responsive" alt="">
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
                        <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/bc-port-3.jpg" class="img-responsive" alt="">
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
                        <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/bc-port-4.jpg" class="img-responsive" alt="">
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
                        <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/bc-port-5.jpg" class="img-responsive" alt="">
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
                        <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/bc-port-6.jpg" class="img-responsive" alt="">
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
                        <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/bc-port-7.jpg" class="img-responsive" alt="">
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
                        <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/bc-port-8.jpg" class="img-responsive" alt="">
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
                        <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/bc-port-9.jpg" class="img-responsive" alt="">
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
                    <h2 class="section-heading">Our Services and Rates</h2>
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
                        <p class="text-muted">We have lots of options to choose from including USA and Union made shirts.</p>
                        <a href="#tshirt-rates">View Rates</a> 
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <!-- <i class="fa fa-4x fa-soccer-ball-o wow bounceIn text-primary" data-wow-delay=".1s"></i> -->
                        <h3>More Apparel</h3>
                        <p class="text-muted">We've got Hoodies, Jackets/Windbreakers, Atheletic Apparel, Tanks and more.</p>
                        <a href="#moreapparel-rates">View Rates</a> 
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <!-- <i class="fa fa-4x fa-music wow bounceIn text-primary" data-wow-delay=".2s"></i> -->
                        <h3>Posters and Covers</h3>
                        <p class="text-muted">We can print show posters and the cover packaging for your album art as well.</p>
                        <a href="#poster-rates">View Rates</a> 
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <!-- <i class="fa fa-4x fa-heart wow bounceIn text-primary" data-wow-delay=".3s"></i> -->
                        <h3>Other Stuff</h3>
                        <p class="text-muted">We've got Patches, Koozies, Totes and even Truck Decals. Let us know what you need.</p>
                        <a href="#other-rates">Email Us for Rates</a> 
                    </div>
                </div>
            </div>
        </div>
    </section>

    <aside>
        <div class="container text-center">
            <div class="call-to-action">
                <h2>Place an order with us!</h2>
                <a href="#" class="btn btn-default btn-xl wow tada">Get Started</a>
            </div>
        </div>
    </aside>

    <section id="contact" class="bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Let's Get In Touch!</h2>
                    <hr class="primary">
                    <p>Ready to start your next project with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!</p>
                </div>
                <!-- <div class="col-lg-4 col-lg-offset-2 text-center">
                    <i class="fa fa-phone fa-3x wow bounceIn"></i>
                    <p>123-456-6789</p>
                </div> -->
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <i class="fa fa-envelope-o fa-3x wow bounceIn" data-wow-delay=".1s"></i>
                    <p><a href="mailto:your-email@your-domain.com">info@blackcollarprinting.com</a></p>
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
                            <p class="item-intro text-muted">Here are a few of the shirts we've printed over the years.</p>
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
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/shirts/bc-port-shirts01.jpg">
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/shirts/bc-port-shirts02.jpg">
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/shirts/bc-port-shirts03.jpg">
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/shirts/bc-port-shirts04.jpg">
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/shirts/bc-port-shirts05.jpg">
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/shirts/bc-port-shirts06.jpg">
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/shirts/bc-port-shirts07.jpg">
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/shirts/bc-port-shirts08.jpg">
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/shirts/bc-port-shirts09.jpg">
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/shirts/bc-port-shirts10.jpg">
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/shirts/bc-port-shirts11.jpg">
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
                            <!-- Project Details Go Here -->
                            <h2>Hoodies & Jackets</h2>
                            <p class="item-intro text-muted">Here are some Hoodies & Jackets we've printed over the years.</p>
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
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/hoodies/bc-port-hoodies01.jpg">
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/hoodies/bc-port-hoodies02.jpg">
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/hoodies/bc-port-hoodies03.jpg">
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/hoodies/bc-port-hoodies04.jpg">
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/hoodies/bc-port-hoodies05.jpg">
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/hoodies/bc-port-hoodies06.jpg">
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/hoodies/bc-port-hoodies07.jpg">
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/hoodies/bc-port-hoodies08.jpg">
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/hoodies/bc-port-hoodies09.jpg">
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/hoodies/bc-port-hoodies10.jpg">
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/hoodies/bc-port-hoodies11.jpg">
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
                            <h2>Our Process</h2>
                            <p class="item-intro text-muted">Here are some Hoodies & Jackets we've printed over the years.</p>
	                            
                            <img class="img-responsive img-centered" src="img/portfolio/roundicons-free.png" alt="">
                            <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                            <p>
                                <strong>Want these icons in this portfolio item sample?</strong>You can download 60 of them for free, courtesy of <a href="https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc">RoundIcons.com</a>, or you can purchase the 1500 icon set <a href="https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc">here</a>.</p>
                            <ul class="list-inline">
                                <li>Date: July 2014</li>
                                <li>Client: Round Icons</li>
                                <li>Category: Graphic Design</li>
                            </ul>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>






<?php get_footer(); ?>

