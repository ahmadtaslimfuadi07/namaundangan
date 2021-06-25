<!DOCTYPE html>
<html lang=en-US' class='no-js'>
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
   <?php foreach ($gambar as $it) {
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
			case '1':
				$gambar1 = $it['gambar'];
				break;
        }
    } ?>
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
      <meta http-equiv='X-UA-Compatible' content='IE=edge' />
      <meta name='viewport' content='width=device-width,initial-scale=1'/>
      <link rel='icon' type='image/png' href='<?= base_url()?>assests/images/fapicon.png' />
      <meta property='og:image' content='<?= $gambar1 ?>'/>
      <meta property='og:title' content='Wedding Announcement <?= $data['panggilan_p'] ?> &amp; <?= $data['panggilan_l'] ?>'/>
      <meta property='og:description' content='<?= date_format($tanggal,'d - m - Y') ?>'/>
      <meta property='og:type' content='article'/>
      <meta property='og:url' content='index.html'/>
      <!--================== AWAL BLOK STYLE ================================= -->
      <!-- CSS STYLE UMUM-->
      <link rel='stylesheet' type='text/css' href='<?= base_url()?>assets/themes/themes9/master/master/template/elegante1grey/css/style_umum.css' media='screen' />
      <link rel='stylesheet' type='text/css' href='<?= base_url()?>assets/themes/themes9/master/master/template/elegante1grey/css/global.html' media='screen' />
      <link rel='stylesheet' type='text/css' href='<?= base_url()?>assets/themes/themes9/fonts/css/font-awesome.css' media='screen' />
      <link rel='stylesheet' type='text/css' href='<?= base_url()?>assets/themes/themes9/master/master/template/elegante1grey/css/navstylechange.css' media='screen' />
      <link rel='stylesheet' href='<?= base_url()?>assets/themes/themes9/master/master/template/elegante1grey/animasi/css/animations.css' type='text/css'>
      <!-- Theme style  -->
      <link rel='stylesheet' href='<?= base_url()?>assets/themes/themes9/master/master/template/elegante1grey/lib_template/elegante2/css/style.css'>
      <!-- CSS MENU -->
      <link rel='stylesheet' href='<?= base_url()?>assets/themes/themes9/master/master/template/elegante1grey/css/menu/styles_menu.css'>
      <!-- CSS STORY -->
      <link rel='stylesheet' href='<?= base_url()?>assets/themes/themes9/master/master/template/elegante1grey/css/story/style_story.css'>
      <!-- CSS FONT -->
      <link rel='stylesheet' type='text/css' href='<?= base_url()?>assets/themes/themes9/fonts/css/fonts/css/font-awesome.min.html'>
      <link rel='stylesheet' type='text/css' href='<?= base_url()?>assets/themes/themes9/fonts/css/fonts/css/dataTables.fontAwesome.html'>
      <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
      <link rel='stylesheet' type='text/css' href='<?= base_url()?>assets/themes/themes9/src/css/settings.css' media='screen' />
      <!-- RESPONSIVE -->
      <link rel='stylesheet' type='text/css' href='<?= base_url()?>assets/themes/themes9/master/master/template/elegante1grey/css/responsive.css' media='screen' />
      <!-- FONT -->
      <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400i' rel='stylesheet'>
      <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
      <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:300' rel='stylesheet'>
      <link href='https://fonts.googleapis.com/css?family=Dancing+Script' rel='stylesheet'>
      <link href='https://fonts.googleapis.com/css?family=Sacramento' rel='stylesheet'>
      <link href='https://fonts.googleapis.com/css?family=Lobster+Two&amp;display=swap' rel='stylesheet'>
      <!-- FONT TAMBAHAN CUSTOME-->
      <link href='https://fonts.googleapis.com/css?family=Cormorant+Infant&amp;display=swap' rel='stylesheet'>
      <link href='https://fonts.googleapis.com/css?family=Montserrat&amp;display=swap' rel='stylesheet'>
      <!-- GALLERY -->
      <link rel='stylesheet' type='text/css' href='<?= base_url()?>assets/themes/themes9/master/master/template/elegante1grey/css/gallery/bootstrap.css'>
      <link rel='stylesheet' type='text/css' href='<?= base_url()?>assets/themes/themes9/master/master/template/elegante1grey/css/gallery/magnific-popup.css'>
      <link rel='stylesheet' type='text/css' href='<?= base_url()?>assets/themes/themes9/master/master/template/elegante1grey/css/gallery/style-gallery.css'>
      <!-- POPUP -->
      <link rel='stylesheet' type='text/css' href='<?= base_url()?>assets/themes/themes9/popup_style.css'>
      <!--================== AKHIR BLOK STYLE ================================= -->
      <!--================== AWAL BLOK JS ================================= -->
      <!-- get jQuery from the google apis -->
      <script type='text/javascript' src='<?= base_url()?>assets/themes/themes9/master/master/template/elegante1grey/src/js/jquery/1.10.1/jquery.js'></script>
      <!-- JS MENU -->
      <script src='<?= base_url()?>assets/themes/themes9/master/master/template/elegante1grey/src/js/menu/responsive-nav.js'></script>
      <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
      <script type='text/javascript' src='<?= base_url()?>assets/themes/themes9/master/master/template/elegante1grey/src/js/jquery.themepunch.plugins.min.js'></script>
      <script type='text/javascript' src='<?= base_url()?>assets/themes/themes9/master/master/template/elegante1grey/src/js/jquery.themepunch.revolution.min.js'></script>
      <!--================== AKHIR BLOK JS ================================= -->
      <link rel='stylesheet' href='<?= base_url()?>assets/themes/themes9/master/master/template/elegante1grey/lib_template/elegante2/css/bootstrap.min.css'>
      <script src='<?= base_url()?>assets/themes/themes9/master/master/template/elegante1grey/lib_template/elegante2/js/bootstrap.min.js'></script>
      <script type='text/javascript'>
         $(document).ready(function(){
         	$('#myModal').modal('show');
         });
      </script>
      <!-- Link Swiper's CSS -->
      <link rel='stylesheet' href='<?= base_url()?>assets/themes/themes9/master/master/template/elegante1grey/src/slider/css/swiper.min.css'>
      <!-- Demo styles -->
      <style>
         .swiper-container {
         width: 100%;
         height: 100%;
         color:#9b9a8b;
         }
         .swiper-slide {
         text-align: center;
         font-size: 18px;
         /* Center slide text vertically */
         display: -webkit-box;
         display: -ms-flexbox;
         display: -webkit-flex;
         display: flex;
         -webkit-box-pack: center;
         -ms-flex-pack: center;
         -webkit-justify-content: center;
         justify-content: center;
         -webkit-box-align: center;
         -ms-flex-align: center;
         -webkit-align-items: center;
         align-items: center;
         }
         .gaya
         {
         display: inline-block;
         width: 65px;
         height: 65px;
         /*background: rgba(241, 78, 149, 0.8);*/
         background-color:#45595e;
         -webkit-border-radius: 50%;
         -moz-border-radius: 50%;
         -ms-border-radius: 50%;
         border-radius: 50%;
         position: relative;
         animation: pulse 1s ease infinite;
         color:#FFFFFF;
         font-size:28px;
         margin-top:10px;
         padding-top:7px;
         }
         .gaya span
         {
         font-size:8px;
         display:block;
         color:white;
         margin-top:-10px;
         font-family: Montserrat, sans-serif;
         }
         .couple-wrap {
         width: 90%;
         margin: 0 auto;
         position: relative;
         }
         @media screen and (max-width: 768px) {
         .couple-wrap {
         width: 100%;
         }
         }
         .heart {
         position: absolute;
         top: 4em;
         left: 0;
         right: 0;
         z-index: 99;
         animation: pulse 1s ease infinite;
         }
         .heart i {
         font-size: 20px;
         background: #fff;
         padding: 20px;
         color: #F14E95;
         -webkit-border-radius: 50%;
         -moz-border-radius: 50%;
         -ms-border-radius: 50%;
         border-radius: 50%;
         }
         @media screen and (max-width: 768px) {
         .heart {
         display: none;
         }
         }
         .couple-half {
         width: 50%;
         float: left;
         }
         @media screen and (max-width: 768px) {
         .couple-half {
         width: 100%;
         }
         }
         .couple-half h3 {
         font-family: 'Roboto Slab', serif;
         color:#474848;
         font-size: 20px;
         }
         .couple-half .groom, .couple-half .bride {
         float: left;
         -webkit-border-radius: 50%;
         -moz-border-radius: 50%;
         -ms-border-radius: 50%;
         border-radius: 50%;
         width: 150px;
         height: 150px;
         }
         .couple-half .groom img, .couple-half .bride img {
         width: 150px;
         height: 150px;
         -webkit-border-radius: 50%;
         -moz-border-radius: 50%;
         -ms-border-radius: 50%;
         border-radius: 50%;
         }
         @media screen and (max-width: 480px) {
         .couple-half .groom, .couple-half .bride {
         width: 100%;
         height: 140px;
         }
         .couple-half .groom img, .couple-half .bride img {
         width: 120px;
         height: 120px;
         margin: 0 auto;
         }
         }
         .couple-half .groom {
         float: right;
         margin-right: 5px;
         }
         .couple-half .bride {
         float: left;
         margin-left: 5px;
         }
         .couple-half .desc-groom {
         padding-right: 180px;
         text-align: right;
         }
         .couple-half .desc-bride {
         padding-left: 180px;
         text-align: left;
         }
         @media screen and (max-width: 480px) {
         .couple-half .groom, .couple-half .bride {
         margin-left: 0;
         margin-right: 0;
         }
         .couple-half .desc-groom {
         padding-right: 0;
         text-align: center;
         }
         .couple-half .desc-bride {
         padding-left: 0;
         text-align: center;
         }
         }
         .videoWrapper 
         {
         position: relative;
         padding-bottom: 56.25%; /* 16:9 */
         padding-top: 25px;
         height: 0;
         }
         .videoWrapper iframe {
         position: absolute;
         top: 0;
         left: 0;
         width: 100%;
         height: 100%;
         }
         .float
         {
         position: fixed;
         width: 50px;
         height: 50px;
         bottom: 40px;
         right: 15px;
         background-color: #45595e;
         opacity: 0.8;
         color: #FFF;
         border-radius: 50px;
         text-align: center;
         padding-top:12px;	
         z-index: 99;
         }
         .cd-timeline__container::before
         {
         background-color:#45595e;
         }
         .cd-timeline__content
         {
         -webkit-box-shadow: 0 3px 0 #45595e;
         box-shadow: 0 3px 0 #45595e;
         }
         .content_event1
         {
         border: 2px solid #45595e;
         }
         .atas_kiri
         {
         background-color:#45595e;
         }
         .atas_kanan
         {
         background-color:#45595e;
         }
         .bawah_kiri
         {
         background-color:#45595e;
         }
         .bawah_kanan
         {
         background-color:#45595e;
         }
         .form-input
         {
         padding:10px;
         border-radius:5px;
         border: 1px solid #45595e;
         background-color:white;
         }
         #overlay_popup {
         position: fixed; /* Sit on top of the page content */
         width: 100%; /* Full width (cover the whole page) */
         height: 100%; /* Full height (cover the whole page) */
         top: 0;
         left: 0;
         right: 0;
         bottom: 0;
         background-color: rgba(0,0,0,0.5); /* Black background with opacity */;
         }
      </style>
      <style>
         @media(max-width : 720px)
         {
         #fh5co-header
         {
         background-image:url(../00.asset/images/rendydemitriawedding/background_mobile_914.jpg);
         background-attachment: scroll;
         background-repeat: no-repeat;
         background-size: cover;
         background-position: center;
         background-size: cover;
         height:700px;
         }
         .br
         {
         margin-left:10px;
         }
         .caseless
         {
         width:80%;
         margin-top:10px;
         font-size:14px;
         }
         #fh5co-header2
         {
         background-image:url(../00.asset/images/rendydemitriawedding/background_mobile_914.jpg);
         background-attachment: scroll;
         background-repeat: no-repeat;
         background-size: cover;
         background-position: center;
         background-size: cover;
         height:100vh;
         }
         }
         @media(min-width : 720px)
         {
         #fh5co-header
         {
         background-image:url(<?= $gambar1 ?>);
         background-attachment: fixed;
         background-repeat: no-repeat;
         background-size: cover;
         background-position: center; 
         background-size: cover;
         height:700px;
         }
         .br
         {
         margin-left:10px;
         }
         .caseless
         {
         width:20%;
         float:left;
         margin-left:20%;
         margin-top:10px;
         font-size:14px;
         }
         #fh5co-header2
         {
         background-image:url(<?= $gambar1 ?>);
         background-attachment: fixed;
         background-repeat: no-repeat;
         background-size: cover;
         background-position: center; 
         background-size: cover;
         height:100vh;
         }
         }
      </style>
      <style type='text/css'>
         @font-face
         {
         font-family: 'Font Digital';
         src: url('GracedScriptPersonalUse-V5XV.ttf');
         }
         @font-face
         {
         font-family: 'Font Digital 2';
         src: url('Daniels%20Signature%20DEMO.ttf');
         }
         #font_digital {
         font-family: 'Font Digital';
         }
         #font_digital_2 {
         font-family: 'Font Digital 2';
         font-size:60px;
         }
         #font_digital_2 span{
         font-family: Montserrat, sans-serif;
         text-transform:uppercase;
         color:#474848;
         margin-top:-20px;
         }
         .alamat_saja
         {
         font-family: Cormorant Infant, serif; font-size:28px; color:#474848;
         text-transform:uppercase;
         }
         .alamat_saja span
         {
         font-family: Cormorant Infant, serif; font-size:14px; color:#474848;
         text-transform:uppercase;
         display:block;
         margin-top:-5px;
         }
         #contoh1::-webkit-input-placeholder{
         color: #45595e;
         }
      </style>
      <title><?= $data['panggilan_p'].' ' .$data['panggilan_l']?> Wedding</title>
   </head>
   <body style='background-color:white; background-image: url(<?= base_url() ?>assets/themes/themes9/master/master/template/elegante1grey/images/Bg-01.png); overflow-x:hidden;'>
      <audio loop preload='auto'  id='myAudio'>
         <source src='<?= base_url() ?>assets/music/<?= $data['music'] ?>'>
      </audio>
      <a onclick='playAudio()' type='button' id='un-mute1' class='float'><img src='<?= base_url() ?>assets/themes/themes9/master/master/template/elegante1grey/images/music-mute.png' width='30px;'></a>
      <a onclick='pauseAudio()' type='button' id='mute1'  class='float'><img src='<?= base_url() ?>assets/themes/themes9/master/master/template/elegante1grey/images/music.png' width='30px;'></a>
      <!--=========== AWAL MENU =============== --> 
      <div class='menu'>
         <div class='menu_content'>
            <a href='#home' class='logo_menu' data-scroll><?= $data['panggilan_p'].' ' .$data['panggilan_l']?> Wedding</a>
            <nav class='nav-collapse'>
               <ul>
                  <li class='menu-item'><a href='#home' data-scroll>BERANDA</a></li>
                  <li class='menu-item'><a href='#event' data-scroll>DETAIL ACARA</a></li>
                  <li class='menu-item'><a href='#photo' data-scroll>GALERI</a></li>
                  <li class='menu-item'><a href='#wishes' data-scroll>UCAPAN & DO`A</a></li>
               </ul>
            </nav>
         </div>
      </div>
      <!--=========== AKHIR MENU =============== -->
      <div id='home'>
         <div class='tp-banner-container'>
            <div class='tp-banner' >
               <ul>
                  <!-- SLIDE  -->
                  <li data-transition='boxslide' data-slotamount='5' data-masterspeed='700' >
                     <!-- MAIN IMAGE -->
                     <img src='<?= $gambar1 ?>' data-bgfit='cover' data-bgposition='center top' data-bgrepeat='no-repeat'>
                     <!-- LAYERS -->
                     <div class='tp-caption mediumlarge_light_white_center customin customout start'
                        data-x='center'
                        data-voffset='100'
                        data-y='center'
                        data-customin='x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;'
                        data-customout='x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;'
                        data-speed='1000'
                        data-start='500'
                        data-easing='Back.easeInOut'
                        data-endspeed='300'
                        >
                        <div class='style_opening_image' style='text-align:center; z-index: 6; white-space: nowrap; line-height: 22px; font-weight: 400; color: #FFFFFF; letter-spacing: 0px;font-family:Kurale; margin-top:-100px;'>	
                           <span style='text-transform:uppercase;font-family: Montserrat, sans-serif;font-size:14px; font-style:italic; letter-spacing:1px;'><?= $data['panggilan_p'].' - ' .$data['panggilan_l']?></span><br>
                        </div>
                     </div>
                     <!-- LAYER NR. 4 -->
                     <div class='tp-caption mediumlarge_light_white_center customin customout start'
                        data-x='center'
                        data-y='center'
                        data-voffset='160'
                        data-customin='x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;'
                        data-customout='x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;'
                        data-speed='1000'
                        data-start='1000'
                        data-easing='Back.easeInOut'
                        data-endspeed='300'
                        >
                        <div class='style_opening' style='z-index: 5; white-space: nowrap; line-height: 22px; font-weight: 400; color: #45595e; letter-spacing: 0px;font-family:Aladin; margin-top:-100px;'>
                           <div style='margin-top:-10px; margin-bottom:35px; color:white; font-family: Cormorant Infant, serif; font-size:80px; letter-spacing:-2px;' >
                              Wedding
                           </div>
                           <div style='margin-top:-15px; margin-left:-20px; margin-bottom:20px; color:white; font-family: Cormorant Infant, serif; font-size:40px; letter-spacing:-2px;' >
                              Announcement
                           </div>
                        </div>
                     </div>
                     <!-- LAYER NR. 4 -->
                     <div class='tp-caption mediumlarge_light_white_center customin customout start'
                        data-x='center'
                        data-y='center'
                        data-voffset='205'
                        data-customin='x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;'
                        data-customout='x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;'
                        data-speed='1000'
                        data-start='1500'
                        data-easing='Back.easeInOut'
                        data-endspeed='300'
                        >
                        <div class='style_opening_tanggal' style='z-index: 6; white-space: nowrap; line-height: 22px; font-weight: 400; color: #FFFFFF; letter-spacing: 0px;font-family:Kurale; margin-top:-70px;'>
                           <div style='text-transform:uppercase;color:white; disply:block; font-family: Montserrat, sans-serif; font-size:12px; font-style:italic; letter-spacing:1px;'><?= $hari.', '.date_format($tanggal, 'd').' '.$bulan.' '.date_format($tanggal,'Y'); ?></div>
                        </div>
                     </div>
                  </li>
                  <li data-transition='boxslide' data-slotamount='5' data-masterspeed='700' >
                     <!-- MAIN IMAGE -->
                     <img src='<?= $gambar2 ?>' data-bgfit='cover' data-bgposition='center top' data-bgrepeat='no-repeat'>
                     <!-- LAYERS -->
                     <div class='tp-caption mediumlarge_light_white_center customin customout start'
                        data-x='center'
                        data-voffset='100'
                        data-y='center'
                        data-customin='x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;'
                        data-customout='x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;'
                        data-speed='1000'
                        data-start='500'
                        data-easing='Back.easeInOut'
                        data-endspeed='300'
                        >
                        <div class='style_opening_image' style='text-align:center; z-index: 6; white-space: nowrap; line-height: 22px; font-weight: 400; color: #FFFFFF; letter-spacing: 0px;font-family:Kurale; margin-top:-100px;'>	
                           <span style='text-transform:uppercase;font-family: Montserrat, sans-serif;font-size:12px; font-style:italic; letter-spacing:1px;'>WEDDING ANNOUNCEMENT</span><br>
                        </div>
                     </div>
                     <!-- LAYER NR. 4 -->
                     <div class='tp-caption mediumlarge_light_white_center customin customout start'
                        data-x='center'
                        data-y='center'
                        data-voffset='160'
                        data-customin='x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;'
                        data-customout='x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;'
                        data-speed='1000'
                        data-start='1000'
                        data-easing='Back.easeInOut'
                        data-endspeed='300'
                        >
                        <div class='style_opening' style='z-index: 5; white-space: nowrap; line-height: 22px; font-weight: 400; color: #45595e; letter-spacing: 0px;font-family:Aladin; margin-top:-100px;'>
                           <div style='margin-top:-10px; margin-bottom:35px; color:white; font-family: Cormorant Infant, serif; font-size:80px; letter-spacing:-2px;' >
                              <?= $data['panggilan_p'] ?> &amp;
                           </div>
                           <div style='margin-top:0px; margin-bottom:20px; color:white; font-family: Cormorant Infant, serif; font-size:80px; letter-spacing:-2px;' >
						   <?= $data['panggilan_l'] ?>
                           </div>
                        </div>
                     </div>
                     <!-- LAYER NR. 4 -->
                     <div class='tp-caption mediumlarge_light_white_center customin customout start'
                        data-x='center'
                        data-y='center'
                        data-voffset='205'
                        data-customin='x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;'
                        data-customout='x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;'
                        data-speed='1000'
                        data-start='1500'
                        data-easing='Back.easeInOut'
                        data-endspeed='300'
                        >
                        <div class='style_opening_tanggal' style='z-index: 6; white-space: nowrap; line-height: 22px; font-weight: 400; color: #FFFFFF; letter-spacing: 0px;font-family:Kurale; margin-top:-40px;'>
                           <div style='text-transform:uppercase;color:white; disply:block; font-family: Montserrat, sans-serif; font-size:12px; font-style:italic; letter-spacing:1px;'><?= $hari.', '.date_format($tanggal, 'd').' '.$bulan.' '.date_format($tanggal,'Y') ?></div>
                        </div>
                     </div>
                  </li>
               </ul>
               <div class='tp-bannertimer'></div>
            </div>
         </div>
         <script type='text/javascript'>
            var revapi;
            
            jQuery(document).ready(function() {
            
            	   revapi = jQuery('.tp-banner').revolution(
            		{
            			delay:5000,
            			startwidth:1170,
            			startheight:500,
            			hideThumbs:10,
            			fullWidth:'off',
            			fullScreen:'on',
            			fullScreenOffsetContainer: ''
            		});
            
            });	//ready
            
         </script>
      </div>
      <div class='space1'></div>
      <div class='content' id='event'>
         <div class='container'>
            <div class='animatedParent' data-sequence='500' >
               <div class='happy_couple'>
                  <div class='animated growIn slower'  data-id='1' style='margin-top:-50px;'>
                     <img src='<?= base_url() ?>assets/themes/themes9/bunga1a.png' style='width:80px;'>
                  </div>
                  <div class='animated growIn slower' data-id='2' style='margin-top:20px;'>
                     <div style='color:#484949; disply:block; font-family: Montserrat, sans-serif; font-size:12px; letter-spacing:1px;'>
                        "Demikianlah mereka bukan lagi dua, melainkan satu. Karena itu, apa yang telah dipersatukan Allah, tidak boleh diceraikan manusia."<br>Matius 19:6<br><br>
                        Atas nama Tuhan Yang Maha Kasih, kami akan melangsungkan pernikahan.
                     </div>
                  </div>
               </div>
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
         <div class='container'>
            <div class='couple-wrap'>
               <div class='couple-half' style='margin-top:10px;margin-bottom:10px;'>
                  <div class='animatedParent' data-sequence='500' >
                     <div class='animated growIn'  data-id='1'>
                        <div class='groom' style='text-align:center;'>
                           <img src="<?= $brid ?>" alt="groom" class="img-responsive">
                        </div>
                     </div>
                     <div class='desc-groom'>
                        <h3 class='animated growIn slower'  data-id='2' style='font-family: Cormorant Infant, serif;'><?= $data['nama_p'] ?></h3>
                        <!-- untuk deskripsi mempelai -->
                        <p class='animated growIn slower'  data-id='3' style='color: #45595e; font-family: Montserrat, sans-serif;'><i style='font-size:12px; color: #45595e;'><?= $tentang_p ?></p>
                     </div>
                  </div>
               </div>	
               <div class='couple-half' style='margin-top:10px;margin-bottom:10px;'>
                  <div class='animatedParent' data-sequence='500' >
                     <div class='animated growIn'  data-id='1'>
                        <div class='bride' style='text-align:center;'>
                           <img src="<?= $groom ?>" alt="groom" class="img-responsive">
                        </div>
                     </div>
                     <div class='desc-bride'>
                        <h3 class='animated growIn slower'  data-id='2' style='font-family: Cormorant Infant, serif;'><?= $data['nama_l'] ?></h3>
                        <!-- untuk deskripsi mempelai -->
                        <p  class='animated growIn slower'  data-id='3' style='color: #45595e;font-family: Montserrat, sans-serif;'><i style='font-size:12px; color: #45595e;'><?= $tentang_l ?></p>
                     </div>
                  </div>
               </div>
               <div class='animatedParent' data-sequence='500'>
                  <div class='animated growIn'  data-id='1'>
                     <p class='heart' style='text-align:center;'><i class='fa fa-heart' style='color:#45595e; margin-top:-10px;'></i></p>
                  </div>
               </div>
            </div>
            <div class='animatedParent' data-sequence='500' >
               <div class='happy_couple'>
                  <div class='animated growIn slower'  data-id='1' style='margin-top:-50px;'>
                     <img src='<?= base_url() ?>assets/themes/themes9/bunga1a.png' style='width:80px;'>
                  </div>
                  <span class='animated growIn slower' data-id='2' style='margin-top:5px;'>
                     <p style='text-transform:uppercase;font-family: Cormorant Infant, serif; font-size:20px;'>
                        <span style='text-transform:uppercase;font-family: Cormorant Infant, serif; font-size:24px; margin-bottom:-10px;color:#484949;'><?= $hari ?></span>
						<?= date_format($tanggal, 'd'). ' '.$bulan.' '.date_format($tanggal,'Y') ?>
                     </p>
                  </span>
                  <div class='animated growIn slower'  data-id='3' style='margin-top:-30px;'>
                     <img src='<?= base_url() ?>assets/themes/themes9/bunga2a.png' style='width:50px;'>
                  </div>
                  <div class='animated growIn slower' data-id='4' style='margin-top:20px;'>
                     <div id='hitungmundur1' class='gaya' style='background-color:#45595e'></div>
                     <div id='hitungmundur2' class='gaya' style='background-color:#45595e'></div>
                     <div id='hitungmundur3' class='gaya' style='background-color:#45595e'></div>
                     <div id='hitungmundur4' class='gaya' style='background-color:#45595e'></div>
                  </div>
                  <div class='animated growIn slower' data-id='5' style='margin-top:20px;'>
                     <div style='color:#484949; disply:block; font-family: Montserrat, sans-serif; font-size:12px; letter-spacing:1px;'>
                        Dengan tidak mengurangi rasa hormat. Sehubungan dengan adanya wabah Covid-19 dan keterbatasan kami untuk mengundang, maka acara pernikahan hanya akan di hadiri oleh pihak keluarga dan kerabat terdekat saja.<br>
                     </div>
                  </div>
                  <div class='animated growIn slower' data-id='6' style='margin-top:20px;'>
                     <div style='color:#484949; disply:block; font-family: Montserrat, sans-serif; font-size:12px; letter-spacing:1px;'>
                        Namun kami mengundang Bapak/ Ibu/ Saudara/ Saudari untuk bergabung dalam siaran tunda prosesi Pemberkatan Pernikahan kami melalui tautan berikut ini:
                     </div>
                     <!-- <div style='margin-bottom:-10px;'>
                        <img src='bunga1a.png' style='width:50px;'>
                     </div>
                     <a href='https://youtu.be/4Wqr5igpcX0' class='btn btn-primary' style='background-color:#45595e;' target='blank'>
                     <i class='fa fa-video-camera'></i> GABUNG DISINI
                     </a>
                     <p style='margin-top:5px;font-size:12px;font-family: Montserrat, sans-serif;'>Live <img src='youtube.png' style='width:110px;'></p>
                     </p>
                     <div style='margin-top:-30px;'>
                        <img src='bunga2a.png' style='width:30px;'>
                     </div> -->
                  </div>
                  <div class='animated growIn slower' data-id='7' style='margin-top:20px;'>
                     <div style='color:#484949; disply:block; font-family: Montserrat, sans-serif; font-size:12px; letter-spacing:1px;'>
                        Kami sangat mengharapkan doa serta restu dari Bapak/ Ibu/ Saudara/ Saudari sekalian, sehingga acara pernikahan ini dapat berjalan dengan lancar dan diberkati oleh Tuhan Yang Maha Kasih.<br><br>Semoga Tuhan memberkati kita semua.<br>Salam dari kami yang berbahagia<br>Demitria dan Rendy
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class='space1'></div>
      <div class='content' id='photo'>
         <div class='animatedParent' data-sequence='500' >
            <div class='happy_couple'>
               <p class='animated growIn slower' id='font_digital_2'  data-id='1' style='font-family: Cormorant Infant, serif; font-size:38px;'>Galeri</p>
               <div class='animated growIn slower'  data-id='1' style='margin-top:-30px;margin-bottom:-20px;'>
                  <div class='line'><img src='<?= base_url() ?>assets/themes/themes9/bunga2a.png' style='width:100px;'></div>
               </div>
            </div>
            <div class='container'>
               <div class='animated fadeInUp'  data-id='2'>
			   		<?php for ($mulai1 = 0; $mulai1 < count($gallery); $mulai1++) { ?>
						<div class='col-md-6' style='margin-bottom:20px;'>
							<img src='<?= $gallery[$mulai1]['gambar'] ?>'>
						</div>
					<?php } ?>
                  <div class='clear'></div>
               </div>
            </div>
            <div class='clear'></div>
         </div>
      </div>
      <div class='space1'></div>
      <div class='content' id='wishes'>
         <div class='animatedParent' data-sequence='500'>
            <div class='container'>
               <div class='happy_couple' style='margin-bottom:0px;'>
                  <p class='animated growIn slower' id='font_digital_2'  data-id='1' style='font-family: Cormorant Infant, serif; font-size:34px;'>Ucapan&nbsp;&&nbsp;Do`a</p>
                  <div class='animated growIn slower'  data-id='1' style='margin-top:-30px;margin-bottom:-20px;'>
                     <div class='line'><img src='<?= base_url() ?>assets/themes/themes9/bunga2a.png' style='width:100px;'>
                     </div>
                  </div>
               </div>
               <div class='animated fadeInUp'  data-id='2'>
                  <div class='swiper-container'>
                     <div class='swiper-wrapper'>
					 	<?php foreach ($ucapan as $item) { ?>
                        <div class='swiper-slide'>
                           <div style='width:80%; font-size:14px; text-align:center; margin-left:10%;margin-right:10%'>
                              <h3 style='text-transform:capitalize;'>
                                 <?= $item['oleh'] ?>
                                 <span style='display:block; font-family: Open Sans, Arial, sans-serif; font-size:12px; margin-top:5px; text-transform:lowercase;'>
                                 </span>
                              </h3>	
                              <p style='font-size:14px; margin-top:15px;'>
                                 <?= $item['ucapan'] ?>
                              </p>
                           </div>
                        </div>
						 <?php } ?>
                     </div>
                     <!-- Add Arrows -->
                     <div class='swiper-button-next'></div>
                     <div class='swiper-button-prev'></div>
                  </div>
                  <div class='clear'><br><br></div>
                  <div id='fh5co-started'>
                     <form class='form-inline'>
                        <input type='hidden' name='id_event' value='914'>
                        <div class='form-group' style='display:block; width:100%;'>
                           <input type='hidden' name='header_link' value='index.html'>
                           <input type='hidden' class='form-control' id='id' value="<?= $data["id_pernikahan"] ?>">
                           <input type='text' class='form-input'  id="nama" placeholder="Nama" name="nama" required style='width:100%; color:#45595e; font-family: Montserrat, sans-serif;' placeholder='NAMA'>
                        </div>
                        <div style='clear:both;margin-bottom:5px;'></div>
                        <div class='form-group'style='display:block; width:100%;'>
                           <textarea class='form-input'  name="notes" id="harapan" placeholder="Ucapan untuk mempelai" rows='10' required style='width:100%; color:#45595e;font-family: Montserrat, sans-serif;' placeholder='UCAPAN DAN DO`A'></textarea>
                        </div>
                        <div style='clear:both;margin-bottom:5px;'></div>
                        <div style='width:100%;'>
                           <button type='submit' onClick="simpanyes()" class='btn btn-block' style='color:white; background-color:#45595e;font-family: Montserrat, sans-serif;'>KIRIM</button>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
            <div class='clear'><br><br></div>
         </div>
      </div>
      <div class='clear'></div>
      <!--Footer Section start-->
      <footer id='footer'>
         <div class='main-footer'>
            <div class='container' style='width:80%'>
               <div class='row'>
                  <div class='left-footer'>
                     <span class='psd-temp-class' style='color:#FFF;'>
                     &copy; 2020 Wedding Announcement <?= $data['panggilan_p'].' ' .$data['panggilan_l']?> By Limstudio.
                     </span>
                  </div>
                  <div class='right-footer' style='font-size:12px;'>
                     <a style='color:white' href='https://www.instagram.com/limstudio_indo/' target='blank'><i class='fa fa-instagram' style='font-size:14px;'></i> @limstudio_indo</a><span class='br'></span>
                     <a style='color:white' href='../index.html' target='blank'><i class='fa fa-globe'></i> www.limstudio.site</a>
                  </div>
                  <div class='clear'></div>
               </div>
            </div>
         </div>
      </footer>
      <!--Footer Section End-->
      <script src='<?= base_url()?>assets/themes/themes9/master/master/template/elegante1grey/src/js/main_story.js'></script>
      <script src='<?= base_url()?>assets/themes/themes9/master/master/template/elegante1grey/src/js/menu/fastclick.js'></script>
      <script src='<?= base_url()?>assets/themes/themes9/master/master/template/elegante1grey/src/js/menu/scroll.js'></script>
      <script src='<?= base_url()?>assets/themes/themes9/master/master/template/elegante1grey/src/js/menu/fixed-responsive-nav.js'></script>
      <script src='<?= base_url()?>assets/themes/themes9/master/master/template/elegante1grey/src/js/simplyCountdown.js'></script>
      <!-- Main -->
      <script src='<?= base_url()?>assets/themes/themes9/master/master/template/elegante1grey/src/js/main.js'></script>
      <script>
         var d = new Date(new Date().getTime() + 200 * 120 * 120 * 2000);
         
         // default example
         simplyCountdown('.simply-countdown-one', {
         	year: d.getFullYear(),
         	month: d.getMonth() + 1,
         	day: d.getDate()
         });
         
         //jQuery example
         $('#simply-countdown-losange').simplyCountdown({
         	year: d.getFullYear(),
         	month: d.getMonth() + 1,
         	day: d.getDate(),
         	enableUtc: false
         });
         function simpanyes() {
                $(".loading").show();
                var harapan = $("#harapan").val();
                var nama = $("#nama").val();
                if ($.trim(nama) == "") {
                    alert("Nama Masih Kosong !!");
                    $("#nama").focus();
                    return false;
                } else if ($.trim(harapan) == "") {
                    alert("Harapan Masih Kosong !!");
                    $("#harapan").focus();
                    return false;
                }

                var nama = $("#nama").val();
                var id = $("#id").val();
                var keluarga = $("#siapa").val();
                var ucapan = $("#harapan").val();
                var hadir = $("#hadir").val();
                var url = "<?= base_url() ?>inv/insert";
                var string = $("#isi_harapan").serialize();
                console.log(string);
                $.ajax({
                    type: "POST",
                    url: url,
                    data: {
                        name: nama,
                        id: id,
                        email: keluarga,
                        notes: ucapan,
                        hadir: hadir,
                    },
                    success: function (data) {
                        // $(".loading").hide();
                        console.log(data);
                        if (data == "1") {
                            $("#loader").hide();
                            $("#success").slideDown("slow");
                            setTimeout(function () {
                                $("#success").slideUp("slow");
                            }, 3000);
                            location.reload(true).delay(1000);
                        } else {
                            $("#loader").hide();
                            $("#error").slideDown("slow");
                            setTimeout(function () {
                                $("#error").slideUp("slow");
                            }, 3000);
                            $("#loader").hide();
                            $(".button-submit").show();
                        }
                    },
                    error: function () {
                        $(".loading").hide();
                        $("#loader").hide();
                        $(".button-submit").show();
                        $("#error").slideDown("slow");
                        setTimeout(function () {
                            $("#error").slideUp("slow");
                        }, 3000);
                    },
                });
            }
      </script>
      <script>
         Hitung();
         function Hitung()
         {
         	
         		tahun = <?= date_format($tanggal,'Y') ?>;
         		bulan = <?= date_format($tanggal,'m') ?>;
         		hari = <?= date_format($tanggal,'d') ?>;
         		jam = 10;
         		menit = 00;
         		detik = 00;
         	
         
         
         setTimeout(function()
         {
         tglTarget = new Date(tahun, (bulan - 1), hari, jam, menit, detik, 00);
         tglSkrg = new Date();
         tglSkrg = new Date(tglSkrg.getFullYear(), tglSkrg.getMonth(), tglSkrg.getDate(), tglSkrg.getHours(), tglSkrg.getMinutes(), tglSkrg.getSeconds(), 00, 00);
         var sisaHari = parseInt((tglTarget-tglSkrg)/86400000);
         var sisaJam = parseInt((tglTarget-tglSkrg)/3600000);
         var sisaMenit = parseInt((tglTarget-tglSkrg)/60000);
         var sisaDetik = parseInt((tglTarget-tglSkrg)/1000);
         detik = sisaMenit*60;
         detik = sisaDetik-detik;
         menit = sisaJam*60;
         menit = sisaMenit-menit;
         jam = sisaHari*24;
         jam = (sisaJam-jam) < 0 ? 0 : sisaJam-jam;
         hari = sisaHari;
         mulaiHitung(hari,jam, menit,detik,tahun);
         }, 1000);
         }
         
         function mulaiHitung(hari, jam, menit, detik, tahun){
         document.getElementById("hitungmundur1").innerHTML=""+hari+"<span>HARI</span>";
         document.getElementById("hitungmundur2").innerHTML=""+jam+"<span>JAM</span>";
         document.getElementById("hitungmundur3").innerHTML=""+menit+"<span>MENIT</span>";
         document.getElementById("hitungmundur4").innerHTML=""+detik+"<span>DETIK</span>";
         Hitung();
         }
         
      </script>
      <!-- Swiper JS -->
      <script src='<?= base_url()?>assets/themes/themes9/master/master/template/elegante1grey/src/slider/js/swiper.min.js'></script>
      <!-- Initialize Swiper -->
      <script>
         var swiper = new Swiper('.swiper-container', {
           navigation: {
         	nextEl: '.swiper-button-next',
         	prevEl: '.swiper-button-prev',
           },
         });
          
      </script>
      <script>
         document.getElementById('mute1').style.display = 'none';
         
         var x = document.getElementById('myAudio'); 
         function playAudio() { 
         	x.play();
         	document.getElementById('un-mute1').style.display = 'none';
         	document.getElementById('mute1').style.display = 'inline-block';
         } 
         function pauseAudio() { 
         	x.pause();
         	document.getElementById('mute1').style.display = 'none';
         	document.getElementById('un-mute1').style.display = 'inline-block';
         }
          
      </script>
      <script src='<?= base_url()?>assets/themes/themes9/master/master/template/elegante1grey/animasi/js/css3-animate-it.js'></script>
   </body>
</html>