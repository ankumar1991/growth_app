<html lang="en-US">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
    <title>Bilt Matrix</title>


    <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}" type="image/x-icon">


    {{HTML::style("wp-content/themes/shocoon/css/woocommerce.css")}}
    {{HTML::style("wp-content/themes/shocoon/css/bilt-product.css")}}
    {{HTML::style("wp-content/plugins/aqua-page-builder/assets/css/aqpb-view.css")}}
    {{HTML::style("wp-content/plugins/sidebar-manager-light/css/otw_sbm.css")}}
    {{HTML::style("wp-content/plugins/contact-form-7/includes/css/styles.css")}}
    {{HTML::style("wp-content/themes/shocoon/style.css")}}
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans%3A400%2C300%2C700&#038;ver=3.8"/>
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto+Condensed&#038;ver=3.8"/>

    {{HTML::style("wp-content/themes/shocoon/css/bootstrap.css")}}
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css"/>
    {{HTML::style("wp-content/themes/shocoon/css/dl-menu.css")}}
    {{HTML::style("wp-content/themes/shocoon/css/superfish.css")}}
    {{HTML::style("wp-content/themes/shocoon/css/responsive.css")}}
    {{HTML::style("wp-content/plugins/woocommerce/assets/css/woocommerce.css")}}

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    {{HTML::script("wp-content/jquery-migrate.min.js")}}
    {{HTML::script("wp-content/themes/shocoon/js/modernizr.custom.65274.js")}}
    {{HTML::script("wp-content/themes/shocoon/js/hoverIntent.js")}}
    {{HTML::script("wp-content/themes/shocoon/js/superfish.js")}}
    {{HTML::script("wp-content/themes/shocoon/js/mobile_detector.js")}}
    {{HTML::script("wp-content/themes/shocoon/js/imagesLoaded.js")}}


    <!--Tab Slider css &amp; js-->
    {{HTML::style("wp-content/tab-slider/styles/jquery.sliderTabs.css")}}
    {{HTML::style("wp-content/themes/shocoon/css/custom.css")}}
    {{HTML::script("wp-content/tab-slider/jquery.sliderTabs.min.js")}}

    <!--    facebook-->
    <script type="text/javascript" src="//connect.facebook.net/en_US/all.js"></script>
    <meta property="fb:admins" content="534000562"/>
    @yield('meta')
    <!-- WooCommerce Version -->
    <meta name="generator" content="WooCommerce 2.0.20"/>
    <style type="text/css">
        .met_bgcolor, .met_bgcolor_transition:hover {
            background-color: #18ADB5
        }

        .met_color, .met_color_transition:hover, .met_title_with_pager nav a.selected {
            color: #18ADB5
        }

        .met_bgcolor_trans {
            background-color: rgba(24, 173, 181, 0.8)
        }

        .met_blog_list_preview aside:after, .met_blog_comments_title:before {
            border-top-color: #18ADB5
        }

        .met_blog_comment_count {
            border-left-color: #18ADB5
        }

        .met_accordion .accordion-toggle {
            background-color: #18ADB5
        }

        .btn-primary {
            background: #18ADB5;
        }

        .met_message_info {
            background-color: #18ADB5;
        }

        .met_bgcolor, ::selection, .met_bgcolor_transition:hover, .met_audio_current_progress, .met_tab_nav.met_bgcolor, .met_message_info, .met_accordion .accordion-toggle, .met_testimonial:after {
            background-color: #d2202b
        }

        .btn-primary {
            background: #18ADB5
        }

        .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit, .woocommerce #content input.button, .woocommerce-page a.button, .woocommerce-page button.button, .woocommerce-page input.button, .woocommerce-page #respond input#submit, .woocommerce-page #content input.button {
            background: #18ADB5 !important
        }

        a, .met_color, .met_color_transition:hover, .met_title_with_pager nav a.selected {
            color: #d2202b
        }

        .met_message_info:after {
            border-right-color: #18ADB5
        }

        @media all and (max-width: 480px) {
            .woocommerce ul.products li.product:nth-child(2n) {
                margin-right: 0;
            }

            .woocommerce ul.products li.product {
                width: 48.1%;
            }
        }

        @media all and (max-width: 320px) {
            .woocommerce ul.products li.product {
                margin-right: 0;
            }

            .woocommerce ul.products li.product {
                width: 100%;
            }
        }

        /*.met_menu_home {*/
        /*padding: 18px !important;*/
        /*}*/

        /* placeholder all */
        ::-webkit-input-placeholder {
            font-size: 15px;
        }

        ::-moz-placeholder {
            font-size: 15px;
        }

        /* firefox 19+ */
        :-ms-input-placeholder {
            font-size: 15px;
        }

        /* ie */
        input:-moz-placeholder {
            font-size: 15px;
        }

        .active {
            background-color: #de2934 !important;
        }

    </style>

    <style id="met_live_color"></style>
    <style id="colorChanges" type="text/css"></style>

    <script type="text/javascript">
        FB.init({appId: '760615940635149', status: true, cookie: true,
            xfbml: true, frictionlessRequests: true});
        FB.Canvas.setAutoGrow();

    </script>

