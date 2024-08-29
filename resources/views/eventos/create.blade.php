<x-admin.app-layout>
    <h2 class="text-base font-semibold leading-7 text-gray-900">Nuevo evento</h2>
    <p class="mt-1 text-sm leading-6 text-gray-600">Los nuevos eventos son mostrados automáticamente, si no desea mostrarlos desmarque la casilla 'activo'.</p>
    <form action="/eventos" method="POST" name="eventos" id="eventos" class="mt-8" enctype="multipart/form-data">
        @csrf
        <label for="titulo" class="block text-sm font-medium leading-6 text-gray-900 mb-5">
            Título
            <input type="text" name="titulo" id="titulo" class="p-1 rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 max-w-md w-full block">
            @error('titulo')
                <p class="absolute text-xs text-red-600 dark:text-red-400">{{$message}}</p>
            @enderror
        </label>
        <label for="fecha" class="block text-sm font-medium leading-6 text-gray-900 mb-5">
            Fecha de evento
            <input value="{{old('fecha')}}" type="date" name="fecha" id="fecha" class="p-1 rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 max-w-[130px] w-full block text-gray-300">
        </label>
        <label for="link" class="block text-sm font-medium leading-6 text-gray-900 mb-5">
            Link externo
            <input value="{{old('link')}}" type="text" name="link" id="link" class="p-1 rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 w-full max-w-xl block">
        </label>
        <label for="imagen" class="block text-sm font-medium leading-6 text-gray-900 mb-5">
            Imagen
            <input accept="image/png, image/jpeg, image/jpg" type="file" name="imagen" id="imagen" accept="image" class="p-1 rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 max-w-[200px] w-full block">
            @error('imagen')
                <p class="absolute text-xs text-red-600 dark:text-red-400">{{$message}}</p>
            @enderror
        </label>
        <label for="activo" class="block text-sm font-medium leading-6 text-gray-900 mb-5">
            Activo
            <input type="checkbox" name="activo" id="activo" checked>
        </label>
        <input type="submit" value="Guardar" class="mr-1 rounded-md bg-[#232943] px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-[#C8DED3] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#C8DED3]">
        <a 
            class="rounded-md px-3.5 py-2.5 text-sm font-semibold shadow bg-red-200 hover:bg-red-300 text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2" 
            href="/eventos">
                Cancelar
        </a>
    </form>
</x-admin.app-layout>
