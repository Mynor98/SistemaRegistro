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
            <a class="nav-link" href="principalobispo.php">
              <span data-feather="users"></span>
              Obispo
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
    
      <div  id="contenedorform">
              <h3>Registro de primera comunión</h3>
              <hr>
          <form class="row" action="../controladores/insertaractacomunion.php" method="POST">
              
              <div class="form-group col-md-6">
                <label for="inputAddress">Numero de libro:</label>
                <input type="text" class="form-control" id="nlibro" placeholder="No. Libro" name="libro">
              </div>
              <div class="form-group col-md-6">
                <label for="inputAddress2">Numero de folio:</label>
                <input type="text" class="form-control" id="nfolio" placeholder="No. Folio" name="folio">
              </div>
              <div class="form-group">
                <label for="inputAddress2">Fecha que recibió por primera ves la Santa Comunión en esta Parroquia:</label>
                <input type="date" class="form-control" id="fbautizo" placeholder="" name="fecha">
              </div>

              <div class="form-row">
                <div class="form-row align-items-center">

                  <div class="input-group col-md-12">
                      <label for="inputAddress">Nombre de quien recibio el sacramento:</label>
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
                        Registrar
                      </button>
                  </div>

                

                  <div class="input-group col-md-12">
                      <label for="inputAddress">Nombre del catequista:</label>
                      <span class="input-group"></span>
                    	<select id="buscadorpd" style="width: 60%" name="catequista">
                      <option value="0" selected  >Buscar nombre</option>
                        <?php
                       
                       $select = "SELECT dp.nombre, per.idPersona, per.TipoPersona_idTipoPersona FROM persona as per
                       INNER JOIN datospersona as dp on per.DatosPersona_idDatosPersona = dp.idDatosPersona
                       where TipoPersona_idTipoPersona = 3 ORDER BY nombre ASC";

                        $ejecutar=mysqli_query($conn,$select) or die(mysli_error($conn));
                        ?>

                      <?php foreach ($ejecutar as $opciones): ?>

                      <option value="<?php echo $opciones['idPersona']  ?>"><?php echo $opciones['nombre']?></option>

                      <?php endforeach ?>
                      </select>
                      <button type="button" class="btn btn-primary btn-sm" id="btncatequista">
                        Registrar catequista
                      </button>
                  </div>




                 





                </div>
              
              
                        <br>
                       
              
                    <div class="d-grid gap-2">
                      <button type="submit" class="btn btn-success btn-lg btn-block">Registrar</button>
                    </div>
              </div>
          </form>

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
              <form action="../controladores/insertarsacramentadoComunion.php" method="POST">
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

 



<!-- Modal -->
<div class="modal fade" id="mcatequista" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"><u>Registrar Catequista</u></h5>
        <button type="button" class="btn btn-danger btn-sm" id="btncerrarc">
        <span data-feather="x"></span>
        </button>
      </div>
      <div class="modal-body">
              <form action="../controladores/insertarcatequistacomunion.php" method="POST">

              <label for="inputAddress">Nombre del Catequista:</label>
                <input type="text" class="form-control" id="nlibro" placeholder="Nombre" name="nombre">
              
              
                <label for="inputAddress2">Sector al que pertenece:</label>
                <input type="text" class="form-control" id="nfolio" placeholder="Sector" name="sector" >
            
                <label for="inputAddress">Seleccionar genero:</label>
                      <span class="input-group"></span>
                    	<select class="form-select" aria-label="Default select example" name="genero">
                        <option  value = "0" selected  >Genero</option>
                        <option value ="Masculino">Masculino</option>
                        <option value ="Femenino">Femenino</option>
                        
                      </select>
                
    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" id="btncerrarc2">Cerrar</button>
        <button type="submit" class="btn btn-primary">Registrar</button>
      </div>
      </form>
    </div>
  </div>
</div>
 

<script type="text/javascript">
	$(document).ready(function(){
			$('#buscadorn').select2();
      $('#buscadorp').select2();
      $('#buscadorm').select2();
      $('#buscadorpd').select2();
      $('#buscadorpdd').select2();
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


      $("#btncatequista").click(function(){
        $('#mcatequista').modal('show');
      });  

      $("#btncerrarc").click(function(){
        $("#mcatequista").modal("hide");
      });

      $("#btncerrarc2").click(function(){
        $("#mcatequista").modal("hide");
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
