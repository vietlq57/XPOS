<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package xpos
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php echo(get_template_directory_uri()); ?>/inc/images/favicon.png" type="image/x-icon">
    <link rel="icon" href="<?php echo(get_template_directory_uri()); ?>/inc/images/favicon.png" type="image/x-icon">    
<link rel="profile" href="http://gmpg.org/xfn/11">
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-98493102-1', 'auto');
      ga('send', 'pageview');

    </script>
    <!-- Start of cpos Zendesk Widget script -->
<script>/*<![CDATA[*/window.zEmbed||function(e,t){var n,o,d,i,s,a=[],r=document.createElement("iframe");window.zEmbed=function(){a.push(arguments)},window.zE=window.zE||window.zEmbed,r.src="javascript:false",r.title="",r.role="presentation",(r.frameElement||r).style.cssText="display: none",d=document.getElementsByTagName("script"),d=d[d.length-1],d.parentNode.insertBefore(r,d),i=r.contentWindow,s=i.document;try{o=s}catch(e){n=document.domain,r.src='javascript:var d=document.open();d.domain="'+n+'";void(0);',o=s}o.open()._l=function(){var e=this.createElement("script");n&&(this.domain=n),e.id="js-iframe-async",e.src="https://assets.zendesk.com/embeddable_framework/main.js",this.t=+new Date,this.zendeskHost="cpos.zendesk.com",this.zEQueue=a,this.body.appendChild(e)},o.write('<body onload="document._l();">'),o.close()}();
/*]]>*/</script>
<!-- End of cpos Zendesk Widget script -->
  <script>
      zE(function() {
        zE.setLocale('en');
      });
    </script>
    <!-- start Mixpanel --><script type="text/javascript">(function(e,a){if(!a.__SV){var b=window;try{var c,l,i,j=b.location,g=j.hash;c=function(a,b){return(l=a.match(RegExp(b+"=([^&]*)")))?l[1]:null};g&&c(g,"state")&&(i=JSON.parse(decodeURIComponent(c(g,"state"))),"mpeditor"===i.action&&(b.sessionStorage.setItem("_mpcehash",g),history.replaceState(i.desiredHash||"",e.title,j.pathname+j.search)))}catch(m){}var k,h;window.mixpanel=a;a._i=[];a.init=function(b,c,f){function e(b,a){var c=a.split(".");2==c.length&&(b=b[c[0]],a=c[1]);b[a]=function(){b.push([a].concat(Array.prototype.slice.call(arguments,
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   0)))}}var d=a;"undefined"!==typeof f?d=a[f]=[]:f="mixpanel";d.people=d.people||[];d.toString=function(b){var a="mixpanel";"mixpanel"!==f&&(a+="."+f);b||(a+=" (stub)");return a};d.people.toString=function(){return d.toString(1)+".people (stub)"};k="disable time_event track track_pageview track_links track_forms register register_once alias unregister identify name_tag set_config reset people.set people.set_once people.increment people.append people.union people.track_charge people.clear_charges people.delete_user".split(" ");
      for(h=0;h<k.length;h++)e(d,k[h]);a._i.push([b,c,f])};a.__SV=1.2;b=e.createElement("script");b.type="text/javascript";b.async=!0;b.src="undefined"!==typeof MIXPANEL_CUSTOM_LIB_URL?MIXPANEL_CUSTOM_LIB_URL:"file:"===e.location.protocol&&"//cdn.mxpnl.com/libs/mixpanel-2-latest.min.js".match(/^\/\//)?"https://cdn.mxpnl.com/libs/mixpanel-2-latest.min.js":"//cdn.mxpnl.com/libs/mixpanel-2-latest.min.js";c=e.getElementsByTagName("script")[0];c.parentNode.insertBefore(b,c)}})(document,window.mixpanel||[]);
    mixpanel.init("47f9614c2fd708348b09019aa1507b55");</script><!-- end Mixpanel -->

<?php wp_head(); ?>
</head>

<body ontouchstart="">
<script type= “text/javascript”>
 mixpanel.track( "Page load", {" Page Name ": "Landing Page"}
 </script>
<div id="page" class="site">
    <header class="header">
        <div class="top-header">
            <nav class="navbar navbar-default">
                <div class="container">
                    <div class="navbar-collapse">
                        <?php wp_nav_menu(array(
                              'theme_location' => 'top_menu',
                              'menu_class' => 'nav navbar-nav navbar-right',
                              'menu_id' => 'top-menu',
                              'container' => 'ul'
                          ) ); ?>
                        <!--<ul class="nav navbar-nav navbar-right">
                            <li><a href="#">For partners</a></li>
                            <li><i class="fa fa-life-buoy"></i><a href="#">Support</a></li>
                            <li><i class="fa fa-file-text-o"></i><a href="#">Block</a></li>
                            <li class="dropdown"><i class="fa fa-user"></i><a class="dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Login</a></li>
                        </ul>-->
                    </div>
                </div>
            </nav>
        </div>
        <div class="main-menu">
            <nav class="navbar navbar-default">
                <div class="container">
                    <div class="navbar-header">
                        <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand logo" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo(get_template_directory_uri()); ?>/inc/images/logo.png"></a>
                    </div>
                    <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1">
                        <?php wp_nav_menu(array(
                                        'theme_location' => 'primary_menu',
                                        'menu_class' => 'nav navbar-nav navbar-right',
                                        'menu_id' => 'primary-menu',
                                        'container' => 'ul',
                                        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                                        'walker' => new wp_bootstrap_navwalker()
                            ) ); ?>
                        <!--<ul class="nav navbar-nav navbar-right">
                            <li><a href="#">Omni channel</a></li>
                            <li><a href="#">Fearture</a></li>
                            <li><a href="#">Pricing</a></li>
                            <li class="dropdown"><a class="dropdown-toggle" href="javascript:void(0);" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">More<i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0);">Item 1</a></li>
                                    <li><a href="javascript:void(0);">Item 2</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Free trial</a></li>
                        </ul>-->
                    </div>
                </div>
            </nav>
        </div>
    </header>

