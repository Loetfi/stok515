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
          <div class="card">
            <div class="header p-0">
              <p class="notif">Transaksi</p>
              <div class="author">
                <img src="<?php echo base_url('assets/img/icon/icon-notif_POS.svg');?>" class="avatar-produk" style="width: 40px;margin-left: 10px;" alt="icon">
              </div>
              <h4 class="title font-bold font-20">INV.001.001.XX
              </h4>
              <small>
                <img class="social" src="<?php echo base_url('assets/img/icon/icon-ig.svg');?>"> Instagram
              </small>
              <p class="category">Apple iPhone 7 Plus 128GB Matte Black
              </p> 
            </div>
            <div class="header p-0">
              <p class="notif">Toko</p>
              <div class="author">
                <img src="<?php echo base_url('assets/img/icon/icon-notif_toko.svg');?>" style="width: 40px;margin-left: 10px;" class="avatar-produk" alt="icon">
              </div>
              <h4 class="title font-bold font-20">Toko Berhasil Dibuat
              </h4> 
              <small>

              </small>
              <p class="category">One+ Cellular
              </p> 
            </div>
            <div class="header p-0">
              <p class="notif">Produk</p>
              <div class="author">
                <img src="<?php echo base_url('assets/img/icon/icon-notif_produk.svg');?>" style="width: 40px;margin-left: 10px;" class="avatar-produk" alt="icon">
              </div>
              <h4 class="title font-bold font-20">Produk Berhasil Diunggah
              </h4>
              <small>
                <img class="social" src="<?php echo base_url('assets/img/icon/logo-bl.svg');?>"> Bukalapak
              </small>
              <p class="category">Apple iPhone 7 Plus 128GB Matte Black
              </p> 
            </div> 
            <div class="header p-0">
              <p class="notif">XYZ Mega Store</p>
              <div class="author">
                <img src="<?php echo base_url('assets/img/icon/icon-notif_POS.svg');?>" style="width: 40px;margin-left: 10px;" class="avatar-produk" alt="icon">  
              </div>
              <h4 class="title font-bold font-20">Produk Berhasil Diunggah
              </h4>
              <small>
                <img class="social" src="<?php echo base_url('assets/img/icon/logo-bl.svg');?>"> Bukalapak
              </small>
              <p class="category">Apple iPhone 7 Plus 128GB Matte Black
              </p> 
            </div>
            <div class="header p-0">
              <p class="notif">Transaksi</p>
              <div class="author">
                <img src="<?php echo base_url('assets/img/icon/icon-notif_POS.svg');?>" style="width: 40px;margin-left: 10px;" class="avatar-produk" alt="icon">
              </div>
              <h4 class="title font-bold font-20">INV.001.001.XX
              </h4>
              <small>
                <img class="social" src="<?php echo base_url('assets/img/icon/icon-ig.svg');?>"> Instagram
              </small>
              <p class="category">Apple iPhone 7 Plus 128GB Matte Black
              </p> 
            </div>
            <div class="row">
              <div class="col-md-12">
                <ul class="pagination pull-right">
                  <li>
                    <a href="#">«
                    </a>
                  </li>
                  <li class="active">
                    <a href="#">1
                    </a>
                  </li>
                  <li>
                    <a href="#">2
                    </a>
                  </li>
                  <li>
                    <a href="#">3
                    </a>
                  </li>
                  <li>
                    <a href="#">4
                    </a>
                  </li>
                  <li>
                    <a href="#">5
                    </a>
                  </li>
                  <li>
                    <a href="#">»
                    </a>
                  </li>
                </ul>
              </div>
            </div>  
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="modal brandmodal fade" id="lanjutPembayaran" tabindex="-1" role="dialog" aria-labelledby="">
    <div class="modal-dialog modal-md text-left" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×
          </button>
        </div>
        <div class="modal-body text-center">
          No Inovoice 
          <span class="font-bold">INV.001.001.XX
          </span>
          <br>
          <br>
          <div class="row">
            <div class="col-md-4 col-md-offset-4">
              <div class="total">
                <h5 class="m-0">
                  TOTAL
                </h5>
                <h4 class="font-bold m-0">
                  IDR 660.000
                </h4>
              </div> 
            </div>
          </div>
        </div>
        <div class="modal-footer text-center"> 
          <a href="TambahOrderPayOptionTunai.html" class="btn btn-success btn-fill">
            Tunai
          </a>
          <a href="TambahOrderPayOptionCC.html" class="btn btn-warning btn-fill">
            Kartu Kredit
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
