 <body>
    <div class="wrapper">
      <div class="sidebar" data-color="white"> 
        <div class="logo">
          <a href="<?php echo site_url('dashboard') ?>" class="logo-text">
           <img src="<?php echo base_url('assets/img/icon/logo-blue.svg'); ?>" class="user-image" alt="User Image">
          </a>
        </div> 
        <div class="sidebar-wrapper"> 
          <ul class="nav">
            <li class="active">
              <a href="dashboard.html">
                <img src="<?php echo base_url('assets/img/icon/icon-dashboard_aktif.svg');?>" class="" alt="icon">
                <p>Dashboard
                </p>
              </a>
            </li>
            <li>
              <a data-toggle="collapse" href="#componentsExamples" aria-expanded="false">
                <img src="<?php echo base_url('assets/img/icon/icon-pengaturan_nonaktif.svg');?>" class="" alt="icon">
                <p>Pengaturan
                  <b class="pe-7s-angle-down icon-down">
                  </b>
                </p>
              </a>
              <div class="collapse" id="componentsExamples" aria-expanded="false" style="height: 0px;">
                <ul class="nav">
                  <li>
                    <a href="AturToko.html">
                     <img src="<?php echo base_url('assets/img/icon/icon-toko-nonaktif.svg');?>" class="" alt="icon">
                      <p>Atur Toko
                      </p>
                    </a>
                  </li>
                  <li>
                    <a href="AturTim.html">
                      <img src="<?php echo base_url('assets/img/icon/icon-tim_nonaktif.svg');?>" class="" alt="icon">
                      <p>Atur Tim
                      </p>
                    </a>
                  </li>
                  <li>
                    <a href="AturProduk.html">
                      <img src="<?php echo base_url('assets/img/icon/icon-produk_nonaktif.svg');?>" class="" alt="icon">
                      <p>Atur Produk
                      </p>
                    </a>
                  </li>
                  <li>
                    <a href="Pengaturanpos.html">
                      <img src="<?php echo base_url('assets/img/icon/icon-settingPOS_nonaktif.svg');?>" class="" alt="icon">
                      <p>Pengaturan POS
                      </p>
                    </a>
                  </li>
                  <li>
                    <a href="EditProfil.html">
                      <img src="<?php echo base_url('assets/img/icon/icon-editakun_nonaktif.svg');?>" class="" alt="icon">
                      <p>Edit Profile Akun
                      </p>
                    </a>
                  </li> 
                </ul>
              </div>
            </li> 
            <li>
              <a href="MyPOS.html">
                <img src="<?php echo base_url('assets/img/icon/icon-pos_nonaktif.svg');?>" class="" alt="icon">
                <p>My POS
                </p>
              </a>
            </li>
            <li class="">
              <a href="DaftarTransaksi.html">
                <img src="<?php echo base_url('assets/img/icon/icon-historitransaksi_nonaktif.svg');?>" class="" alt="icon">
                <p>Daftar Transaksi
                </p>
              </a>
            </li>
            <li class="">
              <a href="Pemberitahuan.html">
                <img src="<?php echo base_url('assets/img/icon/icon-notifikasi_nonaktif.svg');?>" class="" alt="icon">
                <p>Pemberitahuan
                <span>
                  <small class="label pull-right bg-red">12</small>  
                </span>
                </p>
              </a>
            </li>
            <li class="active-pro">
              <a href="bantuan.html">
                <img src="<?php echo base_url('assets/img/icon/icon-help.svg');?>" class="" alt="icon">
                <p>Bantuan</p>
              </a>
            </li>
            <li class="bottom">
              <a href="#"> 
                 2017 All Rights Reserved Stoksis.com
              </a>
            </li>
          </ul>
        </div>
      </div>
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
                    <img src="<?php echo base_url('assets/img/icon/icon-drop_small.svg');?>" class="icon-drop-small" alt="User Image">
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
                  Dashboard
                  <a href="#" class="btn btn-success btn-fill pull-right">Fitur Premium
                  </a>
                </h1>
                <div class="divider-blue">
                </div>
                <ol class="breadcrumb">
                  <li>
                    <a href="#">
                        
                    </a>
                  </li>  
                </ol>
              </div>
            </div>
            <div class="row state-overview">
              <div class="col-md-4 col-sm-6 col-xs-12">
                <section class="panel abu">
                  <div class="symbol grey">
                    <img src="<?php echo base_url('assets/img/icon/icon-toko.svg');?>" class="" alt="icon">
                  </div>
                  <div class="value color-grey">
                    <h1 class="count">6
                    </h1>
                    <p>Store
                    </p>
                  </div>
                </section>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12">
                <section class="panel ijo">
                  <div class="symbol green">
                    <img src="<?php echo base_url('assets/img/icon/icon-tim.svg');?>" class="" alt="icon">
                  </div>
                  <div class="value color-green">
                    <h1 class=" count2">12
                    </h1>
                    <p>Staff
                    </p>
                  </div>
                </section>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12">
                <section class="panel merah">
                  <div class="symbol red">
                    <img src="<?php echo base_url('assets/img/icon/icon-box_produk.svg');?>" class="" alt="icon">
                  </div>
                  <div class="value color-red">
                    <h1 class=" count3">245
                    </h1>
                    <p>Produk
                    </p>
                  </div>
                </section>
              </div>
            </div>
            <div class="row state-overview">
              <div class="col-md-offset-2 col-md-4 col-sm-6 col-xs-12">
                <section class="panel ungu">
                  <div class="symbol purple">
                   <img src="<?php echo base_url('assets/img/icon/icon-transaksi.svg');?>" class="" alt="icon">
                  </div>
                  <div class="value p-t-10 color-purple">
                    <h1 class="count">26
                    </h1>
                    <p>Transaksi Semua Toko
                    </p>
                  </div>
                </section>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12">
                <section class="panel teal">
                  <div class="symbol terques">
                    <img src="<?php echo base_url('assets/img/icon/icon-notifikasi.png');?>" class="" alt="icon">
                  </div>
                  <div class="value p-t-10 color-teal">
                    <h1 class=" count2">947
                    </h1>
                    <p>Pesanan Semua Toko
                    </p>
                  </div>
                </section>
              </div> 
            </div>
            <div class="row">
              <div class="col-md-6 col-md-offset-3">
                <div class="card-dashboard-text">
                  <div class="content">
                    <div class="row">
                      <div class="col-md-4">
                        <h5>
                          Penjualan
                        </h5>
                      </div>
                      <div class="col-md-8">
                        <h2>Rp 666.666.666,-
                        </h2>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
