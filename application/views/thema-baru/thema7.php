<!DOCTYPE html>
<html  lang="id-ID" prefix="og: http://ogp.me/ns#">

<head>
    <link rel="icon" type="image/png" href="<?= base_url() ?>assets/images/favicon.png">
    <title>Riri & Izzih wedding</title>
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
    <?php if ($tujuan == "") {
        $tujuan = "Sahabat";
    } ?>
    <?php foreach ($gambar as $key) {
        switch ($key['jenis']) {
            case '1':
                $gambar1 = $key['gambar'];
                break;
            case '97':
                $brid = $key['gambar'];
                break;
            case '98':
                $groom = $key['gambar'];
                break;
        }
    } ?>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Wedding &mdash; <?= $data['nama_p'] ?> & <?= $data['nama_l'] ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Spesial mengundang untuk menghadiri pernikahan kami. <?= $data['panggilan_p'] ?> & <?= $data['panggilan_l'] ?>" />
    <meta name="keywords" content="undangan digital, undangan online, undangan nikah, website undangan, pernikahan, wedding, marriage,<?= $data['nama_p'] ?>, <?= $data['nama_l'] ?>, undngan, limstudio, undngan-digital" />
    <meta name="author" content="limstudio.site" />

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content="Pernikahan <?= $data['panggilan_p'] ?> & <?= $data['panggilan_l'] ?>" />
    <meta property="og:image" content="https://limstudio.site/assets/images/gallery/riri4.jpg">
    <meta property="og:description" content="Spesial mengundang untuk menghadiri pernikahan kami. <?= $data['panggilan_p'] ?> & <?= $data['panggilan_l'] ?>" />

    <link rel="stylesheet" href="<?= base_url() ?>assets/css/w3style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/fonts/flaticon1/flaticon.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <script type="text/javascript" src="<?= base_url() ?>assets/js/vendor/jquery-1.8.2.js"></script>
       <style type="text/css">
       /* latin-ext */
        @font-face {
            font-family: BeautyfaceDemo;
            src: url("https://www.limstudio.site/assets/fonts/text/BeautyfaceDemo.otf");
        }


            #overlay {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: #000;
                filter:alpha(opacity=70);
                -moz-opacity:0.7;
                -khtml-opacity: 0.7;
                opacity: 0.7;
                z-index: 100;
                display: none;
            }
            .cnt223 a{
                text-decoration: none;
            }
            .popup{
                width: 100%;
                margin: 0 auto;
                display: none;
                position: fixed;
                z-index: 101;
            }
            .cnt223{
               /* min-width: 600px;*/
                width: 100%;
                min-height: 150px;
                margin: 100px auto;
                background-color: #62cbf2;
                background-image: linear-gradient(#85cfea, #62cbf2);
                background-position: center;
                position: relative;
                z-index: 103;
                padding: 10px;
                border-radius: 5px;
                box-shadow: 0 2px 5px #000;
            }
            .bg1content{
                background-color: #b1e3f5;
            }
            .cnt223 p{
                clear: both;
                color: #555555;
                text-align: center;
            }
            .cnt223 p a{
                background-color: #6c5e6e;
                text-align: center;
                padding: 20px 30px;
                margin: auto;
                color: white;
                font-weight: bold;
                border-radius: 5px;
            }
            .cnt223 p img {
                text-align: center;
                margin: auto;
            }
            .cnt223 .x{
                float: right;
                height: 35px;
                left: 22px;
                position: relative;
                top: -25px;
                width: 34px;
            }
            .cnt223 .x:hover{
                cursor: pointer;
            }

            .imgopenint img {
                width: 100px;
            }

            @media  screen and (min-width: 600px) {
            .imgopenint img {
                width: 100px;
            }
        }

        </style>
    <style>
        * {
            box-sizing: border-box
        }

        .w3-half img{
            margin-bottom: -6px;
            cursor: pointer
            z-index: -99;
        }

        .w3-half img:hover{opacity: 0.6; transition: 0.3s}


        /* Set height of body and the document to 100% */
        body,
        html {
            margin: 0;
            font-family: 'Open Sans', sans-serif;
           
        }
        span{
            font-weight:bold
        }
        .card{
            font-weight:bold

        }


        .iconbar {
            position: fixed;
            bottom: 0;
            width: 100%;
            /* background-color: #bababa; */
            background-color: #172740;
            overflow: auto;
            z-index: 999999;
        }

        .iconbar a {
            float: left;
            width: 20%;
            text-align: center;
            padding-bottom: 5px;
            color: white;
            font-size: 30px;
            transition: all 0.3s ease;
        }

        /* Style tab links */
        .tablink {
            background-color: #a8e7ff;
            /*background-image: url(images/bgpaper.jpg);*/
            background-position: center;
            color: white;
            float: left;
            border: none;
            outline: none;
            cursor: pointer;
            font-size: 17px;
            width: 20%;

        }
        .tablink:hover {
            opacity: 0.9;
            /*background-color: #777;*/
        }


        /* Style the tab content (and add height:100% for full page content) */
        .tabcontent {
            color: black;
            text-align: center;
            display: none;
            /* padding: 30px 20px; */
            padding-left: 20px;
            padding-right: 20px;
            height: 100%;
            position: relative;
        }


        .corner1{
            width: 200px;
            position: absolute;
            top: 0;
            left: 0;
            z-index: 9;
            opacity: 0;
        }
        .content4pad {
            border: 2px solid #4eb3d9;
        }

        .corner2{
            width: 200px;
            position: absolute;
            top: 0;
            right: 0;
            z-index: 9;
        }

        .corner3{
            width: 200px;
            position: absolute;
            bottom: 0;
            right: 0;
            z-index: 9;
            opacity: 0;
        }

        .corner4{
            width: 200px;
            position: absolute;
            bottom: 64px;
            left: 0;
            z-index: 9;
        }

        .corner5{
            width: 70%;
            position: absolute;
            margin-left: auto;
            margin-right: auto;
            left: 0;
            right: 0;
            top: 0;
            z-index: 9;
            /*opacity: 0;*/
        }

        .corner6{
            width: 70%;
            position: absolute;
            margin-left: auto;
            margin-right: auto;
            left: 36px;
            right: 0;
            bottom: 42px;
            z-index: 9;
            /*opacity: 0;*/
        }

        .contentwd {
            position: relative;
            z-index: 99;
        }
        .content{
            font-family: 'Open Sans', sans-serif;
            font-weight:bold
        }

        #Cover {
            background-color: #a8e7ff;
            background-image: linear-gradient(#85cfea, #62cbf2);
            /*background-image: url(images/bgpaper.jpg);
            background-position: center;*/
        }

        #Couple {
            background-color: #a8e7ff;
            /*background-image: url(images/bgpaper.jpg);
            background-position: center;*/
        }

        #Eventwd {
            background-color: #a8e7ff;
            /*background-image: url(images/bgpaper.jpg);
            background-position: center;*/
        }

        #Moment {
            background-color: #a8e7ff;
            /*background-image: url(images/bgpaper.jpg);
            background-position: center;*/
        }

        #Quotewd {
            background-color: #a8e7ff;
            /*background-image: url(images/bgpaper.jpg);
            background-position: center;*/
        }

        .explainbride {
            font-family: 'Open Sans', sans-serif;
            font-weight:bold;
            color: #404040;
        }

        .bridefont {
            font-family: BeautyfaceDemo;
            font-size: 25px;
            color: #625564;
        }

        .fontfront {
            font-family: BeautyfaceDemo;
            font-size: 90px;
            color: white;
            text-shadow: 2px 2px 2px grey;
        }

        #loader {
            display: none;
            text-align: center;
        }


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
            right:10px;
            top:10px;
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
        line-height: 37px;
        font-size: 18px;
        font-size: 1rem;
        color: #68192b;
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

        .music-box button i{
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

        .fa-stack{
            right:12px;
            top: -65px;
            width: 0;
            height: 0;
        }

        .containerngunduhwd {
            margin: auto;
            text-align: center;
            font-family: dosis;
            font-size: 14px;
            line-height: 1;
        }

        .containerngunduhwd table {
            margin: auto;
            text-align: left;
        }


        .containerijabwd {
            margin-left: 5%;
            text-align: left;
            font-size: 14px;
            line-height: 26px;
        }

        .containerweddingwd {
            margin-right: 5%;
            text-align: right;
            font-size: 14px;
            line-height: 26px;
        }


        /* jam */
        h1{
        font-family: dosis;
        color: #396;
        font-weight: 100;
        font-size: 40px;
        margin: 40px 0px 20px;
        }
        #clockdiv{
            font-family: dosis;
            color: grey;
            display: inline-block;
            font-weight: 100;
            text-align: center;
            font-size: 30px;
        }
        #clockdiv > div{
            padding: 1px;
            border-radius: 3px;
            /* background: #00BF96;  */
            display: inline-block;
        }
        #clockdiv div > span{
            padding: 1px;
            border-radius: 3px;
            /* background: #00816A;  */
            display: inline-block;
        }

        #day {
            font-size: 50px;
            color: red;
        }

        .smalltext{
            padding-top: 2px;
            font-size: 24px;
            font-family: BeautyfaceDemo;
        }

        .ornamentwdtop {
            position: relative;
            margin: 0 auto;
        }

        .ornamentbg{
            position: absolute;
            z-index: -4;
            top: 50px;
            width: 30%;
            opacity: 1;
            opacity: 0;
        }

        .ornamentbg img {
            width: 40%;
        }

        .ornamentwdtop img {
            width: 60%;
        }

        .ornamentwdbtm img {
            width: 40%;
        }

        .timeline h2 {
            color: #404040;
        }

        @media  screen and (min-width: 600px) {
            .cardevent {
            margin-left: 20%;
            margin-right: 20%;
            }

            .borderpair {
                width: 60%;
            }
        }


        @media screen and (max-width: 600px) {
            .corner1 {
                width: 150px;
            }

            .corner2 {
                width: 150px;
            }

            .corner3 {
                width: 150px;
            }

            .corner4 {
                width: 150px;
            }

            .corner5 {
                width: 100%;
            }

            .corner6 {
                width: 100%;
            }

            .ornamentbg img {
                width: 100%;
            }

            .ornamentwdtop img {
                width: 100%;
            }

            .ornamentwdbtm img {
                width: 100%;
            }

            .containerijabwd {
                margin-left: 10%;
            }

            .containerweddingwd {
                margin-right: 10%;
            }

            .borderpair {
                width: 100%;
                margin: auto;
            }

        }

        /* comment section */

        input[type=text], select, textarea {
          width: 100%;
          padding: 12px;
          border: 1px solid #ccc;
          border-radius: 4px;
          box-sizing: border-box;
          margin-top: 6px;
          margin-bottom: 16px;
          resize: vertical;
        }

        input[type=submit] {
          background-color: #6c5e6e;
          width: 100%;       
          color: white;
          padding: 12px 20px;
          border: none;
          border-radius: 4px;
          cursor: pointer;
        }

        input[type=submit]:hover {
          background-color: #625564;
        }

        .wishcontainer {
            text-align: left;
            font-family: dosis;
        }

        .wishspace {
          border-radius: 5px;
          /* background-color: #f2f2f2; */
          padding-left: 20px;
          padding-right: 20px;
          padding-bottom: 20px;
          color: #404040;
        }

        .wishdisplay {
            text-align: left;
            padding-left: 20px;
            padding-right: 20px;
            font-family: dosis;
            max-height: 400px;
            overflow: scroll;
        }

        .wishdisplayname {
            font-weight: bold;
        }

        /* width */
        .wishdisplay::-webkit-scrollbar {
          width: 4px;
        }

        /* Handle */
        .wishdisplay::-webkit-scrollbar-thumb {
          background: #888;
        }

        /* Handle on hover */
        .wishdisplay::-webkit-scrollbar-thumb:hover {
          background: #555;
        }
        [class^="flaticon-"]:before, [class*=" flaticon-"]:before, [class^="flaticon-"]:after, [class*=" flaticon-"]:after{
            font-size: 35px;
            color: #075b79;
        }

    </style>

    <script type='text/javascript'>
        $(function(){
        var overlay = $('<div id="overlay"></div>');
        overlay.show();
        overlay.appendTo(document.body);
        $('.popup').show();
        $('.close').click(function(){
        $('.popup').hide();
        overlay.appendTo(document.body).remove();
        return false;
        });


        $('.x').click(function(){
        $('.popup').hide();
        overlay.appendTo(document.body).remove();
        return false;
        });
        });
    </script>
