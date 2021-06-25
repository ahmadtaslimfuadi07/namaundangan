<div class="right_col" role="main" id="progress">
    <div class="container">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Default Example <small>Users</small></h2>
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
                    <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="">
                        <div class="col-sm-12">
                            <div class="">
                                <a href="<?= base_url('myadmin/exportpdf') ?>" target="_blank" class="btn btn-primary">Export to Label PDF</a>
                                <table id="datatable1" class="table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Undangan</th>
                                            <th>Alamat</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="pernikahanlist">
                                        <?php $no = 1; foreach ($data as $val) { ?>
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <td><?= $val->nama ?></td>
                                                <td><?= $val->alamat ?></td>
                                                <td><button class="btn btn-primary"><i class="fa fa-edit"></i></button></td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>