<?php
     include '../modelos/conector.php'; 

    $idacta = $_POST['idacta'];
    $libro = $_POST['libro'];
    $folio = $_POST['folio'];
    $fecha = $_POST['fecha'];
    $sacramentado = $_POST['sacramentado'];
    $obispo = $_POST['obispo'];
    $padrinou = $_POST['padrinou'];
    $padrinod = $_POST['padrinod'];

/*
    echo  $idacta;
    echo  "------";
    echo  $libro;
    echo  "------";
    echo  $folio;
    echo  "------";
    echo  $fecha;
    echo  "------";
    echo  $sacramentado;
    echo  "------";
    echo  $obispo;
    echo  "------";
    echo  $padrinou;
    echo  "------";
    echo  $padrinod
*/


 if(!empty($fecha)){
    if($sacramentado !=0){
        if($obispo !=0){
            if($padrinou !=0 && $padrinod !=0){

                $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, fechaSacramento = '$fecha',
                Persona_idPadrinouno = $padrinou, Persona_idPadrinodos = $padrinod,
                Sacramentados_idDatosPersona = $sacramentado,  Persona_idPersonaOb = $obispo
                where idRegistro = $idacta";
          
                   if (mysqli_query($conn, $sql)) {
          
                   echo "<script> 
                   alert('Acta modificada con exito.'); 
                   window.location.href='../vistas/principalconfir.php';
                   </script>"; 
                   } else {
          
                   echo "<script> 
                   alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                   window.location.href='../vistas/principalconfir.php';
                   </script>"; 
          
                   }



            }else if($padrinou !=0 && $padrinod ==0){

                $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, fechaSacramento = '$fecha',
                Persona_idPadrinouno = $padrinou, 
                Sacramentados_idDatosPersona = $sacramentado,  Persona_idPersonaOb = $obispo
                where idRegistro = $idacta";
          
                   if (mysqli_query($conn, $sql)) {
          
                   echo "<script> 
                   alert('Acta modificada con exito.'); 
                   window.location.href='../vistas/principalconfir.php';
                   </script>"; 
                   } else {
          
                   echo "<script> 
                   alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                   window.location.href='../vistas/principalconfir.php'; 
                   </script>"; 
          
                   }


            }else if($padrinou ==0 && $padrinod !=0){

                $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, fechaSacramento = '$fecha',
                Persona_idPadrinodos = $padrinod,
                Sacramentados_idDatosPersona = $sacramentado,  Persona_idPersonaOb = $obispo
                where idRegistro = $idacta";
          
                   if (mysqli_query($conn, $sql)) {
          
                   echo "<script> 
                   alert('Acta modificada con exito.'); 
                   window.location.href='../vistas/principalconfir.php';
                   </script>"; 
                   } else {
          
                   echo "<script> 
                   alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                   window.location.href='../vistas/principalconfir.php';
                   </script>"; 
          
                   }


            }else if($padrinou ==0 && $padrinod ==0){

                $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, fechaSacramento = '$fecha',
                Sacramentados_idDatosPersona = $sacramentado,  Persona_idPersonaOb = $obispo
                where idRegistro = $idacta";
          
                   if (mysqli_query($conn, $sql)) {
          
                   echo "<script> 
                   alert('Acta modificada con exito.'); 
                   window.location.href='../vistas/principalconfir.php';
                   </script>"; 
                   } else {
          
                   echo "<script> 
                   alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                   window.location.href='../vistas/principalconfir.php';
                   </script>"; 
          
                   }




            }


        }else{ //no viene obispo

            if($padrinou !=0 && $padrinod !=0){

                $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, fechaSacramento = '$fecha',
                Persona_idPadrinouno = $padrinou, Persona_idPadrinodos = $padrinod,
                Sacramentados_idDatosPersona = $sacramentado
                where idRegistro = $idacta";
          
                   if (mysqli_query($conn, $sql)) {
          
                   echo "<script> 
                   alert('Acta modificada con exito.'); 
                   window.location.href='../vistas/principalconfir.php'; 
                   </script>"; 
                   } else {
          
                   echo "<script> 
                   alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                   window.location.href='../vistas/principalconfir.php'; 
                   </script>"; 
          
                   }



            }else if($padrinou !=0 && $padrinod ==0){

                $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, fechaSacramento = '$fecha',
                Persona_idPadrinouno = $padrinou, 
                Sacramentados_idDatosPersona = $sacramentado
                where idRegistro = $idacta";
          
                   if (mysqli_query($conn, $sql)) {
          
                   echo "<script> 
                   alert('Acta modificada con exito.'); 
                   window.location.href='../vistas/principalconfir.php';
                   </script>"; 
                   } else {
          
                   echo "<script> 
                   alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                   window.location.href='../vistas/principalconfir.php';
                   </script>"; 
          
                   }


            }else if($padrinou ==0 && $padrinod !=0){

                $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, fechaSacramento = '$fecha',
                Persona_idPadrinodos = $padrinod,
                Sacramentados_idDatosPersona = $sacramentado
                where idRegistro = $idacta";
          
                   if (mysqli_query($conn, $sql)) {
          
                   echo "<script> 
                   alert('Acta modificada con exito.'); 
                   window.location.href='../vistas/principalconfir.php'; 
                   </script>"; 
                   } else {
          
                   echo "<script> 
                   alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                   window.location.href='../vistas/principalconfir.php';
                   </script>"; 
          
                   }


            }else if($padrinou ==0 && $padrinod ==0){

                $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, fechaSacramento = '$fecha',
                Sacramentados_idDatosPersona = $sacramentado
                where idRegistro = $idacta";
          
                   if (mysqli_query($conn, $sql)) {
          
                   echo "<script> 
                   alert('Acta modificada con exito.'); 
                   window.location.href='../vistas/principalconfir.php';
                   </script>"; 
                   } else {
          
                   echo "<script> 
                   alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                   window.location.href='../vistas/principalconfir.php';
                   </script>"; 
          
                   }




            }



        }


    }else{// no viene sacramentado



        if($obispo !=0){
            if($padrinou !=0 && $padrinod !=0){

                $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, fechaSacramento = '$fecha',
                Persona_idPadrinouno = $padrinou, Persona_idPadrinodos = $padrinod,
                 Persona_idPersonaOb = $obispo
                where idRegistro = $idacta";
          
                   if (mysqli_query($conn, $sql)) {
          
                   echo "<script> 
                   alert('Acta modificada con exito.'); 
                   window.location.href='../vistas/principalconfir.php'; 
                   </script>"; 
                   } else {
          
                   echo "<script> 
                   alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                   window.location.href='../vistas/principalconfir.php';
                   </script>"; 
          
                   }



            }else if($padrinou !=0 && $padrinod ==0){

                $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, fechaSacramento = '$fecha',
                Persona_idPadrinouno = $padrinou, 
                 Persona_idPersonaOb = $obispo
                where idRegistro = $idacta";
          
                   if (mysqli_query($conn, $sql)) {
          
                   echo "<script> 
                   alert('Acta modificada con exito.'); 
                   window.location.href='../vistas/principalconfir.php';
                   </script>"; 
                   } else {
          
                   echo "<script> 
                   alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                   window.location.href='../vistas/principalconfir.php'; 
                   </script>"; 
          
                   }


            }else if($padrinou ==0 && $padrinod !=0){

                $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, fechaSacramento = '$fecha',
                Persona_idPadrinodos = $padrinod,
                 Persona_idPersonaOb = $obispo
                where idRegistro = $idacta";
          
                   if (mysqli_query($conn, $sql)) {
          
                   echo "<script> 
                   alert('Acta modificada con exito.'); 
                   window.location.href='../vistas/principalconfir.php'; 
                   </script>"; 
                   } else {
          
                   echo "<script> 
                   alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                   window.location.href='../vistas/principalconfir.php'; 
                   </script>"; 
          
                   }


            }else if($padrinou ==0 && $padrinod ==0){

                $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, fechaSacramento = '$fecha',
                  Persona_idPersonaOb = $obispo
                where idRegistro = $idacta";
          
                   if (mysqli_query($conn, $sql)) {
          
                   echo "<script> 
                   alert('Acta modificada con exito.'); 
                   window.location.href='../vistas/principalconfir.php'; 
                   </script>"; 
                   } else {
          
                   echo "<script> 
                   alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                   window.location.href='../vistas/principalconfir.php'; 
                   </script>"; 
          
                   }




            }


        }else{ //no viene obispo

            if($padrinou !=0 && $padrinod !=0){

                $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, fechaSacramento = '$fecha',
                Persona_idPadrinouno = $padrinou, Persona_idPadrinodos = $padrinod
                where idRegistro = $idacta";
          
                   if (mysqli_query($conn, $sql)) {
          
                   echo "<script> 
                   alert('Acta modificada con exito.'); 
                   window.location.href='../vistas/principalconfir.php';
                   </script>"; 
                   } else {
          
                   echo "<script> 
                   alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                   window.location.href='../vistas/principalconfir.php';
                   </script>"; 
          
                   }



            }else if($padrinou !=0 && $padrinod ==0){

                $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, fechaSacramento = '$fecha',
                Persona_idPadrinouno = $padrinou
                where idRegistro = $idacta";
          
                   if (mysqli_query($conn, $sql)) {
          
                   echo "<script> 
                   alert('Acta modificada con exito.'); 
                   window.location.href='../vistas/principalconfir.php';
                   </script>"; 
                   } else {
          
                   echo "<script> 
                   alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                   window.location.href='../vistas/principalconfir.php';
                   </script>"; 
          
                   }


            }else if($padrinou ==0 && $padrinod !=0){

                $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, fechaSacramento = '$fecha',
                Persona_idPadrinodos = $padrinod
                where idRegistro = $idacta";
          
                   if (mysqli_query($conn, $sql)) {
          
                   echo "<script> 
                   alert('Acta modificada con exito.'); 
                   window.location.href='../vistas/principalconfir.php';
                   </script>"; 
                   } else {
          
                   echo "<script> 
                   alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                   window.location.href='../vistas/principalconfir.php';
                   </script>"; 
          
                   }


            }else if($padrinou ==0 && $padrinod ==0){

                $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, fechaSacramento = '$fecha'
                where idRegistro = $idacta";
          
                   if (mysqli_query($conn, $sql)) {
          
                   echo "<script> 
                   alert('Acta modificada con exito.'); 
                   window.location.href='../vistas/principalconfir.php';
                   </script>"; 
                   } else {
          
                   echo "<script> 
                   alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                   window.location.href='../vistas/principalconfir.php';
                   </script>"; 
          
                   }




            }



        }


    }







 }else{// no viene fecha


    if($sacramentado !=0){
        if($obispo !=0){
            if($padrinou !=0 && $padrinod !=0){

                $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, 
                Persona_idPadrinouno = $padrinou, Persona_idPadrinodos = $padrinod,
                Sacramentados_idDatosPersona = $sacramentado,  Persona_idPersonaOb = $obispo
                where idRegistro = $idacta";
          
                   if (mysqli_query($conn, $sql)) {
          
                   echo "<script> 
                   alert('Acta modificada con exito.'); 
                   window.location.href='../vistas/principalconfir.php';
                   </script>"; 
                   } else {
          
                   echo "<script> 
                   alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                   window.location.href='../vistas/principalconfir.php'; 
                   </script>"; 
          
                   }



            }else if($padrinou !=0 && $padrinod ==0){

                $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, 
                Persona_idPadrinouno = $padrinou, 
                Sacramentados_idDatosPersona = $sacramentado,  Persona_idPersonaOb = $obispo
                where idRegistro = $idacta";
          
                   if (mysqli_query($conn, $sql)) {
          
                   echo "<script> 
                   alert('Acta modificada con exito.'); 
                   window.location.href='../vistas/principalconfir.php'; 
                   </script>"; 
                   } else {
          
                   echo "<script> 
                   alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                   window.location.href='../vistas/principalconfir.php'; 
                   </script>"; 
          
                   }


            }else if($padrinou ==0 && $padrinod !=0){

                $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, 
                Persona_idPadrinodos = $padrinod,
                Sacramentados_idDatosPersona = $sacramentado,  Persona_idPersonaOb = $obispo
                where idRegistro = $idacta";
          
                   if (mysqli_query($conn, $sql)) {
          
                   echo "<script> 
                   alert('Acta modificada con exito.'); 
                   window.location.href='../vistas/principalconfir.php';
                   </script>"; 
                   } else {
          
                   echo "<script> 
                   alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                   window.location.href='../vistas/principalconfir.php';
                   </script>"; 
          
                   }


            }else if($padrinou ==0 && $padrinod ==0){

                $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio,
                Sacramentados_idDatosPersona = $sacramentado,  Persona_idPersonaOb = $obispo
                where idRegistro = $idacta";
          
                   if (mysqli_query($conn, $sql)) {
          
                   echo "<script> 
                   alert('Acta modificada con exito.'); 
                   window.location.href='../vistas/principalconfir.php';
                   </script>"; 
                   } else {
          
                   echo "<script> 
                   alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                   window.location.href='../vistas/principalconfir.php';
                   </script>"; 
          
                   }




            }


        }else{ //no viene obispo

            if($padrinou !=0 && $padrinod !=0){

                $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, 
                Persona_idPadrinouno = $padrinou, Persona_idPadrinodos = $padrinod,
                Sacramentados_idDatosPersona = $sacramentado
                where idRegistro = $idacta";
          
                   if (mysqli_query($conn, $sql)) {
          
                   echo "<script> 
                   alert('Acta modificada con exito.'); 
                   window.location.href='../vistas/principalconfir.php';
                   </script>"; 
                   } else {
          
                   echo "<script> 
                   alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                   window.location.href='../vistas/principalconfir.php';
                   </script>"; 
          
                   }



            }else if($padrinou !=0 && $padrinod ==0){

                $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio,
                Persona_idPadrinouno = $padrinou, 
                Sacramentados_idDatosPersona = $sacramentado
                where idRegistro = $idacta";
          
                   if (mysqli_query($conn, $sql)) {
          
                   echo "<script> 
                   alert('Acta modificada con exito.'); 
                   window.location.href='../vistas/principalconfir.php';
                   </script>"; 
                   } else {
          
                   echo "<script> 
                   alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                   window.location.href='../vistas/principalconfir.php';
                   </script>"; 
          
                   }


            }else if($padrinou ==0 && $padrinod !=0){

                $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, 
                Persona_idPadrinodos = $padrinod,
                Sacramentados_idDatosPersona = $sacramentado
                where idRegistro = $idacta";
          
                   if (mysqli_query($conn, $sql)) {
          
                   echo "<script> 
                   alert('Acta modificada con exito.'); 
                   window.location.href='../vistas/principalconfir.php';
                   </script>"; 
                   } else {
          
                   echo "<script> 
                   alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                   window.location.href='../vistas/principalconfir.php';
                   </script>"; 
          
                   }


            }else if($padrinou ==0 && $padrinod ==0){

                $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, 
                Sacramentados_idDatosPersona = $sacramentado
                where idRegistro = $idacta";
          
                   if (mysqli_query($conn, $sql)) {
          
                   echo "<script> 
                   alert('Acta modificada con exito.'); 
                   window.location.href='../vistas/principalconfir.php'; 
                   </script>"; 
                   } else {
          
                   echo "<script> 
                   alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                   window.location.href='../vistas/principalconfir.php';
                   </script>"; 
          
                   }




            }



        }


    }else{// no viene sacramentado



        if($obispo !=0){
            if($padrinou !=0 && $padrinod !=0){

                $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, 
                Persona_idPadrinouno = $padrinou, Persona_idPadrinodos = $padrinod,
                 Persona_idPersonaOb = $obispo
                where idRegistro = $idacta";
          
                   if (mysqli_query($conn, $sql)) {
          
                   echo "<script> 
                   alert('Acta modificada con exito.'); 
                   window.location.href='../vistas/principalconfir.php';
                   </script>"; 
                   } else {
          
                   echo "<script> 
                   alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                   window.location.href='../vistas/principalconfir.php';
                   </script>"; 
          
                   }



            }else if($padrinou !=0 && $padrinod ==0){

                $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, 
                 Persona_idPersonaOb = $obispo
                where idRegistro = $idacta";
          
                   if (mysqli_query($conn, $sql)) {
          
                   echo "<script> 
                   alert('Acta modificada con exito.'); 
                   window.location.href='../vistas/principalconfir.php';
                   </script>"; 
                   } else {
          
                   echo "<script> 
                   alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                   window.location.href='../vistas/principalconfir.php';
                   </script>"; 
          
                   }


            }else if($padrinou ==0 && $padrinod !=0){

                $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, 
                Persona_idPadrinodos = $padrinod,
                 Persona_idPersonaOb = $obispo
                where idRegistro = $idacta";
          
                   if (mysqli_query($conn, $sql)) {
          
                   echo "<script> 
                   alert('Acta modificada con exito.'); 
                   window.location.href='../vistas/principalconfir.php';
                   </script>"; 
                   } else {
          
                   echo "<script> 
                   alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                   window.location.href='../vistas/principalconfir.php';
                   </script>"; 
          
                   }


            }else if($padrinou ==0 && $padrinod ==0){

                $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio,
                  Persona_idPersonaOb = $obispo
                where idRegistro = $idacta";
          
                   if (mysqli_query($conn, $sql)) {
          
                   echo "<script> 
                   alert('Acta modificada con exito.'); 
                   window.location.href='../vistas/principalconfir.php';
                   </script>"; 
                   } else {
          
                   echo "<script> 
                   alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                   window.location.href='../vistas/principalconfir.php';
                   </script>"; 
          
                   }




            }


        }else{ //no viene obispo

            if($padrinou !=0 && $padrinod !=0){

                $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio,
                Persona_idPadrinouno = $padrinou, Persona_idPadrinodos = $padrinod
                where idRegistro = $idacta";
          
                   if (mysqli_query($conn, $sql)) {
          
                   echo "<script> 
                   alert('Acta modificada con exito.'); 
                   window.location.href='../vistas/principalconfir.php'; 
                   </script>"; 
                   } else {
          
                   echo "<script> 
                   alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                   window.location.href='../vistas/principalconfir.php';
                   </script>"; 
          
                   }



            }else if($padrinou !=0 && $padrinod ==0){

                $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, 
                Persona_idPadrinouno = $padrinou
                where idRegistro = $idacta";
          
                   if (mysqli_query($conn, $sql)) {
          
                   echo "<script> 
                   alert('Acta modificada con exito.'); 
                   window.location.href='../vistas/principalconfir.php';
                   </script>"; 
                   } else {
          
                   echo "<script> 
                   alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                   window.location.href='../vistas/principalconfir.php';
                   </script>"; 
          
                   }


            }else if($padrinou ==0 && $padrinod !=0){

                $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio, 
                Persona_idPadrinodos = $padrinod
                where idRegistro = $idacta";
          
                   if (mysqli_query($conn, $sql)) {
          
                   echo "<script> 
                   alert('Acta modificada con exito.'); 
                   window.location.href='../vistas/principalconfir.php';
                   </script>"; 
                   } else {
          
                   echo "<script> 
                   alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                   window.location.href='../vistas/principalconfir.php';
                   </script>"; 
          
                   }


            }else if($padrinou ==0 && $padrinod ==0){

                $sql = "UPDATE registro SET noLibro = $libro, noFolio = $folio
                where idRegistro = $idacta";
          
                   if (mysqli_query($conn, $sql)) {
          
                   echo "<script> 
                   alert('Acta modificada con exito.'); 
                   window.location.href='../vistas/principalconfir.php'; 
                   </script>"; 
                   } else {
          
                   echo "<script> 
                   alert('Error, Acta no modificada. Revisar datos ingresados.'); 
                   window.location.href='../vistas/principalconfir.php'; 
                   </script>"; 
          
                   }




            }



        }


    }










 }













?>