</head>

<body>

    <div class='popup'>
        <div class='cnt223'>
            <p><img src="<?= base_url() ?>assets/images/images/de12vintopwd.png" width="60%" style="text-align: center"></p>
            <p class="imgopenint"><img class='close' src="<?= $gambar1 ?>" style="text-align: center"></p>

            <p style="text-align: center; line-height: normal;font-weight: bold">Kepada Yth.<br><span style="font-size:12px">Bapak/Ibu/Saudara/i</span></p>

            <p style="color: #404040; font-size: 20px; font-weight:bold; padding-bottom:10px; border-radius:4px; text-align: center" ><?= $tujuan ?></p>
        </p>
        <p><a href='#' id="unmute-sound" class='close'>Buka Undangan</a></p>

        <div style="clear: both;"></div>

        <p><img src="<?= base_url() ?>assets/images/images/de12vintopwd.png" width="60%" style="transform: rotate(180deg); text-align: center"></p>
        </div>

    </div>

    <!-- start button pesan via WA -->
    <!-- <button onclick="window.location.href='https://api.whatsapp.com/send?phone=628812151786&text=NikahanKami%0ASaya%20ingin%20pesan%20Undangan%20Digital%20Pernikahan%20seperti%20Demo12'" id="myBtn4" title="Pesan Undangan"><i class="w3-bar-block fa fa-whatsapp"></i> <span style="font-size:12px">Pesan</span></button> -->
    <!-- end button pesan via WA -->

    <div class="music-box">
        <button class="music-box-toggle-btn">
            <!--
                <i class="fa fa-music"></i> -->
            <audio id='song' loop>
                <source src="<?= base_url() ?>assets/music/<?= $data['music'] ?>">
            </audio>

            <button type="button" class="music" id="unmute2-sound">
                <img border="0" alt="" src="<?= base_url() ?>assets/images/images/soundgoldmusicoffwd.png"
                    width="20" height="20">
            </button>
            <button type="button" class="music" id="mute-sound">
                <img border="0" alt="" src="<?= base_url() ?>assets/images/images/soundgoldmusicwd.png"
                    width="20" height="20">
            </button>
        </button>
    </div>

    <div class="iconbar">
        <a class="tablink" onclick="openPage('Cover', this, '#71c7eb')" id="defaultOpen"><i class="flaticon-wedding-couple"></i></a>
        <a class="tablink" onclick="openPage('Couple', this, '#71c7eb')"><i class="flaticon-engagement"></i></a>
        <a class="tablink" onclick="openPage('Eventwd', this, '#71c7eb')"><i class="flaticon-calendar"></i></a>
        <a class="tablink" onclick="openPage('Moment', this, '#71c7eb')"><i class="flaticon-wedding-photography"></i></a>
        <a class="tablink" onclick="openPage('Quotewd', this, '#71c7eb')"><i class="flaticon-basket"></i></a>
    </div>


    <div id="Cover" class="tabcontent">
        <!-- <h3>Home</h3>
        <p>Home is where the heart is..</p> -->

        <div class="corner1">
            <img src="#" alt="" width="100%">
        </div>

        <div class="corner2">
            <img src="<?= base_url() ?>assets/images/images/daun-atas1.png" alt="" width="100%">
        </div>

        <div class="corner3">
            <img src="#" alt="" width="100%">
        </div>

        <div class="corner4">
            <img src="<?= base_url() ?>assets/images/images/daun-bawah1.png" alt="" width="100%">
        </div>

        <div class="corner5">
            <img src="<?= base_url() ?>assets/images/images/daun-atas-jatuh1.png" alt="" width="100%">
        </div>

        <div class="corner6">
            <img src="<?= base_url() ?>assets/images/images/daun-bawah-jatuh1.png" alt="" width="100%">
        </div>


        <div id="homewd" class="contentwd">
            <div class="ornamentwdtop" style="width: 100%; margin: 0px; text-align: center;">
                <img src="<?= base_url() ?>assets/images/images/de12vintopwd.png" alt="" style="display: inline-block;" width="100%">
            </div>
