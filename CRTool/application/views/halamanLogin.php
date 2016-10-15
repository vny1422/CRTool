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
    	<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="login-form" action="<?php echo base_url()?>/cLogin/auth" method="post" role="form" style="display: block;">
									<div class="form-group">
										<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
									</div>
									<div class="form-group">
										<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
									</div>
									<div class="form-group text-center">
										<input type="checkbox" tabindex="3" class="" name="remember" id="remember">
										<label for="remember"> Remember Me</label>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="LOG IN">
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

	<?php if($this->session->flashdata('information') != ""): ?>
			<?php echo $this->session->flashdata('information'); ?>
		          <?php endif; ?>

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