  <body>
    <div class="wrapper">
      <div class="sidebar" data-color="white">
        <div class="logo">
          <a href="dashboard.html" class="logo-text">
           <img src="<?php echo base_url('assets/img/icon/logo-blue.svg');?>" class="user-image" alt="User Image">
          </a>
        </div> 
        <div class="sidebar-wrapper"> 
          <ul class="nav">
            <li class="">
              <a href="dashboard.html">
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
                    <a href="aturtoko.html">
                      <img src="<?php echo base_url('assets/img/icon/icon-toko-nonaktif.svg');?>" class="" alt="icon">
                      <p>Atur Toko
                      </p>
                    </a>
                  </li>
                  <li>
                    <a href="aturtim.html">
                      <img src="<?php echo base_url('assets/img/icon/icon-tim_nonaktif.svg');?>" class="" alt="icon">
                      <p>Atur Tim
                      </p>
                    </a>
                  </li>
                  <li class="">
                    <a href="aturproduk.html">
                      <img src="<?php echo base_url('assets/img/icon/icon-produk_nonaktif.svg');?>" class="" alt="icon">
                      <p>Atur Produk
                      </p>
                    </a>
                  </li>
                  <li class="">
                    <a href="pengaturanpos.html">
                      <img src="<?php echo base_url('assets/img/icon/icon-settingPOS_nonaktif.svg');?>" class="" alt="icon">
                      <p>Pengaturan POS
                      </p>
                    </a>
                  </li>
                  <li class="active">
                    <a href="editprofil.html">
                       <img src="<?php echo base_url('assets/img/icon/icon-editakun_aktif.svg');?>" class="" alt="icon">
                      <p class="color-black">Edit Profile Akun
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
                  <li class="active">Edit Profil Akun
                  </li>
                </ol>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="header">
                    <h4 class="title color-grey-light">Informasi Akun Anda
                    </h4> 
                  </div>
                  <br>
                  <form id="" action="#" method="" novalidate="">
                    <div class="row">
                      <div class="col-md-4 col-md-offset-4">
                        <div class="text-center bg-form">
                          <div class="img-section">
                            <img src="<?php echo base_url('assets/img/blank.jpg');?>" class="imgCircle img-circle fp-toko" alt="Profile picture">
                            <span class="fake-icon-edit" id="PicUpload" style="color: #000;">
                              <img src="<?php echo base_url('assets/img/icon/plus-upload_img.svg');?>" class="icon-add-image" alt="Profile picture">
                            </span>
                            <div class="col-lg-12"> 
                              <input type="checkbox" class="form-control" id="checker">
                            </div>
                          </div>
                          <input type="file" id="image-input" onchange="readURL(this);" accept="image/*"  class="form-control form-input Profile-input-file" >
                        </div>
                      </div>
                    </div>
                    <br>
                    <div class="row">
                      <div class="col-md-2 col-md-offset-4">
                        <div class="form-group"> 
                          <input class="form-control" type="text" value="" name="" placeholder="Nama Depan" required="true">
                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="form-group"> 
                          <input class="form-control" type="text" value="" name="" placeholder="Nama Belakang" required="true">
                        </div>
                      </div>
                    </div> 
                    <div class="row"> 
                      <div class="col-md-4 col-md-offset-4">
                        <div class="form-group">
                          <input class="form-control" type="text" value="" name="" required="true" placeholder="Nomor Telepon">
                        </div>
                      </div> 
                    </div>
                    <div class="row"> 
                      <div class="col-md-4 col-md-offset-4">
                        <div class="form-group">
                          <input class="form-control" type="text" value="" name="" required="true" placeholder="Email">
                        </div>
                      </div> 
                    </div> 
                    <div class="row"> 
                      <div class="col-md-4 col-md-offset-4">
                           <div class="input-group" style="width:100%;">
                              <input type="password" placeholder="Kata Sandi" class="form-control pwd" value="" required>
                               <span class="input-group-btn" style="border-bottom: 1px solid  #a0a9b4"> 
                                <a href="#" class="icon-pass reveal pass" style="left: 5px;background-color: transparent;">
                                  <img src="<?php echo base_url('assets/img/icon/icon-hide_passwd.svg');?>" style="width: 20px !important;" id="fa-eye" alt="User Image">
                                  <img src="<?php echo base_url('assets/img/icon/icon-viewpasswd.svg');?>" style="width: 20px !important;display: none;" id="fa-eye-slash" alt="User Image">
                                </a>  
                              </span>        
                            </div>
                          </div>
                    </div>
                    <div class="row"> 
                      <div class="col-md-4 col-md-offset-4">
                        <div class="input-group" style="width:100%;">
                          <input type="password" placeholder="Ulangi Kata Sandi" class="form-control pwd2" value="" required>
                          <span class="input-group-btn" style="border-bottom: 1px solid  #a0a9b4"> 
                            <a href="#" class="icon-pass reveal2 pass" style="left: 5px;background-color: transparent;">
                              <img src="<?php echo base_url('assets/img/icon/icon-hide_passwd.svg');?>" style="width: 20px !important;" id="fa-eye2" alt="User Image">
                              <img src="<?php echo base_url('assets/img/icon/icon-viewpasswd.svg');?>" style="width: 20px !important;display: none;" id="fa-eye-slash2" alt="User Image">
                            </a>
                          </span>          
                        </div>
                      </div>
                    </div>
                    <br>
                    <div class="row">
                      <div class="col-md-4 col-md-offset-4">
                        <div class="footer">
                          <a href="#" class="btn btn-success btn-fill btn-wd btn-next btn-block" data-toggle="modal" data-target="#sukses" data-dismiss="modal">Simpan</a>  
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
    <div class="modal brandmodal fade" id="sukses" tabindex="-1" role="dialog" aria-labelledby="">
      <div class="modal-dialog" role="document" style="width: 28%;">
        <div class="modal-content">
          <div class="modal-header">
            <a type="button" class="boxclose" data-dismiss="modal">
            </a> 
          </div>
          <div class="modal-body p-t-0" style="padding-left: 70px;padding-right:70px;"> 
            <h4 class="text-center m-b-40 font-thin"> 
              Sukses
            </h4>
            <p class="text-center m-b-40">Anda sukses memperbaharui profil Anda
            </p>
            <div class="form-group">
              <a href="editprofil.html" class="btn btn-info btn-fill btn-block">OK
              </a>
            </div>
          </div> 
        </div>
      </div>
    </div>  
  </body>


