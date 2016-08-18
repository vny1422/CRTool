	<body>
		<div class="row">
			<div class="col-12">
				<strong><div id="date_time"></div></strong>
			</div>
		</div>

		<div class="row">
			<div class="col-12">
				<div id="logoPerusahaan">
					<img class="center-block" src="<?php echo base_url('images/logoPerusahaan.png'); ?>" />
					<div id="namaPerusahaan">
						<strong>MONITORING CR INFORMATION SYSTEM</strong>
					</div>
					<p><hr></p>
				</div>
			</div>
		</div>

		<div class="container">
  				<form class="form-horizontal" role="form" action="cHalamanUtama" method="get">
    				<div class="input-group input-group-lg">
  						<span class="input-group-addon">
    						<span class="glyphicon glyphicon-user"></span>
  						</span>
  						<input class="form-control" type="text" placeholder="username...">
					</div>
					<div class="input-group input-group-lg">
  						<span class="input-group-addon">
    							<span class="glyphicon glyphicon-lock"></span>
  						</span>
  						<input class="form-control" type="password" placeholder="password...">
					</div> 
    				<div class="form-group">
      						<div class="col-sm-offset-2 col-sm-5">
        						<div class="checkbox">
          								<label><input type="checkbox">Remember me</label>
       						 	</div>
      						</div>
    				</div>
    				<div class="form-group">
      						<div class="col-sm-offset-2 col-sm-10">
        						<button type="submit" class="btn btn-default">LOG IN</button>
      						</div>
    				</div>
  				</form>
		</div>

<!--
		<form method="post" action="cLogin/auth">
			<div class="form-group">
				<div class="form">
					<img src="<?php echo base_url('images/username.png'); ?>"/> 
					<input class="form-control" name="username" type="text" placeholder="username...">
				</div>
				<div class="form">
					<img class="form" src="<?php echo base_url('images/password.png'); ?>"/> 
					<input class="form-control" name="password" type="password" placeholder="password...">
				</div>
				<div class="checkbox">
    				<label><input type="checkbox">Remember me</label>
 				</div>
			</div>
			<button type="submit" class="btn btn-default">LOG IN</button>
		</form>-->
	</body>
	<script>
		window.onload = date_time('date_time');
	</script>
</html>