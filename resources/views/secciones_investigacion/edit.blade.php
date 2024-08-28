<x-admin.app-layout>
    <h1 class="text-base font-semibold leading-7 text-gray-900">Editar sección de línea investigación</h1>
    <p class="mt-1 text-sm leading-6 text-gray-600">{{$secciones_investigacion->nombre}}</p>
    <form action="/secciones-investigacion/{{$secciones_investigacion->id}}" method="POST" class="mt-8">
        @csrf
        @method('PUT')
        <label for="nombre" class="block text-sm font-medium leading-6 text-gray-900 mb-5">
            Nombre
            <input value="{{old('nombre', $secciones_investigacion->nombre)}}" type="text" name="nombre" class="p-1 rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 max-w-md w-full block">
        </label>
        <label for="lineas_investigacion" class="block text-sm font-medium leading-6 text-gray-900 mb-5">
            Líneas de investigación
            <select type="text" name="lineas_investigacion" class="p-2 rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 max-w-md w-full block">
                @foreach ($lineas_investigacion as $lineas)
                    <option value="{{$lineas->id}}" {{$lineas->id === $secciones_investigacion->id ? 'selected' : ''}}>{{$lineas->nombre}}</option>
                @endforeach
            </select>
        </label>
        <input type="submit" value="Guardar" class="mr-1 rounded-md bg-[#232943] px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-[#C8DED3] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#C8DED3]">
        <a 
            class="rounded-md px-3.5 py-2.5 text-sm font-semibold shadow bg-red-200 hover:bg-red-300 text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2" 
            href="/secciones-investigacion">
                Cancelar
        </a>
    </form>
</x-admin.app-layout>