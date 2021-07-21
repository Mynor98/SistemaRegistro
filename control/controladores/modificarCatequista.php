<?php
     include '../modelos/conector.php'; 
     $idc = $_POST['idcat'];
     $nombre = $_POST['nombre'];
     $sector = $_POST['sector'];
  

    echo $idc; 
    echo $nombre;
    echo $sector;
  
    $sql = "UPDATE datospersona SET nombre = '$nombre', sector = '$sector' where idDatosPersona = $idc";
    
    if (mysqli_query($conn, $sql)) {

        echo "<script> 
        alert('Catequista se modificó con exito.'); 
        window.location.href='../vistas/principalcatequistas.php'; 
        </script>"; 
    } else {

        echo "<script> 
        alert('Error, Catequista no modificado. Revisar datos ingresados.'); 
        window.location.href='../vistas/principalcatequistas.php'; 
        </script>"; 
        
    }


     ?>