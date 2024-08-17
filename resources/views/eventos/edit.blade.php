<x-admin.app-layout>
    <h2 class="text-base font-semibold leading-7 text-gray-900">Editar evento</h2>
    <p class="mt-1 text-sm leading-6 text-gray-600">{{$evento->titulo}}</p>
    <form class="mt-8" action="/eventos/{{$evento->id}}" method="POST">
        @csrf
        @method('PUT')
        <label for="titulo" class="block text-sm font-medium leading-6 text-gray-900 mb-5">
            Título
            <input type="text" name="titulo" id="titulo" value="{{old('titulo',$evento->titulo)}}" class="p-1 rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 max-w-md w-full block">
            @error('titulo')
                <p class="absolute text-xs text-red-600 dark:text-red-400">{{$message}}</p>
            @enderror
        </label>
        <label for="fecha" class="block text-sm font-medium leading-6 text-gray-900 mb-5">
            Fecha de evento
            <input type="date" name="fecha" id="fecha" value="{{$evento->fecha_evento ? old('fecha',$evento->fecha_evento->format('Y-m-d')) : old('fecha')}}" class="p-1 rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 max-w-[130px] w-full block text-gray-300">
        </label>
        <label for="link" class="block text-sm font-medium leading-6 text-gray-900 mb-5">
            Link externo
            <input type="text" name="link" id="link" value="{{old('link', $evento->link)}}" class="p-1 rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 w-full max-w-xl block">
        </label>
        <label for="imagen" class="block text-sm font-medium leading-6 text-gray-900 mb-5">
            Imagen
            <input type="file" name="imagen" id="imagen" accept="image" class="p-1 rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 max-w-[200px] w-full block">
        </label>
        <label for="activo">
            Activo
            <input type="checkbox" name="activo" id="activo" {{$evento->activo ? 'checked' : ''}}>
        </label> <br>
        <x-admin.button href="/eventos" title="Cancelar" />
        <input type="submit" value="Guardar" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
    </form>
</x-admin.app-layout>