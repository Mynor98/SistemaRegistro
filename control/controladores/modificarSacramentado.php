<?php
     include '../modelos/conector.php'; 


     $idsac = $_POST['idsac'];
     $nombre = $_POST['nombre'];
     $genero = $_POST['genero'];
     $lugarn = $_POST['lugarn'];
     $lugara = $_POST['lugara'];
     $fecha = $_POST['fecha'];
     $padre = $_POST['padre'];
     $madre = $_POST['madre'];

     
     
  /*
        echo $nombre;
        echo "------";
        echo $genero;
        echo "------";
        echo $lugarn;
        echo "------";
        echo $lugara;
        echo "------";
        echo $padre;
        echo "------";
        echo $madre;
        echo "------";
        echo $fecha;
    
  
    */


        if($padre == 0 && $madre == 0){

            if($genero != 0){
                if(empty($fecha)){
            $sql = "UPDATE sacramentados SET nombre = '$nombre', lugarNacimiento ='$lugarn', viveActual = '$lugara',
            genero = '$genero' where idDatosPersona = $idsac";

                if (mysqli_query($conn, $sql)) {

                echo "<script> 
                alert('Sacramentado se modificó con exito.'); 
                window.location.href='../vistas/principalpersona.php'; 
                </script>"; 
                } else {

                echo "<script> 
                alert('Error, Sacramentado no modificado. Revisar datos ingresados.'); 
                window.location.href='../vistas/principalpersona.php'; 
                </script>"; 

                }

            }else{

                $sql = "UPDATE sacramentados SET nombre = '$nombre',fechaNacimiento = '$fecha', lugarNacimiento ='$lugarn', viveActual = '$lugara',
                genero = '$genero' where idDatosPersona = $idsac";
    
                    if (mysqli_query($conn, $sql)) {
    
                    echo "<script> 
                    alert('Sacramentado se modificó con exito.'); 
                    window.location.href='../vistas/principalpersona.php'; 
                    </script>"; 
                    } else {
    
                    echo "<script> 
                    alert('Error, Sacramentado no modificado. Revisar datos ingresados.'); 
                    window.location.href='../vistas/principalpersona.php'; 
                    </script>"; 
    
                    }


            }


            }else{
                if(empty($fecha)){
                $sql = "UPDATE sacramentados SET nombre = '$nombre',  lugarNacimiento ='$lugarn', viveActual = '$lugara'
                 where idDatosPersona = $idsac";
    
                    if (mysqli_query($conn, $sql)) {
    
                    echo "<script> 
                    alert('Sacramentado se modificó con exito.'); 
                    window.location.href='../vistas/principalpersona.php'; 
                    </script>"; 
                    } else {
    
                    echo "<script> 
                    alert('Error, Sacramentado no modificado. Revisar datos ingresados.'); 
                    window.location.href='../vistas/principalpersona.php'; 
                    </script>"; 
    
                    }

                }else{
                    $sql = "UPDATE sacramentados SET nombre = '$nombre', fechaNacimiento='$fecha' , lugarNacimiento ='$lugarn', viveActual = '$lugara'
                    where idDatosPersona = $idsac";
       
                       if (mysqli_query($conn, $sql)) {
       
                       echo "<script> 
                       alert('Sacramentado se modificó con exito.'); 
                       window.location.href='../vistas/principalpersona.php'; 
                       </script>"; 
                       } else {
       
                       echo "<script> 
                       alert('Error, Sacramentado no modificado. Revisar datos ingresados.'); 
                       window.location.href='../vistas/principalpersona.php'; 
                       </script>"; 
       
                       }


                }
            }

        }else if($padre != 0 && $madre == 0){

            if($genero != 0){
                if(empty($fecha)){
                $sql = "UPDATE sacramentados SET nombre = '$nombre' , lugarNacimiento ='$lugarn', viveactual = '$lugara',
                genero = '$genero', Persona_idPadre = $padre where idDatosPersona = $idsac";
    
                    if (mysqli_query($conn, $sql)) {
    
                    echo "<script> 
                    alert('Sacramentado se modificó con exito.'); 
                    window.location.href='../vistas/principalpersona.php'; 
                    </script>"; 
                    } else {
    
                    echo "<script> 
                    alert('Error, Sacramentado no modificado. Revisar datos ingresados.'); 
                    window.location.href='../vistas/principalpersona.php'; 
                    </script>"; 
    
                    }
                    

                    }else{

                        $sql = "UPDATE sacramentados SET nombre = '$nombre', fechaNacimiento='$fecha' , lugarNacimiento ='$lugarn', viveactual = '$lugara',
                        genero = '$genero', Persona_idPadre = $padre where idDatosPersona = $idsac";
            
                            if (mysqli_query($conn, $sql)) {
            
                            echo "<script> 
                            alert('Sacramentado se modificó con exito.'); 
                            window.location.href='../vistas/principalpersona.php'; 
                            </script>"; 
                            } else {
            
                            echo "<script> 
                            alert('Error, Sacramentado no modificado. Revisar datos ingresados.'); 
                            window.location.href='../vistas/principalpersona.php'; 
                            </script>"; 
            
                            }



                    }

                }else{
                    if(empty($fecha)){
                    $sql = "UPDATE sacramentados SET nombre = '$nombre' , lugarNacimiento ='$lugarn', viveactual = '$lugara',
                    Persona_idPadre = $padre where idDatosPersona = $idsac";
                     
        
                        if (mysqli_query($conn, $sql)) {
        
                        echo "<script> 
                        alert('Sacramentado se modificó con exito.'); 
                        window.location.href='../vistas/principalpersona.php'; 
                        </script>"; 
                        } else {
        
                        echo "<script> 
                        alert('Error, Sacramentado no modificado. Revisar datos ingresados.'); 
                        window.location.href='../vistas/principalpersona.php'; 
                        </script>"; 
        
                        }
                    }else{

                        $sql = "UPDATE sacramentados SET nombre = '$nombre', fechaNacimiento='$fecha' , lugarNacimiento ='$lugarn', viveactual = '$lugara',
                        Persona_idPadre = $padre where idDatosPersona = $idsac";
                         
            
                            if (mysqli_query($conn, $sql)) {
            
                            echo "<script> 
                            alert('Sacramentado se modificó con exito.'); 
                            window.location.href='../vistas/principalpersona.php'; 
                            </script>"; 
                            } else {
            
                            echo "<script> 
                            alert('Error, Sacramentado no modificado. Revisar datos ingresados.'); 
                            window.location.href='../vistas/principalpersona.php'; 
                            </script>"; 
            
                            }



                    }
                }



        }else if($padre == 0 && $madre != 0){


            if($genero != 0){
                if(empty($fecha)){
                $sql = "UPDATE sacramentados SET nombre = '$nombre' , lugarNacimiento ='$lugarn', viveactual = '$lugara',
                genero = '$genero', Persona_idMadre = $madre where idDatosPersona = $idsac";
    
                    if (mysqli_query($conn, $sql)) {
    
                    echo "<script> 
                    alert('Sacramentado se modificó con exito.'); 
                    window.location.href='../vistas/principalpersona.php'; 
                    </script>"; 
                    } else {
    
                    echo "<script> 
                    alert('Error, Sacramentado no modificado. Revisar datos ingresados.'); 
                    window.location.href='../vistas/principalpersona.php'; 
                    </script>"; 
    
                    }

                }else{

                    $sql = "UPDATE sacramentados SET nombre = '$nombre', fechaNacimiento='$fecha' , lugarNacimiento ='$lugarn', viveactual = '$lugara',
                    genero = '$genero', Persona_idMadre = $madre where idDatosPersona = $idsac";
        
                        if (mysqli_query($conn, $sql)) {
        
                        echo "<script> 
                        alert('Sacramentado se modificó con exito.'); 
                        window.location.href='../vistas/principalpersona.php'; 
                        </script>"; 
                        } else {
        
                        echo "<script> 
                        alert('Error, Sacramentado no modificado. Revisar datos ingresados.'); 
                        window.location.href='../vistas/principalpersona.php'; 
                        </script>"; 
        
                        }

                }
                }else{
                    if(empty($fecha)){
                    $sql = "UPDATE sacramentados SET nombre = '$nombre' , lugarNacimiento ='$lugarn', viveactual = '$lugara',
                    Persona_idMadre = $madre where idDatosPersona = $idsac";
                     
        
                        if (mysqli_query($conn, $sql)) {
        
                        echo "<script> 
                        alert('Sacramentado se modificó con exito.'); 
                        window.location.href='../vistas/principalpersona.php'; 
                        </script>"; 
                        } else {
        
                        echo "<script> 
                        alert('Error, Sacramentado no modificado. Revisar datos ingresados.'); 
                        window.location.href='../vistas/principalpersona.php'; 
                        </script>"; 
        
                        }
                    }else{

                        $sql = "UPDATE sacramentados SET nombre = '$nombre', fechaNacimiento='$fecha' , lugarNacimiento ='$lugarn', viveactual = '$lugara',
                    Persona_idMadre = $madre where idDatosPersona = $idsac";
                     
        
                        if (mysqli_query($conn, $sql)) {
        
                        echo "<script> 
                        alert('Sacramentado se modificó con exito.'); 
                        window.location.href='../vistas/principalpersona.php'; 
                        </script>"; 
                        } else {
        
                        echo "<script> 
                        alert('Error, Sacramentado no modificado. Revisar datos ingresados.'); 
                        window.location.href='../vistas/principalpersona.php'; 
                        </script>"; 
        
                        }


                    }
    
                }




        }else if($padre != 0 && $madre != 0){

            if($genero != 0){
                if(empty($fecha)){
            $sql = "UPDATE sacramentados SET nombre = '$nombre' , lugarNacimiento ='$lugarn', viveactual = '$lugara',
            genero = '$genero', Persona_idPadre = $padre, Persona_idMadre = $madre where idDatosPersona = $ids";

                if (mysqli_query($conn, $sql)) {

                echo "<script> 
                alert('Sacramentado se modificó con exito.'); 
                window.location.href='../vistas/principalpersona.php'; 
                </script>"; 
                } else {

                echo "<script> 
                alert('Error, Sacramentado no modificado. Revisar datos ingresados.'); 
                window.location.href='../vistas/principalpersona.php'; 
                </script>"; 

                }
            }else{

                $sql = "UPDATE sacramentados SET nombre = '$nombre', fechaNacimiento='$fecha' , lugarNacimiento ='$lugarn', viveactual = '$lugara',
                genero = '$genero', Persona_idPadre = $padre, Persona_idMadre = $madre where idDatosPersona = $ids";
    
                    if (mysqli_query($conn, $sql)) {
    
                    echo "<script> 
                    alert('Sacramentado se modificó con exito.'); 
                    window.location.href='../vistas/principalpersona.php'; 
                    </script>"; 
                    } else {
    
                    echo "<script> 
                    alert('Error, Sacramentado no modificado. Revisar datos ingresados.'); 
                    window.location.href='../vistas/principalpersona.php'; 
                    </script>"; 
    
                    }



            }

            }else{
                if(empty($fecha)){

                $sql = "UPDATE sacramentados SET nombre = '$nombre' , lugarNacimiento ='$lugarn', viveactual = '$lugara',
                Persona_idPadre = $padre, Persona_idMadre = $madre where idDatosPersona = $ids";
    
                    if (mysqli_query($conn, $sql)) {
    
                    echo "<script> 
                    alert('Sacramentado se modificó con exito.'); 
                    window.location.href='../vistas/principalpersona.php'; 
                    </script>"; 
                    } else {
    
                    echo "<script> 
                    alert('Error, Sacramentado no modificado. Revisar datos ingresados.'); 
                    window.location.href='../vistas/principalpersona.php'; 
                    </script>"; 
    
                    }

                }else{

                    $sql = "UPDATE sacramentados SET nombre = '$nombre', fechaNacimiento='$fecha' , lugarNacimiento ='$lugarn', viveactual = '$lugara',
                    Persona_idPadre = $padre, Persona_idMadre = $madre where idDatosPersona = $ids";
        
                        if (mysqli_query($conn, $sql)) {
        
                        echo "<script> 
                        alert('Sacramentado se modificó con exito.'); 
                        window.location.href='../vistas/principalpersona.php'; 
                        </script>"; 
                        } else {
        
                        echo "<script> 
                        alert('Error, Sacramentado no modificado. Revisar datos ingresados.'); 
                        window.location.href='../vistas/principalpersona.php'; 
                        </script>"; 
        
                        }

                }
            }





        }











     ?>