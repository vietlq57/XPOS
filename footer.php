  <?php do_action('installation_point'); ?>
<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package xpos
 */

?>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <div class="intro">
                        <h5><a href="<?php echo esc_url(home_url('/about-us'));?>" title="Blog">About us</a></h5>
                        <p>Developed by SmartOSC, the pioneer in Magento POS, ConnectPOS is the high-speed software for omni-channel retailers.</p>
                        <ul class="list-inline">
                            <li> <img src="<?php echo(get_template_directory_uri()); ?>/inc/images/magento1.png" alt="Magento 1"></li>
                            <li> <img src="<?php echo(get_template_directory_uri()); ?>/inc/images/magento2.png" alt="Magento 2"></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4">
                    <div class="item-footer">
                        <h5>Point of sale</h5>
                        <ul class="no-bullet">
                            <li><a href="<?php echo esc_url(home_url('/feature'));?>" title="Features">Features</a></li>
                            <li><a href="<?php echo esc_url(home_url('/payments'));?>" title="Payments">Payments</a></li>
                            <li><a href="<?php echo esc_url(home_url('/hardware'));?>" title="Hardware">Hardware</a></li>
                            <li><a href="<?php echo esc_url(home_url('/pricing'));?>" title="Pricing">Pricing</a></li>
                            <li><a href="<?php echo esc_url(home_url('/integration'));?>" title="Integrations">Integrations</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4">
                    <div class="item-footer">
                        <h5><a href="<?php echo esc_url(home_url('/omni-channel'));?>" title="omnichannel">omnichannel</a></h5>
                        <h5><a href="<?php echo esc_url(home_url('/for-partners'));?>" title="For partners">For partners</a></h5>
                        <h5>Supports</h5>
                        <ul class="no-bullet">
                            <li><a href="<?php echo esc_url(home_url('/faqs'));?>" title="FAQs">FAQs </a></li>
                            <li><a href="https://support.smartosc.com/" title="Help Center">Help Center</a></li>
                            <li><a href="<?php echo esc_url(home_url('/contact-us'));?>" title="contact">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="item-footer">
                        <h5><a href="#" title="Blog">Blog</a></h5>
                        <h5>Follow us
                            <ul class="no-bullet list-inline social-ico">
                                <li><a href="#" title=""><i class="fa fa-facebook-f"></i></a></li>
                                <li><a href="#" title=""><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" title=""><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </h5>
                        <!--<ul class="no-bullet">
                            <li>
                                <p>18th Floor, Handico Tower, Me Tri Ha New Urban Area, Pham Hung Street, Nam Tu Liem District, Hanoi</p>
                            </li>
                            <li>
                                <p><a href="tel:0437620248">(+84) 4 3762 0248</a></p>
                            </li>
                        </ul>-->
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="bottom-note">
                    <div class="col-sm-6">
                        <p>Copyright © 2017 SmartOSC Corporation. All rights reserved.</p>
                    </div>
                    <div class="col-sm-6">
                        <div class="text-right">
                            <ul class="list-inline">
                                <li><a href="<?php echo esc_url(home_url('/terms-of-use'));?>" title="Terms of Use">Terms of Use</a></li>
                                <li><a href="<?php echo esc_url(home_url('/privacy-policy'));?>" title="Privacy Policy">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
