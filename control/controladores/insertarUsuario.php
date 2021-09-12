<?php
        include '../modelos/conector.php';

        if (!empty($_POST['nombre']) && !empty($_POST['usuario']) && !empty($_POST['correo']) && !empty($_POST['contra']) && !empty($_POST['tipo'])) {

            $nombre = $_POST['nombre'];
            $usuario = $_POST['usuario'];
            $correo = $_POST['correo'];
            $contra = $_POST['contra'];
            $tipo = $_POST['tipo'];
            
            
            $expcorreo = "/([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)/";
            $expcontra = "/^(?=.*\d)(?=.*[!@#$%^&*+-.])(?=.*[a-z])(?=.*[A-Z]).{8,}$/";

            //verificar si hay un usuario repetido
            $consulta ="SELECT * FROM usuario WHERE usuario = '$usuario'";
            $ejecutar=mysqli_query($conn,$consulta) or die(mysli_error($conn));

            $consulcorreo ="SELECT * FROM usuario WHERE correo = '$correo'";
            $ejsql=mysqli_query($conn,$consulcorreo) or die(mysli_error($conn));
         
                if(mysqli_num_rows($ejsql) == 0){

            if (mysqli_num_rows($ejecutar) != 0){

                echo "<script> 
                alert('El usuario ya está registrado, por favor intente con otro.'); 
                window.location.href='../vistas/principalusuarios.php'; 
                </script>"; 
        

            }else if (!preg_match($expcorreo, $correo)) 
            {
                echo "<script> 
                alert('Dirección de correo no valida. Por favor escribir una que sea valida.'); 
                window.location.href='../vistas/principalusuarios.php'; 
                </script>"; 

            }else if (!preg_match($expcontra, $contra))
            {
                
                echo "<script> 
                alert('contraseña invalida. por favor ingresar una contraseña con letras y numeros, almenos una mayuscula y almenos un 
                simbolo'); 
                window.location.href='../vistas/principalusuarios.php'; 
                </script>"; 
            }else{
                $passHash = password_hash($contra, PASSWORD_BCRYPT);

                

                $sql = "INSERT INTO usuario (nombre, usuario, correo, contrasenia, estado, Rol_idRol) 
                                    VALUES ('$nombre', '$usuario', '$correo','$passHash', 1, $tipo)";
                    if (mysqli_query($conn, $sql)) {
                        echo "<script> 
                        alert('Usuario registrado con exito.'); 
                        window.location.href='../vistas/principalusuarios.php'; 
                        </script>"; 
                    } else {

                        echo "<script> 
                        alert('Error, usuario no ingresado. Revisar datos ingresados.'); 
                        window.location.href='../vistas/principalusuarios.php'; 
                        </script>"; 
                        
                    }
                    
            }
        
        
            }{
        echo "<script> 
            alert('El correo ya existe, por favor probar con uno nuevo.'); 
            window.location.href='../vistas/principalusuarios.php'; 
            </script>"; 
    }
          

        }else{
            echo "<script> 
            alert('Faltan datos por llenar. Por favor llenar todos los campos.'); 
            window.location.href='../vistas/principalusuarios.php'; 
            </script>"; 
        } 

    

?>