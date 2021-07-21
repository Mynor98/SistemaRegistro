<?php
     include '../modelos/conector.php';      
     include '../modelos/meses.php';

    $idbautizo = $_POST['idbautizo'];
    $idsacerdote = $_POST['sacerdote'];

    $consu = "SELECT reg.idRegistro as idreg, reg.noLibro, reg.noFolio,reg.fechaSacramento, 
    sacra.nombreSacramentos as sacramento , sac.nombre,sac.genero,dper.nombre as padrino1,dpers.nombre as padrino2,
    reg.alMargen, reg.supletoria, dperso.nombre as sacer from registro as reg
    LEFT JOIN sacramentados as sac on reg.Sacramentados_idDatosPersona =  sac.idDatosPersona
    
    LEFT JOIN persona as pers on reg.Persona_idPadrinouno = pers.idPersona
    LEFT JOIN datospersona as dper on pers.DatosPersona_idDatosPersona = dper.idDatosPersona
    
    LEFT JOIN persona as perso on reg.Persona_idPadrinodos = perso.idPersona
    LEFT JOIN datospersona as dpers on perso.DatosPersona_idDatosPersona = dpers.idDatosPersona
    
    LEFT JOIN sacramentos as sacra on reg.Sacramentos_idSacramentos = sacra.idSacramentos 
    
    LEFT JOIN persona as sas on reg.Persona_idPersonaSacerdote = sas.idPersona
    LEFT JOIN datospersona as dperso on sas.DatosPersona_idDatosPersona = dperso.idDatosPersona
    
    WHERE reg.Sacramentos_idSacramentos = 1";


                $consusac = "SELECT dper.nombre from persona as per 
                 INNER JOIN datospersona as dper on per.DatosPersona_idDatosPersona = dper.idDatosPersona
                 WHERE per.idPersona = $idsacerdote ";

         $result = mysqli_query($conn,$consusac);
         $linea  = mysqli_fetch_array($result);

            $resul = mysqli_query($conn,$consu);
            $linead= mysqli_fetch_array($resul);


        $libro = $linead['noLibro'];
        $folio = $linead['noFolio'];
        $noms = $linead['nombre'];
        $generos = $linead['genero'];
        $padrinou = $linead['padrino1'];
        $padrinod = $linead['padrino2'];
        $margen = $linead['alMargen'];
        $suple = $linead['supletoria'];
        $sacerd = $linead['sacer'];
        $fecha = $linead['fechaSacramento'];

        $sacerdotefirma = $linea['nombre'];

        echo $libro;
        echo "-----";
        echo $folio;
        echo "-----";
        echo $noms;
        echo "-----";
        echo $generos;
        echo "-----";
        echo $padrinou;
        echo "-----";
        echo $padrinod;
        echo "-----";
        echo $margen;
        echo "-----";
        echo $suple;
        echo "-----";
        echo $sacerd;
        echo "-----";
        echo $fecha;    
        echo "-----";
        echo $sacerdotefirma;

        
$separa = explode("-",$fecha);
$anio = $separa[0];
$mes = $separa[1];
$dia = $separa[2];

echo "año ".$anio;
echo "----";
echo "mes:".$mes;
echo "----";
echo "dia: ".$dia;
echo "----";



$palabra = meses($mes);

echo $palabra;


?>