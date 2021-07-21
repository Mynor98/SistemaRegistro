<?php
     include '../modelos/conector.php'; 
     $idp = $_POST['idp'];
     $nombre = $_POST['nombre'];
     
  

    
  
    $sql = "UPDATE datospersona SET nombre = '$nombre' where idDatosPersona = $idp";
    
    if (mysqli_query($conn, $sql)) {

        echo "<script> 
        alert('Padrino se modificó con exito.'); 
        window.location.href='../vistas/principalpadrinos.php'; 
        </script>"; 
    } else {

        echo "<script> 
        alert('Error, Padrino no modificado. Revisar datos ingresados.'); 
        window.location.href='../vistas/principalpadrinos.php'; 
        </script>"; 
        
    }

     ?>