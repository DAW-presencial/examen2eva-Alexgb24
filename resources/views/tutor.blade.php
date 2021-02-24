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
                
                @if ($errors->any())
                    <div class="alert alert-danger" role="alert">
                        {{ $error }}
                    </div>
                @endif
                
                <form action="{{ route('tutor') }}" method="POST">
                    @csrf
                    <label for="empresa" class="form-label">{{ __("empresa") }}</label>
                    <input required type="text" id="empresa" name="empresa" class="form-control" value="{{ old('empresa') }}"/>
                    @error('empresa')
                        <div class="alert alert-danger mb-2" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                    <label for="tipo_documento" class="form-label">{{ __("tipo_documento") }}</label>
                    <select  required class="form-select form-select-sm" id="tipo_documento" name="tipo_documento">
                        <option value="nif" {{ old("tipo_documento") == "nif" ? "selected" : "" }}>{{ __("tutores.nif") }}</option>
                        <option value="nie" {{ old("tipo_documento") == "nie" ? "selected" : "" }}>{{ __("tutores.nie") }}</option>
                        <option value="pasaporte" {{ old("tipo_documento") == "pasaporte" ? "selected" : "" }}>{{ __("tutores.pasaporte") }}</option>
                    </select>
                    @error('tipo_documento')
                        <div class="alert alert-danger mb-2" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                    <label for="dni" class="form-label">{{ __("dni") }}</label>
                    <input required type="text" id="dni" name="dni" class="form-control" value="{{ old('dni') }}"/>
                    @error('dni')
                        <div class="alert alert-danger mb-2" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                    <label for="nombre" class="form-label">{{ __("nombre") }}</label>
                    <input required type="text" id="nombre" name="nombre" class="form-control" value="{{ old('nombre') }}"/>
                    @error('nombre')
                        <div class="alert alert-danger mb-2" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                    <label for="primer_apellido" class="form-label">{{ __("primer_apellido") }}</label>
                    <input required type="text" id="primer_apellido" name="primer_apellido" class="form-control" value="{{ old('primer_apellido') }}"/>
                    @error('primer_apellido')
                        <div class="alert alert-danger mb-2" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                    <label for="segundo_apellido" class="form-label">{{ __("segundo_apellido") }}</label>
                    <input type="text" id="segundo_apellido" name="segundo_apellido" class="form-control" value="{{ old('segundo_apellido') }}"/>

                    <label for="pais_dni" class="form-label">{{ __("pais_dni") }}</label>
                    <input type="text" id="pais_dni" name="pais_dni" class="form-control" value="{{ old('pais_dni') }}"/>

                    <label for="provincia" class="form-label">{{ __("provincia") }}</label>
                    <input type="text" id="provincia" name="provincia" class="form-control" value="{{ old('provincia') }}"/>

                    <label for="municipio" class="form-label">{{ __("municipio") }}</label>
                    <input type="text" id="municipio" name="municipio" class="form-control" value="{{ old('municipio') }}"/>

                    <label for="estado" class="form-label">{{ __("estado") }}</label>
                    <select required class="form-select form-select-sm" id="estado" name="estado">
                        <option value="activo" {{ old("estado") == "activo" ? "selected" : "" }}>{{ __("tutores.activo") }}</option>
                        <option value="inactivo" {{ old("estado") == "inactivo" ? "selected" : "" }}>{{ __("tutores.inactivo") }}</option>
                    </select>
                    @error('estado')
                        <div class="alert alert-danger mb-2" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                    <label for="telefono" class="form-label">{{ __("telefono") }}</label>
                    <input required type="text" id="telefono" name="telefono" class="form-control" value="{{ old('telefono') }}"/>
                    @error('telefono')
                        <div class="alert alert-danger mb-2" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                    <label for="email" class="form-label">Mail</label>
                    <input type="email" id="email" name="email" class="form-control" value="{{ old('email') }}"/>
                    @error('email')
                        <div class="alert alert-danger mb-2" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                    <button type="submit" class="btn btn-secondary">{{ __("tutores.enviar") }}</button>
                </form>
                
                
            </div>
            <div class="col-4"></div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>
