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
                <img src="assets/img/icon/logo-blue.svg" class="user-image" alt="User Image" style="width: 150px;">
              </a> 
              <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="assets/img/icon/icon-profil.svg" class="user-image" alt="User Image"> Nama Akun
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
                        <img src="assets/img/icon/icon-logout.svg" class="icon-logout" alt="icon"> Keluar
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
                  <li class="active">Tambah Produk
                  </li>
                </ol>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="card card-wizard no-pr-pl" id="wizardCard">
                  <form id="wizardForm" method="" action="#" novalidate="novalidate">
                    <div class="">
                      <ul class="nav nav-pills">
                        <li class="" style="width: 33.3333%;">
                          <a href="#tab1" data-toggle="tab" aria-expanded="true">Identitas Produk
                          </a>
                        </li>
                        <li class="active" style="width: 33.3333%;">
                          <a href="#tab2" data-toggle="tab">Stok & Harga
                          </a>
                        </li>
                        <li style="width: 33.3333%;">
                          <a href="#tab3" data-toggle="tab">Unggah Produk
                          </a>
                        </li>
                      </ul>
                      <div class="tab-content">
                        <div class="tab-pane" id="tab1"> 
                          <form id="tambahIdentitasToko" action="#" method="" novalidate="">
                            <div class="row"> 
                              <div class="col-md-12">
                                <div class="row bg-form">
                                  <div class="col-md-8 col-md-offset-2"> 
                                    <div id="kotakimage">
                                      <a href="#" id="closeimage">
                                        <img src="assets/img/icon/icon-delete_img.png" id="" alt="Profile picture">
                                      </a>
                                      <img src="assets/img/iphone.png" id="imagePreview" class="fp-produk-edit" style="max-width: 100%;" alt="Profile picture">
                                    </div>
                                    <div id="kotakimage">
                                      <a href="#" id="closeimage">
                                        <img src="assets/img/icon/icon-delete_img.png" id="" alt="Profile picture">
                                      </a>
                                      <img src="assets/img/iphone.png" id="imagePreview" class="fp-produk-edit" style="max-width: 100%;" alt="Profile picture">
                                    </div>
                                    <img src="assets/img/blank.jpg" class="imgCircle img-circle fp-toko" alt="Profile picture">
                                    <span class="fake-icon-edit" id="PicUpload" style="color: #000;">
                                      <img src="assets/img/icon/plus-upload_img.svg" class="icon-add-image" alt="Profile picture">
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
                                      <input class="form-control" type="text" name="" placeholder="Nama Produk" required="true">
                                    </div>
                                    <div class="form-group"> 
                                      <input class="form-control" type="text" name="" placeholder="Merk" required="true">
                                    </div>
                                    <div class="form-group"> 
                                      <select name="level" class="form-control">
                                        <option selected="" disabled="">- Kategori -
                                        </option>
                                        <option value="">1
                                        </option>
                                        <option value="">2
                                        </option>  
                                      </select> 
                                    </div>
                                    <div class="form-group"> 
                                      <select name="level" class="form-control">
                                        <option selected="" disabled="">- Sub Kategori -
                                        </option>
                                        <option value="">1
                                        </option>
                                        <option value="">2
                                        </option>  
                                      </select> 
                                    </div>
                                  </div>
                                  <div class="col-md-4">
                                    <div class="form-group"> 
                                      <input class="form-control" type="text" name="" placeholder="Deskripsi" required="true">
                                    </div>
                                    <div class="form-group"> 
                                      <input class="form-control" type="text" name="" placeholder="Warna" required="true">
                                    </div>
                                    <div class="form-group"> 
                                      <input class="form-control" type="text" name="" placeholder="Ukuran" required="true">
                                    </div>
                                    <div class="form-group"> 
                                      <input class="form-control" type="text" name="" placeholder="Kapasitas" required="true">
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>  
                          </form>
                        </div>
                        <div class="tab-pane active" id="tab2"> 
                          <div class="center">
                            <div class="form-group"> 
                              <input class="form-control" type="text" name="" placeholder="Harga Jual">
                            </div>
                            <div class="form-group"> 
                              <input class="form-control" type="text" name="" placeholder="Harga Beli">
                            </div>
                            <fieldset class="scheduler-border" style="min-height: 200px;">
                              <legend class="scheduler-border color-grey-light">Tersedia di Toko
                              </legend>
                              <div class="text-center">
                                <div class="row">
                                          <div class="col-md-12 m-b-10 font-bold" style="font-size: 12px;">
                                            <img class="" src="assets/img/icon/icon-daftartoko.svg" alt="..." style="width: 25px;"> XYZ Mega Store 80 PCS 
                                                </div>
                                        </div> 
                              </div> 
                              <div class="text-center m-t-50">
                                <small>
                                  <a href="" class="color-grey-light button-edit-tim" data-toggle="modal" data-target="#tempatkantoko">
                                    <img src="assets/img/icon/icon-plus_qty.svg" class="icon-plus_qty" alt="icon">Tempatkan Pada Toko
                                  </a>
                                </small> 
                              </div>
                            </fieldset> 
                          </div>
                        </div>
                        <div class="tab-pane" id="tab3" style="padding-left: 7%;padding-right: 7%;">
                          <div class="row">
                            <div class="col-md-6">
                              <div class="card no-shadow">
                                <div class="header p-0">
                                  <div class="author">
                                    <img class="avatar-produk border-gray" src="assets/img/iphone.png" style="max-width: 100%;border:0;" alt="...">
                                  </div>
                                  <small>Elektronik - Smartphone
                                  </small>
                                  <h4 class="title font-bold font-20">Apple iPhone 7 Plus 128GB Matte Black
                                  </h4>
                                  <p class="category">SKU XXX-01-FF-RED
                                  </p>
                                  <div class="row">
                                    <div class="col-md-6 no-pr-pl">
                                      <div class="typo-line">
                                        <p class="category">Lists
                                        </p>
                                        <div class="row">
                                          <div class="col-md-12">
                                            <ul class="list-unstyled">
                                              <li>-128 GB
                                              </li>
                                              <li>- Warna Matte Black
                                              </li>
                                              <li>- Garansi Internasional
                                              </li>
                                            </ul>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="content p-0">
                                  <div class="footer">
                                    <div class="legend">
                                    </div> 
                                    <div class="stats">
                                      <button type="button" class="btn btn-success btn-fill">Harga Jual IDR 600.000
                                      </button>
                                      <button type="button" class="btn btn-danger btn-fill">Modal IDR 200.000
                                      </button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6">
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
                                                  <h2>2 PCS
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
                                  <fieldset class="scheduler-border" style="min-height: 200px;">
                                    <legend class="scheduler-border">Tersedia di Toko
                                    </legend>
                                    <div class="m-b-30">
                                      <div class="text-center tokolist tokolist-add"> 
                                        <span class="tokolist-assign font-thin tokolist-assign-add">
                                          <img class="" src="assets/img/icon/toko.svg" alt="..."> XYZ Mega Store 
                                          <small class="color-grey">| Total Quantity
                                          </small>  80 PCS
                                        </span> 
                                      </div>
                                      <div class="row">
                                        <div class="col-md-12">
                                          <div class="row">
                                            <div class="col-md-6" style="font-size: 12px;">
                                              Saluran penjualan yang tersedia
                                            </div>
                                            <div class="col-md-6">
                                              <img class="social" src="assets/img/social/instagram-logo.svg">
                                              <img class="social" src="assets/img/social/fb-logo.svg">
                                              <img class="social" src="assets/img/social/twitter-logo.svg">
                                              <img class="social" src="assets/img/social/blibli-logo.svg">
                                              <img class="social" src="assets/img/social/bukalapak-logo.svg">
                                              <img class="social" src="assets/img/social/tokopedia-logo.svg">
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="m-b-30">
                                      <div class="text-center tokolist tokolist-add"> 
                                        <span class="tokolist-assign font-thin tokolist-assign-add">
                                          <img class="" src="assets/img/icon/toko.svg" alt="..."> XYZ Mega Store 
                                          <small class="color-grey">| Total Quantity
                                          </small>  80 PCS
                                        </span> 
                                      </div>
                                      <div class="row">
                                        <div class="col-md-12">
                                          <div class="row">
                                            <div class="col-md-6" style="font-size: 12px;">
                                              Saluran penjualan yang tersedia
                                            </div>
                                            <div class="col-md-6">
                                              <img class="social" src="assets/img/social/instagram-logo.svg">
                                              <img class="social" src="assets/img/social/fb-logo.svg">
                                              <img class="social" src="assets/img/social/twitter-logo.svg">
                                              <img class="social" src="assets/img/social/blibli-logo.svg">
                                              <img class="social" src="assets/img/social/bukalapak-logo.svg">
                                              <img class="social" src="assets/img/social/tokopedia-logo.svg">
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
                          <a href="tambahProduk.html" type="button" class="btn btn-warning btn-wd btn-back disabled" style="display: none;">Sebelumnya
                          </a>
                          <a href="tambahProdukSummary.html" type="button" class="btn btn-warning btn-fill btn-wd btn-next">Berikutnya
                          </a>
                          <button type="button" class="btn btn-success btn-fill btn-wd btn-finish" data-toggle="modal" data-target="#sukses" data-dismiss="modal">Unggah Produk
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
                  <th>Qty
                  </th> 
                </thead>
                <tbody>
                  <tr> 
                    <td>
                      <img class="img-width-50" src="assets/img/user.jpg"/>
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
                        <img class="social" src="assets/img/icon/icon-ig.svg">
                        <img class="social" src="assets/img/icon/icon-fb.svg">
                        <img class="social" src="assets/img/icon/icon-twitter.svg">
                        <img class="social" src="assets/img/icon/logo-blibli.svg">
                        <img class="social" src="assets/img/icon/logo-bl.svg">
                        <img class="social" src="assets/img/icon/logo-tokped.svg">
                      </td>  
                    <td class="td-actions text-right">
                      <input type="text" value="80" class="form-control form-control-border-toko" placeholder="">
                    </td>
                  </tr>
                  <tr> 
                    <td>
                      <img class="img-width-50" src="assets/img/user.jpg"/>
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
                        <img class="social" src="assets/img/icon/icon-ig.svg">
                        <img class="social" src="assets/img/icon/icon-fb.svg">
                        <img class="social" src="assets/img/icon/icon-twitter.svg">
                        <img class="social" src="assets/img/icon/logo-blibli.svg">
                        <img class="social" src="assets/img/icon/logo-bl.svg">
                        <img class="social" src="assets/img/icon/logo-tokped.svg">
                      </td>   
                    <td class="td-actions text-right">
                      <input type="text" value="80" class="form-control form-control-border-toko" placeholder="">
                    </td>
                  </tr>
                  <tr> 
                    <td>
                      <img class="img-width-50" src="assets/img/user.jpg"/>
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
                        <img class="social" src="assets/img/icon/icon-ig.svg">
                        <img class="social" src="assets/img/icon/icon-fb.svg">
                        <img class="social" src="assets/img/icon/icon-twitter.svg">
                        <img class="social" src="assets/img/icon/logo-blibli.svg">
                        <img class="social" src="assets/img/icon/logo-bl.svg">
                        <img class="social" src="assets/img/icon/logo-tokped.svg">
                      </td>  
                    <td class="td-actions text-right">
                      <input type="text" class="form-control form-control-border-toko" placeholder="">
                    </td>
                  </tr> 
                </tbody>
              </table>
            </div>
          </div>
          <div class="modal-footer text-center"> 
            <a href="tambahprodukAssign.html" class="btn btn-info btn-fill">OK
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
          <div class="modal-body m-b-20 p-t-0" style="padding-left: 70px;padding-right:70px;"> 
            <h4 class="text-center m-b-40 font-thin"> 
              Sukses
            </h4>
            <p class="text-center m-b-40">Anda sukses menambahkan produk baru
            </p>
            <div class="form-group">
              <button id="signupSubmit" type="submit" class="btn btn-info btn-fill btn-block" data-dismiss="modal">OK
              </button>
            </div>
          </div> 
        </div>
      </div>
    </div>
  </body>
