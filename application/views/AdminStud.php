<label style="font-size:25px ">Welcome PruebaAdmin</label>
<link rel="stylesheet" type="text/css" href="<?php echo base_url ();?>assets/css/estilotabestu.css">
<div class="container" >
  <h1>Students</h1>
  <table class="table table-striped table-hover" style="text-align: center">
    <thead class="thead-dark" >
      <tr>
        <th style="text-align: center;">Matricula</th>
        <th style="text-align: center;">Name</th>
        <th style="text-align: center;">Last Name</th>
        <th style="text-align: center;">Quarter</th>
        <th style="text-align: center;">Password</th>
        <th style="text-align: center;">Career</th>
        <th style="text-align: center;">Edit</th>
        <th style="text-align: center;">Remove</th>
      </tr>

    </thead>
    <tbody>

      <?php foreach($usuario as $p):
        print("<tr>\n");
        print("<td>".$p->matricula);
        print("<td>".$p->nombre);
        print("<td>".$p->apellidos);
        print("<td>".$p->cuatrimestre);
        print("<td>".$p->contraseña);
        print("<td>".$p->idcarrera);
        print("<td><a class='btn-base btn-cta btn-8 borde' href='editar/$p->matricula'><span >edit</span></a></td>");
        print("<td><a class='btn-base btn-cta btn-6 borde' href='eliminar/$p->matricula'><span >remove</span></a></td>");
        print("</tr>\n");
        
      endforeach;

      ?>

    </tbody>
    
  </table>
<form  id="login-form" action="<?php echo base_url('index.php/Principal/AdminMod')?>" method="post" role="form" style="display: block" onsubmit="return validar();">
                  <div class="form-group">
                    <div class="row">
                      <div class="col-sm-6 col-sm-offset-3">
                        <input style="background-color:#E67F47" type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Modules">
                      </div>
                    </div>
                  </div>
                  
                </form>

</div>

