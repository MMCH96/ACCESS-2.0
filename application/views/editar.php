
<head >
	<title>Edit Students</title>
	<meta charset="utf-8">
	<title>ACCESS</title>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url ();?>assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url ();?>assets/css/estilosForm.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url ();?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url ();?>assets/css/css-btns-mod-alum.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url ();?>assets/css/estilo.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url ();?>assets/css/cssnav.css">
	
	<script src="<?php echo base_url ();?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url ();?>assets/js/jquery.min.js"></script>
	<script src="<?php echo base_url ();?>assets/js/popper.min.js"></script>
	<script src="<?php echo base_url ();?>assets/js/formulario.js"></script>
  	
</head>
<header>
	<img src="<?php echo base_url ();?>assets/img/logo.png" id="logo" >
	
</header>
<body>
<div class="container">
<h1>Edit Students</h1>
<br>

<form method="POST" action="<?php echo base_url('index.php/Principal/actualizar');?>">
  <p>Name</p>
<input type ="text" name="nombre" class="form-control" value="<?php echo $personaVista->nombre; ?>">
  <p>Last Name</p>
<input type ="text" name="apellidos" class="form-control" value="<?php echo $personaVista->apellidos; ?>">
  <p>Quarter</p>
<input type ="text" name="cuatrimestre" class="form-control" value="<?php echo $personaVista->cuatrimestre; ?>">
  <p>Password</p>
<input type ="text" name="Clave" class="form-control" value="<?php echo $personaVista->contraseña; ?>">
<div class="form-group">
	<label>Carrier</label>
	<select name="Carrera">
	<option value="1">Software</option>
	<option value="2">Terapia Fisica</option>
	<option value="3">Mecatronica</option>
	<option value="4">Medico Cirujano</option>
	<option value="5">Biomedica</option>
	<option value="6">Financiera</option>
	<option value="7">Mecanica Automotriz</option>
	<option value="8">Biotecnologia</option>
	</select></p>
</div>
<input type="hidden" name="Matricula" value="<?php echo $personaVista->matricula;?>">

<input type="submit" class="btn btn-primary" value="Actualizar">
</form>
</div>
<footer>
	
	<div style="background-color: #87CEEB; width: 100%; margin-top: 150px;  ">
		Camacho Hernandez Miguel Mosiah 
		<p></p>
		Naranjo Torres Jose Alfredo
	</div>
</footer>

<script src="<?php echo base_url();?>assets/js/formulario1.js"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
</body>
</html>
