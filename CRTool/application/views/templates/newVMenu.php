<body>
  <div class="se-pre-con"></div>
      <script type="text/javascript">
        $(window).load(function() {
    // Animate loader off screen
          $(".se-pre-con").fadeOut("slow");;
        });
      </script>
	<div class="container-fluid">
  		<div class="row-fluid">
    		<div class="span2">
      				<nav class="menu" tabindex="0">
  							<div class="smartphone-menu-trigger"></div>
    							<header class="avatar">
  								<a href="./cHalamanUtama"><img src="<?php echo base_url('images/logoPerusahaan.png'); ?>" /></a>
    							</header>
  							<ul>
      							<a href="./cAchievement" class="tiptext"><li tabindex="0" class="icon-dashboard"><span >ACHIEVEMENT</span><!--<iframe src="./cAchievement" class="description"></iframe>--></li></a>
      							<a href="./cSalesOut"><li tabindex="0" class="icon-customers"><span>SALES OUT</span></li></a>
    						</ul>
                <ul id="sesuatu">
                    <div id="status">CR'S STATUS</div>
                </ul>
					   </nav>
    		</div>
    		<div class="span10">
      				<nav class="navbar navbar-ct-blue navbar-fixed-top navbar-transparent" role="navigation">
      						<div class="container"> 
          						<div class="navbar-header">
                          <div class="brand">
              						<strong class="navbar-brand">CR Monitoring</strong>
                          </div>
          						</div>
          					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
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
                                          						<p class="text-left"><strong><?php echo $fullName; ?></strong></p>
                                          						<p class="text-left small"><?php echo $email; ?></p>
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
                                              						<a href="cLogin" class="btn btn-danger btn-block">LOG OUT</a>
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
              </nav>
<script type="text/javascript">
            $(".tiptext").mouseover(function() {
    $(this).children(".description").show();
}).mouseout(function() {
    $(this).children(".description").hide();
});
</script>
           



