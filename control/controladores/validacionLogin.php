<?php
     include '../modelos/conector.php'; 



    $correo = $_POST['correo'];
    $contrasenia = $_POST['contrasenia'];





/*
echo $correo;
echo "----";
echo $contrasenia;
*/


   $consulta ="SELECT idUsuario,nombre, correo, contrasenia,estado,Rol_idRol FROM usuario WHERE correo = '$correo'";
            $ejecutar=mysqli_query($conn,$consulta) or die(mysli_error($conn));
            $array = mysqli_fetch_array($ejecutar);
           
            if(!is_null($array)){
                
                $userid = $array['idUsuario'];
                $user = $array['nombre'];
                $correobd = $array['correo'];
                $contrabd = $array['contrasenia'];
                $estado = $array['estado'];
                $userrol = $array['Rol_idRol'];
  
             if($estado == 1){

                    if (password_verify($contrasenia, $contrabd)) {
                       
                        session_start();
                        // Variables de sesión:
                       
                         $_SESSION['iduser'] = $userid;
                         $_SESSION['nombre'] = $user;
                         $_SESSION['roluser'] = $userrol;

                                header("location:../vistas/index.php"); 
                    
                    } else {
                        
                        echo "<script> 
                        alert('Correo o contraseña incorrectos. Verificar los datos ingresados.'); 
                        window.location.href='../vistas/login.php'; 
                        </script>"; 
                    }              
                }else{

                    echo "<script> 
                alert('El usuario se encuentra desactivado, comunicarse con administración.'); 
                window.location.href='../vistas/login.php'; 
                </script>"; 
                }           
            }else{
                  echo "<script> 
                alert('El usuario no existe, comunicarse con administración.'); 
                window.location.href='../vistas/login.php'; 
                </script>"; 
            }
            
           

           /* echo $correobd;
            echo "----";
            echo $contrabd;*/

            

            




?>