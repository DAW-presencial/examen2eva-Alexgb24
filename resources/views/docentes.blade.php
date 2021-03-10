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
                
                @if ($errors->any())
                    <div class="alert alert-warning" role="alert">
                        {{ $errors }}
                    </div>
                @endif
                
                <form action="{{ route('docentes') }}" method="POST">
                    @csrf
                    <label for="denominacion" class="form-label">{{ __("denominacion") }}</label>
                    <input required type="text" id="denominacion" name="denominacion" class="form-control"  value="{{ old('denominacion') }}"/>
                    
                    @error('denominacion')
                        <div class="alert alert-danger mb-2" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                    
                    <label for="codigo" class="form-label">{{ __("codigo") }}</label>
                    <input required type="text" id="codigo" name="codigo" class="form-control" value="{{ old('codigo') }}"/>
                    
                    @error('codigo')
                        <div class="alert alert-danger mb-2" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                    
                    <label for="CIF" class="form-label">{{ __("CIF") }}</label>
                    <input required type="text" id="CIF" name="CIF" class="form-control" value="{{ old('CIF') }}"/>
                    
                    @error('CIF')
                        <div class="alert alert-danger mb-2" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                    
                    <label for="titularidad" class="form-label">{{ __("titularidad") }}</label>
                    <select required class="form-select form-select-sm" id="titularidad" name="titularidad" value="{{ old('titularidad') }}">
                        <option value="publico">{{ __("docentes.publico") }}</option>
                        <option value="privado">{{ __("docentes.privado") }}</option>
                        <option value="concertado">{{ __("docentes.concertado") }}</option>
                    </select>
                    
                    @error('titularidad')
                        <div class="alert alert-danger mb-2" role="alert">
                            {{ $message }}
                        </div>
                    @enderror

                    <label for="dir_postal" class="form-label">{{ __("dir_postal") }}</label>
                    <input required type="text" id="dir_postal" name="dir_postal" class="form-control" value="{{ old('dir_postal') }}"/>
                    
                    @error('dir_postal')
                        <div class="alert alert-danger mb-2" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                    
                    <label for="CP" class="form-label">{{ __("CP") }}</label>
                    <input required type="text" id="CP" name="CP" class="form-control" value="{{ old('CP') }}"/>
                    
                    @error('CP')
                        <div class="alert alert-danger mb-2" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                    
                    <label for="director_nom" class="form-label">{{ __("director_nom") }}</label>
                    <input required type="text" id="director_nom" name="director_nom" class="form-control" value="{{ old('director_nom') }}"/>

                    @error('director_nom')
                        <div class="alert alert-danger mb-2" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                    
                    <label for="director_apell" class="form-label">{{ __("director_apell") }}</label>
                    <input required type="text" id="director_apell" name="director_apell" class="form-control" value="{{ old('director_apell') }}"/>
                    
                    @error('director_apell')
                        <div class="alert alert-danger mb-2" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                    
                    <label for="director_apell2" class="form-label">{{ __("director_apell2") }}</label>
                    <input required type="text" id="director_apell2" name="director_apell2" class="form-control" value="{{ old('director_apell2') }}"/>
                    
                    @error('director_apell2')
                        <div class="alert alert-danger mb-2" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                    
                    <label for="tipo_identificador" class="form-label">{{ __("tipo_identificador") }}</label>
                    <select required class="form-select form-select-sm" id="tipo_identificador" name="tipo_identificador" value="{{ old('tipo_identificador') }}">
                        <option value="nif">{{ __("docentes.nif") }}</option>
                        <option value="nie">{{ __("docentes.nie") }}</option>
                        <option value="pasaporte">{{ __("docentes.pasaporte") }}</option>
                    </select>
                    
                    @error('tipo_identificador')
                        <div class="alert alert-danger mb-2" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                    
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
            <div class="col-4"></div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>
