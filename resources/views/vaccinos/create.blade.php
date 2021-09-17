<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <center style="margin-top:3%">
        <form method="POST" action="/vaccinos">
        @csrf

                <label for="tipologia">Tipologia:</label>
                <select name="tipologia" id="tipologia" required placeholder="tipologia">
                    <option value="" selected>
                    <option value="Pfizer"> Pfizer
                    <option value="J&J"> J&J
                    <option value="AstraZeneca"> AstraZeneca
                    <option value="Moderna"> Moderna
                </select>
                <label for="medico_id">Medico</label>

                <select name="medico_id" id="medico_id" required placeholder="medico_id">
                    <option value="" selected>
                    @foreach ($medicos as $medico)
                        <option value="{{$medico->id}}">{{$medico->id}} - {{$medico->nome}} {{$medico->cognome}}
                    @endforeach
                </select>


                <label for="paziente_id">Paziente</label>

                <select name="paziente_id" id="paziente_id" required placeholder="paziente_id">
                    <option value="" selected>
                    @foreach ($pazientes as $paziente)
                        <option value="{{$paziente->id}}">{{$paziente->id}} - {{$paziente->nome}} {{$paziente->cognome}}
                    @endforeach
                </select>
                <label for="data_somministrazione">Data somministrazione</label>
                <input type="date" name="data_somministrazione" min="2021-01-01" max=<?php echo date('Y-m-d'); ?> required>


        <button class="btn btn-primary">Create</button>
        </form>
        </center>
    </body>
</html>
