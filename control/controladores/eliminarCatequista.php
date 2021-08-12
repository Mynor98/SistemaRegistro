<?php  
include '../modelos/conector.php';

$idCat=$_POST['eidcat'];

     


    if (!empty($idCat)){

    
     
            $sql = "UPDATE persona SET estado = 0 WHERE idPersona = $idCat";

                mysqli_query($conn, $sql);
               
                header('Location: ../vistas/principalcatequistas.php');

                
         
          
            
       
    }else{
    
    
    echo "<script> 
    alert('Especificar un ID.'); 
    window.location.href='../vistas/principalcatequistas.php'; 
    </script>"; 
    
    }
    
?>