     <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse">
                <span class="sr-only">Toggle navigation
                </span>
                <span class="icon-bar">
                </span>
                <span class="icon-bar">
                </span>
                <span class="icon-bar">
                </span>
              </button> 
            </div>
            <div class="collapse navbar-collapse"> 
              <a href="dashboard.html" class="logoimage">
                <img src="<?php echo base_url('assets/img/icon/logo-blue.svg');?>" class="user-image" alt="User Image" style="width: 150px;">
              </a>
              <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="<?php echo base_url('assets/img/icon/icon-profil.svg');?>" class="user-image" alt="User Image"> Nama Akun
                    <b class="pe-7s-angle-down icon-down">
                    </b>
                  </a>
                  <ul class="dropdown-menu">
                    <li>
                      <a href="#" class="p-b-0">Hi, Admin 
                        <br> 
                        <p class="color-blue">XYZ Mega Store
                        </p>
                      </a>
                    </li> 
                    <li class="divider m-0">
                    </li>
                    <li>
                      <a href="#">Ke Website Stoksis
                      </a>
                    </li>
                    <li class="divider m-0">
                    </li>
                    <li>
                      <a href="#">
                        <img src="<?php echo base_url('assets/img/icon/icon-logout.svg');?>" class="icon-logout" alt="icon"> Keluar
                      </a>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <div class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="content-header">
                <h1>
                  Pengaturan
                  <a href="#" class="btn btn-success btn-fill pull-right">Fitur Premium
                  </a>
                </h1>
                <div class="divider-blue">
                </div>
                <ol class="breadcrumb">
                  <li>
                    <a href="#">
                      Pengaturan
                    </a>
                  </li> 
                  <li class="active">Atur Toko
                  </li>
                </ol>
              </div>
            </div>
            <div class="card card-posts">
              <div class="header"> 
                <div class="row"> 
                  <div class="col-md-12">
                    <form class="form-inline pull-right">
                      <div class="form-group">
                        <label class="sr-only">Search
                        </label>
                        <input type="input" class="form-control bordered" placeholder="&#xf002; Cari Toko Disini">
                      </div>
                      <a href="tambahtoko.html" class="btn btn-primary btn-fill"><img src="<?php echo base_url('assets/img/icon/plus-add_btn.svg');?>" class="icon-plus" alt="icon"> Tambah Toko
                      </a> 
                    </form>
                  </div>
                </div>
              </div>
              <div class="content table-responsive table-full-width">
                <table class="table">
                  <thead>
                    <th>
                    </th> 
                    <th>Nama Toko
                    </th>
                    <th>Tanggal Dibuat
                    </th>
                    <th>Jumlah Staff
                    </th>
                    <th>Jumlah Produk
                    </th>
                    <th>Saluran Penjualan
                    </th> 
                    <th>
                    </th> 
                  </thead>
                  <tbody class="text-center">
                    <tr> 
                      <td>
                        <img src="<?php echo base_url('assets/img/user.jpg');?>"/>
                      </td>
                      <td>XYZ Mega Store
                      </td>
                      <td>18 September 2017
                      </td>
                      <td>2
                      </td>
                      <td>6
                      </td>
                      <td>
                        <img class="social" src="<?php echo base_url('assets/img/icon/icon-ig.svg');?>"/>
                        <img class="social" src="<?php echo base_url('assets/img/icon/icon-fb.svg');?>"/>
                        <img class="social" src="<?php echo base_url('assets/img/icon/icon-twitter.svg');?>"/>
                        <img class="social" src="<?php echo base_url('assets/img/icon/logo-blibli.svg');?>"/>
                        <img class="social" src="<?php echo base_url('assets/img/icon/logo-bl.svg');?>"/>
                        <img class="social" src="<?php echo base_url('assets/img/icon/logo-tokped.svg');?>"/>
                      </td>   
                      <td class="td-actions text-right">
                        <a href="edittoko.html" class="font-30" rel="tooltip" title="Edit">
                          <img src="<?php echo base_url('assets/img/icon/icon-edit.svg');?>" class="icon-edit" alt="icon">
                        </a>
                        <a href="#" class="font-30" rel="tooltip" title="Hapus" data-toggle="modal" data-target="#hapus">
                          <img src="<?php echo base_url('assets/img/icon/icon-delete.svg');?>" class="icon-delete" alt="icon">
                        </a>   
                      </td>
                    </tr>
                    <tr> 
                      <td>
                        <img src="<?php echo base_url('assets/img/user.jpg');?>"/>
                      </td>
                      <td>XYZ Mega Store
                      </td>

                      <td>18 September 2017
                      </td>
                      <td>2
                      </td>
                      <td>6
                      </td>
                      <td>
                        <img class="social" src="<?php echo base_url('assets/img/icon/icon-ig.svg');?>"/>
                        <img class="social" src="<?php echo base_url('assets/img/icon/icon-fb.svg');?>"/>
                        <img class="social" src="<?php echo base_url('assets/img/icon/icon-twitter.svg');?>"/>
                        <img class="social" src="<?php echo base_url('assets/img/icon/logo-blibli.svg');?>"/>
                        <img class="social" src="<?php echo base_url('assets/img/icon/logo-bl.svg');?>"/>
                        <img class="social" src="<?php echo base_url('assets/img/icon/logo-tokped.svg');?>"/>
                      </td>   
                      <td class="td-actions text-right">
                        <a href="edittoko.html" class="font-30" rel="tooltip" title="Edit">
                          <img src="<?php echo base_url('assets/img/icon/icon-edit.svg');?>" class="icon-edit" alt="icon">
                        </a>
                        <a href="#" class="font-30" rel="tooltip" title="Hapus" data-toggle="modal" data-target="#hapus">
                          <img src="<?php echo base_url('assets/img/icon/icon-delete.svg');?>" class="icon-delete" alt="icon">
                        </a>   
                      </td>
                    </tr>
                    <tr> 
                      <td>
                        <img src="<?php echo base_url('assets/img/user.jpg');?>"/>
                      </td>
                      <td>XYZ Mega Store
                      </td>
                      <td>18 September 2017
                      </td>
                      <td>2
                      </td>
                      <td>6
                      </td>
                      <td>
                        <img class="social" src="<?php echo base_url('assets/img/icon/icon-ig.svg');?>"/>
                        <img class="social" src="<?php echo base_url('assets/img/icon/icon-fb.svg');?>"/>
                        <img class="social" src="<?php echo base_url('assets/img/icon/icon-twitter.svg');?>"/>
                        <img class="social" src="<?php echo base_url('assets/img/icon/logo-blibli.svg');?>"/>
                        <img class="social" src="<?php echo base_url('assets/img/icon/logo-bl.svg');?>"/>
                        <img class="social" src="<?php echo base_url('assets/img/icon/logo-tokped.svg');?>"/>
                      </td>   
                      <td class="td-actions text-right">
                        <a href="edittoko.html" class="font-30" rel="tooltip" title="Edit">
                          <img src="<?php echo base_url('assets/img/icon/icon-edit.svg');?>" class="icon-edit" alt="icon">
                        </a>
                        <a href="#" class="font-30" rel="tooltip" title="Hapus" data-toggle="modal" data-target="#hapus">
                          <img src="<?php echo base_url('assets/img/icon/icon-delete.svg');?>" class="icon-delete" alt="icon">
                        </a>   
                      </td>
                    </tr>
                  </tbody>
                </table>
                <div class="row">
                  <div class="col-md-12">
                    <ul class="pagination pull-right">
                      <li>
                        <a href="#">«
                        </a>
                      </li>
                      <li class="active">
                        <a href="#">1
                        </a>
                      </li>
                      <li>
                        <a href="#">2
                        </a>
                      </li>
                      <li>
                        <a href="#">3
                        </a>
                      </li>
                      <li>
                        <a href="#">4
                        </a>
                      </li>
                      <li>
                        <a href="#">5
                        </a>
                      </li>
                      <li>
                        <a href="#">»
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div> 
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="modal brandmodal fade" id="hapus" tabindex="-1" role="dialog" aria-labelledby="">
      <div class="modal-dialog" role="document" style="width: 28%;">
        <div class="modal-content">
          <div class="modal-header">
            <a type="button" class="boxclose" data-dismiss="modal">
            </a>  
            <h4 class="modal-title m-t-40 font-thin">
              Hapus Toko
            </h4>
          </div>
          <div class="modal-body" style="padding-right: 50px;padding-left: 50px;">
            <h6 class="text-center m-10 m-b-30">Apakah anda yakin untuk menghapus toko ini?
            </h6>
            <div class="form-group m-b-15">
              <button id="signupSubmit" type="submit" data-dismiss="modal" class="btn btn-danger btn-fill">Batal
              </button>
              <button id="signupSubmit" type="submit" data-dismiss="modal" class="btn btn-info btn-fill">Ya
              </button>
            </div> 
          </div> 
        </div>
      </div>
    </div>
  </body>
