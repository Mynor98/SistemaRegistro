<?php
     include '../modelos/conector.php'; 
     
     $libro = $_POST['libro'];
     $folio = $_POST['folio'];
     $supletoria = $_POST['suple'];
     $fecha = $_POST['fecha'];
     $sacramentado = $_POST['sacramentado'];
     $sacerdote = $_POST['sacerdote'];
     $catequista = $_POST['catequista'];
 /*  
echo $libro;
echo "----";
echo $folio;
echo "----";
echo $supletoria;
echo "----";
echo $fecha;
echo "----";
echo $sacramentado;
echo "----";
echo $sacerdote;
echo "----";
echo $catequista;
 */    
        
    
    if($sacramentado != 0){

       if(!empty($fecha)){ 
        if($catequista !=0){
            if($sacerdote !=0){
        $sqlcon = "INSERT INTO registro (noLibro, noFolio, noSupletoria,fechaSacramento,supletoria,Sacramentos_idSacramentos, Sacramentados_idDatosPersona,Persona_idPersonaSacerdote,  Persona_idPersonaCat)
                        VALUES ($libro,$folio,$supletoria,'$fecha',1,2,$sacramentado,$sacerdote ,$catequista)";
        
        if (mysqli_query($conn, $sqlcon)) {
            
                    echo "<script> 
                    alert('Registro realizado con exito.'); 
                    window.location.href='../vistas/actsupcomunion.php'; 
                    </script>"; 
            }else {

            echo "<script> 
            alert('Error, registro no ingresado. Revisar datos ingresados.'); 
            window.location.href='../vistas/actsupcomunion.php'; 
            </script>"; 
            
        } 
    }else{
        $sqlcon = "INSERT INTO registro (noLibro, noFolio, noSupletoria,fechaSacramento,supletoria,Sacramentos_idSacramentos, Sacramentados_idDatosPersona,  Persona_idPersonaCat)
                        VALUES ($libro,$folio,$supletoria,'$fecha',1,2,$sacramentado ,$catequista)";
        
        if (mysqli_query($conn, $sqlcon)) {
            
                    echo "<script> 
                    alert('Registro realizado con exito.'); 
                    window.location.href='../vistas/actsupcomunion.php'; 
                    </script>"; 
            }else {

            echo "<script> 
            alert('Error, registro no ingresado. Revisar datos ingresados.'); 
            window.location.href='../vistas/actsupcomunion.php'; 
            </script>"; 
            
        } 


    }






    }else{
        if($sacerdote != 0){
        $sqlcon = "INSERT INTO registro (noLibro, noFolio, noSupletoria,fechaSacramento,supletoria,Sacramentos_idSacramentos, Sacramentados_idDatosPersona,Persona_idPersonaSacerdote)
                        VALUES ($libro,$folio,$supletoria,'$fecha',1,2,$sacramentado,$sacerdote )";

                if (mysqli_query($conn, $sqlcon)) {



                    echo "<script> 
                    alert('Registro realizado con exito.'); 
                    window.location.href='../vistas/actsupcomunion.php'; 
                    </script>"; 
                }else {

                echo "<script> 
                alert('Error, registro no ingresado. Revisar datos ingresados.'); 
                window.location.href='../vistas/actsupcomunion.php'; 
                </script>"; 

                } 
            }else{

                $sqlcon = "INSERT INTO registro (noLibro, noFolio, noSupletoria,fechaSacramento,supletoria,Sacramentos_idSacramentos, Sacramentados_idDatosPersona)
                        VALUES ($libro,$folio,$supletoria,'$fecha',1,2,$sacramentado)";
                        
                if (mysqli_query($conn, $sqlcon)) {



                    echo "<script> 
                    alert('Registro realizado con exito.'); 
                    window.location.href='../vistas/actsupcomunion.php'; 
                    </script>"; 
                }else {

                echo "<script> 
                alert('Error, registro no ingresado. Revisar datos ingresados.'); 
                window.location.href='../vistas/actsupcomunion.php'; 
                </script>"; 

                } 

            }
        }  
    }else{
        if($catequista != 0){
            if($sacerdote != 0){
            $sqlcon = "INSERT INTO registro (noLibro, noFolio, noSupletoria,supletoria,Sacramentos_idSacramentos, Sacramentados_idDatosPersona,Persona_idPersonaSacerdote,  Persona_idPersonaCat)
            VALUES ($libro,$folio,$supletoria,1,2,$sacramentado,$sacerdote ,$catequista)";


                    if (mysqli_query($conn, $sqlcon)) {



                        echo "<script> 
                        alert('Registro realizado con exito.'); 
                        window.location.href='../vistas/actsupcomunion.php'; 
                        </script>"; 
                    }else {

                    echo "<script> 
                    alert('Error, registro no ingresado. Revisar datos ingresados.'); 
                    window.location.href='../vistas/actsupcomunion.php'; 
                    </script>"; 

                    }   
                }else{

                    $sqlcon = "INSERT INTO registro (noLibro, noFolio, noSupletoria,supletoria,Sacramentos_idSacramentos, Sacramentados_idDatosPersona,  Persona_idPersonaCat)
                    VALUES ($libro,$folio,$supletoria,1,2,$sacramentado ,$catequista)";
        
        
                            if (mysqli_query($conn, $sqlcon)) {
        
        
        
                                echo "<script> 
                                alert('Registro realizado con exito.'); 
                                window.location.href='../vistas/actsupcomunion.php'; 
                                </script>"; 
                            }else {
        
                            echo "<script> 
                            alert('Error, registro no ingresado. Revisar datos ingresados.'); 
                            window.location.href='../vistas/actsupcomunion.php'; 
                            </script>"; 
        
                            }   
                }        
    }else{
        if($sacerdote !=0){
        $sqlcon = "INSERT INTO registro (noLibro, noFolio, noSupletoria,supletoria,Sacramentos_idSacramentos, Sacramentados_idDatosPersona,Persona_idPersonaSacerdote)
            VALUES ($libro,$folio,$supletoria,1,2,$sacramentado,$sacerdote )";


        if (mysqli_query($conn, $sqlcon)) {



            echo "<script> 
            alert('Registro realizado con exito.'); 
            window.location.href='../vistas/actsupcomunion.php'; 
            </script>"; 
        }else {

        echo "<script> 
        alert('Error, registro no ingresado. Revisar datos ingresados.'); 
        window.location.href='../vistas/actsupcomunion.php'; 
        </script>"; 

        }  
        }else{
            
            $sqlcon = "INSERT INTO registro (noLibro, noFolio, noSupletoria,supletoria,Sacramentos_idSacramentos, Sacramentados_idDatosPersona)
            VALUES ($libro,$folio,$supletoria,1,2,$sacramentado)";


        if (mysqli_query($conn, $sqlcon)) {



            echo "<script> 
            alert('Registro realizado con exito.'); 
            window.location.href='../vistas/actsupcomunion.php'; 
            </script>"; 
        }else {

        echo "<script> 
        alert('Error, registro no ingresado. Revisar datos ingresados.'); 
        window.location.href='../vistas/actsupcomunion.php'; 
        </script>"; 

        }  
        } 
    }

    }
        
    }else{
        echo "<script> 
        alert('Error al insertar, especifique el sacramentado.'); 
        window.location.href='../vistas/actsupcomunion.php'; 
        </script>"; 
    }


    




?>