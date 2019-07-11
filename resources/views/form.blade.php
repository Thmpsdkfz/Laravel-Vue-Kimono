<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Listado de Participantes</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">

    </head>
    <body>
        <div id="app">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Registro de Participantes</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">

                    @if(count($errors) > 0)

                        <div class="alert alert-danger"> 
                            <ul>
                                @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>

                    @endif
                    
                        <form method="post" action="/save">
                            <input type="hidden" value="{{ csrf_token() }}" name="_token">

                            <div class="form-group">
                                <label for="giBrand">Marca</label>
                                <input type="text" class="form-control" placeholder="" name="giBrand" value="">
                            </div>

                            <div class="form-group">
                                <label for="giModel">Modelo</label>
                                <input type="text"
                                class="form-control" placeholder=""
                                name="giModel">
                            </div>

                            <div class="form-group">
                                <label for="giSize">Talla</label>
                                <Select type="text" class="form-control" name="giSize">
                                    <option v-for="option in sizes" v-model="sizes.size">@{{option.size}}
                                    </option>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label for="giColor">Color</label>
                                <input type="text" class="form-control" placeholder="" name="giColor">
                            </div>

                            <div class="form-group">
                                <label for="giPrice">Precio</label>
                                <input type="number" name="giPrice" class="form-control">
                            </div>
                            
                            <div class="form-check">
                                <input type="hidden" value="No tiene" name="giHaveBag">
                                <input type="checkbox" class="form-check-input" 
                                name="giHaveBag" v-model="checked" :value="bagAnswer()">
                                <label class="form-check-label" 
                                for="giHaveBag">¿Tiene bolso porta kimono?
                                    <span>
                                        @{{bagAnswer()}}
                                    </span>
                                </label>
                            </div>
                            
                            <button type="submit" class="btn btn-default">Enviar</button>
                        </form>                
                    </div>
                </div>
            </div>
        </div>

       

        <script src="/js/app.js"></script>
    </body>
</html>