<div class="content4pad">
            <div>
                <h2 style="color: #404040; font-size: 35px; font-family: BeautyfaceDemo; padding-top: 20px">The Wedding<br><span style="font-size:12px" class="explainbride">Official Invitation</span></h2>
            </div>
                <div class="borderpair">
                        <div class="namepair" style="line-height:210%; padding-top:60px">
                            <!-- <h1><span class="fontfront" style="padding-right:30px">Rizka</span><br>&<br><span>Reza</span></h1> -->
                            <div style="padding-right:30px; padding-top: 10px"><span class="fontfront"><?= $data['panggilan_p'] ?></span></div>
                            <div class="" style="color:white">&</div>
                            <div style="padding-left:30px"><span class="fontfront"><?= $data['panggilan_l'] ?></span></div>
                        </div> 
                        <div class="behindcname w3-spin"><img src="<?= base_url() ?>assets/images/images/lingkaran1.png"></div>  
                </div>    
                <br>
                <!-- <p style="color: #404040; font-weight:bold; padding-top:10px; padding-bottom:10px; border-radius:4px" id="write"></p> -->
            <div>
                <br>
                <br>
                <!-- <a href="https://calendar.google.com/event?action=TEMPLATE&amp;tmeid=N2c4cXFiY2ZzaTBpa2QwazY2N3IycWwxcW8gYmxrb2M5ZHFvcGs3a2trNm9nNnAzNDlzaDRAZw&amp;tmsrc=blkoc9dqopk7kkk6og6p349sh4%40group.calendar.google.com" target="_blank" style="background-color: #6c5e6e; font-family: dosis; font-size: 18px; color: white; padding: 18px 30px; text-align: center; text-decoration: none; display: inline-block; border-radius: 8px"><strong>SaveTheDate</strong></a> -->
                <p style="color: #404040; font-size: 30px; font-family: BeautyfaceDemo; padding-top: 1px">| <?= date_format($tanggal, 'd'); ?> . <?= $bulan; ?> . <?= date_format($tanggal, 'Y'); ?> | <br><span style="font-size:12px"
                        class="explainbride"><?= $data['lokasi_resepsi'] ?></span></p>
                        <br>
                        <br>
            </div>

            <div class="ornamentbg" style="width: 100%; margin: 0px; text-align: center;">
                <img src="#" alt="" style="display: inline-block; opacity: 0">
            </div>
