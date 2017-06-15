<?php
/**
 * Template Name: Trial
 */

get_header(); ?>

    <section class="omni">
        <div class="container">
            <div class="block trial-block">
                <h2 class="title-page">Set up your 15-day trial in 3 steps</h2>
                <p class="title-page-2">No credit card and contract required</p>
                <form>
                    <div class="form-group">
                        <div class="trial-block-content custom-content-main">
                            <div class="block-page-choose"><span class="active">1</span><span>2</span><span>3</span></div>
                            <h3 class="title-page">What is your type of business?</h3>
                            <div class="trial-content-main">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="item-category">
                                            <div class="item-thumb"><i class="icon-person"></i></div>
                                            <div class="item-content">Merchant</div>
                                        </div>
                                        <label class="radio-inline">
                                            <input type="radio" name="inlineRadioOptions1" value="option1">1
                                        </label>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="item-category">
                                            <div class="item-thumb"><i class="icon-house"></i></div>
                                            <div class="item-content">Agency</div>
                                        </div>
                                        <label class="radio-inline">
                                            <input type="radio" name="inlineRadioOptions1" value="option2">2
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group section-store section-collapsed">
                        <div class="trial-block-content custom-content-main">
                            <div class="block-page-choose"><span class="done">1</span><span class="active">2</span><span>3</span></div>
                            <h3 class="title-page">How many stores do you have?</h3>
                            <div class="trial-content-main">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="item-category">
                                            <div class="item-thumb"><i class="icon-shop"></i></div>
                                            <div class="item-content">1 store</div>
                                        </div>
                                        <label class="radio-inline">
                                            <input type="radio" name="inlineRadioOptions2" value="option1">1
                                        </label>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="item-category">
                                            <div class="item-thumb"><i class="icon-shops"></i></div>
                                            <div class="item-content">2+ store</div>
                                        </div>
                                        <label class="radio-inline">
                                            <input type="radio" name="inlineRadioOptions2" value="option2">2
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group section-form section-collapsed">
                        <div class="trial-block-content custom-content-form">
                            <div class="block-page-choose"><span class="done">1</span><span class="done">2</span><span class="active">3</span></div>
                            <h3 class="title-page">Tell us a little bit more about you and your business</h3>
                            <div class="trial-content-main">
                                <?php echo do_shortcode( ' [ninja_form id=9] ' ); ?>
                                <div class="block-terms">
                                    <p>By creating your account you agree to the <br><a href="<?php echo esc_url(home_url('/terms-of-use'));?>">terms of use </a>and <a href="<?php echo esc_url(home_url('/privacy-policy'));?>">privacy policy</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

<?php
get_footer();

