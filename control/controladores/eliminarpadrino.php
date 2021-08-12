<?php  
include '../modelos/conector.php';

$idPad=$_POST['eidpad'];
//echo $idPad;
     


    if (!empty($idPad)){

    
     
            $sql = "UPDATE persona SET estado = 0 WHERE idPersona = $idPad";

                mysqli_query($conn, $sql);
               
                header('Location: ../vistas/principalpadrinos.php');

                
         
          
            
       
    }else{
    
    
    echo "<script> 
    alert('Especificar un ID.'); 
    window.location.href='../vistas/principalpadrinos.php'; 
    </script>"; 
    
    }
   
?>