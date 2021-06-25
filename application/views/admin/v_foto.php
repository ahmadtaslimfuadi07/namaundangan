<div class="right_col" role="main" id="progress">
    <!-- top tiles -->
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <form id="demo-form" data-parsley-validate="" novalidate="">
                    <div class="col-md-3">
                        <label for="tanggal1">Tanggal</label>
                        <select class="form-control" id="select2">
                            
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label for="tanggal2">Tanggal</label>
                        <input type="text" id="tanggal2" class="form-control" name="tanggal2" required="">
                    </div>
                    <div class="col-md-2">
                        <label  style="margin-bottom: 20px"></label>
                        <br >
                        <button type="button" class="btn btn-primary form-control" onClick="showdatapernikahan()">Show</button>
                        <!-- <input type="text" id="fullname" class="form-control" name="fullname" required=""> -->
                    </div>
                    <div class="col-md-4">
                        <label  style="margin-bottom: 20px"></label>
                        <br >
                        <button type="button" class="btn btn-primary form-control col-md-4 float-right" onClick="showdatapernikahan()">Add </button>
                        <!-- <input type="text" id="fullname" class="form-control" name="fullname" required=""> -->
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="row">
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
                                    <th>Foto</th>
                                    <th>type</th>
                                    <th>Posisi Mobile</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="pernikahanlist">
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div></div></div>
