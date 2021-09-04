<?php
     include '../modelos/conector.php';      
    

    

     $idacta = $_POST['idacta'];
     $libro = $_POST['libro'];
     $folio = $_POST['folio'];
     $fecha = $_POST['fecha'];
     $sacramentado = $_POST['sacramentado'];
     $padrinou = $_POST['padrinou'];
     $padrinod = $_POST['padrinod'];
     $sacerdote = $_POST['sacerdoteb'];
     $notas = $_POST['notas'];
 
    /* echo $idacta;
     echo "---------";
     echo $libro;
     echo "---------";
     echo $folio;
     echo "---------";
     echo $fecha;
     echo "---------";
     echo $sacramentado;
     echo "---------";
     echo $padrinou;
     echo "---------";
     echo $padrinod;
     echo "---------";
     echo $sacerdote;
     echo "---------";
     echo $notas;*/
    



    if(!empty($fecha)){

        if($sacramentado !=0){

            if($sacerdote !=0){

            if($padrinou !=0 && $padrinod !=0){

                $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, fechaSacramento = '$fecha',
                alMargen = '$notas', Persona_idPadrinouno = $padrinou, Persona_idPadrinodos = $padrinod,
                Persona_idPersonaSacerdote = $sacerdote, Sacramentados_idDatosPersona = $sacramentado where idRegistro = $idacta";
          
                   if (mysqli_query($conn, $sql)) {
          
                   echo "<script> 
                   alert('Acta modificada con exito.'); 
                   window.location.href='../vistas/principalbautizo.php'; 
                   </script>"; 
                   } else {
          
                   echo "<script> 
                   alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                   window.location.href='../vistas/principalbautizo.php'; 
                   </script>"; 
          
                   }
          

            }else if($padrinou !=0 && $padrinod ==0){

                $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, fechaSacramento = '$fecha',
                alMargen = '$notas', Persona_idPadrinouno = $padrinou, 
                Persona_idPersonaSacerdote = $sacerdote, Sacramentados_idDatosPersona = $sacramentado where idRegistro = $idacta";
          
                   if (mysqli_query($conn, $sql)) {
          
                   echo "<script> 
                   alert('Acta modificada con exito.'); 
                   window.location.href='../vistas/principalbautizo.php'; 
                   </script>"; 
                   } else {
          
                   echo "<script> 
                   alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                   window.location.href='../vistas/principalbautizo.php'; 
                   </script>"; 
          
                   }



            }else if ($padrinou ==0 && $padrinod ==0){

                $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, fechaSacramento = '$fecha',
                alMargen = '$notas', 
                Persona_idPersonaSacerdote = $sacerdote, Sacramentados_idDatosPersona = $sacramentado where idRegistro = $idacta";
          
                   if (mysqli_query($conn, $sql)) {
          
                   echo "<script> 
                   alert('Acta modificada con exito.'); 
                   window.location.href='../vistas/principalbautizo.php'; 
                   </script>"; 
                   } else {
          
                   echo "<script> 
                   alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                   window.location.href='../vistas/principalbautizo.php'; 
                   </script>"; 
          
                   }





            }else if ($padrinou ==0 && $padrinod !=0){


                $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, fechaSacramento = '$fecha',
                alMargen = '$notas', Persona_idPadrinodos = $padrinod,
                Persona_idPersonaSacerdote = $sacerdote, Sacramentados_idDatosPersona = $sacramentado where idRegistro = $idacta";
          
                   if (mysqli_query($conn, $sql)) {
          
                   echo "<script> 
                   alert('Acta modificada con exito.'); 
                   window.location.href='../vistas/principalbautizo.php'; 
                   </script>"; 
                   } else {
          
                   echo "<script> 
                   alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                   window.location.href='../vistas/principalbautizo.php'; 
                   </script>"; 
          
                   }




            }





        }else{// no viene sacerdote



            if($padrinou !=0 && $padrinod !=0){

                $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, fechaSacramento = '$fecha',
                alMargen = '$notas', Persona_idPadrinouno = $padrinou, Persona_idPadrinodos = $padrinod,
                 Sacramentados_idDatosPersona = $sacramentado where idRegistro = $idacta";
          
                   if (mysqli_query($conn, $sql)) {
          
                   echo "<script> 
                   alert('Acta modificada con exito.'); 
                   window.location.href='../vistas/principalbautizo.php'; 
                   </script>"; 
                   } else {
          
                   echo "<script> 
                   alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                   window.location.href='../vistas/principalbautizo.php'; 
                   </script>"; 
          
                   }
          

            }else if($padrinou !=0 && $padrinod ==0){

                $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, fechaSacramento = '$fecha',
                alMargen = '$notas', Persona_idPadrinouno = $padrinou, 
                 Sacramentados_idDatosPersona = $sacramentado where idRegistro = $idacta";
          
                   if (mysqli_query($conn, $sql)) {
          
                   echo "<script> 
                   alert('Acta modificada con exito.'); 
                   window.location.href='../vistas/principalbautizo.php'; 
                   </script>"; 
                   } else {
          
                   echo "<script> 
                   alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                   window.location.href='../vistas/principalbautizo.php'; 
                   </script>"; 
          
                   }



            }else if ($padrinou ==0 && $padrinod ==0){

                $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, fechaSacramento = '$fecha',
                alMargen = '$notas', 
                 Sacramentados_idDatosPersona = $sacramentado where idRegistro = $idacta";
          
                   if (mysqli_query($conn, $sql)) {
          
                   echo "<script> 
                   alert('Acta modificada con exito.'); 
                   window.location.href='../vistas/principalbautizo.php'; 
                   </script>"; 
                   } else {
          
                   echo "<script> 
                   alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                   window.location.href='../vistas/principalbautizo.php'; 
                   </script>"; 
          
                   }





            }else if ($padrinou ==0 && $padrinod !=0){


                $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, fechaSacramento = '$fecha',
                alMargen = '$notas', Persona_idPadrinodos = $padrinod,
                 Sacramentados_idDatosPersona = $sacramentado where idRegistro = $idacta";
          
                   if (mysqli_query($conn, $sql)) {
          
                   echo "<script> 
                   alert('Acta modificada con exito.'); 
                   window.location.href='../vistas/principalbautizo.php'; 
                   </script>"; 
                   } else {
          
                   echo "<script> 
                   alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                   window.location.href='../vistas/principalbautizo.php'; 
                   </script>"; 
          
                   }




            }








        }



        }else{// no viene sacramentado

         
            if($sacerdote !=0){

                if($padrinou !=0 && $padrinod !=0){
    
                    $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, fechaSacramento = '$fecha',
                    alMargen = '$notas', Persona_idPadrinouno = $padrinou, Persona_idPadrinodos = $padrinod,
                    Persona_idPersonaSacerdote = $sacerdote where idRegistro = $idacta";
              
                       if (mysqli_query($conn, $sql)) {
              
                       echo "<script> 
                       alert('Acta modificada con exito.'); 
                       window.location.href='../vistas/principalbautizo.php'; 
                       </script>"; 
                       } else {
              
                       echo "<script> 
                       alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                       window.location.href='../vistas/principalbautizo.php'; 
                       </script>"; 
              
                       }
              
    
                }else if($padrinou !=0 && $padrinod ==0){
    
                    $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, fechaSacramento = '$fecha',
                    alMargen = '$notas', Persona_idPadrinouno = $padrinou, 
                    Persona_idPersonaSacerdote = $sacerdote where idRegistro = $idacta";
              
                       if (mysqli_query($conn, $sql)) {
              
                       echo "<script> 
                       alert('Acta modificada con exito.'); 
                       window.location.href='../vistas/principalbautizo.php'; 
                       </script>"; 
                       } else {
              
                       echo "<script> 
                       alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                       window.location.href='../vistas/principalbautizo.php'; 
                       </script>"; 
              
                       }
    
    
    
                }else if ($padrinou ==0 && $padrinod ==0){
    
                    $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, fechaSacramento = '$fecha',
                    alMargen = '$notas', 
                    Persona_idPersonaSacerdote = $sacerdote where idRegistro = $idacta";
              
                       if (mysqli_query($conn, $sql)) {
              
                       echo "<script> 
                       alert('Acta modificada con exito.'); 
                       window.location.href='../vistas/principalbautizo.php'; 
                       </script>"; 
                       } else {
              
                       echo "<script> 
                       alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                       window.location.href='../vistas/principalbautizo.php'; 
                       </script>"; 
              
                       }
    
    
    
    
    
                }else if ($padrinou ==0 && $padrinod !=0){
    
    
                    $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, fechaSacramento = '$fecha',
                    alMargen = '$notas',  Persona_idPadrinodos = $padrinod,
                    Persona_idPersonaSacerdote = $sacerdote where idRegistro = $idacta";
              
                       if (mysqli_query($conn, $sql)) {
              
                       echo "<script> 
                       alert('Acta modificada con exito.'); 
                       window.location.href='../vistas/principalbautizo.php'; 
                       </script>"; 
                       } else {
              
                       echo "<script> 
                       alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                       window.location.href='../vistas/principalbautizo.php'; 
                       </script>"; 
              
                       }
    
    
    
    
                }
    
    
    
    
    
            }else{// no viene sacerdote
    
    
    
                if($padrinou !=0 && $padrinod !=0){
    
                    $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, fechaSacramento = '$fecha',
                    alMargen = '$notas', Persona_idPadrinouno = $padrinou, Persona_idPadrinodos = $padrinod
                      where idRegistro = $idacta";
              
                       if (mysqli_query($conn, $sql)) {
              
                       echo "<script> 
                       alert('Acta modificada con exito.'); 
                       window.location.href='../vistas/principalbautizo.php'; 
                       </script>"; 
                       } else {
              
                       echo "<script> 
                       alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                       window.location.href='../vistas/principalbautizo.php'; 
                       </script>"; 
              
                       }
              
    
                }else if($padrinou !=0 && $padrinod ==0){
    
                    $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, fechaSacramento = '$fecha',
                    alMargen = '$notas', Persona_idPadrinouno = $padrinou
                      where idRegistro = $idacta";
              
                       if (mysqli_query($conn, $sql)) {
              
                       echo "<script> 
                       alert('Acta modificada con exito.'); 
                       window.location.href='../vistas/principalbautizo.php'; 
                       </script>"; 
                       } else {
              
                       echo "<script> 
                       alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                       window.location.href='../vistas/principalbautizo.php'; 
                       </script>"; 
              
                       }
    
    
    
                }else if ($padrinou ==0 && $padrinod ==0){
    
                    $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, fechaSacramento = '$fecha',
                    alMargen = '$notas'
                      where idRegistro = $idacta";
              
                       if (mysqli_query($conn, $sql)) {
              
                       echo "<script> 
                       alert('Acta modificada con exito.'); 
                       window.location.href='../vistas/principalbautizo.php'; 
                       </script>"; 
                       } else {
              
                       echo "<script> 
                       alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                       window.location.href='../vistas/principalbautizo.php'; 
                       </script>"; 
              
                       }
    
    
    
    
    
                }else if ($padrinou ==0 && $padrinod !=0){
    
    
                    $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, fechaSacramento = '$fecha',
                    alMargen = '$notas', Persona_idPadrinodos = $padrinod
                      where idRegistro = $idacta";
              
                       if (mysqli_query($conn, $sql)) {
              
                       echo "<script> 
                       alert('Acta modificada con exito.'); 
                       window.location.href='../vistas/principalbautizo.php'; 
                       </script>"; 
                       } else {
              
                       echo "<script> 
                       alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                       window.location.href='../vistas/principalbautizo.php'; 
                       </script>"; 
              
                       }
    
    
    
    
                }
    
    
    
    
    
    
    
    
            }
    







        }



        } else{// no viene fecha

        

            if($sacramentado !=0){

                if($sacerdote !=0){
    
                if($padrinou !=0 && $padrinod !=0){
    
                    $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio,
                    alMargen = '$notas', Persona_idPadrinouno = $padrinou, Persona_idPadrinodos = $padrinod,
                    Persona_idPersonaSacerdote = $sacerdote, Sacramentados_idDatosPersona = $sacramentado where idRegistro = $idacta";
              
                       if (mysqli_query($conn, $sql)) {
              
                       echo "<script> 
                       alert('Acta modificada con exito.'); 
                       window.location.href='../vistas/principalbautizo.php'; 
                       </script>"; 
                       } else {
              
                       echo "<script> 
                       alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                       window.location.href='../vistas/principalbautizo.php'; 
                       </script>"; 
              
                       }
              
    
                }else if($padrinou !=0 && $padrinod ==0){
    
                    $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio,
                    alMargen = '$notas', Persona_idPadrinouno = $padrinou, 
                    Persona_idPersonaSacerdote = $sacerdote, Sacramentados_idDatosPersona = $sacramentado where idRegistro = $idacta";
              
                       if (mysqli_query($conn, $sql)) {
              
                       echo "<script> 
                       alert('Acta modificada con exito.'); 
                       window.location.href='../vistas/principalbautizo.php'; 
                       </script>"; 
                       } else {
              
                       echo "<script> 
                       alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                       window.location.href='../vistas/principalbautizo.php'; 
                       </script>"; 
              
                       }
    
    
    
                }else if ($padrinou ==0 && $padrinod ==0){
    
                    $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio,
                    alMargen = '$notas', 
                    Persona_idPersonaSacerdote = $sacerdote, Sacramentados_idDatosPersona = $sacramentado where idRegistro = $idacta";
              
                       if (mysqli_query($conn, $sql)) {
              
                       echo "<script> 
                       alert('Acta modificada con exito.'); 
                       window.location.href='../vistas/principalbautizo.php'; 
                       </script>"; 
                       } else {
              
                       echo "<script> 
                       alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                       window.location.href='../vistas/principalbautizo.php'; 
                       </script>"; 
              
                       }
    
    
    
    
    
                }else if ($padrinou ==0 && $padrinod !=0){
    
    
                    $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio,
                    alMargen = '$notas', Persona_idPadrinodos = $padrinod,
                    Persona_idPersonaSacerdote = $sacerdote, Sacramentados_idDatosPersona = $sacramentado where idRegistro = $idacta";
              
                       if (mysqli_query($conn, $sql)) {
              
                       echo "<script> 
                       alert('Acta modificada con exito.'); 
                       window.location.href='../vistas/principalbautizo.php'; 
                       </script>"; 
                       } else {
              
                       echo "<script> 
                       alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                       window.location.href='../vistas/principalbautizo.php'; 
                       </script>"; 
              
                       }
    
    
    
                }
    
    
    
    
    
            }else{// no viene sacerdote
    
    
    
                if($padrinou !=0 && $padrinod !=0){
    
                    $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio,
                    alMargen = '$notas', Persona_idPadrinouno = $padrinou, Persona_idPadrinodos = $padrinod,
                     Sacramentados_idDatosPersona = $sacramentado where idRegistro = $idacta";
              
                       if (mysqli_query($conn, $sql)) {
              
                       echo "<script> 
                       alert('Acta modificada con exito.'); 
                       window.location.href='../vistas/principalbautizo.php'; 
                       </script>"; 
                       } else {
              
                       echo "<script> 
                       alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                       window.location.href='../vistas/principalbautizo.php'; 
                       </script>"; 
              
                       }
              
    
                }else if($padrinou !=0 && $padrinod ==0){
    
                    $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio,
                    alMargen = '$notas', Persona_idPadrinouno = $padrinou, 
                     Sacramentados_idDatosPersona = $sacramentado where idRegistro = $idacta";
              
                       if (mysqli_query($conn, $sql)) {
              
                       echo "<script> 
                       alert('Acta modificada con exito.'); 
                       window.location.href='../vistas/principalbautizo.php'; 
                       </script>"; 
                       } else {
              
                       echo "<script> 
                       alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                       window.location.href='../vistas/principalbautizo.php'; 
                       </script>"; 
              
                       }
    
    
    
                }else if ($padrinou ==0 && $padrinod ==0){
    
                    $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio,
                    alMargen = '$notas', 
                     Sacramentados_idDatosPersona = $sacramentado where idRegistro = $idacta";
              
                       if (mysqli_query($conn, $sql)) {
              
                       echo "<script> 
                       alert('Acta modificada con exito.'); 
                       window.location.href='../vistas/principalbautizo.php'; 
                       </script>"; 
                       } else {
              
                       echo "<script> 
                       alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                       window.location.href='../vistas/principalbautizo.php'; 
                       </script>"; 
              
                       }
    
    
    
    
    
                }else if ($padrinou ==0 && $padrinod !=0){
    
    
                    $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio,
                    alMargen = '$notas', Persona_idPadrinodos = $padrinod,
                     Sacramentados_idDatosPersona = $sacramentado where idRegistro = $idacta";
              
                       if (mysqli_query($conn, $sql)) {
              
                       echo "<script> 
                       alert('Acta modificada con exito.'); 
                       window.location.href='../vistas/principalbautizo.php'; 
                       </script>"; 
                       } else {
              
                       echo "<script> 
                       alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                       window.location.href='../vistas/principalbautizo.php'; 
                       </script>"; 
              
                       } 
    
    
    
    
                }
    
    
    
    
    
    
    
    
            }
    
    
    
            }else{// no viene sacramentado
    
                if($sacerdote !=0){
    
                    if($padrinou !=0 && $padrinod !=0){
        
                        $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio,
                        alMargen = '$notas', Persona_idPadrinouno = $padrinou, Persona_idPadrinodos = $padrinod,
                        Persona_idPersonaSacerdote = $sacerdote where idRegistro = $idacta";
                  
                           if (mysqli_query($conn, $sql)) {
                  
                           echo "<script> 
                           alert('Acta modificada con exito.'); 
                           window.location.href='../vistas/principalbautizo.php'; 
                           </script>"; 
                           } else {
                  
                           echo "<script> 
                           alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                           window.location.href='../vistas/principalbautizo.php'; 
                           </script>"; 
                  
                           }
                  
        
                    }else if($padrinou !=0 && $padrinod ==0){
        
                        $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio,
                        alMargen = '$notas', Persona_idPadrinouno = $padrinou, 
                        Persona_idPersonaSacerdote = $sacerdote where idRegistro = $idacta";
                  
                           if (mysqli_query($conn, $sql)) {
                  
                           echo "<script> 
                           alert('Acta modificada con exito.'); 
                           window.location.href='../vistas/principalbautizo.php'; 
                           </script>"; 
                           } else {
                  
                           echo "<script> 
                           alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                           window.location.href='../vistas/principalbautizo.php'; 
                           </script>"; 
                  
                           }
        
        
        
                    }else if ($padrinou ==0 && $padrinod ==0){
        
                        $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio,
                        alMargen = '$notas', 
                        Persona_idPersonaSacerdote = $sacerdote where idRegistro = $idacta";
                  
                           if (mysqli_query($conn, $sql)) {
                  
                           echo "<script> 
                           alert('Acta modificada con exito.'); 
                           window.location.href='../vistas/principalbautizo.php'; 
                           </script>"; 
                           } else {
                  
                           echo "<script> 
                           alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                           window.location.href='../vistas/principalbautizo.php'; 
                           </script>"; 
                  
                           }
        
        
        
        
        
                    }else if ($padrinou ==0 && $padrinod !=0){
        
        
                        $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio,
                        alMargen = '$notas', Persona_idPadrinodos = $padrinod,
                        Persona_idPersonaSacerdote = $sacerdote where idRegistro = $idacta";
                  
                           if (mysqli_query($conn, $sql)) {
                  
                           echo "<script> 
                           alert('Acta modificada con exito.'); 
                           window.location.href='../vistas/principalbautizo.php'; 
                           </script>"; 
                           } else {
                  
                           echo "<script> 
                           alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                           window.location.href='../vistas/principalbautizo.php'; 
                           </script>"; 
                  
                           }
        
        
        
                    }
        
        
        
        
        
                }else{// no viene sacerdote
        
        
        
                    if($padrinou !=0 && $padrinod !=0){
        
                        $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio,
                        alMargen = '$notas', Persona_idPadrinouno = $padrinou, Persona_idPadrinodos = $padrinod
                          where idRegistro = $idacta";
                  
                           if (mysqli_query($conn, $sql)) {
                  
                           echo "<script> 
                           alert('Acta modificada con exito.'); 
                           window.location.href='../vistas/principalbautizo.php'; 
                           </script>"; 
                           } else {
                  
                           echo "<script> 
                           alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                           window.location.href='../vistas/principalbautizo.php'; 
                           </script>"; 
                  
                           }
                  
        
                    }else if($padrinou !=0 && $padrinod ==0){
        
                        $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio,
                        alMargen = '$notas', Persona_idPadrinouno = $padrinou
                        where idRegistro = $idacta";
                  
                           if (mysqli_query($conn, $sql)) {
                  
                           echo "<script> 
                           alert('Acta modificada con exito.'); 
                           window.location.href='../vistas/principalbautizo.php'; 
                           </script>"; 
                           } else {
                  
                           echo "<script> 
                           alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                           window.location.href='../vistas/principalbautizo.php'; 
                           </script>"; 
                  
                           }
        
        
        
                    }else if ($padrinou ==0 && $padrinod ==0){
        
                        $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio,
                        alMargen = '$notas'
                         where idRegistro = $idacta";
                  
                           if (mysqli_query($conn, $sql)) {
                  
                           echo "<script> 
                           alert('Acta modificada con exito.'); 
                           window.location.href='../vistas/principalbautizo.php'; 
                           </script>"; 
                           } else {
                  
                           echo "<script> 
                           alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                           window.location.href='../vistas/principalbautizo.php'; 
                           </script>"; 
                  
                           }
        
        
        
        
        
                    }else if ($padrinou ==0 && $padrinod !=0){
        
        
                        $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio,
                        alMargen = '$notas', Persona_idPadrinodos = $padrinod
                          where idRegistro = $idacta";
                  
                           if (mysqli_query($conn, $sql)) {
                  
                           echo "<script> 
                           alert('Acta modificada con exito.'); 
                           window.location.href='../vistas/principalbautizo.php'; 
                           </script>"; 
                           } else {
                  
                           echo "<script> 
                           alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                           window.location.href='../vistas/principalbautizo.php'; 
                           </script>"; 
                  
                           }
        
        
        
        
                    }
        
        
        
        
        
        
        
        
                }
        
    
            }
    



    }


?>