
<?php
     include '../modelos/conector.php';

     $idus = $_POST['idus'];
     $nombre = $_POST['nombre'];
     $usuario = $_POST['usuario'];
     $correo = $_POST['correo'];
     $contra = $_POST['contra'];
     $tipo = $_POST['tipo'];
              
     $expcorr = "/([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)/";
     $expcontra = "/^(?=.*\d)(?=.*[!@#$%^&*+-.])(?=.*[a-z])(?=.*[A-Z]).{8,}$/";
     
    //verificar si existe un usuario nuevo o es el mismo
        $consulta ="SELECT COUNT(*) as totus FROM usuario WHERE idUsuario = $idus and usuario = '$usuario'";
        $ejecutar=mysqli_query($conn,$consulta) or die(mysli_error($conn));
        $result = mysqli_fetch_array($ejecutar);
        $numus = $result['totus'];
        
        $consultados ="SELECT COUNT(*) totusdos FROM usuario WHERE usuario = '$usuario'";
        $ejecutardos=mysqli_query($conn,$consultados) or die(mysli_error($conn));
        $resultdos = mysqli_fetch_array($ejecutardos);
        $numusdos = $resultdos['totusdos']; 
        


    
        if ($numus == 0 && $numusdos == 1){
          
            
            echo "<script> 
            alert('El usuario ya está registrado, por favor intente con otro.'); 
            window.location.href='../vistas/principalusuarios.php'; 
            </script>"; 


        }else if(empty($contra)) {
                $validacion = preg_match($expcorr, $correo);
                    
            if ($validacion == 1){
           
    
              
                if ($tipo == 0){
                   

                    $sql = "UPDATE usuario SET nombre = '$nombre', usuario = '$usuario', correo = '$correo' where idUsuario = $idus";
                    if (mysqli_query($conn, $sql)) {

                        echo "<script> 
                        alert('Usuario se modificó con exito.'); 
                        window.location.href='../vistas/principalusuarios.php'; 
                        </script>"; 
                    } else {

                        echo "<script> 
                        alert('Error, usuario no modificado. Revisar datos ingresados.'); 
                        window.location.href='../vistas/principalusuarios.php'; 
                        </script>"; 
                        
                    }



                }else{

                    $sql = "UPDATE usuario SET nombre = '$nombre', usuario = '$usuario', correo = '$correo', Rol_idRol = $tipo  where idUsuario = $idus";
                    if (mysqli_query($conn, $sql)) {

                        echo "<script> 
                        alert('Usuario se modificó con exito.'); 
                        window.location.href='../vistas/principalusuarios.php'; 
                        </script>"; 
                    } else {

                        echo "<script> 
                        alert('Error, usuario no modificado. Revisar datos ingresados.'); 
                        window.location.href='../vistas/principalusuarios.php'; 
                        </script>"; 
                        
                    }

                }



                }else{

                    echo "<script> 
                    alert('Error. Verificar el correo electronico.'); 
                    window.location.href='../vistas/principalusuarios.php'; 
                    </script>";
                }
                
                 
        }else{

            $validacion = preg_match($expcorr, $correo);
                    
            if ($validacion == 1){
           
    
              
                if ($tipo == 0){

                        $valcontra = preg_match($expcontra, $contra);
                    
                        if ($valcontra == 1){

                    $passHash = password_hash($contra, PASSWORD_BCRYPT);

                    $sql = "UPDATE usuario SET nombre = '$nombre', usuario = '$usuario', correo = '$correo', contrasenia = '$passHash' where idUsuario = $idus";
                    if (mysqli_query($conn, $sql)) {

                        echo "<script> 
                        alert('Usuario se modificó con exito.'); 
                        window.location.href='../vistas/principalusuarios.php'; 
                        </script>"; 
                    } else {

                        echo "<script> 
                        alert('Error, usuario no modificado. Revisar datos ingresados.'); 
                        window.location.href='../vistas/principalusuarios.php'; 
                        </script>"; 
                        
                    }
                }else{
                    echo "<script> 
                        alert('Contraseña debil, colocar al menos un numero, mayuscula y simbolo.'); 
                        window.location.href='../vistas/principalusuarios.php'; 
                        </script>"; 
                }


                }else{

                    $valcontra = preg_match($expcontra, $contra);
                    
                    if ($valcontra == 1){


                    $sql = "UPDATE usuario SET nombre = '$nombre', usuario = '$usuario', correo = '$correo', contrasenia = '$passHash', Rol_idRol = $tipo  where idUsuario = $idus";
                    if (mysqli_query($conn, $sql)) {

                        echo "<script> 
                        alert('Usuario se modificó con exito.'); 
                        window.location.href='../vistas/principalusuarios.php'; 
                        </script>"; 
                    } else {

                        echo "<script> 
                        alert('Error, usuario no modificado. Revisar datos ingresados.'); 
                        window.location.href='../vistas/principalusuarios.php'; 
                        </script>"; 
                        
                    }

                }else{
                    echo "<script> 
                        alert('Contraseña debil, colocar al menos un numero, mayuscula y simbolo.'); 
                        window.location.href='../vistas/principalusuarios.php'; 
                        </script>"; 

                }

            }



                }else{

                    echo "<script> 
                    alert('Error. Verificar el correo electronico.'); 
                    window.location.href='../vistas/principalusuarios.php'; 
                    </script>";
                }

        }



         
         
            


?>

