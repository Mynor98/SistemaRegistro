<?php  
include '../modelos/conector.php';

$iduser=$_POST['iduser'];

     


    if (!empty($iduser)){

    
     
            $sql = "DELETE FROM usuario where idUsuario = $iduser";

                mysqli_query($conn, $sql);
               
                header('Location: ../vistas/principalusuarios.php');

                
         
          
            
       
    }else{
    
    
    echo "<script> 
    alert('Especificar un ID.'); 
    window.location.href='../vistas/principalusuarios.php'; 
    </script>"; 
    
    }
    
?>