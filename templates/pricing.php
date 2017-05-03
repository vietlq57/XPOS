<?php
/**
 * Template Name: Pricing
 */

get_header(); ?>

    <section class="bg-gray pricing-plans">
        <div class="container">
            <div class="text-center">
                <h2>Transparent and flexible plans</h2>
                <div class="desc">Our pricing is simple, straightforward without any hidden fees. <br>Choose the right one for your business.</div>
            </div>
            <div class="switch-state text-center clearfix">
                <div class="txt pull-right off">Annually</div>
                <input type="checkbox"><span class="switchery"><small></small></span>
                <div class="txt pull-left">Monthly</div>
            </div>
            <div class="row mg0">
                <div class="col-xs-12 col-sm-3 col-sm-offset-1 pd0">
                    <div class="planbox">
                        <div class="title">Standard</div>
                        <div class="price"><sup class="currency">$</sup>59<span>/mo</span></div>
                        <div class="unit">Billed in USD annually</div>
                        <p>The first step to the brick-and-mortar store in your dream</p>
                        <ul>
                            <li>Single outlet</li>
                            <li>One register</li>
                            <li>One active user*</li>
                            <li>Basic reports</li>
                            <li>Email & chat support</li>
                        </ul><a class="btn" href="<?php echo esc_url(home_url('/free-trial'));?>">Free trial</a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 pd0">
                    <div class="planbox highlight">
                        <div class="title">Advanced</div>
                        <div class="price"><sup class="currency">$</sup>89<span>/mo</span></div>
                        <div class="unit">Billed in USD annually</div>
                        <p>Scale up your business, increase sales and profit</p>
                        <ul>
                            <li>Single outlet</li>
                            <li>Unlimited registers</li>
                            <li>3 active users*</li>
                            <li>Advanced reports</li>
                            <li>Email & chat support</li>
                        </ul><a class="btn" href="<?php echo esc_url(home_url('/free-trial'));?>">Free trial</a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3 pd0">
                    <div class="planbox">
                        <div class="title">Multi-outlet</div>
                        <div class="price"><sup class="currency">$</sup>159<span>/mo</span></div>
                        <div class="unit">Billed in USD annually</div>
                        <p>Embrace and win omnichannel retail</p>
                        <ul>
                            <li>Multiple outlets</li>
                            <li>Unlimited registers</li>
                            <li>5 active users*</li>
                            <li>Advanced reports</li>
							<li>Email & chat support</li>
                            <li>24/7 priority phone support</li>
                        </ul><a class="btn" href="<?php echo esc_url(home_url('/free-trial'));?>">Free trial</a>
                    </div>
                </div>
            </div>
            <div class="to-desc text-center"> <span>* </span>Fee for an additional active user: $ 39</div>
        </div>
    </section>

    <section class="table-compare-features container">
        <h2 class="text-center">Compare plan features</h2>
        <div class="row mg0">
            <div class="col-xs-12 col-md-10 col-md-offset-1 pd0">
                <table class="table-bordered">
                    <thead>
                    <tr>
                        <th></th>
                        <th>Standard</th>
                        <th>Advanced</th>
                        <th>Multi-outlet</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="tit" colspan="4">Price</td>
                    </tr>
                    <tr>
                        <td>Paid annually</td>
                        <td>$59/mo</td>
                        <td>$89/mo</td>
                        <td>$159/mo</td>
                    </tr>
                    <tr>
                        <td>Paid monthly</td>
                        <td>$69/mo</td>
                        <td>$102/mo</td>
                        <td>$169/mo</td>
                    </tr>
                    <tr>
                        <td class="tit" colspan="4">Plan Limits</td>
                    </tr>
                    <tr>
                        <td>Outlets</td>
                        <td>1</td>
                        <td>1</td>
                        <td>Unlimited</td>
                    </tr>
                    <tr>
                        <td>Registers</td>
                        <td>1</td>
                        <td>Unlimited</td>
                        <td>Unlimited</td>
                    </tr>
                    <tr>
                        <td>Users</td>
                        <td>1</td>
                        <td>3</td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <td class="tit" colspan="4">Features</td>
                    </tr>
					<tr>
                        <td>Barcode scanning</td>
                        <td></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
					<tr>
                        <td>Check Magento stock</td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
					<tr>
                        <td>Check inventory from other stores</td>
                        <td></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                        <td>Order notes</td>
                        <td></td>
                        <td> <i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
					<tr>
                        <td>Price override</td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                        <td>Custom Discounts</td>
                        <td> <i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                        <td>Tax exemption</td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                        <td>Email receipt</td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
					<tr>
                        <td>Custom payment methods</td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
					<tr>
                        <td>Split Tenders</td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                        <td>Partial Payments (Layaway)</td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
					<tr>
                        <td>Reward points</td>
                        <td></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                        <td>Gift cards</td>
                        <td></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
					<tr>
                        <td>Refund/Exchange</td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                        <td>Add products to cart from wishlist</td>
                        <td></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
					<tr>
                        <td>Search online orders</td>
                        <td></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                        <td>Multiwarehouse</td>
                        <td></td>
                        <td></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                        <td class="tit" colspan="4">Reporting</td>
                    </tr>
                    <tr>
                        <td>Retail Dashboard</td>
                        <td><i class="fa fa-check"></i></td>
                        <td> <i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                        <td>Sales Reports</td>
                        <td> <i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                        <td>Payment Reports</td>
                        <td></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                        <td>Registers Reports</td>
                        <td></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                        <td>Inventory Reports</td>
                        <td></td>
                        <td></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                        <td>Gift Card reports</td>
                        <td></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                        <td class="tit" colspan="4">Support</td>
                    </tr>
                    <tr>
                        <td>Access to knowledge base</td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                        <td>Email & chat support</td>
                        <td></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                        <td>24/7 priority phone support</td>
                        <td></td>
                        <td></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <hr>
    <section class="custom-solution container">
        <div class="row">
            <div class="col-xs-12 col-sm-6">
                <div class="img"><img src="<?php echo(get_template_directory_uri()); ?>/inc/images/pricing-img-1.jpg" alt="share devices"></div>
            </div>
            <div class="col-xs-12 col-sm-6">
                <h2>Custom Solution</h2>
                <p>If you need a tailored solution that meets your specific needs, we're here to help.</p><a class="btn btn-primary" data-toggle="modal" data-target="#myModal">Contact us</a>
                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button class="close" type="button" data-dismiss="modal">&times;</button>
                                <h3 class="modal-title">Help us know more about your business</h3>
                            </div>
                            <div class="modal-body">
                                <?php echo do_shortcode( ' [ninja_form id=10] ' ); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pricing-faqs bg-gray">
        <div class="container">
            <h2 class="text-center">Frequently Asked Questions</h2>
            <div class="row">
                <div class="col-xs-12 col-md-10 col-md-offset-1">
                    <div class="panel-group panel-omni" id="accordion1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion1" href="#collapse21"> <span>1</span><i class="fa fa-plus"></i>Do I need to enter my credit card details to sign up?</a></h4>
                            </div>
                            <div class="panel-collapse collapse" id="collapse21">
                                <div class="panel-body">
                                    <p>No. You can sign up and use ConnectPOS for 30 days without entering your credit card details. When you decide on a plan at the end of your trial, you will need to enter your credit card details.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion1" href="#collapse22"> <span>2</span><i class="fa fa-plus"></i>What types of payment do you accept?</a></h4>
                            </div>
                            <div class="panel-collapse collapse" id="collapse22">
                                <div class="panel-body">
                                    <p>We accept Credit card and Paypal. If you want to wire transfer the money, please contact our support team.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion1" href="#collapse23"> <span>3</span><i class="fa fa-plus"></i>Do I have to sign a long term contract?</a></h4>
                            </div>
                            <div class="panel-collapse collapse" id="collapse23">
                                <div class="panel-body">
                                    <p>You can trial ConnectPOS with no commitment. If you choose to activate your account to a paid plan, you pay monthly and can cancel at any time. There is no commitment and no long-term contracts.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion1" href="#collapse24"> <span>4</span><i class="fa fa-plus"></i>Can I change plans and add more cashiers?</a></h4>
                            </div>
                            <div class="panel-collapse collapse" id="collapse24">
                                <div class="panel-body">
                                    <p>Sure! You can change at any time to whatever plan best suits your needs.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion1" href="#collapse25"> <span>5</span><i class="fa fa-plus"></i>Can I cancel my account at any time?</a></h4>
                            </div>
                            <div class="panel-collapse collapse" id="collapse25">
                                <div class="panel-body">
                                    <p>Yes. If you think that ConnectPOS isn’t the one for your business, you can simply cancel your account.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion1" href="#collapse26"> <span>6</span><i class="fa fa-plus"></i>Need a tailored solution?</a></h4>
                            </div>
                            <div class="panel-collapse collapse" id="collapse26">
                                <div class="panel-body">
                                    <p>Contact us and we'll make it fit you like a glove.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container">
        <div class="btn-trial text-center">
            <h3>Experience a free demo first, decide on a plan later!</h3><a class="btn btn-primary" href="<?php echo esc_url(home_url('/free-trial'));?>">free trial</a><span class="no-required">No credit card required</span>
        </div>
    </section>

<?php
get_footer();
