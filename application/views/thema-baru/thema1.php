<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="id-ID" prefix="og: http://ogp.me/ns#">
<!--<![endif]-->

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-177921888-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-177921888-1');
    </script>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Wedding &mdash; <?= $data['nama_p'] ?> & <?= $data['nama_l'] ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Tanggal <?= date_format($tanggal_akad, 'd') . ' ' . $bulan_akad . ' ' . date_format($tanggal_akad, 'Y')  ?>" />
    <meta name="keywords" content="<?= $data['nama_p'] ?>, <?= $data['nama_l'] ?>, undngan, limstudio, undngan-digital" />
    <meta name="author" content="limstudio.site" />

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content="" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <!-- <link rel="shortcut icon" href="favicon.ico"> -->
    <link rel="shortcut icon" href="../assets/images/favicon.png" type="image/png">

    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Clicker+Script" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="../assets/css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="../assets/css/icomoon.css">
    <!-- Simple Line Icons -->
    <link rel="stylesheet" href="../assets/css/simple-line-icons.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/css/owl.theme.default.min.css">
    <!-- Magnific popup  -->
    <link rel="stylesheet" href="../assets/css/magnific-popup.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="../assets/css/bootstrap.css">

    <link rel="stylesheet" href="../assets/css/style-thema-1.css">

    <!-- Modernizr JS -->
    <script src="../assets/js/vendor/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
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

    <style type="text/css">
        .forscroll,
        html,
        body {
            width: 100%;
            height: 100%;
            margin: 0;
            padding: 0;
        }

        .fixed {
            bottom: 0;
            position: fixed;
            left: 0;
            z-index: 100;
            width: 100%;
            height: 62px;
            background: rgba(25, 25, 25, 0.2);
            cursor: pointer;
        }

        .fixed-music {
            cursor: pointer;
            position: fixed;
            background: #ff847e;
            height: 40px;
            width: 40px;
            z-index: 99;
            bottom: 67px;
            right: 22px;
            border-radius: 26px;
            text-align: center;
            color: white;
            padding: 10px;

        }

        @media screen and (max-width: 768px) {
            .bismi {
                font-size: 36px !important;
            }

            #qbootstrap-couple span {
                font-size: 12px !important;
                letter-spacing: 3px;
            }

            .bg-image {
                background-position: <?= $posisi1 ?> !important;
                /*background-size: 249%;*/
            }

            .bg-image2 {
                background-position: <?= $posisi2 ?> !important;
            }

            .bg-image3 {
                background-position: <?= $posisi3 ?> !important;
            }
        }

        #over-lay {
            position: fixed;
            width: 100vw;
            height: 100vh;
            background-color: rgba(0, 0, 0, 0.75);
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: block;
            font-size: 16px;
            margin: 0px;
            cursor: pointer;
            z-index: 9999;
            /* display: none; */
            padding-top: 352px;
        }

        .loading {
            background: #000000b8;
            position: fixed;
            width: 100%;
            height: 100%;
            z-index: 99;
            top: 0;
            left: 0;
            display: none;
        }

        .tapfp {
            text-align: center;
            font-size: 40px;
            line-height: 45px;
        }

        @media screen and (max-width: 769px) {
            #over-lay {
                display: -webkit-flex;
                /* Safari */
                -webkit-align-items: center;
                /* Safari 7.0+ */
                display: flex;
                align-items: center;
                padding-top: 0px;
            }
        }

        /* $base-background: #00CC99; */

        option.white {
            color: black
        }

        .btn {
            border-radius: 2px;
            padding: 8px 12px;
            color: #D18B49;
            font-size: 14px;
            font-weight: 500;
            text-decoration: none;
            text-transform: uppercase;
            -webkit-transition: 0.5s ease;
            transition: 0.5s ease;
        }

        .card {
            background: #FFFFFF;
            max-width: 400px;
            margin: 0px auto;
            border-radius: 12px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.19), 0 6px 6px rgba(0, 0, 0, 0.23);
            box-sizing: border-box;
            padding: 48px;
            text-align: center;
        }

        .products .description {
            font-style: italic;
        }

        .products {
            position: relative;
            overflow: hidden;
            -webkit-transition: 0.5s ease;
            transition: 0.5s ease;
        }

        .product {
            position: absolute;
            top: 0;
            left: 0;
            opacity: 0;
            visibility: hidden;
            -webkit-transition: 0.5s ease;
            transition: 0.5s ease;
        }

        .product.active {
            opacity: 1;
            visibility: visible;
        }

        .thumbnail {
            margin: 0 0 48px;
        }

        .title {
            margin: 0 0 12px;
            color: #D18B49;
            font-size: 24px;
            -webkit-transition: 0.5s ease;
            transition: 0.5s ease;
        }

        .description {
            margin: 0 0 48px;
        }

        .footer {
            display: -webkit-box;
            display: flex;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            flex-direction: row;
            -webkit-box-pack: justify;
            justify-content: space-between;
            margin: 0 -12px -12px;
        }

        [ripple] {
            z-index: 1;
            position: relative;
            overflow: hidden;
        }

        [ripple] .ripple {
            position: absolute;
            background: #FFFFFF;
            width: 60px;
            height: 60px;
            border-radius: 100%;
            -webkit-transform: scale(0);
            transform: scale(0);
            -webkit-animation: ripple 2s;
            animation: ripple 2s;
        }

        .btn:hover,
        .btn:active,
        .btn:focus {
            background: #ff847e !important;
            color: white !important;
        }

        @-webkit-keyframes ripple {
            0% {
                -webkit-transform: scale(0);
                transform: scale(0);
                opacity: 0.2;
            }

            100% {
                -webkit-transform: scale(20);
                transform: scale(20);
                opacity: 0;
            }
        }

        @keyframes ripple {
            0% {
                -webkit-transform: scale(0);
                transform: scale(0);
                opacity: 0.2;
            }

            100% {
                -webkit-transform: scale(20);
                transform: scale(20);
                opacity: 0;
            }
        }

        #qbootstrap-started .form-control {
            padding-top: 0px !important;
            padding-bottom: 0px !important;
        }
    </style>
