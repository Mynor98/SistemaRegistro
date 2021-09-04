<?php
     include '../modelos/conector.php'; 

        $idacta = $_POST['idacta'];

        $registroc = "SELECT Sacramentos_idSacramentos as tipo FROM registro WHERE idRegistro = $idacta ";
   
        $registroresultado = mysqli_query($conn,$registroc);
        $linea  = mysqli_fetch_array($registroresultado);

        $tipoacta = $linea['tipo'];


        if($tipoacta == 1){

            $eliminar = "DELETE FROM registro WHERE idRegistro = $idacta";
          
            if (mysqli_query($conn, $eliminar)) {
        
                echo "<script> 
                alert('Se eliminó el acta.'); 
                window.location.href='../vistas/principalbautizo.php'; 
                </script>"; 
            

            } else {

                echo "<script> 
                alert('Error, Revisar datos.'); 
                window.location.href='../vistas/principalbautizo.php'; 
                </script>"; 

            }   
            
        }else if($tipoacta == 2){

            $eliminar = "DELETE FROM registro WHERE idRegistro = $idacta";
          
            if (mysqli_query($conn, $eliminar)) {
        
                echo "<script> 
                alert('Se eliminó el acta.'); 
                window.location.href='../vistas/principalcomunion.php'; 
                </script>"; 
            

            } else {

                echo "<script> 
                alert('Error, Revisar datos.'); 
                window.location.href='../vistas/principalcomunion.php'; 
                </script>"; 

            }   
            

        }else if($tipoacta == 3){

            $eliminar = "DELETE FROM registro WHERE idRegistro = $idacta";
          
            if (mysqli_query($conn, $eliminar)) {
        
                echo "<script> 
                alert('Se eliminó el acta.'); 
                window.location.href='../vistas/principalconfir.php'; 
                </script>"; 
            

            } else {

                echo "<script> 
                alert('Error, Revisar datos.'); 
                window.location.href='../vistas/principalconfir.php'; 
                </script>"; 

            }   

        }else if($tipoacta == 4){

            $eliminar = "DELETE FROM registro WHERE idRegistro = $idacta";
          
            if (mysqli_query($conn, $eliminar)) {
        
                echo "<script> 
                alert('Se eliminó el acta.'); 
                window.location.href='../vistas/principalmatrimonio.php'; 
                </script>"; 
            

            } else {

                echo "<script> 
                alert('Error, Revisar datos.'); 
                window.location.href='../vistas/principalmatrimonio.php'; 
                </script>"; 

            }   
        }









?>