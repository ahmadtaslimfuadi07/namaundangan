<!DOCTYPE html>
<html lang="en-US">
  
<!-- Mirrored from limstudio.site/diradur/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Oct 2020 13:08:39 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>


    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

	<link rel="pingback" href="https://limstudio.site/xmlrpc.php" />
	
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<?php foreach ($gambar as $key) {
        switch ($key['jenis']) {
            case '1':
                $gambar1 = $key['gambar'];
                $posisi1 = $key['posisi_mobile'];
                break;

            case '2':
                $gambar2 = $key['gambar'];
                $posisi2 = $key['posisi_mobile'];
                break;

            case '3':
                $gambar3 = $key['gambar'];
                $posisi3 = $key['posisi_mobile'];

                break;
            case '97':
                $brid = $key['gambar'];
                break;
            case '98':
                $groom = $key['gambar'];
                break;
        }
    } ?>

	<!-- This site is optimized with the Yoast SEO plugin v15.0 - https://yoast.com/wordpress/plugins/seo/ -->
	<title>Pernikahan <?= $data['panggilan_l'] ?> &amp; <?= $data['panggilan_p'] ?></title>
	<meta name="description" content="Yang akan di laksanakan pada <?= $hari ?>, <?= date_format($tanggal, 'd').' '.$bulan.' '.date_format($tanggal, 'Y')  ?>" />
	<meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
	<link rel="canonical" href="index.html" />
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="Akad Nikah <?= $data['panggilan_l'] ?> &amp; <?= $data['panggilan_p'] ?>" />
	<meta property="og:description" content="Yang akan di laksanakan pada <?= $hari_akad ?>, <?= date_format($tanggal_akad, 'd').' '.$bulan_akad.' '.date_format($tanggal_akad, 'Y')  ?>" />
	<meta property="og:url" content="https://limstudio.site" />
	<meta property="og:image" content="<?= $gambar1 ?>" />
	<meta property="og:image:width" content="880" />
	<meta property="og:image:height" content="659" />
	<meta name="twitter:card" content="summary_large_image" />


		
	<style type="text/css">
	img.wp-smiley,
	img.emoji {
		display: inline !important;
		border: none !important;
		box-shadow: none !important;
		height: 1em !important;
		width: 1em !important;
		margin: 0 .07em !important;
		vertical-align: -0.1em !important;
		background: none !important;
		padding: 0 !important;
	}
	</style>
	<link href="https://fonts.googleapis.com/css2?family=Norican&display=swap" rel="stylesheet">
	<link rel='stylesheet' id='ngoworx-bootstrap-css'  href='<?= base_url() ?>assets/themes/themes6/themes/ngoworx/css/bootstrap/bootstrap.min68b3.css?ver=1' type='text/css' media='all' />
	<link rel='stylesheet' id='wp-block-library-css'  href='<?= base_url() ?>assets/themes/themes6/css/dist/block-library/style.mind03b.css?ver=5.5.1' type='text/css' media='all' />
	<link rel='stylesheet' id='three-preview-css'  href='<?= base_url() ?>assets/themes/themes6/plugins/3r-elementor-timeline-widget/assets/css/styled03b.css?ver=5.5.1' type='text/css' media='all' />
	<link rel='stylesheet' id='wpcdt-public-css-css'  href='<?= base_url() ?>assets/themes/themes6/plugins/countdown-timer-ultimate/assets/css/wpcdt-timecircles54f4.css?ver=1.2.5' type='text/css' media='all' />
	<link rel='stylesheet' id='owl.carousel-css'  href='<?= base_url() ?>assets/themes/themes6/themes/ngoworx/css/owl.carouseld03b.css?ver=5.5.1' type='text/css' media='all' />
	<link rel='stylesheet' id='owl.theme-css'  href='<?= base_url() ?>assets/themes/themes6/themes/ngoworx/css/owl.themed03b.css?ver=5.5.1' type='text/css' media='all' />
	<link rel='stylesheet' id='customizer-style-css'  href='<?= base_url() ?>assets/themes/themes6/themes/ngoworx/styled03b.css?ver=5.5.1' type='text/css' media='all' />
	<style id='customizer-style-inline-css' type='text/css'>
	button, input[type="submit"], input[type="button"], input[type="reset"], .to-top, #site-navigation .sub-menu li:hover > a { background-color: #ffffff }a, h1 a, h2 a, h3 a, h4 a, h5 a, h6 a, .banner-button:hover, button:hover, input[type="submit"]:hover, input[type="button"]:hover, input[type="reset"]:hover, .to-top:hover, .special .meta-post .fa, .hentry .meta-post a:hover, .special h2.title-post a:hover, .widget-section .widgettitle, .default-testimonials .client-info .client .client-name, .type-team.type-b .team-social li a, .type-team .team-content .name, #site-navigation ul li a:hover, #site-navigation ul li a:hover { color: #ffffff }.banner-button, input[type="text"]:focus, input[type="email"]:focus, textarea:focus, input[type="number"]:focus, input[type="password"]:focus, input[type="tel"]:focus, input[type="date"]:focus, input[type="datetime"]:focus, input[type="datetime-local"]:focus, input[type="month"]:focus, inputp[type="time"]:focus, input[type="week"]:focus, input[type="url"]:focus, input[type="search"]:focus, input[type="color"]:focus, button, input[type="button"], input[type="reset"], input[type="submit"], .divider-separator, .type-team.type-b .team-social li a { border-color: #ffffff } .site-title a, .site-title a:hover { color: #000000; } .site-description { color: #000000; } .header-background {  background-size: cover; background-position: center center; background-repeat: no-repeat; height: 60px; }.page-wrap { padding-top: 0px; padding-bottom: 0px; }body { color:#000000}body { background-color: ffffff}
	</style>
	<link rel='stylesheet' id='style-css'  href='<?= base_url() ?>assets/themes/themes6/themes/ngoworx/css/styled03b.css?ver=5.5.1' type='text/css' media='all' />
	<link rel='stylesheet' id='ngoworx-font-awesome-css'  href='<?= base_url() ?>assets/css/font-awesome.min.css' type='text/css' media='all' />
	<link rel='stylesheet' id='elementor-icons-css'  href='<?= base_url() ?>assets/themes/themes6/plugins/elementor/assets/lib/eicons/css/elementor-icons.min74e5.css?ver=5.9.1' type='text/css' media='all' />
	<link rel='stylesheet' id='elementor-animations-css'  href='<?= base_url() ?>assets/themes/themes6/plugins/elementor/assets/lib/animations/animations.min9b4a.css?ver=3.0.11' type='text/css' media='all' />
	<link rel='stylesheet' id='elementor-frontend-legacy-css'  href='<?= base_url() ?>assets/themes/themes6/plugins/elementor/assets/css/frontend-legacy.min9b4a.css?ver=3.0.11' type='text/css' media='all' />
	<link rel='stylesheet' id='elementor-frontend-css'  href='<?= base_url() ?>assets/themes/themes6/plugins/elementor/assets/css/frontend.min9b4a.css?ver=3.0.11' type='text/css' media='all' />
	<link rel='stylesheet' id='elementor-post-2491-css'  href='<?= base_url() ?>assets/themes/themes6/uploads/elementor/css/post-2491ce23.css?ver=1601736112' type='text/css' media='all' />
	<link rel='stylesheet' id='elementor-global-css'  href='<?= base_url() ?>assets/themes/themes6/uploads/elementor/css/globalce23.css?ver=1601736112' type='text/css' media='all' />
	<link rel='stylesheet' id='elementor-post-6001-css'  href='<?= base_url() ?>assets/themes/themes6/uploads/elementor/css/post-6001c639.css?ver=1601738779' type='text/css' media='all' />
	<link rel='stylesheet' id='google-fonts-1-css'  href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CGilda+Display%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CPlayfair+Display%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CLora%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;ver=5.5.1' type='text/css' media='all' />
	<script type='text/javascript' src='<?= base_url() ?>assets/themes/themes6/js/jquery/jquery4a5f.js?ver=1.12.4-wp' id='jquery-core-js'></script>
	<link rel="https://api.w.org/" href="https://limstudio.site/wp-json/" /><link rel="alternate" type="application/json" href="https://limstudio.site/wp-json/wp/v2/pages/6001" /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://limstudio.site/xmlrpc.php?rsd" />
	<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://limstudio.site/wp-includes/wlwmanifest.xml" /> 
	<meta name="generator" content="WordPress 5.5.1" />
	<link rel='shortlink' href='https://limstudio.site/?p=6001' />
	<link rel="alternate" type="application/json+oembed" href="https://limstudio.site/wp-json/oembed/1.0/embed?url=https%3A%2F%2Flimstudio.site%2Fdiradur%2F" />
	<link rel="alternate" type="text/xml+oembed" href="https://limstudio.site/wp-json/oembed/1.0/embed?url=https%3A%2F%2Flimstudio.site%2Fdiradur%2F&amp;format=xml" />
	<style type="text/css">
		.font-style{
			font-family:"norican" !important;
		}
		.elementor-6001 .elementor-element.elementor-element-5fa033c:not(.elementor-motion-effects-element-type-background), .elementor-6001 .elementor-element.elementor-element-5fa033c > .elementor-motion-effects-container > .elementor-motion-effects-layer{
			background-image: url(<?= $gambar1 ?>) !important;
		}
		.elementor-6001 .elementor-element.elementor-element-4399a9d:not(.elementor-motion-effects-element-type-background), .elementor-6001 .elementor-element.elementor-element-4399a9d > .elementor-motion-effects-container > .elementor-motion-effects-layer{
			background-image: url(<?= $gambar2 ?>) !important;
		}
	</style>
