<?php
     include '../modelos/conector.php';        
     include '../modelos/meses.php';
     require('fpdf/fpdf.php');


     $idcomunion = $_POST['idcomunion'];
     $sacerdote = $_POST['sacerdote'];
/*
     echo $idcomunion;
     echo "-------";
     echo $sacerdote;
*/


     $diassemana = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
     $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
      
    $fechaformato =$diassemana[date('w')]." ".date('d')." de ".$meses[date('n')-1]. " del ".date('Y');
     
    
   
    if(!empty($sacerdote)){
    $registroc = "SELECT supletoria FROM registro WHERE idRegistro = $idcomunion ";
    
         $registroresultado = mysqli_query($conn,$registroc);
         $liner  = mysqli_fetch_array($registroresultado);

         $supletoriaid = $liner['supletoria'];


        if($supletoriaid == 0){


    $consu = "SELECT reg.idRegistro as idreg, reg.noLibro, reg.noFolio,reg.fechaSacramento as fechasac, sac.fechaNacimiento as fechana,sac.lugarNacimiento ,dtp.nombre as catequista,
    sacra.nombreSacramentos as sacramento , sac.nombre,sac.genero,dper.nombre as padrino1,dpers.nombre as padrino2, dper.genero as gpad1, dpers.genero as gpad2,
    reg.alMargen, reg.supletoria,reg.Sacramentados_idDatosPersona as idsacra, dperso.nombre as sacer from registro as reg
    LEFT JOIN sacramentados as sac on reg.Sacramentados_idDatosPersona =  sac.idDatosPersona
    
    LEFT JOIN persona as perr on perr.idPersona = reg.Persona_idPersonaCat
    LEFT JOIN datospersona as dtp on dtp.idDatosPersona = perr.DatosPersona_idDatosPersona  

    LEFT JOIN persona as pers on reg.Persona_idPadrinouno = pers.idPersona
    LEFT JOIN datospersona as dper on pers.DatosPersona_idDatosPersona = dper.idDatosPersona
    
    LEFT JOIN persona as perso on reg.Persona_idPadrinodos = perso.idPersona
    LEFT JOIN datospersona as dpers on perso.DatosPersona_idDatosPersona = dpers.idDatosPersona
    
    LEFT JOIN sacramentos as sacra on reg.Sacramentos_idSacramentos = sacra.idSacramentos 
    
    LEFT JOIN persona as sas on reg.Persona_idPersonaSacerdote = sas.idPersona
    LEFT JOIN datospersona as dperso on sas.DatosPersona_idDatosPersona = dperso.idDatosPersona
    
    WHERE reg.idRegistro = $idcomunion";

        $resul = mysqli_query($conn,$consu);
        $linead= mysqli_fetch_array($resul);
   
              $idSacra = $linead['idsacra'];

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

                                  

        

        $madre = $lineapadres['madre'];
        $padre = $lineapadres['padre'];
        $libro = $linead['noLibro'];
        $folio = $linead['noFolio'];
        $noms = $linead['nombre'];
        $generos = $linead['genero'];
        $fechanac = $linead['fechana'];
        $lugnac = $linead['lugarNacimiento'];
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
    $this->Image('../vistas/img/actacomunion.png',93,27,80);//izquierda derecha/arriba abajo,tamaño
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
$pdf->SetX(79);
$pdf->Cell(40,10,utf8_decode('de Primeras Comuniones:'));


$pdf->SetY(76); $pdf->Cell(16); $pdf->Cell(40,10,utf8_decode($libro));
$pdf->SetY(76); $pdf->Cell(48); $pdf->Cell(40,10,utf8_decode($folio));

$pdf->SetY(76);

$pdf->Cell(40,10,utf8_decode('No.__________Folio__________de esta Parroquia consta que:'));
$pdf->SetY(84);$pdf->Cell(2);$pdf->Cell(40,10,utf8_decode($noms));
$pdf->SetY(84);

$pdf->Cell(40,10,utf8_decode('___________________________________________________'));


$pdf->SetY(92);$pdf->Cell(33);$pdf->Cell(40,10,utf8_decode($lugnac));
$pdf->SetY(92);

$pdf->Cell(40,10,utf8_decode('Originario(a) de_______________________________________'));





if(!empty($fechanac)) { $diavac = $diafn; $nacimientovac = $nacimientomes; $aniovac=$aniofn; } 
                 else { $diavac = "- - -"; $nacimientovac = "- - -"; $aniovac="- - -"; }
$pdf->SetY(100);$pdf->Cell(25); $pdf->Cell(40,10,utf8_decode($diavac));
$pdf->SetY(100);$pdf->Cell(60); $pdf->Cell(40,10,utf8_decode($nacimientovac));
$pdf->SetY(100);$pdf->Cell(104); $pdf->Cell(40,10,utf8_decode($aniovac));
$pdf->SetY(100);
$pdf->Cell(40,10,utf8_decode('nacido el__________de____________________de__________'));



if (!empty($padre)){ $espacioun = $padre;}else{$espacioun = $madre;}
$pdf->SetY(108);$pdf->Cell(16);$pdf->Cell(40,10,utf8_decode($espacioun));
$pdf->SetY(108);
$pdf->Cell(40,10,utf8_decode('hijo de______________________________________________'));

if ($espacioun == $madre){
    $espaciodo = "- - - - - - - - - - - -";
}else{$espaciodo = $madre ;}
$pdf->SetY(116);$pdf->Cell(13);$pdf->Cell(40,10,utf8_decode($espaciodo));
$pdf->SetY(116);
$pdf->Cell(40,10,utf8_decode('y de________________________________________________'));


$pdf->SetY(124);
$pdf->Cell(40,10,utf8_decode('Recibió por primera vez la Santa Comunión en esta Parroquia:'));

if(!empty($fechasac)) { $diasac = $diasc; $sacramentovac = $sacramentomes; $aniosac=$aniosc; } 
                 else { $diasac = "- - -"; $sacramentovac = "- - -"; $aniosac="- - -"; }
$pdf->SetY(132);$pdf->Cell(22); $pdf->Cell(40,10,utf8_decode($diasac));
$pdf->SetY(132);$pdf->Cell(60); $pdf->Cell(40,10,utf8_decode($sacramentovac));
$pdf->SetY(132);$pdf->Cell(104); $pdf->Cell(40,10,utf8_decode($aniosac));

$pdf->SetY(132);
$pdf->Cell(40,10,utf8_decode('El dia____________de___________________del___________'));

if(!empty($sacnombre)){$espsac = $sacnombre;}else{$espsac = "- - - - - - - - - - - -";}
$pdf->SetY(140);$pdf->Cell(40); $pdf->Cell(40,10,utf8_decode($espsac));
$pdf->SetY(140);
$pdf->Cell(40,10,utf8_decode('Firma el Sacerdote____________________________________'));

if(!empty($catequista)){$espcat = $catequista;}else{$espcat = "- - - - - - - - - - - -";}
$pdf->SetY(148);$pdf->Cell(50); $pdf->Cell(40,10,utf8_decode($espcat));
$pdf->SetY(148);
$pdf->Cell(40,10,utf8_decode('Catequista Responsable________________________________'));


$pdf->SetY(190);
$pdf->Cell(31);
$pdf->Cell(40,10,utf8_decode($fechaformato));



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
                
            $consu = "SELECT reg.idRegistro as idreg, reg.noLibro, reg.noFolio,reg.fechaSacramento as fechasac, sac.fechaNacimiento as fechana,sac.lugarNacimiento ,dtp.nombre as catequista,
            sacra.nombreSacramentos as sacramento , sac.nombre,sac.genero,dper.nombre as padrino1,dpers.nombre as padrino2, dper.genero as gpad1, dpers.genero as gpad2,
            reg.alMargen, reg.supletoria,reg.Sacramentados_idDatosPersona as idsacra, dperso.nombre as sacer from registro as reg
            LEFT JOIN sacramentados as sac on reg.Sacramentados_idDatosPersona =  sac.idDatosPersona
            
            LEFT JOIN persona as perr on perr.idPersona = reg.Persona_idPersonaCat
            LEFT JOIN datospersona as dtp on dtp.idDatosPersona = perr.DatosPersona_idDatosPersona  
        
            LEFT JOIN persona as pers on reg.Persona_idPadrinouno = pers.idPersona
            LEFT JOIN datospersona as dper on pers.DatosPersona_idDatosPersona = dper.idDatosPersona
            
            LEFT JOIN persona as perso on reg.Persona_idPadrinodos = perso.idPersona
            LEFT JOIN datospersona as dpers on perso.DatosPersona_idDatosPersona = dpers.idDatosPersona
            
            LEFT JOIN sacramentos as sacra on reg.Sacramentos_idSacramentos = sacra.idSacramentos 
            
            LEFT JOIN persona as sas on reg.Persona_idPersonaSacerdote = sas.idPersona
            LEFT JOIN datospersona as dperso on sas.DatosPersona_idDatosPersona = dperso.idDatosPersona
            
            WHERE reg.idRegistro = $idcomunion";
        
                $resul = mysqli_query($conn,$consu);
                $linead= mysqli_fetch_array($resul);
           
                      $idSacra = $linead['idsacra'];
      
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
        
                                          
        
                
        
                $madre = $lineapadres['madre'];
                $padre = $lineapadres['padre'];
               
                $libro = $linead['noLibro'];
                $folio = $linead['noFolio'];
                $noms = $linead['nombre'];
                $generos = $linead['genero'];
                $fechanac = $linead['fechana'];
                $lugnac = $linead['lugarNacimiento'];
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
            $this->Image('../vistas/img/supletoriacomunion.png',93,27,80);//izquierda derecha/arriba abajo,tamaño
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
        $pdf->setX(44);
        $pdf->MultiCell(0,5,utf8_decode('El infrascrito párroco de la Parroquia Santo Cristo de Esuipulas, Guastatoya, El Progreso, hace constar que, despues de buscar diligentemente en el archivo respectivo y al no encontrarse el certificado de PRIMERA COMUNION, se extiende la siguiente constancia:'));
        
        
        
        $pdf->SetY(84);$pdf->Cell(2);$pdf->Cell(40,10,utf8_decode($noms));
        $pdf->SetY(84);
        
        $pdf->Cell(40,10,utf8_decode('___________________________________________________'));
        
        if(!empty($fechasac)) { $diasac = $diasc; $sacramentovac = $sacramentomes; $aniosac=$aniosc; } 
        else { $diasac = "- - -"; $sacramentovac = "- - -"; $aniosac="- - -"; }
        $pdf->SetY(100);$pdf->Cell(17); $pdf->Cell(40,10,utf8_decode($diasac));
        $pdf->SetY(100);$pdf->Cell(37); $pdf->Cell(40,10,utf8_decode($sacramentovac));
        $pdf->SetY(100);$pdf->Cell(70); $pdf->Cell(40,10,utf8_decode($aniosac));
                
        $pdf->SetY(92);
        $pdf->Cell(40,10,utf8_decode('Asegura haber recibido por promera vez la Santa Comunión,'));
        $pdf->SetY(100);
        $pdf->Cell(40,10,utf8_decode('el dia________de____________de_______, en esta Parroquia.'));
      
        if(!empty($sacerd)){$saceresp = $sacerd;}else{$saceresp = "- - - - - - - - - - - -";}
        $pdf->SetY(108);$pdf->Cell(43); $pdf->Cell(40,10,utf8_decode($saceresp));
        $pdf->SetY(108);
        $pdf->Cell(40,10,utf8_decode('Celebró el Sacerdote__________________________________'));
        
        if(!empty($catequista)){$catesp = $catequista;}else{$catesp = "- - - - - - - - - - - -";}
        $pdf->SetY(116);$pdf->Cell(50); $pdf->Cell(40,10,utf8_decode($catesp));
        $pdf->SetY(116);
        $pdf->Cell(40,10,utf8_decode('Catequista Responsable_______________________________'));
        
        
        $pdf->SetY(190);
        $pdf->Cell(31);
        $pdf->Cell(40,10,utf8_decode($fechaformato));
        
        
        
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
        window.location.href='../vistas/principalcomunion.php'; 
        </script>"; 
    }
    
?>