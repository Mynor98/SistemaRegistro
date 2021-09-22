<?php
     include '../modelos/conector.php';
     
     session_start();
     //Si existe la sesión "cliente"..., la guardamos en una variable.
     if (isset($_SESSION['nombre'])){
      
         $nombre = $_SESSION['nombre'];
         $usuarioid = $_SESSION['iduser'];
        $usuariorol= $_SESSION['roluser']; 
      if($usuariorol == 2 || $usuariorol == 3){

        header("location:index.php"); 

      }
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
  	<script src="js/select2.js"></script>

    <link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap4.min.css"></link>
		<script src="js/jquery-3.5.1.js"></script>   
		<script src="js/jquery.dataTables.min.js"></script>   
		<script src="js/dataTables.bootstrap4.min.js"></script> 
    <script src="js/dataTables.responsive.min.js"></script>  
    <script src="js/responsive.bootstrap4.min.js"></script>  
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
      <span id="usuario"> <?php echo $nombre; ?></span>
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
    
    <div class="container col-lg-10" style=" background-color: white; padding-top: 20px; padding-bottom: 20px; border-radius: 20px;" >
        <div class ="row">
          <div class="col-lg-12">



          

          <div class="btn-toolbar" >
          <h3>Usuarios</h3>
          <div style="width:10px;"></div>
           <div class="btn-group mr-2" role="group" aria-label="Third group">
           <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
           <span data-feather="user-plus"></span> Registrar Usuario
                    </button>
                </div>

               
           </div>    
           <hr>
           <br>
      
        
           <table id="formato" class="table table-striped "  style="width:100%">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Usuario</th>
      <th scope="col">Correo</th>
      <th scope="col">Tipo de usuario</th>
      <th scope="col">Estado</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
  <?php 
  $con = "SELECT * FROM usuario";
  $result = mysqli_query($conn,$con);
  $iteracion =0;
  while($row = mysqli_fetch_array($result)){
    $iteracion ++;
    ?>
   
    <tr>
      <th scope="row"><?php echo $iteracion ?></th>
      <td><?php echo $row['nombre'] ?></td>
      <td><?php echo $row['usuario'] ?></td>
      <td><?php echo $row['correo'] ?></td>
      <td><?php if($row['Rol_idRol'] == 1){echo "Administrador";}else if($row['Rol_idRol'] == 2){echo "Editor";}else{echo "Visualizador";} ?></td>
      <td><a class="btn <?php if($row['estado'] == 1){ echo "btn-success";}else{echo"btn-secondary";} ?>  btn-sm" href="../controladores/cambiarEstadoUser.php?idUser=<?php echo $row['idUsuario']  ?>"> <?php if($row['estado'] == 1){ echo "Activo";}else{echo"Inactivo";} ?></a></td>
      <td> 
      <div class="btn-toolbar" >

        <div class="btn-group mr-2" role="group" aria-label="Third group">
        <button type="button" id="btnmodalid" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#exampleModalCenterd" 
        data-id="<?php echo $row['idUsuario']  ?>" data-nom="<?php echo $row['nombre']  ?>" 
        data-use="<?php echo $row['usuario']  ?>" data-corr="<?php echo $row['correo']  ?>">
        <span data-feather="edit-3">
        </button>



        <div style=" width: 5px;"></div>

        <div class="btn-group mr-2" role="group" aria-label="Third group">
        <button type="button" id="btneliminar" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#meliminar"
        data-ide="<?php echo $row['idUsuario']  ?>">
        <span data-feather="delete">
        </button>
          </div>  
          






            </div>

            </td> 
</div>    




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
    
  
  



<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Registrar Usuario</h5>
        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal" aria-label="Close">
        <span data-feather="x"></span>
        </button>
        </button>
      </div>
      <form action="../controladores/insertarUsuario.php" method="POST">
      <div class="modal-body">
              
                <label for="inputAddress">Nombre completo:</label>
                <input type="text" class="form-control" id="nlibro" placeholder="Nombre" name="nombre">
              
              
                <label for="inputAddress2">Nombre de usuario:</label>
                <input type="text" class="form-control" id="nfolio" placeholder="Usuario" name="usuario">

                <label for="inputAddress2">Correo electronico:</label>
                <input type="text" class="form-control" id="nfolio" placeholder="Correo" name="correo">
            
                <label for="inputAddress2">Contraseña:</label>
                <input type="password" class="form-control" id="nfolio" placeholder="Contraseña" name="contra">
            

               
                <label for="inputAddress">Tipo de usuario:</label>
                    	<select class="form-select" aria-label="Default select example" name="tipo">
                        <option value="0" selected >Buscar tipo</option>
                        <?php
                       
                        $consulta ="SELECT * FROM rol";
                        $ejecutar=mysqli_query($conn,$consulta) or die(mysli_error($conn));
                        ?>

                      <?php foreach ($ejecutar as $opciones): ?>

                      <option value="<?php echo $opciones['idRol']  ?>"><?php echo $opciones['nombreRol']?></option>

                      <?php endforeach ?>
                      </select>

                
    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" value="enviardatos" class="btn btn-primary">Registrar</button>
      </div>
      </form>
    </div>
  </div>
</div>



<!-- Modal editar-->
<div class="modal fade" id="exampleModalCenterd" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #FFCE54;">
        <h5 class="modal-title" id="exampleModalLongTitle">Editar usuario</h5>
        <button type="button" class="btn btn-danger btn-sm"  data-dismiss="modal">
        <span data-feather="x"></span>
        </button>
      </div>
      <div class="modal-body">
         <form action="../controladores/modificarUsuario.php" method="POST">
      <input hidden type="text" class="form-control" id="idus" placeholder="" name="idus">

      <label for="inputAddress">Nombre completo:</label>
                <input  type="text" class="form-control" id="nombre" placeholder="" name="nombre">
              
              
                <label for="inputAddress2">Nombre de usuario:</label>
                <input type="text" class="form-control" id="user" placeholder="" name="usuario">

                <label for="inputAddress2">Correo electronico:</label>
                <input type="text" class="form-control" id="correo" placeholder="" name="correo">
            
                <label for="inputAddress2">Contraseña:</label>
                <input type="password" class="form-control" id="nfolio" placeholder="Nueva contraseña" name="contra">

                <label for="inputAddress">Tipo de usuario:</label>
                    	<select class="form-select" aria-label="Default select example" name="tipo">
                        <option value="0" selected >Buscar tipo</option>
                        <?php
                       
                        $consul ="SELECT * FROM rol";
                        $ejecconsul=mysqli_query($conn,$consul) or die(mysli_error($conn));
                        ?>

                      <?php foreach ($ejecconsul as $tipos): ?>

                      <option value="<?php echo $tipos['idRol']  ?>"><?php echo $tipos['nombreRol']?></option>

                      <?php endforeach ?>
                      </select>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" id="btncerrar2">Cerrar</button>
        <button type="submit" class="btn btn-warning">Editar</button>
      </div>
      </form>
    </div>
  </div>
</div>






    
<!-- Modal eliminar -->
<div class="modal fade" id="meliminar" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Advertencia!</h5>
        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal" aria-label="Close">
        <span data-feather="x"></span>
        </button>
      </div>
      <div class="modal-body">
        <form action="../controladores/eliminarUsuario.php" method="POST">
      <input type="text" hidden class="form-control" id="saceeliminar" placeholder="Nombre" name="iduser">
        <center>
        <h6>¿Está seguro que desea eliminar el usuario?</h6>
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










<script type="text/javascript">

	$(document).ready(function(){
			$('#buscadorper').select2();
      
	});

 

  $(document).on("click", "#btnmodalid", function (){
    var idus =$(this).data('id');
    var nombre =$(this).data('nom');
    var usuario =$(this).data('use');
    var correo =$(this).data('corr');

    $("#idus").val(idus);
    $("#nombre").val(nombre);
    $("#user").val(usuario);
    $("#correo").val(correo);

  })





  $(document).on("click", "#btneliminar", function (){
    var ideace =$(this).data('ide');
 
    $("#saceeliminar").val(ideace);
  
     
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
