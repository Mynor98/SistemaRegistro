<?php
     include '../modelos/conector.php'; 


     $libro = $_POST['libro'];
     $folio = $_POST['folio'];
     $fecha = $_POST['fecha'];
     $sacramentado = $_POST['sacramentado'];
     $padrinou = $_POST['padrinou'];
     $padrinod = $_POST['padrinod'];
     $obispo = $_POST['obispo'];
     

     

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
     echo $obispo;
*/


    if(empty($fecha)){
       
       if($sacramentado !=0){

        if($obispo != 0){
            
            if($padrinou !=0 && $padrinod !=0){
                
                $sqlcon = "INSERT INTO registro(noLibro, noFolio, supletoria, Sacramentos_idSacramentos, Persona_idPadrinouno, Persona_idPadrinodos, Sacramentados_idDatosPersona,Persona_idPersonaOb)
                VALUES ($libro,$folio, 0,3,$padrinou, $padrinod, $sacramentado,$obispo)";
        
                        if (mysqli_query($conn, $sqlcon)) {
        
                            echo "<script> 
                            alert('Acta registrada con exito.'); 
                            window.location.href='../vistas/actconfir.php'; 
                            </script>"; 
                        
        
                        } else {
        
                            echo "<script> 
                            alert('Error, Acta no ingresada. Revisar datos ingresados.'); 
                            window.location.href='../vistas/actconfir.php'; 
                            </script>"; 
        
                        }   
        

            }else if ($padrinou !=0 && $padrinod ==0){

                    
                $sqlcon = "INSERT INTO registro(noLibro, noFolio, supletoria, Sacramentos_idSacramentos, Persona_idPadrinouno, Sacramentados_idDatosPersona,Persona_idPersonaOb)
                VALUES ($libro,$folio, 0,3,$padrinou, $sacramentado,$obispo)";
        
                        if (mysqli_query($conn, $sqlcon)) {
        
                            echo "<script> 
                            alert('Acta registrada con exito.'); 
                            window.location.href='../vistas/actconfir.php'; 
                            </script>"; 
                        
        
                        } else {
        
                            echo "<script> 
                            alert('Error, Acta no ingresada. Revisar datos ingresados.'); 
                            window.location.href='../vistas/actconfir.php'; 
                            </script>"; 
        
                        }   


                }else if ($padrinou == 0 && $padrinod == 0){

                    $sqlcon = "INSERT INTO registro(noLibro, noFolio, supletoria, Sacramentos_idSacramentos, Sacramentados_idDatosPersona,Persona_idPersonaOb)
                    VALUES ($libro,$folio, 0,3, $sacramentado,$obispo)";
            
                            if (mysqli_query($conn, $sqlcon)) {
            
                                echo "<script> 
                                alert('Acta registrada con exito.'); 
                                window.location.href='../vistas/actconfir.php'; 
                                </script>"; 
                            
            
                            } else {
            
                                echo "<script> 
                                alert('Error, Acta no ingresada. Revisar datos ingresados.'); 
                                window.location.href='../vistas/actconfir.php'; 
                                </script>"; 
            
                            }   



                }else {

                    echo "<script> 
                    alert('Error, Acta no ingresada. Cuando solo exista un padrino colocarlo en la primera casilla.'); 
                    window.location.href='../vistas/actconfir.php'; 
                    </script>"; 



                }

        }else{ //cuando no viene el obispo


            if($padrinou !=0 && $padrinod !=0){
                
                $sqlcon = "INSERT INTO registro(noLibro, noFolio, supletoria, Sacramentos_idSacramentos, Persona_idPadrinouno, Persona_idPadrinodos, Sacramentados_idDatosPersona)
                VALUES ($libro,$folio, 0,3,$padrinou, $padrinod, $sacramentado)";
        
                        if (mysqli_query($conn, $sqlcon)) {
        
                            echo "<script> 
                            alert('Acta registrada con exito.'); 
                            window.location.href='../vistas/actconfir.php'; 
                            </script>"; 
                        
        
                        } else {
        
                            echo "<script> 
                            alert('Error, Acta no ingresada. Revisar datos ingresados.'); 
                            window.location.href='../vistas/actconfir.php'; 
                            </script>"; 
        
                        }   
        

            }else if ($padrinou !=0 && $padrinod ==0){

                    
                $sqlcon = "INSERT INTO registro(noLibro, noFolio, supletoria, Sacramentos_idSacramentos, Persona_idPadrinouno, Sacramentados_idDatosPersona)
                VALUES ($libro,$folio, 0,3,$padrinou, $sacramentado)";
        
                        if (mysqli_query($conn, $sqlcon)) {
        
                            echo "<script> 
                            alert('Acta registrada con exito.'); 
                            window.location.href='../vistas/actconfir.php'; 
                            </script>"; 
                        
        
                        } else {
        
                            echo "<script> 
                            alert('Error, Acta no ingresada. Revisar datos ingresados.'); 
                            window.location.href='../vistas/actconfir.php'; 
                            </script>"; 
        
                        }   


                }else if ($padrinou == 0 && $padrinod == 0){

                    $sqlcon = "INSERT INTO registro(noLibro, noFolio, supletoria, Sacramentos_idSacramentos, Sacramentados_idDatosPersona)
                    VALUES ($libro,$folio, 0,3, $sacramentado)";
            
                            if (mysqli_query($conn, $sqlcon)) {
            
                                echo "<script> 
                                alert('Acta registrada con exito.'); 
                                window.location.href='../vistas/actconfir.php'; 
                                </script>"; 
                            
            
                            } else {
            
                                echo "<script> 
                                alert('Error, Acta no ingresada. Revisar datos ingresados.'); 
                                window.location.href='../vistas/actconfir.php'; 
                                </script>"; 
            
                            }   



                }else {

                    echo "<script> 
                    alert('Error, Acta no ingresada. Cuando solo exista un padrino colocarlo en la primera casilla.'); 
                    window.location.href='../vistas/actconfir.php'; 
                    </script>"; 



                }
            
            



         }

           


       }else{

        echo "<script> 
        alert('Error, Acta no ingresada. Colocar quien recibió el sacramento.'); 
        window.location.href='../vistas/actconfir.php'; 
        </script>"; 


       }

           





    }else{ //cuando si haya fecha



        if($sacramentado !=0){

            if($obispo != 0){
                
                if($padrinou !=0 && $padrinod !=0){
                    
                    $sqlcon = "INSERT INTO registro(noLibro, noFolio, fechaSacramento, supletoria, Sacramentos_idSacramentos, Persona_idPadrinouno, Persona_idPadrinodos, Sacramentados_idDatosPersona,Persona_idPersonaOb)
                    VALUES ($libro,$folio,'$fecha', 0,3,$padrinou, $padrinod, $sacramentado,$obispo)";
            
                            if (mysqli_query($conn, $sqlcon)) {
            
                                echo "<script> 
                                alert('Acta registrada con exito.'); 
                                window.location.href='../vistas/actconfir.php'; 
                                </script>"; 
                            
            
                            } else {
            
                                echo "<script> 
                                alert('Error, Acta no ingresada. Revisar datos ingresados.'); 
                                window.location.href='../vistas/actconfir.php'; 
                                </script>"; 
            
                            }   
            
    
                }else if ($padrinou !=0 && $padrinod ==0){
    
                        
                    $sqlcon = "INSERT INTO registro(noLibro, noFolio,fechaSacramento ,supletoria, Sacramentos_idSacramentos, Persona_idPadrinouno, Sacramentados_idDatosPersona,Persona_idPersonaOb)
                    VALUES ($libro,$folio,'$fecha', 0,3,$padrinou, $sacramentado,$obispo)";
            
                            if (mysqli_query($conn, $sqlcon)) {
            
                                echo "<script> 
                                alert('Acta registrada con exito.'); 
                                window.location.href='../vistas/actconfir.php'; 
                                </script>"; 
                            
            
                            } else {
            
                                echo "<script> 
                                alert('Error, Acta no ingresada. Revisar datos ingresados.'); 
                                window.location.href='../vistas/actconfir.php'; 
                                </script>"; 
            
                            }   
    
    
                    }else if ($padrinou == 0 && $padrinod == 0){
    
                        $sqlcon = "INSERT INTO registro(noLibro, noFolio, fechaSacramento ,supletoria, Sacramentos_idSacramentos, Sacramentados_idDatosPersona,Persona_idPersonaOb)
                        VALUES ($libro,$folio,'$fecha', 0,3, $sacramentado,$obispo)";
                
                                if (mysqli_query($conn, $sqlcon)) {
                
                                    echo "<script> 
                                    alert('Acta registrada con exito.'); 
                                    window.location.href='../vistas/actconfir.php'; 
                                    </script>"; 
                                
                
                                } else {
                
                                    echo "<script> 
                                    alert('Error, Acta no ingresada. Revisar datos ingresados.'); 
                                    window.location.href='../vistas/actconfir.php'; 
                                    </script>"; 
                
                                }   
    
    
    
                    }else {
    
                        echo "<script> 
                        alert('Error, Acta no ingresada. Cuando solo exista un padrino colocarlo en la primera casilla.'); 
                        window.location.href='../vistas/actconfir.php'; 
                        </script>"; 
    
    
    
                    }
    
            }else{ //cuando no viene el obispo
    
    
                if($padrinou !=0 && $padrinod !=0){
                    
                    $sqlcon = "INSERT INTO registro(noLibro, noFolio,fechaSacramento ,supletoria, Sacramentos_idSacramentos, Persona_idPadrinouno, Persona_idPadrinodos, Sacramentados_idDatosPersona)
                    VALUES ($libro,$folio,'$fecha', 0,3,$padrinou, $padrinod, $sacramentado)";
            
                            if (mysqli_query($conn, $sqlcon)) {
            
                                echo "<script> 
                                alert('Acta registrada con exito.'); 
                                window.location.href='../vistas/actconfir.php'; 
                                </script>"; 
                            
            
                            } else {
            
                                echo "<script> 
                                alert('Error, Acta no ingresada. Revisar datos ingresados.'); 
                                window.location.href='../vistas/actconfir.php'; 
                                </script>"; 
            
                            }   
            
    
                }else if ($padrinou !=0 && $padrinod ==0){
    
                        
                    $sqlcon = "INSERT INTO registro(noLibro, noFolio,fechaSacramento ,supletoria, Sacramentos_idSacramentos, Persona_idPadrinouno, Sacramentados_idDatosPersona)
                    VALUES ($libro,$folio,'$fecha', 0,3,$padrinou, $sacramentado)";
            
                            if (mysqli_query($conn, $sqlcon)) {
            
                                echo "<script> 
                                alert('Acta registrada con exito.'); 
                                window.location.href='../vistas/actconfir.php'; 
                                </script>"; 
                            
            
                            } else {
            
                                echo "<script> 
                                alert('Error, Acta no ingresada. Revisar datos ingresados.'); 
                                window.location.href='../vistas/actconfir.php'; 
                                </script>"; 
            
                            }   
    
    
                    }else if ($padrinou == 0 && $padrinod == 0){
    
                        $sqlcon = "INSERT INTO registro(noLibro, noFolio,fechaSacramento ,supletoria, Sacramentos_idSacramentos, Sacramentados_idDatosPersona)
                        VALUES ($libro,$folio, '$fecha', 0,3, $sacramentado)";
                
                                if (mysqli_query($conn, $sqlcon)) {
                
                                    echo "<script> 
                                    alert('Acta registrada con exito.'); 
                                    window.location.href='../vistas/actconfir.php'; 
                                    </script>"; 
                                
                
                                } else {
                
                                    echo "<script> 
                                    alert('Error, Acta no ingresada. Revisar datos ingresados.'); 
                                    window.location.href='../vistas/actconfir.php'; 
                                    </script>"; 
                
                                }   
    
    
    
                    }else {
    
                        echo "<script> 
                        alert('Error, Acta no ingresada. Cuando solo exista un padrino colocarlo en la primera casilla.'); 
                        window.location.href='../vistas/actconfir.php'; 
                        </script>"; 
    
    
    
                    }
                
                
    
    
    
             }
    
               
    
    
           }else{
    
            echo "<script> 
            alert('Error, Acta no ingresada. Colocar quien recibió el sacramento.'); 
            window.location.href='../vistas/actconfir.php'; 
            </script>"; 
    
    
           }
    







    }

  


     ?>