<h3>Formulario para registrar nueva película</h3>
<br><br>

<form method="post" action="{{ route('movies.store') }}">

    @csrf

    <div>
        <label for="">Película:</label>
        <input placeholder="Ingrese el nombre de la película" type="text" name="name" id="" maxlength="200" minlength="2" required>
    </div>

    <div>
        <label>Sinopsis:</label>
        <textarea placeholder="Agregue la sinopsis" name="synopsis" id="" cols="30" minlength="10" rows="5"></textarea>
    </div>

    <div>
        <label for="">Categoría:</label>
        <select required name="category" id="">
            <option value="">Elija una categoría</option>
            <option value="Estrenos">Estrenos</option>
            <option value="Trilogías">Trilogías</option>
            <option value="Las más vistas">Las más vistas</option>
        </select>
    </div>

    <div>
        <label for="">Director</label>
        <input type="text" name="director" id="" required maxlength="100">
    </div>

    <div>
        <label for="">Duración en horas</label>
        <input type="text" name="duration" id="" required maxlength="6">
    </div>

    <div>
        <label for="">Actores:</label>
        <textarea name="actors" id="" cols="30" required rows="10"></textarea>
    </div>

    <div>
        <label for="">Género</label>
        <select required name="genre" id="">
            <option value="">Seleccione un género</option>
            <option value="Terror">Terror</option>
            <option value="Acción">Acción</option>
            <option value="Fantasía">Fantasía</option>
            <option value="Infantil">Infantil</option>
            <option value="Ciencia Ficción">Ciencia Ficción</option>
        </select>
    </div>

    <input type="submit" value="Guardar">

</form>


