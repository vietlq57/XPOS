<?php
/**
 * Template Name: OmniChannel
 */

get_header(); ?>

<!-- Trigger the modal with a button -->


<!-- Login moda;-->
<div id="popLogin" class="modal fade" role="dialog">
  <div class="modal-dialog popups">
    <!-- Modal content -->
    <div class="modal-content">  
     <!-- Popup login     -->
      <div class="modal-body popup-login">
        <div class="img-hero">
            <div class="text">
                <h2>
                    Win clients' hearts with the world-class <span class="nowrap">Magento POS</span>
                </h2>
            </div>
            <div class="form-signup"> 
                <h3>
                        Sign up now
                </h3>               
                <form>               
                    
                    <p class="desc">
                        Enter your infomation below and submit to join our worldwide agency network
                    </p>     
                  <div class="form-group">                    
                    <input type="text" class="form-control" placeholder="Full Name">
                  </div>
                  <div class="form-group">                    
                    <input type="email" class="form-control"  placeholder="Email Address">
                  </div>
                  <div class="form-group">                    
                    <input type="text" class="form-control" placeholder="Phone Number">
                  </div>
                  <div class="form-group">                    
                    <select class="form-control" placeholder>
                        <option selected>Choose...</option>
                        <option value="1">Country</option>
                        <option value="2">Country 1</option>
                        <option value="3">Country 2</option>
                      </select>
                  </div>
                  <button type="submit" class="btn btn-primary">Become our agency</button>
                </form>
                <div class="bottom-link">
                    <a href="#">
                        Terms of Use
                    </a>
                    <a href="#">&nbsp; |&nbsp;
                       Privacy Policy
                    </a>                    
                    <p>©2017 ConnectPOS</p>
                </div>
            </div>
            <img src="<?php echo(get_template_directory_uri()); ?>/inc/images/popups/login-hero.jpg" alt="login-hero">
        </div>
        <div class="partners">
            <ul>
                <li>
                    <a>
                        <img src="<?php echo(get_template_directory_uri()); ?>/inc/images/popups/logo-partner-02.png" alt="">
                    </a>
                </li>
                <li>
                    <a>
                        <img src="<?php echo(get_template_directory_uri()); ?>/inc/images/popups/logo-partner-03.png" alt="">
                    </a>
                </li>
                <li>
                    <a>
                        <img src="<?php echo(get_template_directory_uri()); ?>/inc/images/popups/logo-partner-04.png" alt="">
                    </a>
                </li>
                <li>
                    <a>
                        <img src="<?php echo(get_template_directory_uri()); ?>/inc/images/popups/logo-partner-05.png" alt="">
                    </a>
                </li>
                <li>
                    <a>
                        <img src="<?php echo(get_template_directory_uri()); ?>/inc/images/popups/logo-partner-06.png" alt="">
                    </a>
                </li>
                <li>
                    <a>
                        <img src="<?php echo(get_template_directory_uri()); ?>/inc/images/popups/logo-partner-07.png" alt="">
                    </a>
                </li>
                <li>
                    <a>
                        <img src="<?php echo(get_template_directory_uri()); ?>/inc/images/popups/logo-partner-08.png" alt="">
                    </a>
                </li>
            </ul>
        </div>
      </div>
    </div>
 </div>
</div>

<!-- Celebrate with us -->
<div id="popCelebrate" class="modal fade" role="dialog">
   <div class="modal-dialog popups">
        <div class="modal-content"> 
          <div class="modal-body popup-celebrate">
            <div class="celebrate-content">
                <div class="text">
                    <h3>Celebrate with us!</h3>
                    <div class="desc">
                        To celebrate the official launch of ConnectPOS, we offer<span class="discount-num"> 15% discount</span> <br />
                        on ConnectPOS for a limited time. 
                        <p>Register for a FREE Trial now and get your discount code!</p>

                    </div>
                    <button class="btn btn-primary">Register Now</button>
                </div>
                <ul class="exp-datetime">
                    <li>
                        <span class="number">6</span>
                        <span class="label">Days</span>
                    </li>
                    <li>
                        <span class="number">12</span>
                        <span class="label">Hours</span>
                    </li>
                    <li>
                        <span class="number">32</span>
                        <span class="label">Minutes</span>
                    </li>
                    <li>
                        <span class="number">24</span>
                        <span class="label">Seconds</span>
                    </li>
                </ul>

            </div>
            <div class="img-bg">            
                <img src="<?php echo(get_template_directory_uri()); ?>/inc/images/popups/celebrate.jpg" alt="celebrate">
            </div>        
          </div>
      </div>
   </div>
</div>