</head>

<body>

    <div class="forscroll">
        <div onclick="playAudio()" type="button" id="over-lay">
            <div style="margin:0 auto;">
                <div class="tapfp">TAP TO CONTINUE</div>
                <div style="text-align:center">Use Chrome browser to make your website look perfect</div>
            </div>
        </div>
        <audio autoplay loop id="myAudio">
            <source src="<?= base_url(); ?>assets/music/<?= $data['music'] ?>" type="audio/mpeg">
        </audio>

        <header role="banner" id="qbootstrap-header">
            <div class="container">
                <!-- <div class="row"> -->
                <nav class="navbar navbar-default">
                    <div class="navbar-header">
                        <!-- Mobile Toggle Menu Button -->
                        <a href="#" class="js-qbootstrap-nav-toggle qbootstrap-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
                        <a class="navbar-brand" href="index.html">Wedding</a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="active"><a href="#" data-nav-section="home"><span>Home</span></a></li>
                            <li><a href="#" data-nav-section="salam"><span>Salam Pembuka</span></a></li>
                            <li><a href="#" data-nav-section="tanggal"><span>Tanggal</span></a></li>
                            <li><a href="#" data-nav-section="when-where"><span>Akad &amp; Resepsi</span></a></li>
                            <li><a href="#" data-nav-section="greetings"><span>Ucapan</span></a></li>
                            <!-- <li><a href="#" data-nav-section="people"><span>People</span></a></li> -->
                            <!-- <li><a href="#" data-nav-section="rsvp"><span>RSVP</span></a></li> -->
                            <li><a href="#" data-nav-section="gallery"><span>Gallery</span></a></li>
                            <!-- <li><a href="#" data-nav-section="blog"><span>Blog</span></a></li> -->
                        </ul>
                    </div>
                </nav>
                <!-- </div> -->
            </div>
        </header>


        <div class="qbootstrap-hero" data-section="home">
            <div class="qbootstrap-overlay"></div>
            <div class="qbootstrap-cover text-center bg-image" data-stellar-background-ratio="0" style="background-image: url(<?= $gambar1 ?>);">
                <div class="display-t">
                    <div class="display-tc">
                        <div class="container">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="animate-box svg-sm colored">
                                    <img src="<?= base_url() ?>assets/images/flaticon/svg/004-nature.svg" class="svg" alt="">
                                    <h1 class="holder"><span>The Wedding of</span></h1>
                                    <h2><?= $data['panggilan_p'] ?> &amp; <?= $data['panggilan_l'] ?></h2>
                                    <p><?= date_format($tanggal, 'd') . '.' . date_format($tanggal, 'm') . '.' . date_format($tanggal, 'Y') ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div data-section="salam" id="qbootstrap-couple" class="qbootstrap-section-gray">
            <div class="container">
                <div class="row animate-box">
                    <div class="col-md-8 col-md-offset-2 animate-box">
                        <div class="col-md-12 text-center section-heading svg-sm colored">
                            <img src="<?= base_url() ?>assets/images/flaticon/svg/005-two.svg" class="svg" alt="">
                            <h2 class="bismi">Bismillahirrrahmanirrahim</h2>
                            <p>Dan diantara tanda-tanda kekuasaanNya ialah Dia menciptakan untukmu isteri-isteri dari jenismu sendiri, supaya kamu cenderung dan merasa tenteram kepadanya, dan dijadikanNya diantaramu rasa kasih dan sayang. Sesungguhnya pada yang demikian itu benar-benar terdapat tanda-tanda bagi kaum yang berpikir</p>
                            <p><strong>QS. Ar. Ruum &mdash; (30):21 </strong></p>
                        </div>
                    </div>
                </div>
                <div class="row animate-box">
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <div class="col-md-5 col-sm-5 col-xs-5 nopadding">
                            <img src="<?= $brid ?>" class="img-responsive" alt="Free HTML5 Bootstrap Template by QBootstrap.com">
                            <h3><?= $data['nama_p'] ?></h3>
                            <span>Pengantin Wanita</span>
                        </div>
                        <div class="col-md-2 col-sm-2 col-xs-2 nopadding">
                            <h2 class="amp-center"><img src="<?= base_url() ?>assets/images/flaticon/svg/003-luxury.svg" class="svg img-responsive" alt="Free HTML5 Bootstrap Template by QBootstrap.com"></h2>
                        </div>
                        <div class="col-md-5 col-sm-5 col-xs-5 nopadding">
                            <img src="<?= $groom ?>" class="img-responsive" alt="Free HTML5 Bootstrap Template by QBootstrap.com">
                            <h3><?= $data['nama_l'] ?></h3>
                            <span>Pengantin pria</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div data-section="tanggal" id="qbootstrap-countdown" data-stellar-background-ratio="0.5" class="bg-image2" style="background-image: url(<?= $gambar2 ?>);" data-section="wedding-day">
            <div class="overlay"></div>
            <div class="display-over">
                <div class="container">
                    <div class="row animate-box">
                        <div class="col-md-12 section-heading text-center svg-sm colored">
                            <img src="<?= base_url() ?>assets/images/flaticon/svg/006-flower-bell-outline-design-variant-with-vines-and-leaves.svg" class="svg" alt="Free HTML5 Bootstrap Template by QBootstrap.com">
                            <h2 class="">The Wedding Day</h2>
                            <span class="datewed"><?= $hari . ', ' . date_format($tanggal, 'd') . ' ' . $bulan . ' ' . date_format($tanggal, 'Y') ?></span>
                        </div>
                    </div>
                    <div class="row animate-box">
                        <div class="col-md-8 col-md-offset-2 text-center">
                            <p class="countdown">
                                <span id="days"></span>
                                <span id="hours"></span>
                                <span id="minutes"></span>
                                <span id="seconds"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 
		<div id="qbootstrap-groom-bride" data-section="groom-bride">
			<div class="container">
				<div class="row animate-box">
					<div class="col-md-8 col-md-offset-2">
						<div class="col-md-12 text-center section-heading svg-sm-2 colored">
							<img src="<?= base_url() ?>assets/images/flaticon/svg/002-wedding-couple.svg" class="svg" alt="Free HTML5 Bootstrap Template by QBootstrap.com">
							<h2>Groom &amp; Bride</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam accusamus, sequi, minima repellendus explicabo magni aperiam, ducimus perferendis ad quidem suscipit omnis unde veritatis pariatur. Commodi, nisi. Iusto, accusantium a.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="couple groom text-center animate-box">
							<img src="<?= base_url() ?>assets/images/groom.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by QBootstrap.com">
							<div class="desc">
								<h2>Louie Jie L. Mahusay</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda vero totam eum, necessitatibus reprehenderit nisi, ratione neque aspernatur sapiente minus? Omnis neque labore distinctio aspernatur esse impedit laboriosam, veritatis dolorem!</p>
								<ul class="social social-circle">
									<li><a href="#"><i class="icon-twitter"></i></a></li>
									<li><a href="#"><i class="icon-facebook"></i></a></li>
									<li><a href="#"><i class="icon-instagram"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="couple bride text-center animate-box">
							<img src="<?= base_url() ?>assets/images/bride.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by QBootstrap.com">
							<div class="desc">
								<h2>Marializa R. Tabay</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda vero totam eum, necessitatibus reprehenderit nisi, ratione neque aspernatur sapiente minus? Omnis neque labore distinctio aspernatur esse impedit laboriosam, veritatis dolorem!</p>
								<ul class="social social-circle">
									<li><a href="#"><i class="icon-twitter"></i></a></li>
									<li><a href="#"><i class="icon-facebook"></i></a></li>
									<li><a href="#"><i class="icon-instagram"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	 -->
        <!-- 
	<div id="qbootstrap-story" data-section="story">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2">
					<div class="col-md-12 text-center section-heading svg-sm-2">
						<img src="<?= base_url() ?>assets/images/flaticon/svg/003-luxury.svg" class="svg" alt="Free HTML5 Bootstrap Template by QBootstrap.com">
						<h2>Our Love Story</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<ul class="timeline animate-box">
						<li class="animate-box">
							<div class="timeline-badge" style="background-image:url(<?= base_url() ?>assets/images/couple-1.jpg);"></div>
							<div class="timeline-panel">
								<div class="overlay"></div>
								<div class="timeline-heading">
									<h3 class="timeline-title">First We Meet</h3>
									<span class="date">June 10, 2017</span>
								</div>
								<div class="timeline-body">
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in .</p>
								</div>
							</div>
						</li>
						<li class="timeline-inverted animate-box">
							<div class="timeline-badge" style="background-image:url(<?= base_url() ?>assets/images/couple-2.jpg);"></div>
							<div class="timeline-panel">
								<div class="overlay overlay-2"></div>
								<div class="timeline-heading">
									<h3 class="timeline-title">First Date</h3>
									<span class="date">June 10, 2017</span>
								</div>
								<div class="timeline-body">
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in .</p>
								</div>
							</div>
						</li>
						<li class="animate-box">
							<div class="timeline-badge" style="background-image:url(<?= base_url() ?>assets/images/couple-3.jpg);"></div>
							<div class="timeline-panel">
								<div class="overlay"></div>
								<div class="timeline-heading">
									<h3 class="timeline-title">In A Relationship</h3>
									<span class="date">June 14, 2017</span>
								</div>
								<div class="timeline-body">
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in .</p>
								</div>
							</div>
						</li>
						<li class="timeline-inverted animate-box">
							<div class="timeline-badge" style="background-image:url(<?= base_url() ?>assets/images/couple-4.jpg);"></div>
							<div class="timeline-panel">
								<div class="overlay overlay-2"></div>
								<div class="timeline-heading">
									<h3 class="timeline-title">We're Engaged</h3>
									<span class="date">Sept. 01, 2017</span>
								</div>
								<div class="timeline-body">
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in .</p>
								</div>
							</div>
						</li>
			    	</ul>
				</div>
			</div>
		</div>
	</div>
	 -->
        <div id="qbootstrap-when-where" data-section="when-where">
            <div class="container">
                <div class="row animate-box">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="col-md-12 text-center section-heading svg-sm colored">
                            <img src="<?= base_url() ?>assets/images/flaticon/svg/005-two.svg" class="svg" alt="Free HTML5 Bootstrap Template by QBootstrap.com">
                            <h2>Akad Nikah &amp; Resepsi</h2>
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1 subtext">
                                    <h3>Turut mengundang teman-teman, sahabat dan keluarga menyaksikan pengesahan kisah cinta Kami yang begitu indah dalam resepsi pernikahan Kami</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-bottom-padded-md">
                    <div class="col-md-6 text-center animate-box">
                        <div class="wedding-events">
                            <div class="ceremony-bg" style="background-image: url(<?= $data['gambar_akad'] ?>);"></div>
                            <div class="desc">
                                <h3>Akad Nikah</h3>
                                <div class="row">
                                    <div class="col-md-2 col-md-push-5">
                                        <div class="icon-tip">
                                            <span class="icon"><i class="icon-heart-o"></i></span>
                                        </div>
                                    </div>
                                    <div class="col-md-5 col-md-pull-1">
                                        <div class="date">
                                            <i class="icon-calendar"></i>
                                            <span><?= $hari_akad ?></span>
                                            <span><?= date_format($tanggal_akad, 'd') . ' ' . $bulan_akad . ' ' . date_format($tanggal_akad, 'Y')  ?></span>
                                        </div>
                                    </div>
                                    <div class="col-md-5 col-md-pull-1">
                                        <div class="date">
                                            <i class="icon-clock2"></i>
                                            <span><?= substr($data['jam_akad_mulai'], 0, 5) . ' ' . $data['waktu_bagian']  ?> </span>
                                            <span>
                                                <?php if (substr($data['jam_akad_selesai'], 0, 5) > '23:00:00') {
                                                    echo ' Selesai';
                                                } else if (substr($data['jam_akad_selesai'], 0, 5) == '') {
                                                } else {
                                                    echo substr($data['jam_akad_selesai'], 0, 5) . ' ' . $data['waktu_bagian'];
                                                }
                                                ?>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <p><?= $data['lokasi_akad'] ?></p>
                                <!-- <p><a href="#" class="btn btn-primary btn-sm">Learn more</a></p> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 text-center animate-box">
                        <div class="wedding-events">
                            <div class="ceremony-bg" style="background-image: url(<?= $data['gambar_resepsi'] ?>);"></div>
                            <div class="desc">
                                <h3>Resepsi Pernikahan</h3>
                                <div class="row">
                                    <div class="col-md-2 col-md-push-5">
                                        <div class="icon-tip">
                                            <span class="icon"><i class="icon-heart-o"></i></span>
                                        </div>
                                    </div>
                                    <div class="col-md-5 col-md-pull-1">
                                        <div class="date">
                                            <i class="icon-calendar"></i>
                                            <span><?= $hari ?></span>
                                            <span><?= date_format($tanggal, 'd') . ' ' . $bulan . ' ' . date_format($tanggal, 'Y')  ?></span>
                                        </div>
                                    </div>
                                    <div class="col-md-5 col-md-pull-1">
                                        <div class="date">
                                            <i class="icon-clock2"></i>
                                            <span><?= substr($data['jam_resepsi_mulai'], 0, 5) . ' ' . $data['waktu_bagian'] ?> </span>
                                            <span>
                                                <?php if (substr($data['jam_resepsi_selesai'], 0, 5) > '23:00:00') {
                                                    echo ' Selesai';
                                                } else if (substr($data['jam_resepsi_selesai'], 0, 5) == '') {
                                                } else {
                                                    echo substr($data['jam_resepsi_selesai'], 0, 5) . ' ' . $data['waktu_bagian'];
                                                }
                                                ?>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <p><?= $data['lokasi_resepsi'] ?></p>
                                <!-- <p><a href="#" class="btn btn-primary btn-sm">Learn more</a></p> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="qbootstrap-when-where">
            <div class="container">
                <div class="row animate-box">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="col-md-12 text-center section-heading svg-sm colored">
                            <img src="<?= base_url() ?>assets/images/flaticon/svg/005-two.svg" class="svg" alt="Free HTML5 Bootstrap Template by QBootstrap.com">
                            <h2>Lokasi Akad &amp; Resepsi</h2>
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1 subtext">
                                    <h3><?= $data['lokasi_resepsi'] ?></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-bottom-padded-md">
                    <div class="col-md-12 text-center animate-box">
                        <iframe src="<?= $data['link_map'] ?>" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div id="qbootstrap-when-where">
            <div class="container">
                <div class="row animate-box">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="col-md-12 text-center section-heading svg-sm colored">
                            <img src="<?= base_url() ?>assets/images/flaticon/svg/005-two.svg" class="svg" alt="Free HTML5 Bootstrap Template by QBootstrap.com">
                            <h2>Lokasi Selamatan &amp; Tasyakuran</h2>
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1 subtext">
                                    <h3>Leuwiliang permai blok F/4 Rt 003 Rw 001 Leuwiliang Bogor (Kediaman Mempela Pria)</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-bottom-padded-md">
                    <div class="col-md-12 text-center animate-box">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d809.5302113790536!2d106.6260501029082!3d-6.567875736495278!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e6!4m0!4m3!3m2!1d-6.5679073!2d106.6260107!5e0!3m2!1sid!2sid!4v1596552944575!5m2!1sid!2sid" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="col-md-12" style="padding: 30px" data-section="greetings">
            <div class="container">
                <div class="row animate-box">
                    <div class="col-md-12 section-heading text-center svg-sm colored" style="margin-bottom: 0px !important; padding-bottom: 0px !important">
                        <img src="<?= base_url() ?>assets/images/flaticon/svg/006-flower-bell-outline-design-variant-with-vines-and-leaves.svg" class="svg" alt="">
                        <h2 class="">Sweet Messages</h2>
                    </div>
                </div>
            </div>
            <div class="card animate-box">
                <div class="products">
                    <?php $no = 0;
                    foreach ($ucapan as $item) {
                        $no++;
                        if ($no == '1') {
                            $aktif = "active";
                        } else {
                            $aktif = '';
                        } ?>
                        <div class="product <?= $aktif ?>" product-id="<?= $no ?>" product-color="#D18B49">
                            <h1 class="title"><?= $item['oleh'] ?></h1>
                            <p class="description"><?= $item['ucapan'] ?></p>
                        </div>
                    <?php } ?>
                </div>
                <div class="footer"><a class="btn" id="prev" href="#" ripple="" ripple-color="#666666">Prev</a><a class="btn" id="next" href="#" ripple="" ripple-color="#666666">Next</a></div>
            </div>
        </div>
        <div id="qbootstrap-started" class="qbootstrap-bg bg-image3" data-section="rsvp" data-stellar-background-ratio="0.5" style="background-image: url('<?= $gambar3 ?>'); ">
            <div class="overlay"></div>
            <div class="container">
                <div class="row animate-box fadeInUp animated">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="col-md-12 text-center section-heading svg-sm colored">
                            <img src="<?= base_url() ?>assets/images/flaticon/svg/005-two.svg" class="svg" alt="">
                            <h2>You Are Invited</h2>
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1 subtext">
                                    <h3>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="loading">
                    <div style="margin:0 auto; align-self: center; top: 40%;left: 40%;right: 40%; position:fixed">
                        <img class="tapfp" src="<?= base_url() ?>assets/images/cinta.gif" alt="">
                    </div>
                </div>
                <div class="row animate-box fadeInUp animated">
                    <div class="col-md-10 col-md-offset-1">
                        <form class="form-inline">
                            <div class="col-md-4 col-sm-4">
                                <div class="form-group">
                                    <label for="name" class="sr-only">Name</label>
                                    <input type='name' class='form-control' id='nama' placeholder='Nama' name='nama' required style='width:100%;' maxlength="20">
                                    <input type='hidden' class='form-control' id='id' value="<?= $data["id_pernikahan"] ?>">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="form-group">
                                    <label for="email" class="sr-only">Email</label>
                                    <input type="text" id='siapa' class="form-control" id="email" placeholder="Siapa kamu? co: Keluarga Mempelai">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="form-group">
                                    <label for="email" class="sr-only">Email</label>
                                    <select class="form-control" name="hadir" id="hadir">
                                        <option class="white" disabled="" selected="">Pilih Kehadiran</option>
                                        <option class="white" value="1">Saya akan hadir</option>
                                        <option class="white" value="0">Maaf, saya tidak bisa</option>
                                    </select>
                                </div>
                            </div>
                            <script>
                                function hiroFunction() {
                                    var x = document.getElementById("kehadiran").value;

                                    if (x == "Tidak Hadir") {
                                        document.getElementById("nomer").style.visibility = "hidden";
                                        document.getElementById("nomer").disabled = true;
                                    } else {
                                        document.getElementById("nomer").disabled = false;
                                        document.getElementById("nomer").style.visibility = "visible";
                                    }
                                }
                            </script>
                            <div class="col-md-4 col-sm-4">
                                <div class="form-group">
                                    <label for="email" class="sr-only">Email</label>
                                    <textarea class="form-control" name="notes" id='harapan' placeholder='Ucapan untuk mempelai' rows='5'></textarea>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <button type="submit" onClick="simpanyes()" class="btn btn-default btn-block">I am Attending</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--  <div id="qbootstrap-testimonials" class="qbootstrap-greetings bg-image3" data-section="greetings" data-stellar-background-ratio="0.5" style="background-image: url(<?= $gambar3 ?>);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row animate-box">
                    <div class="col-md-12 section-heading text-center svg-sm colored">
                        <img src="<?= base_url() ?>assets/images/flaticon/svg/006-flower-bell-outline-design-variant-with-vines-and-leaves.svg" class="svg" alt="Free HTML5 Bootstrap Template by QBootstrap.com">
                        <h2 class="">Sweet Messages</h2>
                    </div>
                </div>

                <div class="row">
                    <?php foreach ($ucapan as $item) { ?>
                        <div class="col-md-4 animate-box">
                            <div class="box-testimony ">
                                <blockquote>
                                    <span class="quote"><span><i class="icon-quote-left"></i></span></span>
                                    <p>&ldquo; <?= $item['ucapan'] ?> &rdquo;</p>
                                </blockquote>
                                <p class="author"><?= $item['oleh'] ?></p>
                            </div>

                        </div>
                    <?php } ?>
                </div>
            </div>
        </div> -->
        <!-- 
	<div id="qbootstrap-people" data-section="people">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2">
					<div class="col-md-12 text-center section-heading svg-sm colored">
						<img src="<?= base_url() ?>assets/images/flaticon/svg/005-two.svg" class="svg" alt="Free HTML5 Bootstrap Template by QBootstrap.com">
						<h2>The Groomsmen</h2>
						<div class="row">
						<div class="col-md-10 col-md-offset-1 subtext  ">
							<h3>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</h3>
						</div>
					</div>
					</div>
				</div>
			</div>
			<div class="row row-bottom-padded-lg">
				<div class="col-md-3 text-center animate-box">
					<div class="groom-men">
						<img src="<?= base_url() ?>assets/images/groom-men-1.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by QBootstrap.com">
						<h3>Ian Bill</h3>
					</div>
				</div>
				<div class="col-md-3 text-center animate-box">
					<div class="groom-men">
						<img src="<?= base_url() ?>assets/images/groom-men-2.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by QBootstrap.com">
						<h3>George Smith</h3>
					</div>
				</div>
				<div class="col-md-3 text-center animate-box">
					<div class="groom-men">
						<img src="<?= base_url() ?>assets/images/groom-men-3.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by QBootstrap.com">
						<h3>Brian Thompson</h3>
					</div>
				</div>
				<div class="col-md-3 text-center animate-box">
					<div class="groom-men">
						<img src="<?= base_url() ?>assets/images/groom-men-4.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by QBootstrap.com">
						<h3>David Howard</h3>
					</div>
				</div>
			</div>
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2">
					<div class="col-md-12 text-center section-heading svg-sm colored">
						<img src="<?= base_url() ?>assets/images/flaticon/svg/005-two.svg" class="svg" alt="Free HTML5 Bootstrap Template by QBootstrap.com">
						<h2>The Bridesmaid</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 text-center animate-box">
					<div class="groom-men">
						<img src="<?= base_url() ?>assets/images/bridesmaid-1.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by QBootstrap.com">
						<h3>Angel Thomas</h3>
					</div>
				</div>
				<div class="col-md-3 text-center animate-box">
					<div class="groom-men">
						<img src="<?= base_url() ?>assets/images/bridesmaid-2.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by QBootstrap.com">
						<h3>Kathy Shol</h3>
					</div>
				</div>
				<div class="col-md-3 text-center animate-box">
					<div class="groom-men">
						<img src="<?= base_url() ?>assets/images/bridesmaid-3.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by QBootstrap.com">
						<h3>Rose Mel</h3>
					</div>
				</div>
				<div class="col-md-3 text-center animate-box">
					<div class="groom-men">
						<img src="<?= base_url() ?>assets/images/bridesmaid-4.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by QBootstrap.com">
						<h3>Ann Hathway</h3>
					</div>
				</div>
			</div>
		</div>
	</div>
	 -->



        <!-- 
	<div id="qbootstrap-started" class="qbootstrap-bg" data-section="rsvp" data-stellar-background-ratio="0.5" style="background-image: url(<?= base_url() ?>assets/images/cover_bg_1.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2">
					<div class="col-md-12 text-center section-heading svg-sm colored">
						<img src="<?= base_url() ?>assets/images/flaticon/svg/005-two.svg" class="svg" alt="Free HTML5 Bootstrap Template by QBootstrap.com">
						<h2>You Are Invited</h2>
						<div class="row">
						<div class="col-md-10 col-md-offset-1 subtext">
							<h3>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</h3>
						</div>
					</div>
					</div>
				</div>
			</div>
			<div class="row animate-box">
				<div class="col-md-10 col-md-offset-1">
					<form class="form-inline">
						<div class="col-md-4 col-sm-4">
							<div class="form-group">
								<label for="name" class="sr-only">Name</label>
								<input type="name" class="form-control" id="name" placeholder="Name">
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<div class="form-group">
								<label for="email" class="sr-only">Email</label>
								<input type="email" class="form-control" id="email" placeholder="Email">
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<button type="submit" class="btn btn-default btn-block">I am Attending</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	 -->
        <div id="qbootstrap-gallery" data-section="gallery">
            <div class="container">
                <div class="row animate-box">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="col-md-12 text-center section-heading svg-sm colored">
                            <img src="<?= base_url() ?>assets/images/flaticon/svg/005-two.svg" class="svg" alt="Free HTML5 Bootstrap Template by QBootstrap.com">
                            <h2>Our Selfie Photos</h2>
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1 subtext">
                                    <h3>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <?php $jumlah = count($gallery);
                        $adil = $jumlah / 4;
                        $adil = floor($adil);
                        $x = $adil * 4;
                        $y = $jumlah - $x;
                        $mulai1 = 0;
                        $mulai2 = 0;
                        $mulai3 = 0;
                        $mulai4 = 0;
                        $sampai1 = $adil;
                        $sampai2 = 0;
                        $sampai3 = 0;
                        $sampai4 = 0;
                        $r = 0;
                        $s = 0;
                        $t = 0;
                        $u = 0;
                        if ($y == '1') {
                            $r = 1;
                        } else if ($y == '2') {
                            $r = 1;
                            $s = 1;
                        } else if ($y == '3') {
                            $r = 1;
                            $s = 1;
                            $t = 1;
                        }
                        ?>
                        <div class="gallery animate-box">
                            <?php for ($mulai1 = 0; $mulai1 < $sampai1; $mulai1++) {
                                if ($gallery[$mulai1]['jenis'] == '99') {
                            ?>
                                    <a class="gallery-img image-popup image-popup" href="<?= $gallery[$mulai1]['gambar'] ?>"><img src="<?= $gallery[$mulai1]['gambar'] ?>" class="img-responsive" alt="Free HTML5 Bootstrap Template by QBootstrap.com"></a>
                            <?php }
                            } ?>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="gallery animate-box">
                            <?php
                            $mulai2 =  $sampai1;
                            $sampai2 = $sampai1 + $adil + $t;
                            for ($a = $mulai2; $a < $sampai2; $a++) {
                                if ($gallery[$a]['jenis'] == '99') {
                            ?>
                                    <a class="gallery-img image-popup image-popup" href="<?= $gallery[$a]['gambar'] ?>"><img src="<?= $gallery[$a]['gambar'] ?>" class="img-responsive" alt="Free HTML5 Bootstrap Template by QBootstrap.com"></a>
                            <?php }
                            } ?>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="gallery animate-box">
                            <?php
                            $mulai3 =  $sampai2;
                            $sampai3 = $sampai2 + $adil + $s;
                            for ($a = $mulai3; $a < $sampai3; $a++) {
                                if ($gallery[$a]['jenis'] == '99') {
                            ?>
                                    <a class="gallery-img image-popup image-popup" href="<?= $gallery[$a]['gambar'] ?>"><img src="<?= $gallery[$a]['gambar'] ?>" class="img-responsive" alt="Free HTML5 Bootstrap Template by QBootstrap.com"></a>
                            <?php }
                            } ?>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="gallery animate-box">
                            <?php
                            $mulai4 =  $sampai3;
                            $sampai4 = $sampai3 + $adil + $r;
                            for ($a = $mulai4; $a < $sampai4; $a++) {
                                if ($gallery[$a]['jenis'] == '99') {
                            ?>
                                    <a class="gallery-img image-popup image-popup" href="<?= $gallery[$a]['gambar'] ?>"><img src="<?= $gallery[$a]['gambar'] ?>" class="img-responsive" alt="Free HTML5 Bootstrap Template by QBootstrap.com"></a>
                            <?php }
                            } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--  
	<div id="qbootstrap-press" data-section="blog">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2">
					<div class="col-md-12 text-center section-heading svg-sm colored">
						<img src="<?= base_url() ?>assets/images/flaticon/svg/005-two.svg" class="svg" alt="Free HTML5 Bootstrap Template by QBootstrap.com">
						<h2>Our Blog</h2>
						<div class="row">
						<div class="col-md-10 col-md-offset-1 subtext">
							<h3>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</h3>
						</div>
					</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="qbootstrap-press-item animate-box">
						<div class="qbootstrap-press-img" style="background-image: url(<?= base_url() ?>assets/images/blog-1.jpg)">
						</div>
						<div class="qbootstrap-press-text">
							<h3 class="h2 qbootstrap-press-title">The Wedding Party <span class="qbootstrap-border"></span></h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis eius quos similique suscipit dolorem cumque vitae qui molestias illo accusantium...</p>
							<p><a href="#" class="btn btn-primary btn-sm">Learn more</a></p>
						</div>
					</div>
				</div>

				<div class="col-md-6">
					<div class="qbootstrap-press-item animate-box">
						<div class="qbootstrap-press-img" style="background-image: url(<?= base_url() ?>assets/images/blog-2.jpg)">
						</div>
						<div class="qbootstrap-press-text">
							<h3 class="h2 qbootstrap-press-title">Wedding Party <span class="qbootstrap-border"></span></h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis eius quos similique suscipit dolorem cumque vitae qui molestias illo accusantium...</p>
							<p><a href="#" class="btn btn-primary btn-sm">Learn more</a></p>
						</div>
					</div>
				</div>
				
				<div class="col-md-6">
					<div class="qbootstrap-press-item animate-box">
						<div class="qbootstrap-press-img" style="background-image: url(<?= base_url() ?>assets/images/blog-3.jpg);">
						</div>
						<div class="qbootstrap-press-text">
							<h3 class="h2 qbootstrap-press-title">Venue Wedding <span class="qbootstrap-border"></span></h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis eius quos similique suscipit dolorem cumque vitae qui molestias illo accusantium...</p>
							<p><a href="#" class="btn btn-primary btn-sm">Learn more</a></p>
						</div>
					</div>
				</div>

				<div class="col-md-6">
					<div class="qbootstrap-press-item animate-box">
						<div class="qbootstrap-press-img" style="background-image: url(<?= base_url() ?>assets/images/blog-4.jpg);">
						</div>
						<div class="qbootstrap-press-text">
							<h3 class="h2 qbootstrap-press-title">About The Couple <span class="qbootstrap-border"></span></h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis eius quos similique suscipit dolorem cumque vitae qui molestias illo accusantium...</p>
							<p><a href="#" class="btn btn-primary btn-sm">Learn more</a></p>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
    -->
        <?php if ($data['scroll'] == 1) { ?>
            <div class="col-md-12 fixed">
                <div style="text-align: center;color: yellow;font-size: 32px;font-weight: bold;margin-top: 5px;">STOP ROLLING PAGE</div>
            </div>
        <?php } ?>
        <div class="col-md-12 fixed-music" onclick="togleAudio()">
            <div class="pause">
                <div class="icon-tip">
                    <span class="icon"><i class="icon-control-pause"></i></span>
                </div>
            </div>
            <div class="play" style="display: none;">
                <div class="icon-tip">
                    <span class="icon"><i class="icon-music-tone-alt"></i></span>
                </div>
            </div>
        </div>
        <footer id="footer" role="contentinfo">
            <div class="container">
                <div class="row row-bottom-padded-sm">
                    <div class="col-md-12">
                        <p class="copyright text-center">Ditunggu kehadirannya dengan tetap menggunakan masker dan mematuhi protokol kesehatan</p>
                    </div>
                </div>
                <div class="row row-bottom-padded-sm">
                    <div class="col-md-12">
                        <p class="copyright text-center">&copy; 2020 <a href="index.html">Wedding</a>. All Rights Reserved. Images by <a href="https://web.facebook.com/taslim.fuadi.1" target="_blank">FunStudio</a></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <ul class="social social-circle">
                            <li><a href="https://twitter.com/Taslim_Fuadi"><i class="icon-twitter"></i></a></li>
                            <li><a href="https://web.facebook.com/taslim.fuadi.1"><i class="icon-facebook"></i></a></li>
                            <li><a href="https://www.youtube.com/channel/UCRJIO1CfWbxfdU3-B9HmAcw"><i class="icon-youtube"></i></a></li>
                            <li><a href="https://www.instagram.com/limstudio_indo/"><i class="icon-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <!-- jQuery -->
    <script src="../assets/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- jQuery Easing -->
    <script src="../assets/js/jquery.easing.min.js"></script>
    <!-- Bootstrap -->
    <script src="../assets/js/bootstrap.min.js"></script>
    <!-- Waypoints -->
    <script src="../assets/js/waypoints.min.js"></script>
    <!-- YTPlayer -->
    <script src="../assets/js/jquery.mb.YTPlayer.min.js"></script>
    <!-- Flexslider -->
    <script src="../assets/js/jquery.flexslider-min.js"></script>
    <!-- Owl Carousel -->
    <script src="../assets/js/owl.carousel.min.js"></script>
    <!-- Parallax -->
    <script src="../assets/js/jquery.stellar.min.js"></script>
    <!-- Magnific Popup -->
    <script src="../assets/js/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            var getProductHeight = $('.product.active').height();

            $('.products').css({
                height: getProductHeight
            });

            function calcProductHeight() {
                getProductHeight = $('.product.active').height();

                $('.products').css({
                    height: getProductHeight
                });
            }

            function animateContentColor() {
                var getProductColor = $('.product.active').attr('product-color');



                $('.title').css({
                    color: getProductColor
                });

                $('.btn').css({
                    color: getProductColor
                });
            }

            var productItem = $('.product'),
                productCurrentItem = productItem.filter('.active');

            $('#next').on('click', function(e) {
                e.preventDefault();

                var nextItem = productCurrentItem.next();

                productCurrentItem.removeClass('active');

                if (nextItem.length) {

                    productCurrentItem = nextItem.addClass('active');
                } else {
                    productCurrentItem = productItem.first().addClass('active');
                }

                calcProductHeight();
                animateContentColor();
            });

            $('#prev').on('click', function(e) {
                e.preventDefault();

                var prevItem = productCurrentItem.prev();

                productCurrentItem.removeClass('active');

                if (prevItem.length) {
                    productCurrentItem = prevItem.addClass('active');
                } else {
                    productCurrentItem = productItem.last().addClass('active');
                }

                calcProductHeight();
                animateContentColor();
            });

            // Ripple
            $('[ripple]').on('click', function(e) {
                var rippleDiv = $('<div class="ripple" />'),
                    rippleSize = 60,
                    rippleOffset = $(this).offset(),
                    rippleY = e.pageY - rippleOffset.top,
                    rippleX = e.pageX - rippleOffset.left,
                    ripple = $('.ripple');

                rippleDiv.css({
                    top: rippleY - (rippleSize / 2),
                    left: rippleX - (rippleSize / 2),
                    background: $(this).attr("ripple-color")
                }).appendTo($(this));

                window.setTimeout(function() {
                    rippleDiv.remove();
                }, 1900);
            });
        });
    </script>
    <script src="../assets/js/magnific-popup-options.js"></script>
    <!-- Main JS (Do not remove) -->
    <script src="../assets/js/main-theme-1.js"></script>
    <script type="text/javascript">
        // 08 16, 2020 09:00:00
        var countDownDate = new Date("<?= date_format($tanggal, 'm d, Y ') . $data['jam_akad_mulai'] ?>").getTime();
        var x = document.getElementById("myAudio");
        var audio = 1;
        var xAudio = 1;

        function playAudio() {
            x.play();
            <?php if ($data['scroll'] == 1) { ?>
                $('html, body').animate({
                    scrollTop: $("#footer").offset().top
                }, <?= $data['scrollfast'] ?>);
            <?php } ?>
            audio = 1
        }

        function simpanyes() {
            $(".loading").show();
            var harapan = $('#harapan').val();
            var nama = $('#nama').val();
            if ($.trim(nama) == '') {
                alert("Nama Masih Kosong !!");
                $('#nama').focus();
                return false;
            } else if ($.trim(harapan) == '') {
                alert("Harapan Masih Kosong !!");
                $('#harapan').focus();
                return false;
            }

            var nama = $("#nama").val();
            var id = $("#id").val();
            var keluarga = $("#siapa").val();
            var ucapan = $("#harapan").val();
            var hadir = $("#hadir").val();
            var url = '<?= base_url() ?>inv/insert';
            var string = $('#isi_harapan').serialize();
            console.log(string);
            $.ajax({
                type: "POST",
                url: url,
                data: {
                    name: nama,
                    id: id,
                    email: keluarga,
                    notes: ucapan,
                    hadir: hadir
                },
                success: function(data) {
                    // $(".loading").hide();
                    console.log(data)
                    if (data == '1') {
                        $("#loader").hide();
                        $("#success").slideDown("slow");
                        setTimeout(function() {
                            $("#success").slideUp("slow");
                        }, 3000);
                        location.reload(true).delay(1000);
                    } else {
                        $("#loader").hide();
                        $("#error").slideDown("slow");
                        setTimeout(function() {
                            $("#error").slideUp("slow");
                        }, 3000);
                        $("#loader").hide();
                        $(".button-submit").show();
                    }
                },
                error: function() {
                    $(".loading").hide();
                    $("#loader").hide();
                    $(".button-submit").show();
                    $("#error").slideDown("slow");
                    setTimeout(function() {
                        $("#error").slideUp("slow");
                    }, 3000);
                }
            });

        }

        function togleAudio() {
            if (audio == 1) {
                console.log(audio)
                x.pause();
                audio = 2;
                $(".play").show();
                $(".pause").hide();
            } else {
                console.log(audio)
                x.play();
                audio = 1
                $(".play").hide();
                $(".pause").show();
            }

        }
        $(document).ready(function() {
            $("#over-lay").click(function() {
                $("#over-lay").fadeOut(650);
            });
            // 
            $("#music").autoplay;
            $(".fixed").click(function() {
                $('html, body').stop();
                var nilai = 0;
                $('html, body').animate({
                    scrollTop: $(".forscroll").offset().top
                }, 1000);
                // alert('ss');
                $(this).fadeOut("slow");
            })
        });
    </script>
</body>

</html>