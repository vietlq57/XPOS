<?php

get_header(); ?>

    <section class="banner">
        <div class="home-img" style="background-image: url('<?php echo(get_template_directory_uri()); ?>/inc/images/home-banner.jpg');"><img class="hidden" src="<?php echo(get_template_directory_uri()); ?>/inc/images/home-banner.jpg" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-7 col-xs-6 col-md-offset-6 col-sm-offset-5 col-xs-offset-6 col-lg-7 col-lg-offset-5">
                        <h1>High-speed Magento POS</h1>
                        <h2>for Omni-channel Retail</h2>
                        <div>Manage all of your stores with one software.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container">
        <div class="home">
            <h3 class="header-sup-page">The best <span class="txt-b">omni-channel </span><span>POS for Magento</span></h3>
            <p class="head-second">Developed by Magento experts, ConnectPOS fits with every angle of both Magento 1 and 2, and works reliably on Windows, Mac and iPad. It is optimized for a coherent user interface and fast performance. Connect POS runs consistently, whether you use it for 1 or 100+ stores, and seamlessly syncs with your online business.</p>
            <div class="video-tabs">
                <div class="row">
                    <div class="col-md-5 col-sm-6 col-xs-12">
                        <ul class="nav nav-pills nav-stacked" role="tablist">
                            <li class="active" role="presentation"><a href="#home" aria-controls="home" role="tab" data-toggle="tab"><i class="fa fa-play-circle-o"></i>Order & Check out in 3 clicks</a></li>
                            <li role="presentation"><a href="#profile" aria-controls="home" role="tab" data-toggle="tab"><i class="fa fa-play-circle-o"></i>Split tenders and layaway</a></li>
                            <li role="presentation"><a href="#messages" aria-controls="home" role="tab" data-toggle="tab"><i class="fa fa-play-circle-o"></i>Refund and exchange</a></li>
                            <li role="presentation"><a href="#tab4" aria-controls="home" role="tab" data-toggle="tab"><i class="fa fa-play-circle-o"></i>Manage multiple stores, registers and users</a></li>
                            <li role="presentation"><a href="#tab5" aria-controls="home" role="tab" data-toggle="tab"><i class="fa fa-play-circle-o"></i>Sync physical stores in real time Magento webstore</a></li>
                            <li role="presentation"><a href="#tab6" aria-controls="home" role="tab" data-toggle="tab"><i class="fa fa-play-circle-o"></i>Work on PC, Mac and iPad</a></li>
                        </ul>
                    </div>
                    <div class="col-md-7 col-sm-6 col-xs-12">
                        <div class="tab-content">
                            <div class="tab-pane fade in active" role="tabpanel" id="home">
                                <video class="tab-video" muted="" volume="0" canplay="false">
                                    <source src="<?php echo(get_template_directory_uri()); ?>/inc/video/Order_Click.mp4" type="video/mp4">
                                    <source src="<?php echo(get_template_directory_uri()); ?>/inc/video/Order_Click.mp4" type="video/mp4">Your browser does not support the video tag.
                                </video>
                            </div>
                            <div class="tab-pane fade" role="tabpanel" id="profile">
                                <video class="tab-video" muted="" volume="0" canplay="false">
                                    <source type="video/webm" src="<?php echo(get_template_directory_uri()); ?>/inc/video/Split _tenders_Layaway.mp4">
                                    <source type="video/mp4" src="<?php echo(get_template_directory_uri()); ?>/inc/video/Split _tenders_Layaway.mp4">
                                </video>
                            </div>
                            <div class="tab-pane fade" role="tabpanel" id="messages">
                                <video class="tab-video" muted="" volume="0" canplay="false">
                                    <source type="video/webm" src="<?php echo(get_template_directory_uri()); ?>/inc/video/Refund_Exchange_(effects).mp4">
                                    <source type="video/mp4" src="<?php echo(get_template_directory_uri()); ?>/inc/video/Refund_Exchange_(effects).mp4">
                                </video>
                            </div>
                            <div class="tab-pane fade" role="tabpanel" id="tab4">
                                <video class="tab-video" muted="" volume="0" canplay="false">
                                    <source type="video/webm" src="<?php echo(get_template_directory_uri()); ?>/inc/video/Manage_multiple_outlets.mp4">
                                    <source type="video/mp4" src="<?php echo(get_template_directory_uri()); ?>/inc/video/Manage_multiple_outlets.mp4">
                                </video>
                            </div>
                            <div class="tab-pane fade" role="tabpanel" id="tab5">
                                <video class="tab-video" muted="" volume="0" canplay="false">
                                    <source type="video/webm" src="<?php echo(get_template_directory_uri()); ?>/inc/video/Realtime_sync_(effect).mp4">
                                    <source type="video/mp4" src="<?php echo(get_template_directory_uri()); ?>/inc/video/Realtime_sync_(effect).mp4">
                                </video>
                            </div>
                            <div class="tab-pane fade" role="tabpanel" id="tab6">
                                <video class="tab-video" muted="" volume="0" canplay="false">
                                    <source type="video/webm" src="https://cdn.shopify.com/assets2/pos-flow-payment-d51fc4f9137e9095159fbb2cf498c9879dc80fd9ec64690dc64d2f947e7e8f12.webm">
                                    <source type="video/mp4" src="https://cdn.shopify.com/assets2/pos-flow-payment-b6ab166f90ac35bd13a8deaa92fad29fb180f0622d2dfb99a3758f06c87549e5.mp4">
                                </video>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12"><a class="button-check" href="<?php echo esc_url(home_url('/feature'));?>">View all features</a></div>
                </div>
            </div>
        </div>
    </section>

    <section class="outstanding-fearture">
        <div class="container">
            <h2 class="header-sup-page">And we go beyond outstanding features</h2>
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="fearture-item">
                        <div class="fearture-item-icon payment" style="background-image: url('<?php echo(get_template_directory_uri()); ?>/inc/images/fearture-icon.png');"></div>
                        <h4 class="header-title">Payments</h4>
                        <p>Support various payment methods, from cash to cards. Create custom payment options.</p><a class="btn-learn-more" href="<?php echo esc_url(home_url('/payments'));?>">Learn more</a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="fearture-item">
                        <div class="fearture-item-icon hardware" style="background-image: url('<?php echo(get_template_directory_uri()); ?>/inc/images/fearture-icon.png');"></div>
                        <h4 class="header-title">Hardware</h4>
                        <p>ConnectPOS works with many hardware providers so you can use devices you own.</p><a class="btn-learn-more" href="<?php echo esc_url(home_url('/hardware'));?>">Learn more</a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="fearture-item">
                        <div class="fearture-item-icon suport" style="background-image: url('<?php echo(get_template_directory_uri()); ?>/inc/images/fearture-icon.png');"></div>
                        <h4 class="header-title">24/7 Support</h4>
                        <p>You can always reach out to us via Help Center, email, phone or live chat.</p><a class="btn-learn-more" href="http://support.smartosc.com/">View Help Center</a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="fearture-item">
                        <div class="fearture-item-icon customer" style="background-image: url('<?php echo(get_template_directory_uri()); ?>/inc/images/fearture-icon.png');"></div>
                        <h4 class="header-title">Custom Solution</h4>
                        <p>Need a tailored solution? Contact us and we'll make it fit you like a glove.</p><a class="btn-learn-more" href="<?php echo esc_url(home_url('/contact-us'));?>">Contact us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="together" style="background: url('<?php echo(get_template_directory_uri()); ?>/inc/images/together.jpg') no-repeat center/cover;">
        <div class="container">
            <h2 class="header-content">Together, with the industry leaders...</h2>
            <div class="row">
                <div class="col-md-8 col-sm-12 col-md-offset-2 col-sm-offset-0">
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-12 logo-content"><a class="img" href="javascript:void(0);"></a><img class="img-responsive" src="<?php echo(get_template_directory_uri()); ?>/inc/images/socket.png"></div>
                        <div class="col-md-4 col-sm-4 col-xs-12 logo-content"><a class="img" href="javascript:void(0);"></a><img class="img-responsive" src="<?php echo(get_template_directory_uri()); ?>/inc/images/paypal.png"></div>
                        <div class="col-md-4 col-sm-4 col-xs-12 logo-content"><a class="img" href="javascript:void(0);"></a><img class="img-responsive" src="<?php echo(get_template_directory_uri()); ?>/inc/images/tyro.png"></div>
                        <div class="col-md-4 col-sm-4 col-xs-12 logo-content"><a class="img" href="javascript:void(0);"></a><img class="img-responsive" src="<?php echo(get_template_directory_uri()); ?>/inc/images/vantiv.png"></div>
                        <div class="col-md-4 col-sm-4 col-xs-12 logo-content"><a class="img" href="javascript:void(0);"></a><img class="img-responsive" src="<?php echo(get_template_directory_uri()); ?>/inc/images/star.png"></div>
                        <div class="col-md-4 col-sm-4 col-xs-12 logo-content"><a class="img" href="javascript:void(0);"></a><img class="img-responsive" src="<?php echo(get_template_directory_uri()); ?>/inc/images/izettle.png"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="customer">
        <div class="container">
            <h2 class="header-content">...we power 1000+ Magento retailers worldwide</h2>
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="customer-slider slick-slider">
                        <div>
                            <div class="slide-item">
                                <div class="row">
                                    <div class="col-md-4 col-sm-6"><a class="logo-item" href="javascript:void(0);"><img class="img-responsive" src="<?php echo(get_template_directory_uri()); ?>/inc/images/Anovo.jpg"></a></div>
                                    <div class="col-md-4 col-sm-6"><a class="logo-item" href="javascript:void(0);"><img class="img-responsive" src="<?php echo(get_template_directory_uri()); ?>/inc/images/disney.png"></a></div>
                                    <div class="col-md-4 col-sm-6"><a class="logo-item" href="javascript:void(0);"><img class="img-responsive" src="<?php echo(get_template_directory_uri()); ?>/inc/images/nasa.png"></a></div>
                                    <div class="col-md-4 col-sm-6"><a class="logo-item" href="javascript:void(0);"><img class="img-responsive" src="<?php echo(get_template_directory_uri()); ?>/inc/images/etsy.png"></a></div>
                                    <div class="col-md-4 col-sm-6"><a class="logo-item" href="javascript:void(0);"><img class="img-responsive" src="<?php echo(get_template_directory_uri()); ?>/inc/images/har.png"></a></div>
                                    <div class="col-md-4 col-sm-6"><a class="logo-item" href="javascript:void(0);"><img class="img-responsive" src="<?php echo(get_template_directory_uri()); ?>/inc/images/kuk.png"></a></div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="slide-item">
                                <div class="row">
                                    <div class="col-md-4 col-sm-6"><a class="logo-item" href="javascript:void(0);"><img class="img-responsive" src="<?php echo(get_template_directory_uri()); ?>/inc/images/wwf.png"></a></div>
                                    <div class="col-md-4 col-sm-6"><a class="logo-item" href="javascript:void(0);"><img class="img-responsive" src="<?php echo(get_template_directory_uri()); ?>/inc/images/disney.png"></a></div>
                                    <div class="col-md-4 col-sm-6"><a class="logo-item" href="javascript:void(0);"><img class="img-responsive" src="<?php echo(get_template_directory_uri()); ?>/inc/images/nasa.png"></a></div>
                                    <div class="col-md-4 col-sm-6"><a class="logo-item" href="javascript:void(0);"><img class="img-responsive" src="<?php echo(get_template_directory_uri()); ?>/inc/images/etsy.png"></a></div>
                                    <div class="col-md-4 col-sm-6"><a class="logo-item" href="javascript:void(0);"><img class="img-responsive" src="<?php echo(get_template_directory_uri()); ?>/inc/images/har.png"></a></div>
                                    <div class="col-md-4 col-sm-6"><a class="logo-item" href="javascript:void(0);"><img class="img-responsive" src="<?php echo(get_template_directory_uri()); ?>/inc/images/kuk.png"></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="customer-slider slick-slider">
                        <div>
                            <div class="slide-item">
                                <div class="quote-item">
                                    <p class="quote">The product delivers exactly what it advertises and does so in a very sophisticated and eloquent way. Moreover, the support I received from SmartOSC was second to none!</p><i class="quote-after"></i>
                                    <h4 class="title-quote">Eli Wallach</h4>
                                    <p class="description">Marketing Manager at Toronto Brewing</p>
                                </div>
                                <div class="quote-item">
                                    <p class="quote">The product is the best "point of sale" extension for Magento which gives in the current market. More and more new features are developed and added!</p><i class="quote-after"></i>
                                    <h4 class="title-quote">Wimmer Martin</h4>
                                    <p class="description">Owner of Marty`s Megastore</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="slide-item">
                                <div class="quote-item">
                                    <p class="quote">This point of sale system has been a key addition to the sites we're working on. It's quick, easy to setup, and inexpensive to use. The core functionality works flawlessly!</p><i class="quote-after"></i>
                                    <h4 class="title-quote">Jeff Yard</h4>
                                    <p class="description">Owner of Ventures Capital Corporation</p>
                                </div>
                                <div class="quote-item">
                                    <p class="quote">I implemented ConnectPOS for one of my clients and it is of great help for them in stores. They have a website and they can sell the same products at physical stores and fasten the whole sales process using ConnectPOS.</p><i class="quote-after"></i>
                                    <h4 class="title-quote">Claudio Ijaui Silva</h4>
                                    <p class="description">Magento Developer at ICS - COMPUTER SYSTEM</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="block-content-global">
        <div class="container">
            <div class="block-content-pay">
                <div class="row">
                    <div class="col-md-5">
                        <h2 class="title text-left-title">ConnectPOS is present in 50 countries</h2>
                        <p>Join the growing community of omni-channel retailers all over the world now!</p><a class="btn btn-free" href="<?php echo esc_url(home_url('/free-trial'));?>">free trial</a><span class="no-required">No credit card required</span>
                    </div>
                    <div class="col-md-7">
                        <div class="pull-right"><img src="<?php echo(get_template_directory_uri()); ?>/inc/images/germany.jpg"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
get_footer();
