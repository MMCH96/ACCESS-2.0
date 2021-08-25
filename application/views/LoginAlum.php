
	<div class="container">
    	<div class="row">
			<div class="col-md-6 col-md-offset-3 ">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div  >
	
							<img src="<?php echo base_url ();?>assets/img/login-logo.png" class="rounded-circle w-5" >

							</div>
						<div class="row">
							
							<div class="col-xs-6" >
								<a href="<?php echo base_url('index.php/Principal/LoginAlum')?>" class="active">Student</a>
							</div>
							<div class="col-xs-6">
								<a href="<?php echo base_url('index.php/Principal/index')?>">Administrator</a>
							</div>
							
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">

								<form id="login-form" action="<?php echo base_url('index.php/Principal/loginA')?>"  method="post" role="form" style="display: block;" onsubmit="return validar();">
									
									<div class="form-group">
										<input type="text" name="usuario" id="usuario" tabindex="1" class="form-control" placeholder="Matricula" value="" required>
											 
									</div>
									<div class="form-group">
										<input type="password" name="clave" id="clave" tabindex="2" class="form-control" placeholder="Password" required>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input  type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login"  value="Log in">
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