</div>

            <div class="ornamentwdbtm" style="width: 100%; margin: 0px; text-align: center;">
                <img src="<?= base_url() ?>assets/images/images/de12vinbtmwd.png" alt="" style="display: inline-block;">
            </div>
            <br>
            <br>
            <br>

        </div>


    </div>

    <div id="Couple" class="tabcontent">
        <!-- <h3>News</h3>
        <p>Some news this fine day!</p> -->

        <div class="corner1">
            <img src="#" alt="" width="100%">
        </div>

        <div class="corner2">
            <img src="<?= base_url() ?>assets/images/images/daun-atas1.png" alt="" width="100%">
        </div>

        <div class="corner3">
            <img src="#" alt="" width="100%">
        </div>

        <div class="corner4">
            <img src="<?= base_url() ?>assets/images/images/daun-bawah1.png" alt="" width="100%">
        </div>

        <div class="corner5">
            <img src="<?= base_url() ?>assets/images/images/daun-atas-jatuh1.png" alt="" width="100%">
        </div>

        <div class="corner6">
            <img src="<?= base_url() ?>assets/images/images/daun-bawah-jatuh1.png" alt="" width="100%">
        </div>

        <div id="bridewd" class="contentwd">

            <div class="ornamentwdtop" style="width: 100%; margin: 0px; text-align: center;">
                <img src="<?= base_url() ?>assets/images/images/de12vintopwd.png" alt="" style="display: inline-block;">
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
<div class="content4pad">
            <div>
                <p style="font-size: 30px; font-family: BeautyfaceDemo; padding-top: 30px; color: #404040">Bismillahirrahmanirrahim</p>
                <div class="explainbride">Assalamu`alaikum Warahmatullahi Wabarakatuh<br><br>
                    Maha Suci Allah<br>yang telah menciptakan makhluk-Nya<br>berpasang-pasangan.<br>Ya Allah semoga ridho-Mu tercurah<br>mengiringi pernikahan putra-putri kami:</div>
            </div>
            <br>
            <div><img src="<?= $brid ?>" width="40%" alt=""><br><span class="bridefont"><?= $data['nama_p'] ?><span style="font-size: 14px"></span></span>
            </div>
            <div class="explainbride"><?= $tentang_p ?></div>
            <br>
            <div class="explainbride">dan</div>
            <br>
            <div><img src="<?= $groom ?>" width="40%" alt=""><br><span class="bridefont"><?= $data['nama_l'] ?><span style="font-size: 14px"></span></span>
            </div>
            <div class="explainbride"><?= $tentang_l ?></div>
            <br>
            <br>
            <br>
</div>
            <div class="ornamentwdbtm" style="width: 100%; margin: 0px; text-align: center;">
                <img src="<?= base_url() ?>assets/images/images/de12vinbtmwd.png" alt="" style="display: inline-block;" width="100%">
            </div>
            <br>
            <br>
            <br>

        </div>



    </div>

    <div id="Eventwd" class="tabcontent">

        <div class="corner1">
            <img src="#" alt="" width="100%">
        </div>

        <div class="corner2">
            <img src="<?= base_url() ?>assets/images/images/daun-atas1.png" alt="" width="100%">
        </div>

        <div class="corner3">
            <img src="#" alt="" width="100%">
        </div>

        <div class="corner4">
            <img src="<?= base_url() ?>assets/images/images/daun-bawah1.png" alt="" width="100%">
        </div>

        <div class="corner5">
            <img src="<?= base_url() ?>assets/images/images/daun-atas-jatuh1.png" alt="" width="100%">
        </div>

        <div class="corner6">
            <img src="<?= base_url() ?>assets/images/images/daun-bawah-jatuh1.png" alt="" width="100%">
        </div>


        <div id="homewd" class="contentwd">

            <div class="ornamentwdtop" style="width: 100%; margin: 0px; text-align: center;">
                <img src="<?= base_url() ?>assets/images/images/de12vintopwd.png" alt="" style="display: inline-block;" width="100%">
            </div>
<div class="content4pad">
            <br>
            <h3 style="font-family: BeautyfaceDemo; font-size: 35px; color: #404040">Event</h3>
            <p class="explainbride">The Happy Day!</p>
            <br>
            <p style="font-family: 'Open Sans', sans-serif; color: #404040; font-weight:bold">Dengan memohon rahmat dan ridho Allah Subhanahu Wa Ta'ala, izinkan kami mengundang Bapak/Ibu/Saudara(i) untuk menghadiri acara pernikahan putra-putri kami</p>

            <!-- <div class="containerngunduhwd">
                <div>
                    <p style="font-size: 18px; font-family: dosis; padding-top: 30px"><b>Ngunduh Mantu</b></p>
                </div>

                <table>
                    <tr>
                        <td><i class="fa fa-calendar"></i></td>
                        <td>Sabtu, 29 Februari 2020</td>
                    </tr>
                    <tr>
                        <td><br></td>
                        <td><br></td>
                    </tr>
                    <tr>
                        <td><i class="fa fa-clock-o"></i></td>
                        <td>10.00 WIB - selesai</td>
                    </tr>
                    <tr>
                        <td><br></td>
                        <td><br></td>
                    </tr>
                    <tr>
                        <td><i class="fa fa-map-marker"></i></td>
                        <td>Perumahan Griya Madu Permata</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Yukum Jaya, Kec. Terbanggi Besar,</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Lampung Tengah</td>
                    </tr>
                </table>
            </div> -->


        <div class="cardevent">
            <div class="row">
              <div class="column">
                    <div class="card">

                        <div class="containerijabwd">

                            <table style="color: #404040">
                                <tr>
                                    <th style="font-weight: initial"><i class="flaticon-wedding-arch"></i></th>
                                    <th></th>
                                    <th style="width: 80%"><p style="font-size: 18px; font-family: dosis; color: #404040"><b>Akad Pernikahan</b></p></th>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><i class="fa fa-calendar"></i></td>
                                    <td><?= $hari_akad ?>, <?= date_format($tanggal_akad, 'd'); ?> . <?= $bulan_akad; ?> . <?= date_format($tanggal_akad, 'Y'); ?></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><br></td>
                                    <td><br></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><i class="fa fa-clock-o"></i></td>
                                    <td>
                                        <?=  substr($data['jam_akad_mulai'], 0, 5) ?>
                                        <?php if(substr($data['jam_akad_selesai'], 0, 5) >= "23:00:00"){
                                             echo ' - Selesai'; 
                                            }else if(substr($data['jam_akad_selesai'], 0, 5) == ""){ }
                                            else{ echo ' - ' . substr($data['jam_akad_selesai'], 0, 5).'
                                            '.$data['waktu_bagian'];
                                            }
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><br></td>
                                    <td><br></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><i class="fa fa-map-marker"></i></td>
                                    <td><?= $data['lokasi_akad'] ?></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </table>
                        </div>
                    </div>
              </div>

              <div class="column">
                    <div class="card">
                          <div class="containerweddingwd">

                                <table align="right" style="color: #404040">
                                    <tr>
                                        <th  align="right" style="width: 80%;"><p style="font-size: 18px; font-family: dosis; color: #404040"><b>Resepsi Pernikahan</b></p></th>
                                        <th></th>
                                        <th style="font-weight: initial"><i class="flaticon-wedding-cake"></i></th>
                                    </tr>
                                    <tr align="right">
                                        <td><?= $hari ?>, <?= date_format($tanggal, 'd'); ?> . <?= $bulan; ?> . <?= date_format($tanggal, 'Y'); ?></td>
                                        <td><i class="fa fa-calendar"></i></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><br></td>
                                        <td><br></td>
                                        <td></td>
                                    </tr>
                                    <tr align="right">
                                        <td>
                                            <?=  substr($data['jam_resepsi_mulai'], 0, 5) ?>
                                            <?php if(substr($data['jam_resepsi_selesai'], 0, 5) >= "23:00:00"){
                                                echo ' - Selesai'; 
                                                }else if(substr($data['jam_resepsi_selesai'], 0, 5) == ""){ }
                                                else{ echo ' - ' . substr($data['jam_resepsi_selesai'], 0, 5).'
                                                '.$data['waktu_bagian'];
                                                }
                                            ?>
                                        </td>
                                        <td><i class="fa fa-clock-o"></i></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><br></td>
                                        <td><br></td>
                                        <td></td>
                                    </tr>
                                    <tr align="right">
                                        <td><?= $data['lokasi_akad'] ?></td>
                                        <td><i class="fa fa-map-marker"></i></td>
                                        <td></td>
                                    </tr>
                                    <tr align="right">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </table>
                        <div style="clear: both;"></div>
                    </div>
                    </div>
              </div>
            </div>
        </div>    
                    
            <div style="clear:both"></div>

            <p class="explainbride" style="text-transform: uppercase;"><b>Seluruh tamu yang hadir di wajibkan menggunakan masker selama acara berlangsung dan menjaga jarak</b></p>

            <br>
            <div id="clockdiv">
                <div>
                    <span class="days" id="day"></span>
                    <div class="smalltext">Days</div>
                </div>
                <div>
                    <span class="hours" id="hour"></span>
                    <div class="smalltext">Hours</div>
                </div>
                <div>
                    <span class="minutes" id="minute"></span>
                    <div class="smalltext">Minutes</div>
                </div>
                <div>
                    <span class="seconds" id="second"></span>
                    <div class="smalltext">Seconds</div>
                </div>
            </div>

            <p id="demo"></p>

            <p class="explainbride">Merupakan suatu kehormatan dan kebahagiaan<br>bagi kami apabila Bapak/Ibu/Saudara(i)<br>berkenan hadir dan memberikan do'a restu<br>kepada kedua mempelai.</p>

            <br>
            <br>


            <div>
                <iframe src="<?= $data['link_map'] ?>" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

            </div>
            <br>
            <div><a href="<?= $data['link_map'] ?>" target="_blank" style="background-color: #6c5e6e; font-family: dosis; font-size: 18px; color: white; padding: 18px 30px; text-align: center; text-decoration: none; display: inline-block; border-radius: 8px"><strong>OpenMap</strong></a>
            </div>
            <br>
</div>

            <div class="ornamentwdbtm" style="width: 100%; margin: 0px; text-align: center;">
                <img src="<?= base_url() ?>assets/images/images/de12vinbtmwd.png" alt="" style="display: inline-block;" width="100%">
            </div>
            <br>
            <br>
            <br>

        </div>


    </div>

    <div id="Moment" class="tabcontent">

        <div class="corner1">
            <img src="#" alt="" width="100%">
        </div>

        <div class="corner2">
            <img src="<?= base_url() ?>assets/images/images/daun-atas1.png" alt="" width="100%">
        </div>

        <div class="corner3">
            <img src="#" alt="" width="100%">
        </div>

        <div class="corner4">
            <img src="<?= base_url() ?>assets/images/images/daun-bawah1.png" alt="" width="100%">
        </div>

        <div class="corner5">
            <img src="<?= base_url() ?>assets/images/images/daun-atas-jatuh1.png" alt="" width="100%">
        </div>

        <div class="corner6">
            <img src="<?= base_url() ?>assets/images/images/daun-bawah-jatuh1.png" alt="" width="100%">
        </div>




        <div id="homewd" class="contentwd">

            <div class="ornamentwdtop" style="width: 100%; margin: 0px; text-align: center;">
                <img src="<?= base_url() ?>assets/images/images/de12vintopwd.png" alt="" style="display: inline-block;" width="100%">
            </div>
<div class="content4pad">
            <br>
            <h3 style="font-family: BeautyfaceDemo; font-size: 35px; color: #404040">Gallery</h3>
            <p class="explainbride">Momen Bahagia Riri-Izzih</p>

            <!-- !PAGE CONTENT! -->
            <div class="w3-main w3-content" style="max-width:1600px;margin-top:20px">

                <!-- PhotoFrame -->
                <!-- <div class="framegrid2">
                    <div>
                        <img src="images/gala.png" width="100%">
                        <br><br>
                        <img src="images/galb.png" width="100%">
                        <br><br>
                        <img src="images/galc.png" width="100%">
                        <br><br>
                        <img src="images/gald.png" width="100%">
                    </div>
                </div> -->

                <!-- Photo grid -->
                <div class="w3-row w3-grayscale-min">

                    <div class="w3-half">
                        <!--<img src="images/gal01.jpeg" style="width:100%" onclick="onClick(this)"-->
                        <!--    alt="Riri-Izzih">-->
                        <?php for ($mulai1 = 0; $mulai1 < count($gallery); $mulai1++) { 
                            if(($mulai1%2)==1){
                               ?>
                        <img src="<?= $gallery[$mulai1]['gambar'] ?>" style="width:100%" onclick="onClick(this)"
                            alt="Riri-Izzih">
                        <?php }} ?> 
                        <!-- <img src="images/gal07.jpeg" style="width:100%" onclick="onClick(this)"
                            alt="Riri-Izzih">
                        <img src="images/gal09.jpeg" style="width:100%" onclick="onClick(this)"
                            alt="Riri-Izzih"> -->
                        <!-- <img src="images/gal11.jpg" style="width:100%" onclick="onClick(this)"
                            alt="Riri-Izzih"> -->
                    </div>
                    <div class="w3-half">
                        <!--<img src="images/gal02.jpeg" style="width:100%" onclick="onClick(this)"-->
                        <!--    alt="Riri-Izzih">-->
                        <?php for ($mulai1 = 0; $mulai1 < count($gallery); $mulai1++) { 
                            if(($mulai1%2)===0){
                               ?>
                        <img src="<?= $gallery[$mulai1]['gambar'] ?>" style="width:100%" onclick="onClick(this)"
                            alt="Riri-Izzih">
                        <?php }} ?> 
                        <!-- <img src="images/gal08.jpeg" style="width:100%" onclick="onClick(this)"
                            alt="Riri-Izzih">
                        <img src="images/gal10.jpeg" style="width:100%" onclick="onClick(this)"
                            alt="Riri-Izzih"> -->
                        <!-- <img src="images/gal12.jpg" style="width:100%" onclick="onClick(this)"
                            alt="Riri-Izzih"> -->
                    </div>

                </div>

                <!-- Modal for full size images on click-->
                <div id="modal01" class="w3-modal w3-black" style="padding-top:0" onclick="this.style.display='none'">
                    <span class="w3-button w3-black w3-xlarge w3-display-topleft">×</span>
                    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
                        <img id="img01" class="w3-image">
                        <p id="caption"></p>
                    </div>
                </div>
                <br>
                <br>

            
            </div>
</div>
            <div>
                <div class="ornamentwdbtm" style="width: 100%; margin: 0px; text-align: center;">
                <img src="<?= base_url() ?>assets/images/images/de12vinbtmwd.png" alt="" style="display: inline-block;" width="100%">
                </div>

            </div>
            <br>
            <br>
            <br>

        </div>
    </div>

    <div id="Quotewd" class="tabcontent">

        <div class="corner1">
            <img src="#" alt="" width="100%">
        </div>

        <div class="corner2">
            <img src="<?= base_url() ?>assets/images/images/daun-atas1.png" alt="" width="100%">
        </div>

        <div class="corner3">
            <img src="#" alt="" width="100%">
        </div>

        <div class="corner4">
            <img src="<?= base_url() ?>assets/images/images/daun-bawah1.png" alt="" width="100%">
        </div>

        <div class="corner5">
            <img src="<?= base_url() ?>assets/images/images/daun-atas-jatuh1.png" alt="" width="100%">
        </div>

        <div class="corner6">
            <img src="<?= base_url() ?>assets/images/images/daun-bawah-jatuh1.png" alt="" width="100%">
        </div>




        <div id="homewd" class="contentwd">

            <div class="ornamentwdtop" style="width: 100%; margin: 0px; text-align: center;">
                <img src="<?= base_url() ?>assets/images/images/de12vintopwd.png" alt="" style="display: inline-block;" width="100%">
            </div>
<div class="content4pad">
            <br>
            <h3 style="font-family: BeautyfaceDemo; font-size: 35px; color: #404040">Kisah Bahagia <?= $data["panggilan_p"] ?>-<?= $data["panggilan_l"] ?></h3>
            <!-- <p class="explainbride">Kisah Bahagia <?= $data["panggilan_p"] ?>-<?= $data["panggilan_l"] ?></p> -->
            <p class="explainbride">--</p>
            <p class="explainbride">Dan di antara tanda-tanda kekuasaan-Nya ialah Dia menciptakan untukmu isteri-isteri dari jenismu sendiri, supaya kamu cenderung dan merasa tenteram kepadanya, dan dijadikan-Nya diantaramu rasa kasih dan sayang. Sesungguhnya pada yang demikian itu benar-benar terdapat tanda-tanda bagi kaum yang berfikir.</p>
            <p class="explainbride"><b>QS. Ar-Rum: 21</b></p>
            <p class="explainbride">--</p>

            <!-- !PAGE CONTENT! -->
            <div class="w3-main w3-content" style="max-width:1600px;margin-top:20px">

                <!-- timeline start -->

                <div class="timeline">
                      <div class="container left">
                        <div class="content">
                            <div class="bg1content">
                               <!-- <h2>2018</h2>  -->
                              <p>Kami adalah teman kecil, rumah kami berdekatan. Teman semasa di taman kanak kanak. </p>
                            </div>
                        </div>
                      </div>
                      <div class="container right">
                        <div class="content">
                            <div class="bg1content">
                               <h2>2018 </h2> 
                              <p>kami berkomunikasi kembali lewat media sosial.</p>
                            </div>
                        </div>
                      </div>
                       <div class="container left">
                        <div class="content">
                            <div class="bg1content">
                              <h2>2019</h2>
                              <p>Setelah sering bertemu komunikasi kami terjalin baik, dan izzih menunjukan keseriusannya pada saya.</p>
                            </div>
                        </div>
                      </div>
                      <div class="container right">
                       <div class="content">
                           <div class="bg1content">
                             <h2>2020</h2>
                             <p>6 agustus, pertemuan keluarga.  
Bismillah, semua diawali disini moment awal perjalanan kami berdua membangun keluarga kecil kami. Semoga Allah SWT selalu memberikan keberkahan pada pernikahan kami.</p>
                           </div>
                       </div>
                      </div>
                </div>

                <p class="explainbride"></p>


                <!-- timeline end -->
                <br>
                <div class="">
                    <p class="explainbride">Ucapan Selamat & Doa untuk<br>Riri-Izzih</p>
                </div>

                <div class="wishspace">
                    <div class="wishcontainer">

                    <form id="myForm" method="post">
                        <label for="nama">Nama</label>
                        <input type="text" id="nama" name="nama" placeholder="Nama.." required>
                        <input type='hidden' class='form-control' id='id' value="<?= $data["id_pernikahan"] ?>">
                        <label for="nama">Siapakah kamu? </label>
                        <input type="text" id="keluarga" name="nama" placeholder="Keluarga Mempelai.." required>

                        <label for="ucap">Ucapan</label>
                        <textarea id="ucapan" name="harapan" placeholder="Ucapan Doa & Harapan.." style="height:100px" required></textarea>
                        <div id="loader"><i class="fa fa-refresh fa-spin fa-3x fa-fw"></i></div>
                    <button class="wow zoomIn button-submit" data-wow-delay="0.3s" type="submit" name="tes">Kirim</button>
                        <!-- <input type="submit" name="submit" value="Kirim"> -->
                      </form>
                    </div>

                    <br>

                    <div class="wishdisplay">     
                        <?php foreach ($ucapan as $item) { ?>                   
                            <div class="wishdisplayname">
                            <?= $item['oleh'] ?> <span style="font-weight: initial;font-size: 12px;"><?= $item['email'] ?></span>
                            </div>
                            <div class="" style="padding-bottom: 10px">
                            <?= $item['ucapan'] ?>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
</div>
            <div>
                <!-- <p class="explainbride">pemesanan undangan <a style="color: white; background-color: #6c5e6e; padding: 5px" href="https://api.whatsapp.com/send?phone=6287824313553&text=NikahanKami%0A%0AHalo%20,%0ASaya%20ingin%20pesan%20Undangan%20Digital%20Pernikahan%20">+62878-2431-3553</a></p> -->
                <div class="ornamentwdbtm" style="width: 100%; margin: 0px; text-align: center;">
                <img src="<?= base_url() ?>assets/images/images/de12vinbtmwd.png" alt="" style="display: inline-block;" width="100%">
                </div>

            </div>
            <br>
            <br>
            <br>

        </div>
    </div>

    <script>
        function openPage(pageName, elmnt, color) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablink");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].style.backgroundColor = "";
            }
            document.getElementById(pageName).style.display = "block";
            elmnt.style.backgroundColor = color;
        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();


            document.getElementById('mute-sound').style.display = 'none';
            document.getElementById('unmute-sound').addEventListener('click', function (event) {
                document.getElementById('unmute2-sound').style.display = 'none';
                document.getElementById('mute-sound').style.display = 'inline-block';
                document.getElementById('song').play();
            });
            
            document.getElementById('unmute2-sound').addEventListener('click', function (event) {
                document.getElementById('unmute2-sound').style.display = 'none';
                document.getElementById('mute-sound').style.display = 'inline-block';
                document.getElementById('song').play();
            });

            document.getElementById('mute-sound').addEventListener('click', function (event) {
                document.getElementById('mute-sound').style.display = 'none';
                document.getElementById('unmute2-sound').style.display = 'inline-block';
                document.getElementById('song').pause();
            });


        // Script to open and close sidebar
            function w3_open() {
                document.getElementById("mySidebar").style.display = "block";
                document.getElementById("myOverlay").style.display = "block";
            }

            function w3_close() {
                document.getElementById("mySidebar").style.display = "none";
                document.getElementById("myOverlay").style.display = "none";
            }

            // Modal Image Gallery
            function onClick(element) {
                document.getElementById("img01").src = element.src;
                document.getElementById("modal01").style.display = "block";
                var captionText = document.getElementById("caption");
                captionText.innerHTML = element.alt;
            }

        var deadline = new Date("Nov 07, 2020 08:30:00").getTime();

            var x = setInterval(function () {

                var now = new Date().getTime();
                var t = deadline - now;
                var days = Math.floor(t / (1000 * 60 * 60 * 24));
                var hours = Math.floor((t % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((t % (1000 * 60)) / 1000);
                document.getElementById("day").innerHTML = days;
                document.getElementById("hour").innerHTML = hours;
                document.getElementById("minute").innerHTML = minutes;
                document.getElementById("second").innerHTML = seconds;
                if (t < 0) {
                    clearInterval(x);
                    document.getElementById("demo").innerHTML = "HAPPY WEDDING";
                    document.getElementById("day").innerHTML = '0';
                    document.getElementById("hour").innerHTML = '0';
                    document.getElementById("minute").innerHTML = '0';
                    document.getElementById("second").innerHTML = '0';
                }
            }, 1000);


            function getParameterByName(name, url) {
            if (!url) url = window.location.href;
            name = name.replace(/[\[\]]/g, '\\$&');
            var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
                results = regex.exec(url);
            if (!results) return null;
            if (!results[2]) return '';
            return decodeURIComponent(results[2].replace(/\+/g, ' '));
            }

            var sn = getParameterByName('to');

            document.getElementById("write").innerHTML = sn;

    </script>
    <script type="text/javascript" src="<?= base_url() ?>assets/js/jquery-1.10.1.min.js"></script>

    <script>
        //Get the button
        var url = '<?= base_url() ?>u/insert';
        $("#myForm").submit(function(event) {
            event.preventDefault();
            $("#loader").show();
            $(".button-submit").hide();
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

        var mybutton = document.getElementById("myBtn4");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
          if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
          } else {
            mybutton.style.display = "none";
          }
        }

    </script>



</body>


<!-- Mirrored from www.nikahankami.com/RiriIzzih/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 17 Oct 2020 16:28:37 GMT -->
</html>
