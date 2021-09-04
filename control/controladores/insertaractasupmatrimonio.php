<?php
     include '../modelos/conector.php'; 


    $libro = $_POST['libro'];
    $folio = $_POST['folio'];
    $suple = $_POST['supletoria'];
    $fecha = $_POST['fecha'];
    $novio = $_POST['novio'];
    $feligresno = $_POST['feligresnovio'];
    $edadnovio = $_POST['edadno'];
    $novia = $_POST['novia'];
    $feligresna = $_POST['feligresnovia'];
    $edadnovia = $_POST['edadna'];
    $sacerdote = $_POST['sacerdote'];
    $padrinou = $_POST['padrinou'];
    $padrinod = $_POST['padrinod'];
    $testigo = $_POST['testigo'];


    /*echo $libro;
    echo "-----";
    echo $folio;
    echo "-----";
    echo $suple;
    echo "-----";
    echo $fecha;
    echo "-----";
    echo $novio;
    echo "-----";
    echo $feligresno;
    echo "-----";
    echo $edadnovio;
    echo "-----";
    echo $novia;
    echo "-----";
    echo $feligresna;
    echo "-----";
    echo $edadnovia;
    echo "-----";
    echo $sacerdote;
    echo "-----";
    echo $padrinou;
    echo "-----";
    echo $padrinod;
    echo "-----";
    echo $testigo;
*/


    if($novio !=0 && $novia !=0){


        if(!empty($fecha)){

                if($sacerdote !=0){

                        if($padrinou !=0 && $padrinod !=0){
                            

                            $sqlcon = "INSERT INTO registro(noLibro, noFolio,noSupletoria,fechaSacramento,edadSacramento,testimonioPersona,feligresNovio,feligresNovia,edad, supletoria, Sacramentos_idSacramentos, Persona_idPadrinouno, Persona_idPadrinodos, Sacramentados_idDatosPersona,Sacramentados_idDatosPersonad,Persona_idPersonaSacerdote)
                            VALUES ($libro,$folio,$suple,'$fecha',$edadnovio,'$testigo','$feligresno','$feligresna',$edadnovia, 1,4,$padrinou, $padrinod, $novio, $novia,$sacerdote)";
                        
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





                        }else if ($padrinou !=0 && $padrinod ==0){



                            $sqlcon = "INSERT INTO registro(noLibro, noFolio,noSupletoria,fechaSacramento,edadSacramento,testimonioPersona,feligresNovio,feligresNovia,edad, supletoria, Sacramentos_idSacramentos, Persona_idPadrinouno, Sacramentados_idDatosPersona,Sacramentados_idDatosPersonad,Persona_idPersonaSacerdote)
                            VALUES ($libro,$folio,$suple,'$fecha',$edadnovio,'$testigo','$feligresno','$feligresna',$edadnovia, 1,4,$padrinou, $novio, $novia,$sacerdote)";
                        
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







                        }else if ($padrinou ==0 && $padrinod ==0){


                            $sqlcon = "INSERT INTO registro(noLibro, noFolio,noSupletoria,fechaSacramento,edadSacramento,testimonioPersona,feligresNovio,feligresNovia,edad, supletoria, Sacramentos_idSacramentos, Sacramentados_idDatosPersona,Sacramentados_idDatosPersonad,Persona_idPersonaSacerdote)
                            VALUES ($libro,$folio,$suple,'$fecha',$edadnovio,'$testigo','$feligresno','$feligresna',$edadnovia, 1,4, $novio, $novia,$sacerdote)";
                        
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






                        }else if($padrinou ==0 && $padrinod !=0){

                            echo "<script> 
                            alert('Error, Acta no ingresada. Si ingresa solo un padrino, colocarlo en la primera casilla.'); 
                            window.location.href='../vistas/principalmatrimonio.php'; 
                            </script>"; 


                        }



        
    




        }else{ //no viene el sacerdote


            if($padrinou !=0 && $padrinod !=0){
                            

                $sqlcon = "INSERT INTO registro(noLibro, noFolio,noSupletoria,fechaSacramento,edadSacramento,testimonioPersona,feligresNovio,feligresNovia,edad, supletoria, Sacramentos_idSacramentos, Persona_idPadrinouno, Persona_idPadrinodos, Sacramentados_idDatosPersona,Sacramentados_idDatosPersonad)
                VALUES ($libro,$folio,$suple,'$fecha',$edadnovio,'$testigo','$feligresno','$feligresna',$edadnovia, 1,4,$padrinou, $padrinod, $novio, $novia)";
            
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





            }else if ($padrinou !=0 && $padrinod ==0){



                $sqlcon = "INSERT INTO registro(noLibro, noFolio,noSupletoria,fechaSacramento,edadSacramento,testimonioPersona,feligresNovio,feligresNovia,edad, supletoria, Sacramentos_idSacramentos, Persona_idPadrinouno, Sacramentados_idDatosPersona,Sacramentados_idDatosPersonad)
                VALUES ($libro,$folio,$suple,'$fecha',$edadnovio,'$testigo','$feligresno','$feligresna',$edadnovia, 1,4,$padrinou, $novio, $novia)";
            
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







            }else if ($padrinou ==0 && $padrinod ==0){


                $sqlcon = "INSERT INTO registro(noLibro, noFolio,noSupletoria,fechaSacramento,edadSacramento,testimonioPersona,feligresNovio,feligresNovia,edad, supletoria, Sacramentos_idSacramentos, Sacramentados_idDatosPersona,Sacramentados_idDatosPersonad)
                VALUES ($libro,$folio,$suple,'$fecha',$edadnovio,'$testigo','$feligresno','$feligresna',$edadnovia, 1,4, $novio, $novia)";
            
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






            }else if($padrinou ==0 && $padrinod !=0){

                echo "<script> 
                alert('Error, Acta no ingresada. Si ingresa solo un padrino, colocarlo en la primera casilla.'); 
                window.location.href='../vistas/principalmatrimonio.php'; 
                </script>"; 


            }















        }






        }else{//no viene la fecha


            if($sacerdote !=0){

                if($padrinou !=0 && $padrinod !=0){
                    

                    $sqlcon = "INSERT INTO registro(noLibro, noFolio,noSupletoria,edadSacramento,testimonioPersona,feligresNovio,feligresNovia,edad, supletoria, Sacramentos_idSacramentos, Persona_idPadrinouno, Persona_idPadrinodos, Sacramentados_idDatosPersona,Sacramentados_idDatosPersonad,Persona_idPersonaSacerdote)
                    VALUES ($libro,$folio,$suple,$edadnovio,'$testigo','$feligresno','$feligresna',$edadnovia, 1,4,$padrinou, $padrinod, $novio, $novia,$sacerdote)";
                
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





                }else if ($padrinou !=0 && $padrinod ==0){



                    $sqlcon = "INSERT INTO registro(noLibro, noFolio,noSupletoria,edadSacramento,testimonioPersona,feligresNovio,feligresNovia,edad, supletoria, Sacramentos_idSacramentos, Persona_idPadrinouno, Sacramentados_idDatosPersona,Sacramentados_idDatosPersonad,Persona_idPersonaSacerdote)
                    VALUES ($libro,$folio,$suple,$edadnovio,'$testigo','$feligresno','$feligresna',$edadnovia, 1,4,$padrinou, $novio, $novia,$sacerdote)";
                
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







                }else if ($padrinou ==0 && $padrinod ==0){


                    $sqlcon = "INSERT INTO registro(noLibro, noFolio,noSupletoria,edadSacramento,testimonioPersona,feligresNovio,feligresNovia,edad, supletoria, Sacramentos_idSacramentos, Sacramentados_idDatosPersona,Sacramentados_idDatosPersonad,Persona_idPersonaSacerdote)
                    VALUES ($libro,$folio,$suple,$edadnovio,'$testigo','$feligresno','$feligresna',$edadnovia, 1,4, $novio, $novia,$sacerdote)";
                
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






                }else if($padrinou ==0 && $padrinod !=0){

                    echo "<script> 
                    alert('Error, Acta no ingresada. Si ingresa solo un padrino, colocarlo en la primera casilla.'); 
                    window.location.href='../vistas/principalmatrimonio.php'; 
                    </script>"; 


                }









}else{ //no viene el sacerdote


    if($padrinou !=0 && $padrinod !=0){
                    

        $sqlcon = "INSERT INTO registro(noLibro, noFolio,noSupletoria,edadSacramento,testimonioPersona,feligresNovio,feligresNovia,edad, supletoria, Sacramentos_idSacramentos, Persona_idPadrinouno, Persona_idPadrinodos, Sacramentados_idDatosPersona,Sacramentados_idDatosPersonad)
        VALUES ($libro,$folio,$suple,$edadnovio,'$testigo','$feligresno','$feligresna',$edadnovia, 1,4,$padrinou, $padrinod, $novio, $novia)";
    
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





    }else if ($padrinou !=0 && $padrinod ==0){



        $sqlcon = "INSERT INTO registro(noLibro, noFolio,noSupletoria,edadSacramento,testimonioPersona,feligresNovio,feligresNovia,edad, supletoria, Sacramentos_idSacramentos, Persona_idPadrinouno, Sacramentados_idDatosPersona,Sacramentados_idDatosPersonad)
        VALUES ($libro,$folio,$suple,$edadnovio,'$testigo','$feligresno','$feligresna',$edadnovia, 1,4,$padrinou, $novio, $novia)";
    
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







    }else if ($padrinou ==0 && $padrinod ==0){


        $sqlcon = "INSERT INTO registro(noLibro, noFolio,noSupletoria,edadSacramento,testimonioPersona,feligresNovio,feligresNovia,edad, supletoria, Sacramentos_idSacramentos, Sacramentados_idDatosPersona,Sacramentados_idDatosPersonad)
        VALUES ($libro,$folio,$suple,$edadnovio,'$testigo','$feligresno','$feligresna',$edadnovia, 1,4, $novio, $novia)";
    
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






    }else if($padrinou ==0 && $padrinod !=0){

        echo "<script> 
        alert('Error, Acta no ingresada. Si ingresa solo un padrino, colocarlo en la primera casilla.'); 
        window.location.href='../vistas/principalmatrimonio.php'; 
        </script>"; 


    }




}



            
        }




        }else{

            echo "<script> 
            alert('Error, Acta no ingresada. Ingresar el novio y la novia.'); 
            window.location.href='../vistas/principalmatrimonio.php'; 
            </script>"; 


        }







?>