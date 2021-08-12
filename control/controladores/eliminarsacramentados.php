<?php  
include '../modelos/conector.php';

$idSac=$_POST['eidsac'];



    if (!empty($idSac)){

    
     
            $sql = "UPDATE sacramentados SET estado = 0 WHERE idDatosPersona = $idSac";

                mysqli_query($conn, $sql);
               
                header('Location: ../vistas/principalpersona.php');

                
         
          
            
       
    }else{
    
    
    echo "<script> 
    alert('Especificar un ID.'); 
    window.location.href='../vistas/principalpersona.php'; 
    </script>"; 
    
    }
   
?>