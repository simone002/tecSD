<h3>Tutti i Record:</h3>

@foreach($films as $film)
    <p>id: {{ $film->id }} - titolo: {{ $film->titolo }} </p>
@endforeach
