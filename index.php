<?php 
	get_header(); 
	$templateDirectory = get_bloginfo('template_directory'); 	
?>
	 <header>
        <div class="header-content">
            <div class="header-content-inner">
                <!--<h1>Your Favorite Source of Free Bootstrap Themes</h1>
                <hr>-->
                <p><img src="<?php  echo $templateDirectory;  ?>/library/images/black-collar-logo.png" alt=""/></p>
                <!--<p>Vivamus et lorem in ligula efficitur porta et eu leo. Quisque accumsan leo et ipsum scelerisque interdum.</p>-->
                <a href="#about" class="btn btn-primary btn-xl page-scroll">Learn About Us</a>
            </div>
        </div>
    </header>

    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">About Black Collar</h2>
                    <hr class="light">
                    <p class="text-faded">We're a full service DIY screen printing shop located in Baltimore, MD. We offer everything from basic t-shirt printing to album packaging, posters and Eco-friendly printing.</p>
                    <a href="#" class="btn btn-default btn-xl">Place an Order</a>
                </div>
            </div>
        </div>
    </section>

    <section id="services">
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
                        <i class="fa fa-4x fa-diamond wow bounceIn text-primary"></i>
                        <h3>T-Shirts</h3>
                        <p class="text-muted">We have lots of options to choose from including USA and Union made shirts.</p>
                        <a href="#tshirt-rates">View Rates</a> 
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-paper-plane wow bounceIn text-primary" data-wow-delay=".1s"></i>
                        <h3>More Apparel</h3>
                        <p class="text-muted">We've got Hoodies, Jackets/Windbreakers, Atheletic Apparel, Tanks and more.</p>
                        <a href="#moreapparel-rates">View Rates</a> 
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-newspaper-o wow bounceIn text-primary" data-wow-delay=".2s"></i>
                        <h3>Posters and Covers</h3>
                        <p class="text-muted">We can print show posters and the cover packaging for your album art as well.</p>
                        <a href="#poster-rates">View Rates</a> 
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-heart wow bounceIn text-primary" data-wow-delay=".3s"></i>
                        <h3>Other Stuff</h3>
                        <p class="text-muted">We've got Patches, Koozies, Totes and even Truck Decals. Let us know what you need.</p>
                        <a href="#other-rates">Email Us for Rates</a> 
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="no-padding" id="portfolio">
        <div class="container-fluid">
            <div class="row no-gutter">
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="portfolio-box">
                        <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/bc-port-1.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Project Name
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="portfolio-box">
                        <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/bc-port-2.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Project Name
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="portfolio-box">
                        <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/bc-port-3.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Project Name
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="portfolio-box">
                        <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/bc-port-4.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Project Name
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="portfolio-box">
                        <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/bc-port-5.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Project Name
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="portfolio-box">
                        <img src="<?php  echo $templateDirectory;  ?>/library/images/portfolio/bc-port-6.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Project Name
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <aside class="bg-dark">
        <div class="container text-center">
            <div class="call-to-action">
                <h2>Place an order with us!</h2>
                <a href="#" class="btn btn-default btn-xl wow tada">Get Started</a>
            </div>
        </div>
    </aside>

    <section id="contact">
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


<?php get_footer(); ?>

