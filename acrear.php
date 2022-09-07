<?php
if(isset($_GET['aenvio'])){

    if(strcmp($_GET['aenvio'],"acrear")==0){

        if(isset($_GET['anuser']) && isset($_GET['anpass'])){

            $myfile= fopen("admins.txt","a");
            fwrite($myfile,"\n adm".$_GET['anuser'].";".$_GET['anpass'].";");
            fclose($myfile);
            header ("location:admin.php");
        }
    }
}
if(isset($_GET['amodificar'])){
    $datos;
    $n=-1;
    $myfile= fopen("admins.txt","r");
    while (!feof($myfile)){
        $luser=explode(";",fgets($myfile));
        if(strcmp($luser[0],$_GET['antemp'])==0){
            $n=$n+1;
            $datos[$n]="adm".$_GET['anuser'].";".$_GET['anpass'];
        }else{
            $n=$n+1;
            $datos[$n]=$luser[0].";".$luser[1];
        }
    }
    fclose( $myfile);
    $myfile= fopen("admins.txt","w");
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