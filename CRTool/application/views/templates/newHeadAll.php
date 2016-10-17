<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?php echo $title ?></title>

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

  <!--<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo base_url("assets/css/footer-distributed.css"); ?>" />
  <!--<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" />-->
  <link rel="stylesheet" href="<?php echo base_url("assets/css/headAll.css"); ?>" />
  <link rel="stylesheet" href="<?php echo base_url("assets/css/responsiveMenu.css"); ?>" />
  <link rel="stylesheet" href="<?php echo base_url("assets/css/style.css"); ?>" />
  <script type="text/javascript" src="<?php echo base_url("assets/js/serverTime.js"); ?>"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <?php if($halamanUtama == 1) {
    echo $map['js']; } ?>
  <script type="text/javascript" src="<?php echo base_url("assets/js/map.js"); ?>"></script>

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>


</head>