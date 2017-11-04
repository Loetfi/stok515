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
          <li>
            <a href="<?php echo site_url('setting/toko/') ?>">
              Atur Toko
            </a>
          </li> 
          <li class="active">Edit Toko
          </li>
        </ol>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="card card-wizard" id="wizardCard">
          <form id="wizardForm" method="" action="#" novalidate="novalidate">
            <div class="content">
              <ul class="nav nav-pills">
                <li class="active" style="width: 33.3333%;">
                  <a href="#tab1" data-toggle="tab" aria-expanded="true">Identitas Toko
                  </a>
                </li>
                <li style="width: 33.3333%;">
                  <a href="#tab2" data-toggle="tab">Saluran Toko
                  </a>
                </li>
                <li style="width: 33.3333%;">
                  <a href="#tab3" data-toggle="tab">Buat Toko
                  </a>
                </li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane active" id="tab1"> 
                  <form id="tambahIdentitasToko" action="#" method="" novalidate="">
                    <div class="row">
                      <div class="col-md-4 col-md-offset-4">
                        <div class="text-center bg-form">
                          <div class="img-section"> 
                            <img src="<?php echo base_url('assets/img/icon/icon-fptoko.svg');?>" id="imagePreview" class="fp-toko-edit" alt="Profile picture"> 
                            <div class="col-lg-12"> 
                            </div>
                          </div>
                          <label for="file-upload" class="custom-file-upload">
                            <img src="<?php echo base_url('assets/img/icon/icon-edit-detail.svg');?>" width="15" class="" alt="icon">  Ubah Foto Toko
                          </label>
                          <input class="custom-upload" name="file-upload" id="file-upload" type="file"/>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4 col-sm-4 col-md-offset-4 col-sm-offset-4">
                        <div class="form-group"> 
                          <input class="form-control" value="XYZ Mega Store" type="text" name="namatoko" placeholder="Nama Toko" required="true">
                        </div>
                      </div>
                    </div>
                    <div class="row"> 
                      <div class="col-md-4 col-sm-4 col-md-offset-4 col-sm-offset-4">
                        <div class="input-group" style="width:100%;">
                          <input placeholder="Alamat" type="text" class="form-control" value="Jl. Pajajaran No. 1 Bogor," required="true">
                          <span class="input-group-btn"> 
                            <a href="#alamattoko" data-toggle="modal" class="icon-right" style="left: 5px;">
                              <img src="<?php echo base_url('assets/img/icon/icon-lokasi.svg');?>" style="width: 20px !important;" class="" alt="User Image">
                            </a> 
                          </span>          
                        </div>
                      </div> 
                    </div>
                  </form>
                </div>
                <div class="tab-pane" id="tab2">
                  <h5 class="text-center">Pilih Saluran Tokomu
                  </h5> 
                  <div class="table-responsive">
                    <table class="table">
                      <tbody>
                        <tr> 
                          <td>
                            <a style="color: #333;" href="#" data-toggle="modal" data-target="#saluranOffline">
                              <img class="social" src="<?php echo base_url('assets/img/icon/icon-ig.svg');?>"> Instagram
                            </a>
                          </td>   
                          <td class="td-actions text-right"> 
                            <a class="btn btn-default btn-simple p-0" href="#" data-toggle="modal" data-target="#saluranOffline">
                              <i style="color: #333;" class="pe-7s-angle-right font-30">
                              </i>
                            </a> 
                          </td>
                        </tr>
                        <tr> 
                          <td>
                            <img class="social" src="<?php echo base_url('assets/img/icon/icon-fb.svg');?>"> Facebook
                          </td>   
                          <td class="td-actions text-right"> 
                            <a class="btn btn-default btn-simple p-0" href="#">
                              <i style="color: #333;" class="pe-7s-angle-right font-30">
                              </i>
                            </a> 
                          </td>
                        </tr>
                        <tr> 
                          <td>
                            <img class="social" src="<?php echo base_url('assets/img/icon/icon-twitter.svg');?>"> Twitter
                          </td>   
                          <td class="td-actions text-right"> 
                            <a class="btn btn-default btn-simple p-0" href="#">
                              <i style="color: #333;" class="pe-7s-angle-right font-30">
                              </i>
                            </a> 
                          </td>
                        </tr>
                        <tr> 
                          <td>
                            <a style="color: #333;" href="#" data-toggle="modal" data-target="#saluranOnline">
                              <img class="social" src="<?php echo base_url('assets/img/icon/logo-blibli.svg');?>"> Blibli
                            </a>
                          </td>   
                          <td class="td-actions text-right"> 
                            <a class="btn btn-default btn-simple p-0" href="#" data-toggle="modal" data-target="#saluranOnline">
                              <i style="color: #333;" class="pe-7s-angle-right font-30">
                              </i>
                            </a> 
                          </td>
                        </tr>
                        <tr> 
                          <td>
                            <img class="social" src="<?php echo base_url('assets/img/icon/logo-bl.svg');?>"> Bukalapak
                          </td>   
                          <td class="td-actions text-right"> 
                            <a class="btn btn-default btn-simple p-0" href="#">
                              <i style="color: #333;" class="pe-7s-angle-right font-30">
                              </i>
                            </a> 
                          </td>
                        </tr>
                        <tr> 
                          <td>
                            <a style="color: #333;" href="#" data-toggle="modal" data-target="#Unlink">
                              <img class="social" src="<?php echo base_url('assets/img/icon/logo-tokped.svg');?>"> Tokopedia
                            </a>
                          </td>   
                          <td class="td-actions text-right"> 
                            <a class="btn btn-default btn-simple p-0" href="#" data-toggle="modal" data-target="#Unlink">
                              <i style="color: #333;" class="pe-7s-angle-right font-30">
                              </i>
                            </a> 
                          </td>
                        </tr> 
                      </tbody>
                    </table>
                  </div> 
                </div>
                <div class="tab-pane" id="tab3">
                  <div class="text-center">
                    <div class="author">
                      <img class="avatar-toko border-gray" src="<?php echo base_url('assets/img/icon/icon-notif_toko.svg');?>" alt="...">
                      <a href="#"> 
                        <h4 class="title">XYZ Mega Store
                          <br>
                          <small>Jalan Pajajaran No. 1 Bogor, West Java, Indonesia
                          </small>
                        </h4>
                      </a>
                    </div>
                  </div>
                  <div class="center">
                    <fieldset class="scheduler-border">
                      <legend class="scheduler-border">Saluran Penjualan
                      </legend>
                      <div class="text-center">
                        <img class="social" src="<?php echo base_url('assets/img/icon/icon-ig.svg');?>"> 
                        <img class="social" src="<?php echo base_url('assets/img/icon/icon-fb.svg');?>">
                        <img class="social" src="<?php echo base_url('assets/img/icon/icon-twitter.svg');?>"> 
                        <img class="social" src="<?php echo base_url('assets/img/icon/logo-blibli.svg');?>">
                      </div>
                    </fieldset> 
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="text-center">
                <div class="footer">
                  <button type="button" class="btn btn-warning btn-wd btn-back disabled" style="display: none;">Sebelumnya
                  </button>
                  <button type="button" class="btn btn-warning btn-fill btn-wd btn-next">Berikutnya
                  </button>
                  <button type="button" class="btn btn-success btn-fill btn-wd btn-finish" data-toggle="modal" data-target="#sukses" data-dismiss="modal">Simpan
                  </button>
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
<div class="modal brandmodal fade" id="saluranOnline" tabindex="-1" role="dialog" aria-labelledby="">
  <div class="modal-dialog" role="document" style="width: 28%;">
    <div class="modal-content">
      <div class="modal-header">
        <a type="button" class="boxclose" data-dismiss="modal">
        </a>
        <h5 style="padding-left: 25px;padding-right:50px;" class="modal-title text-left color-blue font-thin">
          <img src="<?php echo base_url('assets/img/icon/logo-blibli.svg');?>" class="modal-logo"> Sign In to Blibli
        </h5>
      </div>
      <div  style="padding-left: 50px;padding-right:50px;"class="modal-body">
        <form class="" id="" role="form" method="POST" action="">
          <div class="form-group"> 
            <input id="signupEmail" type="email" required="" maxlength="50" class="form-control" placeholder="Username">
          </div> 
          <div class="input-group" style="width:100%;">
            <input type="password" placeholder="Kata Sandi" class="form-control pwd" value="" required>
            <span class="input-group-btn" style="border-bottom: 1px solid  #a0a9b4"> 
              <a href="#" class="icon-pass reveal pass" style="left: 5px;background-color: transparent;">
                <img src="<?php echo base_url('assets/img/icon/icon-hide_passwd.svg');?>" style="width: 20px !important;" id="fa-eye" alt="User Image">
                <img src="<?php echo base_url('assets/img/icon/icon-viewpasswd.svg');?>" style="width: 20px !important;display: none;" id="fa-eye-slash" alt="User Image">
              </a> 
            </span>          
          </div>
          <br>
          <div class="form-group">
            <button id="signupSubmit" type="submit" class="btn btn-success btn-fill btn-block">Masuk
            </button>
          </div> 
          <br>
        </form>
      </div> 
    </div>
  </div>
