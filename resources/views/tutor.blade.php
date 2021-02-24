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
                    <input type="text" id="empresa" name="empresa" class="form-control" value="{{ old('empresa') }}"/>

                    <label for="tipo_documento" class="form-label">Tipo de documento</label>
                    <select class="form-select form-select-sm" id="tipo_documento" name="tipo_documento">
                        <option value="nif" {{ old("tipo_documento") == "nif" ? "selected" : "" }}>NIF</option>
                        <option value="nie" {{ old("tipo_documento") == "nie" ? "selected" : "" }}>NIE</option>
                        <option value="pasaporte" {{ old("tipo_documento") == "pasaporte" ? "selected" : "" }}>Pasaporte</option>
                    </select>

                    <label for="dni" class="form-label">Documento de identidad</label>
                    <input type="text" id="dni" name="dni" class="form-control" value="{{ old('dni') }}"/>

                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" id="nombre" name="nombre" class="form-control" value="{{ old('nombre') }}"/>

                    <label for="primer_apellido" class="form-label">Primer apellido</label>
                    <input type="text" id="primer_apellido" name="primer_apellido" class="form-control" value="{{ old('primer_apellido') }}"/>

                    <label for="segundo_apellido" class="form-label">Segundo apellido</label>
                    <input type="text" id="segundo_apellido" name="segundo_apellido" class="form-control" value="{{ old('segundo_apellido') }}"/>

                    <label for="pais_dni" class="form-label">País DNI</label>
                    <input type="text" id="pais_dni" name="pais_dni" class="form-control" value="{{ old('pais_dni') }}"/>

                    <label for="provincia" class="form-label">Província</label>
                    <input type="text" id="provincia" name="provincia" class="form-control" value="{{ old('provincia') }}"/>

                    <label for="municipio" class="form-label">Municipio</label>
                    <input type="text" id="municipio" name="municipio" class="form-control" value="{{ old('municipio') }}"/>

                    <label for="estado" class="form-label">Estado</label>
                    <select class="form-select form-select-sm" id="estado" name="estado">
                        <option value="activo" {{ old("estado") == "activo" ? "selected" : "" }}>Activo</option>
                        <option value="inactivo" {{ old("estado") == "inactivo" ? "selected" : "" }}>Inactivo</option>
                    </select>

                    <label for="telefono" class="form-label">Teléfono</label>
                    <input type="text" id="telefono" name="telefono" class="form-control" value="{{ old('telefono') }}"/>
                    <div class="form-text mb-2">Teléfono del tutor</div>

                    <label for="email" class="form-label">Mail</label>
                    <input type="email" id="email" name="email" class="form-control" value="{{ old('email') }}"/>
                    <div class="form-text mb-2">Correo electrónico del tutor</div>
                    
                    <button type="submit" class="btn btn-secondary">Enviar</button>
                </form>
                
                
            </div>
            <div class="col-4"></div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>
