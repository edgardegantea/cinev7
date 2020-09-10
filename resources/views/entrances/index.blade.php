@forelse($entrances as $e)
    <li>{{ $e->hourEntrance }}</li>
@empty
    <h1>No hay datos para mostrar</h1>
@endforelse