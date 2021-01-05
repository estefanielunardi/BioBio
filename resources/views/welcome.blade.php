<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">

        <title>BioBio</title>

    </head>

    <body>

        <div id="containerButtons">
            <div class="container justify-content-center">
                <div>
                    <button type="button" class="btn btn-info col align-self-center text-dark" id="butonBiobio">BioBio</button>
                </div>
                <div>
                    <button type="button" class="btn btn-warning col align-self-center text-dark" id="butonPlay">Play</button>
                </div>
            </div>
        </div>

    </body>
</html>
