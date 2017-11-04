<body class=" login">
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
            <a href="<?php echo site_url() ?>" class="logoimage">
                <img src="<?php echo base_url('assets/img/icon/logo-blue.svg');?>" class="user-image" alt="User Image" style="width: 150px;">
              </a> 
              <ul class="nav navbar-nav navbar-right">
                 
              </ul>
            </div>
          </div>
        </nav>
    <!-- BEGIN : LOGIN PAGE 5-1 -->
    <div class="user-login">
      <div class="row bs-reset">
        <div class="col-md-4 col-md-offset-4 login-container p-t-50 mt-login-bsfix">
          <div class="login-content">
            <h1>Masukkan kata sandi baru
            </h1> 
            <form action="<?php echo site_url() ?>" class="login-form forgot" method="post" novalidate="novalidate"> 
              <div class="row">
                <div class="col-xs-12">
                <div class="input-group">
                      <input type="password" placeholder="Kata Sandi Baru" class="form-control pwd" value="" required>
                       <span class="input-group-btn" style="border-bottom: 1px solid  #a0a9b4"> 
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
                <div class="col-sm-12 text-right p-t-40">
                  <button class="btn btn-success btn-fill btn-lg btn-block" type="submit" type="submit" data-toggle="modal" data-target="#sukses" data-dismiss="modal">Ganti
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
  </body>
