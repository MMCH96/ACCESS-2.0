

<div id="form">
 
<form id="waterform" method="post" action="<?php echo base_url('index.php/Principal/GuardarR')?>">
<div class="row">

	<div class=" col-sm-4 col-md-6 col-lg-8 col-xl-12">
		
			
		<label for="name">Dia de la Reservacion</label>
		<select id="convo" name="Dia" >
		<option value="Lunes">Lunes</option>
		<option value="Martes">Martes</option>
		<option value="Miercoles">Miercoles</option>
		<option value="Jueves">Jueves</option>
		<option value="Viernes">Viernes</option>
		</select></p>
		<label for="name">Hora</label>
		<select id="convo" name="Hora" >
		<option value="9:00">9:00</option>
		<option value="10:00">10:00</option>
		<option value="11:00">11:00</option>
		<option value="12:00">12:00</option>
		<option value="15:00">15:00</option>
		<option value="16:00">16:00</option>
		<option value="17:00">17:00</option>
		</select></p>
		<label for="name">Asesor</label>
		<select id="convo" name="Asesor" >
		<option value="1">LELI Azucena</option>
		<option value="2">LELI Mary Carmen</option>
		<option value="3">PROF Aldair</option>
		</select></p>
		<input type="text" name="modulo" value="<?php echo $modulo; ?>"  style="visibility:hidden">
		<input type="text" name="actividad" value="<?php echo $actividad; ?>"  style="visibility:hidden">
	</div>
	<div class="col-sm-6 col-sm-offset-3">
		<input style="background-color: green" type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Reserve">
	</div>
</div>
</form>
<form id="login-form" action="<?php echo base_url('index.php/Principal/StudMod')?>" method="post" role="form" style="display: block;" onsubmit="return validar();">
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" style="background-color: red" value="Modules">
											</div>
										</div>
									</div>
									
								</form>



