<?php
     include '../modelos/conector.php';      
     include '../modelos/meses.php';
     require('fpdf/fpdf.php');

    $idregistro = $_POST['idmatrimonio'];
    $sacerdote = $_POST['sacerdote'];

/*
    echo $idregistro;
    echo "------";
    echo $sacerdote;

*/
    $diassemana = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
    $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
     
   $fechaformato =$diassemana[date('w')]." ".date('d')." de ".$meses[date('n')-1]. " del ".date('Y');
    
   
  
   if(!empty($sacerdote)){
   $registroc = "SELECT supletoria FROM registro WHERE idRegistro = $idregistro ";
   
        $registroresultado = mysqli_query($conn,$registroc);
        $liner  = mysqli_fetch_array($registroresultado);

        $supletoriaid = $liner['supletoria'];


       if($supletoriaid == 0){


   $consu = "SELECT reg.idRegistro as idreg, reg.noLibro, reg.noFolio,reg.fechaSacramento as fechasac, sac.fechaNacimiento as fechana,sac.lugarNacimiento ,dtp.nombre as catequista,
   sacra.nombreSacramentos as sacramento , sac.nombre as novio,sac.genero,sacs.idDatosPersona as idnovia,sacs.nombre as novia,sacs.lugarNacimiento as lugnovia,sacs.fechaNacimiento as fnovia,obi.nombre as obispo ,dper.nombre as padrino1,dpers.nombre as padrino2, dper.genero as gpad1, dpers.genero as gpad2,
   reg.alMargen, reg.supletoria,reg.Sacramentados_idDatosPersona as idsacra, dperso.nombre as sacer 
   from registro as reg

   LEFT JOIN sacramentados as sac on reg.Sacramentados_idDatosPersona =  sac.idDatosPersona
   LEFT JOIN sacramentados as sacs on reg.Sacramentados_idDatosPersonad =  sacs.idDatosPersona
   
   LEFT JOIN persona as perr on perr.idPersona = reg.Persona_idPersonaCat
   LEFT JOIN datospersona as dtp on dtp.idDatosPersona = perr.DatosPersona_idDatosPersona  
    
   LEFT JOIN persona as ob on reg.Persona_idPersonaOb = ob.idPersona
   LEFT JOIN datospersona as obi on ob.DatosPersona_idDatosPersona = obi.idDatosPersona

   LEFT JOIN persona as pers on reg.Persona_idPadrinouno = pers.idPersona
   LEFT JOIN datospersona as dper on pers.DatosPersona_idDatosPersona = dper.idDatosPersona
   
   LEFT JOIN persona as perso on reg.Persona_idPadrinodos = perso.idPersona
   LEFT JOIN datospersona as dpers on perso.DatosPersona_idDatosPersona = dpers.idDatosPersona
   
   LEFT JOIN sacramentos as sacra on reg.Sacramentos_idSacramentos = sacra.idSacramentos 
   
   LEFT JOIN persona as sas on reg.Persona_idPersonaSacerdote = sas.idPersona
   LEFT JOIN datospersona as dperso on sas.DatosPersona_idDatosPersona = dperso.idDatosPersona
   
   WHERE reg.idRegistro = $idregistro";

       $resul = mysqli_query($conn,$consu);
       $linead= mysqli_fetch_array($resul);
  
             $idSacra = $linead['idsacra'];
             $idnoviaa = $linead['idnovia'];

               $consusac = "SELECT dper.nombre, per.tipoSacerdote from persona as per 
                INNER JOIN datospersona as dper on per.DatosPersona_idDatosPersona = dper.idDatosPersona
                WHERE per.idPersona = $sacerdote";
                
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
                
                           $consultapadresnovia = " SELECT datpers.nombre as madre, dape.nombre as padre FROM sacramentados AS sacrament
                           LEFT JOIN persona AS person ON sacrament.Persona_idMadre = person.DatosPersona_idDatosPersona
                           LEFT JOIN datospersona AS datpers ON person.DatosPersona_idDatosPersona = datpers.idDatosPersona
                           LEFT JOIN persona AS perso on sacrament.Persona_idPadre = perso.DatosPersona_idDatosPersona
                           LEFT JOIN datospersona AS dape ON perso.DatosPersona_idDatosPersona = dape.idDatosPersona
                           where  sacrament.idDatosPersona = $idnoviaa";
                  
                                      $resultpadresnovia = mysqli_query($conn,$consultapadresnovia);
                                      $lineapadresnovia  = mysqli_fetch_array($resultpadresnovia);

                                 

       

       $madre = $lineapadres['madre'];
       $padre = $lineapadres['padre'];
       $libro = $linead['noLibro'];
       $folio = $linead['noFolio'];
       $noms = $linead['novio'];
       $nomnovia = $linead['novia'];
       $gensac = $linead['genero'];
       $obispo = $linead['obispo'];
       $generos = $linead['genero'];
       $fechanac = $linead['fechana'];
       $fechanovia = $linead['fnovia'];
       $lugnac = $linead['lugarNacimiento'];
       $lugnacnovia = $linead['lugnovia'];
       $padrinou = $linead['padrino1'];
       $generop1 = $linead['gpad1'];
       $catequista = $linead['catequista'];
       $padrinod = $linead['padrino2'];
       $generop2 = $linead['gpad2'];
       $margen = $linead['alMargen'];
       $suple = $linead['supletoria'];
       $sacerd = $linead['sacer'];
       $fechasac = $linead['fechasac'];

       $sacnombre = $lineasa['nombre'];
       $sactipo = $lineasa['tipoSacerdote'];
       
       $padrenovia = $lineapadresnovia['padre'];
       $madrenovia = $lineapadresnovia['madre'];

      // echo $nombrenombre;
           
       $separafn = explode("-",$fechanac);
       $aniofn = $separafn[0];
       $mesfn = $separafn[1];
       $diafn = $separafn[2];
//fecha nacimiento novia
       $separafnovia = explode("-",$fechanovia);
        $anion = $separafnovia[0];
        $mesn = $separafnovia[1];
        $dian = $separafnovia[2];



           $separasc = explode("-",$fechasac);
           $aniosc = $separasc[0];
           $messc = $separasc[1];
           $diasc = $separasc[2];

$nacimientomes = meses($mesfn);

$sacramentomes = meses($messc);


$hoy = getdate();
//print_r($hoy); 

$anioohoy = $hoy['year'];
$meshoy = $hoy['mon'];
$diahoy = $hoy['mday'];

         
// años novio 
          $restanovio = $anioohoy - $aniofn;
          if($meshoy > $mesfn){
               $aniosnovio = $restanovio;
          }else if($meshoy < $mesfn){
               $aniosnovio = $restanovio - 1;
          }else if ($meshoy = $mesfn){
               if($diahoy >= $diafn){
                    $aniosnovio = $restanovio;
               }else{
                    $aniosnovio = $restanovio - 1;
               }
          }

// años novia
            $restanovia = $anioohoy - $anion;
            if($meshoy > $mesn){
                $aniosnovia = $restanovia;
            }else if($meshoy < $mesn){
                $aniosnovia = $restanovia - 1;
            }else if ($meshoy = $mesn){
                if($diahoy >= $dian){
                    $aniosnovia = $restanovia;
                }else{
                    $aniosnovia = $restanovia - 1;
                }
            }
//echo $año;
//echo "-----";
//echo $mes;
//echo "-----";
//echo $dia;
//echo $generop1;
//echo $generop2;



class PDF extends FPDF
{
// Cabecera de página
function Header()
{
   // Logo
   $this->Image('../vistas/img/logo.png',37,20,50);//izquierda derecha/arriba abajo,tamaño
   $this->Image('../vistas/img/consmatrimonio.png',93,27,80);//izquierda derecha/arriba abajo,tamaño
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

$pdf->SetY(55);
$pdf->Cell(40,10,utf8_decode('El infrascrito párroco de la Parroquia Santo Cristo de Esquipulas,'));
$pdf->SetY(60);
$pdf->SetX(59);
$pdf->Cell(40,10,utf8_decode('Guastatoya, El Progreso, Certifica que en el libro'));
$pdf->SetY(65);
$pdf->SetX(90);
$pdf->Cell(40,10,utf8_decode('de Matrimonios:'));


$pdf->SetY(76); $pdf->Cell(16); $pdf->Cell(40,10,utf8_decode($libro));
$pdf->SetY(76); $pdf->Cell(48); $pdf->Cell(40,10,utf8_decode($folio));

$pdf->SetY(76);

$pdf->Cell(40,10,utf8_decode('No.__________Folio__________de esta Parroquia consta que:'));

//novio
$pdf->SetY(84);$pdf->Cell(2);$pdf->Cell(40,10,utf8_decode($noms));
$pdf->SetY(84);
$pdf->Cell(40,10,utf8_decode('___________________________________________________'));

$pdf->SetY(92);$pdf->Cell(8);$pdf->Cell(40,10,utf8_decode($aniosnovio));
$pdf->SetY(92);$pdf->Cell(54);$pdf->Cell(40,10,utf8_decode($lugnac));
$pdf->SetY(92);
$pdf->Cell(40,10,utf8_decode('de_____años, originario de:_____________________________'));



$pdf->SetY(100);
$pdf->Cell(40,10,utf8_decode('feligrés de esta Parroquia,'));

if (!empty($padre)){ $espacioun = $padre;}else{$espacioun = $madre;} 
$pdf->SetY(108);$pdf->Cell(33);$pdf->Cell(40,10,utf8_decode($espacioun));
$pdf->SetY(108);
$pdf->Cell(40,10,utf8_decode('hijo legitimo de:_______________________________________'));

if ($espacioun != $madre){
    if (!empty($madre)){$espaciodo = $madre ;}else{$espaciodo = "- - - - - - - - - - - -"; }
}else{$espaciodo = "- - - - - - - - - - - -";}
$pdf->SetY(116);$pdf->Cell(13);$pdf->Cell(40,10,utf8_decode($espaciodo));
$pdf->SetY(116);
$pdf->Cell(40,10,utf8_decode('y de:________________________________________________'));


//novia
$pdf->SetY(124);
$pdf->Cell(40,10,utf8_decode('contrajo matrimonio con:'));

$pdf->SetY(132);$pdf->Cell(3);$pdf->Cell(40,10,utf8_decode($nomnovia));
$pdf->SetY(132);
$pdf->Cell(40,10,utf8_decode('____________________________________________________'));


$pdf->SetY(140);$pdf->Cell(8);$pdf->Cell(40,10,utf8_decode($aniosnovia));
$pdf->SetY(140);$pdf->Cell(54);$pdf->Cell(40,10,utf8_decode($lugnacnovia));
$pdf->SetY(140);
$pdf->Cell(40,10,utf8_decode('de_____años, originaria de:______________________________'));

$pdf->SetY(148);
$pdf->Cell(48,10,utf8_decode('feligrés de esta Parroquia,'));

if (!empty($padrenovia)){ $espaciou = $padrenovia;}else{$espaciou = $madrenovia;} 

$pdf->SetY(156);$pdf->Cell(33);$pdf->Cell(40,10,utf8_decode($espaciou));
$pdf->SetY(156);
$pdf->Cell(40,10,utf8_decode('hija legitimo de:_______________________________________'));

if ($espaciou != $madrenovia){
    if (!empty($madrenovia)){$espaciod = $madrenovia ;}else{$espaciod = "- - - - - - - - - - - -"; }
}else{$espaciod = "- - - - - - - - - - - -";}

$pdf->SetY(164);$pdf->Cell(13);$pdf->Cell(40,10,utf8_decode($espaciod));
$pdf->SetY(164);
$pdf->Cell(40,10,utf8_decode('y de:________________________________________________'));


$pdf->SetY(172);
$pdf->Cell(40,10,utf8_decode('Presencio y bendijo el Matrimonio el Padre:'));
if(!empty($sacerd)){$espsacer = $sacerd;}else{$espsacer = "- - - - - - - - - - - -";}
$pdf->SetY(180);$pdf->Cell(3);$pdf->Cell(40,10,utf8_decode($espsacer));
$pdf->SetY(180);
$pdf->Cell(40,10,utf8_decode('____________________________________________________'));


if(!empty($fechasac)) { $diasac = $diasc; $sacramentovac = $sacramentomes; $aniosac=$aniosc; } 
                else { $diasac = "- - -"; $sacramentovac = "- - -"; $aniosac="- - -"; }
$pdf->SetY(188);$pdf->Cell(22); $pdf->Cell(40,10,utf8_decode($diasac));
$pdf->SetY(188);$pdf->Cell(63); $pdf->Cell(40,10,utf8_decode($sacramentovac));
$pdf->SetY(188);$pdf->Cell(104); $pdf->Cell(40,10,utf8_decode($aniosac));


$pdf->SetY(188);
$pdf->Cell(40,10,utf8_decode('el dia_____________de___________________del___________'));




$pdf->SetY(196);$pdf->Cell(47); $pdf->Cell(40,10,utf8_decode($padrinou));
$pdf->SetY(196);
$pdf->Cell(40,10,utf8_decode('habiendo sido testigos:_________________________________'));

if(!empty($padrinod)){$casillad = $padrinod;}else{$casillad = "- - - - - - - - - - - -";}
$pdf->SetY(204);$pdf->Cell(6); $pdf->Cell(40,10,utf8_decode($casillad));
$pdf->SetY(204);
$pdf->Cell(40,10,utf8_decode('y___________________________________________________'));








$pdf->SetY(220);
$pdf->Cell(18);
$pdf->Cell(40,10,utf8_decode('Guastatoya, '.$fechaformato));



$pdf->SetFont('Arial','',10);
// Número de página
$pdf->SetY(-52);
$pdf->SetX(109);
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

        $consu = "SELECT reg.idRegistro as idreg, reg.noLibro, reg.noFolio,reg.fechaSacramento as fechasac,reg.testimonioPersona,reg.edadSacramento, reg.edad,reg.feligresNovio,reg.feligresNovia, sac.fechaNacimiento as fechana,sac.lugarNacimiento ,dtp.nombre as catequista,
        sacra.nombreSacramentos as sacramento , sac.nombre as novio,sac.genero,sacs.idDatosPersona as idnovia,sacs.nombre as novia,sacs.lugarNacimiento as lugnovia,sacs.fechaNacimiento as fnovia,obi.nombre as obispo ,dper.nombre as padrino1,dpers.nombre as padrino2, dper.genero as gpad1, dpers.genero as gpad2,
        reg.alMargen, reg.supletoria,reg.Sacramentados_idDatosPersona as idsacra, dperso.nombre as sacer 
        from registro as reg
     
        LEFT JOIN sacramentados as sac on reg.Sacramentados_idDatosPersona =  sac.idDatosPersona
        LEFT JOIN sacramentados as sacs on reg.Sacramentados_idDatosPersonad =  sacs.idDatosPersona
        
        LEFT JOIN persona as perr on perr.idPersona = reg.Persona_idPersonaCat
        LEFT JOIN datospersona as dtp on dtp.idDatosPersona = perr.DatosPersona_idDatosPersona  
         
        LEFT JOIN persona as ob on reg.Persona_idPersonaOb = ob.idPersona
        LEFT JOIN datospersona as obi on ob.DatosPersona_idDatosPersona = obi.idDatosPersona
     
        LEFT JOIN persona as pers on reg.Persona_idPadrinouno = pers.idPersona
        LEFT JOIN datospersona as dper on pers.DatosPersona_idDatosPersona = dper.idDatosPersona
        
        LEFT JOIN persona as perso on reg.Persona_idPadrinodos = perso.idPersona
        LEFT JOIN datospersona as dpers on perso.DatosPersona_idDatosPersona = dpers.idDatosPersona
        
        LEFT JOIN sacramentos as sacra on reg.Sacramentos_idSacramentos = sacra.idSacramentos 
        
        LEFT JOIN persona as sas on reg.Persona_idPersonaSacerdote = sas.idPersona
        LEFT JOIN datospersona as dperso on sas.DatosPersona_idDatosPersona = dperso.idDatosPersona
        
        WHERE reg.idRegistro = $idregistro";
     
            $resul = mysqli_query($conn,$consu);
            $linead= mysqli_fetch_array($resul);
       
                  $idSacra = $linead['idsacra'];
                  $idnoviaa = $linead['idnovia'];
     
                    $consusac = "SELECT dper.nombre, per.tipoSacerdote from persona as per 
                     INNER JOIN datospersona as dper on per.DatosPersona_idDatosPersona = dper.idDatosPersona
                     WHERE per.idPersona = $sacerdote";
                     
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
                     
                                $consultapadresnovia = " SELECT datpers.nombre as madre, dape.nombre as padre FROM sacramentados AS sacrament
                                LEFT JOIN persona AS person ON sacrament.Persona_idMadre = person.DatosPersona_idDatosPersona
                                LEFT JOIN datospersona AS datpers ON person.DatosPersona_idDatosPersona = datpers.idDatosPersona
                                LEFT JOIN persona AS perso on sacrament.Persona_idPadre = perso.DatosPersona_idDatosPersona
                                LEFT JOIN datospersona AS dape ON perso.DatosPersona_idDatosPersona = dape.idDatosPersona
                                where  sacrament.idDatosPersona = $idnoviaa";
                       
                                           $resultpadresnovia = mysqli_query($conn,$consultapadresnovia);
                                           $lineapadresnovia  = mysqli_fetch_array($resultpadresnovia);
     
                                      
     
            
     
            $madre = $lineapadres['madre'];
            $padre = $lineapadres['padre'];
            $libro = $linead['noLibro'];
            $folio = $linead['noFolio'];
            $noms = $linead['novio'];
            $edadnovio = $linead['edadSacramento'];
            $nomnovia = $linead['novia'];
            $edadnovia = $linead['edad'];
            $testigo = $linead['testimonioPersona'];
            $felnovio = $linead['feligresNovio'];
            $felnovia = $linead['feligresNovia'];
            $gensac = $linead['genero'];
            $obispo = $linead['obispo'];
            $generos = $linead['genero'];
            $fechanac = $linead['fechana'];
            $fechanovia = $linead['fnovia'];
            $lugnac = $linead['lugarNacimiento'];
            $lugnacnovia = $linead['lugnovia'];
            $padrinou = $linead['padrino1'];
            $generop1 = $linead['gpad1'];
            $catequista = $linead['catequista'];
            $padrinod = $linead['padrino2'];
            $generop2 = $linead['gpad2'];
            $margen = $linead['alMargen'];
            $suple = $linead['supletoria'];
            $sacerd = $linead['sacer'];
            $fechasac = $linead['fechasac'];
     
            $sacnombre = $lineasa['nombre'];
            $sactipo = $lineasa['tipoSacerdote'];
            
            $padrenovia = $lineapadresnovia['padre'];
            $madrenovia = $lineapadresnovia['madre'];
     
           // echo $nombrenombre;
                
            $separafn = explode("-",$fechanac);
            $aniofn = $separafn[0];
            $mesfn = $separafn[1];
            $diafn = $separafn[2];
     //fecha nacimiento novia
            $separafnovia = explode("-",$fechanovia);
             $anion = $separafnovia[0];
             $mesn = $separafnovia[1];
             $dian = $separafnovia[2];
     
     
     
                $separasc = explode("-",$fechasac);
                $aniosc = $separasc[0];
                $messc = $separasc[1];
                $diasc = $separasc[2];
     
     $nacimientomes = meses($mesfn);
     
     $sacramentomes = meses($messc);
     
     
     $hoy = getdate();
     //print_r($hoy); 
     
     $anioohoy = $hoy['year'];
     $meshoy = $hoy['mon'];
     $diahoy = $hoy['mday'];
     
              
    
           
       
       //echo $generop1;
       //echo $generop2;
       
       
       
       class PDF extends FPDF
       {
       // Cabecera de página
       function Header()
       {
           // Logo
           $this->Image('../vistas/img/logo.png',37,20,50);//izquierda derecha/arriba abajo,tamaño
           $this->Image('../vistas/img/supmatrimonio.png',93,27,80);//izquierda derecha/arriba abajo,tamaño
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

       $pdf->SetY(50); $pdf->SetX(70); $pdf->Cell(40,10,utf8_decode($libro));
       $pdf->SetY(50); $pdf->SetX(101); $pdf->Cell(40,10,utf8_decode($folio));
       $pdf->SetY(50); $pdf->SetX(148); $pdf->Cell(40,10,utf8_decode($suple));
       $pdf->SetY(50);
       $pdf->SetX(47);
       $pdf->Cell(40,10,utf8_decode('Libro No.________ Folio.________ Supletoria No.________'));
       $pdf->setX(44);
       $pdf->setY(60);
       $pdf->MultiCell(0,5,utf8_decode('El infrascrito párroco de la Parroquia Santo Cristo de Esuipulas, Guastatoya, El Progreso, hace constar que, despues de buscar diligentemente en el archivo respectivo y al no encontrarse el certificado de MATRIMONIO, hace constar que:'));
       $pdf->SetY(80);
       $pdf->SetX(54);
       $pdf->Cell(40,10,utf8_decode('En la Iglesia Parroquial del Santo Cristo de Esquipulas,'));
       $pdf->SetY(85);
       $pdf->SetX(83);
       $pdf->Cell(40,10,utf8_decode('Guastatoya, El Progreso'));


       if(!empty($fechasac)) { $diasac = $diasc; $sacramentovac = $sacramentomes; $aniosac=$aniosc; } 
       else { $diasac = "- - -"; $sacramentovac = "- - -"; $aniosac="- - -"; }
       $pdf->SetY(93);$pdf->Cell(17); $pdf->Cell(40,10,utf8_decode($diasac));
       $pdf->SetY(93);$pdf->Cell(41); $pdf->Cell(40,10,utf8_decode($sacramentovac));
       $pdf->SetY(93);$pdf->Cell(77); $pdf->Cell(40,10,utf8_decode($aniosac));
               
       $pdf->SetY(93);
       $pdf->Cell(40,10,utf8_decode('el dia_________de_____________de_________, se celebró el'));
       $pdf->SetY(101);
       $pdf->Cell(40,10,utf8_decode('Matrimonio, en presencia del padre:'));

       $pdf->SetY(109);$pdf->Cell(3); $pdf->Cell(40,10,utf8_decode($sacerd));
       $pdf->SetY(109);
       $pdf->Cell(40,10,utf8_decode('___________________________________________________'));

      
       $pdf->SetY(117);$pdf->Cell(35); $pdf->Cell(40,10,utf8_decode($padrinou));
       $pdf->SetY(117);
       $pdf->Cell(40,10,utf8_decode('ante los testigos______________________________________'));

       if(!empty($padrinod)){$casillados = $padrinod;}else{$casillados = "- - - - - - - - - - - -";}
       $pdf->SetY(125);$pdf->Cell(6); $pdf->Cell(40,10,utf8_decode($casillados));
       $pdf->SetY(125);
       $pdf->Cell(40,10,utf8_decode('y___________________________________________________'));

       $pdf->SetY(133);$pdf->Cell(35); $pdf->Cell(40,10,utf8_decode($noms));
       $pdf->SetY(133);
       $pdf->Cell(40,10,utf8_decode('Contrajo el señor______________________________________'));

       $pdf->SetY(141);$pdf->Cell(8);$pdf->Cell(40,10,utf8_decode($edadnovio));
       $pdf->SetY(141);$pdf->Cell(54);$pdf->Cell(40,10,utf8_decode($lugnac));
       $pdf->SetY(141);
       $pdf->Cell(40,10,utf8_decode('de_____años, originario de:_____________________________,'));

       $pdf->SetY(149);$pdf->Cell(23);$pdf->Cell(40,10,utf8_decode($felnovio));
       $pdf->SetY(149);
       $pdf->Cell(40,10,utf8_decode('feligrés de___________________________________________'));


       if (!empty($padre)){ $espaciou = $padre;}else{$espaciou = $madre;} 

       $pdf->SetY(157);$pdf->Cell(16);$pdf->Cell(40,10,utf8_decode($espaciou));
       $pdf->SetY(157);
       $pdf->Cell(40,10,utf8_decode('hijo de______________________________________________'));
       
       if ($espaciou != $madre){
           if (!empty($madre)){$espaciod = $madre ;}else{$espaciod = "- - - - - - - - - - - -"; }
       }else{$espaciod = "- - - - - - - - - - - -";}
       
       $pdf->SetY(165);$pdf->Cell(13);$pdf->Cell(40,10,utf8_decode($espaciod));
       $pdf->SetY(165);
       $pdf->Cell(40,10,utf8_decode('y de________________________________________________'));
       




       //novia

       $pdf->SetY(173);$pdf->Cell(35); $pdf->Cell(40,10,utf8_decode($nomnovia));
       $pdf->SetY(173);
       $pdf->Cell(40,10,utf8_decode('Con la señorita_______________________________________'));

       $pdf->SetY(181);$pdf->Cell(8);$pdf->Cell(40,10,utf8_decode($edadnovia));
       $pdf->SetY(181);$pdf->Cell(54);$pdf->Cell(40,10,utf8_decode($lugnacnovia));
       $pdf->SetY(181);
       $pdf->Cell(40,10,utf8_decode('de_____años, originaria de:_____________________________,'));

       $pdf->SetY(189);$pdf->Cell(23);$pdf->Cell(40,10,utf8_decode($felnovia));
       $pdf->SetY(189);
       $pdf->Cell(40,10,utf8_decode('feligrés de___________________________________________'));


       if (!empty($padrenovia)){ $espacioun = $padrenovia;}else{$espacioun = $madrenovia;} 

       $pdf->SetY(197);$pdf->Cell(16);$pdf->Cell(40,10,utf8_decode($espacioun));
       $pdf->SetY(197);
       $pdf->Cell(40,10,utf8_decode('hija de______________________________________________'));
       
       if ($espacioun != $madrenovia){
           if (!empty($madrenovia)){$espaciodo = $madrenovia ;}else{$espaciodo = "- - - - - - - - - - - -"; }
       }else{$espaciod = "- - - - - - - - - - - -";}
       
       $pdf->SetY(205);$pdf->Cell(13);$pdf->Cell(40,10,utf8_decode($espaciodo));
       $pdf->SetY(205);
       $pdf->Cell(40,10,utf8_decode('y de________________________________________________'));

       if(!empty($testigo)){$esptest = $testigo;}else{$esptest = "- - - - - - - - - - - -";}
       $pdf->SetY(213);$pdf->Cell(51);$pdf->Cell(40,10,utf8_decode($testigo));
       $pdf->SetY(213);
       $pdf->Cell(40,10,utf8_decode('Se procedió a testimoniar_______________________________'));
       

       /*
      
       
       $pdf->SetY(96);$pdf->Cell(2);$pdf->Cell(40,10,utf8_decode($noms));
       $pdf->SetY(96);
       $pdf->Cell(40,10,utf8_decode('___________________________________________________'));
       

       if(!empty($fechanac)) { $diavac = $diafn; $nacimientovac = $nacimientomes; $aniovac=$aniofn; } 
        else { $diavac = "- - -"; $nacimientovac = "- - -"; $aniovac="- - -"; }
            $pdf->SetY(104);$pdf->Cell(25); $pdf->Cell(40,10,utf8_decode($diavac));
            $pdf->SetY(104);$pdf->Cell(60); $pdf->Cell(40,10,utf8_decode($nacimientovac));
            $pdf->SetY(104);$pdf->Cell(104); $pdf->Cell(40,10,utf8_decode($aniovac));
            $pdf->SetY(104);
            $pdf->Cell(40,10,utf8_decode('nació el___________de____________________de__________'));

             if(!empty($lugnac)){$lugnacv = $lugnac; }else{$lugnacv = "--------------"; }
       $pdf->SetY(112);$pdf->Cell(35);$pdf->Cell(40,10,utf8_decode($lugnacv));
       $pdf->SetY(112);
       
       $pdf->Cell(40,10,utf8_decode('Originario(a) de_______________________________________'));

       if(!empty($lugvive)){$lugvivev = $lugvive; }else{$lugvivev = "--------------"; }
       $pdf->SetY(120);$pdf->Cell(28);$pdf->Cell(40,10,utf8_decode($lugvivev));
       $pdf->SetY(120);
       
       $pdf->Cell(40,10,utf8_decode('Vecino(a) de_________________________________________'));
/*
      
     
       
       $pdf->SetY(108);$pdf->Cell(43); $pdf->Cell(40,10,utf8_decode($sacerd));
       $pdf->SetY(108);
       $pdf->Cell(40,10,utf8_decode('Celebró el Sacerdote__________________________________'));
       
       $pdf->SetY(116);$pdf->Cell(50); $pdf->Cell(40,10,utf8_decode($catequista));
       $pdf->SetY(116);
       $pdf->Cell(40,10,utf8_decode('Catequista Responsable_______________________________'));
       
       */
       $pdf->SetY(221);
       $pdf->Cell(18);
       $pdf->Cell(40,10,utf8_decode('Guastatoya, '.$fechaformato));
       
       
       
       $pdf->SetFont('Arial','',10);
       // Número de página
       $pdf->SetY(-52);
       $pdf->SetX(109);
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


       }
   }else{
       echo "<script> 
       alert('Error! debe especificar el Sacerdote encargado.'); 
       window.location.href='../vistas/principalmatrimonio.php'; 
       </script>"; 
   }


    ?>