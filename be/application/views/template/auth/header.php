<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title><?php echo @$title; ?></title>
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Javascript -->
    <script type="text/javascript" src="<?php echo base_url('assets/pace/pace.min.js') ?>"></script>
    <script type="text/javascript">
        paceOptions = {
          // Disable the 'elements' source
          elements: true,

          // Only show the progress on regular and ajax-y page navigation,
          // not every request
          restartOnRequestAfter: true
        }
    </script>
    <style type="text/css">
            .pace {
          -webkit-pointer-events: none;
          pointer-events: none;

          -webkit-user-select: none;
          -moz-user-select: none;
          user-select: none;

          position: fixed;
          top: 0;
          left: 0;
          width: 100%;

          -webkit-transform: translate3d(0, -50px, 0);
          -ms-transform: translate3d(0, -50px, 0);
          transform: translate3d(0, -50px, 0);

          -webkit-transition: -webkit-transform .5s ease-out;
          -ms-transition: -webkit-transform .5s ease-out;
          transition: transform .5s ease-out;
        }

        .pace.pace-active {
          -webkit-transform: translate3d(0, 0, 0);
          -ms-transform: translate3d(0, 0, 0);
          transform: translate3d(0, 0, 0);
        }

        .pace .pace-progress {
          display: block;
          position: fixed;
          z-index: 2000;
          top: 0;
          right: 100%;
          width: 100%;
          height: 10px;
          background: #29d;

          pointer-events: none;
        } 
    </style>

    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet" />
    <!-- Animation library for notifications   -->
    <link href="<?php echo base_url('assets/css/animate.min.css');?>" rel="stylesheet"/>
    
    <link href="<?php echo base_url('assets/css/bootstrap-reset.css');?>" rel="stylesheet"/>
    <link href="<?php echo base_url('assets/css/my-style.css');?>" rel="stylesheet"/>
    <link href="<?php echo base_url('assets/css/helper.css');?>" rel="stylesheet"/>
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css');?>" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url('assets/css/pe-icon-7-stroke.css');?>" rel="stylesheet" />
     
    <link href="<?php echo base_url('assets/css/components-md.css');?>" rel="stylesheet" id="style_components" type="text/css" />

    
    
    <link href="<?php echo base_url('assets/css/login.css');?>" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="" /> 

  </head>
 <!-- END HEAD -->
