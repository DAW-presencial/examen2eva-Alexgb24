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
                    <h2>Tutor</h2>
                </div>
                <form action="">
                    <label for="empresa" class="form-label">Empresa</label>
                    <input type="text" id="empresa" name="empresa" class="form-control"/>

                    <label for="tipo_documento" class="form-label">Tipo de documento</label>
                    <select class="form-select form-select-sm" id="tipo_documento" name="tipo_documento">
                        <option value="nif">NIF</option>
                        <option value="nie">NIE</option>
                        <option value="pasaporte">Pasaporte</option>
                    </select>

                    <label for="tipo_documento" class="form-label">Documento de identidad</label>
                    <input type="text" id="tipo_documento" name="tipo_documento" class="form-control"/>

                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" id="nombre" name="nombre" class="form-control"/>

                    <label for="primer_apellido" class="form-label">Primer apellido</label>
                    <input type="text" id="primer_apellido" name="primer_apellido" class="form-control"/>

                    <label for="segundo_apellido" class="form-label">Segundo apellido</label>
                    <input type="text" id="segundo_apellido" name="segundo_apellido" class="form-control"/>

                    <label for="pais_dni" class="form-label">País DNI</label>
                    <input type="text" id="pais_dni" name="pais_dni" class="form-control"/>

                    <label for="provincia" class="form-label">Província</label>
                    <input type="text" id="provincia" name="provincia" class="form-control"/>

                    <label for="municipio" class="form-label">Municipio</label>
                    <input type="text" id="municipio" name="municipio" class="form-control"/>

                    <label for="estado" class="form-label">Estado</label>
                    <select class="form-select form-select-sm" id="estado" name="estado">
                        <option value="activo">Activo</option>
                        <option value="inactivo">Inactivo</option>
                    </select>
                </form>

                <label for="telefono" class="form-label">Teléfono</label>
                <input type="text" id="telefono" name="telefono" class="form-control"/>

                <label for="email" class="form-label">Mail</label>
                <input type="email" id="email" name="email" class="form-control"/><br>
            </div>
            <div class="col-4"></div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>
