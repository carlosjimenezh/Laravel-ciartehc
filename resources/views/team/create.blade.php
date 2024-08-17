<x-admin.app-layout>
    <h1>Nuevo miembro team</h1>
    <form action="/team" method="POST">
        @csrf
        <label for="nombre">
            Nombre
            <input type="text" name="nombre">
        </label>
        <label for="cargo">
            Cargo
            <input type="text" name="cargo">
        </label>
        <label for="prefijo">
            Prefijo (Dr. Dra. Ing. etc.)
            <input type="text" name="prefijo">
        </label>
        <label for="ubicacion">
            Ubicación
            <input type="text" name="ubicacion">
        </label>
        <label for="telefono">
            Teléfono
            <input type="tel" name="telefono">
        </label>
        <label for="extension">
            Extensión
            <input type="text" name="extension">
        </label>
        <label for="email">
            Email
            <input type="email" name="email">
        </label>
        <label for="imagen">
            Imagen
            <input type="file" name="imagen">
        </label>
        <label for="semblanza">
            Semblanza
            <textarea name="semblanza" cols="30" rows="10"></textarea>
        </label>
        <label for="cv">
            C.V.
            <input type="file" name="cv">
        </label>
        <label for="activo">
            Activo
            <input type="checkbox" name="activo">
        </label>
        <input type="submit" value="Guardar">
    </form>
</x-admin.app-layout>