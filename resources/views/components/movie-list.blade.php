<div>
    <h3>Lista filmova</h3>
    @foreach ($movies as $movie)
        <p>{{ $movie->name }}</p>
    @endforeach
</div>