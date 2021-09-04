<?php
     include '../modelos/conector.php'; 


     $libro = $_POST['libro'];
     $folio = $_POST['folio'];
     $supletoria = $_POST['supletoria'];
     $fecha = $_POST['fecha'];
     $sacramentado = $_POST['sacramentado'];
     $testigo = $_POST['testigo'];
     $edad = $_POST['edad'];
     $padrinou = $_POST['padrinou'];
     $padrinod = $_POST['padrinod'];
    
     

     /*

     echo $libro;
     echo "------";
     echo $folio;
     echo "------";
     echo $supletoria;
     echo "------";
     echo $fecha;
     echo "------";
     echo $sacramentado;
     echo "------";
     echo $testigo;
     echo "------";
     echo $edad;
     echo "------";
     echo $padrinou;
     echo "------";
     echo $padrinod;
   */


    if(empty($fecha)){
       
       if($sacramentado !=0){
 
            if($padrinou !=0 && $padrinod !=0){
                
                $sqlcon = "INSERT INTO registro(noLibro, noFolio,noSupletoria,edadSacramento,testimonioPersona, supletoria, Sacramentos_idSacramentos, Persona_idPadrinouno, Persona_idPadrinodos, Sacramentados_idDatosPersona)
                VALUES ($libro,$folio,$supletoria,$edad,'$testigo', 1,3,$padrinou, $padrinod, $sacramentado)";
        
                        if (mysqli_query($conn, $sqlcon)) {
        
                            echo "<script> 
                            alert('Acta registrada con exito.'); 
                            window.location.href='../vistas/actsupconfir.php'; 
                            </script>"; 
                        
        
                        } else {
        
                            echo "<script> 
                            alert('Error, Acta no ingresada. Revisar datos ingresados.'); 
                            window.location.href='../vistas/actsupconfir.php'; 
                            </script>"; 
        
                        }   
        

            }else if ($padrinou !=0 && $padrinod ==0){

                    
                $sqlcon = "INSERT INTO registro(noLibro, noFolio,noSupletoria,edadSacramento,testimonioPersona, supletoria, Sacramentos_idSacramentos, Persona_idPadrinouno, Sacramentados_idDatosPersona)
                VALUES ($libro,$folio,$supletoria,$edad,'$testigo', 1,3,$padrinou, $sacramentado)";
        
                        if (mysqli_query($conn, $sqlcon)) {
        
                            echo "<script> 
                            alert('Acta registrada con exito.'); 
                            window.location.href='../vistas/actsupconfir.php'; 
                            </script>"; 
                        
        
                        } else {
        
                            echo "<script> 
                            alert('Error, Acta no ingresada. Revisar datos ingresados.'); 
                            window.location.href='../vistas/actsupconfir.php'; 
                            </script>"; 
        
                        }   


                }else if ($padrinou == 0 && $padrinod == 0){

                    $sqlcon = "INSERT INTO registro(noLibro, noFolio,noSupletoria,edadSacramento,testimonioPersona, supletoria, Sacramentos_idSacramentos,  Sacramentados_idDatosPersona)
                    VALUES ($libro,$folio,$supletoria,$edad,'$testigo', 1,3, $sacramentado)";
            
                            if (mysqli_query($conn, $sqlcon)) {
            
                                echo "<script> 
                                alert('Acta registrada con exito.'); 
                                window.location.href='../vistas/actsupconfir.php'; 
                                </script>"; 
                            
            
                            } else {
            
                                echo "<script> 
                                alert('Error, Acta no ingresada. Revisar datos ingresados.'); 
                                window.location.href='../vistas/actsupconfir.php'; 
                                </script>"; 
            
                            }   



                }else {

                    echo "<script> 
                    alert('Error, Acta no ingresada. Cuando solo exista un padrino colocarlo en la primera casilla.'); 
                    window.location.href='../vistas/actsupconfir.php'; 
                    </script>"; 



                }

   
           

       }else{

        echo "<script> 
        alert('Error, Acta no ingresada. Colocar quien recibió el sacramento.'); 
        window.location.href='../vistas/actsupconfir.php'; 
        </script>"; 


       }

           





    }else{ //cuando si haya fecha



        if($sacramentado !=0){

                
                if($padrinou !=0 && $padrinod !=0){
                    
                    $sqlcon = "INSERT INTO registro(noLibro, noFolio,noSupletoria,fechaSacramento,edadSacramento,testimonioPersona, supletoria, Sacramentos_idSacramentos, Persona_idPadrinouno, Persona_idPadrinodos, Sacramentados_idDatosPersona)
                    VALUES ($libro,$folio,$supletoria,'$fecha',$edad,'$testigo', 1,3,$padrinou, $padrinod, $sacramentado)";
            
                            if (mysqli_query($conn, $sqlcon)) {
            
                                echo "<script> 
                                alert('Acta registrada con exito.'); 
                                window.location.href='../vistas/actsupconfir.php'; 
                                </script>"; 
                            
            
                            } else {
            
                                echo "<script> 
                                alert('Error, Acta no ingresada. Revisar datos ingresados.'); 
                                window.location.href='../vistas/actsupconfir.php'; 
                                </script>"; 
            
                            }   
            
    
                }else if ($padrinou !=0 && $padrinod ==0){
    
                        
                    $sqlcon = "INSERT INTO registro(noLibro, noFolio,noSupletoria,fechaSacramento,edadSacramento,testimonioPersona, supletoria, Sacramentos_idSacramentos, Persona_idPadrinouno, Sacramentados_idDatosPersona)
                    VALUES ($libro,$folio,$supletoria,'$fecha',$edad,'$testigo', 1,3,$padrinou, $sacramentado)";
            
            
                            if (mysqli_query($conn, $sqlcon)) {
            
                                echo "<script> 
                                alert('Acta registrada con exito.'); 
                                window.location.href='../vistas/actsupconfir.php'; 
                                </script>"; 
                            
            
                            } else {
            
                                echo "<script> 
                                alert('Error, Acta no ingresada. Revisar datos ingresados.'); 
                                window.location.href='../vistas/actsupconfir.php'; 
                                </script>"; 
            
                            }   
    
    
                    }else if ($padrinou == 0 && $padrinod == 0){
    
                        $sqlcon = "INSERT INTO registro(noLibro, noFolio,noSupletoria,fechaSacramento,edadSacramento,testimonioPersona, supletoria, Sacramentos_idSacramentos, Sacramentados_idDatosPersona)
                        VALUES ($libro,$folio,$supletoria,'$fecha',$edad,'$testigo', 1,3, $sacramentado)";
                
                
                                if (mysqli_query($conn, $sqlcon)) {
                
                                    echo "<script> 
                                    alert('Acta registrada con exito.'); 
                                    window.location.href='../vistas/actsupconfir.php'; 
                                    </script>"; 
                                
                
                                } else {
                
                                    echo "<script> 
                                    alert('Error, Acta no ingresada. Revisar datos ingresados.'); 
                                    window.location.href='../vistas/actsupconfir.php'; 
                                    </script>"; 
                
                                }   
    
    
    
                    }else {
    
                        echo "<script> 
                        alert('Error, Acta no ingresada. Cuando solo exista un padrino colocarlo en la primera casilla.'); 
                        window.location.href='../vistas/actsupconfir.php'; 
                        </script>"; 
    
    
    
                    }
   
               
    
    
           }else{
    
            echo "<script> 
            alert('Error, Acta no ingresada. Colocar quien recibió el sacramento.'); 
            window.location.href='../vistas/actsupconfir.php'; 
            </script>"; 
    
    
           }
    







    }

  


     ?>