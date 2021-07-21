<?php
     include '../modelos/conector.php'; 
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
 
    <title>Parroquia Santo Cristo de Esquipulas</title>
    <!-- Bootstrap core CSS -->
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/select2.css">
	  <script src="js/jquery-3.1.1.min.js"></script>
  	<script src="js/select2.js"></script>


    
    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top  flex-md-nowrap p-0 shadow" id="barra">
  <a class="nav-link col-md-3 col-lg-2 me-0 px-3" href="index.php" id="esimg"><img src="img/logo.png" alt="" id="imagen"></a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation" >
    <span class="navbar-toggler-icon"></span>
  </button>
  <br>
  <ul class="navbar-nav px-3 ">
    <li class="nav-item text-nowrap">
      <span hidden> </span>
    </li>
  </ul>
  <br>
  <ul class="navbar-nav px-3 ">
    <li class="nav-item text-nowrap">
      <span hidden></span>
    </li>
  </ul>
  <br>
  <ul class="navbar-nav px-3 ">
    <li class="nav-item text-nowrap">
      <span hidden></span>
    </li>
  </ul>
  <br>
  <ul class="navbar-nav px-3 ">
    <li class="nav-item text-nowrap">
      <span id="fecha"> 
        <?php
      $diassemana = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
      $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
       
      echo $diassemana[date('w')]." ".date('d')." de ".$meses[date('n')-1]. " del ".date('Y') ;
      //Salida: Miercoles 05 de Septiembre del 2016
       

        setlocale(LC_ALL,"es_ES");
        $DateAndTime =date("F j, Y, g:i a"); 
        //echo "$DateAndTime";
        ?>
      </span>
    </li>
  </ul>
  <br>
  <ul class="navbar-nav px-3 ">
    <li class="nav-item text-nowrap">
      <span id="usuario"> Hola Mynor velásquez</span>
    </li>
  </ul>

  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
    <a class="btn btn-danger" href="#" id="salir" role="button">Salir</a>
    </li>
  </ul>
</header>



