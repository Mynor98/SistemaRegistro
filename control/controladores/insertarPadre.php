<?php
     include '../modelos/conector.php'; 
     
     $nombre = $_POST['nombre'];
     $genero = $_POST['genero'];

     

    if(!empty($nombre)){

        if($genero == 0){
            echo "<script> 
            alert('Error, Seleccionar un genero.'); 
            window.location.href='../vistas/principalpadres.php'; 
            </script>"; 
        }else{

        $sqlcon = "INSERT INTO datospersona (nombre, genero)
                        VALUES ('$nombre','$genero')";
        
        if (mysqli_query($conn, $sqlcon)) {
            
            
            $conscat = "SELECT MAX(idDatosPersona) as idc from datospersona ";
            if ($ejecutar = mysqli_query($conn, $conscat)) {
                $result = mysqli_fetch_array($ejecutar);
                $idult = $result['idc'];

                    $insper ="INSERT INTO persona (TipoPersona_idTipoPersona, DatosPersona_idDatosPersona)
                                            VALUES (1,$idult)";
                    mysqli_query($conn, $insper);
             
                    echo "<script> 
                    alert('Padre registrado con exito.'); 
                    window.location.href='../vistas/principalpadres.php'; 
                    </script>"; 
            } else {

            echo "<script> 
            alert('Error, padre no ingresado. Revisar datos ingresados.'); 
            window.location.href='../vistas/principalpadres.php'; 
            </script>"; 
            
        }   

    }else {
        echo "<script> 
                alert('Error al insertar, Colocar nombre y genero del padre.'); 
                window.location.href='../vistas/principalpadres.php'; 
                </script>"; 

    }
}
    
}else{

    echo "<script> 
    alert('Error al insertar, Colocar nombre del padre.'); 
    window.location.href='../vistas/principalpadres.php'; 
    </script>"; 

}





?>