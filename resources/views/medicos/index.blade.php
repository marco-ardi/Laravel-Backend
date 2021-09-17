<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <center style="margin-top:3%">
        @foreach ($medicos as $medico)
            <label for="nome">Nome:</label> <strong>{{$medico->nome}}</strong>
            <br>
            <label for="cognome">Cognome:</label> <strong>{{$medico->cognome}}</strong>
            <br>
            <label for="specializzazione">Specializzazione:</label> <strong>{{$medico->specializzazione}}</strong>
            <br>
            <button onclick="location.href='medicos/{{$medico->id}}/edit'" type="button" class="btn btn-warning">Edit</button>
            <br>
            <br>
        @endforeach
        <button onclick="location.href='/medicos/create'" type="button" class="btn btn-primary">Add a medico</button>
        <button onclick="location.href='/'" type="button" class="btn btn-info">Go back</button>
        </center>
    </body>
</html>
