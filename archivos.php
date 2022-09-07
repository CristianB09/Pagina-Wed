<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>confirmacion</title>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    
    <body>


<?php
if(isset($_GET['usuario']) && isset($_GET['contra'])){
    function write(){
    }
    function read($u,$c){
        $myfile=fopen("admins.txt","r");
        while(!feof($myfile)){
            $luser=explode(";",fgets($myfile));
            if(strcmp($luser[0],$u)==0 && strcmp($luser[1],$c)==0){
                echo "<h1>Bienvenido ".$luser[0]."</n1>";
                header ("location:admin.php");
            }
    }
    $myfile=fopen("users.txt","r");
    while(!feof($myfile)){
        $luser=explode(";",fgets($myfile));
        if(strcmp($luser[0],$u)==0 && strcmp($luser[1],$c)==0){
            if($luser[2]=="apto"){
                header ("location:formulario.php");
            }else{
                header ("location:noapto.php"); 
            }
        }
    }

    echo"<main class='container'>";
    echo"<div class='bg-light p-5 rounded mt-3'>";
    echo"<h1>Error al iniciar sesión</h1>";
    echo"<p class='lead'>Se a producido un error al iniciar sesión, por favor verifique su usuario y/o contraseña.</p>";
    echo"<a class='btn btn-lg btn-danger' href='index.html' role='button'>Volver a iniciar sesión</a>";
    echo"</div>";
    echo"</main>";
}
read($_GET['usuario'],$_GET['contra']);
}
?>
</body>
</html>