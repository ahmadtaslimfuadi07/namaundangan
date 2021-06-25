<link href="<?= base_url() ?>assets/admin/vendors/pnotify/dist/pnotify.css" rel="stylesheet">
<link href="<?= base_url() ?>assets/admin/vendors/pnotify/dist/pnotify.buttons.css" rel="stylesheet">
<link href="<?= base_url() ?>assets/admin/vendors/pnotify/dist/pnotify.nonblock.css" rel="stylesheet">

<div class="right_col" role="main" id="progress">
    <!-- top tiles -->
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Tambah Nama Undangan <small></small></h2>
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
                        <div class="textbox-wrapper">
                            <div class="item form-group">
                                <label class="col-form-label col-md-2 col-sm-3 label-align" for="first-name">Nama Undangan <span class="required">*</span>
                                </label>
                                <div class="col-md-10 col-sm-6 ">
                                    <input type="hidden" name="iduser" value="<?= $iduser ?>">
                                    <input type="text" placeholder="Nama" id="namaundangan" name="namaundangan[]" required="required" class="form-control" data-parsley-id="5" autofocus>
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-2 col-sm-3 label-align" for="first-name">Alamat <span class="required">*</span>
                                </label>
                                <div class="col-md-10 col-sm-6 ">
                                    <input type="text" placeholder="Alamat tujuan" id="alamat" name="alamat[]" required="required" class="form-control" data-parsley-id="5">
                                </div>
                            </div>  
                        </div>
                        <button type="button" class="btn btn-success add-textbox"><i class="glyphicon glyphicon-plus"></i></button>
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