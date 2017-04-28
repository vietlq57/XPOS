<?php
/**
 * Template Name: Contact Us
 */

get_header(); ?>

    <div class="banner">
        <div class="hero-img" style="background-image: url('<?php echo(get_template_directory_uri()); ?>/inc/images/contact-us-banner.jpg');"><img class="hidden" src="<?php echo(get_template_directory_uri()); ?>/inc/images/contact-us-banner.jpg" alt="">
            <div class="content text-center">
                <h1>About Us</h1>
                <div></div>
            </div>
        </div>
    </div>

    <section class="omni">
        <div class="container block">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0">
                    <div class="block-container">
                        <h2 class="title-page">Find your local experts</h2>
                        <p class="title-des">Choose your location</p>
                        <div class="all-Choose">
                            <select class="form-control">
                                <option>All regions</option>
                                <option>All regions 2</option>
                                <option>All regions 3</option>
                                <option>All regions 4</option>
                            </select>
                        </div>
                        <div class="contact-item"><img src="<?php echo(get_template_directory_uri()); ?>/inc/images/contact-us-1.png">
                            <h3 class="title-page-4">Ottenevaz</h3>
                            <p>Lorem ipsum dolor sit amet, ad delicata efficiendi mei, nam ex sint percipitur. In his consul oportere inciderint. Id est labore patrioque. Usu nibh nominati an, quem autem appetere ius te. Ne diam invidunt complectitur cum.</p>
                            <ul>
                                <li><span>01234-567-899</span></li>
                                <li><span class="blue">mark.netto@ottenevaz.com</span></li>
                                <li><span>www.ottenevaz.com</span></li>
                            </ul>
                        </div>
                        <div class="contact-item">
                            <h2 class="title-page-5">Natsort Consulting</h2>
                            <h3 class="title-page-4">Ottenevaz</h3>
                            <p>Lorem ipsum dolor sit amet, ad delicata efficiendi mei, nam ex sint percipitur. In his consul oportere inciderint. Id est labore patrioque. Usu nibh nominati an, quem autem appetere ius te. Ne diam invidunt complectitur cum.</p>
                            <ul>
                                <li><span>01234-567-899</span></li>
                                <li><span class="blue">n@tsort.dk</span></li>
                                <li><span>www.natsort.dk</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="trial-content-main custom-contact">
                        <h2 class="title-page">Get in touch with us!</h2>
                        <h3 class="title-page-2">We'd love to hear from you.</h3>
                        <form action="#">
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
                                    <select class="form-control">
                                        <option>City, Country</option>
                                        <option>City, Country 2</option>
                                        <option>City, Country 3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row custom-row-3">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <select class="form-control">
                                        <option>Topic</option>
                                        <option>Topic 2</option>
                                        <option>Topic 3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row custom-row-3">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <input class="form-control" type="text" placeholder="Message *">
                                </div>
                            </div>
                            <div class="row custom-row-3">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <button class="button-submit" type="submit">send</button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <p class="title-page-2 custom-form-text">We'll get back to you within 12 hours.</p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
get_footer();
