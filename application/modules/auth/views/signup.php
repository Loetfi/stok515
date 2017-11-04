<body class=" login">
  <!-- BEGIN : LOGIN PAGE 5-1 -->
  <div class="user-login">
    <div class="row bs-reset">
      <div class="col-md-8 bs-reset mt-login-bsfix">
        <div class="login-bg" style="background-color: #63ADD7;">
          <div class="center">
            <img class="logo-white" src="<?php echo base_url('assets/img/icon/logo-white.svg');?>" style="margin-top:23px;" alt="icon">
            <img class="bg-landingpage" src="<?php echo base_url('assets/img/icon/bg-landingpage.svg');?>" alt="icon">
          </div>
        </div>
      </div>
      <div class="col-md-4 login-container bs-reset mt-login-bsfix">
        <div class="login-content" style="margin-top:20%;">
          <h1>Mulai Atur Jualanmu
          </h1>
          <p> Kami akan membantumu 
          </p>
          <form action="dashboard.html" class="login-form" method="post"> 
            <div class="row">
              <div class="col-xs-6">
                <input class="form-control form-control-solid placeholder-no-fix form-group" type="text" autocomplete="off" placeholder="Nama Depan" name="NamaDepan" required/> 
              </div>
              <div class="col-xs-6">
                <input class="form-control form-control-solid placeholder-no-fix form-group" type="text" autocomplete="off" placeholder="Nama Belakang" name="NamaBelakang" required/> 
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12">
                <input class="form-control form-control-solid placeholder-no-fix form-group" type="text" autocomplete="off" placeholder="Nomor Telepon" name="NomorTelepon" required/> 
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12">
                <input class="form-control form-control-solid placeholder-no-fix form-group" type="text" autocomplete="off" placeholder="Email" name="NomorTelepon" required/> 
              </div>
            </div>
            <div class="row"> 
              <div class="col-xs-12">
                <div class="input-group">
                  <input type="password" placeholder="Kata Sandi" class="form-control pwd" value="" required>
                  <span class="input-group-btn"  style="border-bottom: 1px solid  #a0a9b4">
                   <a href="#" class="icon-pass reveal">
                    <img src="<?php echo base_url('assets/img/icon/icon-hide_passwd.svg');?>" style="width: 20px !important;" id="fa-eye" alt="User Image">
                    <img src="<?php echo base_url('assets/img/icon/icon-viewpasswd.svg');?>" style="width: 20px !important;display: none;" id="fa-eye-slash" alt="User Image">
                  </a> 
                </span>          
              </div> 
            </div>
          </div>
          <div class="row"> 
            <div class="col-xs-12">
              <div class="input-group">
                <input type="password" placeholder="Kata Sandi" class="form-control pwd2" value="" required>
                <span class="input-group-btn" style="border-bottom: 1px solid  #a0a9b4">
                  <a href="#" class="icon-pass reveal2">
                    <img src="<?php echo base_url('assets/img/icon/icon-hide_passwd.svg');?>" style="width: 20px !important;" id="fa-eye2" alt="User Image">
                    <img src="<?php echo base_url('assets/img/icon/icon-viewpasswd.svg');?>" style="width: 20px !important;display: none;" id="fa-eye-slash2" alt="User Image">
                  </a>
                </span>          
              </div>
            </div>
          </div>
          <div class="row">
            <div class="text-center font-11" style="margin-bottom: 10px; margin-top: 30px;">
              atau daftar dengan akun sosial media
            </div>
            <div class="text-center" style="margin-bottom: 10px;">
              <a href=""><img class="" src="<?php echo base_url('assets/img/social/fb.png');?>"></a>
              <a href=""><img class="" src="<?php echo base_url('assets/img/social/twitter.png');?>"></a>
              <a href=""><img class="" src="<?php echo base_url('assets/img/social/google.png');?>"></a>
              <a href=""><img class="" src="<?php echo base_url('assets/img/social/instagram.png');?>"></a>
              <a href=""><img class="" src="<?php echo base_url('assets/img/social/yahoo.png');?>"></a>
            </div>

            <div class="col-sm-12 text-right">
              <button class="btn btn-danger btn-fill btn-lg btn-block" type="submit" onclick="onFinishWizard()">Buat Akun
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

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
