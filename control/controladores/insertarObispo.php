<?php
     include '../modelos/conector.php';      
     
     $nobispo = $_POST['obispo'];
   /* echo "si llega";
    echo "------";
    echo $nobispo;*/

    


       
    
    if(!empty($nobispo)){

       

        $sqlcon = "INSERT INTO datospersona (nombre)
                        VALUES ('$nobispo')";
        
        if (mysqli_query($conn, $sqlcon)) {
            
            
            $conscat = "SELECT MAX(idDatosPersona) as idc from datospersona ";
            if ($ejecutar = mysqli_query($conn, $conscat)) {
                $result = mysqli_fetch_array($ejecutar);
                $idult = $result['idc'];

                    $insper ="INSERT INTO persona (TipoPersona_idTipoPersona, DatosPersona_idDatosPersona)
                                            VALUES (5,$idult)";
                    mysqli_query($conn, $insper);
             
                    echo "<script> 
                    alert('Obispo registrado con exito.'); 
                    window.location.href='../vistas/principalobispo.php'; 
                    </script>"; 
            }
            
        
        
        } else {

            echo "<script> 
            alert('Error, Obispo no ingresado. Revisar datos ingresados.'); 
            window.location.href='../vistas/principalobispo.php'; 
            </script>"; 
            
        }   



    }else {
        echo "<script> 
                alert('Error al insertar, Colocar el nombre del Obispo.'); 
                window.location.href='../vistas/principalobispo.php'; 
                </script>"; 

    }
    

?>
