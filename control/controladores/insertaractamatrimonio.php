<?php
     include '../modelos/conector.php'; 


    $libro = $_POST['libro'];
    $folio = $_POST['folio'];
    $fecha = $_POST['fecha'];
    $novio = $_POST['novio'];
    $novia = $_POST['novia'];
    $sacerdote = $_POST['sacerdote'];
    $padrinou = $_POST['padrinou'];
    $padrinod = $_POST['padrinod'];

/*
    echo $libro;
    echo "-----";
    echo $folio;
    echo "-----";
    echo $fecha;
    echo "-----";
    echo $novio;
    echo "-----";
    echo $novia;
    echo "-----";
    echo $sacerdote;
    echo "-----";
    echo $padrinou;
    echo "-----";
    echo $padrinod;

*/
        if ($novio != 0 && $novia != 0){

            if(!empty($fecha)){ //con fecha
                if($sacerdote != 0){ // si hay sacerdote
                if($padrinou != 0 && $padrinod != 0){

                    $sqlcon = "INSERT INTO registro(noLibro, noFolio,fechaSacramento, supletoria, Sacramentos_idSacramentos, Persona_idPadrinouno, Persona_idPadrinodos, Sacramentados_idDatosPersona,Sacramentados_idDatosPersonad,Persona_idPersonaSacerdote)
                    VALUES ($libro,$folio,'$fecha', 0,4,$padrinou, $padrinod, $novio, $novia,$sacerdote)";
            
                            if (mysqli_query($conn, $sqlcon)) {
            
                                echo "<script> 
                                alert('Acta registrada con exito.'); 
                                window.location.href='../vistas/principalmatrimonio.php'; 
                                </script>"; 
                            
            
                            } else {
            
                                echo "<script> 
                                alert('Error, Acta no ingresada. Revisar datos ingresados.'); 
                                window.location.href='../vistas/principalmatrimonio.php'; 
                                </script>"; 
            
                            }   

                }else if($padrinou == 0 && $padrinod == 0){

                    $sqlcon = "INSERT INTO registro(noLibro, noFolio,fechaSacramento, supletoria, Sacramentos_idSacramentos, Sacramentados_idDatosPersona,Sacramentados_idDatosPersonad,Persona_idPersonaSacerdote)
                    VALUES ($libro,$folio,'$fecha', 0,4, $novio, $novia,$sacerdote)";
            
                            if (mysqli_query($conn, $sqlcon)) {
            
                                echo "<script> 
                                alert('Acta registrada con exito.'); 
                                window.location.href='../vistas/principalmatrimonio.php'; 
                                </script>"; 
                            
            
                            } else {
            
                                echo "<script> 
                                alert('Error, Acta no ingresada. Revisar datos ingresados.'); 
                                window.location.href='../vistas/principalmatrimonio.php'; 
                                </script>"; 
            
                            }   

                }else if($padrinou !=0 && $padrinod == 0){
                    
                    $sqlcon = "INSERT INTO registro(noLibro, noFolio,fechaSacramento, supletoria, Sacramentos_idSacramentos, Persona_idPadrinouno, Sacramentados_idDatosPersona,Sacramentados_idDatosPersonad,Persona_idPersonaSacerdote)
                    VALUES ($libro,$folio,'$fecha', 0,4,$padrinou, $novio, $novia,$sacerdote)";
            
                            if (mysqli_query($conn, $sqlcon)) {
            
                                echo "<script> 
                                alert('Acta registrada con exito.'); 
                                window.location.href='../vistas/principalmatrimonio.php'; 
                                </script>"; 
                            
            
                            } else {
            
                                echo "<script> 
                                alert('Error, Acta no ingresada. Revisar datos ingresados.'); 
                                window.location.href='../vistas/principalmatrimonio.php'; 
                                </script>"; 
            
                            }   



                }else{
                    //viene padrino uno vacio

                    
                    echo "<script> 
                    alert('Error, Acta no ingresada. Cuando ingrese solo un padrino colocarlo en la primera casilla.'); 
                    window.location.href='../vistas/principalmatrimonio.php'; 
                    </script>"; 
                }



            }else { //no viene sacerdote

                if($padrinou != 0 && $padrinod != 0){

                    $sqlcon = "INSERT INTO registro(noLibro, noFolio,fechaSacramento, supletoria, Sacramentos_idSacramentos, Persona_idPadrinouno, Persona_idPadrinodos, Sacramentados_idDatosPersona,Sacramentados_idDatosPersonad)
                    VALUES ($libro,$folio,'$fecha', 0,4,$padrinou, $padrinod, $novio, $novia)";
            
                            if (mysqli_query($conn, $sqlcon)) {
            
                                echo "<script> 
                                alert('Acta registrada con exito.'); 
                                window.location.href='../vistas/principalmatrimonio.php'; 
                                </script>"; 
                            
            
                            } else {
            
                                echo "<script> 
                                alert('Error, Acta no ingresada. Revisar datos ingresados.'); 
                                window.location.href='../vistas/principalmatrimonio.php'; 
                                </script>"; 
            
                            }   

                }else if($padrinou == 0 && $padrinod == 0){

                    $sqlcon = "INSERT INTO registro(noLibro, noFolio,fechaSacramento, supletoria, Sacramentos_idSacramentos, Sacramentados_idDatosPersona,Sacramentados_idDatosPersonad)
                    VALUES ($libro,$folio,'$fecha', 0,4, $novio, $novia)";
            
                            if (mysqli_query($conn, $sqlcon)) {
            
                                echo "<script> 
                                alert('Acta registrada con exito.'); 
                                window.location.href='../vistas/principalmatrimonio.php'; 
                                </script>"; 
                            
            
                            } else {
            
                                echo "<script> 
                                alert('Error, Acta no ingresada. Revisar datos ingresados.'); 
                                window.location.href='../vistas/principalmatrimonio.php'; 
                                </script>"; 
            
                            }   

                }else if($padrinou !=0 && $padrinod == 0){
                    
                    $sqlcon = "INSERT INTO registro(noLibro, noFolio,fechaSacramento, supletoria, Sacramentos_idSacramentos, Persona_idPadrinouno, Sacramentados_idDatosPersona,Sacramentados_idDatosPersonad)
                    VALUES ($libro,$folio,'$fecha', 0,4,$padrinou, $novio, $novia)";
            
                            if (mysqli_query($conn, $sqlcon)) {
            
                                echo "<script> 
                                alert('Acta registrada con exito.'); 
                                window.location.href='../vistas/principalmatrimonio.php'; 
                                </script>"; 
                            
            
                            } else {
            
                                echo "<script> 
                                alert('Error, Acta no ingresada. Revisar datos ingresados.'); 
                                window.location.href='../vistas/principalmatrimonio.php'; 
                                </script>"; 
            
                            }   



                }else{
                    //viene padrino uno vacio

                    
                    echo "<script> 
                    alert('Error, Acta no ingresada. Cuando ingrese solo un padrino colocarlo en la primera casilla.'); 
                    window.location.href='../vistas/principalmatrimonio.php'; 
                    </script>"; 
                }





            }

            }else{ //sin fecha

                    
                if($sacerdote != 0){ // si hay sacerdote
                    if($padrinou != 0 && $padrinod != 0){
    
                        $sqlcon = "INSERT INTO registro(noLibro, noFolio, supletoria, Sacramentos_idSacramentos, Persona_idPadrinouno, Persona_idPadrinodos, Sacramentados_idDatosPersona,Sacramentados_idDatosPersonad,Persona_idPersonaSacerdote)
                        VALUES ($libro,$folio, 0,4,$padrinou, $padrinod, $novio, $novia,$sacerdote)";
                
                                if (mysqli_query($conn, $sqlcon)) {
                
                                    echo "<script> 
                                    alert('Acta registrada con exito.'); 
                                    window.location.href='../vistas/principalmatrimonio.php'; 
                                    </script>"; 
                                
                
                                } else {
                
                                    echo "<script> 
                                    alert('Error, Acta no ingresada. Revisar datos ingresados.'); 
                                    window.location.href='../vistas/principalmatrimonio.php'; 
                                    </script>"; 
                
                                }   
    
                    }else if($padrinou == 0 && $padrinod == 0){
    
                        $sqlcon = "INSERT INTO registro(noLibro, noFolio, supletoria, Sacramentos_idSacramentos, Sacramentados_idDatosPersona,Sacramentados_idDatosPersonad,Persona_idPersonaSacerdote)
                        VALUES ($libro,$folio, 0,4, $novio, $novia,$sacerdote)";
                
                                if (mysqli_query($conn, $sqlcon)) {
                
                                    echo "<script> 
                                    alert('Acta registrada con exito.'); 
                                    window.location.href='../vistas/principalmatrimonio.php'; 
                                    </script>"; 
                                
                
                                } else {
                
                                    echo "<script> 
                                    alert('Error, Acta no ingresada. Revisar datos ingresados.'); 
                                    window.location.href='../vistas/principalmatrimonio.php'; 
                                    </script>"; 
                
                                }   
    
                    }else if($padrinou !=0 && $padrinod == 0){
                        
                        $sqlcon = "INSERT INTO registro(noLibro, noFolio, supletoria, Sacramentos_idSacramentos, Persona_idPadrinouno, Sacramentados_idDatosPersona,Sacramentados_idDatosPersonad,Persona_idPersonaSacerdote)
                        VALUES ($libro,$folio, 0,4,$padrinou, $novio, $novia,$sacerdote)";
                
                                if (mysqli_query($conn, $sqlcon)) {
                
                                    echo "<script> 
                                    alert('Acta registrada con exito.'); 
                                    window.location.href='../vistas/principalmatrimonio.php'; 
                                    </script>"; 
                                
                
                                } else {
                
                                    echo "<script> 
                                    alert('Error, Acta no ingresada. Revisar datos ingresados.'); 
                                    window.location.href='../vistas/principalmatrimonio.php'; 
                                    </script>"; 
                
                                }   
    
    
    
                    }else{
                        //viene padrino uno vacio
    
                        
                        echo "<script> 
                        alert('Error, Acta no ingresada. Cuando ingrese solo un padrino colocarlo en la primera casilla.'); 
                        window.location.href='../vistas/principalmatrimonio.php'; 
                        </script>"; 
                    }
    
    
    
                }else { //no viene sacerdote
    
                    if($padrinou != 0 && $padrinod != 0){
    
                        $sqlcon = "INSERT INTO registro(noLibro, noFolio, supletoria, Sacramentos_idSacramentos, Persona_idPadrinouno, Persona_idPadrinodos, Sacramentados_idDatosPersona,Sacramentados_idDatosPersonad)
                        VALUES ($libro,$folio, 0,4,$padrinou, $padrinod, $novio, $novia)";
                
                                if (mysqli_query($conn, $sqlcon)) {
                
                                    echo "<script> 
                                    alert('Acta registrada con exito.'); 
                                    window.location.href='../vistas/principalmatrimonio.php'; 
                                    </script>"; 
                                
                
                                } else {
                
                                    echo "<script> 
                                    alert('Error, Acta no ingresada. Revisar datos ingresados.'); 
                                    window.location.href='../vistas/principalmatrimonio.php'; 
                                    </script>"; 
                
                                }   
    
                    }else if($padrinou == 0 && $padrinod == 0){
    
                        $sqlcon = "INSERT INTO registro(noLibro, noFolio, supletoria, Sacramentos_idSacramentos, Sacramentados_idDatosPersona,Sacramentados_idDatosPersonad)
                        VALUES ($libro,$folio, 0,4, $novio, $novia)";
                
                                if (mysqli_query($conn, $sqlcon)) {
                
                                    echo "<script> 
                                    alert('Acta registrada con exito.'); 
                                    window.location.href='../vistas/principalmatrimonio.php'; 
                                    </script>"; 
                                
                
                                } else {
                
                                    echo "<script> 
                                    alert('Error, Acta no ingresada. Revisar datos ingresados.'); 
                                    window.location.href='../vistas/principalmatrimonio.php'; 
                                    </script>"; 
                
                                }   
    
                    }else if($padrinou !=0 && $padrinod == 0){
                        
                        $sqlcon = "INSERT INTO registro(noLibro, noFolio, supletoria, Sacramentos_idSacramentos, Persona_idPadrinouno, Sacramentados_idDatosPersona,Sacramentados_idDatosPersonad)
                        VALUES ($libro,$folio, 0,4,$padrinou, $novio, $novia)";
                
                                if (mysqli_query($conn, $sqlcon)) {
                
                                    echo "<script> 
                                    alert('Acta registrada con exito.'); 
                                    window.location.href='../vistas/principalmatrimonio.php'; 
                                    </script>"; 
                                
                
                                } else {
                
                                    echo "<script> 
                                    alert('Error, Acta no ingresada. Revisar datos ingresados.'); 
                                    window.location.href='../vistas/principalmatrimonio.php'; 
                                    </script>"; 
                
                                }   
    
    
    
                    }else{
                        //viene padrino uno vacio
    
                        
                        echo "<script> 
                        alert('Error, Acta no ingresada. Cuando ingrese solo un padrino colocarlo en la primera casilla.'); 
                        window.location.href='../vistas/principalmatrimonio.php'; 
                        </script>"; 
                    }
    
    
    
    
    
                }
                






            }



        }else {
            //error
            echo "<script> 
            alert('Error, Acta no ingresada. Ingresar el nombre del novio y de la novia.'); 
            window.location.href='../vistas/principalmatrimonio.php'; 
            </script>"; 


        }



?>