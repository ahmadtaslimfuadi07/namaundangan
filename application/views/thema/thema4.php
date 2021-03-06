<!Doctype html>
<html>

<!-- Mirrored from officiallys.com/Cindy-Artha/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 25 Sep 2020 13:53:26 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
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
<head>
    <title>
        <?= $data['nama_p'] . ' & ' . $data['nama_l'] ?>;
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <meta name="description" content="<?= $data['nama_p'] . ' & ' . $data['nama_l'] ?>">
    <meta property="og:title" content=" <?= $data['nama_p'] . ' & ' . $data['nama_l'] ?>;" />
    <meta property="og:url" content="index.html" />
    <meta property="og:description" content="<?= date_format($tanggal_akad, 'd') . ' ' . $bulan_akad . ' ' . date_format($tanggal_akad, 'Y') ?>">
    <meta property="og:image" content="<?= $gambar1[0] ?>">
    <link href="https://www.limstudio.site//assets/images/favicon.png" rel="icon" type="image/png" sizes="96x96">
    <link href="<?= base_url() ?>assets/css/all.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Clicker+Script" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/js/slider/dist/zoomslider.css" />
    <script type="text/javascript" src="<?= base_url() ?>assets/js/vendor/modernizr-2.6.2.min.js"></script>
    <script src="<?= base_url() ?>assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="<?= base_url() ?>assets/js/wow.min.js"></script>
    <script type="text/javascript">
        new WOW().init();
    </script>
</head>