</head>

<?php $site_url = "http://beta.bilt-matrix.com"; ?>

<body class="home page page-id-51 page-template-default clearfix " data-smooth-scrolling="1">

<div id="fb-root"></div>

<div class="met_page_wrapper  "><!-- #BeginLibraryItem "/Library/menu.lbi" -->
<div class="met_page_wrapper  "><!-- #BeginLibraryItem "/Library/menu.lbi" -->
    <header class="met_content">
        <div class="row-fluid">
            <div class="span12"><a href="{{$site_url}}" class="met_logo met_logo_loading"><img
                        src="{{asset('wp-content/logo/logo.png')}}" data-retina="#" height="44" alt="" style=""/></a>
                <aside class="clearfix">
                    <nav>
                        <ul>
                            <li><a href="#" target="" class="join_us">Join Us on</a></li>

                        </ul>
                    </nav>
                    <a href="https://www.facebook.com/biltmatrix" target="_blank"
                       class="met_color3 met_color_transition"><i class="icon-facebook"></i></a>
                </aside>
                <div id="dl-menu" class="dl-menuwrapper">
                    <button class="met_bgcolor met_bgcolor_transition2">MENU</button>
                    <ul>
                        <li><a href="{{$site_url}}" class="met_menu_home"><i class="icon-home"></i></a></li>
                        <li><a href="#" target="" class="met_icon_menu"><i class="icon-book"></i> Products</a>
                            <ul class="dl-submenu">
                                <li><a href="{{$site_url.'/premium-notebook.html'}}">Premium Notebooks</a></li>
                                <li><a href="{{$site_url.'/padfolios-leather-folder.html'}}">Padfolios &amp; Leather
                                        Folders</a></li>
                                <li><a href="{{$site_url.'/organiser-year-book.html'}}">Organisers &amp; Year Books</a>
                                </li>
                                <li><a href="{{$site_url.'/youth-series.html'}}">Youth Series</a></li>
                                <li><a href="{{$site_url.'/junior-series.html'}}">Junior Notebooks</a></li>
                                <li><a href="{{$site_url.'/premium-pencils.html'}}">Premium Pencils</a></li>
                                <li><a href="{{$site_url.'/copier-paper.html'}}">Copier Paper</a></li>
                                <li><a href="{{$site_url.'/value-added-paper.html'}}">Value Added Paper</a></li>

                            </ul>
                        </li>
                        <li><a href="{{URL::to('contest')}}" target="" class="met_icon_menu"><i class="icon-trophy"></i>
                                Contest</a></li>
                        <li><a href="{{$site_url.'/gallery.html'}}" target="" class="met_icon_menu"><i
                                    class="icon-picture"></i>
                                Gallery</a></li>

                        <li><a href="{{$site_url.'/etailers.html'}}" target="" class="met_icon_menu"><i
                                    class="icon-shopping-cart"></i> eTailers</a></li>

                        <li><a href="{{$site_url.'/events.html'}}" target="" class="met_icon_menu"><i
                                    class="icon-calendar"></i> Events</a>
                        </li>

                        <li><a href="#" target="" class="met_icon_menu"><i class="icon-download"></i> Downloads</a>
                            <ul class="dl-submenu">
                                <li><a href="http://beta.bilt-matrix.com/wp-content/Catalogue.pdf" target="_blank">Catalogue</a>
                                </li>
                            </ul>
                        </li>


                        <li><a href="{{$site_url.'/contact.html'}}" target="" class="met_icon_menu"><i
                                    class="icon-phone"></i>
                                Contact</a></li>
                    </ul>
                </div>
                <!-- /dl-menuwrapper -->
            </div>
        </div>
    </header>
    <!-- Header Ends  -->

    <nav class="met_content met_main_nav met_bgcolor3 clearfix" data-fixed="1">

        <ul>
            <li><a href="{{$site_url}}" class="met_menu_home" style="padding-top: 13px;padding-bottom: 14px"><i
                        class="icon-home"></i></a></li>
            <li><a href="#" target="" class="met_icon_menu"><i class="icon-book"></i> Products</a>
                <ul class="dl-submenu">
                    <li><a href="{{$site_url.'/premium-notebook.html'}}">Premium Notebooks</a></li>
                    <li><a href="{{$site_url.'/padfolios-leather-folder.html'}}">Padfolios &amp; Leather Folders</a>
                    </li>
                    <li><a href="{{$site_url.'/organiser-year-book.html'}}">Organisers &amp; Year Books</a></li>
                    <li><a href="{{$site_url.'/youth-series.html'}}">Youth Series</a></li>
                    <li><a href="{{$site_url.'/junior-series.html'}}">Junior Notebooks</a></li>
                    <li><a href="{{$site_url.'/premium-pencils.html'}}">Premium Pencils</a></li>
                    <li><a href="{{$site_url.'/copier-paper.html'}}">Copier Paper</a></li>
                    <li><a href="{{$site_url.'/value-added-paper.html'}}">Value Added Paper</a></li>

                </ul>
            </li>
            <li><a href="{{URL::to('contest')}}" target="" class="met_icon_menu"><i class="icon-trophy"></i> Contest</a>
            </li>
            <li><a href="{{$site_url.'/gallery.html'}}" target="" class="met_icon_menu"><i class="icon-picture"></i>
                    Gallery</a></li>

            <li><a href="{{$site_url.'/etailers.html'}}" target="" class="met_icon_menu"><i
                        class="icon-shopping-cart"></i> eTailers</a>
            </li>

            <li><a href="{{$site_url.'/events.html'}}" target="" class="met_icon_menu"><i class="icon-calendar"></i>
                    Events</a></li>

            <li><a href="#" target="" class="met_icon_menu"><i class="icon-download"></i> Downloads</a>
                <ul class="dl-submenu">
                    <li><a href="http://beta.bilt-matrix.com/wp-content/Catalogue.pdf" target="_blank">Catalogue</a>
                    </li>
                </ul>
            </li>

            <li><a href="{{$site_url.'/contact.html'}}" target="" class="met_icon_menu"><i class="icon-phone"></i>
                    Contact</a></li>
        </ul>
        <div class="pull-right met_bgcolor envelope-header envelop-link">
            <a class="envelop-link-a" href="mailto:retail@bilt.com"
               style="padding-top: 14px!important;padding-bottom: 15px !important;"><i class="icon-envelope icon-2x"
                                                                                       style="font-size:22px;"></i></a>
        </div>
    </nav>

    <div class="container" style="min-height: 400px">
        @yield('content')
    </div>


    <!--Footer Starts here-->
    <footer class="met_bgcolor3 clearfix">
        <div class="met_content">
            <div class="row-fluid">
                <div class="span4">
                    <div class="row-fluid met_small_block sidebar-widget footer-widget widget_text" id="text-3">
                        <div class="span12">
                            <div class="textwidget">
                                <h3 style="display:inline-block;" class="met_color2">Join us on <span
                                        style="padding-left:5px; padding-right:5px; display:inline-block; font-size:23px; font-weight:normal;">|</span>
                                </h3>

                                <div style="display:inline-block;" class="met_footer_social_icons"><a
                                        class="met_color2 met_color_transition" target="_blank"
                                        href="https://www.facebook.com/biltmatrix"><i class="icon-facebook"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="span8">
                    <ul class="met_footer_menu">
                        <li><a class="met_color2" href="{{$site_url.'/'}}" target="">Home</a></li>
                        <li><a class="met_color2" href="{{$site_url.'/about.html'}}" target="">About Us</a>
                        </li>
                        <li><a class="met_color2" href="#" target="">Contest</a></li>
                        <li><a class="met_color2" href="{{$site_url.'/gallery.html'}}" target="">Gallery</a>
                        </li>
                        <li><a class="met_color2" href="{{$site_url.'/etailers.html'}}" target="">eTailers</a>
                        </li>
                        <li><a class="met_color2" href="{{$site_url.'/events.html'}}" target="">Events</a>
                        </li>
                        <li><a class="met_color2" href="{{$site_url.'/contact.html'}}" target="">Contact</a>
                        </li>
                    </ul>
                    <select class="met_responsive_nav">
                        <option value="#">Home</option>
                        <option value="#">About Us</option>
                        <option value="#">Services</option>
                        <option value="#">Portfolio</option>
                        <option value="#">Blog</option>
                        <option value="#">UI Elements</option>
                        <option value="#">Contact</option>
                    </select>
                </div>
            </div>
            <div class="row-fluid">
                <div class="span1 pull-right"><a href="http://avanthagroup.com/" target="_blank"><img
                            style="margin-left:5px;" src="{{asset('wp-content/avantha.jpg')}}"></a></div>
                <div class="span1 pull-right"><a href="http://biltpaper.com/" target="_blank"><img
                            src="{{asset('wp-content/bilt.png')}}"></a></div>
            </div>
        </div>
        <div class="met_footer_copyright clearfix">
            <div class="met_content">
                <p class="met_color2">&copy; 2014 All rights reserved by Ballarpur Industries Limited.</p>
            </div>
        </div>
    </footer>
    <!-- #EndLibraryItem --></div>
