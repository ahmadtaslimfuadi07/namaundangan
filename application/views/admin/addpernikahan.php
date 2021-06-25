<link href="<?= base_url() ?>assets/admin/vendors/pnotify/dist/pnotify.css" rel="stylesheet">
<link href="<?= base_url() ?>assets/admin/vendors/pnotify/dist/pnotify.buttons.css" rel="stylesheet">
<link href="<?= base_url() ?>assets/admin/vendors/pnotify/dist/pnotify.nonblock.css" rel="stylesheet">

<div class="right_col" role="main" id="progress">
    <!-- top tiles -->
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Form Pernikahan <small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                      <!--   <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        </li> -->
                        <!-- <li><a class="close-link"><i class="fa fa-close"></i></a> -->
                        <!-- </li> -->
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br>
                    <form id="pernikahanform" action="<?= base_url('myadmin/simpanpernikahan') ?>" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">
                        <div class="item form-group">
                            <label class="col-form-label col-md-2 col-sm-3 label-align" for="first-name">Link <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" placeholder="Link" id="uri_2" name="uri_2" required="required" class="form-control" data-parsley-id="5">
                            </div>
                        </div>
                        <hr>
                        <div class="item form-group">
                            <label class="col-form-label col-md-2 col-sm-3 label-align" for="first-name">Nama Perempuan <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" placeholder="Nama lengkap" id="nama_p" name="nama_p" required="required" class="form-control" data-parsley-id="5">
                            </div>
                            <div class="col-md-4 col-sm-6 ">
                                <input type="text" placeholder="Nama panggilan" id="panggilan_p" name="panggilan_p" required="required" class="form-control" data-parsley-id="5">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-2 col-sm-3 label-align" for="first-name">Tentang Perempuan <span class="required">*</span>
                            </label>
                            <div class="col-md-10 col-sm-6 ">
                                <textarea  id="tentang_p" name="tentang_p" required="required" class="form-control" data-parsley-id="5">Anak Pertama dari Bapak .. dan Ibu ..</textarea>
                            </div>
                        </div>
                        <hr>
                        <div class="item form-group">
                            <label class="col-form-label col-md-2 col-sm-3 label-align" for="first-name">Nama Laki-laki <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" placeholder="Nama lengkap" id="nama_l" name="nama_l" required="required" class="form-control" data-parsley-id="5">
                            </div>
                            <div class="col-md-4 col-sm-6 ">
                                <input type="text" placeholder="Nama panggilan" id="panggilan_l" name="panggilan_l" required="required" class="form-control" data-parsley-id="5">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-2 col-sm-3 label-align" for="first-name">Tentang Laki-laki <span class="required">*</span>
                            </label>
                            <div class="col-md-10 col-sm-6 ">
                                <textarea  id="tentang_l" name="tentang_l" required="required" class="form-control" data-parsley-id="5">Anak Pertama dari Bapak .. dan Ibu ..</textarea>
                            </div>
                        </div>
                        <hr>
                        <div class="item form-group">
                            <label class="col-form-label col-md-2 col-sm-3 label-align" for="first-name">Tanggal Akad <span class="required">*</span>
                            </label>
                            <div class="col-md-2 col-sm-6 ">
                                <input type="text" placeholder="Tanggal" id="tanggal1" name="tgl_akad" required="required" class="form-control" data-parsley-id="5">
                            </div>
                            <div class="col-md-2 col-sm-6 ">
                                <input type="text" placeholder="Jam Mulai" id="jam_akad_mulai" name="jam_akad_mulai" required="required" class="form-control" data-parsley-id="5">
                            </div>
                            <div class="col-md-2 col-sm-6 ">
                                <input type="text" placeholder="Jam Selesai" id="jam_akad_selesai" name="jam_akad_selesai" required="required" class="form-control" data-parsley-id="5">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-2 col-sm-3 label-align" for="first-name">Tanggal Resepsi <span class="required">*</span>
                            </label>
                            <div class="col-md-2 col-sm-6 ">
                                <input type="text" placeholder="Tanggal" id="tanggal2" name="tgl_resepsi" required="required" class="form-control" data-parsley-id="5">
                            </div>
                            <div class="col-md-2 col-sm-6 ">
                                <input type="text" placeholder="Jam Mulai" id="jam_resepsi_mulai" name="jam_resepsi_mulai" required="required" class="form-control" data-parsley-id="5">
                            </div>
                            <div class="col-md-2 col-sm-6 ">
                                <input type="text" placeholder="Jam Selesai" id="jam_resepsi_selesai" name="jam_resepsi_selesai" required="required" class="form-control" data-parsley-id="5">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-2 col-sm-3 label-align" for="first-name">Waktu Bagian <span class="required">*</span>
                            </label>
                            <div class="col-md-2 col-sm-6 ">
                                <input type="text" placeholder="Waktu Bagian" id="waktu_bagian" name="waktu_bagian" required="required" class="form-control" data-parsley-id="5">
                            </div>
                        </div>
                        <hr>
                        <div class="item form-group">
                            <label class="col-form-label col-md-2 col-sm-3 label-align" for="first-name">Lokasi Akad <span class="required">*</span>
                            </label>
                            <div class="col-md-10 col-sm-6 ">
                                <textarea  id="lokasi_akad" name="lokasi_akad" required="required" placeholder="lokasi akad" class="form-control" data-parsley-id="5"></textarea>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-2 col-sm-3 label-align" for="first-name">Lokasi Map Akad <span class="required">*</span>
                            </label>
                            <div class="col-md-10 col-sm-6 ">
                                <textarea  id="link_map" name="link_map" required="required" placeholder="lokasi map akad" class="form-control" data-parsley-id="5"></textarea>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-2 col-sm-3 label-align" for="first-name">Lokasi Share Akad <span class="required">*</span>
                            </label>
                            <div class="col-md-10 col-sm-6 ">
                                <textarea  id="gomap" name="gomap" required="required" placeholder="lokasi share map akad" class="form-control" data-parsley-id="5"></textarea>
                            </div>
                        </div>
                        <hr>
                        <div class="item form-group">
                            <label class="col-form-label col-md-2 col-sm-3 label-align" for="first-name">Lokasi Resepsi <span class="required">*</span>
                            </label>
                            <div class="col-md-10 col-sm-6 ">
                                <textarea  id="lokasi_resepsi" name="lokasi_resepsi" required="required" placeholder="lokasi Resepsi" class="form-control" data-parsley-id="5"></textarea>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-2 col-sm-3 label-align" for="first-name">Lokasi Map Resepsi <span class="required">*</span>
                            </label>
                            <div class="col-md-10 col-sm-6 ">
                                <textarea  id="link_map_resepsi" name="link_map_resepsi" required="required" placeholder="lokasi map Resepsi" class="form-control" data-parsley-id="5"></textarea>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-2 col-sm-3 label-align" for="first-name">Lokasi Share Resepsi <span class="required">*</span>
                            </label>
                            <div class="col-md-10 col-sm-6 ">
                                <textarea  id="gomap_resepsi" name="gomap_resepsi" required="required" placeholder="lokasi share map Resepsi" class="form-control" data-parsley-id="5"></textarea>
                            </div>
                        </div>
                       
                        
                        <div class="ln_solid"></div>
                        <div class="item form-group">
                            <div class="col-md-6 col-sm-6 offset-md-2">
                                <button type="button" class="btn btn-warning" onclick="window.history.go(-1); return false;">Back</button>
                                <button type="button" class="btn btn-success simpanbutton" onclick="simpan()">Submit</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- PNotify -->

<script type="text/javascript">
    
     
</script>