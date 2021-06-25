<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-177921888-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-177921888-1');
    </script>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Page Title -->
    <title>Wedding &mdash; <?= $data['nama_p'] ?> & <?= $data['nama_l'] ?> </title>
    <link rel="shortcut icon" href="<?= base_url() ?>/assets/images/favicon.png" type="image/png">
    <!-- Icon fonts -->
    <link href="<?= base_url() ?>assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/flaticon.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url() ?>assets/css/bootstrap.css" rel="stylesheet">

    <!-- Plugins for this template -->
    <link href="<?= base_url() ?>assets/css/animate.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/owl.carousel.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/owl.theme.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/slick.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/slick-theme.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/owl.transitions.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/jquery.fancybox.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?= base_url() ?>assets/css/style-thema-2.css" rel="stylesheet">
    <style>
        #over-lay {
            position: fixed;
            width: 100vw;
            height: 100vh;
            background-color: rgba(0, 0, 0, 0.7);
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: block;
            font-size: 16px;
            margin: 0px;
            cursor: pointer;
            z-index: 999;
            /* display: none; */
            padding-top: 352px;
            <?php if ($data['id_pernikahan'] != '3') { ?>
            background-image: url("<?= base_url() ?>assets/images/cover_black02.jpg");
            color: black !important;
            <?php } ?>
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
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

        <?php if ($data['id_pernikahan'] == '10') { ?>
        @media (max-width: 991px){
        	.hero .slide-item {
        		background-position: -187px center !important;
        	}
        }
    	<?php } ?>

    </style>
</head>

