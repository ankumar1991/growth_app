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

        .met_menu_home {
            padding: 19px !important;
        }

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

        .footer {
            background-color: #65676F;
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


<body class="home page page-id-51 page-template-default clearfix " data-smooth-scrolling="1">

<?php $site_url = "http://beta.bilt-matrix.com"; ?>

<div id="fb-root"></div>


<div class="container" style="width: 800px;min-height: 400px">

    <div class="row-fluid">
        <div class="span12"><img class="full_width" src="{{asset('img/banner_fb.png')}}"></div>
    </div>
    @yield('content')

    <div class="row-fluid footer">
        <p class="met_color2" style="padding: 6px;margin: 0">&copy; 2014 All rights reserved by Ballarpur Industries Limited.</p>
    </div>
</div>


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


<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-47687728-2', 'bilt-matrix.com');
    ga('send', 'pageview');

</script>


</body>
</html>

