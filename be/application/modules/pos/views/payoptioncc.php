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
 		<div class="row">
 			<div class="col-md-12">
 				<div class="card">
 					<div class="header" style="border-bottom: 1px solid #ddd;padding-bottom: 10px;">  
 						<div class="row"> 
 							<div class="col-md-6">
 								<p class="category font-16 m-t-10">Order #0001 - Keranjang Belanja
 								</p>
 							</div>
 							<div class="col-md-6">
 								<form class="form-inline pull-right">
 									<div class="form-group">
 										<label class="sr-only">Search
 										</label>
 										<input type="input" style="width: 220px;" class="form-control bordered" placeholder="&#xf002; Cari Produk/Toko Disini">
 									</div> 
 									<a href="<?php echo site_url('pos/order/tambahordercartpage') ?>">
 										<img src="<?php echo base_url('assets/img/icon/icon-cart.svg');?>" class="icon-cart" alt="icon">
 										<label id="cart-badge" class="badge bg-red">1</label> 
 									</a> 
 								</form>
 							</div>
 						</div>
 					</div>
 					<br>
 					<form id="" action="#" method="" novalidate=""> 
 						<div class="row"> 
 							<div class="col-md-4 col-md-offset-4">
 								<div class="text-center">
 									No Inovoice 
 									<span class="font-bold">INV.001.001.XX
 									</span>
 									<br>
 									<br>
 									<div class="total" style="width: 50%"> 
 										<h5 class="m-0">
 											TOTAL
 										</h5>
 										<h4 class="font-bold m-0">
 											IDR 660.000
 										</h4>
 									</div>
 								</div> 
 								<br>
 								<br>   
 							</div> 
 						</div>
 						<div class="row">
 							<div class="col-md-2 col-md-offset-4">
 								<div class="form-group"> 
 									<label class="radio">
 										<span class="icons">
 											<span class="first-icon fa fa-circle-o">
 											</span>
 											<span class="second-icon fa fa-dot-circle-o">
 											</span>
 										</span>
 										<input type="radio" data-toggle="radio" name="optionsRadios" value="option1">Visa
 									</label> 
 								</div>
 							</div>
 							<div class="col-md-2">
 								<div class="form-group"> 
 									<label class="radio">
 										<span class="icons">
 											<span class="first-icon fa fa-circle-o">
 											</span>
 											<span class="second-icon fa fa-dot-circle-o">
 											</span>
 										</span>
 										<input type="radio" data-toggle="radio" name="optionsRadios" value="option2">Master
 									</label> 
 								</div>
 							</div>
 						</div>
 						<div class="row"> 
 							<div class="col-md-4 col-md-offset-4"> 
 								<div class="form-group">
 									<input class="form-control" type="text" value="" name="" required="true" placeholder="Number">
 								</div> 
 								<div class="form-group">
 									<input class="form-control" type="text" value="" name="" required="true" placeholder="Name on Card">
 								</div> 
 							</div> 
 						</div>
 						<div class="row">
 							<div class="col-md-2 col-md-offset-4">
 								<div class="form-group"> 
 									<input class="form-control" type="text" value="" name="" placeholder="Expired Date" required="true">
 								</div>
 							</div>
 							<div class="col-md-2">
 								<div class="form-group"> 
 									<input class="form-control" type="text" value="" name="" placeholder="Security Code" required="true">
 								</div>
 							</div>
 						</div>
 						<div class="row"> 
 							<div class="col-md-4 col-md-offset-4"> 
 								<div class="form-group">
 									<input class="form-control" type="email" value="" name="" required="true" placeholder="Email">
 								</div>   
 							</div> 
 						</div>  
 						<br>
 						<div class="row">
 							<div class="col-md-4 col-md-offset-4">
 								<div class="footer">
 									<a href="#" class="btn btn-warning btn-fill btn-wd btn-next btn-block" data-toggle="modal" data-target="#tunai">Bayar
 									</a>  
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
<div class="modal brandmodal fade" id="tunai">
	<div class="modal-dialog text-left" role="document" style="width: 40%;">
		<div class="modal-content">
			<div class="modal-header">
				<a type="button" class="boxclose" data-dismiss="modal">
				</a>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-12">
						<div class="card no-shadow">
							<div class="center" style="width: 84%;">
								<div class="header p-0">

									<h4 class="title font-bold font-30">
										BERHASIL
									</h4>
									<br> 
									<div class="row">
										<div class="col-md-3 col-sm-3">
											<div class="author">
												<img class="avatar-produk border-gray" style="margin-right: 10px;" src="<?php echo base_url('assets/img/icon/ceklis.png');?>" alt="..."> 
											</div>
										</div>
										<div class="col-md-9 col-sm-9 no-pr-pl">
											<dl class="dl-horizontal"> 
												<dt class="font-12 font-thin">
													No Invoice
												</dt> 
												<dd class="font-12 font-bold">
													INV.001.001.XX
												</dd> 
												<dt class="font-12 font-thin">
													Kode Verifikasi
												</dt> 
												<dd class="font-12 font-bold">
													LDSJBJDF9012
												</dd> 
												<dt class="font-12 font-thin">
													Tanggal/Waktu
												</dt> 
												<dd class="font-12 font-bold">
													Kamis 8 Juni 2017 - 18.06
												</dd>
												<dt class="font-12 font-thin">
													Nota dikirim ke
												</dt> 
												<dd class="font-12 font-bold">
													email.nama@email.com
												</dd>      
											</dl>

										</div>
										<div class="text-center">
											<a href="<?php echo site_url('pos') ?>" class="btn btn-wd btn-success btn-fill">
												Cetak Nota Pembayaran
											</a> 
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
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
		var $pwd = $(".pwd");
		if ($pwd.attr('type') === 'password') {
			$pwd.attr('type', 'text');
		}
		else {
			$pwd.attr('type', 'password');
		}
	}
	);
</script>
