<?php
     include '../modelos/conector.php';      
    

     $idacta = $_POST['idacta'];
     $libro = $_POST['libro'];
     $folio = $_POST['folio'];
     $supleotria = $_POST['suple'];
     $edad = $_POST['edad'];
     $sacramentado = $_POST['sacramentado'];
     $testigo = $_POST['testigo'];
     $padrinou = $_POST['padrinou'];
     $padrinod = $_POST['padrinod'];
  
 
    /* echo $idacta;
     echo "---------";
     echo $libro;
     echo "---------";
     echo $folio;
     echo "---------";
     echo $supleotria;
     echo "---------";
     echo $edad;
     echo "---------";
     echo $sacramentado;
     echo "---------";
     echo $testigo;
     echo "---------";
     echo $padrinou;
     echo "---------";
     echo $padrinod;*/




    if($sacramentado !=0){



        if($padrinou !=0 && $padrinod !=0){

            $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, noSupletoria = $supleotria,
            edadSacramento = $edad, testimonioPersona = '$testigo' ,Persona_idPadrinouno = $padrinou, Persona_idPadrinodos = $padrinod,
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


            $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, noSupletoria = $supleotria,
            edadSacramento = $edad, testimonioPersona = '$testigo' ,Persona_idPadrinouno = $padrinou,
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

            $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, noSupletoria = $supleotria,
            edadSacramento = $edad, testimonioPersona = '$testigo' , Persona_idPadrinodos = $padrinod,
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

            $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, noSupletoria = $supleotria,
            edadSacramento = $edad, testimonioPersona = '$testigo' ,
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




    }else{ //no viene sacramentado


        if($padrinou !=0 && $padrinod !=0){

            $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, noSupletoria = $supleotria,
            edadSacramento = $edad, testimonioPersona = '$testigo' ,Persona_idPadrinouno = $padrinou, Persona_idPadrinodos = $padrinod
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


            $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, noSupletoria = $supleotria,
            edadSacramento = $edad, testimonioPersona = '$testigo' ,Persona_idPadrinouno = $padrinou
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

            $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, noSupletoria = $supleotria,
            edadSacramento = $edad, testimonioPersona = '$testigo' , Persona_idPadrinodos = $padrinod
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

            $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, noSupletoria = $supleotria,
            edadSacramento = $edad, testimonioPersona = '$testigo' 
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









    










?>