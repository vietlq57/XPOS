<?php
/**
 * Template Name: Trial
 */

get_header(); ?>

    <section class="omni">
        <div class="container">
            <div class="block trial-block">
                <h2 class="title-page">A few more steps to set up your trial</h2>
                <p class="title-page-2">No credit card. No contract. Instant access.</p>
                <div class="trial-block-content custom-content-main">
                    <div class="block-page-choose"><span class="active">1</span><span>2</span><span>3</span></div>
                    <h2 class="title-page">What is your type of business?</h2>
                    <div class="trial-content-main">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="item-category">
                                    <div class="item-thumb"><a href="#"><img src="<?php echo(get_template_directory_uri()); ?>/inc/images/trial-1.png"></a></div>
                                    <div class="item-content"><a href="#">Merchant</a></div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="item-category">
                                    <div class="item-thumb"><a href="#"><img src="<?php echo(get_template_directory_uri()); ?>/inc/images/trial-2.png"></a></div>
                                    <div class="item-content"><a href="#">Agency</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="trial-block-content custom-content-main">
                    <div class="block-page-choose"><span class="done" style="background-image: url('<?php echo(get_template_directory_uri()); ?>/inc/images/icon-check-done.png');">1</span><span class="active">2</span><span>3</span></div>
                    <h2 class="title-page">How many stores do you have?</h2>
                    <div class="trial-content-main">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="item-category">
                                    <div class="item-thumb"><a href="#"><img src="<?php echo(get_template_directory_uri()); ?>/inc/images/trial-7.png"></a></div>
                                    <div class="item-content"><a href="#">1 store</a></div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="item-category">
                                    <div class="item-thumb"><a href="#"><img src="<?php echo(get_template_directory_uri()); ?>/inc/images/trial-8.png"></a></div>
                                    <div class="item-content"><a href="#">2+ store</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="trial-block-content custom-content-form">
                        <div class="block-page-choose"><span class="done" style="background-image: url('<?php echo(get_template_directory_uri()); ?>/inc/images/icon-check-done.png');">1</span><span class="done" style="background-image: url('<?php echo(get_template_directory_uri()); ?>/inc/images/icon-check-done.png');">2</span><span class="active">3</span></div>
                        <h2 class="title-page">Tell us more about you and your business</h2>
                        <div class="trial-content-main">
                            <form action="">
                                <div class="row custom-row-3">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input class="form-control" type="text" placeholder="First name *">
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input class="form-control" type="text" placeholder="Last name *">
                                    </div>
                                </div>
                                <div class="row custom-row-3">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <input class="form-control" type="email" placeholder="Email *">
                                    </div>
                                </div>
                                <div class="row custom-row-3">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input class="form-control" type="text" placeholder="Phone">
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select class="form-control">
                                            <option>City, Country</option>
                                            <option>City, Country 2</option>
                                            <option>City, Country 3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row custom-row-3">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <input class="form-control" type="password" placeholder="Password *">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <button class="button-submit" type="submit">START YOUR FREE TRIAL</button>
                                    </div>
                                </div>
                            </form>
                            <div class="block-terms">
                                <p>By creating your account you agree to the <br><a href="<?php echo esc_url(home_url('/terms-of-use'));?>">terms of use </a>and <a href="<?php echo esc_url(home_url('/privacy-policy'));?>">privacy policy</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
get_footer();

