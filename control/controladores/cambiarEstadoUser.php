<?php  
include '../modelos/conector.php';

$idUser=$_GET['idUser'];

        $conest = "SELECT estado FROM usuario WHERE idUsuario = $idUser";
         $eject = mysqli_query($conn, $conest);
         $estado = mysqli_fetch_array($eject);


    if (!empty($idUser)){

     if($estado['estado'] == 1)
     {
     
            $sql = "UPDATE usuario SET estado = 0 WHERE idUsuario = $idUser";

                mysqli_query($conn, $sql);
               
                header('Location: ../vistas/principalusuarios.php');

                
         }else{
            $sql = "UPDATE usuario SET estado = 1 WHERE idUsuario = $idUser";

            mysqli_query($conn, $sql);
            header('Location: ../vistas/principalusuarios.php');
            
        }
    
    }else{
    
    echo "Debe especificar un 'id'.\n";
    echo "<script> 
    alert('Especificar un ID.'); 
    window.location.href='../vistas/principalusuarios.php'; 
    </script>"; 
    
    }
?>