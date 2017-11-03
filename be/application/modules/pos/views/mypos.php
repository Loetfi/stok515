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
              <li class="active">
                <a href="#">
                  My POS
                </a>
              </li>  
            </ol>
          </div>
        </div>
        <div class="card card-posts">
          <div class="header"> 
            <div class="row"> 
              <div class="col-md-12">
                <form class="form-inline pull-right">
                  <div class="form-group">
                    <label class="sr-only">Search
                    </label>
                    <input type="input" style="width: 220px;" class="form-control bordered" placeholder="&#xf002; Cari Produk/Toko Disini">
                  </div>
                  <a href="<?php echo site_url('pos/order') ?>" class="btn btn-primary btn-fill"><img src="<?php echo base_url('assets/img/icon/plus-add_btn.svg');?>" class="icon-plus" alt="icon"> Buat Order Baru
                  </a>  
                </form>
              </div>
            </div>
          </div>
          <div class="content table-responsive table-full-width">
            <table class="table">
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
                <tr> 
                  <td>
                    <img src="<?php echo base_url('assets/img/user.jpg');?>"/>
                  </td>
                  <td>INV.001.001.XX
                  </td>
                  <td>ZARA - Jaket Kampus/Varsity Merah
                  </td> 
                  <td><img class="social" src="<?php echo base_url('assets/img/icon/icon-ig.svg');?>"> Instagram
                  </td>    
                  <td class="td-actions text-right"> 
                    <a class="btn btn-default btn-simple" href="DetailTransaksiMyPOS.html">
                      <i style="color: #333;" class="fa fa-angle-right">
                      </i>
                    </a>  
                  </td>
                </tr> 
                <tr> 
                  <td>
                    <img src="<?php echo base_url('assets/img/user.jpg');?>"/>
                  </td>
                  <td>INV.001.001.XX
                  </td>
                  <td>ZARA - Jaket Kampus/Varsity Merah
                  </td> 
                  <td><img class="social" src="<?php echo base_url('assets/img/icon/icon-ig.svg');?>"> Instagram
                  </td>    
                  <td class="td-actions text-right"> 
                    <a class="btn btn-default btn-simple" href="DetailTransaksiMyPOS.html">
                      <i style="color: #333;" class="fa fa-angle-right">
                      </i>
                    </a>  
                  </td>
                </tr> 
                <tr> 
                  <td>
                    <img src="<?php echo base_url('assets/img/user.jpg');?>"/>
                  </td>
                  <td>INV.001.001.XX
                  </td>
                  <td>ZARA - Jaket Kampus/Varsity Merah
                  </td> 
                  <td><img class="social" src="<?php echo base_url('assets/img/icon/icon-ig.svg');?>"> Instagram
                  </td>    
                  <td class="td-actions text-right"> 
                    <a class="btn btn-default btn-simple" href="DetailTransaksiMyPOS.html">
                      <i style="color: #333;" class="fa fa-angle-right">
                      </i>
                    </a>  
                  </td>
                </tr> 
              </tbody>
            </table>
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
</div>
<div class="modal brandmodal fade" id="hapus" tabindex="-1" role="dialog" aria-labelledby="">
  <div class="modal-dialog" role="document" style="width: 28%;">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">×
        </button>
        <h4 class="modal-title m-t-40">
          Hapus Tim
        </h4>
      </div>
      <div class="modal-body">
        <h6 class="text-center m-10 m-b-30">Apakah Anda yakin untuk menghapus anggota tim ini?</h6>
        <div class="form-group ">
          <button id="signupSubmit" type="submit" class="btn btn-danger btn-fill">Batal
          </button>
          <button id="signupSubmit" type="submit" class="btn btn-info btn-fill">Ya
          </button>
        </div> 
      </div> 
    </div>
  </div>
</div>
</body>
