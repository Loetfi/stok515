 <body>
    <div class="wrapper">
      <div class="sidebar" data-color="white">
        <div class="logo">
          <a href="<?php echo site_url('dashboard') ?>" class="logo-text">
            <img src="<?php echo base_url('assets/img/icon/logo-blue.svg');?>" class="user-image" alt="User Image">
          </a>
        </div> 
        <div class="sidebar-wrapper"> 
          <ul class="nav">
            <li class="">
              <a href="<?php echo site_url('dashboard') ?>">
                <img src="<?php echo base_url('assets/img/icon/icon-dashboard_nonaktif.svg');?>" class="" alt="icon">
                <p>Dashboard
                </p>
              </a>
            </li>
            <li class="active">
              <a data-toggle="collapse" href="#componentsExamples" aria-expanded="false">
                <img src="<?php echo base_url('assets/img/icon/icon-pengaturan_nonaktif.svg');?>" class="" alt="icon">
                <p>Pengaturan
                  <b class="pe-7s-angle-down icon-down">
                  </b>
                </p>
              </a>
              <div class="collapse in" id="componentsExamples">
                <ul class="nav">
                  <li class="">
                    <a href="<?php echo site_url('setting/toko'); ?>">
                      <img src="<?php echo base_url('assets/img/icon/icon-toko-nonaktif.svg');?>" class="" alt="icon">
                      <p>Atur Toko
                      </p>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo site_url('setting/tim'); ?>">
                      <img src="<?php echo base_url('assets/img/icon/icon-tim_nonaktif.svg');?>" class="" alt="icon">
                      <p>Atur Tim
                      </p>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo site_url('setting/produk'); ?>">
                      <img src="<?php echo base_url('assets/img/icon/icon-produk_nonaktif.svg');?>" class="" alt="icon">
                      <p>Atur Produk
                      </p>
                    </a>
                  </li>
                  <li class="">
                    <!-- pengaturanpos.html -->
                    <a href="<?php echo site_url('setting/pos'); ?>">
                      <img src="<?php echo base_url('assets/img/icon/icon-settingPOS_nonaktif.svg');?>" class="" alt="icon">
                      <p>Pengaturan POS
                      </p>
                    </a>
                  </li>
                  <li class="">
                    <!-- editprofil.html -->
                    <a href="<?php echo site_url('auth/profil/edit'); ?>">
                      <img src="<?php echo base_url('assets/img/icon/icon-editakun_nonaktif.svg');?>" class="" alt="icon">
                      <p>Edit Profile Akun
                      </p>
                    </a>
                  </li> 
                </ul>
              </div>
            </li> 
            <li>
              <a href="<?php echo site_url('pos');?>">
                <img src="<?php echo base_url('assets/img/icon/icon-pos_nonaktif.svg');?>" class="" alt="icon">
                <p>My POS
                </p>
              </a>
            </li>
            <li class="">
              <!-- DaftarTransaksi.html -->
              <a href="<?php echo site_url('transaction') ?>">
                <img src="<?php echo base_url('assets/img/icon/icon-historitransaksi_nonaktif.svg');?>" class="" alt="icon">
                <p>Daftar Transaksi
                </p>
              </a>
            </li>
            <li class="">
              <!-- Pemberitahuan.html -->
              <a href="<?php echo site_url('notif'); ?>">
                <img src="<?php echo base_url('assets/img/icon/icon-notifikasi_nonaktif.svg');?>" class="" alt="icon">
                <p>Pemberitahuan
                  <span>
                    <small class="label pull-right bg-red">12
                    </small>  
                  </span>
                </p>
              </a>
            </li>
            <li class="active-pro">
              <a href="bantuan.html">
                <img src="<?php echo base_url('assets/img/icon/icon-help.svg');?>" class="" alt="icon">
                <p>Bantuan
                </p>
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
