<?php
     include '../modelos/conector.php';      
    
     session_start();
     //Si existe la sesión "cliente"..., la guardamos en una variable.
     if (isset($_SESSION['nombre'])){
       
     
         $nombre = $_SESSION['nombre'];
         $usuarioid = $_SESSION['iduser'];
        $usuariorol= $_SESSION['roluser']; 
 
       /* echo $nombre;
        echo $usuarioid;
        echo $usuariorol;*/
     }else{
 
         header("location:../index.php"); 
 
     }
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
    <a class="btn btn-danger" href="../controladores/cerrarSesion.php?cerrar=yes"  id="salir" role="button">Salir</a>
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

      <h3>Primera comunión</h3>

           <div class="btn-toolbar" >

           <div class="btn-group mr-2" role="group" aria-label="Third group">
                <a class="btn btn-primary  btn-sm" href="actcomunion.php" role="button"> <span data-feather="plus"></span> Registrar primera comunión</a>
                </div>

                <div style="width: 3px;"></div>

                <div class="btn-group mr-2" role="group" aria-label="Third group">
                <a class="btn btn-primary  btn-sm" href="actsupcomunion.php" role="button"> <span data-feather="plus"></span> Registrar supletoria de primera comunión</a>
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
                <th scope="col">Padres</th>
                <th scope="col">Fecha del Sacramento</th>
                <th scope="col">Catequista</th>
                
                
              
                <th scope="col">Acciones</th>
              </tr>
            </thead>
            <tbody>
            <?php 
           
            
              //codigo llenar tabla
              
                $consu = " SELECT reg.idRegistro as idreg, reg.noLibro, reg.noFolio, reg.noSupletoria,reg.fechaSacramento,reg.supletoria,
                sac.nombre,daper.nombre as papa, dapers.nombre as mama,dper.nombre as catequista
               , reg.supletoria, dperso.nombre as sacer from registro as reg
               
               LEFT JOIN sacramentados as sac on reg.Sacramentados_idDatosPersona =  sac.idDatosPersona
               
               LEFT JOIN persona as perr on perr.idPersona = sac.Persona_idPadre
               LEFT JOIN datospersona as daper on daper.idDatosPersona = perr.DatosPersona_idDatosPersona

               LEFT JOIN persona as perss on perss.idPersona = sac.Persona_idMadre
               LEFT JOIN datospersona as dapers on dapers.idDatosPersona = perss.DatosPersona_idDatosPersona
             
              
               LEFT JOIN persona as pers on reg.Persona_idPersonaCat = pers.idPersona
               LEFT JOIN datospersona as dper on pers.DatosPersona_idDatosPersona = dper.idDatosPersona
               
               
               LEFT JOIN sacramentos as sacra on reg.Sacramentos_idSacramentos = sacra.idSacramentos 
               
               LEFT JOIN persona as sas on reg.Persona_idPersonaSacerdote = sas.idPersona
               LEFT JOIN datospersona as dperso on sas.DatosPersona_idDatosPersona = dperso.idDatosPersona
               
               WHERE reg.Sacramentos_idSacramentos = 2  order by reg.fechaSacramento desc";
                
               
                
                $resul = mysqli_query($conn,$consu);
 
                      $iteracion =0;
                      
                      while($row = mysqli_fetch_array($resul)){
                        $iteracion ++;
                      
                        
                        ?>
                      
                        <tr>
                          <th scope="row"><?php echo $iteracion ?></th>
                          <td><?php echo $row['nombre'] ?></td>
                          <td><?php echo $row['noLibro'] ?></td>
                          <td><?php echo $row['noFolio'] ?></td>
                          <td><?php if (!empty($row['noSupletoria'])){ echo $row['noSupletoria'];}else{ echo"No aplica";} ?></td>
                          <td><?php echo $row['papa']." / ".$row['mama'] ?></td>
                          <td><?php if(!empty($row['fechaSacramento'])){echo $row['fechaSacramento'];}else{echo"No ingresado";} ?></td>
                          <td><?php if(!empty($row['catequista'])){echo $row['catequista'];}else{echo "No ingresado";} ?></td>
                         
                          
                      
                         
                        
                          
                
                <td> 
               

                <div class="btn-group " role="group" aria-label="Third group">
                        
                  <button type="button" id="btndoc" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#documento" 
                  data-idrb="<?php echo $row['idreg'] ?>">
                  <span data-feather="file">
                  </button>
                
                        <div style=" width: 5px;"></div>

                  
                  <button type="button" id="btnedit" class="btn btn-warning btn-sm" 
                  data-idreg="<?php echo $row['idreg'] ?>" data-tipo="<?php echo $row['supletoria'] ?>"
                  data-libro="<?php echo $row['noLibro'] ?>" data-folio="<?php echo $row['noFolio'] ?>"
                  data-suplet="<?php echo $row['noSupletoria'] ?>">
                  <span data-feather="edit-3">
                  </button>

                  <div style=" width: 5px;"></div>

                  <button type="button" id="btndel" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#eliminar" 
                        data-idreg="<?php echo $row['idreg'] ?>">
                        <span data-feather="delete">
                        </button>


                  </div> 
                       
                    </td>



              </tr>
              <?php 
                 }
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
      <div class="modal-header" style="background-color: #0070ff;">
        <h5 class="modal-title" id="exampleModalLongTitle" style="color: white;">Seleccionar Sacerdote</h5>
        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal" aria-label="Close">
        <span data-feather="x"></span>
        </button>
      </div>
      <div class="modal-body">
              <form target="_blank" action="../controladores/pdfcomunion.php" method="POST">
      <input type="text" hidden class="form-control" id="idbau" placeholder="" name="idcomunion">
            
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



 
<!-- Modal eliminar -->
<div class="modal fade" id="eliminar" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Advertencia!</h5>
        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal" aria-label="Close">
        <span data-feather="x"></span>
        </button>
      </div>
      <div class="modal-body">
        <form action="../controladores/eliminaractas.php" method="POST">
      <input type="text" hidden class="form-control" id="eliminarreg" placeholder="Nombre" name="idacta">
        <center>
        <h6>¿Está seguro que desea eliminar el acta?</h6>
        </center>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-danger">Eliminar</button>
      </div>
      </form>
    </div>
  </div>