</head>

<body class="page-template-default page page-id-6001 elementor-default elementor-kit-2491 elementor-page elementor-page-6001">
    <div class="preloader">
        <div class="spinner">
            <div class="pre-bounce1"></div>
            <div class="pre-bounce2"></div>
        </div>
    </div>

    <header id="masthead" class="site-header float-header" role="banner">
        <div class="head-wrap banner-background">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <h1 class="site-title"><a href="https://limstudio.site/" rel="home"></a></h1>
                        <h5 class="site-description"></h5>
                    </div>
                    <div class="col-md-8 col-sm-6 col-xs-12">
                        <div class="btn-menu"></div>
                        <nav id="site-navigation" class="site-navigation" role="navigation">
                            <div class="menu-dira-dur-container">
                                <ul id="menu-dira-dur" class="menu">
                                    <li id="menu-item-6057" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item menu-item-6057"><a href="index.html" aria-current="page">Home</a></li>
                                    <li id="menu-item-6058" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item menu-item-6058"><a href="index.html#akad" aria-current="page">Akad</a></li>
                                    <li id="menu-item-6059" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item menu-item-6059"><a href="index.html#liveig" aria-current="page">Live Instagram</a></li>
                                    <li id="menu-item-6060" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item menu-item-6060"><a href="index.html#kirimhadiah" aria-current="page">Hadiah &#038; Ucapan</a></li>
                                    <li id="menu-item-6061" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item menu-item-6061"><a href="index.html#moment" aria-current="page">Moment</a></li>
                                </ul>
                            </div>
                        </nav>
                        <!-- #site-navigation -->
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="ngoworx-banner-area">
        <div id="content" class="page-wrap">
            <div class="content-wrapper">
                <div class="container">
                    <div id="primary" class="content-area">
                        <main id="main" class="site-main post-wrap" role="main">
                            <article id="post-6001" class="post-6001 page type-page status-publish has-post-thumbnail hentry">
                                <div class="entry-content">
                                    <div data-elementor-type="wp-page" data-elementor-id="6001" class="elementor elementor-6001" data-elementor-settings="[]">
                                        <div class="elementor-inner">
                                            <div class="elementor-section-wrap">
                                                <section
                                                    class="elementor-section elementor-top-section elementor-element elementor-element-5fa033c elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                    data-id="5fa033c"
                                                    data-element_type="section"
                                                    data-settings='{"stretch_section":"section-stretched","background_background":"classic"}'
                                                >
                                                    <div class="elementor-background-overlay"></div>
                                                    <div class="elementor-container elementor-column-gap-default">
                                                        <div class="elementor-row">
                                                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-cee0e6b" data-id="cee0e6b" data-element_type="column">
                                                                <div class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div
                                                                            class="elementor-element elementor-element-cb8a7c1 elementor-widget elementor-widget-spacer"
                                                                            data-id="cb8a7c1"
                                                                            data-element_type="widget"
                                                                            data-widget_type="spacer.default"
                                                                        >
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-spacer">
                                                                                    <div class="elementor-spacer-inner"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="elementor-element elementor-element-a173693 animated-slow elementor-invisible elementor-widget elementor-widget-heading"
                                                                            data-id="a173693"
                                                                            data-element_type="widget"
                                                                            data-settings='{"_animation":"fadeInDown"}'
                                                                            data-widget_type="heading.default"
                                                                        >
                                                                            <div class="elementor-widget-container">
                                                                                <h2 class="elementor-heading-title elementor-size-default font-style">
                                                                                    <?= $data['panggilan_l'] ?>
                                                                                    &amp;
                                                                                    <?= $data['panggilan_p'] ?>
                                                                                </h2>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="elementor-element elementor-element-eadd974 animated-slow elementor-invisible elementor-widget elementor-widget-heading"
                                                                            data-id="eadd974"
                                                                            data-element_type="widget"
                                                                            data-settings='{"_animation":"fadeInDown"}'
                                                                            data-widget_type="heading.default"
                                                                        >
                                                                            <div class="elementor-widget-container">
                                                                                <h2 class="elementor-heading-title elementor-size-default">
                                                                                    <?= date_format($tanggal, 'd').' . '.date_format($tanggal, 'm').' . '.date_format($tanggal, 'Y') ?>
                                                                                </h2>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="elementor-element elementor-element-ccced5a elementor-widget elementor-widget-spacer"
                                                                            data-id="ccced5a"
                                                                            data-element_type="widget"
                                                                            data-widget_type="spacer.default"
                                                                        >
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-spacer">
                                                                                    <div class="elementor-spacer-inner"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                                <section
                                                    class="elementor-section elementor-top-section elementor-element elementor-element-0659bff elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                    data-id="0659bff"
                                                    data-element_type="section"
                                                    data-settings='{"stretch_section":"section-stretched","background_background":"gradient"}'
                                                >
                                                    <div class="elementor-container elementor-column-gap-default">
                                                        <div class="elementor-row">
                                                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4684e01" data-id="4684e01" data-element_type="column">
                                                                <div class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div
                                                                            class="elementor-element elementor-element-1aed698 elementor-widget elementor-widget-spacer"
                                                                            data-id="1aed698"
                                                                            data-element_type="widget"
                                                                            data-widget_type="spacer.default"
                                                                        >
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-spacer">
                                                                                    <div class="elementor-spacer-inner"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="elementor-element elementor-element-e761fa0 elementor-widget elementor-widget-shortcode"
                                                                            data-id="e761fa0"
                                                                            data-element_type="widget"
                                                                            data-widget_type="shortcode.default"
                                                                        >
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-shortcode">
                                                                                    <!-- Music -->
                                                                                    <style>
                                                                                        /*** music box ***/
                                                                                        .music-box {
                                                                                            position: fixed;
                                                                                            width: 300px;
                                                                                            height: 160px;
                                                                                            z-index: 120;
                                                                                            bottom: 30px;
                                                                                            right: 30px;
                                                                                        }

                                                                                        @media (max-width: 991px) {
                                                                                            .music-box {
                                                                                                width: 50px;
                                                                                                height: 150px;
                                                                                                right: auto;
                                                                                                right: 10px;
                                                                                                top: 10px;
                                                                                            }
                                                                                        }

                                                                                        .music-box .music-holder {
                                                                                            width: 100%;
                                                                                            height: 100%;
                                                                                            position: absolute;
                                                                                            right: 0;
                                                                                            top: -30px;
                                                                                            visibility: hidden;
                                                                                            opacity: 0;
                                                                                            -webkit-transition: all 0.5s ease-out;
                                                                                            -o-transition: all 0.5s ease-out;
                                                                                            transition: all 0.5s ease-out;
                                                                                        }

                                                                                        .music-box .music-holder iframe {
                                                                                            width: 100%;
                                                                                            height: 100%;
                                                                                        }

                                                                                        .music-box button {
                                                                                            background: rgba(248, 246, 246, 0.85);
                                                                                            width: 50px;
                                                                                            height: 50px;
                                                                                            line-height: 37px;
                                                                                            font-size: 18px;
                                                                                            font-size: 1rem;
                                                                                            color: #5a716b;
                                                                                            border: 1px solid #e6e6e6;
                                                                                            outline: 0;
                                                                                            padding: 0;
                                                                                            margin: 0;
                                                                                            position: absolute;
                                                                                            right: 0;
                                                                                            bottom: 0;
                                                                                            -webkit-border-radius: 50%;
                                                                                            -moz-border-radius: 50%;
                                                                                            -o-border-radius: 50%;
                                                                                            -ms-border-radius: 50%;
                                                                                            border-radius: 50%;
                                                                                        }

                                                                                        .music-box button i {
                                                                                            font-size: 20px;
                                                                                        }

                                                                                        @media (max-width: 991px) {
                                                                                            .music-box button {
                                                                                                right: 0;
                                                                                                left: auto;
                                                                                            }
                                                                                        }

                                                                                        .music-box .toggle-music-box {
                                                                                            top: -50px;
                                                                                            visibility: visible;
                                                                                            opacity: 1;
                                                                                        }

                                                                                        .music {
                                                                                            padding: 0;
                                                                                            background: none !important;
                                                                                            border: none !important;
                                                                                            position: relative;
                                                                                            top: 100px;
                                                                                            left: 180px;
                                                                                        }

                                                                                        .music:focus {
                                                                                            outline: none;
                                                                                        }

                                                                                        .fa-stack {
                                                                                            right: 12px;
                                                                                            top: -65px;
                                                                                            width: 0;
                                                                                            height: 0;
                                                                                        }
                                                                                    </style>
                                                                                    <!-- strat music-box -->
                                                                                    <div class="music-box">
                                                                                        <button class="music-box-toggle-btn">
                                                                                            <!--
        <i class="fa fa-music"></i> -->
                                                                                            <audio id="song" loop>
                                                                                                <source src="https://limstudio.site/assets/music/<?= $data['music'] ?>" />
                                                                                            </audio>
                                                                                            <button type="button" class="music" id="mute-sound">
                                                                                                <i class="fa fa-music"></i>
                                                                                            </button>
                                                                                            <button type="button" class="music" id="unmute-sound">
                                                                                                <i class="fa fa-microphone-slash"></i>
                                                                                            </button>
                                                                                        </button>
                                                                                    </div>

                                                                                    <!-- end music box -->

                                                                                    <script>
                                                                                        document.getElementById("mute-sound").style.display = "none";
                                                                                        document.getElementById("unmute-sound").addEventListener("click", function (event) {
                                                                                            document.getElementById("unmute-sound").style.display = "none";
                                                                                            document.getElementById("mute-sound").style.display = "inline-block";
                                                                                            document.getElementById("song").play();
                                                                                        });

                                                                                        document.getElementById("mute-sound").addEventListener("click", function (event) {
                                                                                            document.getElementById("mute-sound").style.display = "none";
                                                                                            document.getElementById("unmute-sound").style.display = "inline-block";
                                                                                            document.getElementById("song").pause();
                                                                                        });
                                                                                    </script>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="elementor-element elementor-element-d3abfc7 elementor-invisible elementor-widget elementor-widget-heading"
                                                                            data-id="d3abfc7"
                                                                            data-element_type="widget"
                                                                            data-settings='{"_animation":"fadeInUp"}'
                                                                            data-widget_type="heading.default"
                                                                        >
                                                                            <div class="elementor-widget-container">
                                                                                <h2 class="elementor-heading-title elementor-size-default font-style">Bismillahirrahmanirrahim</h2>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="elementor-element elementor-element-ba35bd7 elementor-invisible elementor-widget elementor-widget-heading"
                                                                            data-id="ba35bd7"
                                                                            data-element_type="widget"
                                                                            data-settings='{"_animation":"fadeIn"}'
                                                                            data-widget_type="heading.default"
                                                                        >
                                                                            <div class="elementor-widget-container">
                                                                                <h2 class="elementor-heading-title elementor-size-default">
                                                                                    “Dan diantara tanda-tanda kekuasaan-Nya ialah diciptakan Nya untukmu pasangan hidup dari jenismu sendiri supaya kamu mendapat ketenangan hati dan
                                                                                    dijadikan-Nya kasih sayang diantara kamu. Sesungguhnya yang demikian menjadi tanda-tanda kebesaran-Nya bagi orang-orang yang berfikir.” <br />
                                                                                    <br />
                                                                                    (Ar-Rum: 21)
                                                                                </h2>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                                <?php foreach ($tentang as $item) {
			if ($item['jenis'] == '1') {
				$tentang_l = $item['tentang'];
				$fb_l = $item['link_fb'];
				$ig_l = $item['link_ig'];
			} else {
				$tentang_p = $item['tentang'];
				$fb_p = $item['link_fb'];
				$ig_p = $item['link_ig'];
			}
		} ?>
                                                <section
                                                    class="elementor-section elementor-top-section elementor-element elementor-element-375878d elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                    data-id="375878d"
                                                    data-element_type="section"
                                                    data-settings='{"stretch_section":"section-stretched","background_background":"classic"}'
                                                >
                                                    <div class="elementor-container elementor-column-gap-default">
                                                        <div class="elementor-row">
                                                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-5b2df38" data-id="5b2df38" data-element_type="column">
                                                                <div class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div
                                                                            class="elementor-element elementor-element-1239ce5 elementor-widget elementor-widget-spacer"
                                                                            data-id="1239ce5"
                                                                            data-element_type="widget"
                                                                            data-widget_type="spacer.default"
                                                                        >
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-spacer">
                                                                                    <div class="elementor-spacer-inner"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="elementor-element elementor-element-113cb79 animated-slow elementor-invisible elementor-widget elementor-widget-heading"
                                                                            data-id="113cb79"
                                                                            data-element_type="widget"
                                                                            id="keduamempelai"
                                                                            data-settings='{"_animation":"fadeInDown"}'
                                                                            data-widget_type="heading.default"
                                                                        >
                                                                            <div class="elementor-widget-container">
                                                                                <h2 class="elementor-heading-title elementor-size-default">KEDUA Mempelai</h2>
                                                                            </div>
                                                                        </div>
                                                                        <section
                                                                            class="elementor-section elementor-inner-section elementor-element elementor-element-c9dd311 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                                            data-id="c9dd311"
                                                                            data-element_type="section"
                                                                        >
                                                                            <div class="elementor-container elementor-column-gap-default">
                                                                                <div class="elementor-row">
                                                                                    <div
                                                                                        class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-edcd91c"
                                                                                        data-id="edcd91c"
                                                                                        data-element_type="column"
                                                                                    >
                                                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                                                            <div class="elementor-widget-wrap">
                                                                                                <div
                                                                                                    class="elementor-element elementor-element-2770992 animated-slow elementor-invisible elementor-widget elementor-widget-heading"
                                                                                                    data-id="2770992"
                                                                                                    data-element_type="widget"
                                                                                                    data-settings='{"_animation":"fadeInDown"}'
                                                                                                    data-widget_type="heading.default"
                                                                                                >
                                                                                                    <div class="elementor-widget-container">
                                                                                                        <h2 class="elementor-heading-title elementor-size-default font-style"><?= $data['panggilan_p'] ?></h2>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="elementor-element elementor-element-568811b elementor-widget elementor-widget-image"
                                                                                                    data-id="568811b"
                                                                                                    data-element_type="widget"
                                                                                                    data-widget_type="image.default"
                                                                                                >
                                                                                                    <div class="elementor-widget-container">
                                                                                                        <div class="elementor-image">
                                                                                                            <img
                                                                                                                data-lazyloaded="1"
                                                                                                                src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs="
                                                                                                                width="767"
                                                                                                                height="1024"
                                                                                                                data-src="<?= $brid ?>"
                                                                                                                class="attachment-large size-large"
                                                                                                                alt=""
                                                                                                                loading="lazy"
                                                                                                                data-srcset="<?= $brid ?>"
                                                                                                                data-sizes="(max-width: 767px) 100vw, 767px"
                                                                                                            />
                                                                                                            <noscript>
                                                                                                                <img
                                                                                                                    width="767"
                                                                                                                    height="1024"
                                                                                                                    src="<?= base_url() ?>assets/themes/themes6/uploads/2020/08/dira-767x1024.jpg"
                                                                                                                    class="attachment-large size-large"
                                                                                                                    alt=""
                                                                                                                    loading="lazy"
                                                                                                                    srcset="
																													<?= $brid ?>
                                                                                                                    "
                                                                                                                    sizes="(max-width: 767px) 100vw, 767px"
                                                                                                                />
                                                                                                            </noscript>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="elementor-element elementor-element-3bb07e3 elementor-align-center elementor-widget elementor-widget-button"
                                                                                                    data-id="3bb07e3"
                                                                                                    data-element_type="widget"
                                                                                                    data-widget_type="button.default"
                                                                                                >
                                                                                                    <div class="elementor-widget-container">
                                                                                                        <div class="elementor-button-wrapper">
                                                                                                            <a class="elementor-button elementor-size-sm" role="button">
                                                                                                                <span class="elementor-button-content-wrapper">
                                                                                                                    <span class="elementor-button-text"><?= $data['nama_p'] ?></span>
                                                                                                                </span>
                                                                                                            </a>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="elementor-element elementor-element-863d1b3 elementor-invisible elementor-widget elementor-widget-heading"
                                                                                                    data-id="863d1b3"
                                                                                                    data-element_type="widget"
                                                                                                    data-settings='{"_animation":"fadeIn"}'
                                                                                                    data-widget_type="heading.default"
                                                                                                >
                                                                                                    <div class="elementor-widget-container">
                                                                                                        <h2 class="elementor-heading-title elementor-size-default"><?= $tentang_p ?></h2>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="elementor-element elementor-element-2745a93 elementor-view-stacked elementor-shape-circle elementor-widget elementor-widget-icon"
                                                                                                    data-id="2745a93"
                                                                                                    data-element_type="widget"
                                                                                                    data-widget_type="icon.default"
                                                                                                >
                                                                                                    <div class="elementor-widget-container">
                                                                                                        <div class="elementor-icon-wrapper">
                                                                                                            <a class="elementor-icon" href="<?= $ig_p ?>" target="_blank"> <i aria-hidden="true" class="fa fa-instagram"></i> </a>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-dfa64ec"
                                                                                        data-id="dfa64ec"
                                                                                        data-element_type="column"
                                                                                    >
                                                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                                                            <div class="elementor-widget-wrap">
                                                                                                <div
                                                                                                    class="elementor-element elementor-element-e5f3702 animated-slow elementor-invisible elementor-widget elementor-widget-heading"
                                                                                                    data-id="e5f3702"
                                                                                                    data-element_type="widget"
                                                                                                    data-settings='{"_animation":"fadeInDown"}'
                                                                                                    data-widget_type="heading.default"
                                                                                                >
                                                                                                    <div class="elementor-widget-container">
                                                                                                        <h2 class="elementor-heading-title elementor-size-default font-style"><?= $data['panggilan_l'] ?></h2>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="elementor-element elementor-element-79c7708 elementor-widget elementor-widget-image"
                                                                                                    data-id="79c7708"
                                                                                                    data-element_type="widget"
                                                                                                    data-widget_type="image.default"
                                                                                                >
                                                                                                    <div class="elementor-widget-container">
                                                                                                        <div class="elementor-image">
                                                                                                            <img
                                                                                                                data-lazyloaded="1"
                                                                                                                src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs="
                                                                                                                width="767"
                                                                                                                height="1024"
                                                                                                                data-src="<?= $groom ?>"
                                                                                                                class="attachment-large size-large"
                                                                                                                alt=""
                                                                                                                loading="lazy"
                                                                                                                data-srcset="<?= $groom ?>"
                                                                                                                data-sizes="(max-width: 767px) 100vw, 767px"
                                                                                                            />
                                                                                                            <noscript>
                                                                                                                <img
                                                                                                                    width="767"
                                                                                                                    height="1024"
                                                                                                                    src="<?= base_url() ?>assets/themes/themes6/uploads/2020/08/dur-767x1024.jpg"
                                                                                                                    class="attachment-large size-large"
                                                                                                                    alt=""
                                                                                                                    loading="lazy"
                                                                                                                    srcset="
																													<?= $groom ?>
                                                                                                                    "
                                                                                                                    sizes="(max-width: 767px) 100vw, 767px"
                                                                                                                />
                                                                                                            </noscript>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="elementor-element elementor-element-dbd5be8 elementor-align-center elementor-widget elementor-widget-button"
                                                                                                    data-id="dbd5be8"
                                                                                                    data-element_type="widget"
                                                                                                    data-widget_type="button.default"
                                                                                                >
                                                                                                    <div class="elementor-widget-container">
                                                                                                        <div class="elementor-button-wrapper">
                                                                                                            <a class="elementor-button elementor-size-sm" role="button">
                                                                                                                <span class="elementor-button-content-wrapper">
                                                                                                                    <span class="elementor-button-text"><?= $data['nama_l'] ?></span>
                                                                                                                </span>
                                                                                                            </a>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="elementor-element elementor-element-9499066 elementor-invisible elementor-widget elementor-widget-heading"
                                                                                                    data-id="9499066"
                                                                                                    data-element_type="widget"
                                                                                                    data-settings='{"_animation":"fadeIn"}'
                                                                                                    data-widget_type="heading.default"
                                                                                                >
                                                                                                    <div class="elementor-widget-container">
                                                                                                        <h2 class="elementor-heading-title elementor-size-default"><?= $tentang_l ?></h2>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="elementor-element elementor-element-14754eb elementor-view-stacked elementor-shape-circle elementor-widget elementor-widget-icon"
                                                                                                    data-id="14754eb"
                                                                                                    data-element_type="widget"
                                                                                                    data-widget_type="icon.default"
                                                                                                >
                                                                                                    <div class="elementor-widget-container">
                                                                                                        <div class="elementor-icon-wrapper">
                                                                                                            <a class="elementor-icon" href="<?= $ig_l ?>" target="_blank"> <i aria-hidden="true" class="fa fa-instagram"></i> </a>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </section>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                                <section
                                                    class="elementor-section elementor-top-section elementor-element elementor-element-4399a9d elementor-section-stretched elementor-hidden-desktop elementor-hidden-tablet elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                    data-id="4399a9d"
                                                    data-element_type="section"
                                                    data-settings='{"stretch_section":"section-stretched","
					background_background":"classic","shape_divider_top":"
					waves","shape_divider_bottom":"waves"}'
                                                >
                                                    <div class="elementor-shape elementor-shape-top" data-negative="false">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
                                                            <path
                                                                class="elementor-shape-fill"
                                                                d="M421.9,6.5c22.6-2.5,51.5,0.4,75.5,5.3c23.6,4.9,70.9,23.5,100.5,35.7c75.8,32.2,133.7,44.5,192.6,49.7
	c23.6,2.1,48.7,3.5,103.4-2.5c54.7-6,106.2-25.6,106.2-25.6V0H0v30.3c0,0,72,32.6,158.4,30.5c39.2-0.7,92.8-6.7,134-22.4
	c21.2-8.1,52.2-18.2,79.7-24.2C399.3,7.9,411.6,7.5,421.9,6.5z"
                                                            />
                                                        </svg>
                                                    </div>
                                                    <div class="elementor-shape elementor-shape-bottom" data-negative="false">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
                                                            <path
                                                                class="elementor-shape-fill"
                                                                d="M421.9,6.5c22.6-2.5,51.5,0.4,75.5,5.3c23.6,4.9,70.9,23.5,100.5,35.7c75.8,32.2,133.7,44.5,192.6,49.7
	c23.6,2.1,48.7,3.5,103.4-2.5c54.7-6,106.2-25.6,106.2-25.6V0H0v30.3c0,0,72,32.6,158.4,30.5c39.2-0.7,92.8-6.7,134-22.4
	c21.2-8.1,52.2-18.2,79.7-24.2C399.3,7.9,411.6,7.5,421.9,6.5z"
                                                            />
                                                        </svg>
                                                    </div>
                                                    <div class="elementor-container elementor-column-gap-default">
                                                        <div class="elementor-row">
                                                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-8e44290" data-id="8e44290" data-element_type="column">
                                                                <div class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div
                                                                            class="elementor-element elementor-element-21e4a5d elementor-widget elementor-widget-spacer"
                                                                            data-id="21e4a5d"
                                                                            data-element_type="widget"
                                                                            data-widget_type="spacer.default"
                                                                        >
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-spacer">
                                                                                    <div class="elementor-spacer-inner"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <section
                                                                            class="elementor-section elementor-inner-section elementor-element elementor-element-edcd008 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                                            data-id="edcd008"
                                                                            data-element_type="section"
                                                                        >
                                                                            <div class="elementor-container elementor-column-gap-default">
                                                                                <div class="elementor-row">
                                                                                    <div
                                                                                        class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-4b8f09b"
                                                                                        data-id="4b8f09b"
                                                                                        data-element_type="column"
                                                                                    >
                                                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                                                            <div class="elementor-widget-wrap">
                                                                                                <div
                                                                                                    class="elementor-element elementor-element-9f74fed elementor-widget elementor-widget-spacer"
                                                                                                    data-id="9f74fed"
                                                                                                    data-element_type="widget"
                                                                                                    data-widget_type="spacer.default"
                                                                                                >
                                                                                                    <div class="elementor-widget-container">
                                                                                                        <div class="elementor-spacer">
                                                                                                            <div class="elementor-spacer-inner"></div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </section>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                                <section
                                                    class="elementor-section elementor-top-section elementor-element elementor-element-ac3fcc9 elementor-section-stretched elementor-hidden-desktop elementor-hidden-tablet elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                    data-id="ac3fcc9"
                                                    data-element_type="section"
                                                    data-settings='{"stretch_section":"section-stretched"}'
                                                >
                                                    <div class="elementor-container elementor-column-gap-default">
                                                        <div class="elementor-row">
                                                            <div
                                                                class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-5606a49 elementor-invisible"
                                                                data-id="5606a49"
                                                                data-element_type="column"
                                                                data-settings='{"background_background":"classic","animation":"fadeInUp"}'
                                                            >
                                                                <div class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div
                                                                            class="elementor-element elementor-element-f444be9 elementor-invisible elementor-widget elementor-widget-heading"
                                                                            data-id="f444be9"
                                                                            data-element_type="widget"
                                                                            data-settings='{"_animation":"fadeInUp"}'
                                                                            data-widget_type="heading.default"
                                                                        >
                                                                            <div class="elementor-widget-container">
                                                                                <h2 class="elementor-heading-title elementor-size-default font-style">Assalamualaikum warahmatullahi wabarakatuh</h2>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="elementor-element elementor-element-8773ced elementor-invisible elementor-widget elementor-widget-heading"
                                                                            data-id="8773ced"
                                                                            data-element_type="widget"
                                                                            data-settings='{"_animation":"fadeIn"}'
                                                                            data-widget_type="heading.default"
                                                                        >
                                                                            <div class="elementor-widget-container">
                                                                                <h2 class="elementor-heading-title elementor-size-default">
                                                                                    Dengan memohon ridho Allah SWT dan segenap kerendahan hati, izinkanlah kami menyampaikan kabar bahagia pernikahan putera-puteri kami yang akan dilaksanakan
                                                                                    pada:
                                                                                </h2>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                                <section
                                                    class="elementor-section elementor-top-section elementor-element elementor-element-a5b8908 elementor-section-stretched elementor-hidden-phone elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                    data-id="a5b8908"
                                                    data-element_type="section"
                                                    data-settings='{"stretch_section":"section-stretched","background_background":"classic","shape_divider_top":"waves"}'
                                                >
                                                    <div class="elementor-shape elementor-shape-top" data-negative="false">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
                                                            <path
                                                                class="elementor-shape-fill"
                                                                d="M421.9,6.5c22.6-2.5,51.5,0.4,75.5,5.3c23.6,4.9,70.9,23.5,100.5,35.7c75.8,32.2,133.7,44.5,192.6,49.7
	c23.6,2.1,48.7,3.5,103.4-2.5c54.7-6,106.2-25.6,106.2-25.6V0H0v30.3c0,0,72,32.6,158.4,30.5c39.2-0.7,92.8-6.7,134-22.4
	c21.2-8.1,52.2-18.2,79.7-24.2C399.3,7.9,411.6,7.5,421.9,6.5z"
                                                            />
                                                        </svg>
                                                    </div>
                                                    <div class="elementor-container elementor-column-gap-default">
                                                        <div class="elementor-row">
                                                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6fdb0fa" data-id="6fdb0fa" data-element_type="column">
                                                                <div class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div
                                                                            class="elementor-element elementor-element-186cd4d elementor-widget elementor-widget-spacer"
                                                                            data-id="186cd4d"
                                                                            data-element_type="widget"
                                                                            data-widget_type="spacer.default"
                                                                        >
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-spacer">
                                                                                    <div class="elementor-spacer-inner"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <section
                                                                            class="elementor-section elementor-inner-section elementor-element elementor-element-e176a3a elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                                            data-id="e176a3a"
                                                                            data-element_type="section"
                                                                        >
                                                                            <div class="elementor-container elementor-column-gap-default">
                                                                                <div class="elementor-row">
                                                                                    <div
                                                                                        class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-b05a158 elementor-invisible"
                                                                                        data-id="b05a158"
                                                                                        data-element_type="column"
                                                                                        data-settings='{"background_background":"classic","animation":"fadeInUp"}'
                                                                                    >
                                                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                                                            <div class="elementor-widget-wrap">
                                                                                                <div
                                                                                                    class="elementor-element elementor-element-09a2eaf elementor-invisible elementor-widget elementor-widget-heading"
                                                                                                    data-id="09a2eaf"
                                                                                                    data-element_type="widget"
                                                                                                    data-settings='{"_animation":"fadeInUp"}'
                                                                                                    data-widget_type="heading.default"
                                                                                                >
                                                                                                    <div class="elementor-widget-container">
                                                                                                        <h2 class="elementor-heading-title elementor-size-default font-style">Assalamualaikum warahmatullahi wabarakatuh</h2>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="elementor-element elementor-element-928d684 elementor-invisible elementor-widget elementor-widget-heading"
                                                                                                    data-id="928d684"
                                                                                                    data-element_type="widget"
                                                                                                    data-settings='{"_animation":"fadeIn"}'
                                                                                                    data-widget_type="heading.default"
                                                                                                >
                                                                                                    <div class="elementor-widget-container">
                                                                                                        <h2 class="elementor-heading-title elementor-size-default">
                                                                                                            Dengan memohon ridho Allah SWT dan segenap kerendahan hati, izinkanlah kami menyampaikan kabar bahagia pernikahan putera-puteri kami
                                                                                                            yang akan dilaksanakan pada:
                                                                                                        </h2>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </section>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                                <section
                                                    class="elementor-section elementor-top-section elementor-element elementor-element-ed9e3c9 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                    data-id="ed9e3c9"
                                                    data-element_type="section"
                                                    data-settings='{"stretch_section":"section-stretched","background_background":"classic"}'
                                                >
                                                    <div class="elementor-container elementor-column-gap-default">
                                                        <div class="elementor-row">
                                                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-df673a0" data-id="df673a0" data-element_type="column">
                                                                <div class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <section
                                                                            class="elementor-section elementor-inner-section elementor-element elementor-element-63b44db elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                                            data-id="63b44db"
                                                                            data-element_type="section"
                                                                            data-settings='{"background_background":"classic"}'
                                                                        >
                                                                            <div class="elementor-container elementor-column-gap-default">
                                                                                <div class="elementor-row">
                                                                                    <div
                                                                                        class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-677efc5 elementor-invisible"
                                                                                        data-id="677efc5"
                                                                                        data-element_type="column"
                                                                                        data-settings='{"background_background":"classic","animation":"fadeInUp"}'
                                                                                    >
                                                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                                                            <div class="elementor-widget-wrap">
                                                                                                <div
                                                                                                    class="elementor-element elementor-element-4d5f2ca elementor-widget elementor-widget-spacer"
                                                                                                    data-id="4d5f2ca"
                                                                                                    data-element_type="widget"
                                                                                                    data-widget_type="spacer.default"
                                                                                                >
                                                                                                    <div class="elementor-widget-container">
                                                                                                        <div class="elementor-spacer">
                                                                                                            <div class="elementor-spacer-inner"></div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="elementor-element elementor-element-7c56aaa elementor-widget elementor-widget-image"
                                                                                                    data-id="7c56aaa"
                                                                                                    data-element_type="widget"
                                                                                                    data-widget_type="image.default"
                                                                                                >
                                                                                                    <div class="elementor-widget-container">
                                                                                                        <div class="elementor-image">
                                                                                                            <img
                                                                                                                data-lazyloaded="1"
                                                                                                                src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs="
                                                                                                                data-src="<?= base_url()?>assets/images/cincin.png"
                                                                                                                title="1596847352023"
                                                                                                                alt="1596847352023"
                                                                                                            />
                                                                                                            <noscript><img src="<?= base_url() ?>assets/images/cincin.png" title="1596847352023" alt="1596847352023" /></noscript>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="elementor-element elementor-element-5c859be elementor-invisible elementor-widget elementor-widget-heading"
                                                                                                    data-id="5c859be"
                                                                                                    data-element_type="widget"
                                                                                                    id="akad"
                                                                                                    data-settings='{"_animation":"fadeInUp"}'
                                                                                                    data-widget_type="heading.default"
                                                                                                >
                                                                                                    <div class="elementor-widget-container">
                                                                                                        <h2 class="elementor-heading-title elementor-size-default font-style">Akad Nikah</h2>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="elementor-element elementor-element-9a69241 elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                                                                                                    data-id="9a69241"
                                                                                                    data-element_type="widget"
                                                                                                    data-widget_type="divider.default"
                                                                                                >
                                                                                                    <div class="elementor-widget-container">
                                                                                                        <div class="elementor-divider">
                                                                                                            <span class="elementor-divider-separator"> </span>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="elementor-element elementor-element-882999d elementor-widget elementor-widget-heading"
                                                                                                    data-id="882999d"
                                                                                                    data-element_type="widget"
                                                                                                    data-widget_type="heading.default"
                                                                                                >
                                                                                                    <div class="elementor-widget-container">
                                                                                                        <h2 class="elementor-heading-title elementor-size-default">
                                                                                                            <?= $hari_akad ?>
                                                                                                            <br />
                                                                                                            <?= date_format($tanggal_akad,'d').' '.$bulan_akad.' '.date_format($tanggal_akad,'Y') ?>
                                                                                                            <br />
                                                                                                            <?php echo substr($data['jam_akad_mulai'], 0, 5);
                                    if(substr($data['jam_akad_selesai'], 0, 5) >= "23:00:00"){ echo ' - Selesai'; }else if(substr($data['jam_akad_selesai'], 0, 5) == ""){ }else{ echo ' - ' . substr($data['jam_akad_selesai'], 0, 5).'
                                                                                                            '.$data['waktu_bagian']; } ?>
                                                                                                        </h2>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="elementor-element elementor-element-5eb0c64 elementor-widget elementor-widget-heading"
                                                                                                    data-id="5eb0c64"
                                                                                                    data-element_type="widget"
                                                                                                    data-widget_type="heading.default"
                                                                                                >
                                                                                                    <div class="elementor-widget-container">
                                                                                                        <h2 class="elementor-heading-title elementor-size-default">
                                                                                                            Bertempat di<br />
                                                                                                            <?= $data["lokasi_akad"] ?>
                                                                                                        </h2>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="elementor-element elementor-element-19cc687 elementor-widget elementor-widget-spacer"
                                                                                                    data-id="19cc687"
                                                                                                    data-element_type="widget"
                                                                                                    data-widget_type="spacer.default"
                                                                                                >
                                                                                                    <div class="elementor-widget-container">
                                                                                                        <div class="elementor-spacer">
                                                                                                            <div class="elementor-spacer-inner"></div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </section>
                                                                        <div
                                                                            class="elementor-element elementor-element-45d29f7 elementor-invisible elementor-widget elementor-widget-heading"
                                                                            data-id="45d29f7"
                                                                            data-element_type="widget"
                                                                            data-settings='{"_animation":"fadeIn"}'
                                                                            data-widget_type="heading.default"
                                                                        >
                                                                            <div class="elementor-widget-container">
                                                                                <h2 class="elementor-heading-title elementor-size-default">
                                                                                    Kami mohon maaf, dengan adanya himbauan pemerintah terkait pandemi COVID-19, acara resepsi pernikahan akan kami tunda. Namun, Anda tetap dapat menyaksikan
                                                                                    acara Akad Nikah melalui tautan Instagram Live berikut ini sesuai dengan waktu yang tercantum di atas.
                                                                                </h2>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="elementor-element elementor-element-b4efaa6 elementor-align-center elementor-widget elementor-widget-button"
                                                                            data-id="b4efaa6"
                                                                            data-element_type="widget"
                                                                            id="liveig"
                                                                            data-widget_type="button.default"
                                                                        >
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-button-wrapper">
                                                                                    <a href="https://www.instagram.com/diradur/" target="_blank" class="elementor-button-link elementor-button elementor-size-sm" role="button">
                                                                                        <span class="elementor-button-content-wrapper">
                                                                                            <span class="elementor-button-icon elementor-align-icon-left"> <i aria-hidden="true" class="fa fa-instagram"></i> </span>
                                                                                            <span class="elementor-button-text">live instagram</span>
                                                                                        </span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="elementor-element elementor-element-1129805 elementor-widget elementor-widget-heading"
                                                                            data-id="1129805"
                                                                            data-element_type="widget"
                                                                            data-widget_type="heading.default"
                                                                        >
                                                                            <div class="elementor-widget-container">
                                                                                <h2 class="elementor-heading-title elementor-size-default">#DIRectlyDURable</h2>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="elementor-element elementor-element-97a330c elementor-widget elementor-widget-spacer"
                                                                            data-id="97a330c"
                                                                            data-element_type="widget"
                                                                            data-widget_type="spacer.default"
                                                                        >
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-spacer">
                                                                                    <div class="elementor-spacer-inner"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                                <section
                                                    class="elementor-section elementor-top-section elementor-element elementor-element-3caa8d7 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                    data-id="3caa8d7"
                                                    data-element_type="section"
                                                    data-settings='{"stretch_section":"section-stretched","background_background":"gradient"}'
                                                >
                                                    <div class="elementor-container elementor-column-gap-default">
                                                        <div class="elementor-row">
                                                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-e7a8b0e" data-id="e7a8b0e" data-element_type="column">
                                                                <div class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div
                                                                            class="elementor-element elementor-element-cd17bf3 elementor-hidden-phone elementor-widget elementor-widget-spacer"
                                                                            data-id="cd17bf3"
                                                                            data-element_type="widget"
                                                                            data-widget_type="spacer.default"
                                                                        >
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-spacer">
                                                                                    <div class="elementor-spacer-inner"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <section
                                                                            class="elementor-section elementor-inner-section elementor-element elementor-element-a57b563 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                                            data-id="a57b563"
                                                                            data-element_type="section"
                                                                        >
                                                                            <div class="elementor-container elementor-column-gap-default">
                                                                                <div class="elementor-row">
                                                                                    <div
                                                                                        class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-b4292b8"
                                                                                        data-id="b4292b8"
                                                                                        data-element_type="column"
                                                                                    >
                                                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                                                            <div class="elementor-widget-wrap">
                                                                                                <div
                                                                                                    class="elementor-element elementor-element-ea4c832 elementor-widget elementor-widget-image"
                                                                                                    data-id="ea4c832"
                                                                                                    data-element_type="widget"
                                                                                                    data-widget_type="image.default"
                                                                                                >
                                                                                                    <div class="elementor-widget-container">
                                                                                                        <div class="elementor-image">
                                                                                                            <img
                                                                                                                data-lazyloaded="1"
                                                                                                                src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs="
                                                                                                                width="767"
                                                                                                                height="1024"
                                                                                                                data-src="<?= $gambar3 ?>"
                                                                                                                class="attachment-large size-large"
                                                                                                                alt=""
                                                                                                                loading="lazy"
                                                                                                                data-srcset="<?= $gambar3 ?>"
                                                                                                                data-sizes="(max-width: 767px) 100vw, 767px"
                                                                                                            />
                                                                                                            <noscript>
                                                                                                                <img
                                                                                                                    width="767"
                                                                                                                    height="1024"
                                                                                                                    src="<?= $gambar3 ?>"
                                                                                                                    class="attachment-large size-large"
                                                                                                                    alt=""
                                                                                                                    loading="lazy"
                                                                                                                    srcset="<?= $gambar3 ?>"
                                                                                                                    sizes="(max-width: 767px) 100vw, 767px"
                                                                                                                />
                                                                                                            </noscript>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-46d12ea"
                                                                                        data-id="46d12ea"
                                                                                        data-element_type="column"
                                                                                    >
                                                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                                                            <div class="elementor-widget-wrap">
                                                                                                <div
                                                                                                    class="elementor-element elementor-element-1edec32 elementor-hidden-desktop elementor-hidden-tablet elementor-widget elementor-widget-spacer"
                                                                                                    data-id="1edec32"
                                                                                                    data-element_type="widget"
                                                                                                    data-widget_type="spacer.default"
                                                                                                >
                                                                                                    <div class="elementor-widget-container">
                                                                                                        <div class="elementor-spacer">
                                                                                                            <div class="elementor-spacer-inner"></div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="elementor-element elementor-element-fad4aee elementor-invisible elementor-widget elementor-widget-heading"
                                                                                                    data-id="fad4aee"
                                                                                                    data-element_type="widget"
                                                                                                    data-settings='{"_animation":"fadeInUp"}'
                                                                                                    data-widget_type="heading.default"
                                                                                                >
                                                                                                    <div class="elementor-widget-container">
                                                                                                        <h2 class="elementor-heading-title elementor-size-default font-style">Menuju hari bahagia</h2>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="elementor-element elementor-element-179f2b4 elementor-invisible elementor-widget elementor-widget-heading"
                                                                                                    data-id="179f2b4"
                                                                                                    data-element_type="widget"
                                                                                                    data-settings='{"_animation":"fadeIn"}'
                                                                                                    data-widget_type="heading.default"
                                                                                                >
                                                                                                    <div class="elementor-widget-container">
                                                                                                        <h2 class="elementor-heading-title elementor-size-default">
                                                                                                            Kami begitu antusias untuk menyambut hari bahagia pernikahan ini, sebuah awal perjalanan kami menuju jenjang hidup penuh tantangan,
                                                                                                            suka cita, dan mimpi berdua.
                                                                                                        </h2>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="elementor-element elementor-element-f56b180 elementor-widget elementor-widget-shortcode"
                                                                                                    data-id="f56b180"
                                                                                                    data-element_type="widget"
																									data-widget_type="shortcode.default"
																									style="margin-left: 31px"
                                                                                                >
                                                                                                    <div class="elementor-widget-container">
                                                                                                        <div class="elementor-shortcode">
                                                                                                            <div class="wpcdt-countdown-wrp wpcdt-clearfix">
																												<?php
																													$sekarang =strtotime("now");
																													$hariH = strtotime(date_format($tanggal,'d M Y H:i:s'));
																													$countDown = $hariH - $sekarang;
																												?>
                                                                                                                <div id="wpcdt-datecount-1" class="wpcdt-countdown-timer" data-timer="<?= $countDown ?>" style="max-width: px;"></div>
                                                                                                                <div
                                                                                                                    class="wpcdt-date-conf"
                                                                                                                    data-conf='{"date":"2021-01-22 09:00:00","animation":"smooth","circlewidth":"0.02","backgroundwidth":"0.7","backgroundcolor":"#ffffff","is_days":"1","daysbackgroundcolor":"#ffffff","is_hours":"1","hoursbackgroundcolor":"#ffffff","is_minutes":"1","minutesbackgroundcolor":"#ffffff","is_seconds":"1","secondsbackgroundcolor":"#ffffff","days_text":"Hari","hours_text":"Jam","minutes_text":"Menit","seconds_text":"Detik"}'
                                                                                                                ></div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="elementor-element elementor-element-734367f elementor-invisible elementor-widget elementor-widget-heading"
                                                                                                    data-id="734367f"
                                                                                                    data-element_type="widget"
                                                                                                    data-settings='{"_animation":"fadeIn"}'
                                                                                                    data-widget_type="heading.default"
                                                                                                >
                                                                                                    <div class="elementor-widget-container">
                                                                                                        <h2 class="elementor-heading-title elementor-size-default">
                                                                                                            Merupakan suatu kehormatan dan kebahagiaan bagi kami apabila Bapak/Ibu/Saudara (i) berkenan memberikan doa restu untuk kedua
                                                                                                            mempelai melalui tautan berikut ini:
                                                                                                        </h2>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="elementor-element elementor-element-6418caa elementor-align-center elementor-widget elementor-widget-button"
                                                                                                    data-id="6418caa"
                                                                                                    data-element_type="widget"
                                                                                                    id="kirimhadiah"
                                                                                                    data-widget_type="button.default"
                                                                                                >
                                                                                                    <div class="elementor-widget-container">
                                                                                                        <div class="elementor-button-wrapper"></div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="elementor-element elementor-element-be54c7e elementor-hidden-desktop elementor-hidden-tablet elementor-widget elementor-widget-spacer"
                                                                                                    data-id="be54c7e"
                                                                                                    data-element_type="widget"
                                                                                                    data-widget_type="spacer.default"
                                                                                                >
                                                                                                    <div class="elementor-widget-container">
                                                                                                        <div class="elementor-spacer">
                                                                                                            <div class="elementor-spacer-inner"></div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </section>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                                <section
                                                    class="elementor-section elementor-top-section elementor-element elementor-element-fa1990a elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                    data-id="fa1990a"
                                                    data-element_type="section"
                                                    data-settings='{"stretch_section":"section-stretched"}'
                                                >
                                                    <div class="elementor-container elementor-column-gap-default">
                                                        <div class="elementor-row">
                                                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-148199b" data-id="148199b" data-element_type="column">
                                                                <div class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div
                                                                            class="elementor-element elementor-element-9568ee4 elementor-widget elementor-widget-spacer"
                                                                            data-id="9568ee4"
                                                                            data-element_type="widget"
                                                                            data-widget_type="spacer.default"
                                                                        >
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-spacer">
                                                                                    <div class="elementor-spacer-inner"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="elementor-element elementor-element-0558a33 elementor-invisible elementor-widget elementor-widget-heading"
                                                                            data-id="0558a33"
                                                                            data-element_type="widget"
                                                                            id="moment"
                                                                            data-settings='{"_animation":"fadeInUp"}'
                                                                            data-widget_type="heading.default"
                                                                        >
                                                                            <div class="elementor-widget-container">
                                                                                <h2 class="elementor-heading-title elementor-size-default font-style">Sepenggal Kisah Kami</h2>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="elementor-element elementor-element-315a42c elementor-invisible elementor-widget elementor-widget-heading"
                                                                            data-id="315a42c"
                                                                            data-element_type="widget"
                                                                            data-settings='{"_animation":"fadeIn"}'
                                                                            data-widget_type="heading.default"
                                                                        >
                                                                            <div class="elementor-widget-container">
                                                                                <h2 class="elementor-heading-title elementor-size-default">
                                                                                    Layaknya hujan yang bersahabat dengan hutan, cintamu adalah penyejuk tat kala terik mentari. Dan seperti angin yang membelai lembut pepohonan, <br />
                                                                                    nafasmu adalah kekuatan untuk wujudkan semua mimpi.
                                                                                </h2>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                                <section
                                                    class="elementor-section elementor-top-section elementor-element elementor-element-05d95dd elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                    data-id="05d95dd"
                                                    data-element_type="section"
                                                    data-settings='{"stretch_section":"section-stretched"}'
                                                >
                                                    <div class="elementor-container elementor-column-gap-default">
                                                        <div class="elementor-row">
                                                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-6e7079c" data-id="6e7079c" data-element_type="column">
                                                                <div class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
																		<?php for ($mulai1 = 0; $mulai1 < count($gallery); $mulai1++) { ?>
																		<div
                                                                            class="elementor-element elementor-element-812112f animated-slow elementor-invisible elementor-widget elementor-widget-image"
                                                                            data-id="812112f"
                                                                            data-element_type="widget"
                                                                            data-settings='{"_animation":"zoomIn"}'
                                                                            data-widget_type="image.default"
                                                                        >
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-image">
                                                                                    <img
                                                                                        data-lazyloaded="1"
                                                                                        src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs="
                                                                                        width="960"
                                                                                        height="1280"
                                                                                        data-src="<?= $gallery[$mulai1]['gambar'] ?>"
                                                                                        class="attachment-full size-full"
                                                                                        alt=""
                                                                                        loading="lazy"
                                                                                        data-srcset="<?= $gallery[$mulai1]['gambar'] ?>"
                                                                                        data-sizes="(max-width: 960px) 100vw, 960px"
                                                                                    />
                                                                                    <noscript>
                                                                                        <img
                                                                                            width="960"
                                                                                            height="1280"
                                                                                            src="<?= base_url() ?>assets/themes/themes6/uploads/2020/08/Diradur-6.jpg"
                                                                                            class="attachment-full size-full"
                                                                                            alt=""
                                                                                            loading="lazy"
                                                                                            srcset="
                                                                                                <?= $gallery[$mulai1]['gambar'] ?>
                                                                                            "
                                                                                            sizes="(max-width: 960px) 100vw, 960px"
                                                                                        />
                                                                                    </noscript>
                                                                                </div>
                                                                            </div>
																		</div>
																		<?php } ?>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                                <section
                                                    class="elementor-section elementor-top-section elementor-element elementor-element-8fd4388 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                    data-id="8fd4388"
                                                    data-element_type="section"
                                                    data-settings='{"stretch_section":"section-stretched"}'
                                                >
                                                    <div class="elementor-container elementor-column-gap-default">
                                                        <div class="elementor-row">
                                                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-61b1e57" data-id="61b1e57" data-element_type="column">
                                                                <div class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div
                                                                            class="elementor-element elementor-element-d985ea6 animated-slow elementor-invisible elementor-widget elementor-widget-image"
                                                                            data-id="d985ea6"
                                                                            data-element_type="widget"
                                                                            data-settings='{"_animation":"zoomIn"}'
                                                                            data-widget_type="image.default"
                                                                        >
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-image">
                                                                                    <img
                                                                                        data-lazyloaded="1"
                                                                                        src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs="
                                                                                        width="959"
                                                                                        height="1280"
                                                                                        data-src="https://limstudio.site/wp-content/uploads/2020/08/Diradur-3.jpeg"
                                                                                        class="attachment-full size-full"
                                                                                        alt=""
                                                                                        loading="lazy"
                                                                                        data-srcset="https://limstudio.site/wp-content/uploads/2020/08/Diradur-3.jpeg 959w, https://limstudio.site/wp-content/uploads/2020/08/Diradur-3-225x300.jpeg 225w, https://limstudio.site/wp-content/uploads/2020/08/Diradur-3-767x1024.jpeg 767w, https://limstudio.site/wp-content/uploads/2020/08/Diradur-3-768x1025.jpeg 768w, https://limstudio.site/wp-content/uploads/2020/08/Diradur-3-830x1108.jpeg 830w, https://limstudio.site/wp-content/uploads/2020/08/Diradur-3-230x307.jpeg 230w"
                                                                                        data-sizes="(max-width: 959px) 100vw, 959px"
                                                                                    />
                                                                                    <noscript>
                                                                                        <img
                                                                                            width="959"
                                                                                            height="1280"
                                                                                            src="<?= base_url() ?>assets/themes/themes6/uploads/2020/08/Diradur-3.jpg"
                                                                                            class="attachment-full size-full"
                                                                                            alt=""
                                                                                            loading="lazy"
                                                                                            srcset="
                                                                                                https://limstudio.site/wp-content/uploads/2020/08/Diradur-3.jpeg          959w,
                                                                                                https://limstudio.site/wp-content/uploads/2020/08/Diradur-3-225x300.jpeg  225w,
                                                                                                https://limstudio.site/wp-content/uploads/2020/08/Diradur-3-767x1024.jpeg 767w,
                                                                                                https://limstudio.site/wp-content/uploads/2020/08/Diradur-3-768x1025.jpeg 768w,
                                                                                                https://limstudio.site/wp-content/uploads/2020/08/Diradur-3-830x1108.jpeg 830w,
                                                                                                https://limstudio.site/wp-content/uploads/2020/08/Diradur-3-230x307.jpeg  230w
                                                                                            "
                                                                                            sizes="(max-width: 959px) 100vw, 959px"
                                                                                        />
                                                                                    </noscript>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-b47c024" data-id="b47c024" data-element_type="column">
                                                                <div class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div
                                                                            class="elementor-element elementor-element-0e7c35e animated-slow elementor-invisible elementor-widget elementor-widget-image"
                                                                            data-id="0e7c35e"
                                                                            data-element_type="widget"
                                                                            data-settings='{"_animation":"zoomIn"}'
                                                                            data-widget_type="image.default"
                                                                        >
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-image">
                                                                                    <img
                                                                                        data-lazyloaded="1"
                                                                                        src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs="
                                                                                        width="960"
                                                                                        height="1280"
                                                                                        data-src="https://limstudio.site/wp-content/uploads/2020/08/Diradur-9.jpeg"
                                                                                        class="attachment-full size-full"
                                                                                        alt=""
                                                                                        loading="lazy"
                                                                                        data-srcset="https://limstudio.site/wp-content/uploads/2020/08/Diradur-9.jpeg 960w, https://limstudio.site/wp-content/uploads/2020/08/Diradur-9-225x300.jpeg 225w, https://limstudio.site/wp-content/uploads/2020/08/Diradur-9-768x1024.jpeg 768w, https://limstudio.site/wp-content/uploads/2020/08/Diradur-9-830x1107.jpeg 830w, https://limstudio.site/wp-content/uploads/2020/08/Diradur-9-230x307.jpeg 230w"
                                                                                        data-sizes="(max-width: 960px) 100vw, 960px"
                                                                                    />
                                                                                    <noscript>
                                                                                        <img
                                                                                            width="960"
                                                                                            height="1280"
                                                                                            src="<?= base_url() ?>assets/themes/themes6/uploads/2020/08/Diradur-9.jpg"
                                                                                            class="attachment-full size-full"
                                                                                            alt=""
                                                                                            loading="lazy"
                                                                                            srcset="
                                                                                                https://limstudio.site/wp-content/uploads/2020/08/Diradur-9.jpeg          960w,
                                                                                                https://limstudio.site/wp-content/uploads/2020/08/Diradur-9-225x300.jpeg  225w,
                                                                                                https://limstudio.site/wp-content/uploads/2020/08/Diradur-9-768x1024.jpeg 768w,
                                                                                                https://limstudio.site/wp-content/uploads/2020/08/Diradur-9-830x1107.jpeg 830w,
                                                                                                https://limstudio.site/wp-content/uploads/2020/08/Diradur-9-230x307.jpeg  230w
                                                                                            "
                                                                                            sizes="(max-width: 960px) 100vw, 960px"
                                                                                        />
                                                                                    </noscript>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                                <section
                                                    class="elementor-section elementor-top-section elementor-element elementor-element-a34a1fc elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                    data-id="a34a1fc"
                                                    data-element_type="section"
                                                    data-settings='{"stretch_section":"section-stretched","background_background":"gradient"}'
                                                >
                                                    <div class="elementor-container elementor-column-gap-default">
                                                        <div class="elementor-row">
                                                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-c3706e6" data-id="c3706e6" data-element_type="column">
                                                                <div class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div
                                                                            class="elementor-element elementor-element-8f45add elementor-widget elementor-widget-spacer"
                                                                            data-id="8f45add"
                                                                            data-element_type="widget"
                                                                            data-widget_type="spacer.default"
                                                                        >
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-spacer">
                                                                                    <div class="elementor-spacer-inner"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <section
                                                                            class="elementor-section elementor-inner-section elementor-element elementor-element-328944f elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                                            data-id="328944f"
                                                                            data-element_type="section"
                                                                        >
                                                                            <div class="elementor-container elementor-column-gap-default">
                                                                                <div class="elementor-row">
                                                                                    <div
                                                                                        class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-a9eb3f9"
                                                                                        data-id="a9eb3f9"
                                                                                        data-element_type="column"
                                                                                    >
                                                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                                                            <div class="elementor-widget-wrap">
                                                                                                <div
                                                                                                    class="elementor-element elementor-element-50f6426 elementor-invisible elementor-widget elementor-widget-heading"
                                                                                                    data-id="50f6426"
                                                                                                    data-element_type="widget"
                                                                                                    data-settings='{"_animation":"fadeInUp"}'
                                                                                                    data-widget_type="heading.default"
                                                                                                >
                                                                                                    <div class="elementor-widget-container">
                                                                                                        <h2 class="elementor-heading-title elementor-size-default font-style">Salam Bahagia</h2>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="elementor-element elementor-element-5161315 elementor-invisible elementor-widget elementor-widget-heading"
                                                                                                    data-id="5161315"
                                                                                                    data-element_type="widget"
                                                                                                    data-settings='{"_animation":"fadeIn"}'
                                                                                                    data-widget_type="heading.default"
                                                                                                >
                                                                                                    <div class="elementor-widget-container">
                                                                                                        <h2 class="elementor-heading-title elementor-size-default">
                                                                                                            Sambut hangat cahaya fajar, kilaukan warna sang putri cendrawasih. <br />
                                                                                                            Cukup demikian kami berkabar, kami tutup dengan segenap rasa terima kasih.
                                                                                                        </h2>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </section>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                                <section
                                                    class="elementor-section elementor-top-section elementor-element elementor-element-54d5328 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                    data-id="54d5328"
                                                    data-element_type="section"
                                                    data-settings='{"stretch_section":"section-stretched","background_background":"classic"}'
                                                >
                                                    <div class="elementor-container elementor-column-gap-default">
                                                        <div class="elementor-row">
                                                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-ebdb2f1" data-id="ebdb2f1" data-element_type="column">
                                                                <div class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div
                                                                            class="elementor-element elementor-element-d6f0661 elementor-invisible elementor-widget elementor-widget-image"
                                                                            data-id="d6f0661"
                                                                            data-element_type="widget"
                                                                            data-settings='{"_animation":"fadeIn"}'
                                                                            data-widget_type="image.default"
                                                                        >
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-image">
                                                                                    <img
                                                                                        data-lazyloaded="1"
                                                                                        src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs="
                                                                                        width="2240"
                                                                                        height="1260"
                                                                                        data-src="<?= base_url() ?>assets/images/gallery/farah11.jpg"
                                                                                        class="attachment-full size-full"
                                                                                        alt=""
                                                                                        loading="lazy"
                                                                                        data-srcset="<?= base_url() ?>assets/images/gallery/farah11.jpg"
                                                                                        data-sizes="(max-width: 2240px) 100vw, 2240px"
                                                                                    />
                                                                                    <noscript>
                                                                                        <img
                                                                                            width="2240"
                                                                                            height="1260"
                                                                                            src="<?= base_url() ?>assets/images/gallery/farah11.jpg"
                                                                                            class="attachment-full size-full"
                                                                                            alt=""
                                                                                            loading="lazy"
                                                                                            srcset="
																							<?= base_url() ?>assets/images/gallery/farah11.jpg
                                                                                            "
                                                                                            sizes="(max-width: 2240px) 100vw, 2240px"
                                                                                        />
                                                                                    </noscript>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="elementor-element elementor-element-818dad3 elementor-invisible elementor-widget elementor-widget-heading"
                                                                            data-id="818dad3"
                                                                            data-element_type="widget"
                                                                            data-settings='{"_animation":"fadeInUp"}'
                                                                            data-widget_type="heading.default"
                                                                        >
                                                                            <div class="elementor-widget-container">
                                                                                <h2 class="elementor-heading-title elementor-size-default">wassalamualaikum warahmatullahi wabarakatuh</h2>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="elementor-element elementor-element-a93416b elementor-widget elementor-widget-spacer"
                                                                            data-id="a93416b"
                                                                            data-element_type="widget"
                                                                            data-widget_type="spacer.default"
                                                                        >
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-spacer">
                                                                                    <div class="elementor-spacer-inner"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="elementor-element elementor-element-9417318 elementor-widget elementor-widget-heading"
                                                                            data-id="9417318"
                                                                            data-element_type="widget"
                                                                            data-widget_type="heading.default"
                                                                        >
                                                                            <div class="elementor-widget-container">
                                                                                <h2 class="elementor-heading-title elementor-size-default">
                                                                                    By linesartproduction<br />
                                                                                    Your Partner for Digital Invitation Website
                                                                                </h2>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="elementor-element elementor-element-4573d72 elementor-shape-rounded elementor-grid-0 elementor-widget elementor-widget-social-icons"
                                                                            data-id="4573d72"
                                                                            data-element_type="widget"
                                                                            data-widget_type="social-icons.default"
                                                                        >
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-social-icons-wrapper elementor-grid">
                                                                                    <!-- <div class="elementor-grid-item">
                                                                                        <a
                                                                                            class="elementor-icon elementor-social-icon elementor-social-icon-whatsapp elementor-repeater-item-3ccd187"
                                                                                            href="https://wa.me/6281329792964"
                                                                                            target="_blank"
                                                                                        >
                                                                                            <span class="elementor-screen-only">Whatsapp</span>
                                                                                            <i class="fa fa-whatsapp"></i>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="elementor-grid-item">
                                                                                        <a
                                                                                            class="elementor-icon elementor-social-icon elementor-social-icon-instagram elementor-repeater-item-a3f33e8"
                                                                                            href="https://www.instagram.com/weddingkita_"
                                                                                            target="_blank"
                                                                                        >
                                                                                            <span class="elementor-screen-only">Instagram</span>
                                                                                            <i class="fa fa-instagram"></i>
                                                                                        </a>
                                                                                    </div> -->
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- .entry-content -->
                            </article>
                            <!-- #post-## -->
                        </main>
                        <!-- /main -->
                    </div>
                    <!-- /.post-wrap -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.content-wrapper -->
    </div>
    <!-- /.page-wrap -->

    <div class="footer-widgets">
        <div class="container">
            <div class="widget-column col-sm-4"></div>
            <div class="widget-column col-sm-4"></div>
            <div class="widget-column col-sm-4"></div>
        </div>
    </div>
    <footer class="site-footer">
        <div class="site-copyright container">
            <span><a href="http://limstudio.site/" rel="designer">&copy; Linesartproduction</a></span>
            <div class="to-top">
                <i class="fa fa-angle-up" style="color: black;"></i>
            </div>
        </div>
    </footer>
    <!-- /.site-footer -->

    <script type="text/javascript" src="<?= base_url() ?>assets/themes/themes6/themes/ngoworx/js/common5a7f.js?ver=20180213" id="ngoworx-common-js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/themes/themes6/themes/ngoworx/js/owl.carousel.min5a7f.js?ver=20180213" id="owl.carousel.min-js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/themes/themes6/themes/ngoworx/js/wow/wow.min5a7f.js?ver=20180213" id="wow.min-js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/themes/themes6/js/wp-embed.mind03b.js?ver=5.5.1" id="wp-embed-js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/themes/themes6/plugins/countdown-timer-ultimate/assets/js/wpcdt-timecircles54f4.js?ver=1.2.5" id="wpcdt-timecircle-js-js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/themes/themes6/plugins/countdown-timer-ultimate/assets/js/wpcdt-public-js54f4.js?ver=1.2.5" id="wpcdt-public-js-js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/themes/themes6/plugins/elementor/assets/js/frontend-modules.min9b4a.js?ver=3.0.11" id="elementor-frontend-modules-js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/themes/themes6/js/jquery/ui/position.mine899.js?ver=1.11.4" id="jquery-ui-position-js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/themes/themes6/plugins/elementor/assets/lib/dialog/dialog.mina288.js?ver=4.8.1" id="elementor-dialog-js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/themes/themes6/plugins/elementor/assets/lib/waypoints/waypoints.min05da.js?ver=4.0.2" id="elementor-waypoints-js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/themes/themes6/plugins/elementor/assets/lib/swiper/swiper.min48f5.js?ver=5.3.6" id="swiper-js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/themes/themes6/plugins/elementor/assets/lib/share-link/share-link.min9b4a.js?ver=3.0.11" id="share-link-js"></script>
    <script type="text/javascript" id="elementor-frontend-js-before">
        var elementorFrontendConfig = {
            environmentMode: { edit: false, wpPreview: false },
            i18n: {
                shareOnFacebook: "Share on Facebook",
                shareOnTwitter: "Share on Twitter",
                pinIt: "Pin it",
                download: "Download",
                downloadImage: "Download image",
                fullscreen: "Fullscreen",
                zoom: "Zoom",
                share: "Share",
                playVideo: "Play Video",
                previous: "Previous",
                next: "Next",
                close: "Close",
            },
            is_rtl: false,
            breakpoints: { xs: 0, sm: 480, md: 768, lg: 1025, xl: 1440, xxl: 1600 },
            version: "3.0.11",
            is_static: false,
            legacyMode: { elementWrappers: true },
            urls: { assets: "https:\/\/limstudio.site\/wp-content\/plugins\/elementor\/assets\/" },
            settings: { page: [], editorPreferences: [] },
            kit: {
                global_image_lightbox: "yes",
                lightbox_enable_counter: "yes",
                lightbox_enable_fullscreen: "yes",
                lightbox_enable_zoom: "yes",
                lightbox_enable_share: "yes",
                lightbox_title_src: "title",
                lightbox_description_src: "description",
            },
            post: { id: 6001, title: "Akad%20Nikah%20Dira%20%26%20Dur", excerpt: "", featuredImage: "https:\/\/limstudio.site\/wp-content\/uploads\/2020\/08\/Diradur-4-e1596731117677.jpeg" },
        };
    </script>
    <script type="text/javascript" src="<?= base_url() ?>assets/themes/themes6/plugins/elementor/assets/js/frontend.min9b4a.js?ver=3.0.11" id="elementor-frontend-js"></script>

    <script src="<?= base_url() ?>assets/themes/themes6/plugins/litespeed-cache/assets/js/lazyload.min.js"></script>
</body>

<!-- Mirrored from limstudio.site/diradur/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Oct 2020 13:08:57 GMT -->
</html>
<!-- Page generated by LiteSpeed Cache 3.5.0.2 on 2020-10-15 19:18:51 -->