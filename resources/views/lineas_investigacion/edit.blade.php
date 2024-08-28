<x-admin.app-layout>
    <h1 class="text-base font-semibold leading-7 text-gray-900">Editar línea de investigación</h1>
    <p class="mt-1 text-sm leading-6 text-gray-600">{{$lineas_investigacion->nombre}}</p>
    <form action="/lineas-investigacion/{{$lineas_investigacion->id}}" method="POST" class="mt-8">
        @csrf
        @method('PUT')
        <label for="nombre" class="block text-sm font-medium leading-6 text-gray-900 mb-5">
            Nombre
            <input value="{{old('nombre', $lineas_investigacion->nombre)}}" type="text" name="nombre" class="p-1 rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 max-w-md w-full block">
            @error('nombre')
                <p class="absolute text-xs text-red-600 dark:text-red-400">{{$message}}</p>
            @enderror
        </label>
        <label for="descripcion" class="block text-sm font-medium leading-6 text-gray-900 mb-5">
            Descripción
            <textarea name="descripcion" cols="30" rows="10" class="p-1 rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 max-w-md w-full block">{{old('descripcion', $lineas_investigacion->descripcion)}}
            </textarea>
            @error('descripcion')
                <p class="absolute text-xs text-red-600 dark:text-red-400">{{$message}}</p>
            @enderror
        </label>
        <input type="submit" value="Guardar" class="mr-1 rounded-md bg-[#232943] px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-[#C8DED3] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#C8DED3]">
        <a 
            class="rounded-md px-3.5 py-2.5 text-sm font-semibold shadow bg-red-200 hover:bg-red-300 text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2" 
            href="/lineas-investigacion">
                Cancelar
        </a>
    </form>
</x-admin.app-layout>