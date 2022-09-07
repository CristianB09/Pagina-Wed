<!--pagina administrar usuarios-->
<!DOCTYPE html>
<html lang="en">
<head>
    <!--modificacion y eliminacion de datos usuario-->
    <script>
    //metodo asincrono
    function eliminar(eli){
        window.open("admin.php?eliminar="+eli, "_self");
    }
    function modificar(u,p){
        document.getElementById("us").value = u;
        document.getElementById("vt").value = u;
        document.getElementById("ps").value = p;
        document.getElementById("crud").innerHTML = "Modificar Usuario";
        document.getElementById("env").disabled = true;
        document.getElementById("mod").disabled = false;
    }
    </script>
    <!--fin modificacion y eliminacion de datos usuario-->
    
    <!--modificacion y eliminacion de datos administradores-->
    <script>
    //metodo asincrono
    function aeliminar(aeli){
        window.open("admin.php?aeliminar="+aeli, "_self");
        }
        function uapto(app){
        window.open("admin.php?uapto="+app, "_self");
        }
        function unapto(nap){
        window.open("admin.php?unapto="+nap, "_self");
        }
        function amodificar(au,ap){
            document.getElementById("aus").value = au;
            document.getElementById("avt").value = au;
            document.getElementById("aps").value = ap;
            document.getElementById("acrud").innerHTML = "Modificar Administrador";
            document.getElementById("aenv").disabled = true;
            document.getElementById("amod").disabled = false;
            }
    </script>
    <!--fin modificacion y eliminacion de datos administradores-->

    <!--configuracion basica - css - bootstrap-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<!--fin configuracion basica - css - bootstrap-->

