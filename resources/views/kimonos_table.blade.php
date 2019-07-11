<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Listado de Kimonos</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">

    </head>
    <body>

        <div id="app">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Listado de Kimonos</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                    
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Código</th>
                                    <th>Nombre</th>
                                    <th>Talla</th>
                                    <th>Color</th>
                                    <th>Precio</th>
                                    <th>¿Viene con gi bag?</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="kimono in kimonos">
                                    <td>@{{kimono.id}}</td>
                                    <td>@{{kimono.giBrand +' '+ kimono.giModel}}</td>
                                    <td>@{{kimono.giSize}}</td>
                                    <td>@{{kimono.giColor}}</td>
                                    <td>@{{'S/.'+kimono.giPrice+'.00'}}</td>
                                    <td>@{{kimono.giHaveBag}}</td>

                                </tr>
                            </tbody>
                        </table>
                    
                    </div>
                    <button onclick="location.href='{{url('/form')}}'" >Agregar Kimonos</button>
                </div>
            </div>

            
        </div>
        <script src="/js/app.js"></script>
    </body>
</html>