<?php  
include '../modelos/conector.php';

$idSace=$_POST['eidsace'];
//echo $idPad;
     


    if (!empty($idSace)){

    
     
            $sql = "UPDATE persona SET estado = 0 WHERE idPersona = $idSace";

                mysqli_query($conn, $sql);
               
                header('Location: ../vistas/principalsacerdote.php');

                
         
          
            
       
    }else{
    
    
    echo "<script> 
    alert('Especificar un ID.'); 
    window.location.href='../vistas/principalsacerdote.php'; 
    </script>"; 
    
    }
   
?>