<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="principalbautizo.php">
              <span data-feather="clipboard"></span>
              Bautizo
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="principalcomunion.php">
              <span data-feather="clipboard"></span>
              Primera comunión
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="principalconfir.php">
              <span data-feather="clipboard"></span>
             Confirmación
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="principalmatrimonio.php">
              <span data-feather="clipboard"></span>
              Matrimonio
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="principalsacerdote.php">
              <span data-feather="users"></span>
              Sacerdotes
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="principalpersona.php">
              <span data-feather="user"></span>
              Sacramentados
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="principalpadres.php">
              <span data-feather="users"></span>
              Padres
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="principalpadrinos.php">
              <span data-feather="users"></span>
              Padrinos
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="principalcatequistas.php">
              <span data-feather="users"></span>
              Catequistas
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="principalusuarios.php">
              <span data-feather="user"></span>
              Usuarios
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main id="main" class="col-xs-9 ms-sm-auto col-lg-10 px-md-4">
    
    <div class="container col-lg-6" style=" background-color: white; padding-top: 20px; padding-bottom: 20px; border-radius: 20px;" >
        <div class ="row">
          <div class="col-lg-12">

              <h3>Registro de bautizo</h3>
             <hr>
             <br>
          <form class="row" action="../controladores/insertarbautizo.php" method="POST">
              
              <div class="form-group col-md-6">
                <label for="inputAddress">Numero de libro:</label>
                <input type="text" class="form-control" id="nlibro" placeholder="No. Libro" name="libro">
              </div>
              <div class="form-group col-md-6">
                <label for="inputAddress2">Numero de folio:</label>
                <input type="text" class="form-control" id="nfolio" placeholder="No. Folio" name="folio">
              </div>
              <div class="form-group">
                <label for="inputAddress2">Fecha de bautizo:</label>
                <input type="date" class="form-control" id="fbautizo" placeholder="" name="fecha">
              </div>

              <div class="form-row">
                <div class="form-row align-items-center">

                  <div class="input-group col-md-12">
                      <label for="inputAddress">Nombre de quien recibió el sacramento:</label>
                      <span class="input-group"></span>
                    	<select id="buscadorn" style="width: 60%" name="sacramentado">
                        <option value="0" selected  >Buscar nombre</option>
                        <?php
                       
                       $select = "SELECT * FROM sacramentados  ORDER BY nombre ASC";

                        $ejecutar=mysqli_query($conn,$select) or die(mysli_error($conn));
                        ?>

                      <?php foreach ($ejecutar as $opciones): ?>

                      <option value="<?php echo $opciones['idDatosPersona']  ?>"><?php echo $opciones['nombre']?></option>

                      <?php endforeach ?>
                      </select>

                      <button type="button" class="btn btn-primary btn-sm" id="btnpersona">
                        Registrar Bautizado
                      </button>
                  </div>

                  

                  <div class="input-group col-md-12">
                      <label for="inputAddress">Padrino #1:</label>
                      <span class="input-group"></span>
                    	<select id="buscadorpd" style="width: 60%" name="padrinou">
                        
                        <option value="0" selected  >Buscar nombre</option>
                        <?php
                       
                       $selectd = "SELECT per.idPersona, per.TipoPersona_idTipoPersona, dp.nombre  FROM persona as per
                                   INNER JOIN datospersona as dp on DatosPersona_idDatosPersona = idDatosPersona
                                   WHERE TipoPersona_idTipoPersona = 2 ORDER BY nombre ASC";

                        $ejecutard=mysqli_query($conn,$selectd) or die(mysli_error($conn));
                        ?>

                      <?php foreach ($ejecutard as $opcionesd): ?>

                      <option value="<?php echo $opcionesd['idPersona']  ?>"><?php echo $opcionesd['nombre']?></option>

                      <?php endforeach ?>
                      </select>

                      <button type="button" class="btn btn-primary btn-sm" id="btnpadrino">
                        Registrar Padrino
                      </button>
                     
                  </div>
                  </div>

                  <div class="input-group col-md-12">
                      <label for="inputAddress">Padrino #2:</label>
                      <span class="input-group"></span>
                    	<select id="buscadorpdd" style="width: 60%" name="padrinod">
                      <option value="0" selected  >Buscar nombre</option>
                        <?php
                       
                       $selectt = "SELECT per.idPersona,per.TipoPersona_idTipoPersona ,dp.nombre FROM persona as per
                                   INNER JOIN datospersona as dp on DatosPersona_idDatosPersona = idDatosPersona
                                   WHERE TipoPersona_idTipoPersona = 2 ORDER BY nombre ASC";

                        $ejecutart=mysqli_query($conn,$selectt) or die(mysli_error($conn));
                        ?>

                      <?php foreach ($ejecutart as $opcionest): ?>

                      <option value="<?php echo $opcionest['idPersona']  ?>"><?php echo $opcionest['nombre']?></option>

                      <?php endforeach ?>
                      </select>

                      <button type="button" class="btn btn-primary btn-sm" id="btnpadrino2">
                        Registrar Padrino
                      </button>
                  </div>


                  <div class="input-group col-md-12">
                      <label for="inputAddress">Seleccionar Sacerdote quien Bautizó:</label>
                      <span class="input-group"></span>
                    	<select id="buscadors" style="width: 60%" name="sacerdoteb">
                      <option value="0" selected  >Buscar nombre</option>
                        <?php
                       
                       $selecsa = "SELECT per.idPersona,per.TipoPersona_idTipoPersona ,dp.nombre FROM persona as per
                                   INNER JOIN datospersona as dp on DatosPersona_idDatosPersona = idDatosPersona
                                   WHERE TipoPersona_idTipoPersona = 4 ORDER BY nombre ASC";

                        $ejecutarsa=mysqli_query($conn,$selecsa) or die(mysli_error($conn));
                        ?>

                      <?php foreach ($ejecutarsa as $opcionessa): ?>

                      <option value="<?php echo $opcionessa['idPersona']  ?>"><?php echo $opcionessa['nombre']?></option>

                      <?php endforeach ?>
                      </select>

                      <button type="button" class="btn btn-primary btn-sm" id="btnsacerdote">
                        Registrar Sacerdote
                      </button>
                  </div>

                  

                  <br>
                  <div class="form-floating">
                   <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="notas"></textarea>
                    <label for="floatingTextarea2">Notas al margen:</label>
                  </div>

                
                 <br>
                 
                       
              
                    <div class="d-grid gap-2">
                      <button type="submit" class="btn btn-success btn-lg btn-block">Registrar</button>
                    </div>
              </div>
          </form>

      </div>

      </div>
      
      </div>

    </main>
    
  
 


