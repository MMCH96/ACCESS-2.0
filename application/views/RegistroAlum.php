<label style="font-size:25px ">Welcome PruebaAdmin</label>
	<div class="container">
    	<div class="row">
			<div class="col-md-6 col-md-offset-3 ">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-6">
							<div class="col-xs-12 col-sm-8 col-md-8">
								<label>New Student</label>
							</div>
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="login-form" action="<?php echo base_url('index.php/Principal/Guardar')?>" method="post" role="form" style="display: block;" onsubmit="return validar();">
									
									<div class="form-group">
										<input type="text" name="nombreR" id="nombre" tabindex="1" class="form-control" placeholder="Name" value="" required>
									</div>
									<div class="form-group">
										<input type="text" name="apellidoR" id="apellido" tabindex="1" class="form-control" placeholder="Last Name" value="" required>
									</div>
									<div class="form-group">
										<input type="text" name="cuatrimestreR" id="cuatrimestre" tabindex="1" class="form-control" placeholder="Quarter" value="" required>
									</div>
									<div class="form-group">
										<input type="password" name="claveR" id="clave" tabindex="2" class="form-control" placeholder="Password" required>
									</div>
									<div class="form-group">
										<label>Carreer</label>
										<select name="Carrera">
										<option value="1">Software</option>
										<option value="2">Terapia Fisica</option>
										<option value="3">Mecatronica</option>
										<option value="4">Medico Cirujano</option>
										<option value="5">Biomedica</option>
										<option value="Financiera">Financiera</option>
										<option value="Mecanica Automotriz">Mecanica Automotriz</option>
										<option value="Biotecnologia">Biotecnologia</option>
										</select></p>
									</div>
									
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input  type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Register">
											</div>
										</div>
									</div>
									<div>
								</div>
								</form>
								<form id="login-form" action="<?php echo base_url('index.php/Principal/AdminMod')?>" method="post" role="form" style="display: block;" onsubmit="return validar();">
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Modules">
											</div>
										</div>
									</div>
									
								</form>
								<form id="register-form" action="http://phpoll.com/register/process" method="post" role="form" style="display: none;">
									<div class="form-group">
										<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Usuario" value="">
									</div>
									<div class="form-group">
										<input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Correo electronico" value="">
									</div>
									<div class="form-group">
										<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Contrase??a">
									</div>
									<div class="form-group">
										<input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirmar contrase??a">
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Crear cuenta">
											</div>
										</div>
									</div>
									<div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>
</div>
</div>





