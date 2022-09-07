<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>formulario</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">    
    </head>
    <body>
        <br>
        <main class='container'>
            <div class='bg-light p-5 rounded mt-3'>
                <h1>Por favor llene la siguiente encuesta de salubridad</h1>
                <p class='lead'>La siguiente encuesta se realiza con la finalidad de determinar si usted es apto para ingresar.</p>
                <form action="resultados.php" method="post">
                    <div class="form-floating">
                        <input type="text" name="usuario" required="" pattern="[a-z]+" class="form-control" placeholder="Coloque nuevamente su nombre de usuario">
                        <label for="floatingInput">Coloque nuevamente su nombre de usuario</label>
                    </div>
                    <br>
                    <h5>1. Estuvo en contacto con personas con Covid.</h5>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="preguntauno" value="v" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">Si</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="preguntauno" value="f" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">No</label>
                    </div>
                    <br>
                    <h5>2. Ha tenido dolor de cabeza o de estómago.</h5>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="preguntados" value="v" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">Si</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="preguntados" value="f" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">No</label>
                    </div>
                    <br>
                    <h5>3. Se ha sentido sin energías los últimos días.</h5>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="preguntatres" value="v" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">Si</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="preguntatres" value="f" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">No</label>
                    </div>
                    <br>
                    <h5>4. Ya se a aplicado la vacuna contra el Covid.</h5>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="preguntacuatro" value="v" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">Si</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="preguntacuatro" value="f" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">No</label>
                    </div>
                    <br>
                    <button type="submit" value="Enviar" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </main>
    </body>
</html>