<body id="home">

    <!-- start page-wrapper -->
    <div class="page-wrapper">

        <!-- start preloader -->
        <div class="preloader" style="z-index: 9999;">
            <div class="inner">
                <span class="icon"><i class="fi flaticon-two"></i></span>
            </div>
        </div>
        <div onclick="playAudio()" type="button" id="over-lay">
            <div style="margin:0 auto;">
                <?php if ($data['id_pernikahan'] != '3') { ?>
                <img src="<?= base_url() ?>assets/images/bg-penerima.png" style="width: 170px;">
                <?php } ?>
                <div class="tapfp" style="margin-top: -96px; font-family: 'Great Vibes', cursive;"><?= substr($data['panggilan_p'], 0, 1) ?> & <?= substr($data['panggilan_l'], 0, 1) ?></div>
                <?php if ($tujuan) { ?>
                    <div style="text-align:center; margin-top: 80px;">Kepada Yth :</div>
                    <div style="text-align:center;font-size: 16px;font-weight: bold;font-family: cursive;"><?= $tujuan ?></div>
                <?php } ?>
                <div style="text-align:center;font-size: 16px;margin-top: 80px;">Tap dimana saja</div>
            </div>
        </div>
        <!-- end preloader -->

        <!-- strat music-box -->
        <div class="music-box">
            <button class="music-box-toggle-btn" onclick="togleAudio()">
                <i class="play fa fa-music"></i>
                <i class="pause fa fa-pause" style="display: none;"></i>
            </button>

            <audio autoplay loop id="myAudio">
                <source src="<?= base_url() ?>assets/music/<?= $data['music'] ?>" type="audio/mpeg">
                Your browser does not support the audio element.
            </audio>
        </div>
        <!-- end music box -->


        <!-- start of hero -->
        <section class="hero">
            <div class="hero-slider hero-slider-s1">
                <?php foreach ($gambar as $it) {

                    if ($it['jenis'] == '1') { ?>
                        <div class="slide-item">
                            <img src="<?= $it['gambar'] ?>" alt class="slider-bg">
                        </div>

                <?php }
                    switch ($it['jenis']) {
                        case '97':
                            $brid = $it['gambar'];
                            break;
                        case '98':
                            $groom = $it['gambar'];
                            break;
                        case '2':
                            $gambar2 = $it['gambar'];
                            break;
                        case '3':
                            $gambar3 = $it['gambar'];
                            break;
                        case '4':
                            $gambar4 = $it['gambar'];
                            break;
                    }
                } ?>
            </div>
            <div class="wedding-announcement">
                <div class="couple-name-merried-text">
                    <h2 class="wow slideInUp" data-wow-duration="1s"><?= $data['panggilan_p'] ?> &amp; <?= $data['panggilan_l'] ?></h2>
                    <div class="married-text wow fadeIn" data-wow-delay="1s">
                        <h4 class="">
                            <span class=" wow fadeInUp" data-wow-delay="1.05s">W</span>
                            <span class=" wow fadeInUp" data-wow-delay="1.10s">e</span>
                            <span class=" wow fadeInUp" data-wow-delay="1.15s">'</span>
                            <span class=" wow fadeInUp" data-wow-delay="1.20s">r</span>
                            <span class=" wow fadeInUp" data-wow-delay="1.25s">e</span>
                            <span>&nbsp;</span>
                            <span class=" wow fadeInUp" data-wow-delay="1.30s">g</span>
                            <span class=" wow fadeInUp" data-wow-delay="1.35s">e</span>
                            <span class=" wow fadeInUp" data-wow-delay="1.40s">t</span>
                            <span class=" wow fadeInUp" data-wow-delay="1.45s">t</span>
                            <span class=" wow fadeInUp" data-wow-delay="1.50s">i</span>
                            <span class=" wow fadeInUp" data-wow-delay="1.55s">n</span>
                            <span class=" wow fadeInUp" data-wow-delay="1.60s">g</span>
                            <span>&nbsp;</span>
                            <span class=" wow fadeInUp" data-wow-delay="1.65s">m</span>
                            <span class=" wow fadeInUp" data-wow-delay="1.70s">a</span>
                            <span class=" wow fadeInUp" data-wow-delay="1.75s">r</span>
                            <span class=" wow fadeInUp" data-wow-delay="1.80s">r</span>
                            <span class=" wow fadeInUp" data-wow-delay="1.85s">i</span>
                            <span class=" wow fadeInUp" data-wow-delay="1.90s">e</span>
                            <span class=" wow fadeInUp" data-wow-delay="1.95s">d</span>

                        </h4>
                    </div>
                    <!-- <i class="fa fa-heart"></i> -->
                </div>

                <div class="save-the-date">
                    <h4>Save the date</h4>
                    <span class="date"><?= date_format($tanggal, 'd') . ' . ' . $bulan . ' . ' . date_format($tanggal, 'Y') ?></span>
                </div>
            </div>
        </section>
        <!-- end of hero slider -->

        <!-- Start header -->
        <header id="header" class="site-header header-style-1">
            <nav class="navigation navbar navbar-default">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="open-btn">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="couple-logo">
                            <h1><a href="#home"><?= substr($data['panggilan_p'], 0, 1) ?> <i class="fi flaticon-shape-1"></i> <?= substr($data['panggilan_l'], 0, 1) ?></a></h1>
                        </div>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse navbar-right navigation-holder">
                        <button class="close-navbar"><i class="fa fa-close"></i></button>
                        <ul class="nav navbar-nav">
                            <li><a href="#home">Home</a></li>
                            <li><a href="#couple">Couple</a></li>
                            <!-- <li><a href="#story">Story</a></li> -->
                            <li><a href="#events">Events</a></li>
                            <!-- <li><a href="#people">People</a></li> -->
                            <li><a href="#message">Messages</a></li>
                            <li><a href="#gallery">Gallery</a></li>
                        </ul>
                    </div><!-- end of nav-collapse -->
                </div><!-- end of container -->
            </nav>
        </header>
        <!-- end of header -->


        <!-- start wedding-couple-section -->
        <section class="wedding-couple-section section-padding" id="couple">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
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
                        <div class="gb groom">
                            <div class="img-holder wow fadeInLeftSlow">
                                <img src="<?= $groom ?>" alt>
                            </div>
                            <div class="details">
                                <div class="details-inner">
                                    <h3><?= $data['panggilan_l'] ?></h3>
                                    <p><?= $tentang_l ?></p>
                                    <span class="signature"><?= $data['nama_l'] ?></span>
                                    <ul class="social-links">
                                        <li><a href="<?= $fb_l ?>"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="<?= $ig_l ?>"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="gb bride">
                            <div class="details">
                                <div class="details-inner">
                                    <h3><?= $data['panggilan_p'] ?></h3>
                                    <p><?= $tentang_p ?></p>
                                    <span class="signature"><?= $data['nama_p'] ?></span>
                                    <ul class="social-links">
                                        <li><a href="<?= $fb_p ?>"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="<?= $ig_p ?>"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="img-holder wow fadeInRightSlow">
                                <img src="<?= $brid ?>" alt>
                            </div>
                        </div>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end wedding-couple-section -->


        <!-- start count-down-section -->
        <section class="count-down-section section-padding parallax" data-bg-image="<?= $gambar2 ?>
        " data-speed="7">
            <div class="container">
                <div class="row">
                    <div class="col col-md-4">
                        <h2><span>We are waiting for.....</span> The adventure</h2>
                    </div>
                    <div class="col col-md-7 col-md-offset-1">
                        <div class="count-down-clock">
                            <div id="clock">

                            </div>
                        </div>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end count-down-section -->

        <!-- start events-section -->
        <section class="events-section section-padding" id="events">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="section-title">
                            <div class="vertical-line"><span><i class="fi flaticon-two"></i></span></div>
                            <h2>Wedding events</h2>
                        </div>
                    </div>
                </div> <!-- end section-title -->

                <div class="row">
                    <div class="col col-lg-10 col-lg-offset-1">
                        <div class="event">
                            <div class="img-holder">
                                <img src="<?= base_url() ?>assets/images/wed-ceremony.jpg" alt class="img img-responsive">
                            </div>
                            <div class="details">
                                <h3>Akad Nikah</h3>
                                <ul>
                                    <li><i class="fa fa-map-marker"></i><?= $data['lokasi_akad'] ?></li>
                                    <li><i class="fa fa-clock-o"></i> <?php echo date_format($tanggal_akad, 'd') . ' ' . $bulan_akad . ' ' . date_format($tanggal_akad, 'Y') . ', ' . substr($data['jam_akad_mulai'], 0, 5);
                                    if(substr($data['jam_akad_selesai'], 0, 5) >= "23:00:00"){
                                        echo ' - Selesai';
                                    }else if(substr($data['jam_akad_selesai'], 0, 5) == ""){

                                    }else{
                                        echo ' - ' . substr($data['jam_akad_selesai'], 0, 5);
                                    }
                                       ?>
                                    </li>
                                </ul>
                                <p>Tanpa mengurangi rasa hormat, kami memohon kepada sahabat, teman-teman dan saudara sekalian untuk memberikan doa restu pada pelaksanaan akad nikah kami</p>
                                <!-- <p>Turut mengundang teman-teman, sahabat dan keluarga menyaksikan pengesahan kisah cinta Kami yang begitu indah dalam resepsi pernikahan Kami</p> -->
                                <?php if($data['id_pernikahan'] != '13'){ ?>
                                <a class="see-location-btn popup-gmaps" href="<?= $data['link_map'] ?>">
                                    Lihat Peta Lokasi <i class="fa fa-angle-right"></i>
                                </a>
                            <?php } else{ ?>
                                <a class="see-location-btn popup-gmaps" href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.2349849491666!2d110.46229561477328!3d-6.981574094956428!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNsKwNTgnNTMuNyJTIDExMMKwMjcnNTIuMSJF!5e0!3m2!1sen!2sid!4v1601392040552!5m2!1sen!2sid">
                                    Lihat Peta Lokasi <i class="fa fa-angle-right"></i>
                                </a>
                            <?php } ?>
                            </div>
                        </div>
                        <?php if ($data['lokasi_resepsi'] == '') {
                        } else {
                        ?>
                            <div class="event">
                                <div class="img-holder">
                                    <img src="<?= base_url() ?>assets/images/venue.jpg" alt class="img img-responsive">
                                </div>
                                <div class="details">
                                    <h3>Wedding party</h3>
                                    <ul>
                                        <li><i class="fa fa-map-marker"></i><?= $data['lokasi_resepsi'] ?></li>
                                        <li><i class="fa fa-clock-o"></i> <?php echo date_format($tanggal, 'd') . ' ' . $bulan . ' ' . date_format($tanggal, 'Y') . ', ' . substr($data['jam_resepsi_mulai'], 0, 5);
                                        

                                            if(substr($data['jam_resepsi_selesai'], 0, 5) >= "23:00:00"){
                                                echo ' - Selesai';
                                            } else if(substr($data['jam_resepsi_selesai'], 0, 5) == ""){

                                            }else{
                                                echo ' - ' . substr($data['jam_resepsi_selesai'], 0, 5);
                                            }
                                           ?></li>
                                    </ul>
                                    <p>Turut mengundang teman-teman, sahabat dan keluarga menyaksikan pengesahan kisah cinta Kami yang begitu indah dalam resepsi pernikahan Kami</p>
                                    <a class="see-location-btn popup-gmaps" href="<?= $data['link_map'] ?>">
                                        Lihat Peta Lokasi <i class="fa fa-angle-right"></i>
                                    </a>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end events-section -->

        <!-- start cta -->
        <section class="cta section-padding parallax" data-bg-image="<?= $gambar3 ?>" data-speed="7">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <h2><span>We are going to...</span> Celebrate Our Love</h2>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end cta -->

        <!-- start rsvp-section -->
        <section class="rsvp-section section-padding parallax" data-bg-image="images/rsvp-bg.jpg" data-speed="7" id="rsvp">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="section-title-white">
                            <div class="vertical-line"><span><i class="fi flaticon-two"></i></span></div>
                            <h2>Wishes</h2>
                        </div>
                    </div>
                </div> <!-- end section-title -->

                <div class="row content">
                    <div class="col col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                        <!-- <p>Please reserve before December 16th, 2017.</p> -->
                        <form id="rsvp-form" class="form validate-rsvp-form row" method="post">
                            <div class="col col-sm-6">
                                <input type="text" name="name" class="form-control" placeholder="Your Name*">
                                <input type="hidden" name="id" class="form-control" readonly value="<?= $data['id_pernikahan']; ?>">
                            </div>
                            <div class="col col-sm-6">
                                <input type="email" name="email" class="form-control" placeholder="Your Email*">
                            </div>
                            <?php if($data['id_pernikahan'] == '13'){ ?>
                            <div class="col col-sm-6">
                                <select class="form-control" name="hadir">
                                    <option disabled="" selected="">Select Attendance</option>
                                    <option value="1">I Will Attend</option>
                                    <option value="0">Sorry, I can't</option>
                                </select>
                            </div>
                        <?php } ?>
                            <div class="col col-sm-12">
                                <textarea class="form-control" name="notes" placeholder="Your Message*"></textarea>
                            </div>
                            <div class="col col-sm-12 submit-btn">
                                <button type="submit" class="submit">Send Your Wishes</button>
                                <span id="loader"><i class="fa fa-refresh fa-spin fa-3x fa-fw"></i></span>
                            </div>
                            <div class="col col-md-12 success-error-message">
                                <div id="success">Thank you</div>
                                <div id="error"> Error occurred while sending email. Please try again later. </div>
                            </div>
                        </form>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end rsvp-section -->

        <!-- start gift-registration-section -->
        <section class="gift-registration-section section-padding" id="message">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="section-title">
                            <div class="vertical-line"><span><i class="fi flaticon-two"></i></span></div>
                            <h2>Sweet Messages</h2>
                        </div>
                    </div>
                </div> <!-- end section-title -->

                <div class="row content">
                    <div class="col col-lg-10 col-lg-offset-1">
                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure, cupiditate, repudiandae. A ab sit laboriosam quis distinctio dignissimos, nemo cum sed hic, deleniti maiores rem iste labore commodi perferendis cumque.repudiandae. A ab sit laboriosam quis distinctio dignissimos, nemo cum sed hic.</p> -->

                        <div class="gif-registration-slider">
                            <?php foreach ($ucapan as $item) { ?>
                                <div class="">
                                    <blockquote>
                                        <span class="quote"><span><i class="icon-quote-left"></i></span></span>
                                        <p>&ldquo; <?= $item['ucapan'] ?>&rdquo;</p>
                                    </blockquote>
                                    <p class="author">-- <?= $item['oleh'] ?> --</p>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end gift-registration-section -->

        <!-- start gallery-section -->
        <?php if($gallery){ ?>
        <section class="gallery-section section-padding" id="gallery">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="section-title">
                            <div class="vertical-line"><span><i class="fi flaticon-two"></i></span></div>
                            <h2>Our gallery</h2>
                        </div>
                    </div>
                </div> <!-- end section-title -->

                <div class="row">
                    <div class="col col-xs-12 sortable-gallery">
                        <div class="gallery-filters">
                            <ul>
                                <li><a data-filter="*" href="#" class="current">All</a></li>
                                <!-- <li><a data-filter=".wedding" href="#">Wedding</a></li>
                                <li><a data-filter=".ceremony" href="#">Ceremony</a></li>
                                <li><a data-filter=".party" href="#">Party</a></li> -->
                            </ul>
                        </div>

                        <div class="gallery-container gallery-fancybox masonry-gallery">
                            <?php for ($mulai1 = 0; $mulai1 < count($gallery); $mulai1++) { ?>
                                <div class="grid wedding">
                                    <a href="<?= $gallery[$mulai1]['gambar'] ?>" class="fancybox" data-fancybox-group="gall-1">
                                        <img src="<?= $gallery[$mulai1]['gambar'] ?>" alt class="img img-responsive">
                                    </a>
                                </div>
                            <?php } ?>


                            <!-- <div class="grid ceremony"> -->
                            <!--  <a href="images/gallery/img-8.jpg" class="fancybox" data-fancybox-group="gall-1">
                                    <img src="images/gallery/img-8.jpg" alt class="img img-responsive">
                                </a> -->
                            <!-- <a href="https://www.youtube.com/embed/XSGBVzeBUbk?autoplay=1" data-type="iframe" class="video-play-btn">
                                    <img src="images/gallery/img-8.jpg" alt class="img img-responsive">
                                    <i class="fa fa-play"></i>
                                </a> -->
                            <!-- </div> -->
                        </div>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
    <?php } ?>
        <!-- end gallery-section -->
        <?php if ($data['teks_protokol'] == '1') { ?>
            <section class="gift-registration-section section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col col-xs-12">
                            <div class="section-title">
                                <div class="vertical-line"><span><i class="fi flaticon-two"></i></span></div>
                                <h2>Protokol Kesehatan</h2>
                            </div>
                        </div>
                    </div> <!-- end section-title -->

                    <div class="row content">
                        <div class="col col-lg-10 col-lg-offset-1">
                            <p>Ikuti protokol kesehatan dengan selalu mencuci tangan, berjaga jarak dan selalu menggunakan masker. Terimakasih.</p>

                        </div> <!-- end container -->
                    </div>
                </div>
            </section>
        <?php } ?>
        <?php if ($data['teks_protokol'] == '2') { ?>
            <section class="gift-registration-section section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col col-xs-12">
                            <div class="section-title">
                                <div class="vertical-line"><span><i class="fi flaticon-two"></i></span></div>
                                <h2>Protokol Kesehatan</h2>
                            </div>
                        </div>
                    </div> <!-- end section-title -->

                    <div class="row content">
                        <div class="col col-lg-10 col-lg-offset-1">
                           <img class="img-responsive" src="<?= base_url() ?>assets/images/protokol.jpg">
                        </div> <!-- end container -->
                    </div>
                </div>
            </section>
        <?php } ?>
        <!-- start footer -->
        <footer class="site-footer" style="background-image: url(<?= $gambar4 ?>);">
            <div class="back-to-top">
                <a href="#" class="back-to-top-btn"><span><i class="fi flaticon-cupid"></i></span></a>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <h2>Forever and Always Our Love</h2>
                        <!-- <span>- Mick (The groom)</span> -->
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </footer>
        <!-- end footer -->
    </div>
    <!-- end of page-wrapper -->



    <!-- All JavaScript files
    ================================================== -->
    <script src="<?= base_url() ?>assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>

    <!-- Plugins for this template -->
    <script src="<?= base_url() ?>assets/js/jquery-plugin-collection.js"></script>

    <!-- Custom script for this template -->
    <script>
        var url = '<?= base_url() ?>inv/insert';
        var tanggal;
        var x = document.getElementById("myAudio");
        tanggal = '<?= date_format($tanggal, 'Y/m/d') ?>';
        var audio = 0;

        function playAudio() {
            x.play();
            audio = 1
            $("#over-lay").fadeOut(650);
            $(".play").hide();
            $(".pause").show();

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
    </script>
    <script src="<?= base_url() ?>assets/js/main-theme-2.js"></script>
</body>

<!-- Mirrored from irsfoundation.com/tf/templates/wedding/lovely-wedding/lovely-wedding/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 Jul 2020 02:42:32 GMT -->

</html>