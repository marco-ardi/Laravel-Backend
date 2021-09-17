<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <center style="margin-top:3%">
        <form method="POST" action="/pazientes/{{$paziente->id}}">
        @csrf
        @method('PUT')
        <label for="nome">Nome:</label>
        <input name="nome" id="nome" required value="{{$paziente->nome}}">
        <label for="cognome">Cognome:</label>
        <input name="cognome" id="cognome" required value="{{$paziente->cognome}}">
        <button class="btn btn-primary">Update</button>
        </form>
        <form method="POST" action="/pazientes/{{$paziente->id}}">
        @method("DELETE")
        @csrf
        <button class="btn btn-danger">Delete</button>
        </form>
        <button onclick="location.href='/pazientes'" type="button" class="btn btn-info">Go back</button>
        </center>
    </body>
</html>
