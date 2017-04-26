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

	</div><!-- #content -->

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <div class="intro">
                        <h5>About us</h5>
                        <p>Developed by SmartOSC, the pioneer in Magento POS, X-POS is the high-speed software for omni-channel retailers.</p>
                        <ul class="list-inline">
                            <li><a href="#" title="certificate"> <img src="<?php echo(get_template_directory_uri()); ?>/inc/images/magento1.png" alt="Magento 1"></a></li>
                            <li><a href="#" title="certificate"> <img src="<?php echo(get_template_directory_uri()); ?>/inc/images/magento2.png" alt="Magento 2"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4">
                    <div class="item-footer">
                        <h5>Point of sale</h5>
                        <ul class="no-bullet">
                            <li><a href="#" title="Features">Features</a></li>
                            <li><a href="#" title="Payments">Payments</a></li>
                            <li><a href="#" title="Hardware">Hardware</a></li>
                            <li><a href="#" title="Pricing">Pricing</a></li>
                            <li><a href="#" title="Integrations">Integrations</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4">
                    <div class="item-footer">
                        <h5><a href="#" title="omnichannel">omnichannel</a></h5>
                        <h5><a href="#" title="For partners">For partners</a></h5>
                        <h5>Supports</h5>
                        <ul class="no-bullet">
                            <li><a href="#" title="FAQs">FAQs </a></li>
                            <li><a href="#" title="Help Center">Help Center</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="item-footer">
                        <h5><a href="#" title="Blog">Blog</a></h5>
                        <h5><a href="#" title="Follow us">Follow us</a></h5>
                        <ul class="no-bullet list-inline">
                            <li><a href="#" title=""><i class="fa fa-facebook-f"></i></a></li>
                            <li><a href="#" title=""><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" title=""><i class="fa fa-google-plus"></i></a></li>
                        </ul>
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
                                <li><a href="#" title="Terms of Use">Terms of Use</a></li>
                                <li><a href="#" title="Privacy Policy">Privacy Policy</a></li>
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
