<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $title; ?></title>
  <!--untuk loader halaman-->
  <style type="text/css">
    .no-js #loader { display: none;  }
    .js #loader { display: block; position: absolute; left: 100px; top: 0; }
    .se-pre-con {
    position: fixed;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    z-index: 9999;
    background: url(images/Preloader_11.gif) center no-repeat #fff;
  }
  </style>
  <script type="text/javascript" src="<?php echo base_url("assets/js/oms.min.js"); ?>"></script>
  <link rel="stylesheet" type="text/css" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.9.3/css/bootstrap-select.min.css">
  <!--untuk tampil map-->
   <?php if($halamanUtama == 1) {
    echo $map['js']; } ?>
  <script type="text/javascript" src="<?php echo base_url("assets/js/map.js"); ?>"></script>

  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url('newAssets/bootstrap/css/bootstrap.min.css'); ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">-->
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('newAssets/dist/css/AdminLTE.min.css');?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url('newAssets/dist/css/skins/skin-blue.css');?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url('newAssets/plugins/iCheck/flat/blue.css');?>">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url('newAssets/plugins/morris/morris.css');?>">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url('newAssets/plugins/jvectormap/jquery-jvectormap-1.2.2.css');?>">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url('newAssets/plugins/datepicker/datepicker3.css');?>">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url('newAssets/plugins/daterangepicker/daterangepicker.css');?>">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url('newAssets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css');?>">
  <!-- untuk tombol MORE supaya jadi bulat-->
  <link rel="stylesheet" href="<?php echo base_url("assets/css/responsiveMenu.css"); ?>" />
  <link rel="stylesheet" href="<?php echo base_url("assets/css/halamanAchievement.css"); ?>" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>