@extends('../layouts/default')

@section('content')
    <h1>Welcome to the IMDB website</h1>

    <h2>made in Laravel</h2>


        @include('../includes/header')
    <h2>Top movies today:</h2>

    <ul>
        <?php foreach ($top_movies as $movie) : ?>

            <li>
                <?= $movie->name ?>
            </li>

        <?php endforeach; ?>
    </ul>
@endsection
