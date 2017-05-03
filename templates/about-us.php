<?php
/**
 * Template Name: About Us
 */

get_header(); ?>

    <div class="banner">
        <div class="hero-img" style="background-image: url('<?php echo(get_template_directory_uri()); ?>/inc/images/breadcrumb.jpg');"><img class="hidden" src="<?php echo(get_template_directory_uri()); ?>/inc/images/breadcrumb.jpg" alt="">
            <div class="content text-center">
                <h1>About Us</h1>
                <div></div>
            </div>
        </div>
    </div>

    <section class="omni">
        <div class="container">
            <div class="block about-us-item">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <h2 class="title">Our story</h2>
                        <div class="des">We are one of the first to provide a point of sale solution for Magento retailers. Years working with <br> Magento merchants worldwide help us know exactly what you need in a POS: high-speed,<br> full-function and real time synchronization with your online business. Now you can get them all<br> with ConnectPOS - the best POS for omni-channel retailers.</div>
                        <div class="about-content">
                            <div class="row custom-row">
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <div class="item-block"><img src="<?php echo(get_template_directory_uri()); ?>/inc/images/about-icon-1.png"><strong>10,000+</strong>
                                        <p>working hours</p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <div class="item-block"><img src="<?php echo(get_template_directory_uri()); ?>/inc/images/about-icon-2.png"><strong>670,000+</strong>
                                        <p>lines of code</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <div class="item-block"><img src="<?php echo(get_template_directory_uri()); ?>/inc/images/about-icon-3.png"><strong>10+</strong>
                                        <p>Magento developers</p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <div class="item-block"><img src="<?php echo(get_template_directory_uri()); ?>/inc/images/about-icon-4.png"><strong>1000+</strong>
                                        <p>Magento clients worldwide</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="item-main">
                            <h2 class="title">We've gained recognition from<br> our strategic partner</h2>
                            <div class="about-content">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-12"><img src="<?php echo(get_template_directory_uri()); ?>/inc/images/about-icon-5.jpg"></div>
                                    <div class="col-md-6 col-sm-6 col-xs-12"><img src="<?php echo(get_template_directory_uri()); ?>/inc/images/about-icon-6.png"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="omni omni-quotes">
        <div class="container">
            <div class="block about-quotes">
                <h2>Let's hear from our clients as well</h2>
                <div class="entry-item">
                    <div class="entry-thumb"><img class="img-circle" src="<?php echo(get_template_directory_uri()); ?>/inc/images/quotes-1.jpg"></div>
                    <div class="entry-content">
                        <h3>Mohammad Cheema</h3><span>Bathroom Takeaway, UK</span>
                        <p>The team has shown outstanding work and commitment to our help requests. I would really like to thank you all for your hard work and efforts, without your help we would be clueless and worried.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="omni">
        <div class="container">
            <div class="about-us-blog">
                <h2>Visit our blog for more<br> interesting stories and news</h2>
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="blog-item">
                            <div class="blog-thumb"><a href="#"><img src="<?php echo(get_template_directory_uri()); ?>/inc/images/about-blog-1.jpg">
                                    <div class="bg-image" src="<?php echo(get_template_directory_uri()); ?>/inc/images/about-blog-1.jpg"></div></a></div>
                            <div class="blog-content"><span>9/12/2016</span><a href="#">Innovated X-POS launched in April 2017</a></div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="blog-item">
                            <div class="blog-thumb"><a href="#"><img src="<?php echo(get_template_directory_uri()); ?>/inc/images/about-blog-1.jpg">
                                    <div class="bg-image" src="<?php echo(get_template_directory_uri()); ?>/inc/images/about-blog-1.jpg"></div></a></div>
                            <div class="blog-content"><span>9/12/2016</span><a href="#">Retail trends in 2017</a></div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="blog-item">
                            <div class="blog-thumb"><a href="#"><img src="<?php echo(get_template_directory_uri()); ?>/inc/images/about-blog-1.jpg">
                                    <div class="bg-image" src="<?php echo(get_template_directory_uri()); ?>/inc/images/about-blog-1.jpg"></div></a></div>
                            <div class="blog-content"><span>9/12/2016</span><a href="#">Club 21 Sucessfully Relaunches Its Omnichannel Commerce</a></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12"><a class="about-check" href="http://xpos.smartosc.com/blog/">Check our blog here</a></div>
                </div>
            </div>
        </div>
    </section>
<?php
get_footer();
