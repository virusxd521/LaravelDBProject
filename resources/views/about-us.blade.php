<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About us</title>
</head>
<body>

    <h1>About us</h1>

    @foreach ($team as $team_member)

        @if ($team_member['name'] != 'Tom Whitehead')

            <div class="about-us__person">
                <h2 class="about-us__person-name">{{ $team_member['name'] }}</h2>
                <div class="about-us__person-age">{{ $team_member['age'] }}</div>
                <div class="about-us__person-position">{{ $team_member['position'] }}</div>
            </div>

        @endif

    @endforeach

</body>
</html>