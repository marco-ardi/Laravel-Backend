<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <center style="margin-top:3%">
        <form method="POST" action="/medicos/{{$medico->id}}">
            @method("PUT")
            @csrf
            <label for="nome">Nome:</label>
            <input name="nome" id="nome" required value="{{$medico->nome}}">
            <label for="cognome">Cognome:</label>
            <input name="cognome" id="cognome" required value="{{$medico->cognome}}">
            <label for="specializzazione">Specializzazione:</label>
                <select name="specializzazione" placeholder="specializzazione" required value="{{$medico->specializzazione}}">
                <option value="Infermiere"> Infermiere
                <option value="Virologo"> Virologo
                <option value="Anestesista"> Anestesista
                <option value="Chirurgo"> Chirurgo
                <option value="Altro"> Altro
            </select>
            <button class="btn btn-primary">Update</button>
            </form>
            <form method='POST' action="/medicos/{{$medico->id}}">
                @csrf
                @method("DELETE")
                <button class="btn btn-danger">Delete</button>
            </form>

            <button onclick="location.href='/medicos'" type="button" class="btn btn-info">Go back</button>
        </center>
    </body>
</html>
