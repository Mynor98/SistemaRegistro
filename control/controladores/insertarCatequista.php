<?php
     include '../modelos/conector.php'; 
     
     $nombre = $_POST['nombre'];
     $sector = $_POST['sector'];
     $genero = $_POST['genero'];


    if(!empty($nombre)){

        if($genero == 0){
            echo "<script> 
            alert('Error, Seleccionar un genero.'); 
            window.location.href='../vistas/principalcatequistas.php'; 
            </script>"; 
        }

        $sqlcon = "INSERT INTO datospersona (nombre, genero, sector)
                        VALUES ('$nombre','$genero','$sector')";
        if (mysqli_query($conn, $sqlcon)) {
            
            
            $conscat = "SELECT MAX(idDatosPersona) as idc from datospersona ";
            if ($ejecutar = mysqli_query($conn, $conscat)) {
                $result = mysqli_fetch_array($ejecutar);
                $idult = $result['idc'];

                    $insper ="INSERT INTO persona (TipoPersona_idTipoPersona, DatosPersona_idDatosPersona)
                                            VALUES (3,$idult)";
                    mysqli_query($conn, $insper);
             
                    echo "<script> 
                    alert('Catequista registrado con exito.'); 
                    window.location.href='../vistas/principalcatequistas.php'; 
                    </script>"; 
            }
            
        
        
        } else {

            echo "<script> 
            alert('Error, catequista no ingresado. Revisar datos ingresados.'); 
            window.location.href='../vistas/principalcatequistas.php'; 
            </script>"; 
            
        }   



    }else {
        echo "<script> 
                alert('Error al insertar, Colocar almenos el nombre del Catequista.'); 
                window.location.href='../vistas/principalcatequistas.php'; 
                </script>"; 

    }
    





?>