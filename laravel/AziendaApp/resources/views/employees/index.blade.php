<h1> Impiegati </h1>

    @foreach ($employees as $e )
        <ul>
            <li> <a href="/employees/{{$e->id}}"> {{$e->name}} </li>
        </ul>
    @endforeach