</div>


  


  
<!-- Modal editar acta -->
<div class="modal fade" id="editaracta" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #FFCE54;">
        <h5 class="modal-title" id="exampleModalLongTitle">Editar acta de Primera Comunión</h5>
        <button type="button" class="btn btn-danger btn-sm" id="cerrar">
        <span data-feather="x"></span>
        </button>
      </div>
      <div class="modal-body">
        <form action="../controladores/editaractacomunion.php" method="POST">
      <input type="text" hidden  class="form-control" id="idacta"  name="idacta">
       
      <div class="row">
               <div class="form-group col-md-6">
                <label for="inputAddress">Numero de libro:</label>
                <input type="text" class="form-control" id="nlibroa" placeholder="No. Libro" name="libro">
              </div>
              <div class="form-group col-md-6">
                <label for="inputAddress2">Numero de folio:</label>
                <input type="text" class="form-control" id="nfolioa" placeholder="No. Folio" name="folio">
              </div>
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
                      <select class="form-select" aria-label="Default select example" name="sacramentado">
                        <option value="0" selected  >Buscar nombre</option>
                        <?php
                       
                       $select = "SELECT * FROM sacramentados where estado = 1  ORDER BY nombre ASC";

                        $ejecutar=mysqli_query($conn,$select) or die(mysli_error($conn));
                        ?>

                      <?php foreach ($ejecutar as $opciones): ?>

                      <option value="<?php echo $opciones['idDatosPersona']  ?>"><?php echo $opciones['nombre']?></option>

                      <?php endforeach ?>
                      </select>
                    
                  </div>

                

                  <div class="input-group col-md-12">
                      <label for="inputAddress">Nombre del catequista:</label>
                      <span class="input-group"></span>
                      <select class="form-select" aria-label="Default select example" name="catequista">
                      <option value="0" selected  >Buscar nombre</option>
                        <?php
                       
                       $select = "SELECT dp.nombre, per.idPersona, per.TipoPersona_idTipoPersona FROM persona as per
                       INNER JOIN datospersona as dp on per.DatosPersona_idDatosPersona = dp.idDatosPersona
                       where TipoPersona_idTipoPersona = 3 and estado = 1 ORDER BY nombre ASC";

                        $ejecutar=mysqli_query($conn,$select) or die(mysli_error($conn));
                        ?>

                      <?php foreach ($ejecutar as $opciones): ?>

                      <option value="<?php echo $opciones['idPersona']  ?>"><?php echo $opciones['nombre']?></option>

                      <?php endforeach ?>
                      </select>
                      
                  </div>




                 





                </div>
              
              
                        <br>
                       
              
                  
              </div>

       </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" id="cerrard">Cerrar</button>
        <button type="submit" class="btn btn-warning">Editar</button>
      </div>
      </form>
    </div>
  </div>
</div>



 
  
