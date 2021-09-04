<?php
     include '../modelos/conector.php';      
    
$idacta = $_POST['idacta'];
$libro = $_POST['libro'];
$folio = $_POST['folio'];
$fecha = $_POST['fecha'];
$sacramentado = $_POST['sacramentado'];
$catequista = $_POST['catequista'];


/*echo $idacta;
echo "-------";
echo $libro;
echo "-------";
echo $folio;
echo "-------";
echo $fecha;
echo "-------";
echo $sacramentado;
echo "-------";
echo $catequista;*/





 if(!empty($fecha)){

     if($sacramentado !=0){

          if($catequista !=0){

               $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, 
               fechaSacramento = '$fecha', Persona_idPersonaCat = $catequista, 
               Sacramentados_idDatosPersona = $sacramentado where idRegistro = $idacta";
          
                  if (mysqli_query($conn, $sql)) {
          
                  echo "<script> 
                  alert('Acta modificada con exito.'); 
                  window.location.href='../vistas/principalcomunion.php'; 
                  </script>"; 
                  } else {
          
                  echo "<script> 
                  alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                  window.location.href='../vistas/principalcomunion.php'; 
                  </script>"; 
          
                  }





          }else{//no viene catequista

               $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, 
               fechaSacramento = '$fecha',  
               Sacramentados_idDatosPersona = $sacramentado where idRegistro = $idacta";
          
                  if (mysqli_query($conn, $sql)) {
          
                  echo "<script> 
                  alert('Acta modificada con exito.'); 
                  window.location.href='../vistas/principalcomunion.php'; 
                  </script>"; 
                  } else {
          
                  echo "<script> 
                  alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                  window.location.href='../vistas/principalcomunion.php'; 
                  </script>"; 
          
                  }

          }

     }else{ //no viene sacramentado

          if($catequista !=0){

               $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, 
               fechaSacramento = '$fecha', Persona_idPersonaCat = $catequista
                where idRegistro = $idacta";
          
                  if (mysqli_query($conn, $sql)) {
          
                  echo "<script> 
                  alert('Acta modificada con exito.'); 
                  window.location.href='../vistas/principalcomunion.php'; 
                  </script>"; 
                  } else {
          
                  echo "<script> 
                  alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                  window.location.href='../vistas/principalcomunion.php'; 
                  </script>"; 
          
                  }





          }else{//no viene catequista

               $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, 
               fechaSacramento = '$fecha' 
                where idRegistro = $idacta";
          
                  if (mysqli_query($conn, $sql)) {
          
                  echo "<script> 
                  alert('Acta modificada con exito.'); 
                  window.location.href='../vistas/principalcomunion.php'; 
                  </script>"; 
                  } else {
          
                  echo "<script> 
                  alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                  window.location.href='../vistas/principalcomunion.php'; 
                  </script>"; 
          
                  }

          }

     }

 }else{ //no viene la fecha

     if($sacramentado !=0){

          if($catequista !=0){

               $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, 
                Persona_idPersonaCat = $catequista, 
               Sacramentados_idDatosPersona = $sacramentado where idRegistro = $idacta";
          
                  if (mysqli_query($conn, $sql)) {
          
                  echo "<script> 
                  alert('Acta modificada con exito.'); 
                  window.location.href='../vistas/principalcomunion.php'; 
                  </script>"; 
                  } else {
          
                  echo "<script> 
                  alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                  window.location.href='../vistas/principalcomunion.php'; 
                  </script>"; 
          
                  }





          }else{//no viene catequista

               $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio,  
               Sacramentados_idDatosPersona = $sacramentado where idRegistro = $idacta";
          
                  if (mysqli_query($conn, $sql)) {
          
                  echo "<script> 
                  alert('Acta modificada con exito.'); 
                  window.location.href='../vistas/principalcomunion.php'; 
                  </script>"; 
                  } else {
          
                  echo "<script> 
                  alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                  window.location.href='../vistas/principalcomunion.php'; 
                  </script>"; 
          
                  }

          }

     }else{ //no viene sacramentado

          if($catequista !=0){

               $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, 
                Persona_idPersonaCat = $catequista
                where idRegistro = $idacta";
          
                  if (mysqli_query($conn, $sql)) {
          
                  echo "<script> 
                  alert('Acta modificada con exito.'); 
                  window.location.href='../vistas/principalcomunion.php'; 
                  </script>"; 
                  } else {
          
                  echo "<script> 
                  alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                  window.location.href='../vistas/principalcomunion.php'; 
                  </script>"; 
          
                  }





          }else{//no viene catequista

               $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio
                where idRegistro = $idacta";
          
                  if (mysqli_query($conn, $sql)) {
          
                  echo "<script> 
                  alert('Acta modificada con exito.'); 
                  window.location.href='../vistas/principalcomunion.php'; 
                  </script>"; 
                  } else {
          
                  echo "<script> 
                  alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                  window.location.href='../vistas/principalcomunion.php'; 
                  </script>"; 
          
                  }

          }

     }


 }







?>