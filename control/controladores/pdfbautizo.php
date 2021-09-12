<?php
     include '../modelos/conector.php';      
     include '../modelos/meses.php';
     require('fpdf/fpdf.php');

     $diassemana = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
     $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
      
    $fechaformato =$diassemana[date('w')]." ".date('d')." de ".$meses[date('n')-1]. " del ".date('Y');
     
    $idbautizo = $_POST['idbautizo'];
    $idsacerdote = $_POST['sacerdote'];
   
    if(!empty($idsacerdote)){
    $registroc = "SELECT supletoria FROM registro WHERE idRegistro = $idbautizo ";
    
         $registroresultado = mysqli_query($conn,$registroc);
         $liner  = mysqli_fetch_array($registroresultado);

         $supletoriaid = $liner['supletoria'];


        if($supletoriaid == 0){


    $consu = "SELECT reg.idRegistro as idreg, reg.noLibro, reg.noFolio,reg.fechaSacramento as fechasac, sac.fechaNacimiento as fechana,
    sacra.nombreSacramentos as sacramento , sac.nombre,sac.genero,dper.nombre as padrino1,dpers.nombre as padrino2, dper.genero as gpad1, dpers.genero as gpad2,
    reg.alMargen, reg.supletoria,reg.Sacramentados_idDatosPersona as idsacra, dperso.nombre as sacer from registro as reg
    LEFT JOIN sacramentados as sac on reg.Sacramentados_idDatosPersona =  sac.idDatosPersona
    
    LEFT JOIN persona as pers on reg.Persona_idPadrinouno = pers.idPersona
    LEFT JOIN datospersona as dper on pers.DatosPersona_idDatosPersona = dper.idDatosPersona
    
    LEFT JOIN persona as perso on reg.Persona_idPadrinodos = perso.idPersona
    LEFT JOIN datospersona as dpers on perso.DatosPersona_idDatosPersona = dpers.idDatosPersona
    
    LEFT JOIN sacramentos as sacra on reg.Sacramentos_idSacramentos = sacra.idSacramentos 
    
    LEFT JOIN persona as sas on reg.Persona_idPersonaSacerdote = sas.idPersona
    LEFT JOIN datospersona as dperso on sas.DatosPersona_idDatosPersona = dperso.idDatosPersona
    
    WHERE reg.idRegistro = $idbautizo";

        $resul = mysqli_query($conn,$consu);
        $linead= mysqli_fetch_array($resul);
   
              $idSacra = $linead['idsacra'];

                $consusac = "SELECT dper.nombre, per.tipoSacerdote from persona as per 
                 INNER JOIN datospersona as dper on per.DatosPersona_idDatosPersona = dper.idDatosPersona
                 WHERE per.idPersona = $idsacerdote ";
                 
                      $resultsa = mysqli_query($conn,$consusac);
                      $lineasa  = mysqli_fetch_array($resultsa);

                 $consultapadres = " SELECT datpers.nombre as madre, dape.nombre as padre FROM sacramentados AS sacrament
                 LEFT JOIN persona AS person ON sacrament.Persona_idMadre = person.DatosPersona_idDatosPersona
                 LEFT JOIN datospersona AS datpers ON person.DatosPersona_idDatosPersona = datpers.idDatosPersona
                 LEFT JOIN persona AS perso on sacrament.Persona_idPadre = perso.DatosPersona_idDatosPersona
                 LEFT JOIN datospersona AS dape ON perso.DatosPersona_idDatosPersona = dape.idDatosPersona
                 where  sacrament.idDatosPersona = $idSacra";
        
                            $resultpadres = mysqli_query($conn,$consultapadres);
                            $lineapadres  = mysqli_fetch_array($resultpadres);

                                  

        

        $madre = $lineapadres['madre'];
        $padre = $lineapadres['padre'];
        $libro = $linead['noLibro'];
        $folio = $linead['noFolio'];
        $noms = $linead['nombre'];
        $generos = $linead['genero'];
        $fechanac = $linead['fechana'];
        $padrinou = $linead['padrino1'];
        $generop1 = $linead['gpad1'];
        $padrinod = $linead['padrino2'];
        $generop2 = $linead['gpad2'];
        $margen = $linead['alMargen'];
        $suple = $linead['supletoria'];
        $sacerd = $linead['sacer'];
        $fechasac = $linead['fechasac'];

        $sacnombre = $lineasa['nombre'];
        $sactipo = $lineasa['tipoSacerdote'];
        
        

       // echo $nombrenombre;
            
        $separafn = explode("-",$fechanac);
        $aniofn = $separafn[0];
        $mesfn = $separafn[1];
        $diafn = $separafn[2];

            $separasc = explode("-",$fechasac);
            $aniosc = $separasc[0];
            $messc = $separasc[1];
            $diasc = $separasc[2];

$nacimientomes = meses($mesfn);

$sacramentomes = meses($messc);

//echo $generop1;
//echo $generop2;



class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    $this->Image('../vistas/img/logo.png',37,20,50);//izquierda derecha/arriba abajo,tamaño
    $this->Image('../vistas/img/constanciab.png',95,27,80);//izquierda derecha/arriba abajo,tamaño
    // Arial bold 15
    $this->SetFont('Arial','B',8);
    // Movernos a la derecha
    $this->SetY(39);
    $this->SetX(33);
    $this->Cell(154,6,'_________________________________________________________________________________________',0,0,'');
    $this->Cell(16);
    // Título
    //$this->SetX(25);
 //   $this->Cell(154,6,'Parroquia Santo Cristo de Esquipulas Tel: 7945-1180 scparroquia.guastatoya@gmail.com',1,0,'C');
    // Salto de línea
    $this->Ln(20);
}

// Pie de página
function Footer()
{
   /* // Posición: a 1,5 cm del final
   
    // Arial italic 8
    $this->SetFont('Arial','',10);
    // Número de página
    $this->SetY(-49);
    $this->SetX(111);
    $this->Cell(0,10,utf8_decode('____________________________'));
    $this->SetY(-45); 
    $this->SetX(58); 
    $this->Cell(0,10,utf8_decode("Sello Parroquial                                                    P.". $nombrenombre));
    $this->SetY(-40); 
    $this->SetX(110); 
   // $this->Cell(0,10,utf8_decode());
    
    $this->SetY(-30); 
    $this->SetX(54); 
    $this->Cell(100,6,'Tel: 7945-1180 Correo: scparroquia.guastatoya@gmail.com',1,0,'C');
    //$this->Cell(0,10,utf8_decode('Párroco'),0,0,'');*/
}
}

