
<head >
	<title>Edit Teachers</title>
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
<h1>Edit Teachers</h1>
<br>

<form method="POST" action="<?php echo base_url('index.php/Principal/actualizarP');?>">
  <p>Name</p>
<input type ="text" name="nombre" class="form-control" value="<?php echo $personaVista->nombre; ?>">
<p>Password</p>
<input type ="text" name="contraseña" class="form-control" value="<?php echo $personaVista->contraseña; ?>">
  <p>Titulo</p>
<input type ="text" name="titulo" class="form-control" value="<?php echo $personaVista->titulo; ?>">
  <p>Age</p>
<input type ="text" name="edad" class="form-control" value="<?php echo $personaVista->edad; ?>">
<input type="hidden" name="Idasesor" value="<?php echo $personaVista->idasesor;?>">

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
