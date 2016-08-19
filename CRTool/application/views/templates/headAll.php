<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?php echo $title ?></title>

  <!--<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo base_url("assets/css/footer-distributed.css"); ?>" />
  <!--<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" />-->
  <link rel="stylesheet" href="<?php echo base_url("assets/css/headAll.css"); ?>" />
  <link rel="stylesheet" href="<?php echo base_url("assets/css/style.css"); ?>" />
  <script type="text/javascript" src="<?php echo base_url("assets/js/serverTime.js"); ?>"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <?php echo $map['js']; ?>
</head>

<html>
  <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container"> 
          <div class="navbar-header">
              <strong class="navbar-brand">CR Monitoring</strong>
          </div>
          <div class="collapse navbar-collapse">
              <ul class="nav navbar-nav navbar-right">
                  <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                          <span class="glyphicon glyphicon-user"></span> 
                          <strong><?php echo $username; ?></strong>
                          <span class="glyphicon glyphicon-chevron-down"></span>
                      </a>
                      <ul class="dropdown-menu">
                          <li>
                              <div class="navbar-login">
                                  <div class="row">
                                      <div class="col-lg-4">
                                          <p class="text-left"><strong>HARIYANTO</strong></p>
                                          <p class="text-left small">amazingharry95@gmail.com</p>
                                      </div>
                                  </div>
                              </div>
                          </li>
                          <li class="divider"></li>
                          <li>
                              <div class="navbar-login navbar-login-session">
                                  <div class="row">
                                      <div class="col-lg-12">
                                          <p>
                                              <a href="#" class="btn btn-danger btn-block">LOG OUT</a>
                                          </p>
                                      </div>
                                  </div>
                              </div>
                          </li>
                      </ul>
                  </li>
              </ul>
          </div>
      </div>
  </div>