<body>
    <style>
        @charset "UTF-8";

        .animated {
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
        }

        .animated.infinite {
            -webkit-animation-iteration-count: infinite;
            animation-iteration-count: infinite;
        }

        .animated.hinge {
            -webkit-animation-duration: 2s;
            animation-duration: 2s;
        }

        @-webkit-keyframes bounce {

            0%,
            20%,
            53%,
            80%,
            100% {
                -webkit-trasition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
                transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }

            40%,
            43% {
                -webkit-transition-timing-function: cubic-bezier(0.755, 0.050, 0.855, 0.060);
                transition-timing-function: cubic-bezier(0.755, 0.050, 0.855, 0.060);
                -webkit-transform: translate3d(0, -30px, 0);
                transform: translate3d(0, -30px, 0);
            }

            70% {
                -webkit-transition-timing-function: cubic-bezier(0.755, 0.050, 0.855, 0.060);
                transition-timing-function: cubic-bezier(0.755, 0.050, 0.855, 0.060);
                -webkit-transform: translate3d(0, -15px, 0);
                transform: translate3d(0, -15px, 0);
            }

            90% {
                -webkit-transform: translate3d(0, -4px, 0);
                transform: translate3d(0, -4px, 0);
            }
        }

        @keyframes bounce {

            0%,
            20%,
            53%,
            80%,
            100% {
                -webkit-transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
                transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }

            40%,
            43% {
                -webkit-transition-timing-function: cubic-bezier(0.755, 0.050, 0.855, 0.060);
                transition-timing-function: cubic-bezier(0.755, 0.050, 0.855, 0.060);
                -webkit-transform: translate3d(0, -30px, 0);
                transform: translate3d(0, -30px, 0);
            }

            70% {
                -webkit-transition-timing-function: cubic-bezier(0.755, 0.050, 0.855, 0.060);
                transition-timing-function: cubic-bezier(0.755, 0.050, 0.855, 0.060);
                -webkit-transform: translate3d(0, -15px, 0);
                transform: translate3d(0, -15px, 0);
            }

            90% {
                -webkit-transform: translate3d(0, -4px, 0);
                transform: translate3d(0, -4px, 0);
            }
        }

        .bounce {
            -webkit-animation-name: bounce;
            animation-name: bounce;
            -webkit-transform-origin: center bottom;
            -ms-transform-origin: center bottom;
            transform-origin: center bottom;
        }

        @-webkit-keyframes flash {

            0%,
            50%,
            100% {
                opacity: 1;
            }

            25%,
            75% {
                opacity: 0;
            }
        }

        @keyframes flash {

            0%,
            50%,
            100% {
                opacity: 1;
            }

            25%,
            75% {
                opacity: 0;
            }
        }

        .flash {
            -webkit-animation-name: flash;
            animation-name: flash;
        }

        /* originally authored by Nick Pettit - https://github.com/nickpettit/glide */

        @-webkit-keyframes pulse {
            0% {
                -webkit-transform: scale3d(1, 1, 1);
                transform: scale3d(1, 1, 1);
            }

            50% {
                -webkit-transform: scale3d(1.05, 1.05, 1.05);
                transform: scale3d(1.05, 1.05, 1.05);
            }

            100% {
                -webkit-transform: scale3d(1, 1, 1);
                transform: scale3d(1, 1, 1);
            }
        }

        @keyframes pulse {
            0% {
                -webkit-transform: scale3d(1, 1, 1);
                transform: scale3d(1, 1, 1);
            }

            50% {
                -webkit-transform: scale3d(1.05, 1.05, 1.05);
                transform: scale3d(1.05, 1.05, 1.05);
            }

            100% {
                -webkit-transform: scale3d(1, 1, 1);
                transform: scale3d(1, 1, 1);
            }
        }

        .pulse {
            -webkit-animation-name: pulse;
            animation-name: pulse;
        }

        @-webkit-keyframes rubberBand {
            0% {
                -webkit-transform: scale3d(1, 1, 1);
                transform: scale3d(1, 1, 1);
            }

            30% {
                -webkit-transform: scale3d(1.25, 0.75, 1);
                transform: scale3d(1.25, 0.75, 1);
            }

            40% {
                -webkit-transform: scale3d(0.75, 1.25, 1);
                transform: scale3d(0.75, 1.25, 1);
            }

            50% {
                -webkit-transform: scale3d(1.15, 0.85, 1);
                transform: scale3d(1.15, 0.85, 1);
            }

            65% {
                -webkit-transform: scale3d(.95, 1.05, 1);
                transform: scale3d(.95, 1.05, 1);
            }

            75% {
                -webkit-transform: scale3d(1.05, .95, 1);
                transform: scale3d(1.05, .95, 1);
            }

            100% {
                -webkit-transform: scale3d(1, 1, 1);
                transform: scale3d(1, 1, 1);
            }
        }

        @keyframes rubberBand {
            0% {
                -webkit-transform: scale3d(1, 1, 1);
                transform: scale3d(1, 1, 1);
            }

            30% {
                -webkit-transform: scale3d(1.25, 0.75, 1);
                transform: scale3d(1.25, 0.75, 1);
            }

            40% {
                -webkit-transform: scale3d(0.75, 1.25, 1);
                transform: scale3d(0.75, 1.25, 1);
            }

            50% {
                -webkit-transform: scale3d(1.15, 0.85, 1);
                transform: scale3d(1.15, 0.85, 1);
            }

            65% {
                -webkit-transform: scale3d(.95, 1.05, 1);
                transform: scale3d(.95, 1.05, 1);
            }

            75% {
                -webkit-transform: scale3d(1.05, .95, 1);
                transform: scale3d(1.05, .95, 1);
            }

            100% {
                -webkit-transform: scale3d(1, 1, 1);
                transform: scale3d(1, 1, 1);
            }
        }

        .rubberBand {
            -webkit-animation-name: rubberBand;
            animation-name: rubberBand;
        }

        @-webkit-keyframes shake {


            10%,
            30%,
            50%,
            70%,
            90% {
                -webkit-transform: translate3d(-150px, 0, 0);
                transform: translate3d(-150px, 0, 0);
            }

            20%,
            40%,
            60%,
            80% {
                -webkit-transform: translate3d(150px, 0, 0);
                transform: translate3d(150px, 0, 0);
            }
        }

        @keyframes shake {

            10%,
            30%,
            50%,
            70%,
            90% {
                -webkit-transform: translate3d(-150px, 0, 0);
                transform: translate3d(-150px, 0, 0);
            }

            20%,
            40%,
            60%,
            80% {
                -webkit-transform: translate3d(150px, 0, 0);
                transform: translate3d(150px, 0, 0);
            }
        }

        .shake {
            -webkit-animation-name: shake;
            animation-name: shake;
        }

        @-webkit-keyframes swing {
            20% {
                -webkit-transform: rotate3d(0, 0, 1, 15deg);
                transform: rotate3d(0, 0, 1, 15deg);
            }

            40% {
                -webkit-transform: rotate3d(0, 0, 1, -10deg);
                transform: rotate3d(0, 0, 1, -10deg);
            }

            60% {
                -webkit-transform: rotate3d(0, 0, 1, 5deg);
                transform: rotate3d(0, 0, 1, 5deg);
            }

            80% {
                -webkit-transform: rotate3d(0, 0, 1, -5deg);
                transform: rotate3d(0, 0, 1, -5deg);
            }

            100% {
                -webkit-transform: rotate3d(0, 0, 1, 0deg);
                transform: rotate3d(0, 0, 1, 0deg);
            }
        }

        @keyframes swing {
            20% {
                -webkit-transform: rotate3d(0, 0, 1, 15deg);
                transform: rotate3d(0, 0, 1, 15deg);
            }

            40% {
                -webkit-transform: rotate3d(0, 0, 1, -10deg);
                transform: rotate3d(0, 0, 1, -10deg);
            }

            60% {
                -webkit-transform: rotate3d(0, 0, 1, 5deg);
                transform: rotate3d(0, 0, 1, 5deg);
            }

            80% {
                -webkit-transform: rotate3d(0, 0, 1, -5deg);
                transform: rotate3d(0, 0, 1, -5deg);
            }

            100% {
                -webkit-transform: rotate3d(0, 0, 1, 0deg);
                transform: rotate3d(0, 0, 1, 0deg);
            }
        }

        .swing {
            -webkit-transform-origin: top center;
            -ms-transform-origin: top center;
            transform-origin: top center;
            -webkit-animation-name: swing;
            animation-name: swing;
        }

        @-webkit-keyframes tada {
            0% {
                -webkit-transform: scale3d(1, 1, 1);
                transform: scale3d(1, 1, 1);
            }

            10%,
            20% {
                -webkit-transform: scale3d(.9, .9, .9) rotate3d(0, 0, 1, -3deg);
                transform: scale3d(.9, .9, .9) rotate3d(0, 0, 1, -3deg);
            }

            30%,
            50%,
            70%,
            90% {
                -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg);
                transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg);
            }

            40%,
            60%,
            80% {
                -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg);
                transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg);
            }

            100% {
                -webkit-transform: scale3d(1, 1, 1);
                transform: scale3d(1, 1, 1);
            }
        }

        @keyframes tada {
            0% {
                -webkit-transform: scale3d(1, 1, 1);
                transform: scale3d(1, 1, 1);
            }

            10%,
            20% {
                -webkit-transform: scale3d(.9, .9, .9) rotate3d(0, 0, 1, -3deg);
                transform: scale3d(.9, .9, .9) rotate3d(0, 0, 1, -3deg);
            }

            30%,
            50%,
            70%,
            90% {
                -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg);
                transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg);
            }

            40%,
            60%,
            80% {
                -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg);
                transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg);
            }

            100% {
                -webkit-transform: scale3d(1, 1, 1);
                transform: scale3d(1, 1, 1);
            }
        }

        .tada {
            -webkit-animation-name: tada;
            animation-name: tada;
        }

        /* originally authored by Nick Pettit - https://github.com/nickpettit/glide */

        @-webkit-keyframes wobble {
            0% {
                -webkit-transform: none;
                transform: none;
            }

            15% {
                -webkit-transform: translate3d(-25%, 0, 0) rotate3d(0, 0, 1, -5deg);
                transform: translate3d(-25%, 0, 0) rotate3d(0, 0, 1, -5deg);
            }

            30% {
                -webkit-transform: translate3d(20%, 0, 0) rotate3d(0, 0, 1, 3deg);
                transform: translate3d(20%, 0, 0) rotate3d(0, 0, 1, 3deg);
            }

            45% {
                -webkit-transform: translate3d(-15%, 0, 0) rotate3d(0, 0, 1, -3deg);
                transform: translate3d(-15%, 0, 0) rotate3d(0, 0, 1, -3deg);
            }

            60% {
                -webkit-transform: translate3d(10%, 0, 0) rotate3d(0, 0, 1, 2deg);
                transform: translate3d(10%, 0, 0) rotate3d(0, 0, 1, 2deg);
            }

            75% {
                -webkit-transform: translate3d(-5%, 0, 0) rotate3d(0, 0, 1, -1deg);
                transform: translate3d(-5%, 0, 0) rotate3d(0, 0, 1, -1deg);
            }

            100% {
                -webkit-transform: none;
                transform: none;
            }
        }

        @keyframes wobble {
            0% {
                -webkit-transform: none;
                transform: none;
            }

            15% {
                -webkit-transform: translate3d(-25%, 0, 0) rotate3d(0, 0, 1, -5deg);
                transform: translate3d(-25%, 0, 0) rotate3d(0, 0, 1, -5deg);
            }

            30% {
                -webkit-transform: translate3d(20%, 0, 0) rotate3d(0, 0, 1, 3deg);
                transform: translate3d(20%, 0, 0) rotate3d(0, 0, 1, 3deg);
            }

            45% {
                -webkit-transform: translate3d(-15%, 0, 0) rotate3d(0, 0, 1, -3deg);
                transform: translate3d(-15%, 0, 0) rotate3d(0, 0, 1, -3deg);
            }

            60% {
                -webkit-transform: translate3d(10%, 0, 0) rotate3d(0, 0, 1, 2deg);
                transform: translate3d(10%, 0, 0) rotate3d(0, 0, 1, 2deg);
            }

            75% {
                -webkit-transform: translate3d(-5%, 0, 0) rotate3d(0, 0, 1, -1deg);
                transform: translate3d(-5%, 0, 0) rotate3d(0, 0, 1, -1deg);
            }

            100% {
                -webkit-transform: none;
                transform: none;
            }
        }

        .wobble {
            -webkit-animation-name: wobble;
            animation-name: wobble;
        }

        @-webkit-keyframes bounceIn {

            0%,
            20%,
            40%,
            60%,
            80%,
            100% {
                -webkit-transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
                transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
            }

            0% {
                opacity: 0;
                -webkit-transform: scale3d(.3, .3, .3);
                transform: scale3d(.3, .3, .3);
            }

            20% {
                -webkit-transform: scale3d(1.1, 1.1, 1.1);
                transform: scale3d(1.1, 1.1, 1.1);
            }

            40% {
                -webkit-transform: scale3d(.9, .9, .9);
                transform: scale3d(.9, .9, .9);
            }

            60% {
                opacity: 1;
                -webkit-transform: scale3d(1.03, 1.03, 1.03);
                transform: scale3d(1.03, 1.03, 1.03);
            }

            80% {
                -webkit-transform: scale3d(.97, .97, .97);
                transform: scale3d(.97, .97, .97);
            }

            100% {
                opacity: 1;
                -webkit-transform: scale3d(1, 1, 1);
                transform: scale3d(1, 1, 1);
            }
        }

        @keyframes bounceIn {

            0%,
            20%,
            40%,
            60%,
            80%,
            100% {
                -webkit-transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
                transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
            }

            0% {
                opacity: 0;
                -webkit-transform: scale3d(.3, .3, .3);
                transform: scale3d(.3, .3, .3);
            }

            20% {
                -webkit-transform: scale3d(1.1, 1.1, 1.1);
                transform: scale3d(1.1, 1.1, 1.1);
            }

            40% {
                -webkit-transform: scale3d(.9, .9, .9);
                transform: scale3d(.9, .9, .9);
            }

            60% {
                opacity: 1;
                -webkit-transform: scale3d(1.03, 1.03, 1.03);
                transform: scale3d(1.03, 1.03, 1.03);
            }

            80% {
                -webkit-transform: scale3d(.97, .97, .97);
                transform: scale3d(.97, .97, .97);
            }

            100% {
                opacity: 1;
                -webkit-transform: scale3d(1, 1, 1);
                transform: scale3d(1, 1, 1);
            }
        }

        .bounceIn {
            -webkit-animation-name: bounceIn;
            animation-name: bounceIn;
            -webkit-animation-duration: .75s;
            animation-duration: .75s;
        }

        @-webkit-keyframes bounceInDown {

            0%,
            60%,
            75%,
            90%,
            100% {
                -webkit-transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
                transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
            }

            0% {
                opacity: 0;
                -webkit-transform: translate3d(0, -3000px, 0);
                transform: translate3d(0, -3000px, 0);
            }

            60% {
                opacity: 1;
                -webkit-transform: translate3d(0, 25px, 0);
                transform: translate3d(0, 25px, 0);
            }

            75% {
                -webkit-transform: translate3d(0, -10px, 0);
                transform: translate3d(0, -10px, 0);
            }

            90% {
                -webkit-transform: translate3d(0, 5px, 0);
                transform: translate3d(0, 5px, 0);
            }

            100% {
                -webkit-transform: none;
                transform: none;
            }
        }

        @keyframes bounceInDown {

            0%,
            60%,
            75%,
            90%,
            100% {
                -webkit-transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
                transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
            }

            0% {
                opacity: 0;
                -webkit-transform: translate3d(0, -3000px, 0);
                transform: translate3d(0, -3000px, 0);
            }

            60% {
                opacity: 1;
                -webkit-transform: translate3d(0, 25px, 0);
                transform: translate3d(0, 25px, 0);
            }

            75% {
                -webkit-transform: translate3d(0, -10px, 0);
                transform: translate3d(0, -10px, 0);
            }

            90% {
                -webkit-transform: translate3d(0, 5px, 0);
                transform: translate3d(0, 5px, 0);
            }

            100% {
                -webkit-transform: none;
                transform: none;
            }
        }

        .bounceInDown {
            -webkit-animation-name: bounceInDown;
            animation-name: bounceInDown;
        }

        @-webkit-keyframes bounceInLeft {

            0%,
            60%,
            75%,
            90%,
            100% {
                -webkit-transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
                transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
            }

            0% {
                opacity: 0;
                -webkit-transform: translate3d(-3000px, 0, 0);
                transform: translate3d(-3000px, 0, 0);
            }

            60% {
                opacity: 1;
                -webkit-transform: translate3d(25px, 0, 0);
                transform: translate3d(25px, 0, 0);
            }

            75% {
                -webkit-transform: translate3d(-10px, 0, 0);
                transform: translate3d(-10px, 0, 0);
            }

            90% {
                -webkit-transform: translate3d(5px, 0, 0);
                transform: translate3d(5px, 0, 0);
            }

            100% {
                -webkit-transform: none;
                transform: none;
            }
        }

        @keyframes bounceInLeft {

            0%,
            60%,
            75%,
            90%,
            100% {
                -webkit-transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
                transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
            }

            0% {
                opacity: 0;
                -webkit-transform: translate3d(-3000px, 0, 0);
                transform: translate3d(-3000px, 0, 0);
            }

            60% {
                opacity: 1;
                -webkit-transform: translate3d(25px, 0, 0);
                transform: translate3d(25px, 0, 0);
            }

            75% {
                -webkit-transform: translate3d(-10px, 0, 0);
                transform: translate3d(-10px, 0, 0);
            }

            90% {
                -webkit-transform: translate3d(5px, 0, 0);
                transform: translate3d(5px, 0, 0);
            }

            100% {
                -webkit-transform: none;
                transform: none;
            }
        }

        .bounceInLeft {
            -webkit-animation-name: bounceInLeft;
            animation-name: bounceInLeft;
        }

        @-webkit-keyframes bounceInRight {

            0%,
            60%,
            75%,
            90%,
            100% {
                -webkit-transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
                transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
            }

            0% {
                opacity: 0;
                -webkit-transform: translate3d(3000px, 0, 0);
                transform: translate3d(3000px, 0, 0);
            }

            60% {
                opacity: 1;
                -webkit-transform: translate3d(-25px, 0, 0);
                transform: translate3d(-25px, 0, 0);
            }

            75% {
                -webkit-transform: translate3d(10px, 0, 0);
                transform: translate3d(10px, 0, 0);
            }

            90% {
                -webkit-transform: translate3d(-5px, 0, 0);
                transform: translate3d(-5px, 0, 0);
            }

            100% {
                -webkit-transform: none;
                transform: none;
            }
        }

        @keyframes bounceInRight {

            0%,
            60%,
            75%,
            90%,
            100% {
                -webkit-transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
                transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
            }

            0% {
                opacity: 0;
                -webkit-transform: translate3d(3000px, 0, 0);
                transform: translate3d(3000px, 0, 0);
            }

            60% {
                opacity: 1;
                -webkit-transform: translate3d(-25px, 0, 0);
                transform: translate3d(-25px, 0, 0);
            }

            75% {
                -webkit-transform: translate3d(10px, 0, 0);
                transform: translate3d(10px, 0, 0);
            }

            90% {
                -webkit-transform: translate3d(-5px, 0, 0);
                transform: translate3d(-5px, 0, 0);
            }

            100% {
                -webkit-transform: none;
                transform: none;
            }
        }

        .bounceInRight {
            -webkit-animation-name: bounceInRight;
            animation-name: bounceInRight;
        }

        @-webkit-keyframes bounceInUp {

            0%,
            60%,
            75%,
            90%,
            100% {
                -webkit-transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
                transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
            }

            0% {
                opacity: 0;
                -webkit-transform: translate3d(0, 3000px, 0);
                transform: translate3d(0, 3000px, 0);
            }

            60% {
                opacity: 1;
                -webkit-transform: translate3d(0, -20px, 0);
                transform: translate3d(0, -20px, 0);
            }

            75% {
                -webkit-transform: translate3d(0, 10px, 0);
                transform: translate3d(0, 10px, 0);
            }

            90% {
                -webkit-transform: translate3d(0, -5px, 0);
                transform: translate3d(0, -5px, 0);
            }

            100% {
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }
        }

        @keyframes bounceInUp {

            0%,
            60%,
            75%,
            90%,
            100% {
                -webkit-transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
                transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
            }

            0% {
                opacity: 0;
                -webkit-transform: translate3d(0, 3000px, 0);
                transform: translate3d(0, 3000px, 0);
            }

            60% {
                opacity: 1;
                -webkit-transform: translate3d(0, -20px, 0);
                transform: translate3d(0, -20px, 0);
            }

            75% {
                -webkit-transform: translate3d(0, 10px, 0);
                transform: translate3d(0, 10px, 0);
            }

            90% {
                -webkit-transform: translate3d(0, -5px, 0);
                transform: translate3d(0, -5px, 0);
            }

            100% {
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }
        }

        .bounceInUp {
            -webkit-animation-name: bounceInUp;
            animation-name: bounceInUp;
        }

        @-webkit-keyframes bounceOut {
            20% {
                -webkit-transform: scale3d(.9, .9, .9);
                transform: scale3d(.9, .9, .9);
            }

            50%,
            55% {
                opacity: 1;
                -webkit-transform: scale3d(1.1, 1.1, 1.1);
                transform: scale3d(1.1, 1.1, 1.1);
            }

            100% {
                opacity: 0;
                -webkit-transform: scale3d(.3, .3, .3);
                transform: scale3d(.3, .3, .3);
            }
        }

        @keyframes bounceOut {
            20% {
                -webkit-transform: scale3d(.9, .9, .9);
                transform: scale3d(.9, .9, .9);
            }

            50%,
            55% {
                opacity: 1;
                -webkit-transform: scale3d(1.1, 1.1, 1.1);
                transform: scale3d(1.1, 1.1, 1.1);
            }

            100% {
                opacity: 0;
                -webkit-transform: scale3d(.3, .3, .3);
                transform: scale3d(.3, .3, .3);
            }
        }

        .bounceOut {
            -webkit-animation-name: bounceOut;
            animation-name: bounceOut;
            -webkit-animation-duration: .75s;
            animation-duration: .75s;
        }

        @-webkit-keyframes bounceOutDown {
            20% {
                -webkit-transform: translate3d(0, 10px, 0);
                transform: translate3d(0, 10px, 0);
            }

            40%,
            45% {
                opacity: 1;
                -webkit-transform: translate3d(0, -20px, 0);
                transform: translate3d(0, -20px, 0);
            }

            100% {
                opacity: 0;
                -webkit-transform: translate3d(0, 2000px, 0);
                transform: translate3d(0, 2000px, 0);
            }
        }

        @keyframes bounceOutDown {
            20% {
                -webkit-transform: translate3d(0, 10px, 0);
                transform: translate3d(0, 10px, 0);
            }

            40%,
            45% {
                opacity: 1;
                -webkit-transform: translate3d(0, -20px, 0);
                transform: translate3d(0, -20px, 0);
            }

            100% {
                opacity: 0;
                -webkit-transform: translate3d(0, 2000px, 0);
                transform: translate3d(0, 2000px, 0);
            }
        }

        .bounceOutDown {
            -webkit-animation-name: bounceOutDown;
            animation-name: bounceOutDown;
        }

        @-webkit-keyframes bounceOutLeft {
            20% {
                opacity: 1;
                -webkit-transform: translate3d(20px, 0, 0);
                transform: translate3d(20px, 0, 0);
            }

            100% {
                opacity: 0;
                -webkit-transform: translate3d(-2000px, 0, 0);
                transform: translate3d(-2000px, 0, 0);
            }
        }

        @keyframes bounceOutLeft {
            20% {
                opacity: 1;
                -webkit-transform: translate3d(20px, 0, 0);
                transform: translate3d(20px, 0, 0);
            }

            100% {
                opacity: 0;
                -webkit-transform: translate3d(-2000px, 0, 0);
                transform: translate3d(-2000px, 0, 0);
            }
        }

        .bounceOutLeft {
            -webkit-animation-name: bounceOutLeft;
            animation-name: bounceOutLeft;
        }

        @-webkit-keyframes bounceOutRight {
            20% {
                opacity: 1;
                -webkit-transform: translate3d(-20px, 0, 0);
                transform: translate3d(-20px, 0, 0);
            }

            100% {
                opacity: 0;
                -webkit-transform: translate3d(2000px, 0, 0);
                transform: translate3d(2000px, 0, 0);
            }
        }

        @keyframes bounceOutRight {
            20% {
                opacity: 1;
                -webkit-transform: translate3d(-20px, 0, 0);
                transform: translate3d(-20px, 0, 0);
            }

            100% {
                opacity: 0;
                -webkit-transform: translate3d(2000px, 0, 0);
                transform: translate3d(2000px, 0, 0);
            }
        }

        .bounceOutRight {
            -webkit-animation-name: bounceOutRight;
            animation-name: bounceOutRight;
        }

        @-webkit-keyframes bounceOutUp {
            20% {
                -webkit-transform: translate3d(0, -10px, 0);
                transform: translate3d(0, -10px, 0);
            }

            40%,
            45% {
                opacity: 1;
                -webkit-transform: translate3d(0, 20px, 0);
                transform: translate3d(0, 20px, 0);
            }

            100% {
                opacity: 0;
                -webkit-transform: translate3d(0, -2000px, 0);
                transform: translate3d(0, -2000px, 0);
            }
        }

        @keyframes bounceOutUp {
            20% {
                -webkit-transform: translate3d(0, -10px, 0);
                transform: translate3d(0, -10px, 0);
            }

            40%,
            45% {
                opacity: 1;
                -webkit-transform: translate3d(0, 20px, 0);
                transform: translate3d(0, 20px, 0);
            }

            100% {
                opacity: 0;
                -webkit-transform: translate3d(0, -2000px, 0);
                transform: translate3d(0, -2000px, 0);
            }
        }

        .bounceOutUp {
            -webkit-animation-name: bounceOutUp;
            animation-name: bounceOutUp;
        }

        @-webkit-keyframes fadeIn {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        .fadeIn {
            -webkit-animation-name: fadeIn;
            animation-name: fadeIn;
        }

        @-webkit-keyframes fadeInDown {
            0% {
                opacity: 0;
                -webkit-transform: translate3d(0, -100%, 0);
                transform: translate3d(0, -100%, 0);
            }

            100% {
                opacity: 1;
                -webkit-transform: none;
                transform: none;
            }
        }

        @keyframes fadeInDown {
            0% {
                opacity: 0;
                -webkit-transform: translate3d(0, -100%, 0);
                transform: translate3d(0, -100%, 0);
            }

            100% {
                opacity: 1;
                -webkit-transform: none;
                transform: none;
            }
        }

        .fadeInDown {
            -webkit-animation-name: fadeInDown;
            animation-name: fadeInDown;
        }

        @-webkit-keyframes fadeInDownBig {
            0% {
                opacity: 0;
                -webkit-transform: translate3d(0, -2000px, 0);
                transform: translate3d(0, -2000px, 0);
            }

            100% {
                opacity: 1;
                -webkit-transform: none;
                transform: none;
            }
        }

        @keyframes fadeInDownBig {
            0% {
                opacity: 0;
                -webkit-transform: translate3d(0, -2000px, 0);
                transform: translate3d(0, -2000px, 0);
            }

            100% {
                opacity: 1;
                -webkit-transform: none;
                transform: none;
            }
        }

        .fadeInDownBig {
            -webkit-animation-name: fadeInDownBig;
            animation-name: fadeInDownBig;
        }

        @-webkit-keyframes fadeInLeft {
            0% {
                opacity: 0;
                -webkit-transform: translate3d(-100%, 0, 0);
                transform: translate3d(-100%, 0, 0);
            }

            100% {
                opacity: 1;
                -webkit-transform: none;
                transform: none;
            }
        }

        @keyframes fadeInLeft {
            0% {
                opacity: 0;
                -webkit-transform: translate3d(-100%, 0, 0);
                transform: translate3d(-100%, 0, 0);
            }

            100% {
                opacity: 1;
                -webkit-transform: none;
                transform: none;
            }
        }

        .fadeInLeft {
            -webkit-animation-name: fadeInLeft;
            animation-name: fadeInLeft;
        }

        @-webkit-keyframes fadeInLeftBig {
            0% {
                opacity: 0;
                -webkit-transform: translate3d(-2000px, 0, 0);
                transform: translate3d(-2000px, 0, 0);
            }

            100% {
                opacity: 1;
                -webkit-transform: none;
                transform: none;
            }
        }

        @keyframes fadeInLeftBig {
            0% {
                opacity: 0;
                -webkit-transform: translate3d(-2000px, 0, 0);
                transform: translate3d(-2000px, 0, 0);
            }

            100% {
                opacity: 1;
                -webkit-transform: none;
                transform: none;
            }
        }

        .fadeInLeftBig {
            -webkit-animation-name: fadeInLeftBig;
            animation-name: fadeInLeftBig;
        }

        @-webkit-keyframes fadeInRight {
            0% {
                opacity: 0;
                -webkit-transform: translate3d(100%, 0, 0);
                transform: translate3d(100%, 0, 0);
            }

            100% {
                opacity: 1;
                -webkit-transform: none;
                transform: none;
            }
        }

        @keyframes fadeInRight {
            0% {
                opacity: 0;
                -webkit-transform: translate3d(100%, 0, 0);
                transform: translate3d(100%, 0, 0);
            }

            100% {
                opacity: 1;
                -webkit-transform: none;
                transform: none;
            }
        }

        .fadeInRight {
            -webkit-animation-name: fadeInRight;
            animation-name: fadeInRight;
        }

        @-webkit-keyframes fadeInRightBig {
            0% {
                opacity: 0;
                -webkit-transform: translate3d(2000px, 0, 0);
                transform: translate3d(2000px, 0, 0);
            }

            100% {
                opacity: 1;
                -webkit-transform: none;
                transform: none;
            }
        }

        @keyframes fadeInRightBig {
            0% {
                opacity: 0;
                -webkit-transform: translate3d(2000px, 0, 0);
                transform: translate3d(2000px, 0, 0);
            }

            100% {
                opacity: 1;
                -webkit-transform: none;
                transform: none;
            }
        }

        .fadeInRightBig {
            -webkit-animation-name: fadeInRightBig;
            animation-name: fadeInRightBig;
        }

        @-webkit-keyframes fadeInUp {
            0% {
                opacity: 0;
                -webkit-transform: translate3d(0, 100%, 0);
                transform: translate3d(0, 100%, 0);
            }

            100% {
                opacity: 1;
                -webkit-transform: none;
                transform: none;
            }
        }

        @keyframes fadeInUp {
            0% {
                opacity: 0;
                -webkit-transform: translate3d(0, 100%, 0);
                transform: translate3d(0, 100%, 0);
            }

            100% {
                opacity: 1;
                -webkit-transform: none;
                transform: none;
            }
        }

        .fadeInUp {
            -webkit-animation-name: fadeInUp;
            animation-name: fadeInUp;
        }

        @-webkit-keyframes fadeInUpBig {
            0% {
                opacity: 0;
                -webkit-transform: translate3d(0, 2000px, 0);
                transform: translate3d(0, 2000px, 0);
            }

            100% {
                opacity: 1;
                -webkit-transform: none;
                transform: none;
            }
        }

        @keyframes fadeInUpBig {
            0% {
                opacity: 0;
                -webkit-transform: translate3d(0, 2000px, 0);
                transform: translate3d(0, 2000px, 0);
            }

            100% {
                opacity: 1;
                -webkit-transform: none;
                transform: none;
            }
        }

        .fadeInUpBig {
            -webkit-animation-name: fadeInUpBig;
            animation-name: fadeInUpBig;
        }

        @-webkit-keyframes fadeOut {
            0% {
                opacity: 1;
            }

            100% {
                opacity: 0;
            }
        }

        @keyframes fadeOut {
            0% {
                opacity: 1;
            }

            100% {
                opacity: 0;
            }
        }

        .fadeOut {
            -webkit-animation-name: fadeOut;
            animation-name: fadeOut;
        }

        @-webkit-keyframes fadeOutDown {
            0% {
                opacity: 1;
            }

            100% {
                opacity: 0;
                -webkit-transform: translate3d(0, 100%, 0);
                transform: translate3d(0, 100%, 0);
            }
        }

        @keyframes fadeOutDown {
            0% {
                opacity: 1;
            }

            100% {
                opacity: 0;
                -webkit-transform: translate3d(0, 100%, 0);
                transform: translate3d(0, 100%, 0);
            }
        }

        .fadeOutDown {
            -webkit-animation-name: fadeOutDown;
            animation-name: fadeOutDown;
        }

        @-webkit-keyframes fadeOutDownBig {
            0% {
                opacity: 1;
            }

            100% {
                opacity: 0;
                -webkit-transform: translate3d(0, 2000px, 0);
                transform: translate3d(0, 2000px, 0);
            }
        }

        @keyframes fadeOutDownBig {
            0% {
                opacity: 1;
            }

            100% {
                opacity: 0;
                -webkit-transform: translate3d(0, 2000px, 0);
                transform: translate3d(0, 2000px, 0);
            }
        }

        .fadeOutDownBig {
            -webkit-animation-name: fadeOutDownBig;
            animation-name: fadeOutDownBig;
        }

        @-webkit-keyframes fadeOutLeft {
            0% {
                opacity: 1;
            }

            100% {
                opacity: 0;
                -webkit-transform: translate3d(-100%, 0, 0);
                transform: translate3d(-100%, 0, 0);
            }
        }

        @keyframes fadeOutLeft {
            0% {
                opacity: 1;
            }

            100% {
                opacity: 0;
                -webkit-transform: translate3d(-100%, 0, 0);
                transform: translate3d(-100%, 0, 0);
            }
        }

        .fadeOutLeft {
            -webkit-animation-name: fadeOutLeft;
            animation-name: fadeOutLeft;
        }

        @-webkit-keyframes fadeOutLeftBig {
            0% {
                opacity: 1;
            }

            100% {
                opacity: 0;
                -webkit-transform: translate3d(-2000px, 0, 0);
                transform: translate3d(-2000px, 0, 0);
            }
        }

        @keyframes fadeOutLeftBig {
            0% {
                opacity: 1;
            }

            100% {
                opacity: 0;
                -webkit-transform: translate3d(-2000px, 0, 0);
                transform: translate3d(-2000px, 0, 0);
            }
        }

        .fadeOutLeftBig {
            -webkit-animation-name: fadeOutLeftBig;
            animation-name: fadeOutLeftBig;
        }

        @-webkit-keyframes fadeOutRight {
            0% {
                opacity: 1;
            }

            100% {
                opacity: 0;
                -webkit-transform: translate3d(100%, 0, 0);
                transform: translate3d(100%, 0, 0);
            }
        }

        @keyframes fadeOutRight {
            0% {
                opacity: 1;
            }

            100% {
                opacity: 0;
                -webkit-transform: translate3d(100%, 0, 0);
                transform: translate3d(100%, 0, 0);
            }
        }

        .fadeOutRight {
            -webkit-animation-name: fadeOutRight;
            animation-name: fadeOutRight;
        }

        @-webkit-keyframes fadeOutRightBig {
            0% {
                opacity: 1;
            }

            100% {
                opacity: 0;
                -webkit-transform: translate3d(2000px, 0, 0);
                transform: translate3d(2000px, 0, 0);
            }
        }

        @keyframes fadeOutRightBig {
            0% {
                opacity: 1;
            }

            100% {
                opacity: 0;
                -webkit-transform: translate3d(2000px, 0, 0);
                transform: translate3d(2000px, 0, 0);
            }
        }

        .fadeOutRightBig {
            -webkit-animation-name: fadeOutRightBig;
            animation-name: fadeOutRightBig;
        }

        @-webkit-keyframes fadeOutUp {
            0% {
                opacity: 1;
            }

            100% {
                opacity: 0;
                -webkit-transform: translate3d(0, -100%, 0);
                transform: translate3d(0, -100%, 0);
            }
        }

        @keyframes fadeOutUp {
            0% {
                opacity: 1;
            }

            100% {
                opacity: 0;
                -webkit-transform: translate3d(0, -100%, 0);
                transform: translate3d(0, -100%, 0);
            }
        }

        .fadeOutUp {
            -webkit-animation-name: fadeOutUp;
            animation-name: fadeOutUp;
        }

        @-webkit-keyframes fadeOutUpBig {
            0% {
                opacity: 1;
            }

            100% {
                opacity: 0;
                -webkit-transform: translate3d(0, -2000px, 0);
                transform: translate3d(0, -2000px, 0);
            }
        }

        @keyframes fadeOutUpBig {
            0% {
                opacity: 1;
            }

            100% {
                opacity: 0;
                -webkit-transform: translate3d(0, -2000px, 0);
                transform: translate3d(0, -2000px, 0);
            }
        }

        .fadeOutUpBig {
            -webkit-animation-name: fadeOutUpBig;
            animation-name: fadeOutUpBig;
        }

        @-webkit-keyframes flip {
            0% {
                -webkit-transform: perspective(400px) rotate3d(0, 1, 0, -360deg);
                transform: perspective(400px) rotate3d(0, 1, 0, -360deg);
                -webkit-animation-timing-function: ease-out;
                animation-timing-function: ease-out;
            }

            40% {
                -webkit-transform: perspective(400px) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -190deg);
                transform: perspective(400px) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -190deg);
                -webkit-animation-timing-function: ease-out;
                animation-timing-function: ease-out;
            }

            50% {
                -webkit-transform: perspective(400px) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -170deg);
                transform: perspective(400px) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -170deg);
                -webkit-animation-timing-function: ease-in;
                animation-timing-function: ease-in;
            }

            80% {
                -webkit-transform: perspective(400px) scale3d(.95, .95, .95);
                transform: perspective(400px) scale3d(.95, .95, .95);
                -webkit-animation-timing-function: ease-in;
                animation-timing-function: ease-in;
            }

            100% {
                -webkit-transform: perspective(400px);
                transform: perspective(400px);
                -webkit-animation-timing-function: ease-in;
                animation-timing-function: ease-in;
            }
        }

        @keyframes flip {
            0% {
                -webkit-transform: perspective(400px) rotate3d(0, 1, 0, -360deg);
                transform: perspective(400px) rotate3d(0, 1, 0, -360deg);
                -webkit-animation-timing-function: ease-out;
                animation-timing-function: ease-out;
            }

            40% {
                -webkit-transform: perspective(400px) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -190deg);
                transform: perspective(400px) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -190deg);
                -webkit-animation-timing-function: ease-out;
                animation-timing-function: ease-out;
            }

            50% {
                -webkit-transform: perspective(400px) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -170deg);
                transform: perspective(400px) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -170deg);
                -webkit-animation-timing-function: ease-in;
                animation-timing-function: ease-in;
            }

            80% {
                -webkit-transform: perspective(400px) scale3d(.95, .95, .95);
                transform: perspective(400px) scale3d(.95, .95, .95);
                -webkit-animation-timing-function: ease-in;
                animation-timing-function: ease-in;
            }

            100% {
                -webkit-transform: perspective(400px);
                transform: perspective(400px);
                -webkit-animation-timing-function: ease-in;
                animation-timing-function: ease-in;
            }
        }

        .animated.flip {
            -webkit-backface-visibility: visible;
            backface-visibility: visible;
            -webkit-animation-name: flip;
            animation-name: flip;
        }

        @-webkit-keyframes flipInX {
            0% {
                -webkit-transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
                transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
                -webkit-transition-timing-function: ease-in;
                transition-timing-function: ease-in;
                opacity: 0;
            }

            40% {
                -webkit-transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
                transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
                -webkit-transition-timing-function: ease-in;
                transition-timing-function: ease-in;
            }

            60% {
                -webkit-transform: perspective(400px) rotate3d(1, 0, 0, 10deg);
                transform: perspective(400px) rotate3d(1, 0, 0, 10deg);
                opacity: 1;
            }

            80% {
                -webkit-transform: perspective(400px) rotate3d(1, 0, 0, -5deg);
                transform: perspective(400px) rotate3d(1, 0, 0, -5deg);
            }

            100% {
                -webkit-transform: perspective(400px);
                transform: perspective(400px);
            }
        }

        @keyframes flipInX {
            0% {
                -webkit-transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
                transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
                -webkit-transition-timing-function: ease-in;
                transition-timing-function: ease-in;
                opacity: 0;
            }

            40% {
                -webkit-transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
                transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
                -webkit-transition-timing-function: ease-in;
                transition-timing-function: ease-in;
            }

            60% {
                -webkit-transform: perspective(400px) rotate3d(1, 0, 0, 10deg);
                transform: perspective(400px) rotate3d(1, 0, 0, 10deg);
                opacity: 1;
            }

            80% {
                -webkit-transform: perspective(400px) rotate3d(1, 0, 0, -5deg);
                transform: perspective(400px) rotate3d(1, 0, 0, -5deg);
            }

            100% {
                -webkit-transform: perspective(400px);
                transform: perspective(400px);
            }
        }

        .flipInX {
            -webkit-backface-visibility: visible !important;
            backface-visibility: visible !important;
            -webkit-animation-name: flipInX;
            animation-name: flipInX;
        }

        @-webkit-keyframes flipInY {
            0% {
                -webkit-transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
                transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
                -webkit-transition-timing-function: ease-in;
                transition-timing-function: ease-in;
                opacity: 0;
            }

            40% {
                -webkit-transform: perspective(400px) rotate3d(0, 1, 0, -20deg);
                transform: perspective(400px) rotate3d(0, 1, 0, -20deg);
                -webkit-transition-timing-function: ease-in;
                transition-timing-function: ease-in;
            }

            60% {
                -webkit-transform: perspective(400px) rotate3d(0, 1, 0, 10deg);
                transform: perspective(400px) rotate3d(0, 1, 0, 10deg);
                opacity: 1;
            }

            80% {
                -webkit-transform: perspective(400px) rotate3d(0, 1, 0, -5deg);
                transform: perspective(400px) rotate3d(0, 1, 0, -5deg);
            }

            100% {
                -webkit-transform: perspective(400px);
                transform: perspective(400px);
            }
        }

        @keyframes flipInY {
            0% {
                -webkit-transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
                transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
                -webkit-transition-timing-function: ease-in;
                transition-timing-function: ease-in;
                opacity: 0;
            }

            40% {
                -webkit-transform: perspective(400px) rotate3d(0, 1, 0, -20deg);
                transform: perspective(400px) rotate3d(0, 1, 0, -20deg);
                -webkit-transition-timing-function: ease-in;
                transition-timing-function: ease-in;
            }

            60% {
                -webkit-transform: perspective(400px) rotate3d(0, 1, 0, 10deg);
                transform: perspective(400px) rotate3d(0, 1, 0, 10deg);
                opacity: 1;
            }

            80% {
                -webkit-transform: perspective(400px) rotate3d(0, 1, 0, -5deg);
                transform: perspective(400px) rotate3d(0, 1, 0, -5deg);
            }

            100% {
                -webkit-transform: perspective(400px);
                transform: perspective(400px);
            }
        }

        .flipInY {
            -webkit-backface-visibility: visible !important;
            backface-visibility: visible !important;
            -webkit-animation-name: flipInY;
            animation-name: flipInY;
        }

        @-webkit-keyframes flipOutX {
            0% {
                -webkit-transform: perspective(400px);
                transform: perspective(400px);
            }

            30% {
                -webkit-transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
                transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
                opacity: 1;
            }

            100% {
                -webkit-transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
                transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
                opacity: 0;
            }
        }

        @keyframes flipOutX {
            0% {
                -webkit-transform: perspective(400px);
                transform: perspective(400px);
            }

            30% {
                -webkit-transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
                transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
                opacity: 1;
            }

            100% {
                -webkit-transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
                transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
                opacity: 0;
            }
        }

        .flipOutX {
            -webkit-animation-name: flipOutX;
            animation-name: flipOutX;
            -webkit-animation-duration: .75s;
            animation-duration: .75s;
            -webkit-backface-visibility: visible !important;
            backface-visibility: visible !important;
        }

        @-webkit-keyframes flipOutY {
            0% {
                -webkit-transform: perspective(400px);
                transform: perspective(400px);
            }

            30% {
                -webkit-transform: perspective(400px) rotate3d(0, 1, 0, -15deg);
                transform: perspective(400px) rotate3d(0, 1, 0, -15deg);
                opacity: 1;
            }

            100% {
                -webkit-transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
                transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
                opacity: 0;
            }
        }

        @keyframes flipOutY {
            0% {
                -webkit-transform: perspective(400px);
                transform: perspective(400px);
            }

            30% {
                -webkit-transform: perspective(400px) rotate3d(0, 1, 0, -15deg);
                transform: perspective(400px) rotate3d(0, 1, 0, -15deg);
                opacity: 1;
            }

            100% {
                -webkit-transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
                transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
                opacity: 0;
            }
        }

        .flipOutY {
            -webkit-backface-visibility: visible !important;
            backface-visibility: visible !important;
            -webkit-animation-name: flipOutY;
            animation-name: flipOutY;
            -webkit-animation-duration: .75s;
            animation-duration: .75s;
        }

        @-webkit-keyframes lightSpeedIn {
            0% {
                -webkit-transform: translate3d(100%, 0, 0) skewX(-30deg);
                transform: translate3d(100%, 0, 0) skewX(-30deg);
                opacity: 0;
            }

            60% {
                -webkit-transform: skewX(20deg);
                transform: skewX(20deg);
                opacity: 1;
            }

            80% {
                -webkit-transform: skewX(-5deg);
                transform: skewX(-5deg);
                opacity: 1;
            }

            100% {
                -webkit-transform: none;
                transform: none;
                opacity: 1;
            }
        }

        @keyframes lightSpeedIn {
            0% {
                -webkit-transform: translate3d(100%, 0, 0) skewX(-30deg);
                transform: translate3d(100%, 0, 0) skewX(-30deg);
                opacity: 0;
            }

            60% {
                -webkit-transform: skewX(20deg);
                transform: skewX(20deg);
                opacity: 1;
            }

            80% {
                -webkit-transform: skewX(-5deg);
                transform: skewX(-5deg);
                opacity: 1;
            }

            100% {
                -webkit-transform: none;
                transform: none;
                opacity: 1;
            }
        }

        .lightSpeedIn {
            -webkit-animation-name: lightSpeedIn;
            animation-name: lightSpeedIn;
            -webkit-animation-timing-function: ease-out;
            animation-timing-function: ease-out;
        }

        @-webkit-keyframes lightSpeedOut {
            0% {
                opacity: 1;
            }

            100% {
                -webkit-transform: translate3d(100%, 0, 0) skewX(30deg);
                transform: translate3d(100%, 0, 0) skewX(30deg);
                opacity: 0;
            }
        }

        @keyframes lightSpeedOut {
            0% {
                opacity: 1;
            }

            100% {
                -webkit-transform: translate3d(100%, 0, 0) skewX(30deg);
                transform: translate3d(100%, 0, 0) skewX(30deg);
                opacity: 0;
            }
        }

        .lightSpeedOut {
            -webkit-animation-name: lightSpeedOut;
            animation-name: lightSpeedOut;
            -webkit-animation-timing-function: ease-in;
            animation-timing-function: ease-in;
        }

        @-webkit-keyframes rotateIn {
            0% {
                -webkit-transform-origin: center;
                transform-origin: center;
                -webkit-transform: rotate3d(0, 0, 1, -200deg);
                transform: rotate3d(0, 0, 1, -200deg);
                opacity: 0;
            }

            100% {
                -webkit-transform-origin: center;
                transform-origin: center;
                -webkit-transform: none;
                transform: none;
                opacity: 1;
            }
        }

        @keyframes rotateIn {
            0% {
                -webkit-transform-origin: center;
                transform-origin: center;
                -webkit-transform: rotate3d(0, 0, 1, -200deg);
                transform: rotate3d(0, 0, 1, -200deg);
                opacity: 0;
            }

            100% {
                -webkit-transform-origin: center;
                transform-origin: center;
                -webkit-transform: none;
                transform: none;
                opacity: 1;
            }
        }

        .rotateIn {
            -webkit-animation-name: rotateIn;
            animation-name: rotateIn;
        }

        @-webkit-keyframes rotateInDownLeft {
            0% {
                -webkit-transform-origin: left bottom;
                transform-origin: left bottom;
                -webkit-transform: rotate3d(0, 0, 1, -45deg);
                transform: rotate3d(0, 0, 1, -45deg);
                opacity: 0;
            }

            100% {
                -webkit-transform-origin: left bottom;
                transform-origin: left bottom;
                -webkit-transform: none;
                transform: none;
                opacity: 1;
            }
        }

        @keyframes rotateInDownLeft {
            0% {
                -webkit-transform-origin: left bottom;
                transform-origin: left bottom;
                -webkit-transform: rotate3d(0, 0, 1, -45deg);
                transform: rotate3d(0, 0, 1, -45deg);
                opacity: 0;
            }

            100% {
                -webkit-transform-origin: left bottom;
                transform-origin: left bottom;
                -webkit-transform: none;
                transform: none;
                opacity: 1;
            }
        }

        .rotateInDownLeft {
            -webkit-animation-name: rotateInDownLeft;
            animation-name: rotateInDownLeft;
        }

        @-webkit-keyframes rotateInDownRight {
            0% {
                -webkit-transform-origin: right bottom;
                transform-origin: right bottom;
                -webkit-transform: rotate3d(0, 0, 1, 45deg);
                transform: rotate3d(0, 0, 1, 45deg);
                opacity: 0;
            }

            100% {
                -webkit-transform-origin: right bottom;
                transform-origin: right bottom;
                -webkit-transform: none;
                transform: none;
                opacity: 1;
            }
        }

        @keyframes rotateInDownRight {
            0% {
                -webkit-transform-origin: right bottom;
                transform-origin: right bottom;
                -webkit-transform: rotate3d(0, 0, 1, 45deg);
                transform: rotate3d(0, 0, 1, 45deg);
                opacity: 0;
            }

            100% {
                -webkit-transform-origin: right bottom;
                transform-origin: right bottom;
                -webkit-transform: none;
                transform: none;
                opacity: 1;
            }
        }

        .rotateInDownRight {
            -webkit-animation-name: rotateInDownRight;
            animation-name: rotateInDownRight;
        }

        @-webkit-keyframes rotateInUpLeft {
            0% {
                -webkit-transform-origin: left bottom;
                transform-origin: left bottom;
                -webkit-transform: rotate3d(0, 0, 1, 45deg);
                transform: rotate3d(0, 0, 1, 45deg);
                opacity: 0;
            }

            100% {
                -webkit-transform-origin: left bottom;
                transform-origin: left bottom;
                -webkit-transform: none;
                transform: none;
                opacity: 1;
            }
        }

        @keyframes rotateInUpLeft {
            0% {
                -webkit-transform-origin: left bottom;
                transform-origin: left bottom;
                -webkit-transform: rotate3d(0, 0, 1, 45deg);
                transform: rotate3d(0, 0, 1, 45deg);
                opacity: 0;
            }

            100% {
                -webkit-transform-origin: left bottom;
                transform-origin: left bottom;
                -webkit-transform: none;
                transform: none;
                opacity: 1;
            }
        }

        .rotateInUpLeft {
            -webkit-animation-name: rotateInUpLeft;
            animation-name: rotateInUpLeft;
        }

        @-webkit-keyframes rotateInUpRight {
            0% {
                -webkit-transform-origin: right bottom;
                transform-origin: right bottom;
                -webkit-transform: rotate3d(0, 0, 1, -90deg);
                transform: rotate3d(0, 0, 1, -90deg);
                opacity: 0;
            }

            100% {
                -webkit-transform-origin: right bottom;
                transform-origin: right bottom;
                -webkit-transform: none;
                transform: none;
                opacity: 1;
            }
        }

        @keyframes rotateInUpRight {
            0% {
                -webkit-transform-origin: right bottom;
                transform-origin: right bottom;
                -webkit-transform: rotate3d(0, 0, 1, -90deg);
                transform: rotate3d(0, 0, 1, -90deg);
                opacity: 0;
            }

            100% {
                -webkit-transform-origin: right bottom;
                transform-origin: right bottom;
                -webkit-transform: none;
                transform: none;
                opacity: 1;
            }
        }

        .rotateInUpRight {
            -webkit-animation-name: rotateInUpRight;
            animation-name: rotateInUpRight;
        }

        @-webkit-keyframes rotateOut {
            0% {
                -webkit-transform-origin: center;
                transform-origin: center;
                opacity: 1;
            }

            100% {
                -webkit-transform-origin: center;
                transform-origin: center;
                -webkit-transform: rotate3d(0, 0, 1, 200deg);
                transform: rotate3d(0, 0, 1, 200deg);
                opacity: 0;
            }
        }

        @keyframes rotateOut {
            0% {
                -webkit-transform-origin: center;
                transform-origin: center;
                opacity: 1;
            }

            100% {
                -webkit-transform-origin: center;
                transform-origin: center;
                -webkit-transform: rotate3d(0, 0, 1, 200deg);
                transform: rotate3d(0, 0, 1, 200deg);
                opacity: 0;
            }
        }

        .rotateOut {
            -webkit-animation-name: rotateOut;
            animation-name: rotateOut;
        }

        @-webkit-keyframes rotateOutDownLeft {
            0% {
                -webkit-transform-origin: left bottom;
                transform-origin: left bottom;
                opacity: 1;
            }

            100% {
                -webkit-transform-origin: left bottom;
                transform-origin: left bottom;
                -webkit-transform: rotate3d(0, 0, 1, 45deg);
                transform: rotate3d(0, 0, 1, 45deg);
                opacity: 0;
            }
        }

        @keyframes rotateOutDownLeft {
            0% {
                -webkit-transform-origin: left bottom;
                transform-origin: left bottom;
                opacity: 1;
            }

            100% {
                -webkit-transform-origin: left bottom;
                transform-origin: left bottom;
                -webkit-transform: rotate3d(0, 0, 1, 45deg);
                transform: rotate3d(0, 0, 1, 45deg);
                opacity: 0;
            }
        }

        .rotateOutDownLeft {
            -webkit-animation-name: rotateOutDownLeft;
            animation-name: rotateOutDownLeft;
        }

        @-webkit-keyframes rotateOutDownRight {
            0% {
                -webkit-transform-origin: right bottom;
                transform-origin: right bottom;
                opacity: 1;
            }

            100% {
                -webkit-transform-origin: right bottom;
                transform-origin: right bottom;
                -webkit-transform: rotate3d(0, 0, 1, -45deg);
                transform: rotate3d(0, 0, 1, -45deg);
                opacity: 0;
            }
        }

        @keyframes rotateOutDownRight {
            0% {
                -webkit-transform-origin: right bottom;
                transform-origin: right bottom;
                opacity: 1;
            }

            100% {
                -webkit-transform-origin: right bottom;
                transform-origin: right bottom;
                -webkit-transform: rotate3d(0, 0, 1, -45deg);
                transform: rotate3d(0, 0, 1, -45deg);
                opacity: 0;
            }
        }

        .rotateOutDownRight {
            -webkit-animation-name: rotateOutDownRight;
            animation-name: rotateOutDownRight;
        }

        @-webkit-keyframes rotateOutUpLeft {
            0% {
                -webkit-transform-origin: left bottom;
                transform-origin: left bottom;
                opacity: 1;
            }

            100% {
                -webkit-transform-origin: left bottom;
                transform-origin: left bottom;
                -webkit-transform: rotate3d(0, 0, 1, -45deg);
                transform: rotate3d(0, 0, 1, -45deg);
                opacity: 0;
            }
        }

        @keyframes rotateOutUpLeft {
            0% {
                -webkit-transform-origin: left bottom;
                transform-origin: left bottom;
                opacity: 1;
            }

            100% {
                -webkit-transform-origin: left bottom;
                transform-origin: left bottom;
                -webkit-transform: rotate3d(0, 0, 1, -45deg);
                transform: rotate3d(0, 0, 1, -45deg);
                opacity: 0;
            }
        }

        .rotateOutUpLeft {
            -webkit-animation-name: rotateOutUpLeft;
            animation-name: rotateOutUpLeft;
        }

        @-webkit-keyframes rotateOutUpRight {
            0% {
                -webkit-transform-origin: right bottom;
                transform-origin: right bottom;
                opacity: 1;
            }

            100% {
                -webkit-transform-origin: right bottom;
                transform-origin: right bottom;
                -webkit-transform: rotate3d(0, 0, 1, 90deg);
                transform: rotate3d(0, 0, 1, 90deg);
                opacity: 0;
            }
        }

        @keyframes rotateOutUpRight {
            0% {
                -webkit-transform-origin: right bottom;
                transform-origin: right bottom;
                opacity: 1;
            }

            100% {
                -webkit-transform-origin: right bottom;
                transform-origin: right bottom;
                -webkit-transform: rotate3d(0, 0, 1, 90deg);
                transform: rotate3d(0, 0, 1, 90deg);
                opacity: 0;
            }
        }

        .rotateOutUpRight {
            -webkit-animation-name: rotateOutUpRight;
            animation-name: rotateOutUpRight;
        }

        @-webkit-keyframes hinge {
            0% {
                -webkit-transform-origin: top left;
                transform-origin: top left;
                -webkit-animation-timing-function: ease-in-out;
                animation-timing-function: ease-in-out;
            }

            20%,
            60% {
                -webkit-transform: rotate3d(0, 0, 1, 80deg);
                transform: rotate3d(0, 0, 1, 80deg);
                -webkit-transform-origin: top left;
                transform-origin: top left;
                -webkit-animation-timing-function: ease-in-out;
                animation-timing-function: ease-in-out;
            }

            40%,
            80% {
                -webkit-transform: rotate3d(0, 0, 1, 60deg);
                transform: rotate3d(0, 0, 1, 60deg);
                -webkit-transform-origin: top left;
                transform-origin: top left;
                -webkit-animation-timing-function: ease-in-out;
                animation-timing-function: ease-in-out;
                opacity: 1;
            }

            100% {
                -webkit-transform: translate3d(0, 700px, 0);
                transform: translate3d(0, 700px, 0);
                opacity: 0;
            }
        }

        @keyframes hinge {
            0% {
                -webkit-transform-origin: top left;
                transform-origin: top left;
                -webkit-animation-timing-function: ease-in-out;
                animation-timing-function: ease-in-out;
            }

            20%,
            60% {
                -webkit-transform: rotate3d(0, 0, 1, 80deg);
                transform: rotate3d(0, 0, 1, 80deg);
                -webkit-transform-origin: top left;
                transform-origin: top left;
                -webkit-animation-timing-function: ease-in-out;
                animation-timing-function: ease-in-out;
            }

            40%,
            80% {
                -webkit-transform: rotate3d(0, 0, 1, 60deg);
                transform: rotate3d(0, 0, 1, 60deg);
                -webkit-transform-origin: top left;
                transform-origin: top left;
                -webkit-animation-timing-function: ease-in-out;
                animation-timing-function: ease-in-out;
                opacity: 1;
            }

            100% {
                -webkit-transform: translate3d(0, 700px, 0);
                transform: translate3d(0, 700px, 0);
                opacity: 0;
            }
        }

        .hinge {
            -webkit-animation-name: hinge;
            animation-name: hinge;
        }

        /* originally authored by Nick Pettit - https://github.com/nickpettit/glide */

        @-webkit-keyframes rollIn {
            0% {
                opacity: 0;
                -webkit-transform: translate3d(-100%, 0, 0) rotate3d(0, 0, 1, -120deg);
                transform: translate3d(-100%, 0, 0) rotate3d(0, 0, 1, -120deg);
            }

            100% {
                opacity: 1;
                -webkit-transform: none;
                transform: none;
            }
        }

        @keyframes rollIn {
            0% {
                opacity: 0;
                -webkit-transform: translate3d(-100%, 0, 0) rotate3d(0, 0, 1, -120deg);
                transform: translate3d(-100%, 0, 0) rotate3d(0, 0, 1, -120deg);
            }

            100% {
                opacity: 1;
                -webkit-transform: none;
                transform: none;
            }
        }

        .rollIn {
            -webkit-animation-name: rollIn;
            animation-name: rollIn;
        }

        /* originally authored by Nick Pettit - https://github.com/nickpettit/glide */

        @-webkit-keyframes rollOut {
            0% {
                opacity: 1;
            }

            100% {
                opacity: 0;
                -webkit-transform: translate3d(100%, 0, 0) rotate3d(0, 0, 1, 120deg);
                transform: translate3d(100%, 0, 0) rotate3d(0, 0, 1, 120deg);
            }
        }

        @keyframes rollOut {
            0% {
                opacity: 1;
            }

            100% {
                opacity: 0;
                -webkit-transform: translate3d(100%, 0, 0) rotate3d(0, 0, 1, 120deg);
                transform: translate3d(100%, 0, 0) rotate3d(0, 0, 1, 120deg);
            }
        }

        .rollOut {
            -webkit-animation-name: rollOut;
            animation-name: rollOut;
        }

        @-webkit-keyframes zoomIn {
            0% {
                opacity: 0;
                -webkit-transform: scale3d(.3, .3, .3);
                transform: scale3d(.3, .3, .3);
            }

            50% {
                opacity: 1;
            }
        }

        @keyframes zoomIn {
            0% {
                opacity: 0;
                -webkit-transform: scale3d(.3, .3, .3);
                transform: scale3d(.3, .3, .3);
            }

            50% {
                opacity: 1;
            }
        }

        .zoomIn {
            -webkit-animation-name: zoomIn;
            animation-name: zoomIn;
        }

        @-webkit-keyframes zoom {
            0% {
                -moz-transform: scale(1);
                -webkit-transform: scale(1);
                -o-transform: scale(1);
                -ms-transform: scale(1);
                transform: scale(1);
            }

            50% {
                -moz-transform: scale(1.1);
                -webkit-transform: scale(1.1);
                -o-transform: scale(1.1);
                -ms-transform: scale(1.1);
                transform: scale(1.1);
            }

            100% {
                -moz-transform: scale(1);
                -webkit-transform: scale(1);
                -o-transform: scale(1);
                -ms-transform: scale(1);
                transform: scale(1);
            }
        }

        @keyframes zoom {
            0% {
                -moz-transform: scale(1);
                -webkit-transform: scale(1);
                -o-transform: scale(1);
                -ms-transform: scale(1);
                transform: scale(1);
            }

            50% {
                -moz-transform: scale(1.1);
                -webkit-transform: scale(1.1);
                -o-transform: scale(1.1);
                -ms-transform: scale(1.1);
                transform: scale(1.1);
            }

            100% {
                -moz-transform: scale(1);
                -webkit-transform: scale(1);
                -o-transform: scale(1);
                -ms-transform: scale(1);
                transform: scale(1);
            }
        }

        .zoom {
            -webkit-animation-name: zoom;
            animation-name: zoom;
        }

        @-webkit-keyframes zooms {
            0% {
                -moz-transform: scale(1);
                -webkit-transform: scale(1);
                -o-transform: scale(1);
                -ms-transform: scale(1);
                transform: scale(1);
            }

            50% {
                -moz-transform: scale(1.3);
                -webkit-transform: scale(1.3);
                -o-transform: scale(1.3);
                -ms-transform: scale(1.3);
                transform: scale(1.3);
            }

            100% {
                -moz-transform: scale(1);
                -webkit-transform: scale(1);
                -o-transform: scale(1);
                -ms-transform: scale(1);
                transform: scale(1);
            }
        }

        @keyframes zooms {
            0% {
                -moz-transform: scale(1);
                -webkit-transform: scale(1);
                -o-transform: scale(1);
                -ms-transform: scale(1);
                transform: scale(1);
            }

            50% {
                -moz-transform: scale(1.3);
                -webkit-transform: scale(1.3);
                -o-transform: scale(1.3);
                -ms-transform: scale(1.3);
                transform: scale(1.3);
            }

            100% {
                -moz-transform: scale(1);
                -webkit-transform: scale(1);
                -o-transform: scale(1);
                -ms-transform: scale(1);
                transform: scale(1);
            }
        }

        .zooms {
            -webkit-animation-name: zooms;
            animation-name: zooms;
        }

        @-webkit-keyframes zoomInDown {
            0% {
                opacity: 0;
                -webkit-transform: scale3d(.1, .1, .1) translate3d(0, -1000px, 0);
                transform: scale3d(.1, .1, .1) translate3d(0, -1000px, 0);
                -webkit-animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
                animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
            }

            60% {
                opacity: 1;
                -webkit-transform: scale3d(.475, .475, .475) translate3d(0, 60px, 0);
                transform: scale3d(.475, .475, .475) translate3d(0, 60px, 0);
                -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
                animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
            }
        }

        @keyframes zoomInDown {
            0% {
                opacity: 0;
                -webkit-transform: scale3d(.1, .1, .1) translate3d(0, -1000px, 0);
                transform: scale3d(.1, .1, .1) translate3d(0, -1000px, 0);
                -webkit-animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
                animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
            }

            60% {
                opacity: 1;
                -webkit-transform: scale3d(.475, .475, .475) translate3d(0, 60px, 0);
                transform: scale3d(.475, .475, .475) translate3d(0, 60px, 0);
                -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
                animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
            }
        }

        .zoomInDown {
            -webkit-animation-name: zoomInDown;
            animation-name: zoomInDown;
        }

        @-webkit-keyframes zoomInLeft {
            0% {
                opacity: 0;
                -webkit-transform: scale3d(.1, .1, .1) translate3d(-1000px, 0, 0);
                transform: scale3d(.1, .1, .1) translate3d(-1000px, 0, 0);
                -webkit-animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
                animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
            }

            60% {
                opacity: 1;
                -webkit-transform: scale3d(.475, .475, .475) translate3d(10px, 0, 0);
                transform: scale3d(.475, .475, .475) translate3d(10px, 0, 0);
                -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
                animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
            }
        }

        @keyframes zoomInLeft {
            0% {
                opacity: 0;
                -webkit-transform: scale3d(.1, .1, .1) translate3d(-1000px, 0, 0);
                transform: scale3d(.1, .1, .1) translate3d(-1000px, 0, 0);
                -webkit-animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
                animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
            }

            60% {
                opacity: 1;
                -webkit-transform: scale3d(.475, .475, .475) translate3d(10px, 0, 0);
                transform: scale3d(.475, .475, .475) translate3d(10px, 0, 0);
                -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
                animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
            }
        }

        .zoomInLeft {
            -webkit-animation-name: zoomInLeft;
            animation-name: zoomInLeft;
        }

        @-webkit-keyframes zoomInRight {
            0% {
                opacity: 0;
                -webkit-transform: scale3d(.1, .1, .1) translate3d(1000px, 0, 0);
                transform: scale3d(.1, .1, .1) translate3d(1000px, 0, 0);
                -webkit-animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
                animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
            }

            60% {
                opacity: 1;
                -webkit-transform: scale3d(.475, .475, .475) translate3d(-10px, 0, 0);
                transform: scale3d(.475, .475, .475) translate3d(-10px, 0, 0);
                -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
                animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
            }
        }

        @keyframes zoomInRight {
            0% {
                opacity: 0;
                -webkit-transform: scale3d(.1, .1, .1) translate3d(1000px, 0, 0);
                transform: scale3d(.1, .1, .1) translate3d(1000px, 0, 0);
                -webkit-animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
                animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
            }

            60% {
                opacity: 1;
                -webkit-transform: scale3d(.475, .475, .475) translate3d(-10px, 0, 0);
                transform: scale3d(.475, .475, .475) translate3d(-10px, 0, 0);
                -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
                animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
            }
        }

        .zoomInRight {
            -webkit-animation-name: zoomInRight;
            animation-name: zoomInRight;
        }

        @-webkit-keyframes zoomInUp {
            0% {
                opacity: 0;
                -webkit-transform: scale3d(.1, .1, .1) translate3d(0, 1000px, 0);
                transform: scale3d(.1, .1, .1) translate3d(0, 1000px, 0);
                -webkit-animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
                animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
            }

            60% {
                opacity: 1;
                -webkit-transform: scale3d(.475, .475, .475) translate3d(0, -60px, 0);
                transform: scale3d(.475, .475, .475) translate3d(0, -60px, 0);
                -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
                animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
            }
        }

        @keyframes zoomInUp {
            0% {
                opacity: 0;
                -webkit-transform: scale3d(.1, .1, .1) translate3d(0, 1000px, 0);
                transform: scale3d(.1, .1, .1) translate3d(0, 1000px, 0);
                -webkit-animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
                animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
            }

            60% {
                opacity: 1;
                -webkit-transform: scale3d(.475, .475, .475) translate3d(0, -60px, 0);
                transform: scale3d(.475, .475, .475) translate3d(0, -60px, 0);
                -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
                animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
            }
        }

        .zoomInUp {
            -webkit-animation-name: zoomInUp;
            animation-name: zoomInUp;
        }

        @-webkit-keyframes zoomOut {
            0% {
                opacity: 1;
            }

            50% {
                opacity: 0;
                -webkit-transform: scale3d(.3, .3, .3);
                transform: scale3d(.3, .3, .3);
            }

            100% {
                opacity: 0;
            }
        }

        @keyframes zoomOut {
            0% {
                opacity: 1;
            }

            50% {
                opacity: 0;
                -webkit-transform: scale3d(.3, .3, .3);
                transform: scale3d(.3, .3, .3);
            }

            100% {
                opacity: 0;
            }
        }

        .zoomOut {
            -webkit-animation-name: zoomOut;
            animation-name: zoomOut;
        }

        @-webkit-keyframes zoomOutDown {
            40% {
                opacity: 1;
                -webkit-transform: scale3d(.475, .475, .475) translate3d(0, -60px, 0);
                transform: scale3d(.475, .475, .475) translate3d(0, -60px, 0);
                -webkit-animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
                animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
            }

            100% {
                opacity: 0;
                -webkit-transform: scale3d(.1, .1, .1) translate3d(0, 2000px, 0);
                transform: scale3d(.1, .1, .1) translate3d(0, 2000px, 0);
                -webkit-transform-origin: center bottom;
                transform-origin: center bottom;
                -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
                animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
            }
        }

        @keyframes zoomOutDown {
            40% {
                opacity: 1;
                -webkit-transform: scale3d(.475, .475, .475) translate3d(0, -60px, 0);
                transform: scale3d(.475, .475, .475) translate3d(0, -60px, 0);
                -webkit-animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
                animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
            }

            100% {
                opacity: 0;
                -webkit-transform: scale3d(.1, .1, .1) translate3d(0, 2000px, 0);
                transform: scale3d(.1, .1, .1) translate3d(0, 2000px, 0);
                -webkit-transform-origin: center bottom;
                transform-origin: center bottom;
                -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
                animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
            }
        }

        .zoomOutDown {
            -webkit-animation-name: zoomOutDown;
            animation-name: zoomOutDown;
        }

        @-webkit-keyframes zoomOutLeft {
            40% {
                opacity: 1;
                -webkit-transform: scale3d(.475, .475, .475) translate3d(42px, 0, 0);
                transform: scale3d(.475, .475, .475) translate3d(42px, 0, 0);
            }

            100% {
                opacity: 0;
                -webkit-transform: scale(.1) translate3d(-2000px, 0, 0);
                transform: scale(.1) translate3d(-2000px, 0, 0);
                -webkit-transform-origin: left center;
                transform-origin: left center;
            }
        }

        @keyframes zoomOutLeft {
            40% {
                opacity: 1;
                -webkit-transform: scale3d(.475, .475, .475) translate3d(42px, 0, 0);
                transform: scale3d(.475, .475, .475) translate3d(42px, 0, 0);
            }

            100% {
                opacity: 0;
                -webkit-transform: scale(.1) translate3d(-2000px, 0, 0);
                transform: scale(.1) translate3d(-2000px, 0, 0);
                -webkit-transform-origin: left center;
                transform-origin: left center;
            }
        }

        .zoomOutLeft {
            -webkit-animation-name: zoomOutLeft;
            animation-name: zoomOutLeft;
        }

        @-webkit-keyframes zoomOutRight {
            40% {
                opacity: 1;
                -webkit-transform: scale3d(.475, .475, .475) translate3d(-42px, 0, 0);
                transform: scale3d(.475, .475, .475) translate3d(-42px, 0, 0);
            }

            100% {
                opacity: 0;
                -webkit-transform: scale(.1) translate3d(2000px, 0, 0);
                transform: scale(.1) translate3d(2000px, 0, 0);
                -webkit-transform-origin: right center;
                transform-origin: right center;
            }
        }

        @keyframes zoomOutRight {
            40% {
                opacity: 1;
                -webkit-transform: scale3d(.475, .475, .475) translate3d(-42px, 0, 0);
                transform: scale3d(.475, .475, .475) translate3d(-42px, 0, 0);
            }

            100% {
                opacity: 0;
                -webkit-transform: scale(.1) translate3d(2000px, 0, 0);
                transform: scale(.1) translate3d(2000px, 0, 0);
                -webkit-transform-origin: right center;
                transform-origin: right center;
            }
        }

        .zoomOutRight {
            -webkit-animation-name: zoomOutRight;
            animation-name: zoomOutRight;
        }

        @-webkit-keyframes zoomOutUp {
            40% {
                opacity: 1;
                -webkit-transform: scale3d(.475, .475, .475) translate3d(0, 60px, 0);
                transform: scale3d(.475, .475, .475) translate3d(0, 60px, 0);
                -webkit-animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
                animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
            }

            100% {
                opacity: 0;
                -webkit-transform: scale3d(.1, .1, .1) translate3d(0, -2000px, 0);
                transform: scale3d(.1, .1, .1) translate3d(0, -2000px, 0);
                -webkit-transform-origin: center bottom;
                transform-origin: center bottom;
                -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
                animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
            }
        }

        @keyframes zoomOutUp {
            40% {
                opacity: 1;
                -webkit-transform: scale3d(.475, .475, .475) translate3d(0, 60px, 0);
                transform: scale3d(.475, .475, .475) translate3d(0, 60px, 0);
                -webkit-animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
                animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
            }

            100% {
                opacity: 0;
                -webkit-transform: scale3d(.1, .1, .1) translate3d(0, -2000px, 0);
                transform: scale3d(.1, .1, .1) translate3d(0, -2000px, 0);
                -webkit-transform-origin: center bottom;
                transform-origin: center bottom;
                -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
                animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
            }
        }

        .zoomOutUp {
            -webkit-animation-name: zoomOutUp;
            animation-name: zoomOutUp;
        }

        @-webkit-keyframes slideInDown {
            0% {
                -webkit-transform: translateY(-100%);
                transform: translateY(-100%);
                visibility: visible;
            }

            100% {
                -webkit-transform: translateY(0);
                transform: translateY(0);
            }
        }

        @keyframes slideInDown {
            0% {
                -webkit-transform: translateY(-100%);
                transform: translateY(-100%);
                visibility: visible;
            }

            100% {
                -webkit-transform: translateY(0);
                transform: translateY(0);
            }
        }

        .slideInDown {
            -webkit-animation-name: slideInDown;
            animation-name: slideInDown;
        }

        @-webkit-keyframes slideInLeft {
            0% {
                -webkit-transform: translateX(-100%);
                transform: translateX(-100%);
                visibility: visible;
            }

            100% {
                -webkit-transform: translateX(0);
                transform: translateX(0);
            }
        }

        @keyframes slideInLeft {
            0% {
                -webkit-transform: translateX(-100%);
                transform: translateX(-100%);
                visibility: visible;
            }

            100% {
                -webkit-transform: translateX(0);
                transform: translateX(0);
            }
        }

        .slideInLeft {
            -webkit-animation-name: slideInLeft;
            animation-name: slideInLeft;
        }

        @-webkit-keyframes slideInRight {
            0% {
                -webkit-transform: translateX(100%);
                transform: translateX(100%);
                visibility: visible;
            }

            100% {
                -webkit-transform: translateX(0);
                transform: translateX(0);
            }
        }

        @keyframes slideInRight {
            0% {
                -webkit-transform: translateX(100%);
                transform: translateX(100%);
                visibility: visible;
            }

            100% {
                -webkit-transform: translateX(0);
                transform: translateX(0);
            }
        }

        .slideInRight {
            -webkit-animation-name: slideInRight;
            animation-name: slideInRight;
        }

        @-webkit-keyframes slideInUp {
            0% {
                -webkit-transform: translateY(100%);
                transform: translateY(100%);
                visibility: visible;
            }

            100% {
                -webkit-transform: translateY(0);
                transform: translateY(0);
            }
        }

        @keyframes slideInUp {
            0% {
                -webkit-transform: translateY(100%);
                transform: translateY(100%);
                visibility: visible;
            }

            100% {
                -webkit-transform: translateY(0);
                transform: translateY(0);
            }
        }

        .slideInUp {
            -webkit-animation-name: slideInUp;
            animation-name: slideInUp;
        }

        @-webkit-keyframes slideOutDown {
            0% {
                -webkit-transform: translateY(0);
                transform: translateY(0);
            }

            100% {
                visibility: hidden;
                -webkit-transform: translateY(100%);
                transform: translateY(100%);
            }
        }

        @keyframes slideOutDown {
            0% {
                -webkit-transform: translateY(0);
                transform: translateY(0);
            }

            100% {
                visibility: hidden;
                -webkit-transform: translateY(100%);
                transform: translateY(100%);
            }
        }

        .slideOutDown {
            -webkit-animation-name: slideOutDown;
            animation-name: slideOutDown;
        }

        @-webkit-keyframes slideOutLeft {
            0% {
                -webkit-transform: translateX(0);
                transform: translateX(0);
            }

            100% {
                visibility: hidden;
                -webkit-transform: translateX(-100%);
                transform: translateX(-100%);
            }
        }

        @keyframes slideOutLeft {
            0% {
                -webkit-transform: translateX(0);
                transform: translateX(0);
            }

            100% {
                visibility: hidden;
                -webkit-transform: translateX(-100%);
                transform: translateX(-100%);
            }
        }

        .slideOutLeft {
            -webkit-animation-name: slideOutLeft;
            animation-name: slideOutLeft;
        }

        @-webkit-keyframes slideOutRight {
            0% {
                -webkit-transform: translateX(0);
                transform: translateX(0);
            }

            100% {
                visibility: hidden;
                -webkit-transform: translateX(100%);
                transform: translateX(100%);
            }
        }

        @keyframes slideOutRight {
            0% {
                -webkit-transform: translateX(0);
                transform: translateX(0);
            }

            100% {
                visibility: hidden;
                -webkit-transform: translateX(100%);
                transform: translateX(100%);
            }
        }

        .slideOutRight {
            -webkit-animation-name: slideOutRight;
            animation-name: slideOutRight;
        }

        @-webkit-keyframes slideOutUp {
            0% {
                -webkit-transform: translateY(0);
                transform: translateY(0);
            }

            100% {
                visibility: hidden;
                -webkit-transform: translateY(-100%);
                transform: translateY(-100%);
            }
        }

        @keyframes slideOutUp {
            0% {
                -webkit-transform: translateY(0);
                transform: translateY(0);
            }

            100% {
                visibility: hidden;
                -webkit-transform: translateY(-100%);
                transform: translateY(-100%);
            }
        }

        .slideOutUp {
            -webkit-animation-name: slideOutUp;
            animation-name: slideOutUp;
        }
    </style>
    <style>
        @font-face {
            font-family: Light;
            src: url("<?= base_url() ?>assets/fonts/text/OpenSans-Light.ttf");
        }

        @font-face {
            font-family: Donat;
            src: url("<?= base_url() ?>assets/fonts/text/Donatello.ttf");
        }

        @font-face {
            font-family: Bolds;
            src: url("<?= base_url() ?>assets/fonts/text/OpenSans-ExtraBold.ttf");
        }

        @font-face {
            font-family: BeautyfaceDemo;
            src: url("<?= base_url() ?>assets/fonts/text/BeautyfaceDemo.otf");
        }

        #demo-1 {
            display: none;
            z-index: 3;
        }

        #demo-2 {
            display: block;
            z-index: 3;
        }

        body {
            margin: 0;
            font-size: 16px;
            overflow: hidden;
            overflow-x: hidden;
            font-family: 'Light';
            background-image: url('../../1.bp.blogspot.com/-icBfwcIIG8U/XypunGjEOPI/AAAAAAAAOv0/eJCMrRPbnqU5hrvqDukQZzqesa8GUjwAACLcBGAsYHQ/s200/bg.jpg');
        }

        body a {
            cursor: pointer;
            text-decoration: none;
        }

        body,
        input,
        textarea,
        button {
            font-family: 'Light';
            font-size: 16px;
        }

        .container {
            width: 90%;
            margin: 0 auto;
        }

        .clear {
            clear: both;
        }

        .mempelai {
            animation: zoom 2s infinite;
        }

        /* Popup */
        .scroll {
            font-family: 'BeautyfaceDemo';
            font-size: 16px;
            letter-spacing: 1px;
            animation: zoom 2s infinite;
            cursor: pointer;
            margin: 2% 0;
        }

        .pop-m {
            display: none;
        }

        .popup-0 {
            position: absolute;
            z-index: -1;
            top: 0;
        }

        #popup {
            width: 100%;
            height: 100%;
            background-image: url('../../1.bp.blogspot.com/-UrgsPRTx4R8/XypumJpIeDI/AAAAAAAAOvk/k_jgETr2bVQlLQvDxHl5mN33MHPwh-RpQCLcBGAsYHQ/s1250/banner-1.jpg');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: fixed;
            z-index: 9999;
            letter-spacing: 0.3px;
            overflow: scroll;
            overflow-x: hidden;
        }

        .popup-1 {
            width: 50%;
            background: rgba(255, 255, 255, 0.8);
            padding: 3% 0 3% 0;
            color: white;
            margin: 5% auto;
            border-radius: 3px;
            border: 3px solid rgba(244, 161, 156, 1);
        }

        .popup-1 b {
            color: rgba(244, 161, 156, 1);
        }

        .popup-2 {
            color: rgba(1, 1, 1, 0.7);
            margin-bottom: 2%;
        }

        .popup-2 img {
            width: 25%;
        }

        .popup-2-1 {
            font-size: 14px;
        }

        .popup-2-2 {
            margin: 0;
            background-image: linear-gradient(to bottom, rgba(160, 155, 165, 1), rgba(244, 161, 156, 1));
            color: transparent;
            background-clip: text;
            -webkit-background-clip: text;
            -moz-background-clip: text;
            -o-background-clip: text;
            font-size: 50px;
            letter-spacing: 2px;
            font-family: 'BeautyfaceDemo';
            animation: zoom 2s infinite;
        }

        .popup-2-3 {
            width: 60%;
            margin: 3% auto;
        }

        .popup-2-4 {
            font-style: italic;
        }

        .popup-2 i {
            font-size: 16px;
        }

        .popup-3 {
            font-size: 13px;
            color: rgba(1, 1, 1, 0.7);
            letter-spacing: 1px;
        }

        .popup-3-1 {
            color: rgba(1, 1, 1, 0.8);
            letter-spacing: 1px;
        }

        .hide {
            padding: 1% 0%;
            width: 35%;
            background-color: rgba(244, 161, 156, 0.8);
            color: white;
            border-radius: 5px;
            transition: 0.5s opacity;
            animation: zoom 2s infinite;
            border: 2px solid white;
        }

        .fa-heart {
            color: rgba(244, 161, 156, 1);
            animation: heart 2s infinite;
        }

        .hide:hover {
            cursor: pointer;
            opacity: 0.5;
        }

        #tes {
            width: 80%;
            height: 280px;
            margin: 0 auto;
            border-radius: 5px;
            border: 3px solid black;
        }

        #tes2 {
            width: 40%;
            margin: 0 auto;
            border-radius: 5px;
        }

        #tes2 iframe {
            width: 100%;
            height: 320px;
        }

        #tes2 .quote-2-2 {
            font-family: "Donat";
            font-size: 16px;
            text-align: center;
        }

        .music {
            z-index: 2;
            position: fixed;
            bottom: 8%;
            left: 2%;
            cursor: pointer;
        }

        .music img {
            width: 8%;
            padding: 1%;
            background: rgba(255, 255, 255, 0.5);
            border-radius: 100%;
            transition: 0.5s;
        }

        .music img:hover {
            background: rgba(255, 255, 255, 0.8);
        }

        #on {
            display: none;
        }

        /* Video */
        #video {
            position: relative;
            z-index: 9;
            width: 50%;
            margin: 0 auto;
            margin-top: -15%;
            font-style: italic;
            color: rgb(244, 161, 156);
        }

        #video iframe {
            height: 320px;
        }

        /* Header */
        #header-1 {
            /* float: left; */
            width: 13%;
            margin: 0.5% 0;
            z-index: 9999;
        }

        #header-1-1 {
            font-size: 18px;
            font-family: "Bolds";
            text-transform: uppercase;
            color: rgba(244, 161, 156, 1);
        }

        #header-1-2 {
            font-size: 12px;
            letter-spacing: 6.8px;
            font-family: "Light";
        }

        #header-2 {
            width: 85%;
            text-align: right;
            float: right;
            margin: 1.5% 0;
        }

        #header-2 a {
            cursor: pointer;
            text-decoration: none;
            color: rgba(1, 1, 1, 0.8);
            margin-right: 4%;
            font-size: 14px;
            transition: 0.5s;
            letter-spacing: 1px;
        }

        #header-2 a:hover {
            opacity: 0.5;
        }

        #header-2-1 {
            display: none;
        }

        #header h1 {
            margin-top: -2%;
            margin-bottom: -4%;
        }


        /* Banner */
        .slide-2-1 {
            font-size: 37px;
            letter-spacing: 2px;
            font-family: "Clicker Script", cursive;
        }

        .slide-2-2 {
            width: 100%;
            margin: 2% 35%;
        }

        .slide-2-3 {
            letter-spacing: 2px;
            padding: 0.5% 1%;
            width: 15%;
            margin: 0% auto;
            border-top: 1px solid rgba(255, 255, 255, 0.5);
            border-bottom: 1px solid rgba(255, 255, 255, 0.5);
            color: white;
            text-align: center;
            font-size: 14px;
        }

        .slide-2-3-1 {
            padding: 2% 1%;
            width: 5%;
            margin: 0 0.5%;
            border-radius: 50%;
            background-color: rgba(244, 161, 156, 0.5);
            background-image: linear-gradient(to bottom, rgba(160, 155, 165, 0.5), rgba(244, 161, 156, 0.5));
            border: 1px solid rgba(255, 255, 255, 0.3);
            color: white;
            float: left;
            text-align: center;
            font-size: 18px;
            font-family: 'Bolds';
        }

        .slide-2-3-2 {
            font-family: 'Light';
            font-size: 10px;
        }



        #demo-1 {
            position: relative;
            overflow: hidden;
            width: 100%;
        }

        .demo-inner-content {
            position: relative;
            z-index: 2;
            padding: 15% 0 28% 0;
            color: #fff;
            text-align: center;
            font-size: 21px;
        }

        /* Quote */
        #quote-5 {
            display: none;
        }

        .quote {
            margin-top: -0.4%;
            width: 50%;
            float: left;
        }

        #banner-2 h1 {
            margin: 0;
            background-image: linear-gradient(to bottom, rgba(160, 155, 165, 1), rgba(244, 161, 156, 1));
            color: transparent;
            background-clip: text;
            -webkit-background-clip: text;
            -moz-background-clip: text;
            -o-background-clip: text;
        }

        #name h1 {
            margin: 0;
            background-image: linear-gradient(to bottom, rgba(160, 155, 165, 1), rgba(244, 161, 156, 1));
            color: transparent;
            background-clip: text;
            -webkit-background-clip: text;
            -moz-background-clip: text;
            -o-background-clip: text;
        }

        h1 {
            font-family: "Bolds";
            margin: 0;
            background-image: linear-gradient(to bottom, rgba(160, 155, 165, 1), rgba(244, 161, 156, 1));
            color: transparent;
            background-clip: text;
            -webkit-background-clip: text;
            -moz-background-clip: text;
            -o-background-clip: text;
        }

        /* Quotes */

        #quotes {
            width: 60%;
            margin: 5% auto;
        }

        #quotes img {
            width: 10%;
        }

        #quotes {
            color: rgba(244, 161, 156, 1);
        }

        .quotes-2 {
            font-size: 30px;
            font-family: "BeautyfaceDemo";
            letter-spacing: 3px;
            margin: 2% 0;
        }

        .quotes-4 {
            margin: 1%;
            font-size: 14px;
        }

        .quote img {
            width: 100%;
        }

        .quote-1 {
            font-size: 40px;
        }

        .quote-1-1 {
            margin: 25% 20%;
        }

        .quote-1-2 {
            margin: 30% 15%;
            text-align: right;
        }

        .quote-1 {
            font-size: 40px;
        }

        .quote-2 {
            font-size: 80px;
        }

        /* Name */
        #name {
            margin: 8% 0 3% 0;
        }

        .name-1 {
            text-align: center;
        }

        #name-1-1 {
            float: left;
            width: 100%;
            margin-top: -4%;
            margin-bottom: 5%;
        }

        .name-1 h1 {
            font-size: 120px;
            margin: 0;
            font-family: 'BeautyfaceDemo';
            color: black;
        }

        .name-2 {
            width: 30%;
            float: left;
        }

        .name-2-1 {
            font-size: 22px;
            font-family: 'Bolds';
        }

        .name-2-2 {
            font-size: 12px;
        }

        .name-2-3 {
            font-size: 16px;
        }

        .name-2-3 a {
            font-size: 12px;
            color: rgba(1, 1, 1, 0.5);
        }

        .name-2-3 i {
            font-size: 18px;
        }

        .name-2-3-1 a {
            margin-right: 2%;
        }

        .name-2-3-2 a {
            margin-left: 2%;
        }

        .name-3 {
            margin: 4% 41% 0% 41%;
        }

        .name-4 {
            text-align: right;
            margin: -13% 34% 8% 34%;
        }

        .name-5 {
            width: 15%;
            float: left;
            margin: -13% 23% 0% 23%;
        }

        .name-6 {
            width: 15%;
            float: left;
            margin: -1% 66% 0% 66%;
        }

        .name-5 img,
        .name-6 img {
            width: 100%;
            padding: 3%;
            border: 1px solid rgba(1, 1, 1, 0.1);
            border-radius: 100%;
        }


        /* Moments */
        #moment {
            margin-bottom: 5%;
        }

        .moment-1 {
            padding: 0.5% 0.5% 0.3% 0.5%;
            background-color: rgba(244, 161, 156, 1);
            background-image: linear-gradient(to bottom, rgba(160, 155, 165, 1), rgba(244, 161, 156, 1));
            float: left;
            width: 31.325%;
            margin: 0% 0.5% 1% 0.5%;
        }

        .moment-1 img {
            width: 100%;
        }

        #moment-1 {
            margin-top: 6%;
        }

        #moment-2 {
            margin-top: 7%;
        }

        /* Reception */
        #reception {
            background-color: rgba(244, 161, 156, 1);
            background-image: linear-gradient(to bottom, rgba(160, 155, 165, 1), rgba(244, 161, 156, 1));
            padding: 3% 0;
            margin-top: -0.1%;
            color: white;
        }

        #reception-1 {
            font-size: 35px;
            letter-spacing: 2px;
            text-align: center;
            font-family: 'Donat';
        }

        .reception-1-border {
            width: 5%;
            border: 2px solid white;
            margin: 0 auto 0 auto;
        }

        .reception {
            margin: 3% 0;
            float: left;
        }

        #reception-2 {
            width: 10%;
            margin-left: 5%;
            margin-top: 8%;
        }

        .reception-1-1 {
            background: rgba(255, 255, 255, 0.3);
            float: left;
            width: 46%;
            text-align: center;
            color: white;
            margin: 2%;
            padding-bottom: 5%;
            font-size: 11px;
            border-radius: 3px;
        }

        .reception-1-2 {
            display: none;
        }

        .reception-1-1-1 {
            font-size: 35px;
            color: white;
            font-family: 'Bolds';
        }

        #reception-3 {
            width: 35%;
            text-align: right;
            border-right: 1px solid rgba(255, 255, 255, 1);
        }

        .reception-3 {
            padding: 3% 10%;
        }

        .reception-3-1 {
            font-size: 25px;
            margin-bottom: 8%;
            font-family: 'Bolds';
        }

        .reception-3-2 {
            float: left;
            width: 85%;
            margin-bottom: 5%;
        }

        .reception-3-2-1 {
            margin-top: 3%;
        }

        .reception-3-3 {
            margin-top: -2%;
            font-size: 40px;
            float: right;
            text-align: center;
            width: 10%;
        }

        .reception-3-4 {
            background: rgba(255, 255, 255, 0.3);
            border-radius: 3px;
            text-align: center;
            color: white;
            padding: 1.5% 0;
        }

        .reception-3-3 img {
            width: 100%;
        }

        #reception-4 {
            width: 35%;
        }

        .reception-4-1 {
            font-size: 40px;
            float: left;
            text-align: center;
            width: 10%;
            margin-right: 5%;
        }

        #reception-5 {
            width: 10%;
            margin-top: 8%;
        }

        #invite {
            margin-bottom: -2%;
        }

        /* Grid */
        .grid-1 {
            width: 25%;
            float: left;
            margin-top: -0.5%;
            position: relative;
            overflow: hidden;
        }

        .grid-1 img {
            width: 100%;
            -moz-transition: all 0.3s;
            -webkit-transition: all 0.3s;
            transition: all 0.3s;
        }

        .grid-1:hover img {
            -moz-transform: scale(1.1);
            -webkit-transform: scale(1.1);
            transform: scale(1.1);
        }

        .grid-border {
            padding: 2% 0;
            font-family: 'BeautyfaceDemo';
            text-align: center;
            font-size: 30px;
            color: rgba(244, 161, 156, 1);
        }

        .grid-border i {
            font-size: 16px;
        }

        /* Location */
        #location {
            padding: 5% 0;
        }

        #location a {
            text-decoration: none;
        }

        #location iframe {
            margin: 0;
        }

        .location-1 {
            margin-bottom: 1%;
        }

        .location-2 {
            text-transform: uppercase;
            float: left;
        }

        .location-3 {
            font-family: 'Bolds';
        }

        .location-2 img {
            width: 8%;
        }

        .location-4 {
            margin-left: 1%;
            margin-top: -0.7%;
        }

        .location-5 {
            cursor: pointer;
            background-color: rgba(244, 161, 156, 1);
            background-image: linear-gradient(to bottom, rgba(160, 155, 165, 1), rgba(244, 161, 156, 1));
            color: white;
            padding: 0.7% 0;
            width: 13%;
            text-align: center;
            border-radius: 30px;
            margin: 1% 0;
            transition: 0.5s;
        }

        .location-5:hover {
            opacity: 0.5;
        }

        iframe {
            margin-top: 1%;
            width: 98.7%;
            height: 500px;
            background-color: rgba(244, 161, 156, 1);
            background-image: linear-gradient(to bottom, rgba(160, 155, 165, 1), rgba(244, 161, 156, 1));
            padding: 0.7%;
        }

        /* Guest Book */
        .guest-1 {
            font-size: 14px;
        }

        .guest-1 input,
        .guest-1 textarea {
            width: 98%;
            margin-bottom: 1%;
            padding: 1%;
            border: 1px solid rgba(1, 1, 1, 0.1);
            border-radius: 3px;
            font-size: 14px;
        }
        .guest-1 input,
        .guest-1 select {
            width: 94%;
            margin-bottom: 1%;
            padding: 1%;
            border: 1px solid rgba(1, 1, 1, 0.1);
            border-radius: 3px;
            font-size: 14px;
            background: white;
            color: grey;
        }

        #choose {
            width: 0;
        }

        .guest-1 button {
            background-color: rgba(244, 161, 156, 1);
            background-image: linear-gradient(to bottom, rgba(160, 155, 165, 1), rgba(244, 161, 156, 1));
            color: white;
            padding: 0.7% 0;
            width: 13%;
            text-align: center;
            border-radius: 30px;
            margin: 0.5% 0 1% 0;
            border: none;
            transition: 0.5s;
            cursor: pointer;
        }

        .guest-1 button:hover {
            opacity: 0.5;
        }

        /* Comment */
        #comment {
            margin: 0.7% 0 3% 0;
            color: white;
        }

        .comment-1 {
            border-radius: 5px;
            border: 1px solid rgba(255, 255, 255, 0.6);
            padding: 3% 1%;
            ;
            background-color: rgba(244, 161, 156, 1);
            background-image: linear-gradient(to bottom, rgba(160, 155, 165, 1), rgba(244, 161, 156, 1));
        }

        .comment-1-1 {
            margin-bottom: 1%;
        }

        .comment-2 {
            margin-bottom: 1%;
        }

        .comment-3 {
            font-size: 25px;
            margin-bottom: 0.3%;
            font-family: "Bolds";
        }

        .comment-3-1 {
            font-size: 10px;
            font-family: 'Light';
        }

        /* Footer */
        #footer {
            padding: 1% 0;
            width: 100%;
            color: white;
            background-color: rgba(244, 161, 156, 1);
            background-image: linear-gradient(to bottom, rgba(160, 155, 165, 1), rgba(244, 161, 156, 1));
        }

        #footer-1-1 {
            margin-bottom: 0.5%;
            letter-spacing: 0.5px;
        }

        #footer-1-1 a {
            color: white;
            text-decoration: none;
            margin: 0 2%;
            font-size: 14px;
            transition: 0.5s;
        }

        #footer-1-1 a:hover {
            color: black;
        }

        #footer-1-2 {
            font-size: 12px;
        }

        #footer-1-3 {
            display: none;
        }
    </style>
    <style>
        @media only screen and (min-width: 0px) and (max-width:960px) {
            body {
                width: 100%;
                font-size: 16px;

            }

            .container {
                width: 100%;
            }

            #demo-1 {
                height: 650px;
                display: block
            }

            #demo-2 {
                display: none;
            }

            a {
                text-decoration: none;
            }

            #tes {
                width: 90%;
                height: 220px;
            }

            #tes2 {
                width: 90%;
            }

            #tes2 iframe {
                width: 100%;
                height: 220px;
                margin-bottom: 2%;
            }

            #tes2 .quote-2-2 {
                font-size: 16px;
                text-align: center;
            }

            /* Popup */
            .scroll {
                margin: 5% 0;
            }

            .pop-pc {
                display: none;
            }

            .pop-m {
                display: block;
            }

            .popup-0 {
                margin: 3% 0;
                position: absolute;
                z-index: -1;
                top: 0;
                width: 100%;
            }

            .popup-0 img {
                width: 100%;
            }

            #popup {
                border-radius: 5px;
                width: 100%;
                height: 100%;
                background-image: url('../../1.bp.blogspot.com/-_lcA1Ls-giU/Xypu2RAlP9I/AAAAAAAAOyU/ccpyo5Cll5QVszojPwuno3ra_-xXIHAwgCLcBGAsYHQ/s1080/mobile.jpg');
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                position: fixed;
                z-index: 9999;
                padding: 3% 0;
                letter-spacing: 0.3px;
            }

            .popup-1 {
                width: 95%;
                background: rgba(255, 255, 255, 0.9);
                padding: 4% 0 8% 0;
                color: white;
                margin: 5% auto 10% auto;
                border-radius: 3px;
            }

            .popup-2 {
                color: rgba(1, 1, 1, 0.7);
                margin-bottom: 2%;
            }

            .popup-2-1 {
                letter-spacing: 2px;
            }

            .popup-2-3 {
                width: 90%;
            }

            .popup-2-2 {
                padding: 2% 0;
                font-size: 50px;
                letter-spacing: 2px;
            }

            .popup-3 {
                font-size: 13px;
                color: rgba(1, 1, 1, 0.7);
                letter-spacing: 1px;
            }

            .popup-3-1 {
                letter-spacing: 1px;
            }

            .hide {
                padding: 2% 0%;
                width: 80%;
                color: white;
                border-radius: 3px;
                transition: 0.5s opacity;
                border: 2px solid rgba(255, 255, 255, 0.7);
                animation: zoom 2s infinite;
            }

            .hide:hover {
                cursor: pointer;
                opacity: 0.5;
            }

            /* Header */
            #header {
                background: white;
                width: 100%;
                border-bottom: 1px solid rgba(1, 1, 1, 0.1);
            }

            #header h1 {
                margin-top: -2%;
                margin-bottom: -1%;
            }

            #header-1 {
                width: 50%;
                margin: 2% 30%;
                margin-left: auto;
                margin-right: auto;
                text-align: center;
            }

            #header-2 {
                display: none;
            }

            #header-2-1 {
                display: block;
                width: 100%;
                position: fixed;
                bottom: 0;
                text-align: center;
                z-index: 99;
                background: white;
            }

            #header-1-1 {
                letter-spacing: 2px;
            }

            #header-1-2 {
                font-size: 14px;
                letter-spacing: 8px;
                font-family: "Light";
            }

            #menu-1 {
                padding: 2% 0;
                border: 1px solid rbga(1, 1, 1, 0.1);
            }

            .menu-1 {
                font-family: 'Light';
                padding: 4%;
                border-top: 1px solid rgba(1, 1, 1, 0.1);
            }

            #menu-2 a {
                color: rgba(1, 1, 1, 0.8);
            }

            #menu-2 {
                display: none;
            }

            /* Video */
            #video {
                margin-top: -37%;
                position: relative;
                z-index: 9;
                width: 80%;
            }

            #video video {
                width: 100%;
                border-radius: 5px;
                padding: 1%;
                background-color: rgba(197, 166, 154, 0.5);
                background-image: linear-gradient(to bottom, rgba(213, 170, 178, 0.5), rgba(197, 166, 154, 0.5));
            }

            /* Banner */
            .sliding-2 {
                height: 680px;
                z-index: 3;
            }

            /* Banner */
            .slide-2-1 {
                margin-top: 25%;
                font-size: 37px;
                letter-spacing: 2px;
            }

            .slide-2-2 {
                width: 100%;
                margin: 8% 5%;
            }

            .slide-2-3 {
                letter-spacing: 2px;
                padding: 2% 1%;
                width: 70%;
                margin: 0% auto;
                color: white;
                text-align: center;
                font-size: 18px;
            }

            .slide-2-3-1 {
                padding: 6% 1%;
                width: 18%;
                margin: 0 1.2%;
                border-radius: 50%;
                color: white;
                float: left;
                text-align: center;
                font-size: 25px;
                font-family: 'Bolds';
                line-height: 70%;
            }

            .slide-2-3-2 {
                font-family: 'Light';
                font-size: 10px;
            }

            #demo-1 {
                position: relative;
                overflow: hidden;
                width: 100%;
            }

            .demo-inner-content {
                position: relative;
                z-index: 2;
                padding: 15% 0 28% 0;
                color: #fff;
                text-align: center;
                font-size: 21px;
            }

            /* Quotes */

            #quotes {
                width: 90%;
                margin: 15% auto;
            }

            #quotes img {
                width: 15%;
            }

            .quotes-2 {
                font-size: 30px;
                font-family: "BeautyfaceDemo";
                letter-spacing: 3px;
                margin: 5% 0;
            }

            .quotes-4 {
                margin: 1%;
                font-size: 14px;
                font-weight: bold;
            }

            .quote img {
                width: 100%;
            }

            .quote-1 {
                font-size: 40px;
            }

            .quote-1-1 {
                margin: 25% 20%;
            }

            .quote-1-2 {
                margin: 30% 15%;
                text-align: right;
            }

            .quote-1 {
                font-size: 40px;
            }

            .quote-2 {
                font-size: 80px;
            }

            /* Quote */
            #quote .container {
                width: 100%;
            }

            #quote-3 {
                display: none;
            }

            #quote-5 {
                display: block;
            }

            .quote {
                width: 100%;
                height: auto;
            }

            .quote img {
                width: 100%;
                height: auto;
            }

            .quote-1 {
                font-size: 30px;
                font-family: 'Light';
            }

            .quote-2 {
                font-size: 45px;
                font-family: "Bolds";
            }

            .quote-1-1 {
                margin: 15% 18% 15% 18%;
            }

            .quote-1-2 {
                margin: 25% 15%;
                text-align: right;
            }


            /* Reception */
            #reception {
                width: 100%;
                padding: 8% 0;
                margin-top: -1.5%;
            }

            #reception .container {
                width: 100%;
            }

            .reception {
                margin: 3% 0;
                float: left;
            }

            #reception-2 {
                width: 100%;
            }

            .reception-1-1 {
                width: 20%;
                margin: 2% 3.1% 2% 0;
                padding-bottom: 2%;
                border-radius: 10px;
                background: rgba(255, 255, 255, 0.3);
            }

            .reception-1-2 {
                display: block;
            }

            .reception-1-1-1 {
                font-family: 'Bolds';
                font-size: 35px;
                color: white;
            }

            #reception-3 {
                width: 100%;
                text-align: right;
                border-right: 1px solid rgba(1, 1, 1, 0.3);
            }

            .reception-3 {
                padding: 1% 10% 3% 10%;
            }

            .reception-3-4 {
                padding: 3% 0;
            }

            #reception-4 {
                margin-top: -5%;
                width: 100%;
                margin-bottom: 3%;
            }

            #reception-5 {
                display: none;
            }

            /* Grid */
            .grid-border {
                padding: 1% 0;
                margin: 3% 0 5% 0;
                text-align: center;
                font-size: 30px;
            }

            .grid-1 {
                width: 49%;
                margin: 0 0.5%;
                height: auto;
            }

            .grid-1 img {
                width: 100%;
            }

            .grid-1-1 {
                width: 50%;
                float: left;
            }

            .grid-1-1 img {
                height: 250px;
            }

            .grid-1-2 {
                width: 100%;
                margin-top: -1%;
                float: left;
            }

            .grid-1-5,
            .none {
                display: none;
            }

            /* Location */
            #location {
                padding: 8% 0;
            }

            #location iframe {
                border: none;
            }

            .location-1 {
                width: 100%;
                margin: 3%;
                font-size: 20px;
            }

            .location-2 {
                font-family: "Bolds";
                text-transform: uppercase;
                float: left;
            }

            .location-3 {
                font-family: 'Light';
            }

            .location-2 img {
                width: 10%;
            }

            .location-4 {
                margin-left: 41%;
                margin-top: -6%;
            }

            .location-5 {
                padding: 2.5% 0;
                width: 35%;
                margin: 3%;
            }

            /* Name */
            .name-1 {
                margin: 10% 0;
            }

            .name-1 h1 {
                font-family: 'BeautyfaceDemo';
                padding: 10% 0;
                font-size: 80px;
                background-clip: text;
                -webkit-background-clip: text;
                -moz-background-clip: text;
                -o-background-clip: text;
            }

            .name-2 {
                width: 60%;
                float: left;
            }

            .name-2-1 {
                font-size: 16px;
            }

            .name-2-2 {
                font-size: 14px;
                width: 150px;
            }

            .name-2-3 {
                font-family: 'Light';
                font-size: 14px;
            }

            .name-3 {
                margin: -10% 38% 0% 38%;
            }

            .name-4 {
                text-align: right;
                margin: -28% 4% 15% 4%;
            }

            .name-5 {
                width: 25%;
                margin: -28% 8% 0% 8%;
            }

            .name-6 {
                width: 25%;
                margin: 7% 68% 0% 68%;
            }

            #name-1-1 {
                margin-top: -15%;
            }

            /* Moment */
            #moment {
                margin-bottom: 10%;
            }

            .moment-1 {
                padding: 0.5% 0.5% 0% 0.5%;
            }

            /* Guest Book */
            .guest-1 input,
            .guest-1 textarea {
                width: 90%;
                margin-bottom: 2%;
                padding: 3% 2%;
                border: 1px solid rgba(1, 1, 1, 0.1);
                border-radius: 3px;
                font-size: 14px;
                font-family: 'Light';
            }

            .guest-1 textarea {
                height: 200px;
            }

            .guest-1 button {
                padding: 2.5% 0;
                width: 30%;
                text-align: center;
                border-radius: 30px;
                margin: 0.5% 2.5% 1% 2.5%;
                border: none;
                font-size: 16px;
                transition: 0.5s;
                cursor: pointer;
            }

            .guest-1 button:hover {
                opacity: 0.5;
            }

            .guest-loc {
                margin-left: 38%;
                margin-top: -6%;
            }

            /* Comment */
            #comment .container {
                width: 95%;
                border-radius: 3px;
                margin: 2% auto;
            }

            .comment-1 {
                border: 1px solid rgba(1, 1, 1, 0.1);
                padding: 3% 4%;
            }

            .comment-1-1 {
                font-family: 'Light';
                margin-bottom: 1%;
            }

            .comment-2 {
                margin-bottom: 1%;
            }

            .comment-3 {
                font-family: 'Bolds';
                font-size: 20px;
                margin-bottom: 0.3%;
            }

            .comment-4 {
                font-family: 'Light';
            }

            /* Footer */
            #footer {
                margin: 10% 0 13.5% 0;
            }

            #footer-1-2,
            #footer-1-1 {
                display: none;
            }

            #footer-1-3 {
                display: block;
                padding: 2% 0;
                font-size: 12px;
            }
        }

        #loader {
            display: none;
            text-align: center;
        }
        .music-box button{
            background: rgba(0, 0, 0, 0.1);
            width: 40px;
            height: 40px;
            line-height: 37px;
            font-size: 18px;
            font-size: 1rem;
            color: #e9a09d;
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
        .music-box button {
            right: auto;
            left: 19px;
            position: fixed;
            z-index: 120;
            bottom: 30px;
        }
    </style>
    <div id="popup">
        <div class="popup-1">
            <center>
                <div class="popup-2">
                    <i class="fa fa-heart"></i>
                    <br><br>
                    <span class="popup-2-1">
                        <!-- LimStudio.site -->Official Wedding Website
                    </span><br><br>
                    <p class="popup-2-2">
                        <?= $data['panggilan_p'] . ' dan ' . $data['panggilan_l'] ?>
                    </p>
                    <div class="popup-2-3">Sesuai dengan protokol kesehatan pencegahan Covid-19, undangan dibagi menjadi dua shift dan diwajibkan agar tamu undangan hadir dengan memakai masker. Semoga kita semua diberikan kesehatan. Terima kasih.
                    </div>
                </div>
                <div class="hide" onclick="play()"> Buka Undangan </div> &nbsp;
                <div class="popup-3">
                    <div class="popup-2-3">
                        Information
                        <br><br>

                        Upload your best moment in our wedding day, make a romantic caption or tell your opinion about us. Don't forget to tag @<?= $data['panggilan_p'] ?> & @<?= $data['panggilan_l'] ?> and insert hashtag #storyofBahagia.

                    </div>
                    <!-- <i class="fa fa-music"></i> Christian Bautista - Since I Found You -->
                    <br>
                    <a href="https://instagram.com/limstudio_indo" class="popup-3-1">
                        <i class="fa fa-instagram"></i> limstudio_indo
                    </a>
                </div>
            </center>
        </div>
    </div>
    <div id="header">
        <div class="container">
            <div id="header-1">
                <span id="header-1-1" class="wow zoomIn"><?= $data['panggilan_p'] . ' | ' . $data['panggilan_l'] ?></span><br>
                <span id="header-1-2" class="wow zoomIn">The Wedding</span>
            </div>
            <div id="header-2">
                <a class="c-banner">
                    Home
                </a>
                <a class="c-quote">
                    Quote
                </a>
                <a class="c-wedding">
                    Wedding
                </a>
                <a class="c-reception">
                    Reception
                </a>
                <a class="c-gallery">
                    Gallery
                </a>
                <a class="c-location">
                    Location
                </a>
                <a class="c-guest">
                    Guest Book
                </a>
            </div>
            <div class="clear"></div>
        </div>
    </div>

    <div id="header-2-1">
        <div id="menu-2">
            <a class="c-banner menu-2">
                <div class="menu-1">
                    Home
                </div>
            </a>
            <a class="c-quote menu-2">
                <div class="menu-1">
                    Quote
                </div>
            </a>
            <a class="c-wedding menu-2">
                <div class="menu-1">
                    Wedding
                </div>
            </a>
            <a class="c-reception menu-2">
                <div class="menu-1">
                    Reception
                </div>
            </a>
            <a class="c-gallery menu-2">
                <div class="menu-1">
                    Gallery
                </div>
            </a>
            <a class="c-location menu-2">
                <div class="menu-1">
                    Location
                </div>
            </a>
            <a class="c-guest menu-2">
                <div class="menu-1">
                    Guest Book
                </div>
            </a>
        </div>
        <a id="menu-1">
            <div class="menu-1">
                <i class="fa fa-heart"></i>
            </div>
        </a>
    </div>
    <div class="music-box">
        <button class="music-box-toggle-btn" onclick="togleAudio()">
            <i id="on" onClick="play()" class="play fa fa-music"></i>
            <i id="off" onClick="pause()" class="pause fa fa-pause" style="display: none;"></i>
        </button>

        <audio autoplay loop id="audio">
            <source src="<?= base_url() ?>assets/music/<?= $data['music'] ?>" type="audio/mpeg">
            Your browser does not support the audio element.
        </audio>
    </div>
    
   <!--  <div id="on" onClick="play()" class="music">
        <img src="../../1.bp.blogspot.com/-gp9Er4hGXAE/Xypu3ArluhI/AAAAAAAAOyc/Qu_auIJYHZEO1TPtjmuwWen0YU_-fEdIgCLcBGAsYHQ/s512/on.png">
    </div>
    <div id="off" onClick="pause()" class="music">
        <img src="../../1.bp.blogspot.com/-KYZp0_JM57M/Xypu2pJMXdI/AAAAAAAAOyY/a8YBXoMNjK8u-hEn hW_2fQgTEWFui5N5gCLcBGAsYHQ/s512/off.png">
    </div> -->
    <!-- <audio id="audio" src="https://media.vocaroo.com/mp3/34kX09IQRKW" preload="auto"></audio> -->

    <div id="demo-1" class="sliding" data-zs-src='[<?= $slide ?>]' data-zs-overlay="dots">
        <div class="demo-inner-content">
            <div class="slide-2-1">We are Getting Married</div>
            <div class="slide-2-2">
                <div id="day" class="slide-2-3-1" data-wow-iteration="infinite"> <br> Days</div>
                <div id="hour" class="slide-2-3-1" data-wow-iteration="infinite"> <br> Hours</div>
                <div id="minute" class="slide-2-3-1" data-wow-iteration="infinite"> <br> Minutes</div>
                <div id="second" class="slide-2-3-1" data-wow-iteration="infinite"> <br> Seconds</div>
                <div class="clear"></div>
            </div>
            <a href="https://calendar.google.com/calendar/r/eventedit?text=Cindy+%26+Artha+Wedding+Reception&amp;dates=20200726T140000/20200726T140000&amp;ctz=Asia/Jakarta&amp;details=We+would+be+more+than+happy+to+see+Your+bright+faces+in+our+wedding&amp;location=Pandan+House+Restaurant&amp;pli=1&amp;uid=1521339627addtocalendar&amp;sf=true&amp;output=xml">
                <div class="slide-2-3">Save Wedding Date</div>
            </a>
            <div class="scroll">Scroll Now <br> &darr;</div>
        </div>
    </div>
    <div id="demo-2" class="sliding-2" data-zs-src='[]' data-zs-overlay="dots">
        <div class="demo-inner-content">
            <div class="slide-2-1">We are Getting Married</div>
            <div class="slide-2-2">
                <div id="day" class="slide-2-3-1" data-wow-iteration="infinite"> <br> Days</div>
                <div id="hour" class="slide-2-3-1" data-wow-iteration="infinite"> <br> Hours</div>
                <div id="minute" class="slide-2-3-1" data-wow-iteration="infinite"> <br> Minutes</div>
                <div id="second" class="slide-2-3-1" data-wow-iteration="infinite"> <br> Seconds</div>
                <div class="clear"></div>
            </div>
            <a href="https://calendar.google.com/calendar/r/eventedit?text=Cindy+%26+Artha+Wedding+Reception&amp;dates=20200726T140000/20200726T140000&amp;ctz=Asia/Jakarta&amp;details=We+would+be+more+than+happy+to+see+Your+bright+faces+in+our+wedding&amp;location=Pandan+House+Restaurant&amp;pli=1&amp;uid=1521339627addtocalendar&amp;sf=true&amp;output=xml">
                <div class="slide-2-3">
                    Save Wedding Date</div>
            </a>
            <div class="scroll">Scroll Now <br> &darr;</div>
        </div>
    </div>

    <div id="quote">
        <div class="container">
            <div id="quotes">
                <center>
                    <img src="<?= base_url() ?>assets/images/flowers.png">
                    <div class="quotes-2">
                        Bismillah
                    </div>
                    <div class="quotes-3">
                        ???? ???????? ?????????????????? ???????? ???????????? ???????????? ?????????? ???????????????????????? ???????????????????? ?????????????????????????????? ?????????????????? ???? ???????????? ???????????????????? ???????????????????? ?????? ???????????????? ?? ?????????? ???????? ???????????? ???????????????? ?????????????????? ????????????????????????????????
                        <br><br>
                        &#10077; Dan di antara tanda-tanda kekuasaan-Nya ialah Dia menciptakan untukmu isteri-isteri dari jenismu sendiri, supaya kamu cenderung dan merasa tenteram kepadanya, dan dijadikan-Nya diantaramu rasa kasih dan sayang. Sesungguhnya pada yang demikian itu benar-benar terdapat tanda-tanda bagi kaum yang berfikir
                        &#10078;
                    </div>
                    <div class="quotes-4">
                        (Ar-Rum: 21)
                    </div>
                </center>
            </div>
            <div id="quote-5" class="quote wow zoomIn">
                <img src="<?= $gambar2 ?>">
            </div>
            <div id="quote-1" class="quote">
                <div class="quote-1-1 wow zoomIn">
                    <span class="quote-1">The</span>
                    <h1><span class="quote-2">Highest</span></h1>
                    <span class="quote-1">Happiness</span><br>
                    <span class="quote-1">On earth</span>
                </div>
            </div>
            <div id="quote-2" class="quote wow zoomIn">
                <img src="<?= $gambar3 ?>">
            </div>
            <div id="quote-3" class="quote wow zoomIn">
                <img src="<?= $gambar4 ?>">
            </div>
            <div id="quote-4" class="quote wow zoomIn">
                <div class="quote-1-2">
                    <span class="quote-1">Is the</span>
                    <h1><span class="quote-2">Happiness</span></h1>
                    <span class="quote-1">Of Marriage</span><br>
                </div>
            </div>
            <div id="quote-5" class="quote wow zoomIn">
                <img src="<?= $gambar4 ?>">
            </div>
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
    <div id="name">
        <div class="name-1 wow zoomIn">
            <h1><?= $data['panggilan_p'] ?> </h1>
        </div>
        <div class="name-2 name-3 wow zoomIn">
            <div class="name-2-1">
                <?= $data['nama_p'] ?>
            </div>
            <div class="name-2-2">
                <?= $tentang_p ?>
            </div>
            <?php if($ig_p != ''){ ?>
            <div class="name-2-3 name-2-3-2">
                <a href="https://instagram.com/<?= $ig_p ?>"><i class="fa fa-instagram"></i> <?= $ig_p ?></a>
                <br>
            </div>
        <?php } ?>
        </div>
        <div class="name-5 wow zoomIn">
            <img src="<?= $brid ?>">
        </div>
        <div class="clear"></div>
        <div class="name-6 wow zoomIn">
            <img src="<?= $groom ?>">
        </div>
        <div class="name-2 name-4 wow zoomIn">
            <div class="name-2-1">
                <?= $data['nama_l'] ?>
            </div>
            <div class="name-2-2" style="margin-left: 75px;">
                <?= $tentang_l ?>
            </div>
            <?php if($ig_p != ''){ ?>
            <div class="name-2-3 name-2-3-2">
                <a href="https://instagram.com/<?= $ig_l ?>"><?= $ig_l ?> <i class="fa fa-instagram"></i></a>
                <br>
            </div>
            <?php } ?>
        </div>
        <div id="name-1-1" class="name-1 wow zoomIn">
            <h1><?= $data["panggilan_l"] ?></h1>
        </div>
        <div class="clear"></div>
    </div>

    <div id="reception">
        <div id="reception-1" class="wow zoomIn">
            Save The Date
            <div class="reception-1-border"></div>
        </div>
        <div id="reception-2" class="reception">
            <div class="reception-1 wow zoomIn">
                <div class="reception-1-1">
                    <span id="dayss" class="reception-1-1-1">

                    </span>
                    <br>
                    Hari
                </div>
                <div class="reception-1-1">
                    <span id="hourss" class="reception-1-1-1">

                    </span>
                    <br>
                    Jam
                </div>
                <div class="reception-1-1 reception-1-2">
                    <span id="minutess" class="reception-1-1-1">

                    </span>
                    <br>
                    Menit
                </div>
                <div class="reception-1-1 reception-1-2">
                    <span id="secondss" class="reception-1-1-1">

                    </span>
                    <br>
                    Detik
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <div id="reception-3" class="reception">
            <div class="reception-3 wow zoomIn">
                <div class="reception-3-1">
                    Akad Nikah
                </div>
                <div class="reception-3-2 reception-3-2-1 left">
                    <?= date_format($tanggal_akad, 'd') . ' ' . $bulan_akad . ' ' . date_format($tanggal_akad, 'Y')  ?>
                </div>
                <div class="reception-3-3">
                    <img src="<?= base_url() ?>assets/images/calendars.png">
                </div>
                <br>
                <div class="reception-3-2 reception-3-2-1">
                    <?php echo  substr($data['jam_akad_mulai'], 0, 5).' ';
                    if(substr($data['jam_akad_selesai'], 0, 5) > "23:00:00"){
                        echo '- Selesai';
                    }else if (substr($data['jam_akad_selesai'], 0, 5) == ""){

                    }else{
                        echo  ' - ' . substr($data['jam_akad_selesai'], 0, 5);
                    } ?>
                </div>
                <div class="reception-3-3">
                    <img src="<?= base_url() ?>assets/images/stopwatchs.png">
                </div>
                <br>
                <div class="reception-3-2">
                    <?= $data['lokasi_akad'] ?>
                </div>
                <div class="reception-3-3">
                    <img src="<?= base_url() ?>assets/images/placeholders.png">
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <div id="reception-4" class="reception">
            <div class="reception-3 wow zoomIn">
                <div class="reception-3-1">
                    Resepsi Pernikahan
                </div>
                <div class="reception-3-3 reception-4-1">
                    <img src="<?= base_url() ?>assets/images/calendars.png">
                </div>
                <div class="reception-3-2 reception-3-2-1 reception-4-2">
                    <?= date_format($tanggal, 'd') . ' ' . $bulan .  ' ' . date_format($tanggal, 'Y')  ?>
                </div>
                <div class="clear"></div>
                <div class="reception-3-3 reception-4-1">
                    <img src="<?= base_url() ?>assets/images/stopwatchs.png">
                </div>
                <div class="reception-3-2 reception-3-2-1 reception-4-2">
                    <?php echo substr($data['jam_resepsi_mulai'], 0, 5).' ';
                    if(substr($data['jam_resepsi_selesai'], 0, 5) > "23:00:00"){
                        echo '- Selesai';
                    }else if (substr($data['jam_resepsi_selesai'], 0, 5) == ""){

                    }else{
                        echo  ' - ' . substr($data['jam_resepsi_selesai'], 0, 5);
                    }?>

                </div>
                <div class="clear"></div>
                <div class="reception-3-3 reception-4-1">
                    <img src="<?= base_url() ?>assets/images/placeholders.png">
                </div>
                <div class="reception-3-2 reception-4-2">
                    <?= $data['lokasi_resepsi'] ?>
                </div>
                <div class="clear"></div>
                <!-- <a href="https://calendar.google.com/calendar/r/eventedit?text=Cindy+%26+Artha+Wedding+Reception&amp;dates=20200726T140000/20200726T140000&amp;ctz=Asia/Jakarta&amp;details=We+would+be+more+than+happy+to+see+Your+bright+faces+in+our+wedding&amp;location=Pandan+House+Restaurant&amp;pli=1&amp;uid=1521339627addtocalendar&amp;sf=true&amp;output=xml">
                    <div class="reception-3-4">Simpan Tanggal Pernikahan</div>
                </a> -->
            </div>
        </div>
        <div id="reception-5" class="reception">
            <div class="reception-1 wow zoomIn">
                <div class="reception-1-1">
                    <span id="minutesss" class="reception-1-1-1">

                    </span>
                    <br>
                    Menit
                </div>
                <div class="reception-1-1">
                    <span id="secondsss" class="reception-1-1-1">

                    </span>
                    <br>
                    Detik
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
    <div id="grid">
        <div class="clear"></div>
        <div class="grid-border">Love <i class="fa fa-heart"></i></div>
        <?php for ($mulai1 = 0; $mulai1 < count($gallery); $mulai1++) { ?>
            <div class="grid-1 wow zoomIn">
                <img src="<?= $gallery[$mulai1]['gambar'] ?>">
            </div>
        <?php } ?>
        <div class="clear"></div>
    </div>
    <div id="location">
        <div class="container">
            <div class="location-1">
                <div class="location-2">Event&nbsp;</div>
                <div class="location-2 location-3">Location <i class="fa fa-address-book"></i></div>
                <div class="clear"></div>
            </div>
            <iframe src="<?= $data['link_map'] ?>" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
            </iframe>

            <!-- <a href="<?= $data['link_map'] ?>">
                <div class="location-5 wow zoomIn">
                    Google
                    <span class="location-6">
                        Maps
                    </span>
                </div>
            </a> -->
        </div>
    </div>
    <div id="guest">
        <div class="container">
            <div class="location-1">
                <div class="location-2">Guest&nbsp;</div>
                <div class="location-2 location-3">Books <i class="fa fa-address-book"></i></div>
                <div class="clear"></div>
            </div>
            <div class="guest-1" style="background: antiquewhite; padding: 24px 0px;">
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
                    <div id="loader"><i class="fa fa-refresh fa-spin fa-3x fa-fw"></i></div>
                    <button class="wow zoomIn button-submit" data-wow-delay="0.3s" type="submit" name="tes">Kirim</button>
                </form>

            </div>
        </div>
    </div>
    <div id="comment">
        <div class="container">
            <div class="comment-1">
                <div class='comment-1-1'>Comment Here..</div>
                <?php foreach ($ucapan as $item) { ?>
                    <div class='comment-2'>
                        <div class='comment-3'><?= $item['oleh'] ?><span class='comment-3-1'>&nbsp;<?= $item['email'] ?></span></div>
                        <div class='comment-4'><i class='fa fa-comment'></i> <?= $item['ucapan'] ?></div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="<?= base_url() ?>assets/js/slider/dist/jquery.zoomslider.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#menu-1").click(function() {
                $("#menu-2").slideToggle();
            });

            $(".scroll").click(function() {
                $('html, body').animate({
                    scrollTop: $("#footer").offset().top
                }, 50000);
            });

            $(".c-banner").click(function() {
                $('html, body').animate({
                    scrollTop: $("body").offset().top
                }, 2000);
            });

            $(".c-quote").click(function() {
                $('html, body').animate({
                    scrollTop: $("#quote").offset().top
                }, 2000);
            });

            $(".c-moment").click(function() {
                $('html, body').animate({
                    scrollTop: $("#moment").offset().top
                }, 2000);
            });

            $(".c-souvenir").click(function() {
                $('html, body').animate({
                    scrollTop: $("#souvenir").offset().top
                }, 2000);
            });

            $(".c-rsvp").click(function() {
                $('html, body').animate({
                    scrollTop: $("#rsvp").offset().top
                }, 2000);
            });

            $(".c-wedding").click(function() {
                $('html, body').animate({
                    scrollTop: $("#name").offset().top
                }, 2000);
            });

            $(".c-gallery").click(function() {
                $('html, body').animate({
                    scrollTop: $("#grid").offset().top
                }, 2000);
            });

            $(".c-reception").click(function() {
                $('html, body').animate({
                    scrollTop: $("#reception").offset().top
                }, 2000);
            });

            $(".c-location").click(function() {
                $('html, body').animate({
                    scrollTop: $("#location").offset().top
                }, 2000);
            });

            $(".c-guest").click(function() {
                $('html, body').animate({
                    scrollTop: $("#guest").offset().top
                }, 2000);
            });

            $("#play").click(function() {
                $("#play").hide();
                $("#stop").show();
            });
            $("#stop").click(function() {
                $("#stop").hide();
                $("#play").show();
            });
            $("#plays").click(function() {
                $("#plays").hide();
                $("#stops").show();
            });
            $("#stops").click(function() {
                $("#stops").hide();
                $("#plays").show();
            });
        });

        $(".hide").click(function() {
            $("#popup").fadeOut(1000);
            var video = $("#tes").attr("src");
            $("#tes").attr("src", "");
            $("#tes").attr("src", video);
            $("body").css("overflow", "scroll");
            $("body").css("overflow-x", "hidden");
        });

        var audio = document.getElementById('audio');

        function play() {
            audio.play();
            //player.playVideo();
            $("#on").css("display", "none")
            $("#off").css("display", "block");
        }

        function pause() {
            audio.pause();
            //player.pauseVideo();
            $("#off").css("display", "none");
            $("#on").css("display", "block")
        }

        // COUNT DOWN
        tanggal = '<?= date_format($tanggal, 'M d, Y H:i:s') ?>';
        var countDownDate = new Date(tanggal).getTime();

        var x = setInterval(function() {

            var now = new Date().getTime();

            var distance = countDownDate - now;

            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            document.getElementById("day").innerHTML = days + "<br><span class='slide-2-3-2'>Days";
            document.getElementById("hour").innerHTML = hours + "<br><span class='slide-2-3-2'>Hours";;
            document.getElementById("minute").innerHTML = minutes + "<br><span class='slide-2-3-2'>Minutes";;
            document.getElementById("second").innerHTML = seconds + "<br><span class='slide-2-3-2'>Seconds";;

            if (distance < 0) {
                clearInterval(x);
                document.getElementById("day").innerHTML = "0<br><span class='slide-2-3-2'>Days";
                document.getElementById("hour").innerHTML = "0<br><span class='slide-2-3-2'>Hours";
                document.getElementById("minute").innerHTML = "0<br><span class='slide-2-3-2'>Minutes";
                document.getElementById("second").innerHTML = "0<br><span class='slide-2-3-2'>Seconds";
            }
        }, 1000);



        var countDownDate = new Date(tanggal).getTime();

        var x = setInterval(function() {

            var now = new Date().getTime();

            var distance = countDownDate - now;

            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            document.getElementById("dayss").innerHTML = days;
            document.getElementById("hourss").innerHTML = hours;
            document.getElementById("minutess").innerHTML = minutes;
            document.getElementById("secondss").innerHTML = seconds;
            document.getElementById("minutesss").innerHTML = minutes;
            document.getElementById("secondsss").innerHTML = seconds;

            if (distance < 0) {
                clearInterval(x);
                document.getElementById("dayss").innerHTML = "0";
                document.getElementById("hourss").innerHTML = "0";
                document.getElementById("minutess").innerHTML = "0";
                document.getElementById("secondss").innerHTML = "0";
                document.getElementById("minutesss").innerHTML = minutes;
                document.getElementById("secondsss").innerHTML = seconds;
            }
        }, 1000);
        var url = '<?= base_url() ?>inv/insert';
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
    </script>
    <div id="footer">
        <center>
            <div id="footer-1-1">
                <a class="c-banner">
                    Home
                </a> |
                <a class="c-quote">
                    Quote
                </a> |
                <a class="c-quote">
                    Wedding
                </a> |
                <a class="c-reception">
                    Reception
                </a> |
                <a class="c-gallery">
                    Gallery
                </a> |
                <a class="c-location">
                    Location
                </a> |
                <a class="c-guest">
                    Guestbook
                </a>
            </div>
            <div id="footer-1-2">
                Copyright &copy; 2019. Wedding Invitation. Proudly Created By Limstudio
            </div>
            <div id="footer-1-3">
                Copyright &copy; 2019. By Limstudio&trade;
            </div>
        </center>
    </div>
</body>

<!-- Mirrored from officiallys.com/Cindy-Artha/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 25 Sep 2020 13:55:45 GMT -->

</html>