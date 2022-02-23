@extends('../layouts/default', ['title' => 'IMDB'])

@section('content')
    <h1>Top rated movies</h1>

    <ul>

        @foreach ($movies as $movie)

            <li>
                {{ $movie->name }}<br>

                @if ($movie->rating > 9)
                    Rating: {{ $movie->getFormattedRating() }} / 10
                @endif

                <h3>Genres:</h3>
                <ul>
                    @foreach ($movie->genres as $genre)
                        <li>{{ $genre->name }}</li>
                    @endforeach
                </ul>
            </li>

        @endforeach

        @php

            $i = 12;

        @endphp

    </ul>
@endsection
