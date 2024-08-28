<x-admin.app-layout>
    <h1 class="text-base font-semibold leading-7 text-gray-900">Editar producto</h1>
    <p class="mt-1 text-sm leading-6 text-gray-600">Los nuevos productos son mostrados automáticamente, si no desea mostrarlos desmarque la casilla 'activo'.</p>
    <form action="/productos-admin/{{$producto->id}}" method="POST" class="mt-8">
        @csrf
        @method('PUT')
        <label for="nombre" class="block text-sm font-medium leading-6 text-gray-900 mb-5">
            Título
            <input value="{{old('nombre', $producto->nombre)}}" type="text" name="nombre" class="p-1 rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 max-w-md w-full block">
        </label>
        <label for="descripcion" class="block text-sm font-medium leading-6 text-gray-900 mb-5">
            Descripción
            <textarea name="descripcion" cols="30" rows="10" class="p-1 rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 max-w-md w-full block">{{old('descripcio', $producto->descripcion)}}
            </textarea>
        </label>
        <label for="seccion_investigacion" class="block text-sm font-medium leading-6 text-gray-900 mb-5">
            Seccion de línea de investigación
            <select type="text" name="seccion_investigacion" class="p-2 rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 max-w-md w-full block">
                <option value="0">Seleccionar</option>
                @foreach ($seccion_investigacion as $seccion)
                    <option value="{{$seccion->id}}" {{$seccion->id === $producto->seccion_lineas_investigacion_id ? 'selected' : ''}}>{{$seccion->nombre}}</option>
                @endforeach
            </select>
        </label>
        <label for="activo" class="block text-sm font-medium leading-6 text-gray-900 mb-5">
            Activo
            <input type="checkbox" name="activo" {{$producto->activo ? 'checked' : ''}}>
        </label>
        <input type="submit" value="Guardar" class="mr-1 rounded-md bg-[#232943] px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-[#C8DED3] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#C8DED3]">
        <a 
            class="rounded-md px-3.5 py-2.5 text-sm font-semibold shadow bg-red-200 hover:bg-red-300 text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2" 
            href="/productos-admin">
                Cancelar
        </a>
    </form>
</x-admin.app-layout>