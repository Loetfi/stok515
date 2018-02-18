   <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="content-header">
          <h1>
            Daftar Transaksi
            <a href="#" class="btn btn-success btn-fill pull-right">Fitur Premium
            </a>
          </h1>
          <div class="divider-blue">
          </div>
          <ol class="breadcrumb">
            <li class="active">
              <a href="#">
                Daftar Transaksi
              </a>
            </li>  
          </ol>
        </div>
      </div>
      <div class="card card-posts">
        <div class="header"> 
          <div class="row"> 
            <div class="col-md-12">
              <form class="form-inline pull-right" action="" method="GET" target="_blank">
                <div class="form-group">
                  <label class="sr-only">Search
                  </label>
                  <input type="input" style="width: 220px;" class="form-control bordered" placeholder="&#xf002; Cari No. Invoice disini">
                </div>
                <div class="form-group">
                  <div class="dropdown">
                    <button class="btn dropdown-pilih btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                      <img class="icon-filter2" src="<?php echo base_url('assets/img/icon/icon-filter.svg');?>" style="float: left;width: 15px;"> Semua Status
                      <img class="icon-drop_small" src="<?php echo base_url('assets/img/icon/icon-drop_small.svg');?>" style="float: right;width: 15px;">
                    </button>
                    <!-- <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                      <li>
                        <a href="#" style="font-weight: 300;">Semua Status
                        </a>
                      </li>
                      <li>
                        <a href="#" style="font-weight: 300;">Menunggu Pembayaran
                        </a>
                      </li>
                      <li>
                        <a href="#" style="font-weight: 300;">Transaksi Sukses
                        </a>
                      </li>
                      <li>
                        <a href="#" style="font-weight: 300;">Transaksi Batal
                        </a>
                      </li> 
                    </ul> -->
                  </div>
                </div> 
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar">
                    </i>
                  </div>
                  <input type="text" id="date-input" data-type="date" name="startdate" placeholder="Tanggal Mulai" class="form-control bordered" style="color: #888888;font-size: 12px;border-radius: 0px 4px 4px 0px !important;">
                </div> 
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar">
                    </i>
                  </div>
                  <input type="text" id="date-input2" data-type="date" name="enddate" placeholder="Tanggal Berakhir" class="form-control bordered" style="color: #888888;font-size: 12px;border-radius: 0px 4px 4px 0px !important;">
                </div>  
                <div id="material-header-holder" style="display:none">
                  <div class="ui-datepicker-material-header">
                    <div class="ui-datepicker-material-day">
                    </div>
                    <div class="ui-datepicker-material-date">
                      <div class="ui-datepicker-material-day-num">
                      </div>
                      <div class="ui-datepicker-material-month">
                      </div>
                      <div class="ui-datepicker-material-year">
                      </div>
                    </div>
                  </div>
                </div>

                <button class="btn">Filter</button>

              </form>
            </div>
          </div>
        </div>
        <div class="content table-responsive table-full-width">

          <table class="table table-hover " id="example" width="100%" cellspacing="0">
            <thead>
              <th>
              </th> 
              <th>No. Invoice
              </th>
              <th>Nama Produk
              </th>
              <th>Saluran Penjualan
              </th> 
              <th>
              </th> 
            </thead>
            <tbody class="text-center">
              <?php foreach ($invoice as $inv) { ?>

                  <tr>  
                    <td><?php echo $inv['InvoiceNumber']; ?></td>
                    <td><?php echo $inv['ProductId']; ?></td> 
                    <td><?php echo $inv['ChannelId']; ?>
                      <!-- <img class="social" src="<?php echo base_url('assets/img/icon/icon-ig.svg');?>"> Instagram -->
                    </td>    
                    <td class="td-actions text-right"> 
                      <a class="btn btn-default btn-simple" href="<?php echo site_url('pos/detail/'.$inv['SalesId']) ?>">
                        <i style="color: #333;" class="fa fa-angle-right">
                        </i>
                      </a>  
                    </td>
                  </tr> 

                  <?php } ?> 

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
</div> 
</body>



<script type="text/javascript">
  $(document).ready(function() {
    $('#example').DataTable({
              "order": [[ 2, "desc" ]]
    });
  } );
</script>


<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>



<script src="<?php echo base_url('assets/js/jquery-ui-1.14.min.js'); ?>" type="text/javascript">
</script> 

<script type="text/javascript">
  var headerHtml = $("#material-header-holder .ui-datepicker-material-header");
  var changeMaterialHeader = function(header, date) {
    var year = date.format("YYYY");
    var month = date.format("MMM");
    var dayNum = date.format("D");
    var isoDay = date.isoWeekday();
    var weekday = new Array(7);
    weekday[1] = "Monday";
    weekday[2] = "Tuesday";
    weekday[3] = "Wednesday";
    weekday[4] = "Thursday";
    weekday[5] = "Friday";
    weekday[6] = "Saturday";
    weekday[7] = "Sunday";
    $(".ui-datepicker-material-day", header).text(weekday[isoDay]);
    $(".ui-datepicker-material-year", header).text(year);
    $(".ui-datepicker-material-month", header).text(month);
    $(".ui-datepicker-material-day-num", header).text(dayNum);
  };
  $.datepicker._selectDateOverload = $.datepicker._selectDate;
  $.datepicker._selectDate = function(id, dateStr) {
    var target = $(id);
    var inst = this._getInst(target[0]);
    inst.inline = true;
    $.datepicker._selectDateOverload(id, dateStr);
    inst.inline = false;
    this._updateDatepicker(inst);

      //headerHtml.remove();
      $(".ui-datepicker").prepend(headerHtml);
    };
    
    $("input[data-type='date']").on("focus", function() {
     headerHtml.show();
      // $(".ui-datepicker").prepend(headerHtml);
      
    }
    );
    $("input[data-type='date']").datepicker({
      showButtonPanel: true,
      closeText: "OK",
      onSelect: function(date, inst) {
        changeMaterialHeader(headerHtml, moment(date, "MM/DD/YYYY"));
      }
    }
    );
    
    $("input[data-type='date']").click(function(){
      $(".ui-datepicker").prepend(headerHtml);
    });

    changeMaterialHeader(headerHtml, moment());
    $("input").datepicker("show");

  </script> 