<!-- Discover popup -->
<div id="popDiscover" class="modal fade" role="dialog">
   <div class="modal-dialog popups">
        <div class="modal-content"> 
          <div class="modal-body popup-discover">
            <div class="celebrate-content">
                <div class="text">
                    <h3>Discover the first <span class="nowrap">Magento POS</span> for Omnichannel</h3>
                    <div class="desc">
                        Compatible with Magento 1 and 2. Powerful features for physical stores. Real time synchronization for a truly omnichannel experience.
                        <p>Explore ConnectPOS today and get a FREE trial, plus a special offer!</p>

                    </div>
                    <button class="btn btn-primary">Learn more</button>
                </div>            
            </div>
            <div class="img-bg">            
                <img src="<?php echo(get_template_directory_uri()); ?>/inc/images/popups/discover.jpg" alt="celebrate">
            </div>        
          </div>
      </div>
    </div>
</div>

<!-- Congratulations popup -->
<div id="popCongratulations" class="modal fade" role="dialog">
   <div class="modal-dialog popups">
        <div class="modal-content"> 
          <div class="modal-body">
            <div class="content">
                <img src="<?php echo(get_template_directory_uri()); ?>/inc/images/popups/Congratulations.jpg" alt="celebrate">
                <br />
                <h3>Congratulations</h3>
                <div class="desc">
                    <p>You are the <span class="x">X</span> to register. You have won one month free trial and a one-year license of Multi-Outlet plan.
                    </p>

                    <p>Our sales rep will reach out to you soon with more details. For now, you can go back our website to learn more about ConnectPOS
                    </p>
                </div>
                <button class="btn btn-primary">Back to ConnectPOS</button>
                
            </div>
          </div>
      </div>
    </div>
