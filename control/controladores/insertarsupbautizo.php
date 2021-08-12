<?php
     include '../modelos/conector.php'; 

  $nlibro = $_POST['libro'];
  $nfolio = $_POST['folio'];
  $nsuple = $_POST['suple'];
  $bedad = $_POST['edad'];
  $bsacra = $_POST['sacramentado'];
  $btest = $_POST['testigo'];
  $bpadu = $_POST['padrinou'];
  $bpadd = $_POST['padrinod'];
  $bnotas = $_POST['notas'];
  
/*
    echo $nlibro;
    echo "------";
    echo $nfolio;
    echo "------";
    echo $nsuple;
    echo "------";
    echo $bedad;
    echo "------";
    echo $bsacra;
    echo "------";
    echo $btest;
    echo "------";
    echo $bpadu;
    echo "------";
    echo $bpadd;
    echo "-----";
    echo $bnotas;

*/




     
    if(!empty($nlibro) && !empty($nfolio) && !empty($nsuple)){
       
        if($bsacra != 0){
            
            
 
          if($bpadu !=0 && $bpadd !=0){
         
            
             if(!empty($bedad)){
                          
         $sqlcon = "INSERT INTO registro ( noLibro, noFolio, noSupletoria, edadSacramento, testimonioPersona, supletoria, Sacramentos_idSacramentos, Persona_idPadrinouno, Persona_idPadrinodos, Sacramentados_idDatosPersona)
         VALUES ($nlibro, $nfolio, $nsuple,'$bedad', '$btest', 1, 1, $bpadu, $bpadd, $bsacra);";
 
                 if (mysqli_query($conn, $sqlcon)) {
                          
                     echo "<script> 
                     alert('Acta registrada con exito.'); 
                     window.location.href='../vistas/principalbautizo.php'; 
                     </script>"; 
                 
 
                 } else {
                   
                        
                     echo "<script> 
                     alert('Error, Acta no ingresada. Revisar datos ingresados.'); 
                     window.location.href='../vistas/principalbautizo.php'; 
                     </script>"; 
 
                 }   
                    
             }else{
 
                     echo "<script> 
                     alert('Error, Acta no ingresada. Ingresar edad del bautizo.'); 
                     window.location.href='../vistas/principalbautizo.php'; 
                     </script>";
 
             }
 
         }else if($bpadu !=0 && $bpadd ==0){
 

             if(!empty($bedad)){
                 
                 $sqlcon = "INSERT INTO registro ( noLibro, noFolio, noSupletoria, edadSacramento, testimonioPersona, supletoria, Sacramentos_idSacramentos, Persona_idPadrinouno, Sacramentados_idDatosPersona)
                 VALUES ($nlibro, $nfolio, $nsuple,'$bedad', '$btest', 1, 1, $bpadu, $bsacra)";
         
                         if (mysqli_query($conn, $sqlcon)) {
         
                             echo "<script> 
                             alert('Acta registrada con exito.'); 
                             window.location.href='../vistas/principalbautizo.php'; 
                             </script>"; 
                         
         
                         } else {
         
                             echo "<script> 
                             alert('Error, Acta no ingresada. Revisar datos ingresados.'); 
                             window.location.href='../vistas/principalbautizo.php'; 
                             </script>"; 
         
                         }   
         
                     }else{
         
                             echo "<script> 
                             alert('Error, Acta no ingresada. Ingresar edad del bautizo.'); 
                             window.location.href='../vistas/principalbautizo.php'; 
                             </script>";
         
                     }
 
 
 
                 }else if($bpadu ==0 && $bpadd !=0){

                    echo "<script> 
                    alert('Error, Acta no ingresada. Cuando solo sea un padrino, colocarlo en la primera celda.'); 
                    window.location.href='../vistas/principalbautizo.php'; 
                    </script>";
                        /*
             if(!empty($bedad)){
                 
                 $sqlcon = "INSERT INTO registro ( noLibro, noFolio, noSupletoria, edadSacramento, testimonioPersona, supletoria, Sacramentos_idSacramentos, Persona_idPadrinodos, Sacramentados_idDatosPersona)
                 VALUES ($nlibro, $nfolio, $nsuple,'$bedad', '$btest', 1, 1, $bpadd, $bsacra)";
         
                         if (mysqli_query($conn, $sqlcon)) {
         
                             echo "<script> 
                             alert('Acta registrada con exito.'); 
                             window.location.href='../vistas/principalbautizo.php'; 
                             </script>"; 
                         
         
                         } else {
         
                             echo "<script> 
                             alert('Error, Acta no ingresada. Revisar datos ingresados.'); 
                             window.location.href='../vistas/principalbautizo.php'; 
                             </script>"; 
         
                         }   
          
                     }else{
         
                             echo "<script> 
                             alert('Error, Acta no ingresada. Ingresar edad del bautizo.'); 
                             window.location.href='../vistas/principalbautizo.php'; 
                             </script>";
         
                     }
 
 
 
 */

         }else{
 
 
             echo "<script> 
             alert('Error al insertar, Colocar al menos un padrino.'); 
             window.location.href='../vistas/principalbautizo.php'; 
             </script>"; 
         }
 
    
 
 
        }else{
 
         echo "<script> 
         alert('Error al insertar, Colocar quien recibió el sacramento.'); 
         window.location.href='../vistas/principalbautizo.php'; 
         </script>"; 
 
        }
 
     

 
     }else {
         echo "<script> 
                 alert('Error al insertar, Colocar libro, folio y supletoria.'); 
                 window.location.href='../vistas/principalbautizo.php'; 
                 </script>"; 
 
     }
 
     
 
 
  
 
      ?>





