$pdf = new PDF();
$pdf->AddPage();
$pdf->SetFont('Arial','',12);
$pdf->SetMargins(44, 25 , 44);

$pdf->SetY(60);

$pdf->Cell(40,10,utf8_decode('El infrascrito. Parroco de Parroquia Santo Cristo de Esquipulas'));

$pdf->SetY(68);
$pdf->SetX(68);
$pdf->Cell(40,10,utf8_decode('Certifica que en el libro de Bautizos'));

$pdf->SetY(76); $pdf->Cell(16); $pdf->Cell(40,10,utf8_decode($libro));
$pdf->SetY(76); $pdf->Cell(48); $pdf->Cell(40,10,utf8_decode($folio));

$pdf->SetY(76);

$pdf->Cell(40,10,utf8_decode('No.__________Folio__________de esta Parroquia consta que:'));
$pdf->SetY(84);$pdf->Cell(2);$pdf->Cell(40,10,utf8_decode($noms));
$pdf->SetY(84);

$pdf->Cell(40,10,utf8_decode('___________________________________________________'));

if(!empty($fechanac)) { $diavac = $diafn; $nacimientovac = $nacimientomes; $aniovac=$aniofn; } 
                 else { $diavac = "- - -"; $nacimientovac = "- - -"; $aniovac="- - -"; }
$pdf->SetY(92);$pdf->Cell(25); $pdf->Cell(40,10,utf8_decode($diavac));
$pdf->SetY(92);$pdf->Cell(60); $pdf->Cell(40,10,utf8_decode($nacimientovac));
$pdf->SetY(92);$pdf->Cell(104); $pdf->Cell(40,10,utf8_decode($aniovac));


