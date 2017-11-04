         <div class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="content-header">
                <h1>
                  My POS
                  <a href="#" class="btn btn-success btn-fill pull-right">Fitur Premium
                  </a>
                </h1>
                <div class="divider-blue">
                </div>
                <ol class="breadcrumb">
                  <li>
                    <a href="#">
                      My POS
                    </a>
                  </li> 
                  <li class="active">Order Baru
                  </li>
                </ol>
              </div>
            </div>
            <div class="card card-posts">
              <div class="header">  
                <div class="row"> 
                  <div class="col-md-3">
                    <p class="category font-16 m-t-10">Order #0001
                    </p>
                  </div>
                  <div class="col-md-9">
                    <form class="form-inline pull-right">
                      <div class="form-group">
                        <label class="sr-only">Search
                        </label>
                        <input type="input" style="width: 220px;" class="form-control bordered" placeholder="&#xf002; Cari Produk/Toko Disini">
                      </div> 
                      <a href="TambahOrderChartPage.html">
                        <img src="<?php echo base_url('assets/img/icon/icon-cart.svg');?>" class="icon-cart" alt="icon">
                        <label id="cart-badge" class="badge bg-red">1</label> 
                      </a> 
                    </form>
                  </div>
                </div>
              </div> 
              <br>
              <div class="content table-responsive table-full-width p-t-0">
                <table class="table">
                  <thead>
                    <tr>
                      <th colspan="3" style="width:33.3%;text-align: center;border-top: 1px solid #e7ecf1;border-right: 1px solid #e7ecf1;">
                        <div class="dropdown dropdown-full">
                          <button class="btn btn-default btn-simple dropdown-toggle" type="button" id="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            <img src="<?php echo base_url('assets/img/icon/icon-kategori.svg');?>" class="icon-kategori" alt="icon">
                          </button>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">  
                            <li>
                              <a href="#" class="pull-left font-bold" style="width: 100%;padding-left: 10px;">Semua Kategori
                                <button class="pull-right btn btn-default btn-simple p-0">
                                  <span class="pe-7s-close-circle color-blue" style="font-size: 20px;float: right;">
                                  </span>
                                </button>
                              </a>
                            </li>
                            <li>
                              <a href="#" class="pull-left" style="width: 100%;">Perawatan & Kecantikan
                                <button class="pull-right btn btn-default btn-simple p-0">
                                  <span class="fa fa-angle-right">
                                  </span>
                                </button>
                              </a>
                            </li>
                            <li>
                              <a href="#" class="pull-left" style="width: 100%;">Fashion Wanita
                                <button class="pull-right btn btn-default btn-simple p-0">
                                  <span class="fa fa-angle-right">
                                  </span>
                                </button>
                              </a>
                            </li>
                            <li>
                              <a href="#" class="pull-left" style="width: 100%;">Fashion Pria
                                <button class="pull-right btn btn-default btn-simple p-0">
                                  <span class="fa fa-angle-right">
                                  </span>
                                </button>
                              </a>
                            </li>
                            <li>
                              <a href="#" class="pull-left" style="width: 100%;">Handphone
                                <button class="pull-right btn btn-default btn-simple p-0">
                                  <span class="fa fa-angle-right">
                                  </span>
                                </button>
                              </a>
                            </li>
                            <li>
                              <a href="#" class="pull-left" style="width: 100%;">Komputer
                                <button class="pull-right btn btn-default btn-simple p-0">
                                  <span class="fa fa-angle-right">
                                  </span>
                                </button>
                              </a>
                            </li>
                            <li>
                              <a href="#" class="pull-left" style="width: 100%;">Elektronik
                                <button class="pull-right btn btn-default btn-simple p-0">
                                  <span class="fa fa-angle-right">
                                  </span>
                                </button>
                              </a>
                            </li>
                            <li>
                              <a href="#" class="pull-left" style="width: 100%;">Kamera
                                <button class="pull-right btn btn-default btn-simple p-0">
                                  <span class="fa fa-angle-right">
                                  </span>
                                </button>
                              </a>
                            </li>
                            <li>
                              <a href="#" class="pull-left" style="width: 100%;">Hobi & Koleksi
                                <button class="pull-right btn btn-default btn-simple p-0">
                                  <span class="fa fa-angle-right">
                                  </span>
                                </button>
                              </a>
                            </li>
                            <li>
                              <a href="#" class="pull-left" style="width: 100%;">Olahraga
                                <button class="pull-right btn btn-default btn-simple p-0">
                                  <span class="fa fa-angle-right">
                                  </span>
                                </button>
                              </a>
                            </li>
                          </ul>
                        </div>
                      </th>
                      <th colspan="3" style="width:33.3%;text-align: center;border-top: 1px solid #e7ecf1;border-right: 1px solid #e7ecf1;">
                        <button class="btn btn-default btn-simple p-0" data-toggle="modal" data-target="#filterProduk">
                          <img src="<?php echo base_url('assets/img/icon/icon-filter.svg');?>" class="icon-filter" alt="icon">
                        </button>
                      </th>
                      <th colspan="3" style="width:33.3%;text-align: center;border-top: 1px solid #e7ecf1;">
                        <div class="dropdown dropdown-full">
                          <button class="btn btn-default btn-simple dropdown-toggle" type="button" id="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            <img src="<?php echo base_url('assets/img/icon/icon-sort.svg');?>" class="icon-kategori" alt="icon">
                          </button>
                          <ul class="dropdown-menu dropdown-filter" aria-labelledby="dropdownMenu1"> 
                            <li>
                              <a class="" href="#">Relevansi
                              </a>
                            </li>
                            <li>
                              <a class="" href="#">Terlaku
                              </a>
                            </li>
                            <li>
                              <a class="" href="#">Terbaru
                              </a>
                            </li>
                            <li>
                              <a class="" href="#">Termurah
                              </a>
                            </li>
                            <li>
                              <a class="" href="#">Termahal
                              </a>
                            </li>
                          </ul>
                        </div>
                      </th>
                    </tr>
                    <tr>
                      <th>
                      </th> 
                      <th>Nama Produk
                      </th>
                      <th>No. SKU
                      </th>
                      <th>Kategori
                      </th>
                      <th>Stok
                      </th>
                      <th>Deskripsi
                      </th>
                      <th>Harga Beli
                      </th> 
                      <th>
                      </th>
                    </tr>
                  </thead>
                  <tbody class="text-center">
                    <tr> 
                      <td>
                        <img src="<?php echo base_url('assets/img/user.jpg');?>"/>
                      </td>
                      <td>ZARA - Jaket Kam...
                      </td>
                      <td>SKU XXX-01-FF...
                      </td>
                      <td>Fashion Pria
                      </td>
                      <td>46
                      </td>
                      <td>Ukuran: XL...
                      </td>
                      <td>IDR 600.000
                      </td>    
                      <td class="td-actions text-right">
                        <button type="button" class="btn btn-info btn-fill" data-toggle="modal" data-target="#tambahkeranjang">Tambah Ke Keranjang 
                        </button>  
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
    <div class="modal brandmodal fade" id="filterProduk" tabindex="-1" role="dialog" aria-labelledby="">
      <div class="modal-dialog modal-lg text-left" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <a type="button" class="boxclose" data-dismiss="modal">
            </a>
            <div class="row">
              <div  class=""> 
                <div class="col-xs-3 no-pr-pl">
                  <!-- required for floating -->
                  <!-- Nav tabs -->
                  <ul class="nav nav-tabs tabs-left">
                    <li class="active">
                      <a href="#toko" data-toggle="tab" style="border-top:0px;">TOKO
                      </a>
                    </li>
                    <li>
                      <a href="#batasan" data-toggle="tab">BATASAN HARGA
                      </a>
                    </li>
                    <li>
                      <a href="#brand" data-toggle="tab">BRAND
                      </a>
                    </li>
                    <li>
                      <a href="#warna" data-toggle="tab">WARNA
                      </a>
                    </li>
                    <li>
                      <a href="#ukuran" data-toggle="tab">UKURAN
                      </a>
                    </li>
                    <li>
                      <a href="#" data-toggle="tab">
                      </a>
                    </li>
                    <li>
                      <a href="#" data-toggle="tab">
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="col-xs-9 no-pr-pl">
                  <!-- Tab panes -->
                  <div class="tab-content" style="margin-top: -15px;">
                    <div class="tab-pane p-10 active" id="toko">
                      <div class="table-responsive">
                        <table class="table">
                          <tbody>
                            <tr> 
                              <td class="p-10 p-t-15 p-b-15" style="border-top:0px;">
                                Semua Toko 
                              </td>     
                              <td class="p-10" style="border-top:0px;"> 
                                <label class="radio pull-right"> 
                                  <span class="icons">
                                    <span class="first-icon fa fa-circle-o">
                                    </span>
                                    <span class="second-icon fa fa-dot-circle-o">
                                    </span>
                                  </span>
                                  <input type="radio" data-toggle="radio" name="optionsRadios" value="option1"> 
                                </label>
                              </td>
                            </tr>
                            <tr> 
                              <td class="p-10 p-t-15 p-b-15">
                                XYZ Mega Store 
                              </td>   
                              <td class="p-10"> 
                                <label class="radio pull-right"> 
                                  <span class="icons">
                                    <span class="first-icon fa fa-circle-o">
                                    </span>
                                    <span class="second-icon fa fa-dot-circle-o">
                                    </span>
                                  </span>
                                  <input type="radio" data-toggle="radio" name="optionsRadios" value="option1"> 
                                </label>
                              </td>
                            </tr>
                            <tr> 
                              <td class="p-10">
                                XYZ Mini Store 
                              </td>   
                              <td class="p-10"> 
                                <label class="radio pull-right"> 
                                  <span class="icons">
                                    <span class="first-icon fa fa-circle-o">
                                    </span>
                                    <span class="second-icon fa fa-dot-circle-o">
                                    </span>
                                  </span>
                                  <input type="radio" data-toggle="radio" name="optionsRadios" value="option1"> 
                                </label>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <div class="tab-pane p-10" style="margin-top: 5px;" id="batasan">
                      <div class="slide">
                        <div id="slider" class="noUi-target noUi-ltr noUi-horizontal">
                           
                        </div> 
                            <div class="row pull-left">
                              <div class="col-md-12">
                                <div class="input-append">
                                  <input class="text-center" type="number" min="0" max="99999" step="1" id="input-number1">
                                </div> 
                                <label class="font-thin text-center">Dari</label> 
                              </div>
                           </div> 
                           <div class="row pull-right">
                              <div class="col-md-12">
                                <div class="input-append">
                                  <input class="text-center" type="number" min="0" max="99999" step="1" id="input-number">  
                                </div> 
                                <label class="font-thin text-center">Sampai</label> 
                              </div>
                           </div>  
                        <script>
                          var htmlSlider = document.getElementById('slider');
                          noUiSlider.create(htmlSlider, {
                            start: [ 100000, 999000 ],
                            connect: true,
                            range: {
                              'min': 0,
                              'max': 1200000
                            }
                          }
                                           );
                        </script>     
                        <script>
                          var inputNumber1 = document.getElementById('input-number1');
                          var inputNumber = document.getElementById('input-number');

                          htmlSlider.noUiSlider.on('update', function( values, handle ) {

                            var value = values[handle];

                            if ( handle ) {
                              inputNumber.value = Math.round(value);
                            } else {
                              inputNumber1.value = Math.round(value);
                            }
                          });

                          inputNumber1.addEventListener('change', function(){
                            htmlSlider.noUiSlider.set([this.value, null]);
                          });

                          inputNumber.addEventListener('change', function(){
                            htmlSlider.noUiSlider.set([null, this.value]);
                          });
                        </script> 
                      </div>

                    </div>
                    <div class="tab-pane p-10" style="margin-top: 5px;" id="brand">
                      <div class="table-responsive">
                        <table class="table">
                          <tbody>
                            <tr> 
                              <td class="p-10 p-t-15 p-b-15" style="border-top:0px;">
                                Semua Merk 
                              </td>   
                              <td class="p-10" style="border-top:0px;"> 
                                <div class="checkbox checkbox-info pull-right">
                                  <input id="checkbox1" type="checkbox" checked="">
                                  <label for="checkbox1"> 
                                  </label>
                                </div> 
                              </td>
                            </tr>
                            <tr> 
                              <td class="p-10 p-t-15 p-b-15">
                                Merk A 
                              </td>   
                              <td class="p-10" > 
                                <div class="checkbox checkbox-info pull-right">
                                  <input id="checkbox2" type="checkbox">
                                  <label for="checkbox2"> 
                                  </label>
                                </div> 
                              </td>
                            </tr>
                            <tr> 
                              <td class="p-10 p-t-15 p-b-15">
                                Merk B 
                              </td>   
                              <td class="p-10"> 
                                <div class="checkbox checkbox-info pull-right">
                                  <input id="checkbox3" type="checkbox">
                                  <label for="checkbox3"> 
                                  </label>
                                </div> 
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <div class="tab-pane p-10" style="margin-top: 5px;" id="warna">
                      <div class="table-responsive">
                        <table class="table">
                          <tbody>
                            <tr> 
                              <td class="p-10 p-t-15 p-b-15" style="border-top:0px;">
                                Semua Warna 
                              </td>   
                              <td class="p-10" style="border-top:0px;"> 
                                <div class="checkbox checkbox-info pull-right">
                                  <input id="checkbox1" type="checkbox" checked="">
                                  <label for="checkbox1"> 
                                  </label>
                                </div> 
                              </td>
                            </tr>
                            <tr> 
                              <td class="p-10 p-t-15 p-b-15">
                                Hitam 
                              </td>   
                              <td class="p-10" > 
                                <div class="checkbox checkbox-info pull-right">
                                  <input id="checkbox2" type="checkbox">
                                  <label for="checkbox2"> 
                                  </label>
                                </div> 
                              </td>
                            </tr>
                            <tr> 
                              <td class="p-10 p-t-15 p-b-15">
                                Merah 
                              </td>   
                              <td class="p-10"> 
                                <div class="checkbox checkbox-info pull-right">
                                  <input id="checkbox3" type="checkbox">
                                  <label for="checkbox3"> 
                                  </label>
                                </div> 
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <div class="tab-pane p-10" style="margin-top: 5px;" id="ukuran">
                      <div class="table-responsive">
                        <table class="table">
                          <tbody>
                            <tr> 
                              <td class="p-10 p-t-15 p-b-15" style="border-top:0px;">
                                Semua Ukuran 
                              </td>   
                              <td class="p-10" style="border-top:0px;"> 
                                <div class="checkbox checkbox-info pull-right">
                                  <input id="checkbox1" type="checkbox" checked="">
                                  <label for="checkbox1"> 
                                  </label>
                                </div> 
                              </td>
                            </tr>
                            <tr> 
                              <td class="p-10 p-t-15 p-b-15">
                                128 GB 
                              </td>   
                              <td class="p-10" > 
                                <div class="checkbox checkbox-info pull-right">
                                  <input id="checkbox2" type="checkbox">
                                  <label for="checkbox2"> 
                                  </label>
                                </div> 
                              </td>
                            </tr>
                            <tr> 
                              <td class="p-10 p-t-15 p-b-15">
                                64 GB 
                              </td>   
                              <td class="p-10"> 
                                <div class="checkbox checkbox-info pull-right">
                                  <input id="checkbox3" type="checkbox">
                                  <label for="checkbox3"> 
                                  </label>
                                </div> 
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="clearfix">
                </div>
              </div>
            </div> 
          </div> 
          <div class="modal-footer text-center">   
            <button type="button" class="btn btn-primary" data-dismiss="modal" style="margin-right: 50px;">Reset
            </button>
            <button class="btn btn-primary btn-fill" onclick="()">Filter
            </button>
          </div>
        </div>
      </div>
    </div>
    <div class="modal brandmodal fade" id="tambahkeranjang" tabindex="-1" role="dialog" aria-labelledby="">
      <div class="modal-dialog modal-lg text-left" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <a type="button" class="boxclose" data-dismiss="modal">
            </a>
          </div>
          <div class="modal-body">
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
                </div>
              </div>
              <div class="col-md-6">
                <div class="card no-shadow"> 
                  <div class="content"> 
                    <div class="row">
                      <div class="col-md-12">
                        <div class="row">
                          <div class="col-md-6 col-sm-6">
                            <div class="" style="width: 150px">
                              <div class="input-group"> 
                                <span class="input-group-btn"> 
                                  <button style="border:0;" type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
                                    <img src="<?php echo base_url('assets/img/icon/icon-minus_qty.svg');?>" width="20" alt="icon">
                                  </button>
                                </span>
                                <input type="text" name="quant[1]" class="input_qty form-control text-center input-number" value="1" min="0" max="999">
                                <span class="input-group-btn">
                                  <button style="border:0;" type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[1]">
                                    <img src="<?php echo base_url('assets/img/icon/icon-plus_qty.svg');?>" width="20" alt="icon">
                                  </button>
                                </span>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6 col-sm-6 text-right">
                            <p class="font-16 m-t-10 font-bold">IDR 600.000
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div> 
          </div>
          <div class="form-group m-b-30 text-center"> 
            <a href="<?php echo site_url('pos/order/tambahordercartpage') ?>" class="btn btn-primary btn-fill">
              Tambah Ke Keranjang
            </a>
          </div>
        </div>
      </div>
    </div>
  </body>

  <script type="text/javascript">
    $('.btn-number').click(function(e){
      e.preventDefault();
      fieldName = $(this).attr('data-field');
      type      = $(this).attr('data-type');
      var input = $("input[name='"+fieldName+"']");
      var currentVal = parseInt(input.val());
      if (!isNaN(currentVal)) {
        if(type == 'minus') {
          if(currentVal > input.attr('min')) {
            input.val(currentVal - 1).change();
          }
          if(parseInt(input.val()) == input.attr('min')) {
            $(this).attr('disabled', true);
          }
        }
        else if(type == 'plus') {
          if(currentVal < input.attr('max')) {
            input.val(currentVal + 1).change();
          }
          if(parseInt(input.val()) == input.attr('max')) {
            $(this).attr('disabled', true);
          }
        }
      }
      else {
        input.val(0);
      }
    }
                          );
    $('.input-number').focusin(function(){
      $(this).data('oldValue', $(this).val());
    }
                              );
    $('.input-number').change(function() {
      minValue =  parseInt($(this).attr('min'));
      maxValue =  parseInt($(this).attr('max'));
      valueCurrent = parseInt($(this).val());
      name = $(this).attr('name');
      if(valueCurrent >= minValue) {
        $(".btn-number[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
      }
      else {
        alert('Sorry, the minimum value was reached');
        $(this).val($(this).data('oldValue'));
      }
      if(valueCurrent <= maxValue) {
        $(".btn-number[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
      }
      else {
        alert('Sorry, the maximum value was reached');
        $(this).val($(this).data('oldValue'));
      }
    }
                             );
    $(".input-number").keydown(function (e) {
      // Allow: backspace, delete, tab, escape, enter and .
      if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
          // Allow: Ctrl+A
          (e.keyCode == 65 && e.ctrlKey === true) || 
          // Allow: home, end, left, right
          (e.keyCode >= 35 && e.keyCode <= 39)) {
        // let it happen, don't do anything
        return;
      }
      // Ensure that it is a number and stop the keypress
      if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
        e.preventDefault();
      }
    }
                              );
  </script>
