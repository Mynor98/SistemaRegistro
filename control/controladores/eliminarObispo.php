<?php  
include '../modelos/conector.php';

$idOb=$_POST['eidobispo'];
//echo $idPad;
     


    if (!empty($idOb)){

    
     
            $sql = "UPDATE persona SET estado = 0 WHERE idPersona = $idOb";

                mysqli_query($conn, $sql);
               
                header('Location: ../vistas/principalobispo.php');

                
         
          
            
       
    }else{
    
    
    echo "<script> 
    alert('Especificar un ID.'); 
    window.location.href='../vistas/principalobispo.php'; 
    </script>"; 
    
    }
   
?>