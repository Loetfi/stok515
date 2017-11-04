<body class=" login">
  <div class=""> 
    <div class="">
      <nav class="navbar navbar-default navbar-fixed" style="height: 55px;z-index: 2;">
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
            <a href="<?php echo site_url('auth/login') ?>" class="logoimage">
              <img src="<?php echo base_url('assets/img/icon/logo-blue.svg');?>" class="user-image" alt="User Image" style="width: 150px;">
            </a> 
            <ul class="nav navbar-nav navbar-right">

            </ul>
          </div>
        </div>
      </nav>
    </div>
  </div>
  <!-- BEGIN : LOGIN PAGE 5-1 -->
  <div class="user-login">
    <div class="row bs-reset">
      <div class="col-md-4 col-md-offset-4 login-container p-t-50 mt-login-bsfix">
        <div class="login-content">
          <h1>Lupa Password Anda?
          </h1>
          <p>Kami akan membantumu
          </p>
          <form action="" class="login-form forgot" method="post" novalidate="novalidate"> 
            <div class="row">
              <div class="col-xs-12">
                <input class="m-b-10 form-control form-control-solid placeholder-no-fix form-group" type="text" autocomplete="off" placeholder="Email" name="email" required="" aria-required="true"> 
                <small>Tulis akun email yang anda daftarkan</small>
              </div>
            </div> 
            <div class="row"> 
              <div class="col-sm-12 text-right p-t-40">
                <button class="btn btn-success btn-purple btn-fill btn-lg btn-block" style="background-color: #A341A3;" data-toggle="modal" data-target="#sukses" data-dismiss="modal">Lanjut
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="modal brandmodal fade" id="sukses" tabindex="-1" role="dialog" aria-labelledby="">
    <div class="modal-dialog" role="document" style="width: 28%;">
      <div class="modal-content">
        <div class="modal-header" style="border-bottom: 0px;">
          <a type="button" class="boxclose" data-dismiss="modal">
          </a> 
        </div>
        <div class="modal-body p-t-0" style="padding-left: 50px;padding-right:50px;"> 
          <h4 class="text-center m-b-40 font-thin"> 
            Email Terkirim
          </h4>
          <p class="text-center m-b-40">Kami telah mengirimkan email ke alamat xxx@gmail.com dengan sebuah tautan untuk membantu anda kembali ke akun anda
          </p>
          <div class="form-group">
            <a class="btn btn-info btn-fill btn-block" data-dismiss="modal">OK
            </a>
          </div>
        </div> 
      </div>
    </div>
  </div>

  <script type="text/javascript">
      $(".reveal").on('click',function() {
          var $pwd = $(".pwd");
          if ($pwd.attr('type') === 'password') {
              $pwd.attr('type', 'text');
          } else {
              $pwd.attr('type', 'password');
          }
      });
      function onFinishWizard(){
      //here you can do something, sent the form to server via ajax and show a success message with swal
      swal("Email Terkirim", "Kami telah mengirimkan email ke alamat xxx@gmail.com dengan sebuah tautan untuk membantu anda kembali ke akun anda");
    }
    </script>
