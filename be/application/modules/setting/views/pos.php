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
                <li class="active">Pengaturan POS
                </li>
              </ol>
            </div>
          </div>
          <div class="card card-posts">
            <div class="header p-b-15"> 
              <p class="category color-grey-light">POS Printer
              </p>
            </div> 
            <div class="table-responsive">
              <table class="table"> 
                <tbody>
                  <tr> 
                    <td style="border-top:0px;">
                      Printer Nota
                      <p class="color-grey font-12 m-0">Aktifkan Printer
                      </p>
                    </td>   
                    <td class="text-right" style="border-top:0px;"> 
                      <div class="material-switch pull-right">
                        <input id="someSwitchOptionInfo" name="someSwitchOption001" type="checkbox"/>
                        <label for="someSwitchOptionInfo" class="label-info">
                        </label>
                      </div>
                    </td>
                  </tr>
                  <tr> 
                    <td>
                      Koneksi Printer Nota
                      <p class="color-grey font-12 m-0">Tidak Terkoneksi
                      </p>
                    </td>   
                    <td class="td-actions text-right"> 
                      <a class="btn btn-default btn-simple" href="#" data-toggle="modal" data-target="#aktifPrinter">
                        <b class="pe-7s-angle-down icon-down-pos">
                        </b>
                      </a> 
                    </td>
                  </tr>
                  <tr> 
                    <td style="border-bottom:1px solid #e7ecf1;">
                      Salinan Nota
                      <p class="color-grey font-12 m-0">2 Salin
                      </p>
                    </td>   
                    <td class="td-actions text-right" style="border-bottom:1px solid #e7ecf1;"> 
                      <a class="btn btn-default btn-simple" href="#" data-toggle="modal" data-target="#salinNota">
                        <b class="pe-7s-angle-down icon-down-pos">
                        </b>
                      </a> 
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="modal brandmodal fade" id="aktifPrinter" tabindex="-1" role="dialog" aria-labelledby="">
    <div class="modal-dialog text-left modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <a type="button" class="boxclose" data-dismiss="modal">
          </a>
          <h4 class="modal-title font-bold text-left">
            Tersambung dengan
          </h4>
        </div>
        <div class="modal-body">
          <div class="table-full-width">
            <table class="table">
              <tbody>
                <tr>
                  <td class="p-t-10 p-b-10">
                    <label class="radio checked" style="float: left;width: 110px;padding: 0px 30px;">
                      <span class="icons">
                        <span class="first-icon fa fa-circle-o">
                        </span>
                        <span class="second-icon fa fa-dot-circle-o">
                        </span>
                      </span>
                      <input type="radio" data-toggle="radio" name="optionsRadios" value="option1">Bluetooth
                    </label>
                  </td> 
                </tr>
                <tr>
                  <td class="p-t-10 p-b-10">
                    <label class="radio" style="float: left;width: 110px;padding: 0px 30px;">
                      <span class="icons">
                        <span class="first-icon fa fa-circle-o">
                        </span>
                        <span class="second-icon fa fa-dot-circle-o">
                        </span>
                      </span>
                      <input type="radio" data-toggle="radio" name="optionsRadios" value="option2">Epson/Star
                    </label>
                  </td> 
                </tr> 
              </tbody>
            </table>
          </div>
          <div class="form-group text-center">
            <button id="signupSubmit" type="submit" class="btn btn-info btn-fill btn-block" data-dismiss="modal">OK
            </button>
          </div>
        </div> 
      </div>
    </div>
  </div>
  <div class="modal brandmodal fade" id="salinNota" tabindex="-1" role="dialog" aria-labelledby="">
    <div class="modal-dialog text-left modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <a type="button" class="boxclose" data-dismiss="modal">
          </a>
          <h4 class="modal-title font-bold text-left">
            Salin Nota
          </h4>
        </div>
        <div class="modal-body">
          <div class="table-full-width">
            <table class="table">
              <tbody>
                <tr>
                  <td class="p-t-10 p-b-10">
                    <label class="radio" style="float: left;width: 110px;padding: 0px 30px;">
                      <span class="icons">
                        <span class="first-icon fa fa-circle-o">
                        </span>
                        <span class="second-icon fa fa-dot-circle-o">
                        </span>
                      </span>
                      <input type="radio" data-toggle="radio" name="optionsRadios" value="option1">Tidak
                    </label>
                  </td> 
                </tr>
                <tr>
                  <td class="p-t-10 p-b-10">
                    <label class="radio" style="float: left;width: 110px;padding: 0px 30px;">
                      <span class="icons">
                        <span class="first-icon fa fa-circle-o">
                        </span>
                        <span class="second-icon fa fa-dot-circle-o">
                        </span>
                      </span>
                      <input type="radio" data-toggle="radio" name="optionsRadios" value="option2">1 Salin
                    </label>
                  </td> 
                </tr>
                <tr>
                  <td class="p-t-10 p-b-10">
                    <label class="radio" style="float: left;width: 110px;padding: 0px 30px;">
                      <span class="icons">
                        <span class="first-icon fa fa-circle-o">
                        </span>
                        <span class="second-icon fa fa-dot-circle-o">
                        </span>
                      </span>
                      <input type="radio" data-toggle="radio" name="optionsRadios" value="option3">2 Salin
                    </label>
                  </td> 
                </tr> 
              </tbody>
            </table>
          </div> 
          <div class="form-group text-center">
            <button id="signupSubmit" type="submit" class="btn btn-info btn-fill btn-block" data-dismiss="modal">OK
            </button>
          </div>
        </div> 
      </div>
    </div>
  </div>
</body>
