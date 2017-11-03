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
                  <li>
                    <a href="aturProduk.html">
                      Atur Produk
                    </a>
                  </li> 
                  <li class="active">Edit Produk
                  </li>
                </ol>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="card card-wizard no-pr-pl" id="wizardCard">
                  <form id="wizardForm" method="" action="#" novalidate="novalidate">
                    <div class="content">
                      <ul class="nav nav-pills">
                        <li class="active" style="width: 33.3333%;">
                          <a href="#tab1" data-toggle="tab" aria-expanded="true">Identitas Produk
                          </a>
                        </li>
                        <li style="width: 33.3333%;">
                          <a href="#tab2" data-toggle="tab">Stok & Harga
                          </a>
                        </li>
                        <li style="width: 33.3333%;">
                          <a href="#tab3" data-toggle="tab">Unggah Produk
                          </a>
                        </li>
                      </ul>
                      <div class="tab-content">
                        <div class="tab-pane active" id="tab1"> 
                          <form id="tambahIdentitasToko" action="#" method="" novalidate="">
                            <div class="row"> 
                              <div class="col-md-12">
                                <div class="row bg-form">
                                  <div class="col-md-8 col-md-offset-2"> 
                                    <div id="kotakimage">
                                      <a href="#" id="closeimage">
                                        <img src="<?php echo base_url('assets/img/icon/icon-delete_img.png');?>" id="" alt="Profile picture">
                                      </a>
                                      <img src="<?php echo base_url('assets/img/iphone.png');?>" id="imagePreview" class="fp-produk-edit" style="max-width: 100%;" alt="Profile picture">
                                    </div>
                                    <div id="kotakimage">
                                      <a href="#" id="closeimage">
                                        <img src="<?php echo base_url('assets/img/icon/icon-delete_img.png');?>" id="" alt="Profile picture">
                                      </a>
                                      <img src="<?php echo base_url('assets/img/iphone.png');?>" id="imagePreview" class="fp-produk-edit" style="max-width: 100%;" alt="Profile picture">
                                    </div>
                                    <div id="newKotakimage1">
                                    </div>
                                    <img src="<?php echo base_url('assets/img/blank.jpg');?>" class="imgCircle img-circle fp-toko" alt="Profile picture">
                                    <span class="fake-icon-edit" id="PicUpload" style="color: #000;">
                                      <img src="<?php echo base_url('assets/img/icon/plus-upload_img.svg');?>" class="icon-add-image" alt="Profile picture">
                                      <input type="file" id="image-input" onchange="readURL(this);" accept="image/*" style="margin-left: 0px;" class="form-control form-input Profile-input-file" >
                                      <!-- style="margin-left: 424px;" -->
                                    </span>
                                    <div class="col-lg-12"> 
                                      <input type="checkbox" class="form-control" id="checker">
                                    </div>
                                  </div>
                                  <input type="file" id="image-input" onchange="readURL(this);" accept="image/*" style="margin-left: 424px;" class="form-control form-input Profile-input-file" >
                                </div>
                              </div> 
                            </div>
                            <div class="row">
                              <div class="col-md-12">
                                <div class="row">
                                  <div class="col-md-4 col-md-offset-2">
                                    <div class="form-group"> 
                                      <input class="form-control" type="text" name="" value="Apple iPhone 7 Plus 128GB Matte Black" placeholder="Nama Produk" required="true">
                                    </div>
                                    <div class="form-group"> 
                                      <input class="form-control" type="text" value="Apple" name="" placeholder="Merk" required="true">
                                    </div>
                                    <div class="form-group"> 
                                      <select class="selectpicker form-control">
                                        <option disabled="" style="font-size: 11px;">- Kategori -
                                        </option>
                                        <option selected="" style="font-size: 11px;">Eletkronik
                                        </option>
                                        <option style="font-size: 11px;">Non Eletkronik
                                        </option>
                                      </select>  
                                    </div>
                                    <div class="form-group"> 
                                      <select class="selectpicker form-control">
                                        <option disabled="" style="font-size: 11px;">- Sub Kategori -
                                        </option>
                                        <option selected="" style="font-size: 11px;">Smartphone
                                        </option>
                                        <option style="font-size: 11px;">Hape
                                        </option>
                                      </select> 
                                    </div>
                                  </div>
                                  <div class="col-md-4">
                                    <div class="form-group"> 
                                      <input class="form-control" type="text" value="Garansi International 1 Tahun" name="" placeholder="Deskripsi" required="true">
                                    </div>
                                    <div class="form-group"> 
                                      <input class="form-control" type="text" value="Matte Black" name="" placeholder="Warna" required="true">
                                    </div>
                                    <div class="form-group"> 
                                      <input class="form-control" type="text" value="" name="" placeholder="Ukuran" required="true">
                                    </div>
                                    <div class="form-group"> 
                                      <input class="form-control" type="text" value="128 GB" name="" placeholder="Kapasitas" required="true">
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>  
                          </form>
                        </div>
                        <div class="tab-pane" id="tab2"> 
                          <div class="center">
                            <div class="form-group"> 
                              <input class="form-control" type="text" value="600.000" name="" placeholder="Harga Jual" required="true">
                            </div>
                            <div class="form-group"> 
                              <input class="form-control" type="text" value="200.000" name="" placeholder="Harga Beli" required="true">
                            </div>
                            <fieldset class="scheduler-border" style="min-height: 200px;">
                              <legend class="scheduler-border">Tersedia di Toko
                              </legend>
                              <div class="text-center">
                                <div class="row">
                                  <div class="col-md-12 m-b-10 font-bold" style="font-size: 12px;">
                                    <img class="" src="<?php echo base_url('assets/img/icon/icon-daftartoko.svg');?>" alt="..." style="width: 25px;"> XYZ Mega Store 80 PCS 
                                  </div>
                                </div> 
                              </div>
                              <div class="text-center">
                                <div class="row">
                                  <div class="col-md-12 m-b-10 font-bold" style="font-size: 12px;">
                                    <img class="" src="<?php echo base_url('assets/img/icon/icon-daftartoko.svg');?>" alt="..." style="width: 25px;"> XYZ Mega Store 80 PCS 
                                  </div>
                                </div> 
                              </div>
                              <div class="text-center m-t-50">
                                <small>
                                  <a href="" class="color-black button-edit-tim" data-toggle="modal" data-target="#tempatkantoko">
                                    <i class="fa fa-pencil">
                                    </i>Tempatkan Pada Toko
                                  </a>
                                </small> 
                              </div>
                            </fieldset> 
                          </div>
                        </div>
                        <div class="tab-pane" id="tab3">
                          <div class="row">
                            <div class="col-md-6 col-sm-6">
                              <div class="card no-shadow">
                                <div class="header p-0">
                                  <div class="author">
                                    <img class="avatar-produk border-gray" src="<?php echo base_url('assets/img/iphone.png');?>" style="max-width: 100%;border:0;" alt="...">
                                  </div>
                                  <small class="color-grey-light">Elektronik - Smartphone
                                  </small>
                                  <h4 class="title" style="font-weight: bold;font-size: 17px;color: #000;">Apple iPhone 7 Plus 128GB Matte Black
                                  </h4>
                                  <p class="category font-11">SKU XXX-01-FF-RED
                                  </p>
                                  <div class="row" style="margin-top: 30px;">
                                    <div class="col-md-8 col-sm-8 no-pr-pl">
                                      <dl class="dl-horizontal"> 
                                        <dt class="font-12 color-black" style="width: 80px;">
                                          Deskripsi:
                                        </dt> 
                                        <dd class="font-12 color-grey-light font-thin">
                                          - 128GB
                                        </dd> 
                                        <dt class="font-12 font-thin" style="width: 80px;">
                                        </dt> 
                                        <dd class="font-14 color-grey-light font-thin">
                                          - Warna Matte Black
                                        </dd>
                                        <dt class="font-12 font-thin" style="width: 80px;">
                                        </dt> 
                                        <dd class="font-14 color-grey-light font-thin">
                                          - Garansi International 1 Tahun
                                        </dd>      
                                      </dl>
                                    </div>
                                  </div>
                                </div>
                                <div class="content">
                                  <div class="footer">
                                    <div class="legend">
                                    </div> 
                                    <div class="stats" style="margin-top: 24%;">
                                      <button type="button" class="btn btn-success btn-fill" style="cursor: text;">Harga Jual IDR 600.000
                                      </button>
                                      <button type="button" class="btn btn-danger btn-fill" style="cursor: text;">Modal IDR 200.000
                                      </button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                              <div class="card no-shadow"> 
                                <div class="content"> 
                                  <div class="row">
                                    <div class="col-md-12">
                                      <div class="row">
                                        <div class="col-md-6 p-0">
                                          <div class="card-product-text">
                                            <div class="content">
                                              <div class="row">
                                                <div class="col-md-4 no-pl">
                                                  <h5>
                                                    Total Kuantitas
                                                  </h5>
                                                </div>
                                                <div class="col-md-8 no-pl">
                                                  <h2>160 PCS
                                                  </h2>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-md-6 p-t-0 no-pl">
                                          <div class="card-product-text no-border-right">
                                            <div class="content">
                                              <div class="row">
                                                <div class="col-md-6 no-pl">
                                                  <h5>
                                                    Toko yang tersedia
                                                  </h5>
                                                </div>
                                                <div class="col-md-6 no-pl">
                                                  <h2>2
                                                  </h2>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div> 
                                  </div>
                                  <br>
                                  <fieldset class="scheduler-border" style="min-height:260px;max-height: 260px;overflow: auto;">
                                    <legend class="scheduler-border color-grey-light">Saluran penjualan yang tersedia
                                    </legend>
                                    <div class="m-b-10">
                                      <div class="row">
                                        <div class="col-md-12 m-b-10 font-bold" style="font-size: 12px;">
                                          <img class="" src="<?php echo base_url('assets/img/icon/icon-daftartoko.svg');?>" alt="..." style="width: 25px;"> XYZ Mega Store 
                                          <small class="color-grey-light font-11 font-thin">| Total Quantity
                                          </small>  80 PCS
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="col-md-12">
                                          <div class="row">
                                            <div class="col-md-6 font-11 font-bold">
                                              Saluran penjualan yang tersedia
                                            </div>
                                            <div class="col-md-6">
                                              <img class="social" src="<?php echo base_url('assets/img/icon/icon-ig.svg');?>">
                                              <img class="social" src="<?php echo base_url('assets/img/icon/icon-fb.svg');?>">
                                              <img class="social" src="<?php echo base_url('assets/img/icon/icon-twitter.svg');?>">
                                              <img class="social" src="<?php echo base_url('assets/img/icon/logo-blibli.svg');?>">
                                              <img class="social" src="<?php echo base_url('assets/img/icon/logo-bl.svg');?>">
                                              <img class="social" src="<?php echo base_url('assets/img/icon/logo-tokped.svg');?>">
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="m-b-10">
                                      <div class="row">
                                        <div class="col-md-12 m-b-10 font-bold" style="font-size: 12px;">
                                          <img class="" src="<?php echo base_url('assets/img/icon/icon-daftartoko.svg');?>" alt="..." style="width: 25px;"> XYZ Mega Store 
                                          <small class="color-grey-light font-11 font-thin">| Total Quantity
                                          </small>  80 PCS
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="col-md-12">
                                          <div class="row">
                                            <div class="col-md-6 font-11 font-bold">
                                              Saluran penjualan yang tersedia
                                            </div>
                                            <div class="col-md-6">
                                              <img class="social" src="<?php echo base_url('assets/img/icon/icon-ig.svg');?>">
                                              <img class="social" src="<?php echo base_url('assets/img/icon/icon-fb.svg');?>">
                                              <img class="social" src="<?php echo base_url('assets/img/icon/icon-twitter.svg');?>">
                                              <img class="social" src="<?php echo base_url('assets/img/icon/logo-blibli.svg');?>">
                                              <img class="social" src="<?php echo base_url('assets/img/icon/logo-bl.svg');?>">
                                              <img class="social" src="<?php echo base_url('assets/img/icon/logo-tokped.svg');?>">
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div> 
                                  </fieldset>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="text-center">
                        <div class="footer">
                          <button type="button" class="btn btn-warning btn-wd btn-back disabled" style="display: none;">Sebelumnya
                          </button>
                          <button type="button" class="btn btn-warning btn-fill btn-wd btn-next">Berikutnya
                          </button>
                          <button type="button" class="btn btn-success btn-fill btn-wd btn-finish" data-toggle="modal" data-target="#sukses" data-dismiss="modal">Unggah
                          </button>
                          <div class="clearfix">
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="tempatkantoko" tabindex="-1" role="dialog" aria-labelledby="">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <a type="button" class="boxclose" data-dismiss="modal">
            </a> 
            <h4 class="modal-title" style="text-align: left;">
              Tempatkan pada Toko
            </h4>
          </div>
          <div class="modal-body">
            <div class="content table-responsive">
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
                  <th>
                    Jumlah Produk
                  </th>
                  <th>
                    Saluran Penjualan
                  </th> 
                  <th class="p-l-10">Qty
                  </th> 
                </thead>
                <tbody>
                  <tr> 
                    <td>
                      <img class="img-width-50" src="<?php echo base_url('assets/img/user.jpg');?>"/>
                    </td>
                    <td>XYZ Mega Store
                    </td>
                    <td>18 September 2017
                    </td> 
                    <td>6
                    </td>
                    <td>
                      16
                    </td>
                    <td>
                      <img class="social" src="<?php echo base_url('assets/img/icon/icon-ig.svg');?>">
                      <img class="social" src="<?php echo base_url('assets/img/icon/icon-fb.svg');?>">
                      <img class="social" src="<?php echo base_url('assets/img/icon/icon-twitter.svg');?>">
                      <img class="social" src="<?php echo base_url('assets/img/icon/logo-blibli.svg');?>">
                      <img class="social" src="<?php echo base_url('assets/img/icon/logo-bl.svg');?>">
                      <img class="social" src="<?php echo base_url('assets/img/icon/logo-tokped.svg');?>">
                    </td>  
                    <td class="td-actions text-right">
                      <input type="text" value="80" class="form-control form-control-border-toko" placeholder="">
                    </td>
                  </tr>
                  <tr> 
                    <td>
                      <img class="img-width-50" src="<?php echo base_url('assets/img/user.jpg');?>"/>
                    </td>
                    <td>XYZ Mega Store
                    </td>
                    <td>18 September 2017
                    </td> 
                    <td>6
                    </td>
                    <td>
                      16
                    </td>
                    <td>
                      <img class="social" src="<?php echo base_url('assets/img/icon/icon-ig.svg');?>">
                      <img class="social" src="<?php echo base_url('assets/img/icon/icon-fb.svg');?>">
                      <img class="social" src="<?php echo base_url('assets/img/icon/icon-twitter.svg');?>">
                      <img class="social" src="<?php echo base_url('assets/img/icon/logo-blibli.svg');?>">
                      <img class="social" src="<?php echo base_url('assets/img/icon/logo-bl.svg');?>">
                      <img class="social" src="<?php echo base_url('assets/img/icon/logo-tokped.svg');?>">
                    </td>   
                    <td class="td-actions text-right">
                      <input type="text" value="80" class="form-control form-control-border-toko" placeholder="">
                    </td>
                  </tr>
                  <tr> 
                    <td>
                      <img class="img-width-50" src="<?php echo base_url('assets/img/user.jpg');?>"/>
                    </td>
                    <td>XYZ Mega Store
                    </td>
                    <td>18 September 2017
                    </td> 
                    <td>6
                    </td>
                    <td>
                      16
                    </td>
                    <td>
                      <img class="social" src="<?php echo base_url('assets/img/icon/icon-ig.svg');?>">
                      <img class="social" src="<?php echo base_url('assets/img/icon/icon-fb.svg');?>">
                      <img class="social" src="<?php echo base_url('assets/img/icon/icon-twitter.svg');?>">
                      <img class="social" src="<?php echo base_url('assets/img/icon/logo-blibli.svg');?>">
                      <img class="social" src="<?php echo base_url('assets/img/icon/logo-bl.svg');?>">
                      <img class="social" src="<?php echo base_url('assets/img/icon/logo-tokped.svg');?>">
                    </td>  
                    <td class="td-actions text-right">
                      <input type="text" class="form-control form-control-border-toko" placeholder="">
                    </td>
                  </tr> 
                </tbody>
              </table>
            </div>
          </div>
          <div class="modal-footer text-center m-l-r-15"> 
            <a href="<?php echo site_url('produk/assign') ?>" class="btn btn-info btn-fill">OK
            </a>
          </div> 
        </div>
      </div>
    </div>
    <div class="modal brandmodal fade" id="sukses" tabindex="-1" role="dialog" aria-labelledby="">
      <div class="modal-dialog" role="document" style="width: 28%;">
        <div class="modal-content">
          <div class="modal-header">
            <a type="button" class="boxclose" data-dismiss="modal">
            </a> 
          </div>
          <div class="modal-body p-t-0 m-b-20" style="padding-left: 60px;padding-right:60px;"> 
            <h4 class="text-center m-b-40 font-thin"> 
              Sukses
            </h4>
            <p class="text-center m-b-40">Anda sukses memperbarui data produk
            </p>
            <div class="form-group">
              <a href="aturproduk.html" class="btn btn-info btn-fill btn-block">OK
              </a>
            </div>
          </div> 
        </div>
      </div>
    </div>
  </body>