<script type="text/javascript">
    function onFinish(){
      //here you can do something, sent the form to server via ajax and show a success message with swal
      swal("Sukses", "Anda sukses memperbarui profil Anda", "success");
    }
  </script> 
  <script>
    $('input[id=base-input]').change(function() {
      $('#fake-input').val($(this).val().replace("C:\\fakepath\\", ""));
    }
                                    );
    <!--==================Javascript code for custom input type file on button ================-->
      $('input[id=main-input]').change(function() {
        console.log($(this).val());
        var mainValue = $(this).val();
        if(mainValue == ""){
          document.getElementById("fake-btn").innerHTML = "Choose File";
        }
        else{
          document.getElementById("fake-btn").innerHTML = mainValue.replace("C:\\fakepath\\", "");
        }
      }
                                      );
    <!--=========================input type file change on button ends here====================-->
      //    ===================== snippet for profile picture change ============================ //
      function readURL(input) {
        if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function (e) {
            $('.imgCircle')
              .attr('src', e.target.result)
              .width(114)
              .height(114);
          };
          reader.readAsDataURL(input.files[0]);
        }
      }
    //    =================================== ends here ============================================ //
  </script>
 <script type="text/javascript">
        $(".reveal").on('click',function() {
            var x = document.getElementById("fa-eye-slash");
            var y = document.getElementById("fa-eye");
            if (x.style.display === "none") {
                x.style.display = "block";
                y.style.display = "none";
            } else {
                x.style.display = "none";
                y.style.display = "block";
            }
          var input = $($(this).attr("toggle"));
            var $pwd = $(".pwd");
            if ($pwd.attr('type') === 'password') {
                $pwd.attr('type', 'text');
            } else {
                $pwd.attr('type', 'password');
            }
        });
    </script>
    <script type="text/javascript">
        $(".reveal2").on('click',function() {
            var x = document.getElementById("fa-eye-slash2");
            var y = document.getElementById("fa-eye2");
            if (x.style.display === "none") {
                x.style.display = "block";
                y.style.display = "none";
            } else {
                x.style.display = "none";
                y.style.display = "block";
            }
          var input = $($(this).attr("toggle"));
            var $pwd = $(".pwd2");
            if ($pwd.attr('type') === 'password') {
                $pwd.attr('type', 'text');
            } else {
                $pwd.attr('type', 'password');
            }
        });
    </script>
