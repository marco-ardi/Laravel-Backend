<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <center style="margin-top:3%">
        <form method="POST" action="/vaccinos/{{$vaccino->id}}">
            @method('PUT')
            @csrf
            <label for="tipologia">Tipologia:</label>
                <select name="tipologia" placeholder="tipologia" required value="{{$vaccino->tipologia}}">
                    <option value="Pfizer"> Pfizer
                    <option value="J&J"> J&J
                    <option value="AstraZeneca"> AstraZeneca
                    <option value="Moderna"> Moderna
                </select>
                <label for="medico_id">Medico</label>

                <select name="medico_id" id="medico_id" placeholder="medico_id" required value="{{$vaccino->medico_id}}">
                    @foreach ($medicos as $medico)
                        <option value="{{$medico->id}}">{{$medico->id}} - {{$medico->nome}} {{$medico->cognome}}
                    @endforeach
                </select>


                <label for="paziente_id">Paziente</label>

                <select name="paziente_id" id="paziente_id" placeholder="paziente_id" required value="{{$vaccino->paziente_id}}">
                    @foreach ($pazientes as $paziente)
                        <option value="{{$paziente->id}}">{{$paziente->id}} - {{$paziente->nome}} {{$paziente->cognome}}
                    @endforeach
                </select>
                <label for="data_somministrazione">Data somministrazione</label>
                <input type="date" name="data_somministrazione" min="2021-01-01" max=<?php echo date('Y-m-d'); ?> required value="{{$vaccino->data_somministrazione}}">

            <button class="btn btn-primary">Update</button>
        </form>
            <form method='POST' action="/vaccinos/{{$vaccino->id}}">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger">Delete</button>
            </form>
            <button onclick="location.href='/vaccinos'" type="button" class="btn btn-info">Go back</button>
        </center>
    </body>
</html>
{{--                 @foreach ($medicos as $medico)
                <select name="medico_id" id="medico_id" placeholder="medico_id">
                    <option value="null" selected>
                    <option value="{{$medico->id}}">{{$medico->id}}
                </select>
                @endforeach --}}