</div>


    <div class="banner">
        <div class="hero-img" style="background-image: url('<?php echo(get_template_directory_uri()); ?>/inc/images/omnichannel-hero-banner.jpg');"><img class="hidden" src="<?php echo(get_template_directory_uri()); ?>/inc/images/omnichannel-hero-banner.jpg" alt="">
            <div class="content text-center">
                <h1>Omnichannel Features</h1>
                <a data-toggle="modal" data-target="#popLogin">Login</a> ||
                <a data-toggle="modal" data-target="#popCelebrate">Celebrate</a> ||
                <a data-toggle="modal" data-target="#popDiscover">Discover</a> ||
                <a data-toggle="modal" data-target="#popCongratulations">Congratulations</a>
            </div>
        </div>
    </div>

    <div id="omnichannel">
        <section class="container title">
            <h2>ConnectPOS supports omnichannel implementation</h2>
            <div class="desc">ConnectPOS integrates your brick-and-mortar stores with your Magento webstore, syncs all data in real time for consistent customer experience across all sales channels, and thereby, increase sale and profit.</div>
        </section>
        <section class="customer-features">
            <div class="container">
                <div class="row mg0">
                    <div class="col-xs-12 col-sm-4 col-sm-offset-4 pd0">
                        <div class="list-item"><i class="ico80x80 ico-magento-webstore" style="background-image: url('<?php echo(get_template_directory_uri()); ?>/inc/images/ico-magento-webstore.png');"></i>
                            <h4>Magento Webstore</h4>
                            <ul class="no-bullet">
                                <li> <i class="fa fa-check"></i>Customer recognition</li>
                                <li> <i class="fa fa-check"></i>In-store pick-up and showrooming</li>
                                <li> <i class="fa fa-check"></i>Stock visibility in all online and offline stores</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row mg0">
                    <div class="col-xs-12 col-sm-4 pd0">
                        <div class="list-item pt120"><i class="ico80x80 ico-on-the-go" style="background-image: url('<?php echo(get_template_directory_uri()); ?>/inc/images/ico-on-the-go.png');"></i>
                            <h4>On the go</h4>
                            <ul class="no-bullet">
                                <li> <i class="fa fa-check"></i>Search product info and order by scanning barcode, pick up at counters</li>
                                <li> <i class="fa fa-check"></i>Recognize nearby customers and send them promo code to trigger sales</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 pd0 hidden-xs">
                        <div class="content">
                            <div class="img"><img src="<?php echo(get_template_directory_uri()); ?>/inc/images/cirle-w-line.png" alt=""></div>
                            <div class="txt"><i class="ico80x80 ico-omni-customer" style="background-image: url('<?php echo(get_template_directory_uri()); ?>/inc/images/ico-omni-customer.png');"></i>
                                <h4>Customer</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 pd0">
                        <div class="list-item pt120"><i class="ico80x80 ico-social-network" style="background-image: url('<?php echo(get_template_directory_uri()); ?>/inc/images/ico-social-network.png');"></i>
                            <h4>On social networks</h4>
                            <ul class="no-bullet">
                                <li> <i class="fa fa-check"></i>Recognize customers, display targeted messages and promotions on their social networks to trigger sales</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row mg0">
                    <div class="col-xs-12 col-sm-4 col-sm-offset-4 pd0">
                        <div class="list-item"><i class="ico80x80 ico-in-store" style="background-image: url('<?php echo(get_template_directory_uri()); ?>/inc/images/ico-in-store.png');"></i>
                            <h4>In store</h4>
                            <ul class="no-bullet">
                                <li> <i class="fa fa-check"></i>Online products available in physical stores</li>
                                <li> <i class="fa fa-check"></i>Customer recognition</li>
                                <li> <i class="fa fa-check"></i>Stock visibility of all online and offline stores</li>
                                <li> <i class="fa fa-check"></i>In-store data collection</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-gray">
            <div class="container list-container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 hidden-xs">
                        <ul class="no-bullet">
                            <li><a><img class="img-responsive" src="<?php echo(get_template_directory_uri()); ?>/inc/images/omni-img-1.png"></a></li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-xs-12 col-sm-6">
                        <h3>Enrich Customer Experience</h3>
                        <ul class="no-bullet">
                            <li>
                                <h4>One customer database</h4>
                                <p>Recognize customers regardless of sales channels they've used before with the synced customer database. Customers don't waste time repeating themselves when transitioning between sales channels.</p>
                            </li>
                            <li>
                                <h4>One order database</h4>
                                <p>Synced transaction history allows customers to earn reward points on any channel and spend them wherever they want, online or in-store. Win customers' hearts and keep them coming back for more.</p>
                            </li>
                            <li>
                                <h4>Customer report and analytics</h4>
                                <p>Collected data from multi-channels make it possible to track customers on different channels, learn their behaviors and preferences in order to serve them better. </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="container list-container">
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <h3>Increase Sales and Profit</h3>
                    <ul class="no-bullet">
                        <li>
                            <h4>One product database</h4>
                            <p>ConnectPOS enables selling your Magento products in your physical stores. Repeating exposure to the products on different channels enhances brand awareness and improves the selling opportunity.</p>
                        </li>
                        <li>
                            <h4>Cross-channels sales</h4>
                            <p>Offer customers flexibility to shop in different ways: shop online or at store, home delivery, click-and-collect, showrooming. Increase the buying opportunities for various products and raise sales.</p>
                        </li>
                        <li>
                            <h4>Targeted sales tactics</h4>
                            <p>With gained customer insights, you understand customers better and can craft attractive offers to trigger sales and upgrade them to premium products, services with higher profit margins.</p>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-6 hidden-xs">
                    <ul class="no-bullet">
                        <li><a><img class="img-responsive" src="<?php echo(get_template_directory_uri()); ?>/inc/images/omni-img-2.png"></a></li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="bg-gray">
            <div class="container list-container">
                <div class="row">
                    <div class="col-sm-6 hidden-xs">
                        <ul class="no-bullet">
                            <li><a><img class="img-responsive" src="<?php echo(get_template_directory_uri()); ?>/inc/images/omni-img-3.png"></a></li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <h3>Manage Sales Channels Better</h3>
                        <ul class="no-bullet">
                            <li>
                                <h4>Real time synchronization</h4>
                                <p>All the information are synced in real time between sales channels so you always know what's going on and can take proper actions to maximize sales, customer satisfaction and minimize unexpected risks.</p>
                            </li>
                            <li>
                                <h4>Flexible rule settings</h4>
                                <p>Set up rules, i.e. promotion rule and apply them on as many channels as you like to match your business strategy. Adjust tax, language and customize receipt template depending on the store location to meet local preferences.</p>
                            </li>
                            <li>
                                <h4>Centralized reporting</h4>
                                <p>Gather the data from all the points of generation in one view and conduct analysis at ease for a better view of your business and smarter decisions. It’s also easier for you to track back to the root cause if any problem arises.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="container list-container quotes">
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <div class="img"><img class="img-responsive" src="<?php echo(get_template_directory_uri()); ?>/inc/images/omni-img-4.jpg"></div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="entry-item">
                        <p>“I implemented ConnectPOS for one of my clients and it is of great help for them in stores. They have a website and they can sell the same products at physical stores and fasten the whole sales process using ConnectPOS.”</p>
                        <div class="author">Claudio Ijaui Silva</div>
                        <div class="role">Magento Developer at ICS - COMPUTER SYSTEM</div>
                    </div>
                </div>
            </div>
        </section>
        <section class="container">
            <hr>
            <div class="btn-trial text-center">
                <h3>Embrace and win Omnichannel with ConnectPOS</h3><a class="btn btn-primary" href="<?php echo esc_url(home_url('/free-trial'));?>">free trial</a><span class="no-required">No credit card required</span>
            </div>
        </section>
    </div>



<?php
get_footer();
