<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spotify</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h4>Gestion de Canciones</h4>
        <div class="row">
            <div class="col-xl-12">
                <form action="{{route('musica.index')}}" method="get">
                    <div class="form-row">
                        <div class="col-auto my-1">
                            <a href="{{route('musica.create')}}" class="btn btn-success">Nueva cancion</a>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-xl-12">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Opciones</th>
                                <th>#</th>
                                <th>Titulo</th>
                                <th>Artista</th>
                                <th>Album</th>
                                <th>Fecha</th>
                                <th>Duracion</th> 
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($musicas as $musica)
                            <tr>
                                <td>
                                    <a href="{{route('musica.edit', $musica->id)}}" class="btn btn-warning btn-sm">Editar</a> 
                                    <form action="{{route('musica.destroy', $musica->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" class="btn btn-danger btn-sm" value="Eliminar">
                                </form>
                                </td>
                                <td>{{$musica->id}}</td>
                                <td>{{$musica->titulo}}</td>
                                <td>{{$musica->artista}}</td>
                                <td>{{$musica->album}}</td>
                                <td>{{$musica->fecha}}</td>
                                <td>{{$musica->duracion}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>