<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">

    <!--====== Title ======-->
    <title>Basic - SaaS Landing Page</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="<?= base_url() ?>assets/images/favicon.png" type="image/png">

    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.min.css">

    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style-error-404.css">

</head>

<body>
    <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->


    <!--====== PRELOADER PART START ======-->

    <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== PRELOADER PART ENDS ======-->

    <!--====== HEADER PART START ======-->

    <header class="header-area">
        <div id="home" class="header-hero bg_cover" style="background-image: url(<?= base_url() ?>assets/images/banner-bg.svg)">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div id="notfound">
                            <div class="notfound">
                                <div class="notfound-404">
                                    <h1 style="z-index: 11;">Oops!</h1>
                                    <h1 style="z-index: 1;text-shadow: 3px -2px 14px #fff;">Oops!</h1>
                                </div>
                                <h2>404 - Page not found</h2>
                                <p>The page you are looking for might have been removed had its name changed or is temporarily unavailable.</p>
                                <a href="<?= base_url() ?>
                                ">Go To Homepage</a>
                            </div>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
            <div id="particles-1" class="particles"></div>
        </div> <!-- header hero -->
    </header>

    <!--====== Jquery js ======-->
    <script src="<?= base_url() ?>assets/js/vendor/jquery-1.12.4.min.js"></script>

    <!--====== Particles js ======-->
    <script src="<?= base_url() ?>assets/js/particles.min.js"></script>

    <script>
        $(function() {

            "use strict";
            $(window).on('load', function(event) {
                $('.preloader').delay(500).fadeOut(500);
            });

            if (document.getElementById("particles-1")) particlesJS("particles-1", {
                "particles": {
                    "number": {
                        "value": 40,
                        "density": {
                            "enable": !0,
                            "value_area": 4000
                        }
                    },
                    "color": {
                        "value": ["#FFFFFF", "#FFFFFF", "#FFFFFF"]
                    },
                    "shape": {
                        "type": "circle",
                        "stroke": {
                            "width": 0,
                            "color": "#fff"
                        },
                        "polygon": {
                            "nb_sides": 5
                        },
                        "image": {
                            "src": "img/github.svg",
                            "width": 33,
                            "height": 33
                        }
                    },
                    "opacity": {
                        "value": 0.15,
                        "random": !0,
                        "anim": {
                            "enable": !0,
                            "speed": 0.2,
                            "opacity_min": 0.15,
                            "sync": !1
                        }
                    },
                    "size": {
                        "value": 50,
                        "random": !0,
                        "anim": {
                            "enable": !0,
                            "speed": 2,
                            "size_min": 5,
                            "sync": !1
                        }
                    },
                    "line_linked": {
                        "enable": !1,
                        "distance": 150,
                        "color": "#ffffff",
                        "opacity": 0.4,
                        "width": 1
                    },
                    "move": {
                        "enable": !0,
                        "speed": 1,
                        "direction": "top",
                        "random": !0,
                        "straight": !1,
                        "out_mode": "out",
                        "bounce": !1,
                        "attract": {
                            "enable": !1,
                            "rotateX": 600,
                            "rotateY": 600
                        }
                    }
                },
                "interactivity": {
                    "detect_on": "canvas",
                    "events": {
                        "onhover": {
                            "enable": !1,
                            "mode": "bubble"
                        },
                        "onclick": {
                            "enable": !1,
                            "mode": "repulse"
                        },
                        "resize": !0
                    },
                    "modes": {
                        "grab": {
                            "distance": 400,
                            "line_linked": {
                                "opacity": 1,
                            }
                        },
                        "bubble": {
                            "distance": 250,
                            "size": 0,
                            "duration": 2,
                            "opacity": 0,
                            "speed": 3
                        },
                        "repulse": {
                            "distance": 400,
                            "duration": 0.4
                        },
                        "push": {
                            "particles_nb": 4
                        },
                        "remove": {
                            "particles_nb": 2
                        }
                    }
                },
                "retina_detect": !0
            });
        })
    </script>
</body>

</html>