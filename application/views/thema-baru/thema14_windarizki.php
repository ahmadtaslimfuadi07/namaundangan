<?php date_default_timezone_set("Asia/Jakarta"); ?>
<!DOCTYPE html>
<html lang="en-US">
    <!-- Mirrored from limstudio/gold11/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Jun 2021 10:14:27 GMT -->
    <!-- Added by HTTrack -->
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <!-- /Added by HTTrack -->
    <head>
        <meta charset="UTF-8">
        <meta name='robots' content='max-image-preview:large' />
        <!-- This site is optimized with the Yoast SEO plugin v15.6.2 - https://yoast.com/wordpress/plugins/seo/ -->
        <title>Pernikahan <?= $data['panggilan_l'] ?> &amp; <?= $data['panggilan_p'] ?> - Possible Wedding (Best Digital Invitation)</title>
        <?php 

            if ($tujuan == "") {
                $tujuan = "";
            }
            foreach ($gambar as $it) {
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
                    case '5':
                        $gambar5 = $it['gambar'];
                        break;
                    case '1':
                        $gambar1 = $it['gambar'];
                        break;
                }
            }

            foreach ($tentang as $item) {
                if ($item['jenis'] == '1') {
                    $tentang_l = $item['tentang'];
                    $fb_l = $item['link_fb'];
                    $ig_l = $item['link_ig'];
                } else {
                    $tentang_p = $item['tentang'];
                    $fb_p = $item['link_fb'];
                    $ig_p = $item['link_ig'];
                }
            } 
        ?> 
        
        
         
        <style>
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
      
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/themes/themes14/') ?>wp-content/cache/limstudio/wpfc-minified/6oic17b1/dgt61.css" media="all"/>
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/themes/themes14/') ?>wp-content/cache/limstudio/wpfc-minified/7y0su7cj/dgt61.css" media="print"/>
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/themes/themes14/') ?>wp-content/cache/limstudio/wpfc-minified/l92uukjd/dgt61.css" media="all"/>
        <link rel='stylesheet' id='elementor-post-6-css'  href='<?= base_url('assets/themes/themes14/') ?>wp-content/uploads/elementor/css/post-62007.css?ver=1619003256' media='all' />
         
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/themes/themes14/') ?>wp-content/cache/limstudio/wpfc-minified/8jr1qwzc/dgt61.css" media="all"/>
        <link rel='stylesheet' id='elementor-post-14975-css'  href='<?= base_url('assets/themes/themes14/') ?>wp-content/uploads/elementor/css/post-14975d862.css?ver=1619003462' media='all' />
        <link rel='stylesheet' id='google-fonts-1-css'  href='https://fonts.googleapis.com/css?family=Quicksand%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CPinyon+Script%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CPrata%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CBaskervville%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CLibre+Baskerville%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CPoppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;ver=5.7.2' media='all' />
        
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/themes/themes14/') ?>wp-content/cache/limstudio/wpfc-minified/9k1a0pic/dgt6h.css" media="all"/>
        <script src='<?= base_url('assets/themes/themes14/') ?>wp-content/cache/limstudio/wpfc-minified/7jtf0lqc/dgt61.js' type="text/javascript"></script>
        <link rel="https://api.w.org/" href="https://limstudio/wp-json/" />
        <link rel="alternate" type="application/json" href="https://limstudio/wp-json/wp/v2/pages/14975" />
        <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://limstudio/xmlrpc.php?rsd" />
        <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://limstudio/wp-includes/wlwmanifest.xml" />
        <meta name="generator" content="WordPress 5.7.2" />
        <link rel='shortlink' href='https://limstudio/?p=14975' />
        <link rel="alternate" type="application/json+oembed" href="https://limstudio/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fmy.possiblewedding.com%2Fgold11%2F" />
        <link rel="alternate" type="text/xml+oembed" href="https://limstudio/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fmy.possiblewedding.com%2Fgold11%2F&amp;format=xml" />
        <!-- This site is embedding videos using the Videojs HTML5 Player plugin v1.1.5 - http://wphowto.net/videojs-html5-player-for-wordpress-757 --> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover" />

        <style type="text/css">
            .elementor-14975 .elementor-element.elementor-element-6cd32ab:not(.elementor-motion-effects-element-type-background) > .elementor-column-wrap, .elementor-14975 .elementor-element.elementor-element-6cd32ab > .elementor-column-wrap > .elementor-motion-effects-container > .elementor-motion-effects-layer{
                background-image: url('<?= $gambar1 ?>')
            }

            .elementor-14975 .elementor-element.elementor-element-24f765c6:not(.elementor-motion-effects-element-type-background), .elementor-14975 .elementor-element.elementor-element-24f765c6 > .elementor-motion-effects-container > .elementor-motion-effects-layer{
                background-image: url('<?= $gambar2 ?>')
            }
            .elementor-14975 .elementor-element.elementor-element-ceed397:not(.elementor-motion-effects-element-type-background), .elementor-14975 .elementor-element.elementor-element-ceed397 > .elementor-motion-effects-container > .elementor-motion-effects-layer{
                background-image: url('<?= $gambar3 ?>')
            }
            .elementor-14975 .elementor-element.elementor-element-41c22f5:not(.elementor-motion-effects-element-type-background) > .elementor-column-wrap, .elementor-14975 .elementor-element.elementor-element-41c22f5 > .elementor-column-wrap > .elementor-motion-effects-container > .elementor-motion-effects-layer{
                background-image: url('<?= $gambar3 ?>')
            }
            .elementor-14975 .elementor-element.elementor-element-64668d84:not(.elementor-motion-effects-element-type-background), .elementor-14975 .elementor-element.elementor-element-64668d84 > .elementor-motion-effects-container > .elementor-motion-effects-layer{
                background-image: url('<?= $gambar5 ?>')
            }
        </style>
    </head>
    <body class="page-template page-template-elementor_canvas page page-id-14975 wp-embed-responsive singular image-filters-enabled elementor-default elementor-template-canvas elementor-kit-6 elementor-page elementor-page-14975">
        <div data-elementor-type="wp-page" data-elementor-id="14975" class="elementor elementor-14975" data-elementor-settings="[]">
            <div class="elementor-inner">
                <div class="elementor-section-wrap">
                    <header class="elementor-section elementor-top-section elementor-element elementor-element-3d635adf elementor-section-full_width header elementor-section-content-middle elementor-section-height-default elementor-section-height-default" data-id="3d635adf" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-background-overlay"></div>
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-row">
                                <section class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-659deff9 logo elementor-invisible" data-id="659deff9" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeIn&quot;}">
                                    <div class="elementor-column-wrap elementor-element-populated">
                                        <div class="elementor-widget-wrap">
                                            <section class="elementor-section elementor-inner-section elementor-element elementor-element-b3ba126 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="b3ba126" data-element_type="section">
                                                <div class="elementor-container elementor-column-gap-default">
                                                    <div class="elementor-row">
                                                        <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-3a8fb2f3" data-id="3a8fb2f3" data-element_type="column">
                                                            <div class="elementor-column-wrap elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-4d435ab6 elementor-widget elementor-widget-text-editor" data-id="4d435ab6" data-element_type="widget" data-widget_type="text-editor.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-text-editor elementor-clearfix">
                                                                                <p style="text-align: center;"><?= $data['panggilan_p'] ?> &amp; <?= $data['panggilan_l'] ?></p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-a199059 elementor-widget elementor-widget-text-editor" data-id="a199059" data-element_type="widget" data-widget_type="text-editor.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-text-editor elementor-clearfix">
                                                                                <p>WEDDING EVENT</p>
                                                                                <p>INVITATION</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-4975a9f3 nama-tamu elementor-widget elementor-widget-text-editor" data-id="4975a9f3" data-element_type="widget" data-widget_type="text-editor.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-text-editor elementor-clearfix">
                                                                                <p style="text-align: center;">Dear : <?= $tujuan ?></p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                            <div class="elementor-element elementor-element-108e509f elementor-align-center elementor-widget elementor-widget-button" data-id="108e509f" data-element_type="widget" id="open-invitation" data-widget_type="button.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-button-wrapper">
                                                        <a href="#top" class="elementor-button-link elementor-button elementor-size-xs" role="button" id="open-invitation">
                                                        <span class="elementor-button-content-wrapper">
                                                        <span class="elementor-button-icon elementor-align-icon-left">
                                                        <i aria-hidden="true" class="far fa-envelope"></i>          </span>
                                                        <span class="elementor-button-text">OPEN INVITATION </span>
                                                        </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-2711065 elementor-widget elementor-widget-html" data-id="2711065" data-element_type="widget" data-widget_type="html.default">
                                                <div class="elementor-widget-container">
                                                    <meta name="viewport" content= "width=device-width, user-scalable=no">
                                                    <script>
                                                        const params = new URLSearchParams(document.location.search);
                                                        let u = params.get("u");
                                                        if(u){
                                                        document.getElementsByClassName("nama-tamu")[0].innerHTML = "Dear : "+u;
                                                        document.getElementsByClassName("nama-tamu")[0].style.textAlign="center"
                                                        }
                                                    </script>
                                                    <script>
                                                        disableScrolling()
                                                        document.body.style.overflowY = "hidden";
                                                        document.body.style.heigth="100vh"
                                                        document.getElementById("open-invitation").onclick = function() {myFunction()};
                                                        function myFunction() {
                                                        playAudio()
                                                        document.body.style.overflowY = "unset";
                                                        enableScrolling()
                                                        }
                                                        function disableScrolling(){ var x=window.scrollX; var y=window.scrollY; window.onscroll=function(){window.scrollTo(x, y);}; } function enableScrolling(){ window.onscroll=function(){}; }
                                                    </script>
                                                    <audio id="myAudio" autoplay loop>
                                                        <source src="<?= base_url('assets/music/').$data['music'] ?>" type="audio/mp3">
                                                    </audio>
                                                    <script>
                                                        var x = document.getElementById("myAudio"); 
                                                        function playAudio() { 
                                                        x.play(); 
                                                        } 
                                                        function pauseAudio() { 
                                                        x.pause(); 
                                                        } 
                                                    </script>
                                                    <style type="text/css">
                                                        @font-face { font-family:amostely;src:url(https://adindisince2010.com/wp-content/uploads/2020/09/AmostelySignature.ttf) format('truetype');font-display: auto;}@font-face { font-family:bernadete;src:url(https://adindisince2010.com/wp-content/uploads/2020/09/bernadette_rough.ttf) format('truetype');font-display: auto;}@font-face { font-family:hysteria;src:url(https://adindisince2010.com/wp-content/uploads/2020/09/Hysteria.otf) format('opentype');font-display: auto;}@font-face { font-family:juliete;src:url(https://adindisince2010.com/wp-content/uploads/2020/09/Julietta-Messie.otf) format('opentype');font-display: auto;}@font-face { font-family:Sesi;src:url(https://nadyabayuwedding.com/wp-content/uploads/2020/01/SmartSignature.otf) format('opentype');font-display: auto;}@font-face { font-family:Sesi2;src:url(https://nadyabayuwedding.com/wp-content/uploads/2020/01/CollectionFree.otf) format('opentype');font-display: auto;}@font-face { font-family:Sesi3;src:url(https://nadyabayuwedding.com/wp-content/uploads/2020/01/Westbury-Signature-Demo-Version.otf) format('opentype');font-display: auto;}@font-face { font-family:SV;src:url(https://nadyabayuwedding.com/wp-content/uploads/2019/08/Belly-Betty.ttf) format('truetype');font-display: auto;}@font-face { font-family:valter;src:url(https://adindisince2010.com/wp-content/uploads/2020/08/Taken-by-Vultures-Demo.otf) format('opentype');font-display: auto;}                
                                                    </style>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </header>
                    <section class="elementor-section elementor-top-section elementor-element elementor-element-a346a02 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="a346a02" data-element_type="section" id="top">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-row">
                                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-6cd32ab" data-id="6cd32ab" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                    <div class="elementor-column-wrap elementor-element-populated">
                                        <div class="elementor-widget-wrap">
                                            <div class="elementor-element elementor-element-4a08b68 elementor-invisible elementor-widget elementor-widget-image" data-id="4a08b68" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;rotateInUpLeft&quot;}" data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-image">
                                                        <img width="640" height="439" src="<?= base_url('assets/themes/themes14/') ?>wp-content/uploads/2021/02/daun-1-1024x702.png" class="attachment-large size-large" alt="" loading="lazy" sizes="(max-width: 640px) 100vw, 640px" />                                           
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-61f7435" data-id="61f7435" data-element_type="column">
                                    <div class="elementor-column-wrap elementor-element-populated">
                                        <div class="elementor-widget-wrap">
                                            <div class="elementor-element elementor-element-fc65541 elementor-invisible elementor-widget elementor-widget-heading" data-id="fc65541" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h3 class="elementor-heading-title elementor-size-default">We Are Together</h3>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-f2e72fe elementor-widget-divider--view-line elementor-invisible elementor-widget elementor-widget-divider" data-id="f2e72fe" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;zoomIn&quot;}" data-widget_type="divider.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-divider">
                                                        <span class="elementor-divider-separator">
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-5d62d2e elementor-invisible elementor-widget elementor-widget-text-editor" data-id="5d62d2e" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-text-editor elementor-clearfix">
                                                        <p>And of His signs is that He created for you from yourselves mates that you may find tranquility in them; and He placed between you affection and mercy. Indeed in that are signs for a people who give thought.</p>
                                                        <p><em><strong>(Ar-Rum : 21)</strong></em></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="elementor-section elementor-top-section elementor-element elementor-element-24f765c6 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="24f765c6" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-row">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-62a93611" data-id="62a93611" data-element_type="column">
                                    <div class="elementor-column-wrap">
                                        <div class="elementor-widget-wrap"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="elementor-section elementor-top-section elementor-element elementor-element-c563768 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="c563768" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-row">
                                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-2e7b0d9" data-id="2e7b0d9" data-element_type="column">
                                    <div class="elementor-column-wrap elementor-element-populated">
                                        <div class="elementor-widget-wrap">
                                            <div class="elementor-element elementor-element-55c9b73 elementor-invisible elementor-widget elementor-widget-image" data-id="55c9b73" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-image">
                                                        <img width="640" height="640" src="<?= $brid ?>" class="attachment-large size-large" alt="" loading="lazy" sizes="(max-width: 640px) 100vw, 640px" />                                            
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-bdf4496 animated-slow elementor-headline--style-highlight elementor-invisible elementor-widget elementor-widget-animated-headline" data-id="bdf4496" data-element_type="widget" data-settings="{&quot;marker&quot;:&quot;underline&quot;,&quot;highlighted_text&quot;:&quot;<?= $data['panggilan_p'] ?>&quot;,&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;headline_style&quot;:&quot;highlight&quot;}" data-widget_type="animated-headline.default">
                                                <div class="elementor-widget-container">
                                                    <h3 class="elementor-headline">
                                                        <span class="elementor-headline-dynamic-wrapper elementor-headline-text-wrapper"></span>
                                                    </h3>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-4e40e92 elementor-widget-divider--view-line elementor-invisible elementor-widget elementor-widget-divider" data-id="4e40e92" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;zoomIn&quot;}" data-widget_type="divider.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-divider">
                                                        <span class="elementor-divider-separator">
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-862dac4 elementor-invisible elementor-widget elementor-widget-text-editor" data-id="862dac4" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;}" data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-text-editor elementor-clearfix">
                                                        <p><?= $data['nama_p'] ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-fa094ff elementor-invisible elementor-widget elementor-widget-text-editor" data-id="fa094ff" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;}" data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-text-editor elementor-clearfix">
                                                        <p><?= $tentang_p ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-af35828 elementor-shape-rounded elementor-grid-0 elementor-invisible elementor-widget elementor-widget-social-icons" data-id="af35828" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;zoomIn&quot;}" data-widget_type="social-icons.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-social-icons-wrapper elementor-grid">
                                                        <div class="elementor-grid-item">
                                                            <a class="elementor-icon elementor-social-icon elementor-social-icon-instagram elementor-repeater-item-ae240e6" href="https://www.instagram.com/<?= $ig_p ?>" target="_blank">
                                                            <span class="elementor-screen-only">Instagram</span>
                                                            <i class="fab fa-instagram"></i>                    </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-e5878c1" data-id="e5878c1" data-element_type="column">
                                    <div class="elementor-column-wrap elementor-element-populated">
                                        <div class="elementor-widget-wrap">
                                            <div class="elementor-element elementor-element-d7c740c elementor-invisible elementor-widget elementor-widget-image" data-id="d7c740c" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-image">
                                                        <img width="640" height="640" src="<?= $groom ?>" class="attachment-large size-large" alt="" loading="lazy" sizes="(max-width: 640px) 100vw, 640px" />                                         
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-b2f4ff0 animated-slow elementor-headline--style-highlight elementor-invisible elementor-widget elementor-widget-animated-headline" data-id="b2f4ff0" data-element_type="widget" data-settings="{&quot;marker&quot;:&quot;underline&quot;,&quot;highlighted_text&quot;:&quot;<?= $data['panggilan_l'] ?>&quot;,&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;headline_style&quot;:&quot;highlight&quot;}" data-widget_type="animated-headline.default">
                                                <div class="elementor-widget-container">
                                                    <h3 class="elementor-headline">
                                                        <span class="elementor-headline-dynamic-wrapper elementor-headline-text-wrapper"></span>
                                                    </h3>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-05eebdd elementor-widget-divider--view-line elementor-invisible elementor-widget elementor-widget-divider" data-id="05eebdd" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;zoomIn&quot;}" data-widget_type="divider.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-divider">
                                                        <span class="elementor-divider-separator">
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-0b47257 elementor-invisible elementor-widget elementor-widget-text-editor" data-id="0b47257" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInRight&quot;}" data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-text-editor elementor-clearfix">
                                                        <p><?= $data['nama_l'] ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-405b07b elementor-invisible elementor-widget elementor-widget-text-editor" data-id="405b07b" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInRight&quot;}" data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-text-editor elementor-clearfix">
                                                        <p><?= $tentang_l ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-fd7290a elementor-shape-rounded elementor-grid-0 elementor-invisible elementor-widget elementor-widget-social-icons" data-id="fd7290a" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;zoomIn&quot;}" data-widget_type="social-icons.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-social-icons-wrapper elementor-grid">
                                                        <div class="elementor-grid-item">
                                                            <a class="elementor-icon elementor-social-icon elementor-social-icon-instagram elementor-repeater-item-ae240e6" href="https://www.instagram.com/<?= $ig_l ?>" target="_blank">
                                                            <span class="elementor-screen-only">Instagram</span>
                                                            <i class="fab fa-instagram"></i>                    </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="elementor-section elementor-top-section elementor-element elementor-element-ceed397 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="ceed397" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-background-overlay"></div>
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-row">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-41c22f5 elementor-invisible" data-id="41c22f5" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;}">
                                    <div class="elementor-column-wrap elementor-element-populated">
                                        <div class="elementor-background-overlay"></div>
                                        <div class="elementor-widget-wrap">
                                            <div class="elementor-element elementor-element-f9d59ee elementor-view-default elementor-widget elementor-widget-icon" data-id="f9d59ee" data-element_type="widget" data-widget_type="icon.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-icon-wrapper">
                                                        <div class="elementor-icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                                                <g>
                                                                    <g>
                                                                        <path d="M321.473,42.621C312,33.14,299.401,27.918,285.996,27.919c-10.958,0-21.375,3.489-29.985,9.941    c-8.619-6.453-19.042-9.941-30-9.941c-13.405,0-26.006,5.221-35.478,14.7c-19.559,19.557-19.56,51.387,0,70.958l59.995,59.977    c1.515,1.514,3.5,2.272,5.485,2.272s3.971-0.758,5.485-2.273l59.974-59.979C341.028,94.005,341.027,62.175,321.473,42.621z     M310.5,102.606l-54.487,54.492l-54.507-54.491c-13.512-13.519-13.513-35.507,0-49.018c6.543-6.549,15.246-10.155,24.505-10.155    c9.26,0,17.967,3.607,24.518,10.157c1.455,1.455,3.427,2.272,5.485,2.272c0.001,0,0.002,0,0.003,0    c2.058-0.001,4.032-0.819,5.486-2.276c6.537-6.548,15.236-10.153,24.493-10.153c9.258,0,17.96,3.606,24.504,10.157    C324.009,67.099,324.008,89.088,310.5,102.606z"></path>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <path d="M359.434,178.949c-38.782,0-75.242,14.313-103.496,40.467c-27.203-25.104-63.525-40.467-103.372-40.467    C68.441,178.949,0,247.39,0,331.515s68.441,152.566,152.566,152.566c38.78,0,75.24-14.313,103.496-40.467    c27.203,25.104,63.525,40.467,103.373,40.467c84.125,0,152.565-68.44,152.565-152.566S443.56,178.949,359.434,178.949z     M152.565,468.562c-75.569,0.004-137.05-61.477-137.05-137.047s61.481-137.051,137.051-137.051s137.05,61.481,137.05,137.051    c0,24.087-6.222,47.418-18.076,68.078c-2.371-3.053-4.582-6.213-6.615-9.488c4.267-8.164,7.636-16.781,10.023-25.675    c2.876-10.685,4.324-21.763,4.324-32.913c0-17.108-3.352-33.699-9.961-49.317c-5.823-13.769-13.943-26.251-24.159-37.171    c-0.043-0.046-0.084-0.093-0.129-0.138c-0.939-1.001-1.889-1.994-2.864-2.969c-11.636-11.636-25.186-20.77-40.277-27.152    c-15.619-6.609-32.209-9.961-49.317-9.961c-10.478,0-20.883,1.283-30.948,3.806c-9.774,2.451-19.249,6.093-28.175,10.809    c-8.771,4.623-17.005,10.302-24.473,16.871c-7.437,6.536-14.108,13.932-19.828,22c-1.2,1.696-1.665,3.744-1.314,5.792    c0.341,2.038,1.469,3.827,3.155,5.027c1.324,0.931,2.865,1.427,4.478,1.427c2.514,0,4.882-1.22,6.341-3.269    c10.085-14.211,23.531-26.023,38.881-34.133c7.83-4.137,16.146-7.323,24.721-9.474c8.833-2.224,17.967-3.341,27.162-3.341    c15.019,0,29.582,2.937,43.277,8.73c12.557,5.31,23.892,12.827,33.761,22.314c-14.887,24.059-22.735,51.627-22.735,80.146    c0,29.366,8.348,56.815,22.783,80.115c-3.935,3.786-8.143,7.29-12.574,10.453c-6.092,4.356-12.639,8.089-19.456,11.119    c-14.202,6.3-29.365,9.506-45.056,9.506c-13.55,0-26.79-2.41-39.346-7.168c-10.395-3.93-20.139-9.402-28.941-16.271    c-8.72-6.795-16.374-14.822-22.735-23.862c-13.199-18.774-20.17-40.868-20.17-63.892c0-13.312,2.327-26.334,6.92-38.695    c1.489-4.013-0.569-8.482-4.582-9.971c-0.869-0.321-1.779-0.486-2.7-0.486c-3.217,0-6.144,2.027-7.272,5.058    c-5.233,14.088-7.881,28.93-7.881,44.094c0.01,26.241,7.954,51.417,22.993,72.797c7.24,10.312,15.96,19.457,25.9,27.203    c10.033,7.82,21.121,14.058,32.975,18.535c14.315,5.42,29.396,8.172,44.839,8.172l0.021-0.052v0.052    c17.853,0,35.126-3.652,51.334-10.839c7.778-3.456,15.236-7.717,22.176-12.671c4.371-3.117,8.552-6.523,12.5-10.176    c2.112,2.736,4.314,5.399,6.602,7.984C219.863,455.815,187.248,468.562,152.565,468.562z M263.758,331.517    c0,9.806-1.273,19.528-3.786,28.889c-1.093,4.067-2.431,8.065-3.982,11.982c-5.141-12.99-7.747-26.727-7.747-40.871    c-0.001-9.805,1.271-19.528,3.785-28.9c1.092-4.063,2.429-8.057,3.977-11.97C261.152,303.643,263.758,317.378,263.758,331.517z     M359.434,468.566c-75.57,0-137.051-61.481-137.051-137.051c0-24.086,6.222-47.418,18.075-68.078    c2.368,3.052,4.577,6.21,6.608,9.481c-4.263,8.168-7.63,16.787-10.016,25.676c-2.875,10.695-4.323,21.763-4.323,32.923    c0,17.108,3.351,33.699,9.961,49.317c5.832,13.791,13.968,26.289,24.205,37.22c0.021,0.022,0.04,0.046,0.062,0.067    c0.947,1.009,1.903,2.009,2.885,2.991c11.636,11.636,25.186,20.77,40.277,27.152c15.619,6.609,32.21,9.961,49.328,9.961    c10.468,0,20.884-1.283,30.947-3.817c9.765-2.45,19.239-6.082,28.166-10.798c8.771-4.634,17.004-10.312,24.472-16.871    c7.437-6.536,14.109-13.932,19.829-22c2.472-3.496,1.645-8.347-1.841-10.819c-1.324-0.931-2.876-1.427-4.489-1.427    c-2.514,0-4.883,1.22-6.33,3.269c-10.085,14.211-23.531,26.013-38.892,34.133c-7.819,4.137-16.135,7.323-24.71,9.475    c-8.833,2.213-17.967,3.34-27.162,3.34c-15.019,0-29.583-2.947-43.288-8.74c-12.545-5.311-23.88-12.827-33.749-22.312    c14.886-24.058,22.733-51.624,22.733-80.142c0-29.368-8.35-56.819-22.787-80.12c3.936-3.786,8.148-7.292,12.578-10.456    c6.092-4.344,12.639-8.088,19.456-11.119c14.212-6.299,29.366-9.495,45.057-9.495c13.549,0,26.789,2.41,39.346,7.158    c0.051,0.021,0.103,0.041,0.144,0.051l0.021,0.011c10.374,3.951,20.097,9.432,28.879,16.291    c8.699,6.795,16.332,14.832,22.673,23.862c13.178,18.753,20.138,40.826,20.128,63.819c0,13.312-2.327,26.334-6.92,38.695    c-0.713,1.944-0.641,4.044,0.228,5.926c0.858,1.893,2.399,3.32,4.343,4.044c0.88,0.321,1.78,0.487,2.7,0.487    c3.227,0,6.155-2.028,7.282-5.059c5.233-14.108,7.882-28.94,7.882-44.094c-0.01-26.242-7.955-51.417-22.994-72.807    c-7.24-10.302-15.949-19.457-25.889-27.193c-10.033-7.82-21.132-14.057-32.986-18.547c-14.315-5.419-29.406-8.161-44.838-8.161    h-0.01c-17.854,0-35.126,3.641-51.335,10.84c-7.778,3.443-15.246,7.705-22.186,12.671c-4.371,3.117-8.552,6.523-12.499,10.172    c-2.112-2.736-4.314-5.399-6.603-7.984c25.333-23.297,57.949-36.045,92.633-36.045c75.57,0,137.051,61.481,137.051,137.051    C496.485,407.085,435.004,468.566,359.434,468.566z"></path>
                                                                    </g>
                                                                </g>
                                                                <g></g>
                                                                <g></g>
                                                                <g></g>
                                                                <g></g>
                                                                <g></g>
                                                                <g></g>
                                                                <g></g>
                                                                <g></g>
                                                                <g></g>
                                                                <g></g>
                                                                <g></g>
                                                                <g></g>
                                                                <g></g>
                                                                <g></g>
                                                                <g></g>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-69c91a7 elementor-headline--style-highlight elementor-widget elementor-widget-animated-headline" data-id="69c91a7" data-element_type="widget" data-settings="{&quot;marker&quot;:&quot;underline_zigzag&quot;,&quot;highlighted_text&quot;:&quot;Akad Nikah&quot;,&quot;headline_style&quot;:&quot;highlight&quot;}" data-widget_type="animated-headline.default">
                                                <div class="elementor-widget-container">
                                                    <h3 class="elementor-headline">
                                                        <span class="elementor-headline-dynamic-wrapper elementor-headline-text-wrapper"></span>
                                                    </h3>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-16e2202 elementor-widget elementor-widget-text-editor" data-id="16e2202" data-element_type="widget" data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-text-editor elementor-clearfix">
                                                        <p><strong>July, 23th, 2021</strong></p>
                                                        <p>15.00 &#8211; Done</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-829f564 elementor-widget elementor-widget-text-editor" data-id="829f564" data-element_type="widget" data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-text-editor elementor-clearfix">
                                                        <p><?= $data['lokasi_akad'] ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-4528e0d elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="4528e0d" data-element_type="widget" data-widget_type="divider.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-divider">
                                                        <span class="elementor-divider-separator">
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-00ad694 elementor-headline--style-highlight elementor-widget elementor-widget-animated-headline" data-id="00ad694" data-element_type="widget" data-settings="{&quot;marker&quot;:&quot;underline_zigzag&quot;,&quot;highlighted_text&quot;:&quot;Reception&quot;,&quot;headline_style&quot;:&quot;highlight&quot;}" data-widget_type="animated-headline.default">
                                                <div class="elementor-widget-container">
                                                    <h3 class="elementor-headline">
                                                        <span class="elementor-headline-dynamic-wrapper elementor-headline-text-wrapper"></span>
                                                    </h3>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-1792508 elementor-widget elementor-widget-text-editor" data-id="1792508" data-element_type="widget" data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-text-editor elementor-clearfix">
                                                        <p><strong>July, 24th, 2021</strong></p>
                                                        <p>10.00 &#8211; Done</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-9ec8f0a elementor-widget elementor-widget-text-editor" data-id="9ec8f0a" data-element_type="widget" data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-text-editor elementor-clearfix">
                                                          <p><?= $data['lokasi_resepsi'] ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-39e98bc elementor-align-center elementor-widget elementor-widget-button" data-id="39e98bc" data-element_type="widget" data-widget_type="button.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-button-wrapper">
                                                        <a href="<?= $data['gomap_resepsi'] ?>" target="_blank" class="elementor-button elementor-size-sm" role="button">
                                                        <span class="elementor-button-content-wrapper">
                                                        <span class="elementor-button-icon elementor-align-icon-left">
                                                        <i aria-hidden="true" class="fas fa-map-marker-alt"></i>            </span>
                                                        <span class="elementor-button-text">Get Direction</span>
                                                        </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-47c2f94 elementor-countdown--label-block elementor-invisible elementor-widget elementor-widget-countdown" data-id="47c2f94" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="countdown.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-countdown-wrapper" data-date="
                                                    <?= strtotime(date_format($tanggal,'Y/m/d').' '.substr($data['jam_resepsi_mulai'], 0, 5))?>
                                                         ">
                                                        <div class="elementor-countdown-item"><span class="elementor-countdown-digits elementor-countdown-days"></span> <span class="elementor-countdown-label">Days</span></div>
                                                        <div class="elementor-countdown-item"><span class="elementor-countdown-digits elementor-countdown-hours"></span> <span class="elementor-countdown-label">Hours</span></div>
                                                        <div class="elementor-countdown-item"><span class="elementor-countdown-digits elementor-countdown-minutes"></span> <span class="elementor-countdown-label">Minutes</span></div>
                                                        <div class="elementor-countdown-item"><span class="elementor-countdown-digits elementor-countdown-seconds"></span> <span class="elementor-countdown-label">Seconds</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- <section class="elementor-section elementor-top-section elementor-element elementor-element-9012218 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="9012218" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-row">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3e10102" data-id="3e10102" data-element_type="column">
                                    <div class="elementor-column-wrap elementor-element-populated">
                                        <div class="elementor-widget-wrap">
                                            <div class="elementor-element elementor-element-f162a4b elementor-flip-box--3d elementor-flip-box--effect-flip elementor-flip-box--direction-up elementor-widget elementor-widget-flip-box" data-id="f162a4b" data-element_type="widget" data-widget_type="flip-box.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-flip-box">
                                                        <div class="elementor-flip-box__layer elementor-flip-box__front">
                                                            <div class="elementor-flip-box__layer__overlay">
                                                                <div class="elementor-flip-box__layer__inner">
                                                                    <div class="elementor-icon-wrapper elementor-view-default">
                                                                        <div class="elementor-icon">
                                                                            <i class="fab fa-youtube"></i>                              
                                                                        </div>
                                                                    </div>
                                                                    <h3 class="elementor-flip-box__layer__title">
                                                                        Virtual Wedding                         
                                                                    </h3>
                                                                    <div class="elementor-flip-box__layer__description">
                                                                        CLICK THIS CARD
                                                                        </br> To see the live stream                            
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-flip-box__layer elementor-flip-box__back">
                                                            <div class="elementor-flip-box__layer__overlay">
                                                                <div class="elementor-flip-box__layer__inner">
                                                                    <h3 class="elementor-flip-box__layer__title">
                                                                        Virtual Wedding                     
                                                                    </h3>
                                                                    <div class="elementor-flip-box__layer__description">
                                                                        We regret to inform you that considering the Covid-19 pandemic, not all friends are allowed to attend our wedding. We’re still utterly in love, but it’s important to us that everyone stays safe, so we plan to publish our wedding virtually via Live Instagram that you can join through the following link:                     
                                                                    </div>
                                                                    <a class="elementor-flip-box__button elementor-button elementor-size-sm">
                                                                    Live Streaming                      </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section> -->
                    <!-- <section class="elementor-section elementor-top-section elementor-element elementor-element-ea70ba8 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="ea70ba8" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-row">
                                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-905e7dd" data-id="905e7dd" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                    <div class="elementor-column-wrap elementor-element-populated">
                                        <div class="elementor-widget-wrap">
                                            <div class="elementor-element elementor-element-df89c9b elementor-widget elementor-widget-heading" data-id="df89c9b" data-element_type="widget" data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h3 class="elementor-heading-title elementor-size-default">Our Love Story</h3>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-222666c elementor-invisible elementor-widget elementor-widget-image" data-id="222666c" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;zoomIn&quot;}" data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-image">
                                                        <img width="640" height="960" src="<?= base_url('assets/themes/themes14/') ?>wp-content/uploads/2021/03/LRM_EXPORT_20191027_213421-683x1024.jpg" class="attachment-large size-large" alt="" loading="lazy" />                                         
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-ad82df8 elementor-invisible elementor-widget elementor-widget-text-editor" data-id="ad82df8" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-text-editor elementor-clearfix">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-6727bdf elementor-widget-divider--view-line elementor-invisible elementor-widget elementor-widget-divider" data-id="6727bdf" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;zoomIn&quot;}" data-widget_type="divider.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-divider">
                                                        <span class="elementor-divider-separator">
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-ca75204 elementor-invisible elementor-widget elementor-widget-text-editor" data-id="ca75204" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-text-editor elementor-clearfix">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                                                        <p> </p>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-355d289" data-id="355d289" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                    <div class="elementor-column-wrap elementor-element-populated">
                                        <div class="elementor-widget-wrap">
                                            <div class="elementor-element elementor-element-9aca3f5 elementor-invisible elementor-widget elementor-widget-text-editor" data-id="9aca3f5" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-text-editor elementor-clearfix">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-91f6e21 elementor-widget-divider--view-line elementor-invisible elementor-widget elementor-widget-divider" data-id="91f6e21" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;zoomIn&quot;}" data-widget_type="divider.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-divider">
                                                        <span class="elementor-divider-separator">
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-93a943b elementor-invisible elementor-widget elementor-widget-text-editor" data-id="93a943b" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-text-editor elementor-clearfix">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-62e7995 elementor-invisible elementor-widget elementor-widget-image" data-id="62e7995" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;zoomIn&quot;}" data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-image">
                                                        <img width="640" height="960" src="<?= base_url('assets/themes/themes14/') ?>wp-content/uploads/2021/03/watermark-bawah-167-683x1024.jpg" class="attachment-large size-large" alt="" loading="lazy" sizes="(max-width: 640px) 100vw, 640px" />                                           
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-2e4d096 elementor-invisible elementor-widget elementor-widget-heading" data-id="2e4d096" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInDown&quot;}" data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h3 class="elementor-heading-title elementor-size-default">#EciEmilTogether</h3>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-3579956 elementor-invisible elementor-widget elementor-widget-image" data-id="3579956" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-image">
                                                        <img width="640" height="439" src="<?= base_url('assets/themes/themes14/') ?>wp-content/uploads/2021/03/daun-1024x702.png" class="attachment-large size-large" alt="" loading="lazy"  sizes="(max-width: 640px) 100vw, 640px" />                                         
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section> -->
                    <section class="elementor-section elementor-top-section elementor-element elementor-element-9ebc749 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="9ebc749" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-row">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-abab37a elementor-invisible" data-id="abab37a" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeIn&quot;}">
                                    <div class="elementor-column-wrap elementor-element-populated">
                                        <div class="elementor-widget-wrap">
                                            <div class="elementor-element elementor-element-c961f9f elementor-aspect-ratio-169 elementor-widget elementor-widget-video" data-id="c961f9f" data-element_type="widget" data-settings="{&quot;aspect_ratio&quot;:&quot;169&quot;}" data-widget_type="video.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-wrapper elementor-fit-aspect-ratio elementor-open-inline">
                                                        <iframe class="elementor-video-iframe" allowfullscreen title="youtube Video Player" src="https://www.youtube.com/embed/LN1zBL9BAN4?feature=oembed&amp;start&amp;end&amp;wmode=opaque&amp;loop=0&amp;controls=1&amp;mute=0&amp;rel=0&amp;modestbranding=0"></iframe>             
                                                        <div class="elementor-custom-embed-image-overlay" style="background-image: url(<?= $gambar4 ?>);">
                                                            <div class="elementor-custom-embed-play" role="button">
                                                                <i class="eicon-play" aria-hidden="true"></i>
                                                                <span class="elementor-screen-only">Play Video</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="elementor-section elementor-top-section elementor-element elementor-element-4cea384 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="4cea384" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-row">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-cc738f1" data-id="cc738f1" data-element_type="column">
                                    <div class="elementor-column-wrap elementor-element-populated">
                                        <div class="elementor-widget-wrap">
                                            <div class="elementor-element elementor-element-0994d6f elementor-widget elementor-widget-gallery" data-id="0994d6f" data-element_type="widget" data-settings="{&quot;gallery_layout&quot;:&quot;justified&quot;,&quot;ideal_row_height&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:226,&quot;sizes&quot;:[]},&quot;gap&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:5,&quot;sizes&quot;:[]},&quot;content_hover_animation&quot;:&quot;shrink&quot;,&quot;lazyload&quot;:&quot;yes&quot;,&quot;ideal_row_height_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:150,&quot;sizes&quot;:[]},&quot;ideal_row_height_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:150,&quot;sizes&quot;:[]},&quot;gap_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:10,&quot;sizes&quot;:[]},&quot;gap_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:10,&quot;sizes&quot;:[]},&quot;link_to&quot;:&quot;file&quot;,&quot;overlay_background&quot;:&quot;yes&quot;}" data-widget_type="gallery.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-gallery__container">
                                                        <?php for ($mulai1 = 0; $mulai1 < count($gallery); $mulai1++) { ?>
                                                        <a class="e-gallery-item elementor-gallery-item elementor-animated-content" href="<?= $gallery[$mulai1]['gambar'] ?>" data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="all-0994d6f" data-elementor-lightbox-title="watermark bawah-108-1">
                                                            <div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="<?= $gallery[$mulai1]['gambar'] ?>" data-width="300" data-height="200" alt="" ></div>
                                                            <div class="elementor-gallery-item__overlay"></div>
                                                        </a>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="elementor-section elementor-top-section elementor-element elementor-element-1081714 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="1081714" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-row">
                                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-4c2238a elementor-invisible" data-id="4c2238a" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;}">
                                    <div class="elementor-column-wrap elementor-element-populated">
                                        <div class="elementor-widget-wrap">
                                            <div class="elementor-element elementor-element-e317db8 elementor-headline--style-highlight elementor-widget elementor-widget-animated-headline" data-id="e317db8" data-element_type="widget" data-settings="{&quot;marker&quot;:&quot;underline&quot;,&quot;highlighted_text&quot;:&quot;Send Your Wishes&quot;,&quot;headline_style&quot;:&quot;highlight&quot;}" data-widget_type="animated-headline.default">
                                                <div class="elementor-widget-container">
                                                    <h3 class="elementor-headline">
                                                        <span class="elementor-headline-dynamic-wrapper elementor-headline-text-wrapper"></span>
                                                    </h3>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-cfb07ee elementor-button-align-stretch elementor-widget elementor-widget-form" data-id="cfb07ee" data-element_type="widget" data-settings="{&quot;step_next_label&quot;:&quot;Next&quot;,&quot;step_previous_label&quot;:&quot;Previous&quot;,&quot;button_width&quot;:&quot;100&quot;,&quot;step_type&quot;:&quot;number_text&quot;,&quot;step_icon_shape&quot;:&quot;circle&quot;}" data-widget_type="form.default">
                                                <div class="elementor-widget-container">
                                                    <form  method="post" action="<?= base_url()?>u/inserts"  name="New Form">
                                                        <input type='hidden' name="id" class='form-control' id='id' value="<?= $data["id_pernikahan"] ?>">
                                                        <input type='hidden' name="url" class='form-control' id='url' value="<?= $data["uri_2"] ?>">
                                                        <div class="elementor-form-fields-wrapper elementor-labels-above">
                                                            <div class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-name elementor-col-100">
                                                                <label for="form-field-name" class="elementor-field-label">Name</label><input size="1" type="text" name="name" id="form-field-name" class="elementor-field elementor-size-sm  elementor-field-textual" placeholder="Name">             
                                                            </div>
                                                            <div class="elementor-field-type-textarea elementor-field-group elementor-column elementor-field-group-message elementor-col-100">
                                                                <label for="form-field-message" class="elementor-field-label">Message</label><textarea class="elementor-field-textual elementor-field  elementor-size-sm" name="notes" id="form-field-message" rows="4" placeholder="Message"></textarea>                
                                                            </div>
                                                            <div class="elementor-field-type-radio elementor-field-group elementor-column elementor-field-group-field_a8c3b1f elementor-col-100">
                                                                <label for="form-field-field_a8c3b1f" class="elementor-field-label">Will You Attend?</label>
                                                                <div class="elementor-field-subgroup  "><span class="elementor-field-option"><input type="radio" value="1" id="form-field-field_a8c3b1f-0" name="hadir"> <label for="form-field-field_a8c3b1f-0">Yes</label></span><span class="elementor-field-option"><input type="radio" value="0" id="form-field-field_a8c3b1f-1" name="hadir"> <label for="form-field-field_a8c3b1f-1">No</label></span></div>
                                                            </div>
                                                            <div class="elementor-field-group elementor-column elementor-field-type-submit elementor-col-100 e-form__buttons">
                                                                <button type="submit" class="elementor-button elementor-size-sm">
                                                                <span >
                                                                <span class="elementor-align-icon-right elementor-button-icon">
                                                                <i aria-hidden="true" class="fas fa-heart"></i>                                                                 </span>
                                                                <span class="elementor-button-text">Send</span>
                                                                </span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-1d238378 elementor-invisible" data-id="1d238378" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;}">
                                    <div class="elementor-column-wrap elementor-element-populated">
                                        <div class="elementor-widget-wrap">
                                            <div class="elementor-element elementor-element-b0b2cf6 elementor-widget elementor-widget-text-editor" data-id="b0b2cf6" data-element_type="widget" data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-text-editor elementor-clearfix">
                                                        <p><b>Wishes<br></b></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-7fdd4cd5 ucapan-doa elementor-widget elementor-widget-text-editor" data-id="7fdd4cd5" data-element_type="widget" data-widget_type="text-editor.default">
                                                <div class=" ">
                                                    <div class=" ">
                                                        <?php foreach ($ucapan as $item) { ?>
                                                            <span style="font-size:16px"><b> <?= $item['oleh'] ?></b> 
                                                            <br><?= $item['ucapan'] ?><br>
                                                            </span>
                                                        <?php } ?>
                                                        <!-- <p>Ucapan Dan Doa &#8230;..</p> -->
                                                    </div>
                                                </div>
                                            </div>
                                           <!--  <div class="elementor-element elementor-element-2e6cf125 elementor-widget elementor-widget-html" data-id="2e6cf125" data-element_type="widget" data-widget_type="html.default">
                                                <div class="elementor-widget-container">
                                                    
                                                    <script>
                                                        fetch('https://undangan-api.vercel.app/api/getdata/?kepada=yayang-agung')
                                                        .then(response => response.json())
                                                        .then(data => {
                                                        let ucapan=[]
                                                        data.map(v=>{
                                                        ucapan.push(`
                                                        <p style="font-size:16px">
                                                        <b>
                                                        ${decodeURI(v.dari)}
                                                        </b><br/>
                                                        ${v.pesan}
                                                        </p>
                                                        `)
                                                        })
                                                        let doa=document.getElementsByClassName("ucapan-doa")[0]
                                                        console.log(doa)
                                                        doa.innerHTML=data.map(e => `<span style="font-size:16px"><b> ${decodeURI(e.dari)}</b> 
                                                        <br/>${decodeURI(e.pesan)}<br>
                                                        </span>`).join("");
                                                        });
                                                    </script>       
                                                </div>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="elementor-section elementor-top-section elementor-element elementor-element-427f8a46 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="427f8a46" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-row">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-34bbf234 elementor-invisible" data-id="34bbf234" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;gradient&quot;,&quot;animation&quot;:&quot;zoomIn&quot;}">
                                    <div class="elementor-column-wrap elementor-element-populated">
                                        <div class="elementor-widget-wrap">
                                            <div class="elementor-element elementor-element-dc0a63e elementor-widget elementor-widget-heading" data-id="dc0a63e" data-element_type="widget" data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h3 class="elementor-heading-title elementor-size-default">Wedding Gift</h3>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-4492751c elementor-widget elementor-widget-text-editor" data-id="4492751c" data-element_type="widget" data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-text-editor elementor-clearfix">
                                                        <p>We understand that some of you might want to send us a greeting or gift,</p>
                                                        <p>so please tap the following buttons to send them to us:</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-5cf338dd elementor-align-center elementor-widget elementor-widget-button" data-id="5cf338dd" data-element_type="widget" data-widget_type="button.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-button-wrapper">
                                                        <a class="elementor-button elementor-size-md" role="button" id="ini-tombol">
                                                        <span class="elementor-button-content-wrapper">
                                                        <span class="elementor-button-icon elementor-align-icon-left">
                                                        <i aria-hidden="true" class="fas fa-gift"></i>          </span>
                                                        <span class="elementor-button-text">Wedding Gift</span>
                                                        </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-1e0aed8a elementor-widget elementor-widget-html" data-id="1e0aed8a" data-element_type="widget" data-widget_type="html.default">
                                                <div class="elementor-widget-container">
                                                    <script>
                                                        document.getElementById("ini-tombol").onclick=function(){
                                                        document.getElementById("tombol-invitation").style.display="block"
                                                        }
                                                    </script>       
                                                </div>
                                            </div>
                                            <section class="elementor-section elementor-inner-section elementor-element elementor-element-1ccb609f elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="1ccb609f" data-element_type="section" id="tombol-invitation">
                                                <div class="elementor-container elementor-column-gap-default">
                                                    <div class="elementor-row">
                                                        <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-793d082c" data-id="793d082c" data-element_type="column">
                                                            <div class="elementor-column-wrap elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-39168526 elementor-widget elementor-widget-text-editor" data-id="39168526" data-element_type="widget" data-widget_type="text-editor.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-text-editor elementor-clearfix">
                                                                                <p>123456789 BCA </p>
                                                                                <p>a/n Loremipsum</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-1752ceba elementor-align-center elementor-widget elementor-widget-button" data-id="1752ceba" data-element_type="widget" id="copy1" data-widget_type="button.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-button-wrapper">
                                                                                <a class="elementor-button elementor-size-md" role="button" id="copy1">
                                                                                <span class="elementor-button-content-wrapper">
                                                                                <span class="elementor-button-icon elementor-align-icon-left">
                                                                                <i aria-hidden="true" class="far fa-copy"></i>          </span>
                                                                                <span class="elementor-button-text">Copy Number</span>
                                                                                </span>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-4046d5e1 elementor-widget elementor-widget-text-editor" data-id="4046d5e1" data-element_type="widget" id="copied1" data-widget_type="text-editor.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-text-editor elementor-clearfix">
                                                                                <p>Copied !</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-2433cb40 elementor-widget elementor-widget-html" data-id="2433cb40" data-element_type="widget" data-widget_type="html.default">
                                                                        <div class="elementor-widget-container">
                                                                            <script>
                                                                                function copyToClipboard(text) {
                                                                                var dummy = document.createElement("textarea");
                                                                                // to avoid breaking orgain page when copying more words
                                                                                // cant copy when adding below this code
                                                                                // dummy.style.display = 'none'
                                                                                document.body.appendChild(dummy);
                                                                                //Be careful if you use texarea. setAttribute('value', value), which works with "input" does not work with "textarea". – Eduard
                                                                                dummy.value = text;
                                                                                dummy.select();
                                                                                document.execCommand("copy");
                                                                                document.body.removeChild(dummy);
                                                                                }
                                                                                document.getElementById("copy1").onclick=function(){
                                                                                copyToClipboard('1221447145');
                                                                                document.getElementById("copied1").style.display="block"
                                                                                }
                                                                            </script>       
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-73825d57" data-id="73825d57" data-element_type="column">
                                                            <div class="elementor-column-wrap elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-40f61d00 elementor-widget elementor-widget-text-editor" data-id="40f61d00" data-element_type="widget" data-widget_type="text-editor.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-text-editor elementor-clearfix">
                                                                                <p>1234567890 Mandiri </p>
                                                                                <p>a/n Lorem Ipsum</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-79f85d71 elementor-align-center elementor-widget elementor-widget-button" data-id="79f85d71" data-element_type="widget" data-widget_type="button.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-button-wrapper">
                                                                                <a class="elementor-button elementor-size-md" role="button" id="copy2">
                                                                                <span class="elementor-button-content-wrapper">
                                                                                <span class="elementor-button-icon elementor-align-icon-left">
                                                                                <i aria-hidden="true" class="far fa-copy"></i>          </span>
                                                                                <span class="elementor-button-text">Copy Number</span>
                                                                                </span>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-74eca4e3 elementor-widget elementor-widget-text-editor" data-id="74eca4e3" data-element_type="widget" id="copied2" data-widget_type="text-editor.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-text-editor elementor-clearfix">
                                                                                <p>Copied !</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-5649d3f5 elementor-widget elementor-widget-html" data-id="5649d3f5" data-element_type="widget" data-widget_type="html.default">
                                                                        <div class="elementor-widget-container">
                                                                            <script>
                                                                                document.getElementById("copy2").onclick=function(){
                                                                                copyToClipboard('18-0000-1268822')
                                                                                document.getElementById("copied2").style.display="block"
                                                                                }
                                                                            </script>       
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
                    <section class="elementor-section elementor-top-section elementor-element elementor-element-fb820db elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="fb820db" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-row">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-8c42a40" data-id="8c42a40" data-element_type="column">
                                    <div class="elementor-column-wrap elementor-element-populated">
                                        <div class="elementor-widget-wrap">
                                            <div class="elementor-element elementor-element-024558e elementor-widget elementor-widget-image" data-id="024558e" data-element_type="widget" data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-image">
                                                        <img width="640" height="256" src="<?= base_url('assets/themes/themes14/') ?>wp-content/uploads/2021/03/prokes.jpg" class="attachment-large size-large" alt="" loading="lazy"  sizes="(max-width: 640px) 100vw, 640px" />                                          
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="elementor-section elementor-top-section elementor-element elementor-element-64668d84 elementor-section-full_width elementor-section-stretched elementor-section-height-default elementor-section-height-default" data-id="64668d84" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-background-overlay"></div>
                        <div class="elementor-container elementor-column-gap-no">
                            <div class="elementor-row">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-48e0ec07" data-id="48e0ec07" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                    <div class="elementor-column-wrap elementor-element-populated">
                                        <div class="elementor-widget-wrap">
                                            <div class="elementor-element elementor-element-b24713f elementor-invisible elementor-widget elementor-widget-text-editor" data-id="b24713f" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInDown&quot;}" data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-text-editor elementor-clearfix">
                                                        <p>Best Regards,</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-0ea027b elementor-invisible elementor-widget elementor-widget-heading" data-id="0ea027b" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h3 class="elementor-heading-title elementor-size-default"><?= $data['panggilan_p'] ?> & <?= $data['panggilan_l'] ?></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="elementor-section elementor-top-section elementor-element elementor-element-72da31e5 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="72da31e5" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-row">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-76fc10a2 elementor-invisible" data-id="76fc10a2" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;slideInUp&quot;}">
                                    <div class="elementor-column-wrap">
                                        <div class="elementor-widget-wrap"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="elementor-section elementor-top-section elementor-element elementor-element-1735e174 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="1735e174" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-row">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-26213470" data-id="26213470" data-element_type="column">
                                    <div class="elementor-column-wrap elementor-element-populated">
                                        <div class="elementor-widget-wrap">
                                            <div class="elementor-element elementor-element-216491b6 elementor-align-left elementor-widget elementor-widget-button" data-id="216491b6" data-element_type="widget" data-widget_type="button.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-button-wrapper">
                                                        <a class="elementor-button elementor-size-xl" role="button" id="stopmusic">
                                                        <span class="elementor-button-content-wrapper">
                                                        <span class="elementor-button-icon elementor-align-icon-right">
                                                        <i aria-hidden="true" class="fas fa-volume-mute"></i>           </span>
                                                        <span class="elementor-button-text"></span>
                                                        </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-798e40e8 elementor-align-left elementor-widget elementor-widget-button" data-id="798e40e8" data-element_type="widget" data-widget_type="button.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-button-wrapper">
                                                        <a class="elementor-button elementor-size-xl" role="button" id="playyuk">
                                                        <span class="elementor-button-content-wrapper">
                                                        <span class="elementor-button-icon elementor-align-icon-right">
                                                        <i aria-hidden="true" class="fas fa-play"></i>          </span>
                                                        <span class="elementor-button-text"></span>
                                                        </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-42109087 elementor-widget elementor-widget-html" data-id="42109087" data-element_type="widget" data-widget_type="html.default">
                                                <div class="elementor-widget-container">
                                                    <script>
                                                        document.getElementById("stopmusic").onclick=function(){
                                                        pauseAudio()
                                                        }
                                                        document.getElementById("playyuk").onclick=function(){
                                                        playAudio()
                                                        }
                                                    </script>       
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
        <!-- <link rel='stylesheet' id='elementor-gallery-css'  href='https://limstudio/wp-content/plugins/elementor/assets/lib/e-gallery/css/e-gallery.min.css?ver=1.2.0' media='all' /> -->
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/themes/themes14/') ?>wp-content/cache/limstudio/wpfc-minified/1entta9l/dgt61.css" media="all"/>
        <script src='<?= base_url('assets/themes/themes14/') ?>wp-content/plugins/videojs-html5-player/videojs/video.mind279.js?ver=1.1.5' id='videojs-js'></script>
        <script src='<?= base_url('assets/themes/themes14/') ?>wp-includes/js/wp-embed.min9f31.js?ver=5.7.2' id='wp-embed-js'></script>
        <script src='<?= base_url('assets/themes/themes14/') ?>wp-content/plugins/elementor/assets/lib/e-gallery/js/e-gallery.min7359.js?ver=1.2.0' id='elementor-gallery-js'></script>
        <script src='<?= base_url('assets/themes/themes14/') ?>wp-content/plugins/elementor/assets/js/frontend-modules.min952b.js?ver=3.0.16' id='elementor-frontend-modules-js'></script>
        <script src='<?= base_url('assets/themes/themes14/') ?>wp-content/plugins/elementor-pro/assets/lib/sticky/jquery.sticky.min677a.js?ver=3.0.9' id='elementor-sticky-js'></script>
        <script id='elementor-pro-frontend-js-before'>
            var ElementorProFrontendConfig = {"ajaxurl":"https:\/\/limstudio.site\/wp-admin\/admin-ajax.php","nonce":"94d571c88a","i18n":{"toc_no_headings_found":"No headings were found on this page."},"shareButtonsNetworks":{"facebook":{"title":"Facebook","has_counter":true},"twitter":{"title":"Twitter"},"google":{"title":"Google+","has_counter":true},"linkedin":{"title":"LinkedIn","has_counter":true},"pinterest":{"title":"Pinterest","has_counter":true},"reddit":{"title":"Reddit","has_counter":true},"vk":{"title":"VK","has_counter":true},"odnoklassniki":{"title":"OK","has_counter":true},"tumblr":{"title":"Tumblr"},"digg":{"title":"Digg"},"skype":{"title":"Skype"},"stumbleupon":{"title":"StumbleUpon","has_counter":true},"mix":{"title":"Mix"},"telegram":{"title":"Telegram"},"pocket":{"title":"Pocket","has_counter":true},"xing":{"title":"XING","has_counter":true},"whatsapp":{"title":"WhatsApp"},"email":{"title":"Email"},"print":{"title":"Print"}},"facebook_sdk":{"lang":"en_US","app_id":""},"lottie":{"defaultAnimationUrl":"https:\/\/my.possiblewedding.com\/wp-content\/plugins\/elementor-pro\/modules\/lottie\/assets\/animations\/default.json"}};
        </script>
        <script src='<?= base_url('assets/themes/themes14/') ?>wp-content/plugins/elementor-pro/assets/js/frontend.min677a.js?ver=3.0.9' id='elementor-pro-frontend-js'></script>
        <script src='<?= base_url('assets/themes/themes14/') ?>wp-includes/js/jquery/ui/core.min35d0.js?ver=1.12.1' id='jquery-ui-core-js'></script>
        <script src='<?= base_url('assets/themes/themes14/') ?>wp-content/plugins/elementor/assets/lib/dialog/dialog.mina288.js?ver=4.8.1' id='elementor-dialog-js'></script>
        <script src='<?= base_url('assets/themes/themes14/') ?>wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min05da.js?ver=4.0.2' id='elementor-waypoints-js'></script>
        <script src='<?= base_url('assets/themes/themes14/') ?>wp-content/plugins/elementor/assets/lib/swiper/swiper.min48f5.js?ver=5.3.6' id='swiper-js'></script>
        <script src='<?= base_url('assets/themes/themes14/') ?>wp-content/plugins/elementor/assets/lib/share-link/share-link.min952b.js?ver=3.0.16' id='share-link-js'></script>
        <script id='elementor-frontend-js-before'>
            var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false},"i18n":{"shareOnFacebook":"Share on Facebook","shareOnTwitter":"Share on Twitter","pinIt":"Pin it","download":"Download","downloadImage":"Download image","fullscreen":"Fullscreen","zoom":"Zoom","share":"Share","playVideo":"Play Video","previous":"Previous","next":"Next","close":"Close"},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"version":"3.0.16","is_static":false,"legacyMode":{"elementWrappers":true},"urls":{"assets":"https:\/\/my.possiblewedding.com\/wp-content\/plugins\/elementor\/assets\/"},"settings":{"page":[],"editorPreferences":[]},"kit":{"body_background_background":"classic","global_image_lightbox":"yes","lightbox_enable_counter":"yes","lightbox_enable_fullscreen":"yes","lightbox_enable_zoom":"yes","lightbox_enable_share":"yes","lightbox_title_src":"title","lightbox_description_src":"description"},"post":{"id":14975,"title":"Pernikahan%20Eci%20%26%20Emil%20%28Gold%20Daffodil%2011%29%20-%20Possible%20Wedding%20%28Best%20Digital%20Invitation%29","excerpt":"","featuredImage":"https:\/\/my.possiblewedding.com\/wp-content\/uploads\/2021\/02\/REVISI-FOTO-PALING-DEPAN-1-683x1024.jpg"}};
        </script>
        <script src='<?= base_url('assets/themes/themes14/') ?>wp-content/plugins/elementor/assets/js/frontend.min952b.js?ver=3.0.16' id='elementor-frontend-js'></script>
        <script>
            /(trident|msie)/i.test(navigator.userAgent)&&document.getElementById&&window.addEventListener&&window.addEventListener("hashchange",function(){var t,e=location.hash.substring(1);/^[A-z0-9_-]+$/.test(e)&&(t=document.getElementById(e))&&(/^(?:a|select|input|button|textarea)$/i.test(t.tagName)||(t.tabIndex=-1),t.focus())},!1);
        </script>
    </body>
    <!-- Mirrored from limstudio/gold11/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Jun 2021 10:14:43 GMT -->
</html>
<!-- WP Fastest Cache file was created in 1.5833909511566 seconds, on 04-06-21 5:42:39 --><!-- via php -->