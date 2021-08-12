<?php  
include '../modelos/conector.php';

$idPadr=$_POST['eidpadre'];
//echo $idPad;
     


    if (!empty($idPadr)){

    
     
            $sql = "UPDATE persona SET estado = 0 WHERE idPersona = $idPadr";

                mysqli_query($conn, $sql);
               
                header('Location: ../vistas/principalpadres.php');

                
         
          
            
       
    }else{
    
    
    echo "<script> 
    alert('Especificar un ID.'); 
    window.location.href='../vistas/principalpadres.php'; 
    </script>"; 
    
    }
   
?>