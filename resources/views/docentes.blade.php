<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Tutores - Examen</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <div class="mb-3 mt-5">
                    <h2>Docentes</h2>
                </div>
                <form action="">
                    <label for="denominacion" class="form-label">Denominacion</label>
                    <input type="text" id="denominacion" name="denominacion" class="form-control"/>
                    
                    <label for="codigo" class="form-label">Codigo</label>
                    <input type="text" id="codigo" name="codigo" class="form-control"/>
                    
                    <label for="titularidad" class="form-label">Estado</label>
                    <select class="form-select form-select-sm" id="titularidad" name="titularidad">
                        <option value="publico">Publico</option>
                        <option value="privado">Privado</option>
                        <option value="concertado">Concertado</option>
                    </select>

                    <label for="dir_postal" class="form-label">Direccion Postal</label>
                    <input type="text" id="dir_postal" name="dir_postal" class="form-control"/>

                    <label for="CP" class="form-label">Codigo Postal</label>
                    <input type="text" id="CP" name="CP" class="form-control"/>
                    
                    <label for="director_nom" class="form-label">Nombre Director</label>
                    <input type="text" id="director_nom" name="director_nom" class="form-control"/>

                    <label for="director_apell" class="form-label">Primer apellido</label>
                    <input type="text" id="director_apell" name="director_apell" class="form-control"/>

                    <label for="director_apell2" class="form-label">Segundo apellido</label>
                    <input type="text" id="director_apell2" name="director_apell2" class="form-control"/>

                    <label for="tipo_identificador" class="form-label">Tipo de documento</label>
                    <select class="form-select form-select-sm" id="tipo_identificador" name="tipo_identificador">
                        <option value="nif">NIF</option>
                        <option value="nie">NIE</option>
                        <option value="pasaporte">Pasaporte</option>
                    </select>
                </form>
            </div>
            <div class="col-4"></div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>
