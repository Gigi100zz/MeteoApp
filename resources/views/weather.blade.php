<div class="container">
    <h1>Meteo attuale per {{ $city}}</h1>

    @if (isset($weather))
    <div class="card mb-3">
        <div class="card-body">
            <h2>{{ $weather['name'] }}</h2>
            <p>Temperatura: {{$weather['main']['temp']}} C°</p>
            <p>Percepita: {{$weather['main']['feels_like']}}°C</p>
            <p>Condizioni: {{$weather['weather'][0]['description']}}%</p>
            <p>Umidità: {{$weather['main']['pressure']}} hPa</p>
            <p>Vento: {{$weather['wind']['speed']}} m/s</p>
        </div>
    </div>
    @else
    <div class="alert alert-danger">
        <strong>Errore!</strong> Impossibile recuperare i dati meteo per la città specificata.
    </div>
    @endif
</div>