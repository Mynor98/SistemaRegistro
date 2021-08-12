<?php
     include '../modelos/conector.php'; 
     $ids = $_POST['ids'];
     $nombre = $_POST['nombre'];
     $tiposac = $_POST['sacerdote'];
     
  
  
    
            
  
    if ($tiposac!=0){

        $sql = "UPDATE datospersona SET nombre = '$nombre' where idDatosPersona = $ids";

        if (mysqli_query($conn, $sql)) {

            $sqltipo = "UPDATE persona SET tipoSacerdote = '$tiposac' where DatosPersona_idDatosPersona = $ids";
            mysqli_query($conn, $sqltipo);



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

        $sql = "UPDATE datospersona SET nombre = '$nombre' where idDatosPersona = $ids";

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