</div>
<div class="modal brandmodal fade" id="saluranOffline" tabindex="-1" role="dialog" aria-labelledby="">
  <div class="modal-dialog" role="document" style="width: 28%;">
    <div class="modal-content">
      <div class="modal-header">
        <a type="button" class="boxclose" data-dismiss="modal">
        </a>
        <h4 class="modal-title">
          <img src="<?php echo base_url('assets/img/icon/icon-ig.svg');?>" class="modal-logo">
        </h4>
      </div>
      <div class="modal-body p-t-0" style="padding-left: 70px;padding-right:70px;"> 
        <h4 class="text-center m-t-0 font-thin"> 
          Instagram
        </h4>
        <p class="text-center color-blue">Tambahkan Instagram sebagai salah satu saluran penjualan secara offline
        </p>
        <div class="form-group">
          <button id="signupSubmit" type="submit" class="btn btn-success btn-fill btn-block">Tambahkan
          </button>
        </div>
      </div> 
    </div>
  </div>
</div>
<div class="modal brandmodal fade" id="Unlink" tabindex="-1" role="dialog" aria-labelledby="">
  <div class="modal-dialog" role="document" style="width: 28%;">
    <div class="modal-content">
      <div class="modal-header">
        <a type="button" class="boxclose" data-dismiss="modal">
        </a> 
        <h4 class="modal-title">
          <img src="<?php echo base_url('assets/img/icon/logo-tokped.svg');?>" class="modal-logo">
        </h4>
      </div>
      <div class="modal-body p-t-0" style="padding-left: 70px;padding-right:70px;"> 
        <h6 class="text-center m-10" style="font-size: 12px;margin-top: -12px;">Terhubung sebagai XYZ Mega Store
        </h6>
        <p class="text-center color-blue">Putuskan Tokopedia sebagai salah satu saluran penjualan online
        </p>
        <div class="form-group">
          <button id="signupSubmit" type="submit" class="btn btn-danger btn-fill btn-block">Putuskan
          </button>
        </div>
      </div> 
    </div>
  </div>
