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
        <h4>Nueva Cancion</h4>
        <div class="row">
            <div class="col-xl-12">
                <form action="{{route('musica.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="titulo">Titulo</label>
                        <input type="text" class="form-control" name="titulo" required maxlength="50">
                    </div>
                    <div class="form-group">
                        <label for="artista">Artista</label>
                        <input type="text" class="form-control" name="artista" required >
                    </div>
                    <div class="form-group">
                        <label for="album">Album</label>
                        <input type="text" class="form-control" name="album" required >
                    </div>
                    <div class="form-group">
                        <label for="fecha">Fecha</label>
                        <input type="text" class="form-control" name="fecha" required >
                    </div>
                    <div class="form-group">
                        <label for="duracion">Duracion</label>
                        <input type="text" class="form-control" name="duracion" required>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Guardar">
                        <input type="reset" class="btn btn-default" value="Cancelar">
                        <a href="javascript:history.back()">Ir al listado</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>