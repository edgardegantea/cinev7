<h2>Películas</h2>


@forelse($movies as $movie)

    <div>
        <h3>Película: {{ $movie->name }}. Duración: {{ $movie->duration }} hrs.</h3>
        <p><b>Sinopsis:</b> {{ $movie->synopsis }}</p>
    </div>

    <br>

@empty
    <h4>NO HAY DATOS EN LA TABLA</h4>
@endforelse


{{ $movies->links() }}
