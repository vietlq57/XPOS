<?php
/**
 * Template Name: Payment
 */

get_header(); ?>

    <div class="banner">
        <div class="hero-img" style="background-image: url('<?php echo(get_template_directory_uri()); ?>/inc/images/payment-banner.jpg');"><img class="hidden" src="<?php echo(get_template_directory_uri()); ?>/inc/images/payment-banner.jpg" alt="">
            <div class="content text-center">
                <h1>Payments</h1>
                <div></div>
            </div>
        </div>
    </div>

    <section class="omni">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 col-sm-12 col-sm-offset-0">
                    <div class="block block-tabs-content">
                        <div class="des">We integrate with many payment  solution providers all over the<br> world to make sure you get paid fast and conveniently.</div>
                        <div class="image-content">
                            <ul>
                                <li><a href="#"><img src="<?php echo(get_template_directory_uri()); ?>/inc/images/logo-pay-2.jpg"></a></li>
                                <li><a href="#"><img src="<?php echo(get_template_directory_uri()); ?>/inc/images/logo-pay-5.jpg"></a></li>
                                <li><a href="#"><img src="<?php echo(get_template_directory_uri()); ?>/inc/images/logo-pay-1.jpg"></a></li>
                                <li><a href="#"><img src="<?php echo(get_template_directory_uri()); ?>/inc/images/logo-pay-3.jpg"></a></li>
                                <li><a href="#"><img src="<?php echo(get_template_directory_uri()); ?>/inc/images/logo-pay-4.jpg"></a></li>
                            </ul>
                        </div>
                        <div class="tabs-container">
                            <div class="des">Select your region for available payment solutions</div>
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="active" role="presentation"><a href="#usa" aria-controls="usa" role="tab" data-toggle="tab">usa</a></li>
                                <li role="presentation"><a href="#australia" aria-controls="australia" role="tab" data-toggle="tab">australia</a></li>
                                <li role="presentation"><a href="#united" aria-controls="united" role="tab" data-toggle="tab">united kingdom</a></li>
                                <li role="presentation"><a href="#europe" aria-controls="europe" role="tab" data-toggle="tab">europe</a></li>
                                <li role="presentation"><a href="#other" aria-controls="other" role="tab" data-toggle="tab">other regions</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="usa" role="tabpanel">
                                    <div class="content list-system">
                                        <div class="pull-left"><img src="<?php echo(get_template_directory_uri()); ?>/inc/images/icon-tab-content.jpg"></div>
                                        <div class="pull-right">
                                            <ul>
                                                <li><a href="#"><img src="<?php echo(get_template_directory_uri()); ?>/inc/images/icon-ios.png"></a></li>
                                                <li><a href="#"><img src="<?php echo(get_template_directory_uri()); ?>/inc/images/icon-mac.png"></a></li>
                                                <li><a href="#"><img src="<?php echo(get_template_directory_uri()); ?>/inc/images/icon-windows.png"></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="content-text">
                                        <h4>paypal here</h4>
                                        <p>PayPal Here is the simple, easy and quick way to accept credit cards, debit cards and contactless payments. The app can be set up quick and you can get paid as you sell right away.</p>
                                        <p>There are no monthly fees, setup fees, cancelation fees, or processing minimums.</p>
                                        <p>Their support team is always available to answers your questions either by phone or via email.</p>
                                        <p>PayPal Here is fully integrated into X-POS.</p>
                                    </div>
                                </div>
                                <div class="tab-pane" id="australia" role="tabpanel">australia</div>
                                <div class="tab-pane" id="united" role="tabpanel">united kingdom</div>
                                <div class="tab-pane" id="europe" role="tabpanel">europe</div>
                                <div class="tab-pane" id="other" role="tabpanel">other regions</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block-content-pay">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <h2 class="title">We work with the best to make sure you have great experience</h2><a class="btn btn-free" href="#">free trial</a><span class="no-required">No credit card required</span>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="pull-right"><img src="<?php echo(get_template_directory_uri()); ?>/inc/images/payment-1.png"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="content-container-pay">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="pagination pagination-prev pull-left"><a href="#">Back</a>
                                        <h5>Features</h5>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="pagination pagination-next pull-right"><a href="#">Next</a>
                                        <h5>Payment</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
get_footer();
