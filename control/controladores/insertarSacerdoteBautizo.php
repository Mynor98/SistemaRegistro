<?php
     include '../modelos/conector.php'; 
     
     $nombre = $_POST['nombre'];
     $tiposac = $_POST['sacerdote'];

     
        
    
    if(!empty($nombre)){

       if(!empty($tiposac)){ 

        $sqlcon = "INSERT INTO datospersona (nombre)
                        VALUES ('$nombre')";
        
        if (mysqli_query($conn, $sqlcon)) {
            
            
            $conscat = "SELECT MAX(idDatosPersona) as idc from datospersona ";
            if ($ejecutar = mysqli_query($conn, $conscat)) {
                $result = mysqli_fetch_array($ejecutar);
                $idult = $result['idc'];

                    $insper ="INSERT INTO persona (TipoPersona_idTipoPersona, DatosPersona_idDatosPersona,tipoSacerdote)
                                            VALUES (4,$idult,'$tiposac')";
                    mysqli_query($conn, $insper);
             
                    echo "<script> 
                    alert('Sacerdote registrado con exito.'); 
                    window.location.href='../vistas/actbautizo.php'; 
                    </script>"; 
            }
            
        
        
        } else {

            echo "<script> 
            alert('Error, Sacerdote no ingresado. Revisar datos ingresados.'); 
            window.location.href='../vistas/actbautizo.php'; 
            </script>"; 
            
        }   
        
        
    }else{
        echo "<script> 
        alert('Error al insertar, especifique el tipo del sacerdote.'); 
        window.location.href='../vistas/actbautizo.php'; 
        </script>"; 
    }


    }else {
        echo "<script> 
                alert('Error al insertar, Colocar al menos el nombre del Sacerdote.'); 
                window.location.href='../vistas/actbautizo.php'; 
                </script>"; 

    }
    





?>