<?php
     include '../modelos/conector.php'; 


 $idacta = $_POST['idacta'];
 $libro = $_POST['libro'];
 $folio = $_POST['folio'];
 $fecha  = $_POST['fecha'];
 $novio = $_POST['novio'];
 $novia = $_POST['novia'];
 $sacerdote = $_POST['sacerdote'];
 $padrinou = $_POST['padrinou'];
 $padrinod = $_POST['padrinod'];


/*
echo $idacta;
echo "-----";
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



if(!empty($fecha)){
    if($sacerdote !=0){

        if($novio !=0 && $novia !=0){
            
                                if($padrinou !=0 && $padrinod !=0){

                                    $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio,
                                    fechaSacramento = '$fecha',Persona_idPadrinouno = $padrinou, Persona_idPadrinodos = $padrinod,
                                    Persona_idPersonaSacerdote = $sacerdote, 
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
                     

                                }else if ($padrinou !=0 && $padrinod ==0){


                                    $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio,
                                    fechaSacramento = '$fecha',Persona_idPadrinouno = $padrinou, 
                                    Persona_idPersonaSacerdote = $sacerdote, 
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


                                }else if ($padrinou ==0 && $padrinod !=0){

                                    $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio,
                                    fechaSacramento = '$fecha', Persona_idPadrinodos = $padrinod,
                                    Persona_idPersonaSacerdote = $sacerdote,
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

                                }else if ($padrinou ==0 && $padrinod ==0){

                                    $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio,
                                    fechaSacramento = '$fecha',
                                    Persona_idPersonaSacerdote = $sacerdote,  
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

                                    $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio,
                                    fechaSacramento = '$fecha',Persona_idPadrinouno = $padrinou, Persona_idPadrinodos = $padrinod,
                                    Persona_idPersonaSacerdote = $sacerdote, 
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
                    

                                }else if ($padrinou !=0 && $padrinod ==0){


                                    $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio,
                                    fechaSacramento = '$fecha',Persona_idPadrinouno = $padrinou, 
                                    Persona_idPersonaSacerdote = $sacerdote, 
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


                                }else if ($padrinou ==0 && $padrinod !=0){

                                    $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio,
                                    fechaSacramento = '$fecha', Persona_idPadrinodos = $padrinod,
                                    Persona_idPersonaSacerdote = $sacerdote, 
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

                                }else if ($padrinou ==0 && $padrinod ==0){

                                    $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio,
                                    fechaSacramento = '$fecha',
                                    Persona_idPersonaSacerdote = $sacerdote,  
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

                                        $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio,
                                        fechaSacramento = '$fecha',Persona_idPadrinouno = $padrinou, Persona_idPadrinodos = $padrinod,
                                        Persona_idPersonaSacerdote = $sacerdote, 
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
                        

                                    }else if ($padrinou !=0 && $padrinod ==0){


                                        $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio,
                                        fechaSacramento = '$fecha',Persona_idPadrinouno = $padrinou, 
                                        Persona_idPersonaSacerdote = $sacerdote,
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


                                    }else if ($padrinou ==0 && $padrinod !=0){

                                        $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio,
                                        fechaSacramento = '$fecha', Persona_idPadrinodos = $padrinod,
                                        Persona_idPersonaSacerdote = $sacerdote,  
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

                                    }else if ($padrinou ==0 && $padrinod ==0){

                                        $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio,
                                        fechaSacramento = '$fecha',
                                        Persona_idPersonaSacerdote = $sacerdote, 
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

                                $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio,
                                fechaSacramento = '$fecha',Persona_idPadrinouno = $padrinou, Persona_idPadrinodos = $padrinod,
                                Persona_idPersonaSacerdote = $sacerdote, 
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


                                $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio,
                                fechaSacramento = '$fecha',Persona_idPadrinouno = $padrinou, 
                                Persona_idPersonaSacerdote = $sacerdote
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

                                $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio,
                                fechaSacramento = '$fecha', Persona_idPadrinodos = $padrinod,
                                Persona_idPersonaSacerdote = $sacerdote
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

                                $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio,
                                fechaSacramento = '$fecha',
                                Persona_idPersonaSacerdote = $sacerdote
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

                                            $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio,
                                            fechaSacramento = '$fecha',Persona_idPadrinouno = $padrinou, Persona_idPadrinodos = $padrinod,
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
                            

                                        }else if ($padrinou !=0 && $padrinod ==0){


                                            $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio,
                                            fechaSacramento = '$fecha',Persona_idPadrinouno = $padrinou, 
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


                                        }else if ($padrinou ==0 && $padrinod !=0){

                                            $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio,
                                            fechaSacramento = '$fecha', Persona_idPadrinodos = $padrinod, 
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

                                        }else if ($padrinou ==0 && $padrinod ==0){

                                            $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio,
                                            fechaSacramento = '$fecha',
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

                                            $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio,
                                            fechaSacramento = '$fecha',Persona_idPadrinouno = $padrinou, Persona_idPadrinodos = $padrinod, 
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


                                        }else if ($padrinou !=0 && $padrinod ==0){


                                            $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio,
                                            fechaSacramento = '$fecha',Persona_idPadrinouno = $padrinou, 
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


                                        }else if ($padrinou ==0 && $padrinod !=0){

                                            $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio,
                                            fechaSacramento = '$fecha', Persona_idPadrinodos = $padrinod,
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

                                        }else if ($padrinou ==0 && $padrinod ==0){

                                            $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio,
                                            fechaSacramento = '$fecha',
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

                                                $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio,
                                                fechaSacramento = '$fecha',Persona_idPadrinouno = $padrinou, Persona_idPadrinodos = $padrinod,
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
                                

                                            }else if ($padrinou !=0 && $padrinod ==0){


                                                $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio,
                                                fechaSacramento = '$fecha',Persona_idPadrinouno = $padrinou, 
                                                Persona_idPersonaSacerdote = $sacerdote, 
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


                                            }else if ($padrinou ==0 && $padrinod !=0){

                                                $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio,
                                                fechaSacramento = '$fecha', Persona_idPadrinodos = $padrinod,
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

                                            }else if ($padrinou ==0 && $padrinod ==0){

                                                $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio,
                                                fechaSacramento = '$fecha',
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

                                        $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio,
                                        fechaSacramento = '$fecha',Persona_idPadrinouno = $padrinou, Persona_idPadrinodos = $padrinod
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


                                        $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio,
                                        fechaSacramento = '$fecha',Persona_idPadrinouno = $padrinou
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

                                        $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio,
                                        fechaSacramento = '$fecha', Persona_idPadrinodos = $padrinod
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

                                        $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio,
                                        fechaSacramento = '$fecha' 
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

                                    $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio,
                                    Persona_idPadrinouno = $padrinou, Persona_idPadrinodos = $padrinod,
                                    Persona_idPersonaSacerdote = $sacerdote,  
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
                     

                                }else if ($padrinou !=0 && $padrinod ==0){


                                    $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio,
                                    Persona_idPadrinouno = $padrinou, 
                                    Persona_idPersonaSacerdote = $sacerdote,  
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


                                }else if ($padrinou ==0 && $padrinod !=0){

                                    $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio,
                                    Persona_idPadrinodos = $padrinod,
                                    Persona_idPersonaSacerdote = $sacerdote, 
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

                                }else if ($padrinou ==0 && $padrinod ==0){

                                    $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio,
                                    Persona_idPersonaSacerdote = $sacerdote, 
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

                                    $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio,
                                    Persona_idPadrinouno = $padrinou, Persona_idPadrinodos = $padrinod,
                                    Persona_idPersonaSacerdote = $sacerdote, 
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
                    

                                }else if ($padrinou !=0 && $padrinod ==0){


                                    $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio,
                                    Persona_idPadrinouno = $padrinou, 
                                    Persona_idPersonaSacerdote = $sacerdote, 
                                    Sacramentados_idDatosPersona = $novio
                                    where idRegistro = $idacta";
                            
                                    if (mysqli_query($conn, $sql)) {
                            
                                    echo "<script> 
                                    alert('Acta modificada con exito.'); 
                                    window.location.href='../vistas/pprincipalmatrimonio.php'; 
                                    </script>"; 
                                    } else {
                            
                                    echo "<script> 
                                    alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                                    window.location.href='../vistas/principalmatrimonio.php'; 
                                    </script>"; 
                            
                                    }


                                }else if ($padrinou ==0 && $padrinod !=0){

                                    $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio,
                                    Persona_idPadrinodos = $padrinod,
                                    Persona_idPersonaSacerdote = $sacerdote, 
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

                                }else if ($padrinou ==0 && $padrinod ==0){

                                    $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio,
                                    Persona_idPersonaSacerdote = $sacerdote, 
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

                                        $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio,
                                        Persona_idPadrinouno = $padrinou, Persona_idPadrinodos = $padrinod,
                                        Persona_idPersonaSacerdote = $sacerdote, 
                                         Sacramentados_idDatosPersonad = $novia
                                        where idRegistro = $idacta";
                                
                                        if (mysqli_query($conn, $sql)) {
                                
                                        echo "<script> 
                                        alert('Acta modificada con exito.'); 
                                        window.location.href='../vistas/pprincipalmatrimonio.php'; 
                                        </script>"; 
                                        } else {
                                
                                        echo "<script> 
                                        alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                                        window.location.href='../vistas/principalmatrimonio.php'; 
                                        </script>"; 
                                
                                        }
                        

                                    }else if ($padrinou !=0 && $padrinod ==0){


                                        $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio,
                                        Persona_idPadrinouno = $padrinou, 
                                        Persona_idPersonaSacerdote = $sacerdote, 
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


                                    }else if ($padrinou ==0 && $padrinod !=0){

                                        $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio,
                                        Persona_idPadrinodos = $padrinod,
                                        Persona_idPersonaSacerdote = $sacerdote,
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

                                    }else if ($padrinou ==0 && $padrinod ==0){

                                        $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio,
                                        Persona_idPersonaSacerdote = $sacerdote,
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

                                $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio,
                                Persona_idPadrinouno = $padrinou, Persona_idPadrinodos = $padrinod,
                                Persona_idPersonaSacerdote = $sacerdote,
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


                                $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio,
                                Persona_idPadrinouno = $padrinou, 
                                Persona_idPersonaSacerdote = $sacerdote
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

                                $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio,
                                 Persona_idPadrinodos = $padrinod,
                                Persona_idPersonaSacerdote = $sacerdote
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

                                $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio,
                                Persona_idPersonaSacerdote = $sacerdote 
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

                                            $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio,
                                            Persona_idPadrinouno = $padrinou, Persona_idPadrinodos = $padrinod,
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
                            

                                        }else if ($padrinou !=0 && $padrinod ==0){


                                            $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio,
                                            Persona_idPadrinouno = $padrinou, 
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


                                        }else if ($padrinou ==0 && $padrinod !=0){

                                            $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio,
                                            Persona_idPadrinodos = $padrinod,
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

                                        }else if ($padrinou ==0 && $padrinod ==0){

                                            $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio,
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

                                            $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio,
                                            Persona_idPadrinouno = $padrinou, Persona_idPadrinodos = $padrinod,
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


                                        }else if ($padrinou !=0 && $padrinod ==0){


                                            $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio,
                                            Persona_idPadrinouno = $padrinou,
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


                                        }else if ($padrinou ==0 && $padrinod !=0){

                                            $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio,
                                            Persona_idPadrinodos = $padrinod, 
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

                                        }else if ($padrinou ==0 && $padrinod ==0){

                                            $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, 
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

                                                $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio,
                                                Persona_idPadrinouno = $padrinou, Persona_idPadrinodos = $padrinod,
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
                                

                                            }else if ($padrinou !=0 && $padrinod ==0){


                                                $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio,
                                                Persona_idPadrinouno = $padrinou, 
                                                Persona_idPersonaSacerdote = $sacerdote,
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


                                            }else if ($padrinou ==0 && $padrinod !=0){

                                                $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio,
                                                 Persona_idPadrinodos = $padrinod,
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

                                            }else if ($padrinou ==0 && $padrinod ==0){

                                                $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio,
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

                                        $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio,
                                        Persona_idPadrinouno = $padrinou, Persona_idPadrinodos = $padrinod,
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


                                        $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio,
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

                                        $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio,
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

                                        $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio 
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