<label style="font-size:25px ">Welcome PruebaAdmin</label>
<link rel="stylesheet" type="text/css" href="<?php echo base_url ();?>assets/css/estilotabprof.css">
<div class="container">
  <h1>Teachers</h1>
  <table class="table table-striped table-hover" style="text-align: center;">
    <thead class="thead-dark">
      <tr>
        <th style="text-align: center;">ID</th>
        <th style="text-align: center;">Name</th>
        <th style="text-align: center;">Degree</th>
        <th style="text-align: center;">Age</th>
        <th style="text-align: center;">Edit</th>
        <th style="text-align: center;">Remove</th>
      </tr>

    </thead>
    <tbody>

      <?php foreach($profe as $p2):
        print("<tr>\n");
        print("<td>".$p2->idasesor);
        print("<td>".$p2->nombre);
        print("<td>".$p2->titulo);
        print("<td>".$p2->edad);
        print("<td><a class='btn-base btn-cta btn-8 borde' href='editarP/$p2->idasesor'><span>editar</span></a></td>");
        print("<td><a class='btn-base btn-cta btn-6 borde' href='eliminarP/$p2->idasesor'><span>eliminar</span></a></td>");
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