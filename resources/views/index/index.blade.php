<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel IMDB</title>
</head>
<body>

    <h1>Welcome to the IMDB website</h1>

    <h2>made in Laravel</h2>

    <h2>Top movies today:</h2>

    <ul>
        <?php foreach ($top_movies as $movie) : ?>

            <li>
                <?= $movie->name ?>
            </li>

        <?php endforeach; ?>
    </ul>
</body>
</html>