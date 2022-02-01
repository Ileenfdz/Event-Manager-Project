<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tech Event Manager</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
</head>
<body>
    <x-header/>
    <div class="d-flex justify-content-center">
        <div>
                <button class="btnEvento" type="button"><a id="link_admin" href='/modal'>Crear nuevo evento</a></button>
        </div>
    </div>
    <div class="mb-3 form-check color-white">
            <input type="checkbox" class="form-check-input">
            <label class="form-check-label" id="check_icon" for="Check"></label>
    </div>
    <div class="icons_group">
        <i class="far fa-edit"></i>
        <i class="far fa-trash-alt"></i>
    </div>

    <div>
        <button class="btnDestacados m-0 text-white" type="button">Añadir a destacados</button>
    </div>
    <x-footer/>
    </body>
</html>
