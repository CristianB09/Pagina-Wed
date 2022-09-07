<?php
if(isset($_GET['envio'])){

    if(strcmp($_GET['envio'],"crear")==0){

        if(isset($_GET['nuser']) && isset($_GET['npass'])){

            $myfile= fopen("users.txt","a");
            fwrite($myfile,"\n".$_GET['nuser'].";".$_GET['npass'].";apto;");
            fclose($myfile);
            header ("location:admin.php");
        }
    }
}
if(isset($_GET['modificar'])){
    $datos;
    $n=-1;
    $myfile= fopen("users.txt","r");
    while (!feof($myfile)){
        $luser=explode(";",fgets($myfile));
        if(strcmp($luser[0],$_GET['ntemp'])==0){
            $n=$n+1;
            $datos[$n]=$_GET['nuser'].";".$_GET['npass'].";".$luser[2];
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
    header("Location:admin.php");
    }
    ?>