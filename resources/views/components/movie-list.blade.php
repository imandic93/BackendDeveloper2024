<div>
    <h3>Lista filmova</h3>
    @foreach ($movies as $movie)
        <p>{{ $movie['naziv'] }}</p>
    @endforeach
</div>