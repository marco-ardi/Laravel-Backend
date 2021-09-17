<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <center style="margin-top:3%">
        <form method="POST" action="/pazientes/">
            @csrf
            <label for="nome">Nome:</label>
            <input name="nome" id="nome" required>
            <label for="cognome">Cognome:</label>
            <input name="cognome" id="cognome" required>
            <button class="btn btn-primary">Create</button>
        </form>
        <button onclick="location.href='/pazientes'" type="button" class="btn btn-info">Go back</button>
        </center>
    </body>
</html>
