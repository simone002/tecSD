<h3>Tutti i film:</h3>

@foreach($films as $film)
    <p>id: {{ $film->id }} - titolo: {{ $film->titolo }} </p>
@endforeach
