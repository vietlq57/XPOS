<?php
/**
 * Template Name: FAQs
 */

get_header(); ?>

    <div class="banner">
        <div class="hero-img" style="background-image: url('<?php echo(get_template_directory_uri()); ?>/inc/images/faqs-hero-banner.jpg');"><img class="hidden" src="<?php echo(get_template_directory_uri()); ?>/inc/images/faqs-hero-banner.jpg" alt="">
            <div class="content text-center">
                <h1>Frequently Asked Questions</h1>
                <div>Find quick answers to most frequently asked questions about ConnectPOS. Check out our FAQs below</div>
            </div>
        </div>
    </div>

    <div class="container">
        <div id="faqs">
            <h3>You can choose the topic and find the quick answers to your questions here</h3>
            <div class="ul list-inline categories">
                <li><a href="#connect-features"><i class="ico40x40 ico-star-circle" style="background-image: url('<?php echo(get_template_directory_uri()); ?>/inc/images/ico-star-circle.png');"></i><span>ConnectPOS Features</span></a></li>
                <li><a href="#hpi"><i class="ico40x40 ico-tape" style="background-image: url('<?php echo(get_template_directory_uri()); ?>/inc/images/ico-tape.png');"></i><span>Hardware, Payments and Integrations</span></a></li>
                <li><a href="#our-policy"><i class="ico40x40 ico-khien" style="background-image: url('<?php echo(get_template_directory_uri()); ?>/inc/images/ico-khien.png');"></i><span>Our Policy</span></a></li>
            </div>
        </div>
    </div>

    <div class="faq-list">
        <div class="container">
            <section id="connect-features">
                <h2>ConnectPOS Features</h2>
                <div class="panel-group panel-omni" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse1"> <span>1</span><i class="fa fa-plus"></i>Which devices does ConnectPOS work on?</a></h4>
                        </div>
                        <div class="panel-collapse collapse" id="collapse1">
                            <div class="panel-body">
                                <p>ConnectPOS works on PC, Mac and iPad.</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default panel-open">
                        <div class="panel-heading">
                            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse2"> <span>2</span><i class="fa fa-plus"></i>Is the web-based ConnectPOS compatible with MAC?</a></h4>
                        </div>
                        <div class="panel-collapse collapse in" id="collapse2">
                            <div class="panel-body">
                                <p>ConnectPOS can work on both MACs and PCs. To provide you with more info, ConnectPOS is a web application so its features/functionalities are not limited by devices (Macs or PCs) providing you are using a supported web browser (Chrome, FireFox and Safari are recommended).</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse3"> <span>3</span><i class="fa fa-plus"></i>Do web-based ConnectPOS and iPad app ConnectPOS work together?</a></h4>
                        </div>
                        <div class="panel-collapse collapse" id="collapse3">
                            <div class="panel-body">
                                <p>Yes. They come in one package and both can be both for a Magento installation. But you can also use each independently.</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse4"> <span>4</span><i class="fa fa-plus"></i>I have more than one store, will ConnectPOS work for me?</a></h4>
                        </div>
                        <div class="panel-collapse collapse" id="collapse4">
                            <div class="panel-body">
                                <p>Yes, indeed. ConnectPOS works great for omni-channel retailers with multiple locations and it makes it easy to manage your inventory, staff and customer information across all your stores.</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse5"> <span>5</span><i class="fa fa-plus"></i>Can I use ConnectPOS if I have multiple cash registers in use at the same time?</a></h4>
                        </div>
                        <div class="panel-collapse collapse" id="collapse5">
                            <div class="panel-body">
                                <p>Yes. You can install ConnectPOS on multiple devices, and you won’t be charged any extra. Store activity on all devices is synchronized with your Magento admin.</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse6"> <span>6</span><i class="fa fa-plus"></i>I don’t have a reliable Internet connection, can I still make ConnectPOS work for me?</a></h4>
                        </div>
                        <div class="panel-collapse collapse" id="collapse6">
                            <div class="panel-body">
                                <p>While we highly recommend that you run ConnectPOS with a stable Internet connection, we know that it may go down from time to time due to many reasons. That’s why ConnectPOS has an offline mode that still lets you handle almost every store task such as accepting cash payment, adding customer and searching for products.</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse7"> <span>7</span><i class="fa fa-plus"></i>Can I quickly create a product that hasn't existed in my online store to check out?</a></h4>
                        </div>
                        <div class="panel-collapse collapse" id="collapse7">
                            <div class="panel-body">
                                <p>Sure, you can. Custom Sale feature available in ConnectPOS will help you do that.</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse8"> <span>8 </span><i class="fa fa-plus"></i>Does ConnectPOS support scanning barcodes?</a></h4>
                        </div>
                        <div class="panel-collapse collapse" id="collapse8">
                            <div class="panel-body">
                                <p>Yes, you can search products by barcode scanning. If a product exists, it will be automatically added to the shopping cart with quantity of 1. In addition, you can scan a receipt barcode for refund.</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse9"> <span>9</span><i class="fa fa-plus"></i>Does ConnectPOS support reward points?</a></h4>
                        </div>
                        <div class="panel-collapse collapse" id="collapse9">
                            <div class="panel-body">
                                <p>Yes, ConnectPOS is integrated with Reward Points from Aheadworks. For more information, please go here.</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse10"> <span>10</span><i class="fa fa-plus"></i>Can I customize the software?</a></h4>
                        </div>
                        <div class="panel-collapse collapse" id="collapse10">
                            <div class="panel-body">
                                <p>You can't customize the software on your own but we can tailor the software to meet your needs. For more information, please contact us for more details.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="hpi">
                <h2>Hardware, Payments and Integrations</h2>
                <div class="panel-group panel-omni" id="accordion1">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion1" href="#collapse21"> <span>1</span><i class="fa fa-plus"></i>Is ConnectPOS compatible with my existing hardware?</a></h4>
                        </div>
                        <div class="panel-collapse collapse" id="collapse21">
                            <div class="panel-body">
                                <p>ConnectPOS works well with most commonly used retail hardware so it's very likely that it's compatible with yours. We have received good feedbacks from many retailers using ConnectPOS successfully with printers we’d never heard of. To be sure, please refer to Hardware for detailed specs on the hardware compatible with ConnectPOS or contact us for further details.</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion1" href="#collapse22"> <span>2</span><i class="fa fa-plus"></i>I need a POS machine, do you also supply hardware?</a></h4>
                        </div>
                        <div class="panel-collapse collapse" id="collapse22">
                            <div class="panel-body">
                                <p>Kindly note that we supply software only. Our ConnectPOS works nicely with many printers, barcode scanners, cash drawers and so on. Please refer to Hardware suggested on our website for more information.</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion1" href="#collapse23"> <span>3</span><i class="fa fa-plus"></i>Which payment methods does ConnectPOS support?</a></h4>
                        </div>
                        <div class="panel-collapse collapse" id="collapse23">
                            <div class="panel-body">
                                <p>ConnectPOS supports widely-used payment methods. If you tend to do payment online, ConnectPOS iPad App supports payment methods via iZettle, Paypal Here and Tyro. For more information, please refer to Payments</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion1" href="#collapse24"> <span>4</span><i class="fa fa-plus"></i>How does ConnectPOS connect with a card reader?</a></h4>
                        </div>
                        <div class="panel-collapse collapse" id="collapse24">
                            <div class="panel-body">
                                <p>ConnectPOS Web can connect with USB credit card swiper through payment gateway built-in including Authorize.NET and Paypal Payment Pro. ConnectPOS iPad App can connect directly with Paypal Here and Stripe chip and pin readers.</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion1" href="#collapse25"> <span>5</span><i class="fa fa-plus"></i>Is ConnectPOS compatible with other extensions that I have already installed?</a></h4>
                        </div>
                        <div class="panel-collapse collapse" id="collapse25">
                            <div class="panel-body">
                                <p>ConnectPOS is compatible with many extensions from third parties, so it may work well with the ones you have already installed. Contact us and we will help you check the compatibility of available software. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="our-policy">
                <h2>Our Policy</h2>
                <div class="panel-group panel-omni" id="accordion2">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion2" href="#collapse31"> <span>1</span><i class="fa fa-plus"></i>What is your refund policy?</a></h4>
                        </div>
                        <div class="panel-collapse collapse" id="collapse31">
                            <div class="panel-body">
                                <p>We offer 30-day money back guarantee for Life-time plan. You can get a full refund if you are not fully satisfied with our product within 30 days after your purchase. Please submit a ticket with your order information to our ticket system to request refund. You will receive refund within 7 days since your request is confirmed.</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion2" href="#collapse32"> <span>2</span><i class="fa fa-plus"></i>Do I have to sign a long term contract?</a></h4>
                        </div>
                        <div class="panel-collapse collapse" id="collapse32">
                            <div class="panel-body">
                                <p>You can try a free demo or 30-day trial of ConnectPOS with no commitment. If you choose to activate your account to a paid plan, you can pay for a one-off license or monthly. With monthly subscription, can cancel at any time. There is no commitment and no long-term contracts.</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion2" href="#collapse33"> <span>3</span><i class="fa fa-plus"></i>Need a tailored solution?</a></h4>
                        </div>
                        <div class="panel-collapse collapse" id="collapse33">
                            <div class="panel-body">
                                <p>Contact us and we can help tailor the perfect solution for you.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <div class="container">
        <div class="ask-more">
            <h3>Can't find the answer you need? Don't hesitate to contact us!</h3>
            <ul class="list-inline">
                <li><a href="https://support.smartosc.com/"><i class="ico80x80 ico-book-dot" style="background-image: url('<?php echo(get_template_directory_uri()); ?>/inc/images/ico-message.png');"></i><span>View our Help Center</span></a></li>
                <li><a href="<?php echo esc_url(home_url('/contact-us'));?>"><i class="ico80x80 ico-mail-move" style="background-image: url('<?php echo(get_template_directory_uri()); ?>/inc/images/ico-book-dot.png');"></i><span>Send us your question</span></a></li>
            </ul>
        </div>
    </div>
<?php
get_footer();
