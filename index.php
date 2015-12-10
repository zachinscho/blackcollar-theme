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
                <!-- <a href="#about" class="btn btn-primary btn-xl page-scroll">Learn About Us</a> -->
            </div>
        </div>
        <a href="#about" class="scroll-button fadeLoop page-scroll"><span class="bc-sprite">&nbsp;</span></a>
    </header>

    <section class="bg-dark" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">About Black Collar</h2>
                    <hr class="light">
                    <p class="text-faded">We're a full service DIY screen printing shop located in Baltimore, MD. We offer everything from basic t-shirt printing to album packaging, posters and eco-friendly printing.</p>
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
                        <p class="text-faded">We have lots of options to choose from including USA and Union made shirts.</p>
                        <a href="#tshirt-rates" data-toggle="modal">View Rates</a> 
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <!-- <i class="fa fa-4x fa-soccer-ball-o wow bounceIn text-primary" data-wow-delay=".1s"></i> -->
                        <h3>More Apparel</h3>
                        <p class="text-faded">We've got Hoodies, Jackets/Windbreakers, Atheletic Apparel, Tanks and more.</p>
                        <a href="#moreapparel-rates" data-toggle="modal">View Rates</a> 
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <!-- <i class="fa fa-4x fa-music wow bounceIn text-primary" data-wow-delay=".2s"></i> -->
                        <h3>Posters and Covers</h3>
                        <p class="text-faded">We can print show posters and the cover packaging for your album art as well.</p>
                        <a href="#poster-rates" data-toggle="modal">View Rates</a> 
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <!-- <i class="fa fa-4x fa-heart wow bounceIn text-primary" data-wow-delay=".3s"></i> -->
                        <h3>Other Stuff</h3>
                        <p class="text-faded">We've got Patches, Koozies, Totes and even Truck Decals. Let us know what you need.</p>
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
                    <h2 class="section-heading">Let's Get In Touch!</h2>
                    <hr class="primary">
                    <p>Ready to start your next project with us? <br>Give us a call or send us an email and we will get back to you as soon as possible!</p>
                </div>
                <!-- <div class="col-lg-4 col-lg-offset-2 text-center">
                    <i class="fa fa-phone fa-3x wow bounceIn"></i>
                    <p>123-456-6789</p>
                </div> -->
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <i class="fa fa-envelope-o fa-3x wow bounceIn" data-wow-delay=".1s"></i>
                    <p><a href="mailto:info@blackcollarprinting.com">info@blackcollarprinting.com</a></p>
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
                            <p class="item-intro text-muted">Here are some Posters we've printed over the years.</p>
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
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/posters/bc-port-posters01.jpg">
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/posters/bc-port-posters02.jpg">
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/posters/bc-port-posters03.jpg">
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/posters/bc-port-posters04.jpg">
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/posters/bc-port-posters05.jpg">
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/posters/bc-port-posters06.jpg">
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/posters/bc-port-posters07.jpg">
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/posters/bc-port-posters08.jpg">
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/posters/bc-port-posters09.jpg">
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/posters/bc-port-posters10.jpg">
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/posters/bc-port-posters11.jpg">
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/posters/bc-port-posters12.jpg">
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/posters/bc-port-posters13.jpg">
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/posters/bc-port-posters14.jpg">
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/posters/bc-port-posters15.jpg">
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/posters/bc-port-posters16.jpg">
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/posters/bc-port-posters17.jpg">
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/posters/bc-port-posters18.jpg">
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/posters/bc-port-posters19.jpg">
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/posters/bc-port-posters20.jpg">
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/posters/bc-port-posters21.jpg">
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/posters/bc-port-posters22.jpg">
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
                            <p class="item-intro text-muted">Here is some Athletic Apparel we've printed over the years.</p>
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
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/athletic/bc-port-athletic01.jpg">
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/athletic/bc-port-athletic02.jpg">
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/athletic/bc-port-athletic03.jpg">
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/athletic/bc-port-athletic04.jpg">
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/athletic/bc-port-athletic05.jpg">
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/athletic/bc-port-athletic06.jpg">
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/athletic/bc-port-athletic07.jpg">
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/athletic/bc-port-athletic08.jpg">
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/athletic/bc-port-athletic09.jpg">
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/athletic/bc-port-athletic10.jpg">
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/athletic/bc-port-athletic11.jpg">
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/athletic/bc-port-athletic12.jpg">
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/athletic/bc-port-athletic13.jpg">
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/athletic/bc-port-athletic14.jpg">
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/athletic/bc-port-athletic15.jpg">
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
                            <p class="item-intro text-muted">Here is some Custom Apparel we've printed over the years.</p>
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
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/custom/bc-port-custom01.jpg">
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/custom/bc-port-custom02.jpg">
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/custom/bc-port-custom03.jpg">
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/custom/bc-port-custom04.jpg">
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/custom/bc-port-custom05.jpg">
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/custom/bc-port-custom06.jpg">
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/custom/bc-port-custom07.jpg">
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/custom/bc-port-custom08.jpg">
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/custom/bc-port-custom09.jpg">
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/custom/bc-port-custom10.jpg">
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/custom/bc-port-custom11.jpg">
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/custom/bc-port-custom12.jpg">
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/custom/bc-port-custom13.jpg">
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/custom/bc-port-custom14.jpg">
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/custom/bc-port-custom15.jpg">
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/custom/bc-port-custom16.jpg">
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/custom/bc-port-custom17.jpg">
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/custom/bc-port-custom18.jpg">
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/custom/bc-port-custom19.jpg">
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/custom/bc-port-custom20.jpg">
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/custom/bc-port-custom21.jpg">
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/custom/bc-port-custom22.jpg">
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/custom/bc-port-custom23.jpg">
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/custom/bc-port-custom24.jpg">
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
                            <p class="item-intro text-muted">Here is some artwork we've printed over the years.</p>
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
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/covers/bc-port-covers01.jpg">
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/covers/bc-port-covers02.jpg">
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/covers/bc-port-covers03.jpg">
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/covers/bc-port-covers04.jpg">
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/covers/bc-port-covers05.jpg">
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/covers/bc-port-covers06.jpg">
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/covers/bc-port-covers07.jpg">
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/covers/bc-port-covers08.jpg">
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/covers/bc-port-covers09.jpg">
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/covers/bc-port-covers10.jpg">
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/covers/bc-port-covers11.jpg">
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/covers/bc-port-covers12.jpg">
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/covers/bc-port-covers13.jpg">
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/covers/bc-port-covers14.jpg">
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/covers/bc-port-covers15.jpg">
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/covers/bc-port-covers16.jpg">
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/covers/bc-port-covers17.jpg">
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/covers/bc-port-covers18.jpg">
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/covers/bc-port-covers19.jpg">
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
                            <p class="item-intro text-muted">Here are some tote bags we've printed over the years.</p>
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
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/totes/bc-port-totes01.jpg">
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/totes/bc-port-totes02.jpg">
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/totes/bc-port-totes03.jpg">
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/totes/bc-port-totes04.jpg">
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/totes/bc-port-totes05.jpg">
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
                            <p class="item-intro text-muted">Here are some tanks we've printed over the years.</p>
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
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/tanks/bc-port-tanks01.jpg">
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/tanks/bc-port-tanks02.jpg">
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/tanks/bc-port-tanks03.jpg">
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/tanks/bc-port-tanks04.jpg">
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/tanks/bc-port-tanks05.jpg">
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/tanks/bc-port-tanks06.jpg">
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/tanks/bc-port-tanks07.jpg">
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
                            <p class="item-intro text-muted">Here are some koozies and patches we've printed over the years.</p>
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
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/koozies/bc-port-koozies01.jpg">
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/koozies/bc-port-koozies02.jpg">
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/koozies/bc-port-koozies03.jpg">
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/koozies/bc-port-koozies04.jpg">
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/koozies/bc-port-koozies05.jpg">
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/koozies/bc-port-koozies06.jpg">
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/koozies/bc-port-koozies07.jpg">
							    <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/koozies/bc-port-koozies08.jpg">
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
                            <h2>Our Process</h2>
                            <p class="item-intro text-muted">All of our work is printed by hand in our basement studio in Charles Village, Baltimore.</p>
	                            
                            <img class="img-responsive img-centered" src="<?php  echo $templateDirectory;  ?>/library/images/process-img.jpg" alt="">
                            <p>We're a small operation that puts pride into every job we take on. Quality and attention to detail are our strong suits.</p>
                            <p>
                                <strong>We are committed to providing our clients with the best products and service.</strong> We print on shirts made in the USA and offer Eco-Friendly printing options with water based inks and Union made apparel.</p>
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
                            <h2>T-Shirt Rates</h2>
                            <p class="item-intro text-muted">These are our starting rates for tshirts and screens.<br><a href="mailto:info@blackcollarprinting.com">Contact Us</a> for any special requests or questions.</p>
                            <strong>- $6 PER SHIRT FOR 1 COLOR, 1 SIDED</strong><br>
                        	<ul class="list-inline">
                            	<li>*add $ 2 per shirt for specialty brands such as American Apparel or Alstyle</li>
                            	<li>*add $1 per shirt for specialty sizes (XXL’s, youth sizes, etc.)</li>
                            	<li>*add 50 cents per additional color, can do up to 4 (ie; $6.50 for a red and black print on white shirt)</li>
                            	<li>* add $1 extra per additional side/print placement</li>
                            </ul>
                            <strong>- $20 screen set-up charge per screen</strong><br>
                        	<ul class="list-inline">
	                        	<li>* multicolor jobs require additional screens</li><br>
	                        	<li>* will save screen for up to a year</li>
	                        </ul>
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
                            <h2>Rates for other apparel</h2>
                            <p class="item-intro text-muted">These are our starting rates for Hoodies, Jackets/Windbreakers, Atheletic Apparel, Tanks and more. <a href="mailto:info@blackcollarprinting.com">Contact Us</a> for any special requests or questions.</p>
                            <strong>HOODIES</strong><br>
                        	<ul class="list-inline">
                            	<li>- $16 each for 1 color <br>(add 50 cents per additional color)</li>
                            	<li>- $18 each for zip up)</li>
                            	<li>- $20 for screen set-up</li>
                            </ul>
                            <strong>LONG SLEEVE TEES</strong><br>
                        	<ul class="list-inline">
	                        	<li>- $10 each for 1 color<br>(add 50 cents per additional color)</li>
	                        	<li>- $20 for screen set-up</li>
	                        </ul>
	                        <strong>OTHER SERVICES</strong> (upon request):<br>
	                        <ul class="list-inline">
		                        <li>- patches</li>
		                        <li>- record covers</li>
		                        <li>- truck decals</li>
		                        <li>- koozies</li>
		                    </ul>
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
                            <h2>Rates for Posters and Covers</h2>
                            <p class="item-intro text-muted">These are our starting rates to print show posters and the cover packaging for your album art. <a href="mailto:info@blackcollarprinting.com">Contact Us</a> for any special requests or questions.</p>
                            <strong>POSTERS</strong><br>
                        	<ul class="list-inline">
                            	<li>- $4 each for 1 color on heavy card stock <br>(add 50 cents a print per additional color)</li>
                            	<li>- $10 per screen set-up</li>
                            	<li>- Can do up to 18x24p</li>
                            </ul>
                            <strong>DESIGN/ART</strong><br>
                        	<ul class="list-inline">
	                        	<li>- $25 per hour (upon request)</li>
	                        </ul>
	                        <strong>OTHER SERVICES</strong> (upon request):<br>
	                        <ul class="list-inline">
		                        <li>- patches</li>
		                        <li>- record covers</li>
		                        <li>- truck decals</li>
		                        <li>- koozies</li>
		                    </ul>
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
                            <h2>Black Collar Shop</h2>
                            <p class="item-intro text-muted">Here are some items for sale that we've design and printed ourselves. <a href="mailto:info@blackcollarprinting.com">Contact Us</a> directly if you have any questions.</p>
                            <div class="col-xs-12 col-md-6">
	                            <div class="shop-img">
	                            	<a href="<?php  echo $templateDirectory;  ?>/library/images/cure-shirt.jpg" class="fancybox">
	                            		<img src="<?php  echo $templateDirectory;  ?>/library/images/cure-shirt.jpg" class="img-responsive" />
										<div class="zoom"><span></span></div>
	                        		</a>
	                        	</div>
	                        	<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
								<input type="hidden" name="cmd" value="_s-xclick">
								<input type="hidden" name="hosted_button_id" value="W34MEDHYFFKGY">
								<input type="hidden" name="on0" value="Sizes">
								Sizes<br>
								<select name="os0">
									<option value="Small">Small </option>
									<option value="Medium">Medium </option>
									<option value="Large">Large </option>
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
								<input type="hidden" name="hosted_button_id" value="W34MEDHYFFKGY">
								<input type="hidden" name="on0" value="Sizes">
								Sizes<br>
								<select name="os0">
									<option value="Small">Small </option>
									<option value="Medium">Medium </option>
									<option value="Large">Large </option>
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


<?php get_footer(); ?>