<body>
    <br>
    <!--proceso de eliminacion de datos usuario-->
    <?php
    error_reporting(0);
    if(isset($_GET['eliminar'])){
        $datos;
        $n=-1;
        $myfile= fopen("users.txt","r");
        while (!feof($myfile)){
            $luser=explode(";",fgets($myfile));
            if(strcmp($luser[0],$_GET['eliminar'])!=0){
                $n=$n+1;
                $datos[$n]=$luser[0].";".$luser[1].";".$luser[2];
            }
        }
        fclose( $myfile);
        $myfile= fopen("users.txt","w");
        if($datos!=null){
            for ($i=0;$i<count($datos);$i++){
                if($i==0){
                    fwrite($myfile, $datos[$i].";");
                }
                else{
                    fwrite($myfile, "\n".$datos[$i].";");
                }
            }
            fclose( $myfile);
        }else{
            $luser[0]="uspre";
            $luser[1]="00000";
            $luser[2]="apto";
            $n=$n+1;
            $datos[$n]=$luser[0].";".$luser[1].";".$luser[2];
            for ($i=0;$i<count($datos);$i++){
                if($i==0){
                    fwrite($myfile, $datos[$i].";");
                }else{
                    fwrite($myfile, "\n".$datos[$i].";");
                }
            }
            fclose( $myfile);
        }
    }
    ?>
    <!--fin proceso de eliminacion de datos-->

    <!--proceso de eliminacion de datos administrador-->
    <?php
    error_reporting(0);
    if(isset($_GET['aeliminar'])){
        $adatos;
        $an=-1;
        $myfile= fopen("admins.txt","r");
        while (!feof($myfile)){
            $luser=explode(";",fgets($myfile));
            if(strcmp($luser[0],$_GET['aeliminar'])!=0){
                $an=$an+1;
                $adatos[$an]=$luser[0].";".$luser[1];
            }
        }
        fclose( $myfile);
        $myfile= fopen("admins.txt","w");
        if($adatos!=null){
            for ($i=0;$i<count($adatos);$i++){
                if($i==0){
                    fwrite($myfile, $adatos[$i].";");
                }
                else{
                    fwrite($myfile, "\n".$adatos[$i].";");
                }
            }
            fclose( $myfile);
        }else{
            $luser[0]="admpre";
            $luser[1]="99999";
            $an=$an+1;
            $adatos[$an]=$luser[0].";".$luser[1];
            for ($i=0;$i<count($adatos);$i++){
                if($i==0){
                    fwrite($myfile, $adatos[$i].";");
                }else{
                    fwrite($myfile, "\n".$adatos[$i].";");
                }
            }
            fclose( $myfile);
        }
    }
    ?>
    <!--fin proceso de eliminacion de datos administrador-->

    <!--modificacion estado apto-->
    <?php
    if(isset($_GET['uapto'])){
    $datos;
    $n=-1;
    $myfile= fopen("users.txt","r");
    while (!feof($myfile)){
        $luser=explode(";",fgets($myfile));
        if(strcmp($luser[0],$_GET['uapto'])==0){
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
    }
    ?>
    <!--fin modificacion estado apto-->

    <!--modificacion estado noapto-->
    <?php
    if(isset($_GET['unapto'])){
    $datos;
    $n=-1;
    $myfile= fopen("users.txt","r");
    while (!feof($myfile)){
        $luser=explode(";",fgets($myfile));
        if(strcmp($luser[0],$_GET['unapto'])==0){
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
    }
    ?>
    <!--fin modificacion estado noapto-->

    <!--texto de bienvenida-->
    <h1 class="text-center">Bienvenido a la gestión de usuarios</h1>
    <!--configuracion contenido en el centro-->
    <div class="container">
        <div class="row align-items-start">
            <!--configuracion primera columna-->
            <div class="col">
                <br>
                <!--tabla de usuarios y administradores-->
                <?php
                $myfile=fopen("users.txt","r");
                //contenido en el centro
                echo"
                <div class='m-0 row justify-content-center'>
                <div class='col-auto btn-light p-3 text-center'>
                <table class='table table-striped'>
                <tr>
                <th>Usuario</th>
                <th>Contraseña</th>
                <th>Estado</th>
                <th>Modificar Estado</th>
                <th colspan='2'>Opciónes Adicionales</th>
                </tr>";
                
                //cargar datos de los usuarios a la tabla 1
                while(!feof($myfile)){
                    $luser=explode(";",fgets($myfile));
                    echo "
                    <tr>
                    <td>".$luser[0]."</td>
                    <td>".$luser[1]."</td>
                    <td>".$luser[2]."</td>
                    <td><div class='dropdown'>
                    <a class='btn btn-secondary dropdown-toggle' href='#' role='button' id='dropdownMenuLink' data-bs-toggle='dropdown' aria-expanded='false'>Seleccionar</a>
                    <div class='dropdown-menu' aria-labelledby='dropdownMenuButton'>
                    <input class='dropdown-item' value='apto' onclick='uapto(\"".$luser[0]."\")'/></input>
                    <input class='dropdown-item' value='no apto' onclick='unapto(\"".$luser[0]."\")'/></input>
                    </div>
                    </div>
                    </td>
                    <td><input type='button' class='btn btn-secondary' value='Eliminar' onclick='eliminar(\"".$luser[0]."\")'/></td>
                    <td><input type='button' class='btn btn-secondary' value='Modificar' onclick='modificar(\"".$luser[0]."\" ,\"".$luser[1]."\")'/></td>
                    </tr>";
                }
                echo "
                </table>
                </div>
                </div>";

                //cargar datos de los administradores a la tabla 2
                $myfile=fopen("admins.txt","r");
                echo"
                <br>
                <div class='m-0 row justify-content-center'>
                <div class='col-auto btn-light p-3 text-center'>
                <table class='table table-striped'>
                <tr>
                <th>Administrador</th>
                <th>Contraseña</th>
                <th colspan='2'>Opciónes Adicionales</th>
                </tr>";
                while(!feof($myfile)){
                    $luser=explode(";",fgets($myfile));
                    echo"
                    <tr>
                    <td>".$luser[0]."</td>
                    <td>".$luser[1]."</td>
                    <td><input type='button' class='btn btn-secondary' value='Eliminar' onclick='aeliminar(\"".$luser[0]."\")'/></td>
                    <td><input type='button' class='btn btn-secondary' value='Modificar' onclick='amodificar(\"".$luser[0]."\" ,\"".$luser[1]."\")'/></td>
                    </tr>";
                }
                echo"
                </table>
                </div>
                </div>";
                ?>
                <!--fin primera columna-->
                </div>
                <!--segunda columna-->
                <div class="col">
                    <!--Panel de creacion y modificacion de usuario-->
                    <form method='get' action='crear.php'>
                        <br>
                        <div class=" m-0 row justify-content-center">
                            <div class="col-auto btn-light p-3 text-center">
                            <h3 id="crud" class="text-center"> Crear nuevo Usuario </h3>
                            <div class="form-floating mb-3">
                                    <input type='text' id="vt" name='ntemp' class='form-control' placeholder='Usuario a modificar' />
                                    <label for="floatingInput">Usuario a modificar</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type='text' id='us' name='nuser' required="" pattern="[a-z]+" class='form-control' placeholder='Ingresar un usuario' />
                                    <label for="floatingInput">Ingresar un usuario</label>
                                </div>
                                <div class="form-floating">
                                    <input type='password' id="ps" name='npass' required="" pattern="[0-9]+"class='form-control' placeholder='Ingresar una contraseña' />
                                    <label for="floatingInput">Ingresar una contraseña</label>
                                </div>
                                <br>
                                <button class="w-100 btn btn-lg btn-success" name='envio' type='submit' id="env" value="crear">Crear</button>
                                <br>
                                <br>
                                <button class="w-100 btn btn-lg btn-success" name='modificar' type='submit' id="mod" value="modificar">Modificar</button>
                                <p class="mt-2">El usuario debe incluir solo letras en minúscula y la contraseña solo números.</p>

                            </div>
                        </div>
                    </form>
                    <!--fin Panel de creacion y modificacion de usuario-->

                    <!--Panel de creacion y modificacion de administrador-->
                    <form method='get' action='acrear.php'>
                        <br>
                        <div class=" m-0 row justify-content-center">
                            <div class="col-auto btn-light p-3 text-center">
                            <h3 id="acrud" class="text-center"> Crear nuevo Administrador </h3>
                            <div class="form-floating mb-3">
                                    <input type='text' id="avt" name='antemp' class='form-control' placeholder='Administrador a modificar' />
                                    <label for="floatingInput">Administrador a modificar</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type='text' id='aus' name='anuser' required="" pattern="[a-z]+" class='form-control' placeholder='Ingresar un administrador' />
                                    <label for="floatingInput">Ingresar un administrador</label>
                                </div>
                                <div class="form-floating">
                                    <input type='password' id="aps" name='anpass' required="" pattern="[0-9]+"class='form-control' placeholder='Ingresar una contraseña' />
                                    <label for="floatingInput">Ingresar una contraseña</label>
                                </div>
                                <br>
                                <button class="w-100 btn btn-lg btn-success" name='aenvio' type='submit' id="aenv" value="acrear">Crear</button>
                                <br>
                                <br>
                                <button class="w-100 btn btn-lg btn-success" name='amodificar' type='submit' id="amod" value="amodificar">Modificar</button>
                                <p class="mt-2">El administrador debe incluir solo letras en minúscula y la contraseña solo números.</p>
                                <p class="mt-1">Tenga en cuenta que el sistema añade tomáticamente el término “adm” al momento de modificar y/o crear un nuevo administrador.</p>

                            </div>
                        </div>
                    </form>
                    <!--fin Panel de creacion y modificacion de administrador-->                    

                    <br>
                    <div class=" m-0 row justify-content-center">
                        <div class="col-auto p-3 text-center">
                        <a class='btn btn-lg btn-dark' href='index.html' role='button'>< Volver a la página principal</a>
                        </div>
                    </div>
                
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    </body>
    </html>