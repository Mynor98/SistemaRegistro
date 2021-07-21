<?php
     include '../modelos/conector.php'; 
     $ids = $_POST['ids'];
     $nombre = $_POST['nombre'];
     $lugar = $_POST['lugar'];
     $fecha = $_POST['fecha'];
     
  
  
    
  
  
    if (!empty($fecha)){

        $sql = "UPDATE datospersona SET nombre = '$nombre', lugarNacimiento ='$lugar', fechaNacimiento='$fecha' where idDatosPersona = $ids";

        if (mysqli_query($conn, $sql)) {

            echo "<script> 
            alert('Sacerdote se modificó con exito.'); 
            window.location.href='../vistas/principalsacerdote.php'; 
            </script>"; 
        } else {
    
            echo "<script> 
            alert('Error, Sacerdote no modificado. Revisar datos ingresados.'); 
            window.location.href='../vistas/principalsacerdote.php'; 
            </script>"; 
            
        }



    }else{

        $sql = "UPDATE datospersona SET nombre = '$nombre', lugarNacimiento ='$lugar' where idDatosPersona = $ids";

        if (mysqli_query($conn, $sql)) {

            echo "<script> 
            alert('Sacerdote se modificó con exito.'); 
            window.location.href='../vistas/principalsacerdote.php'; 
            </script>"; 
        } else {
    
            echo "<script> 
            alert('Error, Sacerdote no modificado. Revisar datos ingresados.'); 
            window.location.href='../vistas/principalsacerdote.php'; 
            </script>"; 
            
        }



    }
    

     ?>