<div id="back-to-top" class="off back-to-top-off"></div>
<script>
    jQuery(document).ready(function () {
        if (jQuery('body').attr('data-smooth-scrolling') == 1 && !jQuery.browser.mobile) {
            jQuery("html").niceScroll({
                scrollspeed: 60,
                mousescrollstep: 35,
                cursorwidth: 10,
                cursorborder: '1px solid #7E8A96',
                cursorcolor: '#18ADB6',
                cursorborderradius: 10,
                autohidemode: 1,
                cursoropacitymin: 0.1,
                cursoropacitymax: 1
            });
        }
    })
</script>
<link rel='stylesheet' id='metcreative-magnific-popup-css'
      href='http://metcreative.com/demo/wp_shocoon/wp-content/themes/shocoon/css/magnific-popup.css?ver=3.8'
      type='text/css' media='all'/>
<script type='text/javascript'
        src='http://metcreative.com/demo/wp_shocoon/wp-content/plugins/aqua-page-builder/assets/js/aqpb-view.js?ver=1390198264'></script>
<script type='text/javascript'
        src='http://metcreative.com/demo/wp_shocoon/wp-content/plugins/contact-form-7/includes/js/jquery.form.min.js?ver=3.44.0-2013.09.15'></script>

{{HTML::script("wp-content/themes/shocoon/js/masonry.js")}}
{{HTML::script("wp-content/themes/shocoon/js/retina.js")}}
{{HTML::script("wp-content/themes/shocoon/js/nicescroll.js")}}
{{HTML::script("wp-content/themes/shocoon/js/jquery.dlmenu.js")}}
{{HTML::script("wp-content/themes/shocoon/js/jquery.knob.js")}}
{{HTML::script("wp-content/themes/shocoon/js/jquery.easing.js")}}
{{HTML::script("wp-content/themes/shocoon/js/bootstrap.js")}}
{{HTML::script("wp-content/themes/shocoon/js/custom.js")}}
{{HTML::script("wp-content/themes/shocoon/js/caroufredsel.js")}}
{{HTML::script("wp-content/themes/shocoon/js/jquery.magnific-popup.min.js")}}


</body>
</html>

