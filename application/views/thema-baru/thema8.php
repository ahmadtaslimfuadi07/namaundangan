<!DOCTYPE html>
<html>
    <head>
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
        }
    } ?>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <meta name="description" content="by limstudio.site" />
        <meta name="author" content="limstudio.site" />

        <meta property="og:title" content="<?= $data['panggilan_l'] ?> & <?= $data['panggilan_p'] ?> | Undangan Pernikahan" />
        <meta property="og:type" content="Website" />
        <meta property="og:image" content="<?= $gambar2 ?>" />
        <meta property="og:url" content="index.html" />
        <meta property="og:site_name" content="Limstudio" />
        <meta property="og:description" content="Merupakan suatu kehormatan dan kebahagiaan bagi kami, apabila Bapak/Ibu/Saudara/i, berkenan hadir memberikan doa restu kepada kami" />

        <title><?= $data['panggilan_l'] ?> & <?= $data['panggilan_p'] ?> | Undangan Pernikahan</title>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" />

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

        <!-- Lightbox -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css" />

        <!-- Custom CSS -->
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/themes/themes8/style.css" />
        <link rel="icon" type="image/png" sizes="96x96" href="<?= base_url() ?>assets/images/favicon.png" />

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Crimson+Text&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Alex+Brush&amp;family=Crimson+Text&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&amp;display=swap" rel="stylesheet" />

        <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet" />

        <!-- Bootstrap Javascript -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>

        <style>
            .modal-content {
                background-image: linear-gradient(180deg, rgba(255, 255, 255, 0.66) 0%, #ffffff 100%), url(<?=$gambar2?>) !important;
            }
            .acara {
                background-image: linear-gradient(180deg, rgba(255, 255, 255, 0.66) 0%, #ffffff 100%), url(<?=$gambar3?>);
            }
        </style>
    </head>

    <body id="body">
        <div class="modal fade" id="modal_undangan" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <img class="ornamen1 ornamen-modal" data-aos="fade-up" data-aos-duration="2000" src="<?= base_url() ?>assets/themes/themes8/images/background/ornamen4.png" />

                    <div class="modal-body text-center">
                        <h1 class="heading-modal">Undangan Pernikahan</h1>
                        <p class="paragraph-modal">
                            <b>From</b> <br />
                            <?= $data['panggilan_l'] ?>
                            &
                            <?= $data['panggilan_p'] ?>
                        </p>
                        <br />
                        <button type="button" class="btn btn-default btn-modal" id="button-modal" data-dismiss="modal">Lihat Undangan</button>
                        <div class="paragraph-modal-copyright">Made with ♥ by <a href="https://limstudio.site" target="_blank" class="modal-link">Limstudio</a></div>
                    </div>
                </div>
            </div>
        </div>

        <script type="text/javascript">
            $(document).ready(function () {
                $("#modal_undangan").modal("show");
            });
        </script>
        <!-- ========== START CAROUSEL ========== -->
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            </ol>

            <div class="carousel-inner">
                <?php foreach ($gambar as $it) { 
                  if($it['jenis'] == 1){  
                ?>
                <div class="item bg bgdimas active" style="background-image: url('<?= $it['gambar'] ?>');">
                    <div class="container-fluid">
                        <div class="carousel-caption">
                            <!-- Heading -->
                            <div class="slider-heading" data-aos="fade-up" data-aos-duration="2000">
                                <h3>We Are Getting Married</h3>
                            </div>

                            <!-- Nama Mempelai -->
                            <div class="slider-nama" data-aos="fade-up" data-aos-duration="2000">
                                <?= $data['panggilan_l'] ?>
                                &
                                <?= $data['panggilan_p'] ?>
                            </div>

                            <!-- Lokasi -->
                            <div class="slider-tempat" data-aos="fade-up" data-aos-duration="2000">
                                <h3><?= $hari.', '.date_format($tanggal,'d').' '.$bulan.' '.date_format($tanggal,'Y') ?></h3>
                            </div>

                            <i class="fa fa-arrow-circle-down" data-aos="fade-up" data-aos-duration="2000" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
                <?php }} ?>
            </div>
            <!-- END INNER -->

            <!--
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><span class="sr-only">Previous</span>
  </a>

  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><span class="sr-only">Next</span>
  </a>
  -->
        </div>
        <!-- ========== END CAROUSEL ========== -->
        <div class="ornamen" style="position: relative;">
            <img class="ornamen1" data-aos="fade-up" data-aos-duration="2000" src="<?= base_url() ?>assets/themes/themes8/images/background/ornamen4.png" />

            <div class="container">
                <div class="row mempelai">
                    <h1 class="heading" data-aos="fade-up" data-aos-duration="2000">Om Swastiastu</h1>
                    <p class="paragraph" data-aos="fade-up" data-aos-duration="2000">
                        Atas Asung Kertha Wara Nugraha Ida Sang Hyang Widhi Wasa/Tuhan Yang Maha Esa kami bermaksud mengundang Bapak/Ibu/Saudara/i pada Upacara Manusa Yadnya Pawiwahan (Pernikahan) Putra dan Putri kami.
                    </p>

                    <br />
                    <br />
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
                    <div class="col-sm-6">
                        <div class="mempelai-border" data-aos="fade-up" data-aos-duration="2000">
                            <div class="mempelai-foto" data-aos="fade-up" data-aos-duration="2000" style="background: url(<?=$groom?>); background-position: center -75px; background-size: 170%; background-repeat: no-repeat;"></div>
                        </div>
                        <br />
                        <div class="mempelai-nama" data-aos="fade-up" data-aos-duration="2000"><?= $data['nama_l'] ?></div>
                        <div class="mempelai-detail" data-aos="fade-up" data-aos-duration="2000">
                            <?= $tentang_l ?>
                            <br />
                            <br />
                            <br />
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="mempelai-border" data-aos="fade-up" data-aos-duration="2000">
                            <div class="mempelai-foto" data-aos="fade-up" data-aos-duration="2000" style="background: url('<?= $brid ?>'); background-position: center 0px; background-size: cover; background-repeat: no-repeat;"></div>
                        </div>
                        <br />
                        <div class="mempelai-nama" data-aos="fade-up" data-aos-duration="2000"><?= $data['nama_p'] ?></div>
                        <div class="mempelai-detail" data-aos="fade-up" data-aos-duration="2000">
                            <?= $tentang_p ?>
                            <br />
                            <br />
                            <br />
                        </div>
                    </div>

                    <img class="ornamen ornamen2" data-aos="fade-up" data-aos-duration="2000" src="<?= base_url() ?>assets/themes/themes8/images/background/ornamen5.png" />
                </div>
                <!-- End Row -->
            </div>
            <!-- End Container -->
        </div>
        <!-- End Ornamen -->
        <div class="container-fluid">
            <div class="row">
                <h1 class="heading" data-aos="fade-up" data-aos-duration="2000">Countdown</h1>

                <div class="col-md-12 countdown">
                    <div id="countdown" data-aos="fade-up" data-aos-duration="2000"></div>
                </div>

                <div class="col-md-12 acara">
                    <div class="col-md-12">
                        <p class="paragraph" data-aos="fade-up" data-aos-duration="2000">
                            Merupakan suatu kehormatan dan kebahagiaan kami apabila Bapak/Ibu/Saudara/i berkenan hadir memberikan doa restu.
                        </p>
                        <br />
                    </div>

                    <div class="col-md-6 akad">
                        <div class="acara-heading" data-aos="zoom-in-down">Pawiwahan</div>
                        <div class="acara-tanggal" data-aos="zoom-in-down">
                            <i class="fa fa-calendar" aria-hidden="true"></i>
                            <?= $hari_akad.', '.date_format($tanggal_akad, 'd').' '.$bulan_akad.' '.date_format($tanggal_akad, 'Y') ?>
                        </div>
                        <div class="acara-waktu" data-aos="zoom-in-down">
                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                            <?php echo substr($data['jam_akad_mulai'], 0, 5);
                    if(substr($data['jam_akad_selesai'], 0, 5) >= "23:00:00"){ echo ' '.$data['waktu_bagian'].' - Selesai'; }else if(substr($data['jam_akad_selesai'], 0, 5) == ""){ echo ' '.$data['waktu_bagian']; }else{ echo ' - ' .
                            substr($data['jam_akad_selesai'], 0, 5).' '.$data['waktu_bagian']; } ?>
                        </div>
                        <div class="acara-alamat" data-aos="zoom-in-down">
                            <br />
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <?= $data['lokasi_akad'] ?>
                        </div>
                        <div class="acara-map" data-aos="zoom-in-down">
                            <a href="<?= $data['link_map'] ?>" target="_blank">
                                <br />
                                <button class="btn btn-md btn-default btn-map"><i class="fa fa-location-arrow" aria-hidden="true"></i> Map Lokasi Acara</button>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-6 resepsi">
                        <div class="acara-heading" data-aos="zoom-in-down">Resepsi</div>
                        <div class="acara-tanggal" data-aos="zoom-in-down">
                            <i class="fa fa-calendar" aria-hidden="true"></i>
                            <?= $hari.', '.date_format($tanggal, 'd').' '.$bulan.' '.date_format($tanggal, 'Y') ?>
                        </div>
                        <div class="acara-waktu" data-aos="zoom-in-down">
                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                            <?php echo substr($data['jam_resepsi_mulai'], 0, 5);
                    if(substr($data['jam_resepsi_selesai'], 0, 5) >= "23:00:00"){ echo ' '.$data['waktu_bagian'].' - Selesai'; }else if(substr($data['jam_resepsi_selesai'], 0, 5) == ""){ echo ' '.$data['waktu_bagian']; }else{ echo ' - ' .
                            substr($data['jam_resepsi_selesai'], 0, 5).' '.$data['waktu_bagian']; } ?>
                        </div>
                        <div class="acara-alamat" data-aos="zoom-in-down">
                            <br />
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <?= $data['lokasi_akad'] ?>
                        </div>
                        <div class="acara-map" data-aos="zoom-in-down">
                            <a href="<?= $data['link_map'] ?>" target="_blank">
                                <br />
                                <button class="btn btn-md btn-default btn-map">Map Lokasi Acara <i class="fa fa-location-arrow" aria-hidden="true"></i></button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row doa">
                <div class="col-sm-12">
                    <img class="ornamen3" data-aos="fade-up" data-aos-duration="2000" src="<?= base_url() ?>assets/themes/themes8/images/background/ornamen3.png" />

                    <p class="paragraph" data-aos="fade-up" data-aos-duration="2000">
                        Ya Tuhanku Yang Maha Pengasih, anugrahkanlah kepada pasangan ini senantiasa kebahagiaan, kesehatan, tetap bersatu dan tidak pernah terpisahkan, panjang umur dan tinggal di rumah yang penuh kegembiraan bersama seluruh
                        keturunannya
                        <br />
                        <br />
                        <i style="color: #aa6d1e; font-weight: bold;">Rg Veda X.85.42.</i>
                    </p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row photo">
                <h1 class="heading" data-aos="fade-up" data-aos-duration="2000">Photo</h1>
                <?php for ($mulai1 = 0; $mulai1 < count($gallery); $mulai1++) { ?>
                <div class="col-xs-6 col-sm-3 item">
                    <a href="<?= $gallery[$mulai1]['gambar'] ?>" data-lightbox="photos"> <img class="img-fluid" src="<?= $gallery[$mulai1]['gambar'] ?>" data-aos="fade-up" data-aos-duration="2000" /></a>
                </div>
                <?php } ?>
            </div>
        </div>
        <!-- <div class="container">
            <div class="row komentar">
                <h1 class="heading" data-aos="fade-up" data-aos-duration="2000">Video</h1>

                <div class="col-md-12" data-aos="fade-up" data-aos-duration="2000">
                    <video width="100%" controls>
                        <source src="video1.mp4" type="video/mp4" />
                        <source src="video1.ogg" type="video/ogg" />
                        Your browser does not support HTML5 video.
                    </video>
                </div>
            </div>
        </div> -->
        <div class="container">
            <div class="row komentar">
                <h1 class="heading" data-aos="fade-up" data-aos-duration="2000">Katakan Sesuatu</h1>

                <div class="col-md-12" data-aos="fade-up" data-aos-duration="2000">
                    <div class="col-md-10 col-md-offset-1">
                        <form class="form-inline">
                            <div class="col-md-4 col-sm-4">
                                <div class="form-group">
                                    <label for="name" class="sr-only">Name</label>
                                    <input type="name" class="form-control" id="nama" placeholder="Nama" name="nama" required style="width: 100%;" maxlength="20" />
                                    <input type='hidden' class='form-control' id='id' value="<?= $data["id_pernikahan"] ?>">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="form-group">
                                    <label for="siapa" class="sr-only">siapa</label>
                                    <input type="text" id="siapa" class="form-control" placeholder="Siapa kamu? co: Keluarga Mempelai" />
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="form-group">
                                    <label for="hadir" class="sr-only">hadir</label>
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
                                    <label for="notes" class="sr-only">notes</label>
                                    <textarea class="form-control" name="notes" id="harapan" placeholder="Ucapan untuk mempelai" rows="5"></textarea>
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

        <div class="container">
            <div class="row"></div>
        </div>

        <div class="container">
            <div class="row">
                <h1 class="heading" data-aos="fade-up" data-aos-duration="2000">Ucapan</h1>
                <div class="col-md-8">
                    <section class="comment-list">
                        <!-- First Comment -->
                        <?php foreach ($ucapan as $item) { ?>
                        <article class="row" data-aos="fade-up" data-aos-duration="2000">
                            <div class="col-md-10 col-sm-10">
                                <div class="panel panel-default arrow left">
                                    <div class="panel-body">
                                        <header class="text-left">
                                            <div class="comment-user"><i class="fa fa-user"></i> <?= $item['oleh'] ?></div>
                                            <time class="comment-date" datetime="16-12-2014 01:05"><i class="fa fa-address-card"></i> <?= $item['email'] ?></time>
                                        </header>
                                        <div class="comment-post">
                                            <p>
                                                <?= $item['ucapan'] ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <?php } ?>
                        <!-- Second Comment Reply -->
                    </section>
                </div>
            </div>
        </div>
        <!-- ========== START MUSIC ========== -->
        <div id="button" class="shadow"><span class="glyphicon glyphicon-music"></span></div>
        <audio id="player"><source src="<?= base_url() ?>assets/music/<?= $data["music"] ?>" type="audio/mpeg" /></audio>
        <!-- ========== END MUSIC ========== -->
        <div class="container">
            <div class="row footer">
                <div class="col-md-12">
                    Made with <span style="font-size: 32px;">♥</span> by Limstudio <br />
                    <hr />
                    <a href="https://wa.me/+6289666661435"><i class="fa fa-whatsapp" aria-hidden="true"></i></a> | <a href="https://limstudio.site"><i class="fa fa-globe" aria-hidden="true"></i></a> |
                    <a href="https://www.instagram.com/limstudio_indo/"><i class="fa fa-instagram" aria-hidden="true"></i></a> <br />
                    <br />
                </div>
            </div>
        </div>
        <!-- <script src="protector.js"></script> -->
        <script>
            var countDownDate = new Date("<?= date_format($tanggal,'m').' '.date_format($tanggal,'d').', '.date_format($tanggal,'Y') ?> 09:00:00").getTime();
        </script>
        <script src="<?= base_url() ?>assets/themes/themes8/countdown.js"></script>
        <script src="<?= base_url() ?>assets/themes/themes8/music.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="<?= base_url() ?>assets/themes/themes8/assetts/js/bootstrap.min.js"></script>
        <script src="<?= base_url() ?>assets/themes/themes8/aos.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
        <script>
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
    </body>
</html>
