	<body>
		<div class="row">
			<div class="col-12">
				<div id="date_time"></div>
			</div>
		</div>

		<div class="row">
			<div class="col-12">
				<div id="logoPerusahaan">
					<img class="center-block" src="<?php echo base_url('images/logoPerusahaan.png'); ?>" />
					<div id="namaPerusahaan">
						MONITORING CR INFORMATION SYSTEM
					</div>
					<p><hr></p>
				</div>
			</div>
		</div>

		<div class="row">
			<!--<div class="col-12">
				<div id="form">
					<div class="row">
						<div class="col-7">
							<img class="center-block" src="<?php echo base_url('images/username.png'); ?>" width="900" alt="" style="max-width:500px; height:auto; max-height:600px;" /> 
						</div>
						<div class="col-5">
							<input type="email">
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-7">
							<img class="center-block" src="<?php echo base_url('images/password.png'); ?>" width="900" alt="" style="max-width:500px; height:auto; max-height:600px;" />
						</div>
						<div class="col-5">
							<input type="password">
						</div>
					</div> 	
				</div>
			</div>-->
			<div class="form-group">
				<label class="control-label"><img class="center-block" src="<?php echo base_url('images/username.png'); ?>" width="900" alt="" style="max-width:500px; height:auto; max-height:600px;" /> 
</label>
				<input class="form-control" name="username" type="text" placeholder="username...">
			</div>
			<div class="form-group">
				<label class="control-label"><img class="center-block" src="<?php echo base_url('images/password.png'); ?>" width="900" alt="" style="max-width:500px; height:auto; max-height:600px;" /> 
</label>
				<input class="form-control" name="password" type="password" placeholder="password...">
			</div>
		</div>
		
		
	</body>
	<script>
		window.onload = date_time('date_time');
	</script>
</html>