<?php
     include '../modelos/conector.php'; 
     $ids = $_POST['ids'];
     $nombre = $_POST['nombre'];
    
     
  
  
    
  
  
    if (!empty($ids)){

        $sql = "UPDATE datospersona SET nombre = '$nombre' where idDatosPersona = $ids";

        if (mysqli_query($conn, $sql)) {



            echo "<script> 
            alert('Obispo se modificó con exito.'); 
            window.location.href='../vistas/principalobispo.php'; 
            </script>"; 
        } else {
    
            echo "<script> 
            alert('Error, Obispo no modificado. Revisar datos ingresados.'); 
            window.location.href='../vistas/principalobispo.php'; 
            </script>"; 
            
        }



    }else{

     
    
            echo "<script> 
            alert('Error, Obispo no modificado. Revisar datos ingresados.'); 
            window.location.href='../vistas/principalobispo.php'; 
            </script>"; 
            
        


    }
    

     ?>