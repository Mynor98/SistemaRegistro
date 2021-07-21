<?php
     include '../modelos/conector.php'; 


     $libro = $_POST['libro'];
     $folio = $_POST['folio'];
     $fecha = $_POST['fecha'];
     $sacramentado = $_POST['sacramentado'];
     $padrinou = $_POST['padrinou'];
     $padrinod = $_POST['padrinod'];
     $idsas = $_POST['sacerdoteb'];
     $notas = $_POST['notas'];

     

/*
     echo $libro;
     echo "------";
     echo $folio;
     echo "------";
     echo $fecha;
     echo "------";
     echo $sacramentado;
     echo "------";
     echo $padrinou;
     echo "------";
     echo $padrinod;
     echo "------";
     echo $notas;
*/




     
    if(!empty($libro) && !empty($folio)){

       if($sacramentado != 0){

            if($sacerdote =! 0){

         if($padrinou !=0 && $padrinod !=0){

            if(!empty($fecha)){
                
        $sqlcon = "INSERT INTO registro(noLibro, noFolio,fechaSacramento, alMargen, supletoria, Sacramentos_idSacramentos, Persona_idPadrinouno, Persona_idPadrinodos, Sacramentados_idDatosPersona,Persona_idPersonaSacerdote)
        VALUES ($libro,$folio,'$fecha', '$notas', 0,1,$padrinou, $padrinod, $sacramentado,$idsas)";

                if (mysqli_query($conn, $sqlcon)) {

                    echo "<script> 
                    alert('Acta registrada con exito.'); 
                    window.location.href='../vistas/principalbautizo.php'; 
                    </script>"; 
                

                } else {

                    echo "<script> 
                    alert('Error, Acta no ingresada. Revisar datos ingresados.'); 
                    window.location.href='../vistas/principalbautizo.php'; 
                    </script>"; 

                }   

            }else{

                    echo "<script> 
                    alert('Error, Acta no ingresada. Ingresar fecha del bautizo.'); 
                    window.location.href='../vistas/principalbautizo.php'; 
                    </script>";

            }

        }else if($padrinou !=0 && $padrinod ==0){


            if(!empty($fecha)){
                
                $sqlcon = "INSERT INTO registro(noLibro, noFolio,fechaSacramento, alMargen, supletoria, Sacramentos_idSacramentos, Persona_idPadrinouno, Sacramentados_idDatosPersona, Persona_idPersonaSacerdote)
                VALUES ($libro,$folio,'$fecha', '$notas', 0,1,$padrinou, $sacramentado, $idsas )";
        
                        if (mysqli_query($conn, $sqlcon)) {
        
                            echo "<script> 
                            alert('Acta registrada con exito.'); 
                            window.location.href='../vistas/principalbautizo.php'; 
                            </script>"; 
                        
        
                        } else {
        
                            echo "<script> 
                            alert('Error, Acta no ingresada. Revisar datos ingresados.'); 
                            window.location.href='../vistas/principalbautizo.php'; 
                            </script>"; 
        
                        }   
        
                    }else{
        
                            echo "<script> 
                            alert('Error, Acta no ingresada. Ingresar fecha del bautizo.'); 
                            window.location.href='../vistas/principalbautizo.php'; 
                            </script>";
        
                    }



        }else if($padrinou ==0 && $padrinod !=0){

            if(!empty($fecha)){
                
                $sqlcon = "INSERT INTO registro(noLibro, noFolio,fechaSacramento, alMargen, supletoria, Sacramentos_idSacramentos, Persona_idPadrinodos, Sacramentados_idDatosPersona,Persona_idPersonaSacerdote)
                VALUES ($libro,$folio,'$fecha', '$notas', 0,1,$padrinod, $sacramentado, $idsas)";
        
                        if (mysqli_query($conn, $sqlcon)) {
        
                            echo "<script> 
                            alert('Acta registrada con exito.'); 
                            window.location.href='../vistas/principalbautizo.php'; 
                            </script>"; 
                        
        
                        } else {
        
                            echo "<script> 
                            alert('Error, Acta no ingresada. Revisar datos ingresados.'); 
                            window.location.href='../vistas/principalbautizo.php'; 
                            </script>"; 
        
                        }   
        
                    }else{
        
                            echo "<script> 
                            alert('Error, Acta no ingresada. Ingresar fecha del bautizo.'); 
                            window.location.href='../vistas/principalbautizo.php'; 
                            </script>";
        
                    }





        }else{


            echo "<script> 
            alert('Error al insertar, Colocar al menos un padrino.'); 
            window.location.href='../vistas/principalbautizo.php'; 
            </script>"; 
        }

    }else{
        echo "<script> 
        alert('Error al insertar, Colocar Sacerdote quien hizo el Bautizo.'); 
        window.location.href='../vistas/principalbautizo.php'; 
        </script>"; 
    }


       }else{

        echo "<script> 
        alert('Error al insertar, Colocar quien recibió el sacramento.'); 
        window.location.href='../vistas/principalbautizo.php'; 
        </script>"; 

       }

    


    }else {
        echo "<script> 
                alert('Error al insertar, Colocar libro y folio.'); 
                window.location.href='../vistas/principalbautizo.php'; 
                </script>"; 

    }

    




     ?>