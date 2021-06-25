<div class="right_col" role="main" id="progress">
    <!-- top tiles -->
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Data Ucapan</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box" style="overflow-x: scroll;">
                        <table id="datatable1" class="table table-striped table-bordered"  style="width:100%;overflow-x: scroll;">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Ucapan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="pernikahanlist">
                                <?php  $no=1; foreach ($data as $val) { ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $val->oleh ?></td>
                                        <td><?= $val->ucapan ?></td>
                                        <td><button onclick="hapus(<?= $val->id_ucapan ?>, '<?= $val->oleh ?>')" class="btn btn-danger" data-togle="tooltip" data-original-title="delete"><i class="fa fa-trash"></i></button></td>
                                    </tr>
                                <?php } ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div></div></div>


<div id="delete-modal" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Hapus Data</h4>
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="<?= base_url() ?>myadmin/hapusucapan" method="post">
            <div class="modal-body">
                <p>Anda yakin untuk menhapus ucapan dari "<span id='ucapandari'></span>" ?.</p>
                <p>Data yang sudah dihapus tidak bisa dikembalikan!</p>
                <input type="hidden" name="id_ucapan" id="id_ucapan" value="">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Hapus</button>
            </div>
            </form>
        </div>
    </div>
</div>


