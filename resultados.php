<?php

$pregunta1 = $_POST['preguntauno'];
$pregunta2 = $_POST['preguntados'];
$pregunta3 = $_POST['preguntatres'];
$pregunta4 = $_POST['preguntacuatro'];

if(($pregunta1 == "f") && ($pregunta2 == "f") && ($pregunta3 == "f") && ($pregunta4 == "v")){
    $datos;
    $n=-1;
    $myfile= fopen("users.txt","r");
    while (!feof($myfile)){
        $luser=explode(";",fgets($myfile));
        if(strcmp($luser[0],$_POST['usuario'])==0){
            $n=$n+1;
            $datos[$n]=$luser[0].";".$luser[1].";apto";
        }else{
            $n=$n+1;
            $datos[$n]=$luser[0].";".$luser[1].";".$luser[2];
        }
    }
    fclose( $myfile);
    $myfile= fopen("users.txt","w");
    for ($i=0;$i<count($datos);$i++){
        if($i==0){
            fwrite($myfile, $datos[$i].";");
        }else{
            fwrite($myfile, "\n".$datos[$i].";");
        }
    }
    fclose( $myfile);
    header("Location:apto.php");
}else{
    $datos;
    $n=-1;
    $myfile= fopen("users.txt","r");
    while (!feof($myfile)){
        $luser=explode(";",fgets($myfile));
        if(strcmp($luser[0],$_POST['usuario'])==0){
            $n=$n+1;
            $datos[$n]=$luser[0].";".$luser[1].";noapto";
        }else{
            $n=$n+1;
            $datos[$n]=$luser[0].";".$luser[1].";".$luser[2];
        }
    }
    fclose( $myfile);
    $myfile= fopen("users.txt","w");
    for ($i=0;$i<count($datos);$i++){
        if($i==0){
            fwrite($myfile, $datos[$i].";");
        }else{
            fwrite($myfile, "\n".$datos[$i].";");
        }
    }
    fclose( $myfile);
    header("Location:noapto.php");
}
?>