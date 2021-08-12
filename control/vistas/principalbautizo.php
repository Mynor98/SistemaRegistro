<?php
     include '../modelos/conector.php';      
    
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="generator" content="Hugo 0.83.1">
    <title>Parroquia Santo Cristo de Esquipulas</title>
    <!-- Bootstrap core CSS -->
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/select2.css">

	  <link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap4.min.css"></link>
		<script src="js/jquery-3.5.1.js"></script>   
		<script src="js/jquery.dataTables.min.js"></script>   
		<script src="js/dataTables.bootstrap4.min.js"></script> 
    <script src="js/dataTables.responsive.min.js"></script>  
    <script src="js/responsive.bootstrap4.min.js"></script>  
      
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

    <main id="main" class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    
      <div class="container col-lg-12" style=" background-color: white; padding-top: 20px; padding-bottom: 20px; border-radius: 20px;" >
        <div class ="row">
          <div class="col-lg-12">

             
                    <h3>Bautizo</h3>

                    <div class="btn-toolbar" >

                    <div class="btn-group mr-2" role="group" aria-label="Third group">
                          <a class="btn btn-primary  btn-sm" href="actbautizo.php" role="button"> <span data-feather="plus"></span> Registrar bautizo</a>
                          </div>

                          <div style="width: 3px;"></div>

                          <div class="btn-group mr-2" role="group" aria-label="Third group">
                          <a class="btn btn-primary  btn-sm" href="actsupbautizo.php" role="button"> <span data-feather="plus"></span> Registrar supletoria de bautizo</a>
                          </div>
                    </div>    
                    <hr>
                    <br>
                

                    <table id="formato" class="table table-striped "  style="width:100%">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">No.Libro</th>
                <th scope="col">No.Folio</th>
                <th scope="col">No.Supletoria</th>
                <th scope="col">Fecha del Sacramento</th>
                <th scope="col">Edad del Sacramento</th>
                <th scope="col">Primer padrino</th>
                <th scope="col">Segundo padrino</th>
                <th scope="col">Notas</th>
              
                <th scope="col">Acciones</th>
              </tr>
            </thead>
            <tbody>
            <?php 
           
            
              //codigo llenar tabla
              /*
                $consu = " SELECT reg.idRegistro as idreg, reg.noLibro, reg.noFolio, reg.noSupletoria,reg.fechaSacramento,reg.edadSacramento, 
                sacra.nombreSacramentos as sacramento , sac.nombre,sac.genero,dper.nombre as padrino1,dpers.nombre as padrino2,
                reg.alMargen, reg.supletoria, dperso.nombre as sacer from registro as reg
                LEFT JOIN sacramentados as sac on reg.Sacramentados_idDatosPersona =  sac.idDatosPersona
                
                LEFT JOIN persona as pers on reg.Persona_idPadrinouno = pers.idPersona
                LEFT JOIN datospersona as dper on pers.DatosPersona_idDatosPersona = dper.idDatosPersona
                
                LEFT JOIN persona as perso on reg.Persona_idPadrinodos = perso.idPersona
                LEFT JOIN datospersona as dpers on perso.DatosPersona_idDatosPersona = dpers.idDatosPersona
                
                LEFT JOIN sacramentos as sacra on reg.Sacramentos_idSacramentos = sacra.idSacramentos 
                
                LEFT JOIN persona as sas on reg.Persona_idPersonaSacerdote = sas.idPersona
                LEFT JOIN datospersona as dperso on sas.DatosPersona_idDatosPersona = dperso.idDatosPersona
                
                WHERE reg.Sacramentos_idSacramentos = 1  order by reg.fechaSacramento desc";
                */
                $consu ="SELECT * from datospersona";
                
                $resul = mysqli_query($conn,$consu);
 
                      $iteracion =0;
                      
                      while($row = mysqli_fetch_array($resul)){
                        $iteracion ++;
                      }
                        /*
                        ?>
                      
                        <tr>
                          <th scope="row"><?php echo $iteracion ?></th>
                          <td><?php echo $row['nombre'] ?></td>
                          <td><?php echo $row['noLibro'] ?></td>
                          <td><?php echo $row['noFolio'] ?></td>
                          <td><?php echo $row['noSupletoria'] ?></td>
                          <td><?php echo $row['fechaSacramento'] ?></td>
                         <td><?php echo $row['edadSacramento'] ?></td>
                         
                          
                          <td><?php echo $row['padrino1'] ?></td>
                          <td><?php echo $row['padrino2'] ?></td>
                          <td><?php echo $row['alMargen'] ?></td>
                         
                        
                          
                
                <td> 
                <div class="btn-toolbar" >

                <div class="btn-group mr-2" role="group" aria-label="Third group">
                        
                  <button type="button" id="btndoc" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#documento" 
                  data-idrb="<?php echo $row['idreg'] ?>" data-nom="<?php echo $row['nombre'] ?>" data-lib="<?php echo $row['noLibro'] ?>"
                 >
                  <span data-feather="file">
                  </button>
                </div>
                        <div style=" width: 5px;"></div>

                  <div class="btn-group mr-2" role="group" aria-label="Third group">
                  <button type="button" id="btnmodalsac" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modalmodificar" 
                 >
                  <span data-feather="edit-3">
                  </button>
                      </div>  
                    </div>    
                    </td>



              </tr>
              <?php 
            }*/
              ?>
                </tbody>
                  </table>
        </div>
      </div>
     </div>
  

    </main>
    
  

    <div class="modal fade" id="documento" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Seleccionar Sacerdote</h5>
        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal" aria-label="Close">
        <span data-feather="x"></span>
        </button>
      </div>
      <div class="modal-body">
              <form target="_blank" action="../controladores/pdfbautizo.php" method="POST">
      <input type="text" hidden class="form-control" id="idbau" placeholder="" name="idbautizo">
            
                          <label for="inputAddress">Seleccionar nombre del Sacerdote encargado:</label>
                      <select class="form-select" aria-label="Default select example" name="sacerdote">
                        <option value="0" selected >Buscar sacerdote</option>
                        <?php
                       
                       $nueva = "SELECT per.idPersona, dper.nombre FROM persona as per
                        INNER JOIN datospersona as dper ON per.DatosPersona_idDatosPersona = dper.idDatosPersona
                        WHERE per.TipoPersona_idTipoPersona = 4 ORDER BY dper.nombre ASC";
                        $ejecutar=mysqli_query($conn,$nueva) or die(mysli_error($conn));
                        ?>

                      <?php foreach ($ejecutar as $opciones): ?>

                      <option value="<?php echo $opciones['idPersona']  ?>"><?php echo $opciones['nombre']?></option>

                      <?php endforeach ?>
                      </select>
     
      
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary" >Generar acta</button>
      </div>
      </form>
    </div>
  </div>
</div>




 

<script type="text/javascript">
	$(document).ready(function(){
			$('#buscadorper').select2();
      
	});


 





  $(document).on("click", "#btndoc", function (){
    var idacb =$(this).data('idrb');
    
    
    $("#idbau").val(idacb);
   
   
  })

 
  

</script>


      
      <script src="js/datatables.js"></script>
       <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
      <script src="js/dashboard.js"></script>    
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
     
  </body>
</html>
