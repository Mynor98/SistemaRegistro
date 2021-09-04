<?php
     include '../modelos/conector.php'; 
     
     $nombre = $_POST['nombre'];
     $genero = $_POST['genero'];
     $lugarn = $_POST['lugarn'];
     $lugara = $_POST['lugara'];
     $padre = $_POST['padre'];
     $madre = $_POST['madre'];
     $fecha  = $_POST['fecha'];
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
    
    
    if(!empty($nombre) && !empty($lugarn) && !empty($fecha)  ){

                if($padre != 0 && $madre !=0){

                    if($genero != 0){
                        $sqlcon = "INSERT INTO sacramentados(nombre, fechaNacimiento,lugarNacimiento, viveActual,genero,Persona_idPadre, Persona_idMadre)
                          VALUES ('$nombre','$fecha','$lugarn', '$lugara','$genero', $padre, $madre)";
                                  
                                  if (mysqli_query($conn, $sqlcon)) {
                                      
                                              echo "<script> 
                                              alert('Sacramentado registrado con exito.'); 
                                              window.location.href='../vistas/actmatrimonio.php'; 
                                              </script>"; 
                                      }else{
                                          echo "<script> 
                                          alert('Error, sacramentado no registrado, revisar datos.'); 
                                          window.location.href='../vistas/actmatrimonio.php'; 
                                          </script>"; 
  
                                      }
                                  }else{
                                      echo "<script> 
                                      alert('Error, sacramentado no registrado, Seleccione el genero.'); 
                                      window.location.href='../vistas/actmatrimonio.php'; 
                                      </script>"; 
                                  }           

                }elseif ($padre !=0 && $madre ==0){

                    if($genero != 0){
                        $sqlcon = "INSERT INTO sacramentados(nombre, fechaNacimiento,lugarNacimiento, viveActual,genero, Persona_idPadre)
                        VALUES ('$nombre','$fecha','$lugarn','$lugara','$genero', $padre)";
                                
                                if (mysqli_query($conn, $sqlcon)) {
                                    
                                            echo "<script> 
                                            alert('Sacramentado registrado con exito.'); 
                                            window.location.href='../vistas/actmatrimonio.php'; 
                                            </script>"; 
                                    }else{
                                        echo "<script> 
                                        alert('Error, sacramentado no registrado, revisar datos.'); 
                                        window.location.href='../vistas/actmatrimonio.php'; 
                                        </script>"; 
    
                                    }
                        }else{
                            echo "<script> 
                            alert('Error, sacramentado no registrado, Seleccione el genero.'); 
                            window.location.href='../vistas/actmatrimonio.php'; 
                            </script>"; 
                        }     

                }elseif ($padre ==0 && $madre !=0){

                    if($genero != 0){
                        $sqlcon = "INSERT INTO sacramentados(nombre, fechaNacimiento,lugarNacimiento, viveActual,genero, Persona_idMadre)
                        VALUES ('$nombre','$fecha','$lugarn', '$lugara','$genero', $madre)";
                                
                                if (mysqli_query($conn, $sqlcon)) {
                                    
                                            echo "<script> 
                                            alert('Sacramentado registrado con exito.'); 
                                            window.location.href='../vistas/actmatrimonio.php'; 
                                            </script>"; 
                                    }else{
                                        echo "<script> 
                                        alert('Error, sacramentado no registrado, revisar datos.'); 
                                        window.location.href='../vistas/actmatrimonio.php'; 
                                        </script>"; 
    
                                    }
                        }else{
                            echo "<script> 
                            alert('Error, sacramentado no registrado, Seleccione el genero.'); 
                            window.location.href='../vistas/actmatrimonio.php'; 
                            </script>"; 
                        }     

                }else{

                    echo "<script> 
                    alert('Error, Sacramentado no ingresado. Ingresar al menos un padre.'); 
                    window.location.href='../vistas/actmatrimonio.php'; 
                    </script>"; 

                }

    

    }else {
        echo "<script> 
                alert('Error al insertar, Ingresar datos importantes como nombre, lugar y fecha de nacimiento.'); 
                window.location.href='../vistas/actmatrimonio.php'; 
                </script>"; 

    }
    




?>