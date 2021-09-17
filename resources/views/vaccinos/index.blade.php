<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <center style="margin-top:3%">
        @foreach ($vaccinos as $vaccino)
            <label for="tipologia">Tipologia:</label> <strong>{{$vaccino->tipologia}}</strong>
            <br>                                                                                                    <!-- $vaccino->medico->nome -->
            <label for="medico_id">Medico:</label> <strong>{{$vaccino->medico_id}}) @foreach ($medicos as $medico) @if($vaccino->medico_id === $medico->id) {{$medico->nome}} {{$medico->cognome}}@endif @endforeach </strong>
            <br>
            <label for="paziente_id">Paziente:</label> <strong>{{$vaccino->paziente_id}}) @foreach ($pazientes as $paziente) @if($vaccino->paziente_id === $paziente->id) {{$paziente->nome}} {{$paziente->cognome}} @endif @endforeach </strong>
            <br>
            <label for="data_somministrazione">Data somministrazione:</label> <strong>{{$vaccino->data_somministrazione}}</strong>
            <br>
            <button onclick="location.href='vaccinos/{{$vaccino->id}}/edit'" type="button" class="btn btn-warning">Edit</button>
            <br>
            <br>
        @endforeach
        <button onclick="location.href='/vaccinos/create'" type="button" class="btn btn-primary">Add a vaccino</button>
        <button onclick="location.href='/'" type="button" class="btn btn-info">Go back</button>
        </center>
    </body>
</html>
