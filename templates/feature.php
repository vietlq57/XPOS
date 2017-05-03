<?php
/**
 * Template Name: Feature
 */

get_header(); ?>

    <div class="banner">
        <div class="hero-img" style="background-image: url('<?php echo(get_template_directory_uri()); ?>/inc/images/faqs-hero-banner.jpg');"><img class="hidden" src="'<?php echo(get_template_directory_uri()); ?>/inc/images/faqs-hero-banner.jpg" alt="">
            <div class="content text-center">
                <h1>Features</h1>
                <div></div>
            </div>
        </div>
    </div>

    <section class="container">
        <h3 class="header-sup-page">All you need to power your physical stores and <br>integrate sales channels</h3>
        <div class="fearture">
            <div class="left-menu">
                <ul class="no-bullet">
                    <li><a class="item active" href="javascript:void(0);" data-value="#product">Product</a></li>
                    <li><a class="item" href="javascript:void(0);" data-value="#checkout">Checkout</a></li>
                    <li><a class="item" href="javascript:void(0);" data-value="#payment">Payments</a></li>
                    <li><a class="item" href="javascript:void(0);" data-value="#customer">Customer</a></li>
                    <li><a class="item" href="javascript:void(0);" data-value="#system">Report System</a></li>
                    <li><a class="item" href="javascript:void(0);" data-value="#multi-store">Multi-store Management</a></li>
                </ul>
            </div>
            <div class="right-content">
                <section class="list-container" id="product">
                    <h3 class="header-list"><i class="item-icon product-icon" style="background-image: url('<?php echo(get_template_directory_uri()); ?>/inc/images/list-item-icon.png');"></i>Product</h3>
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <ul class="no-bullet">
                                <li>
                                    <h4 class="header-title"> <a href="javascript:void(0)">Product Organization</a></h4>
                                    <p>Support all Magento product types. Search products quickly by name, ID, SKU or barcode.</p>
                                </li>
                                <li>
                                    <h4 class="header-title"> <a href="javascript:void(0)">Product Display</a></h4>
                                    <p>Switch easily between grid view and list view</p>
                                </li>
                                <li>
                                    <h4 class="header-title"> <a href="javascript:void(0)">Barcode Support</a></h4>
                                    <p>Assign existing barcodes to products or create new ones. Scan barcode to add products to customers' carts.</p>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <ul class="no-bullet">
                                <li>
                                    <h4 class="header-title"> <a href="javascript:void(0)">Inventory Look-see</a></h4>
                                    <p>Check the stocks of each store. Sync in real time with online store, avoid selling out-of-stock products.</p>
                                </li>
                                <li><a href="javascript:void(0)"><img class="img-responsive" src="<?php echo(get_template_directory_uri()); ?>/inc/images/product1.jpg"></a></li>
                            </ul>
                        </div>
                    </div>
                </section>
                <section class="list-container" id="checkout">
                    <h3 class="header-list"><i class="item-icon checkout" style="background-image: url('<?php echo(get_template_directory_uri()); ?>/inc/images/list-item-icon.png');"></i>Checkout</h3>
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <ul class="no-bullet">
                                <li>
                                    <h4 class="header-title"> <a href="javascript:void(0)">3-step Checkout</a></h4>
                                    <p>Put the products in the cart, click "Pay", choose the payment method and you're ready</p>
                                </li>
                                <li>
                                    <h4 class="header-title"> <a href="javascript:void(0)">Order Notes</a></h4>
                                    <p>Keep track of special requests and details by attaching notes to orders</p>
                                </li>
                                <li>
                                    <h4 class="header-title"> <a href="javascript:void(0)">Custom Sale</a></h4>
                                    <p>Create items not yet available on Magento store to add to the cart quickly</p>
                                </li>
                                <li>
                                    <h4 class="header-title"> <a href="javascript:void(0)">Promotions</a></h4>
                                    <p>Discount by percentage or number on selected items or the whole cart. Support coupons, gift cards and reward points.</p>
                                </li>
                                <li>
                                    <h4 class="header-title"> <a href="javascript:void(0)">Multiple Tax Levels</a></h4>
                                    <p>Flexible tax configuration system to allow for every possible scenario</p>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <ul class="no-bullet">
                                <li>
                                    <h4 class="header-title"> <a href="javascript:void(0)">Shipping</a></h4>
                                    <p>Record a customer’s shipping address and contact details for delivery later</p>
                                </li>
                                <li>
                                    <h4 class="header-title"> <a href="javascript:void(0)">Receipts</a></h4>
                                    <p>Create receipt templates for different purposes, with your logo, website and store address. Email or print receipts after a sale.</p>
                                </li>
                                <li>
                                    <h4 class="header-title"> <a href="javascript:void(0)">iPad Support</a></h4>
                                    <p>Take your iPad to your customer, and accept orders anywhere. No need for a checkout counter!</p>
                                </li>
                                <li><a href="javascript:void(0)"><img class="img-responsive" src="<?php echo(get_template_directory_uri()); ?>/inc/images/product2.jpg"></a></li>
                            </ul>
                        </div>
                    </div>
                </section>
                <section class="list-container" id="payment">
                    <h3 class="header-list"><i class="item-icon payment" style="background-image: url('<?php echo(get_template_directory_uri()); ?>/inc/images/list-item-icon.png');"></i>Payments</h3>
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <ul class="no-bullet">
                                <li>
                                    <h4 class="header-title"> <a href="javascript:void(0)">Custom Payments</a></h4>
                                    <p>Create custom payment options to accept cheques, or payments made with an external device</p>
                                </li>
                                <li>
                                    <h4 class="header-title"> <a href="javascript:void(0)">Split Tenders</a></h4>
                                    <p>Accept two or more payment types in a transaction, i.e. credit card and cash, or multiple credit cards.</p>
                                </li>
                                <li>
                                    <h4 class="header-title"> <a href="javascript:void(0)">Layaway (Partial Payment)</a></h4>
                                    <p>Allow your customers to make deposits or layaways and pay the rest later with any method</p>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <ul class="no-bullet">
                                <li>
                                    <h4 class="header-title"> <a href="javascript:void(0)">Refund & Exchange</a></h4>
                                    <p>Refund using original payment method, refund to reward points or exchange items for dissatisfied customers</p>
                                </li>
                                <li><a href="javascript:void(0)"><img class="img-responsive" src="<?php echo(get_template_directory_uri()); ?>/inc/images/product3.jpg"></a></li>
                            </ul>
                        </div>
                    </div>
                </section>
                <section class="list-container" id="customer">
                    <h3 class="header-list"><i class="item-icon customer" style="background-image: url('<?php echo(get_template_directory_uri()); ?>/inc/images/list-item-icon.png');"></i>Customer</h3>
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <ul class="no-bullet">
                                <li>
                                    <h4 class="header-title"> <a href="javascript:void(0)">Customer Profile</a></h4>
                                    <p>Create, edit customer information quickly, even in Offline Mode or let them check out as guest</p>
                                </li>
                                <li>
                                    <h4 class="header-title"> <a href="javascript:void(0)">Customer Database</a></h4>
                                    <p>Customer information is synced with Magento so you only need to manage one customer list for all online and offline stores.</p>
                                </li>
                                <li>
                                    <h4 class="header-title"> <a href="javascript:void(0)">Customer Loyalty</a></h4>
                                    <p>Award loyal customers with coupons, reward points and discounts and keep them coming back for more</p>
                                </li>
                                <li>
                                    <h4 class="header-title"> <a href="javascript:void(0)">Wish-list</a></h4>
                                    <p>Send products to customers' online carts or wishlists for them to buy online later</p>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <ul class="no-bullet">
                                <li><a href="javascript:void(0)"><img class="img-responsive" src="<?php echo(get_template_directory_uri()); ?>/inc/images/product4.jpg"></a></li>
                            </ul>
                        </div>
                    </div>
                </section>
                <section class="list-container" id="system">
                    <h3 class="header-list"><i class="item-icon report-system" style="background-image: url('<?php echo(get_template_directory_uri()); ?>/inc/images/list-item-icon.png');"></i>Report System</h3>
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <ul class="no-bullet">
                                <li>
                                    <h4 class="header-title"> <a href="javascript:void(0)">Central Data Management</a></h4>
                                    <p>View reports from your offline and online stores in one place to get a better view of your business</p>
                                </li>
                                <li>
                                    <h4 class="header-title"> <a href="javascript:void(0)">Cash Float</a></h4>
                                    <p>Easily monitor all cash register adjustments and staff changes throughout the day</p>
                                </li>
                                <li>
                                    <h4 class="header-title"> <a href="javascript:void(0)">Diverse Reports</a></h4>
                                    <p>20 different reports - all the information needed for store owners and cashiers</p>
                                </li>
                                <li>
                                    <h4 class="header-title"> <a href="javascript:void(0)">Customizable Dashboard</a></h4>
                                    <p>Get all critical metrics in a clear dashboard with advanced options and built-in filters</p>
                                </li>
                                <li>
                                    <h4 class="header-title"> <a href="javascript:void(0)">Insight Distillation</a></h4>
                                    <p>Analyze and gain insight into your store’s growth, from best-selling products, staff performance to customer behaviors</p>
                                </li>
                                <li>
                                    <h4 class="header-title"> <a href="javascript:void(0)">Export Reports</a></h4>
                                    <p>Export data to CSV file for further analysis or send reports to your accountants</p>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <ul class="no-bullet">
                                <li>
                                    <h4 class="header-title"> <a href="javascript:void(0)">Insight Distillation</a></h4>
                                    <p>Analyze and gain insight into your store’s growth, from best-selling products, staff performance to customer behaviors</p>
                                </li>
                                <li><a href="javascript:void(0)"><img class="img-responsive" src="<?php echo(get_template_directory_uri()); ?>/inc/images/product1.jpg"></a></li>
                            </ul>
                        </div>
                    </div>
                </section>
                <section class="list-container" id="multi-store">
                    <h3 class="header-list"><i class="item-icon multi-store" style="background-image: url('<?php echo(get_template_directory_uri()); ?>/inc/images/list-item-icon.png');"></i>Multi-store Management</h3>
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <ul class="no-bullet">
                                <li>
                                    <h4 class="header-title"> <a href="javascript:void(0)">Add outlets and warehouses</a></h4>
                                    <p>Scale up your business? Add more stores and assign warehouses accordingly in just minutes. Adjust tax and language to go local.</p>
                                </li>
                                <li>
                                    <h4 class="header-title"> <a href="javascript:void(0)">Add registers</a></h4>
                                    <p>Add registers to sell more during peak season and easily deactivate them when they're needed</p>
                                </li>
                                <li>
                                    <h4 class="header-title"> <a href="javascript:void(0)">Translation Tool</a></h4>
                                    <p>You can change the language of the user interface and the receipt into the local language.</p>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <ul class="no-bullet">
                                <li>
                                    <h4 class="header-title"> <a href="javascript:void(0)">Real Time Synchronization</a></h4>
                                    <p>Sync your physical stores in real time with your online business, avoid selling out-of-stock products</p>
                                </li>
                                <li><a href="javascript:void(0)"><img class="img-responsive" src="<?php echo(get_template_directory_uri()); ?>/inc/images/product1.jpg"></a></li>
                            </ul>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>

    <section class="omni omni-quotes">
        <div class="container">
            <div class="about-quotes pd90">
                <h2>ConnectPOS through our clients' views</h2>
                <div class="entry-item">
                    <div class="entry-thumb"><img class="img-circle" src="<?php echo(get_template_directory_uri()); ?>/inc/images/quotes-1.jpg"></div>
                    <div class="entry-content">
                        <h3>Eli Wallach</h3><span>Marketing Manager at Toronto Brewing</span>
                        <p>The product delivers exactly what it advertises and does so in a very sophisticated and eloquent way. Moreover, the support I received from SmartOSC was second to none!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container">
        <div class="block-content-pay">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="title">Power your store with the best POS for Magento</h2><a class="btn btn-free" href="trial">free trial</a><span class="no-required">No credit card required</span>
                </div>
                <div class="col-md-6">
                    <div class="pull-right"><img src="<?php echo(get_template_directory_uri()); ?>/inc/images/fearture.jpg"></div>
                </div>
            </div>
            <div class="row">
                <div class="content-container-pay">
                    <div class="col-md-12">
                        <div class="pagination pagination-next pull-right"><a href="<?php echo esc_url(home_url('/payments'));?>">Next</a>
                            <h5>Payment</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
get_footer();

