<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <center style="margin-top:3%">
        <form method="POST" action="/medicos/">
        @csrf
        <label for="nome">Nome:</label>
        <input name="nome" id="nome" required>
        <label for="cognome">Cognome:</label>
        <input name="cognome" id="nome" required>
        <label for="specializzazione">Specializzazione:</label>
        <select name="specializzazione" required placeholder="specializzazione">
            <option value="" selected>
            <option value="Infermiere"> Infermiere
            <option value="Virologo"> Virologo
            <option value="Anestesista"> Anestesista
            <option value="Chirurgo"> Chirurgo
            <option value="Altro"> Altro
        </select>
        <button class="btn btn-primary">Create</button>
        <br>
        <button onclick="location.href='/medicos'" type="button" class="btn btn-info">Go back</button>
        </form>
        </center>
    </body>
</html>
