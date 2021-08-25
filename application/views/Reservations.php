<label style="font-size:25px ">Welcome PruebaStud</label>
<link rel="stylesheet" type="text/css" href="<?php echo base_url ();?>assets/css/estilotabres.css">
<div class="container"  >
  <h1>Reservations</h1>
  <table class="table table-striped table-hover" style="text-align: center">
    <thead class="thead-dark" >
      <tr>
        <th style="text-align: center;">ID</th>
        <th style="text-align: center;">Student</th>
        <th style="text-align: center;">Teacher</th>
        <th style="text-align: center;">Modules</th>
        <th style="text-align: center;">Activity</th>
        <th style="text-align: center;">Day</th>
        <th style="text-align: center;">Hour</th>

        <th style="text-align: center;">Remove</th>
      </tr>

    </thead>
    <tbody>

      <?php foreach($reservation as $p3):
        print("<tr>\n");
        print("<td>".$p3->idreservacion);
        print("<td>".$p3->matricula);
        print("<td>".$p3->idasesor);
        print("<td>".$p3->idmodulo);
        print("<td>".$p3->idactividad);
        print("<td>".$p3->dia);
        print("<td>".$p3->hora);
        print("<td><a class='btn-base btn-cta btn-6' href='eliminarR/$p3->idreservacion'><span>eliminar</span></a></td>");
        print("</tr>\n");
        
      endforeach;

      ?>

    </tbody>
    
  </table>
<form  id="login-form" action="<?php echo base_url('index.php/Principal/StudMod')?>" method="post" role="form" style="display: block" onsubmit="return validar();">
                  <div class="form-group">
                    <div class="row">
                      <div class="col-sm-6 col-sm-offset-3">
                        <input style="background-color:#E67F47" type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Modules">
                      </div>
                    </div>
                  </div>
                  
                </form>

</div>