<?php
     include '../modelos/conector.php'; 


 $idacta = $_POST['idacta'];
 $libro = $_POST['libro'];
 $folio = $_POST['folio'];
 $supletoria = $_POST['suple'];
 $fecha  = $_POST['fecha'];
 $novio = $_POST['novio'];
 $feligresnovio = $_POST['feligresnovio'];
 $edadnovio = $_POST['edadno'];
 $novia = $_POST['novia'];
 $feligresnovia = $_POST['feligresnovia'];
 $edadnovia = $_POST['edadna'];
 $sacerdote = $_POST['sacerdote'];
 $padrinou = $_POST['padrinou'];
 $padrinod = $_POST['padrinod'];
 $testigo = $_POST['testigo'];


/*
echo $idacta;
echo "-----";
echo $libro;
echo "-----";
echo $folio;
echo "-----";
echo $supletoria;
echo "-----";
echo $fecha;
echo "-----";
echo $novio;
echo "-----";
echo $feligresnovio;
echo "-----";
echo $edadnovio;
echo "-----";
echo $novia;
echo "-----";
echo $feligresnovia;
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


    if(!empty($fecha)){
        if($sacerdote !=0){

            if($novio !=0 && $novia !=0){
                
                                    if($padrinou !=0 && $padrinod !=0){

                                        $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, noSupletoria = $supletoria,
                                        fechaSacramento = '$fecha',edadSacramento = $edadnovio,testimonioPersona = '$testigo',
                                        Persona_idPersonaSacerdote = $sacerdote,feligresNovio = '$feligresnovio', 
                                        feligresNovia = '$feligresnovia', edad = $edadnovia,
                                        Sacramentados_idDatosPersona = $novio, Sacramentados_idDatosPersonad = $novia,
                                        Persona_idPadrinouno = $padrinou, Persona_idPadrinodos = $padrinod
                                         where idRegistro = $idacta";
                                   
                                           if (mysqli_query($conn, $sql)) {
                                   
                                           echo "<script> 
                                           alert('Acta modificada con exito.'); 
                                           window.location.href='../vistas/principalmatrimonio.php'; 
                                           </script>"; 
                                           } else {
                                   
                                           echo "<script> 
                                           alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                                           window.location.href='../vistas/principalmatrimonio.php'; 
                                           </script>"; 
                                   
                                           }
                         

                                    }else if ($padrinou !=0 && $padrinod ==0){



                                        $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, noSupletoria = $supletoria,
                                        fechaSacramento = '$fecha',edadSacramento = $edadnovio,testimonioPersona = '$testigo',
                                        Persona_idPersonaSacerdote = $sacerdote,feligresNovio = '$feligresnovio', 
                                        feligresNovia = '$feligresnovia', edad = $edadnovia,
                                        Sacramentados_idDatosPersona = $novio, Sacramentados_idDatosPersonad = $novia,
                                        Persona_idPadrinouno = $padrinou
                                         where idRegistro = $idacta";
                                   
                                           if (mysqli_query($conn, $sql)) {
                                   
                                           echo "<script> 
                                           alert('Acta modificada con exito.'); 
                                           window.location.href='../vistas/principalmatrimonio.php'; 
                                           </script>"; 
                                           } else {
                                   
                                           echo "<script> 
                                           alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                                           window.location.href='../vistas/principalmatrimonio.php'; 
                                           </script>"; 
                                   
                                           }







                                    }else if ($padrinou ==0 && $padrinod !=0){


                                        $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, noSupletoria = $supletoria,
                                        fechaSacramento = '$fecha',edadSacramento = $edadnovio,testimonioPersona = '$testigo',
                                        Persona_idPersonaSacerdote = $sacerdote,feligresNovio = '$feligresnovio', 
                                        feligresNovia = $feligresnovia, edad = $edadnovia,
                                        Sacramentados_idDatosPersona = $novio, Sacramentados_idDatosPersonad = $novia,
                                         Persona_idPadrinodos = $padrinod
                                         where idRegistro = $idacta";
                                   
                                           if (mysqli_query($conn, $sql)) {
                                   
                                           echo "<script> 
                                           alert('Acta modificada con exito.'); 
                                           window.location.href='../vistas/principalmatrimonio.php'; 
                                           </script>"; 
                                           } else {
                                   
                                           echo "<script> 
                                           alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                                           window.location.href='../vistas/principalmatrimonio.php'; 
                                           </script>"; 
                                   
                                           }



                                    }else if ($padrinou ==0 && $padrinod ==0){


                                        $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, noSupletoria = $supletoria,
                                        fechaSacramento = '$fecha',edadSacramento = $edadnovio,testimonioPersona = '$testigo',
                                        Persona_idPersonaSacerdote = $sacerdote,feligresNovio = '$feligresnovio', 
                                        feligresNovia = '$feligresnovia', edad = $edadnovia,
                                        Sacramentados_idDatosPersona = $novio, Sacramentados_idDatosPersonad = $novia
                                         where idRegistro = $idacta";
                                   
                                           if (mysqli_query($conn, $sql)) {
                                   
                                           echo "<script> 
                                           alert('Acta modificada con exito.'); 
                                           window.location.href='../vistas/principalmatrimonio.php'; 
                                           </script>"; 
                                           } else {
                                   
                                           echo "<script> 
                                           alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                                           window.location.href='../vistas/principalmatrimonio.php'; 
                                           </script>"; 
                                   
                                           }




                                    }

            }else if($novio !=0 && $novia ==0){

                                    

                if($padrinou !=0 && $padrinod !=0){

                    $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, noSupletoria = $supletoria,
                    fechaSacramento = '$fecha',edadSacramento = $edadnovio,testimonioPersona = '$testigo',
                    Persona_idPersonaSacerdote = $sacerdote,feligresNovio = '$feligresnovio', 
                    feligresNovia = '$feligresnovia', edad = $edadnovia,
                    Sacramentados_idDatosPersona = $novio,
                    Persona_idPadrinouno = $padrinou, Persona_idPadrinodos = $padrinod
                     where idRegistro = $idacta";
               
                       if (mysqli_query($conn, $sql)) {
               
                       echo "<script> 
                       alert('Acta modificada con exito.'); 
                       window.location.href='../vistas/principalmatrimonio.php'; 
                       </script>"; 
                       } else {
               
                       echo "<script> 
                       alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                       window.location.href='../vistas/principalmatrimonio.php'; 
                       </script>"; 
               
                       }
     

                }else if ($padrinou !=0 && $padrinod ==0){



                    $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, noSupletoria = $supletoria,
                    fechaSacramento = '$fecha',edadSacramento = $edadnovio,testimonioPersona = '$testigo',
                    Persona_idPersonaSacerdote = $sacerdote,feligresNovio = '$feligresnovio', 
                    feligresNovia = '$feligresnovia', edad = $edadnovia,
                    Sacramentados_idDatosPersona = $novio, 
                    Persona_idPadrinouno = $padrinou
                     where idRegistro = $idacta";
               
                       if (mysqli_query($conn, $sql)) {
               
                       echo "<script> 
                       alert('Acta modificada con exito.'); 
                       window.location.href='../vistas/principalmatrimonio.php'; 
                       </script>"; 
                       } else {
               
                       echo "<script> 
                       alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                       window.location.href='../vistas/principalmatrimonio.php'; 
                       </script>"; 
               
                       }







                }else if ($padrinou ==0 && $padrinod !=0){


                    $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, noSupletoria = $supletoria,
                    fechaSacramento = '$fecha',edadSacramento = $edadnovio,testimonioPersona = '$testigo',
                    Persona_idPersonaSacerdote = $sacerdote,feligresNovio = '$feligresnovio', 
                    feligresNovia = '$feligresnovia', edad = $edadnovia,
                    Sacramentados_idDatosPersona = $novio, 
                     Persona_idPadrinodos = $padrinod
                     where idRegistro = $idacta";
               
                       if (mysqli_query($conn, $sql)) {
               
                       echo "<script> 
                       alert('Acta modificada con exito.'); 
                       window.location.href='../vistas/principalmatrimonio.php'; 
                       </script>"; 
                       } else {
               
                       echo "<script> 
                       alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                       window.location.href='../vistas/principalmatrimonio.php'; 
                       </script>"; 
               
                       }



                }else if ($padrinou ==0 && $padrinod ==0){


                    $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, noSupletoria = $supletoria,
                    fechaSacramento = '$fecha',edadSacramento = $edadnovio,testimonioPersona = '$testigo',
                    Persona_idPersonaSacerdote = $sacerdote,feligresNovio = '$feligresnovio', 
                    feligresNovia = '$feligresnovia', edad = $edadnovia,
                    Sacramentados_idDatosPersona = $novio
                     where idRegistro = $idacta";
               
                       if (mysqli_query($conn, $sql)) {
               
                       echo "<script> 
                       alert('Acta modificada con exito.'); 
                       window.location.href='../vistas/principalmatrimonio.php'; 
                       </script>"; 
                       } else {
               
                       echo "<script> 
                       alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                       window.location.href='../vistas/principalmatrimonio.php'; 
                       </script>"; 
               
                       }




                }





            }else if($novio ==0 && $novia !=0){

                if($padrinou !=0 && $padrinod !=0){

                    $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, noSupletoria = $supletoria,
                    fechaSacramento = '$fecha',edadSacramento = $edadnovio,testimonioPersona = '$testigo',
                    Persona_idPersonaSacerdote = $sacerdote,feligresNovio = '$feligresnovio', 
                    feligresNovia = '$feligresnovia', edad = $edadnovia,
                    Sacramentados_idDatosPersonad = $novia,
                    Persona_idPadrinouno = $padrinou, Persona_idPadrinodos = $padrinod
                     where idRegistro = $idacta";
               
                       if (mysqli_query($conn, $sql)) {
               
                       echo "<script> 
                       alert('Acta modificada con exito.'); 
                       window.location.href='../vistas/principalmatrimonio.php'; 
                       </script>"; 
                       } else {
               
                       echo "<script> 
                       alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                       window.location.href='../vistas/principalmatrimonio.php'; 
                       </script>"; 
               
                       }
     

                }else if ($padrinou !=0 && $padrinod ==0){



                    $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, noSupletoria = $supletoria,
                    fechaSacramento = '$fecha',edadSacramento = $edadnovio,testimonioPersona = '$testigo',
                    Persona_idPersonaSacerdote = $sacerdote,feligresNovio = '$feligresnovio', 
                    feligresNovia = '$feligresnovia', edad = $edadnovia,
                     Sacramentados_idDatosPersonad = $novia,
                    Persona_idPadrinouno = $padrinou
                     where idRegistro = $idacta";
               
                       if (mysqli_query($conn, $sql)) {
               
                       echo "<script> 
                       alert('Acta modificada con exito.'); 
                       window.location.href='../vistas/principalmatrimonio.php'; 
                       </script>"; 
                       } else {
               
                       echo "<script> 
                       alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                       window.location.href='../vistas/principalmatrimonio.php'; 
                       </script>"; 
               
                       }







                }else if ($padrinou ==0 && $padrinod !=0){


                    $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, noSupletoria = $supletoria,
                    fechaSacramento = '$fecha',edadSacramento = $edadnovio,testimonioPersona = '$testigo',
                    Persona_idPersonaSacerdote = $sacerdote,feligresNovio = '$feligresnovio', 
                    feligresNovia = '$feligresnovia', edad = $edadnovia,
                    Sacramentados_idDatosPersonad = $novia,
                     Persona_idPadrinodos = $padrinod
                     where idRegistro = $idacta";
               
                       if (mysqli_query($conn, $sql)) {
               
                       echo "<script> 
                       alert('Acta modificada con exito.'); 
                       window.location.href='../vistas/principalmatrimonio.php'; 
                       </script>"; 
                       } else {
               
                       echo "<script> 
                       alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                       window.location.href='../vistas/principalmatrimonio.php'; 
                       </script>"; 
               
                       }



                }else if ($padrinou ==0 && $padrinod ==0){


                    $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, noSupletoria = $supletoria,
                    fechaSacramento = '$fecha',edadSacramento = $edadnovio,testimonioPersona = '$testigo',
                    Persona_idPersonaSacerdote = $sacerdote,feligresNovio = '$feligresnovio', 
                    feligresNovia = '$feligresnovia', edad = $edadnovia,
                     Sacramentados_idDatosPersonad = $novia
                     where idRegistro = $idacta";
               
                       if (mysqli_query($conn, $sql)) {
               
                       echo "<script> 
                       alert('Acta modificada con exito.'); 
                       window.location.href='../vistas/principalmatrimonio.php'; 
                       </script>"; 
                       } else {
               
                       echo "<script> 
                       alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                       window.location.href='../vistas/principalmatrimonio.php'; 
                       </script>"; 
               
                       }




                }



            }else if($novio ==0 && $novia ==0){

                if($padrinou !=0 && $padrinod !=0){

                    $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, noSupletoria = $supletoria,
                    fechaSacramento = '$fecha',edadSacramento = $edadnovio,testimonioPersona = '$testigo',
                    Persona_idPersonaSacerdote = $sacerdote,feligresNovio = '$feligresnovio', 
                    feligresNovia = '$feligresnovia', edad = $edadnovia,
                    Persona_idPadrinouno = $padrinou, Persona_idPadrinodos = $padrinod
                     where idRegistro = $idacta";
               
                       if (mysqli_query($conn, $sql)) {
               
                       echo "<script> 
                       alert('Acta modificada con exito.'); 
                       window.location.href='../vistas/principalmatrimonio.php'; 
                       </script>"; 
                       } else {
               
                       echo "<script> 
                       alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                       window.location.href='../vistas/principalmatrimonio.php'; 
                       </script>"; 
               
                       }
     

                }else if ($padrinou !=0 && $padrinod ==0){



                    $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, noSupletoria = $supletoria,
                    fechaSacramento = '$fecha',edadSacramento = $edadnovio,testimonioPersona = '$testigo',
                    Persona_idPersonaSacerdote = $sacerdote,feligresNovio = '$feligresnovio', 
                    feligresNovia = '$feligresnovia', edad = $edadnovia,
                    Persona_idPadrinouno = $padrinou
                     where idRegistro = $idacta";
               
                       if (mysqli_query($conn, $sql)) {
               
                       echo "<script> 
                       alert('Acta modificada con exito.'); 
                       window.location.href='../vistas/principalmatrimonio.php'; 
                       </script>"; 
                       } else {
               
                       echo "<script> 
                       alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                       window.location.href='../vistas/principalmatrimonio.php'; 
                       </script>"; 
               
                       }







                }else if ($padrinou ==0 && $padrinod !=0){


                    $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, noSupletoria = $supletoria,
                    fechaSacramento = '$fecha',edadSacramento = $edadnovio,testimonioPersona = '$testigo',
                    Persona_idPersonaSacerdote = $sacerdote,feligresNovio = '$feligresnovio', 
                    feligresNovia = '$feligresnovia', edad = $edadnovia,
                     Persona_idPadrinodos = $padrinod
                     where idRegistro = $idacta";
               
                       if (mysqli_query($conn, $sql)) {
               
                       echo "<script> 
                       alert('Acta modificada con exito.'); 
                       window.location.href='../vistas/principalmatrimonio.php'; 
                       </script>"; 
                       } else {
               
                       echo "<script> 
                       alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                       window.location.href='../vistas/principalmatrimonio.php'; 
                       </script>"; 
               
                       }



                }else if ($padrinou ==0 && $padrinod ==0){


                    $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, noSupletoria = $supletoria,
                    fechaSacramento = '$fecha',edadSacramento = $edadnovio,testimonioPersona = '$testigo',
                    Persona_idPersonaSacerdote = $sacerdote,feligresNovio = '$feligresnovio', 
                    feligresNovia = '$feligresnovia', edad = $edadnovia
                     where idRegistro = $idacta";
               
                       if (mysqli_query($conn, $sql)) {
               
                       echo "<script> 
                       alert('Acta modificada con exito.'); 
                       window.location.href='../vistas/principalmatrimonio.php'; 
                       </script>"; 
                       } else {
               
                       echo "<script> 
                       alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                       window.location.href='../vistas/principalmatrimonio.php'; 
                       </script>"; 
               
                       }




                }

    
            }

        }else{//no viene sacerdote



                                            if($novio !=0 && $novia !=0){
                                                
                                                if($padrinou !=0 && $padrinod !=0){

                                                    $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, noSupletoria = $supletoria,
                                                    fechaSacramento = '$fecha',edadSacramento = $edadnovio,testimonioPersona = '$testigo',
                                                    feligresNovio = '$feligresnovio', 
                                                    feligresNovia = '$feligresnovia', edad = $edadnovia,
                                                    Sacramentados_idDatosPersona = $novio, Sacramentados_idDatosPersonad = $novia,
                                                    Persona_idPadrinouno = $padrinou, Persona_idPadrinodos = $padrinod
                                                    where idRegistro = $idacta";
                                            
                                                    if (mysqli_query($conn, $sql)) {
                                            
                                                    echo "<script> 
                                                    alert('Acta modificada con exito.'); 
                                                    window.location.href='../vistas/principalmatrimonio.php'; 
                                                    </script>"; 
                                                    } else {
                                            
                                                    echo "<script> 
                                                    alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                                                    window.location.href='../vistas/principalmatrimonio.php'; 
                                                    </script>"; 
                                            
                                                    }
                                    

                                                }else if ($padrinou !=0 && $padrinod ==0){



                                                    $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, noSupletoria = $supletoria,
                                                    fechaSacramento = '$fecha',edadSacramento = $edadnovio,testimonioPersona = '$testigo',
                                                    feligresNovio = '$feligresnovio', 
                                                    feligresNovia = '$feligresnovia', edad = $edadnovia,
                                                    Sacramentados_idDatosPersona = $novio, Sacramentados_idDatosPersonad = $novia,
                                                    Persona_idPadrinouno = $padrinou
                                                    where idRegistro = $idacta";
                                            
                                                    if (mysqli_query($conn, $sql)) {
                                            
                                                    echo "<script> 
                                                    alert('Acta modificada con exito.'); 
                                                    window.location.href='../vistas/principalmatrimonio.php'; 
                                                    </script>"; 
                                                    } else {
                                            
                                                    echo "<script> 
                                                    alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                                                    window.location.href='../vistas/principalmatrimonio.php'; 
                                                    </script>"; 
                                            
                                                    }







                                                }else if ($padrinou ==0 && $padrinod !=0){


                                                    $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, noSupletoria = $supletoria,
                                                    fechaSacramento = '$fecha',edadSacramento = $edadnovio,testimonioPersona = '$testigo',
                                                    feligresNovio = '$feligresnovio', 
                                                    feligresNovia = '$feligresnovia', edad = $edadnovia,
                                                    Sacramentados_idDatosPersona = $novio, Sacramentados_idDatosPersonad = $novia,
                                                    Persona_idPadrinodos = $padrinod
                                                    where idRegistro = $idacta";
                                            
                                                    if (mysqli_query($conn, $sql)) {
                                            
                                                    echo "<script> 
                                                    alert('Acta modificada con exito.'); 
                                                    window.location.href='../vistas/principalmatrimonio.php'; 
                                                    </script>"; 
                                                    } else {
                                            
                                                    echo "<script> 
                                                    alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                                                    window.location.href='../vistas/principalmatrimonio.php'; 
                                                    </script>"; 
                                            
                                                    }



                                                }else if ($padrinou ==0 && $padrinod ==0){


                                                    $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, noSupletoria = $supletoria,
                                                    fechaSacramento = '$fecha',edadSacramento = $edadnovio,testimonioPersona = '$testigo',
                                                    feligresNovio = '$feligresnovio', 
                                                    feligresNovia = '$feligresnovia', edad = $edadnovia,
                                                    Sacramentados_idDatosPersona = $novio, Sacramentados_idDatosPersonad = $novia
                                                    where idRegistro = $idacta";
                                            
                                                    if (mysqli_query($conn, $sql)) {
                                            
                                                    echo "<script> 
                                                    alert('Acta modificada con exito.'); 
                                                    window.location.href='../vistas/principalmatrimonio.php'; 
                                                    </script>"; 
                                                    } else {
                                            
                                                    echo "<script> 
                                                    alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                                                    window.location.href='../vistas/principalmatrimonio.php'; 
                                                    </script>"; 
                                            
                                                    }




                                                }

                                }else if($novio !=0 && $novia ==0){

                                                

                                if($padrinou !=0 && $padrinod !=0){

                                $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, noSupletoria = $supletoria,
                                fechaSacramento = '$fecha',edadSacramento = $edadnovio,testimonioPersona = '$testigo',
                                feligresNovio = '$feligresnovio', 
                                feligresNovia = '$feligresnovia', edad = $edadnovia,
                                Sacramentados_idDatosPersona = $novio,
                                Persona_idPadrinouno = $padrinou, Persona_idPadrinodos = $padrinod
                                where idRegistro = $idacta";

                                if (mysqli_query($conn, $sql)) {

                                echo "<script> 
                                alert('Acta modificada con exito.'); 
                                window.location.href='../vistas/principalmatrimonio.php'; 
                                </script>"; 
                                } else {

                                echo "<script> 
                                alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                                window.location.href='../vistas/principalmatrimonio.php'; 
                                </script>"; 

                                }


                                }else if ($padrinou !=0 && $padrinod ==0){



                                $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, noSupletoria = $supletoria,
                                fechaSacramento = '$fecha',edadSacramento = $edadnovio,testimonioPersona = '$testigo',
                                feligresNovio = '$feligresnovio', 
                                feligresNovia = '$feligresnovia', edad = $edadnovia,
                                Sacramentados_idDatosPersona = $novio, 
                                Persona_idPadrinouno = $padrinou
                                where idRegistro = $idacta";

                                if (mysqli_query($conn, $sql)) {

                                echo "<script> 
                                alert('Acta modificada con exito.'); 
                                window.location.href='../vistas/principalmatrimonio.php'; 
                                </script>"; 
                                } else {

                                echo "<script> 
                                alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                                window.location.href='../vistas/principalmatrimonio.php'; 
                                </script>"; 

                                }







                                }else if ($padrinou ==0 && $padrinod !=0){


                                $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, noSupletoria = $supletoria,
                                fechaSacramento = '$fecha',edadSacramento = $edadnovio,testimonioPersona = '$testigo',
                                feligresNovio = '$feligresnovio', 
                                feligresNovia = '$feligresnovia', edad = $edadnovia,
                                Sacramentados_idDatosPersona = $novio, 
                                Persona_idPadrinodos = $padrinod
                                where idRegistro = $idacta";

                                if (mysqli_query($conn, $sql)) {

                                echo "<script> 
                                alert('Acta modificada con exito.'); 
                                window.location.href='../vistas/principalmatrimonio.php'; 
                                </script>"; 
                                } else {

                                echo "<script> 
                                alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                                window.location.href='../vistas/principalmatrimonio.php'; 
                                </script>"; 

                                }



                                }else if ($padrinou ==0 && $padrinod ==0){


                                $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, noSupletoria = $supletoria,
                                fechaSacramento = '$fecha',edadSacramento = $edadnovio,testimonioPersona = '$testigo',
                                feligresNovio = '$feligresnovio', 
                                feligresNovia = '$feligresnovia', edad = $edadnovia,
                                Sacramentados_idDatosPersona = $novio
                                where idRegistro = $idacta";

                                if (mysqli_query($conn, $sql)) {

                                echo "<script> 
                                alert('Acta modificada con exito.'); 
                                window.location.href='../vistas/principalmatrimonio.php'; 
                                </script>"; 
                                } else {

                                echo "<script> 
                                alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                                window.location.href='../vistas/principalmatrimonio.php'; 
                                </script>"; 

                                }




                                }





                                }else if($novio ==0 && $novia !=0){

                                if($padrinou !=0 && $padrinod !=0){

                                $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, noSupletoria = $supletoria,
                                fechaSacramento = '$fecha',edadSacramento = $edadnovio,testimonioPersona = '$testigo',
                                feligresNovio = '$feligresnovio', 
                                feligresNovia = '$feligresnovia', edad = $edadnovia,
                                Sacramentados_idDatosPersonad = $novia,
                                Persona_idPadrinouno = $padrinou, Persona_idPadrinodos = $padrinod
                                where idRegistro = $idacta";

                                if (mysqli_query($conn, $sql)) {

                                echo "<script> 
                                alert('Acta modificada con exito.'); 
                                window.location.href='../vistas/principalmatrimonio.php'; 
                                </script>"; 
                                } else {

                                echo "<script> 
                                alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                                window.location.href='../vistas/principalmatrimonio.php'; 
                                </script>"; 

                                }


                                }else if ($padrinou !=0 && $padrinod ==0){



                                $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, noSupletoria = $supletoria,
                                fechaSacramento = '$fecha',edadSacramento = $edadnovio,testimonioPersona = '$testigo',
                                feligresNovio = '$feligresnovio', 
                                feligresNovia = '$feligresnovia', edad = $edadnovia,
                                Sacramentados_idDatosPersonad = $novia,
                                Persona_idPadrinouno = $padrinou
                                where idRegistro = $idacta";

                                if (mysqli_query($conn, $sql)) {

                                echo "<script> 
                                alert('Acta modificada con exito.'); 
                                window.location.href='../vistas/principalmatrimonio.php'; 
                                </script>"; 
                                } else {

                                echo "<script> 
                                alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                                window.location.href='../vistas/principalmatrimonio.php'; 
                                </script>"; 

                                }







                                }else if ($padrinou ==0 && $padrinod !=0){


                                $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, noSupletoria = $supletoria,
                                fechaSacramento = '$fecha',edadSacramento = $edadnovio,testimonioPersona = '$testigo',
                                feligresNovio = '$feligresnovio', 
                                feligresNovia = '$feligresnovia', edad = $edadnovia,
                                Sacramentados_idDatosPersonad = $novia,
                                Persona_idPadrinodos = $padrinod
                                where idRegistro = $idacta";

                                if (mysqli_query($conn, $sql)) {

                                echo "<script> 
                                alert('Acta modificada con exito.'); 
                                window.location.href='../vistas/principalmatrimonio.php'; 
                                </script>"; 
                                } else {

                                echo "<script> 
                                alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                                window.location.href='../vistas/principalmatrimonio.php'; 
                                </script>"; 

                                }



                                }else if ($padrinou ==0 && $padrinod ==0){


                                $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, noSupletoria = $supletoria,
                                fechaSacramento = '$fecha',edadSacramento = $edadnovio,testimonioPersona = '$testigo',
                                feligresNovio = '$feligresnovio', 
                                feligresNovia = '$feligresnovia', edad = $edadnovia,
                                Sacramentados_idDatosPersonad = $novia
                                where idRegistro = $idacta";

                                if (mysqli_query($conn, $sql)) {

                                echo "<script> 
                                alert('Acta modificada con exito.'); 
                                window.location.href='../vistas/principalmatrimonio.php'; 
                                </script>"; 
                                } else {

                                echo "<script> 
                                alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                                window.location.href='../vistas/principalmatrimonio.php'; 
                                </script>"; 

                                }




                                }



                                }else if($novio ==0 && $novia ==0){

                                if($padrinou !=0 && $padrinod !=0){

                                $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, noSupletoria = $supletoria,
                                fechaSacramento = '$fecha',edadSacramento = $edadnovio,testimonioPersona = '$testigo',
                                feligresNovio = '$feligresnovio', 
                                feligresNovia = '$feligresnovia', edad = $edadnovia,
                                Persona_idPadrinouno = $padrinou, Persona_idPadrinodos = $padrinod
                                where idRegistro = $idacta";

                                if (mysqli_query($conn, $sql)) {

                                echo "<script> 
                                alert('Acta modificada con exito.'); 
                                window.location.href='../vistas/principalmatrimonio.php'; 
                                </script>"; 
                                } else {

                                echo "<script> 
                                alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                                window.location.href='../vistas/principalmatrimonio.php'; 
                                </script>"; 

                                }


                                }else if ($padrinou !=0 && $padrinod ==0){



                                $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, noSupletoria = $supletoria,
                                fechaSacramento = '$fecha',edadSacramento = $edadnovio,testimonioPersona = '$testigo',
                                feligresNovio = '$feligresnovio', 
                                feligresNovia = '$feligresnovia', edad = $edadnovia,
                                Persona_idPadrinouno = $padrinou
                                where idRegistro = $idacta";

                                if (mysqli_query($conn, $sql)) {

                                echo "<script> 
                                alert('Acta modificada con exito.'); 
                                window.location.href='../vistas/principalmatrimonio.php'; 
                                </script>"; 
                                } else {

                                echo "<script> 
                                alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                                window.location.href='../vistas/principalmatrimonio.php'; 
                                </script>"; 

                                }







                                }else if ($padrinou ==0 && $padrinod !=0){


                                $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, noSupletoria = $supletoria,
                                fechaSacramento = '$fecha',edadSacramento = $edadnovio,testimonioPersona = '$testigo',
                                feligresNovio = '$feligresnovio', 
                                feligresNovia = '$feligresnovia', edad = $edadnovia,
                                Persona_idPadrinodos = $padrinod
                                where idRegistro = $idacta";

                                if (mysqli_query($conn, $sql)) {

                                echo "<script> 
                                alert('Acta modificada con exito.'); 
                                window.location.href='../vistas/principalmatrimonio.php'; 
                                </script>"; 
                                } else {

                                echo "<script> 
                                alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                                window.location.href='../vistas/principalmatrimonio.php'; 
                                </script>"; 

                                }



                                }else if ($padrinou ==0 && $padrinod ==0){


                                $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, noSupletoria = $supletoria,
                                fechaSacramento = '$fecha',edadSacramento = $edadnovio,testimonioPersona = '$testigo',
                                feligresNovio = '$feligresnovio', 
                                feligresNovia = '$feligresnovia', edad = $edadnovia
                                where idRegistro = $idacta";

                                if (mysqli_query($conn, $sql)) {

                                echo "<script> 
                                alert('Acta modificada con exito.'); 
                                window.location.href='../vistas/principalmatrimonio.php'; 
                                </script>"; 
                                } else {

                                echo "<script> 
                                alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                                window.location.href='../vistas/principalmatrimonio.php'; 
                                </script>"; 

                                }




                             }


                        }

                                                        
                     }
        

    }else{ //no viene fecha 


        if($sacerdote !=0){

            if($novio !=0 && $novia !=0){
                
                                    if($padrinou !=0 && $padrinod !=0){

                                        $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, noSupletoria = $supletoria,
                                        edadSacramento = $edadnovio,testimonioPersona = '$testigo',
                                        Persona_idPersonaSacerdote = $sacerdote,feligresNovio = '$feligresnovio', 
                                        feligresNovia = '$feligresnovia', edad = $edadnovia,
                                        Sacramentados_idDatosPersona = $novio, Sacramentados_idDatosPersonad = $novia,
                                        Persona_idPadrinouno = $padrinou, Persona_idPadrinodos = $padrinod
                                         where idRegistro = $idacta";
                                   
                                           if (mysqli_query($conn, $sql)) {
                                   
                                           echo "<script> 
                                           alert('Acta modificada con exito.'); 
                                           window.location.href='../vistas/principalmatrimonio.php'; 
                                           </script>"; 
                                           } else {
                                   
                                           echo "<script> 
                                           alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                                           window.location.href='../vistas/principalmatrimonio.php'; 
                                           </script>"; 
                                   
                                           }
                         

                                    }else if ($padrinou !=0 && $padrinod ==0){



                                        $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, noSupletoria = $supletoria,
                                        edadSacramento = $edadnovio,testimonioPersona = '$testigo',
                                        Persona_idPersonaSacerdote = $sacerdote,feligresNovio = '$feligresnovio', 
                                        feligresNovia = '$feligresnovia', edad = $edadnovia,
                                        Sacramentados_idDatosPersona = $novio, Sacramentados_idDatosPersonad = $novia,
                                        Persona_idPadrinouno = $padrinou
                                         where idRegistro = $idacta";
                                   
                                           if (mysqli_query($conn, $sql)) {
                                   
                                           echo "<script> 
                                           alert('Acta modificada con exito.'); 
                                           window.location.href='../vistas/principalmatrimonio.php'; 
                                           </script>"; 
                                           } else {
                                   
                                           echo "<script> 
                                           alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                                           window.location.href='../vistas/principalmatrimonio.php'; 
                                           </script>"; 
                                   
                                           }







                                    }else if ($padrinou ==0 && $padrinod !=0){


                                        $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, noSupletoria = $supletoria,
                                        edadSacramento = $edadnovio,testimonioPersona = '$testigo',
                                        Persona_idPersonaSacerdote = $sacerdote,feligresNovio = '$feligresnovio', 
                                        feligresNovia = '$feligresnovia', edad = $edadnovia,
                                        Sacramentados_idDatosPersona = $novio, Sacramentados_idDatosPersonad = $novia,
                                         Persona_idPadrinodos = $padrinod
                                         where idRegistro = $idacta";
                                   
                                           if (mysqli_query($conn, $sql)) {
                                   
                                           echo "<script> 
                                           alert('Acta modificada con exito.'); 
                                           window.location.href='../vistas/principalmatrimonio.php'; 
                                           </script>"; 
                                           } else {
                                   
                                           echo "<script> 
                                           alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                                           window.location.href='../vistas/principalmatrimonio.php'; 
                                           </script>"; 
                                   
                                           }



                                    }else if ($padrinou ==0 && $padrinod ==0){


                                        $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, noSupletoria = $supletoria,
                                        edadSacramento = $edadnovio,testimonioPersona = '$testigo',
                                        Persona_idPersonaSacerdote = $sacerdote,feligresNovio = '$feligresnovio', 
                                        feligresNovia = '$feligresnovia', edad = $edadnovia,
                                        Sacramentados_idDatosPersona = $novio, Sacramentados_idDatosPersonad = $novia
                                         where idRegistro = $idacta";
                                   
                                           if (mysqli_query($conn, $sql)) {
                                   
                                           echo "<script> 
                                           alert('Acta modificada con exito.'); 
                                           window.location.href='../vistas/principalmatrimonio.php'; 
                                           </script>"; 
                                           } else {
                                   
                                           echo "<script> 
                                           alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                                           window.location.href='../vistas/principalmatrimonio.php'; 
                                           </script>"; 
                                   
                                           }




                                    }

            }else if($novio !=0 && $novia ==0){

                                    

                if($padrinou !=0 && $padrinod !=0){

                    $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, noSupletoria = $supletoria,
                    edadSacramento = $edadnovio,testimonioPersona = '$testigo',
                    Persona_idPersonaSacerdote = $sacerdote,feligresNovio = '$feligresnovio', 
                    feligresNovia = '$feligresnovia', edad = $edadnovia,
                    Sacramentados_idDatosPersona = $novio,
                    Persona_idPadrinouno = $padrinou, Persona_idPadrinodos = $padrinod
                     where idRegistro = $idacta";
               
                       if (mysqli_query($conn, $sql)) {
               
                       echo "<script> 
                       alert('Acta modificada con exito.'); 
                       window.location.href='../vistas/principalmatrimonio.php'; 
                       </script>"; 
                       } else {
               
                       echo "<script> 
                       alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                       window.location.href='../vistas/principalmatrimonio.php'; 
                       </script>"; 
               
                       }
     

                }else if ($padrinou !=0 && $padrinod ==0){



                    $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, noSupletoria = $supletoria,
                    edadSacramento = $edadnovio,testimonioPersona = '$testigo',
                    Persona_idPersonaSacerdote = $sacerdote,feligresNovio = '$feligresnovio', 
                    feligresNovia = '$feligresnovia', edad = $edadnovia,
                    Sacramentados_idDatosPersona = $novio, 
                    Persona_idPadrinouno = $padrinou
                     where idRegistro = $idacta";
               
                       if (mysqli_query($conn, $sql)) {
               
                       echo "<script> 
                       alert('Acta modificada con exito.'); 
                       window.location.href='../vistas/principalmatrimonio.php'; 
                       </script>"; 
                       } else {
               
                       echo "<script> 
                       alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                       window.location.href='../vistas/principalmatrimonio.php'; 
                       </script>"; 
               
                       }







                }else if ($padrinou ==0 && $padrinod !=0){


                    $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, noSupletoria = $supletoria,
                    edadSacramento = $edadnovio,testimonioPersona = '$testigo',
                    Persona_idPersonaSacerdote = $sacerdote,feligresNovio = '$feligresnovio', 
                    feligresNovia = '$feligresnovia', edad = $edadnovia,
                    Sacramentados_idDatosPersona = $novio, 
                     Persona_idPadrinodos = $padrinod
                     where idRegistro = $idacta";
               
                       if (mysqli_query($conn, $sql)) {
               
                       echo "<script> 
                       alert('Acta modificada con exito.'); 
                       window.location.href='../vistas/principalmatrimonio.php'; 
                       </script>"; 
                       } else {
               
                       echo "<script> 
                       alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                       window.location.href='../vistas/principalmatrimonio.php'; 
                       </script>"; 
               
                       }



                }else if ($padrinou ==0 && $padrinod ==0){


                    $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, noSupletoria = $supletoria,
                    edadSacramento = $edadnovio,testimonioPersona = '$testigo',
                    Persona_idPersonaSacerdote = $sacerdote,feligresNovio = '$feligresnovio', 
                    feligresNovia = '$feligresnovia', edad = $edadnovia,
                    Sacramentados_idDatosPersona = $novio
                     where idRegistro = $idacta";
               
                       if (mysqli_query($conn, $sql)) {
               
                       echo "<script> 
                       alert('Acta modificada con exito.'); 
                       window.location.href='../vistas/principalmatrimonio.php'; 
                       </script>"; 
                       } else {
               
                       echo "<script> 
                       alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                       window.location.href='../vistas/principalmatrimonio.php'; 
                       </script>"; 
               
                       }




                }





            }else if($novio ==0 && $novia !=0){

                if($padrinou !=0 && $padrinod !=0){

                    $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, noSupletoria = $supletoria,
                    edadSacramento = $edadnovio,testimonioPersona = '$testigo',
                    Persona_idPersonaSacerdote = $sacerdote,feligresNovio = '$feligresnovio', 
                    feligresNovia = '$feligresnovia', edad = $edadnovia,
                    Sacramentados_idDatosPersonad = $novia,
                    Persona_idPadrinouno = $padrinou, Persona_idPadrinodos = $padrinod
                     where idRegistro = $idacta";
               
                       if (mysqli_query($conn, $sql)) {
               
                       echo "<script> 
                       alert('Acta modificada con exito.'); 
                       window.location.href='../vistas/principalmatrimonio.php'; 
                       </script>"; 
                       } else {
               
                       echo "<script> 
                       alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                       window.location.href='../vistas/principalmatrimonio.php'; 
                       </script>"; 
               
                       }
     

                }else if ($padrinou !=0 && $padrinod ==0){



                    $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, noSupletoria = $supletoria,
                    edadSacramento = $edadnovio,testimonioPersona = '$testigo',
                    Persona_idPersonaSacerdote = $sacerdote,feligresNovio = '$feligresnovio', 
                    feligresNovia = '$feligresnovia', edad = $edadnovia,
                     Sacramentados_idDatosPersonad = $novia,
                    Persona_idPadrinouno = $padrinou
                     where idRegistro = $idacta";
               
                       if (mysqli_query($conn, $sql)) {
               
                       echo "<script> 
                       alert('Acta modificada con exito.'); 
                       window.location.href='../vistas/principalmatrimonio.php'; 
                       </script>"; 
                       } else {
               
                       echo "<script> 
                       alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                       window.location.href='../vistas/principalmatrimonio.php'; 
                       </script>"; 
               
                       }







                }else if ($padrinou ==0 && $padrinod !=0){


                    $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, noSupletoria = $supletoria,
                    edadSacramento = $edadnovio,testimonioPersona = '$testigo',
                    Persona_idPersonaSacerdote = $sacerdote,feligresNovio = '$feligresnovio', 
                    feligresNovia = '$feligresnovia', edad = $edadnovia,
                    Sacramentados_idDatosPersonad = $novia,
                     Persona_idPadrinodos = $padrinod
                     where idRegistro = $idacta";
               
                       if (mysqli_query($conn, $sql)) {
               
                       echo "<script> 
                       alert('Acta modificada con exito.'); 
                       window.location.href='../vistas/principalmatrimonio.php'; 
                       </script>"; 
                       } else {
               
                       echo "<script> 
                       alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                       window.location.href='../vistas/principalmatrimonio.php'; 
                       </script>"; 
               
                       }



                }else if ($padrinou ==0 && $padrinod ==0){


                    $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, noSupletoria = $supletoria,
                    edadSacramento = $edadnovio,testimonioPersona = '$testigo',
                    Persona_idPersonaSacerdote = $sacerdote,feligresNovio = '$feligresnovio', 
                    feligresNovia = '$feligresnovia', edad = $edadnovia,
                     Sacramentados_idDatosPersonad = $novia
                     where idRegistro = $idacta";
               
                       if (mysqli_query($conn, $sql)) {
               
                       echo "<script> 
                       alert('Acta modificada con exito.'); 
                       window.location.href='../vistas/principalmatrimonio.php'; 
                       </script>"; 
                       } else {
               
                       echo "<script> 
                       alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                       window.location.href='../vistas/principalmatrimonio.php'; 
                       </script>"; 
               
                       }




                }



            }else if($novio ==0 && $novia ==0){

                if($padrinou !=0 && $padrinod !=0){

                    $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, noSupletoria = $supletoria,
                    edadSacramento = $edadnovio,testimonioPersona = '$testigo',
                    Persona_idPersonaSacerdote = $sacerdote,feligresNovio = '$feligresnovio', 
                    feligresNovia = '$feligresnovia', edad = $edadnovia,
                    Persona_idPadrinouno = $padrinou, Persona_idPadrinodos = $padrinod
                     where idRegistro = $idacta";
               
                       if (mysqli_query($conn, $sql)) {
               
                       echo "<script> 
                       alert('Acta modificada con exito.'); 
                       window.location.href='../vistas/principalmatrimonio.php'; 
                       </script>"; 
                       } else {
               
                       echo "<script> 
                       alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                       window.location.href='../vistas/principalmatrimonio.php'; 
                       </script>"; 
               
                       }
     

                }else if ($padrinou !=0 && $padrinod ==0){



                    $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, noSupletoria = $supletoria,
                    edadSacramento = $edadnovio,testimonioPersona = '$testigo',
                    Persona_idPersonaSacerdote = $sacerdote,feligresNovio = '$feligresnovio', 
                    feligresNovia = '$feligresnovia', edad = $edadnovia,
                    Persona_idPadrinouno = $padrinou
                     where idRegistro = $idacta";
               
                       if (mysqli_query($conn, $sql)) {
               
                       echo "<script> 
                       alert('Acta modificada con exito.'); 
                       window.location.href='../vistas/principalmatrimonio.php'; 
                       </script>"; 
                       } else {
               
                       echo "<script> 
                       alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                       window.location.href='../vistas/principalmatrimonio.php'; 
                       </script>"; 
               
                       }







                }else if ($padrinou ==0 && $padrinod !=0){


                    $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, noSupletoria = $supletoria,
                    edadSacramento = $edadnovio,testimonioPersona = '$testigo',
                    Persona_idPersonaSacerdote = $sacerdote,feligresNovio = '$feligresnovio', 
                    feligresNovia = '$feligresnovia', edad = $edadnovia,
                     Persona_idPadrinodos = $padrinod
                     where idRegistro = $idacta";
               
                       if (mysqli_query($conn, $sql)) {
               
                       echo "<script> 
                       alert('Acta modificada con exito.'); 
                       window.location.href='../vistas/principalmatrimonio.php'; 
                       </script>"; 
                       } else {
               
                       echo "<script> 
                       alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                       window.location.href='../vistas/principalmatrimonio.php'; 
                       </script>"; 
               
                       }



                }else if ($padrinou ==0 && $padrinod ==0){


                    $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, noSupletoria = $supletoria,
                    edadSacramento = $edadnovio,testimonioPersona = '$testigo',
                    Persona_idPersonaSacerdote = $sacerdote,feligresNovio = '$feligresnovio', 
                    feligresNovia = '$feligresnovia', edad = $edadnovia
                     where idRegistro = $idacta";
               
                       if (mysqli_query($conn, $sql)) {
               
                       echo "<script> 
                       alert('Acta modificada con exito.'); 
                       window.location.href='../vistas/principalmatrimonio.php'; 
                       </script>"; 
                       } else {
               
                       echo "<script> 
                       alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                       window.location.href='../vistas/principalmatrimonio.php'; 
                       </script>"; 
               
                       }




                }

    
            }

        }else{//no viene sacerdote



                                            if($novio !=0 && $novia !=0){
                                                
                                                if($padrinou !=0 && $padrinod !=0){

                                                    $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, noSupletoria = $supletoria,
                                                    edadSacramento = $edadnovio,testimonioPersona = '$testigo',
                                                    feligresNovio = '$feligresnovio', 
                                                    feligresNovia = '$feligresnovia', edad = $edadnovia,
                                                    Sacramentados_idDatosPersona = $novio, Sacramentados_idDatosPersonad = $novia,
                                                    Persona_idPadrinouno = $padrinou, Persona_idPadrinodos = $padrinod
                                                    where idRegistro = $idacta";
                                            
                                                    if (mysqli_query($conn, $sql)) {
                                            
                                                    echo "<script> 
                                                    alert('Acta modificada con exito.'); 
                                                    window.location.href='../vistas/principalmatrimonio.php'; 
                                                    </script>"; 
                                                    } else {
                                            
                                                    echo "<script> 
                                                    alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                                                    window.location.href='../vistas/principalmatrimonio.php'; 
                                                    </script>"; 
                                            
                                                    }
                                    

                                                }else if ($padrinou !=0 && $padrinod ==0){



                                                    $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, noSupletoria = $supletoria,
                                                    edadSacramento = $edadnovio,testimonioPersona = '$testigo',
                                                    feligresNovio = '$feligresnovio', 
                                                    feligresNovia = '$feligresnovia', edad = $edadnovia,
                                                    Sacramentados_idDatosPersona = $novio, Sacramentados_idDatosPersonad = $novia,
                                                    Persona_idPadrinouno = $padrinou
                                                    where idRegistro = $idacta";
                                            
                                                    if (mysqli_query($conn, $sql)) {
                                            
                                                    echo "<script> 
                                                    alert('Acta modificada con exito.'); 
                                                    window.location.href='../vistas/principalmatrimonio.php'; 
                                                    </script>"; 
                                                    } else {
                                            
                                                    echo "<script> 
                                                    alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                                                    window.location.href='../vistas/principalmatrimonio.php'; 
                                                    </script>"; 
                                            
                                                    }







                                                }else if ($padrinou ==0 && $padrinod !=0){


                                                    $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, noSupletoria = $supletoria,
                                                    edadSacramento = $edadnovio,testimonioPersona = '$testigo',
                                                    feligresNovio = '$feligresnovio', 
                                                    feligresNovia = '$feligresnovia', edad = $edadnovia,
                                                    Sacramentados_idDatosPersona = $novio, Sacramentados_idDatosPersonad = $novia,
                                                    Persona_idPadrinodos = $padrinod
                                                    where idRegistro = $idacta";
                                            
                                                    if (mysqli_query($conn, $sql)) {
                                            
                                                    echo "<script> 
                                                    alert('Acta modificada con exito.'); 
                                                    window.location.href='../vistas/principalmatrimonio.php'; 
                                                    </script>"; 
                                                    } else {
                                            
                                                    echo "<script> 
                                                    alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                                                    window.location.href='../vistas/principalmatrimonio.php'; 
                                                    </script>"; 
                                            
                                                    }



                                                }else if ($padrinou ==0 && $padrinod ==0){


                                                    $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, noSupletoria = $supletoria,
                                                    edadSacramento = $edadnovio,testimonioPersona = '$testigo',
                                                    feligresNovio = '$feligresnovio', 
                                                    feligresNovia = '$feligresnovia', edad = $edadnovia,
                                                    Sacramentados_idDatosPersona = $novio, Sacramentados_idDatosPersonad = $novia
                                                    where idRegistro = $idacta";
                                            
                                                    if (mysqli_query($conn, $sql)) {
                                            
                                                    echo "<script> 
                                                    alert('Acta modificada con exito.'); 
                                                    window.location.href='../vistas/principalmatrimonio.php'; 
                                                    </script>"; 
                                                    } else {
                                            
                                                    echo "<script> 
                                                    alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                                                    window.location.href='../vistas/principalmatrimonio.php'; 
                                                    </script>"; 
                                            
                                                    }




                                                }

                                }else if($novio !=0 && $novia ==0){

                                                

                                if($padrinou !=0 && $padrinod !=0){

                                $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, noSupletoria = $supletoria,
                                edadSacramento = $edadnovio,testimonioPersona = '$testigo',
                                feligresNovio = '$feligresnovio', 
                                feligresNovia = '$feligresnovia', edad = $edadnovia,
                                Sacramentados_idDatosPersona = $novio,
                                Persona_idPadrinouno = $padrinou, Persona_idPadrinodos = $padrinod
                                where idRegistro = $idacta";

                                if (mysqli_query($conn, $sql)) {

                                echo "<script> 
                                alert('Acta modificada con exito.'); 
                                window.location.href='../vistas/principalmatrimonio.php'; 
                                </script>"; 
                                } else {

                                echo "<script> 
                                alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                                window.location.href='../vistas/principalmatrimonio.php'; 
                                </script>"; 

                                }


                                }else if ($padrinou !=0 && $padrinod ==0){



                                $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, noSupletoria = $supletoria,
                                edadSacramento = $edadnovio,testimonioPersona = '$testigo',
                                feligresNovio = '$feligresnovio', 
                                feligresNovia = '$feligresnovia', edad = $edadnovia,
                                Sacramentados_idDatosPersona = $novio, 
                                Persona_idPadrinouno = $padrinou
                                where idRegistro = $idacta";

                                if (mysqli_query($conn, $sql)) {

                                echo "<script> 
                                alert('Acta modificada con exito.'); 
                                window.location.href='../vistas/principalmatrimonio.php'; 
                                </script>"; 
                                } else {

                                echo "<script> 
                                alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                                window.location.href='../vistas/principalmatrimonio.php'; 
                                </script>"; 

                                }







                                }else if ($padrinou ==0 && $padrinod !=0){


                                $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, noSupletoria = $supletoria,
                                edadSacramento = $edadnovio,testimonioPersona = '$testigo',
                                feligresNovio = '$feligresnovio', 
                                feligresNovia = '$feligresnovia', edad = $edadnovia,
                                Sacramentados_idDatosPersona = $novio, 
                                Persona_idPadrinodos = $padrinod
                                where idRegistro = $idacta";

                                if (mysqli_query($conn, $sql)) {

                                echo "<script> 
                                alert('Acta modificada con exito.'); 
                                window.location.href='../vistas/principalmatrimonio.php'; 
                                </script>"; 
                                } else {

                                echo "<script> 
                                alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                                window.location.href='../vistas/principalmatrimonio.php'; 
                                </script>"; 

                                }



                                }else if ($padrinou ==0 && $padrinod ==0){


                                $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, noSupletoria = $supletoria,
                                edadSacramento = $edadnovio,testimonioPersona = '$testigo',
                                feligresNovio = '$feligresnovio', 
                                feligresNovia = '$feligresnovia', edad = $edadnovia,
                                Sacramentados_idDatosPersona = $novio
                                where idRegistro = $idacta";

                                if (mysqli_query($conn, $sql)) {

                                echo "<script> 
                                alert('Acta modificada con exito.'); 
                                window.location.href='../vistas/principalmatrimonio.php'; 
                                </script>"; 
                                } else {

                                echo "<script> 
                                alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                                window.location.href='../vistas/principalmatrimonio.php'; 
                                </script>"; 

                                }




                                }





                                }else if($novio ==0 && $novia !=0){

                                if($padrinou !=0 && $padrinod !=0){

                                $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, noSupletoria = $supletoria,
                                edadSacramento = $edadnovio,testimonioPersona = '$testigo',
                                feligresNovio = '$feligresnovio', 
                                feligresNovia = '$feligresnovia', edad = $edadnovia,
                                Sacramentados_idDatosPersonad = $novia,
                                Persona_idPadrinouno = $padrinou, Persona_idPadrinodos = $padrinod
                                where idRegistro = $idacta";

                                if (mysqli_query($conn, $sql)) {

                                echo "<script> 
                                alert('Acta modificada con exito.'); 
                                window.location.href='../vistas/principalmatrimonio.php'; 
                                </script>"; 
                                } else {

                                echo "<script> 
                                alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                                window.location.href='../vistas/principalmatrimonio.php'; 
                                </script>"; 

                                }


                                }else if ($padrinou !=0 && $padrinod ==0){



                                $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, noSupletoria = $supletoria,
                                edadSacramento = $edadnovio,testimonioPersona = '$testigo',
                                feligresNovio = '$feligresnovio', 
                                feligresNovia = '$feligresnovia', edad = $edadnovia,
                                Sacramentados_idDatosPersonad = $novia,
                                Persona_idPadrinouno = $padrinou
                                where idRegistro = $idacta";

                                if (mysqli_query($conn, $sql)) {

                                echo "<script> 
                                alert('Acta modificada con exito.'); 
                                window.location.href='../vistas/principalmatrimonio.php'; 
                                </script>"; 
                                } else {

                                echo "<script> 
                                alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                                window.location.href='../vistas/principalmatrimonio.php'; 
                                </script>"; 

                                }







                                }else if ($padrinou ==0 && $padrinod !=0){


                                $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, noSupletoria = $supletoria,
                                edadSacramento = $edadnovio,testimonioPersona = '$testigo',
                                feligresNovio = '$feligresnovio', 
                                feligresNovia = '$feligresnovia', edad = $edadnovia,
                                Sacramentados_idDatosPersonad = $novia,
                                Persona_idPadrinodos = $padrinod
                                where idRegistro = $idacta";

                                if (mysqli_query($conn, $sql)) {

                                echo "<script> 
                                alert('Acta modificada con exito.'); 
                                window.location.href='../vistas/principalmatrimonio.php'; 
                                </script>"; 
                                } else {

                                echo "<script> 
                                alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                                window.location.href='../vistas/principalmatrimonio.php'; 
                                </script>"; 

                                }



                                }else if ($padrinou ==0 && $padrinod ==0){


                                $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, noSupletoria = $supletoria,
                                edadSacramento = $edadnovio,testimonioPersona = '$testigo',
                                feligresNovio = '$feligresnovio', 
                                feligresNovia = '$feligresnovia', edad = $edadnovia,
                                Sacramentados_idDatosPersonad = $novia
                                where idRegistro = $idacta";

                                if (mysqli_query($conn, $sql)) {

                                echo "<script> 
                                alert('Acta modificada con exito.'); 
                                window.location.href='../vistas/principalmatrimonio.php'; 
                                </script>"; 
                                } else {

                                echo "<script> 
                                alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                                window.location.href='../vistas/principalmatrimonio.php'; 
                                </script>"; 

                                }




                                }



                                }else if($novio ==0 && $novia ==0){

                                if($padrinou !=0 && $padrinod !=0){

                                $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, noSupletoria = $supletoria,
                                edadSacramento = $edadnovio,testimonioPersona = '$testigo',
                                feligresNovio = '$feligresnovio', 
                                feligresNovia = '$feligresnovia', edad = $edadnovia,
                                Persona_idPadrinouno = $padrinou, Persona_idPadrinodos = $padrinod
                                where idRegistro = $idacta";

                                if (mysqli_query($conn, $sql)) {

                                echo "<script> 
                                alert('Acta modificada con exito.'); 
                                window.location.href='../vistas/principalmatrimonio.php'; 
                                </script>"; 
                                } else {

                                echo "<script> 
                                alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                                window.location.href='../vistas/principalmatrimonio.php'; 
                                </script>"; 

                                }


                                }else if ($padrinou !=0 && $padrinod ==0){



                                $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, noSupletoria = $supletoria,
                                edadSacramento = $edadnovio,testimonioPersona = '$testigo',
                                feligresNovio = '$feligresnovio', 
                                feligresNovia = '$feligresnovia', edad = $edadnovia,
                                Persona_idPadrinouno = $padrinou
                                where idRegistro = $idacta";

                                if (mysqli_query($conn, $sql)) {

                                echo "<script> 
                                alert('Acta modificada con exito.'); 
                                window.location.href='../vistas/principalmatrimonio.php'; 
                                </script>"; 
                                } else {

                                echo "<script> 
                                alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                                window.location.href='../vistas/principalmatrimonio.php'; 
                                </script>"; 

                                }







                                }else if ($padrinou ==0 && $padrinod !=0){


                                $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, noSupletoria = $supletoria,
                                edadSacramento = $edadnovio,testimonioPersona = '$testigo',
                                feligresNovio = '$feligresnovio', 
                                feligresNovia = '$feligresnovia', edad = $edadnovia,
                                Persona_idPadrinodos = $padrinod
                                where idRegistro = $idacta";

                                if (mysqli_query($conn, $sql)) {

                                echo "<script> 
                                alert('Acta modificada con exito.'); 
                                window.location.href='../vistas/principalmatrimonio.php'; 
                                </script>"; 
                                } else {

                                echo "<script> 
                                alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                                window.location.href='../vistas/principalmatrimonio.php'; 
                                </script>"; 

                                }



                                }else if ($padrinou ==0 && $padrinod ==0){


                                $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, noSupletoria = $supletoria,
                                edadSacramento = $edadnovio,testimonioPersona = '$testigo',
                                feligresNovio = '$feligresnovio', 
                                feligresNovia = '$feligresnovia', edad = $edadnovia
                                where idRegistro = $idacta";

                                if (mysqli_query($conn, $sql)) {

                                echo "<script> 
                                alert('Acta modificada con exito.'); 
                                window.location.href='../vistas/principalmatrimonio.php'; 
                                </script>"; 
                                } else {

                                echo "<script> 
                                alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                                window.location.href='../vistas/principalmatrimonio.php'; 
                                </script>"; 

                                }




                             }


                        }

                                                        
                     }
















    }




?>