</div>
<div class="modal brandmodal fade" id="alamattoko" tabindex="-1" role="dialog" aria-labelledby="">
  <div class="modal-dialog modal-lg" role="document" >
    <div class="modal-content">
      <div class="modal-header">
        <a type="button" class="boxclose" data-dismiss="modal">
        </a> 
        <div class="form-group pull-right">
          <label class="sr-only">Search
          </label>
          <input id="pac-input" type="input" class="form-control bordered" placeholder=" Cari Lokasi Disini">
        </div>
      </div>
      <div class="modal-body p-t-0"> 
        <div class="center">
          <button type="submit" class="button-pilih-lokasi btn btn-warning btn-fill" data-dismiss="modal">PILIH
          </button>
        </div>
        <div id="results">
        </div>
        <div id="map">
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
        <p class="text-center m-b-40">Anda sukses menambahkan toko baru
        </p>
        <div class="form-group">
          <a href="aturtoko.html" class="btn btn-info btn-fill btn-block">OK
          </a>
        </div>
      </div> 
    </div>
  </div>
</div> 
</body>

<script type="text/javascript" src="http://maps.google.com/maps/api/js?libraries=places&sensor=false"></script>

 <script>
var map;
    var marker;
    var positions = [];
    var positionsIdx = 1;
    function placeMarker(location) {

      if (marker) {
        //if marker already was created change positon
        marker.setPosition(location);
      }
      else {
        
        //create a marker
        marker = new google.maps.Marker({
          position: location,
          map: map,
          draggable: true
        }
                                       );

      }
    }
    function initialize() {
      var centerPosition = new google.maps.LatLng(-6.273298, 106.869469);
      var options = {
        zoom: 13,
        center: centerPosition,
        mapTypeId: google.maps.MapTypeId.ROADMAP
      };
      map = new google.maps.Map($('#map')[0], options);
      //generate an array of positions.
      for (i = 0; i < 100; i++) {
        var lat = -6.273298 + (i / 1000);
        var lng = 106.869469 + (i / 1000);
        var latLng = new google.maps.LatLng(lat, lng);
        positions.push(latLng);

        //map.setCenter(latLng);
      }
      //create marker
      placeMarker(positions[0]); 



      //untuk search box
var searchBox = new google.maps.places.SearchBox(document.getElementById('pac-input'));

//place change box
google.maps.event.addListener(searchBox,'places_changed',function(){
  var places = searchBox.getPlaces();

  var bounds = new google.maps.LatLngBounds();
  var i, place;

  for(i=0; place=places[i];i++){
    //console.log(place.geometry.location);
    bounds.extend(place.geometry.location);
    marker.setPosition(place.geometry.location);
  }
  map.fitBounds(bounds);
  map.setZoom(15);
});
 
    }

    google.maps.event.addDomListener(window, 'load', initialize);

   $(function() {

  $('#alamattoko').on('shown.bs.modal', function(){
    google.maps.event.trigger(map, 'resize');
    map.setCenter(new google.maps.LatLng(-6.273298,  106.869469));
  });

});
  </script>

  <script type="text/javascript">
    $().ready(function(){
      var $validator = $("#wizardForm").validate({
        rules: {
          email: {
            required: true,
            email: true,
            minlength: 5
          }
          ,
          first_name: {
            required: false,
            minlength: 5
          }
          ,
          last_name: {
            required: false,
            minlength: 5
          }
          ,
          website: {
            required: true,
            minlength: 5,
            url: true
          }
          ,
          framework: {
            required: false,
            minlength: 4
          }
          ,
          cities: {
            required: true
          }
          ,
          price:{
            number: true
          }
        }
      }
                                                );
      // you can also use the nav-pills-[blue | azure | green | orange | red] for a different color of wizard
      $('#wizardCard').bootstrapWizard({
        tabClass: 'nav nav-pills',
        nextSelector: '.btn-next',
        previousSelector: '.btn-back',
        onNext: function(tab, navigation, index) {
          var $valid = $('#wizardForm').valid();
          if(!$valid) {
            $validator.focusInvalid();
            return false;
          }
        }
        ,
        onInit : function(tab, navigation, index){
          //check number of tabs and fill the entire row
          var $total = navigation.find('li').length;
          $width = 100/$total;
          $display_width = $(document).width();
          if($display_width < 600 && $total > 3){
            $width = 50;
          }
          navigation.find('li').css('width',$width + '%');
        }
        ,
        onTabClick : function(tab, navigation, index){
          // Disable the posibility to click on tabs
          return false;
        }
        ,
        onTabShow: function(tab, navigation, index) {
          var $total = navigation.find('li').length;
          var $current = index+1;
          var wizard = navigation.closest('.card-wizard');
          // If it's the last tab then hide the last button and show the finish instead
          if($current >= $total) {
            $(wizard).find('.btn-next').hide();
            $(wizard).find('.btn-finish').show();
          }
          else if($current == 1){
            $(wizard).find('.btn-back').hide();
          }
          else {
            $(wizard).find('.btn-back').show();
            $(wizard).find('.btn-next').show();
            $(wizard).find('.btn-finish').hide();
          }
        }
      }
                                      );
    }
             );
    function onFinishWizard(){
      //here you can do something, sent the form to server via ajax and show a success message with swal
      swal("Sukses", "Anda sukses memperbarui toko baru", "success");
    }
  </script>
  <script type="text/javascript">
    $().ready(function(){
      $('#tambahIdentitasToko').validate();
    }
             );
  </script>
  <script type="text/javascript">
    $('#file-upload').change(function(){
      readImgUrlAndPreview(this);
      function readImgUrlAndPreview(input){
        if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function (e) {
            $('#imagePreview').attr('src', e.target.result);
          }
        };
        reader.readAsDataURL(input.files[0]);
      }
    }
                            );
  </script>
  <script type="text/javascript">
    $(".reveal").on('click',function() {
      var x = document.getElementById("fa-eye-slash");
      var y = document.getElementById("fa-eye");
      if (x.style.display === "none") {
        x.style.display = "block";
        y.style.display = "none";
      }
      else {
        x.style.display = "none";
        y.style.display = "block";
      }
      var input = $($(this).attr("toggle"));
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