$pdf->SetY(92);
$pdf->Cell(40,10,utf8_decode('nacido el__________de____________________de__________'));

if(!empty($fechasac)) { $diasac = $diasc; $sacramentovac = $sacramentomes; $aniosac=$aniosc; } 
                 else { $diasac = "- - -"; $sacramentovac = "- - -"; $aniosac="- - -"; }
$pdf->SetY(100);$pdf->Cell(35); $pdf->Cell(40,10,utf8_decode($diasac));
$pdf->SetY(100);$pdf->Cell(70); $pdf->Cell(40,10,utf8_decode($sacramentovac));
$pdf->SetY(100);$pdf->Cell(107); $pdf->Cell(40,10,utf8_decode($aniosac));

$pdf->SetY(100);
$pdf->Cell(40,10,utf8_decode('fue batizado el_________de__________________de_________'));

if (!empty($padre)){ $espacioun = $padre;}else{$espacioun = $madre;} 

$pdf->SetY(108);$pdf->Cell(17);$pdf->Cell(40,10,utf8_decode($espacioun));
$pdf->SetY(108);
$pdf->Cell(40,10,utf8_decode('hijo de______________________________________________'));

if ($espacioun == $madre){
    $espaciodo = "- - - - - - - - - - - -";
}else{$espaciodo = $madre ;}

$pdf->SetY(116);$pdf->Cell(13);$pdf->Cell(40,10,utf8_decode($espaciodo));
$pdf->SetY(116);
$pdf->Cell(40,10,utf8_decode('y de________________________________________________'));



if(!empty($padrinou)) { $padrinovaci = $padrinou; } else { $padrinovaci = "- - - - - - - - - - - -"; }
    if($generop1 == "Masculino"){$escrito = "habiendo sido padrino__________________________________"; }
                          else{ $escrito="habiendo sido madrina__________________________________";}
$pdf->SetY(124);$pdf->Cell(46);$pdf->Cell(40,10,utf8_decode($padrinovaci));
$pdf->SetY(124);
$pdf->Cell(40,10,utf8_decode($escrito));


if(!empty($padrinod)) { $padrinovacio = $padrinod; } else { $padrinovacio = "- - - - - - - - - - - -"; }
$pdf->SetY(132);$pdf->Cell(7);$pdf->Cell(40,10,utf8_decode($padrinovacio));
$pdf->SetY(132);
$pdf->Cell(40,10,utf8_decode('y___________________________________________________'));

if(!empty($sacerd)) { $sacervac = $sacerd; } else { $sacervac = "- - - - - - - - - - - -"; }
$pdf->SetY(140);$pdf->Cell(35);$pdf->Cell(40,10,utf8_decode($sacervac));
$pdf->SetY(140);

$pdf->Cell(40,10,utf8_decode('Bautizó el Padre______________________________________'));


$pdf->SetY(141);

//$pdf->Cell(40,10,utf8_decode(n));

$pdf->Ln();

$pdf->MultiCell(0,5,'Al margen dice: '. $margen);


$pdf->SetY(190);
$pdf->Cell(33);
$pdf->Cell(40,10,utf8_decode($fechaformato));



$pdf->SetFont('Arial','',10);
// Número de página
$pdf->SetY(-52);
$pdf->SetX(111);
$pdf->Cell(0,10,utf8_decode('____________________________'));
$pdf->SetY(-45); 
$pdf->SetX(58); 
$pdf->Cell(0,10,utf8_decode("Sello Parroquial                            P.". $sacnombre));
$pdf->SetY(-40); 
$pdf->SetX(109); 
$pdf->Cell(0,10,utf8_decode('  '.$sactipo));

$pdf->SetY(-30); 
$pdf->SetX(54); 
$pdf->Cell(100,6,'Tel: 7945-1180 Correo: scparroquia.guastatoya@gmail.com',1,0,'C');
//$this->Cell(0,10,utf8_decode('Párroco'),0,0,'');