<!-- Modal editar supletoria -->
<div class="modal fade" id="msupletoria" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #FFCE54;">
        <h5 class="modal-title" id="exampleModalLongTitle">Editar Supletoria de Primera Comunión</h5>
        <button type="button" class="btn btn-danger btn-sm" id="cerrarsupled">
        <span data-feather="x"></span>
        </button>
      </div>
      <div class="modal-body">
        <form action="../controladores/editarsupcomunion.php" method="POST">
        <input type="text" hidden class="form-control" id="idsuple"  name="idacta">
       

        <div class="row">
              <div class="form-group col-md-4">
                <label for="inputAddress">Numero de libro:</label>
                <input type="text" class="form-control" id="nlibros" placeholder="No. Libro" name="libro">
              </div>
              <div class="form-group col-md-4">
                <label for="inputAddress2">Numero de folio:</label>
                <input type="text" class="form-control" id="nfolios" placeholder="No. Folio" name="folio">
              </div>
              <div class="form-group col-md-4">
                <label for="inputAddress2">Numero de supletoria:</label>
                <input type="text" class="form-control" id="nsuples" placeholder="No. Supletoria" name="suple">
              </div>
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
                      <select class="form-select" aria-label="Default select example" name="sacramentado">
                      <option value="0" selected  >Buscar nombre</option>
                        <?php
                       
                       $select = "SELECT * FROM sacramentados where estado = 1 ORDER BY nombre ASC";

                        $ejecutar=mysqli_query($conn,$select) or die(mysli_error($conn));
                        ?>

                      <?php foreach ($ejecutar as $opciones): ?>

                      <option value="<?php echo $opciones['idDatosPersona']  ?>"><?php echo $opciones['nombre']?></option>

                      <?php endforeach ?>
                      </select>
                      
                  </div>

                 

               

                  <div class="input-group col-md-12">
                      <label for="inputAddress">Sacerdote:</label>
                      <span class="input-group"></span>
                      <select class="form-select" aria-label="Default select example" name="sacerdote">
                      <option value="0" selected  >Buscar nombre</option>
                        <?php
                       
                       $selecsa = "SELECT per.idPersona,per.TipoPersona_idTipoPersona ,dp.nombre FROM persona as per
                                   INNER JOIN datospersona as dp on DatosPersona_idDatosPersona = idDatosPersona
                                   WHERE TipoPersona_idTipoPersona = 4 and estado = 1 ORDER BY nombre ASC";

                        $ejecutarsa=mysqli_query($conn,$selecsa) or die(mysli_error($conn));
                        ?>

                      <?php foreach ($ejecutarsa as $opcionessa): ?>

                      <option value="<?php echo $opcionessa['idPersona']  ?>"><?php echo $opcionessa['nombre']?></option>

                      <?php endforeach ?>
                      </select>
                     
                  </div>

                  <div class="input-group col-md-12">
                      <label for="inputAddress">Catequista:</label>
                      <span class="input-group"></span>
                      <select class="form-select" aria-label="Default select example" name="catequista">
                      <option value="0" selected  >Buscar nombre</option>
                        <?php
                       
                       $select = "SELECT dp.nombre, per.idPersona, per.TipoPersona_idTipoPersona FROM persona as per
                       INNER JOIN datospersona as dp on per.DatosPersona_idDatosPersona = dp.idDatosPersona
                       where TipoPersona_idTipoPersona = 3 and estado = 1  ORDER BY nombre ASC";

                        $ejecutar=mysqli_query($conn,$select) or die(mysli_error($conn));
                        ?>

                      <?php foreach ($ejecutar as $opciones): ?>

                      <option value="<?php echo $opciones['idPersona']  ?>"><?php echo $opciones['nombre']?></option>

                      <?php endforeach ?>
                      </select>
                      
                  </div>
                  
                 





                </div>
              
              
                        
                       
              
                  
              </div>
          



    
       </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" id="cerrarsuple">Cerrar</button>
        <button type="submit" class="btn btn-warning">Editar</button>
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


  $(document).on("click", "#btndel", function (){
    var idacta =$(this).data('idreg');
    
    
    $("#eliminarreg").val(idacta);
   
   
  })



  $(document).on("click", "#btnedit", function (){
    var idedit =$(this).data('idreg');
    var tipo =$(this).data('tipo');
    var lib =$(this).data('libro');
    var fol =$(this).data('folio');
    var supletoria =$(this).data('suplet');
    


    //console.log(tipo);
    
    if(tipo == 1){// mostrar modal editar acta
     
     $('#msupletoria').modal('show');
     $("#idsuple").val(idedit);

     $("#nlibros").val(lib);
     $("#nfolios").val(fol);
     $("#nsuples").val(supletoria);
    

    }else if (tipo == 0){//mostrar modal editar supletoria
      //$('#msupletoria').modal('show');
      $('#editaracta').modal('show');
      $("#idacta").val(idedit);

      $("#nlibroa").val(lib);
     $("#nfolioa").val(fol);
    


    }  
    
  
      
  })


  
  $(document).on("click", "#cerrar", function (){
    $('#editaracta').modal('hide');
  })

  $(document).on("click", "#cerrard", function (){
    $('#editaracta').modal('hide');
  })

  $(document).on("click", "#cerrarsupled", function (){
    $('#msupletoria').modal('hide');
  })

  $(document).on("click", "#cerrarsuple", function (){
    $('#msupletoria').modal('hide');
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
