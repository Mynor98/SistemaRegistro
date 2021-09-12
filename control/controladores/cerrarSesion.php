<?php
     
  if(isset($_GET['cerrar'])) {

    session_start();
    session_destroy();  // Destruir la sesión
    header("location:../index.php"); 

  }
?>