$pdf->Output();

        }else{

            
            $consusql = "SELECT reg.idRegistro as idreg, reg.noLibro, reg.noFolio,reg.noSupletoria ,reg.edadSacramento as edadsac, reg.testimonioPersona,
            sac.fechaNacimiento as fechana , sac.nombre,sac.genero,sac.lugarNacimiento,sac.viveActual,dper.nombre as padrino1,dpers.nombre as padrino2,dper.genero as genp1,
            reg.Sacramentados_idDatosPersona as idsacra, dperso.nombre as sacer from registro as reg
            LEFT JOIN sacramentados as sac on reg.Sacramentados_idDatosPersona =  sac.idDatosPersona
            
            LEFT JOIN persona as pers on reg.Persona_idPadrinouno = pers.idPersona
            LEFT JOIN datospersona as dper on pers.DatosPersona_idDatosPersona = dper.idDatosPersona
            
            LEFT JOIN persona as perso on reg.Persona_idPadrinodos = perso.idPersona
            LEFT JOIN datospersona as dpers on perso.DatosPersona_idDatosPersona = dpers.idDatosPersona
            
            LEFT JOIN sacramentos as sacra on reg.Sacramentos_idSacramentos = sacra.idSacramentos 
            
            LEFT JOIN persona as sas on reg.Persona_idPersonaSacerdote = sas.idPersona
            LEFT JOIN datospersona as dperso on sas.DatosPersona_idDatosPersona = dperso.idDatosPersona
            
            WHERE reg.idRegistro = $idbautizo";

                $resulsql = mysqli_query($conn,$consusql);
                $lineasql = mysqli_fetch_array($resulsql);

                    $idSacrament = $lineasql['idsacra'];
                 


                    $consusacsql = "SELECT dper.nombre, per.tipoSacerdote from persona as per 
                    INNER JOIN datospersona as dper on per.DatosPersona_idDatosPersona = dper.idDatosPersona
                    WHERE per.idPersona = $idsacerdote ";
                    
                         $resultsql = mysqli_query($conn,$consusacsql);
                         $lineasup  = mysqli_fetch_array($resultsql);
   
                    $consultapadressql = " SELECT datpers.nombre as madre, dape.nombre as padre FROM sacramentados AS sacrament
                    LEFT JOIN persona AS person ON sacrament.Persona_idMadre = person.DatosPersona_idDatosPersona
                    LEFT JOIN datospersona AS datpers ON person.DatosPersona_idDatosPersona = datpers.idDatosPersona
                    LEFT JOIN persona AS perso on sacrament.Persona_idPadre = perso.DatosPersona_idDatosPersona
                    LEFT JOIN datospersona AS dape ON perso.DatosPersona_idDatosPersona = dape.idDatosPersona
                    where  sacrament.idDatosPersona = $idSacrament";
           
                               $resultpadressql = mysqli_query($conn,$consultapadressql);
                               $lineapadressql  = mysqli_fetch_array($resultpadressql);



           $sacefirma = $lineasup['nombre'];
            $sacetipo = $lineasup['tipoSacerdote'];
            //echo $sacefirma;
        
        $librosup = $lineasql['noLibro'];
        $foliosup = $lineasql['noFolio'];
        $supletoria = $lineasql['noSupletoria'];

        $nomsup = $lineasql['nombre'];
        $fechanasup= $lineasql['fechana'];
        $nacimientosup = $lineasql['lugarNacimiento'];
        $vivesup = $lineasql['viveActual'];

        $madresup = $lineapadressql['madre'];
        $padresup = $lineapadressql['padre'];

        $testigosup = $lineasql['testimonioPersona'];
        

        $edadsup = $lineasql['edadsac'];
       

        $padrinou = $lineasql['padrino1'];
        $padrinod = $lineasql['padrino2'];
        
        $generosup = $lineasql['genp1'];


        $separafecha = explode("-",$fechanasup);
        $aniosup= $separafecha[0];
        $messup = $separafecha[1];
        $diasup = $separafecha[2];

            $mespalabra = meses($messup);

/*
        echo $librosup;
        echo "-------";
        echo $foliosup;
        echo "-------";
        echo $supletoria;
        echo "-------";

        echo $nomsup;
        echo "-------";

        echo $fechanasup;
        echo "-------";

        echo $nacimientosup;
        echo "-------";

        echo $vivesup;
        echo "-------";
        echo $madresup;
        echo "-------";
        echo $padresup;
        echo "-------";
        echo $testigosup;
        echo "-------";
        echo $edadsup;
        echo "-------";
        echo $padrinou;
        echo "-------";
        echo $padrinod;
*/


            

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
     // Logo
     $this->Image('../vistas/img/logo.png',37,20,50);//izquierda derecha/arriba abajo,tamaño
     $this->Image('../vistas/img/supletoria_bautizo.png',95,27,80);//izquierda derecha/arriba abajo,tamaño
     // Arial bold 15
     $this->SetFont('Arial','B',8);
     // Movernos a la derecha
     $this->SetY(39);
     $this->SetX(33);
     $this->Cell(154,6,'_________________________________________________________________________________________',0,0,'');
     $this->Cell(16);
     // Título
     //$this->SetX(25);
  //   $this->Cell(154,6,'Parroquia Santo Cristo de Esquipulas Tel: 7945-1180 scparroquia.guastatoya@gmail.com',1,0,'C');
     // Salto de línea
     $this->Ln(20);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
   /*
    // Arial italic 8
    $this->SetFont('Arial','',10);
    // Número de página
    $this->SetY(-49);
    $this->SetX(111);
    $this->Cell(0,10,utf8_decode('____________________________'));
    $this->SetY(-45); 
    $this->SetX(58); 
    $this->Cell(0,10,utf8_decode('Sello Parroquial                                                    Párroco'));
    
    $this->SetY(-30); 
    $this->SetX(54); 
    $this->Cell(100,6,'Tel: 7945-1180 Correo: scparroquia.guastatoya@gmail.com',1,0,'C');
    //$this->Cell(0,10,utf8_decode('Párroco'),0,0,'');*/
}
}

