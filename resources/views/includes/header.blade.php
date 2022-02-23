<header>
    <div>
        <a href="{{ url('/') }}"> homepage </a>
        <br>
        <a href="{{ url('/movies') }}"> list of movies </a>
        <br>
        <a href="{{ action('MovieController@show', ['id' => 1]) }}"> detail of movie id 1 </a>
    </div>
</header>
