<x-admin.app-layout>
    <h1 class="text-base font-semibold leading-7 text-gray-900">Nuevo miembro team</h1>
    <p class="mt-1 text-sm leading-6 text-gray-600">Los nuevos eventos son mostrados automáticamente, si no desea mostrarlos desmarque la casilla 'activo'.</p>
    <form action="/team" method="POST" class="mt-8">
        @csrf
        <label for="nombre" class="block text-sm font-medium leading-6 text-gray-900 mb-5">
            Nombre
            <input type="text" name="nombre" class="p-1 rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 max-w-md w-full block">
        </label>
        <label for="cargo" class="block text-sm font-medium leading-6 text-gray-900 mb-5">
            Cargo
            <input type="text" name="cargo" class="p-1 rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 max-w-md w-full block">
        </label>
        <label for="prefijo" class="block text-sm font-medium leading-6 text-gray-900 mb-5">
            Prefijo (Dr. Dra. Ing. etc.)
            <input type="text" name="prefijo" class="p-1 rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 max-w-xs w-full block">
        </label>
        <label for="ubicacion" class="block text-sm font-medium leading-6 text-gray-900 mb-5">
            Ubicación
            <input type="text" name="ubicacion" class="p-1 rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 max-w-md w-full block">
        </label>
        <label for="telefono" class="block text-sm font-medium leading-6 text-gray-900 mb-5">
            Teléfono
            <input type="tel" name="telefono" class="p-1 rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 max-w-md w-full block">
        </label>
        <label for="extension" class="block text-sm font-medium leading-6 text-gray-900 mb-5">
            Extensión
            <input type="text" name="extension" class="p-1 rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 max-w-md w-full block">
        </label>
        <label for="email" class="block text-sm font-medium leading-6 text-gray-900 mb-5">
            Email
            <input type="email" name="email" class="p-1 rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 max-w-md w-full block">
        </label>
        <label for="imagen" class="block text-sm font-medium leading-6 text-gray-900 mb-5">
            Imagen
            <input type="file" name="imagen" class="p-1 rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 max-w-md w-full block">
        </label>
        <label for="semblanza" class="block text-sm font-medium leading-6 text-gray-900 mb-5">
            Semblanza
            <textarea name="semblanza" cols="30" rows="10" class="p-1 rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 max-w-md w-full block"></textarea>
        </label>
        <label for="cv" class="block text-sm font-medium leading-6 text-gray-900 mb-5">
            C.V.
            <input type="file" name="cv" class="p-1 rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 max-w-md w-full block">
        </label>
        <label for="activo" class="block text-sm font-medium leading-6 text-gray-900 mb-5">
            Activo
            <input type="checkbox" name="activo" checked>
        </label>
        <input type="submit" value="Guardar" class="mr-1 rounded-md bg-[#232943] px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-[#C8DED3] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#C8DED3]">
        <a 
            class="rounded-md px-3.5 py-2.5 text-sm font-semibold shadow bg-red-200 hover:bg-red-300 text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2" 
            href="/team">
                Cancelar
        </a>
    </form>
</x-admin.app-layout>