$pdf = new PDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',12);
$pdf->SetMargins(44, 25 , 44);

$pdf->SetY(50);
$pdf->SetX(65);
$pdf->Cell(40,10,utf8_decode('Información Supletoria de Bautismo'));

$pdf->SetFont('Arial','',12);
$pdf->SetY(60); $pdf->SetX(70); $pdf->Cell(40,10,utf8_decode($librosup));
$pdf->SetY(60); $pdf->SetX(101); $pdf->Cell(40,10,utf8_decode($foliosup));
$pdf->SetY(60); $pdf->SetX(148); $pdf->Cell(40,10,utf8_decode($supletoria));
$pdf->SetY(60);
$pdf->SetX(47);
$pdf->Cell(40,10,utf8_decode('Libro No.________ Folio.________ Supletoria No.________'));


$pdf->SetY(72);
$pdf->MultiCell(0,5,utf8_decode('El infrascrito párroco de la Parrroquia Santo Cristo de Esquipulas, Guastatoya, El Progreso, hace constar que, depués de buscar diligentemente en el archivo respectivo y al no encontrarse el certificado de BAUTISMO, se extendio una constancia supletoria a:'));

$pdf->SetY(98); $pdf->SetX(46); $pdf->Cell(40,10,utf8_decode($nomsup));
$pdf->SetY(98);
$pdf->SetX(44);
$pdf->Cell(40,10,utf8_decode('___________________________________________________'));


if(!empty($fechanasup)) { $fechanavac = $diasup .' de '. $mespalabra .' de '. $aniosup; } else { $fechanavac = "- - - - - - - - - - - -"; }
$pdf->SetY(106); $pdf->SetX(65); $pdf->Cell(40,10,utf8_decode($fechanavac));
$pdf->SetY(106);
$pdf->SetX(44);
$pdf->Cell(40,10,utf8_decode('Nació el_____________________________________________'));


if(!empty($nacimientosup)) { $nacimientovac = $nacimientosup; } else { $nacimientovac = "- - - - - - - - - - - -"; }
$pdf->SetY(114); $pdf->SetX(78); $pdf->Cell(40,10,utf8_decode($nacimientovac));
$pdf->SetY(114);
$pdf->SetX(44);
$pdf->Cell(40,10,utf8_decode('Originario(a) de_______________________________________'));

