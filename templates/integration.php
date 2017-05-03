<?php
/**
 * Template Name: Integration
 */

get_header(); ?>

    <div class="banner">
        <div class="hero-img" style="background-image: url('<?php echo(get_template_directory_uri()); ?>/inc/images/integration-banner.jpg');"><img class="hidden" src="<?php echo(get_template_directory_uri()); ?>/inc/images/integration-banner.jpg" alt="">
            <div class="content text-center">
                <h1>Integrations</h1>
                <div></div>
            </div>
        </div>
    </div>

    <section class="omni">
        <div class="container block">
            <div class="block-article-main">
                <h2 class="title-page">Maximize the full power of the system</h2>
                <div class="row">
                    <div class="col-md-6 col-sm-7 col-xs-12">
                        <div class="row custom-row-2">
                            <div class="item-article">
                                <div class="col-md-2 col-sm-2 col-xs-12 alight-img"><img src="<?php echo(get_template_directory_uri()); ?>/inc/images/integration-2.png"></div>
                                <div class="col-md-10 col-sm-10 col-xs-12">
                                    <div class="item-content"><a class="title-page" href="#">World-leading Integrations</a>
                                        <div class="description">
                                            <p>We have built close relationships with the world leaders in retail solutions to make sure you can benefit from the best of both worlds.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row custom-row-2">
                            <div class="item-article">
                                <div class="col-md-2 col-sm-2 col-xs-12 alight-img"><img src="<?php echo(get_template_directory_uri()); ?>/inc/images/integration-3.png"></div>
                                <div class="col-md-10 col-sm-10 col-xs-12">
                                    <div class="item-content"><a class="title-page" href="#">Constant Updates</a>
                                        <div class="description">
                                            <p>We always keep up with the latest updates from our partners and continue expanding our networks to bring you more helpful integrations. Please do come back regularly for more information.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-5 col-xs-12">
                        <div class="item-thumb-custom"><img src="<?php echo(get_template_directory_uri()); ?>/inc/images/integration-1.jpg"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="omni custom-section">
        <div class="container block">
            <div class="block-article-main">
                <h2 class="title-page">Integrations from the world's best</h2>
                <div class="row">
                    <div class="col-md-6 col-sm-5 col-xs-12">
                        <div class="thumb-shadow"><img src="<?php echo(get_template_directory_uri()); ?>/inc/images/integration-4.jpg"></div>
                    </div>
                    <div class="col-md-6 col-sm-7 col-xs-12">
                        <div class="item-article item-detail">
                            <h3 class="title-page">Reward Points by Aheadworks</h3>
                            <div class="item-thumb"><img src="<?php echo(get_template_directory_uri()); ?>/inc/images/integration-5.png"></div>
                            <div class="item-content">
                                <p>Awarded "Most Innovative Extension Developer" by Magento, Aheadworks provides one of the best Reward Points extensions to help build your own customer loyalty program.</p>
                            </div>
                        </div>
                        <div class="list-feature custom-row-2">
                            <h3 class="title-page">Highlight Features</h3>
                            <ul>
                                <li><a href="#">Convert from dollar amount spent to points earned and back</a></li>
                                <li><a href="#">Earn & spend rates may differ by customer group</a></li>
                                <li><a href="#">Limit point use</a></li>
                                <li><a href="#">Refund to points</a></li>
                                <li><a href="#">In-store reminders show how many points may be earned per activity</a></li>
                                <li><a href="#">Usage statistics, balance editing available to admin from backend</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="get-link"><a class="btn-free" href="https://ecommerce.aheadworks.com/magento-2-extensions/points-and-rewards">Get Reward Points Extension</a></div>
                <h2 class="title-page-3">And we have many more to come so make sure you come back<br> and check regularly</h2>
            </div>
        </div>
    </section>

    <section class="omni">
        <div class="container block">
            <div class="block-content-pay custom-block-push">
                <h2 class="title">Push the limit of your store!</h2><a class="btn btn-free custom-btn-1" href="<?php echo esc_url(home_url('/free-trial'));?>">FREE TRIAL</a><span class="no-required">No credit card required</span>
            </div>
        </div>
    </section>
    <section class="omni">
        <div class="container">
            <div class="content-container-pay">
                <div class="pagination pagination-prev pull-left"><a href="<?php echo esc_url(home_url('/pricing'));?>">Back</a>
                    <h5>Pricing</h5>
                </div>
            </div>
        </div>
    </section>
<?php
get_footer();