<!-- Modal persona -->
<div class="modal fade" id="mpersona" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"><u>Registrar Participante</u></h5>
        <button type="button" class="btn btn-danger btn-sm" id="btncerrar">
        <span data-feather="x"></span>
        </button>
      </div>
      <div class="modal-body">
              <form action="../controladores/insertarsacramentadoBautizo.php" method="POST">
                <label for="inputAddress">Nombre del Sacramentado:</label>
                <input type="text" class="form-control" id="nlibro" placeholder="Nombre" name="nombre">

                <label for="inputAddress2">Genero del sacramentado:</label>
                <select class="form-select" aria-label="Default select example" name="genero">
                  <option value="0" selected>Genero</option>
                  <option value="Masculino">Masculino</option>
                  <option value="Femenino">Femenino</option>
                  
                </select>
              
              
                <label for="inputAddress2">Lugar de nacimiento:</label>
                <input type="text" class="form-control" id="" placeholder="Lugar" name="lugarn">

                <label for="inputAddress">Lugar donde vive actualmente:</label>
                <input type="text" class="form-control" id="nlibro" placeholder="Lugar" name="lugara">
             
                <label for="inputAddress2">Fecha de nacimiento:</label>
                <input type="date" class="form-control" id="fbautizo" placeholder="" name="fecha">
              


                
                      <label for="inputAddress">Seleccionar nombre del Padre:</label>
                      <select class="form-select" aria-label="Default select example" name="padre">
                        <option value="0" selected >Buscar padre</option>
                        <?php
                       
                       $nueva = "SELECT per.idPersona, dper.nombre FROM persona as per
                        INNER JOIN datospersona as dper ON per.DatosPersona_idDatosPersona = dper.idDatosPersona
                        WHERE per.TipoPersona_idTipoPersona = 1 and dper.genero = 'Masculino'  ORDER BY dper.nombre ASC";
                        $ejecutar=mysqli_query($conn,$nueva) or die(mysli_error($conn));
                        ?>

                      <?php foreach ($ejecutar as $opciones): ?>

                      <option value="<?php echo $opciones['idPersona']  ?>"><?php echo $opciones['nombre']?></option>

                      <?php endforeach ?>
                      </select>


                      <label for="inputAddress">Seleccionar nombre de la Madre:</label>
                      <select class="form-select" aria-label="Default select example" name="madre">
                        <option value="0" selected >Buscar madre</option>
                        <?php
                       
                       $nueva = "SELECT per.idPersona, dper.nombre FROM persona as per
                        INNER JOIN datospersona as dper ON per.DatosPersona_idDatosPersona = dper.idDatosPersona
                        WHERE per.TipoPersona_idTipoPersona = 1 and dper.genero = 'Femenino' ORDER BY dper.nombre ASC";
                        $ejecutar=mysqli_query($conn,$nueva) or die(mysli_error($conn));
                        ?>

                      <?php foreach ($ejecutar as $opciones): ?>

                      <option value="<?php echo $opciones['idPersona']  ?>"><?php echo $opciones['nombre']?></option>

                      <?php endforeach ?>
                      </select>


                      


                       
                  
    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" id="btncerrar2">Cerrar</button>
        <button type="submit" class="btn btn-primary">Registrar</button>
      </div>
      </form>
    </div>
  </div>
</div>

 






<!-- Modal padrino -->
<div class="modal fade" id="mpadrino" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"><u>Registrar Padrino</u></h5>
        <button type="button" class="btn btn-danger btn-sm" id="btncerrarp">
        <span data-feather="x"></span>
        </button>
      </div>
      <div class="modal-body">
                <form action="../controladores/insertarPadrinoBautizo.php" method="POST">

                <label for="inputAddress">Nombre del Padrino o madrina:</label>
                <input type="text" class="form-control" id="nlibro" placeholder="Nombre" name="nombre">
              
                <label for="inputAddress">Seleccionar genero:</label>
                    	<select class="custom-select custom-select-lg mb-3" style="width: 100%" name="genero">
                        <option value ="0" selected>Genero</option>
                        <option value ="Masculino">Masculino</option>
                        <option value = "Femenino">Femenino</option>
                      
                      </select>
                             
    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" id="btncerrarp2">Cerrar</button>
        <button type="submit" class="btn btn-primary">Registrar</button>
      </div>
      </form>
    </div>
  </div>
</div>





<!-- Modal sacerdote -->
<div class="modal fade" id="msacerdote" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"><u>Registrar Sacerdote</u></h5>
        <button type="button" class="btn btn-danger btn-sm" id="btncerrars">
        <span data-feather="x"></span>
        </button>
      </div>
      <div class="modal-body">
              <form action="../controladores/insertarSacerdoteBautizo.php" method="POST">

             

                <label for="inputAddress">Nombre del Sacerdote:</label>
                <input type="text" class="form-control" id="" placeholder="Nombre" name="nombre"> 
              
              
                <label for="inputAddress2">Lugar de nacimiento:</label>
                <input type="text" class="form-control" id="" placeholder="Lugar" name="lugar">
            
             
                <label for="inputAddress2">Fecha de nacimiento:</label>
                <input type="date" class="form-control" id="" placeholder="" name="fecha">

                
    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" id="btncerrars2">Cerrar</button>
        <button type="submit" class="btn btn-primary">Registrar</button>
      </div>
      </form>
    </div>
  </div>
</div>


<script type="text/javascript">
	$(document).ready(function(){
			$('#buscadorn').select2();
      $('#buscadorpd').select2();
      $('#buscadorpdd').select2();
      $('#buscadors').select2();

	});


  $(document).ready(function(){
			$("#btnpersona").click(function(){
        $('#mpersona').modal('show');
      });  

      $("#btncerrar").click(function(){
        $("#mpersona").modal("hide");
      });

      $("#btncerrar2").click(function(){
        $("#mpersona").modal("hide");
      });


      $("#btnpadrino").click(function(){
        $('#mpadrino').modal('show');
      });  

      $("#btncerrarp").click(function(){
        $("#mpadrino").modal("hide");
      });

      $("#btncerrarp2").click(function(){
        $("#mpadrino").modal("hide");
      });


      $("#btnpadrino2").click(function(){
        $('#mpadrino').modal('show');
      });  


      $("#btnsacerdote").click(function(){
        $('#msacerdote').modal('show');
      });  

      $("#btncerrars").click(function(){
        $("#msacerdote").modal("hide");
      });

      $("#btncerrars2").click(function(){
        $("#msacerdote").modal("hide");
      });
     
	});	
	



</script>


      <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
    
     
      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
      <script src="js/dashboard.js"></script>    
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
     
     
  </body>
</html>