if(!empty($vivesup)) { $vivevac = $vivesup; } else { $vivevac = "- - - - - - - - - - - -"; }
$pdf->SetY(122); $pdf->SetX(72); $pdf->Cell(40,10,utf8_decode($vivevac));
$pdf->SetY(122);
$pdf->SetX(44);
$pdf->Cell(40,10,utf8_decode('Vecino(a) de_________________________________________'));

if (!empty($padressup)){ $espacioun = $padresup;}else{$espacioun = $madresup;} 
$pdf->SetY(130); $pdf->SetX(66); $pdf->Cell(40,10,utf8_decode($espacioun));
$pdf->SetY(130);
$pdf->SetX(44);
$pdf->Cell(40,10,utf8_decode('Hijo(a) de___________________________________________'));

if ($espacioun == $madresup){ $espaciodo = "- - - - - - - - - - - -";}else{$espaciodo = $madresup ;}
$pdf->SetY(138); $pdf->SetX(58); $pdf->Cell(40,10,utf8_decode($espaciodo));
$pdf->SetY(138);
$pdf->SetX(44);
$pdf->Cell(40,10,utf8_decode('Y de_______________________________________________'));

if(!empty($testigosup)) { $testigovac = $testigosup; } else { $testigovac = "- - - - - - - - - - - -"; }
$pdf->SetY(146); $pdf->SetX(96); $pdf->Cell(40,10,utf8_decode($testigovac));
$pdf->SetY(146);
$pdf->SetX(44);
$pdf->Cell(40,10,utf8_decode('Se procedió a testimoniar_______________________________'));

if(!empty($edadsup)) { $edadvac = $edadsup; } else { $edadvac = "- - - - - - - - - - - -"; }
$pdf->SetY(154); $pdf->SetX(156); $pdf->Cell(40,10,utf8_decode($edadvac));
$pdf->SetY(154);
$pdf->SetX(44);
$pdf->Cell(40,10,utf8_decode('Que afirma que dicha persona fue bautizada a la edad de _____,'));

if(!empty($padrinou)) { $padrinovac = $padrinou; } else { $padrinovac = "- - - - - - - - - - - -"; }
if($generosup == "Masculino"){$escritoo = "en esta Parroquia. Siendo su padrino______________________"; }
                          else{ $escritoo="en esta Parroquia. Siendo su madrina______________________";}
$pdf->SetY(162); $pdf->SetX(118); $pdf->Cell(40,10,utf8_decode($padrinovac));
$pdf->SetY(162);
$pdf->SetX(44);
$pdf->Cell(40,10,utf8_decode($escritoo));

if(!empty($padrinod)) { $padrinova = $padrinod; } else { $padrinova = "- - - - - - - - - - - -"; }
$pdf->SetY(170); $pdf->SetX(50); $pdf->Cell(40,10,utf8_decode($padrinova));
$pdf->SetY(170);
$pdf->SetX(44);
$pdf->Cell(40,10,utf8_decode('y___________________________________________________'));





$pdf->SetY(200);
$pdf->Cell(22);
$pdf->Cell(40,10,utf8_decode('Guastatoya, '.$fechaformato));




$pdf->SetFont('Arial','',10);
// Número de página
$pdf->SetY(-52);
$pdf->SetX(111);
$pdf->Cell(0,10,utf8_decode('____________________________'));
$pdf->SetY(-45); 
$pdf->SetX(58); 
$pdf->Cell(0,10,utf8_decode("Sello Parroquial                            P.". $sacefirma));
$pdf->SetY(-40); 
$pdf->SetX(109); 
$pdf->Cell(0,10,utf8_decode('  '.$sacetipo));

$pdf->SetY(-30); 
$pdf->SetX(54); 
$pdf->Cell(100,6,'Tel: 7945-1180 Correo: scparroquia.guastatoya@gmail.com',1,0,'C');

$pdf->Output();




        }
    }else{
       /* echo "<script> 
        alert('Error! debe especificar el Sacerdote encargado.'); 
        window.location.href='../vistas/principalbautizo.php'; 
        </script>"; */
    }

?>