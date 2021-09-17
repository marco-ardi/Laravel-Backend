<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <center style="margin-top:3%">
        @foreach ($pazientes as $paziente)
            <label for="nome">Nome:</label> <strong>{{$paziente->nome}}</strong>
            <br>
            <label for="cognome">Cognome:</label> <strong>{{$paziente->cognome}}</strong>
            <br>
            <button onclick="location.href='pazientes/{{$paziente->id}}/edit'" type="button" class="btn btn-warning">Edit</button>
            <br>
        @endforeach
        <br>
        <button onclick="location.href='/pazientes/create'" type="button" class="btn btn-primary">Add a paziente</button>
        <button onclick="location.href='/'" type="button" class="btn btn-info">Go back</button>
        <br>
        </center>
    </body>
</html>
