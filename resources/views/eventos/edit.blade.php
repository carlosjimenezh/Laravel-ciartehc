<x-admin.app-layout>
    <h2 class="text-base font-semibold leading-7 text-gray-900">Editar evento</h2>
    <p class="mt-1 text-sm leading-6 text-gray-600">{{$evento->titulo}}</p>
    <form class="mt-8" action="/eventos/{{$evento->id}}" method="POST" enctype="multipart/form-data">
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
            <img src="{{$evento->imagen}}" alt="" width="100px">
            <p>*Seleccionar otra imagen solo si desea reemplazar la actual</p>
            <input type="file" name="imagen" id="imagen" accept="image" class="p-1 rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 max-w-[200px] w-full block">
            @error('imagen')
                <p class="absolute text-xs text-red-600 dark:text-red-400">{{$message}}</p>
            @enderror
        </label>
        <label for="activo" class="block text-sm font-medium leading-6 text-gray-900 mb-5">
            Activo
            <input type="checkbox" name="activo" id="activo" {{$evento->activo ? 'checked' : ''}}>
        </label> <br>
        <input type="submit" value="Guardar" class="mr-1 rounded-md bg-[#232943] px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-[#C8DED3] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#C8DED3]">
        <a 
            class="rounded-md px-3.5 py-2.5 text-sm font-semibold shadow bg-red-200 hover:bg-red-300 text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2" 
            href="/eventos">
                Cancelar
        </a>
    </form>
</x-admin.app-layout>