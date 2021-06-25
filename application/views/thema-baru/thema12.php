<!DOCTYPE html>
<html>
    <!-- Mirrored from invian.id/Zorra-Ubi/?untuk=invian by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 May 2021 02:54:41 GMT -->
    <!-- Added by HTTrack -->
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <!-- /Added by HTTrack -->
    <head>
    <?php if ($tujuan == "") {
        $tujuan = "Sahabat";
    } ?>
    <?php $gambar1 = "";

    foreach ($gambar as $it) {

        if ($it['jenis'] == '1') {
            $gambar1 .= $it['gambar'] . ' ';
        }
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
    }
    $gambar1 = explode(' ', $gambar1);
    $gambar1 = array_filter($gambar1);
    $slide = "";
    for ($i = 0; $i <= count($gambar1) - 1; $i++) {
        if ($i < count($gambar1) - 1) {
            $slide .= '"' . $gambar1[$i] . '", ';
        } else {
            $slide .= '"' . $gambar1[$i] . '"';
        }
    }
    ?>
        <title> Official Zorra & Ubai | By Invian.id&trade; </title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta name="viewport" content="width=device-width, iniRatihl-scale=1, maximum-scale=1, user-scalable=0">
        <meta name="apple-mobile-web-app-capable" content="yes"/>
        <meta name="apple-mobile-web-app-status-bar-style" content="black"/>
        <meta name="HandheldFriendly" content="true">
        <meta name="description" content="Official Wedding Website Zorra Parwina, Apt with Ubaida Hasrilsyah">
        <meta property="og:title" content="Official Wedding Website Zorra & Ubai" />
        <meta name="csrf-token" content="3af309b6c8b294cee242aa3bf6f539870867f02bf8807cc5e8e5a880d91bf81f">
        <meta property="og:url" content="https://invian.id/Zorra-Ubai/" />
        <meta property="og:description" content=" Ubaida Hasrilsyah">
        <meta property="og:image" content="../../i.imgur.com/KFCIZk6.jpg">
        
        <link href="img/love.png" rel="icon" type="image/png" sizes="192x192">
        <link href="img/love.png" rel="icon" type="image/png" sizes="96x96">
        <link href="img/love.png" rel="icon" type="image/png" sizes="32x32">
        <link href="img/love.png" rel="icon" type="image/png" sizes="16x16">
        
        <link rel="stylesheet" href="<?=  base_url() ?>assets/themes/themes12/fonts/font/css/all.css">
        <link rel="stylesheet" href="<?=  base_url() ?>assets/themes/themes12/css/design.css">
        <link rel="stylesheet" type="text/css" href="<?=  base_url() ?>assets/themes/themes12/slider/dist/zoomslider.css">
        <link rel="stylesheet" href="<?=  base_url() ?>assets/themes/themes12/css/aos.css">
        <!-- <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet"> -->
        <link rel="stylesheet" href="<?=  base_url() ?>assets/themes/themes12/css/swiper-bundle.min.css">
        <!-- <script src="../../code.jquery.com/jquery-3.3.1.min.js"></script> -->
        <script src="<?= base_url() ?>assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="<?=  base_url() ?>assets/themes/themes12/js/jquery-migrate-1.4.1.min.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>assets/js/vendor/modernizr-2.6.2.min.js"></script>
        <script src="<?=  base_url() ?>assets/themes/themes12/js/swiper-bundle.min.js"></script><!-- <script src="./js/jquery.js"></script> -->
        <script src="<?= base_url() ?>assets/js/wow.min.js"></script>
        <script type="text/javascript"> new WOW().init();</script>
    </head>
    <body>
        <!-- popup --> 
        <div id="popup">
            <div class="popup-1">
                <center>
                    <div class="popup-2">
                        <i class="fas fa-heart"></i> 
                        <p> <span class="popup-2-1"> Wedding Announcement </span> </p>
                        <img class="mempelai" src="<?=  $gambar2 ?>"> 
                        <p> <b>Dear <?= $tujuan ?>,</b> </p>
                        Apakah Anda ingin membuka Undangan ini ? 
                    </div>
                    <div class="hide play" onclick="play()"> Buka Undangan </div>
                    <div class="popup-3">
                        <!-- <p><i class="fas fa-music"></i> Westlife - I Wanna Grow Old With You</p> -->
                        <!-- <script src="https://www.youtube.com/iframe_api"></script> --> 
                        <div id="video" style="display:none"></div>
                        <a href="http://invian.id/" target="_blank" title="invian.id">
                            <div class="brand"> <img src="<?=  base_url() ?>assets/images/logo-2.svg" /> </div>
                        </a>
                        <!-- <a href="https://invian.id" class="popup-3-1"> www.invian.id </a> --> 
                    </div>
                </center>
            </div>
        </div>
        <!-- header_desktop --> 
        <div id="header">
            <div class="container">
                <div id="header-1"> <span id="header-1-1" class="wow zoomIn"><?= $data['panggilan_p'] ?> | <?= $data['panggilan_l'] ?></span><br> <span id="header-1-2" class="wow zoomIn">The Wedding</span> </div>
                <div id="header-2">
                    <a class="c-banner"> Home </a> <a class="c-quote"> Quote </a> <a class="c-wedding"> Wedding </a> <a class="c-reception"> Reception </a> <!-- <a class="c-gallery"> Gallery </a> --> <a class="c-location"> Location </a> <a class="c-guest"> Guest Book </a> 
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <!-- header_mobile --> 
        <div id="header-2-1">
            <div id="menu-2">
                <a class="c-banner menu-2">
                    <div class="menu-1"> Home </div>
                </a>
                <a class="c-quote menu-2">
                    <div class="menu-1"> Quote </div>
                </a>
                <a class="c-wedding menu-2">
                    <div class="menu-1"> Wedding </div>
                </a>
                <a class="c-reception menu-2">
                    <div class="menu-1"> Reception </div>
                </a>
                <!-- <a class="c-gallery menu-2"> <div class="menu-1"> Gallery </div> </a> --> 
                <a class="c-location menu-2">
                    <div class="menu-1"> Location </div>
                </a>
                <a class="c-guest menu-2">
                    <div class="menu-1"> Guest Book </div>
                </a>
            </div>
            <a id="menu-1">
                <div class="menu-1"> <i class="fas fa-heart"></i> </div>
            </a>
        </div>
        <!-- on/off --> 
        <div id="on" onClick="play()" class="music"> <img src="<?=  base_url() ?>assets/themes/themes12/img/off.png"> </div>
        <div id="off" onClick="pause()" class="music"> <img src="<?=  base_url() ?>assets/themes/themes12/img/on.png"> </div>
        <!-- audio -->
         <audio id="audio" loop> <source src="<?= base_url() ?>assets/music/<?= $data['music'] ?>" type="audio/mpeg"> </audio> 

        <!-- slider --> 
        <div id="video">
            <link rel="stylesheet" type="text/css" href="<?=  base_url() ?>assets/themes/themes12/vendor/particle/particles.css">
            <div id="particles-js"></div>
            <div id="particles-js2"></div>
            <script src="<?=  base_url() ?>assets/themes/themes12/vendor/particle/particles.js"></script> 
            <script src="<?=  base_url() ?>assets/themes/themes12/vendor/particle/app.js"></script> <!-- image --> <!-- <img src="./img/slider-mobile.jpg" alt="" class="src"> --> <!-- video (controls) --> 
            <video id="myvideo" muted playsinline loop autoplay>
                <!-- <source src="<?=  base_url() ?>assets/themes/themes12/vid/Zorra_Opening.mp4" type="video/mp4"> -->
                <source src="<?=  base_url() ?>assets/video/dianalwan.mp4" type="video/mp4">
            </video>
        </div>
        <!-- demo1_desktop --> 
        <div id="demo-2" class="sliding-2" data-zs-src='[""]' data-zs-overlay="dots">
            <div class="demo-inner-content">
                <div class="img-bismillah"> <img src="<?=  base_url() ?>assets/themes/themes12/img/bismillah.png" /> </div>
                <div class="slide-2-1" data-aos="fade-up">Maha suci Allah SWT yang telah menciptakan Mahluk-Nya <br> berpasangan-pasangan, Ya Allah SWT perkenankanlah Kami:</div>
                <div class="slide-2-2">
                    <div id="days" class="slide-2-3-1" data-aos="fade-up" data-aos-delay="100"> <br> Days</div>
                    <div id="hours" class="slide-2-3-1" data-aos="fade-up" data-aos-delay="200"> <br> Hours</div>
                    <div id="minutes" class="slide-2-3-1" data-aos="fade-up" data-aos-delay="300"> <br> Minutes</div>
                    <div id="seconds" class="slide-2-3-1" data-aos="fade-up" data-aos-delay="400"> <br> Seconds</div>
                    <div class="clear"></div>
                </div>
               <!--  <a href="https://calendar.google.com/calendar/r/eventedit?text=Zorra+%26+Ubai+Hari+Resepsi+Nikah&amp;dates=20201219T090000/20201219T130000&amp;ctz=Asia/Jakarta&amp;details=Kami+akan+sangat+senang+melihat+wajah+cerah+Anda+di+pernikahan+kami&amp;location=https://goo.gl/maps/rL4QDEFmMfSsL1kAA&amp;pli=1&amp;uid=1521339627addtocalendar&amp;sf=true&amp;output=xml">
                    <div class="slide-2-3"> Simpan Tanggal</div>
                </a> -->
                <div class="scroll">Scroll Now <i class="fas fa-arrow-down"></i></div>
            </div>
        </div>
        <!-- demo1_mobile--> 
        <div id="demo-1" class="sliding" data-zs-src='[""]' data-zs-overlay="dots">
            <!-- <div id="demo-1" class="sliding" data-zs-src='["./img/ayat.jpg"]' data-zs-overlay="dots"> --> 
            <div class="demo-inner-content">
                <div class="img-bismillah"> <img src="<?=  base_url() ?>assets/themes/themes12/img/bismillah.png" /> </div>
                <div class="slide-2-1" data-aos="fade-up">Maha suci Allah SWT yang telah menciptakan Mahluk-Nya <br> berpasangan-pasangan, Ya Allah SWT perkenankanlah Kami:</div>
                <div class="slide-2-2">
                    <div id="day" class="slide-2-3-1" data-aos="fade-up" data-aos-delay="100"> <br> Days</div>
                    <div id="hour" class="slide-2-3-1" data-aos="fade-up" data-aos-delay="200"> <br> Hours</div>
                    <div id="minute" class="slide-2-3-1" data-aos="fade-up" data-aos-delay="300"> <br> Minutes</div>
                    <div id="second" class="slide-2-3-1" data-aos="fade-up" data-aos-delay="400"> <br> Seconds</div>
                    <div class="clear"></div>
                </div>
                <a href="https://calendar.google.com/calendar/r/eventedit?text=Zorra+%26+Ubai+Hari+Resepsi+Nikah&amp;dates=20201219T090000/20201219T130000&amp;ctz=Asia/Jakarta&amp;details=Kami+akan+sangat+senang+melihat+wajah+cerah+Anda+di+pernikahan+kami&amp;location=https://goo.gl/maps/rL4QDEFmMfSsL1kAA&amp;pli=1&amp;uid=1521339627addtocalendar&amp;sf=true&amp;output=xml">
                    <div class="slide-2-3">Simpan Tanggal</div>
                </a>
                <div class="scroll">Scroll Now <i class="fas fa-arrow-down"></i></div>
            </div>
        </div>
        <!-- quote --> 
        <div id="quote">
            <div class="container">
                <div id="quotes">
                    <center>
                        <!-- <img src="./img/flowers-1.png"> --> 
                        <div class="quotes-2"> <img src="img/daun-kanan.png" alt=""> QS. Ar Rum 21 <img src="img/daun-kiri.png" alt=""> </div>
                        <div class="quotes-3" data-aos="fade-up"> &#10077; Dan di antara tanda-tanda kekuasaan-Nya ialah Dia menciptakan untukmu isteri-isteri dari jenismu sendiri, supaya kamu cenderung dan merasa tenteram kepadanya, dan dijadikan- Nya diantaramu rasa kasih dan sayang. Sesungguhnya pada yang demikian itu benar-benar terdapat tanda-tanda bagi kaum yang berfikir. &#10078; </div>
                        <div class="quotes-4" data-aos="fade-up"> (Ar-Rum: 21) </div>
                    </center>
                </div>
                <!-- <div id="quote-5" class="quote wow zoomIn"> <img src="#"> </div> --> 
                <div class="clear"></div>
            </div>
        </div>
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
        <!-- name --> 
        <div id="name">
            <div class="name-1" data-aos="fade-right">
                <h1><?= $data['panggilan_p'] ?></h1>
            </div>
            <div class="name-2 name-3">
                <span class="name-2-1" data-aos="fade-right" data-aos-delay="100">   <?= $data['nama_p'] ?> </span><br>
                <span class="name-2-2" data-aos="fade-right" data-aos-delay="200">  <?= $tentang_p ?> </span><br> 
                <!-- <span class="name-2-3 name-2-3-1" data-aos="fade-right" data-aos-delay="300"> Bapak Yusup Ahmadi<br>& Ibu Aah Parlina<br> </span>  -->
                <span class="name-2-3 name-2-3-1" data-aos="fade-right" data-aos-delay="400">
                    <a href="https://www.instagram.com/<?= $ig_p ?>/" target="_blank"><i class="fab fa-instagram"></i> @<?= $ig_p ?> </a> <!-- <a href="https://www.facebook.com/"><i class="fab fa-facebook-square"></i></a> --> 
                </span>
            </div>
            <div class="name-5 wow zoomIn"> <img src="<?=  base_url() ?>assets/themes/themes12/img/wanita.png"> </div>
            <div class="clear"></div>
            <div class="name-6 wow zoomIn"> <img src="<?=  base_url() ?>assets/themes/themes12/img/pria.png"> </div>
            <div class=" name-2 name-4">
                <span class="name-2-1" data-aos="fade-right" data-aos-delay="500"> <?= $data['nama_l'] ?> </span><br> 
                <span class="name-2-2" data-aos="fade-right" data-aos-delay="600"> <?= $tentang_l ?>  </span><br> 
                <span class="name-2-3 name-2-3-2" data-aos="fade-right" data-aos-delay="700">
                    <!-- Alm Bapak Hasrilsyah Zaini<br>& Alm Ibu Nia kurnia<br>Ibu kokom komaranisyah<br>  -->
                    <!-- <a href="https://www.facebook.com/"><i class="fab fa-facebook-square"></i></a> --> <a href="https://www.instagram.com/<?= $ig_l ?>/" target="_blank" data-aos="fade-right" data-aos-delay="800"> @<?= $ig_l ?> <i class="fab fa-instagram"></i> </a> 
                </span>
            </div>
            <div id="name-1-1" class="name-1" data-aos="fade-right" data-aos-delay="800">
                <h1><?= $data['panggilan_l'] ?></h1>
            </div>
            <div class="clear"></div>
        </div>
        <!-- reception --> 
        <div id="reception">
            <div id="reception-1" class="wow zoomIn">
                Save The Date 
                <div class="reception-1-border"></div>
            </div>
            <div id="reception-ex2"> Sabtu<span> 19.12 </span>2020 </div>
            <div id="reception-2" class="reception">
                <div class="reception-1 wow zoomIn">
                    <div class="reception-1-1"> <span id="dayss" class="reception-1-1-1"> </span> <br> Days </div>
                    <div class="reception-1-1"> <span id="hourss" class="reception-1-1-1"> </span> <br> Hours </div>
                    <div class="reception-1-1 reception-1-2"> <span id="minutess" class="reception-1-1-1"> </span> <br> Minutes </div>
                    <div class="reception-1-1 reception-1-2"> <span id="secondss" class="reception-1-1-1"> </span> <br> Seconds </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div id="reception-3" class="reception">
                <div class="reception-3 wow zoomIn">
                    <div class="reception-3-1"> Akad </div>
                    <div class="reception-3-2 reception-3-2-1 left"> Sabtu, 19 Desember 2020 </div>
                    <div class="reception-3-3"> <img src="<?=  base_url() ?>assets/themes/themes12/img/calender-white.svg"> </div>
                    <br> 
                    <div class="reception-3-2 reception-3-2-1"> Pukul 07.00 - 08.00 WIB </div>
                    <div class="reception-3-3"> <img src="<?=  base_url() ?>assets/themes/themes12/img/time-white.svg"> </div>
                    <br> 
                    <div class="reception-3-2"> <b>Masjid An-Nur, Desa Manislor<br>Jalaksana, Kabupaten Kuningan</b> </div>
                    <div class="reception-3-3"> <img src="<?=  base_url() ?>assets/themes/themes12/img/map-white.svg"> </div>
                    <div class="clear"></div>
                    <a href="https://calendar.google.com/calendar/r/eventedit?text=Zorra+%26+Ubai+Hari+Akad+Nikah&amp;dates=20201219T070000/20201219T080000&amp;ctz=Asia/Jakarta&amp;details=Kami+akan+sangat+senang+melihat+wajah+cerah+Anda+di+pernikahan+kami&amp;location=https://goo.gl/maps/xkb99kectLq6okH9A&amp;pli=1&amp;uid=1521339627addtocalendar&amp;sf=true&amp;output=xml">
                        <div class="reception-3-4">Simpan Tanggal Akad Nikah</div>
                    </a>
                </div>
            </div>
            <div id="reception-4" class="reception">
                <div class="reception-3 wow zoomIn">
                    <div class="reception-3-1"> Resepsi </div>
                    <div class="reception-3-3 reception-4-1"> <img src="<?=  base_url() ?>assets/themes/themes12/img/calender-white.svg"> </div>
                    <div class="reception-3-2 reception-3-2-1 reception-4-2"> Minggu, 20 Desember 2020 </div>
                    <div class="clear"></div>
                    <div class="reception-3-3 reception-4-1"> <img src="<?=  base_url() ?>assets/themes/themes12/img/time-white.svg"> </div>
                    <div class="reception-3-2 reception-3-2-1 reception-4-2"> Pukul 09.00 - 13.00 WIB </div>
                    <div class="clear"></div>
                    <div class="reception-3-3 reception-4-1"> <img src="<?=  base_url() ?>assets/themes/themes12/img/map-white.svg"> </div>
                    <div class="reception-3-2 reception-4-2"> <b>Gedung Fadhal Umar, Manislor<br>Kabupaten Kuningan</b> </div>
                    <div class="clear"></div>
                    <a href="https://calendar.google.com/calendar/r/eventedit?text=Zorra+%26+Ubai+Hari+Resepsi+Nikah&amp;dates=20201219T090000/20201219T130000&amp;ctz=Asia/Jakarta&amp;details=Kami+akan+sangat+senang+melihat+wajah+cerah+Anda+di+pernikahan+kami&amp;location=https://goo.gl/maps/rL4QDEFmMfSsL1kAA&amp;pli=1&amp;uid=1521339627addtocalendar&amp;sf=true&amp;output=xml">
                        <div class="reception-3-4">Simpan Tanggal Resepsi Nikah</div>
                    </a>
                </div>
            </div>
            <div id="reception-5" class="reception">
                <div class="reception-1 wow zoomIn">
                    <div class="reception-1-1"> <span id="minutesss" class="reception-1-1-1"> </span> <br> Minutes </div>
                    <div class="reception-1-1"> <span id="secondsss" class="reception-1-1-1"> </span> <br> Seconds </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div id="reception-6" class="reception">
                <div class="reception-6 wow zoomIn">
                    <div class="reception-6-1"> Do'a Bersama </div>
                    <div class="reception-6-2 reception-3-2-1 left"> Minggu, 20 Desember 2020 </div>
                    <div class="reception-6-3"> <img src="<?=  base_url() ?>assets/themes/themes12/img/calender-white.svg"> </div>
                    <br> 
                    <div class="reception-6-2 reception-6-2-1"> Pukul 13.30 s/d Selesai </div>
                    <div class="reception-6-3"> <img src="<?=  base_url() ?>assets/themes/themes12/img/time-white.svg"> </div>
                    <br> 
                    <div class="reception-6-2"> <b>Gedung Fadhal Umar, Manislor<br>Kabupaten Kuningan</b> </div>
                    <div class="reception-6-3"> <img src="<?=  base_url() ?>assets/themes/themes12/img/map-white.svg"> </div>
                    <div class="clear"></div>
                    <a href="https://calendar.google.com/calendar/r/eventedit?text=Zorra+%26+Ubai+Hari+Doa+Bersama&amp;dates=20201220T130000/20201220T230000&amp;ctz=Asia/Jakarta&amp;details=Kami+akan+sangat+senang+melihat+wajah+cerah+Anda+di+pernikahan+kami&amp;location=https://goo.gl/maps/rL4QDEFmMfSsL1kAA&amp;pli=1&amp;uid=1521339627addtocalendar&amp;sf=true&amp;output=xml">
                        <div class="reception-6-4">Simpan Tanggal Do'a Bersama</div>
                    </a>
                </div>
            </div>
            <!-- <div class="clear"></div> --> <!-- live_instagram --> <!-- <div class="container"> <div id="live-instagram-1"> Live On Instagram </div> <div id="live-instagram-2" class="live-instagram"> <div class="live-instagram-2"> <a href="https://www.instagram.com/zorraparwina/" class="href" target="_blank"> <button class="live-instagram-bt" data-aos="fade-right" data-aos-delay="600"> <img src="./img/ig.svg" class="center" alt=""> <span>@zorraparwina</span> </button> </a> </div> </div> <div id="live-instagram-3" class="live-instagram"> <div class="live-instagram-3" data-aos="fade-left" data-aos-delay="600"> <a href="https://www.instagram.com/ubai_hsrl/" class="href" target="_blank"> <button class="live-instagram-bt"> <img src="./img/ig.svg" class="center" alt=""> <span>@ubai_hsrl</span> </button> </a> </div> </div> </div> --> 
            <div class="clear"></div>
            <center>
                <div class="container">
                    <div id="reception-ex5 wow zoomIn">
                        &#10077; Merupakan suatu kehormatan dan kebahagiaan bagi kami apabila bapak/ibu/saudara/i berkenan hadir untuk memberikan doa restu nya &#10078; 
                        <p>Demi kenyamanan bersama, kami mengharapkan agar para tamu undangan yg hadir dapat menerapkan protokol kesehatan.</p>
                    </div>
                    <div class="covid19"> <img src="img/covid-19.png"> </div>
                    <div id="reception-ex6 wow zoomIn"> Atas perhatian dan pengertiannya, kami mengucapkan banyak terima kasih. </div>
                </div>
                <!-- <div class="muslim-icon"> <img src="./img/icon-muslim.png"> </div> --> 
            </center>
        </div>
        <!-- reception_covid19 --> <!-- <div id="reception-ex"> <div class="container"> <div id="reception-exwidth"> <div id="reception-ex1"> Save The Date <div class="reception-1-border"></div> </div> <div id="reception-ex2"> Sabtu<span> 19.12 </span>2020 </div> <div id="reception-ex3" data-aos="fade-up"> Akad Nikah </div> <div id="reception-2" class="reception"> <div class="reception-1"> <div class="reception-1-1" data-aos="fade-up" > <span id="dayss" class="reception-1-1-1"> </span> <br> Days </div> <div class="reception-1-1" data-aos="fade-up"> <span id="hourss" class="reception-1-1-1"> </span> <br> Hours </div> <div class="reception-1-1 reception-1-2" data-aos="fade-up"> <span id="minutess" class="reception-1-1-1"> </span> <br> Minutes </div> <div class="reception-1-1 reception-1-2" data-aos="fade-up"> <span id="secondss" class="reception-1-1-1"> </span> <br> Seconds </div> <div class="clear"></div> </div> </div> <div id="reception-5" class="reception"> <div class="reception-1"> <div class="reception-1-1" data-aos="fade-up"> <span id="minutesss" class="reception-1-1-1"> </span> <br> Minutes </div> <div class="reception-1-1" data-aos="fade-up"> <span id="secondsss" class="reception-1-1-1"> </span> <br> Seconds </div> <div class="clear"></div> </div> </div> <div class="clear"></div> <div id="reception-ex4"> <div class="date"> <div class="date-line" data-aos="fade-up" data-aos-delay="100"><img src="./img/calender-white.png">Sabtu, 19 Desember 2020</div> <div class="date-line" data-aos="fade-up" data-aos-delay="200"><img src="./img/time-white.png">Pukul 07.00 - 08.00 WIB</div> <div class="date-line" data-aos="fade-up" data-aos-delay="300"><img src="./img/map-white.png">-</div> </div> </div> <div id="reception-ex5" data-aos="fade-up"> Dengan tanpa mengurangi rasa hormat kepada Bapak/ Ibu semua, Kami bermaksud memohon doa restunya untuk pernikahan kami. Dikarenakan masih dalam masa pandemi Covid-19, dan demi mematuhi protokol kesehatan di tatanan hidup baru, kami melangsungkan akad nikah secara terbatas. </div> <div id="reception-ex6" data-aos="fade-up"> Atas perhatian dan pengertiannya, kami mengucapkan banyak terima kasih. </div> </div> </div> </div> --> <!-- location --> 
        <div id="location">
            <div class="container">
               <!--  <div class="location-1">
                    <div class="location-2">Lokasi&nbsp;</div>
                    <div class="location-2 location-3">Akad Nikah<i class="fas fa-map-marker-alt"></i></div>
                    <div class="clear"></div>
                </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15843.541675327233!2d108.4871549!3d-6.9043033!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x87ccf1b26695c37b!2sMasjid%20An-Nur!5e0!3m2!1sid!2sid!4v1607435945127!5m2!1sid!2sid" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"> </iframe> 
                <a href="https://goo.gl/maps/xkb99kectLq6okH9A">
                    <div class="location-5" data-aos="fade-right"> Google <span class="location-6"> Maps&nbsp; <i class="fas fa-location-arrow"></i> </span> </div>
                </a>
                <br>  -->
                <div class="location-1">
                    <div class="location-2">Lokasi&nbsp;</div>
                    <div class="location-2 location-3">Resepsi Nikah <i class="fas fa-map-marker-alt"></i></div>
                    <div class="clear"></div>
                </div>
                <iframe src="<?= $data['link_map_resepsi'] ?>" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"> </iframe> 
                <a href="<?= $data['gomap_resepsi'] ?>">
                    <div class="location-5" data-aos="fade-right"> Google <span class="location-6"> Maps&nbsp; <i class="fas fa-location-arrow"></i> </span> </div>
                </a>
            </div>
        </div>
        <!-- guest --> 
        <div id="guest">
            <div class="container">
                <div class="location-1" data-aos="fade-up">
                    <div class="location-2">Ucapan Do'a untuk</div>
                    <div class="location-2 location-3"><?= $data['panggilan_p'] ?> & <?= $data['panggilan_l'] ?> <i class="fas fa-address-book"></i></div>
                    <div class="clear"></div>
                </div>
                <div class="guest-1">
                    <form id="myForm" method="post">
                        <center>
                            <input class="wow zoomIn" id="nama" type="text" name="oleh" placeholder="Nama" value="" required><br>
                            <input type="hidden" id="id" name="id" placeholder="Name" value="<?= $data['id_pernikahan'] ?>" required>
                            <input class="wow zoomIn" id="keluarga" data-wow-delay="0.1s" type="text" name="keluarga" placeholder="Siapakah kamu? contoh: Keluarga mempelai"><br>
                            <select class="wow zoomIn" name="hadir" id="hadir">
                                <option disabled="" selected="">Pilih Kehadiran</option>
                                <option value="1">Saya akan hadir</option>
                                <option value="0">Maaf saya tidak bisa</option>
                            </select>
                            <textarea class="wow zoomIn" id="ucapan" data-wow-delay="0.2s" type="text" name="ucapan" placeholder="Pesan atau Ucapan doa" required></textarea>
                        </center>
                        <button class="" data-aos="fade-up" data-aos-delay="600" type="submit" name="submit">Selesai 💌</button> </div>
                </div>
                </form> 
            </div>
        </div>
        </div> <!-- comment --> 
        <div id="comment">
            <div class="container">
                <div class="comment-1">
                    <i class="fas fa-heart" style="color:#b66965;padding-bottom: 100p;margin-top: -5px;/* margin-top: 20px; */font-size: 40px;"></i> 
                    <div class='comment-1-1' data-aos="fade-up" data-aos-delay="100">Ucapan Do'a</div>
                    <div class="comment-1-2" data-aos="fade-up" data-aos-delay="200">Ucapan do'a dari mereka</div>
                    <div id="dataget">
                        <?php foreach ($ucapan as $item) { ?>
                        <div id='kotak'>
                            <div id='firstName' class='comment-3'><?= $item['oleh'] ?></div>
                            <span class='comment-3-1'><?= $item['email'] ?></span>
                            <div class='comment-4'><i class='fas fa-comment-alt'></i> <?= $item['ucapan'] ?> 2</div>
                        </div>  
                        <?php } ?>                
                    </div>
                </div>
            </div>
        </div>
        <!-- footer --> 
        <div id="footer">
            <center>
                <div id="footer-1-1">
                    <a class="c-banner"> Home </a> | <a class="c-quote"> Quote </a> | <a class="c-quote"> Wedding </a> | <a class="c-reception"> Reception </a> | <!-- <a class="c-gallery"> Gallery </a> | --> <a class="c-location"> Location </a> | <a class="c-guest"> Guestbook </a> 
                </div>
                <div id="footer-1-2"> Copyright &copy; 2021. Wedding Invitation. Proudly Created By Limstudio </div>
                <div id="footer-1-3"> Copyright &copy; 2021. By Limstudio </div>
            </center>
        </div>
        <script type="text/javascript">
            var count_time = "December 19, 2021 07:00:00";
        </script>
        <script type="text/javascript" src="<?=  base_url() ?>assets/themes/themes12/js/main.js"></script>
        <script type="text/javascript" src="<?=  base_url() ?>assets/themes/themes12/slider/dist/jquery.zoomslider.min.js"></script>
            
        </script><script type="text/javascript" src="<?=  base_url() ?>assets/themes/themes12/js/aos.js"></script>
        <script> 
            AOS.init();

            $("#myForm").submit(function(event) {
            event.preventDefault();
            $("#loader").show();
            $(".button-submit").hide();
            var url = '<?= base_url() ?>u/insert';
            var nama = $("#nama").val();
            var id = $("#id").val();
            var keluarga = $("#keluarga").val();
            var ucapan = $("#ucapan").val();
            var hadir = $("#hadir").val();

            $("#loader").css("display", "inline-block");
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
                    $("#loader").hide();
                    $(".button-submit").show();
                    $("#error").slideDown("slow");
                    setTimeout(function() {
                        $("#error").slideUp("slow");
                    }, 3000);
                }
            });
        });
        </script>
    </body>
</html>