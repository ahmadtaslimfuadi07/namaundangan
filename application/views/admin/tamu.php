<div class="right_col" role="main" id="progress">
    <!-- top tiles -->
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Rencana Kedatangan Tamu</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Settings 1</a>
                            <a class="dropdown-item" href="#">Settings 2</a>
                        </div>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box">
                        <table id="datatable1" class="table table-striped table-bordered"  >
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Kehadiran</th>
                                    <th>Jumlah Tamu</th>
                                </tr>
                            </thead>
                            <tbody id="pernikahanlist">
                                <?php  $no=1; foreach ($data as $val) { ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $val->oleh ?></td>
                                        <td><?= ($val->hadir ? 'Ya' : 'Tidak') ?></td>
                                        <td><?= $val->jumlah ?></td>
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

